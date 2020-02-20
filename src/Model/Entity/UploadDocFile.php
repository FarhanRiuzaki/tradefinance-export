<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UploadDocFile Entity
 *
 * @property int $id
 * @property int|null $upload_doc_id
 * @property string|null $code
 * @property string|null $file_name
 * @property string|null $note
 *
 * @property \App\Model\Entity\UploadDoc $upload_doc
 */
class UploadDocFile extends Entity
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
        'no_sor' => true,
        'code' => true,
        'file' => true,
        'file_Dir' => true,
        'file_type' => true,
        'file_size' => true,
        'file_name' => true,
        'note' => true,
        'upload_doc' => true
    ];
}
