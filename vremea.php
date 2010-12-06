<?php
/*
Template Name: Vremea
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<div id="content" class="block vremea">
  <div id="inside" class="opacity-7">
  <h2>Vremea</h2>
  <center>
    <!-- Inceput cod www.vremea-meteo.com vremea prognoza meteo starea vremii weather forecast romania -->
    <table border=0 cellspacing=0 cellpadding=0 width=400 height=400><tr><td>
    <iframe src="http://www.vremea-meteo.com/prognoza/coduri/cod.asp?url=RO022|BAILE TUSNAD" width=400 height=400 frameborder=0 scrolling=no></iframe>
    <a href=http://www.vremea-meteo.com target=blank><font face=Verdana size=1 color=AAAAAA>vremea-meteo.com</font></a>
    </td></tr></table>
    <!-- Sfarsit cod www.vremea-meteo.com vremea prognoza meteo starea vremii weather forecast romania -->
    Pentru prognoza completa <b>de 15 zile</b> va rugam vizitati pagina <a href="http://www.vremea-meteo.com/prognoza/vremea.asp?url=RO022|Baile%20Tusnad">vremea-meteo.com.</a>
  </center>
  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
