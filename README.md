![Visitor Badge](https://visitor-badge.laobi.icu/badge?page_id=techshareroom.ga-ec-posts-wordpress)

<a href="https://github.com/techshareroom/ga-ec-posts-wordpress/blob/master/READMEesES.md" target="_blank"><img src="https://raw.githubusercontent.com/techshareroom/ga-ec-posts-wordpress/master/images/languages/spain.png" width="80" img align="right"></a>
<a href="https://github.com/techshareroom/ga-ec-posts-wordpress" target="_blank"><img src="https://raw.githubusercontent.com/techshareroom/ga-ec-posts-wordpress/master/images/languages/united-kingdom.png" width="80" style="vertical-align:middle;margin:0px 50px" img align="right"></a>

<img src="https://raw.githubusercontent.com/techshareroom/ga-ec-posts-wordpress/master/images/ga-ec-posts-wordpress.png" width="80"> ga-ec-posts-wordpress
=============================================

Plugin to implement impressions and clicks of advanced Analytics commerce in WordPress posts

Forked from [here](https://github.com/queseo/ga-ec-posts-wordpress)

<a href="https://discord.gg/wfm7Jrj">
<img src="https://discordapp.com/api/guilds/750051000664064141/widget.png?style=banner2" alt="Discord Banner 2"/>
</a>

For now, it's necessary to insert the following onclick event in the links of the file where the posts loop is called:
```
onclick="productObject('<?php the_title(); ?>','<?php the_ID(); ?>','<?php echo get_the_author_meta('ID'); ?>','<?php  $cat = get_the_category(); echo $cat[0]->cat_name; ?>','<?php $posttags = get_the_tags();
					if ($posttags) {i
					  foreach($posttags as $tag) {
						echo $tag->name . ', '; 
					  }
					} ?>','<?php wp_title(); ?>','<?php the_permalink(); ?>')"
```

The file changes depending on the theme, in the flymag WordPress theme for example, it is the content.php

## REQUISITOS

- You need to have Google Analytics installed in WordPress for the plugin to work
- You need to have the Advanced Trade part of Google Analytics activated
	- To activate this, access the **Manage** of Google Analytics, in the **Views** column in **Electronic Commerce Configuration** activate the two options and save.
- Insert the code of the *onclick* above given in the links to the articles

# TO DO

Pendant

# DONE

Pendant

# Contributors

* [queseo](https://github.com/queseo)