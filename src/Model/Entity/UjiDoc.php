<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UjiDoc Entity
 *
 * @property int $id
 * @property int|null $upload_doc_id
 * @property string|null $status_uji
 * @property \Cake\I18n\FrozenDate|null $tgl_uji
 * @property \Cake\I18n\FrozenDate|null $tgl_target
 * @property \Cake\I18n\FrozenDate|null $created
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenDate|null $modified
 * @property int|null $modified_by
 *
 * @property \App\Model\Entity\UploadDoc $upload_doc
 * @property \App\Model\Entity\UjiDocsDiscrepancy[] $uji_docs_discrepancies
 */
class UjiDoc extends Entity
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
        'upload_doc_id' => true,
        'status_uji' => true,
        'tgl_uji' => true,
        'tgl_target' => true,
        'note' => true,
        'status' => true,
        'approve_date' => true,
        'created' => true,
        'created_by' => true,
        'modified' => true,
        'modified_by' => true,
        'upload_doc' => true,
        'uji_docs_discrepancies' => true
    ];
}
