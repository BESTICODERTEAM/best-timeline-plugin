<?php


/* Create Shortcode */
function best_timeline_fun() 
{
	// milestone
	$args = array(
        'posts_per_page' => -1,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'ASC',
        'post_type' => 'milestone', /* your post type name */
        'post_status' => 'publish',
  	);
 	$my_posts = get_posts($args);
?>



<section class="h--timeline js-h--timeline">
<div class="h--timeline-container">
  <div class="h--timeline-dates">
	<div class="h--timeline-line">
	  <ol>
	  	<?php
	  	$i = 0;
	  	foreach ($my_posts as $yearkey => $yearval) 
	  	{
	  		$i++;
	  		if ($yearkey == 0) 
	  		{ 
	  		?>
	  			<li><a href="#0" data-date="<?=  $i; ?>/<?=  $i; ?>/<?php echo $yearval->post_title; ?>" class="h--timeline-date h--timeline-date--selected"><?php echo $yearval->post_title; ?></a></li>
	  		<?php
	  		} 
	  		else 
	  		{?>
	  			<li><a href="#0" data-date="<?=  $i; ?>/<?=  $i; ?>/<?php echo $yearval->post_title; ?>" class="h--timeline-date"><?php echo $yearval->post_title; ?></a></li>
	  		<?php	
	  		}
	  	}
	  	?>
	  </ol>

	  <span class="h--timeline-filling-line" aria-hidden="true"></span>
	</div> <!-- .h--timeline-line -->
  </div> <!-- .h--timeline-dates -->

  <nav class="h--timeline-navigation-container">
	  <ul>
		<li><a href="#0" class="text-replace h--timeline-navigation h--timeline-navigation--prev h--timeline-navigation--inactive">Prev</a></li>
		<li><a href="#0" class="text-replace h--timeline-navigation h--timeline-navigation--next">Next</a></li>
	  </ul>
  </nav>
</div> <!-- .h--timeline-container -->

<div class="h--timeline-events">
  <ol>

  	<?php

  	foreach ($my_posts as $key => $val) 
  	{
  		if ($yearkey == 0) 
  		{ 
  		?>
  			<li class="h--timeline-event h--timeline-event--selected text-component">
			  <div class="h--timeline-event-content container">
				
				<p class="h--timeline-event-description">
				  <?php echo $val->post_content; ?>
				</p>
			  </div>
			</li>
  		<?php
  		} 
  		else 
  		{?>
  			<li class="h--timeline-event text-component">
			  <div class="h--timeline-event-content container">
				
				<p class="h--timeline-event-description">
				  <?php echo $val->post_content; ?>
				</p>
			  </div>
			</li>
  		<?php	
  		}
  	}

  	?>



	
  </ol>
</div> <!-- .h--timeline-events -->
</section>
<?php

}

add_shortcode( 'best_timeline_shortcode', 'best_timeline_fun' );