<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sucursal> $sucursal
 */
?>
<div class="sucursal index content">
    <?= $this->Html->link(__('New Sucursal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sucursal') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idSucursal') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('calle') ?></th>
                    <th><?= $this->Paginator->sort('colonia') ?></th>
                    <th><?= $this->Paginator->sort('cp') ?></th>
                    <th><?= $this->Paginator->sort('numeroPlazas') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sucursal as $sucursal): ?>
                <tr>
                    <td><?= $this->Number->format($sucursal->idSucursal) ?></td>
                    <td><?= h($sucursal->nombre) ?></td>
                    <td><?= h($sucursal->telefono) ?></td>
                    <td><?= h($sucursal->calle) ?></td>
                    <td><?= h($sucursal->colonia) ?></td>
                    <td><?= h($sucursal->cp) ?></td>
                    <td><?= $this->Number->format($sucursal->numeroPlazas) ?></td>
                    <td><?= $sucursal->estatus === null ? '' : $this->Number->format($sucursal->estatus) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sucursal->idSucursal]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sucursal->idSucursal]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sucursal->idSucursal], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursal->idSucursal)]) ?>
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
