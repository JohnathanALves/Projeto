<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Alimentacao'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="alimentacao form large-10 medium-9 columns">
    <?= $this->Form->create($alimentacao); ?>
    <fieldset>
        <legend><?= __('Add Alimentacao') ?></legend>
        <?php
            echo $this->Form->input('fk_lotebandejas');
            echo $this->Form->input('dia', array('empty' => true, 'default' => ''));
            echo $this->Form->input('variacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
