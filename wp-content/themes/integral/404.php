<?php
/**
 * 404 Page for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>

<?php get_header(); ?>

<div class="spacer"></div>

<div class="container">

	<div class="row">

		<div class="<?php if ( is_active_sidebar( 'rightbar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?>">

			<div class="content">
			
                <h2><?php esc_html_e('Erro 404 : Página não encontrada!', 'integral'); ?></h2>

                <p><?php esc_html_e('A página que você está tentando acessar não foi encontrada.', 'integral'); ?></p>

			</div>

		</div>

		<?php get_sidebar(); ?>

	</div>
	
</div>

<?php get_footer(); ?>






