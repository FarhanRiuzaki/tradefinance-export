<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MakerLogFixture
 *
 */
class MakerLogFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'maker_log';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'maker_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'no_reg' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'advise_lc' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'no_lc' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'note' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        't_CIF' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_branch' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_branch_name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_tlp' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_npwp' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_lc_purpose' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_lc_type' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_facility_type' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_deposit' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_advis' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        't_note' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'm_27' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'sequence of Total', 'precision' => null, 'fixed' => null],
        'm_40A' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Form Of Credit Documentary', 'precision' => null, 'fixed' => null],
        'm_20' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Documentary Credit Number', 'precision' => null, 'fixed' => null],
        'm_23' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Reference to Pre-Advice', 'precision' => null, 'fixed' => null],
        'm_31C' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Date of Issue', 'precision' => null, 'fixed' => null],
        'm_40E' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Applicable Rules', 'precision' => null, 'fixed' => null],
        'm_31D' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Date and place of Expire', 'precision' => null, 'fixed' => null],
        'm_51a' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Applicant Bank', 'precision' => null, 'fixed' => null],
        'm_50' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Aplicant', 'precision' => null, 'fixed' => null],
        'm_59' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Beneficiary', 'precision' => null, 'fixed' => null],
        'm_32B' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Currency Code, Amount', 'precision' => null, 'fixed' => null],
        'm_39A' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Precentage Credit Amount Tolerance', 'precision' => null, 'fixed' => null],
        'm_39B' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'MAximum Credit Amount', 'precision' => null, 'fixed' => null],
        'm_39C' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Aditional Amounts Covered', 'precision' => null, 'fixed' => null],
        'm_41a' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Available With by', 'precision' => null, 'fixed' => null],
        'm_42C' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Drafts at', 'precision' => null, 'fixed' => null],
        'm_42a' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'drawee', 'precision' => null, 'fixed' => null],
        'm_42M' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Mixed Payment Details', 'precision' => null, 'fixed' => null],
        'm_42P' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'NEgotiation/Deferred Payment Details', 'precision' => null, 'fixed' => null],
        'm_43P' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Partial Shipments', 'precision' => null, 'fixed' => null],
        'm_43T' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Transhipment', 'precision' => null, 'fixed' => null],
        'm_44A' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Place of Taking in Charge/Dispatch from..', 'precision' => null, 'fixed' => null],
        'm_44E' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Port of Loading/Airport Departure', 'precision' => null, 'fixed' => null],
        'm_44F' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Port of Discharge/ Airport Destination', 'precision' => null, 'fixed' => null],
        'm_44B' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Place of Final Destination', 'precision' => null, 'fixed' => null],
        'm_44C' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Latest Date of Shipment', 'precision' => null, 'fixed' => null],
        'm_44D' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Shipment Period', 'precision' => null, 'fixed' => null],
        'm_45A' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Descritions of Goods', 'precision' => null],
        'm_46A' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Documents Required', 'precision' => null],
        'm_47A' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Aditional Conditions', 'precision' => null],
        'm_49G' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Special Payment Conditions', 'precision' => null, 'fixed' => null],
        'm_49H' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Special Payment Conditions For Receiving Bank', 'precision' => null, 'fixed' => null],
        'm_71D' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Charges', 'precision' => null, 'fixed' => null],
        'm_48' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Period of Presentation', 'precision' => null, 'fixed' => null],
        'm_49' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Confirmation Instructions', 'precision' => null, 'fixed' => null],
        'm_58a' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Requested Confirmation Party', 'precision' => null, 'fixed' => null],
        'm_53a' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Reimburshing Bank', 'precision' => null, 'fixed' => null],
        'm_78' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Instructions to the Paying', 'precision' => null],
        'm_57a' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Second Advising Bank', 'precision' => null, 'fixed' => null],
        'm_72Z' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Sender to Receiver information', 'precision' => null, 'fixed' => null],
        'status' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'counter_revisi' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created_by' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified_by' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
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
                'maker_id' => 1,
                'no_reg' => 'Lorem ipsum dolor sit amet',
                'advise_lc' => 'Lorem ipsum dolor sit amet',
                'no_lc' => 'Lorem ipsum dolor sit amet',
                'note' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                't_CIF' => 'Lorem ipsum dolor sit amet',
                't_branch' => 'Lorem ipsum dolor sit amet',
                't_branch_name' => 'Lorem ipsum dolor sit amet',
                't_tlp' => 'Lorem ipsum dolor sit amet',
                't_npwp' => 'Lorem ipsum dolor sit amet',
                't_lc_purpose' => 'Lorem ipsum dolor sit amet',
                't_lc_type' => 'Lorem ipsum dolor sit amet',
                't_facility_type' => 'Lorem ipsum dolor sit amet',
                't_deposit' => 'Lorem ipsum dolor sit amet',
                't_advis' => 'Lorem ipsum dolor sit amet',
                't_note' => 'Lorem ipsum dolor sit amet',
                'm_27' => 'Lorem ipsum dolor sit amet',
                'm_40A' => 'Lorem ipsum dolor sit amet',
                'm_20' => 'Lorem ipsum dolor sit amet',
                'm_23' => 'Lorem ipsum dolor sit amet',
                'm_31C' => 'Lorem ipsum dolor sit amet',
                'm_40E' => 'Lorem ipsum dolor sit amet',
                'm_31D' => 'Lorem ipsum dolor sit amet',
                'm_51a' => 'Lorem ipsum dolor sit amet',
                'm_50' => 'Lorem ipsum dolor sit amet',
                'm_59' => 'Lorem ipsum dolor sit amet',
                'm_32B' => 'Lorem ipsum dolor sit amet',
                'm_39A' => 'Lorem ipsum dolor sit amet',
                'm_39B' => 'Lorem ipsum dolor sit amet',
                'm_39C' => 'Lorem ipsum dolor sit amet',
                'm_41a' => 'Lorem ipsum dolor sit amet',
                'm_42C' => 'Lorem ipsum dolor sit amet',
                'm_42a' => 'Lorem ipsum dolor sit amet',
                'm_42M' => 'Lorem ipsum dolor sit amet',
                'm_42P' => 'Lorem ipsum dolor sit amet',
                'm_43P' => 'Lorem ipsum dolor sit amet',
                'm_43T' => 'Lorem ipsum dolor sit amet',
                'm_44A' => 'Lorem ipsum dolor sit amet',
                'm_44E' => 'Lorem ipsum dolor sit amet',
                'm_44F' => 'Lorem ipsum dolor sit amet',
                'm_44B' => 'Lorem ipsum dolor sit amet',
                'm_44C' => 'Lorem ipsum dolor sit amet',
                'm_44D' => 'Lorem ipsum dolor sit amet',
                'm_45A' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'm_46A' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'm_47A' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'm_49G' => 'Lorem ipsum dolor sit amet',
                'm_49H' => 'Lorem ipsum dolor sit amet',
                'm_71D' => 'Lorem ipsum dolor sit amet',
                'm_48' => 'Lorem ipsum dolor sit amet',
                'm_49' => 'Lorem ipsum dolor sit amet',
                'm_58a' => 'Lorem ipsum dolor sit amet',
                'm_53a' => 'Lorem ipsum dolor sit amet',
                'm_78' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'm_57a' => 'Lorem ipsum dolor sit amet',
                'm_72Z' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'counter_revisi' => 1,
                'created_by' => 1,
                'created' => '2019-12-30',
                'modified_by' => 1,
                'modified' => '2019-12-30'
            ],
        ];
        parent::init();
    }
}
