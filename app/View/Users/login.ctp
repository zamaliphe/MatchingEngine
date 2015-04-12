<!--<div class="users form">
<?php //echo $this->form->create('User',array("class" => "main", 'inputDefaults' => array('label' => false, 'div' => false))); ?>
<?php //echo $this->element('front/forms/form_header'   , array("form_label" => " Login ")); ?>

   

<?php //echo $this->element('front/forms/form_footer'); ?>
</div>-->


<!-- Top line begins -->
<div id="top">
    <div class="wrapper">
        <a href="#" title="" class="logo"><img src="images/logo.png" alt="" /></a>

        <!-- Right top nav -->
        <div class="topNav">
            <ul class="userNav">
                <li><a href="#" title="" class="screen"></a></li>
                <li><a href="#" title="" class="settings"></a></li>
                <li><a href="#" title="" class="logout"></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- Top line ends -->

<?php echo $this->Session->flash(); ?>
  <div class="clear"></div>
<!-- Login wrapper begins -->
<div class="loginWrapper">
    <!-- Current user form -->
    <?php echo $this->Form->create('User', array("class" => "main", 'inputDefaults' => array('label' => false, 'div' => false))); ?>
    <div class="loginPic">
        <?php echo $this->Html->link($this->Html->image('userLogin.png', array()), array(), array("class" => "active","escape"=>false)) ?>  

        <span>Eugene Kopyov</span>
         
        <div class="loginActions">
            <div><a href="#" title="Change user" class="logleft flip"></a></div>
            <div><a href="#" title="Forgot password?" class="logright"></a></div>
        </div>
    </div>
    <br>
     <div class="social_buttons">
        <div class="inset">
            <a class="fb login_button" style= "margin-leftt:70%" href="<?php echo $this->html->url(array("controller" => "users", 'action' => 'login', 'facebook')); ?>">
                <div class="logo_wrapper"><span class="logo"></span></div>
                <span><?php echo $this->Html->image("fb_img.jpg" , array('alt'=>"Login With Facebook" , 'height' => 30, 'width' => 220));  ?></span>
            </a>
            
        </div>
              
        <div class="inset">
            <a class="tw login_button" style= "margin-leftt:70%" href="<?php echo $this->html->url(array("controller" => "users", 'action' => 'login', 'twitter')); ?>">
                <div class="logo_wrapper"><span class="logo"></span></div>
                <span><?php echo $this->Html->image("twitter_login_button.png" , array('alt'=>"Login With Twitter" , 'height' => 30, 'width' => 220));  ?></span>

            </a>
        </div>
    </div>
    <?php echo $this->Form->input('username', array("type" => "text", "placeholder" => "Your username", "class" => "loginUsername")); ?>
    <?php echo $this->Form->input('password', array("type" => "password", "placeholder" => "Password", "class" => "loginPassword")); ?>

    <div class="logControl">
<!--        <div class="memory"><input type="checkbox" checked="checked" class="check" id="remember1" /><label for="remember1">Remember me</label></div>-->
        <?php echo $this->Form->input('remember_me', array('type' => 'checkbox', 'label' => 'Remember me')); ?> 
        <input type="submit" name="submit" value="Login" class="buttonM bBlue" />
        <div class="clear"></div>
    </div>
    

</form>

<!-- New user form -->
<form action="<?php echo Router::url(array('controller' => 'users', 'action' => 'login'), true); ?>" id="recover">
    <div class="loginPic">
        <a href="#" title=""><img src="images/userLogin2.png" alt="" /></a>
        <div class="loginActions">
            <div><a href="#" title="" class="logback flip"></a></div>
            <div><a href="#" title="Forgot password?" class="logright"></a></div>
        </div>
    </div>

    <input type="text" name="username" placeholder="Your username" class="loginUsername" />
    <input type="password" name="password" placeholder="Password" class="loginPassword" />

    <div class="logControl">
        <div class="memory"><input type="checkbox" checked="checked" class="check" id="remember2" /><label for="remember2">Remember me</label></div>
        <input type="submit" name="submit" value="Login" class="buttonM bBlue" />
    </div>

</form>

</div>


<?php return; ?>
<div class="signupCol slide2">
    <div class="signup">
        <h1>Sign Up</h1>
        <h2>It Takes Only <span>2 Seconds!</span></h2>
        <form action="" method="post" id="id4">
            <div id="admin_login_wrap">
                <fieldset class="inputbox username" name="" id="id5">
                    <div style="display: none;" class="ajaxThrobber">
                        <span>Loading…</span>
                    </div>
                    <span class="checkStatus hidden" id="id6">
                        <?php echo $html->image('admin_login/loader_signup_username.gif') ?>
                    </span>
                    <label for="usernameSignupBox">Create a Username</label>
                    <input title="Enter Desired Username" id="ExploreSignupFieldSetInput" name="data[User][username]" class="continuedInput" type="text" />
                    <dl class="error">
                        <dt>Username Error</dt>
                        <dd></dd>
                    </dl>
                </fieldset>
                <fieldset class="inputbox password" name="" id="idc">
                    <div class="ajaxThrobber">
                        <span>Loading…</span>
                    </div>
                    <label for="passwordSignupBox">Password (At least 6 characters)</label>
                    <input title="Enter a Unique Password" id="idd" name="data[User][password]" maxlength="30" value="" type="password" />
                    <dl class="error">
                        <dt>Not a valid password</dt>
                        <dd>Your password must be 6 characters or longer </dd>
                    </dl>
                </fieldset>
            </div>
            <div class="clear"></div>
            <input title="Sign Up!" class="signupButton" value="" onclick="" id="idf" type="submit" />
            <fieldset class="submitbox">
                <div class="throbberWrapper">
                    <div class="ajaxThrobber">
                        <div class="spinner">
                        </div>
                        <span>Loading</span>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>