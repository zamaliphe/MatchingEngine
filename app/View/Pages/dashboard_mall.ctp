<div class="container">

    <section id="index_tab">

        <ul id="nav_tab" class="clearfix">
            <li class="four columns active">
                <a href="#directory"><h6>Directory</h6></a>
                <span class="btn_shadow"></span>
            </li>
            <li class="four columns">
                <a href="#categories"><h6>Store Categories</h6></a>
                <span class="btn_shadow"></span>
            </li>
            <li class="four columns">
                <a href="#sale_offer"><h6>Sales &amp; Offers</h6></a>
                <span class="btn_shadow"></span>
            </li>
            <?php if ($is_logedin): ?>
                <li class="four columns">
                    <a href="#fav_stores"><h6>My Fav Stores</h6></a>
                    <span class="btn_shadow"></span>
                </li>
            <?php endif; ?>
        </ul>
        
        <div class="sixteen columns">
            <div id="tab_outer">
                <?php echo $this->element('front/tabs/tab_directory'); ?>
                <?php echo $this->element('front/tabs/tab_categories'); ?>
                <?php echo $this->element('front/tabs/tab_fav_stores'); ?>
                <?php echo $this->element('front/tabs/tab_sale_offer'); ?>
            </div><!--end tab_outer-->
        </div><!--end sixteen-->

    </section>
</div>
