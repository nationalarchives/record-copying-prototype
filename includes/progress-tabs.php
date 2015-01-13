<div class="progress-tabs">
    <ul role="tablist">
        <li role="tab" id="request-page-check">
            <button>Request a page check</button>
        </li>
        <li role="tab" id="we-check">
            <button>We check</button>
        </li>
        <li role="tab" id="you-choose">
            <button>You choose</button>
        </li>
        <li role="tab" id="we-copy">
            <button>We copy</button>
        </li>
        <li role="tab" id="delivery">
            <button>Delivery</button>
        </li>
    </ul>
    <div aria-labelledby="request-page-check" role="tabpanel">
        <p>Tell us the information you would like to be copied.</p>
        <ul>
            <li>a member of staff will manually check the pages fo the record to determine whether we can
                fulfil the request within 15 minutes
            </li>
            <li>this costs £10 per request, whether it is successful or not, to cover the cost of the page
                check
            </li>
            <li>we will email you within 10 working days to confirm whether we can process the order</li>
            <li>if the page is unsuccessful, we will also confirm the cost of copying, and if it is not, we
                will explain why we are unable to process your order
            </li>
        </ul>
        <div class="button-holder">
            <a href="" class="discoveryPrimaryCallToActionLink" ng-click="togglePageCheckForm()">Get
                started</a>
        </div>
        <?php require_once('includes/start-page-check-form.php'); ?>
    </div>
    <div aria-labelledby="we-check" role="tabpanel">We check</div>
    <div aria-labelledby="you-choose" role="tabpanel">
        <?php require_once('you-choose.php'); ?>
    </div>
    <div aria-labelledby="we-copy" role="tabpanel">We copy</div>
    <div aria-labelledby="delivery" role="tabpanel">Delivery</div>
</div>