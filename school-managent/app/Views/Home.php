<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<section class="welcome-text d-flex justify-content-center align-items-center flex-column">
	<img src=<?= BURL . "assets/images/logo.png" ?>>
	<h4>Welcome to <?= $settings['school_name'] ?></h4>
	<p><?= $settings['slogan'] ?></p>
</section>
<section id="about" class="d-flex justify-content-center align-items-center flex-column">
	<div class="card mb-3 card-1">
		<div class="row g-0">
			<div class="col-md-4">
				<img src=<?= BURL . "assets/images/logo.png" ?> class="img-fluid rounded-start">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title">About Us</h5>
					<p class="card-text"><?= $settings['about'] ?></p>
					<p class="card-text"><small class="text-muted"><?= $settings['school_name'] ?></small></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="d-flex justify-content-center align-items-center flex-column">
	<form method="post" action="">
		<h3>Contact Us</h3>
		<?php if (isset($_GET['error'])) { ?>
			<div class="alert alert-danger" role="alert">
				<?= $_GET['error'] ?>
			</div>
		<?php } ?>
		<?php if (isset($_GET['success'])) { ?>
			<div class="alert alert-success" role="alert">
				<?= $_GET['success'] ?>
			</div>
		<?php } ?>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
			<label class="form-label">Full Name</label>
			<input type="text" name="full_name" class="form-control">
		</div>
		<div class="mb-3">
			<label class="form-label">Message</label>
			<textarea class="form-control" name="message" rows="4"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Send</button>
	</form>
</section>
<div class="text-center text-light">
	Copyright &copy; <?= $settings['school_name'] ?> .All rights reserved.
</div>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>




<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>