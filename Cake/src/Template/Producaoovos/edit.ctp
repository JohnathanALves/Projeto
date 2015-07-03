<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producaoovo->producaoovosid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producaoovo->producaoovosid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Producaoovos'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="producaoovos form large-10 medium-9 columns">
    <?= $this->Form->create($producaoovo); ?>
    <fieldset>
        <legend><?= __('Edit Producaoovo') ?></legend>
        <?php
            echo $this->Form->input('fk_lotegaiolas');
            echo $this->Form->input('qtd_gaiolas');
            echo $this->Form->input('data_alimentacao_sangue', array('empty' => true, 'default' => ''));
            echo $this->Form->input('data_coleta', array('empty' => true, 'default' => ''));
            echo $this->Form->input('peso_ovos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
