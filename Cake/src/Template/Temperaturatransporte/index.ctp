<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Temperaturatransporte'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="temperaturatransporte index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('temperaturatransporteid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th>
            <th><?= $this->Paginator->sort('n_leitura') ?></th>
            <th><?= $this->Paginator->sort('valor_leitura') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($temperaturatransporte as $temperaturatransporte): ?>
        <tr>
            <td><?= h($temperaturatransporte->temperaturatransporteid) ?></td>
            <td><?= h($temperaturatransporte->fk_lotetransporte) ?></td>
            <td><?= $this->Number->format($temperaturatransporte->n_leitura) ?></td>
            <td><?= $this->Number->format($temperaturatransporte->valor_leitura) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $temperaturatransporte->temperaturatransporteid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $temperaturatransporte->temperaturatransporteid], ['confirm' => __('Are you sure you want to delete # {0}?', $temperaturatransporte->temperaturatransporteid)]) ?>
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
</div>
