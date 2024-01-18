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
                <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">   Thank you for subscribing with us. Receive {{trans('messages.sitename')}} latest issues of the current calendar year and get a wider access to the pharma industry.</td>
              </tr>            
              <tr>
               
              </tr>            
             

            </table>

          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="middle" style="padding-left:30px;">
      <img src="{{ config('app.url') }}images/logo.png" alt="{{trans('messages.sitename')}}" width="150"/>    </td>
    </tr>
    <tr>
      <td style="padding-top: 10px;">
        <table cellpadding="0" cellspacing="0" align="left">
          <tr>         
            <td align="center" width="150" height="24" style="background-color: #6a7ee7;color: #fff;font-size: 14px;font-family:Calibri;">
              <a href="{{url('mediapacks')}}" class="btn btn-primary" style="color: #fff;text-decoration:none;font-family:Calibri;">Our Service-Mediapack</a>
            </td> 
             <td width="10"></td>

           {{--  <td align="center" width="150" height="24" style="background-color: #6a7ee7;color: #fff;font-size: 14px;font-family:Calibri;">
              <a href="{{url('mediapacks')}}" class="btn btn-primary" style="color: #fff;text-decoration:none;font-family:Calibri;">Editorial Calendar 2019</a>
            </td> --}} 
          </tr>
        </table>
      </td>
    </tr>
  </table>  
</body>
</html>
