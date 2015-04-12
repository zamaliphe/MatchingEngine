<ul class="tToolbar">
    <li><?php echo $this->Html->link($this->Html->image('admin/icons/usual/icon-user.png', array())." <span>Admin</span>", array("controller" => "users", "action" => "index","admin"), array("class" => "active","escape"=>false)) ?></li>
    <li><?php echo $this->Html->link($this->Html->image('admin/icons/usual/icon-users.png', array())." <span>Affiliates</span>", array("controller" => "users", "action" => "index","affiliate"), array("class" => "active","escape"=>false)) ?></li>
    <li><?php echo $this->Html->link($this->Html->image('admin/icons/usual/icon-users.png', array())." <span>Customers</span>", array("controller" => "users", "action" => "index", "customer"), array("class" => "active","escape"=>false)) ?></li>

</ul>