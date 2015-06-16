<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Area'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="area form large-10 medium-9 columns">
    <?= $this->Form->create($area); ?>
    <fieldset>
        <legend><?= __('Add Area') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('qtd_rd11_liberadas');
            echo $this->Form->input('fk_liberacao',  array('type' => 'text'));
            echo $this->Form->input('n_area', array('type' => 'text'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
