<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jhdata Entity
 *
 * @property float $JDBR
 * @property float $JDCBR
 * @property string $JDBRID
 * @property string $JDNAME
 * @property string $JDADDR
 * @property string $JDCSZ
 * @property string $TAX#
 * @property string $JDTELE
 * @property string $JDFAX
 */
class Jhdata extends Entity
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
        'JDCBR' => true,
        'JDBRID' => true,
        'JDNAME' => true,
        'JDADDR' => true,
        'JDCSZ' => true,
        'TAX#' => true,
        'JDTELE' => true,
        'JDFAX' => true
    ];
}
