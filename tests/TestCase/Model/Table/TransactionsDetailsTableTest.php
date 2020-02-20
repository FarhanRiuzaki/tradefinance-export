<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransactionsDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransactionsDetailsTable Test Case
 */
class TransactionsDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransactionsDetailsTable
     */
    public $TransactionsDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TransactionsDetails',
        'app.Transactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TransactionsDetails') ? [] : ['className' => TransactionsDetailsTable::class];
        $this->TransactionsDetails = TableRegistry::getTableLocator()->get('TransactionsDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransactionsDetails);

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
