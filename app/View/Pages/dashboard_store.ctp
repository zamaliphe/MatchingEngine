<?php
echo $this->Html->css(array(
    'front/home2.css',
));
?>
<div class="container">

    <section id="index_tab">

        <ul id="nav_tab" class="clearfix">
            <li class="four columns active">
                <a href="#store_Productcategories"><h6>Products Categories</h6></a>
                <span class="btn_shadow"></span>
            </li>
            <li class="four columns">
                <a href="#store_sale_offer"><h6>Sales &amp; Offers</h6></a>
                <span class="btn_shadow"></span>
            </li>
        </ul>

        <div class="sixteen columns">
            <div id="tab_outer">
                <?php echo $this->element('front/tabs/store_tab_categories'); ?>
                <?php echo $this->element('front/tabs/store_tab_sale_offer'); ?>
            </div><!--end tab_outer-->
        </div><!--end sixteen-->

    </section>

    <div class="latest">
        <div class="clear">&nbsp;</div>
    </div>

    <div class="featured">
        <div class="box_head">
            <h3>Featured Items</h3>
            <div class="pagers center">
                <a class="prev featuredPrev" href="#prev">Prev</a>
                <a class="nxt featuredNxt" href="#nxt">Next</a>
            </div>
        </div><!--end box_head -->

        <div class="cycle-slideshow" 
             data-cycle-fx="scrollHorz"
             data-cycle-timeout=0
             data-cycle-slides="> ul"
             data-cycle-prev="div.pagers a.featuredPrev"
             data-cycle-next="div.pagers a.featuredNxt" >
            <ul class="product_show">
                <?php if (is_array($product_featured) && !empty($product_featured)): ?>
                    <?php foreach ($product_featured AS $product): ?>
                        <li class="column">
                            <?php echo $this->element('front/elm/prod_item_list', array('item' => $product)); ?>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <ul class="product_show">
                <?php if (is_array($product_featured) && !empty($product_featured)): ?>
                    <?php foreach ($product_featured AS $product): ?>
                        <li class="column">
                            <?php echo $this->element('front/elm/prod_item_list', array('item' => $product)); ?>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div><!--end featured-->

    <div class="latest">
        <div class="box_head">
            <h3>Latest Items</h3>
            <div class="pagers center">
                <a class="prev latest_prev" href="#prev">Prev</a>
                <a class="nxt latest_nxt" href="#nxt">Next</a>
            </div>
        </div><!--end box_head -->

        <div class="cycle-slideshow" 
             data-cycle-fx="scrollHorz"
             data-cycle-timeout=0
             data-cycle-slides="> ul"
             data-cycle-prev="div.pagers a.latest_prev"
             data-cycle-next="div.pagers a.latest_nxt" >
            <ul class="product_show">
                <?php if (is_array($product_latest) && !empty($product_latest)): ?>
                    <?php foreach ($product_latest AS $product): ?>
                        <li class="column">
                            <?php echo $this->element('front/elm/prod_item_list', array('item' => $product)); ?>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <ul class="product_show">
                <?php if (is_array($product_latest) && !empty($product_latest)): ?>
                    <?php foreach ($product_latest AS $product): ?>
                        <li class="column">
                            <?php echo $this->element('front/elm/prod_item_list', array('item' => $product)); ?>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div><!--end latest-->

</div><!--end container-->