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
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px; line-height:20px">
              <span class="pb-3">Dear <strong>{{ ucfirst($name)}}</strong>,</span> 
              <tr>
                <td style=""></td>
              </tr>
              
               

<p>Thank you for subscribing for the video. Please find direct links to the other videos below.</p>

              <li> <a href="http://promotions.pharmafocusasia.com/public/pdf/bio-continuum_workshop-frontiers-in-digital-bioprocessing.mp4">Link 1</a>
             </li>
                  <!-- </br></br> -->
                  <li> <a href="http://promotions.pharmafocusasia.com/public/pdf/bio-continuum_workshop-regulatory.mp4">Link 2</a>
                  <!-- </br></br> -->
                  </li>
                  <li><a href="http://promotions.pharmafocusasia.com/public/pdf/bio-continuum_workshop-smart-bioprocess-data-utilization.mp4">Link 3</a> 
                  <!-- </br></br> -->
                  </li>
                  <li><a href="http://promotions.pharmafocusasia.com/public/pdf/biocontinuum_workshop-the-evolution-of-AI.mp4">Link 4 </a> 
                 <!-- </br></br> -->
                 </li>
 
             Happy viewing.

 <p>For any subject matter or business related queries feel free to visit <a href="https://www.pharmafocusasia.com/promotion/biocontinuum-platform-for-next-generation-bioprocessing">website</a>
 and leave a message.</p>
          <tr>
            <td style=""></td>
          </tr>
           @if(@$pdf != '')
       
                <a href="{{ $pdf }}">Download PDF</a>
                    <br><br> 
            @endif
            <tr>
              <td style=""></td>
            </tr>
           @if(@$video != '')
                 <li>
                   <a href="{{ $video }}">Download Video</a>
                   
                    </li>
                    <br><br> 
            @endif

              <span class="pt-3">Thanks & Regards,</span>
              {{-- <br> --}}
         
              {{-- Pharma Focus Asia, --}}
            </td>
            </tr>
          
         
         <tr>
        <td align="left" valign="middle"  width="500">
          <img src="https://industry.pharmafocusasia.com/images/logo.png" alt="{{$site_name}}" height="40"/> 
           
        </td>
  </tr>
      </table>

    </td>
  </tr>
</table>
    </td>
  </tr>
  
</table>  
    



</body>
</html>
