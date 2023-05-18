<?php function draw_new_ticket() { ?>
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
                <div class="head-title">
                <div class="left">
                    <h1>New ticket</h1>
                </div>
                </div>
                <div class="table-data">
                <div class="order">
                    <div class="ticket-form">
                    <form>
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" placeholder="Issue" />
            
                        <label for="department">Department</label>
                        <div class="department">
                        <label>
                            <input type="radio" id="it" name="department" value="IT" checked />
                            <span class="ml-2">IT Support</span>
                        </label>
                        <label>
                            <input type="radio" id="human-resources" name="department"/>
                            <span class="ml-2">Human Resources</span>
                        </label>
                        <label>
                            <input type="radio" id="finance" name="department"/>
                            <span class="ml-2">Finance</span>
                        </label>
                        <label>
                            <input type="radio" id="marketing" name="department"/>
                            <span class="ml-2">Marketing</span>
                        </label>
                        <label>
                            <input type="radio" id="administration" name="department"/>
                            <span class="ml-2">Administration</span>
                        </label>
                        </div>
            
                        <label for="description">Description</label>
                        <textarea id="description" rows="3" placeholder="Description of the ticket"></textarea>
            
                        <button type="submit">Submit Ticket</button>
                    </form>
                    </div>
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