<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TransactionsDetails Model
 *
 * @property \App\Model\Table\TransactionsTable|\Cake\ORM\Association\BelongsTo $Transactions
 *
 * @method \App\Model\Entity\TransactionsDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\TransactionsDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TransactionsDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TransactionsDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TransactionsDetail|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TransactionsDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TransactionsDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TransactionsDetail findOrCreate($search, callable $callback = null, $options = [])
 */
class TransactionsDetailsTable extends Table
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

        $this->setTable('transactions_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Transactions', [
            'foreignKey' => 'transaction_id'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('no_rek')
            ->maxLength('no_rek', 255)
            ->allowEmptyString('no_rek');

        $validator
            ->scalar('d_c')
            ->maxLength('d_c', 255)
            ->allowEmptyString('d_c');

        $validator
            ->scalar('currency')
            ->maxLength('currency', 255)
            ->allowEmptyString('currency');

        $validator
            ->scalar('branch')
            ->maxLength('branch', 255)
            ->allowEmptyString('branch');

        $validator
            ->scalar('cost_center')
            ->maxLength('cost_center', 255)
            ->allowEmptyString('cost_center');

        $validator
            ->scalar('reff_no')
            ->maxLength('reff_no', 255)
            ->allowEmptyString('reff_no');

        $validator
            ->scalar('note')
            ->maxLength('note', 255)
            ->allowEmptyString('note');

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
        $rules->add($rules->existsIn(['transaction_id'], 'Transactions'));

        return $rules;
    }
}
