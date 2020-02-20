<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Maker Entity
 *
 * @property int $id
 * @property string|null $advise_lc
 * @property string|null $no_lc
 * @property string|null $t_CIF
 * @property string|null $t_branch
 * @property string|null $t_branch_name
 * @property string|null $t_tlp
 * @property string|null $t_npwp
 * @property string|null $t_lc_purpose
 * @property string|null $t_lc_type
 * @property string|null $t_facility_type
 * @property string|null $t_deposit
 * @property string|null $t_advis
 * @property string|null $t_note
 * @property string|null $m_27
 * @property string|null $m_40A
 * @property string $m_20
 * @property string|null $m_23
 * @property string|null $m_31C
 * @property string|null $m_40E
 * @property string|null $m_31D
 * @property string|null $m_51a
 * @property string|null $m_50
 * @property string $m_59
 * @property string|null $m_32B
 * @property string|null $m_39A
 * @property string|null $m_39B
 * @property string|null $m_39C
 * @property string|null $m_41a
 * @property string|null $m_42C
 * @property string|null $m_42a
 * @property string|null $m_42M
 * @property string|null $m_42P
 * @property string|null $m_43P
 * @property string|null $m_43T
 * @property string|null $m_44A
 * @property string|null $m_44E
 * @property string|null $m_44F
 * @property string|null $m_44B
 * @property string|null $m_44C
 * @property string|null $m_44D
 * @property string|null $m_45A
 * @property string|null $m_46A
 * @property string|null $m_47A
 * @property string|null $m_49G
 * @property string|null $m_49H
 * @property string|null $m_71D
 * @property string|null $m_48
 * @property string|null $m_49
 * @property string|null $m_58a
 * @property string|null $m_53a
 * @property string|null $m_78
 * @property string|null $m_57a
 * @property string|null $m_72Z
 */
class Maker extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'advise_lc' => true,
        'no_reg' => true,
        'no_lc' => true,
        'note' => true,
        't_CIF' => true,
        't_branch' => true,
        't_branch_name' => true,
        't_tlp' => true,
        't_npwp' => true,
        't_lc_purpose' => true,
        't_lc_type' => true,
        't_facility_type' => true,
        't_deposit' => true,
        't_advis' => true,
        't_note' => true,
        'm_27' => true,
        'm_40A' => true,
        'm_20' => true,
        'm_23' => true,
        'm_31C' => true,
        'm_40E' => true,
        'm_31D' => true,
        'm_51a' => true,
        'm_50' => true,
        'm_59' => true,
        'm_32B' => true,
        'm_39A' => true,
        'm_39B' => true,
        'm_39C' => true,
        'm_41a' => true,
        'm_42C' => true,
        'm_42a' => true,
        'm_42M' => true,
        'm_42P' => true,
        'm_43P' => true,
        'm_43T' => true,
        'm_44A' => true,
        'm_44E' => true,
        'm_44F' => true,
        'm_44B' => true,
        'm_44C' => true,
        'm_44D' => true,
        'm_45A' => true,
        'm_46A' => true,
        'm_47A' => true,
        'm_49G' => true,
        'm_49H' => true,
        'm_71D' => true,
        'm_48' => true,
        'm_49' => true,
        'm_58a' => true,
        'm_53a' => true,
        'm_78' => true,
        'm_57a' => true,
        'm_72Z' => true,
        'counter_revisi' => true,
        'status' => true,
        'approve_status' => true,
        'approve_date' => true,
        'amend_status' => true,
        'amend_date' => true,
        'amend_approve_status' => true,
        'amend_approve_date' => true,
        'created_by' => true,
        'created' => true,
        'modified_by' => true,
        'modified' => true,
    ];
}
