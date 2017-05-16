<div class="trabajadores view large-9 medium-8 columns content">
    <h3><?= h($trabajadorCalificacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Planificación') ?></th>
            <td><?= $trabajadorCalificacione->has('planificacione') ? h($trabajadorCalificacione->planificacione->evento) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trabajador') ?></th>
            <td><?= $trabajadorCalificacione->has('trabajadore') ? h($trabajadorCalificacione->trabajadore->Datos) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($trabajadorCalificacione->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calificación') ?></th>
            <td><?= $this->Number->format($trabajadorCalificacione->calificacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($this->Time->format($trabajadorCalificacione->created, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($this->Time->format($trabajadorCalificacione->modified, 'dd-MM-YYYY HH:mm:ss')) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eliminado') ?></th>
            <td><?= $trabajadorCalificacione->eliminado ? __('Si') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comentarios') ?></h4>
        <?= $this->Text->autoParagraph(h($trabajadorCalificacione->comentarios)); ?>
    </div>
</div>
