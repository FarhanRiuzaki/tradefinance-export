<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TransactionsDetail Entity
 *
 * @property int $id
 * @property int|null $transaction_id
 * @property string|null $no_rek
 * @property string|null $d_c
 * @property string|null $currency
 * @property string|null $branch
 * @property string|null $cost_center
 * @property string|null $reff_no
 * @property string|null $note
 *
 * @property \App\Model\Entity\Transaction $transaction
 */
class TransactionsDetail extends Entity
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
        'transaction_id' => true,
        'no_rek' => true,
        'd_c' => true,
        'currency' => true,
        'branch' => true,
        'branch_name' => true,
        'cost_center' => true,
        'reff_no' => true,
        'note' => true,
        'transaction' => true
    ];
}
