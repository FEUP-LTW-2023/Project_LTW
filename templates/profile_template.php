<?php function draw_profile(Session $session) { ?>
	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				
			</form>
			<label></label>
			<a href="../pages/profile.php" class="profile">
				<img src="../new/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
		
			<div class="card">
				<div class="card-image">
					<img src="../new/img/pic.jpg" alt="Profile image">
				</div>
				<p class="name"><?php echo $session->getName(); ?></p>
				<p><?php echo $session->getUsername(); ?></p>
				<p><?php echo $session->getEmail(); ?></p>
				<p><?php echo $session->getRole(); ?></p>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="../new/script.js"></script>
</body>
</html>
<?php } ?>