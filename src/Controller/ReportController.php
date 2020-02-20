<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportController extends AppController
{

    private $titleModule = "Laporan";
    private $primaryModel = "Maker";

    public function initialize()
    {
        parent::initialize();
        $this->set([
            'titleModule' => $this->titleModule,
            'primaryModel' => $this->primaryModel,
        ]);
        $this->loadModel('Maker');
        $this->loadModel('UploadDoc');
        $this->loadModel('Jhdata');
        $this->Auth->allow(['detailMaker', 'detailSor']);
    }

    function beforeFilter(\Cake\Event\Event $event){
        parent::beforeFilter($event);
    
        if(isset($this->Security) && $this->request->isAjax() && ($this->action = 'index' || $this->action = 'delete')){
    
            $this->Security->config('validatePost',false);
            //$this->getEventManager()->off($this->Csrf);
    
        }
    
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $branch_search  = $this->request->query('branch');
        $maker  = [];
        $start  = null;
        $end    = null;
        if($branch_search){
            $start  = $this->request->query('start');
            $end    = $this->request->query('end');
    
            $maker  = $this->Maker->find('all', [
                'contain'   => [
    
                ]
            ])->where([
                't_branch'      => $branch_search,
                'created >='    => $start,
                'created <='    => $end,
            ]);
        }else{
            $branch_search = null;
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

        $titlesubModule = "Laporan status L/C Ekspor";
        $breadCrumbs = [
            Router::url(['action' => 'index']) => $titlesubModule
        ];
        $this->set(compact('arrayBranch','breadCrumbs','titlesubModule','maker','branch_search', 'start', 'end'));
        
    }

    public function detailMaker($id = null)
    {
        $record     =  $this->Maker->get($id, [
            'contain'   => [
                'UploadDoc'
            ]
        ]);

        $this->set(compact('record'));

    }

    public function detailSor($id = null)
    {
        $redirect   = $this->request->query('view');
        $record     =  $this->UploadDoc->get($id, [
            'contain'   => [
                'UploadDocFile', 'UjiDocs.UjiDocsDiscrepancies', 'UjiDocs.UjiDocsFile', 'Transactions.TransactionsDetails'
            ]
        ]);
            
        $this->set(compact('record'));
                
        // doc : dokumen
        // hud : hasil uji dokumen
        // bhu : balasan hasil uji dari nasabah
        // trx : transaksi

        if($redirect == 'doc'){
            $this->render('view_doc');
        }elseif($redirect == 'hud'){
            $this->render('view_hud');
        }elseif ($redirect == 'bhu') {
            $this->render('view_bhu');
        }elseif ($redirect == 'trx') {
            $this->render('view_trx');
        }

    }

    public function print($id = null)
    {
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
        dd($arrayBranch);
        $this->set(compact('record', 'uploadDocs','arrayBranch'));

    }

}
