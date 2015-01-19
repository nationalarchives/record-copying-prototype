<?php require_once('includes/basket-logic.php'); ?>
<!DOCTYPE html>
<html lang="en-gb">
<?php require_once('includes/head.php'); ?>
<body ng-app="recordCopying">
<main id="page_wrap" class="container" role="main">
    <div class="email-mock">
        <p>Dear x,</p>
        <p>Your page check has been completed, but we’re sorry to tell you that it has shown that we are unable to carry out the copying that you have requested. This is because xxx
        </p>
        <p>You can pay someone to <a href="#">carry out research on your behalf</a>, or you can <a href="">come to The National Archives to view the original records for free</a>. Alternatively, you may wish to submit a new request.</p>
        <p>The records copying team</p>
    </div>
</main>
<ul class="proceed-links">
    <li><a href="page-check-completed-successful-email.php">View email for successful page check request</a></li>
</ul>
</body>
</html>