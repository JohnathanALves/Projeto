<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listar Lote de gaiolas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="lotegaiolas form large-10 medium-9 columns">
    <?= $this->Form->create($lotegaiola); ?>
    <fieldset>
        <legend><?= __('Adicionar Lote de gaiola') ?></legend>
        <?php
            echo $this->Form->input('codigo_lote');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
