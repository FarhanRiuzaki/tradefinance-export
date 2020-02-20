<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;

/**
 * UploadDoc Controller
 *
 * @property \App\Model\Table\UploadDocTable $UploadDoc
 *
 * @method \App\Model\Entity\UploadDoc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UjiDocsController extends AppController
{

    private $titleModule = "Uji Dokumen";
    private $primaryModel = "UploadDoc";

    public function initialize()
    {
        parent::initialize();
        $this->set([
            'titleModule' => $this->titleModule,
            'primaryModel' => $this->primaryModel,
        ]);
        $this->loadModel('UploadDoc');
        $this->loadModel('UjiDocsDiscrepancies');
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
            $this->set(compact('breadCrumbs','titlesubModule'));
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
                'contain' => ['Maker', 'UjiDocs']
                    
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
            $this->set(compact('breadCrumbs','titlesubModule'));
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $record = $this->UjiDocs->newEntity();
        if ($this->request->is('post')) {
            $data               = $this->request->getData();
            $data['tgl_uji']    = date('Y-m-d', strtotime($data['tgl_uji'])); 
            $data['tgl_target']    = date('Y-m-d', strtotime($data['tgl_target']));

            $record  = $this->UjiDocs->patchEntity($record, $data, [
                'associated' => [
                    'UjiDocsDiscrepancies'
                ]
            ]);
            // dd($record);
            if ($this->UjiDocs->save($record)) {
                $this->Flash->success(__('The upload doc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The upload doc could not be saved. Please, try again.'));
        }
        $this->set(compact('record'));
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
        $record = $this->UjiDocs->get($id, [
            'contain' => ['UjiDocsDiscrepancies']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data               = $this->request->getData();
            $data['tgl_uji']    = date('Y-m-d', strtotime($data['tgl_uji'])); 
            $data['tgl_target'] = date('Y-m-d', strtotime($data['tgl_target']));

            //array delete relations
            $arr = $data['delete'];
            $str = implode (", ", $arr);


            $record  = $this->UjiDocs->patchEntity($record, $data, [
                'associated' => [
                    'UjiDocsDiscrepancies'
                ]
            ]);

            $this->UjiDocsDiscrepancies->deleteAll(['id NOT IN('.$str.') AND uji_doc_id = "'. $record['id'] .'"']);

            if ($this->UjiDocs->save($record)) {
                $articlesTable      = TableRegistry::getTableLocator()->get('UploadDoc');
                $article            = $articlesTable->get($record['upload_doc_id']); 
                $article->status_sor= $record['status'];
                $articlesTable->save($article);

                $this->Flash->success(__('The upload doc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The upload doc could not be saved. Please, try again.'));
        }
        $this->set(compact('record'));

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
        $record = $this->UjiDocs->get($id, [
            'contain' => ['UjiDocsDiscrepancies']
        ]);
        $titlesubModule = "View ".$this->titleModule;
        $breadCrumbs = [
            Router::url(['action' => 'index']) => "List ".$this->titleModule,
            Router::url(['action' => 'view',$id]) => $titlesubModule
        ];
        $this->set(compact('breadCrumbs','titlesubModule'));
        $this->set('record', $record);
    }
}
