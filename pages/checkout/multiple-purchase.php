<?php include_once("../../layouts/partials/header.php"); ?>
<main class="content" id="checkout">
    <div class="container">
        <h1>Checkout</h1>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Shipping & Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pages/checkout/review.php">Review</a>
            </li>
        </ul>

        <form id="purchaseForm">
            <fieldset name="multipleCardNames">
                <legend>Let's add the recipient's details</legend>

                <div class="form-group">
                    <label for="nameOnCard1" class="sr-only">Enter the name to appear on the Foodie card</label>
                    <input type="text" name="nameOnCard1" id="nameOnCard1" placeholder="Name on Foodie Card" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="nameOnCard1" class="sr-only">Enter the name to appear on the Foodie card</label>
                    <input type="text" name="nameOnCard1" id="nameOnCard1" placeholder="Name on Foodie Card" class="form-control" />
                </div>

                <button class="btn btn-link btn-block">
                    <svg class="icon">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#plus-circle"/>
                    </svg>

                    Add another Foodie Card
                </button>

                <button class="btn btn-primary">
                    Next step <!-- I'm confused what this button is for -->
                </button>
            </fieldset>

            <fieldset name="shippingInfo">
                <legend>Where is the Foodie Card going?</legend>

                <div class="form-group">
                    <label for="shippingName" class="sr-only">Enter First and last name</label>
                    <input type="text" name="shippingName" id="shippingName" class="form-control" placeholder="First and Last Name" />
                </div>

                <div class="form-group">
                    <label for="shippingAddress" class="sr-only">Enter street address</label>
                    <input type="text" name="shippingAddress" id="shippingAddress" class="form-control" placeholder="Street Address" />
                </div>

                <div class="form-group">
                    <label for="shippingAddress2" class="sr-only">Optional apartment or suite number</label>
                    <input type="text" name="shippingAddress2" id="shippingAddress2" class="form-control" placeholder="Apt/Suite" />
                </div>

                <div class="input-group">
                    <input type="text" name="shippingCity" id="shippingCity" placeholder="City" class="form-control" aria-label="Enter City" />

                    <select name="shippingState" id="shippingState" class="custom-select">
                        <option disabled selected>State</option>
                        <option value="NY">New York</option>
                    </select>

                    <input type="text" name="shippingZip" id="shippingZip" placeholder="Zip Code" class="form-control" aria-label="Enter Zip Code" />
                </div>
            </fieldset>

            <fieldset name="paymentInfo">
                <legend>Payment Information</legend>

                <div class="form-group">
                    <label for="cardNumber" class="sr-only">Enter street address</label>
                    <input type="number" name="cardNumber" id="cardNumber" class="form-control" placeholder="Card Number" />
                </div>

                <div class="input-group">
                    <input type="text" name="expDate" id="expDate" placeholder="MM/YY" class="form-control" aria-label="Card Expiration Date format mm/yy" />

                    <input type="text" name="cvc" id="cvc" placeholder="CVC" class="form-control" aria-label="Card CVC number" />

                    <input type="text" name="paymentZip" id="paymentZip" placeholder="Zip Code" class="form-control" aria-label="Billing Zip Code" />
                </div>

                <div class="input-group">
                    <input type="text" name="couponCode" id="couponCode" placeholder="Enter coupon code" class="form-control" aria-label="Enter coupon code" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Apply</button>
                    </div>
                </div>
            </fieldset>

            <div class="purchase-details">
                <dl>
                    <dt>Subtotal (1 item)</dt>
                    <dd>$29.99</dd>

                    <dt>Shipping</dt>
                    <dd>Free</dd>

                    <dt class="total">Total</dt>
                    <dd class="total">$29.99</dd>
                </dl>

                <button type="submit" class="btn btn-primary btn-block">Review Order</button>
            </div>
        </form>

        <div class="purchase-help">
            <h2 class="h4">Need help?</h2>
            <p>We’re available by phone (<a href="tel:1-833-366-3432">1-833-366-3432</a>) and email (<a href="mailto:hello@foodiecar.com">hello@foodiecar.com</a>).</p>

            <a href="">
                <span class="icon-container">
                    <svg class="icon">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#help-circle"/>
                    </svg>
                </span>
                FAQ
            </a>

            <a href="tel:1-833-366-3432">
                <span class="icon-container">
                    <svg class="icon">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#phone"/>
                    </svg>
                </span>
                Phone
            </a>

            <a href="mailto:hello@foodiecar.com">
                <span class="icon-container">
                    <svg class="icon">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#mail"/>
                    </svg>
                </span>
                Email
            </a>
            
        </div>
   </div>

   <?php include_once("../../layouts/mailing-list.php"); ?>
</main>


<?php include_once("../../layouts/partials/footer.php"); ?>