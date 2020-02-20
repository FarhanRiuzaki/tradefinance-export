<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UjiDocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UjiDocsTable Test Case
 */
class UjiDocsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UjiDocsTable
     */
    public $UjiDocs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UjiDocs',
        'app.UploadDocs',
        'app.UjiDocsDiscrepancies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UjiDocs') ? [] : ['className' => UjiDocsTable::class];
        $this->UjiDocs = TableRegistry::getTableLocator()->get('UjiDocs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UjiDocs);

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
