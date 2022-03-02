<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bill Entity
 *
 * @property int $id
 * @property int $order_id
 * @property int $amount
 * @property int $iva
 * @property \Cake\I18n\FrozenTime $date
 *
 * @property \App\Model\Entity\SaleOrder $sale_order
 */
class Bill extends Entity
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
        'amount' => true,
        'iva' => true,
        'date' => true,
        'sale_order' => true,
    ];
}
