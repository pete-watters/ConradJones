<?php
/**
 * conradjones_cuilduin template for displaying Pages
 *
 * @package WordPress
 * @subpackage conradjones_cuilduin
 * @since conradjones_cuilduin 1.0
 */

get_header(); ?>

<section class="front-page slider-area">
			<?php if( function_exists('cyclone_slider') ) cyclone_slider('location-slideshow'); ?>
	<div class="front-page slider-description">
			<span class="slider-description-text">Luas brings the city centre within fast reach</span>
	</div>
</section>
	<section class="page-content primary" role="main">


		<div class="page" title="Page 4">
			<div class="section">
				<div class="layoutArea">
					<div class="column">
						<?php
						if ( have_posts() ) : the_post();

							get_template_part( 'loop' ); ?>

							<aside class="post-aside"><?php

							wp_link_pages(
								array(
									'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'conradjones_cuilduin' ), get_the_title() ) . '<br />',
									'after'            => '</p></div>',
									'next_or_number'   => 'number',
									'separator'        => ' ',
									'pagelink'         => __( '&raquo; Part %', 'conradjones_cuilduin' ),
								)
							); ?>

							<?php
							if ( comments_open() || get_comments_number() > 0 ) :
								comments_template( '', true );
							endif;
							?>

							</aside><?php

						else :

							get_template_part( 'loop', 'empty' );

						endif;
						?>
					</div>
				</div>
			</div>
		</div>

	</section>
	<section class="page-content luas-map-section">
			<div class="luas-map" title="Luas map - Click for full size">
			</div>
			<a class="luas-map-enlarge" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/themes/conradjones_cuilduin/images/LuasLine.svg" data-rel="lightbox-0" title="LUAS Line">
				<img class="aligncenter size-full wp-image-305" href="http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/themes/conradjones_cuilduin/images/LuasLine.svg" alt="" >
			</a>

		</section>

  <section class="page-content secondary secondary-location">
    <!-- <?php query_posts('cat=5'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <?php the_content(); ?>
    <?php endwhile; endif; ?> -->

		<div id="map" style="height:600px;margin:10px;margin-bottom:0;"></div>
				<script type="text/javascript">
					var map;
					function initMap() {
							var cuilDuin_LatLng = {lat: 53.285589, lng: -6.427167, icon: "http://comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/themes/conradjones_cuilduin/images/CuilDuin_Logo_map.png",title:"Cuil Duin"};
							var phoenixPark_LatLang = {lat: 53.3558823, lng: -6.332002, icon: "",title:"Phoenix Park"};
							var tymonPark_LatLang = {lat: 53.300099, lng: -6.3500998, icon: "",title:"Tymon Park"};
							var marlayPark_LatLang = {lat: 53.2732853, lng: -6.2710532, icon: "",title:"Marlay Park"};
							var corkaghPark_LatLang = {lat: 53.3195741, lng: -6.4061051, icon: "",title:"Corkagh Park"};
							var cityWestHotel_LatLang = {lat: 53.2859733, lng: -6.4523219, icon: "",title:"Citywest Hotel"};
							var cityWestBusinessCampus_LatLang = {lat: 53.2917814, lng: -6.4319854, icon: "",title:"Citywest Business Campus"};
							var cityWestShoppingCentre_LatLang = {lat:53.282511, lng: -6.4251771, icon: "",title:"Citywest Shopping Centre"};
							var theSquareTallaght_LatLang = {lat: 53.2866673, lng: -6.373633, icon: "",title:"The Square, Tallaght"};
							var parkWestBusinessCampus_LatLang = {lat: 53.3309755, lng: -6.3777673, icon: "",title:"Parkwest Business Park"};
							var liffeyValleyShoppingCentre_LatLang = {lat: 53.3530363, lng: -6.3925885, icon: "",title:"Liffey Valley Shopping Centre"};
							var dublinAirport_LatLang = {lat: 53.4264481, lng:-6.2520985 , icon: "",title:"Dublin Airport"};
							var ballsbridge_LatLang = {lat: 53.3288689, lng: -6.2392783, icon: "",title:"Ballsbridge"};
							var rathmines_LatLang = {lat: 53.3198626, lng:-6.275405 , icon: "",title:"Rathmines"};
							var donnybrook_LatLang = {lat: 53.3192578, lng:-6.2407717 , icon: "",title:"Donnybrook"};
							var milltown_LatLang = {lat: 53.3105978, lng: -6.2567941, icon: "",title:"Milltown"};
							var terenure_LatLang = {lat: 53.3111151, lng: -6.308345, icon: "",title:"Terenure"};
							var dundrum_LatLang = {lat: 53.2891313, lng:-6.2520191 , icon: "",title:"Dundrum"};
							var redCow_LatLang = {lat: 53.3237422, lng:-6.3512739 , icon: "",title:"Red Cow Roundabout"};

							var LatLng_Array = [
								cuilDuin_LatLng,
								phoenixPark_LatLang,
								tymonPark_LatLang,
								marlayPark_LatLang,
								cityWestHotel_LatLang,
								cityWestBusinessCampus_LatLang,
								cityWestShoppingCentre_LatLang,
								theSquareTallaght_LatLang,
								parkWestBusinessCampus_LatLang,
							//	liffeyValleyShoppingCentre_LatLang,
								dublinAirport_LatLang,
								// ballsbridge_LatLang,
								// rathmines_LatLang,
								donnybrook_LatLang,
								milltown_LatLang,
								terenure_LatLang,
							//	dundrum_LatLang
							];



						  var mapOptions = {
								center: {lat: 53.32458, lng: -6.2903352}, // centered @ harolds cross
								zoom: 12,
								style:  {
							    "featureType": "transit.line.rail",
							    "stylers": [
							      { "hue": "#ff1a00" }
							    ]
							  }
						  }
						  var map = new google.maps.Map(document.getElementById("map"),mapOptions);

							for	( var i = 0; i < LatLng_Array.length; i++) {

								var infowindow = new google.maps.InfoWindow({
							    content: LatLng_Array[i].title
							  });

									var marker = new google.maps.Marker({
										 position:  {lat: LatLng_Array[i].lat, lng: LatLng_Array[i].lng},
										 map: map,
										 title: LatLng_Array[i].title,
										 //label: 'Cuil Duin',
										 icon: LatLng_Array[i].icon
									 });
									}

									marker.addListener('click', function() {
								    infowindow.open(map, marker);
								  });

									var transitLayer = new google.maps.TransitLayer();
									  transitLayer.setMap(map);

										var directionsService = new google.maps.DirectionsService;
									  var directionsDisplay = new google.maps.DirectionsRenderer;
  									directionsDisplay.setMap(map);

										function calculateAndDisplayRoute(directionsService, directionsDisplay) {
										  directionsService.route({
										    origin: "89-90 N Wall Quay, North Wall, Dublin 1, Ireland",//{lat: 53.3475084, lng: -6.2305443}, // Point Luas
										    destination: "8 Millrace Gardens, Saggart, Co. Dublin, Ireland", //{lat: 53.2808389, lng: -6.4519389}, // Saggart Luas
										    travelMode: google.maps.TravelMode.TRANSIT
										  }, function(response, status) {
										    if (status === google.maps.DirectionsStatus.OK) {
										      directionsDisplay.setDirections(response);
										    } else {
										      window.alert('Directions request failed due to ' + status);
										    }
										  });


									}
								}

				</script>
				<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUkLw9opYBcOCcS9OA7Ac6yERecwYUCTc&callback=initMap">
				</script>

  </section>
<?php get_footer(); ?>
