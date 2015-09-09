<?php require_once('page-check-in-basket-breadcrumb.php'); ?>
<section class="row" ng-controller="basketController">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">

        <form action="checkout-abstract.php" method="post">
            <div class="heading-holding-banner">
                <h1>
                    <span>
                        <span> 
                            Your shopping basket
                        </span>
                    </span>
                </h1>
            </div>
            <div class="breather">
                <ul class="step-indicator">
                    <li>
                        <span>1</span>
                        <span>Basket</span>
                    </li>
                    <li class="active">
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
                    <p>Please review your order and choose your delivery options.</p>
                    <div class="order-items distinct">
                        <div>
                            <h2 class="inline clr">2 Digital items</h2>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title: </strong>&nbsp;&nbsp;Felix Ruddick<br>
                                <strong>Order item ID: </strong>&nbsp;&nbsp;784985415<br>
                                <strong>Catalogue reference: </strong>&nbsp;&nbsp;WO 409/27/33/804<br>
                                <strong>Price: </strong>&nbsp;&nbsp;&nbsp;£3.00</p>
                            <p><a class="removeLink">Remove</a></p>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title: </strong>&nbsp;&nbsp;3rd Infantry Brigade Anti-tank Company<br>
                                <strong>Order item ID: </strong>&nbsp;&nbsp;784985416<br>
                                <strong>Catalogue reference: </strong>&nbsp;&nbsp;WO 33/804/34/1<br>
                                <strong>Price: </strong>&nbsp;&nbsp;&nbsp;£3.00</p>
                            <p><a class="removeLink">Remove</a></p>
                        </div>
                        <div>
                            <h2 class="inline clr">Copy order</h2>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title:</strong>&nbsp;&nbsp;Naturalisation Certificate: Ho Shu-hing known as Ho Wai...<br>
                                <strong>Order item ID: </strong>&nbsp;&nbsp;784985420<br>
                                <strong>Catalogue reference: </strong>&nbsp;&nbsp;HO 334/1983/48484<br>
                                <strong>Certified copy: </strong>&nbsp;&nbsp;Yes<br>
                                <strong>Price:</strong>&nbsp;&nbsp;&nbsp;£25.00</p>
                            <p><a class="removeLink">Remove</a></p>
                        </div>
                        <div>
                            <h2 class="inline clr">2 Page check requests</h2>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title:</strong>&nbsp;&nbsp;Naturalisation Certificate: Ho Fu-ling, known as Sapson Ho...<br>
                                <strong>Order item ID: </strong>&nbsp;&nbsp;784985421<br>
                                <strong>Catalogue reference: </strong>&nbsp;&nbsp;HO 334/1987/49434<br>
                                <strong>Instructions: </strong>&nbsp;&nbsp;Usu quas possit periculis ne, prompta vituperatoribus his an, an nulla iriure evertitur eum. Vidisse alienum accusamus ex nec, no mel possit feugait fierent, id altera apeirian nec. In vel paulo soleat, suscipit abhorreant posidonium sea et. Pri fabulas inermis admodum ut, tractatos splendide ad eos.<br>
                                <strong>Price:</strong>&nbsp;&nbsp;&nbsp;£8.24</p>
                            <p><a class="removeLink">Remove</a></p>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title:</strong>&nbsp;&nbsp;Letters from Flag Officer West Africa Squadron<br>
                                <strong>Order item ID: </strong>&nbsp;&nbsp;784985418<br>
                                <strong>Catalogue reference: </strong>&nbsp;&nbsp;ADM 1/1<br>
                                <strong>Instructions: </strong>&nbsp;&nbsp;Ne possim albucius vel, eu vix eius tantas graeco. Homero pericula ullamcorper sed an, ex altera quidam pro. Stet habemus luptatum mea an, mea in sumo constituto consectetuer. Impetus fabellas definitionem ei mea, qui libris nemore et. Pri ex dicit melius detraxit. Te mea ridens dictas.<br>
                                <strong>Price:</strong>&nbsp;&nbsp;&nbsp;£8.24</p>
                            <p><a class="removeLink">Remove</a></p>
                        </div>
                        <div>
                            <h2 class="inline clr">Closed records research request</h2>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title:</strong>&nbsp;&nbsp;James Alcock<br>
                                <strong>Type: </strong>&nbsp;&nbsp;Home Guard<br>
                                <strong>Order item ID: </strong>&nbsp;&nbsp;784985417<br>
                                <strong>Catalogue reference: </strong>&nbsp;&nbsp;WO 409/27/27/27<br>
                                <strong>Price:</strong>&nbsp;&nbsp;&nbsp;£25.00</p>
                            <p><a class="removeLink">Remove</a></p>
                        </div>
                        <div class="grand-total">
                            <h2 class="inline clr"><strong>Total :</strong>&nbsp;&nbsp; £69.48 </h2>
                        </div>
                    </div>
                    <div class="checkout">
                        
                            <div class="button-holder">
                                <input type="submit" value="Purchase" />
                            </div>
                        
                        <a href="details-page.php"
                           class="call-to-action-link secondary">Continue Shopping</a>
                    </div>
                    <?php require_once('worldpay-images.php'); ?>
                </div>
            </div>
        </form>
    </div>
</section>