<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Separacaoliberacao Entity.
 */
class Separacaoliberacao extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_liberacao' => true,
        'n_separacao' => true,
        'data_drenagem_pre' => true,
        'data_controle_liberacao_pos' => true,
    ];
}
