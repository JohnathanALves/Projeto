<div class="actions columns large-2 medium-3">
    <h3><?= __('Voltar para') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Controle Transporte'), ['controller' => 'controletransporte', 'action' => 'viewAllInfo', $lote_id]) ?></li>
        <li><?= $this->Html->link(__('Lote Transporte'), ['controller' => 'lotetransporte', 'action' => 'viewAllInfo', $lote_id]) ?></li>
        <li><?= $this->Html->link(__('Visualizar Células'), ['action' => 'viewAllInfo', $controle_transporte_id, $lote_id]) ?></li>
</div>
<div class="celula index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <!-- <th><?= $this->Paginator->sort('celulaid') ?></th> -->
            <!-- <th><?= $this->Paginator->sort('fk_controletransporte') ?></th> -->
            <th><?= $this->Paginator->sort('n_celula', 'Nº da célula') ?></th>
            <th><?= $this->Paginator->sort('qtd_pupas_mortas', 'Quantidade de pupas mortas') ?></th>
            <th><?= $this->Paginator->sort('qtd_adultos_emergidos', 'Quantidade de adultos emergidos') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($list_celula as $list): ?>
        <tr>
          <!--   <td><?= h($celula->celulaid) ?></td>
            <td><?= h($celula->fk_controletransporte) ?></td> -->
            <td><?= $this->Number->format($list->n_celula) ?></td>
            <td><?= $this->Number->format($list->qtd_pupas_mortas) ?></td>
            <td><?= $this->Number->format($list->qtd_adultos_emergidos) ?></td>
            <td class="actions">
               <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $celula->celulaid]) ?> 
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $celula->celulaid]) ?> -->
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'deleteNoReturn', $list->celulaid, $list->fk_controletransporte, $lote_id], ['confirm' => __('Tem certeza de que deseja deletar # {0}?', $list->celulaid)]) ?>
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

    <?= $this->Form->create($celula); ?>
    <fieldset>
        <legend><?= __('Adicionar célula') ?></legend>
        <?php
              // echo $this->Form->input('fk_controletransporte');
            echo $this->Form->input('n_celula', ['label' => 'Nº da célula']);
            echo $this->Form->input('qtd_pupas_mortas', ['label' => 'Quantidade de pupas mortas']);
            echo $this->Form->input('qtd_adultos_emergidos', ['label' => 'Quantidade de adultos emergidos']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
