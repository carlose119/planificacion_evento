<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $planificacionDetalle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $planificacionDetalle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Planificacion Detalles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Planificaciones'), ['controller' => 'Planificaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Planificacione'), ['controller' => 'Planificaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Trabajadores'), ['controller' => 'Trabajadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trabajadore'), ['controller' => 'Trabajadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cargos'), ['controller' => 'Cargos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cargo'), ['controller' => 'Cargos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planificacionDetalles form large-9 medium-8 columns content">
    <?= $this->Form->create($planificacionDetalle) ?>
    <fieldset>
        <legend><?= __('Edit Planificacion Detalle') ?></legend>
        <?php
            echo $this->Form->input('planificacion_id', ['options' => $planificaciones, 'empty' => true]);
            echo $this->Form->input('trabajador_id', ['options' => $trabajadores, 'empty' => true]);
            echo $this->Form->input('cargo_id', ['options' => $cargos, 'empty' => true]);
            echo $this->Form->input('horas', ['empty' => true]);
            echo $this->Form->input('pago');
            echo $this->Form->input('eliminado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
