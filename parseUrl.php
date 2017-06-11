<?php
include_once ('library/base_url.php');
include_once ('library/api.php');

$request = explode('/',$_GET['q']);

$menu =  $request[0];
$menu2 = $request[1];


echo $menu . ' 2: ' . $request[1];
// exit();	

if(isset($request))
{
	if ($menu == 'getting-prepared' && $menu2 == '') 
	{
		# code...
		include('nav-main.php');
	}
	elseif ($menu == 'collecting-the-evidence' && $menu2 == '') 
	{
		include('nav-main.php');
		# code...
	}
	elseif ($menu == 'crafting-the-legislation' && $menu2 == '') 
	{
		# code...
		include('nav-main.php');
	}
	elseif ($menu == 'procedural-steps-for-a-secure-policy' && $menu2 == '') 
	{
		# code...
		include('nav-main.php');
	} 
	// reference materials
	elseif ($menu == 'policy-tools' && $menu2 == '') 
	{
		# code...
		include('nav-main.php');
	}
	elseif ($menu == 'legislation-drafting-tools' && $menu2 == '') 
	{
		# code...
		include('nav-main.php');
	}
	elseif ($menu == 'evidence' && $menu2 == '') 
	{
		# code...
		include('nav-main.php');
	}
	elseif ($menu == 'legal-issues-and-international-developments' && $menu2 == '') 
	{
		# code...
		include('nav-main.php');
	}
	else
	{
		switch ($menu2) 
		{
			case 'navigate-the-toolkit':
			case 'download-toolkit':
			case 'set-policy-objectives':
			case 'establish-document-development-retention':
			case 'prepare-tobacco-industry-interference':
			case 'evidence-review':
			case 'regulatory-impact-analysis':
			case 'stakeholder-input-public-consultation':
			case 'make-key-policy-decisions':
			case 'draft-the-law':
			case 'coordinate-across-government':
			case 'obtain-legal-advice':
			case 'wto-notification':
			case 'policy-briefs':
			case 'what-is-plain-packaging-and-why-is-it-needed':
			case 'countering-industry-arguments':
			case 'is-plain-packaging-legal':
			case 'regulatory-impact-analysis-ref':
			case 'consultation-document-template':
			case 'drafting-the-legislation-in-detail':
			case 'comparison-table-of-existing-plain-packaging-laws':
			case 'template-draft-model-law':
			case 'research-evidence':
			case 'australia-post-implementation-evidence':
			case 'tobacco-product-branding':
			case 'opposing-arguments-and-how-to-counter-them':
			case 'legal-issues-and-case-summaries':
			case 'legal-issues':
			case 'case-summaries':
			case 'international-developments':
			// home
			case 'what-is-it-and-why-is-it-needed':
			case 'where-in-the-world':
			case 'is-it-lawful':
			case 'tobacco-industry-arguments':
			case 'explore-the-guides':
			case 'tools-and-resources':
			case 'compare-images':
			case 'plain-packaging-and-the-who-fctc':
			case 'more-help-from-ctfk':
			// more
			case 'faqs':
			case 'about-and-contact':
				if (chk_nav($menu2) == 'ver')
				{
					include('nav.php');
					// echo 'yes';
				}
				else
				{
					header( 'Location: '. $lost_url ) ;
					// echo 'no';
				}
				break;
			default:
				header( 'Location: '. $lost_url ) ;
				break;
		}
	}
}
else
{
	?>
	<script type="text/javascript">
		window.location.href = "<?php echo $lost_url; ?>";
	</script>
	<?php
} // ./else
?>