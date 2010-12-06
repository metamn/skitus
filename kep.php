<?
  $files = scandir('/home/clairro/public_html/skibailetusnad.ro/webcam', 1); 
  return "/webcam/" . $files[0]; 
?>
