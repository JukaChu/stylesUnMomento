<?
session_start();
ini_set("display_errors","on");
header('Content-Type: text/xml; charset=UTF-8');
//header("Content-Disposition: attachment; filename=sitemap.xml"); 
include("inc/protection.php");
include("inc/constant.php");
include("inc/global.php");
include("inc/engine.php");
echo "<?xml version='1.0' encoding='UTF-8'?>";

	global $currency_array;
		global $base_currency;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?
$sql = dbQuery("SELECT id,name,url FROM content WHERE ispublish = 1 AND is_map = 1");
foreach($sql as $r)
{
	?>
	<url>
    <loc><?=_SITE?><?=$r["url"]?></loc>
    <changefreq>daily</changefreq>
   </url>  
	<?
}
?>
</urlset>
