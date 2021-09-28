<html>
<head></head>
<body style="background:#DFDFDF; font-style:Helvetica,Arial,'lucida grande',tahoma,verdana,arial;padding:50px 0px 50px;">
  <table width="600" border="0" cellpadding="0" cellspacing="0" style="margin:0px auto 0px;">
    <tr>
      <td>
        <a href="{$keshaad}">
          <img src="{$emblem}" alt="Keshaa" />
        </a>
      </td>
    </tr>
  </table>
  <table width="600" border="0" cellpadding="10" cellspacing="0" style="background:#fff; border:1px solid #ccc;  border-top:7px solid #333;margin:10px auto 0px; padding:0px 10px 10px;">
    <tr>
      <td >
        <p style="padding:15px 0px 0px; margin:0px">Hi {$user->name.first},</p>
      </td>
    </tr>
    <tr>
      <td width="50" height="50" valign="top">
        <span  style="background:#ccc; display:block; width:50px; height:50px;">
          <img width="50" height="50" src="{$uploads|cat:($user->pic)}" alt="{$user->name.full}" />
        </span>
      </td>
      <td valign="top">
        <table width="100%" border="0" cellpadding="0" cellspacing="0"  style="padding:0px 10px 10px 0px; line-height:1.8;">
          <tr>
            <td>
              Dear <a href="{$keshaad|cat:($user_profile|cat:($user->url))}" style="text-decoration:none;color:#428bca; font-weight:bold;">{$user->name.full|default:'Keshaa user'}
              </a>, you can reset your password by clicking the link below.
            </td>
            <tr>
              <td align="left">
                <p>
                  <a href="{$keshaad|cat:($resetUrl)|cat:'/'|cat:($code->permlink)}"  style="text-decoration:none;color:#428bca; margin:15px 0px;font-weight:bold;"> Reset password link</a>

                </p>
                {if false}
                <p>Your verification code is : <code>{$code->value}</code></p>
                {/if}
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <table width="600" border="0" cellpadding="15" cellspacing="0" style="margin:0px auto 0px; background:#ccc; color:#000; font-size:10px;">
      <tr>
        <td>{$copy}d</td>
        <td align="right">
          {$address}
        </td>
      </tr>
    </table>
</body>
  </html>