<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" 
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
<loc>{{url('/')}}</loc>
<lastmod>2020-03-20</lastmod>
<changefreq>weekly</changefreq>
<priority>0.8</priority>
</url>

<?php $dynamic=DB::table('dynamic')->where('status',1)->get();
foreach ($dynamic as $bb) {?>

<url>
<loc>{{url(str_replace(' ','-',strtolower('/' . $bb->page_url)))}}/</loc>
<lastmod>2022-03-20</lastmod>
<changefreq>monthly</changefreq>
<priority>0.8</priority>
</url>
<?php }?> 

<?php $add_category=DB::table('add_category')->whereNotIn('name', ['Box by Material', 'Box by Style', 'Box by Industry'])->get();
foreach ($add_category as $bb) {?>

<url>
<loc>{{url(str_replace(' ','-',strtolower('/' . $bb->category_url)))}}/</loc>
<lastmod>2022-03-20</lastmod>
<changefreq>monthly</changefreq>
<priority>0.8</priority>
</url>
<?php }?> 

<?php $product=DB::table('product')->get();
foreach ($product as $bb) {?>

<url>
<loc>{{url(str_replace(' ','-',strtolower('/' . $bb->url)))}}/</loc>
<lastmod>2022-03-20</lastmod>
<changefreq>monthly</changefreq>
<priority>0.8</priority>
</url>
<?php }?> 

<?php $add_blog=DB::table('blog')->get();
foreach ($add_blog as $bb) {?>

<url>
<loc>{{url(str_replace(' ','-',strtolower('/' . $bb->blog_url)))}}/</loc>
<lastmod>2022-03-20</lastmod>
<changefreq>monthly</changefreq>
<priority>0.8</priority>
</url>
<?php }?> 
</urlset>

