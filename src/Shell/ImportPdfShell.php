<?php
namespace App\Shell;

use Cake\Console\Shell;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Routing\Router;
use Cake\Utility\Inflector;
use \RecursiveIteratorIterator;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
/**
 * ImportAccounts shell command.
 */
class ImportPdfShell extends Shell
{


    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Directories');
        $this->loadModel('Files');
    }
    /**
     * Manage the available sub-commands along with their arguments and help
     *
     * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
     *
     * @return \Cake\Console\ConsoleOptionParser
     */
    public function getOptionParser()
    {
        $parser = parent::getOptionParser();

        return $parser;
    }

    /**
     * main() method.
     *
     * @return bool|int|null Success or error code.
     */
    public function main()
    {
        // $this->out($this->OptionParser->help());
        $location = "C:\Users\User\Documents\EXPORT_PTC\pdf.xlsx";
        $spreadsheet = IOFactory::load($location);
        $worksheet = $spreadsheet->getActiveSheet();
        $dataExcel = [];
        foreach ($worksheet->getRowIterator() as $key =>  $row) {
            $dataExcel[$key] =[];
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(FALSE);
            foreach ($cellIterator as $keycel => $cell) {
                $dataExcel[$key][$keycel] = $cell->getValue();
            }
        }
        foreach($dataExcel as $key => $row){
            $code = trim($row['A']);
            $name = trim($row['B']);
            $status = 1;
            $parent_id = substr($code,0,1);
            $len = strlen($code);
            $parent_id = 0;
            if($len > 1){
                // $code_parent = substr($code,0,-1);
                $parent = $this->Directories->find('all')->where(['code'=>$code])->first();
                $path = $parent->path;
                if(!empty($parent)){
                    $parent_id = $parent->id;
                }
            }
            if(empty($path)){
                $path = '';
            }
            $path = preg_replace('/\s+/', '', $path);

            $this->out("CODE : " . $len . ' - ' . $code . ' - ' . $parent_id);
            $save = $this->Files->newEntity([
                'directory_id' => $parent_id,
                'name' => $name,
                'file' => $path . '/' . $name,
                'type' => 'BIASA',
                'description' => '-',
                'status' => 0,
            ],[
                'validate'=>false
            ]);
            $this->Files->save($save);
        }
    }
}
