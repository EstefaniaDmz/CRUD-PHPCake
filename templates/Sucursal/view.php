<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sucursal $sucursal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sucursal'), ['action' => 'edit', $sucursal->idSucursal], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sucursal'), ['action' => 'delete', $sucursal->idSucursal], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursal->idSucursal), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sucursal'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sucursal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sucursal view content">
            <h3><?= h($sucursal->idSucursal) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($sucursal->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($sucursal->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($sucursal->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Colonia') ?></th>
                    <td><?= h($sucursal->colonia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp') ?></th>
                    <td><?= h($sucursal->cp) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSucursal') ?></th>
                    <td><?= $this->Number->format($sucursal->idSucursal) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumeroPlazas') ?></th>
                    <td><?= $this->Number->format($sucursal->numeroPlazas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $sucursal->estatus === null ? '' : $this->Number->format($sucursal->estatus) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
