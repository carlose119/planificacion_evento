
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Iniciar Sesion</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <?= $this->Html->css('bootstrap.min.css') ?>
        <!-- font Awesome -->
        <?= $this->Html->css('font-awesome.min.css') ?>
        <!-- Theme style -->
        <?= $this->Html->css('AdminLTE.css') ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <?= $this->fetch('content') ?>
        </div>

        <!-- jQuery 2.0.2 -->
        <?= $this->Html->script('jquery.min.js') ?>
        <!-- Bootstrap -->
        <?= $this->Html->script('bootstrap.min.js') ?>

    </body>
</html>