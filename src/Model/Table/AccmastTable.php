<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accmast Model
 *
 * @method \App\Model\Entity\Accmast get($primaryKey, $options = [])
 * @method \App\Model\Entity\Accmast newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Accmast[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Accmast|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accmast|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Accmast patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Accmast[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Accmast findOrCreate($search, callable $callback = null, $options = [])
 */
class AccmastTable extends Table
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

        $this->setTable('accmast');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
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
            ->integer('ID')
            ->allowEmptyString('ID', 'create');

        $validator
            ->scalar('ACCTNO')
            ->maxLength('ACCTNO', 19)
            ->requirePresence('ACCTNO', 'create')
            ->allowEmptyString('ACCTNO', false);

        $validator
            ->scalar('DDCTYP')
            ->maxLength('DDCTYP', 4)
            ->requirePresence('DDCTYP', 'create')
            ->allowEmptyString('DDCTYP', false);

        $validator
            ->scalar('CIFNO')
            ->maxLength('CIFNO', 7)
            ->requirePresence('CIFNO', 'create')
            ->allowEmptyString('CIFNO', false);

        return $validator;
    }
}
