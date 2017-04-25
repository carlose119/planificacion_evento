<div class="box col-md-9">
    <div class="box-header">
        <h3 class="box-title"><?= __('Bitacora') ?></h3>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('tabla') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('tabla_id', 'Id Tabla') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('accion') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('user_id', 'Usuario') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('ip_conexion') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created', 'Creado') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified', 'Modificado') ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($auditorias as $auditoria): ?>
                    <tr>
                        <td><?= $this->Number->format($auditoria->id) ?></td>
                        <td><?= h($auditoria->tabla) ?></td>
                        <td><?= h($auditoria->tabla_id) ?></td>
                        <td><?= h($auditoria->accion) ?></td>
                        <td><?= $auditoria->has('user') ? h($auditoria->user->username) : '' ?></td>
                        <td><?= h($auditoria->ip_conexion) ?></td>
                        <td><?= h($this->Time->format($auditoria->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
                        <td><?= h($this->Time->format($auditoria->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $auditoria->id], ['class' => 'btn btn-info btn-xs']) ?>                        
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
