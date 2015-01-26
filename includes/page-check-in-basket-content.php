<?php require_once('page-check-in-basket-breadcrumb.php'); ?>
<section class="row">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">

        <form action="/checkout/ordersummary" method="post">
            <div class="heading-holding-banner">
                <h1>
                    <span>
                        <span>
                            Your shopping basket <span>(1  item)</span>
                        </span>
                    </span>
                </h1>
            </div>
            <div class="breather">
                <ul class="step-indicator">
                    <li class="active">
                        <span>1</span>
                        <span>Basket</span>
                    </li>
                    <li>
                        <span>2</span>
                        <span>Review</span>
                    </li>
                    <li>
                        <span>3</span>
                        <span>Payment</span>
                    </li>
                    <li class="last">
                        <span>4</span>
                        <span>Confirmation</span>
                    </li>
                </ul>

                <div class="holding-box basket-contents">
                    <h2 class="inline clr">Record copying - Page check request</h2>
                    <ul class="basket-item">
                        <li><strong>Document reference:</strong> <span>WO 166/500</span></li>
                        <li><strong>Document title:</strong> <span>DIVISIONS: 42ND. DIVISION: Reconnaissance Battalion</span></li>
                        <li><strong>Instructions for copying:</strong> <span><?php echo($instructions); ?></span></li>
                        <li><strong>Cost:</strong> <span><?php echo(PAGE_CHECK_PRICE); ?></span></li>
                    </ul>
                    <div class="checkout">
                        <a href="details-page.php"
                           class="call-to-action-link secondary">Continue Shopping</a>
                        <a href="checkout-abstract.php"
                           class="discoveryPrimaryCallToActionLink">Checkout</a>
                    </div>
                    <?php require_once('worldpay-images.php'); ?>
                </div>
            </div>
        </form>
    </div>
</section>