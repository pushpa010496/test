<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ochre Media</title>
</head>

<body>
  <table width="500" border="0" align="left" cellpadding="10">
    <tr>
      <td align="left" valign="middle" style="padding-left:30px;">
        <img src="{{ config('app.url') }}images/logo.png" alt="{{trans('messages.siteshortname')}}" width="200"/>    </td>
      </tr>
      <tr>
        <td>
          <table width="500" border="0">
            <tr>
              <td>
                <table width="500" border="0" cellpadding="5">
                   @if(@$title != '')
                
                   <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Title</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$title}}</td>
                  </tr>
                  @endif
                  @if(@$lead != '')
                
                   <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Lead</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$lead}}</td>
                  </tr>
                  @endif

                  @if(@$name != '')
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Fullname</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$name}}</td>
                  </tr>
                  @endif

                  @if(@$company != '')
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Company</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$company}}</td>
                  </tr>
                  @endif
                  @if(@$phone != '')
                  <tr>

                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Telephone</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$phone}}</td>
                  </tr>
                  @endif

                   @if(@$fax != '')
                  <tr>

                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Fax</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$fax}}</td>
                  </tr>
                  @endif


                  @if(@$email != '')
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$email}}</td>
                  </tr>
                  @endif

                   @if(@$issue != '')
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Issue</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$issue}}</td>
                  </tr>
                  @endif

                  @if(@$job_title != '')
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Designation</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$job_title}}</td>
                  </tr>
                  @endif
                   @if(@$country != '')
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Country</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$country}}</td>
                  </tr>
                  @endif
                   @if(@$industry != '')
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Industry</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$industry}}</td>
                  </tr>
                  @endif


                  @if(@$description != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Message</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$description}}</td>
                  </tr>
                  @endif


                  @if(@$organisation != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">organisation</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$organisation}}</td>
                  </tr>
                  @endif
                  @if(@$intrested != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Our Editorial Sections</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$intrested}}</td>
                  </tr>
                  @endif
                </table>

              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>  
    



  </body>
  </html>
