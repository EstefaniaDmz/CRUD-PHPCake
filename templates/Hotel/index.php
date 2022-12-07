<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Hotel> $hotel
 */
?>
<div class="hotel index content">
    <?= $this->Html->link(__('New Hotel'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Hotel') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idHotel') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('calle') ?></th>
                    <th><?= $this->Paginator->sort('colonia') ?></th>
                    <th><?= $this->Paginator->sort('cp') ?></th>
                    <th><?= $this->Paginator->sort('ciudad') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('pais') ?></th>
                    <th><?= $this->Paginator->sort('numeroPlazas') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotel as $hotel): ?>
                <tr>
                    <td><?= $this->Number->format($hotel->idHotel) ?></td>
                    <td><?= h($hotel->telefono) ?></td>
                    <td><?= h($hotel->nombre) ?></td>
                    <td><?= h($hotel->calle) ?></td>
                    <td><?= h($hotel->colonia) ?></td>
                    <td><?= h($hotel->cp) ?></td>
                    <td><?= h($hotel->ciudad) ?></td>
                    <td><?= h($hotel->estado) ?></td>
                    <td><?= h($hotel->pais) ?></td>
                    <td><?= $this->Number->format($hotel->numeroPlazas) ?></td>
                    <td><?= $this->Number->format($hotel->estatus) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $hotel->idHotel]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hotel->idHotel]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hotel->idHotel], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->idHotel)]) ?>
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
