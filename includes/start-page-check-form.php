<div class="page-check-form" ng-show="data.showPageCheckForm">
    <h2 class="inline">Tell us what you want copied</h2>

    <form method="get" action="page-check-in-basket.php">
        <div class="field-row">
            <label for="catalogue-reference"><strong>Catalogue reference:</strong></label>
            <input class="width-half" id="catalogue-reference" type="text" value="WO 166/500" disabled>
        </div>
        <p>Please tell us as much as you can about what you want copied. Where possible, please include page numbers,
            dates and names.</p>

        <p>In 2014, x% of page checks that we carried out revealed that we were not able to copy the information that
            had been requested. The main two reasons for this were that:</p>
        <ul>
            <li>The request did not include enough information</li>
            <li>The requested information did not match the document structure</li>
        </ul>

        <p>To maximise the chance of your page check request being successful please read our <a href="#">recommendations
                for successful page checks</a>.</p>

        <h3>What should I do if I don't have this information?</h3>

        <p>You may want to try our <a href="#">paid search service</a> or <a href="">visit The National Archives</a>.
        </p>

        <p>Alternatively, <a href="">hiring an independent paid researcher</a> might be cheaper.</p>

        <p>If you need a certified copy for legal reasons please let us know in the instructions</p>

        <div class="field-row">
            <input type="checkbox" id="certified"/><label for="certified">Certified copy</label>
        </div>
        <div class="field-row">
            <label for="all-words-records">Instructions for copying</label>
            <textarea name="instructions" id="" cols="30" rows="10"
                      placeholder="Tell us, in as much detail as possible, what you would like to be copied."></textarea>

            <p></p>
        </div>
        <div class="button-holder">
            <input type="checkbox" id="confirm-terms" ng-model="data.termsAccepted"/><label for="confirm-terms">I accept the <a href="http://www.nationalarchives.gov.uk/legal/recordcopying.htm" target="_blank">terms and conditions</a></label>
            <input type="submit" value="Add to basket" ng-disabled="!data.termsAccepted"/>
        </div>
    </form>

</div>