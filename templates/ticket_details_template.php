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
                            <h2>Description</h2>
                            <p><?php echo $ticket->description; ?></p>
                            <p class="date"><?php echo $ticket->datecreated->format('F d, Y \a\t h:i A'); ?></p>
                        </div>

                        <?php
                        $comments = TicketComment::getCommentsForTicket($db, $ticket->id);

                        if (!empty($comments)) :
                        ?>
                            <div class="comment-section">
                                <h2>Comments</h2>
                                <?php foreach ($comments as $comment) : ?>
                                    <div class="comment">
                                        <div class="comment-author">
                                            <?php
                                            $commentAuthor = Account::getUserWithId($db, $comment->commentauthor);
                                            ?>
                                            <a href="../pages/profile.php?id=<?php echo $commentAuthor->id; ?>">
                                                <img src="../new/img/people.png" alt="Comment Author Profile Photo">
                                                <h3><?php echo $commentAuthor->name . ' (' . $commentAuthor->username . ')'; ?></h3>
                                            </a>
                                        </div>
                                        <div class="comment-content">
                                            <p><?php echo $comment->comment; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

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
                                    ?>
                                    <a href="../pages/profile.php?id=<?php echo $agent->id; ?>">
                                        <?php echo $agent->name . ' (' . $agent->username . ')'; ?>
                                    </a>
                                <?php
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

