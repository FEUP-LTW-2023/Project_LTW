<?php function draw_agentdashboard(){ ?>

<!-- TITLE -->
<header id="title">Agent Dashboard</header>

<div id="dashboard">
    <!-- BUTTONS -->
    <div id="buttons">
        <button>Filter</button>
        <button>Sort</button>
        <a href="">New ticket</a>
    </div>
    <!-- BOARD -->
    <div id="tickets">
        <!-- OTHER TICKETS -->
        <div class="board-column">
            <h2>Not started</h2>
            <ul>

            </ul>
        </div>
        <div class="board-column">
            <h2>Not In progress</h2>
            <ul>

            </ul>
        </div>
        <div class="board-column">
            <h2>Closed</h2>
            <ul>

            </ul>
        </div>
        <!-- OTHER TICKETS -->
        <div class="board-column" id = "other-tickets">
            <h2>Other tickets</h2>
            <ul>

            </ul>
        </div>
    </div>
</div>

<?php } ?>
