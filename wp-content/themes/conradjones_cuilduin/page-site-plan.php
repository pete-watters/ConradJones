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

		<h1>Site Map</h1>
	
				<h3 class="sitemap-legend-heading">Click house type to view floor plan</h3>
					<div class="sitemap-legend">
						<img src="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/themes/conradjones_cuilduin/images/siteplan_key.gif" usemap="#Map"  alt="Site plan legend"/>
					</div>

					<div class="panzoom-parent">
						<img class="panzoom" src="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/themes/conradjones_cuilduin/images/SitePlan_conv.png" alt="Site plan" />
						<span class="compass-graphic"></span>
					</div>

					<div class="buttons">
						<button title="Zoom In" class="zoom-in"><i class="fa fa-search-plus"> Zoom In </i></button>
						<button title="Zoom Out"  class="zoom-out"><i class="fa fa-search-minus"> Zoom Out </i></button>
						<button title="Reset Zoom"  class="reset"><i class="fa fa-arrows-alt"> Reset </i></button>
						<input type="range" class="zoom-range cuilDuinInputRange">
					</div>



		<map name="Map" id="Map">
			<area class="2-bed-mid" alt="2 Bed - Mid Terrace - Floor Plan" title="View Floor Plan" rel="lightbox" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Townhouse_Brochure_3__3_Bed.png" shape="poly" coords="31,62,268,66,269,25,32,31" />
			<area class="3-bed-end" alt="3 Bed - End Terrace - Floor Plan" title="View Floor Plan" rel="lightbox" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Townhouse_Brochure_3__2_Bed1.png" shape="poly" coords="33,72,31,108,259,112,267,77" />
			<area class="3-bed-mid" alt="3 Bed - Mid Terrace - Floor Plan" title="View Floor Plan" rel="lightbox" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Townhouse_Brochure_3__2_Bed.png" shape="poly" coords="31,117,29,158,255,158,263,123" />
			<area class="4-bed-semi" alt="4 Bed - Semi Detached - Floor Plan" title="View Floor Plan" rel="lightbox" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Semi_D_-_4_Bed1.png" shape="poly" coords="30,166,26,202,256,202,253,170" />
			<area class="3-bed-semi" alt="3 Bed - Semi Detached - Floor Plan" title="View Floor Plan" rel="lightbox" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Semi_D_-_4_Bed.png" shape="poly" coords="27,214,26,249,271,251,274,213" />
		</map>
		<div class="map-trigger-links">
			<a id="2-bed-mid" title="2 Bed - Mid Terrace - Floor Plan" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Townhouse_Brochure_3__3_Bed.png" rel="lightbox"></a>
			<a id="3-bed-end" title="3 Bed - End Terrace - Floor Plan" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Townhouse_Brochure_3__2_Bed1.png" rel="lightbox"></a>
			<a id="3-bed-mid" title="3 Bed - Mid Terrace - Floor Plan" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Townhouse_Brochure_3__2_Bed.png" rel="lightbox"></a>
			<a id="4-bed-semi" title="4 Bed - Semi Detached - Floor Plan" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Semi_D_-_4_Bed1.png" rel="lightbox"></a>
			<a id="3-bed-semi" title="3 Bed - Semi Detached - Floor Plan" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/uploads/2015/10/Semi_D_-_4_Bed.png" rel="lightbox"></a>
		</div>


		</section>



<?php get_footer(); ?>
