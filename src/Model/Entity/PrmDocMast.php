<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PrmDocMast Entity
 *
 * @property int $doc_id
 * @property string|null $doc_code
 * @property string|null $doc_desc
 * @property int|null $doc_mdtry
 */
class PrmDocMast extends Entity
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
        'doc_code' => true,
        'doc_desc' => true,
        'doc_mdtry' => true
    ];
}
