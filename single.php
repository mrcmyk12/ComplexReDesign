<?php get_header(); 


while(have_posts()) {
    the_post(); ?>

<div class="container">
			<div class="row" style="margin-top: 25px; height: 400px">
				<img
					class="single-page-img"
					src="https://images.pexels.com/photos/1983032/pexels-photo-1983032.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
				/>
			</div>
			<div class="row">
				<div class="col-8">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
					<p><?php the_time('n.j.y') ?></p>
                    <p><b><?php echo get_the_category_list(','); ?></b></p>
			</div>
			<div class="row">
				<div class="col-8">
						<p class="paragraph-article">
                            <?php the_content(); ?>
                        </p>
				</div>
				<div class="col-4">
					<div class="row">
						<h4>Related Articles</h4>
					</div>
					<div class="row">
						<div class="col">
							<div class="row">
								<img
									class="img-thumbnail"
									src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
								/>
							</div>
							<div class="row">
								<h6>Article Headline Blah Blah Blah Blah </h6>
							</div>
						</div>
						<div class="col">
							<div class="row">
								<img
									class="img-thumbnail"
									src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
								/>
							</div>
							<div class="row">
								<h6>Article Headline Blah Blah Blah Blah </h6>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="row">
								<img
									class="img-thumbnail"
									src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
								/>
							</div>
							<div class="row">
								<h6>Article Headline Blah Blah Blah Blah </h6>
							</div>
						</div>
						<div class="col">
							<div class="row">
								<img
									class="img-thumbnail"
									src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
								/>
							</div>
							<div class="row">
								<h6>Article Headline Blah Blah Blah Blah </h6>
							</div>
						</div>
					</div>
					<div class="row">
						<h4>Latest In Category</h4>
					</div>
					<div class="row">
						<div class="col">
							<img
								class="img-thumbnail"
								src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
							/>
						</div>
						<div class="col">
							<div class="row">
								<h6>The Article Title Goes Here Blah Blah</h6>
							</div>
							<div class="row">
								<p>-By Author</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<img
								class="img-thumbnail"
								src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
							/>
						</div>
						<div class="col">
							<div class="row">
								<h6>The Article Title Goes Here Blah Blah</h6>
							</div>
							<div class="row">
								<p>-By Author</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<img
								class="img-thumbnail"
								src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
							/>
						</div>
						<div class="col">
							<div class="row">
								<h6>The Article Title Goes Here Blah Blah</h6>
							</div>
							<div class="row">
								<p>-By Author</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<img
								class="img-thumbnail"
								src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
							/>
						</div>
						<div class="col">
							<div class="row">
								<h6>The Article Title Goes Here Blah Blah</h6>
							</div>
							<div class="row">
								<p>-By Author</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<img
								class="img-thumbnail"
								src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
							/>
						</div>
						<div class="col">
							<div class="row">
								<h6>The Article Title Goes Here Blah Blah</h6>
							</div>
							<div class="row">
								<p>-By Author</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<img
								class="img-thumbnail"
								src="https://images.pexels.com/photos/1252873/pexels-photo-1252873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
							/>
						</div>
						<div class="col">
							<div class="row">
								<h6></h6>
							</div>
							<div class="row">
								<p>-By Author</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<?php } ?>
        <?php get_footer(); ?>