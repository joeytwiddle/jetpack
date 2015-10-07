<?php

$activate_url = wp_nonce_url(
		Jetpack::admin_url(
			array(
				'page'   => 'jetpack',
				'action' => 'activate',
				'module' => 'manage',
			)
		),
		"jetpack_activate-manage"
	);

$section = isset( $_GET['section'] ) ? $_GET['section'] : null;

switch( $section ) {
	case 'plugins':
		$description = __( 'Manage all of your plugins in one place! It\'s the best! Just click the button below please! Only one more time!', 'jetpack' );
		$icon = "";
		break;

	case 'themes':
		$description = __( 'Manage all of your themes in one place! It\'s the best! Just click the button below please! Only one more time!', 'jetpack' );
		$icon = "";
		break;

	case 'security-settings':
		$description = __( 'Up your sites securty! It\'s the best! Just click the button below please! Only one more time!', 'jetpack' );
		$icon = "";
		break;

	case 'menus':
		$description = __( 'Manage your menu! It\'s the best! Just click the button below please! Only one more time!', 'jetpack' );
		$icon = "";
		break;
	break;
	default:
		$description = __( 'Manage your site from WordPress.com! It\'s the best! Just click the button below please! Only one more time!', 'jetpack' );
		$icon = "";
		break;
	break;
}
?>
<div class="page-content landing">
	<div class="" style="width:150px; height: 150px; border-radius: 75px; margin: 20px auto; background:#A9C4D9;">
		<?php echo $icon; ?>
	</div>
	<h1><?php echo esc_html( __( 'Enable Manage', 'jetpack' ) ); ?></h1>
	<p style="max-width: 600px; text-align:center; font-size: 22px; color:#999; margin: 20px auto;">
		<?php echo esc_html( $description ); ?>
	</p>
	<p style="text-align: center;">	<?php printf( '<a class="button-primary" style="font-size:16px; padding: 0 20px; height:40px; line-height:40px;"  href="%s">%s</a>',
			$activate_url,
			__( 'Enable Jetpack Manage', 'jetpack' )
			); ?>
	</p>
</div>
