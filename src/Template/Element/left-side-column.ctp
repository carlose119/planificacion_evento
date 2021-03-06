
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <?= $this->Html->image('avatar3.png', ['class' => "img-circle", 'alt' => "User Image"]) ?>
        </div>
        <div class="pull-left info">
            <p>Hola, <?= $this->request->session()->read('Auth.User.username') ?></p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
            <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>-->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

        <li class="treeview <?php if(in_array($controller, ['Auditorias'])) echo 'active'; ?>">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Bitacora</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Ver'), ['controller' => 'Auditorias', 'action' => 'index'], ['escape' => false]) ?></li>                
            </ul>
        </li>
        
        <li class="treeview <?php if(in_array($controller, ['Cargos', 'Groups'])) echo 'active'; ?>">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Configuración</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Agregar Cargo'), ['controller' => 'Cargos', 'action' => 'add'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Listar Cargos'), ['controller' => 'Cargos', 'action' => 'index'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Agregar Grupo'), ['controller' => 'Groups', 'action' => 'add'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Listar Grupos'), ['controller' => 'Groups', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
        </li>

        <li class="treeview <?php if(in_array($controller, ['Users']) && $action != 'home') echo 'active'; ?>">
            <a href="#">
                <i class="fa fa-user"></i>
                <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Agregar Usuario'), ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Listar Usuario'), ['controller' => 'Users', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
        </li>

        <li class="treeview <?php if(in_array($controller, ['Trabajadores'])) echo 'active'; ?>">
            <a href="#">
                <i class="fa fa-users"></i> <span>Trabajadores</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Agregar Trabajador'), ['controller' => 'Trabajadores', 'action' => 'add'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Listar Trabajadores'), ['controller' => 'Trabajadores', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
        </li>
        
        <li class="treeview <?php if(in_array($controller, ['Canchas'])) echo 'active'; ?>">
            <a href="#">
                <i class="fa fa-bars"></i> <span>Canchas</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Agregar Cancha'), ['controller' => 'Canchas', 'action' => 'add'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Listar Canchas'), ['controller' => 'Canchas', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
        </li>
        
        <li class="treeview <?php if(in_array($controller, ['Planificaciones', 'PlanificacionDetalles'])) echo 'active'; ?>">
            <a href="#">
                <i class="fa fa-calendar"></i> <span>Planificación</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Calendario'), ['controller' => 'Planificaciones', 'action' => 'calendario'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Agregar Planificación'), ['controller' => 'Planificaciones', 'action' => 'add'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Listar Planificaciones'), ['controller' => 'Planificaciones', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
        </li>
        
        <li class="treeview <?php if(in_array($controller, ['TrabajadorCalificaciones'])) echo 'active'; ?>">
            <a href="#">
                <i class="fa fa-calendar"></i> <span>Calificaciones</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">                
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Agregar Calificación'), ['controller' => 'TrabajadorCalificaciones', 'action' => 'add'], ['escape' => false]) ?></li>
                <li><?= $this->Html->link('<i class="fa fa-angle-double-right"></i> ' . __('Listar Calificaciones'), ['controller' => 'TrabajadorCalificaciones', 'action' => 'index'], ['escape' => false]) ?></li>
            </ul>
        </li>

        <!--<li class="active">
            <a href="index.html">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
            </ul>
        </li>
        <li>
            <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="badge pull-right bg-red">3</small>
            </a>
        </li>
        <li>
            <a href="pages/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="badge pull-right bg-yellow">12</small>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
            </ul>
        </li>-->
    </ul>
</section>
<!-- /.sidebar -->