<?php
get_header();
get_template_part( 'template-parts/hero-page' );
?>


<!-- Service Area Start -->


<div id="fh5co-main-content">
    <div class="dt js-dt">
        <div class="dtc js-dtc">
            <div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

            <div class="row">
                <div class="col-md-12">


                        <div class="fh5co-intro animate-box text-center">
                            <div class="text-center">

                                <h2><?php the_title(); ?></h2>

								<?php
								the_content();
								?>

                            </div>


                        </div>


                </div>
            </div>

        </div>
    </div>

	<?php
	get_footer();
	?>
