<!-- AUTHENTICATION -->

<?php function draw_auth() { ?>

<div id = "auth">
    <form id = 'login-form'>
        <h1>Already have an account?</h1>
        <input name="username/e-mail" type="text" placeholder="username / e-mail" autocomplete="off">
        <input name="password" type="password" placeholder="password" autocomplete="off">
        <input type="submit" value="Sign in">
    </form>
    <form id = 'signup-form'>
        <h1>First time here?</h1>
        <input name="username" type="text" placeholder="username" autocomplete="off">
        <input name="e-mail" type="email" placeholder="e-mail" autocomplete="off">
        <input name="password" type="password" placeholder="password" autocomplete="off">
        <input type="submit" value="Sign up">
    </form>
</div>

<?php } ?>