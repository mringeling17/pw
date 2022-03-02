<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plan Entity
 *
 * @property int $id
 * @property string $name
 * @property int $channels
 * @property int $internet_speed
 * @property int $value
 * @property int $extratv_value
 *
 * @property \App\Model\Entity\Contract[] $contracts
 */
class Plan extends Entity
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
        'name' => true,
        'channels' => true,
        'internet_speed' => true,
        'value' => true,
        'extratv_value' => true,
        'contracts' => true,
    ];
}
