<div class="canchas view large-9 medium-8 columns content">
    <h3><?= h($cancha->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($cancha->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cancha->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($this->Time->format($cancha->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($this->Time->format($cancha->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $cancha->activo ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eliminado') ?></th>
            <td><?= $cancha->eliminado ? __('Si') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($cancha->descripcion)); ?>
    </div>    
</div>
