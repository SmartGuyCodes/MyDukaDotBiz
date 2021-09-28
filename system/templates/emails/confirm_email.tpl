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
<table width="600" border="0" cellpadding="10" cellspacing="0" style="background:#fff; border:1px solid #ccc;  border-top:7px solid #333;margin:10px auto 0px; padding:0px 10px 10px;">
    <tr>
        <td >
            <p style="padding:15px 0px 0px; margin:0px">Hi {$user},</p>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:0px 10px 10px 0px; line-height:1.8;">
                <tr>
                    <td>
                        Thank you {$user|default:'My Duka user'}
                        for registering at My Duka Dot Biz. Click
                        <a href="https://www.myduka.biz/user/verify/{$code}/{$mail}">Here</a> to start verify your My Duka Dot Biz account.
                    </td>
                <tr>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table width="600" border="0" cellpadding="15" cellspacing="0" style="margin:0px auto 0px; background:#ccc; color:#000; font-size:10px;">
    <tr>
        <td>{$copy}</td>
        <td align="right">
            {$address}
        </td>
    </tr>
    <tr>
        <td>
            <p>Read our privacy policy.</p>
        </td>
    </tr>
</table>
</body>
</html>