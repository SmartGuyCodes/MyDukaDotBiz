{*{if $hishestBid neq 0}*}
    <h3>
        <i class="fa fa-money"></i> Highest Bid: KShs. {$highestBid|number_format:2:".":","}
    </h3>
{*{/if}*}
<hr>
<table id="bids-tbl" class="display" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>Bidder</th>
        {*<th>Email</th>*}
        {*<th>Phone</th>*}
        <th>Bid</th>
        <th>Bid Date</th>
        {*<th>Details</th>*}
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Bidder</th>
        {*<th>Email</th>*}
        {*<th>Phone</th>*}
        <th>Bid</th>
        <th>Bid Date</th>
        {*<th>Details</th>*}
    </tr>
    </tfoot>
    <tbody>
    {foreach $bids as $bid}
        <tr>
            <td>{$bid.bidderName}</td>
            {*<td><strong>{$bid.bidderEmail}</strong></td>*}
            {*<td>{$bid.bidderPhone}</td>*}
            <td><strong>KShs. {$bid.bidderPrice|number_format:2:".":","}</strong></td>
            <td>{$bid.created_at}</td>
            {*<td><strong><a href="/{$global.bids.profile|cat:($bid.id)}">View</a></strong></td>*}
        </tr>
    {/foreach}
    </tbody>
</table>
{literal}
    <script>
        $(document).ready(function(){
            $('#bids-tbl').DataTable();
        });
    </script>
{/literal}