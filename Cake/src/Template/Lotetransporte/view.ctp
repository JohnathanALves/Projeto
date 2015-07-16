<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $lotetransporte->lotetransporteid]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $lotetransporte->lotetransporteid], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $lotetransporte->lotetransporteid)]) ?> </li>
        <li><?= $this->Html->link(__('Listar'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="lotetransporte view large-10 medium-9 columns">
    <h2>Lote.</h2>
    <h2><?= h('Número da separação: '.$n_separacao) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
          <!--   <h6 class="subheader"><?= __('Lote transporte ID') ?></h6>
            <p><?= h($lotetransporte->lotetransporteid) ?></p>
            <h6 class="subheader"><?= __('Separação') ?></h6>
            <p><?= h($lotetransporte->fk_separacao) ?></p> -->
            <h6 class="subheader"><?= __('Cor lote') ?></h6>
            <p><?= h($lotetransporte->cor_lote) ?></p>
            <h6 class="subheader"><?= __('Nome do motorista') ?></h6>
            <p><?= h($lotetransporte->nome_motorista) ?></p>
            <h6 class="subheader"><?= __('Nome do supervisor de envio') ?></h6>
            <p><?= h($lotetransporte->nome_supervisor_envio) ?></p>
            <h6 class="subheader"><?= __('Nome encarregado montagem Rd11') ?></h6>
            <p><?= h($lotetransporte->nome_encarregado_montagem_rd11) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('nº do transporte') ?></h6>
            <p><?= $this->Number->format($lotetransporte->n_transporte) ?></p>
            <h6 class="subheader"><?= __('qtd colheres célula') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_colheres_celula) ?></p>
            <h6 class="subheader"><?= __('qtd c25 completas envio') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_c25_completas_envio) ?></p>
            <h6 class="subheader"><?= __('qtd c25 incompletas envio') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_c25_incompletas_envio) ?></p>
            <h6 class="subheader"><?= __('qtd C25 completas recebimento') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_c25_completas_recebimento) ?></p>
            <h6 class="subheader"><?= __('qtd células incompletas recebimento') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_celulas_incompletas_recebimento) ?></p>
            <h6 class="subheader"><?= __('qnt célula rd11') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qnt_celula_rd11) ?></p>
            <h6 class="subheader"><?= __('qnt rd11 montadas') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qnt_rd11_montadas) ?></p>
            <h6 class="subheader"><?= __('qnt total de machos enviados') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qnt_total_machos_enviados) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data de recebimento') ?></h6>
            <p><?= h($lotetransporte->data_recebimento) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora entrada bod') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_entrada_bod)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora saída upat') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_saida_upat)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora saída moscamed') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_saida_moscamed)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora chegada lemi') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_chegada_lemi)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora inicio montagem rd11') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_inicio_montagem_rd11)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora termino montagem rd11') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_termino_montagem_rd11)); ?>
        </div>
    </div>
</div>
