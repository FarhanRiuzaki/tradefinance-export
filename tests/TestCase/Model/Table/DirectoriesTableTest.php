<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DirectoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DirectoriesTable Test Case
 */
class DirectoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DirectoriesTable
     */
    public $Directories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Directories',
        'app.Files',
        'app.Divisions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Directories') ? [] : ['className' => DirectoriesTable::class];
        $this->Directories = TableRegistry::getTableLocator()->get('Directories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Directories);

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
