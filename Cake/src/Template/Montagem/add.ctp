<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Montagem'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="montagem form large-10 medium-9 columns">
    <?= $this->Form->create($montagem); ?>
    <fieldset>
        <legend><?= __('Add Montagem') ?></legend>
        <?php
            echo $this->Form->input('fk_lotebandejas');
            echo $this->Form->input('fk_bequer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
