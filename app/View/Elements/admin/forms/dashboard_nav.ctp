<div class="statsRow">
    <div class="wrapper statsItems">

        <!-- Stats item -->
        <div class="sItem usersStats">
            <h2><a title="" class="value"><?php echo$dashData["CustomerActive"]?><span>Customers</span></a></h2>
            <div class="statsDetailed" id="s3">
                <div class="statsContent">
                    <div class="sElements">
                        <div class="sDisplay"><h4><?php echo$dashData["CustomerNew"]?></h4><span>New</span></div>
                        <div class="sDisplay"><h4><?php echo$dashData["CustomerActive"]?></h4><span>Total</span></div>
                    </div>
                    <span class="line"></span>
                    <div class="statsUpdate">
                        <span>Next update in:</span>
                        <span>14 hrs 21 min</span>
                        <div class="contentProgress"><div class="barG tipS" id="bar3" title="32%"></div></div>
                    </div>
                </div>
            </div>
            <span class="changes">
                <span class="zeroBar" values="5,10,15,20,18,16,14,20,15,16"></span>
                <span class="zero">0.0%</span>
            </span>
        </div>

        <!-- Stats item -->
        <div class="sItem ordersStats">
            <h2><a title="" class="value"><?php echo$dashData["OrderAll"]?><span>Orders</span></a></h2>
            <div class="statsDetailed" id="s4">
                <div class="statsContent">
                    <div class="sElements">
                        <div class="sDisplay"><h4><?php echo$dashData["OrderNew"]?></h4><span>new orders</span></div>
                        <div class="sDisplay"><h4><?php echo$dashData["OrderActive"]?></h4><span>pending</span></div>
                        <div class="sDisplay"><h4><?php echo$dashData["OrderAll"]?></h4><span>total</span></div>
                    </div>
                    <span class="line"></span>
                    <div class="statsUpdate">
                        <span>Next update in:</span>
                        <span>1 hr 19 min</span>
                        <div class="contentProgress"><div class="barG tipS" id="bar4" title="89%"></div></div>
                    </div>
                </div>
            </div>
            <span class="changes">
                <span class="negBar" values="5,10,15,20,18,16,14,20,15,16"></span>
                <span class="negative">+0.6%</span>
            </span>
        </div>
        
    </div>
</div>