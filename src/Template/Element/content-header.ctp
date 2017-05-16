<?php
    if(!isset($pages)){
        $pages = $controller;
    }
    
    if(!isset($section)){
        $section = $action;
    }
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= $this->fetch('title') ?>
        <small><?= $this->Html->link(__('Panel de Control'), ['controller' => 'Planificaciones', 'action' => 'index']) ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?= $pages ?></a></li>
        <li class="active"><?= $section ?></li>
    </ol>
</section>