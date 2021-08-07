

<style type="text/css">
	.overlay {
  position: fixed; /* Sit on top of the page content */
  display: block; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 10%;
  background-color: rgba(0,0,0,0.4); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
.text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>

			<ul class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
				<li class="visible">
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title>Animated SVG</title>
							<defs>
								<clipPath id="cd-image-1">
									<circle id="cd-circle-1" cx="110" cy="400" r="1364"/>
								</clipPath>
							</defs>
							<image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="web_home/images/g3.jpg"></image>
						</svg>
					</div> <!-- .svg-wrapper -->
					<div class="cd-radial-slider-content">
						<div class="wrapper">
							<div class="text-center overlay">
								<h3 class="text">Hostel Management System-TaTU</h3>
								
							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li>
				<li class="next-slide">
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title>Animated SVG</title>
							<defs>
								<clipPath id="cd-image-2">
									<circle id="cd-circle-2" cx="1290" cy="400" r="60"/>
								</clipPath>
							</defs>
							<image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="web_home/images/img5.jpg"></image>
						</svg>
					</div> <!-- .svg-wrapper -->
					<div class="cd-radial-slider-content text-center">
						<div class="wrapper">
							<div class="text-center overlay">
								<h3 class="text">Rooms</h3>
							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li>
				<li>
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title>Animated SVG</title>
							<defs>
								<clipPath id="cd-image-3">
									<circle id="cd-circle-3" cx="110" cy="400" r="60"/>
								</clipPath>
							</defs>
							<image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="web_home/images/img4.jpg"></image>
						</svg>
					</div> <!-- .svg-wrapper -->
					<div class="cd-radial-slider-content text-center">
						<div class="wrapper">
							<div class="text-center overlay">
								<h3 class="text">Hostels</h3>
							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li>
				<li>
					<div class="svg-wrapper">
						<svg viewBox="0 0 1400 800">
							<title>Animated SVG</title>
							<defs>
								<clipPath id="cd-image-4">
									<circle id="cd-circle-4" cx="110" cy="400" r="60"/>
								</clipPath>
							</defs>
							<image height='800px' width="1400px" clip-path="url(#cd-image-4)" xlink:href="web_home/images/img.jpeg"></image>
						</svg>
					</div> <!-- .svg-wrapper -->
					<div class="cd-radial-slider-content text-center">
						<div class="wrapper">
							<div class="text-center overlay">
								<h3 class="text">Hostels</h3>
							</div>
						</div>
					</div> <!-- .cd-radial-slider-content -->
				</li>
				
			</ul> <!-- .cd-radial-slider -->
			<ul class="cd-radial-slider-navigation">
				<li><a href="#0" class="next"><i class="fas fa-chevron-right"></i></a></li>
				<li><a href="#0" class="prev"><i class="fas fa-chevron-left"></i></a></li>
			</ul> <!-- .cd-radial-slider-navigation -->

			<script type="text/javascript">
				
				function on() {
  document.getElementByDiv("overlay").style.display = "block";
}

function off() {
  document.getElementByDiv("overlay").style.display = "none";
}
			</script>
