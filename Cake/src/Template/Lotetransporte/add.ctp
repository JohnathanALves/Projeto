<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Lotetransporte'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="lotetransporte form large-10 medium-9 columns">
    <?= $this->Form->create($lotetransporte); ?>
    <fieldset>
        <legend><?= __('Add Lotetransporte') ?></legend>
        <?php
            echo $this->Form->input('fk_separacao');
            echo $this->Form->input('n_transporte');
            echo $this->Form->input('qtd_colheres_celula');
            echo $this->Form->input('cor_lote');
            echo $this->Form->input('qtd_c25_completas_envio');
            echo $this->Form->input('qtd_c25_incompletas_envio');
            echo $this->Form->input('hora_entrada_bod');
            echo $this->Form->input('hora_saida_upat');
            echo $this->Form->input('hora_saida_moscamed');
            echo $this->Form->input('nome_motorista');
            echo $this->Form->input('nome_supervisor_envio');
            echo $this->Form->input('data_recebimento', array('empty' => true, 'default' => ''));
            echo $this->Form->input('hora_chegada_lemi');
            echo $this->Form->input('qtd_c25_completas_recebimento');
            echo $this->Form->input('qtd_celulas_incompletas_recebimento');
            echo $this->Form->input('nome_encarregado_montagem_rd11');
            echo $this->Form->input('hora_inicio_montagem_rd11');
            echo $this->Form->input('hora_termino_montagem_rd11');
            echo $this->Form->input('qnt_celula_rd11');
            echo $this->Form->input('qnt_rd11_montadas');
            echo $this->Form->input('qnt_total_machos_enviados');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
