<?php $this->start('navigation')?>
	<?= $this->element("menu", ["activeItem" => "Polls"]); ?>
<?php $this->end()?>

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">
	<ol class="breadcrumb">
			<li><?= $this->Html->link(__('Home'), ['controller' => 'Home', 'action' => 'index']) ?></li>
			<li class="active"><?= __('Polls') ?></li>
		</ol>
	
	<div class="row">
		
		<!-- Article main content -->
		<article class="col-xs-12 maincontent">
			<header class="page-header">
				<h1 class="page-title">Sondage</h1>
			</header>
				
			<table class="table table-striped">
				<?php foreach ($polls as $poll):?>
				<?php /* @var $poll  App\Model\Entity\Poll */  ?>
			 		<tr>
			            <th><?= __('ID') ?></th>
			            <td><?= $this->Number->format($poll->id) ?></td>
			        </tr>
			        <tr>
			            <th><?= __('Sondage') ?></th>
			            <td><?= h($poll->title) ?></td>
			        </tr>
			        <tr>
			            <th><?= __('Description') ?></th>
			            <td><?= h($poll->description) ?></td>
			        </tr>
			        <tr>
			            <th><?= __('Genre') ?></th>
			            <td><?= h($poll->musicstyleid) ?></td>
			        </tr>
			        <tr>
			            <th><?= __('Nom Genre') ?></th>
			            <td><?= h($poll->music_genre_name) ?></td>
			        </tr>
			        <tr>
			            <th><?= __('Nom Genre entier') ?></th>
			            <td><?= h($poll->musicGenreFullName) ?></td>
			        </tr>
			        <tr>
			            <th><?= __('Status') ?></th>
			            <td><?= h($poll->status) ?></td>
			        </tr>
			        
			        <tr>
			            <th><?= __('Début') ?></th>
			            <td><?= h($poll->begindate) ?></td>
			        </tr>
			        <tr>
			            <th><?= __('Fin') ?></th>
			            <td><?= h($poll->enddate) ?></td>
			        </tr>
			        <tr>
			            <th><?= __(' ') ?></th>
			            <td><?= __(' ') ?></td>
			        </tr>
		       <?php endforeach;?>    
			        </table>
			    
        </article>
		<!-- /Article -->
	
	</div>
</div>	<!-- /container -->
