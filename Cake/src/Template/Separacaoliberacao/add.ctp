<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Separacaoliberacao'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="separacaoliberacao form large-10 medium-9 columns">
    <?= $this->Form->create($separacaoliberacao); ?>
    <fieldset>
        <legend><?= __('Add Separacaoliberacao') ?></legend>
        <?php
            echo $this->Form->input('fk_liberacao');
            echo $this->Form->input('n_separacao');
            echo $this->Form->input('data_drenagem_pre', array('empty' => true, 'default' => ''));
            echo $this->Form->input('data_controle_liberacao_pos', array('empty' => true, 'default' => ''));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
