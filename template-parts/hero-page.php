


<header class="prometium-page-header-area">
	<div class="prometium-nav">
		<div class="container">
			<div class="row">
				<div class="col-md-2">


					<?php
					echo  '<a href="#" class="navbar-brand img-fluid ">' ;
					the_custom_logo();
					echo '</a>';

					?>

				</div>
				<div class="col-md-7">
					<div class="top-nav-menu">
						<nav class="navbar navbar-expand-md navbar-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarCollapse">
								<ul class="navbar-nav m-auto">


									<?php
									wp_nav_menu(
										array(
											'theme_location'    => 'topmenu',
											'menu_id'           => 'navbarCollapse',
											'menu_class'        => 'list-inline ',
											'items_wrap'     => '<li id="" class="nav-item"><a class="nav-link ">%3$s</a> </li>',
										)
									);
									?>




								</ul>
							</div>
						</nav>
					</div>
				</div>
				<div class="col-md-3">
					<div class="menu-button-part">
							<span class="login-button">
								<a class="btn btn-outline-primary" href="#">Login</a>
							</span>
						<span class="get-started-button">
								<a class="btn btn-outline-primary" href="#">Get Started</a>
							</span>
					</div>
				</div>
			</div>



		</div>
	</div>
</header>
