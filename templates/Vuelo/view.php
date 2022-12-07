<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vuelo $vuelo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vuelo'), ['action' => 'edit', $vuelo->idVuelo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vuelo'), ['action' => 'delete', $vuelo->idVuelo], ['confirm' => __('Are you sure you want to delete # {0}?', $vuelo->idVuelo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vuelo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vuelo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vuelo view content">
            <h3><?= h($vuelo->idVuelo) ?></h3>
            <table>
                <tr>
                    <th><?= __('CiudadOrigen') ?></th>
                    <td><?= h($vuelo->ciudadOrigen) ?></td>
                </tr>
                <tr>
                    <th><?= __('EstadoOrigen') ?></th>
                    <td><?= h($vuelo->estadoOrigen) ?></td>
                </tr>
                <tr>
                    <th><?= __('PaisOrigen') ?></th>
                    <td><?= h($vuelo->paisOrigen) ?></td>
                </tr>
                <tr>
                    <th><?= __('CiudadDestino') ?></th>
                    <td><?= h($vuelo->ciudadDestino) ?></td>
                </tr>
                <tr>
                    <th><?= __('EstadoDestino') ?></th>
                    <td><?= h($vuelo->estadoDestino) ?></td>
                </tr>
                <tr>
                    <th><?= __('PaisDestino') ?></th>
                    <td><?= h($vuelo->paisDestino) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVuelo') ?></th>
                    <td><?= $this->Number->format($vuelo->idVuelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('PlazasTotales') ?></th>
                    <td><?= $this->Number->format($vuelo->plazasTotales) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estatus') ?></th>
                    <td><?= $vuelo->estatus === null ? '' : $this->Number->format($vuelo->estatus) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($vuelo->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($vuelo->hora) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
