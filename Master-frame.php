<!doctype html>
<html lang="es-hn">
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="cmwebsite.css" rel="stylesheet">
<link href="Master-frame.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script>
$(document).ready(function()
{
   $("#ThemeableMenu1").menu(
   {
      icons: { submenu: 'ui-arrow' },
      position: { using: setSubMenu }
   });
   function setSubMenu(position, elements)
   {
      var options = { of: elements.target.element };
      if (elements.element.element.parent().parent().attr('id') === 'ThemeableMenu1')
      {
         options.my = 'left top';
         options.at = 'right top';
      }
      else
      {
         options.my = 'left top';
         options.at = 'right top';
      }
      elements.element.element.position(options);
   }
   $("#ThemeableMenu2").menu(
   {
      icons: { submenu: 'ui-arrow' },
      position: { using: setSubMenu }
   });
   function setSubMenu(position, elements)
   {
      var options = { of: elements.target.element };
      if (elements.element.element.parent().parent().attr('id') === 'ThemeableMenu2')
      {
         options.my = 'right top';
         options.at = 'left top';
      }
      else
      {
         options.my = 'left top';
         options.at = 'right top';
      }
      elements.element.element.position(options);
   }
});
</script>
</head>
<body>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="col-1">
<div id="wb_ThemeableMenu1" style="display:inline-block;width:100%;z-index:1000;">
<ul id="ThemeableMenu1">
<li><div><a href="" target="_self"><i class="fa fa-clock-o"></i>Lunes&nbsp;a&nbsp;Sabado&nbsp;de&nbsp;7:00&nbsp;a.m.&nbsp;a&nbsp;9:00&nbsp;p.m</a></div></li>
<li><div><a href="tel:99376475" target="_self"><i class="fa fa-whatsapp"></i>99376475</a></div></li>
<li><div><a href="http://https://www.facebook.com/c0ff3.45" target="_self"><i class="fa fa-facebook-official"></i>Facebook</a></div></li>
</ul>

</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_ResponsiveMenu1" style="display:inline-block;width:100%;z-index:1;">
<label class="toggle" for="ResponsiveMenu1-submenu" id="ResponsiveMenu1-title">Menu<span id="ResponsiveMenu1-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
<input type="checkbox" id="ResponsiveMenu1-submenu">
<ul class="ResponsiveMenu1" id="ResponsiveMenu1" role="menu">
<li><a role="menuitem" href="./index.php">HOME</a></li>
<li>
<label for="ResponsiveMenu1-submenu-0" class="toggle">NOSOTROS<b class="arrow-down"></b></label>
<a role="menuitem" href="http://">NOSOTROS<b class="arrow-down"></b></a>
<input type="checkbox" id="ResponsiveMenu1-submenu-0">
<ul role="menu">
<li><a role="menuitem" href="./Mision-y-vision.php" target="_blank">MISION&nbsp;Y&nbsp;VISION</a></li>
</ul>
</li>
<li><a role="menuitem" href="./Contacto.php">CONTACTO</a></li>
</ul>

</div>
</div>
</div>
</div>
</div>

<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="col-1">
<div id="wb_Image1" style="display:inline-block;width:196px;height:196px;z-index:2;">
<img src="images/277139612_481373143510992_4687559474571716406_n.jpg" id="Image1" alt="">
</div>
</div>
<div class="col-2">
<div id="wb_Text1">
<span style="color:#696969;font-family:Arial;font-size:17px;"><strong>INFORMACION</strong></span>
</div>
<div id="wb_Text2">
<span style="color:#696969;font-family:Arial;font-size:15px;">Lunes a Sabado de 7:00 a.m -9:00 p.m<br>Domingos de 10:00 a.m -6:00 p.m</span>
</div>
<div id="wb_Text3">
<span style="color:#696969;font-family:Arial;font-size:17px;"><strong>CONTACTO</strong></span>
</div>
<div id="wb_ThemeableMenu2" style="display:inline-block;width:100%;z-index:1006;">
<ul id="ThemeableMenu2">
<li><div><a href="tel:99376475" target="_self"><i class="fa fa-whatsapp"></i>99376475</a></div></li>
</ul>

</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<div id="wb_Text4">
<span style="color:#696969;font-family:Arial;font-size:13px;"><strong>Ricardo Hernandez 2022</strong></span>
</div>
</div>
</div>
</div>
</div>
</body>
</html>