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
            <?= $this->Html->link(__('List Vuelo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vuelo form content">
            <?= $this->Form->create($vuelo) ?>
            <fieldset>
                <legend><?= __('Add Vuelo') ?></legend>
                <?php
                    echo $this->Form->control('ciudadOrigen');
                    echo $this->Form->control('estadoOrigen');
                    echo $this->Form->control('paisOrigen');
                    echo $this->Form->control('ciudadDestino');
                    echo $this->Form->control('estadoDestino');
                    echo $this->Form->control('paisDestino');
                    echo $this->Form->control('plazasTotales');
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('hora');
                    echo $this->Form->control('estatus');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
