<?php


if($head["parentid"] == 2890)
{
    include("news-inner.php");
}
else if($head["parentid"] == 3078)
{
    include("loyality-inner.php");
}
else if($head["parentid"] == 3166)
{
    include("promotions-inner.php");
}
else if($head["parentid"] == 3222)
{
    include("sovet-inner.php");
}
else if($head["parentid"] == 3220)
{
    include("media-inner.php");
}
else
{
    if($head["path"] == "")
    {
        ?><main><section class="textual-block">	<div class="container"><div class="<?php echo $head["id"] === '2973'?'editor-seo sovety-seo':''; ?>"><?
    }

        if($head["hide_content"] == "0")
        {
            echo htmlspecialchars_decode( $head["info"],ENT_QUOTES);

        }
        if($head["path"] != "" && file_exists(_DIR.$head["path"]))
        {
            include(_DIR.$head["path"]);
        }
        if( $head["formid"] > 0 )
        {
            content("form", $head["formid"]);
        }
    if($head["path"] == "")
    {
        ?></div></div></section></main><?
    }
}
