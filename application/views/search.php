<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<meta name="description" content="ouokl.com web sitesi herkesle ropörtaj yapılan eğlenceli, kültürlü ve bilgi verici bir platformdur.">
	<meta name="keywords" content="ouoklcom, oukl, ropörtaj, makara, eğlence, bilgi verici, kültür, sanat">

	<title>ouokl.com</title>
	<?php include "inc/head.php";?>

</head>
<body >

	<?php include "inc/header.php";?>

	<div class="clear"></div>


	<!-- <div id="main" class="animated bounceInUp"> -->
	<div id="main">
		<div class="container">
			<div class="row">

				
				<?php foreach ($reportages as $r): ?>
				<div class="col-md-4 col-sm-6 col-xs-12 ">
					<div class="box">
						<a id="reportage" href="<?=base_url()?>reportage/detail/<?=$r['sort']?>/<?=seoUrl($r['job'].' '.$r['name'])?>"  >
							<?php if ($r['img']): ?>
							<div class="banner"><img src="<?=base_url()?>uploaded_files/<?=$r['img']?>" class="img-responsive" alt="Ouoklcom Banner" /></div>
							<?php endif ?>
							<div class="number"><?=$r['sort']?></div>
							<div class="name"><?=$r['name']?></div>
							<div class="title"><?=$r['job']?></div>
							<div class="arrow "><i class="fa fa-chevron-right fa-lg"></i></div>
						</a>
					</div>
				</div>
				<?php endforeach ?>

			</div>
		</div>
	</div>

	<div class="clear"></div>

	<?php include "inc/footer.php";?>


	<script type="text/javascript">

		TweenMax.staggerTo(".box,#header", 0, {scale:0, autoAlpha:0}, 0);
		TweenMax.staggerTo(".box,#header", 0.7, {scale:1, autoAlpha:1}, 0.5);

	</script>
</body>
</html>