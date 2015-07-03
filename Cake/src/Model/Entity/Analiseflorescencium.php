<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Analiseflorescencium Entity.
 */
class Analiseflorescencium extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_controle' => true,
        'data' => true,
        'qtd_total_larvas' => true,
        'qtd_total_larvas_florescentes' => true,
        'nome_responsavel' => true,
    ];
}
