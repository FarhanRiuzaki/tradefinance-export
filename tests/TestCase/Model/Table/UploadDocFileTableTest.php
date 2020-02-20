<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UploadDocFileTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UploadDocFileTable Test Case
 */
class UploadDocFileTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UploadDocFileTable
     */
    public $UploadDocFile;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UploadDocFile',
        'app.UploadDocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UploadDocFile') ? [] : ['className' => UploadDocFileTable::class];
        $this->UploadDocFile = TableRegistry::getTableLocator()->get('UploadDocFile', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UploadDocFile);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
