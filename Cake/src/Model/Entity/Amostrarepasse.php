<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Amostrarepasse Entity.
 */
class Amostrarepasse extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_controle' => true,
        'n_amostra' => true,
        'qtd_machos' => true,
        'qtd_femeas' => true,
        'nome_responsavel' => true,
    ];
}
