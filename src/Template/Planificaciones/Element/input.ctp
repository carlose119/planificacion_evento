<?php

echo $this->Form->input('evento');
echo $this->Form->input('lugar');
echo $this->Form->input('fecha', ['empty' => true]);
echo $this->Form->input('hora', ['empty' => true]);
echo $this->Form->input('descripcion');
echo $this->Form->input('activo');
?>