<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="container">
		<div class="bottom-header">
			<h2>WHAT WE <span>CREATE</span></h2>
			<p>Nulla eget mauris quis elit mollis ornare vitae ut odio. 
			Cras tincidunt, augue vitae sollicitudin commodo, quam elit 
			varius est, et ornare ante massa quis tellus. Mauris nec lacinia 
			nisl. Curabitur tempus tellus et vulputate vestibulum.</p>
		</div>
		<div class="bottom-grids">
			<div class="col-md-4 bottom-grid">
				<div class="btm-border a">
					<div class="btm-info">
						<h3>APP</h3>
						<p>design</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 bottom-grid">
				<div class="btm-border b">
					<div class="btm-info">
						<h3>WEB</h3>
						<p>design</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 bottom-grid">
				<div class="btm-border c">
					<div class="btm-info">
						<h3>BRAND</h3>
						<p>identity</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
<!-- projects -->
<div class="project">
	<div class="container">
		<div class="project-header">
			<h2>PROJECT <span>COMPONENTS</span></h2>
			<p>Each of our prjects involve the following stages of creation process.
			Elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia 
			nisl. Curabitur tempus tellus et vulputate vestibulum. </p>
			
		</div>
		<div class="project-grids">
			<div class="col-md-3 project-grid">
				<h3>PLANNING</h3>
				<p>Nulla eget mauris quis elit mollis ornare vitae ut odio. 
				Cras tincidunt, augue vitae sollicitudin commodo, quam elit 
				varius est, et ornare.</p>
				<div class="strip a"></div>
			</div>
			<div class="col-md-3 project-grid">
				<h3>DESIGN</h3>
				<p>Pellentesque a aliquam lacus, in convallis felis. Aliquam 
				urna nunc, placerat vitae erat in, venenatis lobortis dui.</p>
				<div class="strip b"></div>
			</div>
			<div class="col-md-3 project-grid">
				<h3>DEVELOPMENT</h3>
				<p>Mauris imperdiet maximus nibh, non facilisis 
				ante dapibus vel. Etiam elementum lectus venenatis risus 
				posuere, vitae gravida elit ullamcorper. </p>
				<div class="strip c"></div>
			</div>
			<div class="col-md-3 project-grid">
				<h3>GROWTH</h3>
				<p>Vestibulum scelerisque tellus eu varius porttitor. 
				Duis libero quam, scelerisque non condimentum pretium. </p>
				<div class="strip d"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //projects -->
<div class="flex-slider">
				<ul id="flexiselDemo1">			
					<li>
						<div class="media">
							<img src="/vistas/images/777.jpg" alt=""/>
						</div>
					</li>
					<li>
						<div class="media">
							<img src="/vistas/images/888.jpg" alt=""/>
						</div>
					</li>
					<li>
						<div class="media">
							<img src="/vistas/images/999.jpg" alt=""/>
						</div>
					</li>
					<li>
						<div class="media">
							<img src="/vistas/images/aaa.jpg" alt=""/>
						</div>
					</li>
					<li>
						<div class="media">
							<img src="/vistas/images/sss.jpg" alt=""/>
						</div>
					</li>
					<li>
						<div class="media">
							<img src="/vistas/images/a6.jpg" alt=""/>
						</div>
					</li>
				</ul>
            		<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 5,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="/vistas/js/jquery.flexisel.js"></script>
</div>
<!-- slider -->
<div class="slider">
	<div class="container">
		<!-- responsiveslides -->
					<script src="/vistas/js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							 // Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: true,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
								}
								});
								});
						</script>
				<!-- responsiveslides -->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-img text-center">
								<img src="/vistas/images/6.png" alt=""/>
								<h3>Dora Howard, Atech Ltd.</h3>
								<p>WOW! Great theme, actually the greatest I have been 
								ordering here at themeforest.net. It has great flexibility, 
								very organized, well documented and designed well! Thanks. </p>
							</div>
						</li>
						<li>
							<div class="slider-img text-center">
								<img src="/vistas/images/7.png" alt=""/>
								<h3>Thompson Howard, Atech Ltd.</h3>
								<p>Great theme, actually the greatest I have been 
								ordering here at themeforest.net. It has great flexibility, 
								very organized, well documented and well designed! </p>
							</div>
						</li>
						<li>
							<div class="slider-img text-center">
								<img src="/vistas/images/8.png" alt=""/>
								<h3>John Howard, Atech Ltd.</h3>
								<p>Actually the greatest I have been great theme, an
								ordering here at themeforest.net. It has great flexibility, 
								very organized, well documented and well designed! Thanks. </p>
							</div>
						</li>
					</ul>
				</div>
	</div>
</div>
<!-- //slider -->
<!-- get-notified -->
<div class="get-notified">
	<div class="container">
		<div class="get-grids">
			<div class="get-left">
				<h3>GET NOTIFIED</h3>
				<p>regarding latest researches</p>
			</div>
			<div class="get-right">
				<form>
					<input type="text" placeholder="your email here..." required>
					<input type="submit" value="SUBSCRIBE">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //get-notified -->
<!-- contact -->
<div class="olia-gozha">
	<div class="olia-left">
		<div class="wrap">
			<ul>
				<li><img src="/vistas/images/10.jpg" alt=""/></li>
				<li>Olia Gozha<span>@OliaGozha</span></li>
				<li><a href="#">Follow</a></li>	
			</ul>
				<p>Check out this great <a href="http://w3layouts.com/">#w3layouts</a> item 'Atech - Business & Technology PSD Template'</p>
				<p><a href="http://w3layouts.com/"> http://w3layouts.com/view-port-a-entertainment-category-flat-responsive-web-template/ … #psd #template #webdesign #ui #ux</a></p>
				<p>May 28, 2014</p>
		</div>
	</div>
	<div class="olia-right">
		<p>1370 Brooklyn, Suite 131<span>New York, NY 31480</span></p>
		<h4>351 - 675 - 0730</h4>
		<p><a href="mail-to:sample@example.com">info@avalon.com</a><span><a href="mail-to:sample@example.com">partnership@avalon.com</a></span></p>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //contact -->