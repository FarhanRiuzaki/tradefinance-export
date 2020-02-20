<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UjiDocsDiscrepanciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UjiDocsDiscrepanciesTable Test Case
 */
class UjiDocsDiscrepanciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UjiDocsDiscrepanciesTable
     */
    public $UjiDocsDiscrepancies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UjiDocsDiscrepancies',
        'app.UjiDocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UjiDocsDiscrepancies') ? [] : ['className' => UjiDocsDiscrepanciesTable::class];
        $this->UjiDocsDiscrepancies = TableRegistry::getTableLocator()->get('UjiDocsDiscrepancies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UjiDocsDiscrepancies);

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
