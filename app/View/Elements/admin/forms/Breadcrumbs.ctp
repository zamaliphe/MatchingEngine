<!-- Breadcrumbs line -->
<div class="breadLine">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
            <?php $Breadcount = 1; ?>
            <?php foreach ($Breadcrumbs as $Breadcrumb): ?>
                <li class="<?php echo ($Breadcount >= count($Breadcrumbs)) ? "current" : ""; ?>">
                    <?php echo $this->Html->link($Breadcrumb["title"], $Breadcrumb["link"], array()) ?>
                </li>
                <?php $Breadcount++; ?>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="breadLinks">
        <div class="clear"></div>
    </div>
</div>