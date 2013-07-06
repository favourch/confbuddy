<?php get_header(); ?>

	<?php if ( bp_has_groups() ) : while ( bp_groups() ) : bp_the_group(); ?>
		<a href="<?php bp_group_permalink(); ?>" title="<?php bp_group_name(); ?>"><?php bp_group_avatar(); ?></a>
		<h2><a href="<?php bp_group_permalink(); ?>" title="<?php bp_group_name(); ?>"><?php bp_group_name(); ?></a></h2>
		<p><?php bp_group_description(); ?></p>
		<?php do_action( 'bp_group_header_actions' ); ?>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php if ( bp_group_has_members( 'exclude_admins_mods=0' ) ) : ?>
		<h6><?php bp_members_pagination_count(); ?></h6>
			<?php bp_members_pagination_links(); ?>

		<ul id="member-list" role="main">

			<?php while ( bp_group_members() ) : bp_group_the_member(); ?>

				<li>
					<a href="<?php bp_group_member_domain(); ?>">

						<?php bp_group_member_avatar_thumb(); ?>

					</a>

					<h5><?php bp_group_member_link(); ?></h5>
					<span class="activity"><?php bp_group_member_joined_since(); ?></span>

					<?php do_action( 'bp_group_members_list_item' ); ?>

					<?php if ( bp_is_active( 'friends' ) ) : ?>

						<div class="action">

							<?php bp_add_friend_button( bp_get_group_member_id(), bp_get_group_member_is_friend() ); ?>

							<?php do_action( 'bp_group_members_list_item_action' ); ?>

						</div>

					<?php endif; ?>
				</li>

			<?php endwhile; ?>

		</ul>
		<h6><?php bp_members_pagination_count(); ?></h6>
		<?php bp_members_pagination_links(); ?>

	<?php else: ?>

		<div id="message" class="info">
			<p><?php _e( 'This group has no members.', 'buddypress' ); ?></p>
		</div>

	<?php endif; ?>
<?php get_footer(); ?>