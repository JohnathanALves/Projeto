<div class="actions columns large-2 medium-3">
    <h3><?= __('Menu') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voltar'), ['controller' => 'bequer', 'action' => 'viewAllInfo', $fk_bequer]) ?> </li>
    </ul>
</div>
<div class="bequer index large-10 medium-9 columns">
    <div class="row large-10 medium-9 columns">
        <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th><?= $this->Paginator->sort('aliquotaid') ?></th>-->
                <!--<th><?= $this->Paginator->sort('fk_bequer') ?></th>-->
                <th><?= $this->Paginator->sort('n_aliquota', 'Numero da aliquota') ?></th>
                <th><?= $this->Paginator->sort('qtd_larvas', 'Quantidade de larvas') ?></th>
                <th class="actions"><?= __('Opções') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($aliquota as $aliquotum): ?>
            <tr>
                <!--<td><?= h($aliquotum->aliquotaid) ?></td>-->
                <!--<td><?= h($aliquotum->fk_bequer) ?></td>-->
                <td><?= $this->Number->format($aliquotum->n_aliquota) ?></td>
                <td><?= $this->Number->format($aliquotum->qtd_larvas) ?></td>
                <td class="actions">
                    <!--<?= $this->Html->link(__('View'), ['action' => 'view', $aliquotum->aliquotaid]) ?>-->
                    <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $aliquotum->aliquotaid]) ?>-->
                    <!--<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aliquotum->aliquotaid], ['confirm' => __('Are you sure you want to delete # {0}?', $aliquotum->aliquotaid)]) ?>-->
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
</div>
