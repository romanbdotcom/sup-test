<?php

get_header();

global $post;

$book = get_remote_api_data();

$title = (!empty($book['title'])) ? $book['title'] : 'Title';

$contributors = (!empty($book['contributors'])) ? $book['contributors'] : [];

$author = '';

$sale_date = (!empty($book['sale_date'])) ? $book['sale_date'] : '';

$description = (!empty($book['description'])) ? $book['description'] : 'Description';

$cover = (!empty($book['image'])) ? $book['image'] : wp_get_attachment_image_src(34);

$prices = (!empty($book['prices'])) ? $book['prices'] : [];

$retailers = (!empty($book['retailers'])) ? $book['retailers'] : [];

$formats = (!empty($book['formats'])) ? $book['formats'] : [];

$reviews = (!empty($book['reviews'])) ? $book['reviews'] : [];

?>

<div class="container-lg">
    <article class="product text-left mt-5">
        <div class="row">
            <div class="col-md-4 col-xl-3 column column1">
                <figure class="cover">
                    <img src="<?php echo $cover; ?>" loading="lazy" alt="<?php echo $title; ?>">
                </figure>
                <div class="wrapper">
<?php
get_template_part('includes/partials/sale', '', [
    'data' => $retailers,
]);
?>
                </div>
            </div>
            <div class="col-md-8 col-xl-6 column column2">
                <div class="wrapper">
                    <h1 class="title labels"><?php echo $title; ?></h1>
<?php
get_template_part('includes/partials/author', '', [
    'data' => $contributors,
]);
get_template_part('includes/partials/formats', '', [
    'data' => $formats,
]);
?>
                    <h2 class="section-name">Description</h2>
                    <div class="description"><?php echo $description; ?></div>
                    <h2 class="section-name">Reviews</h2>
<?php
get_template_part('includes/partials/reviews', '', [
    'data' => $reviews,
]);
?>
                </div>
            </div>
            <div class="col-md-8 col-xl-3 column column3">
                <div class="wrapper">
                    <h2 class="section-name">Price</h2>
<?php
get_template_part('includes/partials/prices', '', [
    'data' => $prices,
]);
?>
                    <h2 class="section-name">Sale date</h2>
<?php
if(!empty($sale_date)) {
    $date = format_date($sale_date['date']);
    printf('<date>%s</date>', $date);
}
?>
                    <h2 class="section-name">Information</h2>
<?php
get_template_part('includes/partials/information', '', [
    'page_id' => $post->ID
]);
?>

                </div>
            </div>
        </div>
<?php
get_template_part('includes/partials/bio_modals', '', [
    'data' => $contributors,
]);
?>
    </article>
</div>

<?php get_footer();
