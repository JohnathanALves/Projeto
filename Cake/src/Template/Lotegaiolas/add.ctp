<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Lotegaiolas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="lotegaiolas form large-10 medium-9 columns">
    <?= $this->Form->create($lotegaiola); ?>
    <fieldset>
        <legend><?= __('Add Lotegaiola') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
