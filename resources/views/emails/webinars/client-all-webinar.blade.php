<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="500" border="0" align="left" cellpadding="10">
 
  <tr>
    <td>
        <table width="1000" border="0">
          <tr>
            <td>
              <table width="1000" border="0" cellpadding="5">
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Dear {{$name}},</td>
                  </tr>

                  <tr>
                  
                    <td width="20">&nbsp;</td>
                    <td width="1000" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">{!! $client_message !!}<!-- on 23rd July 11 AM IST hello. --></td>
                  </tr>   
                  @if(@$path != '')
                   <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">
                      
                       <a href="{{$path}}" target="_blank" data-style="1" style="background-color: #1c95ca;padding: 7px 15px;color: #fff; text-decoration: none;">Video Link</a>
                    </td>
                  </tr>  
                  @endif

                   <tr>

                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Regards,</td>
                  </tr>

                   <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">{{trans('messages.sitename')}}.</td>
                  </tr>
                  
              </table>

            </td>
          </tr> 
          <tr>
            <td align="left" valign="middle" style="padding-left:30px;">
              <img src="{{ config('app.url') }}images/logo1.png" alt="{{trans('messages.siteshortname')}}" width="150" />   
            </td>
        </tr>
       
        </table>
    </td>
  </tr>
</table>   
</body>
</html>
