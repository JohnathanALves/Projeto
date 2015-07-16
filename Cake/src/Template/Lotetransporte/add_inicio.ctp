<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="lotetransporte form large-10 medium-9 columns">
    <?= $this->Form->create($lotetransporte); ?>
    <fieldset>
        <legend><?= __('Adicionar Lote transporte') ?></legend>
        <?php
            echo '<label> Número da separação </label>';
            echo $this->Form->select('fk_separacao', $options);
            echo $this->Form->input('n_transporte', ['label' => 'nº transporte']);
            echo $this->Form->input('qtd_colheres_celula', ['label' => 'qtd colheres célula']);
            echo $this->Form->input('cor_lote', ['label' => 'Cor lote']);
            echo $this->Form->input('qtd_c25_completas_envio', ['label' => 'qtd c25 completas envio']);
            echo $this->Form->input('qtd_c25_incompletas_envio', ['label' => 'qtd c25 incompletas envio']);
            echo $this->Form->input('hora_entrada_bod', ['type' => 'time', 'label' => 'hora entrada bod']);
            echo $this->Form->input('hora_saida_upat', ['type' =>'time', 'label' => 'hora saída upat']);
            echo $this->Form->input('hora_saida_moscamed', ['type' => 'time', 'label' => 'hora saida moscamed']);
            echo $this->Form->input('nome_motorista', ['label' => 'Nome do motorista']);
            echo $this->Form->input('nome_supervisor_envio', ['label' => 'Nome do supervisor do envio']);
            // echo $this->Form->input('data_recebimento', array('empty' => true, 'default' => ''), ['label' => 'Data do recebimento']);
            // echo $this->Form->input('hora_chegada_lemi', ['label' => 'horário de chegada lemi']);
            // echo $this->Form->input('qtd_c25_completas_recebimento', ['label' => 'qtd c25 completas recebidas']);
            // echo $this->Form->input('qtd_celulas_incompletas_recebimento', ['label' => 'qtd células incompletas recebidas']);
            // echo $this->Form->input('nome_encarregado_montagem_rd11', ['label' => 'Nome do encarredado Montagem rd11']);
            // echo $this->Form->input('hora_inicio_montagem_rd11', ['label' => 'Hora de inicio da montagem rd11']);
            // echo $this->Form->input('hora_termino_montagem_rd11', ['label' => 'Hora de término da montagem rd11']);
            // echo $this->Form->input('qnt_celula_rd11', ['label' => 'qnt célula rd11']);
            // echo $this->Form->input('qnt_rd11_montadas', ['label' => 'qnt rd11 montadas']);
            // echo $this->Form->input('qnt_total_machos_enviados', ['label' => 'qnt total de machos enviados']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
