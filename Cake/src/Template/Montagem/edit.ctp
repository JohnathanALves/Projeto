<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $montagem->montagemid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $montagem->montagemid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Montagem'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="montagem form large-10 medium-9 columns">
    <?= $this->Form->create($montagem); ?>
    <fieldset>
        <legend><?= __('Edit Montagem') ?></legend>
        <?php
            echo $this->Form->input('fk_lotebandejas');
            echo $this->Form->input('fk_bequer');
            echo $this->Form->input('data_montagem', array('empty' => true, 'default' => ''));
            echo $this->Form->input('nome_responsavel');
            echo $this->Form->input('qtd_bandejas_montadas');
            echo $this->Form->input('tipo_bandeja');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
