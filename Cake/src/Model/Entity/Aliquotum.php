<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aliquotum Entity.
 */
class Aliquotum extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_bequer' => true,
        'n_aliquota' => true,
        'qtd_larvas' => true,
    ];
}
