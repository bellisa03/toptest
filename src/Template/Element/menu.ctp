<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class= <?= (!empty($activeItem) && ($activeItem =='Home') )?'active' :'inactive' ?>>
						<?= $this->Html->link('Home', ['controller' => 'Home','action' =>'index']) ?></li>
					<li class= <?= (!empty($activeItem) && ($activeItem =='About') )?'active' :'inactive' ?>>
						<?= $this->Html->link('About', ['controller' => 'About','action' =>'index']) ?></li>
						<li class= <?= (!empty($activeItem) && ($activeItem =='Music') )?'active' :'inactive' ?>>
						<?= $this->Html->link('Music', ['controller' => 'Music','action' =>'index']) ?></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Left Sidebar</a></li>
							<li><a href="#">Right Sidebar</a></li>
						</ul>
					</li>
					<li><a href="#">Contact</a></li>
					<li class= <?= (!empty($activeItem) && ($activeItem =='SIGN IN / SIGN UP') )?'active' :'inactive' ?>>
						<?= $this->Html->link('SIGN IN / SIGN UP', ['controller' => 'Users','action' =>'login'], ['class' => 'btn']) ?></li>
				</ul>
			</div><!--/.nav-collapse -->