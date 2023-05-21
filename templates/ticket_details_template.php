<?php

require_once(__DIR__ . '/../db/account_class.php');

function draw_ticket_details(PDO $db, Ticket $ticket)
{ ?>

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
                    <h1>
                        <?php echo $ticket->subject; ?>
                    </h1>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <table>
                        <!-- ...existing code... -->
                        <div class="details-section">
                            <div class="client-info">
                                <img src="../new/img/people.png" alt="Client Profile Photo">
                                <h2>
                                    <?php
                                    $user = Account::getUserWithId($db, $ticket->authorid);
                                    echo $user->name . ' (' . $user->username . ')';
                                    ?>
                                </h2>
                            </div>
                        </div>

                        <div class="details-section">
                            <h2>Description</h2>
                            <p>
                                <?php echo $ticket->description; ?>
                            </p>
                            <p class="date">
                                <?php echo $ticket->datecreated->format('F d, Y \a\t h:i A'); ?>
                            </p>
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
                        <i class='bx bx-pencil' onclick="editTicket()"></i>
                    </div>
                    <ul class="todo-list">
                        <li class="cor">
                            <p>Ticket ID: #
                                <?php echo $ticket->id; ?>
                            </p>

                        </li>
                        <li class="cor">
                            <p>Priority: <span id="priority"><?php echo $ticket->priority; ?></span></p>

                        </li>
                        <li class="cor">
                            <p>Status: <span id="status"><?php echo $ticket->status; ?></span></p>

                        </li>
                        <li class="cor">
                            <p>Department: <span id="department"><?php echo $ticket->department ?></span></p>

                        </li>
                        <li class="cor">
                            <p>Assigned Agent: <span id="agent">
                                <?php
                                if ($ticket->agentid == 0)
                                    echo 'None';
                                else {
                                    $agent = Account::getUserWithId($db, $ticket->agentid);
                                    echo $agent->name . ' (' . $agent->username . ')';
                                }
                                ?>
                            </span></p>

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
