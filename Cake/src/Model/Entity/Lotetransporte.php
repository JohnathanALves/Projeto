<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lotetransporte Entity.
 */
class Lotetransporte extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'fk_separacao' => true,
        'n_transporte' => true,
        'qtd_colheres_celula' => true,
        'cor_lote' => true,
        'qtd_c25_completas_envio' => true,
        'qtd_c25_incompletas_envio' => true,
        'hora_entrada_bod' => true,
        'hora_saida_upat' => true,
        'hora_saida_moscamed' => true,
        'nome_motorista' => true,
        'nome_supervisor_envio' => true,
        'data_recebimento' => true,
        'hora_chegada_lemi' => true,
        'qtd_c25_completas_recebimento' => true,
        'qtd_celulas_incompletas_recebimento' => true,
        'nome_encarregado_montagem_rd11' => true,
        'hora_inicio_montagem_rd11' => true,
        'hora_termino_montagem_rd11' => true,
        'qnt_celula_rd11' => true,
        'qnt_rd11_montadas' => true,
        'qnt_total_machos_enviados' => true,
    ];
}
