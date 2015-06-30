<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Controletransporte Entity.
 */
class Controletransporte extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_lotetransporte' => true,
        'hora_controle' => true,
        'situação_dia1' => true,
        'situação_dia2' => true,
        'situação_dia3' => true,
        'comentario' => true,
    ];
}
