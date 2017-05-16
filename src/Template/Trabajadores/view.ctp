<div class="trabajadores view large-9 medium-8 columns content">
    <h3><?= h($trabajadore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= $trabajadore->has('cargo') ? h($trabajadore->cargo->cargo) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($trabajadore->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($trabajadore->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Identidad') ?></th>
            <td><?= h($trabajadore->numero_identidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($trabajadore->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($trabajadore->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disponible para:') ?></th>
            <td>
                <?php foreach ($trabajadore->canchas as $cancha): ?>
                    * <?= h($cancha->nombre) ?><br/>
                <?php endforeach; ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($trabajadore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($this->Time->format($trabajadore->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($this->Time->format($trabajadore->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $trabajadore->activo ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eliminado') ?></th>
            <td><?= $trabajadore->eliminado ? __('Si') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Direccion') ?></h4>
        <?= $this->Text->autoParagraph(h($trabajadore->direccion)); ?>
    </div>
</div>
