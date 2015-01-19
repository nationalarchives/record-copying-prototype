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
            Copying options
        </h3>
        <form>
            <fieldset>
                <input value="digital" name="deliveryType" id="digital" type="radio" ng-model="options.deliveryType"
                       ng-change="{{ calculateTotalPrice(options.deliveryType, options.printingOption) }}"/><label for="digital">Digital copy
                    (email delivery)</label>
                <input value="paper" name="deliveryType" id="paper" type="radio" ng-model="options.deliveryType"
                       ng-change="{{ calculateTotalPrice(options.deliveryType, options.printingOption)  }}"/><label for="paper">Paper copy
                    (postal delivery)</label>
            </fieldset>
            <fieldset ng-show="options.deliveryType == 'paper'">
                <h3>Printing options</h3>
                <legend>Printing options</legend>
                <input name="printingOption" value="colour" type="radio" id="colour" type="radio" ng-model="options.printingOption" /><label for="colour">Colour</label>
                <input name="printingOption" value="mono" type="radio" id="mono" type="radio" ng-model="options.printingOption" /><label for="mono">Black and white</label>
            </fieldset>
        </form>
        <span>Total price is : <strong>{{ totalPrice | currency }}</strong></span>

    </div>

</div>

