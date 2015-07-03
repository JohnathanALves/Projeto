<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Separaco'), ['action' => 'edit', $separaco->separacoesid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Separaco'), ['action' => 'delete', $separaco->separacoesid], ['confirm' => __('Are you sure you want to delete # {0}?', $separaco->separacoesid)]) ?> </li>
        <li><?= $this->Html->link(__('List Separacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Separaco'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="separacoes view large-10 medium-9 columns">
    <h2><?= h($separaco->separacoesid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Separacoesid') ?></h6>
            <p><?= h($separaco->separacoesid) ?></p>
            <h6 class="subheader"><?= __('Fk Lotebandejas') ?></h6>
            <p><?= h($separaco->fk_lotebandejas) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('N Separacao') ?></h6>
            <p><?= $this->Number->format($separaco->n_separacao) ?></p>
            <h6 class="subheader"><?= __('Qtd Colheres Macho') ?></h6>
            <p><?= $this->Number->format($separaco->qtd_colheres_macho) ?></p>
            <h6 class="subheader"><?= __('Qtd Colheres Femea') ?></h6>
            <p><?= $this->Number->format($separaco->qtd_colheres_femea) ?></p>
            <h6 class="subheader"><?= __('Qtd Bdj Descart Ap Separ') ?></h6>
            <p><?= $this->Number->format($separaco->qtd_bdj_descart_ap_separ) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Separacao') ?></h6>
            <p><?= h($separaco->data_separacao) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Hora Finalizacao') ?></h6>
            <?= $this->Text->autoParagraph(h($separaco->hora_finalizacao)); ?>

        </div>
    </div>
</div>
