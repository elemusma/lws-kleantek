<?php 

echo '<div class="col-lg-3 col-12 order-2">';
// echo '<div class="card p-3 mb-2">';
// get_search_form();
// echo '</div>';

?>

<div class="card bg-light d-lg-block d-none" style="border:2px solid white;padding:15px;border-radius:25px;">
	<?php echo wp_get_attachment_image(64861,'full','',array(
        'class'=>'',
        'style'=>'width:100px;height:100px;border-radius:50%;top:0;left:0;object-fit:cover;object-position:bottom;margin-bottom:15px;'
	)); ?>
	<h2 class="" style="font-size:1.25rem;margin:0;">Steven S. Paul</h2>
	<p class="small" style="margin:0;">Steven is the CEO of Test Drive Technologies based in St. Louis. When he&apos;s not busy inspecting and appraising vehicles, he spends time with his family.</p>
</div>

<div class="card" style="padding:15px;">
<span style="font-size:1.25rem;margin:0;">Share This Article</span>
<?php
$share_url = urlencode( get_permalink() );
$post_title = urlencode( get_the_title() );
?>
<div class="d-flex justify-content-start align-items-center mt-2">
<div style="margin-right:10px;">
<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" rel="noopener noreferrer">
    <svg style="width:45px;" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 950 950">
  <defs>
    <style>
      .cls-01 {
        fill: #435994;
      }

      .cls-02 {
        fill: #fff;
      }
    </style>
  </defs>
  <g id="Layer_1-2" data-name="Layer 1">
    <g>
      <circle class="cls-01" cx="475" cy="475" r="475"/>
      <path class="cls-02" d="M421,725v-223.63h-74.9v-88.87h74.9v-70.02c0-76.07,46.48-117.48,114.36-117.48,32.52,0,60.45,2.44,68.55,3.52v79.49h-47.07c-36.91,0-44.04,17.58-44.04,43.26v61.23h83.3l-11.43,88.87h-71.87v223.63"/>
    </g>
  </g>
</svg>
</a>
</div>

<div style="margin-right:10px;">
<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share_url; ?>&title=<?php echo $post_title; ?>" target="_blank" rel="noopener noreferrer">
    <svg style="width:45px;" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 950 950">
  <defs>
    <style>
      .cls-05 {
        fill: #2a6397;
      }

      .cls-06 {
        fill: #fff;
      }
    </style>
  </defs>
  <g id="Layer_1-2" data-name="Layer 1">
    <g>
      <circle class="cls-05" cx="475" cy="475" r="475"/>
      <path class="cls-06" d="M336.92,724.94h-103.66v-333.74h103.66v333.74ZM285.03,345.68c-33.14,0-60.03-27.45-60.03-60.59s26.89-60.03,60.03-60.03,60.03,26.89,60.03,60.03-26.89,60.59-60.03,60.59ZM724.89,724.94h-103.44v-162.46c0-38.72-.78-88.37-53.89-88.37s-62.15,42.07-62.15,85.58v165.25h-103.55v-333.74h99.42v45.53h1.45c13.84-26.22,47.65-53.89,98.08-53.89,104.89,0,124.19,69.07,124.19,158.78v183.33h-.11Z"/>
    </g>
  </g>
</svg>
</a>
</div>

<div>
	<a href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $post_title; ?>" target="_blank" rel="noopener noreferrer">
    <svg style="width:45px;" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
  <defs>
    <style>
      .cls-1 {
        fill: #fff;
      }
    </style>
  </defs>
  <g id="Layer_1-2" data-name="Layer 1">
    <g>
      <path d="M1056.1,0c6.27,2.09,13.89.68,20.54.96,516.74,21.85,949.41,453.16,970.4,970.5.27,6.65-1.13,14.27.96,20.54v64c-2.09,6.27-.68,13.9-.96,20.54-21.85,516.92-453.12,949.34-970.4,970.5-6.98.29-14.92-1.14-21.54.96h-61.99c-6.62-2.1-14.56-.66-21.54-.96C454.79,2024.98,22.16,1594.02,1.16,1076.54c-.27-6.65,1.13-14.27-.96-20.54.48-21.29-.65-42.72,0-64C16.57,453.35,453.51,16.37,992.11,0h63.99ZM795.13,443h-338.97l442.82,645.67-442.82,516.33h99.49l387.48-451,309.95,451h338.97l-458.99-669.57,421.99-492.43h-99.49l-368.44,427-291.99-427Z"/>
      <path class="cls-1" d="M795.13,443l291.99,427,368.44-427h99.49l-421.99,492.43,458.99,669.57h-338.97l-309.95-451-387.48,451h-99.49l442.82-516.33L456.16,443h338.97ZM1455.06,1533l-709.43-1015h-153.48l709.43,1015h153.48Z"/>
      <polygon points="1455.06 1533 1301.58 1533 592.15 518 745.63 518 1455.06 1533"/>
    </g>
  </g>
</svg>
</a>
</div>

</div>
</div>

<div class="card text-white d-lg-block d-none" style="background:#3d3d3d;padding:15px;border-radius:25px;">
	<?php 
	// echo do_shortcode('[new_patient_special]'); 
	?>
	<h2 class="" style="margin-top:0px;font-size:22px;">Get Your Free Pre-Inspection Consultation</h2>
	<div class="divider" style="margin-left:0;"></div>
<h3 style="margin-bottom:0px;"><strong class="h5" style="text-shadow:none;">$79 Red Light Body Sculpting</strong></h3>
<!-- <p>or</p> -->
<h3 style="margin-top:0px;"><strong class="h5" style="text-shadow:none;">$79 Skin Rejuvenation</strong></h3>
<p>Claim your $79 New Patient Special today and experience your first full-body light therapy session—slimming, tightening, and rejuvenating with zero pain or downtime.</p>
<?php 
echo do_shortcode('[button target="_blank" href="https://offer.getradiantresults.com/" class="white" style="margin-left:0px;"]Get New Patient Special[/button]');
// echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); 
?>
</div>

<?php
echo '<div class="card p-3 mt-2 mb-2">';
echo '<h3 class="teko">Recent Posts</h3>';

$recentBlog = new WP_Query(array(
'posts_per_page' => 5,
'post_type' => 'post',
'post__not_in' => [get_the_ID()],
));
echo '<ul>';
while($recentBlog->have_posts()){
$recentBlog->the_post();
echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
} wp_reset_postdata();
echo '</ul>';
echo '</div>';
echo '</div>';

?>