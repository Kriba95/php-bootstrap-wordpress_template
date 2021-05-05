<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer class="footer-container white-text-container">
    <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <h4>VaTa Järjestöpalvelu</h4>
                    <p>Järjestöpalvelu Oy ILKANTIE 4, 00400 HELSINKI asiakaspalvelu (at) jarjestopalvelu.fi Verkkolaskuosoite/OVT-tunnus: 003727219221 Vata Järjestöpalvelun y-tunnus: 2721922-1 Operaattori: OpusCapita Solutions Oy (E204503) Välittäjän tunnus: 003702015572</p>
                </div>

                
                   
                </div>

              
        </div>
    </div>
    <div>
        <p class="text-center"><small>© VaTa | Järjestöpalvelu Oy <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>


