<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Costagem Entity.
 */
class Costagem extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_separacoes' => true,
        'n_amostra' => true,
        'qtd_macho' => true,
        'qtd_femea' => true,
        'nome_responsavel' => true,
        'sexo' => true,
    ];
}
