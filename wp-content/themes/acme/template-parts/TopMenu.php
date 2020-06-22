<!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">All Done</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'menu_class' => 'nav navbar-nav navbar-right',
											'container'  => '',
											// 'container_class' => 'collapse navbar-collapse',
											// 'container_id' => 'top-navbar-1',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} 
								?>


						
						
					</ul>
				</div>
			</div>
		</nav>