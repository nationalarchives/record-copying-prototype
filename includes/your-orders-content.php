<?php require_once('your-orders-breadcrumb.php'); ?>
<div class="row">
    <div class="col ends-at-two-thirds box">
        <div class="heading-holding-banner">
            <h1>
                    <span>
                        <span>
                            Your current orders
                        </span>
                    </span>
            </h1>
        </div>
        <div class="breather basket-contents">
            <h2 class="inline">Record copying</h2>
            <?php if ($state == 'page-check-in-progress') : ?>
                <ul class="basket-item">
                    <li><strong>Number: </strong><span>RC000051</span></li>
                    <li><strong>Status: </strong><span>Page check in progress</span></li>
                    <li><strong>Document reference: </strong><span>WO 166/500</span></li>
                    <li><strong>Document title: </strong>
                        <span>DIVISIONS: 42ND. DIVISION: Reconnaissance Battalion</span></li>
                    <li><strong>Instructions for copying: </strong><span>Looking for information related to John Smith from the Reconnaissance Battalion between the dates March and April 1941.</span>
                    </li>
                    <li><strong>Cost:</strong> <span><?php echo(PAGE_CHECK_PRICE); ?></span></li>
                </ul>
            <?php endif; ?>
            <?php if ($state == 'page-check-completed') : ?>
                <ul class="basket-item">
                    <li><strong>Number: </strong><span>RC000051</span></li>
                    <li><strong>Status: </strong><span>Page check completed</span></li>
                    <li><strong>Document reference: </strong><span>WO 166/500</span></li>
                    <li><strong>Document title: </strong><span>DIVISIONS: 42ND. DIVISION: Reconnaissance Battalion</span></li>
                    <li><strong>Instructions for copying: </strong><span>Looking for information related to John Smith from the Reconnaissance Battalion between the dates March and April 1941.</span>
                    </li>
                    <li><strong>Notes to customer: </strong><span>All pages available for copying</span></li>
                    <li><strong>Cost: </strong><span><?php echo(PAGE_CHECK_PRICE); ?></span></li>
                </ul>
                <div class="button-holder"><a class="discoveryPrimaryCallToActionLink" href="confirm-and-pay.php">Proceed with order</a></div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col ends-at-one-third box">
        <div class="heading-holding-banner">
            <h2><span> <span>Also in this section</span> </span></h2>
        </div>
        <div class="breather">
            <ul class="sibling">
                <li><a class="normal" href="/account/bookmarks">Your bookmarks</a></li>
                <li><a class="normal" href="/account/tags">Your tags</a></li>
                <li><a class="selected" href="/account/currentorders">Your current orders</a></li>
                <li><a class="normal" href="/account/pastorders">Your previous orders</a></li>
                <li>
                    <a href="http://secure.nationalarchives.gov.uk/login/PersonalDetails">Your personal details</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<a href="page-check-completed-successful-email.php">View email sent on completion</a>
