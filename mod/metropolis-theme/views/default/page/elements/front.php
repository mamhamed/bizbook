<?php
/**
 * juipo front page layout
 * 
 * Juipo Metropolis Theme
 *
 * @author Damir Gasparlin - Juipo.com
 * @copyright Copyright (c) 2013, Juipo.com
 * @link http://juipo.com/
 */
$plugin = elgg_get_plugin_from_id('metropolis-theme');

?>

<div class="elgg-index">
    <div class="inner">
        <?php        
        $params = array(
            'text' => elgg_echo('register'),
            'href' => 'register/',
            'class' => 'elgg-button btn-large btn-primary',
			'span_after' => true,
		    'icon_class_after' => 'elgg-icon-sync-white sync-big',
		    'link_icon_after' => 'elgg-icon-icon-big-swapright onright',
            'is_action' => true,
            'is_trusted' => true,
        );
		$loginparams = array(
            'text' => elgg_echo('login'),
            'href' => 'login/',
            'class' => 'elgg-button btn-large btn-primary',
			'span_after' => true,
		    'icon_class_after' => 'elgg-icon-sync-white sync-big',
		    'link_icon_after' => 'elgg-icon-icon-big-swapright onright',
            'is_action' => true,
            'is_trusted' => true,
        );
         if ($plugin->teaser_title != '') {           
        $title = $plugin->teaser_title;
		} else {
        $title = elgg_echo('juipo:title:main');
		}
		if ($plugin->teaser_text != '') { 
        $content = $plugin->teaser_text;
		} else {
        $content = elgg_echo("juipo:teaser:main");
		}
		if (elgg_get_config('allow_registration')) {
        $content .= '<div class="button">' . elgg_view('output/url', $params) . '</div>';
        } else {
		$content .= '<div class="button">' . elgg_view('output/url', $loginparams) . '</div>';
		}
        echo elgg_view_module('index', $title, $content);        
        ?>
    </div>
</div> <!-- /elgg-index -->
    
<div class="fancyline"></div>

<div class="elgg-index">    
	<div class="elgg-container">
		<?php 
		// Left box
        if ($plugin->teaserbox1 != '') { 		
        $title = $plugin->teaserbox1;
		} else {
        $title = elgg_echo('juipo:title:one');
		}
		if ($plugin->teaserbox1_text != '') { 
        $content = $plugin->teaserbox1_text;
		} else {
        $content = elgg_echo("juipo:teaser:one");
        }
        echo elgg_view_module('aside homebox homeboxone', $title, $content);
        if ($plugin->teaserbox1_color != '') { 
        echo '<style>.homeboxone { background-color:'. $plugin->teaserbox1_color. ' !important;}</style>';
		}
		// Middle box
		if ($plugin->teaserbox2 != '') { 
        $title = $plugin->teaserbox2;
		} else {
        $title = elgg_echo('juipo:title:two');
		}
		if ($plugin->teaserbox2_text != '') { 
        $content = $plugin->teaserbox2_text;
		} else {
        $content = elgg_echo("juipo:teaser:two");
        }
        echo elgg_view_module('aside homebox homeboxtwo', $title, $content);
        if ($plugin->teaserbox2_color != '') { 
        echo '<style>.homeboxtwo { background-color:'. $plugin->teaserbox2_color. ' !important;}</style>';
		}
		//Right box
		if ($plugin->teaserbox3 != '') { 
        $title = $plugin->teaserbox3;
		} else {
        $title = elgg_echo('juipo:title:three');
		}
		if ($plugin->teaserbox3_text != '') { 
        $content = $plugin->teaserbox3_text;
		} else {
        $content = elgg_echo("juipo:teaser:three");
        }
        echo elgg_view_module('aside homebox homeboxthree', $title, $content);  
        if ($plugin->teaserbox3_color != '') { 
        echo '<style>.homeboxthree { background-color:'. $plugin->teaserbox3_color. ' !important;}</style>';
		}		
        ?>
    </div>
	<div class="clearfloat"></div>
</div>