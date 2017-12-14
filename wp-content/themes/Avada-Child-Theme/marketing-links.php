<?php
/* Template Name: marketing-links */
get_header(); ?>

	<?php
	$content_css = '';
	$sidebar_css = '';
	$sidebar_exists = true;
	$sidebar_left = '';
	$double_sidebars = false;

	$sidebar_1 = get_post_meta( $post->ID, 'sbg_selected_sidebar_replacement', true );
	$sidebar_2 = get_post_meta( $post->ID, 'sbg_selected_sidebar_2_replacement', true );

	if( $smof_data['pages_global_sidebar']  || ( class_exists( 'TribeEvents' ) &&  is_events_archive() ) ) {
		if( $smof_data['pages_sidebar'] != 'None' ) {
			$sidebar_1 = array( $smof_data['pages_sidebar'] );
		} else {
			$sidebar_1 = '';
		}

		if( $smof_data['pages_sidebar_2'] != 'None' ) {
			$sidebar_2 = array( $smof_data['pages_sidebar_2'] );
		} else {
			$sidebar_2 = '';
		}
	}

	if( ( is_array( $sidebar_1 ) && ( $sidebar_1[0] || $sidebar_1[0] === '0' ) ) && ( is_array( $sidebar_2 ) && ( $sidebar_2[0] || $sidebar_2[0] === '0' ) ) ) {
		$double_sidebars = true;
	}

	if( is_array( $sidebar_1 ) &&
		( $sidebar_1[0] || $sidebar_1[0] === '0' )
	) {
		$sidebar_exists = true;
	} else {
		$sidebar_exists = false;
	}

	if( ! $sidebar_exists ) {
		$content_css = 'width:100%';
		$sidebar_css = 'display:none';
		$sidebar_exists = false;
	} elseif(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'left') {
		$content_css = 'float:right;';
		$sidebar_css = 'float:left;';
		$sidebar_left = 1;
	} elseif(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'right') {
		$content_css = 'float:left;';
		$sidebar_css = 'float:right;';
	} elseif(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'default' || ! metadata_exists( 'post', $post->ID, 'pyre_sidebar_position' )) {
		if($smof_data['default_sidebar_pos'] == 'Left') {
			$content_css = 'float:right;';
			$sidebar_css = 'float:left;';
			$sidebar_left = 1;
		} elseif($smof_data['default_sidebar_pos'] == 'Right') {
			$content_css = 'float:left;';
			$sidebar_css = 'float:right;';
			$sidebar_left = 2;
		}
	}

	if(get_post_meta($post->ID, 'pyre_sidebar_position', true) == 'right') {
		$sidebar_left = 2;
	}

	if( $smof_data['pages_global_sidebar']  || ( class_exists( 'TribeEvents' ) &&  is_events_archive() ) ) {
		if( $smof_data['pages_sidebar'] != 'None' ) {
			$sidebar_1 = $smof_data['pages_sidebar'];

			if( $smof_data['default_sidebar_pos'] == 'Right' ) {
				$content_css = 'float:left;';
				$sidebar_css = 'float:right;';
				$sidebar_left = 2;
			} else {
				$content_css = 'float:right;';
				$sidebar_css = 'float:left;';
				$sidebar_left = 1;
			}
		}

		if( $smof_data['pages_sidebar_2'] != 'None' ) {
			$sidebar_2 = $smof_data['pages_sidebar_2'];
		}

		if( $smof_data['pages_sidebar'] != 'None' && $smof_data['pages_sidebar_2'] != 'None' ) {
			$double_sidebars = true;
		}
	} else {
		$sidebar_1 = '0';
		$sidebar_2 = '0';
	}

	if($double_sidebars == true) {
		$content_css = 'float:left;';
		$sidebar_css = 'float:left;';
		$sidebar_2_css = 'float:left;';
	} else {
		$sidebar_left = 1;
	}

	if(class_exists('Woocommerce')) {
		if(is_cart() || is_checkout() || is_account_page() || (get_option('woocommerce_thanks_page_id') && is_page(get_option('woocommerce_thanks_page_id')))) {
			$content_css = 'width:100%';
			$sidebar_css = 'display:none';
			$sidebar_exists = false;
		}
	}
	?>

	<div id="content" style="<?php echo $content_css; ?>">

		<?php if(have_posts()): the_post(); ?>

<style type="text/css">

.preview-box {
    max-width: 300px;
    float: left;
    margin-left: 35px;
    margin-right: 35px;
}

a.preview-box-button {
    width: 100%;
    max-width: 300px;
    text-align: center;
    background-color: crimson;
    padding: 15px;
    min-width: 300px !important;
    color: #fff;
    padding-left: 75px;
    font-size: 18px;
    float: left;
    margin-top: 10px;
    margin-left: 1px;
    padding-right: 75px;
}

</style>


				<div class="container">
				<img src="https://mcaprotools.com/wp-content/uploads/2015/02/stop_and_watch.png" alt="stop_and_watch" width="100%" height="62" />

				<iframe src="https://player.vimeo.com/video/243497488" width="640" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

				<hr />


				<h2 style="font-size: 29px; font-weight: bold;">MCA <span style="color: crimson; background-color: yellow;">"Highest Converting"</span> Sales Funnels</h2>




				<hr style="clear: both; padding-bottom: 25px; border: 0px; padding-top: 25px;">




				<h1>Capture Pages</h1>

				<!-- Capture Page 1 Preview Box -->
				<div class="preview-box">
					<img src="https://mcaprotools.com/wp-content/themes/mca-child/img/mlss/cp1-ss.png" alt="" width="300" />
					<a class="preview-box-button" rel="lightbox" data-gall="gall-frame" data-lightbox-type="inline" href="#capture-page-1">Get Page Link</a>
				</div>
				<!-- Capture Page 1 Preview Box End -->

				<!-- Capture Page 1 Popup -->
				<div id="capture-page-1" style="display:none;">
				<div class="first-link">
					<h4 class="popup-title">Capture Page 1</h4>
					<p>This link is for the lead capture page shown below. This will redirect to the video sale landing page after someone enters their email address:</p>

				<div class="marketing-sharing-section">
					<h3 style="font-size: 18px;">SHARE THIS URL WITH YOUR CUSTOMERS</h3>
					    <div class="marketing-section">
					      <div class="marketing-url-input">
									<input class="marketing-url" type="text" value="https://mcaprotools.com/cp1/?ref={affiliate_username}" />

									<a class="mhpreview" href="https://mcaprotools.com/cp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
								</div>
					    </div>
				</div>
				</div>

				<div class="second-link">
				This is the landing page the user is redirected to after they enter thier email address:
					  	<div class="marketing-sharing-section">
					         <div class="marketing-section">
					             <div class="marketing-url-input"><input class="marketing-url" type="text" value="https://mcaprotools.com/lp1/?ref={affiliate_username}" />

												 <a class="mhpreview" href="https://mcaprotools.com/lp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
											 </div>
					          </div>
					     </div>
				</div>
			</div>

			<!-- Capture Page 1 Popup End -->




			<!-- Capture Page 2 Preview Box -->
			<div class="preview-box">
				<img src="https://mcaprotools.com/wp-content/themes/mca-child/img/mlss/cp1-ss.png" alt="" width="300" />
				<a class="preview-box-button" rel="lightbox" data-gall="gall-frame" data-lightbox-type="inline" href="#capture-page-2">Get Page Link</a>
			</div>
			<!-- Capture Page 2 Preview Box End -->


			<!-- Capture Page 2 Popup -->
			<div id="capture-page-2" style="display:none;">
			<div class="first-link">
				<h4 class="popup-title">Capture Page 2</h4>
				<p>This link is for the lead capture page shown below. This will redirect to the video sale landing page after someone enters their email address:</p>

			<div class="marketing-sharing-section">
				<h3 style="font-size: 18px;">SHARE THIS URL WITH YOUR CUSTOMERS</h3>
						<div class="marketing-section">
							<div class="marketing-url-input">
								<input class="marketing-url" type="text" value="https://mcaprotools.com/cp1/?ref={affiliate_username}" />

								<a class="mhpreview" href="https://mcaprotools.com/cp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
							</div>
						</div>
			</div>
			</div>

			<div class="second-link">
			This is the landing page the user is redirected to after they enter thier email address:
						<div class="marketing-sharing-section">
								 <div class="marketing-section">
										 <div class="marketing-url-input"><input class="marketing-url" type="text" value="https://mcaprotools.com/lp1/?ref={affiliate_username}" />

											 <a class="mhpreview" href="https://mcaprotools.com/lp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
										 </div>
									</div>
						 </div>
			</div>
			</div>

			<!-- Capture Page 2 Popup End -->




			<!-- Capture Page 3 Preview Box -->
			<div class="preview-box">
				<img src="https://mcaprotools.com/wp-content/themes/mca-child/img/mlss/cp1-ss.png" alt="" width="300" />
				<a class="preview-box-button" rel="lightbox" data-gall="gall-frame" data-lightbox-type="inline" href="#capture-page-3">Get Page Link</a>
			</div>
			<!-- Capture Page 2 Preview Box End -->



			<!-- Capture Page 2 Popup -->
			<div id="capture-page-2" style="display:none;">
			<div class="first-link">
				<h4 class="popup-title">Capture Page 2</h4>
				<p>This link is for the lead capture page shown below. This will redirect to the video sale landing page after someone enters their email address:</p>

			<div class="marketing-sharing-section">
				<h3 style="font-size: 18px;">SHARE THIS URL WITH YOUR CUSTOMERS</h3>
						<div class="marketing-section">
							<div class="marketing-url-input">
								<input class="marketing-url" type="text" value="https://mcaprotools.com/cp1/?ref={affiliate_username}" />

								<a class="mhpreview" href="https://mcaprotools.com/cp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
							</div>
						</div>
			</div>
			</div>

			<div class="second-link">
			This is the landing page the user is redirected to after they enter thier email address:
						<div class="marketing-sharing-section">
								 <div class="marketing-section">
										 <div class="marketing-url-input"><input class="marketing-url" type="text" value="https://mcaprotools.com/lp1/?ref={affiliate_username}" />

											 <a class="mhpreview" href="https://mcaprotools.com/lp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
										 </div>
									</div>
						 </div>
			</div>
		</div>

		<!-- Capture Page 2 Popup End -->



		<!-- Capture Page 3 Popup -->
		<div id="capture-page-3" style="display:none;">
		<div class="first-link">
			<h4 class="popup-title">Capture Page 3</h4>
			<p>This link is for the lead capture page shown below. This will redirect to the video sale landing page after someone enters their email address:</p>

		<div class="marketing-sharing-section">
			<h3 style="font-size: 18px;">SHARE THIS URL WITH YOUR CUSTOMERS</h3>
					<div class="marketing-section">
						<div class="marketing-url-input">
							<input class="marketing-url" type="text" value="https://mcaprotools.com/cp1/?ref={affiliate_username}" />

							<a class="mhpreview" href="https://mcaprotools.com/cp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
						</div>
					</div>
		</div>
		</div>

		<div class="second-link">
		This is the landing page the user is redirected to after they enter thier email address:
					<div class="marketing-sharing-section">
							 <div class="marketing-section">
									 <div class="marketing-url-input"><input class="marketing-url" type="text" value="https://mcaprotools.com/lp1/?ref={affiliate_username}" />

										 <a class="mhpreview" href="https://mcaprotools.com/lp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
									 </div>
								</div>
					 </div>
		</div>
	</div>

	<!-- Capture Page 3 Popup End -->






	<hr style="clear: both; padding-bottom: 25px; border: 0px; padding-top: 25px;">


	<h1>Landing Pages</h1>

	<!-- Landing Page 1 Preview Box -->
	<div class="preview-box">
		<img src="https://mcaprotools.com/wp-content/themes/mca-child/img/mlss/cp1-ss.png" alt="" width="300" />
		<a class="preview-box-button" rel="lightbox" data-gall="gall-frame" data-lightbox-type="inline" href="#landing-page-1">Get Page Link</a>
	</div>
	<!-- Landing Page 1 Preview Box End -->

	<!-- Landing Page 1 Popup -->
	<div id="landing-page-1" style="display:none;">
	<div class="first-link">
		<h4 class="popup-title">Landing Page 1</h4>
		<p>This link is for the lead capture page shown below. This will redirect to the video sale landing page after someone enters their email address:</p>

	<div class="marketing-sharing-section">
		<h3 style="font-size: 18px;">SHARE THIS URL WITH YOUR CUSTOMERS</h3>
				<div class="marketing-section">
					<div class="marketing-url-input">
						<input class="marketing-url" type="text" value="https://mcaprotools.com/cp1/?ref={affiliate_username}" />

						<a class="mhpreview" href="https://mcaprotools.com/cp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
					</div>
				</div>
	</div>
	</div>
	</div>

	<!-- Landing Page 1 Popup End -->




	<!-- Landing Page 2 Preview Box -->
	<div class="preview-box">
	<img src="https://mcaprotools.com/wp-content/themes/mca-child/img/mlss/cp1-ss.png" alt="" width="300" />
	<a class="preview-box-button" rel="lightbox" data-gall="gall-frame" data-lightbox-type="inline" href="#landing-page-2">Get Page Link</a>
	</div>
	<!-- Landing Page 2 Preview Box End -->


	<!-- Landing Page 2 Popup -->
	<div id="landing-page-2" style="display:none;">
	<div class="first-link">
	<h4 class="popup-title">Capture Page 2</h4>
	<p>This link is for the lead capture page shown below. This will redirect to the video sale landing page after someone enters their email address:</p>

	<div class="marketing-sharing-section">
	<h3 style="font-size: 18px;">SHARE THIS URL WITH YOUR CUSTOMERS</h3>
			<div class="marketing-section">
				<div class="marketing-url-input">
					<input class="marketing-url" type="text" value="https://mcaprotools.com/cp1/?ref={affiliate_username}" />

					<a class="mhpreview" href="https://mcaprotools.com/cp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
				</div>
			</div>
	</div>
	</div>
	</div>

	<!-- Landing Page 2 Popup End -->




	<!-- landing Page 3 Preview Box -->
	<div class="preview-box">
	<img src="https://mcaprotools.com/wp-content/themes/mca-child/img/mlss/cp1-ss.png" alt="" width="300" />
	<a class="preview-box-button" rel="lightbox" data-gall="gall-frame" data-lightbox-type="inline" href="#landing-page-3">Get Page Link</a>
	</div>
	<!-- Landing Page 3 Preview Box End -->



	<!-- Landing Page 3 Popup -->
	<div id="landing-page-3" style="display:none;">
	<div class="first-link">
	<h4 class="popup-title">Capture Page 2</h4>
	<p>This link is for the lead capture page shown below. This will redirect to the video sale landing page after someone enters their email address:</p>

	<div class="marketing-sharing-section">
	<h3 style="font-size: 18px;">SHARE THIS URL WITH YOUR CUSTOMERS</h3>
			<div class="marketing-section">
				<div class="marketing-url-input">
					<input class="marketing-url" type="text" value="https://mcaprotools.com/cp1/?ref={affiliate_username}" />

					<a class="mhpreview" href="https://mcaprotools.com/cp1/?ref={affiliate_username}" target="_blank" rel="noopener noreferrer">Preview</a>
				</div>
			</div>
	</div>
	</div>
	</div>

	<!-- Landing Page 3 Popup End -->








	<hr style="clear: both; padding-bottom: 25px; border: 0px; padding-top: 25px;">



















		<?php endif; ?>
	</div>
	<?php if( $sidebar_exists == true ): ?>
	<?php wp_reset_query(); ?>
	<div id="sidebar" class="sidebar" style="<?php echo $sidebar_css; ?>">
		<?php
		if($sidebar_left == 1) {
			generated_dynamic_sidebar($sidebar_1);
		}
		if($sidebar_left == 2) {
			generated_dynamic_sidebar_2($sidebar_2);
		}
		?>
	</div>
	<?php if( $double_sidebars == true ): ?>
	<div id="sidebar-2" class="sidebar" style="<?php echo $sidebar_2_css; ?>">
		<?php
		if($sidebar_left == 1) {
			generated_dynamic_sidebar_2($sidebar_2);
		}
		if($sidebar_left == 2) {
			generated_dynamic_sidebar($sidebar_1);
		}
		?>
	</div>
	<?php endif; ?>
	<?php endif; ?>

<?php get_footer(); ?>
