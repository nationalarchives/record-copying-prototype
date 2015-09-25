<?php require_once('page-check-in-basket-breadcrumb.php'); ?>
<section class="row" ng-controller="basketController">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">

        <form action="checkout-abstract.php" method="post">
            <div class="heading-holding-banner">
                <h1>
                    <span>
                        <span> 
                            Review your order
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
                            <p> <strong>Title: </strong>Felix Ruddick<br>
                                <strong>Order item ID: </strong>784985415<br>
                                <strong>Catalogue reference: </strong>WO 409/27/33/804<br>
                                <strong>Email address for digital item: </strong>test@test.com <a><small>Edit</small></a><br>
                                <strong>Price: </strong>£3.00</p>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title: </strong>3rd Infantry Brigade Anti-tank Company<br>
                                <strong>Order item ID: </strong>784985416<br>
                                <strong>Catalogue reference: </strong>WO 33/804/34/1<br>
                                <strong>Email address for digital item: </strong>test@test.com <a><small>Edit</small></a><br>
                                <strong>Price: </strong>£3.00</p>
                        </div>
                        <div>
                            <h2 class="inline clr">2 Page check requests</h2>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title:</strong> Naturalisation Certificate: Ho Fu-ling, known as Sapson Ho...<br>
                                <strong>Order item ID: </strong> 784985421<br>
                                <strong>Catalogue reference: </strong> HO 334/1987/49434<br>
                                <strong>Instructions: </strong> Usu quas possit periculis ne, prompta vituperatoribus his an, an nulla iriure evertitur eum. Vidisse alienum accusamus ex nec, no mel possit feugait fierent, id altera apeirian nec. In vel paulo soleat, suscipit abhorreant posidonium sea et. Pri fabulas inermis admodum ut, tractatos splendide ad eos.<br>
                                <strong>Price:</strong> £8.24</p>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title:</strong> Letters from Flag Officer West Africa Squadron<br>
                                <strong>Order item ID: </strong> 784985418<br>
                                <strong>Catalogue reference: </strong> ADM 1/1<br>
                                <strong>Instructions: </strong> Ne possim albucius vel, eu vix eius tantas graeco. Homero pericula ullamcorper sed an, ex altera quidam pro. Stet habemus luptatum mea an, mea in sumo constituto consectetuer. Impetus fabellas definitionem ei mea, qui libris nemore et. Pri ex dicit melius detraxit. Te mea ridens dictas.<br>
                                <strong>Price:</strong> £8.24</p>
                        </div>
                        <div>
                            <h2 class="inline clr">Closed records research request</h2>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title:</strong> James Alcock<br>
                                <strong>Type: </strong> Home Guard<br>
                                <strong>Order item ID: </strong> 784985417<br>
                                <strong>Catalogue reference: </strong> WO 409/27/27/27<br>
                                <strong>Price:</strong> £25.00</p>
                        </div>
                        <div>
                            <h2 class="inline clr">2 Copy orders</h2>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title:</strong> Naturalisation Certificate: Ho Shu-hing known as Ho Wai...<br>
                                <strong>Order item ID: </strong> 784985420<br>
                                <strong>Catalogue reference: </strong> HO 334/1983/48484<br>
                                <strong>Certified copy: </strong> Yes<br>
                                <strong>Price:</strong> £25.00</p>
                        </div>
                        <div class="basket-item">
                            <p> <strong>Title:</strong> DIVISIONS: 42ND DIVISION: Reconnaissance Battalion<br>
                                <strong>Order item ID: </strong> RC000041<br>
                                <strong>Catalogue reference: </strong> WO 166/500<br>
                                <strong>Price:</strong> £114.00</p>
                        </div>
                        <div class="page-check-form">
                            <h2 class="inline clr">Copy order delivery options</h2>
                            <div class="grid-within-grid-two-item clr">
                                <div>
                                    <legend>Delivery type</legend>
                                    <div class="field-row"><input name="postOrCollect" value="post" type="radio" id="post" ng-model="options.postOrCollect" /><label for="post">Postal delivery</label></div>
                                    <div class="field-row"><input name="postOrCollect" value="collect" type="radio" id="collect" ng-model="options.postOrCollect" /><label for="collect">Collect in person</label></div>
                                    <p ng-show="options.postOrCollect == 'post'">Delivery address:<br>41 Park Road, Richmond, TW1 8UX, UK <a><small>Edit</small></a></p>
                                </div>
                                <div>
                                    <div class="field-row"><input name="postSingleOrCombine" value="single" type="radio" id="single" ng-model="options.postSingleOrCombine" /><label for="single">I want my items fast.</label>
                                        <br><small><span ng-show="options.postOrCollect == 'post'">Ship them individually as they become available.</span>
                                        <span ng-show="options.postOrCollect == 'collect'">Notify me as each item becomes available.</span></small>
                                    </div>
                                    <div class="field-row"><input name="postSingleOrCombine" value="combine" type="radio" id="combine" ng-model="options.postSingleOrCombine" /><label for="combine">Group my items.</label>
                                        <br><small><span ng-show="options.postOrCollect == 'post'">Combine them into as few shipments as possible.</span>
                                        <span ng-show="options.postOrCollect == 'collect'">Notify me when all my items are ready for collection.</span></small>
                                    </div>
                                </div>
                            </div>
                            <div class="button-holder">
                                <a href="#" class="call-to-action-link secondary">Update</a>
                            </div>
                        </div>
                        <div class="total-price">
                            <div class="grand-total" ng-if="options.postOrCollect == 'post' && options.postalType == 'firstClass' && options.postSingleOrCombine == 'single'">
                                <h3 class="inline clr">Sub total : <stong>186.48</stong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>10.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>£196.48</strong> </h2>
                            </div>
                            <div class="grand-total" ng-if="options.postOrCollect == 'post' && options.postalType == 'firstClass' && options.postSingleOrCombine == 'combine'">
                                <h3 class="inline clr">Sub total : <strong>186.48</strong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>5.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>£191.48</strong> </h2>
                            </div>
                            <div class="grand-total" ng-if="options.postOrCollect == 'post' && options.postalType == 'special' && options.postSingleOrCombine == 'single'">
                                <h3 class="inline clr">Sub total : <strong>186.48</strong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>20.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>£206.48</strong>0 </h2>
                            </div>
                            <div class="grand-total" ng-if="options.postOrCollect == 'post' && options.postalType == 'special' && options.postSingleOrCombine == 'combine'">
                                <h3 class="inline clr">Sub total : <strong>186.48</strong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>15.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>£201.48</strong> </h2>
                            </div>
                            <div class="grand-total" ng-show="options.postOrCollect == 'collect'">
                                <h3 class="inline clr">Sub total : <strong>186.48</strong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>0.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>£186.48</strong> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="checkout">
                        
                            <div class="button-holder">
                                <a href="details-page.php" class="call-to-action-link secondary">Continue Shopping</a>
                                <input type="submit" value="Purchase" />
                            </div>
                        

                    </div>
                    <?php require_once('worldpay-images.php'); ?>
                </div>
            </div>
        </form>
    </div>
</section>