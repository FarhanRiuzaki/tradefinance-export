<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Accmast Entity
 *
 * @property int $ID
 * @property string $ACCTNO
 * @property string $DDCTYP
 * @property string $CIFNO
 */
class Accmast extends Entity
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
        'ACCTNO' => true,
        'DDCTYP' => true,
        'CIFNO' => true
    ];
}
