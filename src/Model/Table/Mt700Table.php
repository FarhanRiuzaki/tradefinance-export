<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mt700 Model
 *
 * @method \App\Model\Entity\Mt700 get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mt700 newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mt700[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mt700|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mt700|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mt700 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mt700[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mt700 findOrCreate($search, callable $callback = null, $options = [])
 */
class Mt700Table extends Table
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

        $this->setTable('mt700');
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
            ->scalar('C27')
            ->maxLength('C27', 255)
            ->allowEmptyString('C27');

        $validator
            ->scalar('C40A')
            ->maxLength('C40A', 255)
            ->allowEmptyString('C40A');

        $validator
            ->scalar('C20')
            ->maxLength('C20', 255)
            ->allowEmptyString('C20');

        $validator
            ->scalar('C23')
            ->maxLength('C23', 255)
            ->allowEmptyString('C23');

        $validator
            ->scalar('C31C')
            ->maxLength('C31C', 255)
            ->allowEmptyString('C31C');

        $validator
            ->scalar('C40E')
            ->maxLength('C40E', 255)
            ->allowEmptyString('C40E');

        $validator
            ->scalar('C31D')
            ->maxLength('C31D', 255)
            ->allowEmptyString('C31D');

        $validator
            ->scalar('C51A')
            ->maxLength('C51A', 255)
            ->allowEmptyString('C51A');

        $validator
            ->scalar('C51D')
            ->maxLength('C51D', 255)
            ->allowEmptyString('C51D');

        $validator
            ->scalar('C50')
            ->allowEmptyString('C50');

        $validator
            ->scalar('C59')
            ->allowEmptyString('C59');

        $validator
            ->scalar('C32B')
            ->maxLength('C32B', 255)
            ->allowEmptyString('C32B');

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
            ->scalar('C41A')
            ->allowEmptyString('C41A');

        $validator
            ->scalar('C41D')
            ->allowEmptyString('C41D');

        $validator
            ->scalar('C42C')
            ->maxLength('C42C', 255)
            ->allowEmptyString('C42C');

        $validator
            ->scalar('C42A')
            ->maxLength('C42A', 255)
            ->allowEmptyString('C42A');

        $validator
            ->scalar('C42D')
            ->maxLength('C42D', 255)
            ->allowEmptyString('C42D');

        $validator
            ->scalar('C42M')
            ->maxLength('C42M', 255)
            ->allowEmptyString('C42M');

        $validator
            ->scalar('C42P')
            ->maxLength('C42P', 255)
            ->allowEmptyString('C42P');

        $validator
            ->scalar('C43P')
            ->maxLength('C43P', 255)
            ->allowEmptyString('C43P');

        $validator
            ->scalar('C43T')
            ->maxLength('C43T', 255)
            ->allowEmptyString('C43T');

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
            ->scalar('C44C')
            ->maxLength('C44C', 255)
            ->allowEmptyString('C44C');

        $validator
            ->scalar('C44D')
            ->maxLength('C44D', 255)
            ->allowEmptyString('C44D');

        $validator
            ->scalar('C45A')
            ->allowEmptyString('C45A');

        $validator
            ->scalar('C46A')
            ->allowEmptyString('C46A');

        $validator
            ->scalar('C47A')
            ->allowEmptyString('C47A');

        $validator
            ->scalar('C71B')
            ->maxLength('C71B', 255)
            ->allowEmptyString('C71B');

        $validator
            ->scalar('C48')
            ->maxLength('C48', 255)
            ->allowEmptyString('C48');

        $validator
            ->scalar('C49')
            ->maxLength('C49', 255)
            ->allowEmptyString('C49');

        $validator
            ->scalar('C53A')
            ->maxLength('C53A', 255)
            ->allowEmptyString('C53A');

        $validator
            ->scalar('C53D')
            ->maxLength('C53D', 255)
            ->allowEmptyString('C53D');

        $validator
            ->scalar('C78')
            ->allowEmptyString('C78');

        $validator
            ->scalar('C57A')
            ->maxLength('C57A', 255)
            ->allowEmptyString('C57A');

        $validator
            ->scalar('C57B')
            ->maxLength('C57B', 255)
            ->allowEmptyString('C57B');

        $validator
            ->scalar('C57D')
            ->maxLength('C57D', 255)
            ->allowEmptyString('C57D');

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
