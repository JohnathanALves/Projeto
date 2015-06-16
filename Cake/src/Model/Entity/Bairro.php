<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bairro Entity.
 */
class Bairro extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'data' => true,
        'nome' => true,
        'fase' => true,
        'qtd_real_rd11' => true,
        'liberacao_semana' => true,
        'populacao' => true,
        'alocacao' => true,
    ];
}
