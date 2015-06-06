<div class="mod mod_s1">
    <div class="m_hd">
        <h5 class="title">Active Orders</h5>

        <div class="option cancel_all_order_btn  hide"><a onclick="return cancel_all_delegation('usd_btc');" href="/trade/cancel_order_batch?coin_type=1">Cancel All</a></div>

    </div>
    <div class="m_bd">
        <table class="table_style multi_table dangqianweituo">
            <colgroup>
                <col width="60">
                <col>
                <col>
                <col width="115">
                <col width="80">
            </colgroup>
            <thead class="align_r">
                <tr>
                    <th class="align_c">Type</th>
                    <th>Order Price</th>
                    <th>Order Amount</th>
                    <th>Unfilled</th>
                    <th class="align_c">Action</th>
                </tr>
            </thead>

            <tbody class="align_r trades_my_delegations"><tr class="align_c">
                    <td colspan="100%"><i class="icon icon_null_big"><em>No Records</em></i></td>
                </tr>
            </tbody>
            <tfoot class="align_c trades_delegation_more hide">
                <tr>
                    <td colspan="6">
                        <a class="delegation_more_a" href="/trade/entrust?coin_type=1&amp;is_current=1">More</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
