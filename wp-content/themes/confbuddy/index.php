<?php get_header(); ?>
<form action="<?php echo bp_search_form_action(); ?>" method="post" id="search-form">
	<label for="search-terms" class="accessibly-hidden"><?php _e( 'Search for:', 'buddypress' ); ?></label>
	<input type="text" id="search-terms" name="search-terms" value="<?php echo isset( $_REQUEST['s'] ) ? esc_attr( $_REQUEST['s'] ) : ''; ?>" />

	<?php echo bp_search_form_type_select(); ?>

	<input type="submit" name="search-submit" id="search-submit" value="<?php _e( 'Search', 'buddypress' ); ?>" />

	<?php wp_nonce_field( 'bp_search_form' ); ?>

</form><!-- #search-form -->
<?php if ( bp_has_groups() ) : ?>  
  
   <ul id="groups-list" class="item-list">  
   <?php while ( bp_groups() ) : bp_the_group(); ?>  
  
       <li>  
           <div class="item-avatar">  
               <a href="<?php bp_group_permalink() ?>"><?php bp_group_avatar( 'type=thumb&width=50&height=50' ) ?></a>  
           </div>  
  
           <div class="item">  
               <div class="item-title"><a href="<?php bp_group_permalink() ?>"><?php bp_group_name() ?></a></div>  
               <div class="item-meta"><span class="activity"><?php printf( __( 'active %s ago', 'buddypress' ), bp_get_group_last_active() ) ?></span></div>  
  
               <div class="item-desc"><?php bp_group_description_excerpt() ?></div>  
  
               <?php do_action( 'bp_directory_groups_item' ) ?>  
           </div>  
  
           <div class="action">  
               <?php bp_group_join_button() ?>  
  
               <div class="meta">  
                   <?php bp_group_type() ?> / <?php bp_group_member_count() ?>  
               </div>  
  
               <?php do_action( 'bp_directory_groups_actions' ) ?>  
           </div>  
  
           <div class="clear"></div>  
       </li>  
  
   <?php endwhile; ?>  
   </ul>
<?php endif; ?>  
<?php get_footer(); ?>
