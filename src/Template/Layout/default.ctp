
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Planificación de Eventos:
            <?= $this->fetch('title') ?>
        </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <?= $this->Html->css('bootstrap.min.css', ['fullBase' => true]) ?>
        <!-- font Awesome -->
        <?= $this->Html->css('font-awesome.min.css', ['fullBase' => true]) ?>
        <!-- Ionicons -->
        <?= $this->Html->css('ionicons.min.css', ['fullBase' => true]) ?>
        <!-- Morris chart -->
        <?= $this->Html->css('morris/morris.css', ['fullBase' => true]) ?>
        <!-- jvectormap -->
        <?= $this->Html->css('jvectormap/jquery-jvectormap-1.2.2.css', ['fullBase' => true]) ?>
        <!-- Date Picker -->
        <?= $this->Html->css('datepicker/datepicker3.css', ['fullBase' => true]) ?>
        <!-- Daterange picker -->
        <?= $this->Html->css('daterangepicker/daterangepicker-bs3.css', ['fullBase' => true]) ?>
        <!-- bootstrap wysihtml5 - text editor -->
        <?= $this->Html->css('bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', ['fullBase' => true]) ?>
        <!-- DATA TABLES -->
        <?= $this->Html->css('datatables/dataTables.bootstrap.css', ['fullBase' => true]) ?>
        <!-- Theme style -->
        <?= $this->Html->css('AdminLTE.css', ['fullBase' => true]) ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <?= $this->Html->css('sistema.css', ['fullBase' => true]) ?>
        
        <?php echo $this->Html->script('jquery.min.js', ['fullBase' => true]) ?>
        <?php echo $this->Html->script('sistemas.js', ['fullBase' => true]) ?>
        
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body class="skin-blue">
        <?= $this->element('header') ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <?= $this->element('left-side-column') ?>
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <?= $this->element('content-header') ?>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->Flash->render() ?>
                            <div class="container clearfix" style="max-width: 1000px;">
                                <?= $this->fetch('content') ?>
                            </div>
                        </div>
                    </div>
                </section>

                <?= $this->element('right-side-column') ?>                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <?= $this->Html->script('jquery.min.js', ['fullBase' => true]) ?>
        <!-- jQuery UI 1.10.3 -->
        <?= $this->Html->script('jquery-ui-1.10.3.min.js', ['fullBase' => true]) ?>
        <!-- Bootstrap -->
        <?= $this->Html->script('bootstrap.min.js', ['fullBase' => true]) ?>
        <!-- Morris.js charts -->
        <?= $this->Html->script('raphael-min.js', ['fullBase' => true]) ?>
        <?= $this->Html->script('plugins/morris/morris.min.js', ['fullBase' => true]) ?>
        <!-- Sparkline -->
        <?= $this->Html->script('plugins/sparkline/jquery.sparkline.min.js', ['fullBase' => true]) ?>
        <!-- jvectormap -->
        <?= $this->Html->script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', ['fullBase' => true]) ?>
        <?= $this->Html->script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js', ['fullBase' => true]) ?>
        <!-- jQuery Knob Chart -->
        <?= $this->Html->script('plugins/jqueryKnob/jquery.knob.js', ['fullBase' => true]) ?>
        <!-- daterangepicker -->
        <?= $this->Html->script('plugins/daterangepicker/daterangepicker.js', ['fullBase' => true]) ?>
        <!-- datepicker -->
        <?= $this->Html->script('plugins/datepicker/bootstrap-datepicker.js', ['fullBase' => true]) ?>
        <!-- Bootstrap WYSIHTML5 -->
        <?= $this->Html->script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', ['fullBase' => true]) ?>
        <!-- iCheck -->
        <?= $this->Html->script('plugins/iCheck/icheck.min.js', ['fullBase' => true]) ?>

        <!-- AdminLTE App -->
        <?= $this->Html->script('AdminLTE/app.js', ['fullBase' => true]) ?>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <?= $this->Html->script('AdminLTE/dashboard.js', ['fullBase' => true]) ?>

        <!-- DATA TABES SCRIPT -->
        <?= $this->Html->script('plugins/datatables/jquery.dataTables.js', ['fullBase' => true]) ?>
        <?= $this->Html->script('plugins/datatables/dataTables.bootstrap.js', ['fullBase' => true]) ?>

        <!-- AdminLTE for demo purposes -->
        <?= $this->Html->script('AdminLTE/demo.js', ['fullBase' => true]) ?>
        
        <?= $this->Html->script('sistemas.js', ['fullBase' => true]) ?>
        
        <script type="text/javascript">
            $(function() {
                $('.table').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>