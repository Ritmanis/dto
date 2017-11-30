<?php
/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
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
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; ?>
<h2><?php printf( __( 'Order #%s', 'woocommerce' ), $order->get_order_number() ); ?></h2>

<table class="td" cellspacing="0" cellpadding="0" border="0">
    <thead>
        <tr>
            <th class="td" scope="col"><?php _e( 'Product', 'woocommerce' ); ?></th>
            <th class="td" scope="col"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
            <th class="td td-price" scope="col"><?php _e( 'Price', 'woocommerce' ); ?></th>
        </tr>
    </thead>

    <tbody>
        <?php echo $order->email_order_items_table(); ?>
    </tbody>

    <tfoot>
        <?php if ( $totals = $order->get_order_item_totals() ) {
            foreach ( $totals as $total ) { ?>
                <tr>
                    <th class="td" scope="row" colspan="2"><?php echo $total['label']; ?></th>
                    <td class="td td-price"><?php echo $total['value']; ?></td>
                </tr>
            <?php }
        } ?>
    </tfoot>
</table>

<?php do_action( 'woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email ); ?>