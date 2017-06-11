<?php

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
    $menu = array('navigate-the-toolkit', 'set-policy-objectives', 'establish-document-development-retention', 'prepare-tobacco-industry-interference', 'evidence-review', 'regulatory-impact-analysis', 'stakeholder-input-public-consultation', 'make-key-policy-decisions', 'draft-the-law', 'coordinate-across-government', 'obtain-legal-advice', 'wto-notification', 'policy-briefs', 'what-is-plain-packaging-and-why-is-it-needed', 'countering-industry-arguments', 'is-plain-packaging-legal', 'regulatory-impact-analysis-ref', 'consultation-document-template', 'drafting-the-legislation-in-detail', 'comparison-table-of-existing-plain-packaging-laws', 'template-draft-model-law', 'research-evidence', 'australia-post-implementation-evidence', 'tobacco-product-branding', 'opposing-arguments-and-how-to-counter-them', 'legal-issues', 'legal-issues', 'case-summaries', 'international-developments', 'download-toolkit', 'faqs', 'about-and-contact', 'what-is-it-and-why-is-it-needed', 'where-in-the-world', 'is-it-lawful', 'tobacco-industry-arguments', 'explore-the-guides', 'tools-and-resources', 'compare-images', 'plain-packaging-and-the-who-fctc', 'more-help-from-ctfk', 'legal-issues', 'case-summaries');
    if (in_array($nav, $menu)) {
        return 'ver';
    }
}