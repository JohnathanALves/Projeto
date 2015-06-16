<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subdivisao->subdivisaoid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subdivisao->subdivisaoid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subdivisao'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="subdivisao form large-10 medium-9 columns">
    <?= $this->Form->create($subdivisao); ?>
    <fieldset>
        <legend><?= __('Edit Subdivisao') ?></legend>
        <?php
            echo $this->Form->input('fk_liberacao');
            echo $this->Form->input('fk_bairro');
            echo $this->Form->input('data_liberacao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('nome');
            echo $this->Form->input('supervisor');
            echo $this->Form->input('qtd_alvo_rd11');
            echo $this->Form->input('qtd_rd11_real');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
