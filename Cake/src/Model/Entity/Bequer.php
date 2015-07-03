<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bequer Entity.
 */
class Bequer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'n_bequer' => true,
        'volume' => true,
        'data_fim_eclosao' => true,
        'hora_fim_eclosao' => true,
        'data_inicio_eclosao' => true,
        'hora_inicio_eclosao' => true,
        'contagem_amostra' => true,
    ];
}
