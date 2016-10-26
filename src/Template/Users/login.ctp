<?php $this->start('navigation')?>
	<?= $this->element("menu", ["activeItem" => "SIGN IN / SIGN UP"]); ?>
<?php $this->end()?>

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">
	<ol class="breadcrumb">
			<li><?= $this->Html->link(__('Home'), ['controller' => 'Home', 'action' => 'index']) ?></li>
			<li class="active"><?= __('User access') ?></li>
		</ol>
	
	<div class="row">
		
		<!-- Article main content -->
		<article class="col-xs-12 maincontent">
			<header class="page-header">
				<h1 class="page-title">Sign in</h1>
			</header>
			
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
					<h3 class="thin text-center">Sign in to your account</h3>
					<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signup.html">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
						<hr>
						<?= $this->Form->create()?>
						
						<div class="top-margin">
						<?php 
							echo $this->Form->input('username', ['label' => 'Username/Email*', 'class' => 'form-control'])
						?>						
						</div>
						<div class="top-margin">
						<?php 
							echo $this->Form->input('password', ['label' => 'Password*', 'class' => 'form-control'])
						?>
						</div>
						
						<hr>
						
						<div class="row">
						<div class="col-lg-8">
						<b><a href="">Forgot password?</a></b>
						</div>
						<div class="col-lg-4 text-right">
						<?= $this->Form->button(__('Sign in'), ['class' => 'btn btn-action'])?>
						</div>
						</div>
						
						<?= $this->Form->end() ?>
					</div>
				</div>
			
			</div>
		
		</article>
		<!-- /Article -->
	
	</div>
</div>	<!-- /container -->
