<?php

echo $this->Form->input('planificacion_id', ['options' => $planificaciones, 'empty' => '--Seleccione--', 'value' => isset($planificacion_id) ? $planificacion_id : null]);
echo $this->Form->input('trabajador_id', ['options' => $trabajadores, 'empty' => '--Seleccione--', 'value' => isset($trabajador_id) ? $trabajador_id : null]);
echo $this->Form->input('calificacion');
echo $this->Form->input('comentarios');
?>