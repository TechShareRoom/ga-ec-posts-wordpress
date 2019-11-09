<?php

/* PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS PRUEBAS 
 * Agregar impresiones al footer cuando se imprimen artículos
 */

// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
add_action( 'wp_footer', 'qso_Impressions_Script' );
 
// Add a new top level menu link to the ACP
function qso_Impressions_Script()
{

?>
	<script>
		<?php $contador = 1;?>
			dataLayer.push({
			  'ecommerce': {
				'currencyCode': 'EUR',                       // Local currency is optional.
				'impressions': [
					<?php while ( have_posts() ) : the_post();?>
				 {
				   'name': '<?php the_title();?>',       // Name or ID is required.
				   'id': '<?php the_ID();?>',
				   'price': '1',
				   'brand': '<?php echo get_the_author_meta('ID')?>',
				   'category': '<?php $cat = get_the_category(); echo $cat[0]->cat_name;?>',
				   'variant': '<?php 
						$posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) {
							echo $tag->name . ', '; 
						  }
						}
						?>',
				   'list': '<?php wp_title();?>',
				   'position': <?php  echo $contador; $contador++; ?>
				 },
					<?php endwhile;?>
				]
			  }
			});
			

	/**
	 * Cuando el usuario realiza clic en el enlace de un artículo se realiza la llamada a esta función
	 * para realizar seguimiento del artículo clicado y enviar a Google Analytics
	 **/

	function productObject(titulo, id, marca, categoria, variante, lista, enlace) {
		
	  dataLayer.push({
	    'event': 'productClick',
	    'ecommerce': {
	      'click': {
	        'actionField': {'list': lista},      // Optional list property.
	        'products': [{
	          'name': titulo,                      // Name or ID is required.
	          'id': id,
	          'price': '1',
	          'brand': marca,
	          'category': categoria,
	          'variant': variante
	         }]
	       }
	     },
	     'eventCallback': function() {
	       document.location (enlace)
	     }
	  });
	}

/*var elts = document.getElementsByTagName('a');
var show = function() { productObject('<?php // the_title();?>', '<?php //the_ID();?>', '<?php// echo get_the_author_meta('ID')?>', '<?php //$cat = get_the_category(); echo $cat[0]->cat_name;?>', '<?php// wp_title();?>', '<?php //the_permalink();?>'); }

		for (var i = elts.length - 1; i >= 0; --i) {
    elts[i].onclick = show ;
}*/
				

		</script> <?php
}