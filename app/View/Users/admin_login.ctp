<div class="login_box">
    <?php echo $this->Form->create('User', array("class" => "main", "id" => "login_form", 'inputDefaults' => array('label' => false, 'div' => false))); ?>
    <div class="top_b">Sign in to Gebo Admin</div>    

    <div class="cnt_b">
        <div class="formRow">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <?php echo $this->Form->input('username', array("type" => "text", "id" => "username", "placeholder" => "Your username", "class" => "loginUsername")); ?>
            </div>
        </div>
        <div class="formRow">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                <?php echo $this->Form->input('password', array("type" => "password", "id" => "password", "placeholder" => "Password", "class" => "loginPassword")); ?>
            </div>
        </div>
        <div class="formRow clearfix">
            <label class="checkbox">
                <?php echo $this->Form->input('remmber', array("type" => "checkbox", "id" => "password", "placeholder" => "Password", "class" => "loginPassword")); ?>
                Remember me</label>
        </div>
    </div>
    <div class="btm_b clearfix">
        <button class="btn btn-inverse pull-right" type="submit">Sign In</button>
        <span class="link_reg"><a href="#reg_form">Not registered? Sign up here</a></span>
    </div>  

    <?php echo $this->Form->end() ?>


    <?php echo $this->Form->create('User', array("class" => "main", "id" => "pass_form", "style" => "display:none", 'inputDefaults' => array('label' => false, 'div' => false))); ?>
    <div class="top_b">Can't sign in?</div>    
    <div class="alert alert-info alert-login">
        Please enter your email address. You will receive a link to create a new password via email.
    </div>
    <div class="cnt_b">
        <div class="formRow clearfix">
            <div class="input-prepend">
                <span class="add-on">@</span><input type="text" placeholder="Your email address" />
            </div>
        </div>
    </div>
    <div class="btm_b tac">
        <button class="btn btn-inverse" type="submit">Request New Password</button>
    </div>  
    <?php echo $this->Form->end() ?>

    <?php echo $this->Form->create('User', array("class" => "main", "id" => "reg_form", "style" => "display:none", 'inputDefaults' => array('label' => false, 'div' => false))); ?>
    <div class="top_b">Sign up to Gebo Admin</div>
    <div class="alert alert-login">
        By filling in the form bellow and clicking the "Sign Up" button, you accept and agree to <a data-toggle="modal" href="#terms">Terms of Service</a>.
    </div>
    <div id="terms" class="modal hide fade" style="display:none">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Terms and Conditions</h3>
        </div>
        <div class="modal-body">
            <p>
                Nulla sollicitudin pulvinar enim, vitae mattis velit venenatis vel. Nullam dapibus est quis lacus tristique consectetur. Morbi posuere vestibulum neque, quis dictum odio facilisis placerat. Sed vel diam ultricies tortor egestas vulputate. Aliquam lobortis felis at ligula elementum volutpat. Ut accumsan sollicitudin neque vitae bibendum. Suspendisse id ullamcorper tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum at augue lorem, at sagittis dolor. Curabitur lobortis justo ut urna gravida scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam vitae ligula elit.
                Pellentesque tincidunt mollis erat ac iaculis. Morbi odio quam, suscipit at sagittis eget, commodo ut justo. Vestibulum auctor nibh id diam placerat dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse vel nunc sed tellus rhoncus consectetur nec quis nunc. Donec ultricies aliquam turpis in rhoncus. Maecenas convallis lorem ut nisl posuere tristique. Suspendisse auctor nibh in velit hendrerit rhoncus. Fusce at libero velit. Integer eleifend sem a orci blandit id condimentum ipsum vehicula. Quisque vehicula erat non diam pellentesque sed volutpat purus congue. Duis feugiat, nisl in scelerisque congue, odio ipsum cursus erat, sit amet blandit risus enim quis ante. Pellentesque sollicitudin consectetur risus, sed rutrum ipsum vulputate id. Sed sed blandit sem. Integer eleifend pretium metus, id mattis lorem tincidunt vitae. Donec aliquam lorem eu odio facilisis eu tempus augue volutpat.
            </p>
        </div>
        <div class="modal-footer">
            <a data-dismiss="modal" class="btn" href="#">Close</a>
        </div>
    </div>
    <div class="cnt_b">

        <div class="formRow">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="Username" />
            </div>
        </div>
        <div class="formRow">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span><input type="text" placeholder="Password" />
            </div>
        </div>
        <div class="formRow">
            <div class="input-prepend">
                <span class="add-on">@</span><input type="text" placeholder="Your email address" />
            </div>
            <small>The e-mail address is not made public and will only be used if you wish to receive a new password.</small>
        </div>

    </div>
    <div class="btm_b tac">
        <button class="btn btn-inverse" type="submit">Sign Up</button>
    </div>  
    <?php echo $this->Form->end() ?>
</div>

<div class="links_b links_btm clearfix">
    <span class="linkform"><a href="#pass_form">Forgot password?</a></span>
    <span class="linkform" style="display:none">Never mind, <a href="#login_form">send me back to the sign-in screen</a></span>
</div>  

