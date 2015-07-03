<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mortalidadespupa Entity.
 */
class Mortalidadespupa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_lotegaiolas' => true,
        'data_observacao' => true,
        'pupas_g1' => true,
        'pupas_g2' => true,
        'pupas_g3' => true,
    ];
}
