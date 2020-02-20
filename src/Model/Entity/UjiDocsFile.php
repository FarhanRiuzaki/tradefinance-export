<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UjiDocsFile Entity
 *
 * @property int $id
 * @property int|null $uji_doc_id
 * @property string|null $doc_name
 * @property string|null $note
 * @property string|null $file_type
 * @property string|null $file_dir
 * @property float|null $file_size
 * @property string|null $file_name
 * @property \Cake\I18n\FrozenDate|null $created
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenDate|null $modified
 * @property int|null $modified_by
 *
 * @property \App\Model\Entity\UjiDoc $uji_doc
 */
class UjiDocsFile extends Entity
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
        'doc_name' => true,
        'note' => true,
        'file' => true,
        'file_type' => true,
        'file_dir' => true,
        'file_size' => true,
        'file_name' => true,
        'created' => true,
        'created_by' => true,
        'modified' => true,
        'modified_by' => true,
        'uji_doc' => true
    ];
}
