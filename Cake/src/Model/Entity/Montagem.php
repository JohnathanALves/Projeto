<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Montagem Entity.
 */
class Montagem extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_lotebandejas' => true,
        'fk_bequer' => true,
        'data_montagem' => true,
        'nome_responsavel' => true,
        'qtd_bandejas_montadas' => true,
        'tipo_bandeja' => true,
    ];
}
