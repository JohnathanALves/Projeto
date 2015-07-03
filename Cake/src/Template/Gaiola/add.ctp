<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Gaiola'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="gaiola form large-10 medium-9 columns">
    <?= $this->Form->create($gaiola); ?>
    <fieldset>
        <legend><?= __('Add Gaiola') ?></legend>
        <?php
            echo $this->Form->input('fk_lotegaiolas');
            echo $this->Form->input('fk_separacoes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
