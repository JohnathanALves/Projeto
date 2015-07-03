<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aliquotum->aliquotaid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aliquotum->aliquotaid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aliquota'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="aliquota form large-10 medium-9 columns">
    <?= $this->Form->create($aliquotum); ?>
    <fieldset>
        <legend><?= __('Edit Aliquotum') ?></legend>
        <?php
            echo $this->Form->input('fk_bequer');
            echo $this->Form->input('n_aliquota');
            echo $this->Form->input('qtd_larvas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
