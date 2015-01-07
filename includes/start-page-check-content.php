<section class="row" ng-controller="startPageCheck">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">
        <div class="heading-holding-banner">
            <h1><span><span>Start page check</span></span></h1>
        </div>
        <div class="breather">
            <div class="emphasis-block">
                <h2 class="inline">Before you start</h2>
                <p>Please note that the record copying process takes approximately 24 working days from start to finish.</p>
                <p>Once you have given us the details of the records that you would like to copy, we will carry out a page check to determine whether we can process your order. The page check costs £10, to cover the cost of the service, and is non-refundable.</p>
                <p>If the page check is successful, we will email you with a full breakdown of the further cost of copying the record, which will depend upon the number of pages.</p>
                <p>If you choose to go ahead with you order we can send you a copy digitally via email or we can post a hard copy to you.</p>
            </div>
            <div class="progress-tabs">
                <ul role="tablist">
                    <li role="tab" id="request-page-check"><button>Request a page check</button></li>
                    <li role="tab" id="we-check"><button>We check</button></li>
                    <li role="tab" id="you-choose"><button>You choose</button></li>
                    <li role="tab" id="we-copy"><button>We copy</button></li>
                    <li role="tab" id="delivery"><button>Delivery</button></li>
                </ul>
                <div aria-labelledby="request-page-check" role="tabpanel">
                   <p>Tell us the information you would like to be copied.</p>
                    <ul>
                        <li>a member of staff will manually check the pages fo the record to determine whether we can fulfil the request within 15 minutes</li>
                        <li>this costs £10 per request, whether it is successful or not, to cover the cost of the page check</li>
                        <li>we will email you within 10 working days to confirm whether we can process the order</li>
                        <li>if the page is unsuccessful, we will also confirm the cost of copying, and if it is not, we will explain why we are unable to process your order</li>
                    </ul>
                    <div class="button-holder">
                        <a href="" class="discoveryPrimaryCallToActionLink" ng-click="togglePageCheckForm()">Get started</a>
                    </div>
                    <?php require_once('includes/start-page-check-form.php'); ?>
                </div>
                <div aria-labelledby="we-check" role="tabpanel">We check</div>
                <div aria-labelledby="you-choose" role="tabpanel">You choose</div>
                <div aria-labelledby="we-copy" role="tabpanel">We copy</div>
                <div aria-labelledby="delivery" role="tabpanel">Delivery</div>
            </div>
        </div>
    </div>
</section>
