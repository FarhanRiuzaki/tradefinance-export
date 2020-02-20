<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Mt707Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Mt707Table Test Case
 */
class Mt707TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Mt707Table
     */
    public $Mt707;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mt707'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mt707') ? [] : ['className' => Mt707Table::class];
        $this->Mt707 = TableRegistry::getTableLocator()->get('Mt707', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mt707);

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
