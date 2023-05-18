<?php function draw_admin_settings () { ?>
    <section id="content">
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				
			</form>
			<label></label>
			<a href="#" class="profile">
				<img src="../new/img/people.png">
			</a>
		</nav>

		<main>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Departments</h3>
						<td><button class="status pending simple-button">Create Departments</button></td>
					</div>
					<table>
						<tbody>
                            <tr>
								<td>Technical Support</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
							<tr>
								<td>Billing and Payments</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
							<tr>
								<td>Human Resources</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
							<tr>
								<td>Quality Assurance</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
							<tr>
								<td>Operations and Logistics</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="order">
					<div class="head">
						<h3>Statuses</h3>
						<td><button class="status pending simple-button">Create Status</button></td>
					</div>
					<table>
						<tbody>
                            <tr>
								<td>Open</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
							<tr>
								<td>Assigned</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
							<tr>
								<td>Closed</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
						</tbody>
					</table>
				</div>
                <div class="order">
					<div class="head">
						<h3>Priorities</h3>
						<td><button class="status pending simple-button">Create Priority</button></td>
					</div>
					<table>
						<tbody>
                            <tr>
								<td>Low</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
							<tr>
								<td>Medium</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
							<tr>
								<td>High</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
							<tr>
								<td>Urgent</td>
								<td><i class='bx bx-trash' ></i></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
    </section>
	<script src="../new/script.js"></script>
</body>
</html>
<?php } ?>