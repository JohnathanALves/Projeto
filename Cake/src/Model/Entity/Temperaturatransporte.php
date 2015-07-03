<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Temperaturatransporte Entity.
 */
class Temperaturatransporte extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_lotetransporte' => true,
        'n_leitura' => true,
        'hora_leitura' => true,
        'valor_leitura' => true,
    ];
}
