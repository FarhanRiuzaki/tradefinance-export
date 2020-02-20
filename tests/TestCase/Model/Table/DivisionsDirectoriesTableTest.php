<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DivisionsDirectoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DivisionsDirectoriesTable Test Case
 */
class DivisionsDirectoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DivisionsDirectoriesTable
     */
    public $DivisionsDirectories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DivisionsDirectories',
        'app.Divisions',
        'app.Directories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DivisionsDirectories') ? [] : ['className' => DivisionsDirectoriesTable::class];
        $this->DivisionsDirectories = TableRegistry::getTableLocator()->get('DivisionsDirectories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DivisionsDirectories);

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
