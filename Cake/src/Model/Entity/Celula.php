<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Celula Entity.
 */
class Celula extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_controletransporte' => true,
        'n_celula' => true,
        'qtd_pupas_mortas' => true,
        'qtd_adultos_emergidos' => true,
    ];
}
