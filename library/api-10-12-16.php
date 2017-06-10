<?php

include_once('base_url.php');

function camel_case($string)
{
    $string = strtolower($string);
	$string = str_replace("-", " ", $string);
	$string = ucwords($string);
	$string = ucwords(strtolower($string));
	return $string;
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

function chk_states($state)
{
	$states = array('Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','District of Columbia','Dc','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming');
	if (in_array($state,$states))
	{
		return 'ver';
	}
}

function href_states($x,$y)
{
	global $base_url;
	// $states = array('Alabama','Alaska','Arizona','Arkansas','California','Colorado','Connecticut','Delaware','District of Columbia','Dc','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Oregon','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','Washington','West Virginia','Wisconsin','Wyoming');
	$states = array('Alabama','Illinois','Montana','Rhode Island','Alaska','Indiana','Nebraska','South Carolina','Arizona','Iowa','Nevada','South Dakota','Arkansas','Kansas','New Hampshire','Tennessee','California','Kentucky','New Jersey','Texas','Colorado','Louisiana','New Mexico','Utah','Connecticut','Maine','New York','Vermont','Delaware','Maryland','North Carolina','Virginia','District of Columbia','Massachusetts','North Dakota','Washington','Florida','Michigan','Ohio','West Virginia','Georgia','Minnesota','Oklahoma','Wisconsin','Hawaii','Mississippi','Oregon','Wyoming','Idaho','Missouri','Pennsylvania');
	sort($states);
	$states = array_slice($states,$x,$y);
	foreach ($states as $key => $value)
	{
		// echo '<a href="parseUrl.php?q=sf&v='.seo_url($value).'">'.$value.'</a>';
		if ($value == 'District of Columbia')
		{
			echo '<a href="'.$base_url.'state/dc'.'">'.$value.'</a><br>';
		}
		else
		{
			echo '<a href="'.$base_url.'state/'.seo_url($value).'">'.$value.'</a><br>';
		}

	}
}

function state_val($state,$var)
{
	switch ($state) {
		case 'Alabama':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '43';
					break;
				case 'tbv2':
					return '42';
					break;
				case 'tbv3':
					return '$1.5 million';
					break;
				case 'tbv4':
					return '$1.5 million';
					break;
				case 'tbv5':
					return '2.7%';
					break;
				case 'tbv6':
					return '2.7%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$55.9 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "** In FY2012 and FY2013, Alabama's tobacco prevention program budget was unavailable at the time this report went to press.";
					break;

				// state table 2
				case 'tb2v1':
					return '$203.1 million';
					break;
				case 'tb2v2':
					return '134.2 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '21.4%';
					break;
				case 'tb3v2':
					return '14.0%';
					break;
				case 'tb3v3':
					return '8,600';
					break;
				case 'tb3v4':
					return '$1.88 billion';
					break;

				case 'tb3v6':
					return '31.3 %';
					break;

				case 'tb3v5':
					return '$855 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 306.3, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 55.9, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 1.5, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 203.1, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column

						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 0.7, "color: #0000ff"],
						  ['FY2008', 0.8, "color: #0000ff"],
						  ['FY2009', 1.2, "color: #0000ff"],
						  ['FY2010', 0.8, "color: #0000ff"],
						  ['FY2011', 0.9, "color: #0000ff"],
						  ['FY2012', "N/A", "color: #0000ff"],
						  ['FY2013', "N/A", "color: #0000ff"],
						  ['FY2014', 0.3, "color: #0000ff"],
						  ['FY2015', 0.4, "color: #0000ff"],
						  ['FY2016', 1.5, "color: #0000ff"],
						  ['FY2017', 1.5, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column

						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###.## million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Alaska':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '2';
					break;
				case 'tbv2':
					return '2';
					break;
				case 'tbv3':
					return '$9.5 million';
					break;
				case 'tbv4':
					return '$8.8 million';
					break;
				case 'tbv5':
					return '93.0%';
					break;
				case 'tbv6':
					return '86.4%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$18.6 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "2.0";
					break;

				// state table 2
				case 'tb2v1':
					return '$18.6 million';
					break;
				case 'tb2v2':
					return '2.0 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '19.1%';
					break;
				case 'tb3v2':
					return '11.1%';
					break;
				case 'tb3v3':
					return '600';
					break;
				case 'tb3v4':
					return '$438 million';
					break;

				case 'tb3v6':
					return '31.4%';
					break;

				case 'tb3v5':
					return '$1,072 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 98.0, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 10.2, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 9.5, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 18.6, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.###'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 6.2, "color: #0000ff"],
						  ['FY2008', 7.5, "color: #0000ff"],
						  ['FY2009', 8.2, "color: #0000ff"],
						  ['FY2010', 9.2, "color: #0000ff"],
						  ['FY2011', 9.8, "color: #0000ff"],
						  ['FY2012', 10.8, "color: #0000ff"],
						  ['FY2013', 10.9, "color: #0000ff"],
						  ['FY2014', 10.1, "color: #0000ff"],
						  ['FY2015', 9.7, "color: #0000ff"],
						  ['FY2016', 8.8, "color: #0000ff"],
						  ['FY2017', 9.5, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Arizona':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '16';
					break;
				case 'tbv2':
					return '19';
					break;
				case 'tbv3':
					return '$18.4 million';
					break;
				case 'tbv4':
					return '$15.5 million';
					break;
				case 'tbv5':
					return '28.6%';
					break;
				case 'tbv6':
					return '24.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$64.4 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$103.7 million';
					break;
				case 'tb2v2':
					return '5.6 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '14.0%';
					break;
				case 'tb3v2':
					return '10.1%';
					break;
				case 'tb3v3':
					return '8,300';
					break;
				case 'tb3v4':
					return '$2.38 billion';
					break;

				case 'tb3v6':
					return '28.7%';
					break;

				case 'tb3v5':
					return '$638 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 438.6, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 64.4, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 18.4, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 103.7, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 25.5, "color: #0000ff"],
						  ['FY2008', 23.5, "color: #0000ff"],
						  ['FY2009', 21.0, "color: #0000ff"],
						  ['FY2010', 22.1, "color: #0000ff"],
						  ['FY2011', 19.8, "color: #0000ff"],
						  ['FY2012', 18.0, "color: #0000ff"],
						  ['FY2013', 15.2, "color: #0000ff"],
						  ['FY2014', 18.6, "color: #0000ff"],
						  ['FY2015', 18.6, "color: #0000ff"],
						  ['FY2016', 15.5, "color: #0000ff"],
						  ['FY2017', 18.4, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Arkansas':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '19';
					break;
				case 'tbv2':
					return '8';
					break;
				case 'tbv3':
					return '$9.0 million';
					break;
				case 'tbv4':
					return '$17.4 million';
					break;
				case 'tbv5':
					return '24.5%';
					break;
				case 'tbv6':
					return '47.4%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$36.7 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$109.5 million';
					break;
				case 'tb2v2':
					return '12.2 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '24.9%';
					break;
				case 'tb3v2':
					return '15.7%';
					break;
				case 'tb3v3':
					return '5,800';
					break;
				case 'tb3v4':
					return '$1.21 billion';
					break;
				case 'tb3v6':
					return '33.5%';
					break;
				case 'tb3v5':
					return '$1,046 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 285.2, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 36.7, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 9.0, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 109.5, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 15.1, "color: #0000ff"],
						  ['FY2008', 15.6, "color: #0000ff"],
						  ['FY2009', 16.0, "color: #0000ff"],
						  ['FY2010', 18.7, "color: #0000ff"],
						  ['FY2011', 11.8, "color: #0000ff"],
						  ['FY2012', 7.4, "color: #0000ff"],
						  ['FY2013', 17.8, "color: #0000ff"],
						  ['FY2014', 17.5, "color: #0000ff"],
						  ['FY2015', 17.5, "color: #0000ff"],
						  ['FY2016', 17.4, "color: #0000ff"],
						  ['FY2017', 9.0, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'California':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '21';
					break;
				case 'tbv2':
					return '21';
					break;
				case 'tbv3':
					return '$75.7 million';
					break;
				case 'tbv4':
					return '$65.5 million';
					break;
				case 'tbv5':
					return '21.8%';
					break;
				case 'tbv6':
					return '18.8%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$347.9 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$592.6 million';
					break;
				case 'tb2v2':
					return '7.8 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '11.7%';
					break;
				case 'tb3v2':
					return '7.7%';
					break;
				case 'tb3v3':
					return '40,000';
					break;
				case 'tb3v4':
					return '$13.29 billion';
					break;
				case 'tb3v6':
					return '25.5%';
					break;
				case 'tb3v5':
					return '$727 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 1864.0, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 347.9, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 75.7, "color: #ff0202", 'Annotated'],
						]);

						// var data = google.visualization.arrayToDataTable([
						//   [{label: 'Country', type: 'string'},
						//    {type: 'number'},
						//    {type: 'string', role: 'style'},
						//    {type: 'string', role: 'annotation'}],
						//   ['Total State Tobacco Revenue', 1864.0, "color: #0000ff", 'Annotated'],
						//   ['CDC Recommended Spending', 347.9, "color: #0000ff", 'Annotated'],
						//   ['Total State Spending', 75.7, "color: #ff0202", 'Annotated'],
						//   ['Estimated Annual Tobacco Company Marketing in State', 592.6, "color: #ff0000", 'Annotated'],
						// ]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 84.0, "color: #0000ff"],
						  ['FY2008', 77.4, "color: #0000ff"],
						  ['FY2009', 77.7, "color: #0000ff"],
						  ['FY2010', 77.1, "color: #0000ff"],
						  ['FY2011', 75.0, "color: #0000ff"],
						  ['FY2012', 70.0, "color: #0000ff"],
						  ['FY2013', 62.1, "color: #0000ff"],
						  ['FY2014', 64.8, "color: #0000ff"],
						  ['FY2015', 58.9, "color: #0000ff"],
						  ['FY2016', 65.5, "color: #0000ff"],
						  ['FY2017', 75.7, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Colorado':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '8';
					break;
				case 'tbv2':
					return '11';
					break;
				case 'tbv3':
					return '$23.2 million';
					break;
				case 'tbv4':
					return '$21.8 million';
					break;
				case 'tbv5':
					return '43.8%';
					break;
				case 'tbv6':
					return '41.3%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$52.9 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$131.4 million';
					break;
				case 'tb2v2':
					return '5.7 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '15.6%';
					break;
				case 'tb3v2':
					return '8.6%';
					break;
				case 'tb3v3':
					return '5,100';
					break;
				case 'tb3v4':
					return '$1.89 billion';
					break;
				case 'tb3v6':
					return '25.7%';
					break;
				case 'tb3v5':
					return '$698 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 296.3, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 52.9, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 23.2, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 131.4, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 25.0, "color: #0000ff"],
						  ['FY2008', 26.0, "color: #0000ff"],
						  ['FY2009', 26.4, "color: #0000ff"],
						  ['FY2010', 11.1, "color: #0000ff"],
						  ['FY2011', 7.0, "color: #0000ff"],
						  ['FY2012', 6.5, "color: #0000ff"],
						  ['FY2013', 22.6, "color: #0000ff"],
						  ['FY2014', 26.0, "color: #0000ff"],
						  ['FY2015', 23.1, "color: #0000ff"],
						  ['FY2016', 21.8, "color: #0000ff"],
						  ['FY2017', 23.2, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Connecticut':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '50';
					break;
				case 'tbv2':
					return '38';
					break;
				case 'tbv3':
					return '$0.0';
					break;
				case 'tbv4':
					return '$1.2 million';
					break;
				case 'tbv5':
					return '0.0%';
					break;
				case 'tbv6':
					return '3.7%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$32.0 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$73.6 million';
					break;
				case 'tb2v2':
					return '--';
					break;
				
				// state table 3
				case 'tb3v1':
					return '13.5%';
					break;
				case 'tb3v2':
					return '10.3%';
					break;
				case 'tb3v3':
					return '4,900';
					break;
				case 'tb3v4':
					return '$2.03 billion';
					break;
				case 'tb3v6':
					return '27.0%';
					break;
				case 'tb3v5':
					return '$869 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 519.7, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 32.0, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 0.0, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 73.6, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 2.0, "color: #0000ff"],
						  ['FY2008', 0, "color: #0000ff"],
						  ['FY2009', 7.4, "color: #0000ff"],
						  ['FY2010', 6.1, "color: #0000ff"],
						  ['FY2011', 0.4, "color: #0000ff"],
						  ['FY2012', 0, "color: #0000ff"],
						  ['FY2013', 6.0, "color: #0000ff"],
						  ['FY2014', 3.0, "color: #0000ff"],
						  ['FY2015', 3.5, "color: #0000ff"],
						  ['FY2016', 1.2, "color: #0000ff"],
						  ['FY2017', 0.0, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Delaware':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '6';
					break;
				case 'tbv2':
					return '7';
					break;
				case 'tbv3':
					return '$6.4 million';
					break;
				case 'tbv4':
					return '$6.4 million';
					break;
				case 'tbv5':
					return '48.9%';
					break;
				case 'tbv6':
					return '49.2%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$13.0 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$44.8 million';
					break;
				case 'tb2v2':
					return '7.1 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '17.4%';
					break;
				case 'tb3v2':
					return '9.9%';
					break;
				case 'tb3v3':
					return '1,400';
					break;
				case 'tb3v4':
					return '$532 million';
					break;
				case 'tb3v6':
					return '30.3%';
					break;
				case 'tb3v5':
					return '$878 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 136.8, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 13.0, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 6.4, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 44.8, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 10.3, "color: #0000ff"],
						  ['FY2008', 10.7, "color: #0000ff"],
						  ['FY2009', 10.7, "color: #0000ff"],
						  ['FY2010', 10.1, "color: #0000ff"],
						  ['FY2011', 8.3, "color: #0000ff"],
						  ['FY2012', 9.0, "color: #0000ff"],
						  ['FY2013', 9.0, "color: #0000ff"],
						  ['FY2014', 8.3, "color: #0000ff"],
						  ['FY2015', 8.7, "color: #0000ff"],
						  ['FY2016', 6.4, "color: #0000ff"],
						  ['FY2017', 6.4, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'District of Columbia':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '31';
					break;
				case 'tbv2':
					return '26';
					break;
				case 'tbv3':
					return '$1.0 million';
					break;
				case 'tbv4':
					return '$1.4 million';
					break;
				case 'tbv5':
					return '9.3%';
					break;
				case 'tbv6':
					return '12.7%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$10.7 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$7.1 million';
					break;
				case 'tb2v2':
					return '7.1 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '16.0%';
					break;
				case 'tb3v2':
					return '12.5%';
					break;
				case 'tb3v3':
					return '800';
					break;
				case 'tb3v4':
					return '$391 million';
					break;
				case 'tb3v6':
					return '28.2%';
					break;
				case 'tb3v5':
					return '$860 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 69.9, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 10.7, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 1.0, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 7.1, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 0.5, "color: #0000ff"],
						  ['FY2008', 3.6, "color: #0000ff"],
						  ['FY2009', 3.6, "color: #0000ff"],
						  ['FY2010', 0.9, "color: #0000ff"],
						  ['FY2011', 0.6, "color: #0000ff"],
						  ['FY2012', 0, "color: #0000ff"],
						  ['FY2013', 0.5, "color: #0000ff"],
						  ['FY2014', 0.5, "color: #0000ff"],
						  ['FY2015', 2.0, "color: #0000ff"],
						  ['FY2016', 1.4, "color: #0000ff"],
						  ['FY2017', 1.0, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Florida':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '14';
					break;
				case 'tbv2':
					return '15';
					break;
				case 'tbv3':
					return '$67.8 million';
					break;
				case 'tbv4':
					return '$67.7 million';
					break;
				case 'tbv5':
					return '34.9%';
					break;
				case 'tbv6':
					return '34.9%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$194.2 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$563.9 million';
					break;
				case 'tb2v2':
					return '8.3 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '15.8%';
					break;
				case 'tb3v2':
					return '6.9%';
					break;
				case 'tb3v3':
					return '32,300';
					break;
				case 'tb3v4':
					return '$8.64 billion';
					break;
				case 'tb3v6':
					return '29.4%';
					break;
				case 'tb3v5':
					return '$763 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 1579.5, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 194.2, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 67.8, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 563.9, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 5.6, "color: #0000ff"],
						  ['FY2008', 58.0, "color: #0000ff"],
						  ['FY2009', 59.5, "color: #0000ff"],
						  ['FY2010', 65.8, "color: #0000ff"],
						  ['FY2011', 61.6, "color: #0000ff"],
						  ['FY2012', 62.3, "color: #0000ff"],
						  ['FY2013', 64.3, "color: #0000ff"],
						  ['FY2014', 65.6, "color: #0000ff"],
						  ['FY2015', 66.6, "color: #0000ff"],
						  ['FY2016', 67.7, "color: #0000ff"],
						  ['FY2017', 67.8, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Georgia':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '44';
					break;
				case 'tbv2':
					return '43';
					break;
				case 'tbv3':
					return '$1.8 million';
					break;
				case 'tbv4':
					return '$1.8 million';
					break;
				case 'tbv5':
					return '1.7%';
					break;
				case 'tbv6':
					return '1.7%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$106.0 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$332.9 million';
					break;
				case 'tb2v2':
					return '190.2 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '17.7%';
					break;
				case 'tb3v2':
					return '12.8%';
					break;
				case 'tb3v3':
					return '11,700';
					break;
				case 'tb3v4':
					return '$3.18 billion';
					break;
				case 'tb3v6':
					return '29.2%';
					break;
				case 'tb3v5':
					return '$777 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 376.7, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 106.0, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 1.8, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 332.9, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 2.3, "color: #0000ff"],
						  ['FY2008', 2.2, "color: #0000ff"],
						  ['FY2009', 2.3, "color: #0000ff"],
						  ['FY2010', 2.1, "color: #0000ff"],
						  ['FY2011', 2.0, "color: #0000ff"],
						  ['FY2012', 2.0, "color: #0000ff"],
						  ['FY2013', 0.8, "color: #0000ff"],
						  ['FY2014', 2.2, "color: #0000ff"],
						  ['FY2015', 1.8, "color: #0000ff"],
						  ['FY2016', 1.8, "color: #0000ff"],
						  ['FY2017', 1.8, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Hawaii':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '12';
					break;
				case 'tbv2':
					return '6';
					break;
				case 'tbv3':
					return '$5.3 million';
					break;
				case 'tbv4':
					return '$6.8 million';
					break;
				case 'tbv5':
					return '38.6%';
					break;
				case 'tbv6':
					return '49.3%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$13.7 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$24.3 million';
					break;
				case 'tb2v2':
					return '4.6 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '14.1%';
					break;
				case 'tb3v2':
					return '9.7%';
					break;
				case 'tb3v3':
					return '1,400';
					break;
				case 'tb3v4':
					return '$526 million';
					break;
				case 'tb3v6':
					return '26.0%';
					break;
				case 'tb3v5':
					return '$897 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 178.3, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 13.7, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 5.3, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 24.3, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 9.1, "color: #0000ff"],
						  ['FY2008', 10.4, "color: #0000ff"],
						  ['FY2009', 10.5, "color: #0000ff"],
						  ['FY2010', 7.9, "color: #0000ff"],
						  ['FY2011', 9.3, "color: #0000ff"],
						  ['FY2012', 10.7, "color: #0000ff"],
						  ['FY2013', 8.9, "color: #0000ff"],
						  ['FY2014', 7.9, "color: #0000ff"],
						  ['FY2015', 7.5, "color: #0000ff"],
						  ['FY2016', 6.8, "color: #0000ff"],
						  ['FY2017', 5.3, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;
		
		case 'Idaho':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '23';
					break;
				case 'tbv2':
					return '22';
					break;
				case 'tbv3':
					return '$2.9 million';
					break;
				case 'tbv4':
					return '$2.9 million';
					break;
				case 'tbv5':
					return '18.4%';
					break;
				case 'tbv6':
					return '18.4%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$15.6 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "";
					break;

				// state table 2
				case 'tb2v1':
					return '$44.8 million';
					break;
				case 'tb2v2':
					return '15.6 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '13.8%';
					break;
				case 'tb3v2':
					return '9.7%';
					break;
				case 'tb3v3':
					return '1,800';
					break;
				case 'tb3v4':
					return '$508 million';
					break;
				case 'tb3v6':
					return '26.6%';
					break;
				case 'tb3v5':
					return '$627 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 77.5, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 15.6, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 2.9, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 44.8, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 0.9, "color: #0000ff"],
						  ['FY2008', 1.4, "color: #0000ff"],
						  ['FY2009', 1.7, "color: #0000ff"],
						  ['FY2010', 1.2, "color: #0000ff"],
						  ['FY2011', 1.5, "color: #0000ff"],
						  ['FY2012', 0.9, "color: #0000ff"],
						  ['FY2013', 2.2, "color: #0000ff"],
						  ['FY2014', 2.2, "color: #0000ff"],
						  ['FY2015', 2.7, "color: #0000ff"],
						  ['FY2016', 2.9, "color: #0000ff"],
						  ['FY2017', 2.9, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Illinois':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '35';
					break;
				case 'tbv2':
					return 'NA';
					break;
				case 'tbv3':
					return '$9.1 million';
					break;
				case 'tbv4':
					return 'NA';
					break;
				case 'tbv5':
					return '6.7%';
					break;
				case 'tbv6':
					return '0.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$136.7 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "** Illinois' FY2016 tobacco prevention program budget was not available when this report went to press.";
					break;
				// Notes under Table 3
				case 'tbv9':
					return "* Illinois' FY2016 tobacco prevention program budget was not available when this report went to press.";
					break;

				// state table 2
				case 'tb2v1':
					return '$295.0 million';
					break;
				case 'tb2v2':
					return '32.4 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '15.1%';
					break;
				case 'tb3v2':
					return '10.1%';
					break;
				case 'tb3v3':
					return '18,300';
					break;
				case 'tb3v4':
					return '$5.49 billion';
					break;
				case 'tb3v6':
					return '29.3%';
					break;
				case 'tb3v5':
					return '$909 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 1153.3, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 136.7, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 9.1, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 295.0, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 8.5, "color: #0000ff"],
						  ['FY2008', 8.5, "color: #0000ff"],
						  ['FY2009', 8.5, "color: #0000ff"],
						  ['FY2010', 8.5, "color: #0000ff"],
						  ['FY2011', 9.5, "color: #0000ff"],
						  ['FY2012', 9.5, "color: #0000ff"],
						  ['FY2013', 11.1, "color: #0000ff"],
						  ['FY2014', 11.1, "color: #0000ff"],
						  ['FY2015', 11.1, "color: #0000ff"],
						  ['FY2016', "N/A", "color: #0000ff"],
						  ['FY2017', 9.1, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Indiana':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '34';
					break;
				case 'tbv2':
					return '33';
					break;
				case 'tbv3':
					return '$5.9 million';
					break;
				case 'tbv4':
					return '$5.9 million';
					break;
				case 'tbv5':
					return '8.0%';
					break;
				case 'tbv6':
					return '8.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$73.5 million';
					break;


				// state table 2
				case 'tb2v1':
					return '$284.5 million';
					break;
				case 'tb2v2':
					return '48.2 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '20.6%';
					break;
				case 'tb3v2':
					return '12.0%';
					break;
				case 'tb3v3':
					return '11,100';
					break;
				case 'tb3v4':
					return '$2.93 billion';
					break;
				case 'tb3v6':
					return '30.6%';
					break;
				case 'tb3v5':
					return '$903 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 579.0, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 73.5, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 5.9, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 284.5, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 10.9, "color: #0000ff"],
						  ['FY2008', 16.2, "color: #0000ff"],
						  ['FY2009', 15.1, "color: #0000ff"],
						  ['FY2010', 10.8, "color: #0000ff"],
						  ['FY2011', 9.2, "color: #0000ff"],
						  ['FY2012', 10.1, "color: #0000ff"],
						  ['FY2013', 9.3, "color: #0000ff"],
						  ['FY2014', 5.8, "color: #0000ff"],
						  ['FY2015', 5.8, "color: #0000ff"],
						  ['FY2016', 5.9, "color: #0000ff"],
						  ['FY2017', 5.9, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Iowa':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '24';
					break;
				case 'tbv2':
					return '25';
					break;
				case 'tbv3':
					return '$5.2 million';
					break;
				case 'tbv4':
					return '$5.2 million';
					break;
				case 'tbv5':
					return '17.4%';
					break;
				case 'tbv6':
					return '17.4%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$30.1 million';
					break;


				// state table 2
				case 'tb2v1':
					return '$99.2 million';
					break;
				case 'tb2v2':
					return '18.9 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '18.1%';
					break;
				case 'tb3v2':
					return '18.1%';
					break;
				case 'tb3v3':
					return '5,100';
					break;
				case 'tb3v4':
					return '$1.28 billion';
					break;
				case 'tb3v6':
					return '27.8%';
					break;
				case 'tb3v5':
					return '$856 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 300.3, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 30.1, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 5.2, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 99.2, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 6.5, "color: #0000ff"],
						  ['FY2008', 12.3, "color: #0000ff"],
						  ['FY2009', 10.4, "color: #0000ff"],
						  ['FY2010', 10.1, "color: #0000ff"],
						  ['FY2011', 7.3, "color: #0000ff"],
						  ['FY2012', 3.3, "color: #0000ff"],
						  ['FY2013', 3.2, "color: #0000ff"],
						  ['FY2014', 5.1, "color: #0000ff"],
						  ['FY2015', 5.2, "color: #0000ff"],
						  ['FY2016', 5.2, "color: #0000ff"],
						  ['FY2017', 5.2, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Kansas':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '41';
					break;
				case 'tbv2':
					return '39';
					break;
				case 'tbv3':
					return '$847,041';
					break;
				case 'tbv4':
					return '$946,671';
					break;
				case 'tbv5':
					return '3.0%';
					break;
				case 'tbv6':
					return '3.4%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$27.9 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$77.7 million';
					break;
				case 'tb2v2':
					return '91.8 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '17.7%';
					break;
				case 'tb3v2':
					return '10.2%';
					break;
				case 'tb3v3':
					return '4,400';
					break;
				case 'tb3v4':
					return '$1.12 billion';
					break;
				case 'tb3v6':
					return '28.6%';
					break;
				case 'tb3v5':
					return '$779 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 208.7, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 27.9, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 0.8, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 77.7, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 1.0, "color: #0000ff"],
						  ['FY2008', 1.4, "color: #0000ff"],
						  ['FY2009', 1.0, "color: #0000ff"],
						  ['FY2010', 1.0, "color: #0000ff"],
						  ['FY2011', 1.0, "color: #0000ff"],
						  ['FY2012', 1.0, "color: #0000ff"],
						  ['FY2013', 1.0, "color: #0000ff"],
						  ['FY2014', 0.9, "color: #0000ff"],
						  ['FY2015', 0.9, "color: #0000ff"],
						  ['FY2016', 0.9, "color: #0000ff"],
						  ['FY2017', 0.8, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Kentucky':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '37';
					break;
				case 'tbv2':
					return '36';
					break;
				case 'tbv3':
					return '$2.4 million';
					break;
				case 'tbv4':
					return '$2.5 million';
					break;
				case 'tbv5':
					return '4.2%';
					break;
				case 'tbv6':
					return '4.4%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$56.4 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$266.2 million';
					break;
				case 'tb2v2':
					return '113.1 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '25.9%';
					break;
				case 'tb3v2':
					return '16.9%';
					break;
				case 'tb3v3':
					return '8,900';
					break;
				case 'tb3v4':
					return '$1.92 billion';
					break;
				case 'tb3v6':
					return '34.0%';
					break;
				case 'tb3v5':
					return '$1,168 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 361.0, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 56.4, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 2.4, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 266.2, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 2.2, "color: #0000ff"],
						  ['FY2008', 2.4, "color: #0000ff"],
						  ['FY2009', 2.8, "color: #0000ff"],
						  ['FY2010', 2.8, "color: #0000ff"],
						  ['FY2011', 2.6, "color: #0000ff"],
						  ['FY2012', 2.2, "color: #0000ff"],
						  ['FY2013', 2.1, "color: #0000ff"],
						  ['FY2014', 2.1, "color: #0000ff"],
						  ['FY2015', 2.5, "color: #0000ff"],
						  ['FY2016', 2.5, "color: #0000ff"],
						  ['FY2017', 2.4, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Louisiana':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '26';
					break;
				case 'tbv2':
					return '28';
					break;
				case 'tbv3':
					return '$7.0 million';
					break;
				case 'tbv4':
					return '$7.0 million';
					break;
				case 'tbv5':
					return '11.7%';
					break;
				case 'tbv6':
					return '11.7%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$59.6 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$205.1 million';
					break;
				case 'tb2v2':
					return '29.3 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '21.9%';
					break;
				case 'tb3v2':
					return '12.1%';
					break;
				case 'tb3v3':
					return '7,200';
					break;
				case 'tb3v4':
					return '$1.89 billion';
					break;
				case 'tb3v6':
					return '32.6%';
					break;
				case 'tb3v5':
					return '$1,182 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 451.7, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 59.6, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 7.0, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 205.1, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 8.0, "color: #0000ff"],
						  ['FY2008', 7.7, "color: #0000ff"],
						  ['FY2009', 7.6, "color: #0000ff"],
						  ['FY2010', 7.8, "color: #0000ff"],
						  ['FY2011', 9.0, "color: #0000ff"],
						  ['FY2012', 8.4, "color: #0000ff"],
						  ['FY2013', 7.2, "color: #0000ff"],
						  ['FY2014', 8.0, "color: #0000ff"],
						  ['FY2015', 6.8, "color: #0000ff"],
						  ['FY2016', 7.0, "color: #0000ff"],
						  ['FY2017', 7.0, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Maine':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '5';
					break;
				case 'tbv2':
					return '5';
					break;
				case 'tbv3':
					return '$7.8 million';
					break;
				case 'tbv4':
					return '$8.1 million';
					break;
				case 'tbv5':
					return '49.1%';
					break;
				case 'tbv6':
					return '50.6%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$15.9 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$42.8 million';
					break;
				case 'tb2v2':
					return '5.5 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '19.5%';
					break;
				case 'tb3v2':
					return '11.2%';
					break;
				case 'tb3v3':
					return '2,400';
					break;
				case 'tb3v4':
					return '$811 million';
					break;
				case 'tb3v6':
					return '29.0%';
					break;
				case 'tb3v5':
					return '$1,113 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 196.7, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 15.9, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 7.8, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 42.8, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 14.7, "color: #0000ff"],
						  ['FY2008', 16.9, "color: #0000ff"],
						  ['FY2009', 10.9, "color: #0000ff"],
						  ['FY2010', 10.8, "color: #0000ff"],
						  ['FY2011', 9.9, "color: #0000ff"],
						  ['FY2012', 9.4, "color: #0000ff"],
						  ['FY2013', 7.5, "color: #0000ff"],
						  ['FY2014', 8.1, "color: #0000ff"],
						  ['FY2015', 8.2, "color: #0000ff"],
						  ['FY2016', 8.1, "color: #0000ff"],
						  ['FY2017', 7.8, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Maryland':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '20';
					break;
				case 'tbv2':
					return '23';
					break;
				case 'tbv3':
					return '$10.6 million';
					break;
				case 'tbv4':
					return '$8.7 million';
					break;
				case 'tbv5':
					return '22.0%';
					break;
				case 'tbv6':
					return '18.2%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$48.0 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$127.5 million';
					break;
				case 'tb2v2':
					return '12.1 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '15.1%';
					break;
				case 'tb3v2':
					return '8.7%';
					break;
				case 'tb3v3':
					return '7,500';
					break;
				case 'tb3v4':
					return '$2.71 billion';
					break;
				case 'tb3v6':
					return '27.3%';
					break;
				case 'tb3v5':
					return '$798 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 553.9, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 48.0, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 10.6, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 127.5, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 18.7, "color: #0000ff"],
						  ['FY2008', 18.4, "color: #0000ff"],
						  ['FY2009', 19.6, "color: #0000ff"],
						  ['FY2010', 5.5, "color: #0000ff"],
						  ['FY2011', 4.3, "color: #0000ff"],
						  ['FY2012', 4.3, "color: #0000ff"],
						  ['FY2013', 4.2, "color: #0000ff"],
						  ['FY2014', 8.5, "color: #0000ff"],
						  ['FY2015', 8.5, "color: #0000ff"],
						  ['FY2016', 8.7, "color: #0000ff"],
						  ['FY2017', 10.6, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Massachusetts':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '36';
					break;
				case 'tbv2':
					return '35';
					break;
				case 'tbv3':
					return '$3.9 million';
					break;
				case 'tbv4':
					return '$3.9 million';
					break;
				case 'tbv5':
					return '5.8%';
					break;
				case 'tbv6':
					return '5.8%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$66.9 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$123.6 million';
					break;
				case 'tb2v2':
					return '32.0 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '14.0%';
					break;
				case 'tb3v2':
					return '7.7%';
					break;
				case 'tb3v3':
					return '9,300';
					break;
				case 'tb3v4':
					return '$4.08 billion';
					break;
				case 'tb3v6':
					return '28.1%';
					break;
				case 'tb3v5':
					return '$996 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 903.2, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 66.9, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 3.9, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 123.6, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 8.3, "color: #0000ff"],
						  ['FY2008', 12.8, "color: #0000ff"],
						  ['FY2009', 12.2, "color: #0000ff"],
						  ['FY2010', 4.5, "color: #0000ff"],
						  ['FY2011', 4.5, "color: #0000ff"],
						  ['FY2012', 4.2, "color: #0000ff"],
						  ['FY2013', 4.2, "color: #0000ff"],
						  ['FY2014', 4.0, "color: #0000ff"],
						  ['FY2015', 3.9, "color: #0000ff"],
						  ['FY2016', 3.9, "color: #0000ff"],
						  ['FY2017', 3.9, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Michigan':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '46';
					break;
				case 'tbv2':
					return '44';
					break;
				case 'tbv3':
					return '$1.6 million';
					break;
				case 'tbv4':
					return '$1.6 million';
					break;
				case 'tbv5':
					return '1.4%';
					break;
				case 'tbv6':
					return '1.5%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$110.6 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$299.4 million';
					break;
				case 'tb2v2':
					return '189.4 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '20.7%';
					break;
				case 'tb3v2':
					return '10.0%';
					break;
				case 'tb3v3':
					return '16,200';
					break;
				case 'tb3v4':
					return '$4.59 billion';
					break;
				case 'tb3v6':
					return '29.8%';
					break;
				case 'tb3v5':
					return '$1,025 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 1224.5, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 110.6, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 1.6, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 299.4, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 0.0, "color: #0000ff"],
						  ['FY2008', 3.6, "color: #0000ff"],
						  ['FY2009', 3.7, "color: #0000ff"],
						  ['FY2010', 2.6, "color: #0000ff"],
						  ['FY2011', 2.6, "color: #0000ff"],
						  ['FY2012', 1.8, "color: #0000ff"],
						  ['FY2013', 1.8, "color: #0000ff"],
						  ['FY2014', 1.5, "color: #0000ff"],
						  ['FY2015', 1.5, "color: #0000ff"],
						  ['FY2016', 1.6, "color: #0000ff"],
						  ['FY2017', 1.6, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Minnesota':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '9';
					break;
				case 'tbv2':
					return '12';
					break;
				case 'tbv3':
					return '$22.0 million';
					break;
				case 'tbv4':
					return '$21.5 million';
					break;
				case 'tbv5':
					return '41.7%';
					break;
				case 'tbv6':
					return '40.6%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$52.9 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$115.8 million';
					break;
				case 'tb2v2':
					return '5.3 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '16.2%';
					break;
				case 'tb3v2':
					return '10.6%';
					break;
				case 'tb3v3':
					return '5,900';
					break;
				case 'tb3v4':
					return '$2.51 billion';
					break;
				case 'tb3v6':
					return '26.7%';
					break;
				case 'tb3v5':
					return '$784 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 746.2, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 52.9, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 22.0, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 115.8, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 21.7, "color: #0000ff"],
						  ['FY2008', 22.1, "color: #0000ff"],
						  ['FY2009', 20.5, "color: #0000ff"],
						  ['FY2010', 20.3, "color: #0000ff"],
						  ['FY2011', 19.6, "color: #0000ff"],
						  ['FY2012', 19.5, "color: #0000ff"],
						  ['FY2013', 19.6, "color: #0000ff"],
						  ['FY2014', 21.3, "color: #0000ff"],
						  ['FY2015', 22.3, "color: #0000ff"],
						  ['FY2016', 21.5, "color: #0000ff"],
						  ['FY2017', 22.0, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Mississippi':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '15';
					break;
				case 'tbv2':
					return '16';
					break;
				case 'tbv3':
					return '$10.7 million';
					break;
				case 'tbv4':
					return '$10.9 million';
					break;
				case 'tbv5':
					return '29.4%';
					break;
				case 'tbv6':
					return '29.9%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$36.5 million';
					break;


				// state table 2
				case 'tb2v1':
					return '$124.6 million';
					break;
				case 'tb2v2':
					return '11.6 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '22.5%';
					break;
				case 'tb3v2':
					return '15.2%';
					break;
				case 'tb3v3':
					return '5,400';
					break;
				case 'tb3v4':
					return '$1.23 billion';
					break;
				case 'tb3v6':
					return '30.8%';
					break;
				case 'tb3v5':
					return '$1,031 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 249.9, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 36.5, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 10.7, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 124.6, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 0.0, "color: #0000ff"],
						  ['FY2008', 8.0, "color: #0000ff"],
						  ['FY2009', 10.3, "color: #0000ff"],
						  ['FY2010', 10.6, "color: #0000ff"],
						  ['FY2011', 9.9, "color: #0000ff"],
						  ['FY2012', 9.9, "color: #0000ff"],
						  ['FY2013', 9.7, "color: #0000ff"],
						  ['FY2014', 10.9, "color: #0000ff"],
						  ['FY2015', 10.9, "color: #0000ff"],
						  ['FY2016', 10.9, "color: #0000ff"],
						  ['FY2017', 10.7, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Missouri':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '49';
					break;
				case 'tbv2':
					return '48';
					break;
				case 'tbv3':
					return '$109,341';
					break;
				case 'tbv4':
					return '$107,380';
					break;
				case 'tbv5':
					return '0.1%';
					break;
				case 'tbv6':
					return '0.1%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$72.9 million';
					break;


				// state table 2
				case 'tb2v1':
					return '$339.7 million';
					break;
				case 'tb2v2':
					return '3,106.5 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '22.3%';
					break;
				case 'tb3v2':
					return '11.0%';
					break;
				case 'tb3v3':
					return '11,000';
					break;
				case 'tb3v4':
					return '$3.03 billion';
					break;
				case 'tb3v6':
					return '31.3%';
					break;
				case 'tb3v5':
					return '$986 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 254.2, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 72.9, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 0.1, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 339.7, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 0.0, "color: #0000ff"],
						  ['FY2008', 0.2, "color: #0000ff"],
						  ['FY2009', 1.7, "color: #0000ff"],
						  ['FY2010', 1.2, "color: #0000ff"],
						  ['FY2011', 0.1, "color: #0000ff"],
						  ['FY2012', 0.1, "color: #0000ff"],
						  ['FY2013', 0.1, "color: #0000ff"],
						  ['FY2014', 0.1, "color: #0000ff"],
						  ['FY2015', 0.1, "color: #0000ff"],
						  ['FY2016', 0.1, "color: #0000ff"],
						  ['FY2017', 0.1, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Montana':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '7';
					break;
				case 'tbv2':
					return '9';
					break;
				case 'tbv3':
					return '$6.4 million';
					break;
				case 'tbv4':
					return '$6.4 million';
					break;
				case 'tbv5':
					return '44.1%';
					break;
				case 'tbv6':
					return '44.1%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$14.6 million';
					break;


				// state table 2
				case 'tb2v1':
					return '$29.7 million';
					break;
				case 'tb2v2':
					return '4.6 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '18.9%';
					break;
				case 'tb3v2':
					return '13.1%';
					break;
				case 'tb3v3':
					return '1,600';
					break;
				case 'tb3v4':
					return '$440 million';
					break;
				case 'tb3v6':
					return '28.4%';
					break;
				case 'tb3v5':
					return '$791 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 118.5, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 14.6, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 6.4, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 29.7, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 6.9, "color: #0000ff"],
						  ['FY2008', 8.5, "color: #0000ff"],
						  ['FY2009', 8.5, "color: #0000ff"],
						  ['FY2010', 8.4, "color: #0000ff"],
						  ['FY2011', 8.4, "color: #0000ff"],
						  ['FY2012', 4.7, "color: #0000ff"],
						  ['FY2013', 4.6, "color: #0000ff"],
						  ['FY2014', 5.4, "color: #0000ff"],
						  ['FY2015', 5.4, "color: #0000ff"],
						  ['FY2016', 6.4, "color: #0000ff"],
						  ['FY2017', 6.4, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Nebraska':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '25';
					break;
				case 'tbv2':
					return '27';
					break;
				case 'tbv3':
					return '$2.6 million';
					break;
				case 'tbv4':
					return '$2.6 million';
					break;
				case 'tbv5':
					return '12.4%';
					break;
				case 'tbv6':
					return '12.4%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$20.8 million';
					break;


				// state table 2
				case 'tb2v1':
					return '$60.2 million';
					break;
				case 'tb2v2':
					return '23.4 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '17.1%';
					break;
				case 'tb3v2':
					return '13.3%';
					break;
				case 'tb3v3':
					return '2,500';
					break;
				case 'tb3v4':
					return '$795 million';
					break;
				case 'tb3v6':
					return '27.1%';
					break;
				case 'tb3v5':
					return '$753 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 103.7, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 20.8, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 2.6, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 60.2, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 3.0, "color: #0000ff"],
						  ['FY2008', 2.5, "color: #0000ff"],
						  ['FY2009', 3.0, "color: #0000ff"],
						  ['FY2010', 3.0, "color: #0000ff"],
						  ['FY2011', 2.9, "color: #0000ff"],
						  ['FY2012', 2.4, "color: #0000ff"],
						  ['FY2013', 2.4, "color: #0000ff"],
						  ['FY2014', 2.4, "color: #0000ff"],
						  ['FY2015', 2.4, "color: #0000ff"],
						  ['FY2016', 2.6, "color: #0000ff"],
						  ['FY2017', 2.6, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Nevada':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '40';
					break;
				case 'tbv2':
					return '40';
					break;
				case 'tbv3':
					return '$1.0 million';
					break;
				case 'tbv4':
					return '$1.0 million';
					break;
				case 'tbv5':
					return '3.3%';
					break;
				case 'tbv6':
					return '3.3%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$30.0 million';
					break;


				// state table 2
				case 'tb2v1':
					return '$79.1 million';
					break;
				case 'tb2v2':
					return '79.1 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '17.5%';
					break;
				case 'tb3v2':
					return '7.5%';
					break;
				case 'tb3v3':
					return '4,100';
					break;
				case 'tb3v4':
					return '$1.08 billion';
					break;
				case 'tb3v6':
					return '30.9%';
					break;
				case 'tb3v5':
					return '$746 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 207.7, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 30.0, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 1.0, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 79.1, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 3.8, "color: #0000ff"],
						  ['FY2008', 2.0, "color: #0000ff"],
						  ['FY2009', 3.4, "color: #0000ff"],
						  ['FY2010', 2.9, "color: #0000ff"],
						  ['FY2011', 0, "color: #0000ff"],
						  ['FY2012', 0, "color: #0000ff"],
						  ['FY2013', 0.2, "color: #0000ff"],
						  ['FY2014', 1.0, "color: #0000ff"],
						  ['FY2015', 1.0, "color: #0000ff"],
						  ['FY2016', 1.0, "color: #0000ff"],
						  ['FY2017', 1.0, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'New Hampshire':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '48';
					break;
				case 'tbv2':
					return '47';
					break;
				case 'tbv3':
					return '$125,000';
					break;
				case 'tbv4':
					return '$125,000';
					break;
				case 'tbv5':
					return '0.8%';
					break;
				case 'tbv6':
					return '0.8%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$16.5 million';
					break;


				// state table 2
				case 'tb2v1':
					return '$81.6 million';
					break;
				case 'tb2v2':
					return '652.8 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '15.9%';
					break;
				case 'tb3v2':
					return '9.3%';
					break;
				case 'tb3v3':
					return '1,900';
					break;
				case 'tb3v4':
					return '$729 million';
					break;
				case 'tb3v6':
					return '27.0%';
					break;
				case 'tb3v5':
					return '$814 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 265.6, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 16.5, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 0.1, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 81.6, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 0, "color: #0000ff"],
						  ['FY2008', 1.3, "color: #0000ff"],
						  ['FY2009', 0.2, "color: #0000ff"],
						  ['FY2010', 0.0, "color: #0000ff"],
						  ['FY2011', 0.0, "color: #0000ff"],
						  ['FY2012', 0.0, "color: #0000ff"],
						  ['FY2013', 0.0, "color: #0000ff"],
						  ['FY2014', 0.1, "color: #0000ff"],
						  ['FY2015', 0.1, "color: #0000ff"],
						  ['FY2016', 0.1, "color: #0000ff"],
						  ['FY2017', 0.1, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'New Jersey':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '50';
					break;
				case 'tbv2':
					return '49';
					break;
				case 'tbv3':
					return '$0.0';
					break;
				case 'tbv4':
					return '$0.0';
					break;
				case 'tbv5':
					return '0.0%';
					break;
				case 'tbv6':
					return '0.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$103.3 million';
					break;
				// Notes under Chart 2
				case 'tbv8':
					return "** FY2015 annual spending estimated, not confirmed by state health department.";
					break;


				// state table 2
				case 'tb2v1':
					return '$177.6 million';
					break;
				case 'tb2v2':
					return '--';
					break;
				
				// state table 3
				case 'tb3v1':
					return '13.5%';
					break;
				case 'tb3v2':
					return '8.2%';
					break;
				case 'tb3v3':
					return '11,800';
					break;
				case 'tb3v4':
					return '$4.06 billion';
					break;
				case 'tb3v6':
					return '26.7%';
					break;
				case 'tb3v5':
					return '$858 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 944.5, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 103.3, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 0.0, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 177.6, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 11.0, "color: #0000ff"],
						  ['FY2008', 11.0, "color: #0000ff"],
						  ['FY2009', 9.1, "color: #0000ff"],
						  ['FY2010', 7.6, "color: #0000ff"],
						  ['FY2011', 0.6, "color: #0000ff"],
						  ['FY2012', 1.2, "color: #0000ff"],
						  ['FY2013', 0.0, "color: #0000ff"],
						  ['FY2014', 0.0, "color: #0000ff"],
						  ['FY2015', 0.0, "color: #0000ff"],
						  ['FY2016', 0.0, "color: #0000ff"],
						  ['FY2017', 0.0, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'New Mexico':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '18';
					break;
				case 'tbv2':
					return '17';
					break;
				case 'tbv3':
					return '$5.7 million';
					break;
				case 'tbv4':
					return '$5.9 million';
					break;
				case 'tbv5':
					return '24.9%';
					break;
				case 'tbv6':
					return '26.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$22.8 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$34.8 million';
					break;
				case 'tb2v2':
					return '6.1 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '17.5%';
					break;
				case 'tb3v2':
					return '11.4%';
					break;
				case 'tb3v3':
					return '2,600';
					break;
				case 'tb3v4':
					return '$844 million';
					break;
				case 'tb3v6':
					return '28.2%';
					break;
				case 'tb3v5':
					return '$886 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 133.8, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 22.8, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 5.7, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 34.8, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 7.7, "color: #0000ff"],
						  ['FY2008', 9.6, "color: #0000ff"],
						  ['FY2009', 9.6, "color: #0000ff"],
						  ['FY2010', 9.5, "color: #0000ff"],
						  ['FY2011', 7.0, "color: #0000ff"],
						  ['FY2012', 5.9, "color: #0000ff"],
						  ['FY2013', 5.9, "color: #0000ff"],
						  ['FY2014', 5.9, "color: #0000ff"],
						  ['FY2015', 5.9, "color: #0000ff"],
						  ['FY2016', 5.9, "color: #0000ff"],
						  ['FY2017', 5.7, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'New York':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '22';
					break;
				case 'tbv2':
					return '20';
					break;
				case 'tbv3':
					return '$39.3 million';
					break;
				case 'tbv4':
					return '$39.3 million';
					break;
				case 'tbv5':
					return '19.4%';
					break;
				case 'tbv6':
					return '19.4%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$203.0 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$206.4 million';
					break;
				case 'tb2v2':
					return '5.2 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '15.2%';
					break;
				case 'tb3v2':
					return '8.8%';
					break;
				case 'tb3v3':
					return '28,200';
					break;
				case 'tb3v4':
					return '$10.39 billion';
					break;
				case 'tb3v6':
					return '26.5%';
					break;
				case 'tb3v5':
					return '$1,462 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 2016.0, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 203.0, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 39.3, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 206.4, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 85.5, "color: #0000ff"],
						  ['FY2008', 85.5, "color: #0000ff"],
						  ['FY2009', 80.4, "color: #0000ff"],
						  ['FY2010', 55.2, "color: #0000ff"],
						  ['FY2011', 58.4, "color: #0000ff"],
						  ['FY2012', 41.4, "color: #0000ff"],
						  ['FY2013', 41.4, "color: #0000ff"],
						  ['FY2014', 39.3, "color: #0000ff"],
						  ['FY2015', 39.3, "color: #0000ff"],
						  ['FY2016', 39.3, "color: #0000ff"],
						  ['FY2017', 39.3, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'North Carolina':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '47';
					break;
				case 'tbv2':
					return '45';
					break;
				case 'tbv3':
					return '$1.1 million';
					break;
				case 'tbv4':
					return '$1.2 million';
					break;
				case 'tbv5':
					return '1.1%';
					break;
				case 'tbv6':
					return '1.2%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$99.3 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$379.9 million';
					break;
				case 'tb2v2':
					return '345.4 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '19.0%';
					break;
				case 'tb3v2':
					return '13.1%';
					break;
				case 'tb3v3':
					return '14,200';
					break;
				case 'tb3v4':
					return '$3.81 billion';
					break;
				case 'tb3v6':
					return '30.5%';
					break;
				case 'tb3v5':
					return '$860 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 435.6, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 99.3, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 1.1, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 379.9, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 17.1, "color: #0000ff"],
						  ['FY2008', 17.1, "color: #0000ff"],
						  ['FY2009', 17.1, "color: #0000ff"],
						  ['FY2010', 18.3, "color: #0000ff"],
						  ['FY2011', 18.3, "color: #0000ff"],
						  ['FY2013', 17.3, "color: #0000ff"],
						  ['FY2012', 0.0, "color: #0000ff"],
						  ['FY2014', 1.2, "color: #0000ff"],
						  ['FY2015', 1.2, "color: #0000ff"],
						  ['FY2016', 1.2, "color: #0000ff"],
						  ['FY2017', 1.1, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'North Dakota':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '1';
					break;
				case 'tbv2':
					return '1';
					break;
				case 'tbv3':
					return '$9.9 million';
					break;
				case 'tbv4':
					return '$10.0 million';
					break;
				case 'tbv5':
					return '100.9%';
					break;
				case 'tbv6':
					return '102.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$9.8 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$37.3 million';
					break;
				case 'tb2v2':
					return '3.8 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '18.7%';
					break;
				case 'tb3v2':
					return '11.7%';
					break;
				case 'tb3v3':
					return '1,000';
					break;
				case 'tb3v4':
					return '$326 million';
					break;
				case 'tb3v6':
					return '27.0%';
					break;
				case 'tb3v5':
					return '$746 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 66.8, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 9.8, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 9.9, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 37.3, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 3.1, "color: #0000ff"],
						  ['FY2008', 3.1, "color: #0000ff"],
						  ['FY2009', 3.1, "color: #0000ff"],
						  ['FY2010', 8.2, "color: #0000ff"],
						  ['FY2011', 8.2, "color: #0000ff"],
						  ['FY2012', 8.1, "color: #0000ff"],
						  ['FY2013', 8.2, "color: #0000ff"],
						  ['FY2014', 9.5, "color: #0000ff"],
						  ['FY2015', 9.5, "color: #0000ff"],
						  ['FY2016', 10.0, "color: #0000ff"],
						  ['FY2017', 9.9, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Ohio':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '28';
					break;
				case 'tbv2':
					return '30';
					break;
				case 'tbv3':
					return '$13.5 million';
					break;
				case 'tbv4':
					return '$12.1 million';
					break;
				case 'tbv5':
					return '10.3%';
					break;
				case 'tbv6':
					return '9.2%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$132.0 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$420.1 million';
					break;
				case 'tb2v2':
					return '31.0 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '21.6%';
					break;
				case 'tb3v2':
					return '15.1%';
					break;
				case 'tb3v3':
					return '20,200';
					break;
				case 'tb3v4':
					return '$5.64 billion';
					break;
				case 'tb3v6':
					return '30.1%';
					break;
				case 'tb3v5':
					return '$1,058 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 1334.3, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 132.0, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 13.5, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 420.1, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 45.0, "color: #0000ff"],
						  ['FY2008', 44.7, "color: #0000ff"],
						  ['FY2009', 6.0, "color: #0000ff"],
						  ['FY2010', 6.0, "color: #0000ff"],
						  ['FY2011', 0.0, "color: #0000ff"],
						  ['FY2012', 0.0, "color: #0000ff"],
						  ['FY2013', 0.0, "color: #0000ff"],
						  ['FY2014', 1.5, "color: #0000ff"],
						  ['FY2015', 7.7, "color: #0000ff"],
						  ['FY2016', 12.1, "color: #0000ff"],
						  ['FY2017', 13.5, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;
		
		case 'Oklahoma':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '3';
					break;
				case 'tbv2':
					return '3';
					break;
				case 'tbv3':
					return '$23.5 million';
					break;
				case 'tbv4':
					return '$25.0 million';
					break;
				case 'tbv5':
					return '55.6%';
					break;
				case 'tbv6':
					return '59.1%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$42.3 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$168.5 million';
					break;
				case 'tb2v2':
					return '7.2 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '22.2%';
					break;
				case 'tb3v2':
					return '14.6%';
					break;
				case 'tb3v3':
					return '7,500';
					break;
				case 'tb3v4':
					return '$1.62 billion';
					break;
				case 'tb3v6':
					return '31.1%';
					break;
				case 'tb3v5':
					return '$899 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 396.6, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 42.3, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 23.5, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 168.5, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 10.0, "color: #0000ff"],
						  ['FY2008', 14.2, "color: #0000ff"],
						  ['FY2009', 18.0, "color: #0000ff"],
						  ['FY2010', 19.8, "color: #0000ff"],
						  ['FY2011', 27.7, "color: #0000ff"],
						  ['FY2012', 21.2, "color: #0000ff"],
						  ['FY2013', 19.7, "color: #0000ff"],
						  ['FY2014', 22.7, "color: #0000ff"],
						  ['FY2015', 23.6, "color: #0000ff"],
						  ['FY2016', 25.0, "color: #0000ff"],
						  ['FY2017', 23.5, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Oregon':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '17';
					break;
				case 'tbv2':
					return '18';
					break;
				case 'tbv3':
					return '$9.8 million';
					break;
				case 'tbv4':
					return '$9.8 million';
					break;
				case 'tbv5':
					return '25.0%';
					break;
				case 'tbv6':
					return '25.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$39.3 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$110.7 million';
					break;
				case 'tb2v2':
					return '11.2 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '17.1%';
					break;
				case 'tb3v2':
					return '8.3%';
					break;
				case 'tb3v3':
					return '5,500';
					break;
				case 'tb3v4':
					return '$1.54 billion';
					break;
				case 'tb3v6':
					return '27.5%';
					break;
				case 'tb3v5':
					return '$788 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 357.9, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 39.3, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 9.8, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 110.7, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 3.5, "color: #0000ff"],
						  ['FY2008', 8.2, "color: #0000ff"],
						  ['FY2009', 8.2, "color: #0000ff"],
						  ['FY2010', 6.6, "color: #0000ff"],
						  ['FY2011', 7.1, "color: #0000ff"],
						  ['FY2012', 8.3, "color: #0000ff"],
						  ['FY2013', 7.5, "color: #0000ff"],
						  ['FY2014', 9.9, "color: #0000ff"],
						  ['FY2015', 9.9, "color: #0000ff"],
						  ['FY2016', 9.8, "color: #0000ff"],
						  ['FY2017', 9.8, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Pennsylvania':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '29';
					break;
				case 'tbv2':
					return 'NA';
					break;
				case 'tbv3':
					return '$13.9 million';
					break;
				case 'tbv4':
					return 'NA';
					break;
				case 'tbv5':
					return '9.9%';
					break;
				case 'tbv6':
					return '0.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$140.0 million';
					break;
				// Notes under Table 3
				case 'tbv9':
					return "* Pennsylvania's FY2016 tobacco prevention program budget was not available when this report went to press.<br>** FY2015 and FY2014 annual spending estimated, not confirmed by state health department.";
					break;

				// state table 2
				case 'tb2v1':
					return '$441.6 million';
					break;
				case 'tb2v2':
					return '31.7 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '18.1%';
					break;
				case 'tb3v2':
					return '12.9%';
					break;
				case 'tb3v3':
					return '22,000';
					break;
				case 'tb3v4':
					return '$6.38 billion';
					break;
				case 'tb3v6':
					return '27.9%';
					break;
				case 'tb3v5':
					return '$1,023 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 1660.3, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 140.0, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 13.9, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 441.6, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 30.3, "color: #0000ff"],
						  ['FY2008', 31.7, "color: #0000ff"],
						  ['FY2009', 32.1, "color: #0000ff"],
						  ['FY2010', 17.7, "color: #0000ff"],
						  ['FY2011', 14.7, "color: #0000ff"],
						  ['FY2012', 13.9, "color: #0000ff"],
						  ['FY2013', 14.2, "color: #0000ff"],
						  ['FY2014', 5.0, "color: #0000ff"],
						  ['FY2015', 13.8, "color: #0000ff"],
						  ['FY2016', 13.7, "color: #0000ff"],
						  ['FY2017', 13.9, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Rhode Island':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '42';
					break;
				case 'tbv2':
					return '41';
					break;
				case 'tbv3':
					return '$375,622';
					break;
				case 'tbv4':
					return '$397,908';
					break;
				case 'tbv5':
					return '2.9%';
					break;
				case 'tbv6':
					return '3.1%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$12.8 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$26.3 million';
					break;
				case 'tb2v2':
					return '69.9 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '15.5%';
					break;
				case 'tb3v2':
					return '4.8%';
					break;
				case 'tb3v3':
					return '1,800';
					break;
				case 'tb3v4':
					return '$640 million';
					break;
				case 'tb3v6':
					return '28.3%';
					break;
				case 'tb3v5':
					return '$1,072 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 194.4, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 12.8, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 0.4, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 26.3, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 1.0, "color: #0000ff"],
						  ['FY2008', 0.9, "color: #0000ff"],
						  ['FY2009', 0.9, "color: #0000ff"],
						  ['FY2010', 0.7, "color: #0000ff"],
						  ['FY2011', 0.7, "color: #0000ff"],
						  ['FY2012', 0.4, "color: #0000ff"],
						  ['FY2013', 0.4, "color: #0000ff"],
						  ['FY2014', 0.4, "color: #0000ff"],
						  ['FY2015', 0.4, "color: #0000ff"],
						  ['FY2016', 0.4, "color: #0000ff"],
						  ['FY2017', 0.4, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'South Carolina':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '30';
					break;
				case 'tbv2':
					return '29';
					break;
				case 'tbv3':
					return '$5.0 million';
					break;
				case 'tbv4':
					return '$5.0 million';
					break;
				case 'tbv5':
					return '9.8%';
					break;
				case 'tbv6':
					return '9.8%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$51.1 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$191.5 million';
					break;
				case 'tb2v2':
					return '38.3 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '19.7%';
					break;
				case 'tb3v2':
					return '9.6%';
					break;
				case 'tb3v3':
					return '7,200';
					break;
				case 'tb3v4':
					return '$1.9 billion';
					break;
				case 'tb3v6':
					return '30.1%';
					break;
				case 'tb3v5':
					return '$906 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 240.5, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 51.0, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 5.0, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 191.5, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 2.0, "color: #0000ff"],
						  ['FY2008', 2.0, "color: #0000ff"],
						  ['FY2009', 0.0, "color: #0000ff"],
						  ['FY2010', 2.0, "color: #0000ff"],
						  ['FY2011', 5.0, "color: #0000ff"],
						  ['FY2012', 5.0, "color: #0000ff"],
						  ['FY2013', 5.0, "color: #0000ff"],
						  ['FY2014', 5.0, "color: #0000ff"],
						  ['FY2015', 5.0, "color: #0000ff"],
						  ['FY2016', 5.0, "color: #0000ff"],
						  ['FY2017', 5.0, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'South Dakota':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '13';
					break;
				case 'tbv2':
					return '13';
					break;
				case 'tbv3':
					return '$4.5 million';
					break;
				case 'tbv4':
					return '$4.5 million';
					break;
				case 'tbv5':
					return '38.5%';
					break;
				case 'tbv6':
					return '38.5%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$11.7 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$24.4 million';
					break;
				case 'tb2v2':
					return '5.4 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '20.1%';
					break;
				case 'tb3v2':
					return '10.1%';
					break;
				case 'tb3v3':
					return '1,300';
					break;
				case 'tb3v4':
					return '$373 million';
					break;
				case 'tb3v6':
					return '28.2%';
					break;
				case 'tb3v5':
					return '$828 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 88.3, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 11.7, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 4.5, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 24.4, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 0.7, "color: #0000ff"],
						  ['FY2008', 5.0, "color: #0000ff"],
						  ['FY2009', 5.0, "color: #0000ff"],
						  ['FY2010', 5.0, "color: #0000ff"],
						  ['FY2011', 3.5, "color: #0000ff"],
						  ['FY2012', 4.0, "color: #0000ff"],
						  ['FY2013', 4.0, "color: #0000ff"],
						  ['FY2014', 4.0, "color: #0000ff"],
						  ['FY2015', 4.5, "color: #0000ff"],
						  ['FY2016', 4.5, "color: #0000ff"],
						  ['FY2017', 4.5, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Tennessee':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '45';
					break;
				case 'tbv2':
					return '34';
					break;
				case 'tbv3':
					return '$1.1 million';
					break;
				case 'tbv4':
					return '$5.0 million';
					break;
				case 'tbv5':
					return '1.5%';
					break;
				case 'tbv6':
					return '6.6%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$75.6 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$276.9 million';
					break;
				case 'tb2v2':
					return '252.1 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '21.9';
					break;
				case 'tb3v2':
					return '11.5%';
					break;
				case 'tb3v3':
					return '11,400';
					break;
				case 'tb3v4':
					return '$2.67 billion';
					break;
				case 'tb3v6':
					return '32.9%';
					break;
				case 'tb3v5':
					return '$1,035 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 418.3, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 75.6, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 1.1, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 276.9, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 0.0, "color: #0000ff"],
						  ['FY2008', 10.0, "color: #0000ff"],
						  ['FY2009', 5.0, "color: #0000ff"],
						  ['FY2010', 0.2, "color: #0000ff"],
						  ['FY2011', 0.2, "color: #0000ff"],
						  ['FY2012', 0.2, "color: #0000ff"],
						  ['FY2013', 0.2, "color: #0000ff"],
						  ['FY2014', 5.0, "color: #0000ff"],
						  ['FY2015', 5.0, "color: #0000ff"],
						  ['FY2016', 5.0, "color: #0000ff"],
						  ['FY2017', 1.1, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Texas':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '38';
					break;
				case 'tbv2':
					return '37';
					break;
				case 'tbv3':
					return '$10.2 million';
					break;
				case 'tbv4':
					return '$10.2 million';
					break;
				case 'tbv5':
					return '3.9%';
					break;
				case 'tbv6':
					return '3.9%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$264.1 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$606.6 million';
					break;
				case 'tb2v2':
					return '59.3 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '15.2%';
					break;
				case 'tb3v2':
					return '10.6%';
					break;
				case 'tb3v3':
					return '28,000';
					break;
				case 'tb3v4':
					return '$8.85 billion';
					break;
				case 'tb3v6':
					return '26.9%';
					break;
				case 'tb3v5':
					return '$738 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 1924.6, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 264.1, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 10.2, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 606.6, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 5.2, "color: #0000ff"],
						  ['FY2008', 11.8, "color: #0000ff"],
						  ['FY2009', 11.8, "color: #0000ff"],
						  ['FY2010', 11.4, "color: #0000ff"],
						  ['FY2011', 11.4, "color: #0000ff"],
						  ['FY2012', 5.5, "color: #0000ff"],
						  ['FY2013', 6.5, "color: #0000ff"],
						  ['FY2014', 11.2, "color: #0000ff"],
						  ['FY2015', 10.7, "color: #0000ff"],
						  ['FY2016', 10.2, "color: #0000ff"],
						  ['FY2017', 10.2, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Utah':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '11';
					break;
				case 'tbv2':
					return '14';
					break;
				case 'tbv3':
					return '$7.5 million';
					break;
				case 'tbv4':
					return '$7.1 million';
					break;
				case 'tbv5':
					return '38.9%';
					break;
				case 'tbv6':
					return '36.8%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$19.3 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$38.5 million';
					break;
				case 'tb2v2':
					return '5.1 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '9.1%';
					break;
				case 'tb3v2':
					return '4.4%';
					break;
				case 'tb3v3':
					return '1,300';
					break;
				case 'tb3v4':
					return '$542 million';
					break;
				case 'tb3v6':
					return '16.6%';
					break;
				case 'tb3v5':
					return '$465 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 150.9, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 19.3, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 7.5, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 38.5, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 7.2, "color: #0000ff"],
						  ['FY2008', 7.3, "color: #0000ff"],
						  ['FY2009', 7.2, "color: #0000ff"],
						  ['FY2010', 7.1, "color: #0000ff"],
						  ['FY2011', 7.1, "color: #0000ff"],
						  ['FY2012', 7.2, "color: #0000ff"],
						  ['FY2013', 7.0, "color: #0000ff"],
						  ['FY2014', 7.5, "color: #0000ff"],
						  ['FY2015', 7.4, "color: #0000ff"],
						  ['FY2016', 7.1, "color: #0000ff"],
						  ['FY2017', 7.5, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Vermont':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '10';
					break;
				case 'tbv2':
					return '10';
					break;
				case 'tbv3':
					return '$3.4 million';
					break;
				case 'tbv4':
					return '$3.7 million';
					break;
				case 'tbv5':
					return '40.2%';
					break;
				case 'tbv6':
					return '44.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$8.4 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$17.2 million';
					break;
				case 'tb2v2':
					return '5.1 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '16.0%';
					break;
				case 'tb3v2':
					return '10.8%';
					break;
				case 'tb3v3':
					return '1,000';
					break;
				case 'tb3v4':
					return '$348 million';
					break;
				case 'tb3v6':
					return '28.1%';
					break;
				case 'tb3v5':
					return '$871 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 117.6, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 8.4, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 3.4, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 17.2, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 5.1, "color: #0000ff"],
						  ['FY2008', 5.2, "color: #0000ff"],
						  ['FY2009', 5.2, "color: #0000ff"],
						  ['FY2010', 4.8, "color: #0000ff"],
						  ['FY2011', 4.5, "color: #0000ff"],
						  ['FY2012', 3.3, "color: #0000ff"],
						  ['FY2013', 4.0, "color: #0000ff"],
						  ['FY2014', 3.9, "color: #0000ff"],
						  ['FY2015', 3.9, "color: #0000ff"],
						  ['FY2016', 3.7, "color: #0000ff"],
						  ['FY2017', 3.4, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Virginia':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '33';
					break;
				case 'tbv2':
					return '32';
					break;
				case 'tbv3':
					return '$8.2 million';
					break;
				case 'tbv4':
					return '$8.3 million';
					break;
				case 'tbv5':
					return '9.0%';
					break;
				case 'tbv6':
					return '9.1%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$91.6 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$376.9 million';
					break;
				case 'tb2v2':
					return '45.7 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '16.5%';
					break;
				case 'tb3v2':
					return '8.2%';
					break;
				case 'tb3v3':
					return '10,300';
					break;
				case 'tb3v4':
					return '$3.11 billion';
					break;
				case 'tb3v6':
					return '28.1%';
					break;
				case 'tb3v5':
					return '$717 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 307.6, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 91.6, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 8.2, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 376.9, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 13.5, "color: #0000ff"],
						  ['FY2008', 14.5, "color: #0000ff"],
						  ['FY2009', 12.7, "color: #0000ff"],
						  ['FY2010', 12.3, "color: #0000ff"],
						  ['FY2011', 9.4, "color: #0000ff"],
						  ['FY2012', 8.4, "color: #0000ff"],
						  ['FY2013', 8.4, "color: #0000ff"],
						  ['FY2014', 9.5, "color: #0000ff"],
						  ['FY2015', 8.5, "color: #0000ff"],
						  ['FY2016', 8.3, "color: #0000ff"],
						  ['FY2017', 8.2, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Washington':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '39';
					break;
				case 'tbv2':
					return '46';
					break;
				case 'tbv3':
					return '$2.3 million';
					break;
				case 'tbv4':
					return '$640,500';
					break;
				case 'tbv5':
					return '3.6%';
					break;
				case 'tbv6':
					return '1.0%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$63.6 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$88.4 million';
					break;
				case 'tb2v2':
					return '38.2 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '15.0%';
					break;
				case 'tb3v2':
					return '7.9%';
					break;
				case 'tb3v3':
					return '8,300';
					break;
				case 'tb3v4':
					return '$2.81 billion';
					break;
				case 'tb3v6':
					return '27.4%';
					break;
				case 'tb3v5':
					return '$789 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 595.9, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 63.6, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 2.3, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 88.4, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 27.1, "color: #0000ff"],
						  ['FY2008', 27.1, "color: #0000ff"],
						  ['FY2009', 27.2, "color: #0000ff"],
						  ['FY2010', 15.8, "color: #0000ff"],
						  ['FY2011', 13.4, "color: #0000ff"],
						  ['FY2012', 0.8, "color: #0000ff"],
						  ['FY2013', 2.5, "color: #0000ff"],
						  ['FY2014', 0.8, "color: #0000ff"],
						  ['FY2015', 1.9, "color: #0000ff"],
						  ['FY2016', 0.6, "color: #0000ff"],
						  ['FY2017', 2.3, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'West Virginia':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '27';
					break;
				case 'tbv2':
					return '24';
					break;
				case 'tbv3':
					return '$3.0 million';
					break;
				case 'tbv4':
					return '$4.9 million';
					break;
				case 'tbv5':
					return '11.1%';
					break;
				case 'tbv6':
					return '17.8%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$27.4 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$122.9 million';
					break;
				case 'tb2v2':
					return '40.5 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '25.7%';
					break;
				case 'tb3v2':
					return '18.8%';
					break;
				case 'tb3v3':
					return '4,300';
					break;
				case 'tb3v4':
					return '$1.00 billion';
					break;
				case 'tb3v6':
					return '32.6%';
					break;
				case 'tb3v5':
					return '$1,205 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 259.2, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 27.4, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 3.0, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 122.9, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 5.4, "color: #0000ff"],
						  ['FY2008', 5.7, "color: #0000ff"],
						  ['FY2009', 5.7, "color: #0000ff"],
						  ['FY2010', 5.7, "color: #0000ff"],
						  ['FY2011', 5.7, "color: #0000ff"],
						  ['FY2012', 5.7, "color: #0000ff"],
						  ['FY2013', 5.7, "color: #0000ff"],
						  ['FY2014', 5.3, "color: #0000ff"],
						  ['FY2015', 4.9, "color: #0000ff"],
						  ['FY2016', 4.9, "color: #0000ff"],
						  ['FY2017', 3.0, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Wisconsin':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '32';
					break;
				case 'tbv2':
					return '30';
					break;
				case 'tbv3':
					return '$5.3 million';
					break;
				case 'tbv4':
					return '$5.3 million';
					break;
				case 'tbv5':
					return '9.2%';
					break;
				case 'tbv6':
					return '9.2%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$57.5 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$155.8 million';
					break;
				case 'tb2v2':
					return '29.4 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '17.3%';
					break;
				case 'tb3v2':
					return '8.1%';
					break;
				case 'tb3v3':
					return '7,900';
					break;
				case 'tb3v4':
					return '$2.66 billion';
					break;
				case 'tb3v6':
					return '27.3%';
					break;
				case 'tb3v5':
					return '$797 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 779.1, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 57.5, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 5.3, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 155.8, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 10.0, "color: #0000ff"],
						  ['FY2008', 15.0, "color: #0000ff"],
						  ['FY2009', 15.3, "color: #0000ff"],
						  ['FY2010', 6.9, "color: #0000ff"],
						  ['FY2011', 6.9, "color: #0000ff"],
						  ['FY2012', 5.3, "color: #0000ff"],
						  ['FY2013', 5.3, "color: #0000ff"],
						  ['FY2014', 5.3, "color: #0000ff"],
						  ['FY2015', 5.3, "color: #0000ff"],
						  ['FY2016', 5.3, "color: #0000ff"],
						  ['FY2017', 5.3, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;

		case 'Wyoming':
			switch ($var) {
				// state table 1
				case 'tbv1':
					return '4';
					break;
				case 'tbv2':
					return '4';
					break;
				case 'tbv3':
					return '$4.2 million';
					break;
				case 'tbv4':
					return '$4.6 million';
					break;
				case 'tbv5':
					return '49.4%';
					break;
				case 'tbv6':
					return '54.1%';
					break;

				// CDC Recommended Spending Chart 2
				case 'tbv7':
					return '$8.5 million';
					break;

				// state table 2
				case 'tb2v1':
					return '$22.4 million';
					break;
				case 'tb2v2':
					return '5.3 to 1';
					break;
				
				// state table 3
				case 'tb3v1':
					return '19.1%';
					break;
				case 'tb3v2':
					return '15.7%';
					break;
				case 'tb3v3':
					return '800';
					break;
				case 'tb3v4':
					return '$258 million';
					break;
				case 'tb3v6':
					return '28.5%';
					break;
				case 'tb3v5':
					return '$802 per household';
					break;
			}
			// google columnchart_values
			?>
			<script type="text/javascript">
				// Google charts  
				function init()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {

						var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'},
						   {type: 'string', role: 'annotation'}],
						  ['Total State Tobacco Revenue', 45.5, "color: #0000ff", 'Annotated'],
						  ['CDC Recommended Spending', 8.5, "color: #0000ff", 'Annotated'],
						  ['Total State Spending', 4.2, "color: #ff0202", 'Annotated'],
						  ['Estimated Annual Tobacco Company Marketing in State', 22.4, "color: #ff0000", 'Annotated'],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);
						view.setColumns([0, 1,
						                 { calc: "stringify",
						                   sourceColumn: 1,
						                   type: "string",
						                   role: "annotation" },
						                 2]);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
						chart.draw(view, options);

				    }
				}

				function init2()
				{
				    google.charts.load("current", {packages:['corechart']});
				    google.charts.setOnLoadCallback(drawChart);
				    function drawChart() 
				    {
				    	var data = google.visualization.arrayToDataTable([
						  [{label: 'Country', type: 'string'},
						   {type: 'number'},
						   {type: 'string', role: 'style'}],
						  ['FY2007', 5.9, "color: #0000ff"],
						  ['FY2008', 5.9, "color: #0000ff"],
						  ['FY2009', 6.0, "color: #0000ff"],
						  ['FY2010', 4.8, "color: #0000ff"],
						  ['FY2011', 5.4, "color: #0000ff"],
						  ['FY2012', 5.4, "color: #0000ff"],
						  ['FY2013', 5.4, "color: #0000ff"],
						  ['FY2014', 5.1, "color: #0000ff"],
						  ['FY2015', 4.6, "color: #0000ff"],
						  ['FY2016', 4.6, "color: #0000ff"],
						  ['FY2017', 4.2, "color: #ffff00"],
						]);

						var formatter = new google.visualization.NumberFormat({prefix: '$', suffix: ' million', pattern: '###.##'} );
						formatter.format(data, 1); // Apply formatter to second column


						var view = new google.visualization.DataView(data);

						var options = {
						  height: 400,
						  bar: {groupWidth: "50%"},
						  legend: { position: "none" },
						  vAxis: {format: '$###,### million'}
						};
						var chart = new google.visualization.ColumnChart(document.getElementById("columnchart2_values"));
						chart.draw(view, options);
				    }
				}
			</script>
			<?php
			break;
	}
}

?>