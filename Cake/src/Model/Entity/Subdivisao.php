<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subdivisao Entity.
 */
class Subdivisao extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_liberacao' => true,
        'fk_bairro' => true,
        'data_liberacao' => true,
        'nome' => true,
        'supervisor' => true,
        'qtd_alvo_rd11' => true,
        'qtd_rd11_real' => true,
    ];
}
