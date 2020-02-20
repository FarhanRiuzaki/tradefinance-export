<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mt707 Entity
 *
 * @property string $LC_CODE
 * @property string|null $C1
 * @property string|null $C2
 * @property string|null $C20
 * @property string|null $C21
 * @property string|null $C23
 * @property string|null $C52A
 * @property string|null $C31C
 * @property string|null $C30
 * @property string|null $C26E
 * @property string|null $C59
 * @property string|null $C31E
 * @property string|null $C32B
 * @property string|null $C33B
 * @property string|null $C34B
 * @property string|null $C39A
 * @property string|null $C39B
 * @property string|null $C39C
 * @property string|null $C44A
 * @property string|null $C44E
 * @property string|null $C44F
 * @property string|null $C44B
 * @property string|null $C44C
 * @property string|null $C44D
 * @property string|null $C79
 * @property string|null $C72
 * @property \Cake\I18n\FrozenDate $MNTDT
 * @property int $FLAG
 * @property string|null $REMARK
 * @property string|null $UNIQUEID
 */
class Mt707 extends Entity
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
        'C1' => true,
        'C2' => true,
        'C20' => true,
        'C21' => true,
        'C23' => true,
        'C52A' => true,
        'C31C' => true,
        'C30' => true,
        'C26E' => true,
        'C59' => true,
        'C31E' => true,
        'C32B' => true,
        'C33B' => true,
        'C34B' => true,
        'C39A' => true,
        'C39B' => true,
        'C39C' => true,
        'C44A' => true,
        'C44E' => true,
        'C44F' => true,
        'C44B' => true,
        'C44C' => true,
        'C44D' => true,
        'C79' => true,
        'C72' => true,
        'MNTDT' => true,
        'FLAG' => true,
        'REMARK' => true,
        'UNIQUEID' => true
    ];
}
