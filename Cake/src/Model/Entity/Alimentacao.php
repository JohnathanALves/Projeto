<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alimentacao Entity.
 */
class Alimentacao extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_lotebandejas' => true,
        'dia' => true,
        'variacao' => true,
    ];
}
