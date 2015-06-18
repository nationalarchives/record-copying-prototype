<section class="row" ng-controller="startCertifiedCopy">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">
        <div class="heading-holding-banner">
            <h1><span><span>Certified copy</span></span></h1>
        </div>
        <div class="breather">
            <div class="emphasis-block">
                <h2 class="inline">Would you like a certified copy?</h2>

                <p><strong>What is a certified copy?</strong></p>
                <p>A photocopy which is authenticated by us as a copy of a public record and stamped with the seal of the Public Record Office. It can be used in evidence in legal proceedings in place of the original record. Please note that a certified copy from the National Archives is not confirmation of the authenticity of the information shown on it. It is not evidence of identity and should not be used as evidence of the event.</p>
                <p><strong>How much does it cost?</strong></p>
                <p>Certified copies cost £25.00 plus postage and packing.</p>
                <p><strong>How long does it take?</strong></p>
                <p>Certified copies take up to 5 working days.</p>

            </div>
            <div role="tabpanel">
                <p>A certified copy will cost &pound;25.00 plus postage and packing.</p> 
                <div class="button-holder">
                    <a id="get-started" class="discoveryPrimaryCallToActionLink" ng-click="toggleCertifiedCopyForm()">Yes, I would like a certified copy</a>
                    <a id="get-started" class="discoveryPrimaryCallToActionLink">No thank you</a>
                </div>
                <div class="certified-copy-form" ng-show="data.showCertifiedCopyForm">
                    <h2 class="inline">Certified copy form</h2>

                    <form method="get" action="page-check-in-basket.php">
                        <div class="field-row">
                            <label for="catalogue-reference"><strong>Index reference number:</strong></label>
                            <input class="width-half" id="catalogue-reference" type="text" value="HO 334">
                        </div>
                        <div class="clr">
                            <div>
                                    <legend for="countries">Delivery address</legend>
                                    <div class="field-row">
                                        <label for="country">Country</label><select name="countries" id="countries" ng-model="options.selectedCountry">
                                            <option ng-repeat="country in options.availableCountries" value="{{country}}">
                                                {{country}}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="field-row">
                                        <label for="house">House or building number</label><input id="house" type="text" class="width-half"/>
                                    </div>
                                    <div class="field-row">
                                        <label for="street">Street name</label><input id="street" type="text" class="width-half"/>
                                    </div>
                                    <div class="field-row">
                                        <label for="county">County</label><input id="county" type="text" class="width-half"/>
                                    </div>
                                    <div class="field-row">
                                        <label for="postcode">Postcode</label><input id="postcode" type="text" class="width-half"/>
                                    </div>
                            </div>
                        </div>
                        <div class="button-holder">
                            <input type="submit" value="Add to basket" />
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
