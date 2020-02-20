<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UjiDocsFile Model
 *
 * @property \App\Model\Table\UjiDocsTable|\Cake\ORM\Association\BelongsTo $UjiDocs
 *
 * @method \App\Model\Entity\UjiDocsFile get($primaryKey, $options = [])
 * @method \App\Model\Entity\UjiDocsFile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UjiDocsFile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UjiDocsFile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UjiDocsFile|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UjiDocsFile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UjiDocsFile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UjiDocsFile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UjiDocsFileTable extends Table
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

        $this->setTable('uji_docs_file');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UjiDocs', [
            'foreignKey' => 'uji_doc_id'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'file' => [
                'fields' => [
                    'dir' => 'file_dir',
                    'size' => 'file_size',
                    'type' => 'file_type'
                ],
                'nameCallback' => function ($table, $entity, $data, $field, $settings) {
                    return strtolower($data['name']);
                },
                'transformer' =>  function ($table, $entity, $data, $field, $settings) {
                    $extension  = pathinfo($data['name'], PATHINFO_EXTENSION);
                    // $code_unik  = 

                    if($extension == 'jpg'){
                        // Store the thumbnail in a temporary file
                        $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;
    
                        // Use the Imagine library to DO THE THING
                        $size = new \Imagine\Image\Box(40, 40);
                        $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                        $imagine = new \Imagine\Gd\Imagine();
    
                        // Save that modified file to our temp file
                        $imagine->open($data['tmp_name'])
                            ->thumbnail($size, $mode)
                            ->save($tmp);
    
                        // Now return the original *and* the thumbnail
                        return [
                            $data['tmp_name'] => $data['name'],
                            // $tmp => 'thumbnail-' . $data['name'],
                        ];
                    }else{
                        return [
                            $data['tmp_name'] => $data['name'],
                        ];
                        
                    }
                },
                'deleteOnUpdate' => function ($path, $entity, $field, $settings) {
                    // When deleting the entity, both the original and the thumbnail will be removed
                    // when keepFilesOnDelete is set to false
                    DD($path . $entity->{$field});
                    return [
                        $path . $entity->{$field},
                        $path . 'thumbnail-' . $entity->{$field}
                    ];
                    
                },
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    // When deleting the entity, both the original and the thumbnail will be removed
                    // when keepFilesOnDelete is set to false
                    return [
                        $path . $entity->{$field},
                        $path . 'thumbnail-' . $entity->{$field}
                    ];
                },
                'keepFilesOnDelete' => false
            ]
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
            ->scalar('doc_name')
            ->maxLength('doc_name', 255)
            ->allowEmptyString('doc_name');

        $validator
            ->scalar('note')
            ->maxLength('note', 255)
            ->allowEmptyString('note');

        $validator
            ->scalar('file_type')
            ->maxLength('file_type', 255)
            ->allowEmptyFile('file_type');

        $validator
            ->scalar('file_dir')
            ->maxLength('file_dir', 255)
            ->allowEmptyFile('file_dir');

        $validator
            ->numeric('file_size')
            ->allowEmptyFile('file_size');

        $validator
            ->scalar('file_name')
            ->maxLength('file_name', 255)
            ->allowEmptyFile('file_name');

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
        $rules->add($rules->existsIn(['uji_doc_id'], 'UjiDocs'));

        return $rules;
    }
}
