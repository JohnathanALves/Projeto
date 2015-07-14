<div class="mortalidadespupa index large-10 medium-9 columns">
   <div class="message">
    Codigo do Lote: <?php echo $codigo_lote ?> 
    </div>
<table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('mortalidadespupasid') ?></th>
            <th><?= $this->Paginator->sort('data_observacao') ?></th>
            <th><?= $this->Paginator->sort('pupas_g1') ?></th>
            <th><?= $this->Paginator->sort('pupas_g2') ?></th>
            <th><?= $this->Paginator->sort('pupas_g3') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($mortalidadespupas as $list): ?>
        <tr>
            <td><?= h($list->mortalidadespupasid) ?></td>
            <td><?= h($list->data_observacao) ?></td>
            <td><?= $this->Number->format($list->pupas_g1) ?></td>
            <td><?= $this->Number->format($list->pupas_g2) ?></td>
            <td><?= $this->Number->format($list->pupas_g3) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $list->mortalidadespupasid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $list->mortalidadespupasid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $list->mortalidadespupasid], ['confirm' => __('Are you sure you want to delete # {0}?', $list->mortalidadespupasid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>

<div class="mortalidadespupas form large-10 medium-9 columns">
    <?= $this->Form->create($mortalidadespupa); ?>
    <fieldset>
        <legend><?= __('Adicionar Mortalidade de Pupas') ?></legend>
        <?php
            //echo $this->Form->input('fk_lotegaiolas');
            echo $this->Form->input('data_observacao', array('empty' => true, 'default' => ''));
            echo $this->Form->input('pupas_g1');
            echo $this->Form->input('pupas_g2');
            echo $this->Form->input('pupas_g3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
