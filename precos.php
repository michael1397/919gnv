<?php 
	include("include/header.php");
 ?>
	<div class="banner-2">

	</div>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Inicio</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Preços</li>
		</ol>
	</nav>
	<div class="menu-mkl py-5">
		<div class="py-xl-5 py-lg-3">
			<h5 class="tittle-mk text-dark text-center mb-5">Nossos Preços</h5>
			<ul id="flexiselDemo1">
				<li>
					<div class="mklayouts_banner_bottom_left">
						<img src="images/k1.png" alt=" " class="img-fluid" />
						<h4>Redutor Pressor
							<span>R$350,00</span>
						</h4>
					</div>
				</li>
				<li>
					<div class="mklayouts_banner_bottom_left">
						<img src="images/k2.png" alt=" " class="img-fluid" />
						<h4>Redutor Tomasetto
							<span>R$400,00</span>
						</h4>
					</div>
				</li>
				<li>
					<div class="mklayouts_banner_bottom_left">
						<img src="images/k3.png" alt=" " class="img-fluid" />
						<h4>Caixa Comutadora IGT
							<span>R$120,00</span>
						</h4>
					</div>
				</li>
				<li>
					<div class="mklayouts_banner_bottom_left">
						<img src="images/k4.jpg" alt=" " class="img-fluid" />
						<h4>Variador de Avanço
							<span>R$380,00</span>
						</h4>
					</div>
				</li>
				<li>
					<div class="mklayouts_banner_bottom_left">
						<img src="images/k4.jpg" alt=" " class="img-fluid" />
						<h4>Emulador de Bico
							<span>R$320,00</span>
						</h4>
					</div>
				</li>
				<li>
					<div class="mklayouts_banner_bottom_left">
						<img src="images/k4.jpg" alt=" " class="img-fluid" />
						<h4>Tubo de Alta
							<span>R$100,00</span>
						</h4>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="cuisine-names pt-sm-5 pt-3">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mk_cuisine_names_left mkl_cuisine_names_left text-right">
					<h3>Kit Elétrico
						<span>R$120,00</span>
					</h3>
					<h3>Variador de Avanço
						<span>R$380,00</span>
					</h3>
					<h3>Central ECU Tomasetto
						<span>R$1.000,00</span>
					</h3>
					<h3>Flauta Injetora
						<span>R$800,00</span>
					</h3>
					<h3>Emulador de Bico
						<span>R$180,00</span>
					</h3>
				</div>
				<div class="col-md-4 mkls_cuisine_names_left text-center">
					<img src="images/coffee.png" alt=" " class="img-fluid" />
				</div>
				<div class="col-md-4 mk_cuisine_names_left py-md-0 py-4">
					<h3>Kit Elétrico
						<span>R$120,00</span>
					</h3>
					<h3>Variador de Avanço
						<span>R$380,00</span>
					</h3>
					<h3>Central ECU Tomasetto
						<span>R$1.000,00</span>
					</h3>
					<h3>Flauta Injetora
						<span>R$800,00</span>
					</h3>
					<h3>Emulador de Bico
						<span>R$180,00</span>
					</h3>
				</div>
			</div>
		</div>
	</div>

<?php 
	include("include/footer.php");
 ?>

	<!-- flexSlider-for-menu-section -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 414,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 800,
						visibleItems: 3
					}
				}
			});

		});
	</script>

</body>

</html>