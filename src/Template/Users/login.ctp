<div class="form-box" id="login-box">
    <div class="header">Iniciar Sesión</div>
    <?= $this->Form->create('Users', ['url' => ['controller' => 'users', 'action' => 'login']]); ?>
        <div class="body bg-gray">
            <div class="form-group">
                <?= $this->Form->input('username', ['placeholder' => "Usuario", 'label' => false, 'class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->input('password', ['placeholder' => "Clave", 'label' => false, 'class' => 'form-control']) ?>
            </div>          
            <!--<div class="form-group">
                <input type="checkbox" name="remember_me"/> Remember me
            </div>-->
        </div>
        <div class="footer">
            <?= $this->Form->button('Entrar', ['class' => "btn bg-olive btn-block"]) ?>  

            <!--<p><a href="#">I forgot my password</a></p>

            <a href="register.html" class="text-center">Register a new membership</a>-->
        </div>
    <?= $this->Form->end(); ?>

    <!--<div class="margin text-center">
        <span>Sign in using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
    </div>-->
</div>