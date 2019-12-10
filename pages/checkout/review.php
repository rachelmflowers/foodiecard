<?php include_once("../../layouts/partials/header.php"); ?>
<main class="content" id="checkoutReview">
    <div class="container">
        <h1>Checkout Review</h1>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Shipping & Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Review</a>
            </li>
        </ul>

        <div class="purchase-info">
            <div class="purchaser-info">
                <p>
                    <strong>Your Information</strong>
                    
                    <address>
                        John Smith<br />
                        New York Street 20<br />
                        53532 NY
                    </address>
                </p>
            </div>
            <div class="recipient-info">
                <p>
                    <strong>Names on Foodie Card</strong>
                </p>
                    
                <ul class="list-unstyled">
                    <li>John Smith</li>
                    <li>Jessica Smith</li>
                    <li>Greg Stevens</li>
                </ul>
            </div>
            <div class="shipping-info">
                <p>
                    <strong>Shipping address</strong>
                </p>
                    
                <address>
                    John Smith<br />
                    New York Street 20<br />
                    53532 NY
                </address>
            </div>
            <div class="payment-info">
                <p>
                    <strong>Payment Method</strong>
                </p>
                    
                <img src="/images/cards/visa.png" alt="visa card" />
                
                <span>
                    Ending in 5555<br />
                    Expires in 01/20
                </span>
            </div>

            <a href="">Edit your order</a>
        </div>

        <div class="purchase-details">
            <dl>
                <dt>Subtotal (1 item)</dt>
                <dd>$29.99</dd>

                <dt>Tax</dt>
                <dd>$2.59</dd>

                <dt>Shipping</dt>
                <dd>Free</dd>

                <dt class="total">Total</dt>
                <dd class="total">$32.58</dd>
            </dl>

            <button type="submit" class="btn btn-primary btn-block">Place Order</button>

            <small>By placing the order, you agree to the <a href="/pages/terms">Terms of Use</a> and <a href="/pages/privacy">Privacy Policy</a>.</small>
        </div>

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