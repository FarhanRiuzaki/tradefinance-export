<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\Core\Configure;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AmendmentApproverController extends AppController
{

    private $titleModule = "Approver";
    private $primaryModel = "Maker";

    public function initialize()
    {
        parent::initialize();
        $this->set([
            'titleModule' => $this->titleModule,
            'primaryModel' => $this->primaryModel,
        ]);
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

        if ($this->action = 'edit') {
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
            $source = $this->{$this->primaryModel}
            ->find('all')->where([
                'm_20 = (
                    SELECT C20 FROM mt707 where C20 = Maker.m_20 order by LC_CODE DESC LIMIT 1
                )'
            ]);
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
                        'value' => 1
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
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maker = $this->Maker->get($id, [
            'contain' => []
        ]);
        $titlesubModule = "View ".$this->titleModule;
        $breadCrumbs = [
            Router::url(['action' => 'index']) => "List ".$this->titleModule,
            Router::url(['action' => 'view',$id]) => $titlesubModule
        ];
        $this->set(compact('breadCrumbs','titlesubModule'));
        $this->set('maker', $maker);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $record = $this->{$this->primaryModel}->newEntity();
        if ($this->request->is('post')) {
            $record = $this->{$this->primaryModel}->patchEntity($record, $this->request->getData());
            if ($this->{$this->primaryModel}->save($record)) {
                $this->Flash->success(__($this->Utilities->message_alert($this->titleModule,1)));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__($this->Utilities->message_alert($this->titleModule,2)));
        }
        $userGroups = $this->{$this->primaryModel}->UserGroups->find('list', ['limit' => 200,'conditions'=>[
            'status'=>1
        ]]);
        $this->set(compact('record', 'userGroups','divisions'));
        $titlesubModule = "Tambah ".$this->titleModule;
        $breadCrumbs = [
            Router::url(['action' => 'index']) => "List ".$this->titleModule,
            Router::url(['action' => 'add']) => $titlesubModule
        ];
        $this->set(compact('breadCrumbs','titlesubModule'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maker = $this->Maker->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();

            // set status
            $data['amend_approve_status'] = '1';
            $data['amend_approve_date']   = date('Y-m-d H:i:s');

            $maker = $this->Maker->patchEntity($maker, $data);
            if ($this->Maker->save($maker)) {
                if($maker->status == 2 ){
                    $this->Flash->success(__('The maker has been Rejected.'));
                }elseif ($maker->status == 3) {
                    $this->Flash->success(__('The maker has been Approved.'));
                }

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maker could not be saved. Please, try again.'));
        }
        $branch = $this->Jhdata->find('list', [
            'keyField'  => function ($row) {
                $lenght = strlen($row['JDBR']);
                $kode   = $row['JDBR'];
                if($lenght == 1){ $kode = '00' . $row['JDBR']; }
                if($lenght == 2){ $kode = '0' . $row['JDBR']; }
                
                return $kode;
            },
            'valueField' => function ($row) {
                $lenght = strlen($row['JDBR']);
                $kode   = $row['JDBR'];
                
                if($lenght == 1){ $kode = '00' . $row['JDBR']; }
                if($lenght == 2){ $kode = '0' . $row['JDBR']; }
                
                return $kode . ' - ' . $row['JDNAME'];
            }

        ]);
        // dd($branch->all());
        $this->set(compact('maker', 'branch'));

        $titlesubModule = "Tambah ".$this->titleModule;
        $breadCrumbs = [
            Router::url(['action' => 'index']) => "List ".$this->titleModule,
            Router::url(['action' => 'add']) => $titlesubModule
        ];
        $this->set(compact('breadCrumbs','titlesubModule'));
    }


    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $record = $this->{$this->primaryModel}->get($id,['contain'=>'UserGroups','UserGroups.Aros']);
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

    public function notificationLetters($id = null)
    {
        $maker = $this->Maker->get($id);

        // USET SESSION MAKER ID
        unset($_SESSION['maker_id']);

        //PROSES NOTIFICATION LATTER 
        Configure::write('CakePdf', [
            'engine' => [
                'className' => 'CakePdf.WkHtmlToPdf',
                'binary' => env('WKHTML', 'C:\wkhtmltopdf\bin\wkhtmltopdf.exe' ),
                'options' => [
                    'print-media-type' => false,
                    'outline' => true,
                    'dpi' => 96
                ],
            ],
            'margin' => [
                'bottom' => 15,
                'left' => 15,
                'right' => 15,
                'top' => 10
            ],

            'pageSize' => 'A4',
            'download' => false
        ]);
        $this->set(compact('maker'));

        $this->RequestHandler->renderAs($this, 'pdf');
        $this->viewBuilder()->layout('report');
    }

}
