<?php
function ValidateEmail($email)
{
   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
   return preg_match($pattern, $email);
}
function ReplaceVariables($code)
{
   foreach ($_POST as $key => $value)
   {
      if (is_array($value))
      {
         $value = implode(",", $value);
      }
      $name = "$" . $key;
      $code = str_replace($name, $value, $code);
   }
   $code = str_replace('$ipaddress', $_SERVER['REMOTE_ADDR'], $code);
   return $code;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formid']) && $_POST['formid'] == 'layoutgrid1')
{
   $mailto = 'rhrh34580@gmail.com';
   $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
   $subject = 'Website form';
   $message = 'Values submitted from web site form:';
   $success_url = './Gracias.php';
   $error_url = '';
   $eol = "\n";
   $error = '';
   $internalfields = array ("submit", "reset", "send", "filesize", "formid", "captcha_code", "recaptcha_challenge_field", "recaptcha_response_field", "g-recaptcha-response");
   $boundary = md5(uniqid(time()));
   $header  = 'From: '.$mailfrom.$eol;
   $header .= 'Reply-To: '.$mailfrom.$eol;
   $header .= 'MIME-Version: 1.0'.$eol;
   $header .= 'Content-Type: multipart/mixed; boundary="'.$boundary.'"'.$eol;
   $header .= 'X-Mailer: PHP v'.phpversion().$eol;

   try
   {
      if (!ValidateEmail($mailfrom))
      {
         $error .= "The specified email address (" . $mailfrom . ") is invalid!\n<br>";
         throw new Exception($error);
      }

      $message .= $eol;
      $message .= "IP Address : ";
      $message .= $_SERVER['REMOTE_ADDR'];
      $message .= $eol;
      foreach ($_POST as $key => $value)
      {
         if (!in_array(strtolower($key), $internalfields))
         {
            if (!is_array($value))
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
            }
            else
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
            }
         }
      }
      $body  = 'This is a multi-part message in MIME format.'.$eol.$eol;
      $body .= '--'.$boundary.$eol;
      $body .= 'Content-Type: text/plain; charset=ISO-8859-1'.$eol;
      $body .= 'Content-Transfer-Encoding: 8bit'.$eol;
      $body .= $eol.stripslashes($message).$eol;
      if (!empty($_FILES))
      {
         foreach ($_FILES as $key => $value)
         {
             if ($_FILES[$key]['error'] == 0)
             {
                $body .= '--'.$boundary.$eol;
                $body .= 'Content-Type: '.$_FILES[$key]['type'].'; name='.$_FILES[$key]['name'].$eol;
                $body .= 'Content-Transfer-Encoding: base64'.$eol;
                $body .= 'Content-Disposition: attachment; filename='.$_FILES[$key]['name'].$eol;
                $body .= $eol.chunk_split(base64_encode(file_get_contents($_FILES[$key]['tmp_name']))).$eol;
             }
         }
      }
      $body .= '--'.$boundary.'--'.$eol;
      if ($mailto != '')
      {
         mail($mailto, $subject, $body, $header);
      }
      $successcode = file_get_contents($success_url);
      $successcode = ReplaceVariables($successcode);
      echo $successcode;
   }
   catch (Exception $e)
   {
      $errorcode = file_get_contents($error_url);
      $replace = "##error##";
      $errorcode = str_replace($replace, $e->getMessage(), $errorcode);
      echo $errorcode;
   }
   exit;
}
?>
<!doctype html>
<html lang="es-hn">
<head>
<meta charset="utf-8">
<title>Contacto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="cmwebsite.css" rel="stylesheet">
<link href="Contacto.css" rel="stylesheet">
</head>
<body>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_ResponsiveMenu1" style="display:inline-block;width:100%;z-index:0;">
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
<div id="wb_LayoutGrid1">
<form name="LayoutGrid1" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="LayoutGrid1">
<input type="hidden" name="formid" value="layoutgrid1">
<div class="row">
<div class="col-1">
<div id="wb_Text1">
<span style="color:#000000;font-family:'Roboto Condensed';font-size:24px;">CONTACTANOS</span>
</div>
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<input type="text" id="Editbox1" style="display:block;width: 100%;height:53px;z-index:1;" name="name" value="" spellcheck="false" required placeholder="Nombre">
<input type="text" id="Editbox2" style="display:block;width: 100%;height:58px;z-index:2;" name="email" value="" spellcheck="false" required placeholder="Correo electronico">
<input type="text" id="Editbox3" style="display:block;width: 100%;height:59px;z-index:3;" name="phone" value="" spellcheck="false" required placeholder="Telefono">
<input type="text" id="Editbox4" style="display:block;width: 100%;height:55px;z-index:4;" name="subject" value="" spellcheck="false" required placeholder="Asunto">
</div>
<div class="col-2">
<textarea name="meg" id="TextArea1" style="display:block;width: 100%;;height:259px;z-index:5;" rows="16" cols="66" spellcheck="false" required placeholder="Mensaje"></textarea>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="col-1">
<input type="submit" id="Button1" name="submit" value="Enviar" style="display:inline-block;width:96px;height:25px;z-index:6;">
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</body>
</html>