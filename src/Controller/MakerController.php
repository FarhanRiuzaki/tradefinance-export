<?php
namespace App\Controller;

use Cake\Core\Configure;
use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Maker Controller
 *
 * @property \App\Model\Table\MakerTable $Maker
 *
 * @method \App\Model\Entity\Maker[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MakerController extends AppController
{

    private $titleModule = "Menu Maker";
    private $primaryModel = "Maker";

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->set([
            'titleModule' => $this->titleModule,
            'primaryModel' => $this->primaryModel,
        ]);
        $this->Auth->allow(['addview','ExcelToUnixTimestamp']);
        $this->loadModel('Jhdata');
        $this->loadModel('Mt700');
    }

    function beforeFilter(\Cake\Event\Event $event){
        parent::beforeFilter($event);
    
        if(isset($this->Security) && $this->request->isAjax() && ($this->action = 'index' || $this->action = 'delete')){
    
            $this->Security->config('validatePost',false);
            //$this->getEventManager()->off($this->Csrf);
    
        }

        if ($this->action = 'index') {
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
        // REDIRECT KE ADDVIEW.CTP
        // $this->Render('addview');
    }

    /**
     * View method
     *
     * @param string|null $id Maker id.
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
        $lc_code = $this->request->query('lc_code');
        // dd($lc_code);
        $maker = $this->Maker->newEntity();
        if ($this->request->is('post')) {
            $data   = $this->request->getData();
            if($lc_code){
                $data['no_lc'] = $lc_code;
            }else{
                $data['no_lc'] = $data['t_20'];
            }
            $maker  = $this->Maker->patchEntity($maker, $data);
            // dd($maker);
            if ($this->Maker->save($maker)) {
                $this->Flash->success(__('The maker has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maker could not be saved. Please, try again.'));
        }

        $MT = '';
        if($lc_code){
            $MT = $this->Mt700->find('all')->where(['LC_CODE' => $lc_code])->first();
        }
        // dd($MT);
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
        $this->set(compact('maker', 'branch','MT'));

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
     * @param string|null $id Maker id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maker = $this->Maker->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data   = $this->request->getData();
            
            // jika di reject oleh approver
            if($maker->status == 2){
                
                // tambah no revisi
                $no_reg     = (int) substr($maker->no_reg, -2);
                $no_reg++;
                if($no_reg < 10){
                    $no_reg = '0' . $no_reg;
                }
                
                // join ke no_reg
                $data['no_reg']         = substr($maker->no_reg, 0, 25) . $no_reg;
                
                // counter revisi
                $counter_revisi         = $maker->counter_revisi;
                $counter_revisi++;
                $data['counter_revisi'] = $counter_revisi;
            }

            $maker  = $this->Maker->patchEntity($maker, $data);
            if ($this->Maker->save($maker)) {
                $this->Flash->success(__('The maker has been saved.'));

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
     * @param string|null $id Maker id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maker = $this->Maker->get($id);
        if ($this->Maker->delete($maker)) {
            $this->Flash->success(__('The maker has been deleted.'));
        } else {
            $this->Flash->error(__('The maker could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function addview()
    {
        if($this->request->is('ajax')){
            $source = $this->{$this->primaryModel};
            $searchAble = [
                $this->primaryModel.'.id',
            ];
            $data = [
                'source'=>$source,
                'searchAble' => $searchAble,
                'defaultField' => $this->primaryModel.'.id',
                'defaultSort' => 'desc',
                'defaultSearch' => [
                    // [    
                    //     'keyField' => 'status',
                    //     'condition' => 'IN',
                    //     'value' => ['0','2']
                    // ]
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

    public function notificationLetters($id = null)
    {
        if($id){
            $data   = '';
            $maker  = $this->Maker->get($id);

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
        }else{
            $maker  = '';
            $lc_code= $this->request->query('lc_code');
            $data   = $this->Mt700->find('all')
                ->where([
                    'LC_CODE' => $lc_code 
                    ])->first();
            if($this->request->isAjax()){
                $this->set(compact('data'));
                $this->set('_serialize',['data']);
            }else{
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
                $this->set(compact('data','maker'));
    
                $this->RequestHandler->renderAs($this, 'pdf');
                $this->viewBuilder()->layout('report');
            }
        }
    }
    public function viewReject()
    {
        if($this->request->is('ajax')){
            $source = $this->{$this->primaryModel};
            $searchAble = [
                $this->primaryModel.'.id',
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
                        'value' => '2'
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
            $titlesubModule = "Daftar L/C & SKBDN (Reject)";
            $breadCrumbs = [
                Router::url(['action' => 'index']) => $titlesubModule
            ];
            $this->set(compact('breadCrumbs','titlesubModule'));
        }
    }
    
}
