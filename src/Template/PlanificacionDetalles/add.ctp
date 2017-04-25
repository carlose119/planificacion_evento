<div class="col-md-9">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"><?= __('Planificación') ?></h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="form-group select">
                <label>Evento:</label> <?= h($planificaciones->evento) ?>,            
                <label>Lugar:</label> <?= h($planificaciones->lugar) ?>,            
                <label>Fecha:</label> <?= h($planificaciones->fecha) ?>,
                <label>Hora:</label> <?= h($planificaciones->hora) ?>             
            </div>
        </div>
    </div>
</div>

<?php if ($planificacionDetalles->count() > 0): ?>
    <div class="box2 col-md-9">
        <div class="box-header">
            <h3 class="box-title"><?= __('Planificación Detalles') ?></h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Trabajador</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Horas</th>
                        <th scope="col">Pago</th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($planificacionDetalles as $detalle): ?>
                        <tr>
                            <td><?= $detalle->has('trabajadore') ? h($detalle->trabajadore->nombre . ' ' . $detalle->trabajadore->apellido) : '' ?></td>
                            <td><?= $detalle->has('cargo') ? h($detalle->cargo->cargo) : '' ?></td>
                            <td><?= h($this->Time->format($detalle->horas, 'HH:mm:ss')) ?></td>
                            <td><?= $this->Number->format($detalle->pago) ?></td>
                            <td class="actions">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $detalle->id], ['confirm' => __('Esta seguro que quieres eliminar el registro # {0}?', $detalle->id), 'class' => 'btn btn-danger btn-xs']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>        
        </div>
    </div>
<?php endif; ?>

<div class="col-md-9">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"><?= __('Agregar Detalle') ?></h3>
        </div><!-- /.box-header -->
        <?= $this->Form->create($planificacionDetalle) ?>
        <div class="box-body">
            <?= $this->element('../PlanificacionDetalles/Element/input') ?>            
            <?= $this->Form->button(__('Guardar')) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>