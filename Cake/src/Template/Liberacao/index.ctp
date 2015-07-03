<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Liberacao'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="liberacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('liberacaoid') ?></th>
            <th><?= $this->Paginator->sort('fk_lotetransporte') ?></th>
            <th><?= $this->Paginator->sort('tempo_de_manipulacao') ?></th>
            <th><?= $this->Paginator->sort('percepcao_da_presenca_de_femeas') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($liberacao as $liberacao): ?>
        <tr>
            <td><?= h($liberacao->liberacaoid) ?></td>
            <td><?= h($liberacao->fk_lotetransporte) ?></td>
            <td><?= $this->Number->format($liberacao->tempo_de_manipulacao) ?></td>
            <td><?= h($liberacao->percepcao_da_presenca_de_femeas) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $liberacao->liberacaoid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $liberacao->liberacaoid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $liberacao->liberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $liberacao->liberacaoid)]) ?>
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
