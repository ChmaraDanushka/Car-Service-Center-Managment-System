<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="file_1621751656.png" rel="icon" type="image/png">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="Sale.css" rel="stylesheet">
<link href="daily-closing-report.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="affix.min.js"></script>
<script src="searchindex.js"></script>
<script src="wb.sitesearch.min.js"></script>
<script>
var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
function searchPage(features)
{
   var element = document.getElementById('SiteSearch1');
   window.open('sitesearch1-results.html?q='+encodeURIComponent(element.value), '', features);
   return false;
}
</script>
<script>
$(document).ready(function()
{
   $(".SlideMenu1-folder a").click(function()
   {
      $(this).removeClass('sliding');
      var $popup = $(this).parent().find('ul');
      if ($popup.is(':hidden'))
      {
         $popup.slideDown();
         $popup.attr('aria-expanded', 'true');
      }
      else
      {
         $popup.slideUp();
         $popup.attr('aria-expanded', 'false');
      }
   });
   $(".SlideMenu1-folder a").hover(function()
   {
      $(this).addClass('sliding');
      setTimeout(function() 
      {
         $('#SlideMenu1 .sliding').click().removeClass('sliding');
      }, 600);
   }, function() 
   {
      $('#SlideMenu1 .sliding').removeClass('sliding');
   });
   $("#SlideMenu1").affix({offset:{top: $("#SlideMenu1").offset().top}});
   searchParseURL('SiteSearch1');
});
</script>
</head>
<body>

<div id="wb_JavaScript1">
<div id="basicdate"></div>
<script>
   var now = new Date();
   var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
   var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
   var date = ((now.getDate() < 10) ? "0" : "") + now.getDate();
   var year = (now.getYear() < 1000) ? now.getYear() + 1900 : now.getYear();
   today = days[now.getDay()] + ", " + months[now.getMonth()] + " " + date + ", " + year;
   var basicdate = document.getElementById('basicdate');
   basicdate.innerHTML = today;
</script>


</div>
<table id="Table1">
<tr>
<td class="cell0"><p style="font-size:11px;line-height:12px;color:#000000;"> Date </p></td>
<td class="cell1"><p style="font-size:11px;line-height:12px;color:#000000;"> Last Day Closing</p></td>
<td class="cell2"><p style="font-size:11px;line-height:12px;color:#000000;"> Recesive</p></td>
<td class="cell0"><p style="font-size:11px;line-height:12px;color:#000000;"> Payment</p></td>
<td class="cell3"><p style="font-size:11px;line-height:12px;color:#000000;"> Balance</p></td>
</tr>
<tr>
<td class="cell4"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell5"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell6"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell7"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell8"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
</tr>
<tr>
<td class="cell4"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell5"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell6"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell7"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell8"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
</tr>
<tr>
<td class="cell9"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell10"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell11"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell12"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell13"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
</tr>
<tr>
<td class="cell4"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell5"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell6"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell7"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell8"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
</tr>
<tr>
<td class="cell4"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell5"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell6"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell7"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell8"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
</tr>
<tr>
<td class="cell14"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell15"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell16"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell17"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell18"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
</tr>
<tr>
<td class="cell4"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell5"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell6"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell7"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell8"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
</tr>
<tr>
<td class="cell4"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell5"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell6"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell7"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell8"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
</tr>
<tr>
<td class="cell4"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell5"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell6"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell7"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
<td class="cell8"><p style="font-size:11px;line-height:12px;color:#000000;">&nbsp;</p></td>
</tr>
</table>
<form name="SiteSearch1_form" id="SiteSearch1_form" role="search" accept-charset="UTF-8" onsubmit="return searchPage(features)">
<input type="text" id="SiteSearch1" name="SiteSearch1" value="" spellcheck="false" placeholder="Search..." role="searchbox"></form>
<input type="button" id="Button1" onclick="searchPage();return false;" name="Search" value="Search">
<hr id="Line1">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:12px;">Daily Closing Report </span></div>
</div>
</body>
</html>