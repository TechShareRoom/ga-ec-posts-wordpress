# ga-ec-posts-wordpress
Plugin para implementar impresiones y clics del comercio avanzado de Analytics en los posts de WordPress


Por ahora es necesario insertar en los enlaces del archivo donde se llama al loop de los posts, el siguiente evento onclick:

onclick="productObject('<?php the_title(); ?>','<?php the_ID(); ?>','<?php echo get_the_author_meta('ID'); ?>','<?php  $cat = get_the_category(); echo $cat[0]->cat_name; ?>','<?php $posttags = get_the_tags();
					if ($posttags) {
					  foreach($posttags as $tag) {
						echo $tag->name . ', '; 
					  }
					} ?>','<?php wp_title(); ?>','<?php the_permalink(); ?>')"
          
El fichero cambia según el tema, en el tema flymag de WordPress por ejemplo, es el content.php
