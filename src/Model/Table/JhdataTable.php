<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jhdata Model
 *
 * @method \App\Model\Entity\Jhdata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jhdata newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jhdata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jhdata|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jhdata|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jhdata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jhdata[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jhdata findOrCreate($search, callable $callback = null, $options = [])
 */
class JhdataTable extends Table
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

        $this->setTable('jhdata');
        $this->setDisplayField('JDBR');
        $this->setPrimaryKey('JDBR');
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
            ->decimal('JDBR')
            ->greaterThanOrEqual('JDBR', 0)
            ->allowEmptyString('JDBR', 'create');

        $validator
            ->decimal('JDCBR')
            ->greaterThanOrEqual('JDCBR', 0)
            ->requirePresence('JDCBR', 'create')
            ->allowEmptyString('JDCBR', false);

        $validator
            ->scalar('JDBRID')
            ->maxLength('JDBRID', 10)
            ->requirePresence('JDBRID', 'create')
            ->allowEmptyString('JDBRID', false);

        $validator
            ->scalar('JDNAME')
            ->maxLength('JDNAME', 30)
            ->requirePresence('JDNAME', 'create')
            ->allowEmptyString('JDNAME', false);

        $validator
            ->scalar('JDADDR')
            ->maxLength('JDADDR', 40)
            ->requirePresence('JDADDR', 'create')
            ->allowEmptyString('JDADDR', false);

        $validator
            ->scalar('JDCSZ')
            ->maxLength('JDCSZ', 40)
            ->requirePresence('JDCSZ', 'create')
            ->allowEmptyString('JDCSZ', false);

        $validator
            ->scalar('TAX#')
            ->maxLength('TAX#', 15)
            ->requirePresence('TAX#', 'create')
            ->allowEmptyString('TAX#', false);

        $validator
            ->scalar('JDTELE')
            ->maxLength('JDTELE', 20)
            ->requirePresence('JDTELE', 'create')
            ->allowEmptyString('JDTELE', false);

        $validator
            ->scalar('JDFAX')
            ->maxLength('JDFAX', 20)
            ->requirePresence('JDFAX', 'create')
            ->allowEmptyString('JDFAX', false);

        return $validator;
    }
}
