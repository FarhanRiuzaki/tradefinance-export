<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mt730 Model
 *
 * @method \App\Model\Entity\Mt730 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mt730 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mt730[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mt730|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mt730|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mt730 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mt730[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mt730 findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class Mt730Table extends Table
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

        $this->setTable('mt730');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('C20')
            ->maxLength('C20', 255)
            ->allowEmptyString('C20');

        $validator
            ->scalar('C21')
            ->maxLength('C21', 255)
            ->allowEmptyString('C21');

        $validator
            ->scalar('C25')
            ->maxLength('C25', 255)
            ->allowEmptyString('C25');

        $validator
            ->scalar('C30')
            ->maxLength('C30', 255)
            ->allowEmptyString('C30');

        $validator
            ->scalar('C32a')
            ->maxLength('C32a', 255)
            ->allowEmptyString('C32a');

        $validator
            ->scalar('C57a')
            ->maxLength('C57a', 255)
            ->allowEmptyString('C57a');

        $validator
            ->scalar('C71D')
            ->maxLength('C71D', 255)
            ->allowEmptyString('C71D');

        $validator
            ->scalar('C72Z')
            ->maxLength('C72Z', 255)
            ->allowEmptyString('C72Z');

        $validator
            ->scalar('C79Z')
            ->maxLength('C79Z', 255)
            ->allowEmptyString('C79Z');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->integer('modified_by')
            ->allowEmptyString('modified_by');

        return $validator;
    }
}
