<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UjiDocs Model
 *
 * @property \App\Model\Table\UploadDocsTable|\Cake\ORM\Association\BelongsTo $UploadDocs
 * @property \App\Model\Table\UjiDocsDiscrepanciesTable|\Cake\ORM\Association\HasMany $UjiDocsDiscrepancies
 *
 * @method \App\Model\Entity\UjiDoc get($primaryKey, $options = [])
 * @method \App\Model\Entity\UjiDoc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UjiDoc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UjiDoc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UjiDoc|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UjiDoc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UjiDoc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UjiDoc findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UjiDocsTable extends Table
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

        $this->setTable('uji_docs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UploadDoc', [
            'foreignKey' => 'upload_doc_id'
        ]);
        $this->hasMany('UjiDocsDiscrepancies', [
            'foreignKey' => 'uji_doc_id'
        ]);
        $this->hasMany('UjiDocsFile', [
            'foreignKey' => 'uji_doc_id'
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
            ->scalar('status_uji')
            ->maxLength('status_uji', 255)
            ->allowEmptyString('status_uji');

        $validator
            ->date('tgl_uji')
            ->allowEmptyDate('tgl_uji');

        $validator
            ->date('tgl_target')
            ->allowEmptyDate('tgl_target');

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
        $rules->add($rules->existsIn(['upload_doc_id'], 'UploadDoc'));

        return $rules;
    }
}
