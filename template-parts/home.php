<!--
Template Name: Home page
-->




<?php
get_header();
?>


<?php
if (is_front_page())
{

//<!-- Header Part Start -->

get_template_part('template-parts/hero');

//<!-- Header Part End -->
//<!-- Service Area Start -->

get_template_part('template-parts/Service_area');

//<!-- Service Area End -->
//
//<!-- Applications Features Area Start -->

get_template_part('template-parts/app_features');



//<!-- Applications Features Area End -->
//
//
//<!-- Client Testmonials Area Start -->


get_template_part('template-parts/client-testmonial');

//<!-- Client Testmonials Area End -->
//
//
//<!-- Features Presentation Area Start -->

get_template_part('template-parts/features-presentation');

//<!--<!-- Features Presentation Area End -->-->
//<!---->
//<!---->
//<!--<!-- Expertise Area Start -->-->
//<!---->

get_template_part('template-parts/expertise-area');



//<!-- Expertise Area End -->
//
//<!-- Our Team Members Area Start -->


get_template_part('template-parts/team-member');

//<!-- Our Team Members Area End -->
//
//
//<!-- Plan Pricing Area Start -->


get_template_part('template-parts/plan-pricing');

//
//<!-- Plan Pricing Area End -->
//
//
//<!-- Business Partner Area Start -->
//

get_template_part('template-parts/business-partner');



//<!-- Business Partner Area End -->
//
//
//
//<!-- Sign Up Area Start -->


get_template_part('template-parts/sign-up');



//   <!-- Sign Up Area End -->

}



	?>




<?php
get_footer();
?>


