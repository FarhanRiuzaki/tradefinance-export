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
class ReportTrackController extends AppController
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
        $this->Auth->allow(['detailSor']);

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
    public function index($id = NULL)
    {
        $record = [];
        if($id){
            $record     =  $this->Maker->get($id, [
                'contain'   => [
                    'UploadDoc'
                ]
            ]);
        }

        $this->set(compact('record'));

        $titlesubModule = "Laporan Durasi Pengerjaan per L/C";
        $breadCrumbs = [
            Router::url(['action' => 'index']) => $titlesubModule
        ];
        $this->set(compact('arrayBranch','titleModule','breadCrumbs','titlesubModule','maker','branch_search', 'start', 'end'));
        
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

    public function detailSor($id = null)
    {
        $record     =  $this->UploadDoc->get($id, [
            'contain'   => [
                'UploadDocFile', 'UjiDocs.UjiDocsDiscrepancies', 'UjiDocs.UjiDocsFile', 'Transactions.TransactionsDetails', 'Maker'
            ]
        ]);
            
        $this->set(compact('record'));
    }
}
