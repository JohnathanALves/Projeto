<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Lotetransporte'), ['action' => 'edit', $lotetransporte->lotetransporteid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lotetransporte'), ['action' => 'delete', $lotetransporte->lotetransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotetransporte->lotetransporteid)]) ?> </li>
        <li><?= $this->Html->link(__('List Lotetransporte'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lotetransporte'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="lotetransporte view large-10 medium-9 columns">
    <h2><?= h($lotetransporte->lotetransporteid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Lotetransporteid') ?></h6>
            <p><?= h($lotetransporte->lotetransporteid) ?></p>
            <h6 class="subheader"><?= __('Fk Separacao') ?></h6>
            <p><?= h($lotetransporte->fk_separacao) ?></p>
            <h6 class="subheader"><?= __('Cor Lote') ?></h6>
            <p><?= h($lotetransporte->cor_lote) ?></p>
            <h6 class="subheader"><?= __('Nome Motorista') ?></h6>
            <p><?= h($lotetransporte->nome_motorista) ?></p>
            <h6 class="subheader"><?= __('Nome Supervisor Envio') ?></h6>
            <p><?= h($lotetransporte->nome_supervisor_envio) ?></p>
            <h6 class="subheader"><?= __('Nome Encarregado Montagem Rd11') ?></h6>
            <p><?= h($lotetransporte->nome_encarregado_montagem_rd11) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Transporte') ?></h6>
            <p><?= $this->Number->format($lotetransporte->n_transporte) ?></p>
            <h6 class="subheader"><?= __('Qtd Colheres Celula') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_colheres_celula) ?></p>
            <h6 class="subheader"><?= __('Qtd C25 Completas Envio') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_c25_completas_envio) ?></p>
            <h6 class="subheader"><?= __('Qtd C25 Incompletas Envio') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_c25_incompletas_envio) ?></p>
            <h6 class="subheader"><?= __('Qtd C25 Completas Recebimento') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_c25_completas_recebimento) ?></p>
            <h6 class="subheader"><?= __('Qtd Celulas Incompletas Recebimento') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qtd_celulas_incompletas_recebimento) ?></p>
            <h6 class="subheader"><?= __('Qnt Celula Rd11') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qnt_celula_rd11) ?></p>
            <h6 class="subheader"><?= __('Qnt Rd11 Montadas') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qnt_rd11_montadas) ?></p>
            <h6 class="subheader"><?= __('Qnt Total Machos Enviados') ?></h6>
            <p><?= $this->Number->format($lotetransporte->qnt_total_machos_enviados) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Recebimento') ?></h6>
            <p><?= h($lotetransporte->data_recebimento) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Entrada Bod') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_entrada_bod)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Saida Upat') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_saida_upat)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Saida Moscamed') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_saida_moscamed)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Chegada Lemi') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_chegada_lemi)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Inicio Montagem Rd11') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_inicio_montagem_rd11)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Termino Montagem Rd11') ?></h6>
            <?= $this->Text->autoParagraph(h($lotetransporte->hora_termino_montagem_rd11)); ?>

        </div>
    </div>
</div>
