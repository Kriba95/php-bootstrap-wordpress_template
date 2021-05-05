<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>




<!-- Add your site or app content here -->
<div class="background-image-container white-text-container" style="background-image: url('../assets/images/img-05.jpg')">
    <div style="background-color:rgba(0, 0, 0, 0.5);" class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 wow bounce">


                <img style="width: 40% " src="<?php echo get_template_directory_uri(); ?> /img/logo.png" alt="jarjestopalvelu">

                <p class=""> </p>
                <a style="background-color:rgba(0, 0, 0, 0.5)" href="#contact-section-container" class="btn btn-primary btn-lg anchor-link" title="">Ota Yhteyttä</a>
            
            </div>
        </div>
    </div>
</div>



<div style="text-align: center;" class="section-container wow bounceInUp">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Palvelut #1</h2>
            </div>
        </div>


<div class="container">
<div class="row">
    <div class="col-sm">
        <div class="fa-icons-yeboi">
            <i class="fa fa-book fa-5x" aria-hidden="true"></i>
            <h3 class="elementor-icon-box-title">Kirjanpito</h3>
<p class="elementor-icon-box-description">Kirjanpito on jokaisen organisaation lakisääteinen velvollisuus, johon perustuu valtaosa yhteisön tuottamasta taloudellisesta aineistosta.</p>
<p>On sitten kyse taloushallinnon kokonaisulkoistuksesta tai pelkästä neuvontapalvelusta, olemme mielellämme tukenanne.</p>
        </div>
    </div>

    <div class="col-sm">
        <div class="fa-icons-yeboi">
            <i class="fa fa-check-circle fa-5x" aria-hidden="true"></i>
            <h3 class="elementor-icon-box-title">Palkanlaskenta</h3>
<p class="elementor-icon-box-description">Järjestösektorilla noudatetaan usein rinnakkaisia työehtosopimuksia, joiden lisäksi sovelletaan paikallisesti sovittuja työehtoja. Tämä tekee järjestösektorin palkanlaskennasta ehkä vähän tavallista haastavampaa.</p>
<p>Meillä tiedostetaan järjestöjen palkanlaskennan erityistarpeet ja siksi kannattaa olla yhteydessä, jos järjestössänne tarvitaan apua palkanlaskentaan liittyvissä kysymyksissä.</p>
        </div>
    </div>               

    <div class="col-sm">
        <div class="fa-icons-yeboi">
            <i style="text-align: center;" class="fa fa-money fa-5x" aria-hidden="true"></i>
            <h3 class="elementor-icon-box-title">Ostolaskut ja Maksuliikenne</h3>
<p class="elementor-icon-box-description">Taloushallinnon palvelut sähköistyvät nopeasti ja ensimmäisenä tyypillisesti tämä näkyy ostolaskujen käsittelyssä.</p>
<p>Meidän kauttamme järjestönne ostolaskujen käsittely sekä maksuliikenne tehostuu ja samalla teidän aikaanne vapautuu tärkeämpiin tehtäviin.</p>
        </div>
    </div>
</div>
</div>


<div class="container">
<div class="row">

<div class="col-sm">
    <div class="fa-icons-yeboi">
        <i class="fa fa-paperclip fa-5x" aria-hidden="true"></i>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-bfbc737 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bfbc737" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-22775c9" data-id="22775c9" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-8076703 elementor-view-framed elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="8076703" data-element_type="widget" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-content">
<h3 class="elementor-icon-box-title">Raportointi</h3>
<p class="elementor-icon-box-description">Järjestösektorilla raportoinnille asetetaan usein vaatimuksia, jotka poikkeavat yritysmaailman tarpeista ja siksi on tärkeää, että palveluntarjoaja ymmärtää nämä tarpeet.</p>
<p>Tarjoamme kumppaneillemme raportointipalvelut niin rahoittajien kuin järjestön oman päätöksenteon tarpeisiin.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
    </div>
</div>

<div class="col-sm">
    <div class="fa-icons-yeboi">
        <i class="fa fa-users fa-5x" aria-hidden="true"></i>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cda4085" data-id="cda4085" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-de21ad9 elementor-view-framed elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="de21ad9" data-element_type="widget" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-content">
<h3 class="elementor-icon-box-title">Henkilöstöhallinto</h3>
<p class="elementor-icon-box-description">Järjestöjen ylivoimaisesti arvokkain resurssi on henkilöstö. Siksi haluamme tarjota teille henkilöstön hallinnointiin tukea.</p>
<p>Meidän kauttamme on mahdollista hankkia modernit työkalut sekä järjestelmät, joiden avulla henkilöstöhallinnon toiminnot helpottuvat.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    </div>
</div>
</div>
</div>

</div>
        </div>














</section>










<div class="section-container section-half-background-image-container">
    <div class="image-column" style="background-image: url('../assets/images/img-01.jpg')"></div>
    <div class="container">
        <div class="row">
            <div class="section-label reveal">
                <p></p>
            </div>
            <div class="col-md-6 col-md-offset-6 text-column wow bounceInRight center">
                <h2>Yhtiön tausta
                </h2>
                <h3>VaTa Järjestöpalvelu Oy</h3>
                <p> on SOSTE Suomen sosiaali ja terveys ry:n, Kuurojen Palvelusäätio sr:n ja Kuuloliitto ry:n yhteisomistusyritys.
                    <p>  Yhtiön virallisen nimen etuliite, VaTa, viittaa kuuloalan järjestöjen omistamaan Valkeaan taloon, jossa sijaitsevat yhtiön toimitilat. </p>
                     <p> Yhtiö perustettiin vuonna 2015 tuottamaan järjestöille hallintoon liittyviä palveluita. Ajatuksena on, että Järjestöpalvelu Oy:n toiminnassa yhdistyvät järjestötoiminnan asiantuntemus ja palvelukeskukselle ominainen toimintojen virtaviivaistaminen sekä tehokkuus.

                </p>

            </div>
        </div>
    </div>
</div>




<div class="section-container wow bounceInUp">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Palvelut #2</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="../assets/images/img-02.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Kirjanpito</h3>
                <p>
                    Kirjanpito on jokaisen organisaation lakisääteinen velvollisuus, johon perustuu valtaosa yhteisön tuottamasta taloudellisesta aineistosta.
                    
                    On sitten kyse taloushallinnon kokonaisulkoistuksesta tai pelkästä neuvontapalvelusta, olemme mielellämme tukenanne.</p>
            </div>

            <div class="col-xs-12 col-md-4">
                <img src="../assets/images/img-03.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Palkanlaskenta</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor. Phasellus ut
                    lacus tellus. In pretium lobortis blandit.</p>
            </div>
            <div class="col-xs-12 col-md-4">
                <img src="../assets/images/img-04.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Ostolaskut ja Maksuliikenne</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor. Phasellus ut
                    lacus tellus. In pretium lobortis blandit.</p>
            </div>
            <div style="margin: 0 auto;" class="col-xs-12 col-md-4">
                <img src="../assets/images/img-02.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Raportointi</h3>
                <p>
                    Kirjanpito on jokaisen organisaation lakisääteinen velvollisuus, johon perustuu valtaosa yhteisön tuottamasta taloudellisesta aineistosta.
                    
                    On sitten kyse taloushallinnon kokonaisulkoistuksesta tai pelkästä neuvontapalvelusta, olemme mielellämme tukenanne.</p>
            </div>
            <div style="margin: 0 auto;" class="col-xs-12 col-md-4">
                <img src="../assets/images/img-03.jpg" alt="" class="img-responsive">
                <h3 class="text-center">Henkilöstöhallinto</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet consectetur dolor. Phasellus ut
                    lacus tellus. In pretium lobortis blandit.</p>
            </div>
        </div>
    </div>
</div>




<div class="">
    <div class='container-fluid'>
        <div class="row map-container">
            <div id="map"></div>
            <div class="col-xs-10 col-md-4 contact-block-container reveal">
                <div class="row">
                  

                    <div class="col-xs-12 col-sm-6">
                        <h3>Osoite</h3>
                        <p>ILKANTIE 4, 00400 HELSINKI</p>

                        <h3>E-mail</h3>
                        <p>asiakaspalvelu@jarjestopalvelu.fi
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section-container wow bounceInUp" id="contact-section-container">
    <div class="container contact-form-container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-8">
                <div class="section-container-spacer">
                    <h2 class="text-center">Ota Yhteyttä</h2>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Nimi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Sähköposti">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Organisaatio">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" name="name" class="form-control" placeholder="Puhelinnumero">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Aihe">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Viesti"></textarea>
                    </div>

                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2">Olen ihminen
                        </label>
                        <button type="submit" class="btn btn-primary">Lähetä</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function (event) {
    
  googleMapInit(); 
  scrollToAnchor();
  scrollRevelation('reveal');
});
</script>




   

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
});
</script>


<script type="text/javascript" src="../main.js"></script>

<?php
get_footer();
