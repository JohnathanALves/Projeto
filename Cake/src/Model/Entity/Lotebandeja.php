<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lotebandeja Entity.
 */
class Lotebandeja extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'qtd_bdj_desc_antes_separacao' => true,
        'codigo' => true,
    ];
}
