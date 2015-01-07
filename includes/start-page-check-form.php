<div class="page-check-form" ng-show="data.showPageCheckForm">
    <h2 class="inline">Tell us what you want copied</h2>
    <form method="get" action="page-check-in-basket.php">
        <div class="field-row">
            <label for="catalogue-reference"><strong>Catalogue reference:</strong></label>
            <input class="width-half" id="catalogue-reference" type="text" value="WO 166/500" disabled>
        </div>
        <p>Tell us as much as you can about what you want copied, to help us carry out a successful page check. Where possible, please include:</p>
        <ul>
            <li>Page numbers</li>
            <li>Dates</li>
            <li>Names</li>
        </ul>
        <p>If you do not have this information you may want to try our <a href="#">paid search service</a>, use an independent researcher or
            <a href="#">visit The National Archives</a></p>
        <p>If you need a <a href="#">certified copy</a> for legal reasons please let us know the instructions</p>
        <div class="emphasis-block">
            <h3>Help us carry out a successful page check</h3>
            <p>In 2014, x% of page checks were unsuccessful. Common reasons for this were that:</p>
            <ul>
                <li>the request did not include enough information</li>
                <li>the information could not be found within the allocated time</li>
            </ul>
            <p>To maximise the chance of your page check being successful, please read our <a href="#">recommendations for successful page checks</a>.</p>
        </div>
        <div class="field-row">
            <label for="all-words-records">Instructions for copying</label>
            <textarea name="instructions" id="" cols="30" rows="10" placeholder="Please enter your instructions for copying" required></textarea>
        </div>
        <div class="button-holder">
            <input type="submit" value="Add to basket"/>
        </div>
    </form>

</div>