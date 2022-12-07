<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vuelo> $vuelo
 */
?>
<div class="vuelo index content">
    <?= $this->Html->link(__('New Vuelo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vuelo') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idVuelo') ?></th>
                    <th><?= $this->Paginator->sort('ciudadOrigen') ?></th>
                    <th><?= $this->Paginator->sort('estadoOrigen') ?></th>
                    <th><?= $this->Paginator->sort('paisOrigen') ?></th>
                    <th><?= $this->Paginator->sort('ciudadDestino') ?></th>
                    <th><?= $this->Paginator->sort('estadoDestino') ?></th>
                    <th><?= $this->Paginator->sort('paisDestino') ?></th>
                    <th><?= $this->Paginator->sort('plazasTotales') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('hora') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vuelo as $vuelo): ?>
                <tr>
                    <td><?= $this->Number->format($vuelo->idVuelo) ?></td>
                    <td><?= h($vuelo->ciudadOrigen) ?></td>
                    <td><?= h($vuelo->estadoOrigen) ?></td>
                    <td><?= h($vuelo->paisOrigen) ?></td>
                    <td><?= h($vuelo->ciudadDestino) ?></td>
                    <td><?= h($vuelo->estadoDestino) ?></td>
                    <td><?= h($vuelo->paisDestino) ?></td>
                    <td><?= $this->Number->format($vuelo->plazasTotales) ?></td>
                    <td><?= h($vuelo->fecha) ?></td>
                    <td><?= h($vuelo->hora) ?></td>
                    <td><?= $vuelo->estatus === null ? '' : $this->Number->format($vuelo->estatus) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vuelo->idVuelo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vuelo->idVuelo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vuelo->idVuelo], ['confirm' => __('Are you sure you want to delete # {0}?', $vuelo->idVuelo)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
