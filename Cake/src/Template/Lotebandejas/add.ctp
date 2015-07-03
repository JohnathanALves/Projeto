<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Lotebandejas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="lotebandejas form large-10 medium-9 columns">
    <?= $this->Form->create($lotebandeja); ?>
    <fieldset>
        <legend><?= __('Add Lotebandeja') ?></legend>
        <?php
            echo $this->Form->input('n_lote');
            echo $this->Form->input('qtd_bdj_desc_antes_separacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
