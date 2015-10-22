<?php
/**
 * conradjones_cuilduin template for displaying Pages
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */

get_header(); ?>

	<section class="page-content primary" role="main">
		<?php
					$my_id = 16;
					$post_id_1 = get_post($my_id);
					$title = $post_id_1->post_title;
					$content = $post_id_1->post_content;
					echo '<h1>' . $title . '</h1>';
					echo '<p>' . $content . '</p>';
		?>
		</section>

		<img src="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/themes/conradjones_cuilduin/images/CuilDuin_SitePlan.jpg" alt="" usemap="#Map" />
<map name="Map" id="Map">
		<!-- legend -->
    <area alt="" title="" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Townhouse_Brochure_3__2_Bed1.png" shape="poly" coords="517,266,598,254,565,255,565,292,446,269,326,251,327,287,336,301,454,305,697,307,718,294,701,255,523,251,441,249,385,249,316,242,353,240,516,254" />
    <area alt="" title="" href="#" shape="poly" coords="312,238,312,308,730,302,726,250,722,242,722,236" />
    <area alt="" title="" href="#" shape="poly" coords="312,322,314,394,720,392,716,332,716,318" />
    <area alt="" title="" href="#" shape="poly" coords="314,408,314,488,732,482,720,416,720,410" />
    <area alt="" title="" href="#" shape="poly" coords="314,506,310,568,712,572,712,498" />

		<!-- 4 bed semi-detached -->
		<area alt="" title="" href="#" shape="poly" coords="312,590,312,664,770,662,768,576" />
    <area alt="" title="" href="#" shape="poly" coords="1892,884,1894,1240,1960,1240,1962,884" />
    <area alt="" title="" href="#" shape="poly" coords="2846,724,2916,746,2762,1230,2684,1210" />
    <area alt="" title="" href="#" shape="poly" coords="2634,1398,2716,1398,2538,1816,2460,1826" />
    <area alt="" title="" href="#" shape="poly" coords="2236,1402,2316,1402,2320,1850,2232,1848" />
		<!-- grouped -->
		<area alt="" title="" href="#" shape="poly" coords="1888,884,1884,1234,1968,1242,1962,880" />
    <area alt="" title="" href="#" shape="poly" coords="1016,1608,1092,1610,1092,1774,1026,1784" />
    <area alt="" title="" href="#" shape="poly" coords="1034,1364,1032,1430,1250,1436,1260,1374" />
    <area alt="" title="" href="#" shape="poly" coords="1380,1374,1382,1426,1606,1428,1600,1362" />
    <area alt="" title="" href="#" shape="poly" coords="1370,1488,1362,1718,1440,1728,1442,1496" />
    <area alt="" title="" href="#" shape="poly" coords="1544,1494,1532,1712,1618,1712,1612,1502" />
    <area alt="" title="" href="#" shape="poly" coords="1378,1770,1382,1848,1600,1860,1602,1786" />
    <area alt="" title="" href="#" shape="poly" coords="1718,1486,1718,1762,1786,1762,1790,1486" />
    <area alt="" title="" href="#" shape="poly" coords="1888,1498,1884,1754,1962,1754,1956,1492" />
    <area alt="" title="" href="#" shape="poly" coords="1724,1806,1736,1884,1950,1894,1948,1816" />
    <area alt="" title="" href="#" shape="poly" coords="1732,1364,1734,1442,1948,1432,1942,1364" />
    <area alt="" title="" href="#" shape="poly" coords="2072,1356,2070,1440,2184,1440,2174,1356" />
    <area alt="" title="" href="#" shape="poly" coords="2072,1498,2068,1786,2136,1786,2136,1508" />
    <area alt="" title="" href="#" shape="poly" coords="2076,1826,2080,1900,2176,1910,2180,1836" />
    <area alt="" title="" href="#" shape="poly" coords="2960,512,2870,490,2952,172,3032,180" />
    <area alt="" title="" href="#" shape="poly" coords="2050,850,2040,938,2506,986,2492,894" />
    <area alt="" title="" href="#" shape="poly" coords="2478,892,2534,986,2750,858,2690,766" />
    <area alt="" title="" href="#" shape="poly" coords="1718,850,1708,1282,1790,1278,1790,856" />
    <area alt="" title="" href="#" shape="poly" coords="1186,1488,1192,1698,1270,1706,1264,1492" />
    <area alt="" title="" href="#" shape="poly" coords="1030,1496,1034,1588,1110,1596,1108,1500" />
    <area alt="" title="" href="#" shape="poly" coords="1032,1822,1026,1788,1098,1780,1096,1816" />

		<!-- 3 bed semi detached -->
	  <area alt="" title="" href="#" shape="poly" coords="2236,1850,2238,1888,2316,1894,2316,1864" />
    <area alt="" title="" href="#" shape="poly" coords="2470,1826,2466,1866,2556,1856,2548,1818" />
    <area alt="" title="" href="#" shape="poly" coords="2234,1360,2234,1394,2310,1398,2310,1366" />
    <area alt="" title="" href="#" shape="poly" coords="2638,1364,2634,1390,2720,1392,2708,1358" />
    <area alt="" title="" href="#" shape="poly" coords="2682,1216,2670,1246,2740,1272,2758,1238" />
    <area alt="" title="" href="#" shape="poly" coords="2858,684,2846,720,2934,738,2926,706" />
    <area alt="" title="" href="#" shape="poly" coords="1884,1240,1884,1280,1958,1276,1968,1248" />
    <area alt="" title="" href="#" shape="poly" coords="1886,842,1884,888,1972,874,1964,844" />
    <area alt="" title="" href="#" shape="rect" coords="2590,472" />

</map>

<?php get_footer(); ?>
