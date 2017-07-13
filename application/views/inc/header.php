<script type='text/javascript'>
	$(document).ready(function(){
		$('#wrap input[type="text"]').keypress(function(event){
		    var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		        var get = $('#wrap input[type="text"]').val();
				var get_encode = encodeURI(get);
				window.location = "http://ouokl.com/reportage/search/"+get_encode;
		    }
		});
	});
</script>

<div id="bg"></div>
<div id="menu">
	<a href="<?=base_url()?>about">hakkımızda</a>
	<a href="">iletişim</a>
</div>

<div id="header" >
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 col-sm-6 col-xs-6">
				
				<div class="logo pull-left">
					<a href="<?=base_url()?>">OUOKL</a>
				</div>

			</div>

			<div class="col-md-6 col-sm-6 col-xs-6">
				
				<div class="nav pull-right">
					<div class="nav-right">
						<div class="search">
							<div id="wrap">
							 	 <input id="search" name="search" type="text" placeholder="ara">
							 	 <input id="search_submit" type="submit" value="Rechercher">
							</div>
						</div>
						<div id="nav-icon1">
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
					</div>
				</div>

			</div>
			
		</div>	
	</div>		
</div>