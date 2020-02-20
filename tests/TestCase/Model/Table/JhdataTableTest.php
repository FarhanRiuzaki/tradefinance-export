<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JhdataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JhdataTable Test Case
 */
class JhdataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JhdataTable
     */
    public $Jhdata;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jhdata'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jhdata') ? [] : ['className' => JhdataTable::class];
        $this->Jhdata = TableRegistry::getTableLocator()->get('Jhdata', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jhdata);

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
}
