<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccmastTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccmastTable Test Case
 */
class AccmastTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccmastTable
     */
    public $Accmast;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Accmast'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Accmast') ? [] : ['className' => AccmastTable::class];
        $this->Accmast = TableRegistry::getTableLocator()->get('Accmast', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Accmast);

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
