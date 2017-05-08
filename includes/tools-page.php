<div class="metabox-holder">
    <div class="postbox">
        <h3><?php _e( 'EDD Dummy Data Generator', 'edd-seeder' ); ?></h3>

        <div class="inside">
            <p><?php _e( 'Generate dummy data for test purpose', 'edd-seeder' ); ?></p>
            <p><?php _e( '<strong>WARNING!</strong> This will delete ALL existing edd records.', 'edd-seeder' ); ?></p>

            <form method="post" action="<?php echo admin_url( 'admin.php?page=edd-seeder' ); ?>">

                <p>
                    <label style="width: 140px;display: inline-block;"><?php _e( 'Number of Customers', 'edd-seeder' ); ?></label>
                    <input type="number" name="edd_seeder_customer_number" value="20">
                </p>

                <p>
                    <label style="width: 140px;display: inline-block;"><?php _e( 'Number of Products', 'edd-seeder' ); ?></label>
                    <input type="number" name="edd_seeder_products_number" value="20">
                </p>

                <p>
                    <label style="width: 140px;display: inline-block;"><?php _e( 'Number of Orders', 'edd-seeder' ); ?></label>
                    <input type="number" name="edd_seeder_order_number" value="20">
                </p>

				<?php wp_nonce_field( 'edd-seeder-data-nonce' ); ?>
				<?php submit_button( __( 'Generate Dummy Content', 'edd-seeder' ), 'primary', 'edd_generate_dummy_data' ); ?>
            </form>
        </div><!-- .inside -->
    </div><!-- .postbox -->
</div>
