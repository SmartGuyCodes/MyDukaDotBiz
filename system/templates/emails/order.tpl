<html>
<head></head>
<body style="background:#DFDFDF; font-style:Helvetica,Arial,'lucida grande',tahoma,verdana,arial;padding:50px 0px 50px;">
<table width="600" border="0" cellpadding="0" cellspacing="0" style="margin:0px auto 0px;">
    <tr>
        <td>
            <a href="{$dukad}">
                <img src="{$emblem}" alt="myduka" />
            </a>
        </td>
    </tr>
</table>
<table width="600" border="0" cellpadding="10" cellspacing="0" style="background:#fff; border:1px solid #ccc;  border-top:7px solid #17898C;margin:10px auto 0px; padding:0px 10px 10px;">
    <tr>
        <td >
            <p style="padding:15px 0px 0px; margin:0px">Dear {$user|default:'My Duka user'},</p>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:0px 10px 10px 0px; line-height:1.8;">
                <tr>
                    <td>
                        Your order (Order No. {$order}) has been processed and will soon be on its way to you.
                    </td>
                </tr>
                <br/>
                <tr>
                    <td>
                        Our delivery associate will contact you on the day of delivery using the phone number you
                        provided at Check Out. If you are paying "Cash on Delivery" please prepare the exact amount
                        of money corresponding to your order, as our delivery drivers do not carry petty cash.
                    </td>
                </tr>
                <br/>
                <tr>
                    <td>
                        For any inquiry or suggestion,feel free to contact us on the numbers :
                        0727 770 331 or at <a href="mailto:customercare@myduka.biz">customercare@myduka.biz</a>
                    </td>
                </tr>
                <br/>
                <tr>
                    <td>
                        Our call center is open from: 8:30 AM – 8:30 PM Monday to Friday, 9:00 AM – 6:00 PM on Saturday
                        /Public Holidays and 10:00 AM to 4:00 PM on Sundays.
                    </td>
                </tr>
                <br/>
                <tr>
                    <td>
                        Thank you again {$user|default:'My Duka user'} for shopping at My DUKA Dot Biz.
                    </td>
                </tr>
                <br/>
                {*<tr>*}
                    {*<th>Order Description</th>*}
                    {*<th>Total Cost</th>*}
                {*</tr>*}
                {*<tr>*}
                    {*<td>{$track} : {$order}</td>*}
                    {*<td>KES. {$cost|number_format:2:".":","}</td>*}
                {*</tr>*}
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