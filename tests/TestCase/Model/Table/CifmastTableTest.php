<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CifmastTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CifmastTable Test Case
 */
class CifmastTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CifmastTable
     */
    public $Cifmast;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cifmast'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cifmast') ? [] : ['className' => CifmastTable::class];
        $this->Cifmast = TableRegistry::getTableLocator()->get('Cifmast', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cifmast);

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
