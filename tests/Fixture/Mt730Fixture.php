<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Mt730Fixture
 *
 */
class Mt730Fixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mt730';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'C20' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Sender\'s Reference', 'precision' => null, 'fixed' => null],
        'C21' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Receiver\'s Reference', 'precision' => null, 'fixed' => null],
        'C25' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Account Identification', 'precision' => null, 'fixed' => null],
        'C30' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Date of Message Being Acknowledged', 'precision' => null, 'fixed' => null],
        'C32a' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Amount of Charges', 'precision' => null, 'fixed' => null],
        'C57a' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Account with Bank', 'precision' => null, 'fixed' => null],
        'C71D' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Charges', 'precision' => null, 'fixed' => null],
        'C72Z' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Sender to Receiver Information', 'precision' => null, 'fixed' => null],
        'C79Z' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Narrative', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified_by' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'C20' => 'Lorem ipsum dolor sit amet',
                'C21' => 'Lorem ipsum dolor sit amet',
                'C25' => 'Lorem ipsum dolor sit amet',
                'C30' => 'Lorem ipsum dolor sit amet',
                'C32a' => 'Lorem ipsum dolor sit amet',
                'C57a' => 'Lorem ipsum dolor sit amet',
                'C71D' => 'Lorem ipsum dolor sit amet',
                'C72Z' => 'Lorem ipsum dolor sit amet',
                'C79Z' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-01-22',
                'created_by' => 1,
                'modified' => '2020-01-22',
                'modified_by' => 1
            ],
        ];
        parent::init();
    }
}
