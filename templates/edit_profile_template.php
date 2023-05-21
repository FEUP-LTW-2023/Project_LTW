<?php
function draw_edit_profile(Session $session)
{
?>
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
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
                <form action="/../actions/edit_profile.php" method="post">
                    <div class="form-field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="<?php echo $session->getName(); ?>">
                    </div>
					<div class="form-field">
                        <label for="username">Username</label>
						<span><?php echo $session->getUsername(); ?></span>
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $session->getEmail(); ?>">
                    </div>
                    <button type="submit">Save Changes</button>
                </form>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <script src="../new/script.js"></script>
</body>
</html>
<?php
}
?>
