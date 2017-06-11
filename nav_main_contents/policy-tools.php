<?php
if ($var == 'og_desc') {
$og_desc = '';

return $og_desc;
}
?>
<section id="about-state" class="container content-st-section">
    <div class="row abt-st-r">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="section-title fc-dark-brown">Policy Tools</div>
        </div>
        <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
        <div class="content-desc-cont col-lg-10 col-lg-offset-1">
            <table class="nav-main">
                <tbody>
                <tr>
                    <td class="col-lg-3 bg-nav-r-1">
                        <a href="<?php echo $base_url; ?>policy-tools/policy-briefs">
                            <div class="dropdown-note">A.</div>
                            Policy Briefs
                        </a>
                    </td>
                    <td class="col-lg-3 bg-nav-r-1">
                        <a href="<?php echo $base_url; ?>policy-tools/regulatory-impact-analysis-ref">
                            <div class="dropdown-note">B.</div>
                            Regulatory Impact Analysis Template
                        </a>
                    </td>
                    <td class="col-lg-3 bg-nav-r-1">
                        <a href="<?php echo $base_url; ?>policy-tools/consultation-document-template">
                            <div class="dropdown-note">C.</div>
                            Consultation Document Template
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
