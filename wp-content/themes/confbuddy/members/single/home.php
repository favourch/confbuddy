<?php get_header( 'buddypress' ); ?>

	<div id="content">
		<div class="padder">

			<?php do_action( 'bp_before_member_home_content' ); ?>

			<div id="item-header" role="complementary">

				<?php locate_template( array( 'members/single/member-header.php' ), true ); ?>

			</div><!-- #item-header -->

			<div id="item-nav">
				<div class="item-list-tabs no-ajax" id="object-nav" role="navigation">
					<ul>

						<?php bp_get_displayed_user_nav(); ?>

						<?php do_action( 'bp_member_options_nav' ); ?>

					</ul>
				</div>
			</div><!-- #item-nav -->

			<div id="item-body">
				<?php 
				$linked_accounts = wsl_get_user_linked_account_by_user_id( bp_displayed_user_id() ); 
	foreach( $linked_accounts AS $link ){
		?>
			<h3><?php _wsl_e("User Profile", 'wordpress-social-login'); ?> <small><?php echo sprintf( _wsl__( "as provided by %s", 'wordpress-social-login'), $link->provider ); ?> </small></h3> 

			<table class="form-table"
				<tr><th><label>Profile URL 	</label></th><td><a href="<?php echo $link->profileurl; ?>"><?php echo $link->profileurl; ?></a> <br /><span class="description">URL link to profile page on the <?php echo $link->provider; ?> web site.</span></td></tr>
				<tr><th><label>Website URL 	</label></th><td><a href="<?php echo $link->websiteurl; ?>"><?php echo $link->websiteurl; ?></a> <br /><span class="description">User website, blog, web page, etc.</span></td></tr>
				<tr><th><label>Display name	</label></th><td><?php echo $link->displayname	; ?> <br /><span class="description">User dispaly Name provided by the <?php echo $link->provider; ?> or a concatenation of first and last name.</span></td></tr>
				<tr><th><label>Description	</label></th><td><?php echo $link->description	; ?>
				<tr><th><label>First name	</label></th><td><?php echo $link->firstname	; ?>
				<tr><th><label>Last name 	</label></th><td><?php echo $link->lastname 	; ?>
				<tr><th><label>Gender 		</label></th><td><?php echo $link->gender 		; ?>
				<tr><th><label>Language 	</label></th><td><?php echo $link->language 	; ?>
				<tr><th><label>Age 			</label></th><td><?php echo $link->age 			; ?>
				<tr><th><label>Birth day 	</label></th><td><?php echo $link->birthday 	; ?>
				<tr><th><label>Birth month 	</label></th><td><?php echo $link->birthmonth 	; ?>
				<tr><th><label>Birth year 	</label></th><td><?php echo $link->birthyear 	; ?>
				<tr><th><label>Country 		</label></th><td><?php echo $link->country 		; ?>
				<tr><th><label>Region 		</label></th><td><?php echo $link->region 		; ?>
				<tr><th><label>City 		</label></th><td><?php echo $link->city 		; ?>
				</tr>
			</table>
		<?php
	} 
				?>
				<?php do_action( 'bp_before_member_body' );

				if ( bp_is_user_activity() || !bp_current_component() ) :
					locate_template( array( 'members/single/activity.php'  ), true );

				 elseif ( bp_is_user_blogs() ) :
					locate_template( array( 'members/single/blogs.php'     ), true );

				elseif ( bp_is_user_friends() ) :
					locate_template( array( 'members/single/friends.php'   ), true );

				elseif ( bp_is_user_groups() ) :
					locate_template( array( 'members/single/groups.php'    ), true );

				elseif ( bp_is_user_messages() ) :
					locate_template( array( 'members/single/messages.php'  ), true );

				elseif ( bp_is_user_profile() ) :
					locate_template( array( 'members/single/profile.php'   ), true );

				elseif ( bp_is_user_forums() ) :
					locate_template( array( 'members/single/forums.php'    ), true );

				elseif ( bp_is_user_settings() ) :
					locate_template( array( 'members/single/settings.php'  ), true );

				// If nothing sticks, load a generic template
				else :
					locate_template( array( 'members/single/plugins.php'   ), true );

				endif;

				do_action( 'bp_after_member_body' ); ?>

			</div><!-- #item-body -->

			<?php do_action( 'bp_after_member_home_content' ); ?>

		</div><!-- .padder -->
	</div><!-- #content -->
<?php get_footer( 'buddypress' ); ?>
