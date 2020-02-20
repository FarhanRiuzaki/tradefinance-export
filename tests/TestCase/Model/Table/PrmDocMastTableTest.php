<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrmDocMastTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrmDocMastTable Test Case
 */
class PrmDocMastTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrmDocMastTable
     */
    public $PrmDocMast;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PrmDocMast'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PrmDocMast') ? [] : ['className' => PrmDocMastTable::class];
        $this->PrmDocMast = TableRegistry::getTableLocator()->get('PrmDocMast', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PrmDocMast);

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
