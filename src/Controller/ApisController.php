<?php

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

/**
 * Apis Controller
 */
class ApisController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        if (php_sapi_name() !== 'cli') {
            $this->Auth->allow([
                 'search','mt707', 'cekCif', 'getDetailTrx', 'getLc'
            ]);
        }
    }

    function beforeFilter(\Cake\Event\Event $event){
        parent::beforeFilter($event);
    
        $this->Security->config('validatePost',false);
    
    }

    public function search(){
        $this->loadModel('Maker');
        $this->loadModel('Mt700');
        if ($this->request->is('ajax')) {
            $get    = $this->request->query();

            // $data   = $this->Maker->find('all')->where([
            //     'no_lc LIKE ' => '%' . $get['input'] . '%' 
            // ]);
            
            $data   = $this->Mt700->find('all')->where([
                'LC_CODE LIKE ' => '%' . $get['input'] . '%' 
            ]);

            // dd($data->all());
            $this->set(compact('data'));
            $this->set('_serialize', ['data']);
        }
    }

    public function mt707(){
        $this->loadModel('Maker');
        $this->loadModel('Mt707');
        if ($this->request->is('ajax')) {
            $get    = $this->request->query();

            $data   = $this->Mt707->find('all')->where([
                'LC_CODE LIKE ' => '%' . $get['lc'] . '%' 
            ])->order(['LC_CODE DESC'])->first();

            $this->set(compact('data'));
            $this->set('_serialize', ['data']);
        }
    }

    public function cekCif()
    {
        $this->loadModel('Cifmast');
        if ($this->request->is('ajax')) {
            $get    = $this->request->query();
            
            $data   = $this->Cifmast->find('all')->where([
                'CIFNO' => $get['cif']
            ])->first();

            $this->set(compact('data'));
            $this->set('_serialize', ['data']);
        }
    }

    public function getDetailTrx($id = null)
    {
        $this->loadModel('TransactionsDetails');
        if ($this->request->is('ajax')) {
            $id     = $this->request->query('id');
            $record = $this->TransactionsDetails->find('all')
                ->where(['transaction_id' => $id]);
            
            $this->set(compact('record'));
            $this->set('_serialize', ['record']);
        }
    }

    public function getLc($id = null)
    {
        $this->loadModel('Maker');
        $lc = $this->request->query('search');
        // dd($lc);

        $record = $this->Maker->find('all')
            ->where([
                'no_lc LIKE' => '%' . $lc . '%', 
                ]);

        $data = [];
        foreach($record as $key => $val){
            $data[$key]['text'] = $val->no_lc;
            $data[$key]['id']   = $val->id;
        }

        $this->set(compact('data'));
        $this->set('_serialize', ['data']);
    }
}
