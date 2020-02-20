<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JhdataFixture
 *
 */
class JhdataFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'JDBR' => ['type' => 'decimal', 'length' => 3, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => ''],
        'JDCBR' => ['type' => 'decimal', 'length' => 3, 'precision' => 0, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => ''],
        'JDBRID' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'JDNAME' => ['type' => 'string', 'fixed' => true, 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'JDADDR' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'JDCSZ' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'TAX#' => ['type' => 'string', 'fixed' => true, 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'JDTELE' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'JDFAX' => ['type' => 'string', 'fixed' => true, 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['JDBR'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
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
                'JDBR' => 1.5,
                'JDCBR' => 1.5,
                'JDBRID' => 'Lorem ip',
                'JDNAME' => 'Lorem ipsum dolor sit amet',
                'JDADDR' => 'Lorem ipsum dolor sit amet',
                'JDCSZ' => 'Lorem ipsum dolor sit amet',
                'TAX#' => 'Lorem ipsum d',
                'JDTELE' => 'Lorem ipsum dolor ',
                'JDFAX' => 'Lorem ipsum dolor '
            ],
        ];
        parent::init();
    }
}
