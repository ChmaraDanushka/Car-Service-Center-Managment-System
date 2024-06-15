<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="file_1621751656.png" rel="icon" type="image/png">
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="Sale.css" rel="stylesheet">
<link href="daily-closing.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="affix.min.js"></script>
<script src="jquery-ui.min.js"></script>
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
   $("#DatePicker1").datepicker(
   {
      dateFormat: 'mm/dd/yy',
      changeMonth: false,
      changeYear: false,
      showButtonPanel: false,
      showAnim: 'show'
   });
   $("#DatePicker1").datepicker("setDate", "new Date()");
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
<input type="text" id="DatePicker1" name="DatePicker1" value="07/14/2021" spellcheck="false">
<div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:12px;"><strong>Cash Closing</strong>&nbsp; </span></div>
<hr id="Line1">
<div id="wb_Text4">
<span style="color:#000000;font-family:Arial;font-size:12px;">Last Day Closing</span></div>
<div id="wb_Text6">
<span style="color:#000000;font-family:Arial;font-size:12px;">Receive</span></div>
<div id="wb_Text8">
<span style="color:#000000;font-family:Arial;font-size:12px;">Payment</span></div>
<div id="wb_Text9">
<span style="color:#000000;font-family:Arial;font-size:12px;">Balance</span></div>
<input type="text" id="Editbox1" name="Editbox1" value="" spellcheck="false">
<input type="text" id="Editbox2" name="Editbox1" value="" spellcheck="false">
<input type="text" id="Editbox3" name="Editbox1" value="" spellcheck="false">
<input type="text" id="Editbox4" name="Editbox1" value="" spellcheck="false">
<input type="submit" id="Button1" name="" value="Close Day">
</div>
</body>
</html>