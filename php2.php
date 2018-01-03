<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'Está usando Internet Explorer.<br />';
}
?> 
</body>
</html>  
