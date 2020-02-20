<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificationLetterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificationLetterTable Test Case
 */
class NotificationLetterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificationLetterTable
     */
    public $NotificationLetter;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.NotificationLetter'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('NotificationLetter') ? [] : ['className' => NotificationLetterTable::class];
        $this->NotificationLetter = TableRegistry::getTableLocator()->get('NotificationLetter', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NotificationLetter);

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
