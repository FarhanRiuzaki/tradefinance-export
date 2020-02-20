<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UploadDocTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UploadDocTable Test Case
 */
class UploadDocTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UploadDocTable
     */
    public $UploadDoc;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UploadDoc'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UploadDoc') ? [] : ['className' => UploadDocTable::class];
        $this->UploadDoc = TableRegistry::getTableLocator()->get('UploadDoc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UploadDoc);

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
