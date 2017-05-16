<div class="box col-md-9">
    <div class="box-header">
        <h3 class="box-title"><?= __('Trabajadores') ?></h3>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive">

        <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cargo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_identidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('email') ?></th>-->
                <th scope="col">Disponible</th>
                <th scope="col"><?= $this->Paginator->sort('activo') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trabajadores as $trabajadore): ?>
            <tr>
                <td><?= $trabajadore->has('cargo') ? h($trabajadore->cargo->cargo) : '' ?></td>
                <td><?= h($trabajadore->nombre) ?></td>
                <td><?= h($trabajadore->apellido) ?></td>
                <td><?= h($trabajadore->numero_identidad) ?></td>
                <td><?= h($trabajadore->telefono) ?></td>
                <!--<td><?= h($trabajadore->email) ?></td>-->
                <td>
                    <?php foreach($trabajadore->canchas as $cancha): ?>
                        * <?= h($cancha->nombre) ?><br/>
                    <?php endforeach; ?>
                </td>
                <td><?= h($trabajadore->activo == 1 ? 'Si' : 'No') ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $trabajadore->id], ['class' => 'btn btn-info btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $trabajadore->id], ['class' => 'btn btn-success btn-xs']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $trabajadore->id], ['confirm' => __('Esta seguro que quieres eliminar el registro # {0}?', $trabajadore->id), 'class' => 'btn btn-danger btn-xs']) ?>
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
