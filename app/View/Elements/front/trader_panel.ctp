<div class="trader_panel no_first_focus_all horizontal" id="trader_panel">
    <div class="panel_option clearfix m_b_15 ">
        <ul class="tag_group r">
            <li class="tag">Classic Style</li>
            <li class="tag cur">BitYes Style</li>
        </ul>
    </div>
    <form onsubmit="return trades_form_submit('usd_btc', 'buy')" action="/trade/do_buy?coin_type=1" method="post" id="usd_btc_trades_buy_form">

        <div class="panel">

            <label class="hide">
                <input type="password" value="" style="display: none">
                <input type="hidden" value="PlaceOrder" name="order_type" class="order_type">
                <input type="hidden" value="0" class="max_amount" name="max_amount">
            </label>

            <div class="bd">
                <div class="col_1">
                    <div class="group">
                        <div class="available fs_16"> Available:  <b class="tc_red">$
                                <span class="balance_usd_available available_output">0.02</span></b>
                        </div>
                        <div class="trade_type">
                            <label>
                                <input type="checkbox" autocomplete="off" onclick="switch_order_type('buy', 'btc', this);"> Market Order
                            </label>
                        </div>
                    </div>
                    <div class="group group_icon">
                        <div class="relative">
                            <input type="text" data-pl="Buy Price" data-pl-mp="Buy now at best price" onchange="change_trades_form('usd_btc', 'buy')" onkeyup="change_trades_form('usd_btc', 'buy')" value="218.48" tabindex="1" autocomplete="off" placeholder="Buy Price" name="price" class="in_text block price">
                            <i class="icon icon_usd r"></i>
                        </div>
                    </div>
                </div>
                <div class="col_2">
                    <div class="group">
                        <input type="hidden" value="0" class="max_amount" name="max_amount"> <!-- 最大买入量 -->
                        <div class="range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" onmouseover="change_trades_form('usd_btc', 'buy')" id="range_buy" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min range_track" style="width: 0%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all range_handle icon icon_range_handle" style="left: 0%;"></a></div>
                    </div>


                    <div class="group group_icon amount_wrap">
                        <div class="relative">
                            <input type="text" onclick="change_trades_form('usd_btc', 'buy')" onchange="change_trades_form('usd_btc', 'buy')" onkeyup="change_trades_form('usd_btc', 'buy')" value="" tabindex="2" autocomplete="off" placeholder="Buy Amount" id="volume_buy" class="in_text block amount" name="amount">
                            <span class="in_help max_amount_info">Maximum Buy Amount<b class="tc_yellow p_l_10">0.0000</b></span>
                            <i class="icon icon_btc r"></i>
                            <i class="icon_multiply">×</i>
                        </div>
                    </div>


                    <div class="group group_icon amount_wrap_mp">
                        <div class="relative">
                            <input type="text" value="" placeholder="Total" class="in_text block price_mp" name="price_mp">
                            <i class="icon icon_usd r"></i>
                        </div>
                    </div>
                </div>

                <div class="pwd_wrap  hide ">
                    <input type="password" value="" autocomplete="off" placeholder="Security Password" class="in_text trade_pwd block" name="trade_pwd">
                </div>
            </div>

            <div class="ft">
                <div class="sum"> = <span class="num chengjiaoe">$0</span></div>
                <button class="btn small btn_green">Buy</button>
                <div class="warning hide" style=""></div>
                <div class="error hide" style=""></div>
                <div class="success hide" style=""></div>
            </div>

        </div>

    </form>

    <!--卖出面板-->
    <form onsubmit="return trades_form_submit('usd_btc', 'sell')" action="/trade/do_sell?coin_type=1" method="post" id="usd_btc_trades_sell_form">

        <div class="panel">

            <label class="hide">
                <input type="password" style="display: none">
                <input type="hidden" value="PlaceOrder" name="order_type" class="order_type">
                <input type="hidden" value="0" class="max_amount" name="max_amount">
            </label>

            <div class="bd">
                <div class="col_1">
                    <div class="group">
                        <div class="available fs_16">
                            Available: 
                            <b class="tc_red">฿
                                <span class="balance_usd_btc_available available_output">0.0000</span>
                            </b>
                        </div>
                        <div class="trade_type">
                            <label>
                                <input type="checkbox" autocomplete="off" onclick="switch_order_type('sell', 'btc', this);"> Market Order
                            </label>
                        </div>
                    </div>
                    <div class="group group_icon">
                        <div class="relative">
                            <input type="text" data-pl="Sell Price" data-pl-mp="Sell now at best price" onchange="change_trades_form('usd_btc', 'sell')" onkeyup="change_trades_form('usd_btc', 'sell')" value="218.37" tabindex="3" autocomplete="off" placeholder="Sell Price" name="price" class="in_text block price">
                            <i class="icon icon_usd r"></i>
                        </div>
                    </div>
                </div>
                <div class="col_2">
                    <div class="group">
                        <input type="hidden" value="0" class="max_amount" name="max_amount"> <!-- 最大卖出量 -->
                        <div class="range range_red ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" onmouseover="change_trades_form('usd_btc', 'sell')" id="range_sell" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min range_track" style="width: 0%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all range_handle icon icon_range_handle" style="left: 0%;"></a></div>
                    </div>


                    <div class="group group_icon amount_wrap">
                        <div class="relative"><input type="text" onclick="change_trades_form('usd_btc', 'sell')" onchange="change_trades_form('usd_btc', 'sell')" onkeyup="change_trades_form('usd_btc', 'sell')" value="" tabindex="4" autocomplete="off" placeholder="Sell Amount" id="volume_sell" class="in_text block amount" name="amount">
                            <span class="in_help max_amount_info">Maximum Sell Amount<b class="tc_yellow p_l_10">0.0000</b></span>
                            <i class="icon icon_btc r"></i>
                            <i class="icon_multiply">×</i>
                        </div>
                    </div>


                    <div class="group group_icon amount_wrap_mp">
                        <div class="relative">
                            <input type="text" value="" placeholder="Amount" class="in_text block amount_mp" name="amount_mp">
                            <i class="icon icon_btc r"></i>
                        </div>
                    </div>

                </div>

                <div class="pwd_wrap  hide ">
                    <input type="password" value="" autocomplete="off" placeholder="Security Password" class="in_text trade_pwd block" name="trade_pwd">
                </div>
            </div>

            <div class="ft">
                <div class="sum"> = <span class="num chengjiaoe">$0</span></div>
                <button class="btn small btn_red">Sell</button>
                <div class="warning hide" style=""></div>
                <div class="error hide" style=""></div>
                <div class="success hide" style=""></div>
            </div>

        </div>

    </form>

</div>