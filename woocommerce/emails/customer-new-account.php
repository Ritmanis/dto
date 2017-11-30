<?php
/**
 * Customer new account email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-new-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit;

do_action( 'woocommerce_email_header', $email_heading, $email ); ?>
    <p><?php printf( __( 'Thanks for creating an account on %s. Your username is <strong>%s</strong>', 'woocommerce' ), esc_html( $blogname ), esc_html( $user_login ) ); ?></p>

    <p>
        <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" target="_blank">
            <?php _e( 'You can access your account area to view your orders and change your password here: %s.', 'woocommerce' ); ?>
        </a>
    </p>
<?php do_action( 'woocommerce_email_footer', $email );