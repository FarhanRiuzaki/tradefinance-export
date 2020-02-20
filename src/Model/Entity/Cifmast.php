<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cifmast Entity
 *
 * @property string $CIFNO
 * @property string|null $CFSNME
 * @property string|null $CFBRNN
 * @property string|null $CFNA1
 * @property string|null $CFSSCD
 * @property string|null $CFSSNO
 * @property string|null $CFIEX6
 * @property string|null $CFYIDP
 * @property string|null $CFYIDS
 * @property string|null $CFCLAS
 * @property string|null $TTLCD
 * @property string|null $DESTTL
 * @property string|null $CFBIR6
 * @property string|null $CFYBIP
 * @property string|null $CFSIC1
 * @property string|null $MTHNM
 * @property string|null $CFNA2
 * @property string|null $CFNA3
 * @property string|null $CFNA4
 * @property string|null $CFNA5
 * @property string|null $CFZIP
 * @property string|null $CFNPWP
 * @property string|null $CFBIC
 * @property string|null $CFAPI
 * @property string|null $MEMO
 * @property \Cake\I18n\FrozenTime|null $MNTDT
 * @property string|null $CFCUSTYP
 * @property string|null $CFKELURAHAN
 * @property string|null $CFKECAMATAN
 * @property string|null $CFTLPN
 * @property string|null $CFTLPHP
 * @property string|null $CFMAIL
 * @property string|null $CFKND
 * @property string|null $CFKDPK
 * @property string|null $CFTPBK
 * @property string|null $CFKDKAB
 * @property string|null $CFKDBU
 * @property string|null $CFALTB
 * @property float|null $CFPKPT
 * @property string|null $CFKDSP
 * @property float|null $CFJMLT
 * @property string|null $CFKDDL
 * @property string|null $CFKDGD
 * @property string|null $CFSTPD
 * @property string|null $CFNKPP
 * @property string|null $CFNMPS
 * @property \Cake\I18n\FrozenDate|null $CFTGLP
 * @property string|null $CFPRPH
 * @property string|null $CFMLGR
 * @property string|null $CFKJBU
 * @property string|null $CFNOAP
 * @property string|null $CFNOAPPT
 * @property \Cake\I18n\FrozenDate|null $CFTGLA
 * @property string|null $CFMLPI
 * @property string|null $CFGOPL
 * @property string|null $CFPRDB
 * @property string|null $CFLPRT
 * @property \Cake\I18n\FrozenDate|null $CFTGLPM
 * @property string|null $CFNGDB
 * @property string|null $CFGNDR
 * @property string|null $Portfolio
 */
class Cifmast extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'CFSNME' => true,
        'CFBRNN' => true,
        'CFNA1' => true,
        'CFSSCD' => true,
        'CFSSNO' => true,
        'CFIEX6' => true,
        'CFYIDP' => true,
        'CFYIDS' => true,
        'CFCLAS' => true,
        'TTLCD' => true,
        'DESTTL' => true,
        'CFBIR6' => true,
        'CFYBIP' => true,
        'CFSIC1' => true,
        'MTHNM' => true,
        'CFNA2' => true,
        'CFNA3' => true,
        'CFNA4' => true,
        'CFNA5' => true,
        'CFZIP' => true,
        'CFNPWP' => true,
        'CFBIC' => true,
        'CFAPI' => true,
        'MEMO' => true,
        'MNTDT' => true,
        'CFCUSTYP' => true,
        'CFKELURAHAN' => true,
        'CFKECAMATAN' => true,
        'CFTLPN' => true,
        'CFTLPHP' => true,
        'CFMAIL' => true,
        'CFKND' => true,
        'CFKDPK' => true,
        'CFTPBK' => true,
        'CFKDKAB' => true,
        'CFKDBU' => true,
        'CFALTB' => true,
        'CFPKPT' => true,
        'CFKDSP' => true,
        'CFJMLT' => true,
        'CFKDDL' => true,
        'CFKDGD' => true,
        'CFSTPD' => true,
        'CFNKPP' => true,
        'CFNMPS' => true,
        'CFTGLP' => true,
        'CFPRPH' => true,
        'CFMLGR' => true,
        'CFKJBU' => true,
        'CFNOAP' => true,
        'CFNOAPPT' => true,
        'CFTGLA' => true,
        'CFMLPI' => true,
        'CFGOPL' => true,
        'CFPRDB' => true,
        'CFLPRT' => true,
        'CFTGLPM' => true,
        'CFNGDB' => true,
        'CFGNDR' => true,
        'Portfolio' => true
    ];
}
