![Visitor Badge](https://visitor-badge.laobi.icu/badge?page_id=techshareroom.ga-ec-posts-wordpress)

<a href="https://github.com/techshareroom/ga-ec-posts-wordpress/blob/master/READMEesES.md" target="_blank"><img src="https://raw.githubusercontent.com/techshareroom/ga-ec-posts-wordpress/master/images/languages/spain.png" width="80" img align="right"></a>
<a href="https://github.com/techshareroom/ga-ec-posts-wordpress" target="_blank"><img src="https://raw.githubusercontent.com/techshareroom/ga-ec-posts-wordpress/master/images/languages/united-kingdom.png" width="80" style="vertical-align:middle;margin:0px 50px" img align="right"></a>
https://github.com/TechShareRoom/ga-ec-posts-wordpress/blob/master/images/ga-ec-posts-wordpress.png
<img src="https://raw.githubusercontent.com/techshareroom/ga-ec-posts-wordpress/master/images/ga-ec-posts-wordpress.png" width="80"> ga-ec-posts-wordpress
=============================================

Plugin para implementar impresiones y clics del comercio avanzado de Analytics en los posts de WordPress

Forkeado de [aquí](https://github.com/queseo/ga-ec-posts-wordpress)

<a href="https://discord.gg/wfm7Jrj">
<img src="https://discordapp.com/api/guilds/750051000664064141/widget.png?style=banner2" alt="Discord Banner 2"/>
</a>

Por ahora es necesario insertar en los enlaces del archivo donde se llama al loop de los posts, el siguiente evento onclick:
```
onclick="productObject('<?php the_title(); ?>','<?php the_ID(); ?>','<?php echo get_the_author_meta('ID'); ?>','<?php  $cat = get_the_category(); echo $cat[0]->cat_name; ?>','<?php $posttags = get_the_tags();
					if ($posttags) {i
					  foreach($posttags as $tag) {
						echo $tag->name . ', '; 
					  }
					} ?>','<?php wp_title(); ?>','<?php the_permalink(); ?>')"
```

El fichero cambia según el tema, en el tema flymag de WordPress por ejemplo, es el content.php

## REQUISITOS

- Necesitas tener instalado Google Analytics en WordPress para que funcione el plugin
- Necesitas tener activada la parte de Comercio Avanzado de Google Analytics
	- Para activar esto accede a la **Administrar** de Google Analytics, en la columna de **Vistas** en **Configuración del Comercio Electrónico** activar las dos opciones y guardar.
- Insertar el código del *onclick* arriba dado en los enlaces a los artículos

# PARA HACER

Pendiente

# REALIZADO

Pendiente

# Contribuidores

* [queseo](https://github.com/queseo)