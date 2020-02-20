<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Maker Model
 *
 * @method \App\Model\Entity\Maker get($primaryKey, $options = [])
 * @method \App\Model\Entity\Maker newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Maker[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Maker|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Maker|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Maker patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Maker[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Maker findOrCreate($search, callable $callback = null, $options = [])
 */
class MakerTable extends Table
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
        
        $this->setTable('maker');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('UploadDoc', [
            'foreignKey'    => 'maker_id',
            'joinType'      => 'INNER'
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
            ->scalar('advise_lc')
            ->maxLength('advise_lc', 255)
            ->allowEmptyString('advise_lc');

        $validator
            ->scalar('no_lc')
            ->maxLength('no_lc', 255)
            ->allowEmptyString('no_lc');

        $validator
            ->scalar('t_CIF')
            ->maxLength('t_CIF', 255)
            ->allowEmptyString('t_CIF');

        $validator
            ->scalar('t_branch')
            ->maxLength('t_branch', 255)
            ->allowEmptyString('t_branch');

        $validator
            ->scalar('t_branch_name')
            ->maxLength('t_branch_name', 255)
            ->allowEmptyString('t_branch_name');

        $validator
            ->scalar('t_tlp')
            ->maxLength('t_tlp', 255)
            ->allowEmptyString('t_tlp');

        $validator
            ->scalar('t_npwp')
            ->maxLength('t_npwp', 255)
            ->allowEmptyString('t_npwp');

        $validator
            ->scalar('t_lc_purpose')
            ->maxLength('t_lc_purpose', 255)
            ->allowEmptyString('t_lc_purpose');

        $validator
            ->scalar('t_lc_type')
            ->maxLength('t_lc_type', 255)
            ->allowEmptyString('t_lc_type');

        $validator
            ->scalar('t_facility_type')
            ->maxLength('t_facility_type', 255)
            ->allowEmptyString('t_facility_type');

        $validator
            ->scalar('t_deposit')
            ->maxLength('t_deposit', 255)
            ->allowEmptyString('t_deposit');

        $validator
            ->scalar('t_advis')
            ->maxLength('t_advis', 255)
            ->allowEmptyString('t_advis');

        $validator
            ->scalar('t_note')
            ->maxLength('t_note', 255)
            ->allowEmptyString('t_note');

        $validator
            ->scalar('m_27')
            ->maxLength('m_27', 255)
            ->allowEmptyString('m_27');

        $validator
            ->scalar('m_40A')
            ->maxLength('m_40A', 255)
            ->allowEmptyString('m_40A');

        $validator
            ->scalar('m_20')
            ->maxLength('m_20', 255)
            ->requirePresence('m_20', 'create')
            ->allowEmptyString('m_20', false);

        $validator
            ->scalar('m_23')
            ->maxLength('m_23', 255)
            ->allowEmptyString('m_23');

        $validator
            ->scalar('m_31C')
            ->maxLength('m_31C', 255)
            ->allowEmptyString('m_31C');

        $validator
            ->scalar('m_40E')
            ->maxLength('m_40E', 255)
            ->allowEmptyString('m_40E');

        $validator
            ->scalar('m_31D')
            ->maxLength('m_31D', 255)
            ->allowEmptyString('m_31D');

        $validator
            ->scalar('m_51a')
            ->maxLength('m_51a', 255)
            ->allowEmptyString('m_51a');

        $validator
            ->scalar('m_50')
            ->maxLength('m_50', 255)
            ->allowEmptyString('m_50');

        $validator
            ->scalar('m_59')
            ->maxLength('m_59', 255)
            ->requirePresence('m_59', 'create')
            ->allowEmptyString('m_59', false);

        $validator
            ->scalar('m_32B')
            ->maxLength('m_32B', 255)
            ->allowEmptyString('m_32B');

        $validator
            ->scalar('m_39A')
            ->maxLength('m_39A', 255)
            ->allowEmptyString('m_39A');

        $validator
            ->scalar('m_39B')
            ->maxLength('m_39B', 255)
            ->allowEmptyString('m_39B');

        $validator
            ->scalar('m_39C')
            ->maxLength('m_39C', 255)
            ->allowEmptyString('m_39C');

        $validator
            ->scalar('m_41a')
            ->maxLength('m_41a', 255)
            ->allowEmptyString('m_41a');

        $validator
            ->scalar('m_42C')
            ->maxLength('m_42C', 255)
            ->allowEmptyString('m_42C');

        $validator
            ->scalar('m_42a')
            ->maxLength('m_42a', 255)
            ->allowEmptyString('m_42a');

        $validator
            ->scalar('m_42M')
            ->maxLength('m_42M', 255)
            ->allowEmptyString('m_42M');

        $validator
            ->scalar('m_42P')
            ->maxLength('m_42P', 255)
            ->allowEmptyString('m_42P');

        $validator
            ->scalar('m_43P')
            ->maxLength('m_43P', 255)
            ->allowEmptyString('m_43P');

        $validator
            ->scalar('m_43T')
            ->maxLength('m_43T', 255)
            ->allowEmptyString('m_43T');

        $validator
            ->scalar('m_44A')
            ->maxLength('m_44A', 255)
            ->allowEmptyString('m_44A');

        $validator
            ->scalar('m_44E')
            ->maxLength('m_44E', 255)
            ->allowEmptyString('m_44E');

        $validator
            ->scalar('m_44F')
            ->maxLength('m_44F', 255)
            ->allowEmptyString('m_44F');

        $validator
            ->scalar('m_44B')
            ->maxLength('m_44B', 255)
            ->allowEmptyString('m_44B');

        $validator
            ->scalar('m_44C')
            ->maxLength('m_44C', 255)
            ->allowEmptyString('m_44C');

        $validator
            ->scalar('m_44D')
            ->maxLength('m_44D', 255)
            ->allowEmptyString('m_44D');

        // $validator
        //     ->scalar('m_45A')
        //     ->maxLength('m_45A', 255)
        //     ->allowEmptyString('m_45A');

        $validator
            ->scalar('m_49G')
            ->maxLength('m_49G', 255)
            ->allowEmptyString('m_49G');

        $validator
            ->scalar('m_49H')
            ->maxLength('m_49H', 255)
            ->allowEmptyString('m_49H');

        $validator
            ->scalar('m_71D')
            ->maxLength('m_71D', 255)
            ->allowEmptyString('m_71D');

        $validator
            ->scalar('m_48')
            ->maxLength('m_48', 255)
            ->allowEmptyString('m_48');

        $validator
            ->scalar('m_49')
            ->maxLength('m_49', 255)
            ->allowEmptyString('m_49');

        $validator
            ->scalar('m_58a')
            ->maxLength('m_58a', 255)
            ->allowEmptyString('m_58a');

        $validator
            ->scalar('m_53a')
            ->maxLength('m_53a', 255)
            ->allowEmptyString('m_53a');

        $validator
            ->scalar('m_57a')
            ->maxLength('m_57a', 255)
            ->allowEmptyString('m_57a');

        $validator
            ->scalar('m_72Z')
            ->maxLength('m_72Z', 255)
            ->allowEmptyString('m_72Z');

        return $validator;
    }

    public function beforeSave(\Cake\Event\Event $event, \Cake\ORM\Entity $entity, 
    \ArrayObject $options)
    {
        // dd($entity);
        if($entity->status == 1 && $entity->counter_revisi == null){
            $parent = $this->find('all')->order('id desc')->first();

            $prefix = 'LC/EKSPOR/';
            $year   = date('Y');
    
            if($parent == null){
                $code = $prefix . '00001/' . $entity->t_branch . '/' . $year . '/01'  ;
            }else{
                $get_last_code  = $parent->no_reg;
                $get_last_code  = (int) substr($get_last_code, 10, 5);
                $get_last_code  = $get_last_code + 1;
                if($get_last_code < 10){
                    $last_code = '0000' . $get_last_code;
                }elseif($get_last_code < 100){
                    $last_code = '000' . $get_last_code;
                }elseif($get_last_code < 1000){
                    $last_code = '00' . $get_last_code;
                }elseif($get_last_code < 10000){
                    $last_code = '0' . $get_last_code;
                }elseif($get_last_code < 100000){
                    $last_code = $get_last_code;
                }
                $code = $prefix . $last_code .'/' . $entity->t_branch . '/' . $year . '/01'  ;

            }
            $entity->no_reg = $code;
            // dd($entity);
            return true;
        }   
    }
}
