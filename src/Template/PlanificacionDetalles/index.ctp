<div class="box col-md-9">
    <div class="box-header">
        <h3 class="box-title"><?= __('Planificación Detalles') ?></h3>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive">

        <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planificacion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('trabajador_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cargo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pago') ?></th>
                <th scope="col"><?= $this->Paginator->sort('eliminado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planificacionDetalles as $planificacionDetalle): ?>
            <tr>
                <td><?= $this->Number->format($planificacionDetalle->id) ?></td>
                <td><?= $planificacionDetalle->has('planificacione') ? $this->Html->link($planificacionDetalle->planificacione->id, ['controller' => 'Planificaciones', 'action' => 'view', $planificacionDetalle->planificacione->id]) : '' ?></td>
                <td><?= $planificacionDetalle->has('trabajadore') ? $this->Html->link($planificacionDetalle->trabajadore->id, ['controller' => 'Trabajadores', 'action' => 'view', $planificacionDetalle->trabajadore->id]) : '' ?></td>
                <td><?= $planificacionDetalle->has('cargo') ? $this->Html->link($planificacionDetalle->cargo->id, ['controller' => 'Cargos', 'action' => 'view', $planificacionDetalle->cargo->id]) : '' ?></td>
                <td><?= h($planificacionDetalle->horas) ?></td>
                <td><?= $this->Number->format($planificacionDetalle->pago) ?></td>
                <td><?= h($planificacionDetalle->eliminado) ?></td>
                <td><?= h($planificacionDetalle->created) ?></td>
                <td><?= h($planificacionDetalle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $planificacionDetalle->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $planificacionDetalle->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $planificacionDetalle->id], ['confirm' => __('Esta seguro que quieres eliminar el registro # {0}?', $planificacionDetalle->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('Primero')) ?>
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
                <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de un total de {{count}}')]) ?></p>
        </div>
    </div>
</div>
