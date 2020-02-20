<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cifmast Model
 *
 * @method \App\Model\Entity\Cifmast get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cifmast newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cifmast[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cifmast|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cifmast|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cifmast patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cifmast[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cifmast findOrCreate($search, callable $callback = null, $options = [])
 */
class CifmastTable extends Table
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

        $this->setTable('cifmast');
        $this->setDisplayField('CIFNO');
        $this->setPrimaryKey('CIFNO');
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
            ->scalar('CIFNO')
            ->maxLength('CIFNO', 7)
            ->allowEmptyString('CIFNO', 'create');

        $validator
            ->scalar('CFSNME')
            ->maxLength('CFSNME', 20)
            ->allowEmptyString('CFSNME');

        $validator
            ->scalar('CFBRNN')
            ->maxLength('CFBRNN', 3)
            ->allowEmptyString('CFBRNN');

        $validator
            ->scalar('CFNA1')
            ->maxLength('CFNA1', 40)
            ->allowEmptyString('CFNA1');

        $validator
            ->scalar('CFSSCD')
            ->maxLength('CFSSCD', 2)
            ->allowEmptyString('CFSSCD');

        $validator
            ->scalar('CFSSNO')
            ->maxLength('CFSSNO', 25)
            ->allowEmptyString('CFSSNO');

        $validator
            ->scalar('CFIEX6')
            ->maxLength('CFIEX6', 6)
            ->allowEmptyString('CFIEX6');

        $validator
            ->scalar('CFYIDP')
            ->maxLength('CFYIDP', 30)
            ->allowEmptyString('CFYIDP');

        $validator
            ->scalar('CFYIDS')
            ->maxLength('CFYIDS', 1)
            ->allowEmptyString('CFYIDS');

        $validator
            ->scalar('CFCLAS')
            ->maxLength('CFCLAS', 1)
            ->allowEmptyString('CFCLAS');

        $validator
            ->scalar('TTLCD')
            ->maxLength('TTLCD', 4)
            ->allowEmptyString('TTLCD');

        $validator
            ->scalar('DESTTL')
            ->maxLength('DESTTL', 25)
            ->allowEmptyString('DESTTL');

        $validator
            ->scalar('CFBIR6')
            ->maxLength('CFBIR6', 6)
            ->allowEmptyString('CFBIR6');

        $validator
            ->scalar('CFYBIP')
            ->maxLength('CFYBIP', 30)
            ->allowEmptyString('CFYBIP');

        $validator
            ->scalar('CFSIC1')
            ->maxLength('CFSIC1', 1)
            ->allowEmptyString('CFSIC1');

        $validator
            ->scalar('MTHNM')
            ->maxLength('MTHNM', 40)
            ->allowEmptyString('MTHNM');

        $validator
            ->scalar('CFNA2')
            ->maxLength('CFNA2', 40)
            ->allowEmptyString('CFNA2');

        $validator
            ->scalar('CFNA3')
            ->maxLength('CFNA3', 40)
            ->allowEmptyString('CFNA3');

        $validator
            ->scalar('CFNA4')
            ->maxLength('CFNA4', 40)
            ->allowEmptyString('CFNA4');

        $validator
            ->scalar('CFNA5')
            ->maxLength('CFNA5', 40)
            ->allowEmptyString('CFNA5');

        $validator
            ->scalar('CFZIP')
            ->maxLength('CFZIP', 9)
            ->allowEmptyString('CFZIP');

        $validator
            ->scalar('CFNPWP')
            ->maxLength('CFNPWP', 40)
            ->allowEmptyString('CFNPWP');

        $validator
            ->scalar('CFBIC')
            ->maxLength('CFBIC', 40)
            ->allowEmptyString('CFBIC');

        $validator
            ->scalar('CFAPI')
            ->maxLength('CFAPI', 40)
            ->allowEmptyString('CFAPI');

        $validator
            ->scalar('MEMO')
            ->allowEmptyString('MEMO');

        $validator
            ->dateTime('MNTDT')
            ->allowEmptyDateTime('MNTDT');

        $validator
            ->scalar('CFCUSTYP')
            ->maxLength('CFCUSTYP', 1)
            ->allowEmptyString('CFCUSTYP');

        $validator
            ->scalar('CFKELURAHAN')
            ->maxLength('CFKELURAHAN', 50)
            ->allowEmptyString('CFKELURAHAN');

        $validator
            ->scalar('CFKECAMATAN')
            ->maxLength('CFKECAMATAN', 50)
            ->allowEmptyString('CFKECAMATAN');

        $validator
            ->scalar('CFTLPN')
            ->maxLength('CFTLPN', 12)
            ->allowEmptyString('CFTLPN');

        $validator
            ->scalar('CFTLPHP')
            ->maxLength('CFTLPHP', 12)
            ->allowEmptyString('CFTLPHP');

        $validator
            ->scalar('CFMAIL')
            ->maxLength('CFMAIL', 50)
            ->allowEmptyString('CFMAIL');

        $validator
            ->scalar('CFKND')
            ->maxLength('CFKND', 2)
            ->allowEmptyString('CFKND');

        $validator
            ->scalar('CFKDPK')
            ->maxLength('CFKDPK', 5)
            ->allowEmptyString('CFKDPK');

        $validator
            ->scalar('CFTPBK')
            ->maxLength('CFTPBK', 12)
            ->allowEmptyString('CFTPBK');

        $validator
            ->scalar('CFKDKAB')
            ->maxLength('CFKDKAB', 4)
            ->allowEmptyString('CFKDKAB');

        $validator
            ->scalar('CFKDBU')
            ->maxLength('CFKDBU', 12)
            ->allowEmptyString('CFKDBU');

        $validator
            ->scalar('CFALTB')
            ->maxLength('CFALTB', 12)
            ->allowEmptyString('CFALTB');

        $validator
            ->decimal('CFPKPT')
            ->allowEmptyString('CFPKPT');

        $validator
            ->scalar('CFKDSP')
            ->maxLength('CFKDSP', 1)
            ->allowEmptyString('CFKDSP');

        $validator
            ->decimal('CFJMLT')
            ->allowEmptyString('CFJMLT');

        $validator
            ->scalar('CFKDDL')
            ->maxLength('CFKDDL', 4)
            ->allowEmptyString('CFKDDL');

        $validator
            ->scalar('CFKDGD')
            ->maxLength('CFKDGD', 4)
            ->allowEmptyString('CFKDGD');

        $validator
            ->scalar('CFSTPD')
            ->maxLength('CFSTPD', 1)
            ->allowEmptyString('CFSTPD');

        $validator
            ->scalar('CFNKPP')
            ->maxLength('CFNKPP', 16)
            ->allowEmptyString('CFNKPP');

        $validator
            ->scalar('CFNMPS')
            ->maxLength('CFNMPS', 150)
            ->allowEmptyString('CFNMPS');

        $validator
            ->date('CFTGLP')
            ->allowEmptyDate('CFTGLP');

        $validator
            ->scalar('CFPRPH')
            ->maxLength('CFPRPH', 1)
            ->allowEmptyString('CFPRPH');

        $validator
            ->scalar('CFMLGR')
            ->maxLength('CFMLGR', 1)
            ->allowEmptyString('CFMLGR');

        $validator
            ->scalar('CFKJBU')
            ->maxLength('CFKJBU', 4)
            ->allowEmptyString('CFKJBU');

        $validator
            ->scalar('CFNOAP')
            ->maxLength('CFNOAP', 30)
            ->allowEmptyString('CFNOAP');

        $validator
            ->scalar('CFNOAPPT')
            ->maxLength('CFNOAPPT', 30)
            ->allowEmptyString('CFNOAPPT');

        $validator
            ->date('CFTGLA')
            ->allowEmptyDate('CFTGLA');

        $validator
            ->scalar('CFMLPI')
            ->maxLength('CFMLPI', 1)
            ->allowEmptyString('CFMLPI');

        $validator
            ->scalar('CFGOPL')
            ->maxLength('CFGOPL', 1)
            ->allowEmptyString('CFGOPL');

        $validator
            ->scalar('CFPRDB')
            ->maxLength('CFPRDB', 6)
            ->allowEmptyString('CFPRDB');

        $validator
            ->scalar('CFLPRT')
            ->maxLength('CFLPRT', 2)
            ->allowEmptyString('CFLPRT');

        $validator
            ->date('CFTGLPM')
            ->allowEmptyDate('CFTGLPM');

        $validator
            ->scalar('CFNGDB')
            ->maxLength('CFNGDB', 150)
            ->allowEmptyString('CFNGDB');

        $validator
            ->scalar('CFGNDR')
            ->maxLength('CFGNDR', 1)
            ->allowEmptyString('CFGNDR');

        $validator
            ->scalar('Portfolio')
            ->maxLength('Portfolio', 3)
            ->allowEmptyString('Portfolio');

        return $validator;
    }
}
