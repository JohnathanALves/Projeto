<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lotegaiola->lotegaiolasid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lotegaiola->lotegaiolasid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lotegaiolas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="lotegaiolas form large-10 medium-9 columns">
    <?= $this->Form->create($lotegaiola); ?>
    <fieldset>
        <legend><?= __('Edit Lotegaiola') ?></legend>
        <?php
            echo $this->Form->input('codigo_lote');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
