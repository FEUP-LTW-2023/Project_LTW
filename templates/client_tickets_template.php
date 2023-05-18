<?php function draw_client_tickets() { ?>
    <!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				
			</form>
			<label></label>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>My Tickets</h1>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<table>
						<thead>
							<tr>
								<th>Ticket</th>
								<th>Date</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Password Reset</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Closed</span></td>
							</tr>
							<tr>
								
								<td>Account Creation</td>
							
								<td>01-10-2021</td>
								<td><span class="status pending">Open</span></td>
							</tr>
							<tr>
								
								<td>Website Error</td>
								
								<td>01-10-2021</td>
								<td><span class="status process">Assigned</span></td>
							</tr>
							<tr>
								
								<td>Order Status</td>
								
								<td>01-10-2021</td>
								<td><span class="status pending">Open</span></td>
							</tr>
							<tr>
								
								<td>Data Access Issue</td>
								
								<td>01-10-2021</td>
								<td><span class="status completed">Closed</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../new/script.js"></script>
</body>
</html>

<?php } ?>