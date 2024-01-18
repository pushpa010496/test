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

                  @if(@$mobile != '')
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Mobile</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$mobile}}</td>
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

                   @if(@$zipcode != '')
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Zipcode</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$zipcode}}</td>
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


                  @if(@$magazine_de != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{trans('messages.siteshortname')}} digital edition</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$magazine_de}}</td>
                  </tr>
                  @endif

                   @if(@$current_newsletter != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe to e-Newsletter</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$current_newsletter}}</td>
                  </tr>
                  @endif

                    @if(@$content_newsletter != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe to Event Newsletter</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$content_newsletter}}</td>
                  </tr>
                  @endif

                   @if(@$special_offers != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{trans('messages.siteshortname')}} and special offers</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$special_offers}}</td>
                  </tr>
                  @endif


                   @if(@$event_name != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Event Name</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$event_name}}</td>
                  </tr>
                  @endif

                   @if(@$start_date != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">start date</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$start_date}}</td>
                  </tr>
                  @endif

                   @if(@$end_date != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">end date</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$end_date}}</td>
                  </tr>
                  @endif

                    @if(@$event_organiser != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Event organiser</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$event_organiser}}</td>
                  </tr>
                  @endif


                  @if(@$web_link != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Web link</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$web_link}}</td>
                  </tr>
                  @endif

                   @if(@$venue != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Venue</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$venue}}</td>
                  </tr>
                  @endif

                  @if(@$address != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Address</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$address}}</td>
                  </tr>
                  @endif

                    @if(@$type != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Type</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$type}}</td>
                  </tr>
                  @endif

                   @if(@$opt != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> E-Newsletters</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$opt =='on'?'On':'Off' }}</td>
                  </tr>
                  @endif

                   @if(@$whom != '')                           
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">How did you hear about us?</td>
                    <td width="30" align="left" valign="middle"><strong>:</strong></td>
                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$whom}}</td>
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
