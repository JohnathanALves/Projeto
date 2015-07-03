<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gaiola Entity.
 */
class Gaiola extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_lotegaiolas' => true,
        'fk_separacoes' => true,
    ];
}
