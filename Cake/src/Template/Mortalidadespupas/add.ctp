<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar Mortalidade de pupas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="mortalidadespupas form large-10 medium-9 columns">
    <?= $this->Form->create($mortalidadespupa); ?>
    <fieldset>
        <legend><?= __('Add Mortalidadespupa') ?></legend>
        <?php
            echo $this->Form->input('fk_lotegaiolas');
            echo $this->Form->input('data_observacao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('pupas_g1');
            echo $this->Form->input('pupas_g2');
            echo $this->Form->input('pupas_g3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
