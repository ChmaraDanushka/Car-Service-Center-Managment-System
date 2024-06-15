<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="file_1621751656.png" rel="icon" type="image/png">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="inventory.css" rel="stylesheet">
<link href="add_service.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="affix.min.js"></script>
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
});
</script>
</head>
<body>
<div id="container">
</div>
<div id="Layer3">
<div id="wb_side_manu_icon">
<div id="side_manu_icon"><i class="fa fa-align-justify"></i></div></div>
<div id="Layer2">
<div id="wb_Text2">
<span style="color:#FFFFFF;font-family:'Lucida Sans Unicode';font-size:17px;"><strong>C&amp;R VENTURS</strong></span></div>
<div id="SlideMenu1">
<ul role="menu">
   <li class="SlideMenu1-folder"><a><img alt="" src="images/dashboard.png"><span>DASHBOAD</span></a>
      <ul role="menu" aria-expanded="true">
      </ul>
   </li>
   <li class="SlideMenu1-folder" aria-haspopup="true"><a><img alt="" src="images/double-chevron.png"><span>SERVICE</span></a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="">ADD NEW</a></li>
      </ul>
   </li>
   <li class="SlideMenu1-folder" aria-haspopup="true"><a><img alt="" src="images/copy.png"><span>MESSAGES</span></a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="">ADD NEW</a></li>
      </ul>
   </li>
   <li class="SlideMenu1-folder" aria-haspopup="true"><a><img alt="" src="images/face-scan.png"><span>CUSTOMERS</span></a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="">ADD NEW</a></li>
      </ul>
   </li>
   <li class="SlideMenu1-folder" aria-haspopup="true"><a><img alt="" src="images/shopping-cart.png"><span>INVENTORY</span></a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="">ADD NEW</a></li>
      </ul>
   </li>
   <li class="SlideMenu1-folder" aria-haspopup="true"><a><img alt="" src="images/fingerprint.png"><span>USERS</span></a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="">ADD NEW</a></li>
      </ul>
   </li>
   <li class="SlideMenu1-folder" aria-haspopup="true"><a><img alt="" src="images/presentation.png"><span>SALES</span></a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="">ADD NEW</a></li>
      </ul>
   </li>
   <li class="SlideMenu1-folder" aria-haspopup="true"><a><img alt="" src="images/networking.png"><span>EMPLOYE</span></a>
      <ul role="menu" aria-expanded="true">
         <li><a role="menuitem" href="">ADD NEW</a></li>
      </ul>
   </li>
</ul>
</div>
</div>
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
<div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>Add Service</strong></span></div>
<div id="wb_add_service">
<form name="Form1" method="post" action="mailto:yourname@yourdomain.com" enctype="multipart/form-data" id="add_service">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:13px;">Service Name</span></div>
<div id="wb_Text4">
<span style="color:#000000;font-family:Arial;font-size:13px;">Description</span></div>
<input type="text" id="service_value" name="Editbox1" value="" spellcheck="false">
<input type="text" id="Service_type" name="Editbox1" value="" spellcheck="false">
<input type="text" id="service_name" name="Editbox1" value="" spellcheck="false">
<textarea name="TextArea1" id="description" rows="4" cols="33" spellcheck="false" placeholder=" service details"></textarea>
<input type="submit" id="submit" name="add_categorie" value="Add">
<div id="wb_Text5">
<span style="color:#000000;font-family:Arial;font-size:13px;">Service Value</span></div>
<div id="wb_Text6">
<span style="color:#000000;font-family:Arial;font-size:13px;">Service type</span></div>
</form>
</div>
</div>
</body>
</html>