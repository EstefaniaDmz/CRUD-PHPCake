<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->idCliente], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->idCliente], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->idCliente), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cliente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cliente view content">
            <h3><?= h($cliente->idCliente) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($cliente->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoPaterno') ?></th>
                    <td><?= h($cliente->apellidoPaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('ApellidoMaterno') ?></th>
                    <td><?= h($cliente->apellidoMaterno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($cliente->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calle') ?></th>
                    <td><?= h($cliente->calle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Colonia') ?></th>
                    <td><?= h($cliente->colonia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp') ?></th>
                    <td><?= h($cliente->cp) ?></td>
                </tr>
                <tr>
                    <th><?= __('RegimenHotel') ?></th>
                    <td><?= h($cliente->regimenHotel) ?></td>
                </tr>
                <tr>
                    <th><?= __('ClaseVuelo') ?></th>
                    <td><?= h($cliente->claseVuelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdCliente') ?></th>
                    <td><?= $this->Number->format($cliente->idCliente) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdHotel') ?></th>
                    <td><?= $this->Number->format($cliente->idHotel) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdSucursal') ?></th>
                    <td><?= $this->Number->format($cliente->idSucursal) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVuelo') ?></th>
                    <td><?= $this->Number->format($cliente->idVuelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $cliente->estatus === null ? '' : $this->Number->format($cliente->estatus) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
