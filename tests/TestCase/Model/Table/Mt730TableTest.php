<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Mt730Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Mt730Table Test Case
 */
class Mt730TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Mt730Table
     */
    public $Mt730;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mt730'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mt730') ? [] : ['className' => Mt730Table::class];
        $this->Mt730 = TableRegistry::getTableLocator()->get('Mt730', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mt730);

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
