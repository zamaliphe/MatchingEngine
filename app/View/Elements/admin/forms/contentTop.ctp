<div class="contentTop">
    <span class="pageTitle"><span class="icon-screen"></span>Dashboard</span>
    <ul class="quickStats">
        <li>
            <a href="" class="blueImg"><?php echo $this->Html->image('admin/icons/quickstats/plus.png', array()); ?></a>
            <div class="floatR"><strong class="blue"><?php echo $topCounts["visits"]; ?></strong><span>visits</span></div>
        </li>
        <li>
            <a href="" class="redImg"><?php echo $this->Html->image('admin/icons/quickstats/user.png', array()); ?></a>
            <div class="floatR"><strong class="blue"><?php echo $topCounts["users"]; ?></strong><span>users</span></div>
        </li>
        <li>
            <a href="" class="greenImg"><?php echo $this->Html->image('admin/icons/quickstats/money.png', array()); ?></a>
            <div class="floatR"><strong class="blue"><?php echo $topCounts["orders"]; ?></strong><span>orders</span></div>
        </li>
    </ul>
    <div class="clear"></div>
</div>