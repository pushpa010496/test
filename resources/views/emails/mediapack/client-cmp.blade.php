<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="800" border="0" align="left" cellpadding="10">
 
  
  <tr>
    <td>
      <table width="800" border="0">
  <tr>
    <td>
      <table width="800" border="0" cellpadding="5">
               <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">Dear  &nbsp;{{ucfirst($name)}},</td>
            </tr>
          <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">Your Media Pack  download request was successful. Please find the link to download the same below.If you have any trouble downloading the Media Pack, kindly get in touch with us at advertise@pharmafocusasia.com
           </td>
            </tr>
          
          <tr>
             <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">
          One of our Subject Matter Expert (SME) will get in touch with you in the next 48 hours.
         </td>
            </tr>
        <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">
             <a href="{{trans('messages.mediapack_path')}}">{{trans('messages.mediapack_path')}}</a> </td>
            </tr>

            <tr>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;"> Thank You,</td>
          </tr>
          <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;"><a href="<?php echo url('/');?>" title=" Team {{trans('messages.sitename')}}" target="_blank" style="color:#333333;"> Team {{trans('messages.sitename')}}</td>
          </tr>
      </table>

    </td>
  </tr>
</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="middle" style="padding-left:30px;">
      <img src="{{ config('app.url') }}images/logo.png" alt="{{trans('messages.siteshortname')}}" width="150"/>    </td>
    </tr>
 
</table>  
    



</body>
</html>
