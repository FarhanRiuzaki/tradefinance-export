<?php
namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController
{
    public function index()
    {
        $this->loadModel('Maker');
        $approveAdvice  = $this->Maker->find('all', [
            'conditions'    => [
                'status'    => '1'
            ]
        ])->order(['id asc']);

        $approveAmend  = $this->Maker->find('all', [
            'conditions'    => [
                'status'    => '1'
            ]
        ])->where([
            'm_20 = (
                SELECT C20 FROM mt707 where C20 = Maker.m_20 order by LC_CODE DESC LIMIT 1
            )'
        ])
        ->order(['id asc']);
        
        $titleModule    = "Dashboard";
        $this->set(compact('titleModule', 'approveAdvice','approveAmend'));
    }
}