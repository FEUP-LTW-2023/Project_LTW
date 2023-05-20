<?php function draw_assigned_tickets () { ?>
    <section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				
			</form>
			<label></label>
            <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Assigned Tickets</h1>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3></h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Ticket</th>
								<th>Department</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>Password Reset</td>
								<td>Technical Support</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Closed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>Jane Smith</p>
								</td>
								<td>Account Creation</td>
								<td>Technical Support</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Open</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>Website Error</td>
								<td>Technical Support</td>
								<td>01-10-2021</td>
								<td><span class="status process">Assigned</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>Order Status</td>
								<td>Order Fulfillment</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Open</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>Data Access Issue</td>
								<td>Technical Support</td>
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
    <script src="../new/script.js"></script>
</body>
</html>
<?php } ?>