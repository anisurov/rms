<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.=
w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=3D"http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin:0; padding:10px 0 0 0;" bgcolor="#cc0000">
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#F0F0F0">
    <tbody>
    <tr>
        <td style="background-color: #ffffff;" align="center" valign="top" bgcolor="#ffffff"><br/>
            <table style="width: 100%; max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td height="30"></td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td>
                        <p style="text-align: center; margin: 4px; font-family: Helvetica, Arial, sans-serif; font-size: 26px; color: #222222;">
                            Welcome to <b>{{config('app.name')}}</b>
                        <hr>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #ffffff; padding: 12px 24px 12px 24px;" align="left"><br/>
                        <p style="font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; color: #374550;">
                            Dear,{{$content['customer']}}</p>
                        <p style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #222222;">
                            Your reservation for {{$content['reservation']}} on <b> {{config('app.name')}}</b> was successful.<br>
                            @if(isset($content['pay']))
                            we received your payment. we will contact with you soon.
                            @endif
                    </td>
                </tr>
                 <tr>
                    <td style="border-bottom: 1px solid #DDDDDD;"></td>
                </tr>
                <tr>
                    <td height="65">
								Regards,<br>
								Administrator,<br>
								{{config('app.name')}}                    
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <table>
                            <tbody>
                            <tr>
                                <td style="background: #289CDC; padding: 15px 18px; -webkit-border-radius: 4px; border-radius: 4px; font-family: Helvetica, Arial, sans-serif;"
                                    align="center" bgcolor="#289CDC"><a target="_blank" href="{{config('app.url')}}"
                                                                        style="color: #ffffff; text-decoration: none; font-size: 16px;">go to {{config('app.name')}}</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="65"></td>
                </tr>
                <tr>
                    <td style="border-bottom: 1px solid #DDDDDD;"></td>
                </tr>
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td style="text-align: center;" align="center">
                        <table border="0" width="95%" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                            <tr>
                                <td style="font-family: Helvetica, Arial, sans-serif;" align="left" valign="top">
                                    <p style="text-align: left; color: #999999; font-size: 12px; font-weight: normal; line-height: 20px;">
                                        This email is sent to you directly from <a href="http://localhost">{{config('app.name')}}</a> by admin
                                        The information above is gathered from the user input. <br/>&copy;{{date('Y')}} <a
                                                href="{{config('app.url')}}">{{config('app.name')}}</a>. All rights reserved.</p>
                                </td>
                                <td width="30"></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
