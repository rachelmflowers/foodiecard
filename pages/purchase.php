<?php include_once("../layouts/partials/header.php"); ?>
<main class="content" id="purchasePage">
    <div class="container">
        <div class="product-info">
            <div class="product-image">
                <img src="/images/foodiecard-photo.png" alt="" />
            </div>

            <ul class="product-details">
                <li>For every card sold, a day of meals is donated</li>
                <li>Get 10% off the bill</li>
                <li>Free shipping</li>
                <li>Tons of amazing restaurants</li>
            </ul>
        </div>

        <div class="purchase-options">
            <h1>Foodie Card Annual Membership</h1>
            <p>
                <strong class="text-danger">$29.99</strong>
                Price: 
            </p>
            <hr />
            <a href="/pages/checkout/single-purchase.php" class="btn btn-light btn-block">
                Buy for yourself

                <svg class="icon">
                    <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#chevron-right"/>
                </svg>
            </a>
            <a href="/pages/checkout/gift-purchase.php" class="btn btn-light btn-block">
                Buy for somebody else

                <svg class="icon">
                    <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#gift"/>
                </svg>
            </a>
            <a href="/pages/checkout/multiple-purchase.php" class="btn btn-light btn-block">
                Buy multiple foodie cards

                <svg class="icon">
                    <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#chevron-right"/>
                </svg>
            </a>
        </div>

        <hr />

        <div class="purchase-disclosures">
            <p>
                <strong>Product Details</strong>
                Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui.
            </p>

            <p>
                <strong>Any Restrictions?</strong>
                Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo. Etiam porta sem malesuada magna mollis euismod.
            </p>

            <p>
                <strong>What is the 'Buy A Card, Give a Meal' program?</strong>
                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
            </p>
        </div>
   </div>

   <?php include_once("../layouts/mailing-list.php"); ?>
</main>


<?php include_once("../layouts/partials/footer.php"); ?>