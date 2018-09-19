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
			<li class="breadcrumb-item active" aria-current="page">Contato</li>
		</ol>
	</nav>

	<div class="contact py-5">
		<div class="container py-xl-5 py-lg-3">
			<h5 class="tittle-mk text-dark text-center mb-5">Contato</h5>
			<div class="row contact-us1-bottom">
				<div class="col-lg-6">
					<form action="#" method="post">
						<div class="form-group">
							<input type="text" placeholder="Nome" name="name" class="form-control" required="">
						</div>
						<div class="form-group">
							<input type="email" placeholder="E-mail" name="email" class="form-control" required="">
						</div>
						<div class="form-group">
							<textarea placeholder="Mensagem" name="message" class="form-control" required=""></textarea>
						</div>
						<input type="submit" value="Enviar">
					</form>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="row">
						<div class="col-4 home-radio-clock">
							<ul class="list-unstyled">
								<li>
									<i class="fas fa-home mr-3"></i>Endereço</li>
								<li class="my-5">
									<i class="fas fa-phone mr-3"></i>Telefone</li>
								<li>
									<i class="far fa-clock mr-3"></i>Nossos Horário</li>
							</ul>
						</div>
						<div class="col-8 home-radio-clock-right">
							<ul class="list-unstyled">
								<li>Av. Dr. Eugênio Borges, 919 A 
									<span>Tribobó, São Gonçalo - RJ</span>
								</li>
								<li class="my-4">(21) 2725-3838
									<span>(21) 7747-7412</span>
								</li>
								<li>Segunda-Sexta:
									<span>08h-18h</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14706.081540363584!2d-43.0168663!3d-22.8572274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84d1cfb98acbfdc7!2sGNV+919!5e0!3m2!1spt-BR!2sbr!4v1536697545002" style="border:0" allowfullscreen></iframe>
	</div>

<?php 
	include("include/footer.php");
 ?>