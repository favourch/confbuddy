<?php get_header(); ?>
<?php // get_sidebar(); ?>

<?php if ( bp_has_groups() ) : ?>  
    <?php while ( bp_groups() ) : bp_the_group(); ?>
        <div id="groups-list" class="row">
            <div class="large-2 columns">
                <a href="<?php bp_group_permalink() ?>"><?php bp_group_avatar( 'type=thumb&width=400&height=400&class=marT10' ) ?></a>
            </div>
            <div class="large-10 columns">
                <h2><a href="<?php bp_group_permalink() ?>"><?php bp_group_name() ?></a></h2>
                <p><?php bp_group_description_excerpt() ?></p>
                <h6><?php bp_group_member_count() ?></h6>
                <?php // do_action( 'bp_directory_groups_item' ) ?>
                <?php // do_action( 'bp_directory_groups_actions' ) ?>
                <?php bp_group_join_button() ?>   
            </div> 
        </div>
        <div class="row"><div class="large-12 columns"><div class="borB1S marB15 padB25"></div></div></div>
    <?php endwhile; ?>  
<?php endif; ?>  
<?php get_footer(); ?>
