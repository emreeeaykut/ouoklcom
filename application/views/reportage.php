<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<meta name="description" content="ouokl.com web sitesi herkesle ropörtaj yapılan eğlenceli, kültürlü ve bilgi verici bir platformdur.">
	<meta name="keywords" content="ouoklcom, oukl, ropörtaj, makara, eğlence, bilgi verici, kültür, sanat">

	<meta name="og:url" content="<?=base_url()?>reportage/detail/<?=$users['sort']?>/<?=seoUrl($users['job'].' '.$users['name'])?>" />
	<meta name="og:type" content="article" />
	<meta name="og:title" content="ouoklcom" />
	<meta name="og:description" content="<?=$users['job'].' '.$users['name']?> ropörtajı" />
	<meta name="og:image" content="<?=base_url()?>uploaded_files/<?=$users['img']?>" />

	<title>ouokl.com - <?=$users['job'].'/'.$users['name']?> ropörtajı</title>
	<?php include "inc/head.php";?>



</head>
<body >

	<?php include "inc/header.php";?>

	<div class="clear"></div>
	
	<div id="content" class="animated bounceInUp">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-xs-10">
					<div class="banner-left pull-left">
						<div class="number"><?=$users['sort']?></div>
						<div class="name"><?=$users['name']?></div>
						<div class="title"><?=$users['job']?></div>
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-2">
					<div class="banner-right pull-right"></div>
				</div>

				<div class="col-md-12 col-sm-12 col-xs-12 ">
					<div class="detail">
						<?php foreach ($asnwers as $asnwer): ?>
							<?=$asnwer['ask']?>
							<?=$asnwer['reply']?>
						<?php endforeach ?>
					</div>
				</div>

				<div class="col-md-12">
					<div class="share pull-left">
						<!-- <div class="fb-like" style="float:left;margin-right:5px;margin-top:5px" data-href="<?=base_url()?>reportage/detail/<?=$users['sort']?>/<?=seoUrl($users['job'].' '.$users['name'])?>" data-width="200px" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div> -->
						<a title="Paylaş" href="http://www.facebook.com/sharer.php?u=<?=base_url()?>reportage/detail/<?=$users['sort']?>/<?=seoUrl($users['job'].' '.$users['name'])?>/&amp;t=<?=$users['job'].' '.$users['name']?> ropörtajı" target="_blank"><img src="<?=base_url()?>assets/img/fb-share.png" alt="Facebook'ta Paylaş" /></a>
						<div class="twt" style="position:relative;left:15px;display:inline; width:100px">
							<a href="https://twitter.com/share" data-text="<?=$users['job'].' '.$users['name']?> ropörtajı" data-count="none" target="_blank"><img src="<?=base_url()?>assets/img/tw-share.png" alt="Twitter'da Paylaş" /></a>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="underside" >
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="arrow-left pull-left p1">
						<?php $small = --$users['sort']; ?>
						<a href="<?=base_url()?>reportage/detail/<?=$small?>/<?=seoUrl($users['job'].' '.$users['name'])?>">
							<?php if ($small != 0) { ?>
							<i class="fa fa-chevron-left fa-2x" id="arrow-left"></i>
							<span class="number n1" >
								 <?php echo $small; ?>
							</span>
							<span class="name hidden-sm hidden-xs"></span>
							<?php } ?>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span class="home-page"><a href="<?=base_url()?>">anasayfa</a></span>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="arrow-left pull-right p2">
						<?php $big = $users['sort']+2; ?>
						<a href="<?=base_url()?>reportage/detail/<?=$big?>">
							<span class="name hidden-sm hidden-xs"></span>
							<span class="number n2" >
							<?php 
								$now_user = $users['sort']+1;
								if ($total != $now_user) {
									echo $big;
							?>		
								
							</span>
							<i class="fa fa-chevron-right fa-2x"></i>
							<?php } ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="clear"></div>

	<?php include "inc/footer.php";?>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>
</body>
</html>