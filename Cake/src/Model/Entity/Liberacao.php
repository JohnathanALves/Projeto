<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Liberacao Entity.
 */
class Liberacao extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_lotetransporte' => true,
        'hora_inicial' => true,
        'hora_termino' => true,
        'tempo_de_manipulacao' => true,
        'percepcao_da_presenca_de_femeas' => true,
    ];
}
