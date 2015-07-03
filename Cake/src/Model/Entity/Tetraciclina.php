<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tetraciclina Entity.
 */
class Tetraciclina extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_controle' => true,
        'qtd_larvas' => true,
        'qtd_pupas' => true,
        'qtd_adultos' => true,
        'qtd_adultos_voando' => true,
        'n_dias' => true,
        'nome_responsavel' => true,
    ];
}
