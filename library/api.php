<?php

include_once('base_url.php');
include_once('functions.php');
error_reporting(0);


function nav_main_content($menu)
{
    global $base_url;
    switch ($menu) {
        case 'getting-prepared':
            include_once('nav_main_contents/getting-prepared.php');
            break;
        case 'collecting-the-evidence':
            include_once('nav_main_contents/collecting-the-evidence.php');
            break;
        case 'crafting-the-legislation':
            include_once('nav_main_contents/crafting-the-legislation.php');
            break;
        case 'procedural-steps-for-a-secure-policy':
            include_once('nav_main_contents/procedural-steps-for-a-secure-policy.php');
            break;
        case 'policy-tools':
            include_once('nav_main_contents/policy-tools.php');
            break;
        case 'legislation-drafting-tools':
            include_once('nav_main_contents/legislation-drafting-tools.php');
            break;
        case 'evidence':
            include_once('nav_main_contents/evidence.php');
            break;
        case 'legal-issues-and-international-developments':
            include_once('nav_main_contents/legal-issues-and-international-developments.php');
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
            include('nav_contents/navigate-the-toolkit.php');
            break;

        case 'download-toolkit':
            include('nav_contents/download-toolkit.php');
            break;

        case 'set-policy-objectives':
            include('nav_contents/set-policy-objectives.php');
            break;

        case 'establish-document-development-retention':
            include('nav_contents/establish-document-development-retention.php');
            break;

        case 'prepare-tobacco-industry-interference':
            include('nav_contents/prepare-tobacco-industry-interference.php');
            break;

        case 'evidence-review':
            include('nav_contents/evidence-review.php');
            break;

        case 'regulatory-impact-analysis':
            include('nav_contents/regulatory-impact-analysis.php');
            break;

        case 'stakeholder-input-public-consultation':
            include('nav_contents/stakeholder-input-public-consultation.php');
            break;

        case 'make-key-policy-decisions':
            include('nav_contents/make-key-policy-decisions.php');
            break;

        case 'draft-the-law':
            include('nav_contents/draft-the-law.php');
            break;

        case 'coordinate-across-government':
            include('nav_contents/coordinate-across-government.php');
            break;

        case 'obtain-legal-advice':
            include('nav_contents/obtain-legal-advice.php');
            break;

        case 'wto-notification':
            include('nav_contents/wto-notification.php');
            break;

        // reference materials

        // a
        case 'policy-briefs':
            include('nav_contents/policy-briefs.php');
            break;

        // b
        case 'regulatory-impact-analysis-ref':
            include('nav_contents/regulatory-impact-analysis-ref.php');
            break;

        // c
        case 'consultation-document-template':
            include('nav_contents/consultation-document-template.php');
            break;

        // f
        case 'template-draft-model-law':
            include('nav_contents/template-draft-model-law.php');
            break;

        // d
        case 'drafting-the-legislation-in-detail':
            include('nav_contents/drafting-the-legislation-in-detail.php');
            break;

        // e
        case 'comparison-table-of-existing-plain-packaging-laws':
            include('nav_contents/comparison-table-of-existing-plain-packaging-laws.php');
            break;

        // g
        case 'research-evidence':
            include('nav_contents/research-evidence.php');
            break;

        // h
        case 'australia-post-implementation-evidence':
            include('nav_contents/australia-post-implementation-evidence.php');
            break;

        // i
        case 'tobacco-product-branding':
            include('nav_contents/tobacco-product-branding.php');
            break;

        // j
        case 'opposing-arguments-and-how-to-counter-them':
            include('nav_contents/opposing-arguments-and-how-to-counter-them.php');
            break;

        // k legal issues
        case 'legal-issues':
            include('nav_contents/legal-issues.php');
            break;

        // k case-summaries
        case 'case-summaries':
            include('nav_contents/case-summaries.php');
            break;

        // l
        case 'international-developments':
            include('nav_contents/international-developments.php');
            break;

        // more

        // faqs
        case 'faqs':
            include('nav_contents/faqs.php');
            break;

        // about and contact
        case 'about-and-contact':
            include('nav_contents/about-and-contact.php');
            break;



        // home

        // why is it and why is it needed
        case 'what-is-it-and-why-is-it-needed':
            include('nav_contents/what-is-it-and-why-is-it-needed.php');
            break;

        // where in the world
        case 'where-in-the-world':
            include('nav_contents/where-in-the-world.php');
            break;

        // is it lawful
        case 'is-it-lawful':
            include('nav_contents/is-it-lawful.php');
            break;

        // tobacco industry arguments
        case 'tobacco-industry-arguments':
            include('nav_contents/tobacco-industry-arguments.php');
            break;

        // explore the guides
        case 'explore-the-guides':
            include('nav_contents/explore-the-guides.php');
            break;

        // explore the tools and resources
        case 'tools-and-resources':
            include('nav_contents/tools-and-resources.php');
            break;

        // compare images
        case 'compare-images':
            include('nav_contents/compare-images.php');
            break;

        // plain packaging who fctc
        case 'plain-packaging-and-the-who-fctc':
            include('nav_contents/plain-packaging-and-the-who-fctc.php');
            break;

        // more help from ctfk
        case 'more-help-from-ctfk':
            include('nav_contents/more-help-from-ctfk.php');
            break;



        // ilc opposing arguments
        case 'tobacco-company-submissions-to-governments':
            include('nav_contents/tobacco-company-submissions-to-governments.php');
            break;
        case 'no-reliable-evidence':
            include('nav_contents/no-reliable-evidence.php');
            break;
        case 'increases-illicit-tobacco':
            include('nav_contents/increases-illicit-tobacco.php');
            break;
        case 'leads-to-lower-tobacco-prices':
            include('nav_contents/leads-to-lower-tobacco-prices.php');
            break;
        case 'unlawful-and-breaches-international-treaties':
            include('nav_contents/unlawful-and-breaches-international-treatie.php');
            break;
        case 'negative-impacts-on-small-retailers':
            include('nav_contents/negative-impacts-on-small-retailers.php');
            break;
        case 'will-lead-to-plain-packaging-of-other-products':
            include('nav_contents/will-lead-to-plain-packaging-of-other-products.php');
            break;
        case 'job-losses-in-local-tobacco-industry':
            include('nav_contents/job-losses-in-local-tobacco-industry.php');
            break;
        case 'violates-intellectual-property':
            include('nav_contents/violates-intellectual-property.php');
            break;
        case 'less-restrictive-alternative-measures':
            include('nav_contents/less-restrictive-alternative-measures.php');
            break;
        case 'branding-on-packs-does-not-make-people-start-smoking':
            include('nav_contents/branding-on-packs-does-not-make-people-start-smoking.php');
            break;

        default:
            # code...
            break;
    }
}