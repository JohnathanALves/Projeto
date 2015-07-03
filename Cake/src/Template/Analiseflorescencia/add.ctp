<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Analiseflorescencia'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="analiseflorescencia form large-10 medium-9 columns">
    <?= $this->Form->create($analiseflorescencium); ?>
    <fieldset>
        <legend><?= __('Add Analiseflorescencium') ?></legend>
        <?php
            echo $this->Form->input('fk_controle');
            echo $this->Form->input('data', array('empty' => true, 'default' => ''));
            echo $this->Form->input('qtd_total_larvas');
            echo $this->Form->input('qtd_total_larvas_florescentes');
            echo $this->Form->input('nome_responsavel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
