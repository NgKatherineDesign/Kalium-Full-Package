<?php
/**
 *	Kalium WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

global $portfolio_args;

$portfolio_category_filter              = $portfolio_args['category_filter'];
$portfolio_filter_enable_subcategories  = $portfolio_args['category_filter_subs'];

$show_title_description                 = $portfolio_args['show_title'];
$portfolio_title                        = $portfolio_args['title'];
$portfolio_description                  = $portfolio_args['description'];

// Filter portfolio items by slug
$filter_category_slug = $portfolio_args['filter_category_slug'];
$has_category_filter = 'default' !== $filter_category_slug && '' !== $filter_category_slug;
$filter_hide_all_link = $portfolio_args['filter_hide_all_link'] && $has_category_filter;

if ( ! $show_title_description && ! ( $portfolio_category_filter && $portfolio_args['available_terms'] ) ) {
	return;
}

if ( preg_match( "/\[vc_row.*?\]/", $portfolio_description ) && ! defined( 'HEADING_TITLE_DISPLAYED' ) ) {
	?>
	<div class="portfolio-title-vc-content">
		<?php echo do_shortcode( $portfolio_description ); ?>
	</div>
	<?php
		
	$portfolio_description = '';
}

// Title classes
$title_classes = array( 'portfolio-title-holder' );

if ( $portfolio_args['fullwidth'] && $portfolio_args['fullwidth_title_container'] ) {
	$title_classes[] = 'portfolio-title-holder--title-has-container';
}

// Update category descriptions
$update_category_descriptions = apply_filters( 'kalium_portfolio_heading_update_category_descriptions', true );
$description_main = $portfolio_args['description_main'];

if ( $update_category_descriptions ) {
	$title_classes[] = 'portfolio-title-holder--update-category-descriptions';
}
?>
<div <?php kalium_class_attr( $title_classes ); ?>>
	<?php if ( $show_title_description && ( $portfolio_title || $portfolio_description ) ) : ?>
	<div class="pt-column pt-column-title">
		<div class="section-title no-bottom-margin">
			<?php 
				if ( $portfolio_title ) : 
					$headline_tag = $portfolio_args['vc_mode'] ? 'h2' : 'h1';
					
					if ( $portfolio_args['vc_mode'] && ! empty( $portfolio_args['vc_attributes']['title_tag'] ) ) {
						$headline_tag = $portfolio_args['vc_attributes']['title_tag'];
					}
			 ?>
			<<?php echo $headline_tag; ?>><?php echo esc_html( $portfolio_title ); ?></<?php echo $headline_tag; ?>>
			<?php endif; ?>
			<div class="term-description"><?php echo laborator_esc_script( apply_filters( 'the_content', $portfolio_description ) ); ?></div>
		</div>
	</div>
	<?php endif; ?>

	<?php if ( $portfolio_category_filter && ! empty( $portfolio_args['available_terms'] ) ) :  ?>
	<?php
	// When Category Term is Active and is not parent
	$has_subcategory_active = false;
	
	if ( $portfolio_args['category'] && $portfolio_args['category_filter_subs'] ) {
		foreach ( $portfolio_args['available_terms'] as $term ) {
			if ( $term->parent != 0 ) {
				if ( $portfolio_args['category'] == $term->slug ) {
					$has_subcategory_active = kalium_portfolio_set_active_term_parents( $term, $portfolio_args['available_terms'] );
				}
			}
		}
	}
	?>
	<div class="pt-column pt-filters">
		<div class="product-filter<?php when_match( $has_subcategory_active, 'subcategory-active' ); ?>">
			<ul class="portfolio-root-categories">
                <?php if ( ! $filter_hide_all_link ) : ?>
				<li class="portfolio-category-all<?php when_match( $portfolio_args['category'] == '', 'active' ); ?>">
					<a href="<?php echo esc_url( $portfolio_args['url'] ); ?>" data-term="*" <?php if ( $update_category_descriptions ) : ?> data-term-description="<?php echo esc_attr( apply_filters( 'the_content', $description_main ) ); ?>"<?php endif; ?>><?php _e( 'All', 'kalium' ); ?></a>
				</li>
                <?php endif; ?>

				<?php
					foreach ( $portfolio_args['available_terms'] as $term ) :
					
						if ( $term->parent != 0 ) {
							continue;
						}

						$term_description = nl2br( trim( term_description( $term ) ) );
						$term_link = kalium_portfolio_get_category_link( $term );
						$is_active = $portfolio_args['category'] == $term->slug;

						?>
						<li class="portfolio-category-item portfolio-category-<?php echo $term->slug; when_match( $is_active, 'active' ); echo $has_category_filter && $term->slug === $filter_category_slug ? ' current' : ''; ?>">
							<a href="<?php echo esc_url( $term_link ); ?>" data-term="<?php echo esc_attr( $term->slug ); ?>" <?php if ( $update_category_descriptions ) : ?> data-term-description="<?php echo esc_attr( $term_description ); ?>"<?php endif; ?>><?php echo esc_html( $term->name ); ?></a>
						</li>
						<?php
							
					endforeach;
					
				?>
			</ul>
			
			<?php
			if ( $portfolio_filter_enable_subcategories ) {
				
				foreach ( $portfolio_args['available_terms'] as $term ) {
					kalium_portfolio_get_terms_by_parent_id( $term, array( 
						'available_terms'  => $portfolio_args['available_terms'], 
						'current_category' => $portfolio_args['category'],
					) );
				}
			}
			?>
		</div>
	</div>
	<?php endif; ?>
</div>