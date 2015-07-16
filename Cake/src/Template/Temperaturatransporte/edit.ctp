<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $temperaturatransporte->temperaturatransporteid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $temperaturatransporte->temperaturatransporteid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Temperaturatransporte'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="temperaturatransporte form large-10 medium-9 columns">
    <?= $this->Form->create($temperaturatransporte); ?>
    <fieldset>
        <legend><?= __('Edit Temperaturatransporte') ?></legend>
        <?php
            echo $this->Form->input('fk_lotetransporte');
            echo $this->Form->input('n_leitura');
            echo $this->Form->input('hora_leitura');
            echo $this->Form->input('valor_leitura');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
