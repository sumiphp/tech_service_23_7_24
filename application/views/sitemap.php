<?php
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";

echo "<url>".
        "<loc>".base_url()."</loc>".
        "<changefreq>daily</changefreq>".
        "<priority>1</priority>".
        "</url>";
if (isset($items)){
    foreach($items as $item) {
        echo "<url>".
            "<loc>".
            base_url().
            "item/{$item["loc"]}/".
            "</loc>".
            "<changefreq>weekly</changefreq>".
            "<priority>0.5</priority>".
            "</url>";
    }
}
echo "</urlset>";
?>