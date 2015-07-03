<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producaoovo Entity.
 */
class Producaoovo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_lotegaiolas' => true,
        'qtd_gaiolas' => true,
        'data_alimentacao_sangue' => true,
        'data_coleta' => true,
        'peso_ovos' => true,
    ];
}
