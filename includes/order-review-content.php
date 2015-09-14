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
                                    <div ng-show="options.postOrCollect == 'post'">
                                        <legend>Postal type</legend>
                                        <div class="field-row"><input name="postalType" value="firstClass" type="radio" id="firstClass" checked="checked" ng-model="options.postalType" /><label for="firstClass">First class</label></div>
                                        <div class="field-row"><input name="postalType" value="special" type="radio" id="special" ng-model="options.postalType" /><label for="special">Special delivery</label></div>
                                        <legend>Postal type</legend>
                                        <div class="field-row"><input name="postSingleOrCombine" value="single" type="radio" id="postSingle" ng-model="options.postSingleOrCombine" /><label for="postSingle">I want my items fast.</label>
                                            <br>Ship them individually as they become available.</div>
                                        <div class="field-row"><input name="postSingleOrCombine" value="combine" type="radio" id="postCombine" ng-model="options.postSingleOrCombine" /><label for="postCombine">Group my items.</label>
                                            <br>Combine them into as few shipments as possible.</div>
                                    </div>
                                    <div ng-show="options.postOrCollect == 'collect'">
                                        <legend>Postal type</legend>
                                        <div class="field-row"><input name="singleOrCombine" value="single" type="radio" id="single" ng-model="options.singleOrCombine" /><label for="single">I want my items fast.</label>
                                            <br>Notify me as each item becomes available.</div>
                                        <div class="field-row"><input name="singleOrCombine" value="combine" type="radio" id="combine" ng-model="options.singleOrCombine" /><label for="combine">Group my items.</label>
                                            <br>Notify me when all my items are ready for collection.</div>
                                    </div>
                                </div>
                            <div class="button-holder">
                                <a href="#" class="call-to-action-link secondary">Update</a>
                            </div>
                        </div>
                        <div class="total-price">
                            <div class="grand-total" ng-if="options.postOrCollect == 'post' && options.postalType == 'firstClass' && options.postSingleOrCombine == 'single'">
                                <h3 class="inline clr">Sub total : <stong>139.00</stong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>10.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>149.00</strong> </h2>
                            </div>
                            <div class="grand-total" ng-if="options.postOrCollect == 'post' && options.postalType == 'firstClass' && options.postSingleOrCombine == 'combine'">
                                <h3 class="inline clr">Sub total : <strong>139.00</strong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>5.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>144.00</strong> </h2>
                            </div>
                            <div class="grand-total" ng-if="options.postOrCollect == 'post' && options.postalType == 'special' && options.postSingleOrCombine == 'single'">
                                <h3 class="inline clr">Sub total : <strong>139.00</strong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>20.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>159.0</strong>0 </h2>
                            </div>
                            <div class="grand-total" ng-if="options.postOrCollect == 'post' && options.postalType == 'special' && options.postSingleOrCombine == 'combine'">
                                <h3 class="inline clr">Sub total : <strong>139.00</strong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>15.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>154.00</strong> </h2>
                            </div>
                            <div class="grand-total" ng-show="options.postOrCollect == 'collect'">
                                <h3 class="inline clr">Sub total : <strong>139.00</strong> </h3><br>
                                <h3 class="inline clr">Postage and packing : <strong>0.00</strong> </h3><br>
                                <h2 class="inline clr">Total : <strong>139.00</strong> </h2>
                            </div>
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