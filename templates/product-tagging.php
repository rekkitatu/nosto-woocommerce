<?php
/**
 * Holds the html template for the product tagging.
 *
 * Used in the main plugin file.
 *
 * @package WooCommerce Nosto Tagging
 * @since   1.0.0
 * @var array $product Assoc list that includes url, product_id, name, image_url (optional), price, list_price,
 *          price_currency_code, availability, categories (optional), description (optional) and
 *          date_published (optional)
 */
?>

<?php if ( isset( $product ) && is_array( $product ) ): ?>
	<div class="nosto_product" style="display:none">
		<span class="url"><?php echo esc_html( $product['url'] ); ?></span>
		<span class="product_id"><?php echo esc_html( $product['product_id'] ); ?></span>
		<span class="name"><?php echo esc_html( $product['name'] ); ?></span>
		<?php if ( ! empty( $product['image_url'] ) ): ?>
			<span class="image_url"><?php echo esc_html( $product['image_url'] ); ?></span>
		<?php endif; ?>
		<span class="price"><?php echo esc_html( $product['price'] ); ?></span>
		<span class="list_price"><?php echo esc_html( $product['list_price'] ); ?></span>
		<span class="price_currency_code"><?php echo esc_html( $product['price_currency_code'] ); ?></span>
		<span class="availability"><?php echo esc_html( $product['availability'] ); ?></span>
		<?php foreach ( $product['categories'] as $category_path ): ?>
			<span class="category"><?php echo esc_html( $category_path ); ?></span>
		<?php endforeach; ?>
		<?php if ( ! empty( $product['description'] ) ): ?>
			<span class="description"><?php echo do_shortcode( $product['description'] ); ?></span>
		<?php endif; ?>
		<?php if ( ! empty( $product['brand'] ) ): ?>
			<span class="brand"><?php echo esc_html( $product['brand'] ); ?></span>
		<?php endif; ?>
		<?php foreach ( $product['tags1'] as $tag ): ?>
			<span class="tag1"><?php echo esc_html( $tag ); ?></span>
		<?php endforeach; ?>
		<?php foreach ( $product['tags2'] as $tag ): ?>
			<span class="tag2"><?php echo esc_html( $tag ); ?></span>
		<?php endforeach; ?>
		<?php foreach ( $product['tags3'] as $tag ): ?>
			<span class="tag3"><?php echo esc_html( $tag ); ?></span>
		<?php endforeach; ?>
		<?php if ( ! empty( $product['review_count'] ) ): ?>
			<span class="review_count"><?php echo esc_html( $product['review_count'] ); ?></span>
		<?php endif; ?>
		<?php if ( ! empty( $product['rating_value'] ) ): ?>
			<span class="rating_value"><?php echo esc_html( $product['rating_value'] ); ?></span>
		<?php endif; ?>
		<?php foreach ( $product['alternate_image_urls'] as $url ): ?>
			<span class="alternate_image_url"><?php echo esc_html( $url ); ?></span>
		<?php endforeach; ?>
		<?php if ( ! empty( $product['date_published'] ) ): ?>
			<span class="date_published"><?php echo esc_html( $product['date_published'] ); ?></span>
		<?php endif; ?>
		<?php foreach ( $product['nosto_skus'] as $sku ): ?>
			<span class="nosto_sku">
				<?php if ( ! empty( $sku['id'] ) ): ?>
					<span class="id"><?php echo esc_html( $sku['id'] ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $sku['name'] ) ): ?>
					<span class="name"><?php echo esc_html( $sku['name'] ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $sku['price'] ) ): ?>
					<span class="price"><?php echo esc_html( $sku['price'] ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $sku['list_price'] ) ): ?>
					<span class="list_price"><?php echo esc_html( $sku['list_price'] ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $sku['url'] ) ): ?>
					<span class="url"><?php echo esc_html( $sku['url'] ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $sku['image_url'] ) ): ?>
					<span class="image_url"><?php echo esc_html( $sku['image_url'] ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $sku['availability'] ) ): ?>
					<span class="availability"><?php echo esc_html( $sku['availability'] ); ?></span>
				<?php endif; ?>
				<?php if ( ! empty( $sku['custom_fields'] ) ): ?>
					<span class="custom_fields">
						<?php foreach ( $sku['custom_fields'] as $field => $value ): ?>
							<span class="<?php echo esc_attr( $field ); ?>"><?php echo esc_html( $value ); ?></span>
						<?php endforeach; ?>
					</span>
				<?php endif; ?>
			</span>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
