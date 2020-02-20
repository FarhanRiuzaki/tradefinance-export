<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UploadDoc Entity
 *
 * @property int $id
 * @property int|null $maker_id
 * @property string|null $no_lc
 * @property string|null $no_sor
 * @property string|null $amount
 * @property string|null $currency
 * @property string|null $status_lc
 * @property string|null $status_sor
 * @property \Cake\I18n\FrozenDate|null $created
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenDate|null $modified
 * @property int|null $modified_by
 */
class UploadDoc extends Entity
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
        'maker_id' => true,
        'no_lc' => true,
        'no_sor' => true,
        'amount' => true,
        'currency' => true,
        'status_lc' => true,
        'status_sor' => true,
        'created' => true,
        'created_by' => true,
        'modified' => true,
        'modified_by' => true,
        'upload_doc_file'   => true
    ];
}
