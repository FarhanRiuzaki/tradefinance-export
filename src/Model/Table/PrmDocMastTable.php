<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PrmDocMast Model
 *
 * @method \App\Model\Entity\PrmDocMast get($primaryKey, $options = [])
 * @method \App\Model\Entity\PrmDocMast newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PrmDocMast[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PrmDocMast|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PrmDocMast|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PrmDocMast patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PrmDocMast[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PrmDocMast findOrCreate($search, callable $callback = null, $options = [])
 */
class PrmDocMastTable extends Table
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

        $this->setTable('prm_doc_mast');
        $this->setDisplayField('doc_id');
        $this->setPrimaryKey('doc_id');
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
            ->integer('doc_id')
            ->allowEmptyString('doc_id', 'create');

        $validator
            ->scalar('doc_code')
            ->maxLength('doc_code', 4)
            ->allowEmptyString('doc_code');

        $validator
            ->scalar('doc_desc')
            ->allowEmptyString('doc_desc');

        $validator
            ->allowEmptyString('doc_mdtry');

        return $validator;
    }
}
