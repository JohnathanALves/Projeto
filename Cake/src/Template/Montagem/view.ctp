<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Montagem'), ['action' => 'edit', $montagem->montagemid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Montagem'), ['action' => 'delete', $montagem->montagemid], ['confirm' => __('Are you sure you want to delete # {0}?', $montagem->montagemid)]) ?> </li>
        <li><?= $this->Html->link(__('List Montagem'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Montagem'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="montagem view large-10 medium-9 columns">
    <h2><?= h($montagem->montagemid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Montagemid') ?></h6>
            <p><?= h($montagem->montagemid) ?></p>
            <h6 class="subheader"><?= __('Fk Lotebandejas') ?></h6>
            <p><?= h($montagem->fk_lotebandejas) ?></p>
            <h6 class="subheader"><?= __('Fk Bequer') ?></h6>
            <p><?= h($montagem->fk_bequer) ?></p>
            <h6 class="subheader"><?= __('Nome Responsavel') ?></h6>
            <p><?= h($montagem->nome_responsavel) ?></p>
            <h6 class="subheader"><?= __('Tipo Bandeja') ?></h6>
            <p><?= h($montagem->tipo_bandeja) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qtd Bandejas Montadas') ?></h6>
            <p><?= $this->Number->format($montagem->qtd_bandejas_montadas) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Montagem') ?></h6>
            <p><?= h($montagem->data_montagem) ?></p>
        </div>
    </div>
</div>
