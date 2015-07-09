<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Lotegaiola'), ['action' => 'edit', $lotegaiola->lotegaiolasid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lotegaiola'), ['action' => 'delete', $lotegaiola->lotegaiolasid], ['confirm' => __('Are you sure you want to delete # {0}?', $lotegaiola->lotegaiolasid)]) ?> </li>
        <li><?= $this->Html->link(__('List Lotegaiolas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lotegaiola'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="lotegaiolas view large-10 medium-9 columns">
    <h2><?= h($lotegaiola->lotegaiolasid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Lotegaiolasid') ?></h6>
            <p><?= h($lotegaiola->lotegaiolasid) ?></p>
            <h6 class="subheader"><?= __('Codigo Lote') ?></h6>
            <p><?= h($lotegaiola->codigo_lote) ?></p>
        </div>
    </div>
</div>
