<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $rut
 * @property string $name
 * @property string $lastname
 * @property string $phone
 * @property string $email
 * @property string $type
 *
 * @property \App\Model\Entity\Contract[] $contracts
 */
class Client extends Entity
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
        'rut' => true,
        'name' => true,
        'lastname' => true,
        'phone' => true,
        'email' => true,
        'type' => true,
        'contracts' => true,
    ];
}
