<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UjiDocsDiscrepancy Entity
 *
 * @property int $id
 * @property int|null $uji_doc_id
 * @property string|null $discrepancy
 *
 * @property \App\Model\Entity\UjiDoc $uji_doc
 */
class UjiDocsDiscrepancy extends Entity
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
        'uji_doc_id' => true,
        'discrepancy' => true,
        'uji_doc' => true
    ];
}
