<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mt730 Entity
 *
 * @property int $id
 * @property string|null $C20
 * @property string|null $C21
 * @property string|null $C25
 * @property string|null $C30
 * @property string|null $C32a
 * @property string|null $C57a
 * @property string|null $C71D
 * @property string|null $C72Z
 * @property string|null $C79Z
 * @property \Cake\I18n\FrozenDate|null $created
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenDate|null $modified
 * @property int|null $modified_by
 */
class Mt730 extends Entity
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
        'C20' => true,
        'C21' => true,
        'C25' => true,
        'C30' => true,
        'C32a' => true,
        'C57a' => true,
        'C71D' => true,
        'C72Z' => true,
        'C79Z' => true,
        'created' => true,
        'created_by' => true,
        'modified' => true,
        'modified_by' => true
    ];
}
