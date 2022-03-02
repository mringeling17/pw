<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contracts Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\PlansTable&\Cake\ORM\Association\BelongsTo $Plans
 * @property \App\Model\Table\ChargeContractTable&\Cake\ORM\Association\HasMany $ChargeContract
 * @property \App\Model\Table\SaleOrdersTable&\Cake\ORM\Association\HasMany $SaleOrders
 *
 * @method \App\Model\Entity\Contract get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contract newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contract[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contract|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contract saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contract patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contract[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contract findOrCreate($search, callable $callback = null, $options = [])
 */
class ContractsTable extends Table
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

        $this->setTable('contracts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Plans', [
            'foreignKey' => 'plan_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('ChargeContract', [
            'foreignKey' => 'contract_id',
        ]);
        $this->hasMany('SaleOrders', [
            'foreignKey' => 'contract_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->dateTime('beggining_date')
            ->requirePresence('beggining_date', 'create')
            ->notEmptyDateTime('beggining_date');

        $validator
            ->dateTime('end_date')
            ->requirePresence('end_date', 'create')
            ->notEmptyDateTime('end_date');

        $validator
            ->dateTime('bill_date')
            ->requirePresence('bill_date', 'create')
            ->notEmptyDateTime('bill_date');

        $validator
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->integer('discount')
            ->allowEmptyString('discount');

        $validator
            ->dateTime('discount_end')
            ->allowEmptyDateTime('discount_end');

        $validator
            ->integer('extra_tvs')
            ->allowEmptyString('extra_tvs');

        $validator
            ->scalar('street')
            ->maxLength('street', 50)
            ->requirePresence('street', 'create')
            ->notEmptyString('street');

        $validator
            ->integer('number')
            ->requirePresence('number', 'create')
            ->notEmptyString('number');

        $validator
            ->scalar('apartment')
            ->maxLength('apartment', 10)
            ->allowEmptyString('apartment');

        $validator
            ->scalar('comuna')
            ->maxLength('comuna', 20)
            ->requirePresence('comuna', 'create')
            ->notEmptyString('comuna');

        $validator
            ->scalar('region')
            ->maxLength('region', 20)
            ->requirePresence('region', 'create')
            ->notEmptyString('region');

        return $validator;
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
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['plan_id'], 'Plans'));

        return $rules;
    }
}
