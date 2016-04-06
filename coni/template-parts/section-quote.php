<?php
$coni_enable_section = get_theme_mod( 'coni_quote_enable', true );
if ( $coni_enable_section || is_customize_preview() ) :
?>
<div id="quote-section" class="quote-section" <?php if( false == $coni_enable_section ): echo 'style="display: none;"'; endif ?>>
    <div class="quote-wrap wow fadeInLeft" data-wow-delay="600ms">
        <blockquote cite="<?php echo esc_attr( get_theme_mod( 'coni_quote_cite', 'John Smith' ) ); ?>">
        <?php echo esc_html( get_theme_mod( 'coni_quote', '"We are an agency passionate about what we do, providing a great service to small businesses. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus."' ) ); ?>
        </blockquote>
        <?php
        $wp_kses_args = array(
		    'a' => array(
		        'href' => array(),
		        'title' => array()
		    ),
		    'br' => array(),
		    'em' => array(),
		    'strong' => array(),
		    'span' => array(),
		);
		$quote_cite = wp_kses( get_theme_mod( 'coni_quote_cite', __( 'John Smith <span>CEO, Coni Inc.</span>', 'coni' ) ), $wp_kses_args );
        ?>
        <p class="quote-cite"><?php echo $quote_cite; ?></p>
        
    </div>
    <?php
    $bck_color = get_theme_mod( 'coni_quote_bck_color', '#50e3c2' );
    ?>
    
</div><!-- quote-section -->
<?php endif ?>