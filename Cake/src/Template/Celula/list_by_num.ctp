<div class="celula index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
           <!--  <th><?= $this->Paginator->sort('celulaid') ?></th>
            <th><?= $this->Paginator->sort('fk_controletransporte') ?></th> -->
            <th><?= $this->Paginator->sort('n_celula') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupas_mortas') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos_emergidos') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($list_celula as $celula): ?>
        <tr>
          <!--   <td><?= h($celula->celulaid) ?></td>
            <td><?= h($celula->fk_controletransporte) ?></td> -->
            <td><?= $this->Number->format($celula->n_celula) ?></td>
            <td><?= $this->Number->format($celula->qtd_pupas_mortas) ?></td>
            <td><?= $this->Number->format($celula->qtd_adultos_emergidos) ?></td>
            <td class="actions">
              <!--   <?= $this->Html->link(__('View'), ['action' => 'view', $celula->celulaid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $celula->celulaid]) ?> -->
             <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $celula->celulaid], ['confirm' => __('Are you sure you want to delete # {0}?', $celula->celulaid)]) ?> 
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