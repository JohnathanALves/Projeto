<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ovo Entity.
 */
class Ovo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_bequer' => true,
        'data_origem_dos_ovos' => true,
        'gramas_ovos_utilizados' => true,
    ];
}
