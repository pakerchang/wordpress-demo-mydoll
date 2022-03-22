<?php

/**
 * Template Name: Home
 */

function get_images_from_media_library()
{
   $args = array(
      'post_type' => 'attachment',
      'post_mime_type' => 'image',
      'post_status' => 'inherit',
   );
   $query_images = new WP_Query($args);
   $images = array();
   foreach ($query_images->posts as $image) {
      $images[] = $image->guid;
   };
   return $images;
}

function display_image_from_media_library()
{

   $imgs = get_images_from_media_library();
   $html = '<div id="media-gallery">';

   foreach ($imgs as $img) {

      $html .= '<img class="d-block w-100" src="' . $img . '" alt="" />';
   }

   $html .= '</div>';

   return $html;
}

?>

<?php get_header(); ?>

<div class="banner-1">
   <!-- 輪播1 -->
   <div id="carousel-banner-1" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#carousel-banner-1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carousel-banner-1" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>

      <div class="carousel-inner w-100" role="listbox">
         <div class="carousel-item active">
            <!-- <img class="d-block w-100" src="https://cms.cdn.91app.com/images/original/443/05d0e176-ae24-4cd5-8990-cdd97e753c07-1647503309-8h0pi8pdr9_d_1200x625_800x417_400x208.jpg" alt="top-carousel-banner"> -->
            <?php echo display_image_from_media_library(); ?>
         </div>
         <div class="carousel-item">
            <!-- <img class="d-block w-100" src="https://cms.cdn.91app.com/images/original/443/05d0e176-ae24-4cd5-8990-cdd97e753c07-1647503319-9wolgqsgff_d_1200x625_800x417_400x208.jpg" alt="top-carousel-banner"> -->
            <?php echo display_image_from_media_library(); ?>
         </div>
      </div>

      <button class="carousel-control-prev carousel-btn" type="button" data-bs-target="#carousel-banner-1" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-btn" type="button" data-bs-target="#carousel-banner-1" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</div>
<div class="banner-2">
   <!-- 輪播2 -->
   <div id="carousel-banner-2" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#carousel-banner-2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carousel-banner-2" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carousel-banner-2" data-bs-slide-to="2" aria-label="Slide 3"></button>
         <button type="button" data-bs-target="#carousel-banner-2" data-bs-slide-to="3" aria-label="Slide 4"></button>
         <button type="button" data-bs-target="#carousel-banner-2" data-bs-slide-to="4" aria-label="Slide 5"></button>
         <button type="button" data-bs-target="#carousel-banner-2" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>

      <div class="carousel-inner w-100" role="listbox">
         <div class="carousel-item active">
            <!-- <img class="d-block w-100" src="https://cms.cdn.91app.com/images/original/443/05d0e176-ae24-4cd5-8990-cdd97e753c07-1647502581-nva1iynnmh_d_1200x625_800x417_400x208.jpg" alt="top-carousel-banner"> -->
            <?php echo display_image_from_media_library(); ?>
         </div>
         <div class="carousel-item">
            <!-- <img class="d-block w-100" src="https://cms.cdn.91app.com/images/original/443/05d0e176-ae24-4cd5-8990-cdd97e753c07-1647502608-99fz71w91z_d_1200x625_800x417_400x208.jpg" alt="top-carousel-banner"> -->
            <?php echo display_image_from_media_library(); ?>
         </div>
         <div class="carousel-item">
            <!-- <img class="d-block w-100" src="https://cms.cdn.91app.com/images/original/443/05d0e176-ae24-4cd5-8990-cdd97e753c07-1647502640-h5th2ti0lo_d_1200x625_800x417_400x208.jpg" alt="top-carousel-banner"> -->
            <?php echo display_image_from_media_library(); ?>
         </div>
         <div class="carousel-item">
            <!-- <img class="d-block w-100" src="https://cms.cdn.91app.com/images/original/443/05d0e176-ae24-4cd5-8990-cdd97e753c07-1647502689-dzx6r4w42p_d_1200x625_800x417_400x208.jpg" alt="top-carousel-banner"> -->
         </div>
         <div class="carousel-item">
            <!-- <img class="d-block w-100" src="https://cms.cdn.91app.com/images/original/443/05d0e176-ae24-4cd5-8990-cdd97e753c07-1647502720-aptc0ueijb_d_1200x625_800x417_400x208.jpg" alt="top-carousel-banner"> -->
         </div>
         <div class="carousel-item">
            <!-- <img class="d-block w-100" src="https://cms.cdn.91app.com/images/original/443/05d0e176-ae24-4cd5-8990-cdd97e753c07-1647502746-b6jxhz0wue_d_1200x625_800x417_400x208.jpg" alt="top-carousel-banner"> -->
         </div>
      </div>

      <button class="carousel-control-prev carousel-btn" type="button" data-bs-target="#carousel-banner-2" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-btn" type="button" data-bs-target="#carousel-banner-2" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</div>

<?php get_footer(); ?>