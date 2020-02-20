<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CifmastFixture
 *
 */
class CifmastFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cifmast';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'CIFNO' => ['type' => 'string', 'fixed' => true, 'length' => 7, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFSNME' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFBRNN' => ['type' => 'string', 'fixed' => true, 'length' => 3, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFNA1' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFSSCD' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFSSNO' => ['type' => 'string', 'fixed' => true, 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFIEX6' => ['type' => 'string', 'fixed' => true, 'length' => 6, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFYIDP' => ['type' => 'string', 'fixed' => true, 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFYIDS' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFCLAS' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'TTLCD' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'DESTTL' => ['type' => 'string', 'fixed' => true, 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFBIR6' => ['type' => 'string', 'fixed' => true, 'length' => 6, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFYBIP' => ['type' => 'string', 'fixed' => true, 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFSIC1' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'MTHNM' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFNA2' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFNA3' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFNA4' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFNA5' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFZIP' => ['type' => 'string', 'fixed' => true, 'length' => 9, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFNPWP' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFBIC' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFAPI' => ['type' => 'string', 'fixed' => true, 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'MEMO' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'MNTDT' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'CFCUSTYP' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFKELURAHAN' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFKECAMATAN' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFTLPN' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFTLPHP' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFMAIL' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFKND' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFKDPK' => ['type' => 'string', 'fixed' => true, 'length' => 5, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFTPBK' => ['type' => 'string', 'fixed' => true, 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFKDKAB' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFKDBU' => ['type' => 'string', 'fixed' => true, 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFALTB' => ['type' => 'string', 'fixed' => true, 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFPKPT' => ['type' => 'decimal', 'length' => 19, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'CFKDSP' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFJMLT' => ['type' => 'decimal', 'length' => 19, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'CFKDDL' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFKDGD' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFSTPD' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFNKPP' => ['type' => 'string', 'length' => 16, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFNMPS' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFTGLP' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'CFPRPH' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFMLGR' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFKJBU' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFNOAP' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFNOAPPT' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFTGLA' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'CFMLPI' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFGOPL' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFPRDB' => ['type' => 'string', 'length' => 6, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFLPRT' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'CFTGLPM' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'CFNGDB' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CFGNDR' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'Portfolio' => ['type' => 'string', 'length' => 3, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['CIFNO'], 'length' => []],
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
                'CIFNO' => '43b4dbeb-23be-4d2d-a191-29a5af2741b2',
                'CFSNME' => 'Lorem ipsum dolor ',
                'CFBRNN' => 'L',
                'CFNA1' => 'Lorem ipsum dolor sit amet',
                'CFSSCD' => 'Lo',
                'CFSSNO' => 'Lorem ipsum dolor sit a',
                'CFIEX6' => 'Lore',
                'CFYIDP' => 'Lorem ipsum dolor sit amet',
                'CFYIDS' => 'L',
                'CFCLAS' => 'L',
                'TTLCD' => 'Lo',
                'DESTTL' => 'Lorem ipsum dolor sit a',
                'CFBIR6' => 'Lore',
                'CFYBIP' => 'Lorem ipsum dolor sit amet',
                'CFSIC1' => 'L',
                'MTHNM' => 'Lorem ipsum dolor sit amet',
                'CFNA2' => 'Lorem ipsum dolor sit amet',
                'CFNA3' => 'Lorem ipsum dolor sit amet',
                'CFNA4' => 'Lorem ipsum dolor sit amet',
                'CFNA5' => 'Lorem ipsum dolor sit amet',
                'CFZIP' => 'Lorem i',
                'CFNPWP' => 'Lorem ipsum dolor sit amet',
                'CFBIC' => 'Lorem ipsum dolor sit amet',
                'CFAPI' => 'Lorem ipsum dolor sit amet',
                'MEMO' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'MNTDT' => '2020-01-09 09:15:34',
                'CFCUSTYP' => 'L',
                'CFKELURAHAN' => 'Lorem ipsum dolor sit amet',
                'CFKECAMATAN' => 'Lorem ipsum dolor sit amet',
                'CFTLPN' => 'Lorem ipsu',
                'CFTLPHP' => 'Lorem ipsu',
                'CFMAIL' => 'Lorem ipsum dolor sit amet',
                'CFKND' => 'Lo',
                'CFKDPK' => 'Lor',
                'CFTPBK' => 'Lorem ipsu',
                'CFKDKAB' => 'Lo',
                'CFKDBU' => 'Lorem ipsu',
                'CFALTB' => 'Lorem ipsu',
                'CFPKPT' => 1.5,
                'CFKDSP' => 'L',
                'CFJMLT' => 1.5,
                'CFKDDL' => 'Lo',
                'CFKDGD' => 'Lo',
                'CFSTPD' => 'L',
                'CFNKPP' => 'Lorem ipsum do',
                'CFNMPS' => 'Lorem ipsum dolor sit amet',
                'CFTGLP' => '2020-01-09',
                'CFPRPH' => 'L',
                'CFMLGR' => 'L',
                'CFKJBU' => 'Lo',
                'CFNOAP' => 'Lorem ipsum dolor sit amet',
                'CFNOAPPT' => 'Lorem ipsum dolor sit amet',
                'CFTGLA' => '2020-01-09',
                'CFMLPI' => 'L',
                'CFGOPL' => 'L',
                'CFPRDB' => 'Lore',
                'CFLPRT' => 'Lo',
                'CFTGLPM' => '2020-01-09',
                'CFNGDB' => 'Lorem ipsum dolor sit amet',
                'CFGNDR' => 'L',
                'Portfolio' => 'L'
            ],
        ];
        parent::init();
    }
}
