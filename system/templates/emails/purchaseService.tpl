<html>
<head></head>
<body style="background:#DFDFDF; font-style:Helvetica,Arial,'lucida grande',tahoma,verdana,arial;padding:50px 0px 50px;">
<table width="600" border="0" cellpadding="0" cellspacing="0" style="margin:0px auto 0px;">
    <tr>
        <td></td>
        <td>
            <a href="{$dukad}">
                <img src="{$emblem}" alt="myduka" />
            </a>
        </td>
        <td></td>
    </tr>
</table>
<table width="600" border="0" cellpadding="10" cellspacing="0" style="background:#fff; border:1px solid #ccc;  border-top:7px solid #17898C;margin:10px auto 0px; padding:0px 10px 10px;">
    <tr>
        <td >
            <p style="padding:15px 0px 0px; margin:0px">
                <strong>Dear Customer Care Agent,</strong>
            </p>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:0px 10px 10px 0px; line-height:1.8;">
                <tr>
                    <td>
                        Order Number {$track} has been processed and is awaiting
                        confirmation.
                    </td>
                </tr>
                <br/>
                <tr>
                    <td>
                        <div>
                            <p style="color:#17898C;font-weight:bold;padding-left:27px;font-family:Arial,Helvetica,sans-serif;font-size:14px">
                                {$user|default:'My Duka user'} ordered for:
                            </p>
                        </div>
                        <table width="600" style="background-color:#ffffff;color:#333333;font-size:13px;font-family:'Arial','Helvetica',Sans-serif">
                            <thead>
                            <tr>
                                <th width="90" height="15" align="left" style="background-color:#17898C;font-size:14px;padding:5px 10px;color:#ffffff">Item(s)</th>
                                <th width="410" height="15" align="left" style="background-color:#17898C;font-size:14px;padding:0px 10px;color:#ffffff">Description</th>
                                <th width="90" height="15" align="left" style="background-color:#17898C;font-size:14px;padding:5px 10px;color:#ffffff">Qty</th>
                                <th width="90" height="15" align="left" style="background-color:#17898C;font-size:14px;padding:5px 10px;color:#ffffff">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="left" style="padding:5px 10px;border-bottom:solid #cdcdcd 1px">
                                        {foreach $itemImg as $img}
                                            <div class="table-shopping-cart-img">
                                                <img width="100" height="100"  src="https://www.myduka.biz/uploads/{$img}" title="{$decr}">
                                            </div>
                                        {/foreach}
                                    </td>
                                    <td align="left" style="padding:5px 10px;border-bottom:solid #cdcdcd 1px">
                                        {foreach $itemDescr as $descr}
                                            {$descr}
                                        {/foreach}
                                    </td>
                                    <td align="left" style="padding:5px 10px;border-bottom:solid #cdcdcd 1px">
                                        {foreach $itemQty as $qty}
                                            {$qty}
                                        {/foreach}
                                    </td>
                                    <td align="left" style="padding:5px 10px;border-bottom:solid #cdcdcd 1px">
                                        {foreach $itemPrice as $price}
                                            {$price}
                                        {/foreach}
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <table width="600" cellspacing="0" cellpadding="0" border="0" align="left">
                            <tbody><tr>
                                <td align="left" style="background-color:#ffffff;color:#333333;font-size:14px;font-family:'Arial','Helvetica',Sans-serif">
                                    <br>
                                    <div>
                                        <p style="color:#17898C;font-weight:bold;padding-left:27px;font-family:Arial,Helvetica,sans-serif;font-size:14px">
                                            Payment details:
                                        </p>
                                    </div>

                                    <table width="600" style="display:block;background-color:#ffffff;color:#333333;font-size:14px;font-family:'Arial','Helvetica',Sans-serif">
                                        <tbody>
                                            <tr>
                                                <th width="200" valign="middle" bgcolor="#17898C" height="15" align="left" style="padding:5px 10px;color:#fff">
                                                    Shipping Cost
                                                </th>
                                                <td width="400" align="right">
                                                    Ksh. {$shipping|number_format:2:'.':','}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th bgcolor="#17898C" height="15" align="left" style="padding:5px 10px;color:#ffffff"><strong>TOTAL</strong></th>
                                                <td align="right">
                                                    <strong>
                                                        {if isset($shipping)}
                                                            Ksh.  {math equation="$cost + $shipping"}
                                                        {else}
                                                            Ksh.  {$cost}
                                                        {/if}        
                                                    </strong>
                                                </td>
                                            </tr>

                                            {*<tr>*}
                                                {*<th bgcolor="#17898C" height="15" align="left" style="padding:5px 10px;color:#fff">Payment Method</th>*}
                                                {*<td align="right"><strong>{$method}</strong></td>*}
                                            {*</tr>*}
                                        </tbody>
                                    </table>
                                    <p></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <br/>
            </table>
        </td>
    </tr>
</table>
<table width="600" border="0" cellpadding="15" cellspacing="0" style="margin:0px auto 0px; background:#ccc; color:#000; font-size:10px;">
    <tr>

    </tr>
    <tr>
        {$copy}
    </tr>
    <tr>
        {$address}
    </tr>
    <tr>
        <td>
            Please note that product prices and availability are subject to change. Prices and
            availability were accurate at the time this newsletter was sent however, they may
            differ from those you see when you visit <a href="https://www.myduka.biz">www.myduka.biz</a>
            Click here if you no longer want to receive this email
            {*<p>Read our <a href="">privacy policy.</a> </p>*}
        </td>
    </tr>
</table>
</body>
</html>