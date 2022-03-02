<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SaleOrder Entity
 *
 * @property int $id
 * @property int $contract_id
 * @property \Cake\I18n\FrozenTime $date
 * @property int $amount
 * @property int $payed
 * @property \Cake\I18n\FrozenTime $due_date
 *
 * @property \App\Model\Entity\Contract $contract
 */
class SaleOrder extends Entity
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
        'date' => true,
        'amount' => true,
        'payed' => true,
        'due_date' => true,
        'contract' => true,
    ];
}
