<div class="planificacionDetalles view large-9 medium-8 columns content">
    <h3><?= h($planificacionDetalle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Planificacione') ?></th>
            <td><?= $planificacionDetalle->has('planificacione') ? h($planificacionDetalle->planificacione->evento) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trabajadore') ?></th>
            <td><?= $planificacionDetalle->has('trabajadore') ? h($planificacionDetalle->trabajadore->nombre . ' ' . $planificacionDetalle->trabajadore->apellido) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= $planificacionDetalle->has('cargo') ? h($planificacionDetalle->cargo->cargo) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($planificacionDetalle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pago') ?></th>
            <td><?= $this->Number->format($planificacionDetalle->pago) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horas') ?></th>
            <td><?= h($this->Time->format($planificacionDetalle->horas, 'HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($this->Time->format($planificacionDetalle->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($this->Time->format($planificacionDetalle->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eliminado') ?></th>
            <td><?= $planificacionDetalle->eliminado ? __('Si') : __('No'); ?></td>
        </tr>
    </table>
</div>
