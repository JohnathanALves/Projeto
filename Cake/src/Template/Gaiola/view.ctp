<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Gaiola'), ['action' => 'edit', $gaiola->gaiolaid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gaiola'), ['action' => 'delete', $gaiola->gaiolaid], ['confirm' => __('Are you sure you want to delete # {0}?', $gaiola->gaiolaid)]) ?> </li>
        <li><?= $this->Html->link(__('List Gaiola'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gaiola'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="gaiola view large-10 medium-9 columns">
    <h2><?= h($gaiola->gaiolaid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Gaiolaid') ?></h6>
            <p><?= h($gaiola->gaiolaid) ?></p>
            <h6 class="subheader"><?= __('Fk Lotegaiolas') ?></h6>
            <p><?= h($gaiola->fk_lotegaiolas) ?></p>
            <h6 class="subheader"><?= __('Fk Separacoes') ?></h6>
            <p><?= h($gaiola->fk_separacoes) ?></p>
        </div>
    </div>
</div>
