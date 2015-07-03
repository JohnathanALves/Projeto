<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Producaoovo'), ['action' => 'edit', $producaoovo->producaoovosid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Producaoovo'), ['action' => 'delete', $producaoovo->producaoovosid], ['confirm' => __('Are you sure you want to delete # {0}?', $producaoovo->producaoovosid)]) ?> </li>
        <li><?= $this->Html->link(__('List Producaoovos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producaoovo'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="producaoovos view large-10 medium-9 columns">
    <h2><?= h($producaoovo->producaoovosid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Producaoovosid') ?></h6>
            <p><?= h($producaoovo->producaoovosid) ?></p>
            <h6 class="subheader"><?= __('Fk Lotegaiolas') ?></h6>
            <p><?= h($producaoovo->fk_lotegaiolas) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Qtd Gaiolas') ?></h6>
            <p><?= $this->Number->format($producaoovo->qtd_gaiolas) ?></p>
            <h6 class="subheader"><?= __('Peso Ovos') ?></h6>
            <p><?= $this->Number->format($producaoovo->peso_ovos) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data Alimentacao Sangue') ?></h6>
            <p><?= h($producaoovo->data_alimentacao_sangue) ?></p>
            <h6 class="subheader"><?= __('Data Coleta') ?></h6>
            <p><?= h($producaoovo->data_coleta) ?></p>
        </div>
    </div>
</div>
