<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Separaco Entity.
 */
class Separaco extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_lotebandejas' => true,
        'data_separacao' => true,
        'n_separacao' => true,
        'qtd_colheres_macho' => true,
        'qtd_colheres_femea' => true,
        'hora_finalizacao' => true,
        'qtd_bdj_descart_ap_separ' => true,
    ];
}
