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
        <p>Tell us the information you would like to be copied, so that a member of staff can carry out a page check. This will cost £10. <a href="#">What if I don't know this?</a></p> 
        <div class="button-holder">
            <a href="" class="discoveryPrimaryCallToActionLink" ng-click="togglePageCheckForm()">Get
                started</a>
        </div>
        <?php require_once('includes/start-page-check-form.php'); ?>
    </div>
    <div aria-labelledby="we-check" role="tabpanel">
        <p>A member of staff will manually check the pages of the record to determine whether
        we can fulfil your request. This costs £10 per request, whether it is successful or not,
        to cover the cost of the service.</p>

        <p>We will email you within 10 working days to confirm whether we can make the copy
        that you have requested. If we can, we will also confirm the cost of copying. If we
        cannot, we will explain why we are unable to make a copy.</p>
    </div>
    <div aria-labelledby="you-choose" role="tabpanel">
        <?php require_once('you-choose.php'); ?>
    </div>
    <div aria-labelledby="we-copy" role="tabpanel">
        <p>We copy the records that you have requested. You can track your order at any time through Your orders.</p>
    </div>
    <div aria-labelledby="delivery" role="tabpanel">
        <p>We send your copy to you, by email or by post (depending on the option you have selected).</p>
    </div>
</div>