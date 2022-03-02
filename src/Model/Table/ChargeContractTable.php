<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChargeContract Model
 *
 * @property \App\Model\Table\ChargesTable&\Cake\ORM\Association\BelongsTo $Charges
 * @property \App\Model\Table\ContractsTable&\Cake\ORM\Association\BelongsTo $Contracts
 *
 * @method \App\Model\Entity\ChargeContract get($primaryKey, $options = [])
 * @method \App\Model\Entity\ChargeContract newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ChargeContract[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ChargeContract|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChargeContract saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChargeContract patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ChargeContract[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ChargeContract findOrCreate($search, callable $callback = null, $options = [])
 */
class ChargeContractTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('charge_contract');
        $this->setDisplayField('charge_id');
        $this->setPrimaryKey(['charge_id', 'contract_id']);

        $this->belongsTo('Charges', [
            'foreignKey' => 'charge_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Contracts', [
            'foreignKey' => 'contract_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['charge_id'], 'Charges'));
        $rules->add($rules->existsIn(['contract_id'], 'Contracts'));

        return $rules;
    }
}
