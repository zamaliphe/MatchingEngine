<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <?php echo $this->HTML->link('<i class="icon-home icon-white"></i> Gebo Admin', array('controller' => 'admindashboard', 'action' => 'index'), array('escape' => false, "class" => "brand")); ?>
            <ul class="nav user_menu pull-right">
                <li class="hidden-phone hidden-tablet">
                </li>
                <li class="divider-vertical hidden-phone hidden-tablet"></li>
                <li class="dropdown">
                    <?php echo $this->HTML->link($User['username'].' <b class="caret"></b>', '#', array('escape' => false, "data-toggle"=>"dropdown","class" => "dropdown-toggle")); ?>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->HTML->link('My Profile', array('controller' => 'users', 'action' => 'my_profile'), array('escape' => false, "class" => "")); ?></li>
                        <li class="divider"></li>
                        <li><?php echo $this->HTML->link('Log Out', array('controller' => 'users', 'action' => 'logout'), array('escape' => false, "class" => "")); ?></li>
                    </ul>
                </li>
            </ul>
            <a data-target=".nav-collapse" data-toggle="collapse" class="btn_menu">
                <span class="icon-align-justify icon-white"></span>
            </a>
        </div>
    </div>
</div>