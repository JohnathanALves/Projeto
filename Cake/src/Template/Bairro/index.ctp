<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="bairro index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Bairro ID') ?></th>
            <th><?= $this->Paginator->sort('Data') ?></th>
            <th><?= $this->Paginator->sort('Nome') ?></th>
            <th><?= $this->Paginator->sort('Fase') ?></th>
            <th><?= $this->Paginator->sort('qtd_real_rd11') ?></th>
            <th><?= $this->Paginator->sort('Liberação semana') ?></th>
            <th><?= $this->Paginator->sort('População') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bairro as $bairro): ?>
        <tr>
            <td><?= h($bairro->bairroid) ?></td>
            <td><?= h($bairro->data) ?></td>
            <td><?= h($bairro->nome) ?></td>
            <td><?= h($bairro->fase) ?></td>
            <td><?= $this->Number->format($bairro->qtd_real_rd11) ?></td>
            <td><?= $this->Number->format($bairro->liberacao_semana) ?></td>
            <td><?= $this->Number->format($bairro->populacao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $bairro->bairroid]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bairro->bairroid]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $bairro->bairroid], ['confirm' => __('Tem certeza de que deseja deletar: # {0}?', $bairro->bairroid)] ) ?>
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
