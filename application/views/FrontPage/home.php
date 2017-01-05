<header id="intro" style=" background: url(<?php if(isset($banner->file)){echo base_url().'uploads/home/'.$banner->file;} ?>) no-repeat;-webkit-background-size: cover;
  -moz-background-size: cover;-o-background-size: cover; background-size: cover;">
	<div class="container">
		<div class="table">
			<div class="header-text">
				<div class="row">
					<div class="col-md-12 text-center caption-bg">
						<?php if (isset($caption->type)): ?>
							<h3 class="light white"><?php echo $caption->title; ?></h3>
							<h1 class="white typed"><?php echo $caption->content; ?></h1>
							<span class="typed-cursor">|</span>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<section id="team" class="section gray-bg">
	<div class="container">
		<div class="row title text-center">
			<h2 class="margin-top">About us</h2>
			<?php if (isset($about->type)): ?>
			<h4 class="light muted"><?php echo $about->content; ?></h4>
			<?php endif ?>
		</div>
	</div>
</section>