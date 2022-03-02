<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contract Entity
 *
 * @property int $id
 * @property int $client_id
 * @property int $plan_id
 * @property \Cake\I18n\FrozenTime $beggining_date
 * @property \Cake\I18n\FrozenTime $end_date
 * @property \Cake\I18n\FrozenTime $bill_date
 * @property int $status
 * @property int|null $discount
 * @property \Cake\I18n\FrozenTime|null $discount_end
 * @property int|null $extra_tvs
 * @property string $street
 * @property int $number
 * @property string|null $apartment
 * @property string $comuna
 * @property string $region
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Plan $plan
 * @property \App\Model\Entity\ChargeContract[] $charge_contract
 * @property \App\Model\Entity\SaleOrder[] $sale_orders
 */
class Contract extends Entity
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
        'client_id' => true,
        'plan_id' => true,
        'beggining_date' => true,
        'end_date' => true,
        'bill_date' => true,
        'status' => true,
        'discount' => true,
        'discount_end' => true,
        'extra_tvs' => true,
        'street' => true,
        'number' => true,
        'apartment' => true,
        'comuna' => true,
        'region' => true,
        'client' => true,
        'plan' => true,
        'charge_contract' => true,
        'sale_orders' => true,
    ];
}
