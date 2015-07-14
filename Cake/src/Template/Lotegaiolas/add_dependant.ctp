<div class="montagem index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
       <tr>
            <!--<th><?= $this->Paginator->sort('montagemid') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_lotebandejas') ?></th>-->
            <!--<th><?= $this->Paginator->sort('fk_bequer') ?></th>-->
            <th><?= $this->Paginator->sort('data_montagem','Data Montagem') ?></th>
            <th><?= $this->Paginator->sort('nome_responsavel','Nome do Responsável') ?></th>
            <th><?= $this->Paginator->sort('qtd_bandejas_montadas', 'Quantidade de bandejas montadas') ?></th>
            <th><?= $this->Paginator->sort('tipo_bandeja', 'Tipo da bandeja') ?></th>
            <th class="actions"><?= __('Opções') ?></th>
    </thead>
    <tbody>
    <?php foreach ($montagem as $montagem): ?>
        <tr>
            <!--<td><?= h($lotebandeja->lotebandejasid) ?></td>-->
			<td><?= h($montagem->data_montagem) ?></td>
            <td><?= h($montagem->nome_responsavel) ?></td>
            <td><?= $this->Number->format($montagem->qtd_bandejas_montadas) ?></td>
            <td><?= h($montagem->tipo_bandeja) ?></td>
            <!--<td><?= $this->Number->format($lotebandeja->qtd_bdj_desc_antes_separacao) ?></td>-->
            <td class="actions">
            	<?= $this->Html->link(__('Adicionar'), ['action' => 'new_lote', $montagem->tipo_bandeja]) ?>
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