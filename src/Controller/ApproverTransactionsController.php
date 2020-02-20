<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;

/**
 * Transactions Controller
 *
 * @property \App\Model\Table\TransactionsTable $Transactions
 *
 * @method \App\Model\Entity\Transaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApproverTransactionsController extends AppController
{
    private $titleModule = "Transaksi";
    private $primaryModel = "Transactions";

    public function initialize()
    {
        parent::initialize();
        $this->set([
            'titleModule' => $this->titleModule,
            'primaryModel' => $this->primaryModel,
        ]);
        $this->loadModel('UploadDoc');
        $this->loadModel('UjiDocs');
        $this->loadModel('UjiDocsDiscrepancies');
        $this->loadModel('Maker');
        $this->loadModel('Jhdata');
        $this->loadModel('Mt700');
        $this->loadModel('TransactionsDetails');
        $this->loadModel('Transactions');
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
                    SELECT maker_id FROM upload_doc inner join transactions on transactions.upload_doc_id = upload_doc.id where maker_id = Maker.id LIMIT 1
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
     * @param string|null $id Transaction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->request->is('ajax')){
            $source = $this->UploadDoc
            ->find('all')
            ->where(['maker_id' => $id ])
            ->where([
                'UploadDoc.id = (
                    SELECT upload_doc_id FROM uji_docs where upload_doc_id = UploadDoc.id LIMIT 1
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
                    // [    
                    //     'keyField' => 'status',
                    //     'condition' => '=',
                    //     'value' => 3
                    // ]
                ],
                'contain' => ['Maker','UjiDocs']
                    
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
    public function add($idUpload = null)
    {
        // get jenis trx
        $find = $this->UploadDoc->get($idUpload, [
            'contain' => [
                'Maker'
            ]
        ]);
        $jenis_trx  = $find['maker']['t_lc_type'];

        $record = $this->Transactions->newEntity();
        if ($this->request->is('post')) {
            $data                   = $this->request->getData();
            $data['tgl_input_trx']  = date('Y-m-d');
            $data['jenis_trx']      = $jenis_trx;
            
             //get no sor auto code{
            $cek_data   = $this->Transactions->find('all')->order(['id DESC'])->first();
            $get        = $this->UploadDoc->get($data['upload_doc_id'])['no_sor'];
            if(!$cek_data['no_nota']){
                $seq    = '00';
            }else{
                $seq   = (int) substr($cek_data['no_nota'], -2); 
                $seq++;
                if($seq < 10){
                    $seq = '0' . $seq;
                }
            }
            $no_note    = 'NOTA-'. $get . '-' . $seq;
            // } end

            $data['no_nota']    = $no_note;
            $record = $this->Transactions->patchEntity($record, $data,[
                'associated' => [
                    'TransactionsDetails'
                ]
            ]);
            if ($this->Transactions->save($record)) {
                $this->Flash->success(__('The transaction has been saved.'));
  
                return $this->redirect(['action' => 'transaction', $record['upload_doc_id']]);
            }
            $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
        }
        $branch         = $this->Jhdata->find();
        
        $arrayBranch    = [];
        foreach ($branch as $key => $row) {
            $lenght = strlen($row['JDBR']);
            $kode   = $row['JDBR'];

            if($lenght == 1){ $kode = '00' . $row['JDBR']; }
            if($lenght == 2){ $kode = '0' . $row['JDBR']; }

            $arrayBranch[$key]['id']    = $kode;
            $arrayBranch[$key]['value'] = $kode . ' - ' . $row['JDNAME'];
        }

        $uploadDocs = $this->Transactions->UploadDoc->find('list', ['limit' => 200]);
        $this->set(compact('record', 'uploadDocs','arrayBranch'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $record = $this->Transactions->get($id, [
            'contain' => ['TransactionsDetails']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data   = $this->request->getData();
            $record = $this->Transactions->patchEntity($record, $data);
            if ($this->Transactions->save($record)) {
                $this->Flash->success(__('The transaction has been saved.'));

                return $this->redirect(['action' => 'transaction', $record['upload_doc_id']]);
            }
            $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
        }
        $uploadDocs = $this->Transactions->UploadDoc->find('list', ['limit' => 200]);
        $this->set(compact('record', 'uploadDocs','arrayBranch'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transaction = $this->Transactions->get($id);
        if ($this->Transactions->delete($transaction)) {
            $this->Flash->success(__('The transaction has been deleted.'));
        } else {
            $this->Flash->error(__('The transaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function transaction($id = null)
    {
        if($this->request->is('ajax')){
            $source = $this->Transactions
            ->find('all')
            ->where(['upload_doc_id' => $id ]);
            
            $searchAble = [];
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
                'contain' => ['UploadDoc']
                    
            ];
            $dataTable   = $this->Datatables->make($data);  
            $this->set('aaData',$dataTable['aaData']);
            $this->set('iTotalDisplayRecords',$dataTable['iTotalDisplayRecords']);
            $this->set('iTotalRecords',$dataTable['iTotalRecords']);
            $this->set('sColumns',$dataTable['sColumns']);
            $this->set('sEcho',$dataTable['sEcho']);
            $this->set('_serialize',['aaData','iTotalDisplayRecords','iTotalRecords','sColumns','sEcho']);
        }else{
            $titlesubModule = "List Transaction";
            $breadCrumbs = [
                Router::url(['action' => 'index']) => $titlesubModule
            ];
            $this->set(compact('breadCrumbs','titlesubModule'));
        }
    }

    public function viewTransaction($id = null)
    {
        $record = $this->Transactions->get($id, [
            'contain' => ['TransactionsDetails']
        ]);
        $this->set(compact('record'));
    }
}
