<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Controleliberacao Entity.
 */
class Controleliberacao extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_separacaoliberacao' => true,
        'n_rd11_controle' => true,
        'qtd_pupas_vivas_pre' => true,
        'qtd_pupas_mortas_pre' => true,
        'qtd_adultos_vivos_pre' => true,
        'qtd_adultos_mortos_pre' => true,
        'qtd_pupas_vivas_pos' => true,
        'qtd_pupas_mortas_pos' => true,
        'qtd_adultos_vivos_pos' => true,
        'qtd_adultos_mortos_pos' => true,
    ];
}
