<?php $this->start('navigation')?>
	<?= $this->element("menu", ["activeItem" => "Music"]); ?>
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
				<h1 class="page-title">Music</h1>
			</header>
			
    <table class="table table-striped">
    <?php /* @var $track  App\Model\Entity\Music */  ?>
        <tr>
            <th><?= __('Album') ?></th>
            <td><?= h($track->albumTitle) ?></td>
        </tr>
        <tr>
            <th><?= __('Artiste') ?></th>
            <td><?= h($track->artistName) ?></td>
        </tr>
        <tr>
            <th><?= __('Titre') ?></th>
            <td><?= h($track->trackTitle) ?></td>
        </tr>
        <tr>
            <th><?= __('ID') ?></th>
            <td><?= $this->Number->format($track->trackID) ?></td>
        </tr>
        <tr>
            <th><?= __('Durée') ?></th>
            <td><?= $this->Number->format($track->milliseconds) ?></td>
        </tr>
        </table>
        
        </article>
			<!-- /Article -->
	
	</div>
</div>	<!-- /container -->

