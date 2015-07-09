<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lotegaiola Entity.
 */
class Lotegaiola extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'codigo_lote' => true,
    ];
}
