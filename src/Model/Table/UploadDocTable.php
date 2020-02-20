<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UploadDoc Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $Makers
 * @property |\Cake\ORM\Association\HasMany $UploadDocFile
 *
 * @method \App\Model\Entity\UploadDoc get($primaryKey, $options = [])
 * @method \App\Model\Entity\UploadDoc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UploadDoc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UploadDoc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UploadDoc|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UploadDoc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UploadDoc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UploadDoc findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UploadDocTable extends Table
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

        $this->setTable('upload_doc');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Maker', [
            'foreignKey' => 'maker_id'
        ]);
        $this->hasMany('UjiDocs', [
            'foreignKey' => 'upload_doc_id'
        ]);
        $this->hasMany('Transactions', [
            'foreignKey' => 'upload_doc_id'
        ]);
        $this->hasMany('UploadDocFile', [
            'foreignKey' => 'upload_doc_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
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
            ->scalar('no_lc')
            ->maxLength('no_lc', 255)
            ->allowEmptyString('no_lc');

        $validator
            ->scalar('no_sor')
            ->maxLength('no_sor', 255)
            ->allowEmptyString('no_sor');

        $validator
            ->scalar('amount')
            ->maxLength('amount', 255)
            ->allowEmptyString('amount');

        $validator
            ->scalar('currency')
            ->maxLength('currency', 255)
            ->allowEmptyString('currency');

        $validator
            ->scalar('status_lc')
            ->maxLength('status_lc', 255)
            ->allowEmptyString('status_lc');

        $validator
            ->scalar('status_sor')
            ->maxLength('status_sor', 255)
            ->allowEmptyString('status_sor');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->integer('modified_by')
            ->allowEmptyString('modified_by');

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
        $rules->add($rules->existsIn(['maker_id'], 'Maker'));

        return $rules;
    }
}
