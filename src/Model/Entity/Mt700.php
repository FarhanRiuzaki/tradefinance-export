<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mt700 Entity
 *
 * @property string $LC_CODE
 * @property string|null $C1
 * @property string|null $C2
 * @property string|null $C27
 * @property string|null $C40A
 * @property string|null $C20
 * @property string|null $C23
 * @property string|null $C31C
 * @property string|null $C40E
 * @property string|null $C31D
 * @property string|null $C51A
 * @property string|null $C51D
 * @property string|null $C50
 * @property string|null $C59
 * @property string|null $C32B
 * @property string|null $C39A
 * @property string|null $C39B
 * @property string|null $C39C
 * @property string|null $C41A
 * @property string|null $C41D
 * @property string|null $C42C
 * @property string|null $C42A
 * @property string|null $C42D
 * @property string|null $C42M
 * @property string|null $C42P
 * @property string|null $C43P
 * @property string|null $C43T
 * @property string|null $C44A
 * @property string|null $C44E
 * @property string|null $C44F
 * @property string|null $C44C
 * @property string|null $C44D
 * @property string|null $C45A
 * @property string|null $C46A
 * @property string|null $C47A
 * @property string|null $C71B
 * @property string|null $C48
 * @property string|null $C49
 * @property string|null $C53A
 * @property string|null $C53D
 * @property string|null $C78
 * @property string|null $C57A
 * @property string|null $C57B
 * @property string|null $C57D
 * @property string|null $C72
 * @property \Cake\I18n\FrozenDate $MNTDT
 * @property int $FLAG
 * @property string|null $REMARK
 * @property string|null $UNIQUEID
 */
class Mt700 extends Entity
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
        'C27' => true,
        'C40A' => true,
        'C20' => true,
        'C23' => true,
        'C31C' => true,
        'C40E' => true,
        'C31D' => true,
        'C51A' => true,
        'C51D' => true,
        'C50' => true,
        'C59' => true,
        'C32B' => true,
        'C39A' => true,
        'C39B' => true,
        'C39C' => true,
        'C41A' => true,
        'C41D' => true,
        'C42C' => true,
        'C42A' => true,
        'C42D' => true,
        'C42M' => true,
        'C42P' => true,
        'C43P' => true,
        'C43T' => true,
        'C44A' => true,
        'C44E' => true,
        'C44F' => true,
        'C44C' => true,
        'C44D' => true,
        'C45A' => true,
        'C46A' => true,
        'C47A' => true,
        'C71B' => true,
        'C48' => true,
        'C49' => true,
        'C53A' => true,
        'C53D' => true,
        'C78' => true,
        'C57A' => true,
        'C57B' => true,
        'C57D' => true,
        'C72' => true,
        'MNTDT' => true,
        'FLAG' => true,
        'REMARK' => true,
        'UNIQUEID' => true
    ];
}
