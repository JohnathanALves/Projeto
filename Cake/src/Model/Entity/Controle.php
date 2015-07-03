<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Controle Entity.
 */
class Controle extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_separacoes' => true,
        'qtd_pupa_colher' => true,
        'qtd_total_bandejas_separ' => true,
        'qtd_bandejas_controle' => true,
        'qtd_total_colheres_macho' => true,
        'qtd_total_colheres_femea' => true,
        'qtd_total_colheres_colonia' => true,
        'total_colheres_controle' => true,
        'nome_responsavel' => true,
        'foto_cefalotorax' => true,
    ];
}
