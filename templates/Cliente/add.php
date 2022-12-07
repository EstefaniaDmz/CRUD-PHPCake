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
            <?= $this->Html->link(__('List Cliente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cliente form content">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Add Cliente') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidoPaterno');
                    echo $this->Form->control('apellidoMaterno');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('calle');
                    echo $this->Form->control('colonia');
                    echo $this->Form->control('cp');
                    echo $this->Form->control('idHotel');
                    echo $this->Form->control('regimenHotel');
                    echo $this->Form->control('idSucursal');
                    echo $this->Form->control('idVuelo');
                    echo $this->Form->control('claseVuelo');
                    echo $this->Form->control('estatus');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
