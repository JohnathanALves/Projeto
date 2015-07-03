<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Alimentacao'), ['action' => 'edit', $alimentacao->alimentacaoid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alimentacao'), ['action' => 'delete', $alimentacao->alimentacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $alimentacao->alimentacaoid)]) ?> </li>
        <li><?= $this->Html->link(__('List Alimentacao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alimentacao'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="alimentacao view large-10 medium-9 columns">
    <h2><?= h($alimentacao->alimentacaoid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Alimentacaoid') ?></h6>
            <p><?= h($alimentacao->alimentacaoid) ?></p>
            <h6 class="subheader"><?= __('Fk Lotebandejas') ?></h6>
            <p><?= h($alimentacao->fk_lotebandejas) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Variacao') ?></h6>
            <p><?= $this->Number->format($alimentacao->variacao) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Dia') ?></h6>
            <p><?= h($alimentacao->dia) ?></p>
        </div>
    </div>
</div>
