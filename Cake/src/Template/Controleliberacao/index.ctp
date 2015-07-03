<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="controleliberacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Controle ID') ?></th>
            <th><?= $this->Paginator->sort('Separa/libera') ?></th>
            <th><?= $this->Paginator->sort('n_rd11_controle') ?></th>
            <th><?= $this->Paginator->sort('pupas vivas_pré') ?></th>
            <th><?= $this->Paginator->sort('pupas mortas_pré') ?></th>
            <th><?= $this->Paginator->sort('adultos vivos_pré') ?></th>
            <th><?= $this->Paginator->sort('adultos mortos_pré') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($controleliberacao as $controleliberacao): ?>
        <tr>
            <td><?= h($controleliberacao->controleliberacaoid) ?></td>
            <td><?= h($controleliberacao->fk_separacaoliberacao) ?></td>
            <td><?= $this->Number->format($controleliberacao->n_rd11_controle) ?></td>
            <td><?= $this->Number->format($controleliberacao->qtd_pupas_vivas_pre) ?></td>
            <td><?= $this->Number->format($controleliberacao->qtd_pupas_mortas_pre) ?></td>
            <td><?= $this->Number->format($controleliberacao->qtd_adultos_vivos_pre) ?></td>
            <td><?= $this->Number->format($controleliberacao->qtd_adultos_mortos_pre) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $controleliberacao->controleliberacaoid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $controleliberacao->controleliberacaoid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $controleliberacao->controleliberacaoid], ['confirm' => __('Are you sure you want to delete # {0}?', $controleliberacao->controleliberacaoid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
