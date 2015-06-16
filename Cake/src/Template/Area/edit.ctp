<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $area->fk_liberacao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $area->fk_liberacao)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Area'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="area form large-10 medium-9 columns">
    <?= $this->Form->create($area); ?>
    <fieldset>
        <legend><?= __('Edit Area') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('qtd_rd11_liberadas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
