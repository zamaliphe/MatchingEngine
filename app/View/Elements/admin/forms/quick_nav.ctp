<div id="sidebar">
    <div class="mainNav">
        <div class="user">
            <a title="" class="leftUserDrop">
                <?php $user_img = $this->webroot ."/users/" .$User["profile_img"];?>
                <?php if( file_exists($user_img)): ?>
                <?php echo $this->Html->image("/users/" .$User["profile_img"], array()); ?>
                <?php else: ?>
                <?php echo $this->Html->image('admin/icons/download/no_user.png', array()); ?>
                <?php endif; ?>
                
                
            </a><span><?php echo $User["username"]?></span>
            <ul class="leftUser">
                <li><?php echo $this->Html->link("My profile", array("controller" => "users", "action" => "pedit"), array("class" => "sProfile")) ?></li>
                <li><?php echo $this->Html->link("Messages", array("controller" => "users", "action" => "messages"), array("class" => "sMessages")) ?></li>
                <li><?php echo $this->Html->link("Settings", array("controller" => "settings", "action" => "index"), array("class" => "sSettings")) ?></li>
                <li><?php echo $this->Html->link("Logout", array("controller" => "users", "action" => "logout"), array("class" => "sLogout")) ?></li>
            </ul>
        </div>

        <!-- Responsive nav -->
        <div class="altNav">
           
            <!-- User nav -->
            <ul class="userNav">
                <li><?php echo $this->Html->link("My profile", array("controller" => "users", "action" => "pedit"), array("class" => "profile")) ?></li>
                <li><?php echo $this->Html->link("Messages", array("controller" => "users", "action" => "messages"), array("class" => "messages")) ?></li>
                <li><?php echo $this->Html->link("Settings", array("controller" => "settings", "action" => "index"), array("class" => "settings")) ?></li>
                <li><?php echo $this->Html->link("Logout", array("controller" => "users", "action" => "logout"), array("class" => "logout")) ?></li>
            </ul>
        </div>

        <!-- Main nav -->
        <ul class="nav">
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/home.png', array())."<span>Dashboard</span>", array("controller" => "admindashboard", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/mainnav/ui.png', array())."<span>Users</span>", array("controller" => "users", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/special-offer.png', array())."<span>Admincampaigns</span>", array("controller" => "admincampaigns", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <!--<li><?php //echo $this->Html->link($this->Html->image('admin/icons/color/bestseller.png', array())."<span>Affiliates</span>", array("controller" => "affiliates", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>-->
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/flag.png', array())."<span>BannedKeywords</span>", array("controller" => "bannedKeywords", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/category.png', array())."<span>Categories</span>", array("controller" => "categories", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/donate.png', array())."<span>CreditUsers</span>", array("controller" => "creditUsers", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/bookmark.png', array())."<span>CustomFields</span>", array("controller" => "customFields", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/document-library.png', array())."<span>CustomerDocuments</span>", array("controller" => "customerDocuments", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
<!--            <li><?php //echo $this->Html->link($this->Html->image('admin/icons/color/customers.png', array())."<span>Customers</span>", array("controller" => "customers", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>-->
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/customers.png', array())."<span>Leads</span>", array("controller" => "leads", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/document-library.png', array())."<span>Pages</span>", array("controller" => "pages", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/credit.png', array())."<span>Payments</span>", array("controller" => "payments", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/config.png', array())."<span>Settings</span>", array("controller" => "settings", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/graphic-design.png', array())."<span>Templates</span>", array("controller" => "templates", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
            <li><?php echo $this->Html->link($this->Html->image('admin/icons/color/statistics.png', array())."<span>Transactions</span>", array("controller" => "transactions", "action" => "index"), array("class" => "active","escape"=>false)) ?></li>
        </ul>
    </div>

    <?php //echo $this->element('admin/forms/secondary_nav', array()); ?>
</div>