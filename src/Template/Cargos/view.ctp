
<div class="cargos view large-9 medium-8 columns content">
    <h3><?= h($cargo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($cargo->cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cargo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($this->Time->format($cargo->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($this->Time->format($cargo->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eliminado') ?></th>
            <td><?= $cargo->eliminado ? __('Si') : __('No'); ?></td>
        </tr>
    </table>
</div>
