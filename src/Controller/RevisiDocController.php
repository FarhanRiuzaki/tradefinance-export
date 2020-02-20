<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * UploadDoc Controller
 *
 * @property \App\Model\Table\UploadDocTable $UploadDoc
 *
 * @method \App\Model\Entity\UploadDoc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RevisiDocController extends AppController
{

    private $titleModule = "Upload Dokumen";
    private $primaryModel = "UploadDoc";

    public function initialize()
    {
        parent::initialize();
        $this->set([
            'titleModule' => $this->titleModule,
            'primaryModel' => $this->primaryModel,
        ]);
        $this->loadModel('UploadDoc');
        $this->loadModel('Maker');
        $this->loadModel('Jhdata');
        $this->loadModel('Mt700');
    }

    function beforeFilter(\Cake\Event\Event $event){
        parent::beforeFilter($event);
    
        if(isset($this->Security) && $this->request->isAjax() && ($this->action = 'edit' || $this->action = 'delete')){
    
            $this->Security->config('validatePost',false);
            //$this->getEventManager()->off($this->Csrf);
    
        }

        if ($this->action = 'add') {
            $this->Security->config('validatePost',false);
            # code...   
        }
    
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
        if($this->request->is('ajax')){
            $source = $this->Maker
            ->find('all')->where([
                'id = (
                    SELECT maker_id FROM upload_doc where maker_id = Maker.id LIMIT 1
                )'
            ]);;

            $searchAble = [
            ];
            $data = [
                'source'=>$source,
                'searchAble' => $searchAble,
                'defaultField' => $this->primaryModel.'.id',
                'defaultSort' => 'desc',
                'defaultSearch' => [
                    [    
                        'keyField' => 'status',
                        'condition' => '=',
                        'value' => 3
                    ]
                ],
                'contain' => []
                    
            ];
            $dataTable   = $this->Datatables->make($data);  
            $this->set('aaData',$dataTable['aaData']);
            $this->set('iTotalDisplayRecords',$dataTable['iTotalDisplayRecords']);
            $this->set('iTotalRecords',$dataTable['iTotalRecords']);
            $this->set('sColumns',$dataTable['sColumns']);
            $this->set('sEcho',$dataTable['sEcho']);
            $this->set('_serialize',['aaData','iTotalDisplayRecords','iTotalRecords','sColumns','sEcho']);
        }else{
            $titlesubModule = "Daftar L/C & SKBDN";
            $breadCrumbs = [
                Router::url(['action' => 'index']) => $titlesubModule
            ];
            $this->set(compact('titleModule','breadCrumbs','titlesubModule'));
        }
        
        
    }

    /**
     * View method
     *
     * @param string|null $id Upload Doc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->request->is('ajax')){
            $source = $this->UploadDoc
            ->find('all')
            ->where(['maker_id' => $id ]);
            
            $searchAble = [
            ];
            $data = [
                'source'=>$source,
                'searchAble' => $searchAble,
                'defaultField' => $this->primaryModel.'.id',
                'defaultSort' => 'desc',
                'defaultSearch' => [
                    // [    
                    //     'keyField' => 'status',
                    //     'condition' => '=',
                    //     'value' => 3
                    // ]
                ],
                'contain' => ['Maker']
                    
            ];
            $dataTable   = $this->Datatables->make($data);  
            $this->set('aaData',$dataTable['aaData']);
            $this->set('iTotalDisplayRecords',$dataTable['iTotalDisplayRecords']);
            $this->set('iTotalRecords',$dataTable['iTotalRecords']);
            $this->set('sColumns',$dataTable['sColumns']);
            $this->set('sEcho',$dataTable['sEcho']);
            $this->set('_serialize',['aaData','iTotalDisplayRecords','iTotalRecords','sColumns','sEcho']);
        }else{
            $titlesubModule = "List SOR";
            $breadCrumbs = [
                Router::url(['action' => 'index']) => $titlesubModule
            ];
            $this->set(compact('titleModule','breadCrumbs','titlesubModule'));
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($idMaker = null)
    {
        $uploadDoc = $this->UploadDoc->newEntity();
        if ($this->request->is('post')) {
            $data           = $this->request->getData();
            $data['amount'] = $this->Utilities->generalitationNumber($data['amount']);  

            foreach($data['upload_doc_file'] as $key => $val){
                $add_name   = rand();
                $arr        = explode(".", $val['file']['name']);
                $file_name  = $arr[0];
                $ext        = $arr[1];

                $data['upload_doc_file'][$key]['file']['name'] = $file_name . '-' . $add_name . '.' . $ext; 
            }

            $uploadDoc  = $this->UploadDoc->patchEntity($uploadDoc, $data, [
                'associated' => [
                    'UploadDocFile'
                ]
            ]);

            // dd($uploadDoc);

            if ($this->UploadDoc->save($uploadDoc)) {
                $this->Flash->success(__('The upload doc has been saved.'));

                return $this->redirect(['action' => 'view', $idMaker]);
            }
            $this->Flash->error(__('The upload doc could not be saved. Please, try again.'));
        }

        // ambil data maker
        $maker = $this->Maker->get($idMaker);
        
        // generate kode otomatis
        $parent = $this->UploadDoc->find('all')->order('id desc')->first();

        $prefix = 'SOR/';
        $year   = date('Y');

        if($parent == null){
            $code = $prefix . '0001/' . $maker->t_branch . '/' . $year;
        }else{
            $get_last_code  = $parent->no_sor;
            $get_last_code  = (int) substr($get_last_code, 4, 4);
            $get_last_code  = $get_last_code + 1;
            if($get_last_code < 10){
                $last_code = '000' . $get_last_code;
            }elseif($get_last_code < 100){
                $last_code = '00' . $get_last_code;
            }elseif($get_last_code < 1000){
                $last_code = '0' . $get_last_code;
            }elseif($get_last_code < 10000){
                $last_code = '' . $get_last_code;
            }

            $code = $prefix . $last_code .'/' . $maker->t_branch . '/' . $year;

        }

        $this->set(compact('uploadDoc','maker', 'code'));

        $titlesubModule = "Add SOR";
            $breadCrumbs = [
                Router::url(['action' => 'index']) => $titlesubModule
            ];
            $this->set(compact('titleModule','breadCrumbs','titlesubModule'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Upload Doc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $uploadDoc = $this->UploadDoc->get($id, [
            'contain' => ['UploadDocFile']
        ]);

        // menampung path link image
        $tampung_name = [];
        foreach ($uploadDoc['upload_doc_file'] as $key => $val) {
            $tampung_name[$val['id']]['path'] = ROOT . '/' . $val['file_dir'] . $val['file'];
        }
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data['amount'] = $this->Utilities->generalitationNumber($data['amount']);  

            $cek_unset = [];
            foreach($data['upload_doc_file'] as $key => $val){

                if($val['file']['name'] == '' && $val['file']['type'] == ''){
                    unset($data['upload_doc_file'][$key]['file']);
                }else{
                    // tampung yang akan di hapus
                    $cek_unset[$val['id']]['id'] = $val['id'];
                    
                    // random character untuk unik file name
                    $add_name   = rand();
                    $arr        = explode(".", $val['file']['name']);
                    $file_name  = $arr[0];
                    $ext        = $arr[1];
                    
                    $data['upload_doc_file'][$key]['file']['name'] = $file_name . '-' . $add_name . '.' . $ext; 
                }
            }

            $uploadDoc = $this->UploadDoc->patchEntity($uploadDoc, $data);
            if ($this->UploadDoc->save($uploadDoc)) {
                
                // hapus dinamis image
                if($cek_unset){
                    foreach ($cek_unset as $key => $val) {
                        unlink($tampung_name[$val['id']]['path']);
                    }
                }
                
                $this->Flash->success(__('The upload doc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The upload doc could not be saved. Please, try again.'));
        }
        $this->set(compact('uploadDoc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Upload Doc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $record = $this->{$this->primaryModel}->get($id);
        if ($this->{$this->primaryModel}->delete($record)) {    
            $code = 200;
            $message = __($this->Utilities->message_alert($this->titleModule,5));
            $status = 'success';
        } else {
            $code = 99;
            $message = __($this->Utilities->message_alert($this->titleModule,6));
            $status = 'error';
        }
        if($this->request->is('ajax')){
            $this->set('code',$code);
            $this->set('message',$message);
            $this->set('_serialize',['code','message']);
        }else{
            $this->Flash->{$status}($message);
            return $this->redirect(['action' => 'index']);
        }
    }

    public function viewsor($id = null)
    {
        $record = $this->{$this->primaryModel}->get($id, [
            'contain' => []
        ]);
        $titlesubModule = "View ".$this->titleModule;
        $breadCrumbs = [
            Router::url(['action' => 'index']) => "List ".$this->titleModule,
            Router::url(['action' => 'view',$id]) => $titlesubModule
        ];
        $this->set(compact('titleModule','breadCrumbs','titlesubModule'));
        $this->set('record', $record);
    }
}
