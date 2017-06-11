<?php
if ($var == 'og_desc') {
    $og_desc = 'Dis aliquet aliquam in sit ridiculus dolor tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec odio, adipiscing, quis dictumst eros urna est egestas parturient.';
    return $og_desc;
}
?>
<section id="about-state" class="container content-st-section">
    <div class="row abt-st-r">
        <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
        <div class="col-lg-10 col-lg-offset-1">
            <div class="section-title fc-dark-brown">Compare images of branded and plain packs</div>
        </div>
        <div class="content-desc-cont col-lg-10 col-lg-offset-1">
            <div class="row text-center">
                <p class="col-lg-3">Plain Packaging</p>
                <p class="col-lg-3">Branded Packaging</p>
            </div>
            <div class="row">
                <img src="<?php echo $base_url; ?>img/compare-image/plains/Chesterfield plain.jpg" class="col-lg-3">
                <img src="<?php echo $base_url; ?>img/compare-image/brands/Chesterfield brand.jpg" class="col-lg-3">
            </div>
            <div class="row">
                <img src="<?php echo $base_url; ?>img/compare-image/plains/dunhill plain.jpg" class="col-lg-3">
                <img src="<?php echo $base_url; ?>img/compare-image/brands/Dunhill brand.jpg" class="col-lg-3">
            </div>
            <div class="row">
                <img src="<?php echo $base_url; ?>img/compare-image/plains/gauloises plain.jpg" class="col-lg-3">
                <img src="<?php echo $base_url; ?>img/compare-image/brands/gauloises branded.jpg" class="col-lg-3">
            </div>
            <div class="row">
                <img src="<?php echo $base_url; ?>img/compare-image/plains/lambert and butler plain.jpg" class="col-lg-3">
                <img src="<?php echo $base_url; ?>img/compare-image/brands/Lmbert and butler banded.jpg" class="col-lg-3">
            </div>
            <div class="row">
                <img src="<?php echo $base_url; ?>img/compare-image/plains/marlboro plain.png" class="col-lg-3">
                <img src="<?php echo $base_url; ?>img/compare-image/brands/marlboro branded.png" class="col-lg-3">
            </div>
        </div>
    </div>
</section>
