<?php

// start of instagram

echo '<section class="position-relative ' . get_field('classes') . '" style="padding-top:100px;' . get_field('style') . '" id="' . get_field('id') . '">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 text-center">';

echo '<h2 class="" style="margin:0px;">EXPERIENCE BLASTCRAFT</h2>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

// query the user media
$fields = "id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username";
$token = "IGQWRQSms5ZAnJjM2tGcmd2NEllTWtRcUVLLUtFZADRNVDVrRmxudlFtUDI3N0JjelVIaW04c0ZAOLUFta0d0dFRtdlNDbzVadEcybnZAGN3l2Q0dhZAHZAQMGxSMzBLMGVmRjlVcFZAId0NyOW1uLTQxb2NZAbEdnSEN2c0EZD";
$limit = 9;

$json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
$json_feed = @file_get_contents($json_feed_url);
$contents = json_decode($json_feed, true, 512, JSON_BIGINT_AS_STRING);

echo "<section class=''>";
echo "<div class='container-fluid p-0'>";
echo '<div class="instagram-feed owl-carousel owl-theme arrows-middle">';
foreach($contents["data"] as $post){

$username = isset($post["username"]) ? $post["username"] : "";
// $likes = isset($post["likes"]) ? $post["likes"] : "";
// $comments = isset($post["comments"]) ? $post["comments"] : "";
$caption = isset($post["caption"]) ? $post["caption"] : "";
$media_url = isset($post["media_url"]) ? $post["media_url"] : "";
$permalink = isset($post["permalink"]) ? $post["permalink"] : "";
$media_type = isset($post["media_type"]) ? $post["media_type"] : "";

echo '<a href="' . $permalink . '" target="_blank" class="col-lg-4 col-md-6 p-1 col-instagram" style="">';
echo '<div class="position-relative" style="overflow:hidden;">';


if($media_type=="VIDEO"){
echo '<video controls  style="height:350px;object-fit:cover;" class="w-100 d-block">';
echo '<source src=' . $media_url . ' type="video/mp4">';
echo 'Your browser does not support the video tag.';
echo '</video>';
}

else{
echo '<img src=' . $media_url . ' class="w-100" style="height:350px;object-fit:cover;" />';
}
echo '<div class="position-absolute w-100 h-100 col-instagram-overlay" style="opacity:0;top:0;left:0;background:black;"></div>';

echo '<div class="text-white position-absolute col-instagram-text" style="top:50%;left:50%;transform:translate(-50%,0%);opacity:0;">View on Instagram</div>';
echo '</div>';
echo '</a>';
// echo '<div class="ig_post_details">';
// echo '<div>';
// echo '<strong>@' . $username . '</strong> ' . $caption . '';
// echo '</div>';
// echo '<div class="ig_view_link">';
// echo '<a href=' . $permalink . ' target="_blank">View on Instagram</a>';
// echo '</div>';
// echo '</div>';

}

echo '</div>';
echo '</div>';
echo '</section>';
// end of instagram

?>