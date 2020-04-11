<?php
/**
 *    Kalium WordPress Theme
 *
 *    Laborator.co
 *    www.laborator.co
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

class Kalium_Admin_GDPR_Notices {

	/**
	 * Current page.
	 */
	public $page = '';

	/**
	 * Admin Notices holder.
	 */
	public $admin_notices = array();

	/**
	 * Constructor
	 */
	public function __construct() {
		global $pagenow;

		// Execute only on admin side
		// Any logged user that has access to these pages can see the Data Protection Notice
		if ( ! is_admin() || ! is_user_logged_in() ) {
			return;
		}

		// Dismissed
        $dismissed = (int) get_user_meta( get_current_user_id(), 'dismissed_kalium_gdpr_notice_date', true );

		if ( $dismissed && ( time() - $dismissed ) < MONTH_IN_SECONDS * 3 ) {
		    return;
        }

		// Current page
		$this->page = kalium()->get( 'page' );

		if ( 'update-core.php' === $pagenow ) {
			$this->page = 'update-core';
		}

		if ( ! empty( $this->page ) ) {
			$message = $this->get_privacy_message_for_page( $this->page );

			if ( $message ) {
				$this->admin_notices[] = $message;
				add_action( 'admin_notices', array( $this, 'display_admin_notices' ) );
			}
		}

		// Dismiss AJAX Action
		add_action( 'wp_ajax_kalium_data_protection_notice_dismiss', array( $this, 'dismiss_notice' ) );
	}

	/**
	 * Message notices for pages where data is sent or is being sent.
	 */
	public function get_privacy_message_for_page( $page ) {
		$message = '';

		$data_license_key   = kalium()->theme_license->isValid() ? kalium()->theme_license->getLicenseKey() : sprintf( 'Theme not activated (<a href="%s">activate theme</a>)', admin_url( 'admin.php?page=kalium-product-registration' ) );
		$data_theme_version = kalium()->getVersion();

		switch ( $page ) {
			// Core Update Page
			case 'update-core':
				$message = sprintf( 'Following data is sent to Laborator.co servers located in France to retrieve latest version of the theme: %s', $this->data_entries_table(
					array(
						'License Key'   => $data_license_key,
						'Theme Version' => $data_theme_version,
					)
				) );
				break;

			// Product Registration page
			case 'kalium-product-registration':
				if ( false === kalium()->theme_license->isValid() ) {
					$message = sprintf( 'By clicking <strong>Activate Product</strong> button the following data will be sent to Laborator.co servers located in France: %s', $this->data_entries_table( array(
						'Site URL'      => home_url(),
						'Referring URL' => admin_url(),
						'Theme Version' => $data_theme_version,
					) ) );
				} else if ( 'validate-theme-activation' === kalium()->get( 'action' ) ) {
					$message = sprintf( 'Following data is sent to Laborator.co servers located in France: %s', $this->data_entries_table(
						array(
							'License Key' => $data_license_key,
						)
					) );
				}
				break;

			// Bundled Plugins page
			case 'kalium-install-plugins':
			    if ( ! isset( $_GET['plugin'] ) ) {
				    $message = sprintf( 'Following data is sent to Laborator.co servers located in France to retrieve latest plugin versions: %s', $this->data_entries_table(
					    array(
						    'License Key'   => $data_license_key,
						    'Theme Version' => $data_theme_version,
					    )
				    ) );
			    }
				break;
		}

		return $message;
	}

	/**
	 * Data entries.
	 */
	public function data_entries_table( $entries = array() ) {
		ob_start();
		?>
        <table class="table data-entries-table" cellpadding="0" cellspacing="0">
            <tbody>
			<?php
			foreach ( $entries as $type => $value ) {
				?>
                <tr>
                    <th><?php echo esc_html( $type ); ?>:</th>
                    <td><?php echo wp_kses_post( $value ); ?></td>
                </tr>
				<?php
			}
			?>
            </tbody>
        </table>
		<?php

		return ob_get_clean();
	}

	/**
	 * Display admin notices regarding GDPR.
	 */
	public function display_admin_notices() {
		$this->notice_wrapper_start();

		foreach ( $this->admin_notices as $admin_notice ) {
			echo wpautop( wp_kses_post( $admin_notice ) );
		}

		$this->notice_wrapper_end();
	}

	/**
	 * Notice wrapper start.
	 */
	public function notice_wrapper_start() {
		?>
        <div class="laborator-notice notice notice-info is-dismissible" id="kalium-gdpr-notice-container">
        <h4>Data Protection Notice</h4>
		<?php
	}

	/**
	 * Notice wrapper end.
	 */
	public function notice_wrapper_end() {
		?>
        <p><a href="https://laborator.co" rel="noopener" target="_blank">Laborator</a> will never collect any information of your site unless stated.</p>
        </div>
		<?php
	}

	/**
	 * Dismiss notice action.
	 */
    public function dismiss_notice() {
        update_user_meta( get_current_user_id(), 'dismissed_kalium_gdpr_notice_date', time() );
        die( '1' );
    }
}
