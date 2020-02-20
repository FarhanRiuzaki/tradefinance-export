<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mt707 Model
 *
 * @method \App\Model\Entity\Mt707 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mt707 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mt707[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mt707|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mt707|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mt707 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mt707[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mt707 findOrCreate($search, callable $callback = null, $options = [])
 */
class Mt707Table extends Table
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

        $this->setTable('mt707');
        $this->setDisplayField('LC_CODE');
        $this->setPrimaryKey('LC_CODE');
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
            ->scalar('LC_CODE')
            ->maxLength('LC_CODE', 255)
            ->allowEmptyString('LC_CODE', 'create');

        $validator
            ->scalar('C1')
            ->maxLength('C1', 255)
            ->allowEmptyString('C1');

        $validator
            ->scalar('C2')
            ->maxLength('C2', 255)
            ->allowEmptyString('C2');

        $validator
            ->scalar('C20')
            ->maxLength('C20', 255)
            ->allowEmptyString('C20');

        $validator
            ->scalar('C21')
            ->maxLength('C21', 255)
            ->allowEmptyString('C21');

        $validator
            ->scalar('C23')
            ->maxLength('C23', 255)
            ->allowEmptyString('C23');

        $validator
            ->scalar('C52A')
            ->maxLength('C52A', 255)
            ->allowEmptyString('C52A');

        $validator
            ->scalar('C31C')
            ->maxLength('C31C', 255)
            ->allowEmptyString('C31C');

        $validator
            ->scalar('C30')
            ->maxLength('C30', 255)
            ->allowEmptyString('C30');

        $validator
            ->scalar('C26E')
            ->maxLength('C26E', 255)
            ->allowEmptyString('C26E');

        $validator
            ->scalar('C59')
            ->allowEmptyString('C59');

        $validator
            ->scalar('C31E')
            ->maxLength('C31E', 255)
            ->allowEmptyString('C31E');

        $validator
            ->scalar('C32B')
            ->maxLength('C32B', 255)
            ->allowEmptyString('C32B');

        $validator
            ->scalar('C33B')
            ->maxLength('C33B', 255)
            ->allowEmptyString('C33B');

        $validator
            ->scalar('C34B')
            ->maxLength('C34B', 255)
            ->allowEmptyString('C34B');

        $validator
            ->scalar('C39A')
            ->maxLength('C39A', 255)
            ->allowEmptyString('C39A');

        $validator
            ->scalar('C39B')
            ->maxLength('C39B', 255)
            ->allowEmptyString('C39B');

        $validator
            ->scalar('C39C')
            ->maxLength('C39C', 255)
            ->allowEmptyString('C39C');

        $validator
            ->scalar('C44A')
            ->maxLength('C44A', 255)
            ->allowEmptyString('C44A');

        $validator
            ->scalar('C44E')
            ->maxLength('C44E', 255)
            ->allowEmptyString('C44E');

        $validator
            ->scalar('C44F')
            ->maxLength('C44F', 255)
            ->allowEmptyString('C44F');

        $validator
            ->scalar('C44B')
            ->maxLength('C44B', 255)
            ->allowEmptyString('C44B');

        $validator
            ->scalar('C44C')
            ->maxLength('C44C', 255)
            ->allowEmptyString('C44C');

        $validator
            ->scalar('C44D')
            ->maxLength('C44D', 255)
            ->allowEmptyString('C44D');

        $validator
            ->scalar('C79')
            ->allowEmptyString('C79');

        $validator
            ->scalar('C72')
            ->allowEmptyString('C72');

        $validator
            ->date('MNTDT')
            ->requirePresence('MNTDT', 'create')
            ->allowEmptyDate('MNTDT', false);

        $validator
            ->integer('FLAG')
            ->requirePresence('FLAG', 'create')
            ->allowEmptyString('FLAG', false);

        $validator
            ->scalar('REMARK')
            ->allowEmptyString('REMARK');

        $validator
            ->scalar('UNIQUEID')
            ->maxLength('UNIQUEID', 255)
            ->allowEmptyString('UNIQUEID');

        return $validator;
    }
}
