<?php
/**
 *	Whats New
 *	
 *	Laborator.co
 *	www.laborator.co 
 */
$version = kalium()->getVersion();
?>
<div class="kalium-whats-new">
	
	<?php if ( kalium()->url->get( 'welcome', true ) ) : ?>
	<div class="kalium-activated">
		<h3>
			Thanks for choosing Kalium theme!
			<br>
			<small>Here are the first steps to setup the theme:</small>
		</h3>
		
		<ol>
			<li>Install and activate required plugins by <a href="<?php echo admin_url('themes.php?page=kalium-install-plugins' ); ?>" target="_blank">clicking here</a></li>
			<?php if ( ! kalium()->theme_license->isValid() ) : ?>
			<li>Activate the theme on <a href="<?php echo admin_url( 'admin.php?page=kalium-product-registration' ); ?>" target="_blank">Product Registration</a> tab</li>
			<?php endif; ?>
			<li>Install demo content via <a href="<?php echo admin_url( 'admin.php?page=laborator-demo-content-installer' ); ?>" target="_blank">One-Click Demo Content</a> installer (requires <a href="https://documentation.laborator.co/kb/kalium/activating-the-theme/" target="_blank">theme activation</a>)</li>
			<li>Configure <a href="<?php echo admin_url( 'admin.php?page=laborator_options' ); ?>" target="_blank">theme options</a> (optional)</li>
			<li>Refer to our <a href="<?php echo admin_url( 'admin.php?page=laborator-docs' ); ?>">theme documentation</a> and learn how to setup Kalium (recommended)</li>
		</ol>
	</div>
	<?php endif; ?>
	
	<div class="kalium-version">
		<div class="kalium-version-gradient">
			<span class="numbers-<?php echo strlen( str_replace( '.', '', $version ) ); ?>"><?php echo $version; ?></span>
		</div>
		
		<div class="kalium-version-info">
			<h2>Kalium: What’s New!</h2>
			<p>
				Kalium continuously expands with new features, bug fixes and other adjustments to provide smoother experience for everyone. <br>
				Scroll down to see main features implemented in current version. For complete list of changes <a href="https://documentation.laborator.co/kb/kalium/kalium-changelog/" target="_blank">view full changelog here</a>.
			</p>
		</div>
	</div>
	
	<div class="feature-section two-col">
        <div class="col">
            <img src="<?php echo kalium()->assetsUrl( 'images/admin/whats-new/wordpress-53.jpg' ); ?>">
            <h3>WordPress 5.3 compatibility</h3>
            <p>Wordpress 5.3 offers more intuitive interactions, and improved accessibility. Creating beautiful web pages and advanced layouts has never been easier.</p>
        </div>
        <div class="col">
            <img src="<?php echo kalium()->assetsUrl( 'images/admin/whats-new/woocommerce-38.jpg' ); ?>">
            <h3>WooCommerce 3.8 compatibility</h3>
            <p>
                Added compatibility for latest stable WooCommerce version (3.8.x). Feel safe to update!
            </p>
        </div>
	</div>
	
	
	<div class="whats-new-secondary feature-section two-col">
        <div class="col">
            <img src="<?php echo kalium()->assetsUrl( 'images/admin/whats-new/php7-compatible.jpg' ); ?>">
            <h3>PHP 7.4 compatibility</h3>
            <p>
                Kalium now supports PHP version 7.4.
				<?php if ( ! function_exists( 'phpversion' ) || version_compare( phpversion(), '7.0', '<' ) ) : ?>
                    We recommend you to switch to PHP 7 and see the magic.
				<?php else : ?>
                    Its made to work with your hosting environment.
				<?php endif; ?>
            </p>
        </div>
        <div class="col">
            <img src="<?php echo kalium()->assetsUrl( 'images/admin/whats-new/remote-plugin-updates.jpg' ); ?>">
            <h3>Remote plugins and translations updates</h3>
            <p>No need to wait for theme update to get latest version of bundled plugins, you'll get plugin updates right after their release.</p>
        </div>
	</div>
	
	<a href="https://documentation.laborator.co/kb/kalium/kalium-changelog/" target="_blank" class="view-changelog">View full changelog &#65515;</a>
	
</div>