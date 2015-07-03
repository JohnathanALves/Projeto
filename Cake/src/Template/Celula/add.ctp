<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Celula'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="celula form large-10 medium-9 columns">
    <?= $this->Form->create($celula); ?>
    <fieldset>
        <legend><?= __('Add Celula') ?></legend>
        <?php
            echo $this->Form->input('fk_controletransporte');
            echo $this->Form->input('n_celula');
            echo $this->Form->input('qtd_pupas_mortas');
            echo $this->Form->input('qtd_adultos_emergidos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
