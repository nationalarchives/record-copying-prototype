<div class="you-choose">

    <h2 class="inline">Step 3. You choose</h2>

    <p>We are able to copy the pages you requested from WO 166/500. Please select from the options below to proceed.</p>

    <h3 class="inline">Order summary</h3>

    <div class="grid-within-grid-two-item clr">
        <div>
            <table>
                <caption>Order summary</caption>
                <tr>
                    <th scope="row">Order number</th>
                    <td>RC 000041</td>
                </tr>
                <tr>
                    <th scope="row">Catalogue reference</th>
                    <td>WO 166/500</td>
                </tr>
                <tr>
                    <th scope="row">Pages A3</th>
                    <td>{{ quantities.a3Pages }}</td>
                </tr>
                <tr>
                    <th scope="row">Pages A3+</th>
                    <td>{{ quantities.a3PlusPages }}</td>
                </tr>
                <tr>
                    <th scope="row">Total pages</th>
                    <td>{{ totalPages() }}</td>
                </tr>
            </table>
        </div>
        <div>
            <table>
                <caption>Order summary</caption>
                <tr>
                    <th scope="row">Customer instructions</th>
                    <td>Looking for information related to John Smith from the Reconnaisance Battalion between the dates
                        March and April 1941
                    </td>
                </tr>
                <tr>
                    <th scope="row">Notes to customer</th>
                    <td>All pages can be copied</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="copying-options">
        <h3>
            Copying options (paper or digital)
        </h3>

        <form>
            <fieldset>
                <input value="digital" name="deliveryType" id="digital" type="radio" ng-model="options.deliveryType"
                       ng-change="{{ calculateTotalPrice(options.deliveryType, options.printingOption) }}"/><label
                    for="digital">Digital copy
                    (email delivery)</label>
                <input value="paper" name="deliveryType" id="paper" type="radio" ng-model="options.deliveryType"
                       ng-change="{{ calculateTotalPrice(options.deliveryType, options.printingOption)  }}"/><label
                    for="paper">Paper copy
                    (postal delivery)</label>
            </fieldset>
            <fieldset ng-show="options.deliveryType == 'paper'">
                <h3>Printing options</h3>
                <legend>Printing options</legend>
                <input name="printingOption" value="colour" type="radio" id="colour" type="radio"
                       ng-model="options.printingOption"/><label for="colour">Colour</label>
                <input name="printingOption" value="mono" type="radio" id="mono" type="radio"
                       ng-model="options.printingOption"/><label for="mono">Black and white</label>
            </fieldset>
            <!-- <fieldset ng-show="options.deliveryType == 'paper'">
                <h3>Delivery address</h3>
                <legend>Delivery address</legend>
                <p>Where would you like your copying delivered?</p>

                <div class="field-row">
                    <input name="deliveryAddress" value="stored" type="radio" id="currentAddress"
                           ng-model="options.deliveryAddress"/>
                    <label for="currentAddress">41 Park Road, Richmond, TW1 8UX, United Kingdom</label>
                </div>
                <div class="field-row">
                    <input name="deliveryAddress" value="new" type="radio" id="enterNewAddress"
                           ng-model="options.deliveryAddress"/>
                    <label for="enterNewAddress">Delivery to a different address</label>
                </div>
            </fieldset> -->
            <div class="grid-within-grid-two-item clr" ng-show="options.deliveryAddress == 'new'">
                <div>
                    <fieldset>
                        <legend for="countries">New address</legend>
                        <div class="field-row">
                            <label for="country">Country</label><select name="countries" id="countries" ng-model="options.selectedCountry">
                                <option ng-repeat="country in options.availableCountries" value="{{country}}">
                                    {{country}}
                                </option>
                            </select>
                        </div>
                        <div class="field-row">
                            <label for="house">House or building number</label><input id="house" type="text"/>
                        </div>
                        <div class="field-row">
                            <label for="street">Street name</label><input id="street" type="text"/>
                        </div>
                        <div class="field-row">
                            <label for="county">County</label><input id="county" type="text"/>
                        </div>
                        <div class="field-row">
                            <label for="postcode">Postcode</label><input id="postcode" type="text"/>
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
        <span>Total price of copying is : <strong>{{ totalPrice | currency }}</strong> (Postage will vary according to location)</span>
        <div class="button-holder"><a class="discoveryPrimaryCallToActionLink" href="order-mixed-basket.php">Add to basket</a></div>

    </div>

</div>

