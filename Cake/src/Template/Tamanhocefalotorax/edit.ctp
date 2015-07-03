<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tamanhocefalotorax->tamanhocefalotoraxid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tamanhocefalotorax->tamanhocefalotoraxid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tamanhocefalotorax'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="tamanhocefalotorax form large-10 medium-9 columns">
    <?= $this->Form->create($tamanhocefalotorax); ?>
    <fieldset>
        <legend><?= __('Edit Tamanhocefalotorax') ?></legend>
        <?php
            echo $this->Form->input('fk_controle');
            echo $this->Form->input('n_replicata');
            echo $this->Form->input('macho');
            echo $this->Form->input('femea');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
