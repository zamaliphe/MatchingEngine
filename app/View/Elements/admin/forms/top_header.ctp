<div id="top">
    <div class="wrapper">
        <?php echo $this->Html->link($this->Html->image('admin/logo.png', array()), array("controller" => "admindashboard", "action" => "index"), array("class" => "logo","title"=>"Dashboard","escape"=>FALSE)) ?>
        <!-- Right top nav -->
        <div class="topNav">
            <ul class="userNav">
                <li><?php echo $this->Html->link("", array("controller" => "admindashboard", "action" => "index"), array("class" => "screen","title"=>"Dashboard")) ?></li>
                <li><?php echo $this->Html->link("", array("controller" => "users", "action" => "pedit"), array("class" => "profile","title"=>"My profile")) ?></li>
                <li><?php echo $this->Html->link("", array("controller" => "settings", "action" => "index"), array("class" => "settings","title"=>"Settings")) ?></li>
                <li><?php echo $this->Html->link("", array("controller" => "users", "action" => "logout"), array("class" => "logout","title"=>"Logout")) ?></li>
            </ul>
        </div>

        <!-- Responsive nav -->
        <?php //echo $this->element('admin/forms/top_nav_responsive', array()); ?>
        <div class="clear"></div>
    </div>
</div>