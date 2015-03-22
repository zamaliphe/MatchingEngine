<!-- sidebar -->

<div class="sidebar">
    <div class="antiScroll">
        <div class="antiscroll-inner">
            <div class="antiscroll-content">
                <div class="sidebar_inner">
                    <div id="side_accordion" class="accordion">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <?php echo $this->HTML->link('<i class="icon-folder-close"></i> Dashboard', array('controller' => 'admindashboard', 'action' => 'index'), array('escape' => false, "class" => "accordion-toggle")); ?>

                            </div>
                            <div class="accordion-body collapse" id="collapseOne">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li><?php echo $this->HTML->link("News", array()); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">

                            <div class="accordion-body collapse" id="collapseTwo">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li><a href="javascript:void(0)">Content blocks</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseThree" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-user"></i> Account manager
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseThree">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                                        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
                                        <li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
                                        <li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseFour" data-parent="#side_accordion" data-toggle="collapse"
                                   class="accordion-toggle">
                                    <i class="icon-cog"></i> Configuration
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseFour">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">
                                        <li class="nav-header">People</li>
                                        <li><?php echo $this->Html->link(__('Account Settings'), array('controller' => 'users', 'action' => 'my_account')); ?> </li>
                                        <li><?php echo $this->Html->link(__('IP Adress Blocking'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
                                        <li class="nav-header">System</li>
                                        <li>
                                            <?php echo $this->HTML->link('Site information', array('controller' => 'admindashboard', 'action' => 'sysinfo'), array('escape' => false, "class" => "")); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->HTML->link('Site Logs', array('controller' => 'admindashboard', 'action' => 'logs'), array('escape' => false, "class" => "")); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->HTML->link('Site Statistics', array('controller' => 'admindashboard', 'action' => 'statistics'), array('escape' => false, "class" => "")); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->HTML->link('Site Settings', array('controller' => 'settings', 'action' => 'index'), array('escape' => false, "class" => "")); ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="push" style="height: 92px;"></div>
                </div>

                <div class="sidebar_info">
                    <ul class="unstyled">
                        <li>
                            <span class="act act-warning">65</span>
                            <strong>New comments</strong>
                        </li>
                        <li>
                            <span class="act act-success">10</span>
                            <strong>New articles</strong>
                        </li>
                        <li>
                            <span class="act act-danger">85</span>
                            <strong>New registrations</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


