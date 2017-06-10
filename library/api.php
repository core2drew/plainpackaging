<?php

include_once('base_url.php');
error_reporting(0);

function camel_case($string)
{
    $string = strtolower($string);
    $string = str_replace("-", " ", $string);
    $string = ucwords($string);
    $string = ucwords(strtolower($string));
    return $string;
}

// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = ' &raquo; ', $home = 'Home')
{
    global $base_url;
    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

    // This will build our "base URL" ... Also accounts for HTTPS :)
    // $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $base = $base_url;

    // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
    $breadcrumbs = Array("<a href=\"$base\">$home</a>");

    unset($path['1']);
    unset($path['2']);
    unset($path['3']);

    // Find out the index for the last value in our path array
    $last = end(array_keys($path));

    // Build the rest of the breadcrumbs
    foreach ($path AS $x => $crumb) {
        // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
        $title = camel_case(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

        // If we are not on the last index, then display an <a> tag
        if ($x != $last)
            // $breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
            $breadcrumbs[] = "<a href=\"#\">$title</a>";
        // Otherwise, just display the title (minus)
        else
            $breadcrumbs[] = $title;
    }

    // Build our temporary array (pieces of bread) into one big string :)
    return implode($separator, $breadcrumbs);
}

function seo_url($string)
{
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}

function chk_nav($nav)
{
    $menu = array('navigate-the-toolkit', 'set-policy-objectives', 'establish-document-development-retention', 'prepare-tobacco-industry-interference', 'evidence-review', 'regulatory-impact-analysis', 'stakeholder-input-public-consultation', 'make-key-policy-decisions', 'draft-the-law', 'coordinate-across-government', 'obtain-legal-advice', 'wto-notification', 'policy-briefs', 'what-is-plain-packaging-and-why-is-it-needed', 'countering-industry-arguments', 'is-plain-packaging-legal', 'regulatory-impact-analysis-ref', 'consultation-document-template', 'drafting-the-legislation-in-detail', 'comparison-table-of-existing-plain-packaging-laws', 'template-draft-model-law', 'research-evidence', 'austalia-post-implementation-evidence', 'tobacco-product-branding', 'opposing-arguments-and-how-to-counter-them', 'legal-issues', 'legal-issues', 'case-summaries', 'international-developments', 'download-toolkit', 'faqs', 'about-and-contact', 'what-is-it-and-why-is-it-needed', 'where-in-the-world', 'is-it-lawful', 'tobacco-industry-arguments', 'explore-the-guides', 'tools-and-resources', 'compare-images', 'plain-packaging-and-the-who-fctc', 'more-help-from-ctfk', 'legal-issues', 'case-summaries');
    if (in_array($nav, $menu)) {
        return 'ver';
    }
}

function nav_main_content($menu)
{
    global $base_url;
    switch ($menu) {
        case 'getting-prepared':
            if ($var == 'og_desc') {
                $og_desc = '';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Getting Prepared</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <table class="nav-main">
                            <tbody>
                            <tr>
                                <td class="col-lg-3 bg-nav-gd-1-1">
                                    <a href="<?php echo $base_url ?>getting-prepared/set-policy-objectives">
                                        <div class="dropdown-note">Guide 1.1</div>
                                        Set Policy Guidelines
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-gd-1-2">
                                    <a href="<?php echo $base_url ?>getting-prepared/establish-document-development-retention">
                                        <div class="dropdown-note">Guide 1.2</div>
                                        Establish Document Development and Retention Policy
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-gd-1-3">
                                    <a href="<?php echo $base_url ?>getting-prepared/prepare-tobacco-industry-interference">
                                        <div class="dropdown-note">Guide 1.3</div>
                                        Prepare for Tobacco Industry Interference
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <?php
            break;
        case 'collecting-the-evidence':
            if ($var == 'og_desc') {
                $og_desc = '';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Collecting the Evidence</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <table class="nav-main">
                            <tbody>
                            <tr>
                                <td class="col-lg-3 bg-nav-gd-2-1">
                                    <a href="<?php echo $base_url ?>collecting-the-evidence/evidence-review">
                                        <div class="dropdown-note">Guide 2.1</div>
                                        Evidence Review
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-gd-2-2">
                                    <a href="<?php echo $base_url ?>collecting-the-evidence/regulatory-impact-analysis">
                                        <div class="dropdown-note">Guide 2.2</div>
                                        Regulatory Impact Analysis
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-gd-2-3">
                                    <a href="<?php echo $base_url ?>collecting-the-evidence/stakeholder-input-public-consultation">
                                        <div class="dropdown-note">Guide 2.3</div>
                                        Stakeholder Input / Public Consultation
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <?php
            break;
            break;
        case 'crafting-the-legislation':
            if ($var == 'og_desc') {
                $og_desc = '';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Crafting the Legislation</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <table class="nav-main">
                            <tbody>
                            <tr>
                                <td class="col-lg-5 bg-nav-gd-3-1">
                                    <a href="<?php echo $base_url ?>crafting-the-legislation/make-key-policy-decisions">
                                        <div class="dropdown-note">Guide 3.1</div>
                                        Make Key Policy Decisions
                                    </a>
                                </td>
                                <td class="col-lg-5 bg-nav-gd-3-2">
                                    <a href="<?php echo $base_url ?>crafting-the-legislation/draft-the-law">
                                        <div class="dropdown-note">Guide 3.2</div>
                                        Draft the Law
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <?php
            break;
            break;
        case 'procedural-steps-for-a-secure-policy':
            if ($var == 'og_desc') {
                $og_desc = '';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Collecting the Evidence</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <table class="nav-main">
                            <tbody>
                            <tr>
                                <td class="col-lg-3 bg-nav-gd-4-1">
                                    <a href="<?php echo $base_url ?>procedural-steps-for-a-secure-policy/coordinate-across-government">
                                        <div class="dropdown-note">Guide 4.1</div>
                                        Coordinate Across Government
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-gd-4-2">
                                    <a href="<?php echo $base_url ?>procedural-steps-for-a-secure-policy/obtain-legal-advice">
                                        <div class="dropdown-note">Guide 4.2</div>
                                        Obtain Legal Advice
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-gd-4-3">
                                    <a href="<?php echo $base_url ?>procedural-steps-for-a-secure-policy/wto-notification">
                                        <div class="dropdown-note">Guide 4.3</div>
                                        WTO Notification
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <?php
            break;
            break;
        case 'policy-tools':
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
            <?php
            break;
            break;
        case 'legislation-drafting-tools':
            if ($var == 'og_desc') {
                $og_desc = '';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Legislation Drafting Tools</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <table class="nav-main">
                            <tbody>
                            <tr>
                                <td class="col-lg-2 bg-nav-r-2">
                                    <a href="<?php echo $base_url; ?>legislation-drafting-tools/drafting-the-legislation-in-detail">
                                        <div class="dropdown-note">D.</div>
                                        Drafting the Legislation in Detail
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-r-2">
                                    <a href="<?php echo $base_url; ?>legislation-drafting-tools/comparison-table-of-existing-plain-packaging-laws">
                                        <div class="dropdown-note">E.</div>
                                        Comparison Table of Existing Plain Packaging Laws
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-r-2">
                                    <a href="<?php echo $base_url; ?>legislation-drafting-tools/template-draft-model-law">
                                        <div class="dropdown-note">F.</div>
                                        Template Draft Model Law
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <?php
            break;
            break;
        case 'evidence':
            if ($var == 'og_desc') {
                $og_desc = '';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Evidence</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <table class="nav-main">
                            <tbody>
                            <tr>
                                <td class="col-lg-2 bg-nav-r-3">
                                    <a href="<?php echo $base_url; ?>evidence/research-evidence">
                                        <div class="dropdown-note">G.</div>
                                        Research Evidence
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-r-3">
                                    <a href="<?php echo $base_url; ?>evidence/austalia-post-implementation-evidence">
                                        <div class="dropdown-note">H.</div>
                                        Australia's Post-Implementation Evidence
                                    </a>
                                </td>
                                <td class="col-lg-3 bg-nav-r-3">
                                    <a href="<?php echo $base_url; ?>evidence/tobacco-product-branding">
                                        <div class="dropdown-note">I.</div>
                                        Tobacco Product Branding
                                    </a>
                                </td>
                                <td class="col-lg-2 bg-nav-r-3">
                                    <a href="<?php echo $base_url; ?>evidence/opposing-arguments-and-how-to-counter-them">
                                        <div class="dropdown-note">J.</div>
                                        Opposing Arugments (and How to Counter Them)
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <?php
            break;
            break;
        case 'legal-issues-and-international-developments':
            if ($var == 'og_desc') {
                $og_desc = '';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Legal Issues and International Developments</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <table class="nav-main">
                            <tbody>
                            <tr>
                                <td class="col-lg-5 bg-nav-r-4">
                                    <a href="<?php echo $base_url; ?>legal-issues-and-international-developments/legal-issues">
                                        <div class="dropdown-note">K.</div>
                                        Legal Issues and Case Summaries
                                    </a>
                                </td>
                                <td class="col-lg-5 bg-nav-r-4">
                                    <a href="<?php echo $base_url; ?>legal-issues-and-international-developments/international-developments">
                                        <div class="dropdown-note">L.</div>
                                        International Developments
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <?php
            break;
            break;
        default:
            # code...
            break;
    }
}

function nav_content($menu, $var = null)
{
    global $base_url;
    switch ($menu) {
        case 'navigate-the-toolkit':
            if ($var == 'og_desc') {
                $og_desc = 'Plain Packaging of Tobacco Products is therefore an important element of any comprehensive tobacco control strategy, in combination with other policies such as prohibitions on tobacco advertising and promotion and large graphic health warnings. There is clear evidence that plain packaging works as an effective demand reduction measure.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Navigate the Toolkit</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-brown">Branding, logos and other appealing features
                            on tobacco packaging act as a form of advertising and promotion.
                        </div>
                        <p>It can mislead consumers about the health effects of tobacco products; and distract from
                            health warnings on the packs.</p>
                        <p><b>Plain Packaging of Tobacco Products</b> is therefore an important element of any
                            comprehensive tobacco control strategy, in combination with other policies such as
                            prohibitions on tobacco advertising and promotion and large graphic health warnings. There
                            is clear evidence that plain packaging works as an effective demand reduction measure.</p>
                        <p>This Toolkit is intended to provide governments and civil society organizations with the
                            tools needed to ensure robust plain packaging policies and legislation that can stand up to
                            Big Tobacco’s efforts to dilute, delay and defeat the measure.</p>
                        <p>The Toolkit sets also out important technical details needed in the development of the policy
                            and in the drafting of the legislation.</p>
                        <hr class="navigate-toolkit">
                        <p><span class="section-tertiary-title">PART 1 </span>contains a series of <b>BRIEF GUIDES</b>
                            that provide an outline of the steps a government should consider including in its
                            development and drafting of legislation. These guides provide a step by step approach
                            highlighting key issues and decisions that need to be considered; and signpost the detailed
                            evidence and resources contained in the Reference Materials or elsewhere.</p>
                        <hr class="navigate-toolkit">
                        <p><span class="section-tertiary-title">PART 2 </span>contains more detailed <b>REFERENCE
                                MATERIALS</b>. These set out all the available evidence supporting the policy as well as
                            the opposing arguments and their flaws; there is a detailed guide on how to approach
                            drafting the law, with examples from existing legislation and a <b>DRAFT MODEL BILL</b> that
                            sets out the recommended elements for plain packaging legislation.</p>
                        <p>PART 2 also includes templates for a regulatory impact assessment and a template consultation
                            document for plain packaging, if government officials decide to undertake these recommended
                            procedures. There are also policy briefing papers to assist with media messaging and
                            coordination with other government departments.</p>
                        <hr class="navigate-toolkit">
                        <p>The World Health Organization (WHO) has produced guidance on the evidence, design and
                            implementation of Plain Packaging of tobacco products. Government Ministries of Health
                            should refer to the WHO guidance when considering plain packaging.</p>
                        <p><a href="www.who.int/tobacco/publications/industry/plain-packaging-tobacco-products/en"
                              target="_blank">www.who.int/tobacco/publications/industry/plain-packaging-tobacco-products/en</a>
                        </p>
                        <p>This Toolkit was developed by the <b>Campaign for Tobacco Free Kids</b> to complement the WHO
                            guidance, to provide practical assistance on policy development processes, to provide
                            greater detail on the evidence and opposing arguments, and to assist with drafting
                            legislation.</p>
                    </div>
                </div>
            </section>
            <?php
            break;

        case 'download-toolkit':
            if ($var == 'og_desc') {
                $og_desc = 'Plain Packaging of Tobacco Products is therefore an important element of any comprehensive tobacco control strategy, in combination with other policies such as prohibitions on tobacco advertising and promotion and large graphic health warnings. There is clear evidence that plain packaging works as an effective demand reduction measure.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Download the Toolkit</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="col-lg-8">
                            <div><a href="<?php echo $base_url; ?>files/complete-guide.rar" target="_blank"
                                    class="fc-dark-brown"><b><u>Plain Packaging of Tobacco Products</u></b></a>
                                (Complete Toolkit)
                            </div>
                            <br>&nbsp;<br>
                            <div class="section-secondary-title fc-dark-brown"><i>Download Individual guides</i></div>
                            <div>
                                <div class="section-tertiary-title fc-dark-brown">Getting Prepared</div>
                                <div class="fc-dark-brown">Guide 1.1: <u><a
                                                href="<?php echo $base_url; ?>files/guide-1.1.pdf" download
                                                target="_blank" class="fc-dark-brown">Set Policy Objectives</a></u>
                                </div>
                                <div class="fc-dark-brown">Guide 1.2: <u><a
                                                href="<?php echo $base_url; ?>files/guide-1.2.pdf" download
                                                target="_blank" class="fc-dark-brown">Establish Document Development and
                                            Retention Policy</a></u></div>
                                <div class="fc-dark-brown">Guide 1.3: <u><a
                                                href="<?php echo $base_url; ?>files/guide-1.3.pdf" download
                                                target="_blank" class="fc-dark-brown">Prepare for Tobacco Industry
                                            Interference</a></u></div>
                            </div>
                            <br>&nbsp;<br>
                            <div>
                                <div class="section-tertiary-title fc-dark-brown">Collecting the Evidence</div>
                                <div class="fc-dark-brown">Guide 2.1: <u><a
                                                href="<?php echo $base_url; ?>files/guide-2.1.pdf" download
                                                target="_blank" class="fc-dark-brown">Evidence Review</a></u></div>
                                <div class="fc-dark-brown">Guide 2.2: <u><a
                                                href="<?php echo $base_url; ?>files/guide-2.2.pdf" download
                                                target="_blank" class="fc-dark-brown">Regulatory Impact Analysis</a></u>
                                </div>
                                <div class="fc-dark-brown">Guide 2.3: <u><a
                                                href="<?php echo $base_url; ?>files/guide-2.3.pdf" download
                                                target="_blank" class="fc-dark-brown">Stakeholder Input / Public
                                            Consultation</a></u></div>
                            </div>
                            <br>&nbsp;<br>
                            <div>
                                <div class="section-tertiary-title fc-dark-brown">Crafting the Legislation</div>
                                <div class="fc-dark-brown">Guide 3.1: <u><a
                                                href="<?php echo $base_url; ?>files/guide-3.1.pdf" download
                                                target="_blank" class="fc-dark-brown">Make Key Policy Decisions</a></u>
                                </div>
                                <div class="fc-dark-brown">Guide 3.2: <u><a
                                                href="<?php echo $base_url; ?>files/guide-3.2.pdf" download
                                                target="_blank" class="fc-dark-brown">Draft the Law</a></u></div>
                            </div>
                            <br>&nbsp;<br>
                            <div>
                                <div class="section-tertiary-title fc-dark-brown">Procedural Steps for a Secure Policy
                                </div>
                                <div class="fc-dark-brown">Guide 4.1: <u><a
                                                href="<?php echo $base_url; ?>files/guide-4.1.pdf" download
                                                target="_blank" class="fc-dark-brown">Coordinate Across
                                            Government</a></u></div>
                                <div class="fc-dark-brown">Guide 4.2: <u><a
                                                href="<?php echo $base_url; ?>files/guide-4.2.pdf" download
                                                target="_blank" class="fc-dark-brown">Obtain Legal Advice</a></u></div>
                                <div class="fc-dark-brown">Guide 4.3: <u><a
                                                href="<?php echo $base_url; ?>files/guide-4.3.pdf" download
                                                target="_blank" class="fc-dark-brown">WTO Notification</a></u></div>
                            </div>
                        </div>
                        <div class="col-lg-4"><img src="<?php echo $base_url ?>img/toolkit_cover.jpg"></div>
                    </div>
                </div>
            </section>
            <?php
            break;

        case 'set-policy-objectives':
            if ($var == 'og_desc') {
                $og_desc = 'It is critical to establish clear aims and objectives for an effective policy development process of a tobacco control policy. Many domestic and international courts and tribunals apply legal tests to establish whether a measure is proportionate or justified in relation to its intended objectives. Where a government fails to formally establish those objectives, a legal challenge may be more difficult to defend.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-violet">Guide 1.1</div>
                        <div class="section-title fc-violet">Set the Policy Objectives</div>
                    </div>
                    <div class="content-desc-cont">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">1. Establish the aims and objectives</div>
                            <p>It is critical to establish clear aims and objectives for an effective policy development
                                process of a tobacco control policy. Many domestic and international courts and
                                tribunals apply legal tests to establish whether a measure is roportionate or justified
                                in relation to its intended objectives. Where a government fails to formally establish
                                those objectives, a legal challenge may be more difficult to defend.</p>
                            <p>
                                Plain packaging serves multiple objectives within the broader context of tobacco demand
                                reduction strategies. The broad objectives for plain packaging are to improve public
                                health by:
                            <ul class="custom">
                                <li>discouraging people from taking up smoking, or using tobacco products; and</li>
                                <li>encouraging people to give up smoking, and to stop using tobacco products; and</li>
                                <li>discouraging people who have given up smoking, or who have stopped using tobacco
                                    products, from relapsing.
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="inner-box-style">
                                <div class="section-tertiary-title fc-violet">The objectives of plain packaging are
                                    achieved by
                                </div>
                                <ul class="custom fc-violet">
                                    <li><b><i>reducing</i></b> the appeal and attractiveness of tobacco products to
                                        consumers,
                                    </li>
                                    <li><b><i>increasing</i></b> the noticeability and effectiveness of health warnings
                                        on the packaging of tobacco products,
                                    </li>
                                    <li><b><i>reducing</i></b> the ability of the packaging of tobacco products to
                                        mislead consumers about the harmful effects of smoking or using tobacco
                                        products,
                                    </li>
                                    <li><b><i>eliminating</i></b> the ability of tobacco packaging to advertise and
                                        promote tobacco consumption,
                                    </li>
                                    <li><b><i>having a positive</i></b> effect on smoking-related attitudes, beliefs,
                                        intentions and behaviours or assisting with the denormalisation of tobacco
                                        products.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>This list is drawn from the objectives as expressed in the who fctc guidelines for
                                Articles 11 and 13, Australia’s Tobacco Plain Packaging Act 2011, Ireland’s Public
                                Health (Standardised Packaging of Tobacco) Act 2014 and the public consultation
                                documents from the UK. Governments proposing plain packaging should consider which
                                objectives are relevant for them but it is recommended that governments take a broad
                                inclusive approach to the aims they wish to achieve and the means by which they should
                                be achieved through the implementation of plain packaging.</p>
                            <p>An important point is that these objectives are evidence-based and capable of being
                                monitored and evaluated.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">2. Set out the objectives in official
                                documents
                            </div>
                            <p>It is important that a government sets out the aims for the policy clearly in official,
                                publicly available documents or publications. For example, this can be in the preamble
                                or explanatory notes of the legislation itself (as Australia and Ireland did); in public
                                consultation documents (as the UK and Canada have done); or in a Regulatory Impact
                                Assessment (such as the one published by New Zealand). Links to these documents are
                                given below.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">3. Establish that Plain Packaging is in
                                furtherance of the WHO FCTC
                            </div>
                            <p>It is also important that a government formally recognises that plain packaging is a
                                policy recommended in the implementing guidelines for Articles 11 and 13 of the who
                                fctc. The fact that a country is adopting a policy in furtherance of its international
                                legal obligations can be a significant factor for courts or tribunals asked to consider
                                that policy. Giving effect to obligations in the who fctc is stated as an objective of
                                both Australia and New Zealand’s legislation, and is detailed in the UK consultation
                                document.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">4. Plain Packaging objectives work as part of
                                a wider tobacco control policy
                            </div>
                            <p>It is critical for policy and legal reasons that plain packaging is part of a wider
                                tobacco control strategy that includes a comprehensive tobacco advertising, promotion
                                and sponsorship ( TA P S) ban, including a ban on point of sale advertising, and
                                effective graphic health warnings in line with WHO F C T C recommendations.</p>
                            <p>
                                It is critical for policy and legal reasons that plain packaging is part of a wider
                                tobacco control strategy that includes:
                            <ul class="custom">
                                <li>a comprehensive tobacco advertising, promotion and sponsorship (TAPS) ban, including
                                    a ban on point of sale advertising, and
                                </li>
                                <li>effective graphic health warnings in line with WHO FC TC recommendations.</li>
                            </ul>
                            </p>
                            <p>The reasons for this are:</p>
                            <p>
                            <div class="section-tertiary-title">Policy issues</div>
                            <ul class="custom">
                                <li>It makes little sense to remove the advertising and promotional elements on tobacco
                                    packets but still allow advertising or promotion of tobacco products in other ways.
                                </li>
                                <li>One of the key aims of plain packaging is that it increases the noticeability and
                                    effectiveness of the Graphic Health Warnings, therefore a country should either have
                                    in place, or be introducing concurrently with plain packaging, health warnings that
                                    are in line with the recommendations of WHO F C T C Article 11 guidelines – at least
                                    50% front and back with graphic pictures.
                                </li>
                                <li>In both Australia and in the EU countries that have introduced plain packaging,
                                    health warnings increased in size at the same time plain packaging was introduced.
                                </li>
                            </ul>
                            </p>
                            <p>
                            <div class="section-tertiary-title">Legal issues</div>
                            <ul class="custom">
                                <li>International legal challenges, as well as many national legal jurisdictions, often
                                    include a test of whether it is necessary or justified to introduce a measure that
                                    has the potential to restrict trade in goods or commercial activity. This type of
                                    legal argument includes consideration of whether there are less restrictive
                                    alternative measures that could also meet the policy objectives. If a comprehensive
                                    TAPS ban is not in place or being introduced, a court could consider that a TAPS ban
                                    may be a less restrictive option for achieving the policy objectives than
                                    introducing plain packaging.
                                </li>
                                <li>Tobacco companies could argue that that the efficacy of the policy would be
                                    undermined by other forms of advertising.
                                </li>
                                <li>There is significant research evidence that shows plain packaging is effective at
                                    increasing the noticeability of health warnings. But without regulations requiring
                                    effective health warnings that are in accordance with F C T C recommendations, it
                                    would be difficult to use that to support the defence of plain packaging in a legal
                                    challenge.
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="inner-box-style">
                                <div class="section-tertiary-title fc-brown">Key resources</div>
                                <ul class="custom">
                                    <li>WHO publication Plain Packaging of Tobacco Products – Evidence, Design and
                                        Implementation: <a class="fc-black"
                                                           href="www.who.int/tobacco/publications/industry/plain-packaging-tobaccoproducts/en/"
                                                           target="_blank"><b><i>www.who.int/tobacco/publications/industry/plain-packaging-tobaccoproducts/en/</i></b></a>
                                    </li>
                                    <li>Australian legislation that sets out the objectives of the law <a
                                                class="fc-black" target="_blank"
                                                href="www.comlaw.gov.au/Details/C2013C00190"><b><i>www.comlaw.gov.au/Details/C2013C00190</i></b></a>
                                    </li>
                                    <li>UK 2012 consultation that describes the aims and objectives of the proposed
                                        policy: <a class="fc-black" target="_blank"
                                                   href="www.gov.uk/government/uploads/system/uploads/attachment_data/file/170568/dh_133575.pdf"><b><i>www.gov.uk/government/uploads/system/uploads/attachment_data/file/170568/dh_133575.pdf</i></b></a>
                                    </li>
                                    <li>New Zealand’s Regulatory Impact Assessment from 2012 sets out the objectives for
                                        the proposal: <a class="fc-black" target="_blank"
                                                         href="www.health.govt.nz/about-ministry/legislation-and-regulation/regulatory-impact-statements/plain-packaging-tobacco-productsregulatory-impact-statement-consultation-phase"><b><i>www.health.govt.nz/about-ministry/legislation-and-regulation/regulatory-impact-statements/plain-packaging-tobacco-productsregulatory-impact-statement-consultation-phase</i></b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <!-- <a href="<?php echo $base_url ?>">
                        <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"> Guide 1.1 Set the Policy Objectives</a> -->
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>getting-prepared/establish-document-development-retention">Guide
                            1.2 Establish Document Development and Retention
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <!--  <a href="<?php echo $base_url ?>">
                        <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>Guide 1.1 Set the Policy Objectives</a> -->
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>getting-prepared/establish-document-development-retention">
                            Guide 1.2 Establish Document Development and Retention<br><img
                                    class="pagination-url-forward-img"
                                    src="<?php echo $base_url; ?>img/scroll-page.png"> </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'establish-document-development-retention':
            if ($var == 'og_desc') {
                $og_desc = 'It is important that a comprehensive document development and retention policy, in line with government practice, is in place so that the policy development processes can be fully demonstrated if the measure is legally challenged.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-violet">Guide 1.2</div>
                        <div class="section-title fc-violet">Establish Document Development and Retention</div>
                    </div>
                    <div class="content-desc-cont">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>
                                It is important that a comprehensive document development and retention policy, in line
                                with government practice, is in place so that the policy development processes can be
                                fully demonstrated if the measure is legally challenged.
                            </p>
                            <div class="inner-box-style">
                                <div class="section-tertiary-title fc-violet">Each step of the policy development and
                                    drafting process should be recorded and documented. This means keeping a careful
                                    record of:
                                </div>
                                <ol class="custom">
                                    <li>Key Ministry of Health meetings where the policy is discussed or decisions are
                                        taken on aspects of the policy;
                                    </li>
                                    <li>The reasons for policy decisions taken about any aspect of the policy (see for
                                        instance the key initial policy development decisions outlined in <a
                                                href="<?php echo $base_url; ?>crafting-the-legislation/make-key-policy-decisions"><b
                                                    class="fc-violet">Guide 3.1</b></a>);
                                    </li>
                                    <li>Communications or meetings with other government departments (see <a
                                                href="<?php echo $base_url; ?>procedural-steps-for-a-secure-policy/coordinate-across-government"><b
                                                    class="fc-violet">Guide 4.1</b></a>)
                                    </li>
                                    <li>Communications or meetings with external public health bodies, experts or civil
                                        society organisations with documentation of attendees;
                                    </li>
                                    <li>Interactions with industry or industry representatives outside of public
                                        consultations with documentation of attendees*;
                                    </li>
                                    <li>All the evidence that has been considered as part of the evidence review, when
                                        it was considered and by whom;
                                    </li>
                                    <li>Any external written submissions received from organisations or industry whether
                                        as part of the a consultation or otherwise;
                                    </li>
                                    <li>Both internal and external correspondence including emails relating to the
                                        policy.
                                    </li>
                                </ol>
                                <p class="table-note"><i>*Meetings with the tobacco industry or industry representatives
                                        should only take place, and be conducted, in line with the WHO FCTC Article 5.3
                                        and the FCTC Article 5.3 guidelines so as to protect tobacco control polices
                                        from commercial and other vested interests.</i></p>
                            </div>
                            <p>Internal government discussions between different departments are an important part of
                                the policy development process so demonstrating that they took place can show proper due
                                process. Records of meetings should include agendas and minutes. A regulatory impact
                                analysis (<i>see</i> <b class="fc-violet">Guide 2.2</b>) can act as a useful part of the
                                record of policy development.</p>
                            <p><b class="fc-violet">LEGAL CHALLENGES</b> to a tobacco control policy, in both national
                                courts and international tribunals, can often include a claim that due process has not
                                been adhered to or that effective consideration of all the relevant evidence and issues
                                was not had before a final decision was made. It is important that a government can
                                demonstrate the steps it has taken.</p>
                            <p><span class="fc-violet"><b>IN THE INTERNATIONAL INVESTMENT ARBITRATION</b></span> claim
                                brought by Philip Morris International against two of Uruguay’s tobacco control laws2,
                                the arbitrator appointed by Philip Morris, Gary Born, gave a dissenting opinion on
                                certain issues where he disagreed with the outcome of the tribunal award (<i>see</i>
                                <span class="fc-violet"><b>Guide 4.2</b></span>). Gary Born’s dissenting opinion was
                                that Uruguay’s Single Presentation Requirement (that only permits each brand to have a
                                single variant) was adopted without due process or proper consideration of the evidence
                                and was therefore arbitrary and in breach of Uruguay’s Bilateral Investment Treaty with
                                Switzerland:</p>
                            <p class="p-blockquote">“In my view, <b>the record does not support</b> a conclusion that
                                the single presentation requirement … was preceded by any meaningful internal study,
                                discussions or deliberations at the Ministry of Public Health, or by other Uruguayan
                                authorities…</p>
                            <p class="p-blockquote">It is significant that the evidentiary record contains no minutes,
                                agendas, protocols, preparatory materials, memoranda, letters, emails or other
                                documentary evidence suggesting that any meetings, conference calls or other
                                interactions concerning the single presentation requirement ever occurred.” [108 – 109]
                                (emphasis added)</p>
                            <p>The position of the Uruguayan Government was that the policy was properly considered
                                before being adopted and the majority of the tribunal agreed, but the fact that one of
                                the three arbitrators was prepared to find a breach of the Investment Treaty that could
                                have led to huge damages being awarded is a reminder to Governments of the need to
                                follow due process and <b>keep a record of that process.</b></p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">Freedom of information requests</div>
                            <p>In addition, governments need to be aware that tobacco companies have lodged a
                                significant number of freedom-of-information requests in countries considering plain
                                packaging. These requests can be designed to tie up government resources and to be
                                ‘fishing’ exercises in preparation for legal challenges. Governments should consider
                                strategies to prepare themselves to respond to such requests, by developing an approach
                                to document management from the outset.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>getting-prepared/set-policy-objectives"><img
                                    class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 1.1 Set the Policy Objectives</a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>getting-prepared/prepare-tobacco-industry-interference">Guide
                            1.3 Prepare for Tobacco Industry Interference<img class="pagination-url-forward-img"
                                                                              src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>getting-prepared/set-policy-objectives"><img
                                    class="pagination-url-back-img"
                                    src="<?php echo $base_url; ?>img/scroll-page.png"><br>Guide 1.1 Set the Policy
                            Objectives</a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>getting-prepared/prepare-tobacco-industry-interference">Guide
                            1.3 Prepare for Tobacco Industry Interference<br><img class="pagination-url-forward-img"
                                                                                  src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'prepare-tobacco-industry-interference':
            if ($var == 'og_desc') {
                $og_desc = 'Details and examples of the media campaigns and interference tactics used by the tobacco industry are given in the OPPOSING ARGUMENTS section of the Reference Materials. That section demonstrates how the industry arguments are flawed, often lacking any rational basis, and sets out the counter arguments that can be used to combat the industry campaigns. That Reference Section highlights the industry’s use of experts that lack independence and whose evidence does not meet basic standards; and the fact that the industry has never disclosed any of its own consumer research into the likely impacts of plain packaging.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-violet">Guide 1.3</div>
                        <div class="section-title fc-violet">Prepare for Tobacco Industry Interference</div>
                    </div>
                    <div class="content-desc-cont">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>
                                Details and examples of the media campaigns and interference tactics used by the tobacco
                                industry are given in the <a class="fc-violet"
                                                             href="<?php echo $base_url; ?>opposing-arguments-and-how-to-counter-them"><b>Reference
                                        Section J: OPPOSING ARGUMENTS AND EVIDENCE</b></a>. That section demonstrates
                                how the industry arguments are flawed, often lacking any rational basis, and sets out
                                the counter arguments that can be used to combat the industry campaigns. That Reference
                                Section highlights the industry’s use of experts that lack independence and whose
                                evidence does not meet basic standards; and the fact that the industry has never
                                disclosed any of its own consumer research into the likely impacts of plain packaging.
                            </p>
                            <p>In addition, the <a class="fc-violet"
                                                   href="<?php echo $base_url; ?>policy-tools/policy-briefs"><b>POLICY
                                        BREIFING PAPERS</b> in <b>Reference Section A</b></a> includes a short paper
                                which sets out the main counter arguments to each of the key arguments used by the
                                industry.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">1. The tobacco industry coordinates
                                aggressive and well-funded campaigns
                            </div>
                            <p>
                                These campaigns oppose plain packaging in every country that has proposed or considered
                                the policy. These campaigns go much further than the typical opposition to tobacco
                                control measures. With plain packaging, the industry campaigns have used:
                            <ul class="custom">
                                <li>full page advertisements in national newspapers</li>
                                <li>billboard campaigns,</li>
                                <li>dedicated websites setup to promulgate the tobacco industry’s views,</li>
                                <li>social media,</li>
                                <li>short films,</li>
                                <li>strong political lobbying at all levels,</li>
                                <li>street level campaigning and surveys,</li>
                                <li>heavy use of proxy organisations or front groups , and</li>
                                <li>in Sweden, JTI even set up a whole fake super market at a political convention,
                                    where all the goods (coffee, bread, milk etc.) were in plain packaging.
                                </li>
                            </ul>
                            </p>
                            <p>These campaigns have the potential to be effective in swaying public opinion and some
                                parts of government. <b>The reason the tobacco industry is so vehemently opposed to
                                    plain packaging is because the policy works.</b></p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">2. The tobacco industry’s flawed arguments
                            </div>
                            <p>The tobacco industry’s arguments opposing plain packaging are now well established and
                                vary little from one country to another although the focus can be different. For
                                instance in France, the tobacco retailers (backed by the industry) generated much of the
                                opposition with the argument that it would lead to job losses. Where as in Slovenia, the
                                argument that it would increase illicit trade and fund criminal gangs was used more. But
                                the industry has no hesitation in recycling arguments in multiple jurisdictions, even
                                after they have been wholly discredited elsewhere.</p>
                            <div class="inner-box-style">
                                <div class="section-tertiary-title fc-violet">Commonly used tobacco industry arguments
                                </div>
                                <ul class="custom">
                                    <li><b class="fc-violet">There is no evidence</b> that plain packaging will work
                                    </li>
                                    <li><b class="fc-violet">It will increase the illicit trade</b> in tobacco – because
                                        plain packs are easier to counterfeit
                                    </li>
                                    <li><b class="fc-violet">It is the start of a slippery slope</b> or domino effect –
                                        leading to plain packaging of other products
                                    </li>
                                    <li><b class="fc-violet">It will breach intellectual property laws</b> – leading to
                                        huge compensation claims
                                    </li>
                                    <li><b class="fc-violet">It will lead to price reductions</b> – thereby increasing
                                        consumption
                                    </li>
                                    <li><b class="fc-violet">It will increase costs for small retail businesses</b> – by
                                        increasing consumer transaction times
                                    </li>
                                    <li><b class="fc-violet">It will cause job losses</b> in domestic tobacco
                                        manufacturing industries
                                    </li>
                                </ul>
                            </div>
                            <p>These arguments are largely made by mere assertion, with no evidence to back them up, and
                                can be easily refuted by using available evidence and judgments from decided legal
                                cases. See the <a href="<?php echo $base_url; ?>policy-tools/policy-briefs"
                                                  class="fc-violet"><b>POLICY BREIFING PAPERS</b> in <b>Reference
                                        Section A</b></a> for a series of short counter arguments to the industry’s
                                claims.</p>
                            <p>To date, no empirical studies conducted by, or on behalf of, tobacco companies have been
                                published. The tobacco companies have refused to disclose any of their own consumer
                                research or behavioural studies into the impacts of plain packaging.</p>
                            <p>Where the tobacco companies have sought to use experts to support their arguments, for
                                instance in the High Court legal challenge to the UK plain packaging regulations, the
                                Court strongly criticised the experts describing their evidence as <i>“not peer
                                    reviewed”</i>, <i>“frequently unverifiable”</i> and that it failed to <i>“accord
                                    with internationally recognised best practice”</i>.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">3. What can be done to prepare?</div>
                            <p>An important aspect of progressing any tobacco control policy and in particular plain
                                packaging, is for government and civil society to prepare a strategy to both pre-empt
                                and respond to tobacco industry interference:</p>
                            <p>
                            <ul class="custom">
                                <li><b class="fc-violet">Anticipate the likely arguments</b> by the tobacco industry and
                                    prepare the counter arguments at an early stage.
                                </li>
                                <li><b class="fc-violet">Directly refuting</b> the industry arguments before the
                                    industry has a chance to promulgate them.
                                </li>
                                <li><b class="fc-violet">Use pre-prepared briefing papers</b> covering key issues for
                                    the media, other government departments and interested members of parliament
                                    (<i>see</i> the <a class="fc-violet"
                                                       href="<?php echo $base_url; ?>policy-tools/policy-briefs"><b>POLICY
                                            BRIEFING PAPERS</b> in <b>Reference Section A</b></a>.
                                </li>
                                <li><b class="fc-violet">Generate positive media</b> campaigns which include information
                                    about the global movement towards adopting the policy and the positive results from
                                    Australia.
                                </li>
                                <li><span class="fc-violet"><b>Engage early with other government departments</b> (<i>see</i> <b>GUIDE 4.1</b>: Coordinate across government)</span>
                                </li>
                                <li>Endorsements. Use of local and international experts, including prominent doctors,
                                    to speak to the media and other government departments about tobacco harms and the
                                    real facts about plain packaging
                                </li>
                                <li>Civil society media campaign supporting the policy, setting out the facts and
                                    shining a light on the industry’s tactics.
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">4. Civil society organisations, medical
                                associations and public health bodies
                            </div>
                            <p>These bodies can play an important role in countering the arguments put forward by the
                                tobacco industry by organising positive publicity campaigns to promote plain packaging
                                in a way that it may not be possible for government to do while it is going through the
                                policy development and decision making process. Medical and public health bodies can
                                make their views known about the evidence and provide <b><i>credible</i></b> experts to
                                speak with the media. Organisations can pre-empt the tobacco industry opposition by
                                engaging with the media ahead of any government announcement to provide the real facts
                                in anticipation of the false opposing arguments the industry and its front groups will
                                put forward.</p>
                            <p>Cancer Research UK led the campaign to promote plain packaging in the UK. A useful
                                insight into civil society action can be found on their blog post which provides 13
                                steps that shaped the successful campaign including sending flashy cigarette packs to
                                MPs and attending political party conferences 2.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">5. Use the evidence to refute industry
                                arguments
                            </div>
                            <p>The post-implementation evidence from Australia as to what actually happened after
                                implementation is extremely useful in combatting many of the false tobacco industry
                                claims about the negative impacts of the plain packaging.</p>
                            <table class="table table-inner table-condensed table-responsive">
                                <thead class="bg-brown">
                                <tr>
                                    <th class="col-lg-5">
                                        Industry claims before implementation
                                    </th>
                                    <th class="col-lg-7">
                                        Australia’s post–implementation evidence
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-bg-light-blue">
                                    <td>
                                        <b>Retailer confusion and loss of trade</b>
                                    </td>
                                    <td>
                                        Quick adaptation by retailers – consumer transaction times actually reduced
                                        after implementation and there was no decline in use of small retailers.
                                    </td>
                                </tr>
                                <tr class="table-bg-light-brown">
                                    <td>
                                        <b>Explosion in use of illicit tobacco</b>
                                    </td>
                                    <td>
                                        No changes detected pre vs post in major indicators.No counterfeit plain packs
                                        discovered. Reduced use of unpackaged tobacco.
                                    </td>
                                </tr>
                                <tr class="table-bg-light-blue">
                                    <td>
                                        <b>Reduced tobacco prices</b>
                                    </td>
                                    <td>
                                        Tobacco prices increased across all sectors
                                    </td>
                                </tr>
                                <tr class="table-bg-light-brown">
                                    <td>
                                        <b>Increased consumption</b>
                                    </td>
                                    <td>
                                        Continuing decline in overall consumption and significant reductions in smoking
                                        prevalence rates.
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <p>Key facts about the research evidence and studies that demonstrate these post
                                implementation results can be found on the Cancer Council Victoria website:<br><a
                                        href="http://www.cancervic.org.au/plainfacts/browse.asp?ContainerID=industryopposition"
                                        target="_blank">http://www.cancervic.org.au/plainfacts/browse.asp?ContainerID=industryopposition</a>
                            </p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">6. Highlight contradictory statements</div>
                            <p>The tobacco companies regularly say different things in different contexts. Highlighting
                                this can be an effective means of countering their arguments. For instance, in the
                                industry challenge to the UK regulations, the tobacco companies sought to argue that
                                branding on packaging is not the same as advertising and has a different function.
                                However, in the challenge before the High Court of Australia, the tobacco companies made
                                a direct comparison between the space on the packets for branding and advertising
                                billboards (<i>see the</i> <a
                                        href="<?php echo $base_url; ?>legal-issues-and-international-developments/legal-issues"><b
                                            class="fc-violet">Reference Section K: LEGAL ISSUES AND CASE
                                        SUMMARIES</b></a>).</p>
                            <p>Another example of this relates to illicit trade. Philip Morris International claimed
                                that branded packaging is difficult or impossible to counterfeit when arguing against
                                plain packaging but at the same time confirmed that branded packaging is easy to
                                counterfeit in a 2012 brochure on Codentify (a track and trace system developed by PMI).
                                A report by KPMG into illicit tobacco in Australia commissioned by Philip Morris Limited
                                confirms that there have been no counterfeit plain packs identified since
                                implementation. The KPMG report is the only statistical evidence the industry uses to
                                support its contention that plain packaging increases illicit trade but the methodology
                                is so flawed that the industry did not use it (or any other evidence) to support that
                                argument in its legal challenge to UK plain packaging regulations.</p>
                            <table class="table table-inner table-condensed table-responsive">
                                <div class="table-custom header-inner bg-brown">The two faces of PMI on Illicit Trade
                                    and Plain Packaging
                                </div>
                                <tbody>
                                <tr class="table-bg-light-blue">
                                    <td>
                                        “tobacco manufacturers go to great lengths to design overt authentication
                                        features that are difficult, if not impossible, for counterfeiters to
                                        imitate.”<sup>3</sup> [2012]
                                    </td>
                                    <td>
                                        “[Cigarette packs] are easily counterfeited, despite the inclusion of innovative
                                        holograms, special inks and elaborate design details. Evidence shows that
                                        counterfeiters can make copies of even the most sophisticated paper stamps in
                                        three weeks.”<sup>4</sup> [2012]
                                    </td>
                                </tr>
                                <tr class="table-bg-light-brown">
                                    <td>
                                        “plain packs will be easier to xCounterfeit”<sup>5</sup> [2012]
                                    </td>
                                    <td>
                                        “…none of the counterfeit packs collected as part of the Empty Pack Survey [in
                                        Australia] were in plain packaging.”<sup>6</sup> [2015]
                                    </td>
                                </tr>
                                <tr class="table-bg-light-blue">
                                    <td>
                                        “KPMG has concluded that illicit tobacco in Australia has reached record levels…
                                        KPMG’s methodology is widely accepted”<sup>7</sup> [2014]
                                    </td>
                                    <td>
                                        “the Tobacco Claimants submit that standardised packaging would increase illicit
                                        trades. But they have conducted no material analysis or evidence (that they are
                                        prepared to place before the Court) of the impact on illicit
                                        trades…”<sup>8</sup> [2016]
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">7. Know the industry tactics</div>
                            <p><b>FRONT GROUPS.</b> The tobacco industry regularly establish and finance front groups or
                                co-opt third party organisations such as think tanks or libertarian groups, often via
                                public relations agencies, which are then used to give the impression of broad support
                                for the opposing arguments. For instance when plain packaging was proposed in Australia,
                                a front group was established, which claimed only to represent the retail industry.
                                However, internal documentation about this group and other industry counter measures
                                were leaked to the media, revealing that the group was receiving support from several
                                tobacco companies.<sup>10</sup></p>
                            <div class="col-lg-12 text-center">
                                <img height="250px" class="img-responsive"
                                     src="<?php echo $base_url; ?>img/lowresimg/guide-1-3.jpg">
                            </div>
                            <br>&nbsp;<br>
                            <br>&nbsp;<br>
                            <p>In the UK, a university study showed three-quarters of the organisations outside the
                                industry had direct financial links to one or more of the big four tobacco companies and
                                these were responsible for 60% of the anti-plain packaging campaigning identified. The
                                study, found that organisations which actively opposed plain packaging (including
                                campaigners and business groups) rarely reported any relationship with tobacco companies
                                transparently<sup>11</sup>.</p>
                            <p><b>SOPHISTICATED AND WELL PLANNED CAMPAIGNS</b>. In 2013 leaked internal tobacco industry
                                documents, including power points, revealed the inner-workings of Philip Morris
                                International’s (P M I) anti-Plain Packaging campaign in the UK during the previous
                                year. The two examples of slides shown below demonstrate P M I ’s key media messages and
                                the sophisticated and detailed timeline planning of which arguments to use and when.
                                Other parts of the documents demonstrate the use of third parties to promulgate the
                                messages<sup>12</sup>.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-violet">Leaked: PMI’s detailed strategy to oppose
                                Plain Packaging in the UK
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="col-lg-6">
                                    <img class="img-responsive" height="250px"
                                         src="<?php echo $base_url; ?>img/lowresimg/guide-1-3-2.jpg">
                                </div>
                                <div class="col-lg-6">
                                    <img class="img-responsive" height="250px"
                                         src="<?php echo $base_url; ?>img/lowresimg/guide-1-3-3.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>getting-prepared/establish-document-development-retention">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 1.2 Establish Document Development Retention</a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>collecting-the-evidence/evidence-review">Guide 2.1 Evidence
                            Review
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>getting-prepared/establish-document-development-retention">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>Guide
                            1.2 Establish Document Development Retention</a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>collecting-the-evidence/evidence-review">
                            Guide 2.1 Evidence Review<br><img class="pagination-url-forward-img"
                                                              src="<?php echo $base_url; ?>img/scroll-page.png"> </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'evidence-review':
            if ($var == 'og_desc') {
                $og_desc = 'There are considerable volumes of evidence, both research studies from a number of countries and statistical evidence from Australia, which demonstrates plain packaging is a policy that will contribute to reducing tobacco use. Standard texts on marketing and branding also show how effective packaging can be at attracting consumers and this is no different for tobacco products.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-green">Guide 2.1</div>
                        <div class="section-title fc-green">Evidence Review</div>
                    </div>
                    <div class="content-desc-cont">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p>
                                There are considerable volumes of evidence, both research studies from a number of
                                countries and statistical evidence from Australia, which demonstrates plain packaging is
                                a policy that will contribute to reducing tobacco use. Standard texts on marketing and
                                branding also show how effective packaging can be at attracting consumers and this is no
                                different for tobacco products.
                            </p>
                            <p>
                                In order to ensure robust policy development, governments should consider the full
                                evidence base relating to plain packaging, including all the arguments against the
                                policy put forward by the industry. Good evidence leads to good policy but also, in case
                                of legal challenge, a <i>careful record</i> of what evidence has been considered, when
                                and by whom, can be crucial in demonstrating proper due process.
                            </p>
                            <p class="section-tertiary-title">The review of the evidence should include:</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-green">1. Supporting research evidence</div>
                            <div class="section-secondary-sub-title fc-green"><i>(full details at <a
                                            href="<?php echo $base_url; ?>evidence/research-evidence"><b
                                                class="fc-green">Reference Section G: RESEARCH EVIDENCE)</b></a></i>
                            </div>
                            <p>
                                Over the course of 20-30 years there have been many peer reviewed scientific research
                                studies looking at the likely impact plain packaging of tobacco would have on smoking
                                behaviours and attitudes and how that would impact on smoking rates. Research has been
                                conducted in 10 different countries using a range of methodologies and each study taken
                                in isolation only provides part of the picture.
                            </p>
                            <p>
                                Countries that have already adopted plain packaging have commissioned independent
                                reviews of the research to ensure that there is a clear, complete and balanced picture
                                of what the overall evidence is on the impact plain packaging will have. By the time of
                                the Hammond review in 2014, a total of 69 original empirical research studies were
                                reviewed (as of October 2016 that number had increased to over 75 relevant studies). The
                                4 reviews show that the evidence on plain packaging is notable for its breadth and
                                diversity of methods but also for its consistency in the results. The evidence reviews
                                were:
                            <ol class="custom list-style-none">
                                <li>i. Cancer Council Victoria (Australia 2011)<sup>1</sup></li>
                                <li>ii. The Stirling Review (United Kingdom 2012 and updated 2013)<sup>2</sup></li>
                                <li>iii. The Chanter Review (United Kingdom 2014)<sup>3</sup></li>
                                <li>iv. The Hammond Review (Ireland 2014)<sup>4</sup></li>
                            </ol>
                            </p>
                            <p>All these reviews reach the same conclusion: that there is strong and highly consistent
                                evidence to support that plain packaging would contribute to its objectives (as set out
                                in <a href="<?php echo $base_url; ?>getting-prepared/set-policy-objectives"><b
                                            class="fc-green">Guide 1.1</b></a>).</p>
                            <p>The Chantler Review notably concluded that <b>“[all the evidence] points in a single
                                    direction, and I am not aware of any convincing evidence pointing the other
                                    way.”</b></p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-green">2. Post-implementation evidence from Australia
                                and elsewhere
                            </div>
                            <div class="section-secondary-sub-title fc-green"><i>(full details in <a
                                            href="<?php echo $base_url; ?>evidence/austalia-post-implementation-evidence"
                                            class="fc-green"><b>Reference Section H: AUSTRALIAN POST IMPLEMENTATION
                                            EVIDENCE)</b></a></i></div>
                            <div class="col-lg-12">
                                <div class="col-lg-8">
                                    <p><b>The official Post Implementation Review (P I R)</b> was published by the
                                        Australian government in February 2016. The review concludes that:</p>
                                    <p><i>“While the full effect of the tobacco plain packaging measure is expected to
                                            be realised over time, the evidence examined in this PIR suggests that the
                                            measure is achieving its aims. This evidence shows that tobacco plain
                                            packaging is having a positive impact on its specific mechanisms as
                                            envisaged in the TPP Act. All of the major datasets examined also showed
                                            ongoing drops in national smoking prevalence in Australia.”</i></p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="fc-brown fs-20">One quarter of the 2.2 percentage point drop in prevalence
                                        is attributed to plain packaging. That’s equivalent to <b>118,000 less people
                                            smoking in Australia in just 3 years</b> as a direct result of plain
                                        packaging</p>
                                </div>
                            </div>
                            <p>Plain packaging contributed a statistically significant decline in smoking prevalence of
                                0.55 percentage points over a 34 month post implementation period, one quarter of the
                                total decline in average prevalence rates observed.<sup>6</sup></p>
                            <p><b>Official statistics on smoking rates</b> and tobacco consumption in Australia are
                                published on the Department of Health’s website.<sup>7</sup> There are a range of
                                independent surveys conducted by different research organisations and using different
                                methods and cohorts. Each new survey has shown a continued fall in rates since
                                implementation of plain packaging in 2012.</p>
                            <p><b>The British Medical Journal edition of Tobacco Control in April 2015</b> on the
                                implementation and evaluation of the Australian plain packaging policy, included 18
                                research papers<sup>11</sup> dealing with various aspects of policy impact and
                                implementation. These demonstrated that plain packs were impacting positively on the
                                aims and objectives of the policy.</p>
                            <p>The studies also showed that, contrary to the tobacco industry predictions, there was no
                                evidence that plain packaging led to lower prices for tobacco products or to an increase
                                in the use of illicit tobacco products.</p>
                            <div class="div-format-3 bg-light-brown">
                                <div class="section-secondary-title">Australia’s declining smoking rates</div>
                                <ul>
                                    <li>In 2014-15 14.7% of adults aged 18 years and over smoked daily (approximately
                                        2.6 million smokers), decreasing from 16.1% in 2011-2012<sup>8</sup></li>
                                    <li>From 2012 to 2015 there was an overall 20% decline in the proportion of
                                        secondary student and young adults (aged 18–24) smoking at least 100 cigarettes
                                        in their lifetime<sup>9</sup>.
                                    </li>
                                    <li>In 2014, 5% of 12 – 17 year olds were current smokers down from 7% in both 2011
                                        and 2008<sup>10</sup></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-green">3. Evidence about branding on packaging and
                                its influence on smoking
                            </div>
                            <div class="section-secondary-sub-title fc-green"><i>(Full details on this topic are set out
                                    in <a href="<?php echo $base_url; ?>evidence/tobacco-product-branding"><b
                                                class="fc-green">Reference Section I: BRANDING ON TOBACCO PACKAGING)</b></a></i>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-8">
                                    <p>It is useful to consider tobacco packaging within the broader context of
                                        branding, marketing and packaging of products more generally.</p>
                                    <p><b>Marketing theory</b> demonstrates that packaging has a number of functions
                                        including assisting consumers to identify and distinguish brands but that it is
                                        also used to promote the product as an important component of overall marketing
                                        strategy. Packaging can heighten a product’s appeal and create positive
                                        impressions and emotional connections to help ‘drive the sale’.</p>
                                    <p><b>Packaging of tobacco products</b> has been shown to be more important as a
                                        promotional tool than for other products. Firstly, in many countries where there
                                        are TAPS bans it is the last remaining means of advertising a brand. Secondly,
                                        tobacco product packs are a ‘badge product’ because users regularly openly
                                        display their packs in public.</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="fc-brown fs-20">“…the pack provides a direct link between consumers and
                                        manufacturers, and is particularly important for consumer products such as
                                        cigarettes, which have a high degree of social visibility. Unlike many other
                                        consumer products, cigarette packages are displayed each time the product is
                                        used and are often left in public view between uses. As a result, both smokers
                                        and non-smokers report high levels of exposure to tobacco packaging…”</p>
                                    <p class="fc-brown fs-14">Tobacco Labelling & Packaging Toolkit: A guide to FCTC
                                        Article 11. David Hammond, 2009</p>
                                </div>
                            </div>
                            <p><b>Internal tobacco industry documents show the importance of packaging in promoting
                                    tobacco products.</b> There have been a number of studies looking into internal
                                industry documents that have been leaked or released in US litigation settlements. The
                                Hammond Review in particular includes the results of this research which demonstrates
                                how the industry places significant importance on the role of packaging in promoting and
                                advertising its product.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-green">4. Conduct a market survey of the tobacco
                                products and packaging
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-8">
                                    <p><b>A survey of tobacco products</b> (and their packaging) available on the market
                                        in a country can assist in the design of the policy. It also acts as a
                                        demonstration of what branding exists on the market which can assist in showing
                                        why the policy is necessary. The issues that the survey should address include:
                                        what is the most common form of packet for each type of product? Are there any
                                        particularly novel forms of packaging? Is certain packaging clearly aimed at a
                                        certain sections of the community? Are there brand families that continue to
                                        mislead consumers as to the relative harms of each brand variant (for instance
                                        are there ‘gold’ and ‘silver’ variants of a particular brand)?</p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <img class="img-responsive" height="250px"
                                         src="<?php echo $base_url; ?>img/muliple-packs.jpg">
                                </div>
                            </div>
                            <p><b>A comprehensive sample of the tobacco product packaging</b> available in a country
                                should be kept as it can be very useful for demonstrations and as evidence in case of
                                legal challenge. One of the most powerful ways of demonstrating the need for plain
                                packaging to people unfamiliar with smoking or tobacco control is to show examples of
                                attractive or health reassurance packs that are available on the domestic market.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-green">5. Country specific statistics on smoking
                                prevalence and tobacco consumption
                            </div>
                            <p>In order to establish that it is necessary and justified to introduce plain packaging,
                                the aims and objectives should be set within the context of a country’s public health
                                agenda which will include consideration of the smoking prevalence and tobacco
                                consumption rates, and whether these have been falling, rising or stagnating.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-green">6. Arguments opposing plain packaging</div>
                            <div class="section-secondary-sub-title fc-green"><i>(full details in <a
                                            href="<?php echo $base_url; ?>evidence/opposing-arguments-and-how-to-counter-them"><b
                                                class="fc-green">Reference Section J: OPPOSING ARGUMENTS AND
                                            EVIDENCE</b>)</a></i></div>
                            <div class="col-lg-12">
                                <div class="col-lg-8">
                                    <p>It is important for a full and complete policy development process to properly
                                        consider the views and arguments of the tobacco industry, proxy organisations or
                                        other interested stakeholders. This should include the industry’s analysis of
                                        the evidence relating to the impact on smoking rates in Australia
                                        post-implementation. In addition, the wider impacts should be carefully
                                        considered, in particular the potential or alleged links to down trading and
                                        illicit trade. This can lead to better a policy development but importantly it
                                        protects a government from accusations of an unfair process.</p>
                                    <p>This process should take into account the vested interests of those views and
                                        also where legitimate criticisms of the opposing arguments have been made. For
                                        instance, none of the expert analyses or studies relied upon by the tobacco
                                        industry to support their claims have been subjected to peer review process, but
                                        have been the subject of both academic12 and judicial criticism. The judge in
                                        the High Court legal challenge to UK plain packaging laws said that:</p>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <img class="responsive" height="400px"
                                         src="<?php echo $base_url; ?>img/plain-packaging.jpg">
                                </div>
                            </div>
                            <p><i>“On the basis of my own review of the methodologies adopted by the [tobacco
                                    companies’] experts … I conclude that that body of expert evidence does not accord
                                    with internationally recognised best practice”<sup>13</sup>.</i></p>
                            <p>As the <a
                                        href="<?php echo $base_url; ?>evidence/opposing-arguments-and-how-to-counter-them"><b
                                            class="fc-green">Reference Section J: OPPOSING ARGUMENTS AND
                                        EVIDENCE</b></a> shows, the tobacco industry arguments opposing plain packaging
                                are almost wholly unfounded and there are a number of research studies that have
                                demonstrated this; but a fair process requires proper consideration of all views.</p>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="section-secondary-title fc-green">7. Local evidence and research</div>
                            <p>In addition to the solid global evidence base supporting the adoption of plain packaging,
                                it is a policy recommended by the implementation guidelines to the evidence based WH O F
                                C T C . This provides effective grounding for a government decision to proceed with the
                                policy, without the necessity of commissioning new local research or studies into its
                                likely impact in a particular country. From a legal perspective, this position has been
                                confirmed in the ruling by the international investment tribunal in <b>PMI v Uruguay</b>
                                <sup>15</sup>.</p>
                            <p>However, governments should not be dissuaded from commissioning or conducting studies or
                                research into the policy in their country. Additional evidence will be useful for any
                                government seeking to defend the policy against tobacco industry attacks. In addition,
                                there may be circumstances particular to a country that would warrant new research. For
                                instance, in Uruguay there is a brand of cigarettes that has packaging using a colour
                                very similar to the green/brown colour used for tobacco product plain packaging in
                                Australia, UK, France, Ireland and Hungary. Positive associations may have already
                                developed in relation to that colour by some consumers. Some country specific research
                                into the most appropriate colour to use could be of use in such circumstances.</p>
                        </div>
                        <div class=" col-lg-10 col-lg-offset-1">
                            <p class="text-center"><img class="text-center img-responsive"
                                                        src="<?php echo $base_url; ?>img/A-selection-of-cigarette-packs.jpg"><span
                                        class="text-note">Add pictures of packaging from your country to the policy briefings in <a
                                            href="<?php echo $base_url; ?>policy-tools/policy-briefs"><b
                                                class="fc-green">Reference Section A.</b></a></span></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>getting-prepared/prepare-tobacco-industry-interference">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 1.3 Prepare for Tobacco Industry Interference</a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>collecting-the-evidence/regulatory-impact-analysis">Guide 2.2
                            Regulatory Impact Analysis
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>getting-prepared/prepare-tobacco-industry-interference">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>Guide
                            1.3 Prepare for Tobacco Industry Interference</a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>collecting-the-evidence/regulatory-impact-analysis">
                            Guide 2.2 Regulatory Impact Analysis<br><img class="pagination-url-forward-img"
                                                                         src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'regulatory-impact-analysis':
            if ($var == 'og_desc') {
                $og_desc = 'The purpose of a regulatory impact analysis is to provide a detailed and systematic appraisal of the potential positive and negative impacts of a new law or regulation in order to assess whether it is likely to achieve the desired objectives and what the potential unintended consequences may be.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-dark-green">Guide 2.2</div>
                        <div class="section-title fc-dark-green">Regulatory Impact Analysis</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-green">1. What is it and why is it needed?</div>
                        <p>The purpose of a regulatory impact analysis is to provide a detailed and systematic appraisal
                            of the potential positive and negative impacts of a new law or regulation in order to assess
                            whether it is likely to achieve the desired objectives and what the potential unintended
                            consequences may be.</p>
                        <p>This analysis is not always a necessary requirement and may be unusual for some governments
                            for a public health measure. However, an assessment of the predicted economic, social and
                            public health impacts can assist with the arguments for proceeding with plain packaging that
                            need to be made in government and with the public.</p>
                        <p>In both domestic and international courts, the tobacco industry regularly alleges that
                            tobacco control laws, especially plain packaging, are arbitrary, not supported by evidence
                            and not adopted with proper due process. A regulatory impact analysis can act as an internal
                            record of the government’s effective policy development and can help to protect the policy
                            against legal challenges.</p>
                        <p>In some countries, for instance the UK, an impact assessment is a government requirement for
                            any policy that has an impact on business, with specified procedures for how one must be
                            produced. In other countries, such as Kenya, there is specific legislation that stipulates
                            when a regulatory impact assessment must be carried out and what it must
                            contain.<sup>1</sup></p>
                        <p><a href="<?php echo $base_url; ?>policy-tools/regulatory-impact-analysis-ref"><b
                                        class="fc-dark-green">Reference Section B</b></a> contains a draft template for
                            a regulatory impact assessment that can be adapted for a particular country.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-green">2. How to approach a regulatory impact
                            analysis
                        </div>
                        <p class="text-center"><img class="text-center img-responsive"
                                                    src="<?php echo $base_url; ?>img/cycle.jpg"></p>
                        <p><br>The graphic above shows the process for undertaking and recording a regulatory impact
                            assessment. It will incorporate the evidence review of the policy (<i>see</i> <b>Guide
                                2.1</b>) when the options are assessed at stage 4. An assessment of the options could
                            also include undertaking stakeholder input or a public consultation (<i>see</i> <b>Guide
                                2.3</b>). Ultimately it will lead to a recommendation of a preferred option for the
                            government decision makers.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-green">3. Examples of regulatory impact assessments
                            for plain packaging of tobacco policies
                        </div>
                        <p><b>Ireland produced a regulatory impact assessment</b> that looked at the costs and benefits
                            of the policy. It concludes that:</p>
                        <p><i>“The implementation of this measure together with the other measures outlined in Tobacco
                                Free Ireland would have the benefit of reducing smoking prevalence in Ireland and
                                thereby reducing deaths associated with smoking related diseases. This in turn would
                                reduce the costs to the state related to smoking related diseases. A very conservative
                                estimate of the costs of illness attributable to smoking was in the region of €664
                                million in 2009. The cost of premature mortality in Ireland due to smoking in the same
                                year was estimated at €3.5 billion.”</i><br><a
                                    href="health.gov.ie/wp-content/uploads/2013/12/here.pdf" target="_blank">health.gov.ie/wp-content/uploads/2013/12/here.pdf</a>
                        </p>
                        <p><b>France did not produce an impact assessment</b> and this was used as an argument to
                            challenge its legality under the French constitution although the argument was dismissed.
                        </p>
                        <p><b>New Zealand produced a similar impact assessment</b> to Ireland. It concludes that:</p>
                        <p><i>“The status quo does not address the continuing ability of the tobacco industry to use
                                packaging in a way that allows advertising and promotion of tobacco products, despite
                                the ban on tobacco advertising (and other controls). Similarly, though to increase
                                health warning coverage on tobacco packets would reduce the amount of space left on the
                                packet for industry promotions, it does not fully address this gap… Accordingly, this
                                regulatory impact statement recommends that option 3, Regulatory change to require plain
                                packaging of tobacco product.”</i><br><a
                                    href="health.govt.nz/system/files/documents/pages/regulatory-impact-statement-plain-packaging-tobaccoproducts.pdf"
                                    target="_blank">health.govt.nz/system/files/documents/pages/regulatory-impact-statement-plain-packaging-tobaccoproducts.pdf</a>
                        </p>
                        <p><b>The UK produced an economic impact</b> assessment which fully monetised the impact of the
                            policy on the UK economy as a whole and concluded that it would lead to a potential <b>£30billion
                                benefit over 10 years compared to a £5billion cost</b> (most of the costs were loss of
                            tax revenues from the reduction in tobacco consumption). But the sort of detailed
                            calculations undertaken by the UK can be attacked by the tobacco industry as they rely on
                            assumption and so even where one is produced, an impact assessment should not be relied on
                            as the principle reason for proceeding, but rather one element of the decision making
                            process. In legal challenges in the UK, the tobacco industry focussed on what it said were
                            flaws in the economic impact assessment (although ultimately the court did not agree with
                            the tobacco companies).<br><a
                                    href="gov.uk/government/uploads/system/uploads/attachment_data/file/403493/Impact_assessment.pdf"
                                    target="_blank">gov.uk/government/uploads/system/uploads/attachment_data/file/403493/Impact_assessment.pdf</a>
                        </p>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>collecting-the-evidence/evidence-review">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 2.1 Evidence Review
                        </a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>collecting-the-evidence/stakeholder-input-public-consultation">
                            Guide 2.3 Stakeholder Input / Public Consultation
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>collecting-the-evidence/evidence-review">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>
                            Guide 2.1 Evidence Review
                        </a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>collecting-the-evidence/stakeholder-input-public-consultation">
                            Guide 2.3 Stakeholder Input / Public Consultation
                            <br><img class="pagination-url-forward-img"
                                     src="<?php echo $base_url; ?>img/scroll-page.png"> </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'stakeholder-input-public-consultation':
            if ($var == 'og_desc') {
                $og_desc = 'The STAKEHOLDER INPUT section of the Reference Materials provides an example draft public consultation TEMPLATE that can be adapted for a particular country.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-blue-green">Guide 2.3</div>
                        <div class="section-title fc-blue-green">Stakeholder Input / Public Consultation</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1"><p><a
                                    href="<?php echo $base_url; ?>policy-tools/consultation-document-template"><b
                                        class="fc-blue-green">Reference Section C</b></a> provides an template draft
                            public consultation that can be adapted for a particular country.</p></div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green">1. What is it and why is it needed?</div>
                        <p>For novel or complimentary tobacco control polices in particular, allowing all potential
                            stakeholders, including industry, the opportunity to make submissions or comments means the
                            policy is developed having taken all issues and views into account. The advantages of a
                            consultation are:</p>
                        <ul class="custom ">
                            <li>Government may receive useful comments from public health organisations and experts</li>
                            <li>Tobacco companies may submit comments in a transparent fashion rather than behind closed
                                doors.
                            </li>
                            <li>From a legal perspective, consultation gives governments another rebuttal to the typical
                                tobacco industry arguments about poorly crafted policies and thoughtless regulatory
                                processes.
                            </li>
                            <li>Media coverage of the consultation can help promote the measures in advance of
                                implementation
                            </li>
                        </ul>
                        <p>Most countries (but not all) that have adopted plain packaging laws, did so after a process
                            that allowed stakeholder input.</p>
                        <p>The process for stake holder input should be guided by the normal administrative procedures
                            in each country. One option is to have full public consultation; alternatively the process
                            may, for instance, form part of parliamentary committee procedures allowing key stakeholders
                            to make written submissions or by way of public hearings which can be a shorter procedure.
                            In Ireland the Public Health (Standardised Packaging of Tobacco) Bill was referred to the
                            parliamentary Joint Committee on Health, which ran public hearings for key stakeholders.</p>
                        <p>It may be unusual for the Health Ministry in some countries to run public consultations in
                            respect of public health measures. Governments do not need to undertake a process for plain
                            packaging that is outside of its normal constitutional requirements. It is also important to
                            bear in mind that a poorly run public consultation which does not allow effective responses
                            or which is a mere sham because the government has already made up its mind, can lead to
                            greater legal problems than not running one at all.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green">2. Article 5.3 of the WHO FCTC</div>
                        <p>“When seeking comments or submissions from tobacco companies, Governments need to be careful
                            to comply with Article 5.3 of the WHO FCTC which stipulates that Parties shall act to
                            protect tobacco control policies from commercial and other vested interests of the tobacco
                            industry. Given that plain packaging involves technical regulations that impact on the way
                            in which a product is manufactured, it can be important that those parts of industry that
                            are impacted be allowed to have their input considered. They key to interaction with the
                            industry is to be clear about exactly what issues comments are sought on and to ensure there
                            is complete transparency in respect of any meeting or discussion.</p>
                        <p>Tobacco companies can provide written submissions, which should then made publicly available.
                            Meetings can take place but should be limited to where specific information is needed in
                            relation to potential costs to industry or to technical drafting of the legislation which
                            may impact on the manufacturing process in an unnecessary way. Where meetings do take place,
                            full records should be made publicly available about the arrangements, who was present at
                            the meeting and minutes of what was discussed.”</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green">3. How should it be run?</div>
                        <p>If a public consultation is run by the Health Ministry, sufficient time needs to be factored
                            into the process to allow stakeholders to respond and also to allow the Health Ministry
                            officials time to properly consider the submissions and any amendments to the legislation
                            that flow from those submissions.</p>
                        <p>Consultations on tobacco product plain packaging have generated huge volumes of responses
                            because of campaigns funded by the tobacco industry on one side, and tobacco control
                            advocacy groups on the other. This led to 650,000 responses to the first UK consultation –
                            more than any previous public consultation. If resources are not available to consider huge
                            numbers of responses an alternative method of allowing key stakeholders to provide their
                            submissions should be used which invites the key interested bodies or organisations to make
                            submissions. A consultation is not a vote but a means of ensuring all relevant issues and
                            views are considered.</p>
                        <p>A decision must be taken as to the best stage to have stakeholder input and this will depend
                            on local circumstances. One option is to consult or take submissions on the principle of
                            whether or not to proceed with the plain packaging, but it may be preferable to consult not
                            on whether to proceed but on on the detail of proposal.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green"> 4. Key principles</div>
                        <ul class="custom">
                            <li>Set clear time frames — these need to be tailored to the specific country’s
                                circumstances, for the purposes of planning a legislative timetable it is suggested that
                                a consultation run for a minimum of 6 weeks and that the time to review and consider the
                                responses be at least 4 weeks, although this is very dependent on how many responses are
                                received.
                            </li>
                            <li>Set clear parameters of the policy intentions, and the questions that are being asked
                            </li>
                            <li>Ensure that all relevant stakeholders have convenient access to the consultation
                                document and an efficient means of responding
                            </li>
                            <li>Mobilise an alliance of health orientated stakeholders to respond and to communicate
                                with the media
                            </li>
                            <li>Do not commit to responding to individual submissions.</li>
                        </ul>
                        <p>A consultation document also needs to be meaningful and provide stakeholders with sufficient
                            information to respond. It is recommended that it includes the following:</p>
                        <p>
                        <ol class="custom list-style-none">
                            <li>a. the existing tobacco control measures already in place in the country;</li>
                            <li>b. the current smoking prevalence and consumption rates and the costs and harms to
                                society from these;
                            </li>
                            <li>d. a proposal that plain packaging of tobacco products be introduced (alongside any
                                other tobacco control measures that are being introduced at the same time);
                            </li>
                            <li>e. the aims and objectives of the policy (as described in <a
                                        href="<?php echo $base_url; ?>getting-prepared/set-policy-objectives"><b
                                            class="fc-blue-green">Guide 1.1</b></a>);
                            </li>
                            <li>f. a summary of the evidence base that supports the introduction of plain packaging (<a
                                        href="<?php echo $base_url; ?>collecting-the-evidence/evidence-review"><b
                                            class="fc-blue-green">Guide 2.1</a></b>);
                            </li>
                            <li>g. what the features the proposed legislation would include in sufficient detail to
                                allow comment (or a draft of the proposed legislation if that is available);
                            </li>
                            <li>h. the time frame that the government proposes;</li>
                            <li>i. how to make submissions and the deadline for them.</li>
                        </ol>
                        </p>
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="inner-box-style">
                                <div class="section-tertiary-title fc-brown">Country examples</div>
                                <ol class="custom list-style-none padding-0">
                                    <li><b class="fc-brown">1. NORWAY.</b> Public consultation paper [June 2015]<br><a
                                                href="http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=9009&iLang=EN"
                                                target="_blank">http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=9009&iLang=EN</a>
                                    </li>
                                    <br>
                                    <li><b class="fc-brown">2. UNITED KINGDOM.</b> Public consultation paper [April
                                        2012]<br><a
                                                href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/170568/dh_133575.pdf"
                                                target="_blank">https://www.gov.uk/government/uploads/system/uploads/<br>attachment_data/file/170568/dh_133575.pdf</a>
                                    </li>
                                    <br>
                                    <li><b class="fc-brown">3. SINGAPORE.</b> Public consultation paper [March 2016]<br><a
                                                href="http://www.healthhub.sg/sites/assets/Assets/PDFs/HPB/News/HPB%20News%2029Dec2015%20-%20Public%20Consultation_Tobacco%20Control.pdf"
                                                target="_blank">http://www.healthhub.sg/sites/assets/Assets/PDFs/HPB/News/<br>HPB%20News%2029Dec2015%20-%20Public%20Consultation_Tobacco%20Control.pdf</a>
                                    </li>
                                    <br>
                                    <li><b class="fc-brown">4. CANADA.</b> Public consultation paper [May 2016]<br><a
                                                href="http://healthycanadians.gc.ca/health-system-systeme-sante/consultations/tobaccopackages-emballages-produits-tabac/document-eng.php"
                                                target="_blank">http://healthycanadians.gc.ca/health-system-systeme-sante/consultations/tobaccopackages-emballages-produits-tabac/document-eng.php</a>
                                    </li>
                                    <br>
                                    <li><b class="fc-brown">5. NEW ZEALAND.</b> Public consultation paper [May 2016]<br><a
                                                href="http://www.health.govt.nz/publication/standardised-tobacco-products-and-packagingdraft-regulations"
                                                target="_blank">http://www.health.govt.nz/publication/standardised-tobacco-products-and-packagingdraft-regulations</a>
                                    </li>
                                    <br>
                                    <li><b class="fc-brown">6. IRELAND.</b> Report of the Joint Committee on Health
                                        following public stakeholder hearings [April 2014]<br><a
                                                href="https://www.oireachtas.ie/parliament/media/committees/healthandchildren/Public-Health-SPT-Bill--Vol-1.pdf"
                                                target="_blank">https://www.oireachtas.ie/parliament/media/committees/healthandchildren/Public-Health-SPT-Bill--Vol-1.pdf</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>collecting-the-evidence/regulatory-impact-analysis">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 2.2 Regulatory Impact Analysis
                        </a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>crafting-the-legislation/make-key-policy-decisions">
                            Guide 3.1 Make Key Policy Decisions
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>collecting-the-evidence/regulatory-impact-analysis">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>
                            Guide 2.2 Regulatory Impact Analysis
                        </a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>crafting-the-legislation/make-key-policy-decisions">
                            Guide 3.1 Make Key Policy Decisions
                            <br><img class="pagination-url-forward-img"
                                     src="<?php echo $base_url; ?>img/scroll-page.png"> </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'make-key-policy-decisions':
            if ($var == 'og_desc') {
                $og_desc = 'Plain Packaging of Tobacco Products involves many different elements and as with all tobacco control policies, the tobacco industry will look for loop holes or ways to get around or undermine the policy. It is important to get the detail right to ensure the policy is robust and ‘future proofed’.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-blue">Guide 3.1</div>
                        <div class="section-title fc-blue">Make Key Policy Decisions</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <p><b>Plain Packaging of Tobacco Products involves many different elements and as with all
                                tobacco control policies, the tobacco industry will look for loop holes or ways to get
                                around or undermine the policy. It is important to get the detail right to ensure the
                                policy is robust and ‘future proofed’.</b></p>
                        <p>This means the legislation will likely be quite detailed – aiming for simplicity risks the
                            tobacco industry developing novel ways to differentiate their products which don’t currently
                            exist on the market (<i>see</i> <b>GUIDE 3.2: DRAFTING THE LAW</b>).</p>
                        <p>The key initial policy development decisions are listed below.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue">1. Apply plain packaging to all tobacco product
                            categories
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <p><b>The WHO FCTC guidelines to Article 13 imply that plain packaging should be applied
                                        to all tobacco products.</b> Failure to include all tobacco products, could
                                    result in those products not subject to the requirements gaining market share (in
                                    Canada, for instance, flavoured cigarillos became popular after flavoured cigarettes
                                    were banned).</p>
                                <p>There must be good policy reasons for any decision to apply the policy to only some
                                    products because otherwise there is a risk that a claim would be made that the
                                    policy is discriminatory and in violation of World Trade Organization (WTO) rules
                                    (<i>see</i> <b>GUIDE 4.3 WTO NOTIFICATIONS</b>). Australia and Ireland’s legislation
                                    applies to all tobacco products. However, UK, Norway, France and Hungary apply the
                                    legislation to just cigarettes and hand rolled tobacco. Decisions in those countries
                                    were made because of the limited prevalence of less common tobacco products such as
                                    cigars or pipe tobacco, especially among younger people.</p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <div><img height="250px" class="img-responsive"
                                          src="<?php echo $base_url; ?>img/lowresimg/guide-3-1-1.jpg"></div>
                                <div><img height="250px" class="img-responsive"
                                          src="<?php echo $base_url; ?>img/lowresimg/guide-3-1-2.jpg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue">2. Regulate individual sticks</div>
                        <div class="col-lg-12">
                            <div class="col-lg-8"><p><b>All existing plain packaging legislation apply plain cigarette
                                        stick requirements.</b> White sticks with a white tip or imitation cork tip. In
                                    Australia an alpha numeric code is permitted that cannot amount to branding.
                                    Australia also stipulates the size and shape of the sticks because ‘slim sticks’ can
                                    create the impression that they are less harmful. In UK and Ireland, the brand name
                                    and variant is permitted in a specified typeface and location on the stick. It is
                                    recommended that sticks be regulated because failure to do so could lead to more
                                    branding and the use of attractive colours on the cigarette sticks themselves. If
                                    sticks are being regulated, then consideration should be given whether to allow the
                                    brand name on them or not.</p></div>
                            <div class="col-lg-4 text-center"><img height="300px"
                                                                   src="<?php echo $base_url; ?>img/cigarette.png">
                            </div>
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue">3. Minimum quantity per pack</div>
                        <p><b>Most countries are adopting 20 cigarettes as the minimum individual pack size</b> as part
                            of their plain packaging requirement. Australia and the EU also put minimum quantities on
                            hand rolled (or roll your own) tobacco per pack (30g). The legislation should also prohibit
                            the sale of tobacco in the absence of packaging as this prevents the sale of individual
                            cigarettes or bidi’s, a common practice in some countries.</p>
                        <p>The principle reason for prohibiting smaller packs and individual sticks is that these are
                            cheaper and therefore more accessible to young people and children, and thereby encourage
                            smoking initiation and addiction. This element of the measures is in accordance with WH O F
                            C T C article 16.4</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue">4. Information permitted on the pack</div>
                        <p><b>Other than the brand and variant name, and the mandatory prescribed health warnings, there
                                is information that a government may want to allow or require on tobacco packs.</b>
                            These other pieces of information (sometimes given as symbols) may already appear on packs.
                            Depending on how the legislation is drafted, it may need to specifically provide for or
                            allow any additional information that is required by other laws (ie consumer protection) or
                            is otherwise desirable. Examples could include:</p>
                        <div class="col-lg-12 margin-btm-30">
                            <div class="col-lg-6">
                                <ul class="custom">
                                    <li>bar codes</li>
                                    <li>age of sale</li>
                                    <li>place of origin</li>
                                    <li>duty tax paid stamps or stickers</li>
                                    <li>manufacturer's tax name and address for consumer protection</li>
                                    <li>amount of product per pack</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="custom">
                                    <li>Tar, Nicotine and CO2(TNC) emissions*</li>
                                    <li>information about assistance with quitting</li>
                                    <li>track and trace code or other fraud prevention markings</li>
                                    <li>recycling symbol*</li>
                                    <li>no littering symbol*</li>
                                </ul>
                            </div>
                        </div>
                        <p><i>* Symbols for recycling and no littering are not permitted in Australian, Irish or UK
                                legislation because they imply a positive social connection for the tobacco industry. W
                                H O F C T C Article 11 implementation guidelines (paragraph 44) recommends that TNC
                                emissions information should not be permitted on packs because emission yields are
                                misleading to consumers.)</i></p>
                        <p>A review of existing requirements and legislation (including general consumer laws that apply
                            to all product packaging) is recommended to identify which information should continue,
                            which should be not be allowed, and whether there is legislation that already permits or
                            requires any information on tobacco packaging. This will inform the how the law is
                            drafted.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue">5. Apply only to retail packaging</div>
                        <p><b>In order to ensure that the policy is least restrictive, it needs to be aimed at consumers
                                and no wider.</b> Therefore it should be applied to ‘retail packaging’ or only packaging
                            that will or could be seen by consumers; rather than ‘in trade’ packaging that is only used
                            in warehouses or wholesalers.</p>
                        <p>There are good legal reasons for this limitation. Plain packaging is a measure designed to
                            merely control the use of tobacco trademarks rather than to completely prohibit the
                            trademarks in all circumstances. Applying the measure only to packing that consumers may see
                            will assist in defending some of the legal claims the tobacco industry may make against the
                            policy.</p>
                        <p>In some countries small shop keepers use the large boxes that are normally only used in
                            warehouses and which may not fall within a definition of ‘retail packaging’. In such
                            situations, where consumers may be exposed to branding on what is normally ‘trade
                            packaging’, a government may consider extending the application of the law and if so,
                            different ways of drafting the legislation can be developed and CTFK can assist or advice on
                            possible options.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue">6. Transition arrangements and sell through
                            periods
                        </div>
                        <p><b>Manufacturers and retailers will have existing stock that does not comply with new
                                packaging laws.</b> Sufficient notice of when the law will come into force ensures that
                            producers and retailers have sufficient time to sell existing stock before changing
                            packaging to comply with the new law. This weakens any industry argument that it has
                            suffered loss as a consequence of holding unsold stock. Australia allowed a 3 month sell
                            through period for plain packaging, after which old packs could no longer be sold; the UK
                            allowed a full year.</p>
                        <p>The question of what is a sufficient period of time may differ from country to country.
                            Officials should consider what periods have been allowed for previous packaging
                            requirements, such as changes to health warnings.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue">7. Technical details in parliamentary act or
                            subsequent regulations
                        </div>
                        <p><b>It is recommended that new and specific legal authority is obtained from the legislature
                                or parliament to implement the policy, rather than relying on existing Ministerial or
                                executive powers.</b></p>
                        <p>A parliamentary Act could provide simple powers so that the Minister of Health can later
                            adopt regulations or a decree that set out the detailed requirement; or the Act could set
                            out most of the detailed requirements. This will depend on the style of legislative drafting
                            and law-making practices for each country as well as the political situation. A shorter Act,
                            or a short provision that is part of a wider tobacco control Act, which just provides simple
                            powers may be easier to get through parliament and less subject to political interference.
                            On the other hand, if there is doubt as to whether the Minister will move quickly to bring
                            in regulations, technical orders or decrees, then it may be better to include the detail in
                            the Act and set a legislative timetable for implementation.</p>
                        <p>If simple powers are taken it is important they are drafted so as to give authority to
                            regulate all aspects of the packaging as well as the appearance of individual tobacco
                            products such as cigarette sticks.</p>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>collecting-the-evidence/stakeholder-input-public-consultation">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 2.3 Stakeholder Input / Public Consultation
                        </a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>crafting-the-legislation/draft-the-law">
                            Guide 3.2 Draft the Law
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>collecting-the-evidence/stakeholder-input-public-consultation">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>
                            Guide 2.3 Stakeholder Input / Public Consultation
                        </a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>crafting-the-legislation/draft-the-law">
                            Guide 3.2 Draft the Law
                            <br><img class="pagination-url-forward-img"
                                     src="<?php echo $base_url; ?>img/scroll-page.png"> </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'draft-the-law':
            if ($var == 'og_desc') {
                $og_desc = 'Drafting the detailed legislation can take time and it is sensible to start the process early, making adjustments as policy decision are made. The International Legal Consortium at the Campaign for Tobacco- Free Kids can provide technical legal assistance with drafting the law.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-blue-green-2">Guide 3.2</div>
                        <div class="section-title fc-blue-green-2">Draft the Law</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <p>Drafting the detailed legislation can take time and it is sensible to start the process
                            early, making adjustments as policy decision are made. The International Legal Consortium at
                            the Campaign for Tobacco- Free Kids can provide technical legal assistance with drafting the
                            law.</p>
                        <p>This brief guide gives some of the key principles in approaching the drafting process for
                            plain packaging but full details are in <a
                                    href="<?php echo $base_url; ?>legislation-drafting-tools/drafting-the-legislation-in-detail"><b
                                        class="fc-blue-green-2">Reference Section D: DRAFTING THE LEGISLATION</b></a>,
                            together with <a
                                    href="<?php echo $base_url; ?>legislation-drafting-tools/template-draft-model-law"><b
                                        class="fc-blue-green-2">Reference Section F, which is a DRAFT MODEL LAW</b></a>.
                            These reference material provide recommended solutions to all the issues listed below, and
                            the reasons for them, together with straight forward options on how the legislation could be
                            drafted. They draw on existing legislative examples and the policy development undertaken in
                            Australia, UK, Ireland and France.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green-2">1. Regulate every part of the pack</div>
                        <p>Every aspect of the packaging presents the tobacco industry with a potential opportunity to
                            introduce novel or different elements which could differentiate and promote the product and
                            undermine the intention to create truly standard packs. Experience shows that tobacco
                            companies will seek to exploit whatever avenue is left to them to differentiate their
                            product in a way that is attractive or which allows positive associations with the brand.
                            The guiding principle behind plain packaging is that the only means of differentiation is
                            through the brand and variant name, which are presented in a standard typeface. Achieving
                            this requires regulating each aspect of the packaging and the appearance of individual
                            products, such as cigarette sticks, including:</p>
                        <div class="col-lg-12 margin-btm-30">
                            <div class="col-lg-4">
                                <ul class="custom">
                                    <li>the exact color of each element of the packaging (exterior and interior)</li>
                                    <li>permitted text (such as name and address of manufacturer)</li>
                                    <li>typeface and text point size of text</li>
                                    <li>type of opening</li>
                                    <li>material used</li>
                                    <li>pack shape</li>
                                    <li>pack size</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="custom">
                                    <li>surface texture and embossing</li>
                                    <li>multipacks and multiple layers of packaging</li>
                                    <li>bevelled or rounded pack edges</li>
                                    <li>plastic wrappers and tear strips</li>
                                    <li>cigarette pack foil linings</li>
                                    <li>inserts, stickers and additional materials</li>
                                    <li>changeable packaging</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="custom">
                                    <li>sounds and smells</li>
                                    <li>quantity per pack</li>
                                    <li>flavouring</li>
                                    <li>bar codes and calibration marks</li>
                                    <li>track and trace or origin marks</li>
                                    <li>the length and nature of brand and variant names</li>
                                </ul>
                            </div>
                        </div>
                        <p>This means the legislation can end up being quite detailed – aiming for simplicity risks the
                            tobacco industry developing novel ways to differentiate their products.</p>
                        <div class="margin-btm-30 text-center">
                            <img class="img-responsive text-center" src="<?php echo $base_url; ?>img/anatomy.jpg">
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green-2">2. Emulate existing laws</div>
                        <p>The legislation in force in Australia, the UK, Ireland, France and Hungary (and at the time
                            of writing the proposed laws in New Zealand, Slovenia and Norway) are, in their effect, all
                            very similar (although there are some differences which are highlighted in this
                            toolkit).</p>
                        <p>There have been a number of positive legal rulings on challenges to plain packaging laws in
                            Australia, the EU and the UK, and a ruling is expected in early 2017 on a WTO dispute (<i>see</i>
                            <a href="<?php echo $base_url; ?>procedural-steps-for-a-secure-policy/wto-notification"><b
                                        class="fc-blue-green-2">Guide 4.3</b></a>). Some of the evidence supporting the
                            policy is based around the specific policy decisions that were first developed in Australia.
                            Deviating from those key evidence based policy decisions could risk providing tobacco
                            companies with sufficient grounds to mount legal challenges.</p>
                        <p>Countries considering plain packaging should therefore be cautious of introducing legislation
                            that differs significantly from the plain packaging laws already in force. Emulating
                            existing laws will allow the government to rely on both the evidence base and the positive
                            legal rulings from around the world.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green-2">3. Keep it flexible</div>
                        <p>It is prudent to adopt legislation that allows for subsequent changes through delegated
                            regulatory powers to the appropriate ministry. Unanticipated issues may arise and the
                            tobacco industry will inevitably try to find ways to undermine the policy.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green-2">4. Color</div>
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <p>The color of packs provides a good example of the need for detail and for emulating
                                    existing legislation. Unless the exact color required for the packaging is
                                    prescribed very precisely, variations of color will appear, defeating the intention
                                    of standardizing packaging. Simply requiring ‘brown’, or a ‘green/brown’ in
                                    legislation is insufficient. Australia commissioned research into which color was
                                    perceived to be the least appealing for tobacco packaging :</p>
                            </div>
                            <div class="col-lg-4 text-center"><img class="img-responsive text-center"
                                                                   src="<?php echo $base_url; ?>img/cigarette-box-color.jpg">
                            </div>
                        </div>
                        <p>Pantone 448C (opaque couche) with a matt finish is the dull brown/green color specified in
                            the Australian, UK, Ireland, France and Hungary legislation for the packaging.<sup>1</sup>
                        </p>
                        <p><b>Pantone Cool Grey 2 C</b> with a matt finish is the color specified in those countries for
                            any text permitted on the packaging, such as brand name or contact details.</p>
                        <p>Unless there is specific evidence or research that demonstrates different colors would be
                            more effective in a particular country at achieving the aims of the policy, it is
                            recommended that these colors are used in all plain packaging legislation because of the
                            research already conducted that demonstrates the colour to be effective. A ‘matt finish’ to
                            the surface should also be specified to avoid some packs appearing with a glossy finish.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green-2">5. Shape, size and opening of pack</div>
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <p>This is another area where it is recommended that particular care be taken to provide
                                    detail and to follow existing legislation. Many of the policy decisions in
                                    Australia, UK and Ireland, require cigarette packs must be in the form that is
                                    generally the standard or most common type of packet - a cuboid box made of
                                    cardboard with 20 cigarettes in it, which uses a flip top lid. Because this is the
                                    most common form of packaging for cigarettes, tobacco companies will not have to
                                    make any major adjustments to their machinery to produce this packaging and
                                    therefore it is a least restrictive approach which should be followed unless a
                                    different type or style of packet is more common in the particular country
                                    considering plain packaging.</p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img class="img-responsive text-center" src="<?php echo $base_url ?>img/shape.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green-2">6. Plain packaging ‘light’ policy should be
                            avoided
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <p>For instance, legislation should not allow for a small amount of space for branding
                                    on a pack, or permit certain figurative logos (such as a small logo in the same
                                    colour as the text such as in the picture below). With no specific evidence
                                    available as to whether or how effective such a policy would be, a policy choice of
                                    that nature could introduce unnecessary legal risks.</p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img class="text-center img-responsive"
                                     src="<?php echo $base_url; ?>img/lowresimg/plain-pack.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-blue-green-2">7. Include a trademark registration saving
                            provision
                        </div>
                        <p><b>There are important legal reasons to ensure that tobacco companies can maintain their
                                trademark registrations even if the use of those trademarks is severely restricted by
                                plain packaging.</b> There are international, regional and national laws which oblige
                            states to maintain trademark registrations. For instance Article 15 of the WTO Trade Related
                            aspects of Intellectual Property Rights Agreement (TRIPS) obliges member states to permit
                            registration of signs as trademarks so long as they are capable of distinguishing the goods
                            of one undertaking from those of another.</p>
                        <p>In most jurisdictions non-use of a trademark in practice can lead to applications for
                            de-registration of that trademark, typically after 5 years where there is no good reason for
                            the non-use.</p>
                        <p>If a country’s plain packaging laws mean that tobacco trademarks are fully prohibited or the
                            trademark registration will necessarily be liable to cancellation this may breach
                            international obligations. In addition, plain packaging is better viewed as a control on the
                            use of trademarks rather than a deprivation or expropriation of trademarks.</p>
                        <p>Therefore, most plain packaging legislation (for instance in Australia, UK and Ireland1) has
                            a trademark registration saving provision which states that the legislation does not amount
                            to a prohibition on the use of the trademarks in all circumstances, and that non-use of a
                            trademark as a result of the legislation amounts to a good reason for non-use.</p>
                        <p>The way in which plain packaging might otherwise intersect with a country’s domestic
                            trademark laws needs to be considered carefully.</p>
                        <p>An example of a trademark registration saving provision is in the <b>DRAFT MODEL BILL</b> at
                            Article 13.</p>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>crafting-the-legislation/make-key-policy-decisions">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 3.1 Make Key Policy Decisions
                        </a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>procedural-steps-for-a-secure-policy/coordinate-across-government">
                            Guide 4.1 Coordinate Across Government
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>crafting-the-legislation/make-key-policy-decisions">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>
                            Guide 3.1 Make Key Policy Decisions
                        </a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>procedural-steps-for-a-secure-policy/coordinate-across-government">
                            Guide 4.1 Coordinate Across Government
                            <br><img class="pagination-url-forward-img"
                                     src="<?php echo $base_url; ?>img/scroll-page.png"> </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'coordinate-across-government':
            if ($var == 'og_desc') {
                $og_desc = 'Because of issues such as business regulation, excise tax, and cooperation in combating the illicit trade in tobacco, the tobacco industry will often have closer links with Ministries other than Health Ministries — such as trade, business, treasury, customs and revenue, intellectual property and the foreign affairs office. These other Ministries will have their own concerns and agendas and may seek to delay or prevent adoption and implementation of plain packaging because of those concerns.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-orange">Guide 4.1</div>
                        <div class="section-title fc-orange">Coordinate Across Government</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <p>Because of issues such as business regulation, excise tax, and cooperation in combating the
                            illicit trade in tobacco, the tobacco industry will often have closer links with Ministries
                            other than Health Ministries — such as trade, business, treasury, customs and revenue,
                            intellectual property and the foreign affairs office. These other Ministries will have their
                            own concerns and agendas and may seek to delay or prevent adoption and implementation of
                            plain packaging because of those concerns.</p>
                        <p>To assist with the initial coordination with other Government Ministries this Toolkit
                            includes a series of <b>POLICY BRIEFING PAPERS</b> which provide basic information about the
                            policy and address the key opposing arguments, explaining the evidence and why those
                            arguments are flawed.</p>
                        <p>Plain packaging does have implications for these other Ministries which they will need to
                            provide input on, for instance, plain packaging will impact on treasury receipts and there
                            are alleged impacts on down trading and illicit trade (<i>see</i> <b>GUIDE 1.3</b>).
                            Notwithstanding these concerns, the critical public health agenda should remain the
                            priority.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-orange">1. Whole of government approach</div>
                        <p>It is important that coordination occurs across departments to ensure that there is an agreed
                            approach, that the other Ministries understand the need for the policy and are not
                            influenced by the industry’s contrived arguments opposing it. It is useful to have agreed
                            lines on each of the key issues that will be alleged by the industry so that mixed messages
                            are not put out by different parts of government.</p>
                        <p>One possible approach is to form a cross government working group. Another is to ensure all
                            correspondence to any government department about plain packaging are directed to the
                            Ministry of Health for a response. Establishing a whole of government approach to the
                            policy, where possible, can be important for its success and early engagement with the other
                            Ministries can be key. For instance, in the UK the Her Majesty’s Revenue and Customs
                            produced a full analysis of the likely impact of plain packaging on the illicit market. This
                            analysis identified no evidence or reasons that plain packaging would increase the overall
                            burden of illicit tobacco1, which was highly useful in combatting industry arguments can be
                            key, depending on the political situation in a particular country.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-orange">2. The issues on which cross government agreement
                            should be developed
                        </div>
                        <ul class="custom">
                            <li>The impact of plain packaging on illicit trade – Ministry of Customs and Revenue.</li>
                            <li>The impact of alleged down trade or price reductions – Treasury / Ministry of
                                Business/Finance.
                            </li>
                            <li>The impact on tax receipts – Treasury.</li>
                            <li>The impact on tobacco industry jobs – Ministry of Business/Finance.</li>
                            <li>The impact on trademark registration and compatibility with intellectual property law –
                                Ministry for Intellectual Property.
                            </li>
                            <li>The ‘slippery slope’ argument (i.e. if tobacco now, what next – plain alcohol
                                packaging?) – Ministry responsible for Intellectual Property and food/alcohol
                                regulation.
                            </li>
                            <li>Compatibility with international legal obligations – Ministry of Foreign Affairs.</li>
                        </ul>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-orange">3. External experts and officials from other
                            governments
                        </div>
                        <p>It can sometimes assist to have external experts on these issues address officials from the
                            other Ministries. For instance, one of the arguments that is put forward most strongly by
                            the tobacco industry is that plain packaging will increase illicit trade. This argument can
                            be very effective in causing concern within other government departments or with Members of
                            Parliament. However, it is a contrived argument used by the industry to oppose many tobacco
                            control measures and the evidence to support the argument in relation to plain packaging is
                            extremely weak. There are a number of academic researchers who are able to effectively and
                            convincingly demonstrate how the industry is wrong in its allegations about illicit trade.
                            If a Ministry of Health considers that an external expert could assist in the policy
                            development or governmental/parliamentary processes, CTFK may be able help with identifying
                            appropriate persons and organising their visit.</p>
                        <p>In addition, government officials from countries that have already implemented plain
                            packaging are often willing assist to provide information about their policy development and
                            there are many instances of official government visits taking place in relation to the
                            proposed policy. It is highly recommended that Ministry of Health officials make contact
                            with counterparts in those countries that have already adopted plain packaging laws.</p>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>crafting-the-legislation/draft-the-law">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 3.2 Draft the Law
                        </a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>procedural-steps-for-a-secure-policy/obtain-legal-advice">
                            Guide 4.2 Obtain Legal Advice
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>crafting-the-legislation/draft-the-law">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>
                            Guide 3.2 Draft the Law
                        </a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>procedural-steps-for-a-secure-policy/obtain-legal-advice">
                            Guide 4.2 Obtain Legal Advice
                            <br><img class="pagination-url-forward-img"
                                     src="<?php echo $base_url; ?>img/scroll-page.png"> </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'obtain-legal-advice':
            if ($var == 'og_desc') {
                $og_desc = 'The tobacco industry has a long track record of using legal challenges to prevent or delay governments’ tobacco control measures. Countries that were early adopters of plain packaging laws have faced legal challenges in domestic and regional courts, in international investment arbitration tribunals and under the World Trade Organisation dispute settlement procedures. All the legal challenges decided, as of the end of 2016, have upheld the legality of plain packaging of tobacco products.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-dark-orange">Guide 4.2</div>
                        <div class="section-title fc-dark-orange">Obtain Legal Advice</div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <p>The tobacco industry has a long track record of using legal challenges to prevent or delay
                            governments’ tobacco control measures. Countries that were early adopters of plain packaging
                            laws have faced legal challenges in domestic and regional courts, in international
                            investment arbitration tribunals and under the World Trade Organisation dispute settlement
                            procedures. <b>All the legal challenges decided, as of the end of 2016, have upheld the
                                legality of plain packaging of tobacco products.</b></p>
                        <p>The key message is that if plain packaging of tobacco products is adopted using appropriate
                            domestic constitutional, administrative and legislative arrangements then there is no
                            inherent reason why plain packaging should be found unlawful. However, this toolkit can only
                            provide generalized legal information taking into account the academic literature and the
                            results of legal challenges that have already been decided across different jurisdictions.
                            To protect the policy in the face of legal challenge it is important to undertake the
                            appropriate processes and sound legal drafting. The procedural steps and drafting advice set
                            out in this toolkit should provide a good grounding for the administrative processes and
                            legislative drafting needed to secure a robust plain packaging law.</p>
                        <div class="table-custom header bg-orange">Obtain legal advice</div>
                        <div class="table-custom content-wo-bg-color bg-brown padding-0 col-lg-12">
                            <div class="col-lg-12 bg-brown fc-white">
                                Constitutional requirements and the priority given to different rights and obligations
                                in national legal jurisprudence vary from country to country. Therefore it is important
                                that a country specific legal analysis (by internal government lawyers and/or through an
                                opinion from external lawyers) is undertaken on the legal issues raised by plain
                                packaging. Given the possibility of legal challenge and the likely threats and
                                allegations that will be made by the industry if the measure is proposed, it is a
                                sensible precaution to have ready answers to the legal issues that will be raised.
                            </div>
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-orange">1. Key legal issues</div>
                        <p>The tobacco industry continues to aggressively assert that plain packaging is unlawful in
                            countries considering the policy, even though industry legal challenges have all so far been
                            defeated in Australia, the UK, France and the European Union. There are similar broad themes
                            to the legal arguments used by the industry across jurisdictions. They are that plain
                            packaging:</p>
                        <ul class="custom">
                            <li>Is an expropriation/deprivation of property;</li>
                            <li>Is an unreasonable, dis-proportionate or unnecessary measure, because it is not
                                justified by the evidence;
                            </li>
                            <li>Is adopted without due process or in an arbitrary manner;</li>
                            <li>Breaches rights to freedom of expression and to run a business</li>
                            <li>Is incompatible with intellectual property laws and the ‘right to use’ a trademark</li>
                            <li>Breaches international obligations under World Trade Organisation rules and investment
                                treaties.
                            </li>
                        </ul>
                        <p>These issues may arise out of domestic laws or constitutions, regional obligations or
                            international law. More explanation of these issues is set in the <a
                                    href="<?php echo $base_url; ?>legal-issues-and-international-developments/legal-issues"><b
                                        class="fc-dark-orange">Reference Section K: LEGAL ISSUES AND CASE SUMMARIES</b></a>
                        </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-orange">2. Legal challenges</div>
                        <p>There have been a number of legal challenges to plain packaging laws already decided and some
                            that are ongoing (at the end of 2016, the time of writing). All the challenges that have
                            been etermined have resulting in the claims being dismissed. More details about these cases
                            are given in the <a
                                    href="<?php echo $base_url; ?>legal-issues-and-international-developments/legal-issues"><b
                                        class="fc-dark-orange">Reference Section K: LEGAL ISSUES AND CASE SUMMARIES</b></a>
                        </p>
                        <div class="col-lg-12 custom-2-cont bg-gray">
                            <ul class="custom-2">
                                <div class="col-lg-6">
                                    <li><b>AUSTRALIA</b></li>
                                    <ul>
                                        <li>Constitutional challenge in the High Court of Australia –
                                            <i><b>dismissed</b> August 2012</i></li>
                                        <li>International investment arbitration claim – <i><b>dismissed</b> December
                                                2015</i></li>
                                        <li>Complaint before the WTO dispute panel – <i>proceedings concluded but ruling
                                                due in 2017</i></li>
                                    </ul>
                                    <li><b>UNITED KINGDOM</b></li>
                                    <ul>
                                        <li>Claim in the High Court of England and Wales – <i><b>dismissed</b> in May
                                                2016 [ruling upheld by Court of Appeal in December 2016]</i></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <li><b>FRANCE</b></li>
                                    <ul>
                                        <li>1 referal to the Conseil Constitutionale and 6 challenges in the Conseil
                                            d'Etate (the highest administrative court) – <i><b>dismissed</b> January
                                                2016 and December 2017</i></li>
                                    </ul>
                                    <li><b>IRELAND</b></li>
                                    <ul>
                                        <li>Challenge in the High Court – <i>struck out November 2016</i></li>
                                    </ul>
                                    <li><b>EUROPEAN UNION</b></li>
                                    <ul>
                                        <li>Challenge to the EU Tobacco Products Directive in the EU Court of Justice –
                                            <i><b>dismissed</b> in May 2016</i></li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-orange">3. Highlights from key judgments</div>
                        <p>These rulings express legal principles and decisions that will be of value to lawyers in
                            other jurisdictions that may have to defend plain packaging in their own countries. The
                            judgments also contain clear and concise passages that will help policy makers and civil
                            society organizations to provide information about the policy or promote its implementation.
                            These are explored in more detail in the <a
                                    href="<?php echo $base_url; ?>legal-issues-and-international-developments/legal-issues"><b
                                        class="fc-dark-orange">Reference Section K: LEGAL ISSUES AND CASE SUMMARIES</b></a>
                            but here are some highlights:</p>
                        <ul class="custom">
                            <li>Plain packaging requirements “are no different in kind from any legislation that
                                requires labels that warn against the use or misuse of a product.” <sup>1</sup></li>
                            <li>“[The tobacco companies’] body of expert evidence does not accord with internationally
                                recognised best practice.” <sup>2</sup></li>
                            <li>“In my judgment the qualitative evidence relied upon by the [Government] is cogent,
                                substantial and overwhelmingly one-directional in its conclusion” <sup>3</sup></li>
                            <li>“[WTO] TRIPS and the FCTC can be read together without any risk of them colliding or
                                being mutually inconsistent” <sup>4</sup></li>
                            <li>Trademarks provide “a right of use that exists vis-à-vis other persons, an exclusive
                                right, but a relative one. It is not an absolute right to use that can be asserted
                                against the State.” <sup>6</sup></li>
                            <li>“Manufacturers and distributors of harmful products such as cigarettes can have no
                                expectation that new and more onerous regulations will not be imposed” <sup>5</sup></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>procedural-steps-for-a-secure-policy/coordinate-across-government">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 4.1 Coordinate Across Government
                        </a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>procedural-steps-for-a-secure-policy/wto-notification">
                            Guide 4.3 WTO Notification
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>procedural-steps-for-a-secure-policy/coordinate-across-government">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>
                            Guide 4.1 Coordinate Across Government
                        </a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>procedural-steps-for-a-secure-policy/wto-notification">
                            Guide 4.3 WTO Notification
                            <br><img class="pagination-url-forward-img"
                                     src="<?php echo $base_url; ?>img/scroll-page.png"> </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        case 'wto-notification':
            if ($var == 'og_desc') {
                $og_desc = 'To avoid accusations that a government has failed to notify a relevant standard, it is recommended that plain packaging legislation is notified to the World Trade Organisations (WTO) under Technical Barriers to Trade (T B T ) Article 2.9. This is a procedural process that allows other governments to comment on a technical requirement and does not mean that plain packaging of tobacco products breaches any of the WTO agreements.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title-num fc-yellow-gold">Guide 4.3</div>
                        <div class="section-title fc-yellow-gold">WTO Notification</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-yellow-gold">1. World Trade Organisation Article 2.9 of
                            the technical barriers to trade agreement
                        </div>
                        <p>To avoid accusations that a government has failed to notify a relevant standard, it is
                            recommended that plain packaging legislation is notified to the World Trade Organisations
                            (WTO) under Technical Barriers to Trade (T B T ) Article 2.9. This is a procedural process
                            that allows other governments to comment on a technical requirement and does not mean that
                            plain packaging of tobacco products breaches any of the WTO agreements.</p>
                        <p>The purpose of the TBT Agreement is to avoid unnecessary regulatory obstacles to
                            international trade while <b>allowing for the regulatory autonomy of states to protect
                                legitimate public interests such as public health.</b> Article 2.9 obliges WTO member to
                            notify drafts of technical regulations that could impact on international trade and which
                            are not international standards, so that other WTO members can consider the regulations and
                            make comments.</p>
                        <p>A technical regulation is defined as being a regulation that: <i>“lays down product
                                characteristics or their related processes and production methods. Compliance is
                                mandatory. They may also deal with terminology, symbols, packaging, marking and
                                labelling requirements.”</i></p>
                        <p><b>Plain packaging falls within the definition of a technical regulation</b> that relates to
                            the trade in goods and is one that has not as yet been established as an international
                            standard.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-yellow-gold">2. The notification should be of draft
                            legislation
                        </div>
                        <p>This means that it should be at a stage which sets out the detail of what the government
                            intends to adopt but is still capable of amendment. The W T O T B T procedure then requires
                            <b>a 60 day stand still period</b> during which the legislative adoption process is frozen
                            so that written comments from other WTO members can be sent on the draft measure. <b>This
                                period must be factored into the legislative timetable.</b></p>
                        <p>There is also a requirement under Article 2.9 that the final adopted measure be published and
                            it is recommended that there is a 6 month period between publication and coming into
                            force.</p>
                        <p>The WTO webpage that provides details and materials on the WTO notification procedure can be
                            found at <a href="www.wto.org/english/tratop_e/tbt_e/tbt_notifications_e.htm"
                                        target="_blank">www.wto.org/english/tratop_e/tbt_e/tbt_notifications_e.htm</a>
                            and the guidelines and forms are available in English, Spanish and French.</p>
                        <p><b>Most governments have a single agency or department that administers all the country’s
                                notifications.</b> But the Ministry of Health responsible for plain packaging will need
                            to coordinate with that other department or agency to enable the notification to be made
                            effectively.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-yellow-gold">3. Examples of plain packaging of tobacco
                            products WTO notifications
                        </div>
                        <p>To date, each country to have adopted plain packaging has notified their legislation under
                            TBT 2.9. Examples of existing notifications can assist any government seeking comply with
                            the notification procedures.</p>
                        <div class="col-lg-12 margin-btm-30">
                            <div class="col-lg-6">
                                <ul class="custom">
                                    <li>Ireland’s WTO TBT notification of 17 June 2014 is available here:<br><a
                                                href="https://docs.wto.org/dol2fe/Pages/FE_Search/DDFDocuments/125256/q/G/TBTN14/IRL1.pdf"
                                                target="_blank">https://docs.wto.org/dol2fe/Pages/<br>FE_Search/DDFDocuments/125256/<br>q/G/TBTN14/IRL1.pdf</a>
                                    </li>
                                    <li>The UK’s WTO TBT notification of September 2014 is available here:<br><a
                                                href="https://docs.wto.org/dol2fe/Pages/FE_Search/DDFDocuments/126836/q/G/TBTN14/GBR24.pdf"
                                                target="_blank">https://docs.wto.org/dol2fe/Pages/<br>FE_Search/DDFDocuments/126836/<br>q/G/TBTN14/GBR24.pdf</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="custom">
                                    <li>Norway's WTO TBT notification of 18 May 2015 is available here:<br><a
                                                href="https://docs.wto.org/dol2fe/Pages/FE_Search/DDFDocuments/132085/q/G/TBTN15/NOR23.pdf"
                                                target="_blank">https://docs.wto.org/dol2fe/Pages/<br>FE_Search/DDFDocuments/132085/<br>q/G/TBTN15/NOR23.pdf</a>
                                    </li>
                                    <li>Hungary’s WTO TBT notification of 12 December 2015 is available here:<br><a
                                                href="https://docs.wto.org/imrd/directdoc.asp?DDFDocuments/t/G/TBTN15/HUN31.DOC"
                                                target="_blank">https://docs.wto.org/imrd/<br>directdoc.asp?DDFDocuments/t/G/<br>TBTN15/HUN31.DOC</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>Many of these notifications received comments from other member countries in T B T committee
                            meetings. Some countries, including those that brought a WTO dispute procedure against
                            Australia (such as Indonesia, Dominican Republic, Cuba and Honduras) and some tobacco
                            producing countries (such as Malawi, Zimbabwe and Nicaragua), have given negative comments
                            to the committees; but many countries including New Zealand, Norway, Canada, Uruguay and the
                            EU also provided positive comments supporting the position that plain packaging does not
                            breach the WTO agreements and is a legitimate public health measure. In a number of
                            committee meetings where Member State’s proposals for plain packaging were discussed, a
                            representative of the World Health Organisation provided support for the measure and
                            stressed that there is a strong body of evidence to support the position that plain
                            packaging will achieve its objectives<sup>1</sup>.</p>
                        <p>None of these comments in committee have led to further dispute procedures being commenced
                            against any country that has adopted plain packaging laws, other than Australia.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-yellow-gold">4. WTO dispute procedures against
                            Australia’s plain packaging laws
                        </div>
                        <p>At the time of writing, a WTO dispute settlement panel is adjudicating complaints by Cuba,
                            the Dominican Republic, Honduras and Indonesia with respect to Australia’s plain packaging
                            laws. It has been widely reported that British American Tobacco and Philip Morris are
                            providing funding and legal support for Honduras and Dominican Republic in the
                            proceedings.</p>
                        <p>The panel’s decision is expected not before May 2017.</p>
                        <p>There are well established principles and rules that demonstrate the flexibility for WTO
                            Members to regulate for public health. These are described in the WHO publication on plain
                            packaging of tobacco products2 and are set out briefly in in <a
                                    href="<?php echo $base_url; ?>legal-issues-and-international-developments/legal-issues"><b
                                        class="fc-yellow-gold">Reference Section K: LEGAL ISSUES AND CASE SUMMARIES</b></a>
                            and the <a href="<?php echo $base_url; ?>policy-tools/policy-briefs"><b
                                        class="fc-yellow-gold">POLICY BRIEFING PAPERS</b></a> in the Reference
                            Materials. The main issues of dispute fall under Article 2.2 of the T B T Agreement and
                            Article 20 of the Trade Related Aspects of Intellectual Property Agreement (TRIPS).</p>
                        <p>The WTO panel decision may be the subject of an appeal by the Parties but in the meantime it
                            appears unlikely that any further dispute will arise concerning plain packaging laws of
                            other WTO Members until that dispute is fully resolved.</p>
                        <p><b>The issues in this dispute are separate from the procedural requirement to notify
                                regulations under TBT Article 2.9.</b></p>
                    </div>
                </div>
            </section>
            <!-- pagination -->
            <div class="pagination-arrow desktop container">
                <div class="col-lg-12">
                    <div class="col-xs-6 pagination-url-back">
                        <a href="<?php echo $base_url ?>procedural-steps-for-a-secure-policy/obtain-legal-advice">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                            Guide 4.2 Obtain Legal Advice
                        </a>
                    </div>
                    <div class="col-xs-6 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>">
                            Home
                            <img class="pagination-url-forward-img" src="<?php echo $base_url; ?>img/scroll-page.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="pagination-arrow mobile container">
                <div class="col-lg-12">
                    <div class="col-xs-12 pagination-url-back">
                        <a href="<?php echo $base_url ?>procedural-steps-for-a-secure-policy/obtain-legal-advice">
                            <img class="pagination-url-back-img" src="<?php echo $base_url; ?>img/scroll-page.png"><br>
                            Guide 4.2 Obtain Legal Advice
                        </a>
                    </div>
                    <div class="col-xs-12 pagination-url-forward">
                        <a href="<?php echo $base_url; ?>">
                            Home
                            <br><img class="pagination-url-forward-img"
                                     src="<?php echo $base_url; ?>img/scroll-page.png"> </a>
                    </div>
                </div>
            </div>
            <?php
            break;

        // reference materials

        // a
        case 'policy-briefs':
            if ($var == 'og_desc') {
                $og_desc = 'We have produced some short policy briefs that can be given to officials in other government departments, politicians or the media. These policy briefs provide condensed information about plain packaging of tobacco products. These are available to download as Word documents so they can be adapted or changed to suit your circumstances. For instance, images of local branded packs could be used or information included about national smoking rates.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-1">Policy Briefs</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <p>We have produced some short policy briefs that can be given to officials in other government
                            departments, politicians or the media. These policy briefs provide condensed information
                            about plain packaging of tobacco products. These are available to download as Word documents
                            so they can be adapted or changed to suit your circumstances. For instance, images of local
                            branded packs could be used or information included about national smoking rates.</p>
                        <ol class="custom list-style-none">
                            <li><a href="<?php echo $base_url ?>files/Ref-Sec-A-what-and-why.docx" target="_blank">1.
                                    What is Plain Packaging of Tobacco and why is it needed?</a></li>
                            <li><a href="<?php echo $base_url ?>files/Ref-Sec-A-Countering Industry Arguments.docx"
                                   target="_blank">2. Plain Packaging of tobacco products – Countering tobacco industry
                                    arguments</a></li>
                            <li><a href="<?php echo $base_url ?>files/Ref-Sec-A-Is-it-legal.docx" target="_blank">3.
                                    Plain Packaging of tobacco products – Is it legal?</a></li>
                        </ol>
                    </div>
                </div>
            </section>
            <?php
            break;

        // b
        case 'regulatory-impact-analysis-ref':
            if ($var == 'og_desc') {
                $og_desc = 'To assist with the process of a regulatory impact assessment for plain packaging, we have produced a template document that can be downloaded in Word format.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-1">Regulatory Impact Analysis</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <p>To assist with the process of a regulatory impact assessment for plain packaging, we have
                            produced a template document that can be downloaded in Word format.</p>
                        <ol class="custom list-style-none">
                            <li>Regulatory Impact Analysis Template</li>
                        </ol>
                    </div>
                </div>
            </section>
            <?php
            break;

        // c
        case 'consultation-document-template':
            if ($var == 'og_desc') {
                $og_desc = 'To assist with undertaking a consultation process we have produced a template document that can be downloaded in Word format. This can be added to and adjusted to suit local circumstances and procedures.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-1">Consultation Document Template
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <p>To assist with undertaking a consultation process we have produced a template document that
                            can be downloaded in Word format. This can be added to and adjusted to suit local
                            circumstances and procedures.</p>
                        <ol class="custom list-style-none">
                            <li>
                                <a href="<?php echo $base_url ?>files/Ref-Sec-C-Draft-consultation-on-the-Introduction-of-Plain-Packaging-of-Tobacco-Products.docx"
                                   target="_blank">Consultation Document Template</a></li>
                        </ol>
                    </div>
                </div>
            </section>
            <?php
            break;

        // f
        case 'template-draft-model-law':
            if ($var == 'og_desc') {
                $og_desc = 'To assist with the drafting of detailed regulations we have produced a template model law. This covers every aspect of the plain packaging to tobacco products policy detailed in Reference Section D: Drafting the legislation. The International Legal Consortium at Tobacco Free Kids has lawyers with extensive experience in drafting and reviewing tobacco control laws across many jurisdictions around the world. Legislative drafting styles vary widely from country to country and there is no ‘one size fits all’ draft law. The template included here provides language that can be adapted but for further assistance including a review of any draft legislation please contact the ILC directly.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-2">Template Draft Model Law</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <p>To assist with the drafting of detailed regulations we have produced a template model law.
                            This covers every aspect of the plain packaging to tobacco products policy detailed in
                            Reference Section D: Drafting the legislation. The International Legal Consortium at Tobacco
                            Free Kids has lawyers with extensive experience in drafting and reviewing tobacco control
                            laws across many jurisdictions around the world. Legislative drafting styles vary widely
                            from country to country and there is no ‘one size fits all’ draft law. The template included
                            here provides language that can be adapted but for further assistance including a review of
                            any draft legislation please contact the ILC directly.</p>
                        <ol class="custom list-style-none">
                            <li><a href="<?php echo $base_url ?>files/template-model-law.docx" target="_blank">Template
                                    Draft Model Law</a></li>
                        </ol>
                    </div>
                </div>
            </section>
            <?php
            break;

        // d
        case 'drafting-the-legislation-in-detail':
            if ($var == 'og_desc') {
                $og_desc = 'This Reference Section sets out all the key elements and detail that should be included in plain packaging of tobacco legislation, and provides the reasons for including each element or feature. The guiding principle behind plain packaging is that the only means of differentiating products should be through the brand and variant name, which are presented in a standard typeface. Achieving this requires regulating each and every aspect of the packaging, and the appearance of individual products.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-2">Each clause explained</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">Introduction</div>
                        <p>These pages provide detail on all the key elements that should be included in plain packaging
                            of tobacco legislation, and provide the reasons for including each element or feature. </p>
                        <p><b>The guiding principle behind plain packaging</b> is that the only means of differentiating
                            products should be through the brand and variant name, which are presented in a standard
                            typeface. Achieving this requires regulating each and every aspect of the packaging, and the
                            appearance of individual products</p>
                        <p>The technical detail in these pages and in the accompanying <b>Template Model Law</b>, is
                            drawn from the existing legislation in those countries that have already enacted plain
                            packaging laws. Other governments considering plain packaging will need to review the nature
                            of the products and packaging that exist in their market and adjust, or amend, their
                            legislation accordingly. </p>
                        <p>
                            Each section listed to the right refers to the legislation of countries that have already
                            adopted plain packaging, namely
                            <b>Australia, the UK, Ireland, France and Hungary.</b>
                            <b>The Comparison of Existing Lawscontains</b> a table that lists relevant clauses in the
                            laws from these countries.
                        </p>
                        <p>
                            <b>This Toolkit will continue to be updated.</b>
                            Please <b>contact</b> us to inform us of any problems you encounter or alternative forms of
                            packaging that are regulated under new draft legislation, so that this Toolkit and the
                            Template Model Law can be adapted and updated.
                        </p>
                        <p>
                            The European Union Tobacco Products Directive (EU TPD) includes some provisions concerning
                            the packaging and presentation of tobacco products and so requires a ‘partial’
                            standardisation of packaging policy (for instance, the shape and opening of cigarette
                            packets as well as the minimum content). These obligations must be implemented by all EU
                            Member States, including the UK, Ireland, France and Hungary. Where a reference is made to
                            one of these EU TPD requirements, it will necessarily be part of the domestic legislation in
                            each of those countries.
                        </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">Existing Legislation</div>
                        <p>The legislation from countries that have adopted plain packaging laws that are referred to in
                            this Reference Section is listed below with web links to the full texts:</p>
                        <div class="col-lg-12">
                            <div class="col-lg-9">
                                <div class="section-tertiary-title"><b>Australia</b></div>
                                <div><p>Tobacco Plain Packaging Act 2011, available at <a
                                                href="https://www.legislation.gov.au/Details/C2016C00892"
                                                target="_blank">
                                            https://www.legislation.gov.au/Details/C2016C00892</a><br><br>Tobacco Plain
                                        Packaging Regulations 2011, available at <a
                                                href="http://www.comlaw.gov.au/Details/F2013C00801" target="_blank">http://www.comlaw.gov.au/Details/F2013C00801</a>
                                    </p></div>
                            </div>
                            <div class="col-lg-3"><img class="responsive"
                                                       src="<?php echo $base_url; ?>img/vector-maps/aus.png"></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-9">
                                <div class="section-tertiary-title"><b>United Kingdom</b></div>
                                <div><p>The Standardised Packaging of Tobacco Products Regulations 2015<br><a
                                                href="http://www.legislation.gov.uk/uksi/2015/829/contents/made"
                                                target="_blank">http://www.legislation.gov.uk/uksi/2015/829/contents/made</a>
                                    </p></div>
                            </div>
                            <div class="col-lg-3"><img class="responsive"
                                                       src="<?php echo $base_url; ?>img/vector-maps/uk.png"></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-9">
                                <div class="section-tertiary-title"><b>Ireland</b></div>
                                <div><p>Public Health (Standardised Packaging of Tobacco) Act 2015<br><a
                                                href="http://www.irishstatutebook.ie/eli/2015/act/4/section/23/enacted/en/print.html"
                                                target="_blank">http://www.irishstatutebook.ie/eli/2015/act/4/section/23/enacted/en/print.html</a><br><br>Draft
                                        Public Health (Standardised Packaging of Tobacco) Regulations 2016<a
                                                href="http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=650&dLang=EN"
                                                target="_blank">http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=650&dLang=EN</a>
                                    </p></div>
                            </div>
                            <div class="col-lg-3"><img class="responsive"
                                                       src="<?php echo $base_url; ?>img/vector-maps/ireland.png"></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-9">
                                <div class="section-tertiary-title"><b>France</b></div>
                                <div><p>The implementing legislation that amends the Public Health Code is Decree No.
                                        2016-1117 of 11 August 2016 on the manufacture, presentation, sale and use of
                                        tobacco products.<br><a
                                                href="https://www.legifrance.gouv.fr/eli/decret/2016/8/11/AFSP1612356D/jo"
                                                target="_blank">https://www.legifrance.gouv.fr/eli/decret/2016/8/11/AFSP1612356D/jo</a><br><br>The
                                        relevant parts of the public health code can be found here:<br><a
                                                href="https://www.legifrance.gouv.fr/affichCode.do?idSectionTA=LEGISCTA000033045524&cidTexte=LEGITEXT000006072665&dateTexte=20170126"
                                                target="_blank">https://www.legifrance.gouv.fr/affichCode.do?idSectionTA=<br>LEGISCTA000033045524&cidTexte=LEGITEXT000006072665&<br>dateTexte=20170126</a><br><br>The
                                        detail of the law is in Decree of 21 March 2016, on the conditions of neutrality
                                        and standardisation for the packaging and paper of cigarettes and rolling
                                        tobacco. Available here in French (consolidated version)<br><a
                                                href="https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000032276123&dateTexte=20170126"
                                                target="_blank">https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000032276123&dateTexte=20170126</a><br><br>And
                                        the <i>draft</i> decree (which is substantially the same) has been translated
                                        for notification to the EU Commission and is available here in English<br><a
                                                href="http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=241&dLang=EN"
                                                target="_blank">http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=241&dLang=EN</a>
                                    </p></div>
                            </div>
                            <div class="col-lg-3"><img class="responsive"
                                                       src="<?php echo $base_url; ?>img/vector-maps/france.png"></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-9">
                                <div class="section-tertiary-title"><b>Hungary</b></div>
                                <div><p>Decree No. 239/2016 Amending Government Decree 39/2013 of February 14, 2013 on
                                        the manufacture, placement on the market and control of tobacco products,
                                        combined warnings and the detailed rules for the application of the
                                        health-protection fine<br><a
                                                href="http://www.tobaccocontrollaws.org/files/live/Hungary/Hungary%20-%20Decree%20No.%20239_2016%20-%20national.pdf"
                                                target="_blank">http://www.tobaccocontrollaws.org/files/live/Hungary/Hungary%20-%20Decree%20No.%20239_2016%20-%20national.pdf</a><br><br>English
                                        version of the <i>draft</i> Decree contained in the notification to the EU
                                        Commission:<br><a
                                                href="http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=529&dLang=EN"
                                                target="_blank">http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=529&dLang=EN</a>
                                    </p></div>
                            </div>
                            <div class="col-lg-3"><img class="responsive"
                                                       src="<?php echo $base_url; ?>img/vector-maps/hungary.png"></div>
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">1. Color</div>
                        <p>It is important to specify very precisely the <i>exact</i> color required for the packaging,
                            otherwise variations of color will appear, defeating the intention of standardizing
                            packaging. Simply requiring brown, or a green/brown, is insufficient.</p>
                        <p>Pantone provides a system of accurate color categorisation. There are no copyright issues in
                            using these colors in legislation (this was confirmed with Pantone in the UK and Australia).
                            The Pantone system has terms of categorisation and identification and the colors are not
                            trademarked.</p>
                        <p>What color should the packs be? Australia commissioned research into which color was
                            perceived to be the least appealing for tobacco packaging. The research looked at a range of
                            issues, including consumer perceptions of branding appeal and smoking harm, consumer
                            perceptions of plain pack colors, and legibility of brand names on plain packs. The research
                            found a dark brown color to be the best candidate, as people perceived it to be the least
                            appealing and thought that the packs would contain cigarettes that are more harmful to
                            health and harder to quit.</p>
                        <div class="col-lg-12">
                            <div class="col-lg-3 bg-ref-mat-brown"></div>
                            <div class="col-lg-9">
                                <p><b>Pantone 448C</b>(opaque couche) with a matt finish is the dull brown/green color
                                    which isspecified in the Australian, UK, Ireland, France and Hungary legislation for
                                    the packaging.</p>
                            </div>
                        </div>
                        <br>&nbsp;<br>
                        <div class="col-lg-12">
                            <div class="col-lg-3 bg-ref-mat-grey"></div>
                            <div class="col-lg-9">
                                <p><b>Pantone Cool Grey 2</b> with a matt finish is the color specified in those
                                    countries for text permitted on the packaging, such as brand name or contact
                                    details.</p>
                            </div>
                        </div>
                        <br>&nbsp;<br>
                        <p>Unless there is specific evidence or research that demonstrates different colors would be
                            more effective in a particular country at achieving the aims of the policy, it is
                            recommended that these colors are used in all plain packaging legislation because of the
                            research already conducted that demonstrates the efficacy of this colour. There could be
                            legal risks in deviating from that evidence base.</p>
                        <p>A ‘matt finish’ to the surface should also be specified to avoid some packs appearing with a
                            glossy or other finish.</p>
                        <p>The color of the inside or internal surfaces of packs also need to be defined. In most
                            instances of existing legislation, internal surfaces are required to be <b>white or Pantone
                                448C</b>.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">2. Permitted Text</div>
                        <p>As described in <b>Guide 3.1: Make key policy decisions</b>, a number of requirements are
                            needed for any text that appears on the packets (other than any health warnings and messages
                            that are already mandated - for most countries these will already be required in existing
                            legislation).</p>
                        <p>
                            In order that different products can be differentiated from each other, permitted text must
                            include<br>
                        <ul class="custom">
                            <li>Product brand name and variant name</li>
                            <li>Name, address and contact details of manufacturer</li>
                        </ul>
                        </p>
                        <p>
                            Permitted text could also include<br>
                        <ul class="custom">
                            <li>quantity of product in pack (e.g. 20 cigarettes)</li>
                            <li>minimum age of sale</li>
                            <li>information on quit smoking assistance or quit lines telephone numbers.</li>
                            <li>place of origin or locally made statement</li>
                            <li>duty tax paid mark</li>
                            <li>fire risk statement</li>
                            <li>recycling symbol</li>
                            <li>no littering symbol</li>
                        </ul>
                        </p>
                        <p>It is sensible to include a provision in the legislation which states that the plain
                            packaging law does not prevent any text symbol or other mark that is required by other
                            legislation. It is not recommended that legislation permits a recycling or no littering
                            symbol as these can provide positive social associations for tobacco manufacturers. </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">3. Requirements for text</div>
                        <p>Based on the existing legislation in countries that have adopted plain packaging laws,
                            requirements for the text should be made for:</p>
                        <ol class="custom list-style-none">
                            <li>
                                i. <b>The Color</b>
                                <ul>
                                    <li>Pantone Cool Grey 2C as mentioned above</li>
                                </ul>
                            </li>
                            <li>&nbsp;</li>
                            <li>
                                ii. <b>The typeface or font</b>
                                <ul>
                                    <li>Lucida Sans (Australia)</li>
                                    <li>Helvetica (UK, Ireland and France because this matches the typeface for health
                                        warnings)
                                    </li>
                                    <li>Normal, regular weighted text should be specified so that <i>italics</i> or <b>bold</b>
                                        text is not used.
                                    </li>
                                    <li>Only alphanumeric characters, with an ampersand where applicable, should be
                                        permitted and text should be only in lower case letters save for the first
                                        letter of a word which may be in upper case.
                                    </li>
                                </ul>
                            </li>
                            <li>&nbsp;</li>
                            <li>
                                iii. <b> The typeface point size</b>
                                <ul>
                                    <li>Point 14 - Brand name.</li>
                                    <li>Point 10 - All other text (including variant name, manufacturer’s name and
                                        address etc)
                                    </li>
                                </ul>
                            </li>
                            <li>&nbsp;</li>
                            <li>
                                iv. <b>The location and orientation of text on the packet</b>
                                <ul>
                                    <li>It is sufficient for legislation to provide for the brand and variant name to
                                        appear twice on the outside surfaces of the packaging. The brand and variant
                                        name should be allowed on the front of the packet and on the top and/or bottom
                                        of the packet. This will allow identification of the brand in different storage
                                        or gantry methods.
                                    </li>
                                    <li>Brand and variant name should be located in the middle of any surface it appears
                                        on (or the space on that surface not taken up with health warnings). It should
                                        be orientated in the same way as any health warning that appears on the same
                                        surface.
                                    </li>
                                    <li>All other text should appear only once on the packaging.</li>
                                    <li>The only other text on the front surface should be the quantity of tobacco in
                                        the packet and the age of sale if these are permitted.
                                    </li>
                                </ul>
                            </li>
                            <li>&nbsp;</li>
                            <li>
                                v. <b>Length of brand and variant name</b>
                                <ul>
                                    <li>In order to limit the possibility of tobacco companies starting to use
                                        exceptionally long or complicated brand or variant names the UK, France and
                                        Ireland have limited the length of the brand and variant name to just one line.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                        <p>The French Decree provides a useful and succinct example of how all the above can be
                            specified at Articles 1 and 2.</p>
                        <p>The <b>TEMPLATE MODEL LAW</b> uses all the provisions shown above. </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">4. Defining surfaces</div>
                        <p>The definitions must be approached with care:</p>
                        <ol class="custom list-style-none">
                            <li>i. Both the exterior and interior of packs should be regulated.</li>
                            <li>ii. Individual packs, multipacks and ‘layers’ of packaging need to be regulated (there
                                are examples of a single packet being in a further outer packet).
                            </li>
                            <li>iii. Where there are requirements for different surfaces (for instance the brand name
                                must appear only on the front and top surfaces), then consideration needs to be given as
                                to whether and how to define those surfaces.
                            </li>
                        </ol>
                        <p>The existing legislation of countries that have adopted plain packaging approach these issues
                            in different ways. An example is given in the Model Law included with this Toolkit.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">5. Shape and type of packets</div>
                        <p>When standardising the shape and type of packaging it is recommended that the legislation
                            requires the most common type of packaging that already existing on the market. The most
                            common type of cigarette pack around the world is a rectangular (or cuboid) box of 20
                            cigarettes with a flip top lid.</p>
                        <p>However, governments considering plain packaging should look at what packaging already exists
                            and is common on the market in their country. Some pack shapes may have positive
                            associations for consumers, such as with the slim packs discussed above, so there may be
                            good reasons to prohibit them. However, without good reason, prohibiting the most commonly
                            used type of packaging for a particular category of product could be grounds for legal
                            challenge as being unnecessarily restrictive or leading to unnecessary costs for the tobacco
                            manufacturers by forcing a change to their manufacturing processes. This is one reason why
                            it is recommended that MoH officials conduct a market survey of the packaging that exists on
                            the market in their country (see <b>Guide 2.1: Evidence Review</b>).</p>

                        <div class="section-tertiary-title fc-ref-mat-2"><u>Cigarettes:</u></div>
                        <p>In Australia, packs must conform to <b>specific dimensions</b> with <b>rectangular surfaces
                                that have straight sides and right angles<sup>2</sup></b>, and so pack shape is defined
                            in that way. This means that all individual packs must be virtually identical in shape and
                            size. Beveled edges are prohibited. This legislation therefore requires what is, for many
                            countries, the most common shape, size and opening of cigarette packs.</p>
                        <p>For EU states, under the EU TPD, packs must be <b>cuboid<sup>3</sup></b> but there is no
                            specified dimension (although the full health warning must be fitted on the appropriate
                            surfaces which means that ‘slim packs’ are not allowed – see part 7 below). This means there
                            is some scope for tobacco companies to vary the dimensions of the cuboid shape and soft
                            packs are permitted.</p>
                        <p>Just requiring a cuboid like the EU is a simpler means of specifying the shape but specifying
                            dimensions and prohibiting bevelled or rounded edges as Australia has done is
                            recommended.</p>
                        <p>Shoulder box packs and soft packs are permitted for cigarettes in EU countries but not in
                            Australia.</p>
                        <div class="section-tertiary-title fc-ref-mat-2"><u>Other tobacco products:</u></div>
                        <p>In Australia there are no specific requirements on the shape, size or type of containers for
                            other tobacco products.</p>
                        <p>For EU states, under the EU TPD, hand rolled or roll-your-own tobacco must be in a <b>cuboid
                                pack, a cylindrical pack</b> or be in the <b>form of a pouch</b>. No further
                            requirements have been put on the size of these packs or the shape of packs for other
                            tobacco products.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">6. Type of opening</div>
                        <p>As with the shape of packs, it is recommended that governments considering plain packaging
                            look at what packaging already exists and is common on the market in their country.</p>
                        <p>In Australia, cigarette packs must have a “flip-top lid,”hinged at the back. No other opening
                            is allowed.</p>
                        <p>In the EU,cigarettes in a pack that can be resealed or reclosed must have either flip-top lid
                            hinged at the back, or a shoulder box hinged lid — “clam shell” — hinged at the back
                            <sup>5</sup>. This also permits soft packs that involve tearing open the paper seal and
                            cannot be reclosed once opened. All these packs are common in some EU countries.</p>
                        <div class="col-lg-12">
                            <div class="col-lg-4"><img class="img-responsive"
                                                       src="<?php echo $base_url; ?>img/reference-materials/shoulder-box.jpg">
                            </div>
                            <div class="col-lg-4"><img class="img-responsive"
                                                       src="<?php echo $base_url; ?>img/reference-materials/shutterstock_191632814.jpg">
                            </div>
                            <div class="col-lg-4"><img class="img-responsive"
                                                       src="<?php echo $base_url; ?>img/reference-materials/soft-pack.jpg">
                            </div>
                        </div>
                        <p class="text-center fs-14">Example of a shoulder box hinged lid, flip to lid and soft packs
                            permitted in the EU</p>
                        <br>
                        <p>Unless soft packs or the clam shell / shoulder-box lid is particularly common in the market
                            of a country considering plain packaging, it is recommended that the approach of Australia
                            is followed, so that cigarettes are only permitted in hard packets with a flip top lid.</p>
                        <p>However, no legislation currently defines flip-top lid. It is a term commonly understood to
                            mean the most usual type of cigarette pack opening.</p>
                        <p>There was some correspondence between the UK government and Imperial Tobacco about whether or
                            not a novel type of opening for Lambert and Butler, called “Glide Tec” (which involves
                            sliding a panel on the front of the pack with your thumb to make the very top of the pack
                            flip open) can fall within the definition of a flip-top lid. As the diagram below shows, the
                            Glide Tec opening is at the top and it flips open. Without a specific definition in
                            legislation it is arguable that different types of opening such as Glide Tec could fall
                            within the term. Drafters should therefore consider whether to either define flip-top lid
                            (which can be difficult) or use a diagram within the legislation, such as the one shown
                            above and included in the <b>TEMPLATE MODEL LAW.</b></p>
                        <div class="col-lg-12">
                            <img class="img-responsive"
                                 src="<?php echo $base_url; ?>img/reference-materials/glide-tech.jpg">
                        </div>
                        <p class="text-center fs-14">Glide tech opening used by Lambert and Butler.</p>
                        <br>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">7. Minimum size of pack or minimum size of
                            health warning
                        </div>
                        <p>It is important to regulate the size of tobacco packages. This is to prevent slim packs that
                            look similar to lipstick or perfume cases, which are ostensibly aimed at women, but also to
                            prevent future variations in pack design if other branding is prohibited.</p>
                        <div class="col-lg-12">
                            <div class="col-lg-6"><img class="img-responsive"
                                                       src="<?php echo $base_url; ?>img/reference-materials/slim-1.jpg">
                            </div>
                            <div class="col-lg-6"><img class="img-responsive"
                                                       src="<?php echo $base_url; ?>img/reference-materials/slim-2.jpg">
                            </div>
                        </div>
                        <p class="text-center fs-14">Examples of slim style cigarette packs</p>
                        <br>
                        <p>These slim packs usually have slim cigarettes contained in them.</p>
                        <p>Australia sets minimum and maximum dimensions for individual packets and also has minimum and
                            maximum dimensions for the cigarette stick.</p>
                        <p>Under the EU Tobacco Products Directive, the graphic health warnings on cigarette packs must
                            conform to minimum dimensions as well as being 65% of the front and back surfaces, which
                            means that small cigarette packets are not permitted because they could not fit the
                            full-size health warnings on them. Because of this, EU countries have so far not set minimum
                            dimensions for pack sizes.</p>
                        <p>A decision to fully future proof the policy would mean following the Australian example, as
                            this better protects against variations in the sizes of cigarette packs. This is the
                            approach taken in the Template Model Law.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">8. Material</div>
                        <p>While using a novel or different material to make packaging might be expensive for
                            manufacturers, it is not inconceivable that this would be used to differentiate a particular
                            product. It is therefore important to specify what material must be used to make the
                            cigarette packs.</p>
                        <p>There is already some variation in the packaging material used for other types of product,
                            such as loose tobacco or cigars. For instance, loose tobacco can comes in tins, pouches, or
                            boxes. Thus far, states adopting plain packaging have not put as many restrictions on the
                            nature of the packaging for other tobacco products, but each government considering the
                            policy should review the products on the market in that country and consider if it is
                            appropriate to specify the material (as well as shape and size) of packs for products other
                            than cigarettes.</p>
                        <p>Australia requires that cigarette packs must be rigid and made of only cardboard<sup>8</sup>.
                        </p>
                        <p>The EU TPD requires cigarette packs to be made of “carton or <i>soft</i>
                            material,”<sup>9</sup> which does provide for some scope for variation. Only time will show
                            ifany significant variations in packaging material are developed in EU countries that adopt
                            plain packaging. </p>
                        <p>It is recommended that countries follow the approach of Australia unless there are local
                            reasons to take a different approach. The Template Model Law is drafted to require rigid
                            cigarette packs made only of cardboard.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">9. Linings in cigarette packs</div>
                        <p>The packaging processes for cigarettes use linings to fit the cigarettes into the packets.
                            These linings are typically made of a silver foil with a white paper backing. The foil has
                            small embossed marks on them that are necessary to provide the friction used to insert the
                            cigarettes into the packets. For this reason, these linings are permitted in the legislation
                            of those states that have adopted plain packaging, so long as they are only for the <i>“automated
                                manufacturing process”</i> and only if the linings conform to the specified requirements<sup>10</sup>
                            and do not have any branding on them.</p>
                        <p>It is recommended that similar provisions are used in any plain packaging law to avoid
                            tobacco manufacturers arguing that the laws required unnecessary and expensive changes to
                            their packaging processes.</p>
                        <div class="col-lg-12">
                            <img class="img-responsive text-center"
                                 src="<?php echo $base_url; ?>img/reference-materials/foils.jpg">
                        </div>
                        <p class="fs-14 text-center">Example of foil lining with branding on it.</p>
                        <br>
                        <p>It is important to specify that the lining is “only for the purpose of the automated
                            manufacturing process.” In Australia, some products have been manufactured where the
                            “lining” can act as a separate container so that the cigarettes can be removed from the
                            standardized pack:</p>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <img height="170px" class="img-responsive text-center"
                                     src="<?php echo $base_url; ?>img/reference-materials/foil-2.png">
                            </div>
                            <div class="col-lg-6">
                                <img height="170px" class="img-responsive text-center"
                                     src="<?php echo $base_url; ?>img/reference-materials/foil-3.png">
                            </div>
                        </div>
                        <br>
                        <p>An additional clause to prevent this could be added to the legislation to confirm that, “the
                            lining may not act as a separate removable container.” A clause of this nature appears in
                            the Template Model Law at Article 7(2).</p>
                        <p>Another feature to appear in Marlboro packs in the UK after plain packaging was introduced is
                            a plastic flap attached to the lid that seals the lining:</p>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <img height="170px" class="img-responsive text-center"
                                     src="<?php echo $base_url; ?>img/reference-materials/seal-lining-1.png">
                            </div>
                            <div class="col-lg-4">
                                <img
                                        height="170px" class="img-responsive text-center"
                                        src="<?php echo $base_url; ?>img/reference-materials/seal-lining-2.png">
                            </div>
                            <div class="col-lg-4">
                                <img height="170px" class="img-responsive text-center"
                                     src="<?php echo $base_url; ?>img/reference-materials/seal-lining-3.png">
                            </div>
                        </div>
                        <p>
                            Unfortunately it appears this does not breach the UK law as drafted (although it should be
                            entirely white because it is internal packaging). However, it would not be permitted if the
                            text of the <b>Template Model Law</b> is used because that draft text requires that all
                            packaging must be rigid cardboard or, if it is the lining, a single sheet of paper backed
                            silver foil.
                        </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">10. Texture</div>
                        <p>Legislation should include requirements that surfaces are smooth and flat and contain no
                            variations in texture, any ridges, or any embossing. All states that have adopted plain
                            packaging to date have made similar requirements<sup>11</sup>.</p>
                        <p>Existing packaging, especially for cigarettes, makes clever use of embossing and texture to
                            make the packets more tactile. Failure to regulate the texture of the packet surfaces could
                            lead to the continued and extended use of texture to create packs that are appealing to the
                            touch and could undermine the aims of the legislation.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">11. Wrappers</div>
                        <p>Most tobacco packets are sold with clear cellophane or plastic wrappers. Sometimes these
                            wrappers have promotions or price discounts printed on them.</p>
                        <p>Wrappers should be required to be entirely clear and transparent, otherwise there is the risk
                            of a loophole in the legislation that could allow the branding to appear on the wrappers (or
                            without specific drafting in the law, the wrapperscould fall within the definition of <i>external
                                packaging</i> and so required to be Pantone 448c, which would be an excessive policy
                            prescription).</p>
                        <p>All existing plain packaging legislation includes this requirement<sup>12</sup>.</p>
                        <p>A tear strip is used to open the wrappers, and these should also be regulated. In most
                            existing legislation, they must either be clear or black and should be no more than 3mm
                            wide.</p>
                        <p>Some manufacturers use the wrapper to print the bar code on, and there is no reason to
                            prohibit this. Therefore a single bar code should be permitted on the wrapper, so long as it
                            does not cover the front surface of the packet or cover any health warning or other mandated
                            information text (see below on requirements for bar codes).</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">12. Tabs for resealing pouches</div>
                        <p>Loose tobacco, such as tobacco for roll-your-own or hand-rolled cigarettes will often be
                            packaged in pouches that can be resealed with a tab. To avoid these tabs being used for
                            branding, they should be required to be a particular color or be clear and transparent.<sup>13</sup>
                        </p>

                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <img height="170px" class="img-responsive text-center"
                                     src="<?php echo $base_url; ?>img/reference-materials/resealing-1.png">
                            </div>
                            <div class="col-lg-4">
                                <img
                                        height="170px" class="img-responsive text-center"
                                        src="<?php echo $base_url; ?>img/reference-materials/resealing-2.png">
                            </div>
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">13. Sound and smell in the packaging</div>
                        <p>To future proof the legislation, a requirement that all tobacco packaging does not make a
                            sound or contain or produce a smell that is not normally associated with tobacco packaging
                            should be included. All existing legislation contains a clause of this nature.<sup>14</sup>
                        </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">14. Pack must not change after sale</div>
                        <p>This provision prevents elements or features such as heat or other types of changing inks
                            that could appear over time; fold-out sections; fluorescent or luminous inks; removable
                            tabs; scratch panels; or any other feature that could change the shape or visual nature of
                            the packaging after sale to the consumer. All existing legislation contains a clause of this
                            nature.<sup>15</sup></p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">15. Inserts, onserts and other additional
                            material
                        </div>
                        <p>All additional materials, inserts, or onserts that are not part of the tobacco packaging or
                            required to protect the product, should be entirely prohibited. Otherwise, there is a real
                            risk that the measures can be fundamentally undermined by the inclusion of promotional
                            materials, stickers, sleeves, collection cards, or other papers that are not part of the
                            “packaging.”The only purpose of this type of additional material would be for advertising or
                            promotion, or in some way to disguise the less appealing plain packs or health warnings, as
                            it has no practical function as packaging.</p>
                        <p>There is also the possibility that tobacco companies, or retailers, will devise circumvention
                            strategies that have been observed for graphic health warnings in some countries, such as
                            sleeves or stickers to obscure the warnings or make the packs more attractive.<sup>16</sup>
                        </p>
                        <p>Similarly, in Australia, cardboard sleeves have been sold or given away alongside tobacco
                            products at the point of retail for purposes of covering the pack, and product lines such as
                            stickers, sleeves, and boxes have been sold separately to tobacco products.<sup>17</sup></p>
                        <div class="col-lg-12 text-center"><img class="img-responsive"
                                                                src="<?php echo $base_url; ?>/img/reference-materials/cover-slips.jpg">
                        </div>
                        <p class="fs-14 text-center">An example of cigarette packet sleeves sold alongside tobacco
                            products.</p>
                        <br>
                        <p>All existing legislation in the UK, Ireland, France, Hungary, and Australia contains a clause
                            that prohibits any inserts, stickers, or other additional materials.<sup>18</sup> However,
                            where sleeves that could cover the packs are sold separately from the product (even if
                            alongside), then this has found not to be in breach of the law in Australia.</p>
                        <p>However, legislation in the UK, France, and Ireland permits packs of hand-rolling tobacco to
                            contain rolling papers and/or filters. The Template Model Law follows this example, but the
                            Ministry of Health should consider whether this is a practice that already exists in their
                            country and if they wish to accommodate it in their legislation.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">16. Prohibit features that would suggest an
                            economic advantage
                        </div>
                        <p>Following the introduction of plain packaging in Australia, manufacturers responded by
                            offering one or more extra cigarettes (known as “loosies”) for the same price as a packet of
                            20. For instance, the “Peter Stuyvesant” brand name became “Peter Stuyvesant + Loosie.”</p>
                        <div class="col-lg-12"><img class="img-responsive text-center"
                                                    src="<?php echo $base_url; ?>img/reference-materials/loosie-2.jpg">
                        </div>
                        <br>&nbsp;<br>
                        <p>Article 13 of the EU TPD prevents this by requiring that:</p>
                        <p><i>“The unit packets and any outside packaging shall not suggest economic advantages by
                                including printed vouchers, offering discounts, free distribution, two-for-one or other
                                similar offers.”<sup>19</sup></i></p>
                        <p>It is recommended that a similar provision is included in any new plain packaging laws.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">17. Bar codes (and QR codes etc)</div>
                        <p>There must be a specific provision that permits a single bar code to appear on the packaging,
                            any multipack or carton packaging, or the transparent wrappers to allow for stock control
                            and sales.</p>
                        <p>However, there is a potential risk that these could be used in some way to either create on
                            image or logo, or make other links or associations.</p>
                        <p>The definition of a bar code (or what is understood as being a bar code in a technical sense)
                            is quite broad and includes, for instance, quick response codes that can link smart phones
                            to websites or other apps. Some types of bar code have been developed to contain images
                            within them.</p>
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <img class="img-responsive"
                                     src="<?php echo $base_url; ?>img/reference-materials/color-barcode.png">
                            </div>
                            <div class="col-lg-9">High Capacity color bar code developed by Microsoft.</div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <img class="img-responsive"
                                     src="<?php echo $base_url; ?>img/reference-materials/maxicode.png">
                            </div>
                            <div class="col-lg-9">Maxi code used by United Parcel Force.</div>
                        </div>
                        <br>&nbsp;<br>
                        <p>Existing legislation permits bar codes but restricts the nature and color of the bar
                            code.<sup>20</sup></p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">18. Allow for calibration marks</div>
                        <p>Calibration marks are required for the printing processes so that different layers of ink
                            line up with each other. Without them, for instance, it would not be possible to print the
                            graphic health warnings. There is a risk that these marks would be prohibited
                            unintentionally and, therefore, should be specifically allowed.<sup>21</sup></p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">19. Allow for track and trace or unique
                            identification marks.
                        </div>
                        <p>As with calibration marks, there is a risk that track-and-trace or identification marks might
                            be prohibited unintentionally, and thus specific provision should be made to permit these
                            where they are required in other legislation. Alternatively, if track-and-trace or
                            identification marks are not already required, drafters should consider how this could be
                            permitted if it is introduced at a later stage.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">20. The appearance of individual products
                        </div>
                        <p>All existing legislation regulates the appearance of cigarettes, and the Australian
                            legislation also regulates the appearance of cigars.<sup>22</sup> These all require
                            individual cigarettes to be white with a matte finish, and the tip must be either white or
                            imitation cork color. No other markings are allowed, except that Australia permits an
                            alphanumeric code in a specified position in standard typeface. The UK, France, and Ireland
                            permit text that identifies the brand and variant name in a specified position and standard
                            typeface. The requirements under the Australian legislation are described in the official
                            picture reproduced below.</p>
                        <div class="col-lg-12 text-center"><img class="text-center"
                                                                src="<?php echo $base_url; ?>img/reference-materials/cigarette.png">
                        </div>
                        <p class="fs-14 text-center">© Commonwealth of Australia<sup>25</sup></p>
                        <br>
                        <p>Where the appearance of cigars is regulated, the legislation permits a single band to appear
                            around the circumference of a cigar, which complies with the color scheme and text
                            requirements of the plain packaging legislation.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">21. Transitional arrangements</div>
                        <p>Manufacturers and retailers will have existing stock that does not comply with new packaging
                            laws. Sufficient notice of when the law will come into force ensures that producers and
                            retailers have sufficient time to sell existing stock before changing packaging to comply
                            with the new law. This weakens any industry argument that it has suffered loss as a
                            consequence of holding unsold stock. Australia allowed a three-month sell-through period for
                            plain packaging, after which old packs could no longer be sold; the UK allowed a full year.
                            The question of what is a sufficient period of time may differ from country to country.
                            Officials should consider what periods have been allowed for previous packaging
                            requirements, such as changes to health warnings.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">22. Trade mark saving provision</div>
                        <p>There are important legal reasons to ensure that tobacco companies can maintain their
                            trademark registrations even if the use of those trademarks is severely restricted by plain
                            packaging. There are international, regional, and national laws that oblige states to
                            maintain trademark registrations. Therefore, most plain packaging legislation (for instance
                            in Australia, the UK, and Ireland<sup>24</sup>) has a trademark-registration-saving
                            provision that states that the legislation does not amount to a prohibition on the use of
                            the trademarks in all circumstances, and that non-use of a trademark as a result of the
                            legislation amounts to a good reason for non-use.</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">23. Country specific drafting issues</div>
                        <p>There are of course issues that need to be tailored to the particular country’s laws and
                            thatare common to all tobacco-control measures but, as ever, care has to be taken in getting
                            these right. In particular offenses, compliance, and enforcement provisions need to be dealt
                            with. Countries with existing packaging and labeling legislation will already have
                            experience with what offenses and enforcement provisions are effective:</p>
                        <ul class="custom">
                            <li>
                                <b>The offences provisions and application to corporations / Directors</b>
                                <br>
                                <p>The Guidelines for Implementation of Article 11 of the WHO FCTC include general
                                    provisions relating to liability and enforcement. For example, on the question of
                                    who is legally responsible for compliance with packaging and labeling measures, the
                                    Guidelines at paragraph 55 state: <i> “Parties should specify that tobacco product
                                        manufacturers, importers, wholesalers and retail establishments that sell
                                        tobacco products bear legal responsibility for compliance with packaging and
                                        labelling measures.”</i></p>
                                <p>With respect to penalties, the Guidelines state: <i>“In order to deter non-compliance
                                        with the law, Parties should specify a range of fines or other penalties
                                        commensurate with the severity of the violation and whether it is a repeat
                                        violation.”</i> Moreover, <i>“Parties should consider introducing any other
                                        penalty consistent with a Party’s legal system and culture that may include the
                                        creation and enforcement of offences and the suspension, limitation or
                                        cancellation of business and import licences.”</i></p>
                                <p>In the UK, for instance, a person who manufactures or imports a tobacco product that
                                    is intended for sale in the UK, or sells a tobacco product in the UK (either in
                                    trade or to a consumer) that has retail packaging that does not comply with the
                                    Regulations is liable for a range of criminal penalties from a fine of up to £5000
                                    to a jail sentence of up to two years. The UK law also stipulates that, if an
                                    offense is committed by a body corporate (a corporation or company), then the
                                    officers of the company, such as the managing director, may be
                                    prosecuted.<sup>25</sup> The prospect of a jail sentence for the company management
                                    means that compliance with tobacco-control laws in the UK is generally high.</p>
                                <p>The Australian Government introduced civil and criminal penalty provisions relating
                                    to noncompliant tobacco packaging and non-compliant tobacco products. These include
                                    fault-based offenses and strict liability offenses (where there is no need to show
                                    fault). Penalties for non-compliance can be imposed on retailers, manufacturers,
                                    suppliers or all of them.</p>
                            </li>
                            <li>
                                <b>Powers of search, seizure and provision of information. </b>
                                <br>
                                <p>Effective enforcement is important for compliance with all tobacco-control measures.
                                    The FCTC Guidelines for Article 11 recommend, <i>“Parties should consider granting
                                        enforcement authorities the power to order violators to recall noncompliant
                                        tobacco products, and to recover all expenses stemming from the recall, as well
                                        as the power to impose whatever sanctions are deemed appropriate, including
                                        seizure and destruction of non-compliant products. Further, Parties should
                                        consider making public the names of violators and the nature of their
                                        offence.”</i></p>
                                <p>Making public the names of violators can be an effective measure....</p>
                                <div class="col-lg-12 text-center"><img class="img-responsive"
                                                                        src="<?php echo $base_url; ?>img/reference-materials/shop-post.JPG">
                                </div>
                                <p class="fs-14 text-center">A shop in Canada where the retailer is obliged to display a
                                    sign informing of its non-compliance with tobacco control laws</p>
                            </li>
                        </ul>
                    </div>

                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>
                        <p><sup>1</sup>Australia, Tobacco Plain Packaging Regulations, 2011 (hereinafter TPP
                            Regulations), Section 2.3.6.</p>
                        <p><sup>2</sup>Australia, Tobacco Plain Packaging Act 2011 (hereinafter TPP Act), Section 18
                            (2).</p>
                        <p><sup>3</sup>TPD. Article 14.</p>
                        <p><sup>4</sup>TPPAct 2012, Section 18 (3) (b).</p>
                        <p><sup>5</sup>TPD Article 14 (2).</p>
                        <p><sup>6</sup>TPP Regulations,Regulation 2.1.1. Height 85–125mm, width 55–82mm and depth
                            20–42mm.</p>
                        <p><sup>7</sup>EU TP Directive, Article 10 (1) (g). Graphic Health Warnings on cigarette packs
                            must be at least 44mm high and 52mm wide.</p>
                        <p><sup>8</sup>TPP Act 2011, Section 18(2)(a).</p>
                        <p><sup>9</sup>EU TPDirective, Article 14.</p>
                        <p>
                            <sup>10</sup>See Australia TPP Act 2011, Section 18 (3) (d); France, Decree, Article 13 (2),
                            and Ireland, Public Health Standardised Packaging of Tobacco Regulations, Section 16.
                        </p>
                        <p>
                            <sup>11</sup>See Australia, TPPAct,Section 18 (1)(a); and UK, Standardised Packaging of
                            Tobacco Products Regulations 2015 (hereinafter SPTP Regulations), Schedule 2, Section 1 (1);
                            and France, Decree 2016, Article 7(3).
                        </p>
                        <p>
                            <sup>12</sup>See France, Decree 2016, Article 5; Ireland, Public Health (Standardised
                            Packaging of Tobacco) Act 2015,Section 7(8).
                        </p>
                        <p>
                            <sup>13</sup>See, for example, UK, SPTP Regulations 2015, Schedule 4,Section 3.
                        </p>
                        <p>
                            <sup>14</sup>See, for example, the UK, SPTP Regulations 2015, Section 11; Australia, TPP
                            Act, Section 24; or France, Decree 2016, Article 6 (1).
                        </p>
                        <p>
                            <sup>15</sup>See, for example, France, Decree Article 6 (2); Australia, TPP Act,Section 25;
                            or Ireland, Public Health (Standardised Packaging of Tobacco) Act 2015, Section 14(b).
                        </p>
                        <p>
                            <sup>16</sup>Y. L. Tan and K. Foong, <i>How the Malaysian Tobacco Industry Exploits
                                Loopholes in Pictorial Health Warnings.</i> 21 Tobacco Control, 2,55–56 (2012); D.
                            Simpson,
                            <i>News Analysis: New Zealand: Pack Seal Can Cover Warnings.</i> 21 Tobacco Control, 2,
                            82–86; accessed at http://tobaccocontrol.bmj.com/content/21/2/82.full (2012).
                        </p>
                        <p>
                            <sup>17</sup>See <a
                                    href="http://www.smh.com.au/national/health/free-covers-to-filter-cigarette-pack-warnings-may-be-illegal-20130103-2c797.html">http://www.smh.com.au/national/health/free-covers-to-filter-cigarette-pack-warnings-may-be-illegal-20130103-2c797.html.</a>
                        </p>
                        <p>
                            <sup>18</sup>See, for example, Ireland, Public Health Act 2015,Section 7(1)(f); or France,
                            Decree 2016, Article 6(3).
                        </p>
                        <p>
                            <sup>19</sup>EU TP Directive, Article 13(2).
                        </p>
                        <p>
                            <sup>20</sup>Compare Australia, TPP Regulations 2011, Regulation 2.3.5 and France, Decree
                            2016, Article 5 (2), which has fewer restrictions.
                        </p>
                        <p>
                            <sup>21</sup>France, Decree 2016, Article 1(c); UK, SPTP Regulations 2015,Schedule 1,
                            Section 5.
                        </p>
                        <p>
                            <sup>22</sup>Australia, TPP Regulation 2011, Regulation 3.2.1; UK, SPTP Regulations 2015,
                            Regulation 5; and France, Decree 2016, Article 4.
                        </p>
                        <p>
                            <sup>23</sup>Department of Health Australia, <i>Tobacco Plain Packaging — Your Guide</i>,
                            accessed at <a
                                    href="http://www.health.gov.au/internet/main/publishing.nsf/Content/tppbook#top">http://www.health.gov.au/internet/main/publishing.nsf/Content/tppbook#top</a>(July
                            9, 2014).
                        </p>
                        <p>
                            <sup>24</sup>See trademark registration saving provisions: Australia, TPP Act, Section 28;
                            UK, SPTP Regulations, Regulation 13; Ireland, Public Health (Standardised Packaging of
                            Tobacco) Act 2015, Section 5.
                        </p>
                        <p>
                            <sup>25</sup>UK, SPTP Regulations 2015, Regulations 15 and 16.
                        </p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // e
        case 'comparison-table-of-existing-plain-packaging-laws':
            if ($var == 'og_desc') {
                $og_desc = 'This table provides a comparison of the key features in plain packaging legislation from different countries. It is intended to provide examples but is not fully comprehensive for all features in each piece of legislation. The laws for some countries impose extremely detailed requirements, and it is recommended that officials refer to the specific legislation for these.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abs-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-2">Comparison of Existing Laws</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <p>
                            This table provides a comparison of the key features in plain packaging legislation from
                            different countries. It is intended to provide examples but is not fully comprehensive for
                            all features in each piece of legislation. The laws for some countries impose extremely
                            detailed requirements, and it is recommended that officials refer to the specific
                            legislation for these.
                        </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <table class="table table-bordered ref-e">
                            <thead>
                            <tr>
                                <th>
                                    <h4>Feature or Element</h4>
                                </th>
                                <th>
                                    <h4>Australia</h4>
                                    <p>
                                        <a href="https://www.legislation.gov.au/Details/C2016C00892" target="_blank">Tobacco
                                            Plain Packaging Act 2011(TPPA)</a>
                                    </p>
                                    <p>
                                        <a href="http://www.comlaw.gov.au/Details/F2013C00801" target="_blank">Tobacco
                                            Plain Packaging Regulations 2011 (TPPR)</a>
                                    </p>
                                </th>
                                <th>
                                    <h4>UK</h4>
                                    <p>
                                        <a href="http://www.legislation.gov.uk/uksi/2015/829/contents/made"
                                           target="_blank">Standardised Packaging of Tobacco Products Regulations 2015
                                            (SPTPR)</a>
                                    </p>
                                </th>
                                <th>
                                    <h4>France</h4>
                                    <p>
                                        <a href="https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000032276123&dateTexte=20170126"
                                           target="_blank">Ministerial Decree on Neutrality of Packaging of cigarettes
                                            and rolling tobacco of 21 March 2016 (MDNP)</a>
                                    </p>
                                    <p>
                                        <a href="https://www.legifrance.gouv.fr/affichCode.do?idSectionTA=LEGISCTA000033045524&cidTexte=LEGITEXT000006072665&dateTexte=20170126"
                                           target="_blank">Public Health Code (PHC)</a>
                                    </p>
                                </th>
                                <th>
                                    <h4>Ireland</h4>
                                    <p>
                                        <a href="http://www.irishstatutebook.ie/eli/2015/act/4/section/23/enacted/en/print.html"
                                           target="_blank">Public Health (Standardised Packaging of Tobacco) Act 2015
                                            (PHA)</a>
                                    </p>
                                    <p>
                                        <span class="h4-color">(draft)</span> <a
                                                href="http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=650&dLang=EN"
                                                target="_blank">Public Health(Standardised Packaging of Tobacco)
                                            Regulations 2016 (PHR)</a>
                                    </p>
                                </th>

                                <th>
                                    <h4>Hungary</h4>
                                    <p>
                                        <a href="http://www.tobaccocontrollaws.org/files/live/Hungary/Hungary - Decree No. 239_2016 - national.pdf"
                                           target="_blank">Decree No. 239/2016 (D239)</a>
                                    </p>
                                    <p>
                                        <a href="http://www.tobaccocontrollaws.org/files/live/Hungary/Hungary - Regulation 239_2016.pdf"
                                           target="_blank">(English)</a>
                                    </p>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Pack Color</td>
                                <td>
                                    <p>Exterior: Pantone 448C, matte finish. <span class="h4-color">TPPR 2.2.1(2)</span>
                                    </p>
                                    <p>Interior: white. <span class="h4-color">TPPR 2.2.1(3)</span></p>
                                </td>
                                <td>
                                    <p>Exterior: Pantone 448C, matte finish. <span class="h4-color">SPTPR 2(2)</span>
                                    </p>
                                    <p>Interior: white or Pantone 448C. <span class="h4-color">SPTPR 3(3)</span></p>
                                </td>
                                <td>
                                    <p>Exterior: Pantone 448C. <span class="h4-color">MDNP–1.a</span></p>
                                    <p>Interior: white or Pantone 448C. <span class="h4-color">MDNP - 3§1</span></p>
                                </td>
                                <td>
                                    <p>Exterior: Pantone 448C, matte finish. <span class="h4-color">PHR –6</span></p>
                                    <p>Interior: white or Pantone 448C .<span class="h4-color">PHR – 6</span></p>
                                </td>
                                <td>
                                    <p>Exterior: Pantone 448M, matte finish.</p>
                                    <p>Interior: white. <span class="h4-color">D239 – 6B§3(a)</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Text Color</td>
                                <td>
                                    <p>Pantone Cool Gray 2C, matte finish. <span class="h4-color">TPPR 2.4.2(2)</span>
                                    </p>
                                </td>
                                <td>
                                    <p>Pantone Cool Gray 2C, matte finish. <span class="h4-color">SPTPR sch1 ¶1(2) and Sch3 ¶1(2)</span>
                                    </p>
                                </td>
                                <td>
                                    <p>Pantone Cool Gray 2C, matte finish. <span class="h4-color">MDNP - 2§2d</span></p>
                                </td>
                                <td>
                                    <p>Pantone Cool Gray 2C, matte finish. <span class="h4-color">PHR 7(f)</span></p>
                                </td>
                                <td>
                                    <p>Pantone Cool Gray 1M, matte finish. <span class="h4-color">D239 – 6B§4(a)</span>
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td>Permitted text</td>
                                <td>
                                    <p>Brand name, variant name. </p>
                                    <p><span class="h4-color">TPPA 20(1-3) and 21(1)</span></p>
                                    <p>
                                        Producers’ name and address, fire risk statement, locally made product
                                        statement, origin mark.
                                    </p>
                                    <p><span class="h4-color">TPPR 2.3.1(1)</span></p>
                                </td>
                                <td>
                                    <p>Brand name, variant name.</p>
                                    <p><span class="h4-color">SPTPR sch1 ¶1 and Sch3 ¶1</span></p>
                                    <p>
                                        Producers’ name and address, fire risk statement, locally made product
                                        statement, origin mark.
                                    </p>
                                    <p><span class="h4-color">SPTPR sch1 ¶3 and Sch3 ¶3</span></p>
                                </td>
                                <td>
                                    <p>Brand name, variant name.</p>
                                    <p><span class="h4-color">MDNP - 2§1</span></p>
                                    <p>
                                        Producers’ name and address, fire risk statement, locally made product
                                        statement, origin mark.
                                    </p>
                                    <p><span class="h4-color">MDNP - 2§3</span></p>
                                </td>
                                <td>
                                    <p>Brand name, variant name.</p>
                                    <p><span class="h4-color">PHA – 7(3)</span></p>
                                    <p>Contact Details of Manufacturer.</p>
                                    <p><span class="h4-color">PHR - 13</span></p>
                                </td>
                                <td>
                                    <p>Brand Name and type of cigarette or cigarette tobacco brand.</p>
                                    <p><span class="h4-color">D239 – 6B§3(f)</span></p>
                                </td>
                            </tr>

                            <tr>
                                <td>Other text requirements</td>
                                <td>
                                    <p>All text: Lucida Sans, normal weighted regular font.</p>
                                    <p><span class="h4-color">Various</span></p>
                                    <p>Brand name: point 14.</p>
                                    <p><span class="h4-color">TPPR 2.4.2(2)(b)</span></p>
                                    <p>All other text: point 10.</p>
                                    <p><span class="h4-color">Various</span></p>
                                </td>
                                <td>
                                    <p>All text: Helvetica, normal weighted regular font.</p>
                                    <p><span class="h4-color">SPTPR – sch1 and sch3 various</span></p>
                                    <p>Brand name: point 14.</p>
                                    <p><span class="h4-color">SPTPR sch1 ¶1(2)(j) and sch3 ¶1(2)(j)</span></p>
                                    <p>All other text: point 10.</p>
                                    <p><span class="h4-color">SPTPR sch1 and sch3 various</span></p>
                                </td>
                                <td>
                                    <p>All text: Helvetica, normal weighted regular font. Brand name: point 14. All
                                        other text: point 10.</p>
                                    <p><span class="h4-color">MDNP - 2§2 and 2§3</span></p>
                                </td>
                                <td>
                                    <p>All text: Helvetica, normal weighted regular typeface.</p>
                                    <p><span class="h4-color">PHR 7(d)-(e)</span></p>
                                    <p>First letter capitalized and the rest in lower case</p>
                                    <p><span class="h4-color">PHR 7(b)</span></p>
                                    <p>Brand name: point 14.</p>
                                    <p><span class="h4-color">PHR 7(j)</span></p>
                                    <p>Variant name and manufacturer contact details: point 10.</p>
                                    <p><span class="h4-color">PHR 7(k)</span></p>
                                </td>
                                <td>
                                    <p>
                                        All text: Helvetica, normal weighted regular typeface.
                                        First letter capitalized and the rest in lower case
                                        Brand name: point 14.
                                        Variant name and manufacturer contact details: point 10.
                                    </p>
                                    <p><span class="h4-color">D239 – 6C§4</span></p>
                                </td>
                            </tr>

                            <tr>
                                <td>Shape and type of packets for cigarettes</td>
                                <td>
                                    <p>Rectangular, with 90 degree angles and specified dimensions for each surface.</p>
                                    <p><span class="h4-color">TPPA18(2)(b) and TPPR 2.1.1(1)</span></p>
                                </td>
                                <td>
                                    <p>Cuboid (rounded or bevelled edges permitted).</p>
                                    <p><span class="h4-color">SPTPR 4(3)</span></p>
                                </td>
                                <td>
                                    <p>Cuboid.</p>
                                    <span class="h4-color">MDNP – 7§1</span>
                                </td>
                                <td>
                                    <p>Cuboid (rounded or bevelled edges permitted).</p>
                                    <p><span class="h4-color">PHA – 7(6)</span></p>
                                </td>
                                <td>
                                    <p>Cuboid.</p>
                                    <p><span class="4-color">D239 – 6§4</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Type of opening for cigarettes</td>
                                <td>
                                    <p>Flip-top lid only.</p>
                                    <p><span class="h4-color">TPPA 18(3)(b) and TPPR 2.1.1(3)</span></p>
                                </td>
                                <td>
                                    <p>If the opening may be reclosed, then only flip-top lid and shoulder box.</p>
                                    <p><span class="h4-color">SPTPR 4(4-6)</span></p>
                                </td>
                                <td>
                                    <p>If the opening may be reclosed, then only flip-top lid and shoulder box.</p>
                                    <p><span class="h4-color">PHC R. 3512-23</span></p>
                                </td>
                                <td>
                                    <p>If the opening may be reclosed, then only flip-top lid and shoulder box.</p>
                                    <p><span class="h4-color">PHA – 7(6)</span></p>
                                </td>
                                <td>
                                    <p>If the opening may be reclosed, then only flip-top lid and shoulder box.</p>
                                    <p><span class="h4-color">D239 – 6§4</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Minimum Content</td>
                                <td>
                                    <p>Cigarettes: 20.</p>
                                    <p><span class="h4-color">Sale of Tobacco Act 2004 A 12</span></p>
                                    <p>Roll-your-own: NA.</p>
                                </td>
                                <td>
                                    <p>Cigarettes: 20.</p>
                                    <p><span class="h4-color">SPTPR 4(8)</span></p>
                                    <p>Roll-your-own: 30g.</p>
                                    <p><span class="h4-color">SPTPR 8(4)</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: 20.</p>
                                    <p>Roll-your-own: 30g.</p>
                                    <p><span class="h4-color">PHC L. 3512-14</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: 20.</p>
                                    <p><span class="h4-color">Public Health (Tobacco) Act, 2002– Sec 38(1)</span></p>
                                    <p>Roll-your-own: 30g.</p>
                                    <p><span class="h4-color">
                                            European Union (Manufacture, Presentation and Sale of tobacco and Related Products) Regulations 2016 Reg 13(1)
                                        </span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: not less than 20 but no more than 25.</p>
                                    <p><span class="h4-color">D239 – 15A§ (a)</span></p>
                                    <p>Roll-your-own: no less than 30g but no more than 50g and the weight must be
                                        divisible by 10 with no remainder.</p>
                                    <p><span class="h4-color">
                                            D239 – 15A§ (c)
                                        </span></p>
                                </td>
                            </tr>

                            <tr>
                                <td>Material for cigarette packs</td>
                                <td>
                                    <p>Rigid cardboard</p>
                                    <p><span class="h4-color">TPPA 18(2)(a)</span></p>
                                </td>
                                <td>
                                    <p>Carton or soft material</p>
                                    <p><span class="h4-color">SPTPR 4(2)</span></p>
                                </td>
                                <td>
                                    <p>Carton or flexible material</p>
                                    <p><span class="h4-color">PHC R. 3512-22.I</span></p>
                                </td>
                                <td>
                                    <p>Carton or soft material</p>
                                    <p><span class="h4-color">PHA – 7(6)</span></p>
                                </td>
                                <td>
                                    <p>Carton or soft material</p>
                                    <p><span class="h4-color">D239 - 6§4</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Linings</td>
                                <td>
                                    <p>Cigarettes: Silver foil with white paper backing, regular embossed dots
                                        permitted.</p>
                                    <p><span class="h4-color">TPPA 18(3)(d) and TPPR 2.2.1(4)</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: Silver foil with white paper backing, regular embossed dots
                                        permitted.</p>
                                    <p><span class="h4-color">SPTPR sch2 ¶3(1)</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: Silver foil with white paper backing, regular embossed dots
                                        permitted.</p>
                                    <p><span class="h4-color">MDNP 3§2&3</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: Silver foil with white paper backing.<br>
                                        Other products: white or the colour of the packaging material in its natural
                                        state.<br>
                                        Embossed dots or squares permitted</p>
                                    <p><span class="h4-color">PHR - 16</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: white or matte silver color. No decorative grooving, embossing or
                                        other decorative elements, except roughening used for non-decorative
                                        purposes.</p>
                                    <p><span class="h4-color">D239 –6B7§7</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Texture</td>
                                <td>
                                    <p>No embellishments permitted inside or out.</p>
                                    <p><span class="h4-color">TPPA 18(1)(a)</span></p>
                                </td>
                                <td>
                                    <p>Must be smooth and flat, and must contain no ridges, embossing or other
                                        irregularities of shape or texture.</p>
                                    <p><span class="h4-color">SPTPR sch2 ¶1(1)</span></p>
                                </td>
                                <td>
                                    <p>Must be smooth and flat.</p>
                                    <p><span class="h4-color">PHC R. 3512-22.III</span></p>
                                </td>
                                <td>
                                    <p>No decorative ridges, embossing or other embellishments.</p>
                                    <p><span class="h4-color">PHA – 7(1)(d)</span></p>
                                </td>
                                <td>
                                    <p>No decorative grooving, embossing or other decorative elements.</p>
                                    <p><span class="h4-color">D239 -6B7§7</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Wrappers</td>
                                <td>
                                    <p>Must be clear and transparent. Tear strip permitted. Single bar code
                                        permitted.</p>
                                    <p><span class="h4-color">TPPA 22 and TPPR 2.3.1 and 2.3.5</span></p>
                                </td>
                                <td>
                                    <p>Must be clear and transparent. Tear strip permitted. Single bar code
                                        permitted.</p>
                                    <p><span class="h4-color">SPTPR sch2 ¶4 and sch4 ¶4</span></p>
                                </td>
                                <td>
                                    <p>Must be clear and transparent. Tear strip permitted. Single bar code
                                        permitted.</p>
                                    <p><span class="h4-color">PHC R. 3512-19 and MDNP 5§1</span></p>
                                </td>
                                <td>
                                    <p>Must be transparent and uncolored. Black tear strip permitted.</p>
                                    <p><span class="h4-color">PHA – 7(8)</span></p>
                                </td>
                                <td>
                                    <p>Must be un-tinted and transparent. Tear strip permitted.</p>
                                    <p><span class="h4-color">D239 – 6A§8</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Sound and smell</td>
                                <td>
                                    <p>Characteristic noises or scents prohibited.</p>
                                    <p><span class="h4-color">TPPA 25</span></p>
                                </td>
                                <td>
                                    <p>Characteristic sound and smell prohibited.</p>
                                    <p><span class="h4-color">SPTPR 11</span></p>
                                </td>
                                <td>
                                    <p>Characteristic sound and smell prohibited.</p>
                                    <p><span class="h4-color">PHC R. 3512-20.I</span></p>
                                </td>
                                <td>
                                    <p>Audio effects or scents that promote the product are prohibited.</p>
                                    <p><span class="h4-color">PHA 14(a)</span></p>
                                </td>
                                <td>
                                    <p>Scents that modify the smell of tobacco products are prohibited.</p>
                                    <p><span class="h4-color">4A§2</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Features designed to change after sale</td>
                                <td>
                                    <p>Prohibited.</p>
                                    <p><span class="h4-color">TPPA 24</span></p>
                                </td>
                                <td>
                                    <p>Prohibited.</p>
                                    <p><span class="h4-color">SPTPR 12</span></p>
                                </td>
                                <td>
                                    <p>Prohibited.</p>
                                    <p><span class="h4-color">PHC R. 3512-20.I</span></p>
                                </td>
                                <td>
                                    <p>Prohibited.</p>
                                    <p><span class="h4-color">PHA 14(b)</span></p>
                                </td>
                                <td>
                                    <p>Likely prohibited. Packs may not contain any elements other than those specified
                                        in the Act.</p>
                                    <p><span class="h4-color">6C§1(c)</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Inserts, onserts and stickers</td>
                                <td>
                                    <p>Prohibited.</p>
                                    <p><span class="h4-color">TPPA 23</span></p>
                                </td>
                                <td>
                                    <p>Prohibited (except for cigarette papers and filters in packs of
                                        roll-your-own).</p>
                                    <p><span class="h4-color">SPTPR sch2 ¶2 and sch4 ¶2</span></p>
                                </td>
                                <td>
                                    <p>Prohibited (except for cigarette papers and filters in packs of
                                        roll-your-own).</p>
                                    <p><span class="h4-color">PHC R 3511-18.II and R. 3511-20.II</span></p>
                                </td>
                                <td>
                                    <p>Prohibited.</p>
                                    <p><span class="h4-color">PHA – 7(1)(f)</span></p>
                                </td>
                                <td>
                                    <p>Not permitted.</p>
                                    <p><span class="h4-color">D239 – 6B§3(d)</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Barcodes</td>
                                <td>
                                    <p>One permitted. Must be black and white and not form a picture.</p>
                                    <p><span class="h4-color">TPPR 2.3.1(1)(d) and 2.3.5</span></p>
                                </td>
                                <td>
                                    <p>One permitted. Must be black and white or Pantone 448C and white. Must not be on
                                        front and must not form a picture.</p>
                                    <p><span class="h4-color">SPTPR sch1 ¶4 and sch3 ¶5</span></p>
                                </td>
                                <td>
                                    <p>One permitted. Must be black and white or Pantone 448C and white. Must not be on
                                        front and must not form a picture.</p>
                                    <p><span class="h4-color">PHC R 3511-17 and MDNP 1.b</span></p>
                                </td>
                                <td>
                                    <p>One permitted. Must be black and white and not form a picture.</p>
                                    <p><span class="h4-color">PHR - 14</span></p>
                                </td>
                                <td>
                                    <p>One permitted.</p>
                                    <p><span class="h4-color">D239 – 6B§11</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>The appearance of individual products</td>
                                <td>
                                    <p>Cigarettes: White casing with white or imitation cork tip. Standardised small
                                        alphanumeric code permitted.</p>
                                    <p><span class="h4-color">TPPR 3.1.1 and 3.1.2</span></p>
                                    <p>Cigars: standardised band permitted around the circumference of cigar.</p>
                                    <p><span class="h4-color">TPPR 3.2.1(1)and(2)</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: White casing with white or imitation cork tip. Brand/variant name
                                        permitted next to tip in standard typeface.</p>
                                    <p><span class="h4-color">SPTPR 5(2)-(5)</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: White casing with white or imitation cork tip. Brand/variant name
                                        permitted next to tip in standard typeface.</p>
                                    <p><span class="h4-color">MDNP 4§1-3</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: White casing with white or imitation cork tip. Brand and variant name
                                        permitted next to tip in standard typeface.</p>
                                    <p><span class="h4-color">PHA – 8(1)-2</span></p>
                                </td>
                                <td>
                                    <p>Cigarettes: White casing with white or imitation cork tip. Brand and variant name
                                        permitted next to tip in standard typeface.</p>
                                    <p><span class="h4-color">6C§(1) –(2)</span></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <?php
            break;

        // g
        case 'research-evidence':
            if ($var == 'og_desc') {
                $og_desc = 'This section summarises the empirical research evidence that supports the implementation of plain packaging.';

                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-3">Research Evidence</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1 ref -g1">
                        <div>
                            <div class="section-secondary-title fc-ref-mat-3">Introduction</div>
                            <p>These pages summarise the empirical research evidence that supports the implementation of
                                plain packaging. </p>
                            <p>Over the course of 20-30 years there have been many <b>peer reviewed scientific research
                                    studies</b> looking at the
                                impact
                                that plain packaging of tobacco would have on smoking behaviours and attitudes and the
                                likely consequential impact
                                on smoking rates.</p>
                            <p>Research has been conducted in more than 10 different countries using a range of
                                methodologies and each study taken
                                in isolation only provides part of the picture. </p>

                            <p><u>The different types of research studies include</u>:</p>
                            <p>Behavioural studies aimed to test whether participants believed that plain packaging
                                would change their purchasing
                                behaviour. </p>
                            <p>Surveys of consumer groups to consider the appeal of plain packs compared with branded
                                packs.</p>
                            <p>Studies using mock-ups of standardised packaging to see how smokers and potential smokers
                                react to them.</p>
                            <p>Eye tracking studies that looked at whether people focused more on the health warnings
                                when branding was
                                removed. </p>
                            <p>Qualitative and survey research looking at the impact of removing branding on smoker
                                image and product
                                associations. </p>
                            <p>Studies into whether and how perceptions of the harmfulness and strength of standardised
                                packages differ from
                                branded packs (and how different kinds of plain packages differ in this regard). </p>
                            <p>Studies using a “pack-offer” task to assess the demand for plain packaging. In each of
                                these studies, youth
                                participants were offered a choice of packs.</p>
                            <p>Naturalistic trials of plain packaging where smokers used brown ‘plain’ packs for two
                                weeks and their regular packs
                                for two weeks in “real-life” settings. The studies analysed avoidance behaviours, such
                                as hiding or covering the
                                pack.</p>

                            <p>This research is criticised by the tobacco industry because the studies consider
                                attitudes, beliefs, and predictions
                                of future behaviour but fail, they claim, to demonstrate a link with actual behaviour.
                                They also criticise the
                                methodology of individual studies. But the research is persuasive because of the high
                                degree of consistency across
                                more than 75 studies from numerous countries and using different methodologies. </p>
                            <p>The tobacco industry also criticises the research for failing to include a randomised
                                control trial of plain
                                packaging. But as has been pointed out, it would not be possible or ethical to undertake
                                such a trial. To do so
                                would require studies to be carried out within a suitably large and isolated population
                                free of known confounding
                                factors that influence smoking and prevalence. Such studies would expose a randomised
                                group of children and/ or
                                adults to nicotine exposure and addiction. </p>
                            <p>As is highlighted elsewhere in this toolkit, <b>the tobacco industry is rarely, if ever,
                                    able to rely on peer
                                    reviewed
                                    studies to support its arguments that plain packaging will not be effective; and the
                                    tobacco companies have
                                    consistently refused to disclose any of their own research or behavioural studies
                                    into the likely effects of
                                    plain
                                    packaging</b>.</p>

                            <div class="section-secondary-title fc-ref-mat-3">Outcomes of the research</div>
                            <h3 class="fc-ref-mat-4 sub-title">Attractiveness of tobacco products and packaging as
                                advertising</h3>
                            <p><b>A substantial number of studies that examine plain packaging support the conclusions
                                    that the measure reduces the
                                    attractiveness and appeal of tobacco products.</b></p>
                            <p>This includes experimental studies from Australia, <sup>1</sup> Brazil, <sup>2</sup>
                                Canada, <sup>3</sup> New
                                Zealand, <sup>4</sup> and the
                                USA <sup>5</sup>; survey
                                evidence
                                from
                                Australia <sup>6</sup>, France <sup>7</sup>, the UK <sup>8</sup>, and the USA
                                <sup>9</sup>; and focus group
                                studies from New
                                Zealand <sup>10</sup> and
                                the United
                                Kingdom <sup>11</sup>.
                                Evidence
                                also shows that the advertising function of tobacco packaging has also been specifically
                                targeted at youth by the
                                tobacco companies. <sup>12</sup></p>

                            <h3 class="fc-ref-mat-4 sub-title">The effectiveness of health warnings</h3>
                            <p><b>Studies show that colorful and attractive branding on packaging detracts and distracts
                                    from health warnings,
                                    thereby reducing their effectiveness.</b></p>
                            <p>A number of studies suggest that plain packaging increases the salience of health
                                warnings, including experimental
                                and survey studies from Australia and Canada <sup>13</sup>, with impacts that go above
                                and beyond simply
                                introducing larger
                                health
                                warnings without plain packaging <sup>14</sup>. </p>

                            <h3 class="fc-ref-mat-4 sub-title">Misleading tobacco packaging</h3>
                            <p><b>Studies have demonstrated there is a strong association between pack design and false
                                    consumer perceptions of
                                    risk. <sup>15</sup> </b></p>
                            <p>Tobacco branding can mislead consumers as to the relative harms of one product compared
                                to other products. Many
                                countries have banned terms such as “light” and “mild” for this reason, as all the
                                evidence shows that these
                                products are equally dangerous. However, smokers and non-smokers continue to hold
                                mistaken beliefs about different
                                tobacco products because of the tobacco companies’ use of colors and branding. Some pack
                                designs preserve the
                                branding used for prohibited brand variants. For instance, Marlboro Lights became
                                Marlboro Gold, and Marlboro Ultra
                                Lights became Marlboro Silver. Similar tactics were used by other companies. The color
                                of packs in particular
                                affects consumers’ perceptions of risk. Lighter packs are perceived as being less harsh
                                and having lower tar levels
                                than darker colors, even when there is identical products in them. <sup>16</sup></p>

                            <p>Peer-reviewed studies from many countries show that plain packaging will minimize the
                                ability of packaging and brand
                                variants to mislead consumers about the relative harms of different products.
                                <sup>17</sup></p>

                            <div class="section-secondary-title fc-ref-mat-3">Expert reviews of the research evidence
                            </div>
                            <p>Australia, the UK, and Ireland, when considering plain packaging, commissioned
                                independent reviews of the research
                                evidence to ensure that there is a clear, complete, and balanced picture. More recently,
                                <a
                                        href="http://www.cochrane.org/about-us">Cochrane</a>, a global
                                independent non-profit organization, undertook a review of the research studies that
                                evaluated plain or standardised
                                packaging.</p>

                            <p>The four reviews show that the evidence on plain packaging is notable for its breadth and
                                diversity of methods but
                                also for the strong consistency of the results in supporting that plain packaging will
                                contribute to its objectives.
                                The evidence reviews were:</p>

                            <ol>
                                <li>Cancer Council Victoria (Australia 2011)</li>
                                <li>The Stirling Review (United Kingdom 2012 and updated 2013)</li>
                                <li>The Chantler Review (United Kingdom 2014)</li>
                                <li>The Hammond Review (Ireland 2014)</li>
                                <li>The Cochrane Review (2017)</li>
                            </ol>

                            <p>By the time of the Hammond Review commissioned by the Irish Government in 2014, a total
                                of 69 original empirical
                                studies were reviewed. Research continues to be undertaken throughout the world and
                                there have also been many
                                post-implementation studies conducted in Australia (see the <b>Australia’s Post-
                                    Implementation Evidence</b> page of
                                the
                                Tools and Resources). </p>
                            <p>This page summarises the findings of these five reviews and goes onto outline some of the
                                additional research
                                evidence that has been produced since 2014.</p>
                            <p>It is important to emphasize that these evidence <u>reviews only considered peer-reviewed
                                    studies published in
                                    academic
                                    or medical journals</u>. </p>

                            <h3 class="fc-ref-mat-4 sub-title">Obtain full copies of the reviews</h3>
                            <p>For Ministry of Health officials considering taking plain packaging forward, it is
                                recommended that full copies of
                                these reviews are obtained and considered, and records kept of when the copies were
                                obtained, when they were
                                considered and by whom (See <b>Guide 1.2 Establish a document record</b> ). They should
                                also consider those studies
                                that
                                have taken place since the latest evidence review (see below). </p>

                            <div class="section-secondary-title fc-ref-mat-3">1. Cancer Council Victoria</div>
                            <p>In 2011, Cancer Council Victoria in Australia produced a paper to present the findings of
                                research over two decades
                                and across five countries on the topic of plain packaging. It includes the results of
                                more than 25 published
                                experimental studies and summarizes the results of research papers that analyze industry
                                arguments about barriers to
                                legislation resulting from international law and trade agreements:</p>

                            <a href="http://www.cancervic.org.au/plainfacts/plainfacts-evidence">http://www.cancervic.org.au/plainfacts/plainfacts-evidence</a>

                            <p>This was the first evidence review that provided the support for Australia to move ahead
                                with the policy. The more
                                recent reviews looked at the studies considered in this paper as well as subsequent
                                ones. To avoid repetition, these
                                pages focuses on the outcomes of more recent reviews. </p>

                            <div class="section-secondary-title fc-ref-mat-3">2. The Stirling Review</div>

                            <h3 class="fc-ref-mat-4 sub-title">Background</h3>
                            <p>In 2012,the UK Department of Health commissioned a systematic review of the evidence on
                                plain tobacco packaging. The
                                review was supported through the Public Health Research Consortium (PHRC), a network of
                                researchers at the
                                University of Stirling, the University of Nottingham, and the Institute of Education,
                                London.</p>

                            <p>Screening led to 37 studies being analyzed. The resulting report was peer reviewed and
                                published at the same time as
                                the 2012 consultation. It was made clear that the PHRC report represented the work and
                                views of the authors, not
                                necessarily those of the UK Department of Health. An update was published in September
                                2013, which considered
                                seventeen new studies published since the original Stirling Review in 2012.</p>

                            <a href="http://phrc.lshtm.ac.uk/project_2011-2016_006.html">http://phrc.lshtm.ac.uk/project_2011-2016_006.html</a>(Original)
                            <a href="http://www.stir.ac.uk/media/schools/management/documents/Plain%20Packaging%20Studies%20Update.pdf">http://www.stir.ac.uk/media/schools/management/documents/Plain%20Packaging%20Studies%20Update.pdf</a>.
                            (Update)

                            <p>The Stirling Review found that:</p>

                            <p class="p-states">“There is strong evidence to support the propositions. . . that plain
                                packaging would reduce the
                                attractiveness and appeal of tobacco products, it would increase the noticeability and
                                effectiveness of health
                                warnings and messages and it would reduce the use of design techniques that may mislead
                                consumers about the
                                harmfulness of tobacco products.”</p>
                            <h3 class="fc-ref-mat-4 sub-title">Methodology</h3>

                            <p>The review aimed to examine all available current evidence on the effects of plain
                                packaging in the areas of pack
                                appeal; effectiveness of health warnings; and perceptions of product harm and strength.
                                It employed systematic
                                review methodology and examined studies from 1980 to the date of review.</p>

                            <p>A total of 4,518 citations were identified following initial searching, and, after
                                screening and quality appraisal,
                                37 studies were included in the systematic review. Most of the studies included in the
                                review were conducted in
                                Australasia, North America, or Western Europe.</p>

                            <h3 class="fc-ref-mat-4 sub-title">Findings</h3>

                            <p>Appeal of cigarettes, packs and brands: </p>
                            <p>All studies reported that plain packs were rated as less attractive than branded
                                equivalent packs by both adults
                                and children. </p>
                            <p>Plain packs were perceived to be poorer quality, poorer tasting, and cheaper than branded
                                equivalent packs.</p>
                            <p>Positive impressions of smoker identity and personality attributes associated with
                                specific brands were weakened or
                                disappeared with plain packaging.</p>
                            <p>Non-smokers and younger people responded more negatively to plain packs than smokers and
                                older people. </p>

                            <h3 class="fc-ref-mat-4 sub-title">Effectiveness of health warnings</h3>
                            <p>Overall, the studies suggest that plain packaging tends to increase the recall of health
                                warnings, the attention
                                paid to them, and their perceived seriousness and believability. </p>
                            <p>Findings appear to be moderated by the type, size, and position of health warning
                                used.</p>
                            <p>Only one study examined sub-group differences and reported that non-smokers and weekly
                                smokers may pay more
                                attention to warnings on plain packs than daily smokers. </p>

                            <h3 class="fc-ref-mat-4 sub-title">Perceptions of product harm and strength:</h3>
                            <p>Plain packaging can reduce misperceptions about the relative harmfulness of different
                                brands.</p>
                            <p>Colors of packs affect perceptions of product harm and strength. In general, plain packs
                                are perceived as more
                                harmful than branded packs if in a darker color, such as brown, and, conversely, less
                                harmful than branded packs if
                                in lighter colors, such as white. Red packs are perceived to contain stronger cigarettes
                                than light-colored
                                packs.</p>
                            <p>Use of descriptors, such as “gold” or “smooth,” on plain packs have the potential to
                                mislead consumers, as they do
                                on branded packs.</p>
                            <p>In general, smokers are more likely to have misperceptions about the harmfulness of
                                packs, both branded and plain,
                                than non-smokers. </p>

                            <h3 class="fc-ref-mat-4 sub-title">Smoking-related attitudes, beliefs, intentions, and
                                behavior:</h3>
                            <p>Plain packs appear to increase negative feelings about smoking. </p>
                            <p>Plain packs are generally perceived as likely to have a deterrent effect on the onset of
                                smoking by young people
                                and as likely to encourage existing smokers to reduce their consumption or to quit,
                                although in some studies they
                                are perceived as likely to have little impact. </p>
                            <p>Non-smokers, lighter smokers, and younger people are more likely to perceive that plain
                                packs would discourage or
                                reduce smoking. </p>

                            <h3 class="fc-ref-mat-4 sub-title">Conclusions</h3>
                            <p>Plain packaging has been shown to:</p>
                            <p>reduce pack and product appeal by making packs appear less attractive and of lower
                                quality, and by weakening the
                                positive smoker identity and personality attributes associated with branded packs;</p>
                            <p>increase the salience of health warnings in terms of improving the recall and perceived
                                seriousness and
                                believability of warnings; and</p>
                            <p>reduce the confusion about product harm that can result from branded packs. </p>

                            <p>Plain packaging was also perceived as likely to have a deterrent effect on the onset of
                                smoking by young people and
                                as likely to encourage existing smokers to quit. The review also found some evidence
                                that non-smokers and, to a
                                lesser extent, smokers approved of the idea of plain packaging, with both groups feeling
                                it would make smoking less
                                attractive, particularly to young people.</p>

                            <p>Despite some limitations of the review identified by the researchers, they say that it is
                                worth emphasizing the
                                remarkable consistency in study findings regarding the potential impact of plain
                                packaging. Across studies using
                                different designs, conducted in a range of countries, with young and older populations
                                and with smokers and
                                non-smokers the key findings are similar. This consistency of evidence can provide
                                confidence about the observed
                                potential effects of plain packaging.</p>

                            <h3 class="fc-ref-mat-4 sub-title">Update</h3>
                            <p>The authors provided an update to this review, summarizing subsequent evidence, in 2013
                                <sup>18</sup>. The findings
                                were
                                consistent
                                with the original review, and the overarching summary is laid out below:</p>

                            <p class="p-states">“This update of the literature, which now includes 54 published studies
                                (37 in our original review
                                and 17 here) shows that since the systematic review the evidence base has continued to
                                grow at considerable
                                pace.”</p>

                            <p>and</p>

                            <p class="p-states">“The evidence summarised in this update of the literature, in general,
                                provides further support for
                                the proposed benefits of plain packaging.”</p>

                            <div class="section-secondary-title fc-ref-mat-3">3. The Chantler Review</div>

                            <h3 class="fc-ref-mat-4 sub-title">Background</h3>
                            <p>In November 2013, the UK Department of Health commissioned Sir Cyril Chantler to
                                undertake an independent review of
                                whether or not the introduction of standardized packaging of tobacco was likely to have
                                an effect on public health,
                                in particular in relation to children.</p>
                            <p>The remit of this review was wider than the Stirling Review and included consideration of
                                evidence on the impact in
                                Australia as well as industry arguments and possible unintended consequences.</p>

                            <h3 class="fc-ref-mat-4 sub-title">Methodology</h3>
                            <p>The Chantler Review considered all the evidence relevant to whether or not the
                                introduction of standardized packaging
                                would be beneficial to public health. The validity of the Stirling systematic review was
                                also considered. </p>
                            <p>The Chantler Review invited interested parties to submit research-based material, and
                                took evidence during two
                                meetings. Separate meetings were held withthe Smokefree Action Coalition, the Tobacco
                                Manufacturers Association,and
                                representatives of Philip Morris Ltd. Sir Cyril also visited Australia to study its
                                experience of implementing plain
                                packaging.</p>
                            <p>He commissioned further expert advice to assist in the analysis of the key evidence. In
                                particular, two specific
                                pieces of independent analysis on the qualitative and quantitative studies in the
                                Stirling Review (and the
                                subsequent update) using Critical Appraisal Skills Programme assessment tools. These
                                were undertaken by academics at
                                Southampton University and Kings College London, respectively.</p>
                            <p>The report of the Chantler Review was published in April 2014 and is available here: <a
                                        href="http://www.kcl.ac.uk/health/10035-TSO-2901853-Chantler-Review-ACCESSIBLE.PDF">http://www.kcl.ac.uk/health/10035-TSO-2901853-Chantler-Review-ACCESSIBLE.PDF</a>
                            </p>
                            <p>A full record of the meetings, evidence, and written submissions from the review is
                                available here:
                                <a href="http://webarchive.nationalarchives.gov.uk/20140911094224/http://www.kcl.ac.uk/health/packaging-docs.aspx">http://webarchive.nationalarchives.gov.uk/20140911094224/http://www.kcl.ac.uk/health/packaging-docs.aspx</a>
                            </p>

                            <h3 class="fc-ref-mat-4 sub-title">Findings</h3>

                            <p>Sir Cyril Chantler’s overall conclusion was that it is “<b>highly likely that
                                    standardised packaging would serve to
                                    reduce the rate of children taking up smoking and implausible that it would increase
                                    the consumption of tobacco
                                    . . . I am satisfied that the body of evidence shows that standardised packaging, in
                                    conjunction with the
                                    current tobacco control regime, is very likely to lead to a modest but important
                                    reduction over time on the
                                    uptake and prevalence of smoking and thus have a positive impact on public
                                    health</b>.”</p>

                            <p>Tobacco marketing and branding</p>

                            <p class="p-states">“<b>There is very strong evidence that exposure to tobacco advertising
                                    and promotion increases the
                                    likelihood of children taking up smoking. Industry documents show that tobacco
                                    packaging has for decades been
                                    designed, in the light of market research, with regard to what appeals to target
                                    groups</b>. Branded cigarettes
                                are
                                ‘badge’ products, frequently on display, which therefore act as a “silent salesman.”
                                Tobacco packages appear to be
                                especially important as a means of communicating brand imagery in countries like
                                Australia and the UK which have
                                comprehensive bans on advertising and promotion. . .</p>

                            <p class="p-states">The tobacco industry argues that all of its marketing activity,
                                including packaging, aims solely to
                                persuade existing adult smokers to switch brand and never targets children or new
                                smokers. However, in my opinion,
                                whatever their intent, it is not plausible that the effect of branded packaging is only
                                to encourage brand switching
                                amongst adult smokers, and never to encourage non-smokers from taking up smoking. I have
                                heard no coherent argument
                                as to how this purported separation occurs in practice and in my opinion a ‘spillover
                                effect’ is highly plausible
                                whereby packages that are designed to appeal to a young adult, also, albeit
                                inadvertently, appeal to children. <b>It
                                    seems to me that children and non-smokers are not, and cannot be, quarantined from
                                    seeing tobacco packaging and
                                    in
                                    my view once they are exposed to this packaging, they are susceptible to its appeal
                                    whether it is intended to
                                    target
                                    them or not. In the light of these and other considerations set out in my report I
                                    believe that branded
                                    packaging
                                    contributes to increased tobacco consumption</b>.”</p>

                            <p>The evidence</p>
                            <p class="p-states">“There has been, as opponents of standardised packaging have rightly
                                pointed out to me in the course
                                of this Review, no randomised controlled trial carried out to test the impact of
                                standardised packaging on the take
                                up of smoking amongst children.

                                <br>
                                <br>
                                I do not consider it to be possible or ethical to undertake such a trial. To do so would
                                require studies to be
                                carried out within a suitably large and isolated population free of known confounding
                                factors that influence smoking
                                and prevalence. Such studies would expose a randomised group of children to nicotine
                                exposure and possible
                                addiction.

                                <br>
                                <br>
                                <b>I see the importance of Stirling as being the consistency of its results on appeal,
                                    salience and perceptions of
                                    harm, most notably that standardised packaging is less appealing than branded
                                    packaging</b>. This evidence is
                                direct and
                                not reliant on stated intentions. Evidence from other spheres shows a strong
                                non-conscious link between appeal and
                                subsequent behaviour regardless of stated intentions. I therefore conclude that, by
                                reducing its appeal,
                                standardised packaging would affect smoking behaviour.”
                            </p>

                            <p>Industry arguments</p>
                            <p><i>Plain packaging will lead to price reductions:</i></p>

                            <p class="p-states">“First, tobacco companies have argued that standardised packaging will
                                result in falling prices that
                                in turn will increase the consumption of tobacco. They argue that, in the long-run at
                                least, standardised packaging
                                will reduce brand loyalty, causing smokers to switch to cheaper brands and encouraging
                                price competition between
                                manufacturers. However, <b>early evidence from Australia does not show falling prices;
                                    rather price rises have
                                    continued over and above tax increases</b>. There is some evidence of trading down
                                towards cheaper brands, but
                                this
                                appears to be a continuation of an ongoing market trend. Were all this to change, the
                                Government can in any case
                                mitigate any price reduction by increasing tobacco taxes.”</p>

                            <p><i>Plain packaging will lead to price reductions:</i></p>

                            <p class="p-states">“Second, I am not convinced by the tobacco industry’s argument that
                                standardised packaging would
                                increase the illicit market, especially in counterfeit cigarettes. There is <b>no
                                    evidence that standardised
                                    packaging
                                    is easier to counterfeit, and indeed in Australia, hardly any counterfeit
                                    standardised packages have been found
                                    to
                                    date</b>. The tobacco industry has a history of attacking new tobacco control
                                measures on the basis that they
                                will boost
                                illicit sales, arguing that illicit suppliers benefit from not having to follow the same
                                restrictions.” </p>

                            <div class="section-secondary-title fc-ref-mat-3">4. The Hammond Review</div>
                            <h3 class="fc-ref-mat-4 sub-title">Background</h3>
                            <p>In March 2014, Professor David Hammond, an associate Professor of health behaviour and
                                health policy at the
                                University of Waterloo, Canada, published an evidence review on standardized packaging,
                                which had been commissioned
                                by the Irish Department of Health. </p>
                            <p>The report is available here:
                                <a href="http://health.gov.ie/blog/publications/standardised-packaging-d-hammond/">http://health.gov.ie/blog/publications/standardised-packaging-d-hammond/</a>
                            </p>

                            <p>It reviews the scientific evidence on standardized packaging and the extent to which
                                standardized packaging
                                regulations would help Ireland to achieve its tobacco control objectives.</p>

                            <p>Professor Hammond also included an the results of important research into the <b>evidence
                                    from millions of internal
                                    industry documents released through court disclosure</b>, which contribute to the
                                evidence base on tobacco
                                packaging and
                                the industry’s extensive use of packaging as a marketing tool. This part of his report
                                is dealt with in detail on
                                the <b>Tobacco Branding</b> page of the Tools and Resources.</p>

                            <h3 class="fc-ref-mat-4 sub-title">Methodology</h3>
                            <p class="p-states">“A total of 69 original empirical articles were reviewed as part of this
                                report, in addition to
                                evidence contained in corporate documents from the tobacco industry and the broader
                                literature on tobacco
                                advertising and marketing. The evidence on plain packaging is notable for its breadth
                                and diversity: research has
                                been conducted in 10 different countries using a range of methodologies, including
                                consumer perceptions,
                                eye-tracking technology, neuroimaging, measures of consumer demand, and behavioural
                                tasks, as well as evidence on
                                the impact of plain packaging in Australia. Public opinion articles, reviews and
                                commentaries were excluded from
                                this review.”</p>

                            <h3 class="fc-ref-mat-4 sub-title">Findings</h3>

                            <p>Professor Hammond summarizes the academic literature with respect to six primary
                                outcomes: health warnings,
                                perceptions of risk, consumer appeal, measures of consumer demand and smoking behavior,
                                post-implementation research
                                from Australia, and research on differences in plain packaging colors. The findings
                                are:</p>

                            <p>Health warnings</p>
                            <p class="p-states">“Overall, the evidence suggests that health warnings are more noticeable
                                on plain packs, associated
                                with greater recall of health messages, and may lead to greater cognitive processing,
                                particularly among youth
                                non-smokers. The evidence also indicates that the effect of package branding persists
                                even in the context of large
                                pictorial warnings, and that plain packaging and health warnings have complimentary, but
                                independent effects on
                                consumer perceptions.”</p>

                            <p>Perceptions of risk</p>
                            <p class="p-states">“Many consumers continue to hold false beliefs that some cigarette
                                brands are less harmful than
                                others, despite scientific evidence to the contrary. Pack design and colour promote
                                false beliefs about the relative
                                risks between brands. A variety of experimental studies indicate that plain packaging is
                                associated with fewer false
                                health beliefs.”</p>

                            <p>Consumer appeal</p>
                            <p class="p-states">“The evidence unequivocally demonstrates that plain packaging is
                                perceived as less attractive and
                                less appealing, particularly among youth and young adults, including smokers and
                                non-smokers. Plain packaging is
                                also associated with less positive brand imagery, including smoker traits, such as cool,
                                stylish, thin. The findings
                                suggest that plain packaging is less socially desirable and limits the ability of
                                packaging to target sub-groups of
                                youth and young adults.”</p>

                            <p>Measures of consumer demand and smoking behavior</p>
                            <p class="p-states">“Evidence from a range of methodologies indicates that plain packaging
                                reduces consumer demand.
                                Evidence from a limited number of naturalistic studies suggest that plain packaging may
                                promote smoking cessation
                                among established smokers, although additional studies are required to demonstrate this
                                effect. Findings from
                                clinical studies also indicates that branded tobacco packaging is a reliable cue for
                                smoking and can prompt urges to
                                smoke among former smokers, and that exposure to plain packages reduces urges and
                                motivation to smoke compared to
                                branded packages.”</p>

                            <p>Post-implementation: the impact of plain packaging regulations in Australia</p>
                            <p class="p-states">“Given the novelty of plain packaging regulations in Australia, there
                                are few studies to assess the
                                impact of plain packaging. To date, three published studies provide preliminary evidence
                                suggesting that plain
                                packaging has had a positive public health impact in Australia. Of the three studies,
                                objective data indicating a
                                significant increase in calls to the Quitline — an effective form of smoking
                                cessation149 — are most compelling. No
                                studies have examined the impact of plain packaging within the context of smoking
                                initiation.”</p>

                            <p>Plain pack color</p>
                            <p class="p-states">“Studies are consistent in demonstrating that darker, non-white colours
                                are perceived as
                                significantly less appealing and more effective. Therefore, while the primary objective
                                of standardizing colour
                                would be to have uniform appearance, to minimize the belief that some products are less
                                harmful than others, using a
                                darker colour may reduce the overall appeal of all packages.”</p>

                            <h3 class="fc-ref-mat-4 sub-title">Conclusions</h3>
                            <p>The report draws some strong conclusions, which are in line with the conclusions of the
                                Chantler Review:</p>

                            <p class="p-states">“Tobacco advertising and marketing are among the most important factors
                                in the rise of smoking in
                                the 20th century. Industry marketing campaigns have sought to communicate three
                                fundamental themes: 1) product
                                satisfaction; 2) reassurance about the health concerns; and 3) positive associations
                                between smoking and desirable
                                outcomes, such as independence, social status, sexual attraction and thinness. Tobacco
                                industry documents and
                                independent evidence indicates that packaging has played a fundamental role in executing
                                each of these themes, and
                                has grown in importance as other forms of advertising and marketing have been
                                prohibited.

                                <br>
                                <br>

                                “The scientific evidence on plain packaging includes more than 70 original empirical
                                articles from a wide variety of
                                research domains. Most of the research on plain packaging is experimental in nature and
                                has been conducted in
                                jurisdictions without plain packaging given that plain packaging regulations were only
                                implemented in December 2012
                                in Australia. The evidence is highly consistent across different research domain and
                                study designs, as well as
                                between experimental and more recent “post-implementation” studies conducted in
                                Australia.
                            </p>

                            <p>“Overall, the existing evidence on plain packaging supports four primary conclusions:</p>
                            <ol>
                                <li>Plain packaging will reduce smoking initiation among youth and young adults.</li>
                                <li>Plain packaging will promote smoking cessation among established smokers.</li>
                                <li>Plain packaging will support former smokers to remain abstinent.</li>
                                <li>Plain packaging will help to denormalize tobacco use”</li>
                            </ol>

                            <div class="section-secondary-title fc-ref-mat-3">5. The Cochrane Review</div>
                            <p><a href="http://www.cochrane.org/uk/about-us">Cochrane</a> is a non-profit,
                                non-governmental organization formed to
                                organize medical research findings to facilitate
                                evidence-based choices about health interventions. The group conducts systematic reviews
                                of health-care
                                interventions and publishes them in <a href="http://www.cochranelibrary.com/">The
                                    Cochrane Library</a>.</p>
                            <p>Cochrane <a
                                        href="http://onlinelibrary.wiley.com/doi/10.1002/14651858.CD011244.pub2/full">published
                                    a review in April
                                    2017</a> which looked at the peer-reviewed published evidence assessing the effect
                                of plain packaging on tobacco use, uptake, cessation, and reduction.</p>

                            <h3 class="fc-ref-mat-4 sub-title">Methodology</h3>
                            <p>The review searched nine databases for articles evaluating standardised packaging that
                                had been already reviewed by
                                academics and published before January 2016. We also checked references in those papers
                                to other studies and
                                contacted the authors where necessary. The research found 51 studies involving
                                approximately 800,000
                                participants.</p>

                            <h3 class="fc-ref-mat-4 sub-title">Primary Outcomes</h3>
                            <p>The primary outcome measured by the review was changes in tobacco use prevalence
                                including uptake, cessation and
                                reduction in overall consumption. </p>
                            <p>The review found only 5 studies that addressed these primary outcomes measurements. The
                                reason for this may be that
                                even in Australia, it is at an early stage of implementation to get reliable statistical
                                data on the impacts of
                                plain packaging on overall prevalence. </p>
                            <p>The only study that considered overall prevalence was the analysis by Professor Chipty
                                that is included in
                                Australia’s Post Implementation Review (see the pages on <b>Australia Post
                                    Implementation Evidence</b> in the Tools
                                and
                                Resources). That analysis of statistical data concluded that a drop of 0.55 percentage
                                points in smoking prevalence
                                was attributable to plain packaging. </p>
                            <p>3 studies on consumption in Australia and the UK found little change in smokers’
                                consumption levels.</p>
                            <p>A national study of adult smoker quit attempts showed an increase from 20% prior to the
                                introduction of plain
                                packaging, compared to 26.6% 1 year after implementation. This was backed up by the fact
                                that calls to quit lines
                                increased by 78%. </p>

                            <h3 class="fc-ref-mat-4 sub-title">Secondary Outcomes</h3>
                            <p>The review anticipated very few studies on the primary outcome at this stage of
                                implementation. The review therefore
                                also reviewed studies on secondary outcomes including:</p>
                            <p>behaviours such as stubbing out cigarettes early, covering the pack, and eye tracking in
                                experimental studies,
                                and</p>
                            <p>non-behavioural studies such as intentions of young people, pack appeal, recall of health
                                warnings and perceptions
                                of harm.</p>

                            <p>These studies found evidence of increased avoidance behaviours, increased attention to
                                health warnings and reduced
                                cravings. Studies also indicated that plain packs were less likely to motivate
                                initiation among youth.</p>

                            <h3 class="fc-ref-mat-4 sub-title">Conclusion</h3>
                            <p>The review concluded that the evidence suggests that standardised packaging may reduce
                                smoking prevalence. The review
                                noted the limitations on the currently available data on prevalence but concludes that a
                                reduction in smoking
                                behavior is supported by routinely collected data by the Australian government. Data on
                                the effects of standardized
                                packaging on non-behavioral outcomes (e.g. pack appeal and recall of health warnings)
                                are clearer and provide
                                plausible mechanisms for the observed decline in prevalence.</p>

                            <p>The review did not find any evidence suggesting standardized packaging may increase
                                tobacco use. <sup>19</sup></p>

                            <div class="section-secondary-title fc-ref-mat-3">Further research evidence</div>

                            <p>Further research into likely impacts of tobacco plain packaging has continued to be
                                undertaken around the world since
                                these evidence reviews were published. The following is not intended to be a
                                comprehensive review of this additional
                                evidence but provides examples and information about the continued research into the
                                likely impacts of plain
                                packaging of tobacco products. </p>

                            <ol>
                                <li>A systematic review of existing literature was undertaken in 2016 to consider the
                                    impact of plain packaging in
                                    low- and middle-income countries and in low-income settings in high-income
                                    countries. It concluded that plain
                                    packaging had less appeal than branded packaging in low- income settings.
                                    <sup>20</sup>
                                </li>
                                <li>A 2015 study undertook experimental research into the effects of plain packaging and
                                    graphic health warnings
                                    on adolescents in Spain, France, and the USA, and concluded that both policies
                                    impacted on cravings and evoked
                                    fear and thoughts of quitting. <sup>21</sup>
                                </li>
                                <li>A study in France considered young roll-your-own smokers’ response to using plain
                                    packaging in real-world
                                    settings and found them to be associated with less-positive product perceptions,
                                    negative feelings about
                                    smoking, and increased reported feelings about reducing consumption and quit
                                    attempts. <sup>22</sup>
                                </li>
                                <li>Two experiments in the UK found that branded packs primed a greater percentage of
                                    tobacco seeking behavior in
                                    current smokers. <sup>23</sup>
                                </li>
                                <li>A study in Thailand used a variety of methods withstudents to look at the impact of
                                    plain packaging on health
                                    warning salience on cigarette packs. <sup>24</sup>
                                </li>
                                <li>A 2016 study led to results demonstrating that plain packaging and health warnings
                                    work independently and in
                                    unison to influence smokers’ and non-smokers’ behavioral intentions. <sup>25</sup>
                                </li>
                                <li>A 2016 study considered the impact of cigarette packaging design, such as “slims”
                                    branding and warning
                                    labels, on perceptions of taste harm and interest among young females in Canada. The
                                    study concludes that plain
                                    packaging may decrease demand and reduce misleading perceptions in young females.
                                    <sup>26</sup>
                                </li>
                            </ol>

                            <p>In addition, there is significant research into the impacts of the policy after it was
                                implemented in Australia,
                                which is set out on the <b>AUSTRALIA’S POST-IMPLEMENTATION EVIDENCE</b> PAGE OF THE
                                TOOLS AND RESOURCES. </p>

                            <div class="section-secondary-title fc-ref-mat-3">4.1 Post-implementation research planned
                                in the UK and France
                            </div>

                            <p>Plain packaging has come into full effect in France and the UK in early 2017. As with
                                Australia, there are a number
                                of studies being undertaken to assess the impact the policy has
                                post-implementation. </p>

                            <p>For instance, Cancer Research UK has provided grants for a series of research studies
                                including a Youth Tobacco
                                Policy Survey and Adult Tobacco Policy Survey, which conducts in-home surveys across the
                                UK to assess harm ratings,
                                and appeal of packs. A retail audit that will review the cost of tobacco products
                                before, during and after the
                                introduction of plain packaging and the extent to which new brands have been introduced.
                                More information can be
                                obtained from Cancer Research UK.</p>

                            <p>In France, 4,000 adults (18–64 years old) and 2,000 young people (12–17 years old) will
                                be interviewed by telephone
                                before and after the introduction of plain packaging about their perception of smoking,
                                as part of a scientific
                                study undertaken by DePICT (Description des Perceptions, Images et Comportements liés au
                                Tabac), to better
                                understand the evolution of attitudes and behaviors related to smoking and the
                                introduction of neutral tobacco
                                packages. More information is available here: </p>

                            <a href="http://www.inserm.fr/actualites/rubriques/actualites-recherche/les-francais-et-le-tabac-lancement-d-une-enquete-inserm">http://www.inserm.fr/actualites/rubriques/actualites-recherche/les-francais-et-le-tabac-lancement-d-une-enquete-inserm</a>

                            <p>Government officials considering plain packaging should review the most recently
                                published research data from all
                                those countries that have already implemented the policy. Links to this data will be
                                available on the plain
                                packaging pages of the CTFK website as it is published. </p>

                            <div class="section-secondary-title fc-ref-mat-3">End Notes</div>
                            <p><sup>1</sup>Wakefield M, Germain D, Durkin S, Hammond D, Goldberg M, Borland R. Do larger
                                pictorial health warnings
                                diminish the need for plain packaging of cigarettes? Addiction, 2012; 107:1159–1167</p>
                            <p><sup>2</sup>White CM, Hammond D, Thrasher JF, Fong GT. The potential impact of plain
                                packaging of cigarette products
                                among Brazilian young women: an experimental study. BMC Public Health, 2012; 12:737–747
                            </p>
                            <p><sup>3</sup> Doxey J, Hammond D. Deadly in pink: the impact of cigarette packaging among
                                youngwomen. Tobacco Control,
                                2011; 20:353e-360</p>
                            <p><sup>4</sup> Hoek J, Wong J, Gendall P, Louviere J, Cong K. Effects of dissuasive
                                packaging on young adult smokers.
                                Tobacco Control, 2011; 20:183e-188.</p>
                            <p><sup>5</sup> Thrasher JF, Rousuc MC, Hammond MC, Navarro A, Corrigan JR. Estimating the
                                impact of pictorial health
                                warnings and “plain” cigarette packaging: evidence from experimental auctions among
                                adult smokers in the United
                                States. Health Policy, 2011; 102:41–48.</p>
                            <p><sup>6</sup> Borland R, Savvas S, Sharkie F, Moore K. The impact of structural packaging
                                design on young adult
                                smokers’ perceptions of tobacco products. Tobacco Control, 2013; 22:97–102</p>
                            <p><sup>7</sup> Gallopel-Morvan K, Moodie C, Hammond D, Eker F, Beguinot E, Martinet Y.
                                Consumer perceptions of
                                cigarette pack design in France: a comparison of regular, limited edition and plain
                                packaging. Tobacco Control,
                                2012; 21:502-506.</p>
                            <p><sup>8</sup> Ford A, MacKintosh AM, Moodie C, Richardson S, Hastings G. Cigarette pack
                                design and adolescent smoking
                                susceptibility: a cross-sectional survey. BMJ Open, 2013, 3:e003282.
                                doi:10.1136/bmjopen-2013- 003282.</p>
                            <p><sup>9</sup> Bansal-Travers M, Hammond D, Smith P, Cummings KM. The impact of cigarette
                                pack design, descriptors, and
                                warning labels on risk perception in the US. American Journal of Preventive Medicine,
                                2011; 40(6):674–682</p>
                            <p><sup>10</sup> Hoek J, Gendall P, Gifford H, Pirikahu G, McCool, Pene G et al. Tobacco
                                branding, plain packaging,
                                pictorial warnings, and symbolic consumption. Qualitative Health Research, 2012;
                                22(5):630-639</p>
                            <p><sup>11</sup> Ford A, Moodie C, MacKintosh AM, Hastings G. Adolescent perceptions of
                                cigarette appearance. European
                                Journal of Public Health, 2014, 24(3):464–468.</p>
                            <p><sup>12</sup> Wakefield M, Morley C, Horan JK, Cummings KM. The cigarette pack as image:
                                new evidence from tobacco
                                industry documents. Tobacco Control, 2002; 11(Supplement 1): Discoveries and disclosures
                                in the corporate documents,
                                March 2002, pp. i73-i80.</p>
                            <p><sup>13</sup> i) Al-Hamdani M. The effect of cigarette plain packaging on individuals’
                                health warning recall.
                                Healthcare Policy, 2013; 8(3):68-77.
                                ii) Borland R, Savvas S, Sharkie F, Moore K. The impact of structural packaging design
                                on adult smokers’ perceptions
                                of tobacco products. Tobacco Control, 2013; 22:97–102.
                                iii) Germain D, Wakefield M, Durkin S. Adolescents’ perceptions of cigarette brand
                                image: does plain packaging make
                                a difference? Journal of Adolescent Health, 2010; 46:385–392;
                            </p>
                            <p><sup>14</sup> Wakefield M, Germain D, Durkin S, Hammond D, Goldberg M, Borland R. Do
                                larger pictorial health warnings
                                diminish the need for plain packaging of cigarettes? Addiction, 2012; 107:1159–1167.</p>
                            <p><sup>15</sup> Bansal-Travers M, Hammond D, Smith P, Cummings KM. the impact of cigarette
                                pack design, descriptors,
                                and warning labels
                                on risk perception in the US. American Journal of Preventive Medicine, 2011; 40(6):674 –
                                682.
                            </p>
                            <p><sup>16</sup> Philip Morris, Identified HTI Test Of Marlboro Ultra Lights In A Blue Pack
                                Versus Marlboro Ultra Lights
                                In A Red Pack (Project No. 1256/1257), September 3, 1996, Bates no.
                                2047387079-2047387089, available at
                                <a href="https://industrydocuments.library.ucsf.edu/tobacco/docs/#id=zthl0019">https://industrydocuments.library.ucsf.edu/tobacco/docs/#id=zthl0019</a>
                                .</p>
                            <p><sup>17</sup> i) Wakefield M, Germain G, Durkin S, Hammond D, Goldberg M, Borland R. Do
                                larger pictorial health
                                warnings diminish the need for plain packaging of cigarettes? Addiction, 2012;
                                107:1159–1167.
                                ii) White CM, Hammond D, Thrasher JF, Fong GT. The potential impact of plain packaging
                                of cigarette products among
                                Brazilian young women: an experimental study. BMC Public Health 2012; 12:737–747.
                                iii) Doxey J, Hammond D. Deadly in pink: the impact of cigarette packaging among young
                                women. Tobacco Control, 2011,
                                20:353e-360.
                                iv)Gallopel-Morvan K, Moodie C, Hammond C, Eker F, Beguinot E, Martinet Y. Consumer
                                perceptions of cigarette pack
                                design in France: a comparison of regular, limited edition and plain packaging. Tobacco
                                Control, 2012; 21:502-506.
                                v) Hammond D, Dockrell M, Arnott D, Lee A, McNeill A. Cigarette pack design and
                                perceptions of risk among UK adults
                                and youth. European Journal of Public Health, 2009; 19(6):631–637.
                                vi) Bansal-Travers M, Hammond D, Smith P, Cummings KM. The impact of cigarette pack
                                design, descriptors, and warning
                                labels on risk perception in the US. American Journal of Preventive Medicine, 2011;
                                40(6):674–682;
                            </p>
                            <p><sup>18</sup> C. Moodie,, K. Angus, M. Stead, &I Bauld.Plain Tobacco Packaging Research:
                                An update.Stirling,
                                Scotland: Centre for Tobacco Control Research, Institute for Social marketing,
                                University of Stirling; 2013.</p>
                            <p><sup>19</sup> McNeill A, Gravely S, Hitchman SC, Bauld L, Hammond D, Hartmann-Boyce J.
                                Tobacco packaging design for
                                reducing tobacco use. Cochrane Database of Systematic Reviews 2017, Issue 4. Art. No.:
                                CD011244. DOI: 10.1002.
                                <a href="http://onlinelibrary.wiley.com/doi/10.1002/14651858.CD011244.pub2/full">http://onlinelibrary.wiley.com/doi/10.1002/14651858.CD011244.pub2/full</a>
                            </p>
                            <p><sup>20</sup> Nicole Hughes, Monika Arora, and Nathan Grills. Perceptions and impact of
                                plain packaging of tobacco
                                products in low and middle income countries, middle to upper income countries and
                                low-income settings in high-income
                                countries: a systematic review of the literature BMJ Open. 2016; 6(3): e010391.</p>
                            <p><sup>21</sup> Andrews, Netemeyer, Burton, Jeremy Kees. Effects of plain package branding
                                and graphic health warnings
                                on adolescent smokers in the USA, Spain and France. Tob Control 2016;25:e120-e126
                                doi:10.1136</p>
                            <p><sup>22</sup> Gallopel-Morvan, Moodie, Eker, Beguinot. Perceptions of plain packaging
                                among young adult roll-your-own
                                smokers in France: a naturalistic approach. Tob Control 2015;24:e39-e44 doi:10.1136</p>
                            <p><sup>23</sup> Hogarth, L., Maynard, O. M. and Munafò, M. R. (2015), Plain cigarette packs
                                do not exert Pavlovian to
                                instrumental transfer of control over tobacco-seeking. Addiction, 110: 174–182.
                                doi:10.1111/add.12756</p>
                            <p><sup>24</sup> Auemaneekul, Silpasuwan, Sirichotiratana, Satitvipawee, Sompopcharoen,
                                Viwatwongkasem, Sujirarat.
                                The Impact of Cigarette Plain Packaging on Health Warning Salience and Perceptions:
                                Implications for Public Health
                                Policy.Asia Pac J Public Health. 2015 Nov; <a
                                        href="http://journals.sagepub.com/doi/10.1177/101053951560208">http://journals.sagepub.com/doi/10.1177/101053951560208</a>
                            </p>
                            <p><sup>25</sup> Karine Gallopel-Morvan, Janet Hoek, Sophie Rieunier. Do plain packaging and
                                pictorial warnings affect
                                smokers' and non-smokers' behavioral intentions? Journal of Consumer Affairs, Wiley,
                                2017
                                http://onlinelibrary.wiley.com/doi/10.1111/joca.12145/full</p>
                            <p><sup>26</sup> Kathy Kotnowski, Geoffrey T. Fong, Karine Gallopel-Morvan, Towhidul Islam,
                                David Hammond. The Impact of
                                Cigarette Packaging Design Among Young Females in Canada: Findings From a Discrete
                                Choice Experiment.
                                Nicotine and Tobacco Research (2016) 18 (5): 1348-1356. DOI: <a
                                        href="https://doi.org/10.1093/ntr/ntv114">https://doi.org/10.1093/ntr/ntv114</a>
                            </p>
                        </div>
                    </div>
            </section>
            <?php
            break;

        // h
        case 'austalia-post-implementation-evidence':
            if ($var == 'og_desc') {
                $og_desc = 'Plain packaging in Australia has been a casebook example of effective tobacco control—a policy measure driven by evidence, carefully designed and implemented, and now rigorously assessed. Further, it is set within the context of wider Australian tobacco control, reinforcing the most basic lesson learned over the last half century: action has to be strategic and comprehensive. There are no silver bullets.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-3">Post-implementation evidence from
                            Australia
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-8 col-lg-offset-1 ref -g1">
                        <div>
                            <div class="section-secondary-title fc-ref-mat-3">Introduction</div>
                            <p class="p-states">“Plain packaging in Australia has been a casebook example of effective
                                tobacco control—a policy measure driven by evidence, carefully designed and implemented,
                                and now rigorously assessed. Further, it is set within the context of wider Australian
                                tobacco control, reinforcing the most basic lesson learned over the last half century:
                                action has to be strategic and comprehensive. There are no silver bullets”
                                <sup>1</sup></p>

                            <p>The information contained in this Reference Section gives just some examples of the
                                observational, research and
                                survey studies that have been conducted in Australia to assess the impact of plain
                                packaging there, together with
                                the statistical data on tobacco use.</p>

                            <p><b>A more comprehensive compilation of the evidence</b> can be found on Cancer Council
                                Victoria’s “Plain Facts”
                                website:
                                <a href="http://www.cancervic.org.au/plainfacts/">http://www.cancervic.org.au/plainfacts/</a>
                                which includes some
                                detailed fact sheets. </p>

                            <p>The research demonstrates that the policy is starting to have the anticipated impacts on
                                the intended mechanisms of
                                reducing tobacco appeal, increasing the effectiveness of health warnings and reducing
                                misperceptions about the harms
                                of tobacco products. It should nevertheless be recognized that it is a policy intended
                                to have impacts over time. It
                                was introduced at the same time as a number of other tobacco control measures and
                                isolating the specific influence
                                of plain packaging will also take time.</p>

                            <p>The tobacco industry has sought to highlight isolated anomalies in the statistical data
                                to argue that plain packaging
                                has not worked or is having a negative impact. These examples, set out below, have no
                                statistical significance and
                                should not detract from the vast majority of the evidence that all points to the policy
                                working as intended. The
                                tobacco industry has also commissioned reports that try to analyse the statistical data
                                to show that plain packaging
                                has <i>not increased the existing rate of decline</i> in smoking rates. These reports
                                have not been peer reviewed,
                                have
                                been
                                undermined by academics and criticized by Courts. (For more details on those reports see
                                the‘No reliable evidence’
                                section of the <b>Opposing Arguments (and how to counter them)</b> pages in the Tools
                                and Resources)</p>

                            <div id="item1" class="section-secondary-title fc-ref-mat-3">Research into attitudes and
                                behaviours
                            </div>

                            <p>The British Medical Journal of Tobacco Control <a
                                        href="http://tobaccocontrol.bmj.com/content/24/Suppl_2?utm_source=World%20Congress%20on%20Tobacco%20and%20Health&utm_medium=Email&utm_campaign=plain%20packaging">edition
                                    of April 2015</a> focused on the implementation and evaluation of
                                the Australian plain packaging policy and included eighteen research papers.</p>

                            <p>Further peer-reviewed research studies have been published since then. Combined these
                                studies show:</p>

                            <p><b>Reduced appeal of tobacco</b>:A number of studies with adult smokers point to plain
                                packaging fulfilling its core
                                aims of
                                reducing appeal, particularly among young adults, and increasing warning salience. <sup>2</sup>
                            </p>

                            <p>These research papers also suggest that plain packaging is severely restricting the
                                ability of the pack to
                                communicate and create appeal with adolescents and young people. For instance,
                                school-based surveys with students
                                aged 12–17 years old in 2011 and 2013 show that the removal of branding and uniformity
                                of pack appearance has
                                increased negative pack ratings and decreased positive ones. <sup>3</sup></p>

                            <p><b>Increased quit attempts</b>: In a cross-sectional tracking survey of cigarette
                                smokers, plain packaging was
                                associated
                                with increased thinking about quitting and quit attempts. In addition, dislike of the
                                pack, lower satisfaction from
                                cigarettes and attributing motivation to quit to the warnings predicted daily thoughts
                                of quitting. <sup>4</sup>
                            </p>

                            <p>Research has also found a significant increase in the number of calls to the smoking
                                cessation helpline, Quitline, in
                                NSW and the ACT. <sup>5</sup> The research showed a 78% increase in the number of calls
                                to the Quitline
                                associated with the
                                introduction of plain packaging. This research found the increase in calls was sustained
                                and not attributable to
                                anti-tobacco advertising activity, cigarette price increases, or any other identifiable
                                causes.</p>

                            <p><b>Increased impact of health warnings</b>: A number of studies using large national
                                survey samples have found that
                                more
                                adult smokers noticed graphic health warnings and this led to increased pack avoidance,
                                greater perceived harm, and
                                an increased understanding of cancer risks. <sup>6</sup></p>

                            <p>
                                <b>Reduced pack displays</b>: Studies of outdoor venues before and after implementation
                                have showed that smokers
                                were more likely to conceal their packs in outdoor venues after the introduction of
                                plain packaging. <sup>7</sup>
                            </p>

                            <p><b>Reduced misperceptions</b>: A recent study showed that following plain-packaging
                                implementation, there was a
                                significant reduction in perceptions that “some cigarette brands are more harmful than
                                others.” <sup>8</sup></p>

                            <p><b>Increase in positive attitudes to plain packs</b>: A recent study showed that the
                                positive response of young
                                people to plain packaging was greater than anticipated prior to its introduction, and
                                support for plain packaging
                                increased from pre-implementation to post-implementation among all
                                groups of youth. <sup>9</sup></p>

                            <p><b>Unintended consequences.</b> The research has also examined whether or not plain
                                packaging had any of the
                                unintended
                                consequences that the tobacco industry alleged would occur:</p>

                            <p><b>Tobacco prices continue to rise in all sectors</b>: Studies showed that there was no
                                evidence that plain packaging
                                led
                                to lower prices for tobacco. A review of retail magazines, for instance, showed that
                                following the introduction of
                                plain packaging, average inflation-adjusted recommended retail prices actually increased
                                for cigarettes in all price
                                segments (value, mainstream, and premium). <sup>10</sup></p>

                            <p><b>No increase in illicit tobacco</b>: The evidence clearly showed that the consumption
                                of illicit “cheap white”
                                cigarettes has remained consistently small or even declined after implementation of
                                plain packaging. <sup>11</sup>
                                And the
                                total
                                amount of tobacco intercepted by Border Service in 2014–15 was considerably lower than
                                in recent years.
                                <sup>12</sup></p>

                            <p>The tobacco companies have argued that use of illicit tobacco increased <sup>13</sup> by
                                relying on a report they
                                commissioned
                                from
                                KPMG. <sup>14</sup> However, those reports have been heavily criticized, and KPMG has
                                stated that its report<i>“has
                                    been
                                    somewhat
                                    misrepresented by others, without our consent, to suggest it supports the contention
                                    that plain paper packaging
                                    could lead of itself to an increase in tobacco smuggling.” <sup>15</sup></i>Litter
                                surveys have found no
                                evidence of any counterfeit plain packs to date. </p>

                            <p><b>No increase in retail transaction time</b>: Again, in contrast to the claims made by
                                the tobacco companies that
                                plain
                                packs would increase the time that retailers took to find packs, real-life observational
                                studies have showed that
                                average transactions times declined for plain packs after implementation <sup>16</sup>
                                possibly because packs were
                                now stored
                                alphabetically. </p>

                            <div class="section-secondary-title fc-ref-mat-3">Statistical data: smoking prevalence and
                                tobacco consumption rates
                            </div>

                            <p>Official statistics on smoking rates and tobacco consumption in Australia are published
                                on the Department of Health’s
                                website:</p>
                            <a href="http://www.health.gov.au/internet/main/publishing.nsf/content/tobacco-kff">http://www.health.gov.au/internet/main/publishing.nsf/content/tobacco-kff</a>
                            <p>The key statistics on smoking rates and tobacco consumption since implementation of plain
                                packaging are:</p>

                            <div class="section-secondary-title fc-ref-mat-3">Smoking prevalence rates decline:
                            </div>

                            <p>Australian Institute of Health and Welfare (AIHW) has published the key findings of the
                                2013 National Drug Strategy
                                Household Survey. </p>

                            <ol>
                                <li><b>There has been a significant decrease in daily smokers aged 14 years or older</b>
                                    in Australia, falling from
                                    16.6%
                                    in 2007, 15.1% in 2010, to 12.8% in 2013.
                                </li>
                                <li>
                                    <b>Young people are delaying commencing smoking.</b> The age at which 14 to 24 year
                                    olds smoked their first full
                                    cigarette increased from 15.4 years of age in 2010 to 15.9 years of age in 2013.
                                </li>
                                <li>
                                    <b>The proportion of 18 to 24 year olds who have never smoked increased
                                        significantly</b> between 2010 and 2013, from
                                    72% to 77% respectively.
                                </li>
                                <li>
                                    <b>Use of unbranded illicit tobacco declined</b>. 3.6% of smokers reported using
                                    unbranded tobacco (half the time or
                                    more) in 2013, declining from 4.9% in 2010.
                                </li>
                            </ol>

                            <img class="img-responsive center-block" width="450px"
                                 src="<?php echo $base_url; ?>img/evidence/australia-1.jpg">
                            <p class="small text-center">Percentage of Australians 14 years and over reporting smoking
                                daily, 2004 to 2013
                                Source: National Drug Strategy Household Survey
                            </p>

                            <p><b>The drop in rates between 2010 and 2013 is more than twice as large as the average
                                    drop between surveys since
                                    1991</b>.The industry tries to argue that the decline in rates is just part of an
                                existing trend. However, the
                                statistics show a marked increase in the rate of decline. <sup>17</sup></p>
                            <p>
                                <b>Statistically insignificant anomalies</b>. The figures for 12–17 year olds in the
                                National Drug Strategy
                                Household
                                Survey
                                was 0.9 percentage points higher in 2013 than in 2010. However, the sample size was very
                                small and had a standard
                                error of 25–50%, meaning there was no statistically significant change shown.
                            </p>

                            <p>
                                <b>In 2011, 6.7% of children under 17 reported smoking in the last week. In 2014 this
                                    had dropped to 5.1%</b>. This
                                data
                                came from the Australian Secondary Students’ Alcohol and Drug (ASSAD) survey, which used
                                a far larger survey that
                                the NDSHS and has just over 23,000 secondary students aged between 12 and 17 years
                                participating in a national
                                survey undertaken every three years since 1984. <sup>18</sup> This is the better data on
                                adolescent smoking rates.
                            </p>

                            <p>
                                <b>A drop in adult smoking rates from 16.1% in 2011–12 to 14.5% in 2014–15</b> was also
                                shown in Australia’s 2014-15
                                National Health Survey. <sup>19</sup>
                            </p>

                            <div class="section-secondary-title fc-ref-mat-3">Tobacco consumption declines:
                            </div>

                            <p>
                                <b>Total consumption of tobacco and cigarettes in the March quarter 2014 was the lowest
                                    ever recorded</b>. Figures
                                from the Australian Bureau of Statistics (ABS) show the total consumption of tobacco and
                                cigarettes as measured by
                                estimated expenditure on tobacco products:

                            <ul>
                                <li>$5.135 billion in September 1959</li>
                                <li>$3.720 billion in December 2012</li>
                                <li>$3.260 billion in March 2014 <sup>20</sup></li>
                            </ul>
                            </p>

                            <p><b>Tobacco excise and customs clearances fell by 3.4% in 2013 relative to 2012 and fell a
                                    further 7.9% in 2014</b>
                                . Tobacco
                                clearances provide a reliable indicator of overall tobacco volumes, and the treasury has
                                advised that they have
                                fallen a total of 11.0% since 2012, when tobacco plain packaging was introduced.
                                <sup>21</sup></p>

                            <p>Tobacco company reports to shareholders indicate a decline in sales.In its annual report
                                to shareholders, British
                                American Tobacco (which has the largest market share of the three major companies
                                operating in Australia) stated
                                that volumes were lower for the 2013 reporting year. <sup>22</sup> An industry-funded
                                report concerning estimates
                                of use of
                                illicit tobacco <sup>23</sup> also incidentally included an estimate of consumption of
                                tax-paid tobacco (based on
                                estimated
                                weight
                                of tobacco sold) at 0.5% lower in 2013 than in 2012.

                                <br/>

                                In April 2013, the CEO of Imperial Tobacco noted a decline in tobacco product sales
                                during the first half of the
                                company’s October 1 to September 30 reporting cycle (from October 1, 2012, to March 31,
                                2013) <sup>24</sup>:
                            </p>

                            <p class="p-states">
                                “As I'm looking at Asia Pacific, I should also mention Australia, we've had the first
                                six months of the plain pack
                                environment in Australia. We've seen the market decline roughly 2% to 3%, so maybe not
                                as bad as we might have
                                anticipated.”
                            </p>

                            <div class="section-secondary-title fc-ref-mat-3">The Post-Implementation Review (PIR)
                            </div>

                            <p>The Australian government published its Post-Implementation Review (PIR) in February
                                2016:</p>

                            <a href="https://ris.govspace.gov.au/2016/02/26/tobacco-plain-packaging/">https://ris.govspace.gov.au/2016/02/26/tobacco-plain-packaging/</a>

                            <p>The review concludes that <b><i>“the measure has begun to achieve its public health
                                        objectives of reducing smoking
                                        and
                                        exposure to tobacco smoke in Australia and it is expected to continue to do so
                                        into the future.”</i></b></p>

                            <p>In line with Australian government guidance, the PIR examines the post-implementation
                                evidence, data, and analysis of
                                the broader costs and benefits to industry, government and the wider community, to
                                evaluate the efficiency and
                                effectiveness of the tobacco plain packaging measure. Much of this evidence and data is
                                described in the first two
                                parts of this Section. The PIR provides the Australian Government’s analysis of that
                                evidence.</p>

                            <p><b>The summary of the PIR states that:</b></p>

                            <p class="p-states"><b>“While the full effect of the tobacco plain packaging measure is
                                    expected to be realised over
                                    time,
                                    the evidence examined in this PIR suggests that the measure is achieving its aims.
                                    This evidence shows that
                                    tobacco
                                    plain packaging is having a positive impact on its specific mechanisms as envisaged
                                    in the TPP Act. All of the
                                    major
                                    data sets examined also showed on-going drops in national smoking prevalence in
                                    Australia.</b> These decreases
                                cannot be
                                entirely attributed to plain packaging given the range of tobacco control measures in
                                place in Australia, including
                                media campaigns and Australia’s tobacco excise regime.”</p>

                            <p>
                                The PIR provides an analysis of peer-reviewed research studies into smoking attitudes
                                and behaviors before and after
                                the introduction of the policy. These show that it is having a positive impact on the
                                three specific mechanisms of
                                reducing the appeal of tobacco products, increasing the effectiveness of health
                                warnings, and reducing the ability
                                of the pack to mislead:
                            </p>

                            <p class="p-states">
                                “Taken as a whole, the studies . . . provide early evidence that the tobacco plain
                                packaging measure is having a
                                positive impact on the three specific mechanisms of reducing the appeal of tobacco
                                products, reducing the potential
                                for tobacco packaging to mislead consumers, and enhancing the effectiveness of graphic
                                health warnings. Studies also
                                provide early evidence that the measure is resulting in positive changes to smoking
                                behaviours. The body of evidence
                                is diverse, including analyses conducted on a range of different groups (including
                                adolescents, adults, cigarette
                                smokers and cigar/cigarillo smokers) and using different datasets (including the
                                National Tracking Survey, the NSW
                                Tracking Survey, the ASSAD data, the ITC Project data and bespoke surveys).”
                            </p>

                            <p>The report also reviews the available data and statistical analysis of smoking prevalence
                                and tobacco consumption
                                rates: </p>

                            <p class="p-states">“All the major data sets show continuing declines in smoking prevalence
                                with substantial declines in
                                the period following the introduction of tobacco plain packaging. Analysis of the Roy
                                Morgan Research data
                                undertaken for the Department (described below) concludes that the 2012 packaging
                                changes have already contributed
                                to the overall decline in smoking prevalence and that over time these impacts will
                                increase.”</p>

                            <p>The use of statistical data can be complex, and the tobacco industry has produced reports
                                that seek to undermine the
                                argument that large reductions in the smoking rates can be attributable to plain
                                packaging of reduced smoking. Thus,
                                for instance, the JTI response to the PIR has been to say that,“The report fails to
                                properly take into account that
                                smoking rates had been steadily declining for years, long before the introduction of
                                this branding ban, and that the
                                measure hasn’t accelerated this decline.” <sup>25</sup></p>

                            <p>Most of the evidence and studies that the PIR refers to and considers was already
                                publicly available. However, the
                                PIR was accompanied by a new detailed data analysis by Dr.TasneemChipty of Analysis
                                Group, Inc., who undertook a
                                regression analysis. This used Roy Morgan Single Source Survey Data to provide an
                                average prevalence rate for the 34
                                months prior to implementation of plain packaging and the 34 months following
                                implementation. Those figures were
                                19.4% and 17.2%, respectively — a 2.2% percentage point drop. </p>

                            <p>Dr Chipty’s analysis estimated that the packaging changes resulted in a <b>“statistically
                                    significant decline in
                                    smoking
                                    prevalence of 0.55 percentage points over the post implementation period, relative
                                    to what the prevalence would
                                    have
                                    been without the packaging changes. This decline accounts for approximately one
                                    quarter of the total decline in
                                    average prevalence rates observed . . .”</b></p>

                            <p>Trying to use statistical analysis of survey data to separate out the effects of
                                different tobacco-control measures
                                is difficult, but it is this detailed report by Dr.Chipty that undermines the tobacco
                                industry claims of no
                                accelerated decline. </p>

                            <p>Dr.Chipty’s analysis was set out in figurative form in the following chart:</p>

                            <img class="img-responsive center-block" width="450px"
                                 src="<?php echo $base_url; ?>img/evidence/australia-2.jpg">

                            <p>This chart plots the monthly overall smoking prevalence rates from the Roy Morgan data,
                                with two separate trend lines
                                for before and after the introduction of the 2012 packaging changes. The chart shows the
                                overall decline in smoking
                                prevalence in Australia over the last fifteen years and provides some indication that
                                the “decline in prevalence has
                                accelerated in recent years.” As regards the effects on the illicit market, the PIR
                                considers the post-
                                implementation data and peer-reviewed studies that found no change in smokers’ reported
                                use of unbranded illicit
                                tobacco, no evidence of increases in use of contraband cigarettes, low levels of use of
                                cigarettes likely to be
                                contraband, and no increase in purchases of tobacco from informal sellers.</p>

                            <p>The PIR concludes that:</p>

                            <p class="p-states">“the measure has begun to achieve its public health objectives of
                                reducing smoking and exposure to
                                tobacco smoke in Australia and it is expected to continue to do so into the future</p>

                            <div class="section-secondary-title fc-ref-mat-3">End Notes
                            </div>

                            <p><sup>1</sup>Gerard B Hastings and Crawford Moodie Death of a salesmanTob Control. 2015
                                Apr; 24(Suppl 2)</p>
                            <p><sup>2</sup> i) V. White, T. Williams, A. Faulkner, and M. Wakefield. “Do larger graphic
                                health warnings on
                                standardised cigarette packs increase adolescents’cognitive processing of consumer
                                health information and beliefs
                                about smoking-related harms?” Tobacco Control, 2015; 24:ii50-ii57. Available from:
                                <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii50.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii50.full</a>.
                                ii) M. Wakefield, K. Coomber, M. Zacher, S. Durkin, E. Brennan, et al. “Australian adult
                                smokers’ responses to plain
                                packaging with larger graphic health warnings oneyear after implementation: Results from
                                a national cross-sectional
                                tracking survey.” Tobacco Control, 2015; 24:ii17-ii25. Available
                                from:<a href="http://www.tobaccocontrol.bmj.com/content/24/Suppl_2/ii17.full">www.tobaccocontrol.bmj.com/content/24/Suppl_2/ii17.full</a>.
                            </p>

                            <p><sup>3</sup> i) V. White, T. Williams, and M. Wakefield. “Has the introduction of plain
                                packaging with larger graphic
                                health warnings changed adolescents’ perceptions of cigarette packs and brands?” Tobacco
                                Control, 2015;
                                24:ii42-ii49. Available from: <a
                                        href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii42.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii42.full</a>.
                                ii) S. Dunlop, D. Perez, A. Dessaix, and D. Currow. “Australia’s plain tobacco packs:
                                Anticipated and actual
                                responses among adolescents and young adults 2010–2013.” Tobacco Control, 2016.
                                Available from:
                                <a href="http://tobaccocontrol.bmj.com/content/early/2016/11/15/tobaccocontrol-2016-053166.abstract?papetoc">http://tobaccocontrol.bmj.com/content/early/2016/11/15/tobaccocontrol-2016-053166.abstract?papetoc</a>.
                            </p>

                            <p><sup>4</sup> S. Durkin, E. Brennan, K. Coomber, et al. “Short-term changes in
                                quitting-related cognitions and
                                behaviours after the implementation of plain packaging with larger health warnings:
                                Findings from a national cohort
                                study with Australian adult smokers.” Tobacco Control 2015;24:ii26–32.</p>

                            <p><sup>5</sup> J. M. Young, C. Currow, and S. Dunlop. “The association between tobacco
                                plain packaging and Quitline
                                calls.” Med J Aust. 2014;200(6):314–315. Available from: <a
                                        href="https://www.ncbi.nlm.nih.gov/pubmed/24702081">https://www.ncbi.nlm.nih.gov/pubmed/24702081</a>.
                            </p>

                            <p><sup>6</sup> i) E. Brennan, S. Durkin, K. Coomber, M. Zacher, M. Scollo, et al. “Are
                                quitting-related cognitions and
                                behaviours predicted by proximal responses to plain packaging with larger health
                                warnings? Findings from a national
                                cohort study with Australian adult smokers.” Tobacco Control, 2015; 24:ii33-ii41.
                                Available
                                from:<a href="http://www.tobaccocontrol.bmj.com/content/24/Suppl_2/ii33.full">www.tobaccocontrol.bmj.com/content/24/Suppl_2/ii33.full</a>.
                                ii) V.White, T. Williams, A. Faulkner, and M. Wakefield.“Do larger graphic health
                                warnings on standardised cigarette
                                packs increase adolescents’cognitive processing of consumer health information and
                                beliefs about smoking-related
                                harms?” Tobacco Control, 2015; 24:ii50-ii57. Available from:<a
                                        href="http://www.tobaccocontrol.bmj.com/content/24/Suppl_2/ii50.full">www.tobaccocontrol.bmj.com/content/24/Suppl_2/ii50.full</a>.
                            </p>

                            <p><sup>7</sup> i) M. Zacher, M. Bayly, E. Brennan, et al. “Personal tobacco pack display
                                before and after the
                                introduction of plain packaging with larger pictorial health warnings in Australia: An
                                observational study of
                                outdoor cafe strips.”Addiction. 2014;109(4):653–662. Available from:<a
                                        href="https://www.ncbi.nlm.nih.gov/pubmed/24428427">https://www.ncbi.nlm.nih.gov/pubmed/24428427</a>.
                                ii) M.Wakefield, M. Zacher, M. Bayly, E. Brennan, J. Dono, C. Miller, S. J. Durkin, and
                                M. Scollo.“The silent
                                salesman: An observational study of personal tobacco pack display at outdoor café strips
                                in Australia.” Tobacco
                                Control 2014. pp. 339–344. Available from <a
                                        href="http://tobaccocontrol.bmj.com/content/23/4/339.abstract">http://tobaccocontrol.bmj.com/content/23/4/339.abstract</a>.
                            </p>

                            <p><sup>8</sup> R. Maddox et al. “Plain packaging implementation: perceptions of risk and
                                prestige of cigarette brands
                                among Aboriginal and Torres Strait Islander people.” 29 December 29, 2015 DOI:
                                10.1111/1753-6405.12489.</p>

                            <p><sup>9</sup> S. Dunlop, D. Perez, A. Dessaix, and D. Currow. “Australia’s plain tobacco
                                packs: Anticipated and actual
                                responses among adolescents and young adults, 2010–2013.” Tobacco Control doi:10.1136.
                                Available from:
                                <a href="http://tobaccocontrol.bmj.com/content/early/2016/12/11/tobaccocontrol-2016-053166.abstract?sid=38c19596-f457-4476-aeef-4b86e907b2d2">http://tobaccocontrol.bmj.com/content/early/2016/12/11/tobaccocontrol-2016-053166.abstract?sid=38c19596-f457-4476-aeef-4b86e907b2d2</a>.
                            </p>

                            <p><sup>10</sup> M.Scollo, M.Bayly, and M. Wakefield. “The advertised price of cigarette
                                packs in retail outlets across
                                Australia before and after the implementation of plain packaging: a repeated measures
                                observational study.” Tobacco
                                Control 2015;24:ii82-ii89 doi:10.1136. Available
                                from:<a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii82.abstract?sid=4499bd73-4881-4207-99b8-55dfbba4ecb6">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii82.abstract?sid=4499bd73-4881-4207-99b8-55dfbba4ecb6</a>.
                            </p>
                            <p><sup>11</sup> M. Scollo, M. Zacher, M. Coomber, and M. Wakefield. “Use of illicit tobacco
                                following introduction of
                                standardised packaging of tobacco products in Australia: Results from a national
                                cross-sectional survey.” Tobacco
                                Control, 2015; 24:ii76-ii81. Available from: <a
                                        href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii76.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii76.full</a>.
                                See also a comprehensive analysis by Cancer Council Victoria available from:
                                <a href="http://www.cancervic.org.au/downloads/plainfacts/Facts_sheets/Facts_Sheet_no_3_Illicit_tobacco31May2016.pdf">http://www.cancervic.org.au/downloads/plainfacts/Facts_sheets/Facts_Sheet_no_3_Illicit_tobacco31May2016.pdf</a>.
                            </p>
                            <p><sup>12</sup> Australian Customs and Border Protection Service. Annual Report 2014–15.
                                Canberra:
                                ACBPS, 2014. Available from: <a
                                        href="http://www.border.gov.au/about/reportspublications/reports/annual">http://www.border.gov.au/about/reportspublications/reports/annual</a>.
                            </p>
                            <p><sup>13</sup> Philip Morris International. 2013 KPMG report: Black market in Australia
                                reaches record highs. PMI,
                                2014. Available from: <a
                                        href="http://www.pmi.com/eng/media_center/media_kit/Pages/2013_kpmg_australia.aspx">http://www.pmi.com/eng/media_center/media_kit/Pages/2013_kpmg_australia.aspx</a>.
                            </p>
                            <p><sup>14</sup> KPMG LLP. Illicit tobacco in Australia: 2015 full year report available
                                from:
                                <a href="https://home.kpmg.com/content/dam/kpmg/pdf/2016/04/australia-illict-tobacco-2015.pdf">https://home.kpmg.com/content/dam/kpmg/pdf/2016/04/australia-illict-tobacco-2015.pdf</a>.
                            </p>
                            <p><sup>15</sup> J. Doward. “How Big tobacco lost its final fight for hearts, lungs and
                                minds. The Guardian, May 22,
                                2016. Available from: <a
                                        href="http://www.theguardian.com/society/2016/may/22/big-tobacco-final-fight-cigarette-branding-uk">http://www.theguardian.com/society/2016/may/22/big-tobacco-final-fight-cigarette-branding-uk</a>
                            </p>
                            <p><sup>16</sup> i) O. Carter, M. Welch, B. Mills, T. Phan, and P. Chang. “Plain packaging
                                for cigarettes improves
                                retail transaction times.”In British Medical Journal. 2013;346:f1063.
                                ii) M. Bayly, M. Scollo, and M. Wakefield. “No lasting effects of plain packaging on
                                cigarette pack retrieval time
                                in small Australian retail outlets.” Tobacco Control. 2015;24(e1):e108–e109.
                            </p>
                            <p><sup>17</sup> National Drug Strategy Household Survey; AIHW 2014. Available
                                from:<a href="http://www.aihw.gov.au/alcohol-and-other-drugs/ndshs/2013/data-and-references/">http://www.aihw.gov.au/alcohol-and-other-drugs/ndshs/2013/data-and-references/</a>.
                            </p>
                            <p><sup>18</sup> See
                                <a href="https://www.cancervic.org.au/about/media-releases/2015-media-releases/november-2015/tobacco-use-secondary-school-students.html">https://www.cancervic.org.au/about/media-releases/2015-media-releases/november-2015/tobacco-use-secondary-school-students.html</a>.
                            </p>
                            <p><sup>19</sup> See <a href="http://www.abs.gov.au/ausstats/abs@.nsf/mf/4364.0.55.001">http://www.abs.gov.au/ausstats/abs@.nsf/mf/4364.0.55.001</a>.
                            </p>
                            <p><sup>20</sup> 5206.0 Australian National Accounts: National Income, Expenditure and
                                Product, Dec 2015 Available at:
                                Australian National Accounts: National Income, Expenditure and Product</p>

                            <p><sup>21</sup> See <a
                                        href="http://www.health.gov.au/internet/main/publishing.nsf/content/tobacco-kff">http://www.health.gov.au/internet/main/publishing.nsf/content/tobacco-kff</a>.
                            </p>
                            <p><sup>22</sup> British American Tobacco. Annual report 2013. London 2014. Available from:
                                <a href="http://www.bat.com/ar/2013/assets/pdfs/BAT_AR2013.pdf">www.bat.com/ar/2013/assets/pdfs/BAT_AR2013.pdf</a>
                            </p>
                            <p><sup>23</sup> KPMG LLP. Illicit tobacco in Australia: 2013 full-year report. Sydney 2014.
                            </p>
                            <p><sup>24</sup> Transcript of Imperial Tobacco half-year 2013 results; Interview with
                                Alison Cooper, CEO, and Bob
                                Dyrbus, FD. Available from:
                                <a href="http://video.merchantcantos.com/media/202678/imperial_tobacco_half_year_results_transcript.pdf">http://video.merchantcantos.com/media/202678/imperial_tobacco_half_year_results_transcript.pdf</a>.
                            </p>
                            <p><sup>25</sup> See <a
                                        href="http://www.jti.com/files/8614/5650/6649/Press_Release_Post-PIR_FINAL_26-02-2016.pdf">http://www.jti.com/files/8614/5650/6649/Press_Release_Post-PIR_FINAL_26-02-2016.pdf</a>.
                            </p>
                            <p><sup>26</sup> An economic and business consulting firm with particular expertise and
                                experience in econometric
                                analysis.</p>
                            <p><sup>27</sup> Roy Morgan Research conducts ongoing, nationally representative, monthly
                                surveys on a range of topics,
                                including smoking, and collects data about broader socio-demographic variables (such as
                                financial position and
                                marital status), which enable analysis of the smoking population in Australia.</p>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            break;

        // i
        case 'tobacco-product-branding':
            if ($var == 'og_desc') {
                $og_desc = 'Packaging is used for marketing and advertising. If advertising and promoting tobacco is banned in all other areas, it is simply common sense to ban it on tobacco packaging as well.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r" id="Ref-I">
                    <div class="col-lg-8 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-8 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-3">Branding on tobacco packaging and
                            its impacts on smoking behaviour
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <!-- 1 -->
                        <div class="sidebar-wrapper header-sidebar col-xs-12 sidebar-1">
                            <ul class="sidebar-nav">
                                <div class="sidebar-nav-header">LINKED<br>TOOLS AND RESOURCES</div>
                                <li>
                                    <a href="http://localhost/projects/plainpackaging/resources/legal-issues"><img
                                                src="http://localhost/projects/plainpackaging/img/icons/linked-tools-and-resources/legal-issues.PNG"
                                                style="padding:0 10px;"> Legal Issues</a>
                                </li>
                                <li>
                                    <a href="http://localhost/projects/plainpackaging/resources/policy-briefs"><img
                                                src="http://localhost/projects/plainpackaging/img/icons/linked-tools-and-resources/policy-brief-is-it-lawful.PNG"
                                                style="padding:0 5px;">Policy Brief: Is it Lawful?</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="content-desc-cont col-lg-8 col-lg-offset-1 ref -g1">
                        <div>
                            <div class="section-secondary-title fc-ref-mat-3">Introduction</div>
                            <p>Packaging is used for marketing and advertising of most consumer products, including
                                tobacco. If tobacco advertising
                                and promotion tobacco are banned in all other areas, it is simply common sense to ban
                                them on the packaging of
                                tobacco products as well. </p>
                            <p>The tobacco industry claims not to target children or non-smokers with their advertising
                                and promotion. This includes
                                with the use of branding on packaging. In fact, the tobacco companies also claim that
                                packaging has no role in
                                advertising and promotion at all and that it has no impact on overall smoking rates.</p>
                            <p>This public position of the tobacco companies is contradicted by general marketing theory
                                about the role of packaging
                                as a medium for advertising and promotion. It has been rejected by courts around the
                                world examining the issue. It
                                is also contradicted by the internal industry documents that have been disclosed through
                                litigation.</p>
                            <p>These pages provides details about marketing theory, evidence about branding on tobacco
                                packaging and evidence from
                                historical internal industry documentation that provides fundamental support for the
                                need for plain packaging of
                                tobacco products. </p>
                            <p>The tobacco industries’ position is that branding on packaging has no impact on smoking
                                initiation. The companies’
                                views are set out in detail on the <b>Opposing Arguments (and how to counter them)</b>
                                page of the Tools and
                                Resources.
                                Those pages draw on tobacco company submissions to government consultations and their
                                court pleadings in legal
                                challenges to plain packaging in the UK. The pages also contains the <u>counter
                                    arguments</u> to the tobacco
                                industry
                                position.</p>

                            <div class="section-secondary-title fc-ref-mat-3">Marketing theory and the role of
                                packaging
                            </div>
                            <h3 class="fc-ref-mat-4 sub-title">Tobacco packaging has a number of functions:</h3>
                            <p>In addition to containing and protecting a product, packaging assists consumers in
                                identifying brands and
                                distinguishing between competing brands; encourages consumers to switch brands; launches
                                new brands; and enables
                                tobacco manufacturers to build and maintain brand loyalty and command a premium price
                                for its products.
                                <sup>1</sup></p>

                            <p><b>Japan Tobacco International</b> (JTI) in its response to the 2012 <i>Consultation on
                                    Standardised Packaging of
                                    Tobacco</i> in
                                the UK, said:</p>

                            <p class="indented">“In the UK’s system of undistorted competition, businesses must be in a
                                position to communicate to
                                their
                                customers.
                                The UK tobacco market is highly competitive. JTI invests and innovates in its packaging
                                design and quality in order
                                to compete with other products available to existing adult smokers. JTI and other
                                companies, both within the tobacco
                                sector and also in the context of other FMCGs, <sup>2</sup> use product packaging in a
                                myriad of ways, and this
                                scope for
                                creativity motivates efforts to differentiate the product from others.”[emphasis added]
                            </p>

                            <p>The tobacco industry states that the packaging enables adults who want a particular
                                product (i.e., tobacco) to make
                                an informed decision about which brand to buy. </p>

                            <h3 class="fc-ref-mat-4 sub-title">The advertising function of packaging: </h3>

                            <p>In addition to the practical functions, research indicates that packaging is an important
                                component of overall
                                tobacco-marketing strategy. <sup>3</sup> Tobacco packaging has multiple functions for
                                tobacco companies beyond
                                that of brand
                                identification, navigation, and selection. <b>Tobacco packaging is used to promote the
                                    product using the same
                                    strategies employed by manufacturers of other consumer goods</b>. </p>

                            <h3 class="fc-ref-mat-4 sub-title">The importance of packaging as part of the overall
                                promotional mix is recognized in
                                marketing literature: </h3>
                            <p>Many of the standard marketing textbooks explain the importance of packaging as a key
                                marketing tool.</p>
                            <p>For example, in Marketing Management, Kotler and Keller argue that the packaging is the
                                buyer’s first encounter with
                                the product and that good packaging draws the consumer in and encourages product choice.
                                In effect, packaging can
                                act as “five-second commercials” and is used to “convey persuasive information.” They
                                also state that packaging
                                updates and redesigns can have an immediate impact on sales. <sup>4</sup></p>

                            <p>Kotler and Keller highlight the importance of color on packaging and the associations and
                                meanings that different
                                colors generate in different market segments. They reproduce the “Color Wheel of
                                Branding and Packaging,” which sets
                                out for instance, that “Red is a powerful color, symbolizing energy, passion or even
                                danger” and “Green connotes
                                cleanliness, freshness and renewal” while “White . . . connotes purity and cleanliness.”
                                <sup>5</sup></p>

                            <p>In the textbook Strategic Brand Management Keller writes:</p>

                            <p class="indented">“Structural packaging innovations can create a point-of-difference that
                                permits a higher margin. New
                                packages can also expand a market and capture new market segments. Packaging changes can
                                have immediate impact on
                                customer shopping behavior and sales. . . ” <sup>6</sup></p>

                            <p>It is noteworthy that Professor Keller was used as an expert by PMI in its legal
                                challenge to the UK plain packaging
                                regulations. His evidence was largely unchallenged by the UK government, and the Judge
                                in that case found that
                                elements of his report actually supported the case for plain packaging. <sup>7</sup></p>

                            <p>Palmer’s standard textbook, The Principles of Marketing, states that packaging “act(s) as
                                a promotional tool in its
                                own right.” <sup>8</sup></p>
                            <p>Underwood and Ozanne write that the “product package is the communication life-blood of
                                the firm” or the “silent
                                salesman that reaches out to customers.” <sup>9</sup></p>
                            <p>In studies of tobacco marketing, Ford et al. say that it has been suggested that
                                packaging should be the fifth “p” of
                                the marketing mix model as it is the only element of the marketing mix intertwined with
                                all of the other “p’s”
                                (product development, pricing, placement and distribution, and promotion), and that it
                                plays a key role in all of
                                these strategic marketing areas. Indeed, highlighting the importance attached to
                                packaging, it is positioned as a
                                standalone marketing mix element, the fifth “p,” for British American Tobacco.
                                <sup>10</sup></p>

                            <h3 class="fc-ref-mat-4 sub-title">When tobacco advertising is prohibited, packaging becomes
                                the primary means of
                                marketing: </h3>
                            <p>As a BAT marketing executive put it:</p>

                            <p class="indented">“Our final communication vehicle with our smoker is the pack itself.In
                                the absence of any other
                                marketing messages, our packaging . . . is the sole communicator of our brand essence.
                                Put another way — when you
                                don’t have anything else — our packaging is our marketing.” </p>

                            <div class="section-secondary-title fc-ref-mat-3">Why tobacco packaging is different to
                                packaging for other consumer
                                goods
                            </div>

                            <h3 class="fc-ref-mat-4 sub-title">Tobacco packaging is defined as a “badge” product in
                                tobacco industry marketing
                                documents <sup>12</sup>: </h3>

                            <p>
                                Badge products enable elements of the brand image to be transferred to the user through
                                public displays of the pack.
                                This is especially applicable to tobacco as smokers keep their packs close by and reveal
                                them countless times every
                                day. Such behaviors expose other consumers to the brand — something termed “incidental
                                consumer brand encounters
                                (ICBEs)” by Ferraro, Bettman, and Chartrand (2009). <sup>13</sup> These ICBEs can have a
                                powerful influence on
                                brand choice,
                                even
                                when the consumer is unaware of being exposed to the brand. <sup>14</sup>
                            </p>

                            <p>Sir Cyril Chantler was provided evidence on tobacco packaging being a badge product
                                during his evidence review. He
                                stated that: </p>

                            <p>“Public health experts argue that packaging of tobacco products is especially able to
                                play a promotional role because
                                unlike many other products, they are <b>constantly being taken out and opened, as well
                                    as being left on public
                                    display
                                    during use [and] in this way cigarette packaging can act as an
                                    advertisement</b>.”<sup>15</sup></p>

                            <p>In addition to public health experts, the tobacco industry has said a lot about the
                                importance of tobacco packaging.
                                An employee of Brown and Williamson was quoted in 1985 as saying,</p>

                            <p class="indented">“. . . if you smoke, a cigarette pack is one of the few things you use
                                regularly that makes a
                                statement about you. A cigarette pack is the only thing you take out of your pocket 20
                                times a day and lay out for
                                everyone to see. That’s a lot different than buying your soap powder in generic
                                packaging.” </p>

                            <h3 class="fc-ref-mat-4 sub-title">Tobacco packaging serves as an integral component of
                                tobacco marketing: </h3>
                            <p>According to Professor Hammond:</p>

                            <p class="indented">“. . . the pack provides a direct link be¬tween consumers and
                                manufacturers, and is particularly
                                important for consumer products such as cigarettes, which have a high degree of social
                                visibility. Unlike many other
                                consumer products, cigarette pack¬ages are displayed each time the product is used and
                                are often left in pub¬lic
                                view between uses. As a result, both smokers and non-smokers report high levels of
                                exposure to tobacco packaging . .
                                . .” <sup>17</sup> [emphasis added]</p>

                            <div class="section-secondary-title fc-ref-mat-3">Tobacco packaging serves as an integral
                                component of tobacco
                                marketing:
                            </div>

                            <p>Take a look at this video , where children are discussing tobacco packaging. These
                                children are primary school age,
                                and tobacco branding on cars had already been banned for seven years by the time this
                                video was filmed, yet they
                                still associated Marlboro with Ferrari.</p>

                            <h3 class="fc-ref-mat-4 sub-title">Evidence strongly indicates that tobacco advertising,
                                marketing, and promotion
                                <sup>18</sup>
                                influences youth smoking: </h3>

                            <p>In 2009, the Public Health Research Consortium (PHRC) in the UK published a review of
                                young people and smoking
                                <sup>19</sup>.
                                The
                                review found that the onset of smoking is a function of individual factors (e.g., self
                                image), social and community
                                factors (e.g., family circumstances), and societal factors (e.g., tobacco marketing).
                                Interventions, therefore, need
                                to address all these domains. </p>

                            <p>One of the conclusions of the PHRC’s review was that <b>“tobacco marketing continues to
                                    be a major
                                    problem. Notwithstanding the proven success of the Tobacco Advertising and Promotion
                                    [laws], tobacco brands are
                                    still
                                    influencing youth smoking</b>. The key remaining transmitters of this branding are
                                point of sale (PoS) presence
                                and the
                                pack.” The review found that the tobacco industry is exploiting the pack as a medium for
                                advertising the product and
                                reinforcing the brand. It was concluded that generic packaging is an essential next step
                                (PHRC 2009). </p>

                            <p>The Chantler Review <sup>20</sup> has an entire section devoted to reviewing the evidence
                                on the question <i>“Does
                                    branded
                                    packaging
                                    promote tobacco consumption, especially by encouraging children to take up
                                    smoking?”</i></p>

                            <p>His conclusion was that packaging does act as one of the factors encouraging young people
                                to take up smoking:</p>

                            <p class="indented">“In my opinion, <b>the balance of evidence suggests that the appeal of
                                    branded packaging acts as
                                    one of
                                    the factors encouraging children and young adults to experiment with tobacco and to
                                    establish and continue a
                                    habit
                                    of smoking</b>. As British American Tobacco Australia’s spokesman acknowledged in
                                our meeting, tobacco
                                companies, like
                                other consumer goods companies, see branded packaging as one of the tools of marketing.
                                This is supported by
                                numerous internal tobacco industry documents. Although the tobacco industry says that
                                the purpose of branded
                                packaging is to encourage brand switching only, they cannot explain how it would only
                                ever attract switchers from
                                one brand to another, and would never encourage initiation from non-smokers or increased
                                overall consumption.
                                Further, they have not been able to explain why, given that advertising and promotion
                                are proven to increase tobacco
                                consumption, the related marketing tool of branded packaging (referred to by Japan
                                Tobacco International’s counsel
                                against the Australian Government as their mobile “billboard”) should so differ in its
                                effect.”</p>

                            <p>He described the evidence regarding the tobacco industry’s attempts to make packaging
                                appeal to different sections of
                                the population, including young adults, and considers that a “spillover” effect is
                                likely:</p>

                            <p class="indented">“I have seen considerable evidence of tobacco companies carrying out
                                market research on all aspects
                                of packaging (e.g. colour, size, shape and opening) to make it appeal to various target
                                groups of young adults. In
                                my opinion a <b>“spillover effect”</b> (as described by tobacco control experts) is
                                extremely plausible, whereby
                                packages
                                that are meticulously designed to appeal to, say, an 18 year old, are highly likely to
                                appeal to a 16 year old.
                                Because 16 year olds look up to 18 year olds and want to emulate them, in my view it is
                                not possible to design
                                packages in such a way as to appeal solely to one group without also appealing to the
                                other. Research looking at the
                                link between branded and innovative packaging and childhood and young adulthood smoking
                                susceptibility bears this
                                out, describing an <b>“inevitable knock on effect”</b> of targeting product design at
                                young adults.”</p>

                            <img class="img-responsive center-block" width="450px"
                                 src="<?php echo $base_url; ?>img/tobacco branding/image-1.png">
                            <p class="small text-center">
                                Young girl with a packet of chewing gum and a packet of cigarettes.
                                Which is which? The spillover effect is clear.
                            </p>

                            <p>The involvement of tobacco companies in orientating marketing activities towards young
                                people in the United States
                                was described by Kaufman et al: </p>

                            <p class="indented">“The tobacco industry states that its purpose in tobacco marketing is to
                                maintain brand loyalty and
                                not to encourage adolescent smoking, arguing that susceptibility to cigarette use is
                                chiefly the result of influence
                                by family members and/or peers. <b>The documents released as a result of the Minnesota
                                    lawsuit</b> and the Master
                                Settlement Agreement between state attorneys general and the tobacco companies confirm
                                that the tobacco industry
                                cultivated the youth market.These documents <b>reflect the tobacco industry's
                                    recognition of the 14 to 18-year-old
                                    consumers as a growing segment of the smoking population critical to the industry's
                                    long-term performance and
                                    profitability.</b> <sup>21</sup>” </p>

                            <p>On tobacco promotion and packaging, the US Surgeon General summarized evidence in 2012
                                and 2014 and concluded that,
                                “The evidence is sufficient to conclude that advertising and promotional activities by
                                the tobacco companies cause
                                the onset and continuation of smoking among adolescents and young adults.” <sup>22</sup>
                            </p>

                            <p>Chantler believed that the evidence shows that, more specifically, branding can influence
                                consumption of goods:</p>

                            <p class="indented">“I find it significant that in other consumer goods markets, where
                                children can safely be allowed to
                                participate in experiments, it has been proven that appealing branding does influence
                                consumption. . . . Clearly,
                                given the risks even of being exposed to tobacco marketing, let alone experimenting with
                                smoking, it would never be
                                possible to gain ethical consent for similar experiments with tobacco products. However,
                                lessons can be learned from
                                the experiments that have taken place in different contexts.”</p>

                            <p>Kaufman et al. found that exposure to tobacco advertising and promotion not only
                                increases an adolescent's knowledge
                                of cigarettes, but also increases susceptibility to tobacco use and the likelihood of
                                experimentation and
                                initiation. <sup>23</sup></p>

                            <p>Moodie et al. <sup>24</sup> summarized the different research undertaken on tobacco
                                advertising and smoking uptake
                                by young
                                people
                                and found that:</p>

                            <p class="indented">“Although, the tobacco industry vehemently denies targeting young
                                people, internal tobacco industry
                                documents from the United Kingdom, United States and Taiwan reveal that it does, and
                                indeed that tobacco companies
                                depend on the youth smoking market for their long-term survival. Research has
                                consistently revealed that tobacco
                                advertising and promotion increases the likelihood that adolescents will start to smoke
                                . . . <b>Furthermore, we
                                    know
                                    that tobacco branding is continuing to drive UK teen smoking even after [the
                                    advertising ban]</b>.”</p>

                            <p>Conventional tobacco advertising is banned in the many countries in line with the FCTC
                                Article 11. Branded packaging
                                is therefore used by the tobacco industry to communicate information to consumers.
                                According to Chantler:</p>

                            <p class="indented">“Branded packaging is seen by the industry as an important way to
                                communicate the quality and
                                product characteristics to consumers, to encourage smokers to maintain their
                                identification with their chosen brand.
                                This appears to be particularly important in the absence of advertising or point of sale
                                display. This is borne out
                                by legal representatives of Japan Tobacco International in proceedings in the Australian
                                High Court, stating that
                                the Commonwealth ‘is acquiring our billboard, your Honour, in effect.’” <sup>25</sup>
                            </p>

                            <p>The evidence review prepared for the Irish Department of Health by Professor Hammond also
                                concluded that:</p>

                            <p class="indented"><b>“Packaging has a powerful influence in establishing brand imagery and
                                    promoting appeal among
                                    youth
                                    and young adults — the critical period when the vast majority of smoking initiation
                                    occurs</b>. Corporate
                                documents from
                                tobacco companies indicate that packages have been designed to appeal to “starters” as
                                part of a deliberate
                                marketing strategy to recruit new smokers. The evidence indicates that “plain” packaging
                                is unequivocally less
                                appealing and less socially desirable to youth and young adults. Plain packaging is also
                                associated with less
                                positive brand imagery, including smoker traits, such as cool, stylish, thin, as well as
                                less desirable product
                                associations.”</p>

                            <div class="section-secondary-title fc-ref-mat-3">Plain packaging “denormalizes” smoking
                            </div>

                            <p>If smoking is seen by young people as a normal part of everyday life, they are much more
                                likely to become smokers
                                themselves. </p>

                            <p>In its 2008 Board of Science Report Forever Cool, the British Medical Association
                                suggested that:</p>

                            <p class="indented">“The way tobacco is perceived and how this integrates with self image is
                                a crucial determinant of
                                youth
                                smoking. With
                                the exception of tobacco marketing, these influences are often subtle and unintentional.
                                The combination of
                                circumstances prevails to create an environment in which both the prevalence and
                                acceptability of smoking become
                                exaggerated and eases the transition into the habit.”</p>

                            <p>Social norms were also suggested in 2012 by the US Surgeon General as being important in
                                influencing smoking by young
                                people:</p>

                            <p class="indented">“Peer influences; imagery and messages that por¬tray tobacco use as a
                                desirable activity; and
                                environmental cues, including those in both traditional and emerging media platforms,
                                all encourage young people to
                                use tobacco. These influences help attract youth to tobacco use and reinforce the
                                perception that smoking and
                                various forms of tobacco use are a social norm — a particularly strong message during
                                adolescence and young
                                adulthood.”</p>

                            <p>The benefits of shaping social norms on smoking could be dramatic, with research
                                suggesting that if the average
                                individual’s views on the social acceptability of smoking changed to more closely
                                resemble the views of Californian
                                residents, <sup>28</sup> there would be a 15 percent drop in cigarette consumption.
                                <sup>29</sup></p>

                            <p>Hoek et al. defined “denormalization” and discussed how standardized packaging could be
                                an element of such a
                                strategy:</p>

                            <p class="indented">“. . . tobacco “denormalisation”, exposes tobacco as a toxic product
                                peddled by an unscrupulous
                                industry and undermines the social cachet of smoking. Denormalisation reframes smoking
                                as socially unacceptable and
                                challenges the connotations of glamour, sophistication and ruggedness that tobacco
                                brands have used to attract young
                                people. Over time, denormalisaton reduces smoking’s aspirational attributes, undermines
                                the value tobacco brands
                                deliver to smokers and reduces tobacco consumption.</p>

                            <p class="indented">“Plain packaging extends this approach by moving beyond smokefree social
                                marketing campaigns to
                                focus directly on tobacco packages, which represent a tangible symbol the emotional
                                benefits smokers derive from
                                “their” brand. These measures reflect increased knowledge of the role that packaging
                                plays in promoting smoking, the
                                meticulous research undertaken into branding by tobacco companies, and the tobacco
                                industry’s growing reliance on
                                packaging as a promotion as traditional mass media becomes more restricted.”
                                <sup>30</sup></p>

                            <div class="section-secondary-title fc-ref-mat-3">Packaging and smokers’ identity
                            </div>

                            <p><b>Branding enables tobacco manufacturers to sell status, social acceptance, and glamour,
                                    rather than use a mere
                                    nicotine delivery device</b>:</p>

                            <p>Marketing and retail academics and packaging experts have shown how packaging can
                                heighten product appeal, create
                                positive impressions, make emotional connections, influence product perceptions and
                                choice within the store, aid
                                purchase decisions, and help “drive the sale.” <sup>31</sup></p>

                            <p>Marketing theory explains how brands function by linking aspirations, attributes, and
                                values to products and
                                services, which consumers buy as much for their symbolic value as for their utility.
                                Smokers use the symbols and
                                imagery evoked by brand attributes to construct and communicate an identity.</p>

                            <p><b>Analysis of tobacco industry documents highlights the crucial importance of branding
                                    on packaging as a medium to
                                    communicate brand attributes:</b></p>

                            <p>Cigarette packets are meticulously researched and designed, their livery reassures
                                smokers about the risk, and their
                                brand imagery reinforces smokers’ self-image. Tobacco packaging thus ensures smokers and
                                potential smokers receive
                                messages that promote smoking. <sup>32</sup> Other industry documents reveal the
                                importance of creating favorable
                                brand image,
                                with one document setting out that, “In the cigarette category brand image is
                                everything. The brand of cigarettes a
                                person smokes is their identity. Cigarettes tell others who they are as a person.” <sup>33</sup>
                            </p>

                            <img class="img-responsive center-block" width="250px"
                                 src="<?php echo $base_url; ?>img/tobacco branding/image-2.png">
                            <div class="col-lg-12">
                                <img class="img-responsive col-lg-4" width="250px"
                                     src="<?php echo $base_url; ?>img/tobacco branding/image-3.png">

                                <img class="img-responsive col-lg-4" width="250px"
                                     src="<?php echo $base_url; ?>img/tobacco branding/image-4.png">

                                <img class="img-responsive col-lg-4" width="250px"
                                     src="<?php echo $base_url; ?>img/tobacco branding/image-5.png">
                            </div>
                            <p class="small text-center">JTI’s Glamour super slims cigarettes and B&H slide packs from
                                Austria 2012-2014 demonstrate the use of brand imagery on packs to sell social
                                status</p>

                            <p>As tobacco is a relatively homogeneous market with little functional difference between
                                cigarette products, branding
                                is strategically important as the predominant means of product differentiation. Pack
                                designs are created to
                                facilitate the adding of value to brands, primarily through the use of imagery and
                                association. Things like pack
                                opening, size, shape, and graphic design are aimed at communicating to the market the
                                type of customer you imagine
                                would smoke a certain brand. <sup>34</sup> Brand choice has little to do with the actual
                                cigarette but with
                                linking the
                                cigarette
                                to the aspirations of the smoker or potential smoker. <sup>35</sup></p>

                            <p>Quantitative research from Australia has recently confirmed that reducing strong brand
                                identity can lead to reduced
                                smoking behaviors. A study of 178 Australian smokers rated their sense of identification
                                with fellow smokers of
                                their brand, positive brand stereotypes, quitting behaviors and intentions, and smoking
                                intensity, both before and
                                seven months after the implementation of plain packaging. Analyses showed that smokers,
                                especially those who
                                initially identified strongly with their brand, experienced a significant decrease in
                                their brand identity following
                                the introduction of plain packaging and this was associated with lower smoking behaviors
                                and increased intentions to
                                quit. The findings provide the first quantitative evidence that brand identities may
                                help maintain smoking
                                behavior. <sup>36</sup></p>

                            <div class="section-secondary-title fc-ref-mat-3">Branding on tobacco packaging is intended
                                to mislead consumers
                            </div>

                            <p>Tobacco companies have made extensive use of tobacco packaging to convey misleading
                                information about the relative
                                harms of different brands. The use of descriptors such as “light,” “mild,” and “low tar”
                                and how this misleads
                                consumers have been reviewed and extensively documented. <sup>37</sup> Equally well
                                known is that “lower tar”
                                cigarettes are
                                not
                                actually lower in tar but cause the same harms as regular cigarettes. These health
                                reassurance brands have the
                                psychological effect of convincing smokers that they are less harmful, leading to them
                                swapping brands instead of
                                making quit attempts. The FCTC Article 11.1(a) requires parties to ensure that packaging
                                does not mislead or create
                                erroneous impressions and recommends banning those terms — to date at least 79 countries
                                have prohibited descriptors
                                such as “light,” “mild,” and “low tar.” <sup>38</sup></p>

                            <p>However, research in Australia and the UK, where these terms have been prohibited,
                                suggests only modest benefits in
                                reducing false beliefs about the risks of different cigarette brands. <sup>39</sup> This
                                marginal impact is likely
                                due to
                                greater
                                color segmentation and the substitution of other misleading terms, such as “smooth.”
                            </p>

                            <p>It is also well documented that when countries have banned misleading descriptors such as
                                “light” and “mild” these
                                brand variants were replaced with color descriptors, such as “gold” and “silver” with
                                the pack colors and branding
                                remaining identical. </p>

                            <img class="center-block img-responsive" width="450px"
                                 src="<?php echo $base_url; ?>img/tobacco branding/image-6.png">

                            <p class="small text-center">“It’s very difficult for people to discriminate blind-tested.
                                Put it in a package and put a
                                name on it, then it has a lot of product characteristics.” </p>

                            <p>A booklet distributed by Philip Morris’s Canadian subsidiary, JTI Macdonald, similarly
                                describes the replacement
                                descriptors following the ban in Canada. The page shown here described how the banned
                                term “Lights” on the Camel and
                                Winston brands would be replaced by “Blue” with no other change to the overall
                                branding.</p>

                            <img class="center-block img-responsive" width="350px"
                                 src="<?php echo $base_url; ?>img/tobacco branding/image-7.png">


                            <div class="section-secondary-title fc-ref-mat-3">Pack color is used to mislead consumers
                                about the harms of tobacco.
                            </div>

                            <p>Industry documents describe the specific importance of pack color in shaping consumer
                                perceptions of risk. For
                                example, British American Tobacco’s Research & Development group summarized principles
                                for effective pack design and
                                noted that: </p>

                            <p class="indented">“Lower delivery products tend to be featured in blue packs. Indeed, as
                                one moves down the delivery
                                sector then the closer to white a pack tends to become. This is because white is
                                generally held to convey a clean,
                                healthy association.” <sup>41</sup></p>

                            <p>Different shades of the same color and the proportion of “white space” on the package are
                                commonly used to manipulate
                                perceptions of a product’s relative strength and potential risk. </p>

                            <p>Industry research demonstrates that the color and design of the package are so effective
                                that they even influence
                                sensory perceptions from smoking a cigarette. For example, when consumers smoke
                                cigarettes placed in lighter-colored
                                packs, they perceive these cigarettes to taste “lighter” and less harsh than the same
                                cigarettes presented in
                                darker-colored packs. <sup>42</sup></p>

                            <div class="section-secondary-title fc-ref-mat-3">Anchor brands
                            </div>

                            <p>Extensive research on “anchoring” shows that the presence of an anchor brand against
                                which brand variants can be
                                compared (either physically or in people’s minds) leads to distortions in perception and
                                judgment. For instance, the
                                presence of fried cheese bites as an anchor leads people to judge a cheeseburger as a
                                more healthy option because it
                                benefits from a contrast effect. Brand variants such as Marlboro “Blue” and “Gold” are
                                contrasted against the parent
                                brand/anchor Marlboro “Red” and are incorrectly seen as lower risk products. Therefore,
                                the presence of a full
                                flavor/higher tar parent brand together with its brand variants (positioned to be at
                                lower risk on a health
                                continuum) strongly promotes increased, and false, health reassurance owing to
                                contrast-based distortions in
                                perception and judgment.</p>

                            <img class="center-block img-responsive" width="450px"
                                 src="<?php echo $base_url; ?>img/tobacco branding/image-8.png">

                            <div class="section-secondary-title fc-ref-mat-3">Does tobacco packaging encourage smoking?
                                The tobacco industry’s view
                            </div>

                            <p>The tobacco industries’ position on whether packaging encourages smoking or not is set
                                out in detail on the Opposing
                                Arguments (and how to counter them) page of the Tools and Resources.That section draws
                                ontobacco company submissions
                                to government consultations and their court pleadings in legal challenges to plain
                                packaging in the UK.</p>

                            <p>In brief, the tobacco industry claims not to target children or non-smokers with their
                                advertising and promotion. The
                                tobacco companies also state that packaging has no role in advertising and
                                promotion. </p>

                            <p>They seek to blur or ignore the overwhelming view of marketing theory and evidence that
                                advertising and marketing
                                affects overall consumption of a product. The tobacco companies take this view publicly
                                despite all the disclosed
                                internal tobacco industry documents that demonstrate a contrary view is held within the
                                companies (see below).</p>

                            <p>Tobacco companies argue that branding on packaging only promotes brand switching by
                                current smokers and has no effect
                                on overall primary demand. They state that branded packaging does not cause people to
                                start or continue smoking.</p>

                            <p>The tobacco industry claims that there is evidence that factors other than branded
                                packaging are the real drivers of
                                smoking initiation. </p>

                            <p>The tobacco companies’ position on branding has been rejected by courts in many
                                countries, most recently in the UK by
                                the High Court judge hearing the legal challenge to plain packaging regulations. He
                                stated: </p>

                            <p class="indented">“This argument is unsustainable. It is not possible to design a product
                                to appeal to adults (over
                                18s) without appealing, even inadvertently, to children. A number of the tobacco
                                companies have strenuously denied
                                that they target their product on children or even that they are interested in the
                                impact of tobacco on children.
                                But the Government medical advisers all say that, targeted or not, the lure to children
                                remains strong and this is
                                plain and obvious to the manufacturers.” <sup>44</sup></p>

                            <img class="center-block img-responsive" width="450px"
                                 src="<?php echo $base_url; ?>img/tobacco branding/image-9.png">

                            <p class="small text-center">Displays of attractive tobacco packaging act as advertisements
                                and are regularly and
                                deliberately positioned adjacent to confectionary and toys in retail outlets and airport
                                duty free stores. </p>

                            <div class="section-secondary-title fc-ref-mat-3">Tobacco industry documents: the importance
                                of packaging in promoting
                                tobacco
                            </div>

                            <p><b>Internal tobacco company documents provide consistent, unambiguous evidence that
                                    packaging is an effective tool to
                                    recruit new smokers:</b></p>

                            <p>Millions of these “internal” documents have been released through court disclosure
                                requirements in various legal
                                proceedings over the past twenty years. Most documents span the period from the 1950s
                                through 2009 and represent an
                                important source of information on business practices, marketing strategies, and
                                internal research and development
                                activities. These documents provide evidence that packaging is an effective promotional
                                tool for communicating brand
                                imagery and is intended to be part of the mix of promotional activity designed to
                                recruit new smokers.</p>

                            <p>Extensive research has been undertaken by academics into the evidence from the tobacco
                                industry. A published review
                                by Cummings et al. of such documents concluded: </p>

                            <p class="indented">“Industry documents show that the cigarette manufacturers carefully
                                monitored the smoking habits of
                                teenagers over the past several decades … <b>The documents reveal that the features of
                                    cigarette brands (that is,
                                    use
                                    of filters, low tar, bland taste, etc) packaging (that is, size, colour and design),
                                    and advertising (that is,
                                    media
                                    placements and themes and imagery) were developed specifically to appeal to new
                                    smokers (that is, teenagers)</b>.”
                                <sup>45</sup>
                            </p>

                            <div class="section-secondary-title fc-ref-mat-3">Professor Hammond’s review of tobacco
                                industry evidence
                            </div>

                            <p>Professor David Hammond of the University of Waterloo produced a report commissioned by
                                the Irish Department of
                                Health Standardized Packaging of Tobacco Products: Evidence review (March 2014), which
                                includes the results of
                                research into these industry documents. See the pages on the Research Evidence in the
                                Tools and Resources for
                                information on this report. Professor Hammond’s research highlights that the tobacco
                                industry knew that packaging
                                was a highly effective marketing tool to attract new smokers, especially young
                                people. </p>

                            <p>The following is an extract from Professor Hammond’s review (emphasis added in bold and
                                footnotes removed for ease of
                                reproduction). The full report is available <a
                                        href="http://health.gov.ie/wp-content/uploads/2014/06/2014-Ireland-Plain-Pack-Main-Report-Final-Report-July-26.pdf">here</a>:
                            </p>

                            <p class="indented">
                                Packaging is an important component of the overall marketing strategy for consumer
                                goods. Packaging
                                is particularly important for consumer products with a high degree of social visibility,
                                such as cigarettes. Unlike
                                many other consumer products, cigarettes are contained in packages that are displayed
                                each time the product is used
                                and are often left in public view between uses.
                                <br/>
                                <br/>
                                Tobacco industry research and marketing documents unequivocally demonstrate the
                                importance of tobacco packaging as a
                                marketing tool. For example, a recent presentation to global investors identified
                                packaging and limited edition
                                packs as a key component of industry innovation and growth. A variety of documents also
                                discuss packaging within the
                                context of recruiting new smokers. For example, a summary of consumer product testing
                                prepared by Philip Morris
                                stated: “<b>Advertising, packaging, price can get people to try a product . . .</b>”
                                <br/>
                                <br/>
                                A review of marketing for Marlboro Red and Marlboro Lights highlights the role of <b>packaging
                                    in brand
                                    communication,
                                    as well as how packaging strategies can help address challenges in recruiting more
                                    ‘starters</b>.’
                                <br/>
                                <br/>
                                Corporate documents indicate that the importance of packaging increases in jurisdictions
                                with comprehensive
                                advertising and marketing restrictions, such as [Australia, Ireland, France or the UK].
                                As a BAT marketing executive
                                put it, ‘Our final communication vehicle with our smoker is the pack itself.’
                                <br/>
                                <br/>
                                A BAT internal review of trends in cigarette packaging in the 1990’s predicted that:
                                ‘Advertising and promotion bans
                                and restrictions will rapidly increase. The pack will increasingly become the main
                                communicator.’ An earlier BAT
                                document from 1979 on new opportunities in marketing elaborated:
                                <br/>
                                <br/>
                                <span class="indented">“Under conditions of total ban, pack designs and the brand house and company 'livery' have enormous importance in reminding and reassuring the smokers. Therefore the most effective symbols, designs, colour schemes, graphics and other brand identifiers should be carefully researched so as to find out which best convey the elements of goodwill and image. Where necessary, new designs must be created and tested so as to enhance and complement the identifiers. An objective should be to enable packs, by themselves, to convey the total product message.”</span>
                                <br/>
                                <br/>
                                A 1987 summary of Philip Morris’s “International Social Acceptability Research” program
                                also highlights the growing
                                importance of packaging as a promotional tool:
                                <span class="indented">“The following key elements are of prime importance in the enhancement of the smoker’s self-perceptions: the package, including brand name, logo, colour, design, crest, box, soft pack, etc . . . . <b>As media restrictions continue to increase in many major world markets, our packaging becomes increasingly important as: a vehicle for communication, a statement about the smoker’s personality and lifestyle, an expression of social acceptability.</b>”</span>
                                <br/>
                                <br/>
                                [Tobacco packaging plays a fundamental role in communicating brand imagery]. For
                                example, a confidential document
                                from BAT’s Group Research & Development Centre, describes the central role of the pack
                                in conveying brand imagery:
                                <span class="indented">“Historically, <b>cigarette pack design has assumed a great deal of importance in the marketing process. This is because brand imagery is salient in the mind of the consumer</b> . . . . Much of the imagery has traditionally been developed through advertising. However, it has been understood that this imagery must be carried right through to the brand . . . . The main focus of attention, therefore, has been on the pack which carries the product.”</span>
                                <br/>
                                <br/>
                                <b>Brand imagery is particularly important in targeting youth and young adults</b>. In
                                many cases, initial brand
                                preferences are based less on the sensory properties of using the product than on
                                perceptions of the package and
                                brand:
                                <br/>
                                <br/>
                                <span class="indented">“. . . one of every two smokers is not able to distinguish in blind (masked) tests between similar cigarettes . . . . for most smokers and for the decisive group of new, younger smokers, the consumer’s choice is dictated more by psychological, image factors than by relatively minor differences in smoking characteristics.”</span>
                                <b>Tobacco company research indicates that brand imagery is critical to segmenting
                                    brands and targeting sub-groups,
                                    such as young women.</b>
                                <span class="indented">“As in previous studies, the pack generated a very positive response from respondents. They praised it for its delicate prettiness and its classy femininity. And they were attracted to its “simple” and “clean” design . . . . The slim size of the pack was generally seen as clear benefit: it fits a woman’s hand better and takes up less room in her purse . . . . User Imagery: After viewing the pack and carton, respondents tended to develop the same general user imagery that has been found in previous studies. They see Capri as a cigarette that is unambiguously for women . . . . But when asked for specific imagery, they tend to imagine the typical Capri smokers as . . . tasteful and fashion-conscious . . . confident and independent.”</span>
                                <br/>
                                <br/>
                                Color is among the most important packaging attributes for establishing brand imagery.
                                Tobacco companies conduct
                                extensive market research on the effect of colors. For exam¬ple, silver and gold can be
                                used to convey status and
                                prestige, particularly for “premium” brands. Red packages and logos can convey
                                excitement, strength, wealth, and
                                power, whereas pastel colors are associated with freshness, innocence, and relaxation,
                                and are more common among
                                brands that appeal to females.
                            </p>


                            <div class="section-secondary-title fc-ref-mat-3">Conclusions and further resources
                            </div>
                            <p>A useful and comprehensive study by Cancer Council Victoria of tobacco packaging in
                                Australia before plain packaging
                                was introduced explores the concept of packaging as a promotional tool and describes
                                trends in the packaging of
                                cigarettes and other tobacco products:</p>

                            <p>
                                <a href="http://www.tobaccoinaustralia.org.au/chapter-11-advertising/11-10-tobacco-display-as-advertising1">Packaging
                                    as promotion. In Tobacco in Australia: Facts and issues</a> <sup>46</sup></p>

                            <p>There is sound evidence from wider marketing literature regarding the role of packaging
                                in the promotion strategy for
                                any consumer good. Evidence suggests that packaging and branding work hand in hand.
                                Marketing theory explains how
                                brands function by linking aspirations, attributes, and values to products and services,
                                which consumers buy as much
                                for their symbolic value as for their utility.</p>

                            <p>Tobacco packaging is different to packaging for other consumer goods. Tobacco packs are
                                carried around by smokers and
                                are on regular display. This makes the pack both a mobile advertisement as well as
                                making a statement about the
                                person who carries and displays it.</p>

                            <p>For tobacco, packaging is now a vital way for tobacco companies to promote their
                                products, as legislation in many
                                countries prohibiting tobacco advertising and promotion has closed down other
                                promotional avenues. Tobacco companies
                                have introduced many more brands variants once tobacco advertising bans have been put in
                                place, and it is said that
                                they have invested a great deal in bringing innovative and attractive packaging to the
                                market. Tobacco companies
                                contest this view, however, arguing that this is a known feature of consumer goods where
                                the market is “mature,
                                saturated and declining.” Tobacco companies also strongly argue that the branding on
                                packaging is aimed at
                                encouraging existing smokers to switch brands and that there is no evidence that it has
                                any effect on initial take
                                up. </p>

                            <p><b>Despite the vast sums of money invested in brands and packaging, the tobacco industry
                                    will continue to deny that
                                    packaging and branding have any effect on overall smoking rates; claim that the only
                                    purpose of branding is to
                                    identify and distinguish a product; and argue that branding only has an impact on
                                    market share</b></p>

                            <div class="section-secondary-title fc-ref-mat-3">End Notes
                            </div>

                            <p><sup>1</sup>“The Faber Report, The Role of Trademarks and the Brand They Represent –
                                Report of Ronald J. Faber,
                                Ph.D.” Appendix 9 to BAT’s response to the UK’s 2014 Consultation on Standardised
                                Packaging of Tobacco Products.</p>
                            <p><sup>2</sup>Fast moving consumer goods.</p>
                            <p><sup>3</sup>M. Wakefield. “The Cigarette Pack as Image: New evidence from tobacco
                                industry documents” Tobacco
                                Control, 11 (Suppl.1): i73-i80, 2002. </p>
                            <p><sup>4</sup>Kotler and Keller, Marketing Management (14th edition), 2012, pp. 346–8.</p>
                            <p><sup>5</sup>Ibid, p. 347.</p>
                            <p><sup>6</sup>K. Keller, Strategic Brand Management, 4thedition, Pearson Education Ltd.,
                                2013, p.165.</p>
                            <p><sup>7</sup>R (British American Tobacco & Ors) v. Secretary of State for Health [2016]
                                EWHC 1169 (Admin) at
                                paragraph 752. Available from:
                                <a href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf</a>.
                            </p>
                            <p><sup>8</sup>A. Palmer, ed., “The product,” Principles of Marketing. Oxford University
                                Press, London. 2000</p>
                            <p><sup>9</sup>R. Underwood and J. Ozanne. ‘Is Your Package an Effective Communicator? A
                                normative framework for
                                increasing the communicative competence of packaging,” in Journal of Marketing
                                Communication. 4(4), pp. 207–220,
                                1998. Available from:
                                <a href="http://www.ingentaconnect.com/content/routledg/rjmc/1998/00000004/00000004/art00002?token=0042161894d0d27e41225f406a5e2c6b465d487667627b49576b64276a79595d88">http://www.ingentaconnect.com/content/routledg/rjmc/1998/00000004/00000004/art00002?token=0042161894d0d27e41225f406a5e2c6b465d487667627b49576b64276a79595d88</a>.
                            </p>
                            <p><sup>10</sup>A. Ford, C. Moodie, and G. Hastings. “The Role of Packaging for Consumer
                                Products: Understanding the
                                move towards ‘plain’ tobacco packaging,” in Addiction Research and Theory. 20:4, pp.
                                339–347, 2012.</p>
                            <p><sup>11</sup> M. Hulit. “Marketing Issues.” Corporate Affairs Conference. May 27, 1994.
                                Bates: 2504015017/5042. Page
                                21. Available from:
                                <a href="http://legacy.library.ucsf.edu/tid/jga42e00/pdf?search=%22our%20final%20communication%20vehicle%20with%20our%20smoker%20is%20the%20pack%20itself%22">http://legacy.library.ucsf.edu/tid/jga42e00/pdf?search=%22our%20final%20communication%20vehicle%20with%20our%20smoker%20is%20the%20pack%20itself%22</a>.
                            </p>
                            <p><sup>12</sup> M. Wakefield et al. “The Cigarette Pack as Image: New evidence from tobacco
                                industry documents.”
                                Tobacco Control. 11 (suppl.1):i73−i80, 2002. Available from:
                                <a href="http://tobaccocontrol.bmj.com/content/11/suppl_1/i73.full">http://tobaccocontrol.bmj.com/content/11/suppl_1/i73.full</a>
                            </p>
                            <p><sup>13</sup> R. Ferraro, J. Bettman, and T. Chartrand, T. ‘The Power of Strangers: The
                                effect of incidental consumer
                                brand encounters on brand choice,” in Journal of Consumer Research. 35, pp. 729–741,
                                2009.</p>
                            <p><sup>14</sup>Ford et al. 2012.</p>
                            <p><sup>15</sup>Paragraph 3.9, “Report of the Independent Review undertaken by Sir Cyril
                                Chantler,” 2014, with quote
                                from Wakefield et al. The Cigarette Pack as Image: New evidence from tobacco industry
                                documents. Tobacco Control.
                                11(suppl.1):i73−i80, 2002.</p>
                            <p><sup>16</sup> Brown and Williamson was an American tobacco company and subsidiary of
                                British American Tobacco. Brown
                                and Williamson Tobacco Corporation (1985). Untitled (Speech notes of a Brown and
                                Williamson employee) Media release.
                                No Date. Legacy Tobacco Documents Library University of California, San Francisco 1985.
                                Available from:
                                <a href="http://legacy.library.ucsf.edu/tid/knn70f00">http://legacy.library.ucsf.edu/tid/knn70f00</a>.
                            </p>

                            <p><sup>17</sup> D. Hammond. “’Plain Packaging’” Regulations for Tobacco Products: The
                                impact of standardizing the color
                                and design of cigarette packs.” Salud Publica Mex. 52 suppl 2:S226-S232, 2010.</p>
                            <p><sup>18</sup> Within this section, “tobacco advertising and promotion” uses the
                                definition within the Framework
                                Convention on Tobacco Control (FCTC) of “any form of commercial communication
                                recommendation or action with the aim,
                                effect or likely effect of promoting a tobacco product or tobacco use either directly or
                                indirectly.” </p>
                            <p><sup>19</sup> Public Health Research Consortium. A Review of Young People and Smoking in
                                England. York, 2009.</p>
                            <p><sup>20</sup> “Standardised Packaging of Tobacco: Report of the independent review
                                undertaken by Sir Cyril
                                Chantler.”Available from: <a href="http://www.kcl.ac.uk/health/packaging-review.aspx">http://www.kcl.ac.uk/health/packaging-review.aspx</a>.
                            </p>
                            <p><sup>21</sup> N. Kaufman et al. “Predictors of Change on the Smoking Uptake Continuum
                                among Adolescents” in Archives
                                of Pediatrics & Adolescent Medicine. 156(6), pp.581–587. 2002.</p>
                            <p><sup>22</sup> United States Department of Health and Human Services, Surgeon General,
                                (2014). Surgeon General’s
                                Report on Smoking and Health.</p>
                            <p><sup>23</sup> N. Kaufman et al. “Predictors of Change on the Smoking Uptake Continuum
                                among Adolescents” in Archives
                                of Pediatrics & Adolescent Medicine. 156(6), pp.581–587. 2002.</p>
                            <p><sup>24</sup> C. Moodie et al. “Tobacco Marketing Awareness on Youth Smoking
                                Susceptibility and Perceived Prevalence
                                before and after an Advertising Ban” in European Journal of Public Health. 18(5). 2008.
                            </p>
                            <p><sup>25</sup> High Court of Australia Transcripts, Japan Tobacco International SA v.
                                Commonwealth of Australia;
                                British American Tobacco Australasia Limited & Ors v. The Commonwealth of Australia
                                2012, HCATrans 91 (April 17,
                                2012).</p>
                            <p><sup>26</sup> D. Hammond. Standardised Packaging of Tobacco Products:Evidence Review.
                                (2014)</p>
                            <p><sup>27</sup> British Medical Association. Forever Cool: The influence of smoking imagery
                                on young people. BMA,
                                London, 2008.</p>
                            <p><sup>28</sup> The adult smoking prevalence in California in 2011 was 11.9 percent.
                                According to the California
                                Department of Public Health, the California Tobacco Control Program was established by
                                the Tobacco Tax and Health
                                Promotion Act of 1988. The act, which was approved by California voters, instituted a
                                25-cent tax on each pack of
                                cigarettes and earmarked 5 cents of that tax to fund California’s tobacco control
                                efforts. These efforts include
                                funding local health departments and community organizations, an aggressive media
                                campaign and tobacco-related
                                evaluation and surveillance. California’s comprehensive approach has changed social
                                norms around tobacco-use and
                                secondhand smoke which have produced dramatic results. Available from:
                                <a href="http://www.cdph.ca.gov/Pages/NR11-031.aspx">http://www.cdph.ca.gov/Pages/NR11-031.aspx</a>
                                .
                            </p>
                            <p><sup>29</sup> B. Alamar et al. “Effect of Increased Social Unacceptability of Cigarette
                                Smoking on Reduction in
                                Cigarette Consumption,” in American Journal of Public Health. 96:8, pp. 1359–1363,
                                August 2006.</p>
                            <p><sup>30</sup> J. Hoek et al. “Strong Public Support for Plain Packaging of Tobacco
                                Products” in Australian and New
                                Zealand Journal of Public Health. 36(5), 2012.</p>
                            <p><sup>31</sup> C. Moodie et al. Plain Tobacco Packaging: A systematic review. Public
                                Health Research Consortium.
                                Available from: <a href="http://phrc.lshtm.ac.uk/project_2011-2016_006.html">http://phrc.lshtm.ac.uk/project_2011-2016_006.html</a>.
                            </p>
                            <p><sup>32</sup> J. Hoek et al. “Effects of dissuasive packaging on young adult smokers” in
                                Tobacco Control. Supplement
                                published online, 2010.</p>
                            <p><sup>33</sup> From C. Moodie et al., note 32, 2012.</p>
                            <p><sup>34</sup> R. Borland et al. “The Impact of Structural Packaging Design on Young Adult
                                Smokers’ Perceptions of
                                Tobacco Products” in Tobacco Control.Published online, December 13, 2011.</p>
                            <p><sup>35</sup> M. Wakefield et al., note 12, 2002.</p>
                            <p><sup>36</sup> H. Webb et al. “Smoke Signals: The decline of brand identity predicts
                                reduced smoking behaviour
                                following the introduction of plain packaging,” 2017. Available from: <a
                                        href="http://dx.doi.org/10.1016/j.abrep.2017.02.003">http://dx.doi.org/10.1016/j.abrep.2017.02.003</a>.
                            </p>
                            <p><sup>37</sup> National Cancer Institute. “Risks Associated with Smoking Cigarettes with
                                Low Machine-Measured Yields
                                of Tar and Nicotine.” Smoking and Tobacco Control Monograph 13 Bethesda: U.S. Department
                                of Health and Human
                                Services, National Institutes of Health, National Cancer Institute, 2001.</p>
                            <p><sup>38</sup> Figure derived from <a href="http://www.tobaccocontrollaws.org">www.tobaccocontrollaws.org</a>
                                legislation database.</p>
                            <p><sup>39</sup> R. Borland G. T. Fong , H. H. Yong, K. M. Cummings, D. Hammond et al. “What
                                Happened to Smokers’
                                Beliefs about Light Cigarettes when “Light/Mild” Brand Descriptors Were Banned in the
                                UK?” [RK: is this still part
                                of title?] Findings from the International Tobacco Control (ITC) Four Country Survey.
                                Tobacco Control 17(4):256-62.
                                Available from: <a href="http://tobaccocontrol.bmj.com/content/17/4/256.long">http://tobaccocontrol.bmj.com/content/17/4/256.long</a>.
                            </p>
                            <p><sup>40</sup> H. Aubin. “Are ‘generic’ packs cigarettes’ future?” Nov 8, 1989. Bates:
                                202338359. Available from:
                                <a href="http://bat.library.ucsf.edu//tid/per26a99">http://bat.library.ucsf.edu//tid/per26a99</a>.
                            </p>
                            <p><sup>41</sup> L. Miller. “Principles of Measurement of Visual Standout in Pack Design.”
                                British American Tobacco
                                Company Limited; March 18, 1986. Bates: 105364841–105364951. Available from:
                                <a href="http://legacy.library.ucsf.edu/tid/zlh37a99/pdf?search=%22lower%20delivery%20products%20tend%20to%20be%20featured%20in%20blue%20packs%20indeed%20as%20one%20moves%20down%20the%20delivery%20sector%20then%20the%20closer%20to%20white%20a%20pack%20tends%20to%20become%20this%20is%20because%20white%20is%20generally%20held%20to%20convey%20a%20clean%20healthy%20association%22">http://legacy.library.ucsf.edu/tid/zlh37a99/pdf?search=%22lower%20delivery%20products%20tend%20to%20be%20featured%20in%20blue%20packs%20indeed%20as%20one%20moves%20down%20the%20delivery%20sector%20then%20the%20closer%20to%20white%20a%20pack%20tends%20to%20become%20this%20is%20because%20white%20is%20generally%20held%20to%20convey%20a%20clean%20healthy%20association%22</a>.
                            </p>
                            <p><sup>42</sup> M. Wakefield, C. Morley, J.K. Horan, and K.M. Cummings. “The Cigarette Pack
                                as Image: New evidence from
                                tobacco industry documents.” Tobacco Control. (Suppl 1):i73–i80, 2002.</p>
                            <p><sup>43</sup> See A. Chernev, “Semantic Anchoring in Sequential Evaluations of Vices and
                                Virtues,” in Journal of
                                Consumer Research (February 2011), JC-095.</p>
                            <p><sup>44</sup> R (British American Tobacco & Ors) v. Secretary of State for Health [2016]
                                EWHC 1169 (Admin). Paragraph
                                75.</p>
                            <p><sup>45</sup> K.M. Cummings et al. Marketing to America's Youth: evidence from corporate
                                documents, Tobacco Control
                                2002;11:i5–i17</p>
                            <p><sup>46</sup> M. M. Scollo, B. Freeman, and E. M. Greenhalgh. “Packaging as Promotion. In
                                Tobacco in Australia: Facts
                                and issues. Melbourne: Cancer Council Victoria, 2016. </p>
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-3">
                        <!-- 2 -->
                        <div class="sidebar-wrapper col-xs-12 sidebar-2">
                            <div class="sidebar-nav-header">ON THIS PAGE</div>
                            <ul class="sidebar-nav">
                                <li class="text-center">
                                    <a href="#item1">Research into attitudes and behaviours</a>
                                </li>
                                <li class="text-center">
                                    <a href="#item2">Statistical data: smoking prevalence and tobacco consumption</a>
                                </li>
                                <li class="text-center">
                                    <a href="#item3">Branded packaging and youth smoking</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            break;

        // j
        case 'opposing-arguments-and-how-to-counter-them':
            if ($var == 'og_desc') {
                $og_desc = 'These pages include the information that can be used to counter the industry arguments.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r" id="Ref-J">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-3">Opposing Arguments (and How to
                            Counter Them)
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-3">Introduction</div>
                        <p>
                            <b>These pages include the information that can be used to counter the industry
                                arguments.</b>
                        </p>
                        <p>
                            The tobacco industry have mounted well-funded and sophisticated campaigns opposing plain
                            packaging of tobacco products in every country where the policy is taken forward by
                            government. However, the arguments used by opponents of plain packaging are broadly similar
                            in each country.
                        </p>

                        <p>
                            Governments should take objections to plain packaging, and the veracity of them, into
                            careful consideration when reviewing the evidence for the policy. Not doing so can lead to
                            accusations of an unfair process. But officials can decide what weight or importance they
                            give to these arguments and compare them to the evidence in support of the policy.
                        </p>

                        <p>
                            Tobacco companies have also submitted lengthy responses to public consultations on plain
                            packaging. These submissions provide the detail behind the arguments that headline in the
                            media and are referred to though out these pages.
                        </p>

                        <p>
                            It is important for governments and civil society to mobilise support for tobacco plain
                            packaging and part of that process involves countering the false or deceitful arguments of
                            the tobacco industry. This means anticipating the likely arguments and directly refuting
                            them.
                        </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-3">Opposing Arguments</div>
                        <h3 class="fc-ref-mat-3 sub-title">
                            1. No reliable evidence
                        </h3>
                        <ul>
                            <li>
                                <a href="#">Undermining the research evidence</a>
                            </li>
                            <li>
                                <a href="#">Claims that data from Australia show no impact from plain packaging</a>
                            </li>
                            <li>
                                <a href="#">Relying on industry-funded, non-peer-reviewed studies</a>
                            </li>
                            <li>
                                <a href="#">Tobacco industry experts on smoking prevalence and sales data</a>
                            </li>
                            <li>
                                <a href="#">Tobacco industry experts used to analyze the research evidence</a>
                            </li>
                            <li>
                                <a href="#">Criticisms and court judgments on the industry reports</a>
                            </li>
                            <li>
                                <a href="#">Evidence in the High Court challenge to the UK regulations</a>
                            </li>
                            <li>
                                <a href="#">The counter arguments</a>
                            </li>
                        </ul>
                        <p>
                            Big tobacco strongly argues that there is no reliable evidence to show that plain packaging
                            will reduce smoking rates. The tobacco companies have used this argument in their
                            advertising campaigns in Australia, the UK, France and elsewhere. It is part of the
                            opposition in each jurisdiction that considers the policy.
                        </p>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <img height="261px" src="<?php echo $base_url; ?>img/opposing-args/proof-1.png"/>
                            </div>
                            <div class="col-lg-4">
                                <img height="261px" src="<?php echo $base_url; ?>img/opposing-args/proof-2.png"/>
                            </div>
                        </div>
                        <br>&nbsp;</br>
                        <p>
                            Advertisements run by BAT in Australia and JTI in the UK.
                        </p>

                        <p>
                            These industry campaigns make bold but simple assertions that are often then picked up and
                            repeated in the media. The tobacco company submissions to the governments go into more
                            detail. Their arguments fall into four broad categories:
                        </p>

                        <ol>
                            <li>
                                Undermining or criticizing the supporting research evidence, by asserting it is all
                                seriously flawed;
                            </li>
                            <li>
                                Misquoting or distorting the main messages of the supporting evidence;
                            </li>
                            <li>
                                Arguing that smoking prevalence rates in Australia have not decreased (or that plain
                                packaging has not affected the existing downward trend); and
                            </li>
                            <li>
                                Relying on industry-funded, non-peer-reviewed studies as evidence.
                            </li>
                        </ol>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <h3 class="fc-ref-mat-3 sub-title">Undermining the research evidence</h3>
                        <p>
                            The four big tobacco companies have criticized the systematic evidence reviews — such as the
                            Stirling Review, the Chantler Review, and the Hammond Review, detailed on the <b>RESEARCH
                                EVIDENCE</b> page of the Tools and Resources.
                        </p>

                        <p>
                            For instance, in its <a
                                    href="http://www.tobaccotactics.org/images/d/d1/IMT_secondconsultresp.pdf"> response
                                to the UK 2014 consultation</a>, Imperial Tobacco commented on the Chantler Review:
                        </p>

                        <p class='p-states'>
                            “At its heart the Report relies on a selection of theoretical studies, including those in
                            the ‘Systematic Review’ commissioned by the Department of Health from Public Health Research
                            Consortium (“PHRC”), none of which have been able to show that standardised packaging would
                            reduce smoking prevalence and which themselves have had to acknowledge their very
                            significant limitations.” [p. 9]
                        </p>
                        <p>In its written response to the Oireachtas Joint Committee on Health and Children in Ireland,
                            JTI stated that:</p>
                        <p class="p-states">“The Systematic Reviews, which were written by a small number of tobacco
                            control advocates, are
                            not reliable or convincing. The methodology is flawed. Not a single study can be pointed to
                            in
                            the Systematic Reviews which demonstrates that plain packaging is likely to achieve actual
                            public health benefits. Furthermore, the individual surveys underlying the ‘systematic’
                            reviews
                            test what people say they will do rather than what they actually do.”[p. 5]</p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <h3 class="fc-ref-mat-3 sub-title">
                            Claims that data from Australia show no impact from plain packaging
                        </h3>

                        <p>
                            In their responses to consultations on plain packaging, tobacco companies have consistently
                            stated that the real life evidence from Australia’s statistics on prevalence and consumption
                            do
                            not show any decline <i>attributable to plain packaging</i> and that countries should wait
                            until
                            the
                            outcome of real life evidence from Australia.
                        </p>

                        <p>
                            For instance, in its <a
                                    href="http://www.tobaccotactics.org/images/d/d1/IMT_secondconsultresp.pdf">submission
                                to
                                the UK 2014 consultation</a>, Imperial Tobacco stated:
                        </p>

                        <p class="p-states">
                            “The Australian Government is planning to conduct a review on the plain packaging
                            implementation
                            in December 2014 and we would expect other governments to wait until this review has been
                            completed before making any policy decisions.”[p. 21]
                        </p>

                        <p>
                            And the <a
                                    href="http://www.jti.com/files/2014/7281/6956/JTI_response_to_Health_Canada_Consultation_on_Plain_and_Standardized_Packaging_for_Tobacco_Products._31_August_2016.pdf">JTI
                                submission to the Canadian 2016 consultation</a> stated:

                        <p class="p-states">
                            “The empirical evidence does not show that plain packaging has accelerated the rate of
                            decline
                            in smoking, or has had any public health impact at all.”[p. 71]
                        </p>

                        <p>
                            (The Post-Implementation Review by the Australian Government was published in February 2016
                            and
                            is discussed on the <b>Australia’s Post-Implementation Evidence</b> page of the Tools and
                            Resources.)
                        </p>

                        <p>
                            In its submission to <a
                                    href="http://www.pmi.com/eng/media_center/Documents/PML submission to plain packaging post implementation review - March 2015.pdf">Australia’s
                                post implementation review</a> of plain packaging, Philip Morris
                            stated that:
                        </p>

                        <p class="p-states">
                            “The vast majority of the data available from the first two years of plain packaging show
                            consistently that there is no sound basis today for concluding that plain packaging has been
                            effective in achieving its original objectives of reducing smoking prevalence or
                            consumption.”[p. 12]
                        </p>

                        <p>
                            The tobacco company consultation submissions also highlight other statistics from Australia
                            to
                            seek to show that prevalence and consumption have not been affected by the introduction of
                            plain
                            packaging.
                        </p>

                        <p>
                            Philip Morris, in <a
                                    href="http://www.pmi.com/eng/media_center/Documents/PML submission to plain packaging post implementation review - March 2015.pdf">its
                                submission to the Australian Post-Implementation Review</a>, cited the surveys
                            from a number of Australian state governments and organizations.
                        </p>

                        <p class="p-states">
                            “. . . four of five states, Victoria, Queensland, Western Australia and South Australia
                            reported
                            increases in smoking prevalence after the implementation of plain packaging. Specifically,
                            smoking prevalence in South Australia increased from 16.7% to 19.4% between 2012 and 2013.
                            During the same period, smoking prevalence in Queensland and Western Australia went from
                            14.3%
                            to 15.8% and 12.7% to 13%, respectively.” [p. 9]
                        </p>

                        <p>
                            However, these state surveys use small sample sizes and, therefore, year on year, the
                            changes in
                            prevalence are not statistically significant. This issue was addressed in the PIR (see the
                            <b>Australia’s Post-Implementation Evidence</b> page on Tools and Resources).
                        </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <h3 class="fc-ref-mat-3 sub-title">
                            Relying on industry-funded, non-peer-reviewed studies
                        </h3>

                        <p>
                            The tobacco companies rely on academic studies both to criticize the supporting research
                            evidence and to analyze the prevalence and consumption data from Australia. It is important
                            to
                            note that almost all of these have been directly funded by the tobacco companies, none of
                            them
                            has been subject to peer review, and their authors were never provided access to tobacco
                            company
                            internal research or sales data to assist or verify their conclusions.
                        </p>

                        <p>
                            It is also important for government officials to recognize the experts that the industry
                            repeatedly use around the world and the criticisms that have been made of them. Reports by
                            the
                            following experts are considered below:
                        </p>

                        <p>
                            In relation to smoking prevalence and sales data from Australia -
                        </p>

                        <ul class="table-custom no-list-style">
                            <li>
                                1. Ashok Karl and Michael Wolf, University of Zurich (funded by BAT)
                            </li>

                            <li>
                                2. London Economics (funded by PMI)
                            </li>

                            <li>
                                3. Sinclair Davidson and Ashton de Silva,RMIT University (a member of the Institute of
                                Economic Affairs which receives funding from tobacco companies)
                            </li>
                        </ul>

                        <p>
                            In relation to the international research evidence on plain packaging:
                        </p>

                        <ul class="table-custom no-list-style">
                            <li>
                                4. Professor Kip Viscusi (funded by BAT)
                            </li>
                            <li>
                                5. Professor Mitchell (funded by BAT)
                            </li>
                            <li>
                                6. Professor Steinberg (funded by JTI)
                            </li>
                            <li>
                                7. Professor Devinney (funded by JTI)
                            </li>
                        </ul>

                        <h3 class="fc-ref-mat-3 sub-title">
                            Tobacco industry experts on smoking prevalence and sales data
                        </h3>

                        <p>
                            In its <a
                                    href="http://www.jti.com/files/6314/3325/7250/JTI_submission_to_plain_packaging_and_FCTC_5_3_consultation_in_Norway_final_English.pdf">response
                                to the Norwegian consultation JTI</a> stated:
                        </p>

                        <p class="p-states">
                            “Studies by the <b>Universities of Zurich and Saarland [by Kaul and Wolf]</b> have found
                            that
                            plain
                            packaging has had no effect on smoking prevalence, either among minors or
                            adults.<sup>1</sup>
                        </p>

                        <p class="p-states">
                            A study by <b>London Economics</b> found that: “the data does not demonstrate that there has
                            been a change in smoking prevalence following the introduction of plain packaging and larger
                            health warnings, despite an increase in the notice ability of the new health warnings”
                            <sup>2</sup>.
                        </p>

                        <p class="p-states">
                            Contrary to misleading claims by the tobacco control lobby, Australian government data
                            further
                            reinforces the fact that plain packaging has not had a positive impact. The overall decline
                            in
                            smoking prevalence between 2010 and 2013 is consistent with the continuation of the
                            pre-existing
                            trend, despite the introduction of plain packaging.” [pp. 11–12]
                        </p>

                        <p>
                            These two studies have been referred to extensively by all the tobacco companies, in
                            particular
                            those by professors Kaul and Wolf from the Universities of Zurich and Saarland. In their
                            <a href="http://www.bat.com/group/sites/uk__9d9kcy.nsf/vwPagesWebLive/DO9MSFD3/$FILE/medMD9MWB4B.pdf?openelement">response
                                to the 2014 UK consultation, BAT</a> relied on a Kaul and Wolf study to state:
                        </p>

                        <p class="p-states">
                            “The evidence to date from Australia shows that more than 18 months after its introduction,
                            Plain Packaging has not had any effect on smoking behaviours beneficial to public
                            health.<sup>3</sup>”
                        </p>

                        <p>
                            The Kaul and Wolf studies are relied on by BAT, JTI, PMI, and Imperial Tobacco in all their
                            consultation submissions.
                        </p>

                        <p>
                            These (and other industry-commissioned studies) claim that there was an existing downward
                            trend
                            in tobacco prevalence rates in Australia that would have continued even without plain
                            packaging
                            being introduced. A number of tobacco-control measures were introduced in Australia at a
                            similar
                            time to plain packaging, such as larger graphic health warnings and increases in excise tax.
                            The
                            analysis from these studies is that plain packaging did not increase the predicted trend in
                            the
                            rate of decrease in prevalence and, therefore, cannot be shown to have had any impact.
                        </p>

                        <p>
                            <b>Sinclair Davidson</b> of RMIT University in Australia has been vocal in claiming that
                            consumption
                            rates and sales have not fallen. Philip Morris relies on his reports to claim that there is
                            no
                            evidence to show that plain packaging has had any impact on the declines that have occurred.
                        </p>

                        <p class="p-states">
                            “Researchers from RMIT University in Australia who analyzed this data could find no evidence
                            of
                            a plain packaging effect. When holding price constant and controlling for long-term declines
                            in
                            spending on tobacco, the researchers found: ‘Any evidence to suggest that the plain
                            packaging
                            policy has reduced household expenditure on tobacco is simply lacking.’”<sup>4</sup>
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            Tobacco industry experts used to analyze the research evidence
                        </h3>

                        <p>
                            BAT has consistently relied on reports by <b>Professor Kip Viscusi.</b> Following his
                            critical
                            review of the studies supporting the conclusion that plain packaging increases the
                            effectiveness
                            of health warnings, Prof.Viscusi claims there is:
                        </p>

                        <p class="p-states">
                            no evidence from these studies that plain packaging will increase the effectiveness of
                            warnings
                            … The public is overwhelmingly aware of the dangers of smoking. In this environment, there
                            is no
                            beneficial role of plain packs for increasing the effectiveness of warnings or discouraging
                            smoking initiation. <sup>5</sup>
                        </p>

                        <p>
                            A report by <b>Professor Mitchell</b> of the University of Virginia is also used by
                            different
                            tobacco companies. His report concludes that:
                        </p>

                        <p class="p-states">
                            “Factors associated with the initiation, continuation, and cessation of underage smoking
                            have been the subject of a large amount of empirical research. Two propositions relevant to
                            the question of the effects of standardized packaging regulations on underage smoking are
                            apparent from this body of research: (a) many variables are now known to be associated with
                            underage decisions to initiate and continue smoking; (b) features of cigarette packaging
                            have been relatively little studied as a cause or correlate of underage smoking, with no
                            published field studies demonstrating an association between standardized cigarette
                            packaging characteristics and reduced smoking initiation or continuation by underage
                            persons.”<sup>6</sup>
                        </p>

                        <p>
                            The reports by Mitchell and Viscusi were annexed to the BAT submission to the UK 2014
                            consultation.
                        </p>

                        <p>
                            JTI relies on a report by <b>Professor Steinberg</b> from 2010 <sup>7</sup> that analyzes
                            the
                            research
                            evidence
                            on plain packaging and his letter to the Chantler Review process in 2013, which stated that
                            he was aware of:
                        </p>

                        <p class="p-states">
                            no scientific evidence that suggests, nor would [his] understanding of the current research
                            on
                            adolescent decision-making suggest, that cigarette packaging is relevant to adolescents’
                            decisions to experiment with or continue smoking.
                        </p>

                        <p>
                            JTI also commissioned reports by <b>Professor Devinney</b> who has undertaken ‘in-depth
                            analysis
                            of a large number of publicly available consumer studies’ on plain packaging. His 2014
                            report
                            was submitted by JTI to the Chantler review and concluded that:
                        </p>

                        <p class="p-states">
                            The current evidence base is insufficient to justify the conclusion that plain packaging is
                            likely to have any impact on actual smoking behaviours. <sup>8</sup>
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            Criticisms and court judgments on the industry reports
                        </h3>

                        <p>
                            The studies by <b>Kaul and Wolf</b> (which did not receive a peer-review scrutiny before
                            publication) have been the subject of significant academic criticism. A paper by Anthony
                            Laverty and others commented on:
                        </p>

                        <p class="p-states">
                            …the low statistical significance of the analytical methods used and the assumption that
                            Standardised Packaging should have an immediate large impact on smoking prevalence
                        </p>
                        <p>
                            And concluded
                        </p>
                        <p class="p-states">
                            “Both of [the Kaul et al papers] are flawed in conception as well as design but have
                            nonetheless been widely publicised as cautionary tales against standardised pack
                            legislation.”
                        </p>

                        <p>
                            A study by Diethelm and Farley sought to assess the effect of plain packaging on smoking
                            prevalence among adults in Australia based on the same data as Kaul and Wolf but using a
                            more appropriate statistical method and accounting for the potential effect of other key
                            tobacco-control measures. They concluded that:
                        </p>

                        <p class="p-states">
                            A significant decline in smoking prevalence in Australia followed the introduction of plain
                            packaging, after adjusting for the impact of other tobacco control measures. This conclusion
                            is
                            in marked contrast to that of the industry-funded analysis. <sup>10</sup>
                        </p>

                        <p>
                            Cancer Council Victoria have also produced critiques of Karl and Wolf’s reports
                            <sup>11</sup>;
                            the London Economics report <sup>12</sup>; and the Davidson and de Silva report.
                            <sup>13</sup>
                        </p>

                        <p>
                            (See also <b>Australia’s Post-Implementation Evidence</b> for the
                            Australian government’s information on consumption rates in Australia since implementation.)
                        </p>
                        <h3 class="fc-ref-mat-3 sub-title">
                            Evidence in the High Court challenge to the UK regulations
                        </h3>
                        <p>
                            Reports by <b>Viscusi</b>, <b>Mitchel</b>, <b>Devinney</b> and <b>Steinberg</b>
                            were used as expert evidence by the four tobacco companies in their <a
                                    href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">legal
                                challenge to the
                                UK
                                plain packaging regulations</a>.<b>The judge was highly critical of the evidence put
                                forward by
                                the
                                tobacco companies</b> in general stating that they
                            <i>“not accord with internationally recognised best practice”</i>
                            or international norms. The judge also highlighted flaws in the reports of specific experts
                            including Viscusi [at paragraph 385], Mitchell [at paragraph 384], Devinney at [at paragraph
                            388] and Steinberg [at paragraph 353]. <sup>14</sup>
                        </p>

                        <p>
                            The criticisms included that:
                        </p>

                        <ul class="custom">
                            <li>
                                <b>Viscusi, Mitchell, Devinney and Steinberg </b> have never had a peer reviewed study
                                published in relation to tobacco use and non of their reports used in the court
                                proceedings
                                were peer reviewed.
                            </li>

                            <li>
                                None of the above mentioned reports refer even once to the role of addiction in
                                perceptions
                                of risk.
                            </li>

                            <li>
                                None of them refer to any internal tobacco company research on tobacco marketing and
                                packaging.
                            </li>

                            <li>
                                These experts entirely ignored or airily dismissed volumes of relevant research
                                literature.
                            </li>

                            <li>
                                In their respective reviews of the literature, none of these experts accepted a single
                                research study as relevant and reliable.
                            </li>

                            <li>
                                Viscusi was highly selective in the evidence he used, ignoring contrary evidence even
                                within
                                the same studies he relied upon.
                            </li>

                            <li>
                                They gave views and opinions that were frequently unverifiable and made without a
                                single citation or reference in support of them. Where references were made, they were
                                to non-peer-reviewed studies.
                            </li>
                        </ul>

                        <p>
                            Similar criticisms can be made of all the academic experts relied on by the tobacco
                            industry.
                            More detail on the High Court legal challenge against the UK regulations is provided in
                            <b>Legal issues </b> and <b>case summaries.</b>

                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The Counter Arguments
                        </h3>

                        <p>
                            The <b>Evidence</b> pages of the Tools and Resources contain detailed information about the
                            evidence that supports the introduction of plain packaging of tobacco products.
                        </p>

                        <ul class="custom">
                            <li>
                                <b>
                                    There have been five independent comprehensive evidence reviews, and there is now
                                    over four years post-implementation data from Australia — all of which point towards
                                    the measure being effective.
                                </b>
                                The evidence reviews considered over seventy peer-reviewed scientific studies.
                            </li>

                            <li>
                                <b>
                                    The tobacco companies have not disclosed any of their own consumer research or
                                    internal material
                                </b>
                                into plain packaging and have failed to effectively deny if they have undertaken any
                                such research. <sup>15</sup> “To date, no empirical studies conducted by, or on behalf
                                of,
                                tobacco
                                companies have been published.”
                                <i>
                                    “To date, no empirical studies conducted by, or on behalf of, tobacco companies have
                                    been published.”<sup>16</sup>
                                </i>
                            </li>

                            <li>
                                <b>
                                    None of the studies used by the tobacco industry to support their arguments
                                    have been subject to peer review.
                                </b>
                                The evidence the tobacco companies submitted to the UK’s 2012 consultation on
                                standardized packaging has been analyzed in a study by the University of Bath, which
                                found that they misrepresented the supporting evidence base for by misquoting and using
                                a “mimicked” form of scientific critique. <sup>17</sup>
                                <br>
                                <br>
                                Researchers also analyzed 77 items of evidence submitted by four tobacco companies
                                intended to prove that standardized packaging wouldn’t work. Their analysis found that
                                only seventeen out of the 77 items actually addressed the impact of standardized
                                packaging. Of these seventeen, fourteen were directly industry-funded, and none had been
                                published in peer-reviewed journals.<sup>18</sup>
                            </li>

                            <li>
                                <b>
                                    The Chantler Review from the UK stated that all the evidence “points in a single
                                    direction, and I am not aware of any convincing evidence pointing the other way.”
                                </b> <sup>19</sup>
                            </li>

                            <li>
                                <b>The official statistical evidence from Australia shows an increase in the rate of
                                    decline of both smoking prevalence and tobacco consumption after implementation.
                                </b>
                                Implementation Review attributes a 0.55 percentage point reduction in smoking rates to
                                plain packaging, equivalent to 118,000 fewer smokers over the 34 months after
                                implementation.<sup>20</sup>
                            </li>

                            <li>
                                The High Court challenge against the UK Regulations was the first (and as yet only)
                                legal challenge that addressed the evidence on both sides in detail (see 4.2.1). The
                                400-page judgment of Mr Justice Green goes to considerable length to assess this
                                evidence.
                                <sup>21</sup>
                            </li>
                        </ul>

                        <p>
                            <b>
                                The judge’s conclusion was that the “qualitative evidence relied upon by the
                                [Government] is cogent, substantial and overwhelmingly one-directional in its
                                conclusion.”
                            </b> [para 492].
                        </p>

                        <p>
                            He was then scathing in his criticism of the evidence put forward by the tobacco companies
                            because it was not peer reviewed, either ignored or airily dismissed the worldwide research
                            and literature base, and was frequently unverifiable. He made detailed critiques of each of
                            the
                            <b>expert reports put forward by the tobacco companies and concluded that this “body of
                                expert evidence does not accord with internationally recognised best practice.” </b>
                            [para 374].
                        </p>

                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>
                        <p><sup>1</sup>The (Possible) Effect of Plain Packaging on the Smoking Prevalence of Minors
                            in Australia: A Trend Analysis,” University of Zurich, Department of Economics, Working
                            Paper No. 149, May 2014. Available from:
                            <a href="http://www.papers.ssrn.com/sol3/papers.cfm?abstract_id=2414430">http://www.papers.ssrn.com/sol3/papers.cfm?abstract_id=2414430</a>,and
                            “The (Possible) Effect of Plain Packaging on Smoking Prevalence in Australia: A Trend
                            Analysis,”Working Paper No. 165, June 2014. Available from:
                            <a href="http://www.papers.ssrn.com/sol3/papers.cfm?abstract_id=2460704">http://www.papers.ssrn.com/sol3/papers.cfm?abstract_id=2460704.</a>
                        </p>

                        <p><sup>2</sup> See “An analysis of smoking prevalence in Australia,” London Economics,
                            November 2013, page 1 (for PMI). Available from:
                            <a href="http://londoneconomics.co.uk/wp-content/uploads/2013/11/London-Economics-Report-Australian-Prevalence-Final-Report-25-11-2013.pdf">http://londoneconomics.co.uk/wp-content/uploads/2013/11/London-Economics-Report-Australian-Prevalence-Final-Report-25-11-2013.pdf</a>.
                        </p>
                        <p><sup>3</sup> The BAT submission refers to the Kaul and Wolf studies and uses a further
                            non-peer-reviewed study by Stephen Gibson, an economist, consultant at SLG Economics
                            Ltd, which essentially mirrors the analysis by Kaul and Wolf. </p>
                        <p><sup>4</sup>
                            S. Davidson and A. de Silva, “The Plain Truth about Plain Packaging: An Econometric
                            Analysis of the Australian 2011 Tobacco Plain Packaging Act,” Australia National
                            University Press, November 2014, available from:
                            <a href="http://press.anu.edu.au/apps/bookworm/view/Volume+21,+Number+1,+2014/11311/davidson.xhtml">http://press.anu.edu.au/apps/bookworm/view/Volume+21,+Number+1,+2014/11311/davidson.xhtml</a>.
                        </p>
                        <p><sup>5</sup>
                            An Assessmentofthe Likely Effectof Plain Packagingon Warnings Efficacy June 5, 2015.
                            Available from:
                            <a href="https://www.regjeringen.no/no/dokument/dep/hod/hoeringer/hoeringsdok/2015/horing-av-forslag-til-innforing-av-standardiserte-tobakkspakninger-og-gjennomforing-av-tobakkskonvensjonen-artikkel-5.3-i-norge/Download/?vedleggId=b84be9bd-0c56-4f97-a995-646f18bf768f">https://www.regjeringen.no/no/dokument/dep/hod/hoeringer/hoeringsdok/2015/horing-av-forslag-til-innforing-av-standardiserte-tobakkspakninger-og-gjennomforing-av-tobakkskonvensjonen-artikkel-5.3-i-norge/Download/?vedleggId=b84be9bd-0c56-4f97-a995-646f18bf768f</a>.
                        </p>

                        <p><sup>6</sup> G. Mitchell, “A Psychological Analysisofthe Potential Impactof Standardized
                            Cigarette Packagingon Underage Smoking. Available from:<a
                                    href="http://www.academia.edu/8883995/Plain_Packaging_and_the_Interpretation_of_the_TRIPS_Agreemen">http://www.academia.edu/8883995/Plain_Packaging_and_the_Interpretation_of_the_TRIPS_Agreemen</a>t.
                        </p>
                        <p><sup>7</sup>Letter from L Steinberg to Chantler Review, January 2013. Available from:<a
                                    href="http://www.kcl.ac.uk/health/Packaging-review/packaging-review-docs/submittedevidence/Steinberg,-Professor-L-Submission.doc">http://www.kcl.ac.uk/health/Packaging-review/packaging-review-docs/submittedevidence/Steinberg,-Professor-L-Submission.doc</a>.
                        </p>
                        <p><sup>8</sup>
                            T. M. Devinney, “Analysis of Consumer Research Evidence on the Impact of Plain Packaging
                            for Tobacco Products” (Updated to 2014). January 2014. Available from:
                            <a href="http://webarchive.nationalarchives.gov.uk/20140911094224/">http://webarchive.nationalarchives.gov.uk/20140911094224</a>
                            <br/>
                            <a
                                    href="http://www.kcl.ac.uk/health/Packaging-review/packaging-review-docs/submittedevidence/Devinney,-Professor-Timothy-Submission-(2).pdf">http://www.kcl.ac.uk/health/Packaging-review/packaging-review-docs/submittedevidence/Devinney,-Professor-Timothy-Submission-(2).pdf</a>.
                        </p>
                        <p><sup>9</sup> A. A.Laverty, P. Diethelm, N. S.Hopkinson, et al. “Use and Abuse of
                            Statistics in Tobacco Industry-Funded Research on Standardised Packaging.”Tobacco
                            Control 2015;24:422–424. Available from:
                            <a href="http://tobaccocontrol.bmj.com/content/24/5/422.long">http://tobaccocontrol.bmj.com/content/24/5/422.long</a>.
                        </p>
                        <p><sup>10</sup>
                            P. Diethelm et al. “Refuting Tobacco Industry Funded Research. Tobacco Prevention
                            Cessation, November 6, 2015. Available from:<a
                                    href="http://www.tobaccopreventioncessation.com/Refuting-tobacco-industry-funded-research-empirical-data-shows-decline-in-smoking-prevalence-following-introduction-of-plain-packaging-in-Australia,60650,0,2.html">http://www.tobaccopreventioncessation.com/Refuting-tobacco-industry-funded-research-empirical-data-shows-decline-in-smoking-prevalence-following-introduction-of-plain-packaging-in-Australia,60650,0,2.html</a>
                        </p>
                        <p><sup>11</sup> Available from: <a
                                    href="http://www.cancervic.org.au/downloads/tobacco_control/2013/Cancer_Council_Victoria_comments_on_Kaul_Wolf.pdf">http://www.cancervic.org.au/downloads/tobacco_control/2013/Cancer_Council_Victoria_comments_on_Kaul_Wolf.pdf</a>.
                        </p>
                        <p><sup>12</sup>
                            Available from: <a
                                    href="http://www.cancervic.org.au/downloads/tobacco_control/2013/Critique_by_Cancer_Council_Victoria_on_report_by_PMI_26.11.13.pdf">http://www.cancervic.org.au/downloads/tobacco_control/2013/Critique_by_Cancer_Council_Victoria_on_report_by_PMI_26.11.13.pdf</a>.
                        </p>
                        <p><sup>13</sup> Available from:
                            <a href="http://www.cancervic.org.au/downloads/plainfacts/Davidson_working_paper_comments_3_June_2016.pdf">http://www.cancervic.org.au/downloads/plainfacts/Davidson_working_paper_comments_3_June_2016.pdf</a>.
                        </p>
                        <p><sup>14</sup> The full judgment is available from:
                            <a href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf</a>
                        </p>
                        <p><sup>15</sup> This was queried by Mr Justice Green, the judge presiding over the UK High
                            Court challenge to the Standardised Packaging of Tobacco. JTI was the only tobacco
                            company to respond, and its response in denying research had been conducted was
                            carefully limited to a very narrow set of parameters. </p>
                        <p><sup>16</sup> David Hammond, “Standardised Packaging of Tobacco Products Evidence
                            Review,” March 2014, p. 23. Available from:
                            <a href="http://health.gov.ie/wp-content/uploads/2014/06/2014-Ireland-Plain-Pack-Main-Report-Final-Report-July-26.pdf">http://health.gov.ie/wp-content/uploads/2014/06/2014-Ireland-Plain-Pack-Main-Report-Final-Report-July-26.pdf</a>.
                        </p>
                        <p><sup>17</sup> Selda Ulucanlar.“Representation and Misrepresentation of Scientific
                            Evidence in Contemporary Tobacco Regulation: A Review of Tobacco Industry Submissions to
                            the UK Government Consultation on Standardised Packaging.” Available from:
                            <a href="http://journals.plos.org/plosmedicine/article?id=10.1371/journal.pmed.1001629">http://journals.plos.org/plosmedicine/article?id=10.1371/journal.pmed.1001629</a>.
                        </p>
                        <p><sup>18</sup> A Gilmore. “Standardised Tobacco Packaging Myths.” Available here:<a
                                    href="http://www.bath.ac.uk/research/case-studies/standardised-tobacco-packaging-myths">http://www.bath.ac.uk/research/case-studies/standardised-tobacco-packaging-myths</a>.
                        </p>
                        <p><sup>19</sup> At paragraph 6.2 Available from:<a
                                    href="http://www.kcl.ac.uk/health/10035-TSO-2901853-Chantler-Review-ACCESSIBLE.PDF">http://www.kcl.ac.uk/health/10035-TSO-2901853-Chantler-Review-ACCESSIBLE.PDF</a>.
                        </p>
                        <p><sup>20</sup> The Post-Implementation Review is available from:<a
                                    href="https://ris.govspace.gov.au/2016/02/26/tobacco-plain-packaging/">https://ris.govspace.gov.au/2016/02/26/tobacco-plain-packaging/</a>.
                        </p>
                        <p><sup>21</sup> R (British American Tobacco & Ors) v. Secretary of State for Health [2016]
                            EWHC 1169 (Admin). Available from:
                            <a href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf</a>
                            paragraphs 592 and 374.
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            2. Increases illicit tobacco
                        </h3>

                        <p>
                            The tobacco industry relies heavily on its claim that plain packaging will increase the
                            illicit trade in tobacco. The argument is one of the main issues raised in its media
                            campaigns, in its submissions to government, and in its legal arguments before the courts.
                            However, this claim lacks both logic and evidence. It is made in three ways:
                        </p>

                        <ol>
                            <li>
                                Plain packs will be easier and cheaper to counterfeit than the existing complex branded
                                packs;
                            </li>

                            <li>
                                Smokers prefer branded packs and are more like to purchase illicit tobacco that has
                                branded packaging if legal tobacco is in plain packs; and
                            </li>

                            <li>
                                Illicit trade in tobacco has increased in Australia after the implementation of plain
                                packaging.
                            </li>
                        </ol>

                        <p>
                            The tobacco industry commissions statistical data on the illicit trade in tobacco for many
                            countries, often using the flawed “empty pack” survey method. In each country that has
                            considered plain packaging, the tobacco companies promote media articles raising fears about
                            illicit tobacco. Leaked internal documents from Philip Morris show this was a central pillar
                            of their strategy to oppose the policy<sup>1</sup>
                            Research shows that the tobacco industry uses inflated estimates of illicit
                            trade.<sup>2</sup>
                        </p>

                        <img height="350px" class="img-responsive center-block"
                             src="<?php echo $base_url; ?>img/ref-j/Newspaper_coverage.jpg">
                        <br>&nbsp;<br>
                        <p>
                            For example, in the UK, research has shown that in the two years before plain packaging
                            proposals were announced, there were no media articles about the illicit trade in tobacco.
                            In the two years after plain packaging was first proposed, 52 stories appeared in the media
                            about rising rates of illicit tobacco, all of which cited tobacco industry data rather than
                            the official government statistics, which showed the rates were declining. <sup>3</sup>
                        </p>

                        <p>
                            A similar situation occurred in Slovenia with many news articles raising concerns about
                            smuggled cigarettes appearing during the period when the government was considering plain
                            packaging.
                            <sup>4</sup>
                        </p>

                        <p>
                            The industry then links these concerns about the illicit trade to argue against plain
                            packaging laws. In some countries, tobacco companies have even produced short promotional
                            films <sup>5</sup>
                            that raise fears about crime and terrorism, which they say will result from plain packaging.<sup>6</sup>
                        </p>
                        <div class="row graph-img">
                            <p>
                                These two very similar news articles are from Canada in 2016 and the UK in 2014. The
                                myth
                                that plain packaging of tobacco will increase illicit trade is promoted strongly by
                                the
                                tobacco industry, with no evidence to support the argument.
                            </p>
                            <div class="col-md-4 col-md-offset-2">
                                <img width="400px" class="img-responsive"
                                     src="<?php echo $base_url; ?>img/ref-j/sun article.png"/>
                            </div>
                            <div class="col-md-4">
                                <img width="400px" src="<?php echo $base_url; ?>img/ref-j/sun article 2.png"/>
                            </div>
                        </div>
                        <br>&nbsp;<br>
                        <p>
                            <a href="http://www.jti.com/files/2014/7281/6956/JTI_response_to_Health_Canada_Consultation_on_Plain_and_Standardized_Packaging_for_Tobacco_Products._31_August_2016.pdf">JTI’s
                                response</a> to the most recent consultation on plain packaging in Canada <sup>7</sup>
                            provides a
                            typical example of the industry arguments. It stated:
                        </p>

                        <p class="p-states">
                            “In a plain pack environment, illegal producers will benefit at the expense of legitimate
                            industry. They would be able to replicate easily plain packs and continue to supply the
                            Canadian market with illegal branded packs and clear plastic baggies of cigarettes without
                            health warnings. “ [p. 3]
                        </p>

                        <p>
                            JTI’s submission relied only on industry funded, discredited data about the extent of
                            contraband tobacco in Canada. It ignored the independent research and official data that
                            shows the illicit market has decreased in recent years. <sup>8</sup>
                        </p>

                        <p>
                            JTI also asserted that plain packs will be easier to counterfeit [paragraph 148]. The only
                            research cited is a report from 2012, commissioned by JTI, by Zimmerman and
                            Chaudhary,<sup>9</sup>
                            which
                            has been the subject of academic criticism <sup>10</sup>. There is no independent
                            peer-reviewed
                            research
                            to back up JTI’s argument.
                        </p>

                        <p>
                            JTI also claims that:
                        </p>

                        <p class="p-states">
                            “The level of illegal tobacco consumption in Australia has grown more than 20% since plain
                            packaging was introduced.” [paragraph 149]
                        </p>

                        <p>
                            To support this assertion JTI relied solely on data from a report by KPMG. That study uses
                            an “empty pack” survey, which has been shown to have significant flaws in its methodology
                            . <sup>12</sup>
                            Even that KPMG survey has found no counterfeit plain packs over four years. KPMG has written
                            to the UK Public Health Minister to state that the report has been “misrepresented by
                            others, without our consent, to suggest it supports the contention that plain paper
                            packaging could lead of itself to an increase in tobacco smuggling and duty avoidance.”
                            <sup>13</sup>
                            JTI
                            ignored the official statistics and research that demonstrates the levels of illicit trade
                            has remained constant (see below).
                        </p>

                        <div class="row graph-img">
                            <img width="400px" class="img-responsive center-block"
                                 src="<?php echo $base_url; ?>img/ref-j/how do you spot JTI.png"/>
                            <br>&nbsp;<br>
                            <p>
                                These two very similar news articles are from Canada in 2016 and the UK in 2014. The
                                myth
                                that plain packaging of tobacco will increase illicit trade is promoted strongly by
                                the
                                tobacco industry, with no evidence to support the argument.
                            </p>
                        </div>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The Counter Arguments
                        </h3>

                        <ul class="custom">
                            <li>
                                <b>Packaging features used to combat the illicit trade do not change under plain or
                                    generic packaging legislation.</b> Enforcement procedures rely on covert (invisible)
                                codes
                                and tax stamps on genuine packs; neither of these is changed by plain packaging. In
                                addition, the legislation requires colorful picture health warnings so plain packs are
                                not literally “plain” and are no easier to counterfeit.
                            </li>

                            <li>
                                <b>
                                    The demand for illicit tobacco is related to price and availability but not to
                                    packaging. <sup>14</sup>
                                </b>
                            </li>

                            <li>
                                <b>Keeping promotional branding and trademarks on packs does not make counterfeiting
                                    more
                                    difficult.</b> Counterfeiters are able to copy the existing branded packaging
                                easily. Even
                                Philip Morris has stated that, <i>“[Cigarette packs] are easily counterfeited, despite
                                    the
                                    inclusion of innovative holograms, special inks and elaborate design details.
                                    Evidence
                                    shows that counterfeiters can make copies of even the most sophisticated paper
                                    stamps in
                                    three weeks.”</i> <sup>15</sup> Because plain packs retain the picture health
                                warning, tax
                                stamps, and
                                covert markings, there is little difference in how difficult they are to counterfeit.
                            </li>

                            <li>
                                <b>
                                    The tobacco industry has for years been complicit in the illicit market by
                                    oversupplying low tax regimes. <sup>16</sup>
                                </b>
                                The four major international tobacco companies have paid billions of dollars to settle
                                cigarette smuggling litigation in Europe and Canada. Evidence of the direct and indirect
                                involvement of the tobacco industry in this large-scale fraud is well documented,
                                through the industry’s internal documents, their own admissions, and court judgments.
                                <sup>17</sup>
                                The industry cannot be trusted to provide reliable data or solutions.
                            </li>

                            <li>
                                <b>Illicit trade has not increased in Australia since implementation of plain packaging
                                    in 2012.</b> Extensive national surveys have shown the illicit trade rate remains at
                                around
                                3%. <sup>18</sup> The tobacco industry has tried to rely on a report by KPMG that the
                                companies
                                say
                                indicates illicit trade has increased. However, KPMG has written to governments to say
                                that the report has been “misrepresented by others, without our consent, to suggest it
                                supports the contention that plain paper packaging could lead of itself to an increase
                                in tobacco smuggling and duty avoidance.” <sup>19</sup>
                            </li>

                            <li>
                                <b>No counterfeit “plain packs” have yet been identified in Australia.</b>
                                Counterfeiters
                                have not sought to copy the new unbranded packs — so far, no counterfeit plain packs
                                have been found in Australia. Even the industry-funded KPMG empty-pack survey found no
                                counterfeit plain packs.
                            </li>

                            <li>
                                <b>Plain packaging of legitimate products can make illicit tobacco easier to
                                    identify.</b> If
                                illicit products all have branding but legal duty-paid tobacco is in plain packaging,
                                identifying illicit tobacco becomes easier because virtually all illicit tobacco has
                                attractive branding and logos.
                            </li>

                            <li>
                                <b>In the UK High Court Case, the tobacco companies submitted no expert evidence, data,
                                    or analysis.</b> Despite trying to argue that plain packaging would increase
                                illicit trade in
                                the UK the tobacco companies merely asserted this claim but provided no evidence at all
                                tosupport their arguments. <sup>20</sup>
                            </li>

                            <li>
                                <b>A study by the UK Customs and Revenue stated</b> there was <i>“no evidence to
                                    suggest the
                                    introduction of standardised packaging will have a significant impact on the overall
                                    size of the illicit market.”</i> <sup>21</sup>
                            </li>

                            <li>
                                <b>The tobacco industry has exaggerated the data and manipulated the press</b> in
                                relation to
                                illicit trade as demonstrated by independent research. <sup>22</sup>
                            </li>

                            <li>
                                <b>Highlighting the dangers of counterfeit cigarettes communicates a message that
                                    genuine
                                    cigarettes are normal and safe.</b> Both genuine and counterfeit cigarettes are
                                extremely
                                toxic products. There are no safe cigarettes, and there is no safe level of smoking.
                            </li>
                        </ul>

                        <p>
                            <b>Cancer Council Victoria</b> has produced a detailed fact sheet on what has happened to
                            the use
                            of illicit tobacco since the introduction of plain packaging in Australia. Available <a
                                    href="https://www.cancervic.org
                                    .au/downloads/plainfacts/Facts_sheets/Facts_Sheet_no_3_Illicit_tobacco31May2016
                                    .pdf">here</a>.<sup>23</sup>
                        </p>

                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>
                        <p><sup>1</sup> Available from the tobaccotactics website here: <a
                                    href="http://www.tobaccotactics.org/index.php?title=PMI%E2%80%99s_%E2%80%9CIllicit_Trade%E2%80%9D_Anti-Plain_Packaging_Campaign">http://www.tobaccotactics.org/index.php?title=PMI%E2%80%99s_%E2%80%9CIllicit_Trade%E2%80%9D_Anti-Plain_Packaging_Campaign</a>.
                        </p>
                        <p><sup>2</sup>
                            M. Stoklosa. “Is the Illicit Cigarette Market Really Growing? The Tobacco Industry's
                            Misleading Math Trick.” Tobacco Control 2016;25:360–361. Available from:
                            <a href="http://tobaccocontrol.bmj.com/content/25/3/360">http://tobaccocontrol.bmj.com/content/25/3/360</a>.
                        </p>

                        <p><sup>3</sup> A. Rowell, K. Evans-Reeves, A. B. Gilmore.“Tobacco Industry Manipulation of Data
                            on and Press Coverage of the Illicit Tobacco Trade in the UK.” Tobacco Control
                            2014;23:e35–e43; Also see:
                            <a href="https://www.theguardian.com/politics/2014/mar/30/tobacco-cigarette-smuggling-scare-plain-packs">https://www.theguardian.com/politics/2014/mar/30/tobacco-cigarette-smuggling-scare-plain-packs</a>.
                        </p>
                        <p><sup>4</sup> Examples of online media articles in Slovenian that raise concerns about
                            smuggled tobacco and then link it to plain packaging include:
                            <a href="http://moski.hudo.com/aktualno/zakaj-je-tihotapljenje-v-sloveniji-resen-problem/">http://moski.hudo.com/aktualno/zakaj-je-tihotapljenje-v-sloveniji-resen-problem/</a>
                            ; and
                            <a href="https://www.sta.si/2250877/iz-tobacne-industrije-opozorila-pred-porastom-crnega-trga-ob-uvedbi-nekaterih-protitobacnih-ukrepov">https://www.sta.si/2250877/iz-tobacne-industrije-opozorila-pred-porastom-crnega-trga-ob-uvedbi-nekaterih-protitobacnih-ukrepov</a>.
                        </p>
                        <p><sup>5</sup> One such video is available from: <a
                                    href="https://www.youtube.com/watch?v=1NSgPzYJzcs&t=12s">https://www.youtube.com/watch?v=1NSgPzYJzcs&t=12s</a>.
                        </p>
                        <p><sup>6</sup> These media articles were accessed on March 2, 2017 at: <a
                                    href="https://www.thesun.co.uk/archives/politics/863091/plain-packaging-will-lead-to-explosion-in-tobacco-smuggling/">https://www.thesun.co.uk/archives/politics/863091/plain-packaging-will-lead-to-explosion-in-tobacco-smuggling/</a>
                            and
                            <a href="http://www.torontosun.com/2016/05/11/plain-tobacco-packing-a-boon-to-criminals">http://www.torontosun.com/2016/05/11/plain-tobacco-packing-a-boon-to-criminals</a>.
                        </p>
                        <p><sup>7</sup> Available from:
                            <a href="http://www.jti.com/files/2014/7281/6956/JTI_response_to_Health_Canada_Consultation_on_Plain_and_Standardized_Packaging_for_Tobacco_Products._31_August_2016.pdf">http://www.jti.com/files/2014/7281/6956/JTI_response_to_Health_Canada_Consultation_on_Plain_and_Standardized_Packaging_for_Tobacco_Products._31_August_2016.pdf</a>.
                        </p>
                        <p><sup>8</sup> G. E. Guindon, R. BurkhalterK. S. Brown.“Levels and Trends in Cigarette
                            Contraband in Canada.” Tobacco Control Published Online First: September 6, 2016. doi:
                            10.1136/tobaccocontrol-2016-052962 </p>
                        <p><sup>9</sup> P. Chaudhry ,A. Zimmerman. The Impact of Plain Packaging on the Illicit Trade in
                            Tobacco Products. 2012. Available from:
                            <a href="http://www.jti.com/files/5113/4150/5828/Impact_on_illicit_trade.pdf">http://www.jti.com/files/5113/4150/5828/Impact_on_illicit_trade.pdf</a>
                            (accessed February 22,
                            2017).</p>
                        <p><sup>10</sup> K. A. Evans-Reeves, J. L. Hatchard ,A. B. Gilmore.“It Will Harm Business and
                            Increase Illicit Trade”: an evaluation of the relevance, quality and transparency of
                            evidence submitted by transnational tobacco companies to the UK consultation on standardised
                            packaging 2012 Tobacco Control Published Online First: December 3, 2014. doi:
                            10.1136/tobaccocontrol-2014-051930.</p>
                        <p><sup>11</sup> KPMG Illicit Trade in Tobacco 2015 Full Year Report.Available from:
                            <a href="https://home.kpmg.com/content/dam/kpmg/pdf/2016/04/australia-illict-tobacco-2015.pdf">https://home.kpmg.com/content/dam/kpmg/pdf/2016/04/australia-illict-tobacco-2015.pdf</a>.
                        </p>
                        <p><sup>12</sup> “Quit Victoria.” Analysis of KPMG LLP report on use of illicit tobacco in
                            Australia 2013 Full year report. 2014. Available
                            from:<a href="https://www.cancervic.org.au/downloads/plainfacts/AnalyKPMGFull_year_2013.pdf">https://www.cancervic.org.au/downloads/plainfacts/AnalyKPMGFull_year_2013.pdf</a>
                            (accessed
                            February 22, 2017).</p>
                        <p><sup>13</sup> See <a
                                    href="https://www.theguardian.com/society/2016/may/22/big-tobacco-final-fight-cigarette-branding-uk">https://www.theguardian.com/society/2016/may/22/big-tobacco-final-fight-cigarette-branding-uk</a>.
                        </p>
                        <p><sup>14</sup> C. Moodie ,G. Hastings, L. Joossens. “Young Adult Smokers’ Perceptions of
                            Illicit Tobacco and the Possible Impact of Plain Packaging on Illicit Tobacco Purchasing
                            Behaviour,”European Journal of Public Health, Advance Access, March26, 2011.</p>
                        <p><sup>15</sup> Philip Morris International, Codentify, Brochure, 2012. Available from:
                            <a href="http://www.pmi.com/eng/documents/Codentify_E_Brochure_English.pdf">http://www.pmi.com/eng/documents/Codentify_E_Brochure_English.pdf</a>.
                        </p>
                        <p><sup>16</sup> See <a
                                    href="https://theconversation.com/tobacco-industry-rallies-against-illicit-trade-but-have-we-forgotten-its-complicity-38760">https://theconversation.com/tobacco-industry-rallies-against-illicit-trade-but-have-we-forgotten-its-complicity-38760</a>.
                        </p>
                        <p><sup>17</sup> See report by L.Joosens.“Smugglingthe Tobacco Industryand Plain Packs.”
                            Available from::
                            <a href="http://www.cancerresearchuk.org/prod_consump/groups/cr_common/@nre/@pol/documents/generalcontent/smuggling_fullreport.pdf">http://www.cancerresearchuk.org/prod_consump/groups/cr_common/@nre/@pol/documents/generalcontent/smuggling_fullreport.pdf</a>.
                        </p>
                        <p><sup>18</sup> M. Scollo, M. Zacher, K. Coomber, et al. “Use of Illicit Tobacco Following
                            Introduction of Standardised Packaging of Tobacco Products in Australia: Results from a
                            National Cross-Sectional Survey.” Tobacco Control 2015;24:ii76–ii81. Available
                            from:<a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii76.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii76.full</a>.
                        </p>
                        <p><sup>19</sup> See <a
                                    href="https://www.theguardian.com/society/2016/may/22/big-tobacco-final-fight-cigarette-branding-uk">https://www.theguardian.com/society/2016/may/22/big-tobacco-final-fight-cigarette-branding-uk</a>.
                        </p>
                        <p><sup>20</sup> R (British American Tobacco &Ors) v. Secretary of State for Health [2016] EWHC
                            1169 (Admin). Paragraphs 609, 669 and 996.</p>
                        <p><sup>21</sup> Available from: <a
                                    href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/403495/HMRC_impact_report.pdf">https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/403495/HMRC_impact_report.pdf</a>.
                            A. Rowell, K. Evans-Reeves, A. B. Gilmore.“Tobacco Industry Manipulation of Data on and
                            Press Coverage of the Illicit Tobacco Trade in the UK.” Tobacco Control
                            2014;23:e35–e43.Available from:
                            <a href="http://tobaccocontrol.bmj.com/content/23/e1/e35.full?sid=2fc80260-7458-44b1-89c2-af867a6caa8a">http://tobaccocontrol.bmj.com/content/23/e1/e35.full?sid=2fc80260-7458-44b1-89c2-af867a6caa8a</a>.
                        </p>
                        <p><sup>22</sup>Available from: <a
                                    href="https://www.cancervic.org.au/downloads/plainfacts/Facts_sheets/Facts_Sheet_no_3_Illicit_tobacco31May2016.pdf">https://www.cancervic.org.au/downloads/plainfacts/Facts_sheets/Facts_Sheet_no_3_Illicit_tobacco31May2016.pdf</a>
                        </p>


                        <h3 class="fc-ref-mat-3 sub-title">
                            3. Leads to lower tobacco prices
                        </h3>

                        <p>
                            The tobacco companies argue that plain packaging will commoditize tobacco, meaning that the
                            only way to compete is on price which will lead to price reductions which in turn will then
                            lead to increased demand.
                        </p>
                        <div class="graph-img">
                            <img width="450px" class="img-responsive center-block"
                                 src="<?php echo $base_url; ?>img/ref-j/Plain_Pack.jpeg">
                            <p class="small text-center">British American Tobacco Australia’s website suggests that
                                plain
                                packaging will lead to cheaper tobacco. </p>
                        </div>

                        <p class="bold">
                            Lower Tobacco Prices
                        </p>

                        <p>
                            A number of the “unintended consequences” suggested by the tobacco industry center on the
                            assertion that standardized packaging would cause tobacco product prices to drop, especially
                            in the premium segment of the market.
                        </p>
                        <p>
                            Tobacco companies have, for many years, invested in building premium brands, for which
                            consumers are willing to pay more. The tobacco industry say that, with plain packaging,
                            smokers would no longer be willing to make purchasing decisions based on a brand identity,
                            with premium brands having the greatest to lose.
                        </p>
                        <p>
                            The tobacco companies claim that, where branding cannot be used, this will lead to increased
                            price competition instead (sometimes referred to as “commoditization”), which will lead to
                            lower-priced tobacco products. Lower-cost tobacco leads to increased demand. The tobacco
                            companies use this argument to suggest that plain packaging will actually increase smoking
                            rates (or reduce the rate of decline).
                        </p>

                        <p>
                            In its <a
                                    href="http://www.jti.com/files/2014/7281/6956/JTI_response_to_Health_Canada_Consultation_on_Plain_and_Standardized_Packaging_for_Tobacco_Products._31_August_2016.pdf">response
                                to the Canadian consultation</a> JTI states:
                        </p>
                        <p class="p-states">
                            In a plain packaging environment, it will become ever more difficult to sell products in
                            the
                            premium segments. When all packs look virtually identical and physically feel exactly
                            the
                            same,
                            smokers will be more unwilling to pay a higher price for our premium products. [para
                            168]
                        </p>

                        <p class="bold">
                            Downtrading
                        </p>

                        <p>
                            In addition, each of the tobacco companies has said that they believe that there would, in
                            time, be increased “<b>downtrading</b>” (or brand switching), whereby smokers choose to
                            purchase
                            lower priced brands instead of more expensive premium brands as a result of plain packaging.
                            If there is less perceived ‘”status’” to be gained from identifying as a consumer of a
                            high-end brand, which may be the case if tobacco packs were standardized, some say that
                            smokers will switch to cheaper alternatives and price would become the key way to
                            differentiate between products.
                        </p>

                        <p>
                            This, they claim, would mean that overall, the price of purchased tobacco would be lower and
                            that downtrading stimulates demand.
                        </p>

                        <p>
                            In its <a
                                    href="http://www.bat.com/group/sites/uk__9d9kcy.nsf/vwPagesWebLive/DO9MSFD3/$FILE/medMD9MWB4B.pdf?openelement">response
                                to the 2012 consultation in the UK</a>, BAT said:
                        </p>

                        <p class="p-states">
                            “. . . price competition would inevitably increase, leading to price falls across all
                            segments of the legal market, with the greatest price falls in the premium sector, where
                            branding is a key element of differentiation; lower prices would lead to increased tobacco
                            consumption . . .”
                        </p>

                        <p>
                            In the tobacco companies’ legal challenge to the UK plain packaging regulations, the
                            companies submitted expert evidence, <sup>1</sup> which they claimed demonstrated that
                            plain
                            packaging
                            would increase smoking rates (or would reduce the existing downward trend of those rates).
                            That expert evidence included lengthy and complex economic analysis. Fundamental to these
                            economic models was the assumption that plain packaging will significantly increase
                            downtrading.
                        </p>

                        <p>
                            <b>Two issues at the <i>core</i> of the tobacco industry’s legal case that plain packaging
                                is a
                                disproportionate measure are that it will increase illicit trade and increase
                                downtrading.</b>
                            The judge in the UK case rejected these arguments, stating not only had the government
                            proved its case but also that the evidence submitted by the tobacco companies had
                            fundamental methodological flaws. <sup>2</sup>
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The Counter Arguments
                        </h3>

                        <ul>
                            <li>
                                <p>
                                    <b>The evidence is that tobacco companies in Australia have continued to increase
                                        the
                                        prices of tobacco (above the rate of tax) in all market sectors.</b>
                                    <sup>3</sup> In
                                    fact, from
                                    2011
                                    to 2013, prices increased more than usual. While tax increased by 2.8%, companies
                                    average net price rose 27%. This allowed Australian tobacco companies’ pre-tax
                                    profit to rise 30% during the period that plain packaging was introduced.
                                    <sup>4</sup>
                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>Downtrading already occurs in many countries, and it is encouraged by the
                                        tobacco
                                        companies’ existing pricing strategies.</b> Research shows that tobacco
                                    companies
                                    deliberately accentuate the price gap between premium brands and low-cost brands
                                    <sup>5</sup> in
                                    order to discourage quit attempts.
                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>The tobacco companies’ economic models assume that, in future, they will not
                                        increase their prices to mitigate the effect that downtrading has on their
                                        profits.</b> <sup>6</sup>
                                    All the evidence shows that their pricing strategies encourage downtrading, while
                                    the overall market price increases to maintain their profit margins.
                                </p>
                            </li>

                            <li>
                                <p>
                                    Price competition was a topic considered by Sir Cyril Chantler when undertaking
                                    his independent review of the public health evidence on standardized packaging of
                                    tobacco. <u>The Chantler Review</u> <sup>7</sup> contains a summary of economic
                                    analysis on
                                    price, which
                                    states that:
                                </p>

                                <p class="p-states">
                                    <b>“the magnitude of effects suggested by opponents of standardised packaging are
                                        exaggerated and the likelihood of complete market commoditisation is very low …
                                        there is no evidence to date of a commoditisation of the market leading to
                                        widespread price reductions in Australia.</b> It is too soon to make definitive
                                    conclusions, but the fact that leading brands are increasing prices above tax
                                    suggests that predictions of widespread price reductions are exaggerated, at least
                                    in the short-run.” [pages 32 and 46]
                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>
                                        The impact of any potential price reduction of tobacco products could be
                                        effectively mitigated through increased taxation, as explained in the Chantler
                                        Review:
                                    </b>
                                </p>

                                <p class="p-states">
                                    “In the event that standardised packaging eventually results in widespread price
                                    reductions, tax could be used to avoid any subsequent consumption effects. The
                                    effect of tax changes on price levels, and therefore consumption, depends upon the
                                    extent to which manufacturers and retailers pass on tax changes to consumers. The
                                    evidence shows that taxes are typically more than passed on in all but the lowest
                                    cost brands, both in the UKand in Australia (including evidence since the
                                    introduction of plain packaging). The tax system has the flexibility to take into
                                    account such factors if a policy to offset any price falls resulting from
                                    standardised packaging were required.”
                                </p>
                            </li>
                        </ul>

                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>

                        <p><sup>1</sup> BAT submitted a report by Neil Dryden, which was also attached as Appendix 7 of
                            its submission to the UKs 2014 consultation and is available from:
                            <a href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/404457/PDF_15.pdf">https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/404457/PDF_15.pdf</a>.
                        </p>
                        <p><sup>2</sup> See note 32 at paragraph 35 of the judgment.</p>
                        <p><sup>3</sup>
                            i) M. Scollo , M. Bayly , and M. Wakefield. “Did the Recommended Retail Price of
                            Tobacco Products Fall in Australia Following the Implementation of Plain Packaging?” Tobacco
                            Control, 2015; 24:ii90-ii93. Available from:
                            <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.full</a>.
                            <br/>
                            ii) M. Scollo, M. Bayly, and M.Wakefield. “The Advertised Price of Cigarette Packs in Retail
                            Outlets across Australia before and after the Implementation of Plain packaging: a repeated
                            measures observational study.” Tobacco Control, 2015; 24:ii82-ii89. Available from:
                            <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii82.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii82.full</a>.
                            <br/>
                            iii) M. Scollo, M. Zacher, K. Coomber K, M. Bayly, and M. Wakefield. “Changes in Use of
                            Types of Tobacco Products by Pack Sizes and Price Segments, Prices Paid and Consumption
                            Following the Introduction of Plain Packaging in Australia.” Tobacco Control, 2015;
                            24:ii66-ii75. Available from: <a
                                    href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii66.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii66.full</a>.
                            <br/>
                            iv) Greenland, L. Johnson , and S. Seifi. “Tobacco Manufacturer Brand Strategy Following
                            Plain Packaging in Australia: Implications for social responsibility and policy.”Social
                            Responsibility Journal, 2016; 12(2):321-34. Available from:
                            <a href="http://www.emeraldinsight.com/doi/abs/10.1108/SRJ-09-2015-0127">http://www.emeraldinsight.com/doi/abs/10.1108/SRJ-09-2015-0127</a>
                            and
                            <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.abstract">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.abstract</a>.
                        </p>

                        <p><sup>4</sup>
                            N. Chenoweth. “Tobacco Firms Such in $2.2b payday.”The Australian Financial Review, July 2,
                            2014. Available from:
                            <a href="http://www.afr.com/news/policy/foreign-affairs/tobacco-companies-22b-payday-20140701-j05h1">http://www.afr.com/news/policy/foreign-affairs/tobacco-companies-22b-payday-20140701-j05h1</a>.
                        </p>
                        <p><sup>5</sup> A. B. Gilmore B. Tavakoly, G. Taylor, and H. eed. “Understanding Tobacco
                            Industry Pricing Strategy and Whether It Undermines Tobacco Tax Policy: The Example of the
                            UK Cigarette Market.”Addiction (Abingdon, England). 2013;108(7):1317–1326.
                            doi:10.1111/add.12159.</p>
                        <p><sup>6</sup> The High Court judge in the UK legal challenge considered this issue. See note
                            41 above at paragraph 617 of the judgment.</p>
                        <p><sup>7</sup> Report of the Independent Review undertaken by Sir Cyril Chantler, 2014,
                            available from:
                            <a href="http://www.kcl.ac.uk/health/10035-tso-2901853-chantler-review-accessible.pdf">http://www.kcl.ac.uk/health/10035-tso-2901853-chantler-review-accessible.pdf</a>.
                        </p>
                        <h3 class="fc-ref-mat-3 sub-title">
                            4. Unlawful and breaches international treaties
                        </h3>

                        <p>
                            In its <a
                                    href="http://www.jti.com/files/2014/7281/6956/JTI_response_to_Health_Canada_Consultation_on_Plain_and_Standardized_Packaging_for_Tobacco_Products._31_August_2016.pdf">response
                                to the Canadian consultation in 2016</a>, JTI states:
                        </p>

                        <p class="p-states">
                            “the introduction of plain packaging legislation in Canada would be <u>unlawful</u>. It
                            would put
                            Canada in breach of various legal obligations, including those protected by <u>international
                                law, the Canadian Charter and common law</u>.” [para. 187]
                        </p>

                        <p>
                            <a href="http://www.jti.com/files/2014/7281/6956/JTI_response_to_Health_Canada_Consultation_on_Plain_and_Standardized_Packaging_for_Tobacco_Products._31_August_2016.pdf">Imperial
                                Tobacco’s response</a> to the Canadian consultation states:
                        </p>

                        <div class="p-states">
                            “Plain packaging is unlawful because:
                            <ul>
                                <li>
                                    <p>
                                        it deprives manufacturers of the legal right to use their trademarks, as
                                        protected by the
                                        Trade-marks Act; and
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        it violates the right to freedom of expression by impairing the ability of
                                        manufacturers
                                        to communicate with adult consumers about the origin, quality and other points
                                        of
                                        differentiation regarding their products; and
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        it violates International Agreements to which Canada is a party.” [p. 15]
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <p>
                            In
                            <a href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/323971/PDF_2.pdf">its
                                response to the UK’s 2012 consultation Philip Morris</a>, claimed that:
                        </p>

                        <p class="p-states">
                            “Plain packaging will require the government to compensate tobacco companies and will cost
                            the UK taxpayers billions of pounds.” [p. 24]
                        </p>

                        <p>
                            These tobacco company consultation responses, and a number of the other ones listed
                            <b>here</b> , set out in some detail their legal objections to plain packaging. The
                            multinational
                            tobacco companies have brought legal challenges against plain packaging laws in national,
                            regional, and international courts and tribunals. <i>All of these have so far been
                                dismissed</i>.

                        </p>

                        <p>
                            The legal claims are detailed on the <b>Case Summaries</b> page of the Tools and Resources.
                        </p>

                        <p>
                            In the cases that were dismissed in the UK and French administrative courts, the tobacco
                            companies argued that plain packaging breaches national trademark law; breaches rights, such
                            as freedom of expression and freedom to conduct a business; and violates a number of the
                            World Trade Organization agreements, intellectual property treaties, and regional free trade
                            agreements, such as the North American Free Trade Agreement (NAFTA).
                        </p>

                        <p>
                            Despite all these cases being firmly rejected, the tobacco companies continue to strongly
                            assert that plain packaging is unlawful in their media campaigns and in submissions to
                            government consultations.
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The Counter Arguments
                        </h3>

                        <p>
                            The legal grounds for the tobacco companies’ allegations that plain packaging is unlawful
                            are described in more detail <b>Legal Issues</b> page of the Tools and Resources together
                            with an
                            analysis of why those arguments are fundamentally flawed. In the Tools and Resources there
                            is also a short <b>Policy Briefing Paper</b> that summarizes the legal issues and counter
                            arguments
                            for easy reference.
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            5. Negative impacts on small retailers
                        </h3>
                        <p>
                            Big tobacco argues that plain packaging will negatively impact small retailers and that it
                            will increase transaction times for serving tobacco.
                        </p>
                        <p>
                            In Australia, the UK, and France, the tobacco companies argued that plain packaging would
                            have negative impacts on small retailers. The industry regularly provides funds to national
                            retailer associations <sup>1</sup>, and those associations then oppose tobacco control
                            regulation.
                        </p>

                        <p>
                            For instance, in Australia, a study commissioned by the Alliance of Australian Retailers
                            (AAR) concluded that:
                        </p>

                        <p class="p-states">
                            “retailing times would be adversely affected if standardised packaging were introduced by an
                            additional 15 to 45 seconds per transaction and that the effect would be particularly
                            significant for smaller retailers.”
                        </p>

                        <p>
                            The AAR set up a website to oppose plain packaging (a screen shot is shown below). However,
                            the AAR was a tobacco industry front group financed by Philip Morris, Imperial Tobacco, and
                            British American Tobacco (BAT). Internal tobacco industry and AAR documents that were leaked
                            to the media revealed that the Alliance was set up and run by the tobacco industry to lobby
                            against plain packaging <sup>2</sup>. This is an example of Astroturfing, a campaign
                            pretending to
                            be a
                            grassroots initiative, while hiding its true origin, goal, and funding.
                        </p>

                        <img width="550px" class="img-responsive center-block"
                             src="<?php echo $base_url; ?>img/ref-j/ref-j1.png">
                        <br>&nbsp;<br>

                        <p>
                            Similarly, in the UK, the tobacco industry funded a campaign run by the Tobacco Retailers
                            Alliance that claimed to be a “coalition of 26,000 independent shopkeepers,” but which was
                            established by the industry to oppose tobacco-control measures. ,<sup>3</sup>
                        </p>

                        <p>
                            The <a href="http://www.jti.com/files/4013/4149/4323/Packaging_Response.pdf">JTI submission
                                to the UK 2012 consultation</a> on plain packaging stated that:
                        </p>

                        <p class="indented italic">
                            “plain packaging will have significant negative effects on retailers. <u>Transaction times
                                will
                                increase</u>. Margins will be eroded by further downtrading. As tobacco products make up
                            a
                            significant proportion of the turnover of many small retailers, plain packaging may have
                            significant cash-flow and credit implications for them.”
                        </p>

                        <p>
                            The
                            <a href="http://www.tobaccotactics.org/index.php/National_Federation_of_Retail_Newsagents#Submission_to_the_Consultation_on_Plain_Packaging">National
                                Federation of Retail Newsagents (NFRN)</a>, which receives funds from the tobacco
                            industry, also made submissions to that consultation. It went even further by arguing that
                            plain packaging will:
                        </p>

                        <p class="p-states">
                            “significantly increase transaction times and costs in shops as it will take staff twice as
                            long to retail tobacco products and worryingly, it will significantly increase retailers’
                            vulnerability to crime while they are increasingly distracted retailing tobacco
                            products.” <sup>4
                            </sup>
                        </p>

                        <p>
                            The NFRN was extremely vocal in its opposition to plain packaging and produced postcards
                            that were placed in retail outlets across the UK with misleading images of white plain
                            packs, suggesting that plain packaging legislation will lead to increases in illicit trade,
                            organized crime and terrorism, loss of tax revenue, and more children smoking:. <sup>5</sup>
                        </p>

                        <img width="500px" class="img-responsive center-block"
                             src="<?php echo $base_url; ?>img/ref-j/NFRN post card.jpg">
                        <p class="small text-center">A postcard paid for by the NFRN and placed in newsagents across
                            the
                            UK.
                            Image from Tobaccotactics. <sup>55</sup></p>
                        <br>&nbsp;<br>
                        <p>
                            However, the strong evidence from Australia is that plain packaging has had no real impact
                            on small retailers. This may be the reason why this argument was not used by either JTI or
                            Imperial Tobacco in their consultation responses to the Canadian 2016 consultation.
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The Counter Arguments
                        </h3>

                        <ul class="custom">
                            <li>
                                <b>In Australia, transaction times for serving customers with tobacco quickly returned
                                    to
                                    normal</b> and in some areas decreased. This is thought to result from tobacco
                                products
                                being in alphabetical order and located always in the same place on shelves or gantries,
                                making brands easier to identify and locate. <sup>6</sup>
                            </li>

                            <li>
                                <b>PMI and BAT funded retailers and retail associations that opposed plain packaging in
                                    the UK and France.</b> <sup>7</sup> Retail organizations are often fundamental to
                                the tobacco
                                industry
                                campaigns.
                            </li>

                            <li>
                                 Tobacco retailers oppose all tobacco-control laws because they reduce the volume of
                                tobacco sales, but this has to be balanced against the huge health and economic benefits
                                that come from fewer people smoking.
                            </li>
                        </ul>

                        <p>
                            <b>Cancer Council Victoria</b> has produced a fact sheet about the impact on small retailers
                            in
                            Australia following the introduction of plain packaging. Available <a
                                    href="http://www.cancervic.org.au/downloads/plainfacts/Facts_sheets/Facts_Sheet_no._5._Retailer_effects_311015.pdf">here</a>.
                        </p>

                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>
                        <p><sup>1</sup> Details about the NFRN can be found on the tobaccotactics website here:
                            <a href="http://www.tobaccotactics.org/index.php?title=National_Federation_of_Retail_Newsagents">http://www.tobaccotactics.org/index.php?title=National_Federation_of_Retail_Newsagents</a>
                        </p>

                        <p><sup>2</sup> Details about the Alliance of Australian Retailers can be found on the
                            tobaccotactics website here:
                            <a href="http://www.tobaccotactics.org/index.php/Alliance_of_Australian_Retailers">http://www.tobaccotactics.org/index.php/Alliance_of_Australian_Retailers</a>
                        </p>

                        <p><sup>3</sup> Details of the Tobacco Retailers Alliance can be found on the tobaccotactics
                            website here:
                            <a href="">http://www.tobaccotactics.org/index.php/Tobacco_Retailers'_Alliance#Against_Plain_Packaging</a>.
                        </p>

                        <p><sup>4</sup> See note 1.</p>
                        <p><sup>5</sup> Available from: <a
                                    href="http://www.tobaccotactics.org/index.php/National_Federation_of_Retail_Newsagents">http://www.tobaccotactics.org/index.php/National_Federation_of_Retail_Newsagents</a>.
                        </p>

                        <p><sup>6</sup> M. Wakefield, M. Bayly, M. Scollo M “Product Retrieval Time in Small Tobacco
                            Retail Outlets before and after the Australian Plain Packaging Policy: Real-World Study.”
                            Tobacco Control 2014;23:70–76. Available from:
                            <a href="http://tobaccocontrol.bmj.com/content/23/1/70">http://tobaccocontrol.bmj.com/content/23/1/70</a>.
                        </p>

                        <p><sup>7</sup> Details available on the tobaccotactics website:
                            <a href="http://tobaccotactics.org/index.php/BAT_Funded_Lobbying_Against_Plain_Packagingand">http://tobaccotactics.org/index.php/BAT_Funded_Lobbying_Against_Plain_Packagingand</a>
                            here:
                            <a href="http://tobaccotactics.org/index.php/Astroturfing">http://tobaccotactics.org/index.php/Astroturfing</a>.
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            Will lead to plain packaging of other products the slippery slope / domino effect
                        </h3>

                        <p>
                            A key argument used in the tobacco industry media campaigns in many countries is that if
                            plain packaging for tobacco is introduced, it sets a precedent for other consumer products,
                            such as soft drinks, alcohol, or fatty foods. The argument is that plain packaging is a step
                            too far towards a “nanny state” and will lead to reduced product innovation across all
                            sectors. In this way, the tobacco industry tries to get support from the other industries in
                            opposing the policy generally.
                        </p>

                        <p>
                            This argument is often put forward in campaigns and media articles by third-party
                            organizations, posing as independent voices but which receive funding from the tobacco
                            industry.
                        </p>

                        <p>
                            For instance, in the UK, the “<a href="http://www.handsoffourpacks.com/">Hands Off Our
                                Packs</a>” campaign, run by
                            <a href="http://www.tobaccotactics.org/index.php/Forest">FOREST</a>, strongly pushed
                            this argument forward. The Institute for Economic Affairs, a libertarian think tank, hosted
                            events and published papers opposing plain packaging, using the slippery slope argument. It
                            was an issue regularly cited in media articles about those that oppose plain packaging.
                            <sup>1</sup>
                            Imperial Tobacco UK also deployed the slippery slope argument in an anti-plain packaging
                            <a href="">YouTube video</a> advert in Britain — 2020 Vision. <sup>2</sup> The advert
                            misleadingly
                            suggests that by 2020
                            all products perceived to be unhealthy will be sold in plain packaging. The advert was
                            promoted through the distribution of leaflets on petrol forecourts.
                        </p>

                        <div class="row graph-img">
                            <div class="col-md-5 col-md-offset-2">
                                <img width="500px" class="img-responsive"
                                     src="<?php echo $base_url; ?>img/ref-j/CzpeoUIWgAQg1w-.jpg"/>
                            </div>
                            <div class="col-md-4">
                                <img width="200px" src="<?php echo $base_url; ?>img/ref-j/untitled.png"/>
                            </div>
                        </div>
                        <br>&nbsp;<br>
                        <p>
                            In Sweden, the UK, and Canada, the tobacco industry, or groups opposing the plain packaging
                            of tobacco, have even set up whole fake shops as media stunts, where all the products, such
                            as drink, crisps, coffee, etc., are in mock plain packaging with health warnings. The images
                            above are from a convenience store converted by Students for Freedom (a libertarian campaign
                            group that opposes plain packaging) in Canada.
                        </p>
                        <p>
                            In Australia, Imperial Tobacco unrolled a nationwide PR campaign based on the “No Nanny
                            State” theme and set up a website called <a
                                    href="https://www.youtube.com/watch?v=G-31ew2k95w">nonannystate.com.au</a>.
                        </p>

                        <p>
                            The <a href="http://www.jti.com/in-focus/slippery-slope/">JTI website</a> states:
                        </p>

                        <p class="p-states">
                            “with an increasing number of governments considering laws to ban branding on tobacco
                            packaging, the popular alcohol, food and soda products that we know today could look very
                            different in the future if the slippery slope trend continues.” <sup>3</sup>
                        </p>

                        <p>
                            <a href="http://www.batnz.com/group/sites/bat_9vnkqw.nsf/vwPagesWebLive/DO9VNKV5/$FILE/medMD9JT3X7.pdf?openelement">BATs
                                submission to New Zealand’s Health Committee</a> states:
                        </p>

                        <p class="p-states">
                            “There is a very real risk that Plain Packaging, once introduced for tobacco products, will
                            be extended to other goods.” [para. 5.9]
                        </p>

                        <div class="row graph-img">
                            <div class="col-md-4 col-md-offset-2">
                                <img width="225px" class="img-responsive"
                                     src="<?php echo $base_url; ?>img/ref-j/ciglobby1.jpg"/>
                            </div>
                            <div class="col-md-4">
                                <img width="300px" src="<?php echo $base_url; ?>img/ref-j/Alcoholnext_nz.jpg"/>
                            </div>
                        </div>
                        <p class="small text-center">
                            Media campaigns using the slippery slope argument were run in the UK, Ireland and New
                            Zealand
                            which included full page advertisements such as the ones pictured here sponsored by JTI
                            (left)
                            and BAT (New Zealand) (right).
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The Counter Arguments
                        </h3>

                        <ul class="custom">
                            <li>
                                <b>“The World Health Organization is not recommending adoption of plain packaging for
                                    products other than tobacco products.</b> Tobacco products are uniquely harmful, and
                                there is
                                a body of evidence showing that plain packaging of tobacco products is an effective
                                public health intervention.” <sup>4</sup>
                            </li>
                            <li>
                                <b>There is very little evidence that plain packaging is being considered for other
                                    products anywhere around the world.</b> There is as yet very little research
                                evidence in
                                relation to plain packaging of other products that could support such proposals. Plain
                                packaging of other products has not so far been proposed by a government in any country
                                that has adopted the plain packaging of tobacco products.
                            </li>
                            <li>
                                <b>Regulation of any product needs to be based on the risks to individuals and society
                                    of
                                    using that product, and evidence of what works.</b> Different products will be
                                regulated
                                differently according to their risks and benefits.
                            </li>

                            <li>
                                <b>Tobacco is a uniquely damaging product that requires unique regulations.</b> Only
                                tobacco
                                control is the subject of the first and only public health international treaty (the
                                FCTC).
                            </li>

                            <li>
                                <b>The stated aim of many governments in their tobacco-control strategies is to
                                    eradicate
                                    all tobacco use and have a “tobacco-free society.”</b> <sup>5</sup> This is not
                                the aim for
                                the
                                regulatory control of any other potentially unhealthy consumer products.
                                <br>
                                The message for tobacco is simple: stop smoking. The message for potentially unhealthy
                                food products is much more nuanced, where the advice is moderation within an overall
                                sensible diet. <sup>6</sup>
                            </li>

                            <li>
                                <b>The tobacco industry often uses the “slippery slope” argument to try to resist
                                    tobacco
                                    control measures, <sup>7</sup> such as graphic health warnings.</b> Released
                                internal
                                industry documents
                                from 1996 show it has been part of Philip Morris’s strategy to resist tobacco-control
                                measures for decades. <sup>8</sup> As far back as 1972, the Chairman of Rothman’s said:
                                <p class="p-states">
                                    “The precedent is one which could easily come to affect other industries. For
                                    instance, a number of medical scientists claim that butter and milk are dangerous to
                                    the health of some people. It is recognised that drinking too much liquor or
                                    reckless driving are hazards to life. . . can we expect all these products to carry
                                    a ‘danger’ labels . . . ?” <sup>9</sup>
                                </p>
                                To date, only tobacco products carry large graphic health warnings, so the slippery
                                slope argument has not turned out to be true for other tobacco control measures
                            </li>
                        </ul>

                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>
                        <p><sup>1</sup> For instance, M. Boyle, “<a
                                    href="http://www.bloomberg.com/news/2015-01-23/junk-food-and-booze-could-follow-tobacco-in-plain-packaging-push.html">Junk
                                Food and Booze Could Follow Tobacco
                                in Plain Pack
                                Push</a>,” Bloomberg.com, 23 January 23, 2015 (accessed February 2015).</p>

                        <p><sup>2</sup> Viewable here: <a href="https://www.youtube.com/watch?v=q3hCYS9qc3c">https://www.youtube.com/watch?v=q3hCYS9qc3c</a>
                            (accessed March 2, 2012).</p>

                        <p><sup>3</sup> See <a href="http://www.jti.com/in-focus/slippery-slope/">http://www.jti.com/in-focus/slippery-slope/</a>(accessed
                            March 2, 2017).</p>

                        <p><sup>4</sup> Quote from the WHO website:
                            <a href="http://www.who.int/campaigns/no-tobacco-day/2016/faq-plain-packaging/en/index2.html">http://www.who.int/campaigns/no-tobacco-day/2016/faq-plain-packaging/en/index2.html</a>(accessed
                            March 2, 2017).</p>

                        <p><sup>5</sup> For instance, in March 2011 the New Zealand Government adopted the Smoke Free
                            2025 goal. Ireland has also adopted a goal of being tobacco free by 2025 in its tobacco
                            control strategy available
                            from:<a href="http://www.dohc.ie/publications/pdf/TobaccoFreeIreland.pdf?direct=1">http://www.dohc.ie/publications/pdf/TobaccoFreeIreland.pdf?direct=1</a>.
                            The Scottish
                            Government has adopted a goal of being tobacco free by 2034 in its Tobacco Control Strategy
                            for Scotland is available from:<a href="http://www.gov.scot/resource/0041/00417331.pdf">http://www.gov.scot/resource/0041/00417331.pdf</a>.
                        </p>

                        <p><sup>6</sup> These points are set out in a New Scientist article available from:
                            <a href="https://www.newscientist.com/article/mg22530120.200-if-tobacco-gets-plain-packets-will-junk-food-be-next/#.VQF7FmbmzyI">https://www.newscientist.com/article/mg22530120.200-if-tobacco-gets-plain-packets-will-junk-food-be-next/#.VQF7FmbmzyI</a>.
                        </p>

                        <p><sup>7</sup> S. Chapmanand S. M. Carter. “Avoid Health Warnings on all Tobacco Products for
                            Just as Long as We Can”: A history of Australian tobacco industry efforts to avoid, delay
                            and dilute health warnings on cigarettes.” Tobacco Control 2003;12:iii13–iii22.</p>

                        <p><sup>8</sup> Public Policy Plan. January 15, 1996. Philip Morris Records. Available from:
                            https://www.industrydocumentslibrary.ucsf.edu/tobacco/docs/jrjk0061.</p>
                        <p><sup>9</sup> R. A. Irish. Chairman’s address, Rothman’s Pall Mall (Australia) Ltd. Tobacco
                            trade journal (Queensland) October 5, 1972:4–5</p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            7. Job losses in the local tobacco industry
                        </h3>

                        <p>The tobacco industry claims that plain packaging will cause job losses in domestic tobacco
                            manufacturing or packaging industries</p>
                        <p>
                            This argument is used against all tobacco-control measures in those countries that have
                            domestic tobacco production or manufacturing. However, overall economic benefits for a
                            country in reducing smoking rates are huge and far outweigh any costs to the industry.
                        </p>
                        <img width="500px" class="img-responsive center-block"
                             src="<?php echo $base_url; ?>img/ref-j/chile bill board.png"/>
                        <p class="small">
                            <b>“President do not leave us unemployed - Senators protect Casablanca - bad tobacco law
                                =
                                800
                                unemployed” </b>
                            ” A roadside bill board in Chile from May 2016 paid for by the tobacco industry opposing
                            the
                            Tobacco Control Bill which included provisions for plain packaging
                        </p>

                        <p>
                            <b>BAT threatens to leave Chile:</b> In 2015, BAT threatened to stop operations in Chile
                            when the
                            national legislature was considering a bill designed to strengthen tobacco-control measures,
                            including plain packaging. <sup>1</sup> Movement on the bill stalled, but the company
                            closed several
                            factories anyway. However, BAT Chile maintains critical manufacturing facilities in the
                            country. It exports cigarettes to seventeen countries around the world. <sup>2</sup> The
                            decision to
                            close some factories in Chile can be interpreted as a decision to consolidate based on cost
                            efficiency and not on local tobacco-control laws.
                        </p>

                        <p>
                            <b>In Canadain 1994–95:</b>During the campaign for plain packaging, the specter of job
                            losses in
                            the tobacco growing, manufacturing, and packaging sectors was often raised by opponents.
                            Representatives of both Ontario and Quebec growers stated that plain packaging would
                            intensify price competition, causing tobacco firms to move their manufacturing facilities
                            outside Canada. Plain packaging was dropped at that time, but most of the jobs in the
                            tobacco industry were lost anyway. Imperial Tobacco moved all production to Mexico,
                            tobacco-crop production has dropped 87% and tobacco packaging firms have downsized in
                            Canada. <sup>3</sup>
                        </p>

                        <p>
                            <b>In the UK:</b> A report commissioned by Philip Morris claimed that plain packaging would
                            lead to
                            between 2,000 and 3,500 jobs lost in the convenience retailing sector, thanks purely to the
                            decrease in revenue through tobacco sales. It claimed a further 2,250 to 3,850 jobs were
                            expected to be lost in the tobacco manufacturing sector, despite a rise in tobacco
                            consumption. <sup>4</sup>
                        </p>

                        <p>
                            In <a href="http://www.jti.com/files/4013/4149/4323/Packaging_Response.pdf">JTI’s submission
                                the UK 2012 consultation</a>, it argued that:
                        </p>

                        <p class="p-states">
                            “Plain packaging will have a direct impact on investment, trade and jobs. JTI and other
                            manufacturers support 5,700 jobs directly and 66,000 indirectly in the UK, and tobacco
                            generates £12.1 billion in revenue each year for the Government.” [p. 3]
                        </p>

                        <p>
                            <b>Action on Smoking and Health Australia</b>, produced a reportthat examined the tobacco
                            industry's tactics against plain packaging in Australia, and outlined how “The industry
                            hides behind a libertarian cloak, complaining that Australia is an over-regulated ‘nanny
                            state’ that will suffer job losses and further hardship if more regulation such as plain
                            packaging is required by law.” <sup>5</sup> However, even when BAT announced the closure
                            of its
                            manufacturing facility in Australia in 2015, it specifically stated that plain packaging was
                            <i>not the reason for the closure.</i> <sup>6</sup>
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The Counter Arguments
                        </h3>
                        <ul class="custom">
                            <li>
                                <b>
                                    This argument puts the profits of tobacco companies before the economic and health
                                    benefits to society.
                                </b>
                            </li>

                            <li>
                                <b>
                                    The tobacco industry exaggerates the impact of strong tobacco control measures,
                                    including plain packaging laws, on the local economy.
                                </b>
                                The tobacco industry constitutes a very small fraction of overall production and
                                employment in most countries. Equally important to note is that the number of jobs that
                                depend on tobacco has been falling in most countries, owing to such things as
                                technological innovation and globalization. For most countries, tobacco-control measures
                                will have only a modest impact on employment and will not lead to net job losses.
                                <sup>7</sup>
                            </li>

                            <li>
                                <b>The economic benefits in reducing smoking rates are huge and far outweigh costs to
                                    the
                                    industry</b>. New research shows that the total economic cost of smoking, including
                                productivity losses, is more than $1.4 trillion per year — 1.8% of the world GDP — with
                                the burden increasingly being carried by developing countries. <sup>8</sup> Any loss
                                of jobs in
                                the
                                tobacco sector would be made up through gains to the economy as a whole.
                            </li>

                            <li>
                                <b>The Economic Impact Assessment for the UK</b> showed that a 1 percentage point
                                reduction
                                in smoking rates resulting from plain packaging would lead to £25 billion net benefit to
                                <b>the economy over ten years</b> owing to reduced healthcare costs and increased
                                productivity. <sup>9</sup>
                            </li>

                            <li>
                                <b>Even in the short term, reductions in smoking lead to significant healthcare
                                    savings</b>.
                                A new study from the US showed that a 10% relative drop in smoking (meaning, for
                                instance, a drop from 20% to 18% in the overall smoking rate) would be followed by an
                                expected $63 billion reduction in healthcare expenditure <u>the next year</u>.
                                <sup>10</sup>
                            </li>

                            <li>
                                <b>Global tobacco production is dominated by multinational corporations that have been
                                    centralizing production for decades</b>. Tobacco companies locate tobacco production
                                and
                                manufacturing facilities where costs are lowest. Thus, decisions are based on global
                                economic factors and not by strong local tobacco-control policies. For example, when
                                Japan Tobacco International closed its last production facility in the United Kingdom,
                                it also closed facilities in Belgium and Germany and moved production to Poland and
                                Romania. JTI said the restructuring would allow the company to optimize its
                                operations. <sup>11</sup>
                            </li>

                            <li>
                                <b>Money not spent on tobacco by those that have quit is then spent on other goods,
                                    generating alternative employment</b>. The transition to a smaller tobacco economy
                                has been
                                ongoing for years in high-income countries since the 1950s, owing to steady declines in
                                smoking. <sup>12</sup> Studies show that most countries see no net job losses and that
                                a few see
                                net
                                gains if consumption falls. <sup>13</sup>
                            </li>

                            <li>
                                <b>The tobacco industry consistently exaggerates the impact of tobacco-control measures
                                    on its ability to make profits</b>. In rich economies where smoking rates are
                                falling,
                                tobacco company profits still continue to rise. The companies increase their prices,
                                over and above any tax rises, and so still increase profits. <sup>14</sup>
                            </li>

                            <li>
                                <b>After plain packaging was introduced in Australia</b>, tobacco companies’ pre-tax
                                profits
                                rose by 30%. <sup>15</sup> This was as a result of price increases in all sectors of
                                the tobacco
                                market, <sup>16</sup> and from cost cutting, which included relocating production to
                                low-cost
                                economies. BAT Australia’s statement on the closure of its factory in 2014 confirmed
                                that it was due to production costs and that plain packaging was not a factor.
                                <sup>17</sup>
                            </li>
                        </ul>

                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>
                        <p><sup>1</sup> Tabacalera anuncia cierre de operaciones en el país por cambios a ley
                            antitabaco. La Tercera. September 7, 2015. Available from:
                            <a href="http://www.latercera.com/noticia/tabacalera-anuncia-cierre-de-operaciones-en-el-pais-por-cambios-a-ley-antitabaco/">http://www.latercera.com/noticia/tabacalera-anuncia-cierre-de-operaciones-en-el-pais-por-cambios-a-ley-antitabaco/</a>(accessed
                            March 7, 2017).</p>

                        <p><sup>2</sup> Euromonitor International. British American Tobacco Chile SA in Tobacco (Chile).
                            August 2016.</p>
                        <p><sup>3</sup> Non-Smokers’ Rights Association/Smoking and Health Action Foundation. Available
                            from:<a href="https://www.nsra-adnf.ca/cms/file/files/080701_Plain_Packaging_of_Tobacco_Products.pdf">https://www.nsra-adnf.ca/cms/file/files/080701_Plain_Packaging_of_Tobacco_Products.pdf</a>.
                        </p>
                        <p><sup>4</sup> Quantification of the economic impact of plain packaging for tobacco products in
                            the UK Report for Philip Morris Ltd. May 2013 Centre for Economics and Business Research
                            Ltd.</p>
                        <p><sup>5</sup> A. Jones S. Sanders, and ASH (Australia) (2010). “Countering Tobacco Tactics: A
                            guide to identifying, monitoring and preventing tobacco interference in public health.”
                            Action on Smoking and Health (ASH) Australia, Kings Cross, N.S.W</p>
                        <p><sup>6</sup> BAT Australasia. “BAT Forced to Close Australian Factory.” Media release.
                            October 31, 2014. Available from:
                            <a href="http://www.bata.com.au/group/sites/bat_9rnflh.nsf/vwPagesWebLive/DOA3CJ8E/0FILE/medMD9QD9EF.pdf?openelement">http://www.bata.com.au/group/sites/bat_9rnflh.nsf/vwPagesWebLive/DOA3CJ8E/$FILE/medMD9QD9EF.pdf?openelement</a>
                            (accessed March 5, 2017).</p>
                        <p><sup>7</sup> U.S. National Cancer Institute and World Health Organization. The Economics of
                            Tobacco and Tobacco Control. National Cancer Institute Tobacco Control Monograph 21. NIH
                            Publication No. 16-CA-8029A. Bethesda, MD: U.S. Department of Health and Human Services,
                            National Institutes of Health, National Cancer Institute; and Geneva, Switzerland: World
                            Health Organization; 2016.</p>
                        <p><sup>8</sup> M. Goodchild ,N. Nargis , and E. Tursan d'Espaignet “Global Economic Cost of
                            Smoking-Attributable Diseases.” Tobacco Control Published Online First: January 30, 2017.
                            Available from: <a href="http://dx.doi.org/10.1136/tobaccocontrol-2016-053305">http://dx.doi.org/10.1136/tobaccocontrol-2016-053305</a>.
                        </p>
                        <p><sup>9</sup> The Economic Impact Assessment on standardised packaging in the UK.Available
                            from:
                            <a href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/403493/Impact_assessment.pdf">https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/403493/Impact_assessment.pdf</a>.
                        </p>
                        <p><sup>10</sup> J. Lightwood and S. A. Glantz. “Smoking Behavior and Healthcare Expenditure in
                            the United States, 1992–2009: Panel Data Estimates” (May 10, 2016). Available from:
                            <a href="http://dx.doi.org/10.1371/journal.pmed.1002020">http://dx.doi.org/10.1371/journal.pmed.1002020</a>.
                        </p>
                        <p><sup>11</sup> “Japan Tobacco Set to Close Last UK Plant.”Financial Times. October 7, 2014.
                            Available from: <a href="https://www.ft.com/content/ec286170-4e44-11e4-bfda-00144feab7de">https://www.ft.com/content/ec286170-4e44-11e4-bfda-00144feab7de</a>(accessed
                            March 7, 2017).</p>
                        <p><sup>12</sup> U.S. National Cancer Institute and World Health Organization. The Economics of
                            Tobacco and Tobacco Control. National Cancer Institute Tobacco Control Monograph 21. NIH
                            Publication No. 16-CA-8029A. Bethesda, MD: U.S. Department of Health and Human Services,
                            National Institutes of Health, National Cancer Institute; and Geneva, Switzerland: World
                            Health Organization; 2016.</p>
                        <p><sup>13</sup> This was the conclusion of a report for the World Bank:“Curbing the Epidemic:
                            Governments and the Economics of Tobacco Control.” Available from:
                            <a href="http://tobaccocontrol.bmj.com/content/8/2/196.full">http://tobaccocontrol.bmj.com/content/8/2/196.full</a>.
                            For instance,on page 69 it states,“A
                            study in the United States found that the number of jobs would rise by 20,000 between 1993
                            and 2000 if all domestic consumption was eliminated.”</p>
                        <p><sup>14</sup>A. B. Gilmore, B. Tavakoly, G. Taylor,. and H. Reed, “Understanding Tobacco
                            Industry Pricing Strategy and Whether It Undermines Tobacco Tax Policy: the example of the
                            UK cigarette market. Addiction, 108: 1317–1326. doi:10.1111/add.12159 (2013). Available
                            from: <a href="http://onlinelibrary.wiley.com/doi/10.1111/add.12159/full">http://onlinelibrary.wiley.com/doi/10.1111/add.12159/full</a>.
                        </p>
                        <p><sup>15</sup> N. Chenoweth. “Tobacco Firms in $2.2b payday.”The Australian Financial Review,
                            July 2, 2014. Available from:
                            <a href="http://www.afr.com/news/policy/foreign-affairs/tobacco-companies-22b-payday-20140701-j05h1">http://www.afr.com/news/policy/foreign-affairs/tobacco-companies-22b-payday-20140701-j05h1</a>.
                        </p>
                        <p><sup>16</sup> i) M. Scollo, M. Bayly, and M. Wakefield. “Did the Recommended Retail Price of
                            Tobacco Products Fall in Australia Following the Implementation of Plain packaging?” Tobacco
                            Control, 2015; 24:ii90-ii93. Available from:
                            <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.full</a>.
                            <br/>
                            ii) Scollo, M. Bayly, and M. Wakefield . “The Advertised Price of Cigarette Packs in Retail
                            Outlets across Australia before and after the Implementation of Plain Packaging: ARepeated
                            Measures Observational Study.” Tobacco Control, 2015; 24:ii82-ii89. Available from:
                            <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii82.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii82.full</a>.
                            <br/>
                            iii) Scollo, M. Zacher, K. Coomber, M. Bayly, and M. Wakefield. “Changes in Use of Types of
                            Tobacco Products by Pack Sizes and Price Segments, Prices Paid and Consumption Following the
                            Introduction of Plain Packaging in Australia.” Tobacco Control, 2015; 24:ii66-ii75.
                            Available from: <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii66.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii66.full</a>.
                            <br/>
                            iv) Greenland, L. Johnson , and S. Seifi. “Tobacco Manufacturer Brand Strategy Following
                            Plain Packaging in Australia: Implications for Social Responsibility and Policy.”Social
                            Responsibility Journal, 2016; 12(2):321-34. Available from:
                            <a href="http://www.emeraldinsight.com/doi/abs/10.1108/SRJ-09-2015-0127">http://www.emeraldinsight.com/doi/abs/10.1108/SRJ-09-2015-0127</a>.
                            <br/>
                            <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.abstract">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.abstract</a>.
                        </p>

                        <p><sup>17</sup>Press release available here (accessed March 2, 2017):
                            <a href="http://www.bata.com.au/group/sites/bat_9rnflh.nsf/vwPagesWebLive/DOA3CJ8E/0FILE/medMD9QD9EF.pdf?openelement">http://www.bata.com.au/group/sites/bat_9rnflh.nsf/vwPagesWebLive/DOA3CJ8E/$FILE/medMD9QD9EF.pdf?openelement</a>.
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            8. Violates intellectual property protections
                        </h3>

                        <p>
                            With this argument, the tobacco industry tries to suggest that plain packaging of tobacco
                            products will somehow fundamentally undermine the system of protections for intellectual
                            property and lead to a lack of confidence from business and investors.
                        </p>
                        <p>
                            A <a href="http://www.stopillicittobacco.com/potential-to-grow/plain-packaging.htm">JTI
                                website</a> states that:
                        </p>

                        <p class="p-states">
                            “The introduction of plain packaging will hugely undermine the protection of intellectual
                            property rights and branding in Ireland. Going this route will introduce a fundamental
                            element of doubt and unpredictability to Ireland’s business environment.” ,<sup>1</sup>
                        </p>

                        <p>
                            PJ Carroll (a subsidiary of BAT) in its <a
                                    href="http://health.gov.ie/wp-content/uploads/2014/07/PJ-Carroll-submission.pdf">submission
                                to the Irish Joint
                                Committee</a> on Health and Children says:
                        </p>

                        <p class="p-states">
                            “The removal of legitimately held trademarks and other intellectual property rights would
                            undermine and damage Ireland’s hard won position as the best country in the world for
                            business as announced recently by Forbes magazine. If the Proposal is introduced, businesses
                            across all sectors would be on notice that their trademarks are not safe in Ireland.” [para.
                            2.7]
                        </p>

                        <p>
                            British American Tobacco (New Zealand), in <a
                                    href="http://www.batnz.com/group/sites/bat_9vnkqw.nsf/vwPagesWebLive/DO9VNKV5/$FILE/medMD9JT3X7.pdf?openelement">response
                                to the New Zealand
                                consultation</a>, states that plain packaging would cause:
                        </p>

                        <p class="p-states">
                            “lasting damage to New Zealand’s international reputation among its trading partners and
                            foreign investors, who would rightly question the security of investments in New Zealand and
                            its respect for international trade rules, intellectual property, and basic property
                            rights.”[p. 36]
                        </p>

                        <p>
                            Philip Morris’s <a
                                    href="http://health.gov.ie/wp-content/uploads/2014/07/Philip-Morris-i.pdf">submission
                                to the Irish Joint Committee</a> stated that:
                        </p>

                        <p class="indented italic">
                            “Enacting legislation that completely undermines trademarks is not consistent with an aim to
                            provide a robust IP protection regime in order to support foreign direct investment. Would
                            Ireland Inc. be happy if other countries required plain packaging for alcohol in
                            circumstances that in many countries alcohol has been identified as the number one public
                            health risk?”[p. 3]
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The Counter Arguments
                        </h3>

                        <ul class="custom">
                            <li>
                                Big tobacco’s Intellectual property arguments and their flaws are set out in the <b>Legal
                                    Issues</b> pages of the Tools and Resources.
                            </li>

                            <li>
                                <b>Plain packaging of tobacco places legitimate controls on the use of tobacco
                                    trademarks
                                    that advertise and promote a highly dangerous product</b>. These controls are no
                                different
                                in kind to the types of controls that are placed on the way other dangerous products are
                                advertised or sold. The system of intellectual property protections allows for this type
                                of control. Businesses and investors accept and welcome legitimate regulatory controls
                                in the public interest.
                            </li>

                            <li>
                                <b>There is no evidence that businesses other than the tobacco industry have concerns
                                    about
                                    the intellectual property regime in countries that have enacted plain packaging for
                                    tobacco, such as Australia, the UK, and France</b>.
                                The Framework Convention on Tobacco Control has been ratified by 180 countries. The
                                implementing guidelines for Articles 11 and 13 of the FCTC recommend that government
                                consider plain packaging of tobacco. This demonstrates that the international community
                                has accepted plain packaging as a legitimate regulatory option.

                            </li>
                        </ul>

                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>
                        <p><sup>1</sup> From JTI’s stopillicittobacco website (accessed March 2, 2017):
                            <a href="http://www.stopillicittobacco.com/potential-to-grow/plain-packaging.htm">http://www.stopillicittobacco.com/potential-to-grow/plain-packaging.htm</a>.
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            9. There are alternative less restrictive measures therefore plain packaging is unnecessary
                        </h3>

                        <p>
                            The tobacco companies make this argument because it is important for some of the legal tests
                            on the justification or proportionality of a regulatory measure. For instance, under Article
                            2.2 of the WTO Technical Barriers to Trade agreement, a technical measure should “not be
                            more trade-restrictive than <i>necessary</i> to fulfil a legitimate objective.”
                        </p>

                        <p>
                            The legal test as to whether or not a measure is <i>necessary</i> involves considering if
                            there are
                            less restrictive alternatives that would have an equal effect in achieving the public health
                            objective
                        </p>

                        <p>
                            The tobacco companies all argue that there are less restrictive measures than plain
                            packaging. The alternatives the companies put forward as being effective and proportionate
                            solutions include:
                        </p>

                        <ul class="custom">
                            <li>
                                Reduce youth access to tobacco by:
                                <ul class="custom">
                                    <li>
                                        Increasing the minimum age at which people can buy tobacco;
                                    </li>
                                    <li>
                                        Giving greater resources to enforcement of the current regime to prevent
                                        minors
                                        accessing tobacco;
                                    </li>
                                    <li>
                                        Reinforcing existing retail access prevention measures;
                                    </li>
                                    <li>
                                        Making proxy purchasing unlawful (proxy purchasing is where an adult buys
                                        tobacco on
                                        behalf of a minor);
                                    </li>
                                </ul>
                            </li>

                            <li>
                                Improved Health Warnings;
                            </li>

                            <li>
                                Targeted public information campaigns;
                            </li>

                            <li>
                                Greater educational programmes;
                            </li>

                            <li>
                                Ensuring better enforcement to tackle the illicit trade in tobacco;
                            </li>

                            <li>
                                Increasing taxation.
                            </li>
                        </ul>

                        <p>
                            Many of the tobacco company consultation submissions listed here include the position that
                            these alternative measures should be introduced instead of plain packaging and that they
                            would be more effective at reducing smoking rates and would be less restrictive on trade and
                            intellectual property rights.
                        </p>

                        <p>
                            These arguments were also included in the legal challenges to plain packaging regulations in
                            the UK and France.
                        </p>

                        <p>
                            For instance, in the <a
                                    href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">High
                                Court judgment from the UK</a>:
                        </p>

                        <p class="p-states">
                            “The Claimants submit that the Secretary of State has failed to prove that standardised
                            packaging is proportionate because the evidence does not show that there are no equally
                            effective but less restrictive alternatives …“The Claimants submit that the Secretary of
                            State has failed to prove that standardised packaging is proportionate because <u>the
                                evidence
                                does not show that there are no equally effective but less restrictive alternatives</u>
                            …

                            <br/>

                            PMI contends that there is a less restrictive and more effective alternative policy
                            available to the Government, <u>namely taxation . . . . They rely upon the expert evidence
                                of
                                Professor Mulligan who argued that taxation was a tobacco control policy “that obviously
                                works”</u> . . . . This is “. . . all the Court needs to know to conclude that
                            standardised
                            packaging is unlawful: there is a less restrictive and more effective policy alternative
                            available.”
                        </p>

                        <p>
                            It is notable that, in the context of plain packaging, the tobacco companies argue that
                            higher taxation, even in an already high tax market, is a policy that “obviously works” to
                            reduce smoking rates. Where the tobacco companies seek to resist tax increases they argue
                            the opposite.
                        </p>

                        <p>
                            Also notable is that in court PMI, JTI and Imperial all abandoned any reliance on
                            alternative measures being effective other than taxation. Only BAT continued to argue that
                            in addition to tax, numerous alterative, less restrictive and equally effective measures
                            could be introduced.
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            Counter Arguments
                        </h3>

                        <ul class="custom">
                            <li>
                                <b>A comprehensive tobacco control strategy seeks to reduce the devastating public
                                    health
                                    impact of smoking by as much as possible through an array of separate and
                                    complementary
                                    policy measures</b>. While different measures have a common overarching goal of
                                improving
                                public health, they have different objectives in how to achieve that goal.
                            </li>

                            <li>
                                <b>Plain packaging seeks to address the promotional and misleading impact of tobacco
                                    packaging</b>. No other alternative measure addresses that core aim of the policy.
                            </li>

                            <li>
                                <b>
                                    Taxation does not work to change the social attitude towards and perceptions of
                                    smoking.
                                </b>
                            </li>

                            <li>
                                <b>It is a core tenet of the WHO FCTC that contracting states should use a range of
                                    different measures to attack tobacco supply and demand from all angles</b>.
                                Tobacco-control
                                policies should be “comprehensive” and include a range of different measures that have a
                                variety of specific objectives.
                            </li>

                            <li>
                                <b>
                                     In the <a
                                            href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">legal
                                        claim against the UK regulations</a> the judge said:
                                </b>

                                <p class="p-states">
                                    “Combining tax and advertising measures is in contrast a strategy which addresses
                                    supply and demand from different angles and perspectives…
                                    it is hard to see how a tax which reduces the profits of the tobacco companies is
                                    more or less restrictive than advertising restrictions which achieve the same end…
                                    <br/>
                                    taxation does nothing to change attitudes about smoking or to “denormalise” a
                                    product which for decades has been perceived as normal.” [para. 671]
                                </p>

                                <p class="p-states">
                                    “BAT floated (asserted) the possibility that other measures would suffice. <u>No
                                        evidence has been adduced to support the contention … The Claimants’ argument
                                        amounts to mere assertion”</u> [paras. 657 and 668]
                                </p>
                            </li>

                            <li>
                                <b>
                                    And the UK Court of Appeal confirmed that:
                                </b>

                                <p class="p-states">
                                    “None of the claimed alternatives, including increased taxation, would achieve all
                                    of the objectives pursued by the Regulations and that they should be regarded
                                    instead as complementary measures forming part of a comprehensive tobacco control
                                    strategy, an approach supported by the FCTC.” [para. 243]
                                </p>
                            </li>
                        </ul>

                        <p>
                            These court rulings highlight the importance of formally establishing the precise aims and
                            objectives of plain packaging when developing the policy and adopting the law, and not
                            simply relying on it being a public health measure. See Guide 1.1 Set Policy Objectives for
                            more details
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            10. Branding on packs does not cause
                            people to start smoking

                        </h3>

                        <p>
                            The tobacco companies claim that branding on packs does not impact smoking initiation or
                            overall consumption — it only affects “brand switching” and market share. For more detail on
                            the research and evidence as to the effects of branding on tobacco packaging, see the
                            Tobacco Branding page of the Tools and Resources.
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The tobacco industry claims not to target children or non-smokers:
                        </h3>

                        <p>
                            <a href="http://www.bat.com/imp">British American Tobacco’s website</a> has stated that:
                        </p>

                        <p class="p-states">
                            “A fundamental requirement of our marketing principles is that our marketing is aimed only
                            at adult smokers and is not designed to engage or appeal to children.” ,<sup>1</sup>
                        </p>

                        <p>
                            Japan Tobacco International, in <a
                                    href="http://www.jti.com/files/8313/9204/2531/JTI_Submission_to_the_Oireachtas_Joint_Committee_on_Health_and_Children.pdf">its
                                submission to the Irish Joint Committee</a>
                            on Health and Children stated that:
                        </p>

                        <p class="p-states">
                            “Minors are well aware of the health risks of smoking, but may choose to experiment anyway .
                            . . Accordingly, measures focused on packaging are unlikely to be effective.” [para. 6.4]
                        </p>

                        <img width="500px" class="img-responsive center-block"
                             src="<?php echo $base_url; ?>img/ref-j/girl-with-tobacco-1024x738.jpg"/>
                        <br>&nbsp;<br>
                        <p>
                            And in <a
                                    href="http://www.jti.com/files/2014/7281/6956/JTI_response_to_Health_Canada_Consultation_on_Plain_and_Standardized_Packaging_for_Tobacco_Products._31_August_2016.pdf">JTI’s
                                response to the 2016 Canadian consultation</a> on plain packaging, it states that
                            there is no link between marketing and adolescent smoking initiation and that:
                        </p>
                        <p class="p-states">
                            “Branded packaging does not cause people to start or continue smoking . . . Branding does
                            not promote the generic act of product consumption, nor can it persuade someone to join a
                            mature, known category. Branded packaging conveys and builds upon brand attributes, and so
                            can only be meaningful in differentiating brands, which is irrelevant to non-smokers.” [pp.
                            32–34]
                        </p>
                        <p>
                            <a href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/323971/PDF_2.pdf">Philip
                                Morris’s submission to the 2012 UK consultation</a> <sup>2</sup> stated that:
                        </p>
                        <p class="p-states">
                            “There is overwhelming evidence which demonstrates that brands and packaging have nothing to
                            do with why young people begin smoking . . . [and] it cannot be demonstrated that packaging
                            has any effect on a person’s decision to smoke.”
                        </p>

                        <h3 class="fc-ref-mat-3 sub-title">
                            Tobacco companies continue to publicly argue that packing has no role in advertising or
                            promotion:
                        </h3>

                        <p>
                            The tobacco companies seek to blur the overwhelming view of marketing theory and evidence
                            that advertising affects overall consumption of a product. This despite all the internal
                            tobacco industry documents to the contrary (see theTobacco Branding pageof the Tools and
                            Resources).
                        </p>

                        <p>
                            Tobacco companies argue that branding only promotes brand switching by current smokers and
                            has no effect on overall primary demand. They say that even a small amount of brand
                            switching is worth a lot of money to them. However, cigarette brands enjoy the highest brand
                            loyalty of all consumer products, with fewer than 10 percent changing brands annually. Brand
                            choices are usually made early in the life of a smoker, with a high concordance between
                            brand first smoked and the brand eventually selected as a usual brand. Thus, once a smoker
                            embraces a cigarette brand, it is quite unlikely that they will change.
                        </p>

                        <p>
                            In
                            <a href="http://www.bat.com/group/sites/uk__9d9kcy.nsf/vwPagesWebLive/DO9MSFD3/$FILE/medMD9MWB4B.pdf?openelement">British
                                American Tobacco’s</a> submission to the 2014 UK consultation, <sup>3</sup> it stated:
                        </p>

                        <p class="p-states">
                            “At the outset, it must be recognised that packaging is not advertising. Packaging is the
                            identification of the product. Thus, the effect of advertising, which is banned in the UK,
                            is not relevant for the purposes of examining the effects of Plain Packaging that prohibits
                            the use of trade marks to identify and distinguish products.
                            <br/>

                            In any event, and contrary to what the Chantler Report states, the evidence is not "clear",
                            but rather is quite mixed, on the question of whether advertising causes or increases
                            aggregate consumption.” [paras. 7.17 – 7.18]
                        </p>

                        <p>
                            <a href="http://www.tobaccotactics.org/images/d/d1/IMT_secondconsultresp.pdf">Imperial
                                Tobacco in its response to the 2014 UK consultation</a> on standardized packaging,
                            stated that packaging has only 3 functions: physical (to protect the product); information
                            (health warnings, yield amounts, and recycling etc); and brand differentiation (allowing
                            customers to identify the brand of choice and driving competition as between tobacco
                            companies). <sup>4</sup>
                        </p>

                        <p>
                            <a href="http://www.jti.com/files/5714/0739/7636/JTI_UK_response_to_2014_Consultation.pdf">Japan
                                Tobacco International</a> states that:
                        </p>

                        <p class="p-states">
                            “JTI does not agree that branded packaging acts as an advertisement, but in any event, there
                            is a significant difference between acting as an advertisement for a cigarette brand, and as
                            an advertisement for the activity of smoking.”[para. 4.8]
                        </p>

                        <p>
                            The tobacco companies also made these arguments in their legal challenge to the plain
                            packaging laws in the UK. In his judgment dismissing the claim, the judge noted that:
                        </p>

                        <p class="p-states">
                            “The tobacco industry has sought to argue, in these proceedings and in others, that all of
                            its marketing activity, including packaging, aims solely to persuade existing adult smokers
                            to switch brands rather than to persuade people (including in particular children) to take
                            up smoking.” <sup>5</sup>
                        </p>

                        <p>
                            In their submission to the Norway consultation, JTI also sought to argue that tobacco
                            packaging does not influence smoking behavior. The company argued that packaging and
                            advertising are not the same and should not be conflated. It claims that fundamental
                            marketing theory shows that in a “mature market,” such as in Norway (where growth has slowed
                            and awareness of the product is universal), marketing is not to persuade non-users to try
                            the product but to persuade existing users to swap brands. They argue that branding promotes
                            brands not the act of smoking. <sup>6</sup>
                        </p>

                        <p>
                            Tobacco companies have been making this argument about the role of advertising in mature
                            markets for nearly three decades to seek to prevent any restrictions on tobacco advertising.
                            It is noted in the US Surgeon General’s report that, at a congressional hearing in 1989, an
                            industry spokesperson claimed that the function of advertising in a mature market “is to
                            promote brand loyalty or brand switching.” <sup>7</sup> Even then it was highlighted
                            that textbooks
                            state
                            that when faced with a so-called mature market, advertising firms can and often should
                            attempt to both increase usage among existing customers and to address potential new
                            users. <sup>8</sup>
                            The surgeon general also pointed out that the strongest indicator that tobacco companies
                            must seek out large numbers of new users stems from the feature of the tobacco market that
                            millions of its customers die every year and millions more quit. The only way to maintain
                            the mature market is to recruit new users.
                        </p>
                        <img width="600px" class="img-responsive center-block"
                             src="<?php echo $base_url; ?>img/ref-j/ref-j2.png"/>

                        <h3 class="fc-ref-mat-3 sub-title">
                            The Counter Arguments
                        </h3>

                        <ul class="custom">
                            <li>
                                <b>This argument has been made by tobacco companies for decades in relation to all
                                    restrictions on their advertising and promotion and has been rejected by all the
                                    research, evidence, and courts across the world</b>. The argument is equally false
                                when made
                                against plain packaging.
                            </li>

                            <li>
                                <b>The courts have repeated dismissed the industry argument</b>. In the legal challenge
                                to
                                the UK plain packaging regulations, the High Court judge stated:

                                <p class="p-states">
                                    <b>“This argument is unsustainable</b>. It is not possible to design a product to
                                    appeal to
                                    adults (over 18s) without appealing, even inadvertently, to children. A number of
                                    the tobacco companies have strenuously denied that they target their product on
                                    children or even that they are interested in the impact of tobacco on children. But
                                    the Government medical advisers all say that, targeted or not, the lure to children
                                    remains strong and this is plain and obvious to the manufacturers.” <sup>9</sup>
                                </p>
                            </li>

                            <li>
                                <b>The argument is contrary to the WHO FCTC and its guidelines</b>. These recognize that
                                tobacco packaging and product design are “important elements of advertising and
                                promotion” and recommend standardized packaging as a “means of eliminating the effects
                                of advertising or promotion on packaging. Packaging, individual cigarettes or other
                                tobacco products should carry no advertising or promotion, including design features
                                than make products attractive.”
                            </li>

                            <li>
                                <b>Encouraging young people to initiate smoking is critical to the tobacco industry’s
                                    survival</b>. As an internal tobacco industry document stated:

                                <p class="p-states">
                                    “The smoking patterns of teen-agers are particularly important to Philip Morris . .
                                    . the share index is highest in the youngest group for all Marlboro and Virginia
                                    Slims packings. At least a part of the success of Marlboro Red during its most rapid
                                    growth period was because it became the brand of choice among teenagers.”
                                    <sup>10</sup>
                                </p>

                                <p>
                                    Other internal documents show that a presentation to Philip Morris included the
                                    position that:
                                </p>

                                <p class="indented italic">
                                    “Packs aimed at younger women should be 'slick, sleek, flashy, glittery, shiny,
                                    silky, bold.” <sup>11</sup>
                                </p>
                            </li>

                            <li>
                                <b>Advertising executives contradict the industry arguments</b>: Advertising executive
                                Emerson Foote, former Chairman of the Board of international advertising agency
                                McCann-Erickson (which in the past had handled $20 million in tobacco account sales),
                                dismissed this:

                                <p class="p-states">
                                    “The cigarette industry has been artfully maintaining that cigarette advertising has
                                    nothing to do with total sales. This is complete and utter nonsense. I am always
                                    amused by the suggestion that advertising, a function that has been shown to
                                    increase consumption of virtually every other product, somehow miraculously fails to
                                    work for tobacco products.” <sup>12</sup>
                                </p>
                            </li>

                            <li>
                                <b>The independent Chantler Review</b> (see the Research Evidencepages of the Tools and
                                Resources for details) considered the evidence and found that:

                                <p class="-states">
                                    “Despite the long-held contention from the industry that all tobacco marketing is
                                    for the purpose of brand switching, there is clear evidence that exposure to tobacco
                                    advertising and promotion increases the likelihood of smoking.” <sup>13</sup>
                                </p>

                                <p class="indented">
                                    and
                                </p>

                                <p class="p-states">
                                    “it is significant that in other consumer goods markets, where children can safely
                                    be allowed to participate in experiments, it has been proven that appealing branding
                                    does influence consumption.”
                                </p>
                            </li>

                            <li>
                                <b>Packaging is recognized as an important component in of the overall marketing
                                    strategy
                                    for all consumer goods. Tobacco is no exception</b>. Packaging is particularly
                                important for
                                consumer products with a high degree of social visibility, such as cigarettes. Unlike
                                many other consumer products, cigarettes are contained in packages that are displayed
                                each time the product is used and are often left in public view between uses.
                            </li>

                            <li>
                                <b>The US Surgeon General summarized evidence in 2014 and concluded</b> that:

                                <p class="p-states">
                                    “The evidence is sufficient to conclude that advertising and promotional activities
                                    by the tobacco companies cause the onset and continuation of smoking among
                                    adolescents and young adults . . . . Tobacco advertising recruits new users during
                                    their youth.” <sup>14</sup>
                                </p>
                            </li>
                        </ul>

                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>
                        <p><sup>1</sup> From the British American Tobacco website <a href="http://www.bat.com/imp">http://www.bat.com/imp</a>
                            (accessed June 2017)</p>
                        <p><sup>2</sup> Available from:
                            <a href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/323971/PDF_2.pdf">https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/323971/PDF_2.pdf</a>.
                        </p>
                        <p><sup>3</sup> Available from: <a
                                    href="http://www.bat.com/group/sites/uk__9d9kcy.nsf/vwPagesWebLive/DO9MSFD3/0FILE/medMD9MWB4B.pdf?openelement">http://www.bat.com/group/sites/uk__9d9kcy.nsf/vwPagesWebLive/DO9MSFD3/$FILE/medMD9MWB4B.pdf?openelement</a>.
                        </p>
                        <p><sup>4</sup> Section 2.6.3, p. 25.</p>
                        <p><sup>5</sup> R (British American Tobacco &Ors) v.Secretary of State for Health [2016] EWHC
                            1169 (Admin). Paragraph 75. Available from:
                            <a href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf</a>.
                        </p>
                        <p><sup>6</sup> Of note is that JTI cites Kotler and Keller, Marketing Management (14th
                            edition), on this point. In fact no such assertion is made about mature markets in that book
                            but rather the book emphasizes the role of packaging as an advertising medium to increase
                            sales; see annex C for more details. </p>
                        <p><sup>7</sup> M.J. Elders. Preventing Tobacco Use Among Young People: A Report of the Surgeon
                            General, p. 174.</p>
                        <p><sup>8</sup> M.L. Rothschild.Advertising: from Fundamentals to Strategies Lexington (MA):
                            “advertising should stress new uses, new users, and new usage occasions in an attempt to
                            increase overall sales of the product class.”</p>
                        <p><sup>9</sup> R (British American Tobacco &Ors) v. Secretary of State for Health [2016] EWHC
                            1169 (Admin). Paragraph 75.</p>
                        <p><sup>10</sup> Philip Morris U.S.A.,M. Johnston, H. Daniel , and C. Levy. “Young Smokers —
                            Prevalence, Trends, Implications and Related Demographic Trends.” March 31, 1981. Ness
                            Motley Law Firm Litigation Documents. Available from:
                            <a href="https://www.industrydocumentslibrary.ucsf.edu/tobacco/docs/fgpb0040">https://www.industrydocumentslibrary.ucsf.edu/tobacco/docs/fgpb0040</a>
                            (accessed March 2,2017).
                        </p>
                        <p><sup>11</sup> Anon. “Opportunities in Packaging Innovation.” Philip Morris, 1992. Available
                            from: <a href="http://legacy.library.ucsf.edu/tid/hwe36e00">http://legacy.library.ucsf.edu/tid/hwe36e00</a>
                            (accessed January 29, 2017).</p>
                        <p><sup>12</sup> L. Heise. “Unhealthy Alliance” in World Watch. October 1988, p.20.</p>
                        <p><sup>13</sup> Para 3.7 Report of the Independent Review undertaken by Sir Cyril Chantler,
                            2014 available from:
                            <a href="http://www.kcl.ac.uk/health/10035-tso-2901853-chantler-review-accessible.pdf">http://www.kcl.ac.uk/health/10035-tso-2901853-chantler-review-accessible.pdf</a>.
                        </p>
                        <p><sup>14</sup> United States Department of Health and Human Services, Surgeon General, (2014).
                            Surgeon General’s Report on Smoking and Health.</p>

                        <div class="section-secondary-title fc-ref-mat-2">Tobacco company submissions to
                            governments
                        </div>
                        <p>
                            UK 2012 and 2014 consultations:
                        </p>
                        <ul>
                            <li>
                                <a href="https://www.gov
                                .uk/government/uploads/system/uploads/attachment_data/file/323971/PDF_2.pdf">Philip
                                    Morris International (2012)</a>
                            </li>
                            <li>
                                <a href="http://www.jti.com/files/4013/4149/4323/Packaging_Response.pdf">Japan Tobacco
                                    International (2012)</a>
                            </li>
                            <li>
                                <a href="http://www.tobaccotactics.org/images/d/d1/IMT_secondconsultresp.pdf">Imperial
                                    Tobacco (2014)</a>
                            </li>
                            <li>
                                <a href="http://www.bat.com/group/sites/uk__9d9kcy.nsf/vwPagesWebLive/DO9MSFD3/$FILE/medMD9MWB4B.pdf?openelement">British
                                    American Tobacco(2014)</a> (also available
                                <a href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/404457/PDF_15.pdf">here</a>
                                with full appendices)
                            </li>
                            <li>
                                <a href="http://www.tobaccotactics.org/images/5/56/PMI2014consultation.pdf">Philip
                                    Morris International (2014)</a>
                            </li>
                            <li>
                                <a href="http://www.jti.com/files/5714/0739/7636/JTI_UK_response_to_2014_Consultation.pdf">Japan
                                    Tobacco International(2014)</a>
                            </li>
                        </ul>

                        <p>
                            Irish Joint Committee on Health and Children in 2014:
                        </p>
                        <ul>
                            <li><a href="http://health.gov.ie/wp-content/uploads/2014/07/PJ-Carroll-submission.pdf">PJ
                                    Carroll (a subsidiary of BAT)</a></li>
                            <li>
                                <a href="http://www.jti.com/files/8313/9204/2531/JTI_Submission_to_the_Oireachtas_Joint_Committee_on_Health_and_Children.pdf">Japan
                                    Tobacco International</a></li>
                            <li><a href="http://health.gov.ie/wp-content/uploads/2014/07/Philip-Morris-i.pdf">Philip
                                    Morris International</a></li>
                        </ul>

                        <p>
                            New Zealand Health Committee of the House of Representatives in 2014:
                        </p>
                        <ul>
                            <li>
                                <a href="http://www.batnz.com/group/sites/bat_9vnkqw.nsf/vwPagesWebLive/DO9VNKV5/$FILE/medMD9JT3X7.pdf?openelement">British
                                    American Tobacco</a></li>
                        </ul>

                        <p>
                            Norwegian consultation on standardized packaging in 2015:
                        </p>
                        <ul>
                            <li>
                                <a href="http://www.jti.com/files/6314/3325/7250/JTI_submission_to_plain_packaging_and_FCTC_5_3_consultation_in_Norway_final_English.pdf">Japan
                                    Tobacco International</a></li>
                        </ul>

                        <p>
                            Australia’s Post-Implementation Review in 2015:
                        </p>
                        <ul>
                            <li>
                                <a href="http://www.pmi.com/eng/media_center/Documents/PML submission to plain packaging post implementation review - March 2015.pdf">Philip
                                    Morris International</a></li>
                            <li>
                                <a href="http://www.aph.gov.au/DocumentStore.ashx?id=198c8d4a-5c38-4b86-8fb7-fd4f25e71f1a&subId=402626">British
                                    American Tobacco</a></li>
                        </ul>

                        <p>Canada’s Consultation on plain packaging for tobacco products in 2016:</p>
                        <ul>
                            <li>
                                <a href="http://www.jti.com/files/2014/7281/6956/JTI_response_to_Health_Canada_Consultation_on_Plain_and_Standardized_Packaging_for_Tobacco_Products._31_August_2016.pdf">Japan
                                    Tobacco International</a></li>
                            <li>
                                <a href="http://www.imperialtobaccocanada.com/groupca/sites/IMP_7VSH6J.nsf/vwPagesWebLive/DOAJNFB7/$FILE/ITCAN_Consultation Response_Plain_and_Standardized_Packaging_for_Tobacco_Products_August 31,_2016.pdf?openelement">Imperial
                                    Tobacco Canada</a></li>
                        </ul>
                    </div>
            </section>
            <?php
            break;

        // k legal issues
        case 'legal-issues':
            if ($var == 'og_desc') {
                $og_desc = 'This Toolkit is intended to provide governments and civil society organizations with the resources to ensure that tobacco product plain packaging legislation is robust and can stand against any legal challenge from the tobacco industry. Following the recommended steps outlined in this Toolkit should lead to a strong, defendable law. Nevertheless, government officials need to be aware of the legal arguments that the industry use to challenge the laws and be prepared for the risks of a legal challenge.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r" id="Ref-K">
                    <!-- main header -->
                    <div class="col-lg-8 col-lg-offset-1">
                        <div><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                        <div class="section-margin-top-25 section-title fc-ref-mat-4">Legal issues in detail</div>
                    </div>
                    <!-- main header sidebar -->
                    <div class="col-lg-3">
                        <!-- 1 -->
                        <div class="sidebar-wrapper header-sidebar col-xs-12 sidebar-1">
                            <ul class="sidebar-nav">
                                <div class="sidebar-nav-header">LINKED<br>TOOLS AND RESOURCES</div>
                                <li>
                                    <a href="#item1">Case Summaries</a>
                                </li>
                                <li>
                                    <a href="#item2">Policy Brief: Is it Lawful?</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="content-desc-cont col-lg-8 col-lg-offset-1 ref -g1">
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">1. Introduction</div>
                            <p>
                                <b>The tobacco industry legal challenges to plain packaging have all so far been
                                    defeated</b>. Despite this, the tobacco companies continue to assert aggressively
                                that plain packaging is unlawful in every country that considers the policy.
                            </p>
                            <p>
                                This Toolkit is intended to provide governments and civil society organizations with the
                                resources to ensure that tobacco product plain packaging legislation is robust and can
                                stand against any legal challenge from the tobacco industry. Following the recommended
                                steps outlined in this Toolkit should lead to a strong, defendable law. Nevertheless,
                                government officials need to be aware of the legal arguments that the industry use to
                                challenge the laws and be prepared for the risks of a legal challenge.
                            </p>

                            <ul class="no-list-style">
                                <li>
                                    <p>
                                        <b>National courts</b>: Legal challenges have been commenced, and dismissed, in
                                        the domestic courts of most of the countries that have adopted plain packaging
                                        laws including Australia, the UK, Ireland and France.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <b>Regional courts</b>: A legal challenge to the European Union’s Tobacco
                                        Products Directive (TPD), dismissed in May 2016, included a claim against the
                                        provision in the TPD that permitted Member States to adopt plain packaging if
                                        they choose to.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <b>International courts</b>: An international investment arbitration claim
                                        brought by Philip Morris against Australia was dismissed by the Tribunal in
                                        December 2015. A World Trade Organization complaint brought by 4 countries
                                        against Australia is awaiting the panel’s ruling.
                                    </p>
                                </li>
                            </ul>

                            <p>Despite these very clear court rulings upholding plain packaging legislation around the
                                world, the tobacco companies continue to argue that the legislation is unlawful:</p>

                            <ul class="no-list-style">
                                <li>
                                    <p>
                                        <b>British American Tobacco’</b>s website states that plain packaging is
                                        “Legislation that we believe is ineffective and unlawful”<sup>1</sup>.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <b>Japan Tobacco International’</b>s website states that “plain packaging would
                                        infringe JTI's fundamental legal rights to property, expression and trade –
                                        without justification. These rights are protected by Constitutions,
                                        international trade treaties, intellectual property laws, bilateral investment
                                        treaties, and national laws.”<sup>2</sup>.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <b>Philip Morris International</b>, in response to the tribunal’s ruling
                                        dismissing the investment arbitration claim, stated: “There is nothing in
                                        today’s outcome that addresses, let alone validates, plain packaging in
                                        Australia or anywhere else”<sup>3</sup>
                                    </p>
                                </li>
                            </ul>

                            <p>For policy or health officials, these issues can appear to be complex and daunting at
                                first glance. These pages try to set them out in readily comprehensible terms. However,
                                assistance is also available from the CTFK International Legal Consortium to help state
                                officials understand these issues or respond to tobacco industry threats and
                                allegations.</p>
                        </div>
                        <div class="sidebar-anchor-item" id="item1"></div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">
                                1.1 The “right to use” a trademark
                            </div>

                            <p>The tobacco industry claims that plain packaging interferes with itstrademark rights in a
                                way that conflicts with domestic, regional, and international intellectual property laws
                                and obligations. Most of itsarguments rely— in some way— on the contention that
                                registered trademarksafford the owner a <i>positive right to use</i> that trademark.
                                They argue that this principle is found in international law, under the World Trade
                                Organization (WTO) Agreement on Trade-Related Aspects of Intellectual Property Rights
                                (TRIPS)as well as being recognized under national trademark laws as either an implicit
                                or explicit right.</p>

                            <p><span class="fc-ref-mat-4"><b>Internal documents from the tobacco companies</b></span>
                                also show that they received advice from their own lawyers, and from the director of the
                                World Intellectual Property Organization, dating as far back as 1994, that plain
                                packaging would not breach international intellectual property law.<sup>4</sup></p>

                            <p>In recent decisions, courts and tribunals havealso rejected this argument. Instead, these
                                bodies have adopted a traditional view thattrademark rights allow the owner to prevent
                                other people from using the trademark. This “right to exclude”does not include an
                                absoluteright to use the trademark in any and all situations but is limited,
                                particularly where a government is regulating and limiting the use inthe public
                                interest.<sup>5</sup></p>

                            <ul class="no-list-style">
                                <li>
                                    <p>
                                        <span class="fc-ref-mat-4"><b>In the UK</b></span>, in the judgment of the High
                                        Court in relation to the UK plain packaging regulations, the judge ruled:
                                    </p>
                                </li>
                                <li>
                                    <p><i>“It is no part of international, EU or domestic common law on intellectual
                                            property that the legitimate function of a trade mark (i.e. its essence or
                                            substance) should be defined to include a right to use the mark to harm
                                            public health.”</i><sup>6</sup> [¶40]. </p>
                                </li>
                                <li>
                                    <p><span class="fc-ref-mat-4"><b>In the PMI v Uruguay</b></span> investment
                                        arbitration claim the tribunal stated:</p>
                                </li>
                                <li>
                                    <p><i>“It is a right of use that exists vis-à-vis other persons, an exclusive right,
                                            but a relative one. It is not an absolute right to use that can be asserted
                                            against the State”<sup>7</sup></i> [¶267] <i>“The Tribunal concludes that
                                            under <u>Uruguayan law or international conventions</u>. . . the trademark
                                            holder does not enjoy an absolute right of use, free of regulation.”</i>
                                        [¶271]</p>
                                </li>
                                <li>
                                    <p>
                                        <span><b class="fc-ref-mat-4">A WTO dispute panel</b> (in relation to a case not concerning tobacco trademarks) has previously confirmed this view:</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i>“These principles reflect the fact that the [WTO TRIPs Agreement] does not
                                            generally provide for the grant of positive rights to exploit or use certain
                                            subject matter, but rather provides for the grant of negative rights to
                                            prevent certain acts. <u>This fundamental feature of intellectual property
                                                protection inherently grants Members freedom to pursue public policy
                                                objectives. . . .</u>”<sup>8</sup></i>
                                    </p>
                                </li>
                            </ul>

                            <p>Legal academics have also affirmed the position of plain packaging under international
                                and intellectual property law in a number of published papers.<sup>9</sup></p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                The “exclusive right to use” in national trademark acts.
                            </h3>
                            <p>In most countries, national trademark legislation clearly sets out the nature of the
                                right conferred on a trademark owner as being a right to exclude or prevent others from
                                using the trademark for the product or service for which it is registered.<sup>10</sup>
                                However, in some countries, the trademark legislation is drafted to afford the owner an
                                “exclusive right to use” the trademark.</p>

                            <p>One example is the Australian Trade Marks Act 1995 <sup>11</sup>:</p>

                            <ul class="no-list-style">
                                <li>
                                    <p>
                                        <b>Section 20: Rights given by registration of trade mark</b>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        (1) If a trademark is registered, the registered owner of the trademark has,
                                        subject to this Part, the exclusive rights:<br><span
                                                class="padding-left-25">(a)</span> to use the trademark; and<br>
                                        <span class="padding-left-25">(b)</span> to authorise other persons to use the
                                        trademark;
                                    </p>
                                </li>
                                <li>
                                    <p>in relation to the goods and/or services in respect of which the trademark is
                                        registered.</p>
                                </li>
                            </ul>

                            <p>The tobacco companies’ constitutional legal claim against plain packaging in Australia
                                led to a decision on the nature of the trademark right under the Australian
                                Constitution. The Australian High Court ruled that the right conferred by trademarks was
                                exclusive in nature and could only be asserted to stop others from using the mark. The
                                right could not be used to prevent government regulations that restricted the companies’
                                use of their trademarks. The Court said:</p>

                            <ul class="no-list-style">
                                <li>
                                    <p>“Strictly speaking, the right subsisting in the owner of a trademark is a
                                        negative and not a positive right. It is to be understood as a right to exclude
                                        others from using the mark and cannot be viewed as separate from the trade in
                                        connection with which it is used.” [para 348]</p>
                                </li>
                            </ul>

                            <p>While the decisions on the nature of trademarks have held in favor of an “exclusive
                                right,” intellectual property law issues are complex. Plain packaging policies do place
                                strict restrictions and controls on the use of trademarks on product packaging. Given
                                these restrictions it is important that separate legal consideration is given to the way
                                in which plain packaging laws would interact with domestic or national intellectual
                                property laws.</p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4">Trademark-saving provision</h3>
                            <p>
                                It is always important to include a trademark-saving provision in the plain packaging
                                legislation (see <a
                                        href="<?php echo $base_url; ?>crafting-the-legislation/draft-the-law"><b>GUIDE
                                        3.2 Draft the Law</b></a> and the <a
                                        href="<?php echo $base_url; ?>resources/drafting-the-legislation-in-detail"><b>EACH
                                        CLAUSE EXPLAINED</b></a> page of the Tools and Resources) possibly an explicit
                                exemption will need to be included.
                            </p>
                        </div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">1.2 Compatibility with national trademarks
                                laws / design acts
                            </div>
                            <p>As indicated above in section 2.1, the main concern as to compatibility with national
                                intellectual property laws is the argument that registration provides an explicit or
                                implicit right to use the trademark or design, which is breached by the restrictions in
                                plain packaging laws. The tobacco companies raise some other issues.</p>
                            <p>While there may be some complexity to these legal arguments, they are basically a
                                different way of arguing for a “right to use” the tobacco trademarks. As shown in 2.1
                                above, these arguments have been rejected by the Courts.</p>
                            <p><span class="fc-ref-mat-4"><b>Plain packaging deprives the trademarks of their essential functions.</b></span>
                                The tobacco companies state that trademarks have a number of essential functions
                                including:</p>

                            <ul class="custom">
                                <li>to distinguish the product in question as originating from a particular undertaking
                                    or producer
                                </li>
                                <li>to prevent confusion for the consumer</li>
                                <li>to guarantee the identity of the origin of the product to the consumer</li>
                                <li>to guarantee quality</li>
                            </ul>

                            <p>The companies argue that where tobacco advertising bans exist, packaging is the only
                                remaining place that word and figurative trademarks for tobacco products is still
                                permitted and so can perform these essential functions. The tobacco companies argue that
                                courts have upheld the fundamental importance of these essential functions of
                                trademarks.</p>

                            <p>
                                <span class="fc-ref-mat-4"><b>Trademarks with a high reputation</b></span> Some national
                                trademark acts provide increased protections for trademarks that have acquired a higher
                                reputation. The tobacco companies argue that because plain packaging means they cannot
                                use their trademarks, the reputation of those marks will be reduced, and thus they will
                                lose protections that were previously guaranteed under national law.
                            </p>

                            <p>
                                <span class="fc-ref-mat-4"><b>Revocation of a trademark for non-use:</b></span> Many
                                national trademark acts have a provision that allows an application for revocation of a
                                trademark’s registration where it has not been used for five years or more and there is
                                no good reason for its non-use. The tobacco companies argue that plain packaging will
                                inevitably mean they do not use their trademarks, which could lead to applications for
                                revocation. This could lead to them being deprived of their marks. This argument can be
                                addressed effectively with a trademark-saving provision as outlined in <a
                                        href="<?php echo $base_Url; ?>crafting-the-legislation/draft-the-law"><b>Guide
                                        3.2</b></a>
                            </p>
                        </div>

                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">1.3 Unlawful acquisition or deprivation of the property
                                rights in trademarks</h3>
                            <p>The tobacco companies claim that restricting or controlling the use of trademarks on the
                                packaging of tobacco products through plain packaging laws, has the effect of “taking”
                                or “appropriating” their property rights in those trademarks.</p>
                            <p>It is generally accepted that trademarks are a form of property, and so there is the
                                potential for the trademarks rights to be taken or acquired by others. The issue is then
                                whether plain packaging laws result in a regulatory or indirect “taking” for which
                                tobacco companies should receive compensation.</p>
                            <p>Property rights, or the freedom to peaceful enjoyment of property, are protected in many
                                countries’ constitutions, as well as in regional Human Rights treaties. In addition,
                                foreign investors are given protections under international investment treaties to
                                prevent the unlawful “expropriation” of their investments by states. Different
                                jurisdictions use different terminology for this taking, such as
                                “expropriation,”“acquisition,” or “deprivation” and varying legal tests are applied.
                                These claims that plain packaging amounts to expropriation of these rights have been
                                rejected by courts across all jurisdictions:</p>
                            <ul class="no-list-style">
                                <li>
                                    <p>
                                        <span class="fc-ref-mat-4"><b>In Australia,</b> the High Court firmly rejected these arguments, stating that,although the Tobacco Plain Packaging Act regulated intellectual property rights and imposed controls on the packaging of tobacco products,it did not confer a proprietary benefit on the Commonwealth or any other person. As a result, no one acquired any property by registering a trademark. </span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="fc-ref-mat-4"><b>In the UK,</b> the High Court determined that plain packaging is merely a legitimate control on the use of the trademarks. Consequently,no acquisition or deprivation results from plain packaging laws. The judgment on the UK regulations went on to say that, even if there had been a deprivation, it would be justified <i>without compensation</i> owing to the urgent need to protect against the harms of tobacco. This was confirmed by the Court of Appeal ruling. </span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="fc-ref-mat-4"><b>In France,</b> the Conseild'État found that the right not to be deprived of property poses no obstacle to the regulation of goods in the public interest provided the measure is proportionate. The Court held that while the effects of plain packaging are hard to quantify, <i>the regulations must be regarded as unable to do anything other than, reduce tobacco consumption over time</i> and, consequently, are a proportionate measure. </span>
                                </li>
                                <li>
                                    <p>
                                        <span class="fc-ref-mat-4"><b>In PMI v.Uruguay,</b> an international investment tribunal dismissed a claim by Philip Morris against Uruguay’s 80% health warnings and Single Presentation Requirement that prevented multiple brand variations. Part of the claim was that the measures had the effect of “expropriating” Philip Morris’s trademarks and brands, in breach of the Bilateral Investment Treaty — this claim was unanimously rejected by the panel. </span>
                                    </p>
                                </li>
                            </ul>

                            <p>See the <a href="<?php echo $base_url; ?>resources/case-summaries">Case Summaries</a>
                                page for more details on these cases.</p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                1.4 Freedom of expression and freedom to conduct a business or trade
                            </h3>
                            <p>Many national constitutions, as well as regional human rights treaties, provide for the
                                right to freedom of expression and the right to conduct a business or trade. The tobacco
                                industry has claimed that plain packaging laws violate these rights. </p>
                            <p>In any system of rights, there is a balance to be struck between competing rights and
                                freedoms. The freedoms relied upon by the tobacco industry are never expressed in
                                absolute terms and are always subject to laws enacted for the public interest. In many
                                legal systems, the freedom of <i>commercial</i> expression is given a lower priority
                                than other forms of expression, such as political or journalistic freedom of expression.
                                In the case of plain packaging laws, freedom of expression must be balanced against the
                                right to life or health, or simply the inherent right of the state to regulate for the
                                public good.</p>
                            <ul class="no-list-style">
                                <li>
                                    <p>
                                        <span class="fc-ref-mat-4"><b>In the UK,</b></span> the High Court (confirmed by
                                        the Court of Appeal) found that any interference by plain packaging laws with
                                        the right to freedom of commercial expression (under the European Convention on
                                        Human Rights or the EU Fundamental Charter) would be justified by the overriding
                                        public health interests.<sup>12</sup>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="fc-ref-mat-4"><b>In France,</b></span> the Conseil Constitutionel
                                        took a similar approach in respect of Article 2 of the 1789 Declaration (right
                                        to free enterprise), holding that, by enacting plain packaging laws, the
                                        Parliament intended to deprive tobacco products of a form of advertising likely
                                        to encourage consumption. The laws did not prohibit production distribution or
                                        sale of tobacco and there was therefore no disproportionate interference with
                                        the rights to property or free enterprise.<sup>13</sup>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="fc-ref-mat-4"><b>In the European Union,</b></span> in the tobacco
                                        companies’ challenge to the Tobacco Products Directive, the opinion of the
                                        Advocate General to the Court was that the right to conduct a business may be
                                        subject to a broad range of interventions on the part of public authorities,
                                        which may limit the exercise of economic activity in the public interest.
                                        Moreover, the Union legislature has a broad discretion in an area that involves
                                        political, economic, and social choices and in which it is called upon to
                                        undertake complex assessments and evaluations.<sup>14</sup>
                                    </p>
                                </li>
                            </ul>
                            <p>See the <a href="<?php echo $base_url; ?>resources/case-summaries">Case Summaries</a>
                                page for more details on these cases.</p>
                            <p>However, in some jurisdictions these freedoms are given greater priority. For instance,
                                in the USA, the priority given to the right to commercial freedom of expression would
                                make it more difficult for plain packaging to get past constitutional objections. In
                                Sweden, a public inquiry into a review of the Tobacco Control Act stated that plain
                                packaging of tobacco would be compliant with the European Convention Human Rights and
                                all European Union law but would not be compatible with the current provisions of the
                                Freedom of the Press Act; and should only be introduced if an exception making such a
                                requirement is introduced in the Constitution.<sup>15</sup></p>
                            <p>An assessment of these issues needs to be undertaken for each country. However, all the
                                courts that have considered the legislation thus far have found that plain packaging
                                regulation is no different to regulations for warnings or labeling imposed on other
                                products, especially potentially dangerous consumer products. For plain packaging, the
                                balance has always been found to be in favor of the government’s right to regulate to
                                protect public health rather than commercial interests.</p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                1.5 Not justified or supported by the evidence
                            </h3>
                            <p>The issue of whether there is sufficient evidence or not that the policy will contribute
                                to or achieve its objectives goes to the heart of many legal tests. These legal tests
                                vary between jurisdictions but, as is stated throughout this Toolkit, the tobacco
                                companies have consistently claimed that there is no evidence to demonstrate plain
                                packaging will work to reduce smoking rates. The companies have commissioned numerous
                                reports that criticise the supporting evidence, either as individual studies or as a
                                whole. Full details are provided on the <a
                                        href="<?php echo $base_url; ?>resources/opposing-arguments-and-how-to-counter-them"><b>Opposing
                                        Arguments (and how to counter them)</b></a> page of the Tools and Resources.</p>
                            <p>However, this Toolkit also clearly establishes the volumes of evidence that show plain
                                packaging will be an effective component of a comprehensive tobacco-control strategy.
                                See the evidence pages of the <b>Tools and Resources.</b></p>
                            <ul class="no-list-style">
                                <li>
                                    <p>
                                        <span class="fc-ref-mat-4"><b>The High Court challenge against the UK Regulations was the first (and as yet only) legal challenge that addressed the evidence on both sides in detail.</b></span>
                                        The 400-page judgment of Mr Justice Green goes to considerable length to assess
                                        this evidence.
                                    </p>
                                </li>
                                <li>
                                    <p>The judge’s conclusion was that the <i>“qualitative evidence relied upon by the
                                            [Government] is cogent, substantial and overwhelmingly one-directional in
                                            its conclusion.”</i>[para 492]</p>
                                </li>
                                <li>
                                    <p>He was then scathing in his criticism of the evidence put forward by the tobacco
                                        companies because it was not peer reviewed, either ignored or airily dismissed
                                        the worldwide research and literature base,and was frequently unverifiable. He
                                        made detailed critiques of each of the expert reports put forward by the tobacco
                                        companies and concluded that this <i>“body of expert evidence does not accord
                                            with internationally recognised best practice.”</i> [para 374]</p>
                                </li>
                                <li>
                                    <p>Mr Justice Green made particular critical note of the fact that the tobacco
                                        companies refused to provide access to any internal research or documentation on
                                        plain packaging, even to their own instructed experts. More detail on this is
                                        given below in the case summary.</p>
                                </li>
                            </ul>
                            <p>See the <a href="<?php echo $base_url; ?>resources/case-summaries">Case Summaries</a>
                                page for more details on these UK challenge.</p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                1.6 An unreasonable, disproportionate, or unnecessary measure
                            </h3>
                            <p>These arguments concern the justification for the measure considering the benefit of the
                                public interest relative to the burden it places on the applicant. Similar principles
                                are applied across many legal jurisdictions, both national and international, and
                                consider whether or not the measure has a legitimate objective and if the measure is
                                both suitable and necessary to achieve its objectives.</p>
                            <p>There is often a balancing of the importance of the objective, the extent to which the
                                measure is capable of achieving the objective, and the degree of interference with an
                                applicant’s interests. <a
                                        href="<?php echo $base_url; ?>getting-prepared/set-policy-objectives">Guide 1.1
                                    Set policy objectives</a>, describes the importance of setting clear and measurable
                                objectives for plain packaging. Without clear objectives, courts are faced with a more
                                difficult task in determining this balance. </p>
                            <p>Courts are generally willing to accept that tobacco control measures have a legitimate
                                public health objective. The tobacco industry seeks to argue that there is no evidence
                                to support the contention that plain packaging will be effective to reduce smoking rates
                                (and so it is unsuitable to meet its objectives) and that there are alternative more
                                effective measures at reducing smoking rates (and so plain packaging is
                                <i>unnecessary</i>).</p>
                            <p>A court or tribunal must therefore undertake an analysis of the evidence in support of
                                the measure to see if it is justified. The intensity of that analysis, the margin of
                                appreciation, or how much deference is given to the government in taking decisions about
                                public health will vary between jurisdictions.</p>
                            <p>For instance, in their challenge to the UK Regulations, the tobacco companies claimed
                                that the government:</p>
                            <ul class="no-list-style">
                                <ul class="no-list-style">
                                    <li>
                                        <p>“failed to discharge the burden [it] bears of proving that the Regulations
                                            are proportionate. In particular:</p>
                                    </li>
                                    <li>
                                        <p>(a) The objective of the Regulations is ‘improving public health by reducing
                                            smoking’. The Defendant has failed to demonstrate that the Regulations are
                                            suitable or appropriate to meet this objective because it has failed to
                                            establish that the Regulations will cause a material decrease in smoking
                                            rather than an increase.”<sup>16</sup></p>
                                    </li>
                                    <li>
                                        <p>And “the evidence does not show that there are no equally effective but less
                                            restrictive alternatives.”<sup>17</sup></p>
                                    </li>
                                </ul>
                                <li>
                                    <p><span class="fc-ref-mat-4"><b>In both the UK and France,</b></span> the courts
                                        found that plain packaging was a reasonable, proportionate and necessary measure
                                        having regard to its objectives and the great harms caused by tobacco. </p>
                                </li>
                                <li>
                                    <p><span class="fc-ref-mat-4"><b>The French Conseild'État</b></span> found that
                                        plain packaging regulations must be regarded as unable to do anything other than
                                        reduce the consumption of tobacco products over time and, consequently, are a
                                        proportionate means to ensure the accomplishment of the objective of protecting
                                        public health. </p>
                                </li>
                                <li>
                                    <p><span class="fc-ref-mat-4"><b>In the UK High Court,</b></span> the tobacco
                                        companies argued that the UK could have introduced less restrictive measures
                                        such as an increase in tobacco taxes, increasing the minimum age for buying
                                        tobacco and educational campaigns. The judge stated that, in respect of all
                                        these submissions, no <i>supporting evidence was adduced</i> and that “The
                                        Claimants’ argument amounts to mere assertion.” [para 668]</p>
                                </li>
                                <li>
                                    <p><span class="fc-ref-mat-4"><b>In the UK Court of Appeal,</b></span> the court
                                        confirmed that <i>“none of the claimed alternatives, including increased
                                            taxation, <u>would achieve all of the objectives pursued by the
                                                Regulations</u> and that they should be regarded instead as
                                            complementary measures forming part of a comprehensive tobacco control
                                            strategy, an approach supported by the FCTC.”</i> [para 243]</p>
                                </li>
                            </ul>
                            <p>This finding by the UK Court of Appeal reinforces the importance of setting out all the
                                objectives of the legislation (including reducing the appeal of packaging, enhancing the
                                health warnings, and reducing the misleading effect of packaging) in official documents
                                and not to just rely on plain packaging being a policy to reduce smoking. It is also
                                important to consider the various alternatives put forward in the course of consultation
                                or stakeholder input (see <a
                                        href="<?php echo $base_url; ?>collecting-the-evidence/evidence-review">Guide 2.1
                                    Evidence Review</a> and <a
                                        href="<?php echo $base_url; ?>collecting-the-evidence/stakeholder-input-public-consultation">Guide
                                    2.3 Stakeholder Input / Consultation</a>).</p>
                            <p>See the <a href="<?php echo $base_url; ?>resources/case-summaries">Case Summaries</a>
                                page for more details on cases mentioned above.</p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                1.7 Introduced without proper due process
                            </h3>
                            <p>
                                This issue concerns the way in which a government conducted the policy development and
                                legislative process. The tobacco industry will often argue that tobacco control measures
                                were adopted:
                            </p>
                            <ul class="custom">
                                <li>without the government giving proper consideration to all the evidence and issues;
                                </li>
                                <li>without proper consultation with, or input from,affected stakeholders, such as the
                                    companies;
                                </li>
                                <li>without using fair and transparent procedures; or</li>
                                <li>using procedures that are not in accordance with a country’s constitutional and
                                    administrative rules.
                                </li>
                            </ul>
                            <p>The steps set out in this Toolkit, adapted for compliance with national administrative
                                processes, should provide a sound procedural basis for adopting plain packaging.</p>
                            <ul class="no-list-style">
                                <li>
                                    <span class="fc-ref-mat-4"><b>In the legal claims in the UK and France,</b></span>
                                    the tobacco companies made different technical due-process claims. These were
                                    rejected by the courts in both cases, but these are fact specific issues that
                                    concern the procedures used by each government.
                                </li>
                            </ul>
                            <p>The dissenting opinion of one of the arbitrators in the <i>PMI v. Uruguay</i> case held
                                that there was no documentary record that the Ministry of Health had given any proper
                                consideration to the single presentation requirement before it was adopted, and that
                                arbitrator found Uruguay in breach of its duty to provide “fair and equitable
                                treatment.”While the majority of the tribunal did not agree, this acts as a cautionary
                                reminder that to protect against tobacco industry legal challenges, officials should
                                ensure both proper consideration of the evidence and issues, and make careful records of
                                the policy development and decision making process (see <a
                                        href="<?php echo $base_url; ?>establish-document-development-retention">Guide
                                    1.2: Establish a document record</a>).</p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                1.8 Violates the World Trade Organization agreements
                            </h3>
                            <p>World Trade Organization (WTO) law limits the way in which WTO Members may restrict or
                                regulate international trade in goods and services, and also imposes obligations on the
                                protection of intellectual property rights. The law is enforced through a system of
                                dispute settlement between its Members. This means only the governments of other WTO
                                Member States may bring a complaint that may then be referred to a dispute panel. A
                                panel ruling may be appealed to the Appellate Body.</p>
                            <p>The tobacco companies regularly allege in letters and submissions to governments that
                                effective tobacco packaging and labeling laws, including large health warnings and plain
                                packaging, breach the WTO agreements. Ministry of Health officials need to be robust in
                                responding to or dealing with these allegations.</p>
                            <p>At the time of writing, a WTO panel is determining complaints against Australia’s plain
                                packaging laws brought by Cuba, the Dominican Republic, Honduras, and Indonesia. The
                                ruling is expected in July 2017. More details about this case are given in the <a
                                        href="<?php echo $base_url; ?>resources/case-summaries">Case Summaries</a> page.
                                The main claims made by the complainant countries are that plain packaging:</p>
                            <ul class="no-list-style">
                                <li><p>1. breaches the WTO’s Agreement on Trade-Related Aspects of Intellectual Property
                                        Rights (TRIPS Agreement) by failing to provide protection of trademark rights as
                                        required under that agreement, including by unjustifiably encumbering the use of
                                        trademarks in the course of trade.</p></li>
                                <li><p>2. breaches the WTO’s Agreement on Technical Barriers to Trade because it
                                        constitutes a “technical regulation” that is “more trade-restrictive than
                                        necessary to fulfil a legitimate objective.”</p></li>
                                <li><p>3. breaches the WTO’s General Agreement on Tariffs and Trade (GATT 1994), the
                                        Agreement on Technical Barriers to Trade, and the TRIPS Agreement because the
                                        measure discriminates between like imported and domestic products, as well as
                                        discriminating between like imported products.</p></li>
                            </ul>
                            <p>
                                The Australian Government has published an executive summary of its legal arguments
                                refuting these claims, available here:<br><a
                                        href="http://dfat.gov.au/international-relations/international-organisations/wto/wto-dispute-settlement/Pages/wto-disputes-tobacco-plain-packaging.aspx">http://dfat.gov.au/international-relations/international-organisations/wto/wto-dispute-settlement/Pages/wto-disputes-tobacco-plain-packaging.aspx</a>
                            </p>
                            <p><span class="fc-ref-mat-4"><b>The World Health Organization (WHO) publication on plain packaging of tobacco products,</b></span>
                                in section 3.2.1, contains a useful summary of the main elements of WTO law relevant to
                                tobacco plain packaging. The document highlights that there are well-established
                                principles (regularly ignored by the tobacco industry) that demonstrate the flexibility
                                WTO Members have to regulate in the public interest and that protection of human health
                                is accorded the highest importance in WTO dispute settlement. The full publication is
                                available here:<br><a
                                        href="http://www.who.int/tobacco/publications/industry/plain-packaging-tobacco-products/en/">http://www.who.int/tobacco/publications/industry/plain-packaging-tobacco-products/en/</a>
                            </p>
                            <p>The WTO dispute panel determining the complaints against Australia (and ultimately the
                                appellate body if the ruling is appealed) will be the final arbiter of these
                                issues.However, it is useful to note that a number of national courts and international
                                tribunals have also considered whether plain packaging or other tobacco packaging
                                measures breach the WTO rulings.</p>
                            <ul class="no-list-style">
                                <li>
                                    <p><span class="fc-ref-mat-4"><b>In both the UK and France</b></span> the tobacco
                                        companies’ legal challenges before the national courts included claims that the
                                        governments were in breach of their international obligations because plain
                                        packaging laws violated the WTO agreements, in particular the TRIPS agreement.
                                        The courts in both countries rejected these claims. </p>
                                    <p><span class="fc-ref-mat-4"><b>In the PMI v Uruguay arbitration claim,</b></span>
                                        the tribunal held that Uruguay’s packaging requirements did not violate
                                        Uruguay’s international obligations in particular under the WTO agreements. </p>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                1.9 Breaches international investment treaties
                            </h3>
                            <p>International Investment Treaties (IITs) are agreements between two or more countries.
                                These agreements give investors located in one party to the IIT protections and legal
                                security for their direct investments into the other party or parties to the IIT. The
                                purpose of IITs is to encourage more direct foreign investment. Almost all nations
                                across the globe have signed up to these agreements and the protections they afford to
                                foreign investors.</p>
                            <p>Most IITs include what is known as Investor-State Dispute Settlement (ISDS) provisions.
                                These provisions provide a system for foreign investors to commence an arbitration claim
                                if the investor believes the government of the host nation has breached their
                                obligations under the IIT. The measures that are challenged can sometimes be genuine,
                                public-interest policies or decisions to protect the environment or public health but
                                which in some way affect the use of the investment or its value.</p>
                            <p><span class="fc-ref-mat-4"><b>These claims can be for millions, sometimes billions of dollars in compensation, and the arbitration lawsuits typically take many years to resolve and involve huge legal bills.</b></span>
                                However, one of the primary aims of the tobacco industry in bringing these claims is to
                                create “regulatory chilling effect” and deter other governments from enacting effective
                                tobacco-control regulation. </p>
                            <p><span class="fc-ref-mat-4"><b>Philip Morris has brought two international arbitration claims against tobacco-control</b></span>
                                under Bilateral Investment Treaties — the first against Uruguay’s 80% health warnings
                                and its Single Presentation Requirement; the second against Australia’s plain packaging
                                laws. <span class="fc-ref-mat-4"><b>Both claims were dismissed.</b></span> The tribunal
                                in the claim against Australia’s plain packaging declined jurisdiction on the basis that
                                the claim was an “abuse of rights,” so the merits were not determined. A short summary
                                of these cases and the awards is given below. </p>
                            <p><span class="fc-ref-mat-4"><b>Although the case against Uruguay did not concern plain packaging legislation, the ruling has significant relevance to the legality of the policy as it concerns many of the broad themes set out above. In particular, the tribunal found that the tobacco-control measures were not an expropriation of property, that there was no “right to use” a trademark, and that the measures were compatible with the WTO agreements.</b></span>
                            </p>
                            <p></p>
                        </div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">2 COURT RULINGS ON THE KEY LEGAL ISSUES
                            </div>
                            <p>The legal claims against plain packaging have broad similarities across jurisdictions.
                                The table below sets out the typical legal claims made by the tobacco companies in their
                                challenges and what the courts and tribunals have ruled on those claims. The rulings and
                                judgments used are from the cases detailed in part 4 of this Tools and Resources
                                section. Relevant paragraph numbers from the rulings are given in square brackets
                                [¶].</p>
                            <table class="table table-inner table-condensed table-responsive">
                                <thead class="bg-brown">
                                <tr>
                                    <th class="col-lg-5">
                                        What the Tobacco companies claim

                                    </th>
                                    <th class="col-lg-7">
                                        What the Courts have said when dismissing the claims
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-bg-light-blue">
                                    <td valign="middle">
                                        <b>The policy is not “justified,”“necessary,” or “proportionate”</b>
                                    </td>
                                    <td>
                                        <p><b>UK:</b> “The Secretary of State has adduced ample evidence to support the
                                            suitability and appropriateness of the Regulations.”[¶35]</p>
                                        <p>The Regulations are “about saving children from a lifetime of addiction, and
                                            children and adults from premature death and related suffering and disease.
                                            I therefore reject the Claimants’ case that the Regulations are
                                            disproportionate.” [¶36]</p>
                                        <p><b>UK Appeal Court:</b> “None of the claimed alternatives, including
                                            increased taxation, would achieve all of the objectives pursued by the
                                            Regulations and. . . they should be regarded instead as complementary
                                            measures forming part of a comprehensive tobacco control strategy.” [¶243]
                                        </p>
                                        <p><b>Australia High Court:</b> plain packaging requirements “are no different
                                            in kind from any legislation that requires labels that warn against the use
                                            or misuse of a product.” [¶181]</p>
                                        <p><b>EU:</b> “The requirements contained in the Directive relating to the
                                            shape, size and minimum content of cigarette packets make a particular
                                            contribution to increasing the visibility of health warnings and maximising
                                            their efficacy”. . . “the purely economic interest in the greatest possible
                                            inter-product and inter-brand competition must be secondary to the
                                            protection of human health.” [¶190&193 AG opinion]</p>
                                        <p><b>France Conseild’État:</b> “Neither the legislature nor the regulatory
                                            authorities have. . . disregarded a fair balance between the requirements of
                                            the public interest and the protection of the right of property.” [¶29
                                            translated]</p>
                                    </td>
                                </tr>
                                <tr class="table-bg-light-brown">
                                    <td valign="middle">
                                        <b>The evidence does not show that plain packaging will work to reduce smoking
                                            rates</b>
                                    </td>
                                    <td>
                                        <p><b>UK:</b> “In my judgment the qualitative evidence relied upon by the
                                            [Government] is cogent, substantial and overwhelmingly one-directional in
                                            its conclusion” that plain packaging will be effective.[¶592] </p>
                                        <p><b>France Conseild’État:</b> “It is nevertheless clear from other studies and
                                            expert reports cited by the Minister of Health, that plain packaging may
                                            reduce the attractiveness of tobacco products and to change the perception
                                            of consumers. If the effects. . . are difficult to quantify a priori, such
                                            regulations must nevertheless be regarded as being able only to help reduce
                                            future consumption tobacco products.”[¶28] </p>
                                    </td>
                                </tr>
                                <tr class="table-bg-light-blue">
                                    <td valign="middle">
                                        <b>Plain packaging is an “expropriation,”“deprivation,” or “acquisition” of the
                                            property rights in their trademarks</b>
                                    </td>
                                    <td>
                                        <p><b>UK:</b> “title to the rights in issue remains in the hands of the tobacco
                                            companies; the Regulations curtail the use that can be made of those
                                            [trademark] rights but they are not expropriated.”[¶38]</p>
                                        <p>“There are no cases where compensation has been paid for the curtailment of
                                            an activity which is unequivocally contrary to the public interest. In my
                                            judgment the facts of the case are exceptional such that even if this were a
                                            case of absolute expropriation no compensation would be payable.”[¶811]</p>
                                        <p><b>Australia High Court:</b> “Neither the Commonwealth nor any other person
                                            acquired any property.” [Official court summary]</p>
                                        <p><b>FranceConseilConstitutionnel:</b> “The provisions do not prevent use of
                                            brand names allowing consumers to identify the product; the use of the
                                            trademark is just strictly regulated; the right to exclude others remains;
                                            and therefore there is no deprivation of property.” [¶20 translated]</p>
                                    </td>
                                </tr>
                                <tr class="table-bg-light-brown">
                                    <td valign="middle">
                                        <b>Plain packaging is incompatible with intellectual property laws and the
                                            “right to use” a trademark</b>
                                    </td>
                                    <td>
                                        <p><b>UK:</b> “It is no part of international, EU or domestic common law on
                                            intellectual property that the legitimate function of a trademark (i.e. its
                                            essence or substance) should be defined to include a right to use the mark
                                            to harm public health.” [¶40]</p>
                                        <p><b>Uruguay:</b> “under Uruguayan law or international conventions to which
                                            Uruguay is a party the trademark holder does not enjoy an absolute right of
                                            use, free of regulation, but only an exclusive right to exclude third
                                            parties . . . subject to the State’s regulatory power.”[¶271]</p>
                                        <p><b>WTO ruling <sup>18</sup>:</b> “The [WTO TRIPs Agreement] does not
                                            generally provide for the grant of positive rights to exploit or use certain
                                            subject matter, but rather provides for the grant of negative rights to
                                            prevent certain acts. This fundamental feature of intellectual property
                                            protection inherently grants Members freedom to pursue public policy
                                            objectives. . . .”[¶7.246]</p>
                                        <p><b>Australia High Court</b>: “The right subsisting in the owner of a
                                            trademark is a negative and not a positive right. It is to be understood as
                                            a right to exclude others from using the mark.”[¶348]</p>
                                    </td>
                                </tr>
                                <tr class="table-bg-light-brown">
                                    <td valign="middle">
                                        <b>Plain packaging breaches World Trade Organization (WTO) rules and investment
                                            treaties</b>
                                    </td>
                                    <td>
                                        <p><b>UK:</b> “The [tobacco companies] submit that WTO TRIPS agreement takes
                                            precedence over the FCTC. In my view they must be read consistently one with
                                            the other and this is done by rejecting the Claimants’ construction which
                                            otherwise effectively emasculates the FCTC.” [¶916] </p>
                                        <p><b>Uruguay:</b> A case brought by Philip Morris under an investment treaty
                                            against Uruguay’s 80% Health warnings and Single Brand variant requirement
                                            failed. The tribunal also stated that: “nowhere does the WTO TRIPS
                                            Agreement, assuming its applicability, provide for a right to use.”[¶262]
                                        </p>
                                        <p><b>FranceConseild’État:</b> The provisions in the WTO TRIPS and the Paris
                                            Convection “do not in any event prohibit States parties to exercise the
                                            option, which is always open to them to adopt measures necessary to protect
                                            public health, which can be applied, where appropriate depending on the
                                            objective, to certain categories of products.” [¶22 translated]</p>
                                    </td>
                                </tr>
                                <tr class="table-bg-light-brown">
                                    <td valign="middle">
                                        <b>The laws were adopted without fairness or proper due process</b>
                                    </td>
                                    <td>
                                        <p><b>UK:</b> “I can detect not a hint of unfairness in the procedure adopted
                                            towards BAT. Their arguments were summarised fairly and squarely and the
                                            short point is that Parliament made up its own mind aware of the full range
                                            of arguments on all sides of the debate.” [¶42]</p>
                                    </td>
                                </tr>
                                <tr class="table-bg-light-brown">
                                    <td valign="middle">
                                        <b>Plain packaging is a breach of freedom of expression or the right to conduct
                                            a business</b>
                                    </td>
                                    <td>
                                        <p><b>FranceConseilConstitutionnel:</b> “The legislature intended to deprive
                                            these products a form of advertising likely to encourage consumption. . .
                                            the impugned provisions do not prohibit either production or distribution,
                                            or sale of tobacco or tobacco products; there is no manifestly
                                            disproportionate interference with the right to property or free
                                            enterprise.” [¶21 translated]</p>
                                        <p><b>UK High Court:</b> The claim includes “a challenge to the right to conduct
                                            business under Article 16 of the Fundamental Charter which it is said the
                                            Regulations violate. As to this it is clear from case law that this is (for
                                            obvious reasons) a highly circumscribed right and all manner of different
                                            laws and regulatory measures (tax, environmental, health and safety, etc.)
                                            limit the freedom that business otherwise enjoys to do as it pleases. . .
                                            .This ground adds nothing new to the other legal challenges.” [¶41]</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">3 FURTHER INFORMATION AND RESOURCES</div>
                            <p>The McCabe Centre for Law and Cancer serves as a WHO FCTC Knowledge Hub on legal
                                challenges to tobacco control laws. It has information on domestic legal challenges to
                                WHO FCTC implementation, including the challenges to plain packaging laws. There is also
                                more information about trade and investment law challenges.</p>
                            <p><a href="http://www.mccabecentre.org/knowledge-hub/">http://www.mccabecentre.org/knowledge-hub/</a>
                            </p>
                            <p>The CTFK website has pages on trade and investment law which include useful summaries of
                                key legal decisions including the UK High Court case and the PMI v Uruguay decision.</p>
                            <p><a href="http://global.tobaccofreekids.org/en">http://global.tobaccofreekids.org/en</a>
                            </p>
                            <p>The O’Neil Institute has produced a litigation guide for Latin America that considers the
                                legal arguments raised by the tobacco industry in the region and includes similar issues
                                to those discussed in this Toolkit but in a region-specific context.</p>
                            <p>
                                <a href="http://www.law.georgetown.edu/oneillinstitute/documents/2012_OneillTobaccoLitGuide_ENG.PDF">http://www.law.georgetown.edu/oneillinstitute/documents/2012_OneillTobaccoLitGuide_ENG.PDF</a>
                            </p>
                        </div>
                        <div class="content-end-notes">
                            <div class="section-secondary-title fc-ref-mat-4">End Notes</div>
                            <p><sup>1</sup>BRITISH AMERICAN TOBACCO, Plain Packaging, accessed at <a
                                        href="http://www.bat.com/plainpackaging">http://www.bat.com/plainpackaging</a>
                                (last visited on January 10, 2017)</p>
                            <p><sup>2</sup>JTI,Plain Packaging, accessed at <a
                                        href="http://www.jti.com/about-tobacco/product-regulation/plain-packaging/">http://www.jti.com/about-tobacco/product-regulation/plain-packaging/</a>
                                (last visited on January 10, 2017).</p>
                            <p><sup>3</sup>The Guardian, Australia wins international legal battle with Philip Morris
                                over plain packaging, accessed at <a
                                        href="https://www.theguardian.com/australia-news/2015/dec/18/australia-wins-international-legal-battle-with-philip-morris-over-plain-packaging">https://www.theguardian.com/australia-news/2015/dec/18/australia-wins-international-legal-battle-with-philip-morris-over-plain-packaging</a>
                                (Dec. 17, 2015).</p>
                            <p><sup>4</sup>E. Crosbie and S. A. Glantz. Tobacco Industry Argues Domestic Trademark Laws
                                and International Treaties Preclude Cigarette Health Warning Labels, Despite Consistent
                                Legal Advice That the Argument is Invalid. Tobacco Control23. Tobacco Control 7 (2014).
                                Available from: <a href="http://tobaccocontrol.bmj.com/content/23/3/e7.full ">http://tobaccocontrol.bmj.com/content/23/3/e7.full</a>;
                                See also, Physicians for a Smoke-Free Canada, The Plot Against Plain Packaging,
                                available from: <a
                                        href="http://www.smoke-free.ca/pdf_1/plotagainstplainpackaging-apr1'.pdf ">http://www.smoke-free.ca/pdf_1/plotagainstplainpackaging-apr1'.pdf</a>
                                (last accessed Feb. 22, 2017); see alsothe tobaccotactics website: <a
                                        href="http://www.tobaccotactics.org/index.php/Countering_Industry_Arguments_Against_Plain_Packaging:_It_Breaches_Intellectual_Property_Rights#cite_note-10">http://www.tobaccotactics.org/index.php/Countering_Industry_Arguments_Against_Plain_Packaging:_It_Breaches_Intellectual_Property_Rights#cite_note-10</a>.
                            </p>
                            <p><sup>5</sup>This principle has been confirmed in UK High Court challenge: R (British
                                American Tobacco &Ors) v. Secretary of State for Health[2016] EWHC 1169 (Admin)
                                paragraph 40; the Australian constitutional challenge: JT International SA v.
                                Commonwealth of Australia[2012] HCA 43 (October 5, 2012) paragraph 267; the investment
                                arbitration case PMI v. Uruguay Philip Morris Brand Sàrl (Switzerland), Philip Morris
                                Products S.A. (Switzerland) and AbalHermanos S.A. (Uruguay) v. Oriental Republic of
                                Uruguay (ICSID Case No. ARB/10/7); and in the WTO dispute panel decision DS174 European
                                Communities — Protection of Trademarks and Geographical Indications for Agricultural
                                Products and Foodstuffs,paragraph 7.210.</p>
                            <p><sup>6</sup>R (British American Tobacco &Ors) v. Secretary of State for Health [2016]
                                EWHC 1169 (Admin) paragraph 40.</p>
                            <p><sup>7</sup>PMI v. Uruguay Philip Morris Brand Sàrl (Switzerland), Philip Morris Products
                                S.A. (Switzerland) and AbalHermanos S.A. (Uruguay) v. Oriental Republic of Uruguay
                                (ICSID Case No. ARB/10/7).</p>
                            <p><sup>8</sup>European Communities, Protection of Trademarks and Geographical Indications
                                for Agricultural Products and Foodstuffs. WT/DS290/R 15 (March 2005) paragraph 7.246.
                            </p>
                            <p><sup>9</sup>Mark Davidson, Plain Packaging of Tobacco and the "Right" Use of a Trade
                                Mark. 8 European Intellectual Property Review 498-501 (2012). Available from: <a
                                        href="http://papers.ssrn.com/sol3/papers.cfm?abstract_id=2137455">http://papers.ssrn.com/sol3/papers.cfm?abstract_id=2137455</a>;
                                T., S. L. Voon and A. D. Mitchell, “Implications of WTO Law for Plain Packaging of
                                Tobacco Products” in Public Health And Plain Packaging Of Cigarettes: Legal Issues, A.D.
                                Mitchell, T. S. L. Voon, and J. Liberman, eds., A.D. Mitchell, T. Voon and J. Liberman,
                                eds., UK, 2012; University of Melbourne Legal Studies Research Paper No. 554. Available
                                from SSRN: <a
                                        href="https://ssrn.com/abstract=1874593">https://ssrn.com/abstract=1874593</a>.
                            </p>
                            <p><sup>10</sup>See, for example, The UK’s Trade Marks Act 1994 Section 9 (1): “The
                                proprietor of a registered trade mark has exclusive rights in the trade mark which are
                                infringed by use of the trade mark in the United Kingdom without his consent.” See also
                                Ireland’s Trade Marks Act 1996 Section 13 (1): “The proprietor of a registered trade
                                mark shall have exclusive rights in the trade mark and such rights shall be infringed by
                                the use of that trade mark in the State without the proprietor's consent.”</p>
                            <p><sup>11</sup>Australia, Trade Marks Act 1995. Available from: <a
                                        href="https://www.legislation.gov.au/Details/C2013C00143">https://www.legislation.gov.au/Details/C2013C00143</a>.
                            </p>
                            <p><sup>12</sup>R (British American Tobacco &Ors) v. Secretary of State for Health [2016]
                                EWHC 1169 (Admin) paragraph 41.</p>
                            <p><sup>13</sup>ConseilConstitutionnel, Decision No. 2015–727 DC of January 21, 2015
                                paragraph 21. </p>
                            <p><sup>14</sup>AG’s Opinion on Case C 547/14 Philip Morris Brands SARL and Others (Request
                                for a preliminary ruling from the High Court of Justice (England and Wales), Queen’s
                                Bench Division (Administrative Court), United Kingdom). See Paragraphs 148 to 151.
                                Available from: <a href="http://curia.europa.eu/juris/liste.jsf?num=C-547/14">http://curia.europa.eu/juris/liste.jsf?num=C-547/14</a>.
                            </p>
                            <p><sup>15</sup>A review of the Tobacco Act “New Steps Towards a Reduction in Tobacco Use”
                                (SOU 2016:14). Available from: <a
                                        href="http://tobaksfakta.se/wp-content/uploads/2016/03/Summary1.pdf">http://tobaksfakta.se/wp-content/uploads/2016/03/Summary1.pdf</a>.
                            </p>
                            <p><sup>16</sup>R (British American Tobacco &Ors) v. Secretary of State for Health [2016]
                                EWHC 1169 (Admin) paragraph 406.</p>
                            <p><sup>17</sup>See note 16 above at paragraph 651.</p>
                            <p><sup>18</sup>A previous WTO panel ruling that did not concern tobacco:European
                                Communities,Protection of Trademarks and GI for foodstuffsWT/DS290/R 15 (March 2005) at
                                paragraph 7.246. </p>
                        </div>
                    </div>
                    <!-- /content -->
                    <!-- sidebar -->
                    <div class="content-desc-cont col-lg-3">
                        <!-- 2 -->
                        <div class="sidebar-wrapper col-xs-12 sidebar-2">
                            <ul class="sidebar-nav">
                                <div class="sidebar-nav-header">KEY LEGAL ISSUES RAISED</div>
                                <li>
                                    <a href="#item1">The “right to use” a trademark</a>
                                </li>
                                <li>
                                    <a href="#item2">Compatibility with national trademark laws</a>
                                </li>
                                <li>
                                    <a href="#item3">Unlawful acquisition or deprivation of property </a>
                                </li>
                                <li>
                                    <a href="#">Freedom of expression or right to conduct business</a>
                                </li>
                                <li>
                                    <a href="#">Unjustified by the evidence</a>
                                </li>
                                <li>
                                    <a href="#">Not reasonable, proportionate or necessary</a>
                                </li>
                                <li>
                                    <a href="#">Introduced without proper due process</a>
                                </li>
                                <li>
                                    <a href="#">Violates World Trade Organization rules</a>
                                </li>
                                <li>
                                    <a href="#">Breaches international investment treaties </a>
                                </li>
                            </ul>
                        </div>
                        <!-- 3 -->
                        <div class="sidebar-wrapper col-xs-12 sidebar-3">
                            <ul class="sidebar-nav">
                                <div class="sidebar-nav-header">FURTHER INFORMATION AND WEB LINKS</div>
                                <li>
                                    <a href="#item1">On the legal issues</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            break;

        // k case-summaries
        case 'case-summaries':
            if ($var == 'og_desc') {
                $og_desc = 'This Toolkit is intended to provide governments and civil society organizations with the resources to ensure that tobacco product plain packaging legislation is robust and can stand against any legal challenge from the tobacco industry. Following the recommended steps outlined in this Toolkit should lead to a strong, defendable law. Nevertheless, government officials need to be aware of the legal arguments that the industry use to challenge the laws and be prepared for the risks of a legal challenge.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r" id="Ref-K">
                    <!-- main header -->
                    <div class="col-lg-8 col-lg-offset-1">
                        <div><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                        <div class="section-margin-top-25 section-title fc-ref-mat-4">Case Summaries</div>
                    </div>
                    <!-- main header sidebar -->
                    <div class="col-lg-3">
                        <!-- 1 -->
                        <div class="sidebar-wrapper header-sidebar col-xs-12 sidebar-1">
                            <ul class="sidebar-nav">
                                <div class="sidebar-nav-header">LINKED<br>TOOLS AND RESOURCES</div>
                                <li>
                                    <a href="<?php echo $base_url; ?>resources/legal-issues"><img
                                                src="<?php echo $base_url; ?>img/icons/linked-tools-and-resources/legal-issues.PNG"
                                                style="padding:0 10px;"> Legal Issues</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url; ?>resources/policy-briefs"><img
                                                src="<?php echo $base_url; ?>img/icons/linked-tools-and-resources/policy-brief-is-it-lawful.PNG"
                                                style="padding:0 5px;">Policy Brief: Is it Lawful?</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- content -->
                    <div class="content-desc-cont col-lg-8 col-lg-offset-1 ref -g1">
                        <div class="sidebar-anchor-item" id="item1"></div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">1 Australia <img
                                        style="padding-left:30px;"
                                        src="<?php echo $base_url; ?>img/img-case-summaries/australia.PNG"></div>
                            <p>Details and analysis on the three Australian cases is available from the <a
                                        href="http://www.mccabecentre.org/focus-areas/tobacco/domestic-challenge-to-plain-packaging">McCabe
                                    Centre for Law & Cancer website.</a></p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                1.1 Constitutional challenge in the High Court of Australia — dismissed in August 2012
                            </h3>
                            <p><a href="http://www.austlii.edu.au/au/cases/cth/HCA/2012/43.html">JTInternational SA v.
                                    Commonwealth of Australia [2012] HCA 43 (5 October, 2012)</a></p>
                            <p>The four major tobacco companies challenged the Tobacco Plain Packaging Act 2011 based on
                                section 51(xxxi) of the Constitution, which deals with the acquisition of property by
                                the state. </p>
                            <p>The two principle arguments were that plain-packaging laws were a breach of the
                                constitution because they amounted to an acquisition of the tobacco companies’
                                intellectual property rights including trademarks‘and that the government’s use of or
                                control over the packaging itself amounted to an acquisition of property.</p>
                            <p>The High Court ruled in the Government’s favor by 6 to 1.</p>
                            <p>One judge observed that the tobacco companies’ most strenuous objection was the taking
                                <i>“of the advertising or promotional functions of their registered trademarks.”</i></p>
                            <p>The High Court held that, to be an acquisition, the Government must obtain a benefit or
                                interest of a “proprietary nature.” One judge stated that <i>“on no view can it be said
                                    that the Commonwealth. . . has acquired any benefit of a proprietary character”</i>;
                                and another that the requirements of the Act <i>“are no different in kind from any
                                    legislation that requires labels that warn against the use or misuse of a
                                    product.”</i>Moreover,that <i>“[m]any kinds of products have been subjected to
                                    regulation in order to prevent or reduce the likelihood of harm, including
                                    medicines, poisonous substances and foods.”</i></p>
                            <p>The transcripts of the hearings<sup>1</sup> show that counsel for Japan Tobacco
                                International (JTI) and Imperial Tobacco compare the cigarette packet to advertising
                                billboards by saying that Australia <i>“is acquiring our billboard, your Honour”</i>;
                                and <i>“I own this packet and I will determine what message goes on it”</i>. . . it is
                                our <i>“bonsai billboard.”</i></p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                1.2 International investment arbitration claim — dismissed in December 2015
                            </h3>
                            <p><b><i>Philip Morris Asia Limited v. Commonwealth of Australia PCA</i></b><a
                                        href="https://pcacases.com/web/view/5">Case 2012–02</a></p>
                            <p>Philip Morris Asia brought a claim under a bilateral investment treaty between Australia
                                and Hong Kong to obtain compensation for losses it claimed were due to the
                                plain-packaging laws. The two main arguments of Philip Morris were: that plain packaging
                                had the equivalent effect of “expropriating” the property rights in its trademarks that
                                could no longer be used on packaging; and that the measure was “arbitrary” and
                                “unreasonable” on the basis that there was no evidence it would work. </p>
                            <p>However, in order to bring the claim, Philip Morris International restructured, so that
                                ownership of 100% of its shares in Philip Morris Australia were transferred from PMI
                                (based in Switzerland) to Philip Morris Asia (based in Hong Kong) <i>after</i> the
                                Australian government had announced its intention to adopt plain packaging of tobacco
                                products. The arbitration tribunal found that this was done for the sole purpose of
                                bringing a claim under the investment treaty between Hong Kong and Australia and the
                                claim was therefore <i>“an abuse of rights.”</i> The tribunal therefore declined
                                jurisdiction, and the merits of the claim were not considered. </p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                1.3 World Trade Organization dispute — ruling due July 2017.
                            </h3>
                            <p><b><i>Australia — Certain Measures Concerning Trademarks and Other Plain Packaging
                                        Requirements Applicable to Tobacco Products and Packaging.Dispute
                                        numbers</i></b> <a
                                        href="https://www.wto.org/english/tratop_e/dispu_e/cases_e/ds435_e.htm">DS435</a>,
                                <a href="https://www.wto.org/english/tratop_e/dispu_e/cases_e/ds441_e.htm">DS441</a>, <a
                                        href="https://www.wto.org/english/tratop_e/dispu_e/cases_e/ds458_e.htm">DS458</a>,
                                <b><i>and</i></b> <a
                                        href="https://www.wto.org/english/tratop_e/dispu_e/cases_e/ds467_e.htm">DS467</a>
                            </p>
                            <p>The dispute arose out of complaints by Cuba, the Dominican Republic, Honduras, Indonesia,
                                and Ukraine that the plain-packaging laws breach various articles of the WTO agreements,
                                and a dispute settlement panel was composed in May 2014. The final oral hearing took
                                place in October 2015, and final summary written submissions were made in December 2015.
                                The On May 28, 2015, Ukraine suspended their dispute in order to negotiate a mutually
                                agreed solution with Australia. The panel has stated that its ruling will be given not
                                before May 2017. It is possible for parties to appeal to the WTO's Appellate Body.</p>
                            <p>The complaining countries argue that Australia’s law breaches:</p>
                            <ul class="custom">
                                <li>the Agreement on Trade-Related Aspects of Intellectual Property Rights (TRIPS
                                    Agreement) by failing to provide required protections to trademarks rights and
                                    because it is an unjustifiable encumbrance on the use of tobacco trademarks;
                                </li>
                                <li>the Agreement on Technical Barriers to Trade (TBT Agreement) because it is more
                                    trade-restrictive than necessary to fulfill a legitimate objective; and
                                </li>
                                <li>the General Agreement on Tariffs and Trade (GATT) because it provides imported
                                    tobacco products less favorable treatment than like products of national origin.
                                </li>
                            </ul>
                            <p>The ruling is highly anticipated and has significant wider relevance that is clear from
                                the fact that there are more third-party WTO member states that have made written and
                                oral submissions to the panel than for any previous WTO dispute — some 34 countries plus
                                the EU. It has been reported that Philip Morris and British American Tobacco are
                                providing legal and financial support to the Dominican Republic and Honduras. </p>
                            <p>Australia has published an executive summary of its submissions to the panel.<sup>2</sup>
                            </p>
                        </div>
                        <div class="sidebar-anchor-item" id="item2"></div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">2 United Kingdom <img
                                        style="padding-left:30px;"
                                        src="<?php echo $base_url; ?>img/img-case-summaries/united-kingdom.PNG"></div>
                            <h3 class="fc-ref-mat-4 sub-title">
                                Claim in the High Court — dismissed in May 2016 [ruling upheld by Court of Appeal in
                                November 2016]
                            </h3>
                            <p><b><i>R (British American Tobacco & Ors) v. Secretary of State for Health</i></b><a
                                        href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">[2016]
                                    EWHC 1169 (Admin); [2016] EWCA Civ 1182 (Appeal)</a><sup>3</sup></p>
                            <p>Claims were commenced by the four big international tobacco companies — British American
                                Tobacco, Philip Morris, Imperial Tobacco, and Japan Tobacco International — together
                                with a German manufacturer of cigarette tipping paper (TANN). The 17 grounds of claim
                                were under domestic administrative law, European Union Law, and the European Convention
                                of Human Rights. </p>
                            <p>This is an important judgment that has wider international significance. The ruling dealt
                                with the merits of most of the key legal issues set out above in section 2. The judge
                                gave particular attention to issues of international relevance including —the importance
                                of the WHO Framework Convention on Tobacco Control (FCTC); the public health
                                justification for plain-packaging laws; the issue of whether or not there is a right to
                                use trademarks; and a detailed analysis of the evidence that supported the policy and
                                the tobacco companies’ evidence submitted to oppose the policy. </p>
                            <p><b class="fc-ref-mat-4">The judge’s analysis of the evidence from both sides of the
                                    dispute</b> is particularly significant because the same evidence should be
                                considered by any government taking forward plain packaging. This is the first judgment
                                that provides a careful scrutiny of that evidence, confirming that it meets relevant
                                legal tests.</p>
                            <p>On the tobacco industry’s evidence, the judge said that, <i>“On the basis of my own
                                    review of the methodologies adopted by the Claimants’ experts . . . I conclude that
                                    that body of expert evidence does not accord with internationally recognised best
                                    practice.”</i> And was heavily critical of <i>“what has the appearance of being an
                                    industry wide practice not to adduce internal documents or to allow their experts to
                                    see and review and then rely upon internal documents.”</i></p>
                            <p><b>A more detailed summary of this useful judgment is available on the CTFK website</b>
                                <a href="http://tobaccocontrollaws.org/files/live/litigation/2508/GB_BAT%20v.%20UK%20Department%20of%20Health_1.pdf">here</a>.<sup>4</sup>
                            </p>
                        </div>
                        <div class="sidebar-anchor-item" id="item3"></div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">3 European Union <img
                                        style="padding-left:30px;"
                                        src="<?php echo $base_url; ?>img/img-case-summaries/european-union.PNG"></div>
                            <h3 class="fc-ref-mat-4 sub-title">Challenge to the Tobacco Products Directive in the Court
                                of Justice— dismissed in May 2016</h3>
                            <p><i><a href="http://curia.europa.eu/juris/liste.jsf?num=C-547/14">R (Philip Morris Brands
                                        Sarl & Others) v. Secretary of State for Health C–547</a></i></p>
                            <p>The aim of the EU Tobacco Products Directive (TPD) is to provide a harmonized regulatory
                                environment for tobacco products across the EU (including on emissions, health warnings,
                                labeling, and reporting requirements) to assist the free movement of those goods. In
                                doing so, the Directive takes a high standard of public health. Some provisions of the
                                TPD introduce elements of a plain-packaging policy, such as the requirement for cuboid
                                cigarette packs with flip top lids, and a minimum of 20 cigarettes per pack. The TPD
                                also includes, inArticle 24(2), a provision that member states may adopt further
                                measures in relation to the standardization of tobacco packaging. </p>
                            <p>The four major international tobacco companies commenced a legal claim in the UK courts,
                                challenging the government’s intention to implement the TPD on the basis that the
                                Directive was not validly made. The High Court referred questions of interpretation of
                                EU law to the Court of Justice of the European Union (CJEU). The legal challenge sought
                                to overturn the whole Directive on a number of different grounds and also challenged the
                                validity of separate parts of the TPD, including Article 24(2).</p>
                            <p>All grounds of challenge were dismissed and the validity of the Directive upheld. The
                                importance of the FCTC was highlighted by the CJEU, which emphasized that its guidelines
                                could have “decisive influence” on the interpretation of EU laws on tobacco control. But
                                the key aspect of the judgment relevant to plain packaging, is that the Court of Justice
                                confirmed that the Tobacco Products Directive permits EU Member States to introduce
                                measures to standardize the packaging of tobacco products. </p>
                            <p>The opinion of the Advocate General (adopted by the Court) confirmed that measures to
                                standardize packs contribute to increasing the visibility of health warnings and that
                                these measures are proportionate because purely economic interests in the functioning of
                                the tobacco market are secondary to the protection of human health.</p>
                        </div>
                        <div class="sidebar-anchor-item" id="item4"></div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">4 France <img style="padding-left:30px;"
                                                                                            src="<?php echo $base_url; ?>img/img-case-summaries/france.PNG">
                            </div>
                            <h3 class="fc-ref-mat-4 sub-title">4.1 Challenge in the theConseil Constitutionnel —
                                dismissed in January 21, 2016</h3>
                            <p>
                                <i><a href="http://www.conseil-constitutionnel.fr/conseil-constitutionnel/francais/les-decisions/acces-par-date/decisions-depuis-1959/2016/2015-727-dc/decision-n-2015-727-dc-du-21-janvier-2016.146887.html">Décision
                                        n° 2015–727 DC du 21 Janvier 2016</a></i></p>
                            <p>Legislation providing powers to introduce plain packaging was adopted by the Assemblée
                                Nationale as part of Law n°2016–41 on the Modernization of the Health System and came
                                into force on January 26, 2016. The constitutional appeal was filed by members of
                                parliament and concerned the entirety of the law (of which plain-packaging provisions
                                were just one part). The plain-packaging measures were challenged on the basis of the
                                legislative process, the constitutional rights to property and free enterprise, and on
                                the proportionality of the measures.</p>
                            <p>The Constitutional Council noted that the brand name can still be applied to packages
                                allowing for clear identification of the product. It held that the rights of the
                                trademark owner to exclude the use by others are still respected through this. It also
                                held that there was no expropriation of property but a limitation on the property rights
                                justified by the objective of protecting public health, because the plain-packaging
                                measure made it possible to prevent the pack from becoming a piece of advertising. The
                                Court noted the measure does not prohibit the production, distribution, or otherwise the
                                sale of tobacco products. Accordingly, the measure was held to be a proportionate
                                infringement of the rights of commerce and free enterprise. </p>
                        </div>
                        <div>
                            <h3 class="fc-ref-mat-4 sub-title">4.2 Challenge in the Conseil d’État — dismissed December
                                23, 2016</h3>
                            <p>
                                <b><i><a href="http://www.tobaccocontrollaws.org/litigation/decisions/fr-20161223-japan-tobacco-international-an">CE,
                                            23 décembre 2016, société JT International SA, Société d'exploitation
                                            industrielle des tabacs et des allumettes, société Philip Morris France SA
                                            et autres</a></i></b></p>
                            <p>The detailed Decree and Ministerial Order to implement plain packaging were published on
                                March 22, 2016, and came into force May 20, 2016.</p>
                            <p>JTI launched an action on April 29, 2016, at the level of the Conseil d’État (the highest
                                administrative court) alleging that the laws are in breach of the French constitution.
                                Similar actions were launched by Imperial Tobacco, Philip Morris, and British American
                                Tobacco; by the Confédération Nationale des Buralistes de France (the National
                                Organization for Tobacco Retailers in France); and by République Technologie (a
                                cigarette-paper manufacturer) in May 2016.</p>
                            <p>The petitioners contended that the measures constituted an infringement of fundamental
                                rights relating to property; that they disregarded the principle of free enterprise;
                                that they infringed the constitutional principle of clarity and intelligibility of the
                                law; that they violated the provisions of trademark rights and intellectual property;
                                that they constitute an assault on France’s international commitments under the European
                                Convention of Human Rights, on the free circulation of products within the European
                                Union, on the Convention of Paris, and the WTO agreement on issues of trade-related
                                aspects of intellectual property rights (TRIPS).</p>
                        </div>
                        <div class="sidebar-anchor-item" id="item5"></div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">5 Ireland <img style="padding-left:30px;"
                                                                                             src="<?php echo $base_url; ?>img/img-case-summaries/ireland.PNG">
                            </div>
                            <h3 class="fc-ref-mat-4 sub-title">Challenge in Ireland’s Commercial Court — struck out
                                November 2016</h3>
                            <p><b><i>JTI v. Minister for Health, Ireland, and the Attorney General 2015/2530P</i></b>
                            </p>
                            <p>Legislation for plain packaging on all tobacco products was adopted on March 10, 2015,
                                and was due to come into force on May 20, 2016.However, some amendments were required to
                                the law, and the likely coming into force date is now in 2017. JTI issued legal
                                proceedings in 2015 challenging the Irish legislation. Following an initial hearing, JTI
                                confirmed that its claim was based solely on the ground that the law is incompatible
                                with the EU Tobacco Production Directive (TPD). The proceedings were stayed pending the
                                outcome of the Court of Justice of the European Union ruling on the tobacco companies’
                                challenge to the TPD (see above 3.1). In addition, JTI explicitly stated that it
                                reserves its position in relation to all other potential grounds pending the outcome of
                                the UK High Court ruling (see above 2.1). Once the EU and UK cases were dismissed, JTI’s
                                claim was then struck out. Ireland has a constitution that protects property rights with
                                no limitation period; therefore, a constitutional challenge may be brought at some stage
                                whatever the outcomes of the other cases, and it is understood that JTI formally
                                reserved its position on this issue.</p>
                        </div>
                        <div class="sidebar-anchor-item" id="item6"></div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">6 Uruguay <img style="padding-left:30px;"
                                                                                             src="<?php echo $base_url; ?>img/img-case-summaries/uruguay.PNG">
                            </div>
                            <h3 class="fc-ref-mat-4 sub-title">International investment arbitration dispute — dismissed
                                in July 2016</h3>
                            <p><b><i>Morris Brand Sàrl (Switzerland) & Others v. Oriental Republic of Uruguay</i></b> <a
                                        href="https://www.italaw.com/cases/460">(ICSID Case No. ARB/10/7)</a></p>
                            <p>This case was not a challenge to plain packaging but rather two other packaging laws
                                introduced in Uruguay in 2008 and 2009, stipulating:</p>
                            <ul class="no-list-style">
                                <li>1. that large graphic health warnings should cover 80% of the front and back of
                                    cigarette packets.
                                </li>
                                <li>2. that each cigarette brand be limited to just a single variant or brand type
                                    (eliminating brand families to address evidence that some variants can mislead
                                    consumers and falsely imply some cigarettes are less harmful than others) — known as
                                    the Single Presentation Requirement (SPR).
                                </li>
                            </ul>
                            <p>However, the arguments put forward by Philip Morris in this investment arbitration claim
                                are very similar to those used in the investment arbitration case against Australia’s
                                plain packaging. Consequently, the ruling is highly relevant to the legality of plain
                                packaging under international investment law. The Australian claim was dismissed on
                                jurisdiction grounds, whereas the tribunal in this case determined the merits of the
                                legal arguments and dismissed all grounds ofclaim.PMI alleged that the two measures
                                violated a Bilateral Investment Treaty (BIT) with Switzerland<sup>5</sup> and brought
                                the claim after legal challenges in Uruguay’s domestic courts by the Philip Morris
                                subsidiaries had failed. It sought an order for the repeal of the Challenged Measures
                                and for compensation in the region of $25 million. </p>
                            <p>The landmark ruling highlighted the importance of the WHO Framework Convention on Tobacco
                                Control (FCTC) in setting tobacco-control objectives and establishing the evidence base
                                for measures. The ruling confirmed that states need not recreate local evidence to
                                justify tobacco-control measures. It addressed the wide “margin of appreciation” and
                                deference provided to sovereign states in adopting measures or decisions concerning
                                public health. </p>
                            <p>The ruling sets an extremely high bar for any foreign investor seeking to bring an
                                investment arbitration challenge against a non-discriminatory public health measure that
                                has a legitimate objective and that has been taken in good faith.</p>
                            <p>The arbitrator appointed by PMI, Gary Born, agreed with the ruling on most aspects but
                                gave a <b>dissenting opinion</b> on two issues. One of these was that the SPR had been
                                adopted in an arbitrary manner and therefore breached the obligation of <i>fair and
                                    equitable treatment</i>. Part of his reasoning was that there was, in his view, no
                                record of any proper consideration of the evidence and issues by Uruguay before adopting
                                the measure (See <a
                                        href="<?php echo $base_url; ?>getting-prepared/establish-document-development-retention">GUIDE
                                    1.2: Establish a document record</a>).</p>
                            <p><b>A more detailed summary of the parts of this important case that have wider relevance,
                                    in particular to plain packaging is available from the CTFK website</b> <a
                                        href="http://www.tobaccofreekids.org/content/press_office/2016/2016_07_12_uruguay_factsheet.pdf">here</a>.
                            </p>
                        </div>
                        <div>
                            <div class="section-secondary-title fc-ref-mat-4">Section notes</div>
                            <p><sup>1</sup>See <a href="http://archive.tobacco.org/news/338721.html">http://archive.tobacco.org/news/338721.html</a>.
                            </p>
                            <p><sup>2</sup>Available to download from the Australia DFAT website: <a
                                        href="http://dfat.gov.au/international-relations/international-organisations/wto/wto-dispute-settlement/Pages/wto-disputes-tobacco-plain-packaging.aspx">http://dfat.gov.au/international-relations/international-organisations/wto/wto-dispute-settlement/Pages/wto-disputes-tobacco-plain-packaging.aspx</a>.
                            </p>
                            <p><sup>3</sup> High Court Ruling is available from: <a
                                        href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf</a>.<br>Court
                                of Appeal Ruling is available from: <a
                                        href="http://www.bailii.org/ew/cases/EWCA/Civ/2016/1182.html">http://www.bailii.org/ew/cases/EWCA/Civ/2016/1182.html</a>.
                            </p>
                            <p><sup>4</sup>See <a
                                        href="http://tobaccocontrollaws.org/files/live/litigation/2508/GB_BAT%20v.%20UK%20Department%20of%20Health_1.pdf">http://tobaccocontrollaws.org/files/live/litigation/2508/GB_BAT%20v.<br>%20UK%20Department%20of%20Health_1.pdf</a>.
                            </p>
                            <p><sup>5</sup>The 1991 Switzerland – Uruguay Bilateral Agreement on the Promotion and
                                Protection of Foreign Investments. A copy is available here: <a
                                        href="http://investmentpolicyhub.unctad.org/Download/TreatyFile/3121">http://investmentpolicyhub.unctad.org/Download/TreatyFile/3121</a>.
                            </p>
                        </div>
                    </div>
                    <!-- /content -->
                    <!-- sidebar -->
                    <div class="content-desc-cont col-lg-3">
                        <!-- 2 -->
                        <div class="sidebar-wrapper col-xs-12 sidebar-2">
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#item1">1 Australia <img style="padding-left:60px;" height="40"
                                                                      src="<?php echo $base_url; ?>img/img-case-summaries/australia.PNG"></a>
                                </li>
                                <li>
                                    <a href="#item2">2 United Kingdom <img style="padding-left:20px;" height="40"
                                                                           src="<?php echo $base_url; ?>img/img-case-summaries/united-kingdom.PNG"></a>
                                </li>
                                <li>
                                    <a href="#item3">3 European Union <img style="padding-left:20px;" height="40"
                                                                           src="<?php echo $base_url; ?>img/img-case-summaries/european-union.PNG"></a>
                                </li>
                                <li>
                                    <a href="#item4">4 France <img style="padding-left:75px;" height="40"
                                                                   src="<?php echo $base_url; ?>img/img-case-summaries/france.PNG"></a>
                                </li>
                                <li>
                                    <a href="#item5">5 Ireland <img style="padding-left:75px;" height="40"
                                                                    src="<?php echo $base_url; ?>img/img-case-summaries/ireland.PNG"></a>
                                </li>
                                <li>
                                    <a href="#item6">6 Uruguay <img style="padding-left:65px;" height="40"
                                                                    src="<?php echo $base_url; ?>img/img-case-summaries/uruguay.PNG"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- 3 -->
                        <div class="sidebar-wrapper col-xs-12 sidebar-3">
                            <ul class="sidebar-nav">
                                <div class="sidebar-nav-header">FURTHER INFORMATION AND WEB LINKS</div>
                                <li>
                                    <a href="<?php echo $base_url; ?>resources/legal-issues"><img
                                                src="<?php echo $base_url; ?>img/icons/on-legal-issues.PNG"
                                                style="padding:0 5px;">On the legal issues</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            break;

        // l
        case 'international-developments':
            if ($var == 'og_desc') {
                $og_desc = ' Tobacco Plain Packaging Regulations came into force. Requirements apply to all tobacco products.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r" id="Ref-K">
                    <div class="col-lg-10 col-lg-offset-1"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-margin-top-25 section-title fc-ref-mat-4">Plain or Standardized Tobacco
                            Packaging: International Developments – Updated February 2017
                        </div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1 ref -l1">
                        <div class="section-secondary-title fc-ref-mat-4">Laws adopted and in force</div>
                        <h3 class="fc-ref-mat-4">
                            AUSTRALIA–
                        </h3>

                        <ul class="custom">
                            <li>
                                <span class="underline">December 1, 2011</span>
                                2011Tobacco Plain Packaging Act adopted;
                                <span class="underline">
                                        December 1, 2012
                                    </span>
                                Tobacco Plain Packaging Regulations came into force. <sup>1</sup> Requirements apply to
                                all tobacco products.
                            </li>

                            <li>
                                <span class="underline">Legal challenges:</span>
                                High Court constitutional challenge by tobacco industry dismissed October 2012
                                <sup>2</sup>; Investment treaty claim by Philip Morris dismissed December 2015
                                <sup>3</sup>;
                                World Trade Organization dispute panel ruling due not before May 2017 <sup>4</sup>;
                            </li>
                        </ul>

                        <h3 class="fc-ref-mat-4">
                            UNITED KINGDOM–
                        </h3>

                        <ul class="custom">
                            <li>
                                    <span class="underline">
                                        March 2015
                                    </span>
                                Standardised Packaging of Tobacco Products Regulations adopted;
                                <span class="underline">
                                        May 20, 2016
                                    </span>
                                Regulations came into force <sup>5</sup>
                                (applies to England, Wales, Northern Ireland, and Scotland). Legislation applies to
                                cigarettes and hand-roll-tobacco. Old stock can be sold until May 20, 2017.
                            </li>

                            <li>
                                    <span class="underline">
                                        Legal challenges:
                                    </span>
                                High Court challenge by tobacco industry dismissed May 2016 <sup>6</sup>;
                                ruling upheld by Court of Appeal November 2016 <sup>7</sup>;
                            </li>
                        </ul>

                        <h3 class="fc-ref-mat-4">
                            FRANCE–
                        </h3>

                        <ul class="custom">
                            <li>
                                    <span class="underline">
                                        November 24, 2015
                                    </span>
                                Legislation providing powers adopted by the Assemblée Nationale (Law n°2016-41);
                                <span class="underline">
                                        March 22, 2016
                                    </span>
                                Decree and Ministerial Order were published;
                                <span class="underline">
                                        May 20, 2016
                                    </span>
                                Decree came into force. <sup>8</sup>
                                Legislation applies to cigarettes and hand-roll-tobacco. Old stock could be sold until
                                January 1, 2017.
                            </li>

                            <li>
                                    <span class="underline">
                                        Legal challenges
                                    </span>
                                Le ConseilConstitutionnel upheld the law in a decision on January 21, 2016 <sup>9</sup>;
                                The Conseild’Etat dismissed sixindustry challenges in a decision given on December 23,
                                2016 <sup>10</sup>.
                            </li>
                        </ul>
                    </div>

                    <div class="content-desc-cont col-lg-10 col-lg-offset-1 ref -l1">
                        <div class="section-secondary-title fc-ref-mat-4">Laws adopted but not yet implemented</div>
                        <h3 class="fc-ref-mat-4">
                            HUNGARY –
                        </h3>
                        <ul class="custom">
                            <li>
                                <span class="underline">
                                    August 16, 2016
                                </span>
                                Decree No 239/2016 published <sup>11</sup>.
                                <span class="underline">
                                    August 19, 2016
                                </span>
                                All new brands/variants must be in plain packaging.
                                <span class="underline">
                                    May 20, 2019
                                </span>
                                All existing brands must be in plain packaging. Applies only to cigarettes and
                                hand-roll-tobacco.
                            </li>
                        </ul>

                        <h3 class="fc-ref-mat-4">
                            IRELAND –
                        </h3>

                        <ul class="custom">
                            <li>
                                <span class="underline">
                                    March 10, 2015
                                </span>
                                Public Health (Standardised Packaging of Tobacco) Act <sup>12</sup>
                                adopted - minor amendments to Act are still required before plain packaging comes into
                                force <sup>13</sup>;
                                Regulations<sup>14</sup> are pending commencement.Applies to all tobacco products.
                            </li>

                            <li>
                                <span class="underline">
                                    Legal challenge:
                                </span>
                                Claim by Japan Tobacco International in the Commercial Court struck out November 2016
                                <sup>15</sup>.
                            </li>
                        </ul>

                        <h3 class="fc-ref-mat-4">
                            NORWAY –
                        </h3>

                        <ul class="custom">
                            <li>
                                <span class="underline">
                                    December 9, 2016
                                </span>
                                Parliament approves plain packaging Bill <sup>16</sup>
                                Implementation is intended for 2017. Applies only to cigarettes and hand-roll-tobacco.
                            </li>
                        </ul>

                        <h3 class="fc-ref-mat-4">
                            NEWZEALAND –
                        </h3>

                        <ul class="custom">
                            <li>
                                <span class="underline">
                                    September 14, 2016
                                </span>
                                Smoke-Free Environments (Tobacco Standardised Packaging) Amendment Act 2016
                                <sup>17</sup>
                                was given royal assent.A consultation ran from May to July 2016 <sup>18</sup>.
                                Draft detailed regulations are being finalized.
                            </li>
                        </ul>

                        <h3 class="fc-ref-mat-4">
                            SLOVENIA –
                        </h3>

                        <ul class="custom">
                            <li>
                                <span class="underline">
                                    February 15, 2017
                                </span>
                                Parliament passed a tobacco control bill <sup>19</sup>
                                which implements the EU Tobacco Products Directive (TPD)and includes provisions for
                                introducing uniform, no-brand packaging within two years.
                            </li>
                        </ul>

                        <h3 class="fc-ref-mat-4">
                            ROMANIA –
                        </h3>

                        <ul class="custom">
                            <li>
                                <span class="underline">
                                    October 12, 2016
                                </span>
                                Parliament passed a law which implements the EU TPD and includes provisions which allow
                                the health minister to introduce plain packaging regulations <sup>20</sup>.
                            </li>
                        </ul>
                    </div>

                    <div class="content-desc-cont col-lg-10 col-lg-offset-1 ref -l1">
                        <div class="section-secondary-title fc-ref-mat-4">Legislation being considered by Parliament
                        </div>
                        <p>
                            BRAZIL – Five different plain packaging bills have been introduced in the Senate and House
                            of Representatives; the latest in May 2016 by Representative Rodrigues. <sup>21</sup>
                        </p>

                        <p>
                            CHILE– A bill providing powers to introduce plain packaging was passed in the Senate in July
                            2015. <sup>22</sup>
                            It has been assigned to the Health and Agriculture Commission in the House of Deputies,but
                            has since remained inactive although pressure continues for it to be debated.
                        </p>
                        <p>
                            ECUADOR – A bill for plain packaging was introduced to the National Assembly on August 3,
                            2016 <sup>23</sup>
                            which has subsequently been assigned to the health committee.
                        </p>
                        <p>
                            PANAMA – January 2015, a bill was introduced to the National Assembly which would require
                            plain packaging <sup>24</sup>.
                            A sub-committee recommended it be removed making reference to the WTO TRIPS agreement, and
                            no further action has since taken place.
                        </p>
                    </div>

                    <div class="content-desc-cont col-lg-10 col-lg-offset-1 ref -l1">
                        <div class="section-secondary-title fc-ref-mat-4">Under formal government consideration</div>
                        <p>
                            CANADA– The Liberal government had plain packaging as one of its manifesto commitments and
                            in November 2015 it was set as a priority for the Health Department in a formal letter of
                            mandate from the Prime Minister to the Health Minister. In May 2016, the government
                            commenced a consultation <sup>25</sup>
                            on detailed proposals for plain packaging which ran until the end of August 2016.
                        </p>

                        <p>
                            SINGAPORE– The Health Promotion Board commenced a public consultation on plain packaging
                            from November 2015 to March 2016. <sup>26</sup>
                            The government has yet to announce its plans following the consultation.
                        </p>
                        <p>
                            THAILAND– On August 16, 2016it was reported that the Council of State was considering a
                            draft Tobacco Consumption Control Act introduced by the Public Health Ministry.
                            <sup>27</sup>
                            The draft Act provides for larger health warnings and plain packaging. The WTO Trade Policy
                            Review for Thailand published in November 2015 includes a reference to Thailand’s intention
                            to introduce plain packaging of tobacco.
                        </p>
                        <p>
                            URUGUAY– In November 2015 the President announced that the Government is considering plain
                            packaging. At a press conference on July 13, 2016, the Health Minister stated that plain
                            packaging would be introduced in 2017 and that the law was being developed. <sup>28</sup>
                        </p>
                        <p>
                            FINLAND – The Government National Action Plan <sup>29</sup>
                            included plain packaging as a planned measure in June 2014.Legislation was introduced in
                            July 2016 to implement the TPD which did not include plain packaging.
                        </p>

                        <p>
                            SWEDEN– The Minister of Health directed the committee examining the implementation of the EU
                            TPD to also consider plain packaging. The committee report <sup>30</sup>,
                            presented in March 2016, concluded that plain packaging would require a change to the
                            Swedish constitution. The bill to implement the TPDwasexpected in 2016. It is not clear
                            whether the bill will include plain packaging.
                        </p>
                    </div>

                    <div class="content-desc-cont col-lg-10 col-lg-offset-1 ref -l1">
                        <div class="section-secondary-title fc-ref-mat-4">Political commitments given</div>
                        <p>
                            BELGIUM– The Public Health Minister announced on April 9, 2016 that Belgium would have plain
                            packaging by 2019.
                        </p>

                        <p>
                            MAURITIUS– The Minister of Health made an announcement in September 2014 that it intended to
                            include plain packaging in its National Action Plan for Tobacco Control (2014-2017).On June
                            6, 2016, the Health Minister renewed the government’s commitment to plain packaging.
                        </p>

                        <p>
                            SOUTH AFRICA–In July 2014, the Minister for Health announced that he wanted to introduce
                            plain packaging, and in March 2015 he stated that legislation will be introduced.A further
                            similar announcement was made in May 2016.Legislation providing enabling powers is in the
                            process of being drafted.
                        </p>

                        <p>
                            KENYA– On May 31, 2016 the Cabinet Secretary for Health announced that a formal plan and
                            timeline for implementation of plain packaging will be developed. On August 16, 2016, during
                            the launch of thefirst Global Adult Tobacco Survey (GATS) in Kenya, the Cabinet Secretary
                            for Health directed the Tobacco Control Unit to start the implementation of standardized
                            packaging as part of the subsequent batch of graphic warnings.
                        </p>

                        <p>
                            BOTSWANA– On May 31, 2016 the Minister for Health announced that the government intended to
                            introduce plain packaging laws.
                        </p>

                        <p>
                            GAMBIA– On August 3, 2016 the Minister of Health and Social Welfare stated that his Ministry
                            is in full support of plain packaging and counts on the continued support and collaboration
                            from the media and the multi- sectoral team, and that The Gambia will soon join other
                            countries that have already passed laws to implement plain packaging.
                        </p>

                        <p>
                            UNITED ARAB EMIRATES– In February 2014, the Ministry of Health announced that it intended to
                            introduce legislation,which would include plain packaging, by 2016.
                        </p>

                        <p>
                            TURKEY– The Office of the Prime Minister published a decree on January 27, 2015 announcing
                            the entry into force of the new National Tobacco Control Program and Plan of Action for
                            2015-2018, which includes plain packaging.
                        </p>

                        <p>
                            MALAYSIA – In February 2016 the Health Ministry announced that Malaysia is planning to
                            introduce generic packaging, but no firm dates were included in the announcement. However,
                            on March 21, 2016 the Health Minister said no implementation date will be announced until
                            talks with tobacco companies on intellectual property rights have concluded.
                        </p>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1 ref -l1">
                        <div class="section-secondary-title fc-ref-mat-4">Other relevant laws</div>

                        <p>
                            EUROPEAN UNION– Revised Tobacco Products Directive (TPD) adopted April 3, 2014 and came into
                            force on May 20, 2016 and which introduces some elements of pack standardization and
                            provides (at Article 24(2)) that the 28 EU Member States <i>have</i>
                            the <i>option</i> of adopting further requirements to standardize tobacco packaging
                            <sup>31</sup>.
                        </p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // more

        // faqs
        case 'faqs':
            if ($var == 'og_desc') {
                $og_desc = 'Dis aliquet aliquam in sit ridiculus dolor tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec odio, adipiscing, quis dictumst eros urna est egestas parturient.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">FAQs</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-brown">Dis aliquet aliquam in sit ridiculus dolor
                            tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue
                            nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio
                            velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec
                            odio, adipiscing, quis dictumst eros urna est egestas parturient.
                        </div>
                        <p>Nec lacus aliquet aliquet elit massa, velit, aliquam ac quis in rhoncus in, turpis! Rhoncus
                            ridiculus proin, vel duis elementum risus adipiscing sed dapibus! Placerat nunc, urna. Et
                            proin. Lacus mattis! Ridiculus porta scelerisque auctor tempor magna auctor! Ut, porttitor
                            enim lundium elementum cras, pulvinar dis magna, porttitor urna! Nec? Nascetur lorem in et
                            phasellus odio aenean porta lorem.</p>
                        <p>Et porttitor porta porta dignissim lacus? Urna urna natoque tincidunt scelerisque! Nisi.
                            Dolor? Cum nascetur! Nisi penatibus porta a. Vel et aenean, dignissim. Nunc turpis,
                            sagittis, placerat proin? Mid? Ridiculus scelerisque integer, auctor turpis nunc? Tincidunt
                            rhoncus enim cras tincidunt adipiscing? Et vel magna, est, vel nunc? Ultricies ac nisi, ac
                            proin parturient ultricies et tempor tincidunt magna odio.</p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // about and contact
        case 'about-and-contact':
            if ($var == 'og_desc') {
                $og_desc = 'Dis aliquet aliquam in sit ridiculus dolor tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec odio, adipiscing, quis dictumst eros urna est egestas parturient.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">About and Contact</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-brown">Dis aliquet aliquam in sit ridiculus dolor
                            tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue
                            nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio
                            velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec
                            odio, adipiscing, quis dictumst eros urna est egestas parturient.
                        </div>
                        <p>Nec lacus aliquet aliquet elit massa, velit, aliquam ac quis in rhoncus in, turpis! Rhoncus
                            ridiculus proin, vel duis elementum risus adipiscing sed dapibus! Placerat nunc, urna. Et
                            proin. Lacus mattis! Ridiculus porta scelerisque auctor tempor magna auctor! Ut, porttitor
                            enim lundium elementum cras, pulvinar dis magna, porttitor urna! Nec? Nascetur lorem in et
                            phasellus odio aenean porta lorem.</p>
                        <p>Et porttitor porta porta dignissim lacus? Urna urna natoque tincidunt scelerisque! Nisi.
                            Dolor? Cum nascetur! Nisi penatibus porta a. Vel et aenean, dignissim. Nunc turpis,
                            sagittis, placerat proin? Mid? Ridiculus scelerisque integer, auctor turpis nunc? Tincidunt
                            rhoncus enim cras tincidunt adipiscing? Et vel magna, est, vel nunc? Ultricies ac nisi, ac
                            proin parturient ultricies et tempor tincidunt magna odio.</p>
                    </div>
                </div>
            </section>
            <?php
            break;



        // home

        // why is it and why is it needed
        case 'what-is-it-and-why-is-it-needed':
            if ($var == 'og_desc') {
                $og_desc = 'What is it and why is it needed?';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">What is it and why is it needed?</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-4">What is plain packaging of tobacco?</div>
                        <p>
                            Plain packaging of tobacco is a common sense policy that removes the promotional, marketing
                            and advertising features on packs of tobacco, but leaves the health warnings, tax stamps and
                            other features required by government. Most governments have increased the size of the
                            health warnings at the same time as introducing plain packaging. The main elements of a
                            plain packaging of tobacco policy are:
                        </p>

                        <ul>
                            <li>Packaging must be a <b>uniform plain unattractive color</b> usually a dull brown/green;
                            </li>
                            <li>All packs must be a <b>standard shape, size and texture</b>, and be made from cardboard;
                            </li>
                            <li><b>No branding, logos or other promotional elements</b> can appear on the packaging - or
                                on individual cigarette sticks;
                            </li>
                            <li>The brand and product name can appear on each pack, as well as the quantity of product
                                in the pack and manufacturer’s contact details, but in a standard size, color and
                                typeface.
                            </li>
                            <li>Health warnings, tax stamps and other government requirements remain on the packs.</li>
                        </ul>

                        <div class="section-secondary-title fc-ref-mat-4">Why is it needed?</div>
                        <p>
                            Packaging for all products can act as a form of promotion, marketing and advertising. This
                            is even truer for tobacco because in countries where other advertising is restricted, the
                            pack becomes the main means of promoting tobacco; and tobacco is a ‘badge product’ which
                            people carry around with them and display every time they take the pack out.<sup>1</sup>
                        </p>

                        <p>Brightly coloured and attractive branding distracts attention from the health warnings</p>
                        <p>Even where misleading descriptors such as ‘light’ and ‘mild’ have been banned, branded
                            packaging continues to create
                            strong but false perceptions that some variants are less harmful than others. These ‘health
                            reassurance’ brands use
                            light and bright colors to mislead consumers and help to maintain addiction. </p>
                        <p>See Tobacco Branding in the Tools and Resources for full details about the use of packaging
                            as a marketing tool by the tobacco industry.</p>

                        <img class="center-block img-responsive" width="350px"
                             src="<?php echo $base_url; ?>img/home/what-why-1.png"/>

                        <p>
                            “Our final communication vehicle with our smoker is the pack itself. In the absence of any
                            other marketing messages, our packaging...is the sole communicator of our brand essence. Put
                            another way—when you don’t have anything else—our packaging is our marketing.” BAT
                            executive.
                        </p>

                        <p>
                            AUSTRALIA “IS ACQUIRING OUR BILLBOARD”…
                            In the legal claim in the Australian High Court, counsel for Japan Tobacco International
                            argued that tobacco packaging acted like an advertising billboard.
                        </p>

                        <img class="center-block img-responsive" width="350px"
                             src="<?php echo $base_url; ?>img/home/what-why-2.png"/>

                        <p>
                            Gum or Tobacco. Some cigarette packs are clearly aimed at children.
                        </p>

                        <div class="section-secondary-title fc-ref-mat-4">Plain or Standardised?</div>
                        <p>
                            The most commonly used term for the policy is ‘<b>plain packaging</b>’ – this is the term
                            used by
                            Australia and the WHO. But because packs retain the health warnings they are not literally
                            ‘plain’, and the industry has tried to spread confusion about this. In the UK and Ireland
                            the term used is ‘<b>standardised packaging</b>’. In France the term used is ‘<b>neutral
                                packaging</b>’
                            and elsewhere governments have called it ‘<b>generic packaging</b>’. These are all different
                            terms
                            for the same policy.
                        </p>

                        <div class="section-secondary-title fc-ref-mat-4">How will plain packaging work?</div>
                        <p>
                            Plain packaging helps to change smoking attitudes and behaviours and reduce the overall
                            demand for tobacco. It is likely to have a greater impact on younger people. Plain
                            packaging:
                        </p>

                        <ul>
                            <li><b>Reduces the appeal and attractiveness</b> of tobacco products to consumers,</li>
                            <li><b>Increases the noticeability and effectiveness of health warnings</b> on the packaging
                                of
                                tobacco products,
                            </li>
                            <li><b>Reduces the ability of the packaging of tobacco products to mislead</b> consumers
                                about
                                the harmful effects of smoking or using tobacco products.
                            </li>
                        </ul>

                        <p>
                            See <b>Guide 1.1 Set the objectives</b> for more details.
                        </p>

                        <div class="section-secondary-title fc-ref-mat-4">Does it work – what does the evidence say?
                        </div>
                        <p>Yes. There have been five international systematic evidence reviews that considered all the
                            peer reviewed research studies from around the globe on the impact of plain packaging on
                            smoking behaviours and attitudes. <sup>2</sup> All concluded that the policy would be
                            effective at
                            contributing to its objectives.</p>

                        <p>In Australia, over 4 years of post-implementation data shows continued significant declines
                            in smoking rates. <sup>3</sup> The government’s post implementation review concluded that
                            a 0.55
                            percentage point drop could be attributed to plain packaging <b>(equivalent to 118,000 less
                                people smoking <sup>4</sup> over 3 years)</b>,</p>

                        <p>The tobacco industry has refused to release any of its own internal research into the impacts
                            of plain packaging. The studies the tobacco companies rely on to oppose plain packaging are
                            almost universally not peer reviewed; are unverifiable; and either ignore or airily dismiss
                            the global evidence that supports the policy being effective. <sup>5</sup></p>

                        <p>See <b>Guide 2.1: Evidence review</b>, together with the pages on theResearch Evidence and
                            Australia’s post implementation evidence in the Tools and Resources for fully referenced
                            information on all the supporting evidence.</p>

                        <div class="section-secondary-title fc-ref-mat-2">End Notes</div>
                        <p><sup>1</sup>Wakefield et al (2002) The cigarette pack as image: new evidence from tobacco
                            industry documents, Tobacco Control. 11(suppl.1):i73−i80
                            <a href="http://tobaccocontrol.bmj.com/content/11/suppl_1/i73.full">http://tobaccocontrol.bmj.com/content/11/suppl_1/i73.full</a>
                        </p>

                        <p><sup>2</sup> i. Cancer Council Victoria (Australia 2011)
                            <a href="http://www.cancervic.org.au/plainfacts/plainfacts-evidence">http://www.cancervic.org.au/plainfacts/plainfacts-evidence</a>
                            <br/>
                            ii. The Stirling Review (United
                            Kingdom 2012 and updated 2013) <a href="http://phrc.lshtm.ac.uk/project_2011-2016_006.html">http://phrc.lshtm.ac.uk/project_2011-2016_006.html</a>
                            <br/>
                            iii. The Chanter Review (United Kingdom 2014)
                            <a href="http://www.kcl.ac.uk/health/10035-TSO-2901853-Chantler-Review-ACCESSIBLE.PDF">http://www.kcl.ac.uk/health/10035-TSO-2901853-Chantler-Review-ACCESSIBLE.PDF</a>
                            <br/>
                            iv. The Hammond Review (Ireland 2014)
                            <a href="http://health.gov.ie/blog/publications/standardised-packaging-d-hammond/">http://health.gov.ie/blog/publications/standardised-packaging-d-hammond/</a>
                            <br/>
                            v. The Cochrane Review (international
                            2017)<a href="http://onlinelibrary.wiley.com/doi/10.1002/14651858.CD011244.pub2/abstract">http://onlinelibrary.wiley.com/doi/10.1002/14651858.CD011244.pub2/abstract</a>
                        </p>

                        <p><sup>3</sup>The Australian government’s Post Implementation Review was published in February
                            2016 and concludes that plain packaging is having a positive impact.
                            <a href="https://ris.govspace.gov.au/2016/02/26/tobacco-plain-packaging/">https://ris.govspace.gov.au/2016/02/26/tobacco-plain-packaging/</a>
                        </p>
                        <p><sup>4</sup>
                            <a href="http://www.ft.com/cms/s/0/6248cfee-11e3-11e6-91da-096d89bd2173.html#axzz48RqRYYOE">http://www.ft.com/cms/s/0/6248cfee-11e3-11e6-91da-096d89bd2173.html#axzz48RqRYYOE</a>
                        </p>
                        <p><sup>5</sup> The judge in the UK High Court case highlighted that the tobacco industry had
                            not disclosed any of its own research and data and heavily criticised the experts the
                            tobacco companies relied on. R (British American Tobacco &Ors) v Secretary of State for
                            Health [2016] EWHC 1169 (Admin)</p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // where in the world
        case 'where-in-the-world':
            if ($var == 'og_desc') {
                $og_desc = 'Where in the world?';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Where in the world?</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-ref-mat-2">Laws adopted and in force</div>
                        <p>AUSTRALIA—</p>
                        <ul>
                            <li>December 1, 2011Tobacco Plain Packaging Act adopted;</li>
                            <li>December 1, 2012 Tobacco Plain Packaging Regulations came into force. <sup>1</sup>
                                Legislation applies to all tobacco products.
                            </li>
                            <li>Legal challenges: High Court constitutional challenge by tobacco industry dismissed
                                October 2012 <sup>2</sup>; Investment treaty claim by Philip Morris dismissed December
                                2015 <sup>3</sup>; World Trade Organization dispute panel ruling due by July 2017
                                <sup>4</sup> (media reports are that the interim award is in Australia’s favor
                                <sup>5</sup>).
                            </li>
                        </ul>

                        <p>UNITEDKINGDOM—</p>
                        <ul>
                            <li>March 2015Standardised Packaging of Tobacco Products Regulations adopted;</li>
                            <li>May 20, 2016 Regulations came into force <sup>6</sup> (applies to England, Wales,
                                Northern
                                Ireland,
                                and
                                Scotland). Legislation applies to cigarettes and hand-roll-tobacco. Old stock could be
                                sold
                                until May 20, 2017. <sup>7</sup>
                            </li>
                            <li>Legal challenges: High Court challenge by tobacco industry dismissed May 2016 ; ruling
                                upheld
                                by Court of Appeal November 2016. <sup>8</sup>
                            </li>
                        </ul>

                        <p>FRANCE—</p>
                        <ul>
                            <li>November 24, 2015 Legislation providing powers adopted by the Assemblée Nationale (Law
                                n°2016-41); March 22, 2016 Decree and Ministerial Order were published;
                            </li>
                            <li>May 20, 2016 Decree came into force. <sup>9</sup>
                                Legislation applies to cigarettes and hand-roll-tobacco. Old stock could be sold until
                                January
                                1, 2017.
                            </li>
                            <li>Legal challenges: TheConseilConstitutionnel upheld the law in a decision on January
                                21, 2016 <sup>10</sup> ;
                                the Conseild’État dismissed six industry challenges in a decision given on December 23,
                                2016. <sup>11</sup>
                            </li>
                        </ul>

                        <div class="section-secondary-title fc-ref-mat-2">Laws adopted but not yet implemented</div>

                        <p>HUNGARY—</p>
                        <ul>
                            <li>August 16, 2016 Decree No. 239/2016 published. <sup>12</sup>
                            </li>
                            <li>August 19, 2016 All new brands/variants must be in plain packaging.
                            </li>
                            <li>May 20, 2019All existing brands must be in plain packaging. Applies only to cigarettes
                                and hand-roll-tobacco.
                            </li>
                        </ul>

                        <p>HUNGARY—</p>
                        <ul>
                            <li>March 10, 2015 Public Health (Standardised Packaging of Tobacco) Act <sup>13</sup>
                                adopted
                                (commenced March 29, 2017);detailed regulations <sup>14</sup> are pending.The law
                                comes into
                                effect in
                                September 2017.
                                Applies to all tobacco products.
                            </li>
                            <li>Legal challenge: Claim by Japan Tobacco International in the Commercial Court struck
                                out November 2016. <sup>15</sup>
                            </li>
                        </ul>

                        <p>GEORGIA—</p>
                        <ul>
                            <li>May 30, 2017 The President signed an amending law on Tobacco Control which included
                                provisions for plain packaging regulations, that must be implemented by January 1, 2018.
                            </li>
                        </ul>

                        <p>NEW ZEALAND—</p>
                        <ul>
                            <li>September 14, 2016 Smoke-Free Environments (Tobacco Standardised Packaging) Amendment
                                Act 2016 <sup>16</sup> was given royal assent. A consultation ran from May to July
                                2016. <sup>17</sup> Detailed
                                regulations are being finalized.
                            </li>
                        </ul>

                        <p>NORWAY—</p>
                        <ul>
                            <li>December 9, 2016Parliament approved the bill to introduce plain packaging.
                                <sup>18</sup><sup>19</sup> The law
                                comes into effect on July 1, 2017. Detailed regulations are pending. Law will apply only
                                to cigarettes and hand-roll-tobacco.
                            </li>
                        </ul>

                        <p>ROMANIA—</p>
                        <ul>
                            <li>October 12, 2016Parliament passed a lawthat implements the EU TPD and includes
                                provisions that allow the Health Minister to introduce plain-packaging regulations.
                                <sup>20</sup>
                            </li>
                        </ul>

                        <p>SLOVENIA—</p>
                        <ul>
                            <li>February 15, 2017Parliament passed a tobacco control bill <sup>21</sup>, which
                                implements the EU
                                Tobacco Products Directive (TPD) and includes provisions for introducing uniform,
                                no-brand packaging within two years.
                            </li>
                        </ul>

                        <p>THAILAND—</p>
                        <ul>
                            <li>April 2, 2017 the Tobacco Product Control Act 2017 was gazetted which includes a
                                provision (at Article 38) that allows the Minister to introduce regulations for plain
                                packaging. <sup>22</sup> The law comes into effect on July 4, 2017.
                            </li>
                        </ul>

                        <div class="section-secondary-title fc-ref-mat-2">Legislation being considered by Parliament
                        </div>
                        <p>BRAZIL— Five different plain packaging bills have been introduced in the Senate and House of
                            Representatives; the latest in May 2016 by Representative Rodrigues. <sup>23</sup></p>

                        <p>CHILE— Abill providing powers to introduce plain packaging was passed in the Senate in
                            July 2015. <sup>24</sup> It has been assigned to the Health and Agriculture Commission in
                            the House of
                            Deputies but has since remained inactive, although pressure continues for it to be
                            debated.</p>

                        <p>ECUADOR— A bill for plain packaging was introduced to the National Assembly on August 3,
                            2016, <sup>25</sup> which has subsequently been assigned to the health committee.</p>

                        <p>PANAMA— On January 2015, a bill was introduced to the National Assembly that would require
                            plain packaging. <sup>26</sup> A sub-committee recommended it be removed making reference
                            to the WTO
                            TRIPS
                            agreement, and no further action has since taken place. </p>

                        <div class="section-secondary-title fc-ref-mat-2">Under formal government consideration
                        </div>

                        <p>CANADA— The Liberal government had plain packaging as one of its manifesto commitments, and,
                            in November 2015, it was set as a priority for the Health Department in a formal letter of
                            mandate from the Prime Minister to the Health Minister. In May 2016, the government
                            commenced a consultation <sup>27</sup> on detailed proposals for plain packaging, which
                            ran until the
                            end
                            of August 2016.</p>

                        <p>FINLAND — The Government National Action Plan <sup>28</sup> included plain packaging as a
                            planned
                            measure
                            in June 2014. Legislation was introduced in July 2016 to implement the EU TPD, which did not
                            include plain packaging.</p>

                        <p>SINGAPORE— The Health Promotion Board commenced a public consultation on plain packaging from
                            November 2015 to March 2016. <sup>29</sup> In March 2017, the Health Minister indicated an
                            intention to
                            move forward with the policy and that Singapore will hold a further consultation.
                            <sup>30</sup></p>

                        <p>SWEDEN— The Minister of Health directed the committee examining the implementation of the EU
                            TPD to also consider plain packaging. The committee report, <sup>31</sup> presented in
                            March 2016,
                            concluded that plain packaging would require a change to the Swedish constitution. The bill
                            to implement the EU TPD was expected in 2016. It is not clear whether the bill will include
                            plain packaging.</p>
                        <p>TAIWAN— On February 13, 2017, a draft Tobacco Hazards Prevention Act Amendment Bill was
                            notified to the WTO (under TBT Article 2.9). <sup>32</sup> The draft includes a provision
                            for uniform
                            tobacco packaging.</p>

                        <p>URUGUAY—In November 2015, the President announced that the government was considering plain
                            packaging. At a press conference on July 13, 2016, the Health Minister stated that plain
                            packaging would be introduced in 2017 and that the law was being developed.
                            <sup>33</sup></p>

                        <div class="section-secondary-title fc-ref-mat-2">Political commitments given
                        </div>

                        <p>BELGIUM— On April 9, 2016,the Public Health Minister announced that Belgium would have plain
                            packaging by 2019.</p>

                        <p>BOTSWANA— On May 31, 2016, the Minister of Health announced that the government intended to
                            introduce plain packaging laws.</p>

                        <p>KENYA— On May 31, 2016, the Cabinet Secretary for Health announced that a formal plan and
                            timeline for implementation of plain packaging will be developed. On August 16, 2016, during
                            the launch of thefirst Global Adult Tobacco Survey (GATS) in Kenya, the Cabinet Secretary
                            for Health directed the Tobacco Control Unit to start the implementation of standardized
                            packaging as part of the subsequent batch of graphic warnings.</p>

                        <p>MALAYSIA— In February 2016, the Health Ministry announced that Malaysia is planning to
                            introduce generic packaging, though no firm dates were included in the announcement.
                            However, on March 21, 2016, the Health Minister said no implementation date will be
                            announced until talks with tobacco companies on intellectual property rights have
                            concluded.</p>

                        <p>MAURITIUS— In September 2014,the Minister of Health made an announcement that it intended to
                            include plain packaging in its National Action Plan for Tobacco Control (2014–2017). On June
                            6, 2016, the Health Minister renewed the government’s commitment to plain packaging.</p>

                        <p>SOUTH AFRICA— In July 2014, the Minister of Health announced that he wanted to introduce
                            plain
                            packaging and, in March 2015, he stated that legislation will be introduced. A further
                            similar announcement was made in May 2016. Legislation providing enabling powers is in the
                            process of being drafted.</p>

                        <p>THE GAMBIA— On August 3, 2016, the Minister of Health and Social Welfare stated that his
                            Ministry is in full support of plain packaging and that The Gambia will soon join other
                            countries that have already passed laws to implement plain packaging.</p>

                        <p>TURKEY— The Office of the Prime Minister published a decree on January 27, 2015, announcing
                            the entry into force of the new National Tobacco Control Program and Plan of Action for
                            2015–2018, which includes plain packaging.</p>

                        <p>UNITED ARAB EMIRATES— In February 2014, the Ministry of Health announced that it intended to
                            introduce legislation, which would include plain packaging, by 2016.</p>

                        <div class="section-secondary-title fc-ref-mat-2">Other relevant laws
                        </div>

                        <p>EUROPEAN UNION— Revised Tobacco Products Directive (TPD) adopted April 3, 2014 and came into
                            force on May 20, 2016 and which introduces some elements of pack standardization and
                            provides (at Article 24(2)) that the 28 EU Member States have the option of adopting further
                            requirements to standardize tobacco packaging. <sup>34</sup></p>

                        <div class="section-secondary-title fc-ref-mat-2">Notes
                        </div>

                        <p><sup>1</sup> Tobacco Plain Packaging Act 2011, available
                            from:<a href="http://www.comlaw.gov.au/Details/C2013C00190">http://www.comlaw.gov
                                .au/Details/C2013C00190</a>. Tobacco Plain Packaging Regulations 2011, available from:
                            <a href="http://www.comlaw.gov.au/Details/F2013C00801">http://www.comlaw.gov.au/Details/F2013C00801</a>.
                        </p>

                        <p><sup>2</sup> JT International SA v. Commonwealth of Australia [2012] HCA 43 (October 5, 2012)
                            Judgment available from: <a href="http://www.austlii.edu.au/au/cases/cth/HCA/2012/43.html">http://www.austlii.edu.au/au/cases/cth/HCA/2012/43.html</a>.
                        </p>

                        <p><sup>3</sup> Philip Morris Asia Limited v. Commonwealth of Australia PCA Case 2012-02. All
                            publicly available documents associated with the case are available from the Permanent Court
                            of Arbitration’s case page: <a href="https://www.pcacases.com/web/view/5">https://www.pcacases.com/web/view/5</a>.
                        </p>

                        <p><sup>4</sup> Australia — Certain Measures Concerning Trademarks and Other Plain Packaging
                            Requirements Applicable to Tobacco Products and Packaging. Dispute numbers <a
                                    href="https://www.wto.org/english/tratop_e/dispu_e/cases_e/ds435_e.htm">DS435</a>,
                            <a href="https://www.wto.org/english/tratop_e/dispu_e/cases_e/ds441_e.htm">DS441</a>,
                            <a href="https://www.wto.org/english/tratop_e/dispu_e/cases_e/ds458_e.htm">DS458</a> and <a
                                    href="https://www.wto.org/english/tratop_e/dispu_e/cases_e/ds467_e.htm">DS467</a>.
                        </p>

                        <p><sup>5</sup> Reported by Bloomberg. Available here:
                            <a href="https://www.bloomberg.com/news/articles/2017-05-04/wto-said-to-uphold-australia-s-ban-on-cigarette-logos">https://www.bloomberg.com/news/articles/2017-05-04/wto-said-to-uphold-australia-s-ban-on-cigarette-logos</a>.
                        </p>

                        <p><sup>6</sup> The Standardised Packaging of Tobacco Products Regulations 2015. Available
                            from:<a href="http://www.legislation.gov.uk/uksi/2015/829/contents/made">http://www.legislation.gov.uk/uksi/2015/829/contents/made</a>.
                        </p>

                        <p><sup>7</sup> R (British American Tobacco &Ors) v. Secretary of State for Health [2016] EWHC
                            1169 (Admin). Available from:
                            <a href="https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf">https://www.judiciary.gov.uk/wp-content/uploads/2016/05/bat-v-doh.judgment.pdf</a>.
                        </p>

                        <p><sup>8</sup> [2016] EWCA Civ 1182 (Appeal). Available from:
                            <a href="http://www.bailii.org/ew/cases/EWCA/Civ/2016/1182.html">http://www.bailii.org/ew/cases/EWCA/Civ/2016/1182.html</a>.
                        </p>

                        <p><sup>9</sup> The implementing legislation that amends the Public Health Code is Decree No.
                            2016-1117 of August 11, 2016, on the manufacture, presentation, sale, and use of tobacco
                            products. Available
                            from:<a href="https://www.legifrance.gouv.fr/eli/decret/2016/8/11/AFSP1612356D/jo">https://www.legifrance.gouv.fr/eli/decret/2016/8/11/AFSP1612356D/jo</a>.
                            The relevant parts of the public health code are available from:
                            <a href="https://www.legifrance.gouv.fr/affichCode.do?idSectionTA=LEGISCTA000033045524&cidTexte=LEGITEXT000006072665&dateTexte=20170126">https://www.legifrance.gouv.fr/affichCode.do?idSectionTA=LEGISCTA000033045524&cidTexte=LEGITEXT000006072665&dateTexte=20170126</a>.
                            The detail of the law is in Decree of March 21, 2016, on the conditions of neutrality and
                            standardization for the packaging and paper of cigarettes and rolling tobacco. Available
                            from:
                            <a href="https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000032276123&dateTexte=20170126">https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000032276123&dateTexte=20170126</a>.
                        </p>

                        <p><sup>10</sup> Décision n° 2015-727 DC du January 21, 2016. Judgment available from:
                            <a href="http://www.conseil-constitutionnel.fr/conseil-constitutionnel/francais/les-decisions/acces-par-date/decisions-depuis-1959/2016/2015-727-dc/decision-n-2015-727-dc-du-21-janvier-2016.146887.html">http://www.conseil-constitutionnel.fr/conseil-constitutionnel/francais/les-decisions/acces-par-date/decisions-depuis-1959/2016/2015-727-dc/decision-n-2015-727-dc-du-21-janvier-2016.146887.html</a>.
                        </p>

                        <p><sup>11</sup> CE, December 23, 2016, société JT International SA, Société d'exploitation
                            industrielle des tabacs et des allumettes, société Philip Morris France SA et autres
                            Judgment available from:
                            <a href="http://www.conseil-etat.fr/Decisions-Avis-Publications/Decisions/Selection-des-decisions-faisant-l-objet-d-une-communication-particuliere/CE-23-decembre-2016-societe-JT-International-SA-Societe-d-exploitation-industrielle-des-tabacs-et-des-allumettes-societe-Philip-Morris-France-SA-et-autres">http://www.conseil-etat.fr/Decisions-Avis-Publications/Decisions/Selection-des-decisions-faisant-l-objet-d-une-communication-particuliere/CE-23-decembre-2016-societe-JT-International-SA-Societe-d-exploitation-industrielle-des-tabacs-et-des-allumettes-societe-Philip-Morris-France-SA-et-autres</a>.
                        </p>

                        <p><sup>12</sup>Decree No. 239/2016 Amending Government Decree 39/2013 of February 14, 2013 on
                            the manufacture, placement on the market and control of tobacco products, combined warnings,
                            and the detailed rules for the application of the health-protection fine. Available from:
                            <a href="http://www.tobaccocontrollaws.org/files/live/Hungary/Hungary%20-%20Decree%20No.%20239_2016%20-%20national.pdf">http://www.tobaccocontrollaws.org/files/live/Hungary/Hungary%20-%20Decree%20No.%20239_2016%20-%20national.pdf</a>
                            and in English:
                            <a href="http://www.tobaccocontrollaws.org/files/live/Hungary/Hungary%20-%20Regulation%20239_2016.pdf">http://www.tobaccocontrollaws.org/files/live/Hungary/Hungary%20-%20Regulation%20239_2016.pdf</a>
                        </p>

                        <p><sup>13</sup> Public Health (Standardised Packaging of Tobacco) Act 2015. Available from:
                            <a href="http://www.irishstatutebook.ie/eli/2015/act/4/section/23/enacted/en/print.html">http://www.irishstatutebook.ie/eli/2015/act/4/section/23/enacted/en/print.html</a>.
                        </p>

                        <p><sup>14</sup>Draft Public Health (Standardised Packaging of Tobacco) Regulations 2016.
                            Available from:
                            <a href="http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=650&dLang=EN">http://ec.europa.eu/growth/tools-databases/tris/en/index.cfm/search/?trisaction=search.detail&year=2015&num=650&dLang=EN</a>
                            .
                        </p>

                        <p><sup>15</sup>JTI v Minister for Health, Ireland and the Attorney General 2015/2530P.</p>
                        <p><sup>16</sup>See <a
                                    href="http://www.legislation.govt.nz/act/public/2016/0043/latest/DLM5821008.html">http://www.legislation.govt.nz/act/public/2016/0043/latest/DLM5821008.html</a>.
                        </p>
                        <p><sup>17</sup> See
                            <a href="http://www.health.govt.nz/system/files/documents/publications/standardised-tobacco-products-packaging-draft-regulations-consultation-may16_1.pdf">http://www.health.govt.nz/system/files/documents/publications/standardised-tobacco-products-packaging-draft-regulations-consultation-may16_1.pdf</a>.
                        </p>
                        <p><sup>18</sup>
                            <a href="https://kreftforeningen.no/en/cancer-prevention/parliament-adopts-standardised-packaging-to-save-lives-and-prevent-suffering/">https://kreftforeningen.no/en/cancer-prevention/parliament-adopts-standardised-packaging-to-save-lives-and-prevent-suffering/</a>
                        </p>
                        <p><sup>19</sup> Section 30 of the Tobacco Control Act 1973 as amended by the Amending Tobacco
                            Act (implementation of Directive 2014/40/EC and Standardized tobacco packs). Available here:
                            <a href="https://lovdata.no/dokument/NL/lov/2017-02-10-5/KAPITTEL_1-3?q=standardiserte#KAPITTEL_1-3">https://lovdata.no/dokument/NL/lov/2017-02-10-5/KAPITTEL_1-3?q=standardiserte#KAPITTEL_1-3</a>.
                        </p>
                        <p><sup>20</sup> Law no. 201/2016 establishing the conditions for manufacture, presentation and
                            sale of tobacco products, and related products and amending Law no. 349/2002 on preventing
                            and combating the effects of tobacco products, text available from:
                            <a href="http://lege5.ro/Gratuit/geztinjxga4q/legea-nr-201-2016-privind-stabilirea-conditiilor-pentru-fabricarea-prezentarea-si-vanzarea-produselor-din-tutun-si-a-produselor-conexe-si-de-modificare-a-legii-nr-349-2002-pentru-prevenirea-si-combate">http://lege5.ro/Gratuit/geztinjxga4q/legea-nr-201-2016-privind-stabilirea-conditiilor-pentru-fabricarea-prezentarea-si-vanzarea-produselor-din-tutun-si-a-produselor-conexe-si-de-modificare-a-legii-nr-349-2002-pentru-prevenirea-si-combate</a>.
                        </p>

                        <p><sup>21</sup> Available from: <a href="http://imss.dz-rs.si/imis/601ce03a35a0d00c2a33.pdf">http://imss.dz-rs.si/imis/601ce03a35a0d00c2a33.pdf</a>.
                        </p>
                        <p><sup>22</sup> Available from: <a
                                    href="http://www.tobaccocontrollaws.org/files/live/Thailand/Thailand%20-%20TC%20Act%202017.pdf">http://www.tobaccocontrollaws.org/files/live/Thailand/Thailand%20-%20TC%20Act%202017.pdf</a>
                        </p>
                        <p><sup>23</sup> <a href="http://www25.senado.leg.br/web/atividade/materias/-/materia/116679">Senate
                                Bill 103/14</a> ( (introduced March 22, 2014, by Senator Rollemberg); <a
                                    href="http://www25.senado.leg.br/web/atividade/materias/-/materia/124339">Senate
                                Bill 769/15</a> (introduced December 3, 2015, by Senator Serra); <a
                                    href="http://www.camara.gov.br/proposicoesWeb/fichadetramitacao?idProposicao=1301095">House
                                Bill
                                1744/15</a> (introduced
                            May 28, 2015, by Representative Perondi); <a
                                    href="http://www.camara.gov.br/proposicoesWeb/fichadetramitacao?idProposicao=1579246">House
                                Bill 2360/15</a> (introduced July 14, 2015, by
                            Representative Cortes); <a
                                    href="http://www.camara.gov.br/proposicoesWeb/fichadetramitacao?idProposicao=2086169">House
                                Bill 5430/16</a> (introduced May 31, 2016, by Representative
                            Rodrigues).</p>

                        <p><sup>24</sup> Senate Bill <a
                                    href="https://www.camara.cl/pley/pley_detalle.aspx?prmID=9292&prmBoletin=8886-11">8.886-11
                                w</a>.</p>
                        <p><sup>25</sup> <a
                                    href="http://ppless.asambleanacional.gob.ec/alfresco/d/d/workspace/SpacesStore/1e1aff46-ca22-4341-8802-d700d72c0e8a/Proyecto de Ley Org%E1nica Reformatoria a la Ley Org%E1nica para la Regulaci%F3n y Control del Tabaco Tr. 257384.pdf">Bill
                                216</a>.</p>
                        <p><sup>26</sup> <a href="http://www.asamblea.gob.pa/proyley/2015_P_136.pdf">Bill No.
                                136/2015</a>.</p>
                        <p><sup>27</sup> Available from: <a
                                    href="http://healthycanadians.gc.ca/health-system-systeme-sante/consultations/tobacco-packages-emballages-produits-tabac/document-eng.php">http://healthycanadians.gc.ca/health-system-systeme-sante/consultations/tobacco-packages-emballages-produits-tabac/document-eng.php</a>.
                        </p>
                        <p><sup>28</sup> Available from: <a
                                    href="https://julkaisut.valtioneuvosto.fi/handle/10024/70305">https://julkaisut.valtioneuvosto.fi/handle/10024/70305</a>.
                        </p>
                        <p><sup>29</sup> Available here:
                            <a href="https://www.reach.gov.sg/participate/public-consultation/health-promotion-board/substance-abuse-department/public-consultation-paper-on-potential-tobacco-control-policies">https://www.reach.gov.sg/participate/public-consultation/health-promotion-board/substance-abuse-department/public-consultation-paper-on-potential-tobacco-control-policies</a>.
                        </p>
                        <p><sup>30</sup> Reported here:
                            <a href="https://www.theonlinecitizen.com/2017/03/09/legal-age-for-smoking-and-buying-tobacco-products-in-singapore-to-be-raised/">https://www.theonlinecitizen.com/2017/03/09/legal-age-for-smoking-and-buying-tobacco-products-in-singapore-to-be-raised/</a>.
                        </p>

                        <p><sup>31</sup> Available from: <a
                                    href="http://tobaksfakta.se/wp-content/uploads/2016/03/Summary1.pdf">http://tobaksfakta.se/wp-content/uploads/2016/03/Summary1.pdf</a>.
                        </p>
                        <p><sup>32</sup> Notification number TPKM/264 (Taiwan Economy) Date Issued: 2/13/2017.</p>
                        <p><sup>33</sup> See
                            <a href="http://www.espectador.com/salud/338068/empaquetado-generico-para-reducir-el-atractivo-del-tabaco-en-2017">http://www.espectador.com/salud/338068/empaquetado-generico-para-reducir-el-atractivo-del-tabaco-en-2017</a>.
                        </p>

                        <p><sup>34</sup> EU Tobacco Products Directive introduces some pack standardization provisions
                            (on shape and minimum quantities together with 65 percent front and back picture health
                            warnings) but does not itself impose full standardized packaging. Instead it provides the EU
                            Member States with the ability to act directly through domestic legislation (“Accordingly,
                            Member States could, for example, introduce provisions providing for further standardization
                            of the packaging of tobacco products, provided that those provisions are compatible with the
                            TFEU [Treaty of the Functioning of the European Union], with WTO obligations and do not
                            affect the full application of this Directive.” Article 24.2 Directive 2014/40/EU of the
                            European Parliamentand of the Council of April 3, 2014.</p>

                    </div>
                </div>
            </section>
            <?php
            break;

        // is it lawful
        case 'is-it-lawful':
            if ($var == 'og_desc') {
                $og_desc = 'Tobacco companies say plain packaging is unlawful – is this true?';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Is it lawful?</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title">Tobacco companies say plain packaging is unlawful – is this
                            true?
                        </div>
                        <p>Plain packaging laws have been upheld as lawful by national, regional and international
                            courts and tribunals which have found the arguments put forward by the tobacco companies to
                            be flawed.</p>
                        <p>Plain packaging is recommended in the implementation guidelines to Article 11 and 13 of the
                            WHO Framework Convention on Tobacco Control – one of the most widely ratified international
                            treaties in the world. For more details see here </p>
                        <p>If adopted using appropriate national administrative, constitutional and legislative
                            arrangements then there is no inherent reason why plain packaging should be found
                            unlawful.</p>

                        <div class="section-secondary-title">Legal challenges to plain packaging laws:
                        </div>
                        <p>All the legal challenges decided, as of the end of 2016, have upheld the legality of plain
                            packaging of tobacco products:</p>

                        <p>AUSTRALIA</p>
                        <ul>
                            <li>Constitutional challenge in Australia High Court <sup>1</sup> –dismissed August 2011
                            </li>
                            <li>International investment arbitration claim <sup>2</sup> – dismissed December 2015
                            </li>
                            <li>Complaint before the WTO dispute panel - ruling due July 2017.
                            </li>
                        </ul>

                        <p>UNITED KINGDOM</p>
                        <ul>
                            <li>5 claims in the High Court of England and Wales <sup>3</sup> –dismissed in May 2016.
                            </li>
                            <li>High Court ruling upheld by Court of Appeal in December 2016
                            </li>
                        </ul>

                        <p>FRANCE</p>
                        <ul>
                            <li>Constitutional Court referral <sup>4</sup> – dismissed January 2016
                            </li>
                            <li>6 challenges in the Conseild’Etat <sup>5</sup> –dismissed December 2016.
                            </li>
                        </ul>

                        <p>IRELAND</p>
                        <ul>
                            <li>Challenge in the High Court <sup>6</sup> – struck outNovember 2016.
                            </li>
                        </ul>

                        <p>IRELAND</p>
                        <ul>
                            <li>Challenge to the EU Tobacco Products Directive in the EU Court of Justice <sup>7</sup> –
                                dismissed in May 2016
                            </li>
                        </ul>

                        <div class="section-secondary-title">Does plain packaging of tobacco products breach
                            intellectual property laws?
                        </div>

                        <p>The tobacco companies argue that once they have registered their trademarks they have a
                            ‘right to use’ those trademarks. But international intellectual property treatiesdeal with
                            registration procedures and how trade mark owners can stop others from using their marks.
                            International rules do not give the owners of registered trademarks a ‘right to use’ them
                            that overrides a states’ powers to regulate for the public good. </p>

                        <p>The court rulings dismissing the legal challenges in Australia, France and the United Kingdom
                            have all been clear - plain packaging does not breach either domestic or international
                            intellectual property laws and obligations.</p>
                        <p>The High Court in Australia pointed out that plain packaging is no different in kind from
                            other packaging or labelling requirement.</p>
                        <p>As far back as 1994, disclosed internal industry documents show that the tobacco companies
                            had advice from their own lawyers and from the World Intellectual Property Organisation
                            (WIPO), that plain packaging would not contravene the international intellectual property
                            rules <sup>8</sup></p>

                        <div class="section-secondary-title">Other Legal issues in brief
                        </div>
                        <div class="section-secondary-title fc-ref-mat-3">What do the tobacco companies claim; and what
                            have the courts ruled?
                        </div>
                        <p>Below are some examples of what the courts have said in dismissing the tobacco companies’
                            legal claims against plain packaging. [paragraph numbers from judgments given in square
                            brackets].</p>
                        <ol>
                            <li>
                                Plain packaging is not ‘justified’, ‘necessary’ or ‘proportionate’
                                <ul>
                                    <li><b>UK High Court</b>: “the Secretary of State has adduced ample evidence to
                                        support the
                                        suitability and appropriateness of the Regulations.”[¶35]
                                    </li>
                                    <li><b>France Conseild’Etat</b>: “neither the legislature nor the regulatory
                                        authorities
                                        have … disregarded a fair balance between the requirements of the public
                                        interest and the protection of the right of property” [¶29 translated]
                                    </li>
                                    <li><b>Australia High Court</b>: plain packaging requirements “are no different in
                                        kind
                                        from any legislation that requires labels that warn against the use or misuse of
                                        a product.” [¶181]
                                    </li>
                                </ul>
                            </li>
                        </ol>

                        <ol>
                            <li>The evidence does not support that the policy will work to reduce smoking rates.

                                <ul>
                                    <li><b>UK High Court</b>: “In my judgment the qualitative evidence relied upon by
                                        the
                                        [Government] is cogent, substantial and overwhelmingly one-directional in its
                                        conclusion” that plain packaging will be effective. [¶592]
                                    </li>

                                    <li><b>France Conseild’Etat</b>: “It is nevertheless clear from other studies and
                                        expert
                                        reports cited by the Minister of Health, that plain packaging may reduce the
                                        attractiveness of tobacco products and to change the perception of
                                        consumers”[¶28]
                                    </li>
                                </ul>
                            </li>
                        </ol>

                        <ol>
                            <li>
                                Plain packaging is an ‘expropriation’, ‘deprivation’ or ‘acquisition’ of the property
                                rights in their trademarks.
                                <ul>
                                    <li><b>France Constitutional Court</b>: “Thus an expropriation is not at issue here
                                        … but a
                                        limitation of the rights of property justified by the objective of protecting
                                        public health” [¶20 translated]
                                    </li>
                                    <li><b>Australia High Court</b>: “neither the Commonwealth nor any other person
                                        acquired
                                        any property” [Official court summary]
                                    </li>
                                </ul>
                            </li>
                        </ol>

                        <ol>
                            <li>
                                Plain packaging is incompatible with intellectual property laws and the ‘right to
                                use’ a trademark.
                                <ul>
                                    <li><b>UK High Court</b>: “It is no part of international, EU or domestic common law
                                        on
                                        intellectual property that the legitimate function of a trade mark (i.e. its
                                        essence or
                                        substance) should be defined to include a right to use the mark to harm public
                                        health.”
                                        [¶40]
                                    </li>
                                </ul>
                            </li>
                        </ol>

                        <ol>
                            <li>Plain packaging breaches World Trade Organisation rules and international treaties
                                <ul>
                                    <li><b>France Conseild’Etat</b>: The provisions in the WTO TRIPS and the Paris
                                        Convection
                                        “do not in any event prohibit States parties from exercising the option, which
                                        is always open to them, to adopt measures necessary to protect public health,
                                        which can be applied, where appropriate depending on the objective, to certain
                                        categories of products.” [¶22 translated]
                                    </li>
                                </ul>
                            </li>
                        </ol>

                        <ol>
                            <li>Plain packaging breaches World Trade Organisation rules and international
                                treaties
                                <ul>
                                    <li><b>UK High Court</b>: The claim includes “a challenge to the right to conduct
                                        business
                                        under Article 16 of the Fundamental Charter which it is said the Regulations
                                        violate. As to this it is clear from case law that this is (for obvious reasons)
                                        a highly circumscribed right and all manner of different laws and regulatory
                                        measures (tax, environmental, health and safety, etc) limit the freedom that
                                        business otherwise enjoys to do as it pleases…This ground adds nothing new to
                                        the other legal challenges.” [¶41]
                                    </li>
                                </ul>
                            </li>
                        </ol>

                        <div class="section-secondary-title">End Notes
                        </div>
                        <p><sup>1</sup>JT International SA v Commonwealth of Australia [2012] HCA 43, High Court of
                            Australia, Order August 15, 2012, Reasons October 5, 2012</p>
                        <p><sup>2</sup>Philip Morris Asia Limited v. The Commonwealth of Australia. PCA Case No. 2012-12
                        </p>
                        <p><sup>3</sup>R (British American Tobacco &Ors) v Secretary of State for Health [2016] EWHC
                            1169 (Admin)</p>
                        <p><sup>4</sup>LE CONSEIL CONSTITUTIONNEL Décision n° 2015-727 DC</p>
                        <p><sup>5</sup>CE, 23 décembre 2016, société JT International SA,
                            Sociétéd'exploitationindustrielle des tabacs et des allumettes, société Philip Morris France
                            SA et autres</p>
                        <p><sup>6</sup>JTI v Minister for Health, Ireland and the Attorney General is 2015/2530P</p>
                        <p><sup>7</sup>Philip Morris Brands SARL and Others v Secretary of State for Health C-547/14</p>
                        <p><sup>8</sup>A full history and explanation of the disclosed documents relating to plain
                            packaging is produced by Smoke-Free Canada and can be found here:
                            <a href="http://www.smoke-free.ca/pdf_1/plotagainstplainpackaging-apr1'.pdf">http://www.smoke-free.ca/pdf_1/plotagainstplainpackaging-apr1'.pdf</a>
                        </p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // tobacco industry arguments
        case 'tobacco-industry-arguments':
            if ($var == 'og_desc') {
                $og_desc = 'Industry Argument There is no evidence that it will work to reduce smoking rates.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Tobacco industry arguments</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-brown">Industry Argument There is no evidence that
                            it will work to reduce smoking rates.
                        </div>
                        <p><b>Five independent systematic evidence reviews</b> <sup>1</sup> have been published which
                            consider
                            over 70 peer
                            reviewed scientific research studies, notable for their breadth and diversity of methods,and
                            for strong consistency in showing that plain packaging will contribute to reducing smoking
                            rates. There is also 4 years’ post implementation research and statistical data from
                            Australia all of which points towards the measure being effective. </p>
                        <p>The Chantler Review from the UK stated thatall the evidence “points in a single direction,
                            and I am not aware of any convincing evidence pointing the other way.” <sup>2</sup></p>

                        <img width="450px" class="center-block img-responsive" src="<?php echo $base_url
                        ?>img/home/WHere's the proof.jpeg"
                             alt="">
                        <p class="small text-center">British American Tobacco advertisement from the UK</p>

                        <p>None of the studies used by the tobacco industry to oppose plain packaging have been peer
                            reviewed; almost all were funded by the industry and have been the subject of serious
                            criticism by academics and judges for their flawed methodology. <sup>3</sup></p>
                        <p>The official statistical evidence from Australia shows an increase in the rate of decline of
                            both smoking prevalence and tobacco consumption after implementation. The PIR analysis
                            attributes a 0.55 percentage point reduction in smoking rates to plain packaging, equivalent
                            to 118,000 less smokers over the 34 months after implementation. <sup>4</sup></p>

                        <div class="section-secondary-title fc-dark-brown">Industry ArgumentIt will increase the illicit
                            trade in tobacco; plain packs are easier to counterfeit.
                        </div>
                        <p><b>Even Philip Morris has said that branded packs using the most complex holographic designs
                                are
                                already cheap and easy to counterfeit</b> <sup>5</sup>. Plain packaging retains
                            colourful health
                            warnings,
                            tax stamps and covert tracking codes and so will not be significantly cheaper to counterfeit
                            that existing packs. </p>

                        <img width="350px" class="center-block img-responsive" src="<?php echo $base_url
                        ?>img/home/how do you spot JTI.png"
                             alt="">
                        <p class="small text-center">Japan Tobacco advertisement from the UK</p>

                        <p>Illicit trade is affected by supply and demand. Plain packaging does not increase demand for
                            illicit tobacco but reduces overall demand for tobacco. Supply is impacted by effective
                            enforcement action which is also not effected by plain packaging. </p>
                        <p><b>The tobacco industry has for years been complicit in the illicit market</b> by
                            oversupplying low
                            tax regimes <sup>6</sup>. The industry simply cannot be trusted in relation to the
                            illicit market
                            .</p>
                        <p><b>In Australia, the proportion of illicit tobacco on the market has stayed the same</b> or
                            reduced
                            since implementation <sup>7</sup>. </p>
                        <p>The Customs and Revenue department in the UK produced a detailed report that concluded plain
                            packaging will have no impact on the size of the illicit market. <sup>8</sup></p>
                        <p><b>The tobacco industry has exaggerated the data and manipulated the press</b> over this
                            issue
                            <sup>9</sup>
                            .</p>

                        <img width="350px" class="center-block img-responsive" src="<?php echo $base_url
                        ?>img/home/JTI_Canada_Campaign_MASTERS_260x368_10-9-16_Page_4.jpg"
                             alt="">
                        <p class="small text-center">Advertisement on Japan Tobacco website in Canada </p>

                        <p><b>The only study relied on by the industry on illicit trade in Australia is by KPMG</b> in
                            which
                            the methodology used is fundamentally flawed <sup>10</sup>. Even the KPMG report finds that
                            <i>“Through to
                                the end of 2014, there has been no evidence of counterfeit plain packaging
                                cigarettes”</i>. KPMG
                            also wrote to the UK government stating the report <i>does not</i> support <i>“the
                                contention that
                                plain paper packaging could lead of itself to an increase in tobacco smuggling”</i>.
                        </p>
                        <p><b>In their legal challenges to plain packaging the tobacco companies submitted no
                                supporting evidence, data or experts</b> and made this claim “by mere assertion”
                            <sup>11</sup>.
                        </p>

                        <div class="section-secondary-title fc-dark-brown">Industry Argument It will commoditise tobacco
                            leading to price reductions thereby increasing demand.
                        </div>
                        <p><b>After plain packaging in Australia, tobacco companies continued to increase their prices
                                in
                                all market sectors</b>, over and above the tax rate increases <sup>12</sup>. Even if
                            prices
                            were to fall
                            this
                            could be offset with increases in taxation. </p>
                        <img width="450px" class="center-block img-responsive" src="<?php echo $base_url
                        ?>img/home/Plain_Pack.jpeg"
                             alt="">
                        <p class="small text-center">Screen shot from a British American Tobacco website in
                            Australia.</p>


                        <div class="section-secondary-title fc-dark-brown">Industry Argument It is the start of a
                            slippery slope and will lead to plain packaging for other products.
                        </div>

                        <p><b>Tobacco is a uniquely damaging product which requires unique regulations</b>. Only tobacco
                            control is the subject of the first and only public health international treaty. The aim of
                            tobacco control it to eradicate all tobacco use and have a ‘tobacco free society’. This is
                            not the case for the regulatory control of other potentially unhealthy consumer
                            products.</p>

                        <p><b>The tobacco industry often uses the ‘slippery slope’ argument to try to resist tobacco
                                control measures <sup>13</sup> such as health warnings</b>. To date, only tobacco
                            products carry
                            large graphic
                            health warnings so the slippery slope argument has not turned out to be true for other
                            tobacco control measures. </p>

                        <p><b>Tobacco is the only product that the World Health Organization recommends plain packaging
                                for <sup>14</sup></b>. Plain packaging of other products has not so far been proposed in
                            any
                            country that
                            has
                            adopted plain packaging of tobacco products. There is as yet very little research evidence
                            in relation to plain packaging of other products that could support such proposals. </p>

                        <div class="section-secondary-title fc-dark-brown">Industry Argument It breaches international
                            and domestic intellectual property laws.
                        </div>

                        <p><b>Legal rulings in Australia, the UK, France and the EU as well as an international
                                investment
                                tribunal ruling, have all confirmed tobacco packaging regulations not breach domestic or
                                international intellectual property (IP) obligations. <sup>15</sup></b></p>
                        <p>Disclosed internal tobacco industry documents show that the tobacco companies received legal
                            advice from their own lawyers and from the World Intellectual Property Organisation, that
                            plain packaging would not breach international IP obligations because it only controls the
                            use of trademarks and does not prevent registration of trademarks. <sup>16</sup></p>

                        <img width="300px" class="center-block img-responsive" src="<?php echo $base_url
                        ?>img/home/ciglobby1.jpg"
                             alt="">
                        <p class="small text-center">Japan Tobacco sponsored poster from Ireland.</p>

                        <p><b>IP law gives the trademark owner the right to stop others from using the mark but does
                                not
                                give the owner the unfettered right to use the mark.</b> This has been confirmed by
                            national
                            courts, investment tribunals and previous WTO panel rulings. <sup>17</sup></p>

                        <p>The WTO dispute panel determining the complaint against Australia will soon produce its
                            report and is expected to rule that there is no breach of the TRIPS agreement on
                            intellectual property. The ruling should be available in July 2017. Governments in
                            Australia, UK, France, Ireland, Hungary, and New Zealand have carefully considered their WTO
                            and international obligations and decided to proceed with plain packaging legislation.</p>


                        <div class="section-secondary-title fc-dark-brown">Industry Argument It will cost small retail
                            businesses by increasing transaction times.
                        </div>

                        <p><b>In Australia transaction quickly returned to normal and in some areas decreased</b>
                            because
                            tobacco was put in alphabetical order on shelves making brands easier to identify.
                            <sup>18</sup></p>

                        <p>PMI and BAT funded retailers in the UK and France to oppose plain packaging <sup>19</sup>.
                        </p>

                        <p>Tobacco retailers oppose all tobacco control laws because they reduce the volume of tobacco
                            sales but this has to be balanced against the huge health and economic benefits that come
                            from less people smoking.</p>

                        <img width="450px" class="center-block img-responsive" src="<?php echo $base_url
                        ?>img/home/NFRN post card.png"
                             alt="">
                        <p class="small text-center">Post card placed in small retailers across UK funded by National
                            Federation of Retail Newsagents.</p>

                        <div class="section-secondary-title fc-dark-brown">Industry Argument It will cause job losses in
                            domestic tobacco manufacturing industries.
                        </div>
                        <p><b>This argument puts tobacco profits before the economic benefits to society. The Economic
                                benefits in reducing smoking rates are huge and far outweigh the costs to the
                                industry.</b></p>
                        <p>The Economic Impact Assessment for the UK showed that a 1 percentage point reduction in
                            smoking rates resulting from plain packaging would lead to <b>£25billion net benefit to the
                                economy over 10 years</b> due to reduced health care costs and increased productivity
                            . <sup>20</sup></p>

                        <p><b>Reductions in smoking lead to significant health care savings in the short term</b>. A new
                            study
                            from the US showed that a 10% relative drop in smoking (meaning, for instance, a drop from
                            20% to 18%) would be followed by an expected $63 billion reductionin healthcare expenditure
                            the next year. <sup>21</sup></p>

                        <p>The tobacco industry consistently exaggerate the impact of tobacco control measures on their
                            ability to make profits. In rich economies where smoking rates are falling, tobacco company
                            profits still continue to rise. The companies increase their prices, over and above any tax
                            rises, and so still increase profits <sup>22</sup>. </p>

                        <p>Money not spent on tobacco by those that have quit is then spent on other goods, generating
                            alternative employment. Studies show that most countries see no net job losses and that a
                            few see net gains if consumption falls <sup>23</sup>.</p>

                        <img width="450px" class="center-block img-responsive" src="<?php echo $base_url
                        ?>img/home/chile bill board.png"
                             alt="">

                        <p class="small text-center"><b>“President do not leave us unemployed - Senators protect
                                Casablanca -
                                bad tobacco
                                law = 800
                                unemployed”</b> A roadside bill board in Chile from May 2016 paid for by the tobacco
                            industry
                            opposing the Tobacco Control Bill which included provisions for plain packaging.</p>

                        <div class="section-secondary-title fc-dark-brown">Industry Argument Branding on packs only goes
                            to ‘brand switching’ and market share and not to smoking initiation or overall consumption.
                        </div>

                        <p><b>The WHO Framework Convention on Tobacco Control and its guidelines</b>, recognise that
                            tobacco
                            packaging and product design are “important elements of advertising and promotion” and
                            recommends standardised packaging as a “means of eliminating the effects of advertising or
                            promotion on packaging”. </p>

                        <p><b>Packaging is recognised as an important component in of the overall marketing strategy
                                for
                                all consumer goods</b>. Tobacco is no exception. Packaging is particularly important for
                            consumer products with a high degree of social visibility, such as cigarettes. Unlike many
                            other consumer products, cigarettes are in packages that are displayed each time the product
                            is used and are often left in public view between uses.</p>

                        <p>The US Surgeon General summarised evidence in 2012 and 2014 and concluded that: ‘The evidence
                            is sufficient to conclude that advertising and promotional activities by the tobacco
                            companies cause the onset and continuation of smoking among adolescents and young
                            adults” <sup>24</sup></p>

                        <div class="section-secondary-title fc-dark-brown">End Notes
                        </div>

                        <p><sup>1</sup> Cancer Counsel Victoria Review (Australia 2011); Stirling Review (UK 2012 and
                            updated 2014); The Chanter Review (UK 2014); The Hammond Review (Ireland 2014); and the
                            Cochrane Review (international 2017)</p>
                        <p><sup>2</sup> <a
                                    href="http://www.kcl.ac.uk/health/10035-TSO-2901853-Chantler-Review-ACCESSIBLE.PDF">http://www.kcl.ac.uk/health/10035-TSO-2901853-Chantler-Review-ACCESSIBLE.PDF</a>
                            at paragraph 6.2</p>

                        <p><sup>3</sup> In the tobacco companies’ legal challenge to plain packaging in the UK, the High
                            Court Judge stated that the evidence put forward by the tobacco companies was not peer
                            reviewed, either ignored or airily dismissed the worldwide research and literature base and
                            was frequently unverifiable. He made detailed critiques of each of the expert reports put
                            forward by the tobacco companies and concluded that this “body of expert evidence does not
                            accord with internationally recognised best practice” [R (British American Tobacco &Ors) v
                            Secretary of State for Health [2016] EWHC 1169 (Admin). para 374].</p>
                        <p><sup>4</sup> <a href="https://ris.govspace.gov.au/2016/02/26/tobacco-plain-packaging/">https://ris.govspace.gov.au/2016/02/26/tobacco-plain-packaging/</a>
                        </p>
                        <p><sup>5</sup> Philip Morris International, Codentify, Brochure, 2012:
                            <a href="http://www.pmi.com/eng/documents/Codentify_E_Brochure_English.pdf">http://www.pmi.com/eng/documents/Codentify_E_Brochure_English.pdf</a>
                        </p>

                        <p><sup>6</sup>
                            <a href="https://theconversation.com/tobacco-industry-rallies-against-illicit-trade-but-have-we-forgotten-its-complicity-38760">https://theconversation.com/tobacco-industry-rallies-against-illicit-trade-but-have-we-forgotten-its-complicity-38760</a>
                        </p>
                        <p><sup>7</sup> <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii76.full">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii76.full</a>
                        </p>
                        <p><sup>8</sup> The UK HMRC assessment of illict trade and plain packaging:
                            <a href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/403495/HMRC_impact_report.pdf">https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/403495/HMRC_impact_report.pdf</a>
                        </p>
                        <p><sup>9</sup> <a
                                    href="http://tobaccocontrol.bmj.com/content/23/e1/e35.full?sid=2fc80260-7458-44b1-89c2-af867a6caa8a">http://tobaccocontrol.bmj.com/content/23/e1/e35.full?sid=2fc80260-7458-44b1-89c2-af867a6caa8a</a>
                        </p>
                        <p><sup>10</sup>
                            <a href="http://www.cancervic.org.au/downloads/plainfacts/Analysis_IllicitAusKPMG_full_year_2014_29May15.pdf">http://www.cancervic.org.au/downloads/plainfacts/Analysis_IllicitAusKPMG_full_year_2014_29May15.pdf</a>
                            . The KPMG report also contains a disclaimer that expressly states that it was produced to
                            specific criteria set by the tobacco companies and should not be used for any purposes or
                            persons other than the tobacco companies that commissioned the report. </p>
                        <p><sup>11</sup> R (British American Tobacco &Ors) v Secretary of State for Health [2016] EWHC
                            1169 (Admin) paragraphs 609, 669 and 996</p>
                        <p><sup>12</sup> <a href="http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.abstract">http://tobaccocontrol.bmj.com/content/24/Suppl_2/ii90.abstract</a>
                        </p>
                        <p><sup>13</sup> Chapman S, Carter SM “Avoid health warnings on all tobacco products for just as
                            long as we can”: a history of Australian tobacco industry efforts to avoid, delay and dilute
                            health warnings on cigarettes Tobacco Control 2003;12:iii13-iii22.</p>
                        <p><sup>14</sup> From the WHO website (accessed on 2 March 2017):
                            <a href="http://www.who.int/campaigns/no-tobacco-day/2016/faq-plain-packaging/en/index2.html">http://www.who.int/campaigns/no-tobacco-day/2016/faq-plain-packaging/en/index2.html</a>
                        </p>
                        <p><sup>15</sup> R (British American Tobacco &Ors) v Secretary of State for Health [2016] EWHC
                            1169 (Admin), in particular para 40
                            JT International SA v Commonwealth of Australia [2012] HCA 43, High Court of Australia,
                            Reasons October 5, 2012
                            The Queen on the Application of Philip Morris Brands SARL et al. v. Secretary of State for
                            Health, Case C-547/14, CJEU (2016)
                            Philip Morris Brands Sarl&Ors v Oriental Republic of Uruguay ICSID Case No. ARB/10/7 in
                            particular paras 260-271
                        </p>
                        <p><sup>16</sup>
                            <a href="http://www.tobaccotactics.org/index.php/Countering_Industry_Arguments_Against_Plain_Packaging:_It_Breaches_Intellectual_Property_Rights#cite_note-10">http://www.tobaccotactics.org/index.php/Countering_Industry_Arguments_Against_Plain_Packaging:_It_Breaches_Intellectual_Property_Rights#cite_note-10</a>
                        </p>
                        <p><sup>17</sup> Confirmed in the UK in BAT v Sec of State [2016]; and the tribunal ruling in
                            Philip Morris Brands Sarl v Uruguay. See note 11.</p>
                        <p><sup>18</sup> <a
                                    href="http://tobaccocontrol.bmj.com/content/early/2013/05/25/tobaccocontrol-2013-050987.abstract">http://tobaccocontrol.bmj.com/content/early/2013/05/25/tobaccocontrol-2013-050987.abstract</a>
                        </p>
                        <p><sup>19</sup> <a
                                    href="http://tobaccotactics.org/index.php/BAT_Funded_Lobbying_Against_Plain_Packaging">http://tobaccotactics.org/index.php/BAT_Funded_Lobbying_Against_Plain_Packaging</a>
                            <br/>
                            <a href="http://tobaccotactics.org/index.php/Astroturfing">http://tobaccotactics.org/index.php/Astroturfing</a>
                        </p>
                        <p><sup>20</sup> The economic impact assessment from the UK <a
                                    href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/403493/Impact_assessment.pdf">https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/403493/Impact_assessment.pdf</a>
                        </p>
                        <p><sup>21</sup> <a
                                    href="http://journals.plos.org/plosmedicine/article?id=10.1371/journal.pmed.1002020">http://journals.plos.org/plosmedicine/article?id=10.1371/journal.pmed.1002020</a>
                        </p>
                        <p><sup>22</sup> <a href="http://onlinelibrary.wiley.com/doi/10.1111/add.12159/full">http://onlinelibrary.wiley.com/doi/10.1111/add.12159/full</a>
                        </p>
                        <p><sup>23</sup> This was the conclusion of a report for the World Bank - Curbing the epidemic:
                            governments and the economics of tobacco control.
                            <a href="http://tobaccocontrol.bmj.com/content/8/2/196.full">http://tobaccocontrol.bmj.com/content/8/2/196.full</a>.
                            For instance at page 69 it states “A
                            study in the United States found that the number of jobs would rise by 20,000 between 1993
                            and 2000 if all domestic consumption was eliminated.”</p>
                        <p><sup>24</sup> United States Department of Health and Human Services, Surgeon General,
                            (2014). Surgeon
                            General’s Report on Smoking and Health.</p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // explore the guides
        case 'explore-the-guides':
            if ($var == 'og_desc') {
                $og_desc = 'Dis aliquet aliquam in sit ridiculus dolor tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec odio, adipiscing, quis dictumst eros urna est egestas parturient.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Explore the Guides</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-brown">Dis aliquet aliquam in sit ridiculus dolor
                            tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue
                            nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio
                            velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec
                            odio, adipiscing, quis dictumst eros urna est egestas parturient.
                        </div>
                        <p>Nec lacus aliquet aliquet elit massa, velit, aliquam ac quis in rhoncus in, turpis! Rhoncus
                            ridiculus proin, vel duis elementum risus adipiscing sed dapibus! Placerat nunc, urna. Et
                            proin. Lacus mattis! Ridiculus porta scelerisque auctor tempor magna auctor! Ut, porttitor
                            enim lundium elementum cras, pulvinar dis magna, porttitor urna! Nec? Nascetur lorem in et
                            phasellus odio aenean porta lorem.</p>
                        <p>Et porttitor porta porta dignissim lacus? Urna urna natoque tincidunt scelerisque! Nisi.
                            Dolor? Cum nascetur! Nisi penatibus porta a. Vel et aenean, dignissim. Nunc turpis,
                            sagittis, placerat proin? Mid? Ridiculus scelerisque integer, auctor turpis nunc? Tincidunt
                            rhoncus enim cras tincidunt adipiscing? Et vel magna, est, vel nunc? Ultricies ac nisi, ac
                            proin parturient ultricies et tempor tincidunt magna odio.</p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // explore the tools and resources
        case 'tools-and-resources':
            if ($var == 'og_desc') {
                $og_desc = 'Dis aliquet aliquam in sit ridiculus dolor tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec odio, adipiscing, quis dictumst eros urna est egestas parturient.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Explore the Tools and Resources</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-brown">Dis aliquet aliquam in sit ridiculus dolor
                            tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue
                            nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio
                            velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec
                            odio, adipiscing, quis dictumst eros urna est egestas parturient.
                        </div>
                        <p>Nec lacus aliquet aliquet elit massa, velit, aliquam ac quis in rhoncus in, turpis! Rhoncus
                            ridiculus proin, vel duis elementum risus adipiscing sed dapibus! Placerat nunc, urna. Et
                            proin. Lacus mattis! Ridiculus porta scelerisque auctor tempor magna auctor! Ut, porttitor
                            enim lundium elementum cras, pulvinar dis magna, porttitor urna! Nec? Nascetur lorem in et
                            phasellus odio aenean porta lorem.</p>
                        <p>Et porttitor porta porta dignissim lacus? Urna urna natoque tincidunt scelerisque! Nisi.
                            Dolor? Cum nascetur! Nisi penatibus porta a. Vel et aenean, dignissim. Nunc turpis,
                            sagittis, placerat proin? Mid? Ridiculus scelerisque integer, auctor turpis nunc? Tincidunt
                            rhoncus enim cras tincidunt adipiscing? Et vel magna, est, vel nunc? Ultricies ac nisi, ac
                            proin parturient ultricies et tempor tincidunt magna odio.</p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // compare images
        case 'compare-images':
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
                        <div class="section-secondary-title fc-dark-brown">Dis aliquet aliquam in sit ridiculus dolor
                            tortor ridiculus, augue. Tincidunt. Lectus ac nec, risus! Pid, nisi purus nisi? Augue augue
                            nisi penatibus. Purus, sagittis amet velit! Dapibus magna rhoncus, scelerisque, nec ac odio
                            velit lacus et mid urna natoque integer porta mattis, nisi, aliquet nunc porttitor, a eu nec
                            odio, adipiscing, quis dictumst eros urna est egestas parturient.
                        </div>
                        <p>Nec lacus aliquet aliquet elit massa, velit, aliquam ac quis in rhoncus in, turpis! Rhoncus
                            ridiculus proin, vel duis elementum risus adipiscing sed dapibus! Placerat nunc, urna. Et
                            proin. Lacus mattis! Ridiculus porta scelerisque auctor tempor magna auctor! Ut, porttitor
                            enim lundium elementum cras, pulvinar dis magna, porttitor urna! Nec? Nascetur lorem in et
                            phasellus odio aenean porta lorem.</p>
                        <p>Et porttitor porta porta dignissim lacus? Urna urna natoque tincidunt scelerisque! Nisi.
                            Dolor? Cum nascetur! Nisi penatibus porta a. Vel et aenean, dignissim. Nunc turpis,
                            sagittis, placerat proin? Mid? Ridiculus scelerisque integer, auctor turpis nunc? Tincidunt
                            rhoncus enim cras tincidunt adipiscing? Et vel magna, est, vel nunc? Ultricies ac nisi, ac
                            proin parturient ultricies et tempor tincidunt magna odio.</p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // plain packaging who fctc
        case 'plain-packaging-and-the-who-fctc':
            if ($var == 'og_desc') {
                $og_desc = 'The World Health Organization Framework Convention on Tobacco Control (WHO FCTC) is an evidence based, legally binding multilateral treaty with 180 parties, and one of the most widely ratified treaties in the UN system. ';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Plain packaging and the WHO FCTC</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <p>The World Health Organization Framework Convention on Tobacco Control (WHO FCTC) is an
                            evidence based, legally binding multilateral treaty with 180 parties, and one of the most
                            widely ratified treaties in the UN system. Its purpose is to ‘protect present and future
                            generations from the devastating health, social, environmental and economic consequences of
                            tobacco use and exposure from tobacco smoke’ (WHO FCTC Article 3).</p>
                        <p>The purposes or <a href="<?php echo $base_Url; ?>getting-prepared/set-policy-objectives">objectives
                                of plain packaging</a> are drawn from the evidence base that supports the policy and the
                            context of the policy recommendations in the WHO FCTC.</p>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-brown">Article 11 Packaging and Labelling of Tobacco
                            Products
                        </div>
                        <p>Article 11 <u>obliges</u> Parties to implement <u>effective measures</u> to ensure that
                            tobaccopackaging and labelling do not promote tobacco products by means that are
                            false,misleading or deceptive (Article 11.1(a)) and to ensure that tobacco packaging carries
                            health warnings describing the harmful effects of tobacco use (Article 11.1(b)).</p>
                        <p>The <a href="<?php echo $base_url; ?>evidence/research-evidence">evidence</a> clearly
                            demonstrates that plain packaging:</p>
                        <ul class="custom">
                            <li>Is an <u>effective measure</u> to address misleading and deceptive packaging.</li>
                            <li>Increases the noticeability and <u>effectiveness</u> of health warnings.</li>
                        </ul>
                        <p>Paragraph 46 of the Guidelines for the implementation of Article 11 states:</p>
                        <div class="p-states">
                            <p>
                                Parties should consider adopting measures to restrict or prohibit the use of logos,
                                colors, brand images or promotional information on packaging other than brand names and
                                product names displayed in a standard colour and font style (<u>plain packaging</u>).
                                This may increase the noticeability and effectiveness of health warnings and messages,
                                prevent the package from detracting attention from them, and address industry package
                                design techniques that may suggest that some products are less harmful than others.
                            </p>
                        </div>
                        <p>This passage is set out in a broader context of other packaging and labelling measures, which
                            reinforces the recommendation that plain packaging is adopted in addition to (not as an
                            alternative to) other measures including large pictorial health warnings.</p>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-brown">Article 13 Tobacco Advertising, Promotion and
                            Sponsorship
                        </div>
                        <p>Article 13 <u>obliges</u> Parties to undertake a <u>comprehensive ban</u> on tobacco
                            advertising, promotion and sponsorship. The phrase “tobacco advertising and promotion” is
                            defined in Article 1(c) as “any form of commercial communication, recommendation or action
                            with the aim, effect or likely effect of promoting a tobacco product or tobacco use either
                            directly or indirectly.”</p>
                        <p><a href="<?php echo $base_url; ?>evidence/tobacco-product-branding">Evidence</a> demonstrates
                            that branding on tobacco packaging acts as a form of advertising and promotion. The research
                            evidence is also clear that plain packaging will act to:</p>
                        <ul class="custom">
                            <li>Eliminate the effects of tobacco packaging as a form of advertising and promotion</li>
                            <li>Reduce the attractiveness of tobacco products.</li>
                        </ul>
                        <p>The Guidelines for Implementation of Article 13recommend that Parties consider implementing
                            plain packaging. Paragraph 15, 16 and 17 state</p>
                        <div class="p-states">
                            <p>15. <u>Packaging is an important element of advertising and promotion.</u> Tobacco pack
                                or product features are used in various ways to attract consumers, to promote products
                                and to cultivate and promote brand identity, for example by using logos, colours,fonts,
                                pictures, shapes and materials on or in packs or on individual cigarettes or other
                                tobacco products.</p>
                            <p>16. <u>The effect of advertising or promotion on packaging can be eliminated by requiring
                                    plain packaging:</u> black and white or two other contrasting colours, as prescribed
                                by national authorities; nothing other than a brand name, a product name and/or
                                manufacturer’s name, contact details and the quantity of product in the
                                packaging,without any logos or other features apart from health warnings, tax stamps and
                                other government-mandated information or markings; prescribed font style and size; and
                                standardized shape, size and materials. There should be no advertising or promotion
                                inside or attached to the package or on individual cigarettes or other tobacco products.
                            </p>
                            <p>17. <u>Packaging and product design are important elements of advertising and promotion.
                                    Parties should consider adopting plain packaging requirements to eliminate the
                                    effects of advertising or promotion on packaging</u>. Packaging, individual
                                cigarettes or other tobacco products should carry no advertising or promotion, including
                                design features that make products attractive.</p>
                        </div>
                    </div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-secondary-title fc-dark-brown">The status and legal weight of the WHO FCTC
                        </div>
                        <p>The tobacco companies argue that as a framework convention, the WHO FCTC limits itself to the
                            formulation of broad principle objectives and leaves the elaboration of more detailed
                            substantive rules to later steps at international and domestic levels.</p>
                        <p>The <a href="http://untobaccocontrol.org/kh/legal-challenges/role-of-the-who-fctc/">FCTC
                                knowledge hub</a> contains important information about the status of the WHO FCTC and
                            how it has assisted countries defend their tobacco control laws in the courts, which can
                            assist in countering these tobacco industry arguments.</p>
                    </div>
                </div>
            </section>
            <?php
            break;

        // more help from ctfk
        case 'more-help-from-ctfk':
            if ($var == 'og_desc') {
                $og_desc = 'The Campaign for Tobacco Free Kids (CTFK) works directly with governments and civil society organisations to promote and strengthen tobacco control laws.';
                return $og_desc;
            }
            ?>
            <section id="about-state" class="container content-st-section">
                <div class="row abt-st-r">
                    <div class="col-lg-10 col-lg-offset-1 breadcrumbs"><?php echo breadcrumbs(' / ', 'Home'); ?></div>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="section-title fc-dark-brown">Further assistance from CTFK</div>
                    </div>
                    <div class="content-desc-cont col-lg-10 col-lg-offset-1">
                        <p>The Campaign for Tobacco Free Kids (CTFK) works directly with governments and civil society
                            organisations to promote and strengthen tobacco control laws. The International legal
                            consortium at CTFK has a team of experienced lawyers that can assist with drafting
                            legislation as well as obtaining research reports, identifying the latest evidence,
                            combatting industry interference and media campaigns, or drafting briefing papers.</p>
                        <p>For further advice or assistance with any of the policy steps, an assessment of legal risks
                            or with drafting plain packaging legislation contact:<br>Robert Eckford <a
                                    href="mailto:reckford@tobaccofreekids.org">reckford@tobaccofreekids.org</a></p>
                    </div>
                </div>
            </section>
            <?php
            break;

        default:
            # code...
            break;
    }
}

?>