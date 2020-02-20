<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int|null $upload_doc_id
 * @property string|null $jenis_trx
 * @property string|null $no_nota
 * @property \Cake\I18n\FrozenDate|null $tgl_input_trx
 * @property \Cake\I18n\FrozenDate|null $tgl_approve_trx
 * @property int|null $status
 * @property \Cake\I18n\FrozenDate|null $created
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenDate|null $modified
 * @property int|null $modified_by
 *
 * @property \App\Model\Entity\UploadDoc $upload_doc
 * @property \App\Model\Entity\TransactionsDetail[] $transactions_details
 */
class Transaction extends Entity
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
        'jenis_trx' => true,
        'no_nota' => true,
        'tgl_input_trx' => true,
        'tgl_approve_trx' => true,
        'note' => true,
        'status' => true,
        'created' => true,
        'created_by' => true,
        'modified' => true,
        'modified_by' => true,
        'upload_doc' => true,
        'transactions_details' => true
    ];
}
