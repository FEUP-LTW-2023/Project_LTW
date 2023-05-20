<?php function draw_ticket_details() { ?>

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
            <div class="head-title">
                <div class="left">
                    <h1>Website Login Issue</h1>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <table>
                        <!-- ...existing code... -->
                        <div class="details-section">
                            <div class="client-info">
                                <img src="../new/img/people.png" alt="Client Profile Photo">
                                <h2>John Doe</h2>
                            </div>
                        </div>

                        <div class="details-section">
                            <h2>Description</h2>
                            <p>I'm having trouble logging into the website. I've tried multiple times, but it keeps showing
                                an error message saying "Invalid username or password." Please help me resolve this issue as
                                soon as possible.</p>
                            <p class="date">May 15, 2023 at 3:00 PM</p>

                        </div>
                        <div class="comment-section">
                            <br>
                            <label for="comment">Add a Reply:</label>
                            <br>
                            <textarea id="comment" name="comment" rows="4"></textarea>
                            <button type="submit">Submit</button>
                        </div>


                        <!-- ...existing code... -->

                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Ticket Details</h3>
                        <i class='bx bx-pencil'></i>
                    </div>
                    <ul class="todo-list">
                        <li class="cor">
                            <p>Ticket ID: #5436</p>

                        </li>
                        <li class="cor">
                            <p>Priority: High</p>

                        </li>
                        <li class="cor">
                            <p>Status: Assigned</p>

                        </li>
                        <li class="cor">
                            <p>Department: IT Support</p>

                        </li>
                        <li class="cor">
                            <p>Assigned Agent: Jane Smith</p>

                        </li>
                        <li class="cor">
                            <p>Hashtags: #login #authentication #websiteissue</p>

                        </li>

                    </ul>
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