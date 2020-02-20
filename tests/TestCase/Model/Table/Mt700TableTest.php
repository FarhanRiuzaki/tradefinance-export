<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Mt700Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Mt700Table Test Case
 */
class Mt700TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Mt700Table
     */
    public $Mt700;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mt700'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mt700') ? [] : ['className' => Mt700Table::class];
        $this->Mt700 = TableRegistry::getTableLocator()->get('Mt700', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mt700);

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
