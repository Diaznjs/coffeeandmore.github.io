<!doctype html>
<html lang="es-hn">
<head>
<meta charset="utf-8">
<title>Coffee & More</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="base/jquery-ui.min.css" rel="stylesheet">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="cmwebsite.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="util.min.js"></script>
<script src="carousel.min.js"></script>
<script src="wb.parallax.min.js"></script>
<script src="jquery-ui.min.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css">
<script src="fancybox/jquery.easing-1.3.pack.js"></script>
<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
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
   $("#Carousel1").bootstrapcarousel({interval:4000, pause: false});
   $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
   $("a[rel^='PhotoGallery1']").fancybox({});
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
<div id="wb_Carousel1" style="">
<div id="Carousel1" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item frame-1 active">
<div class="carousel-innerframe">
<div id="wb_Image2" style="display:inline-block;width:315px;height:297px;z-index:2;">
<img src="images/logo.png" id="Image2" alt="">
</div>
</div>
</div>
<div class="carousel-item frame-2">
<div class="carousel-innerframe">
<div id="wb_Image3" style="display:inline-block;width:315px;height:297px;z-index:3;">
<img src="images/logo.png" id="Image3" alt="">
</div>
</div>
</div>
<div class="carousel-item frame-3">
<div class="carousel-innerframe">
<div id="wb_Image4" style="display:inline-block;width:315px;height:297px;z-index:4;">
<img src="images/logo.png" id="Image4" alt="">
</div>
</div>
</div>
</div>
</div>
</div>

<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="col-1">
<div id="wb_Image5" style="display:inline-block;width:277px;height:277px;z-index:5;">
<img src="WhatsApp Image 2022-11-17 at 9.02.12 AM (2).jpeg" id="Image5" alt="">
</div>
</div>
<div class="col-2">
<div id="wb_Image6" style="display:inline-block;width:277px;height:277px;z-index:6;">
<img src="WhatsApp Image 2022-11-17 at 9.02.12 AM (3).jpeg" id="Image6" alt="">
</div>
</div>
<div class="col-3">
<div id="wb_Image8" style="display:inline-block;width:277px;height:277px;z-index:7;">
<img src="WhatsApp Image 2022-11-17 at 9.02.12 AM (4).jpeg" id="Image8" alt="">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid6">
<div id="LayoutGrid6">
<div class="col-1">
<div id="wb_Image7" style="display:inline-block;width:277px;height:277px;z-index:8;">
<img src="WhatsApp Image 2022-11-17 at 9.02.12 AM.jpeg" id="Image7" alt="">
</div>
</div>
<div class="col-2">
<div id="wb_Image9" style="display:inline-block;width:277px;height:277px;z-index:9;">
<img src="WhatsApp Image 2022-11-17 at 9.02.13 AM (3).jpeg" id="Image9" alt="">
</div>
</div>
<div class="col-3">
<div id="wb_Image10" style="display:inline-block;width:277px;height:277px;z-index:10;">
<img src="WhatsApp Image 2022-11-17 at 9.02.13 AM (1).jpeg" id="Image10" alt="">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="col-1">
<div id="wb_Text5">
<span style="color:#4F4F4F;font-family:'Roboto Condensed';font-size:37px;">NUESTRA PROPUESTA</span>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="col-1">
<div id="wb_FontAwesomeIcon1" style="display:inline-block;width:79px;height:61px;text-align:center;z-index:12;">
<div id="FontAwesomeIcon1"><i class="fa fa-check"></i></div>
</div>
<div id="wb_Text6">
<span style="color:#000000;font-family:'Roboto Condensed';font-size:21px;line-height:25px;">CALIDAD</span>
</div>
<div id="wb_Text7">
<span style="color:#000000;font-family:'Roboto Condensed';font-size:20px;">Elaboramos los mas ricos postres con los mejores estándares de calidad.</span>
</div>
</div>
<div class="col-2">
<div id="wb_FontAwesomeIcon2" style="display:inline-block;width:79px;height:61px;text-align:center;z-index:15;">
<div id="FontAwesomeIcon2"><i class="fa fa-money"></i></div>
</div>
<div id="wb_Text8">
<span style="color:#000000;font-family:'Roboto Condensed';font-size:21px;line-height:25px;">PRECIO</span>
</div>
<div id="wb_Text9">
<span style="color:#000000;font-family:'Roboto Condensed';font-size:20px;">Tenemos los mejores precios en lo relacionado con los mas ricos postres de la zona.</span>
</div>
</div>
<div class="col-3">
<div id="wb_FontAwesomeIcon3" style="display:inline-block;width:79px;height:61px;text-align:center;z-index:18;">
<div id="FontAwesomeIcon3"><i class="fa fa-bullhorn"></i></div>
</div>
<div id="wb_Text10">
<span style="color:#000000;font-family:'Roboto Condensed';font-size:21px;line-height:25px;">ATENCIÓN</span>
</div>
<div id="wb_Text11">
<span style="color:#000000;font-family:'Roboto Condensed';font-size:20px;">Contamos con un local comodo con la mejor atención al cliente de villanueva, cortes.</span>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid9">
<div id="LayoutGrid9">
<div class="col-1">
<div id="wb_Text12">
<span style="color:#000000;font-family:'Roboto Condensed';font-size:37px;">PRODUCTOS</span>
</div>
<div id="wb_PhotoGallery1" style="display:inline-block;width:100%;z-index:22;">
<div id="PhotoGallery1">
   <div class="thumbnails">
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.09 AM.jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.09 AM.jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.11 AM (1).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.11 AM (1).jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.11 AM (2).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.11 AM (2).jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.11 AM (3).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.11 AM (3).jpeg"></a>
      </div>
      <div class="clearfix visible-col4"></div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.11 AM.jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.11 AM.jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.12 AM (1).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.12 AM (1).jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.12 AM (2).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.12 AM (2).jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.12 AM (3).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.12 AM (3).jpeg"></a>
      </div>
      <div class="clearfix visible-col4"></div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.12 AM (4).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.12 AM (4).jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.12 AM.jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.12 AM.jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.13 AM (1).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.13 AM (1).jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.13 AM (2).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.13 AM (2).jpeg"></a>
      </div>
      <div class="clearfix visible-col4"></div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.13 AM (3).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.13 AM (3).jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.13 AM.jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.13 AM.jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.14 AM (1).jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.14 AM (1).jpeg"></a>
      </div>
      <div class="thumbnail">
         <a href="WhatsApp Image 2022-11-17 at 9.02.14 AM.jpeg" data-rel="PhotoGallery1"><img alt="" src="WhatsApp Image 2022-11-17 at 9.02.14 AM.jpeg"></a>
      </div>
      <div class="clearfix visible-col4"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid10">
<div id="LayoutGrid10">
<div class="row">
<div class="col-1">
<div id="wb_EmbeddedPage1" style="display:inline-block;width:100%;z-index:29;">
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1-overlay"></div>
<div id="LayoutGrid1">
<div class="col-1">
<div id="wb_Text1">
<span style="color:#FFFFFF;font-family:Arial;font-size:37px;">COFFEE &amp; MORE</span>
</div>
</div>
<div class="col-2">
<div id="wb_Shape1" style="display:inline-block;width:163px;height:59px;z-index:27;position:relative;">
<a href="./Contacto.php"><img src="images/img0001.png" id="Shape1" alt="" style="width:163px;height:59px;"></a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="col-1">
<div id="wb_Image1" style="display:inline-block;width:196px;height:196px;z-index:30;">
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
<div id="wb_ThemeableMenu2" style="display:inline-block;width:100%;z-index:1034;">
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