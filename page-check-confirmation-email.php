<?php require_once('includes/basket-logic.php'); ?>
<!DOCTYPE html>
<html lang="en-gb">
<?php require_once('includes/head.php'); ?>
<body ng-app="recordCopying">
<main id="page_wrap" class="container" role="main">
    <div class="email-mock">
        <p>Dear x,</p>
        <p>Thank you for requesting a page check from The National Archives. Your payment has been received and your unique page check reference number is x.</p>
        <p>We will email you within 10 working days to confirm whether your page check has been successful or not.</p>
        <table>
            <caption>Order summary</caption>
            <tr><th scope="row">Document reference: </th><td>WO 166/500</td></tr>
            <tr><th scope="row">Instructions for copying: </th><td>1</td></tr>
            <tr><th scope="row">Price: </th><td>£10</td></tr>
            <tr><th scope="row">Date: </th><td><?php echoDate(); ?></td></tr>
        </table>
        <p>Go to <a href="confirm-and-pay.php">Your orders</a> to view your order status at any time. If you have any questions about your order, please contact us on x</p>
        <p>The records copying team</p>
    </div>
</main>
</body>
</html>