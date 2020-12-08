<?php
    wp_footer();
?>
<!-- Footer Area Start -->

<section class="prometium-footer">
	<div class="container">
		<div class="prometium-footer-link-part">
			<div class="row">
				<div class="col-md-2">
					<div class="prometium-get-info-account">

						<?php
						if(is_active_sidebar("sidebar-1")){
							dynamic_sidebar( "sidebar-1" );
						}
						?>





					</div>
				</div>
				<div class="col-md-2">
					<div class="prometium-get-info-account">

							<?php
							if(is_active_sidebar("sidebar-2")){
								dynamic_sidebar( "sidebar-2" );
							}
							?>



					</div>
				</div>
				<div class="col-md-2">
					<div class="prometium-get-info-account">

							<?php
							if(is_active_sidebar("sidebar-3")){
								dynamic_sidebar( "sidebar-3" );
							}
							?>

					</div>
				</div>
				<div class="col-md-3">
					<div class="prometium-get-info-account">
						<h6 class="footer-link-title">instagram feed</h6>
						<div class="instagram-images">
							<div class="row">
								<div class="col-md-3">
									<img class="img-fluid" src="assets/images/html.png" />
								</div>
								<div class="col-md-3">
									<img class="img-fluid" src="assets/images/html.png" />
								</div>
								<div class="col-md-3">
									<img class="img-fluid" src="assets/images/html.png" />
								</div>
								<div class="col-md-3">
									<img class="img-fluid" src="assets/images/html.png" />
								</div>
							</div>
						</div>
						<div class="instagram-images">
							<div class="row">
								<div class="col-md-3">
									<img class="img-fluid" src="assets/images/html.png" />
								</div>
								<div class="col-md-3">
									<img class="img-fluid" src="assets/images/html.png" />
								</div>
								<div class="col-md-3">
									<img class="img-fluid" src="assets/images/html.png" />
								</div>
								<div class="col-md-3">
									<img class="img-fluid" src="assets/images/html.png" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="prometium-contact-us prometium-get-info-account">
						<?php
						if(is_active_sidebar("sidebar-5")){
							dynamic_sidebar( "sidebar-5" );
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="footer-hr">
		<hr>
	</div>


	<div class="container">
		<div class="prometium-footer-copyright-part">
			<div class="row">
				<div class="col-md-3">
					<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/prometium-logo-2.png" />
				</div>
				<div class="col-md-6">
					<?php
					if(is_active_sidebar("copy-right")){
						dynamic_sidebar( "copy-right" );
					}
					?>

<!--					<p class="prometium-copyright-para">Copyright 2017 © <span class="prometium-copyright-span">-->
<!--                            Prometium - Multi-Purpose PSD template </span> | All Rights Reserved</p>-->
				</div>
				<div class="col-md-3">
					<div class="payments-method">

						<?php
						if(is_active_sidebar("footer-right")){
							dynamic_sidebar( "footer-right" );
						}
						?>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer Area End -->




<script>

    (function ($)
    {
        "use strict";

        // slider - active
        $('.slider-active').owlCarousel({
            loop: true,
            nav: false,
            dots:true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                767: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })


    })(jQuery);


</script>



<script>
    jQuery(document).ready(function($) {
        "use strict";
        $('#testimonials-list').owlCarousel({
            loop: true,
            center: true,
            items: 3,
            margin: 0,
            autoplay: true,
            dots:true,
            autoplayTimeout: 8500,
            smartSpeed: 450,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1170: {
                    items: 3
                }
            }
        });
    });
</script>



</body>
</html>
