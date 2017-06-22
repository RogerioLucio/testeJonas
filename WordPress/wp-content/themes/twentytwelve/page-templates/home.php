<?php
/**
 * Template Name: Home - Teste
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
//get_header();
?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<style type="text/css">
	
	.header{
		background-color: #f47d31;
		padding: 10px;
		color: 	white;
	}

	.menu{
		background:url(wp-content/uploads/home.png) center no-repeat;
	    background-repeat: no-repeat;
	    background-size: cover	;
	    background-position: center top;
	    width: 100%;
	    height: 100%;
	    opacity: 1;
	    visibility: inherit;
	    z-index: 20;
	    position: 	relative;	
	}
	.header2{
		background-color: #f47d31;
		padding: 10px;
		color: 	white;
	}
	.header2 ul li {
		    display: inline-block;
    padding: 20px;
    color: white !important;	

	}

	.header2 a {
		  
    color: white !important;	
		
	}

	.logo{

	}




</style>


<?php 
/*$args = array(
           'menu' => 'Menu Topo',
           'container' => 'nav',
           'container_class' => 'navbar-collapse collapse',
           'container_id'    => 'pm-main-navigation',
           'menu_class'      => 'header2'
         );
// para lista completa de $args http://codex.wordpress.org/Function_Reference/wp_nav_menu*/
?>
<section id="topo">	<!--<?php #wp_nav_menu($args); ?>-->
	<div class="row header text-center" >	
			<div class="col-md-2 col-md-offset-2 col-xs-12">Peça Seu cartão de Cliente	</div>
			<div class="col-md-2 col-xs-12">Solicite a Segunda via do Boleto	</div>
			<div class="col-md-2 col-xs-12">Encontre uma Loja	</div>
			<div class="col-md-2 col-xs-12">Assine a newsletter	</div>
			<div class="col-md-2 col-xs-12"><input class="form-control" placeholder="Busca" type="text" name=""></div>
		</div>
</section>

<section class="menu">	
		<div class="logo"> 


		</div>	
</section>
<div class="container-fluid">	
		<div class="row">	
				<div class="col-md-4">	TESTE</div>
				<div class="col-md-6">	
						<div class="row">	
								<div class="col-md-4">	img</div>
								<div class="col-md-4">img	</div>
								<div class="col-md-4">	img</div>
								<div class="col-md-4">img	</div>

						</div>	
				</div>


		</div>	
</div>	