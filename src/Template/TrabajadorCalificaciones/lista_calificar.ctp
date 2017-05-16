<div class="box col-md-9">

    <div class="box-header">
        <h3 class="box-title"><?= __('Trabajadores de la Planificación') ?> (<?= $planificacion->evento ?>)</h3>        
    </div><!-- /.box-header -->
    
    <div class="box-body table-responsive">        

        <?php if ($trabajadores->count() > 0): ?>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('Trabajadores.datos', 'Trabajador') ?></th>
                        <!--<th scope="col"><?= $this->Paginator->sort('calificacion', 'Calificación') ?></th>-->
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($trabajadores as $trabajador): ?>
                        <tr>
                            <td><?= $trabajador->has('trabajadore') ? h($trabajador->trabajadore->Datos) : '' ?></td>
                            <!--<td><?= $this->Number->format($trabajador->calificacion) ?></td>-->
                            <td class="actions">                                
                                <?= $this->Html->link(__('Calificar'), ['action' => 'calificar', $planificacion->id, $trabajador->id], ['class' => 'btn btn-success btn-xs']) ?>
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
    <?php else: ?>
        <h3>No hay calificaciones registradas.</h3>
    <?php endif; ?>
</div>
