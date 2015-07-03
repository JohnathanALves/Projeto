<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Ovos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="ovos form large-10 medium-9 columns">
    <?= $this->Form->create($ovo); ?>
    <fieldset>
        <legend><?= __('Add Ovo') ?></legend>
        <?php
            echo $this->Form->input('fk_bequer');
            echo $this->Form->input('data_origem_dos_ovos');
            echo $this->Form->input('gramas_ovos_utilizados');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
