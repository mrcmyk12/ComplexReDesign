<!DOCTYPE html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
    <div class="container">
			<div>
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container-fluid">
						<a class="navbar-brand" href="<?php echo site_url(); ?>"><h3>Complex</h3></a>
						<button
							class="navbar-toggler"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div
							class="collapse navbar-collapse"
							id="navbarSupportedContent"
						>
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('/music') ?>"><h5 <?php 
									if(is_page('music')){
										echo 'class="current-menu-item"';
									} ?>>Music</h5></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('/style') ?>"><h5 <?php 
									if(is_page('style')){
										echo 'class="current-menu-item"';
									} ?>>Style</h5></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('/sports-page') ?>"><h5 <?php 
									if(is_page('sports-page')) {
										echo 'class="current-menu-item"';
									} ?>>Sports</h5></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('/pop-culture') ?>"><h5 <?php 
									if(is_page('pop-culture')) {
										echo 'class="current-menu-item"';
									} ?>>Pop Culture</h5></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('/life') ?>"><h5 <?php 
									if(is_page('life')){
										echo 'class="current-menu-item"';
									} ?>>Life</h5></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('/sneakers') ?>"><h5 <?php 
									if(is_page('sneakers')){
										echo 'class="current-menu-item"';
									} ?>>Sneakers</h5></a>
								</li>
								<li class="nav-item">
									<a>
										<i class="fa-solid fa-magnifying-glass"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
           