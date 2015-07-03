<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tamanhocefalotorax Entity.
 */
class Tamanhocefalotorax extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_controle' => true,
        'n_replicata' => true,
        'macho' => true,
        'femea' => true,
    ];
}
