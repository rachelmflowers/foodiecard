<?php include_once("../layouts/partials/header.php"); ?>
<main class="content" id="becomePartner">
    <div class="container">
        <h1>Let Foodie Card drive new customers to your restaurant</h1>
    </div>

    <section id="bpHero" class="bg-full-image black-overlay">
        <div class="container">
            <div class="hero-text">
                <blockquote class="inverse">
                    <p>Foodie Card is a great partner to Lido Kosher Deli. They’re driving tons of new business and encouraging more consistent visits with our existing customers.</p>

                    <footer>
                        <cite>
                            Wally Goetz, Owner<br />
                            <strong>Lido Kosher Deli</strong>
                        </cite>
                    </footer>
                </blockquote>
            </div>

            <form id="becomePartnerForm">
                <h2 class="h4">Become a Partner Restaurant</h2>

                <div class="form-group" id="restaurantName_field">
                    <label for="restaurantName" class="sr-only">Enter restaurant name</label>
                    <input type="text" name="restaurantName" id="restaurantName" class="form-control" placeholder="Restaurant Name" />
                </div>

                <div class="form-group" id="restaurantAddress_field">
                    <label for="restaurantAddress" class="sr-only">Enter restaurant address</label>
                    <input type="text" name="restaurantAddress" id="restaurantAddress" class="form-control" placeholder="Restaurant Address" />
                </div>

                <div class="form-group" id="contactPerson_field">
                    <label for="contactPerson" class="sr-only">Contact Person's Name</label>
                    <input type="text" name="contactPerson" id="contactPerson" class="form-control" placeholder="Contact Person">
                </div>

                <div class="form-group" id="phone_field">
                    <label for="phone" class="sr-only">Contact's mobile phone number</label>
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Mobile Phone">
                </div>

                <div class="form-group" id="email_field">
                    <label for="email" class="sr-only">Contact's email address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Contact Email">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>

            </form>
        </div>

        <img src="/images/becomePartner-hero.jpg" alt="" class="image-bg" />
    </section>

    <section id="bpContent">
        <div class="incentives">
            <h3>Get More Customers</h3>
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

            <h3>Support a Good Cause</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
        </div>

        <div class="trustedRestaurants">
            <h3>Restaurants that trust us</h3>

            <div class="restaurant-logo">
                <img src="/images/restaurants/logo-matteos.png" alt="Matteos" />
            </div>
            <div class="restaurant-logo">
                <img src="/images/restaurants/logo-bagel-boss.png" alt="Bagel Boss" />
            </div>
            <div class="restaurant-logo">
                <img src="/images/restaurants/logo-huan-taste.png" alt="Huan Taste" />
            </div>
            <div class="restaurant-logo">
                <img src="/images/restaurants/logo-rothmanns.png" alt="Rothmanns" />
            </div>
            <div class="restaurant-logo">
                <img src="/images/restaurants/logo-kitchen-kabaret.png" alt="Kitchen Kabaret" />
            </div>
            <div class="restaurant-logo">
                <img src="/images/restaurants/logo-ok.png" alt="OK" />
            </div>
            <div class="restaurant-logo">
                <img src="/images/restaurants/logo-eat-love-be.png" alt="Eat Love Be" />
            </div>
            <div class="restaurant-logo">
                <img src="/images/restaurants/logo-robkes.png" alt="Robkes" />
            </div>
            <div class="restaurant-logo">
                <img src="/images/restaurants/logo-morrisons.png" alt="Morrisons" />
            </div>
        </div>
    </section>

    <section id="testimonials">
        <div class="testimonial-slider">
            <article class="testimonial">
                <div class="testimonial-content">
                    <blockquote>
                        <p>The awareness we’ve gotten from being a partner with Foodie Card has been immeasurable. It’s the lowest cost per acquisition we’ve seen thus far.</p>

                        <footer>
                            <cite>
                                Lara Talt, Owner<br />
                                <strong>Bell's Kitchen and Smokehouse, Franklin Square, NY</strong>
                            </cite>

                            <a href="">Go to restaurant website</a>
                        </footer>
                    </blockquote>
                </div>

                <div class="testimonial-image">
                    <img src="/images/restaurants/testimonial-image.jpg" alt="" />
                </div>
            </article>
            <article class="testimonial">
                <div class="testimonial-content">
                    <blockquote>
                        <p>The awareness we’ve gotten from being a partner with Foodie Card has been immeasurable. It’s the lowest cost per acquisition we’ve seen thus far.</p>

                        <footer>
                            <cite>
                                Lara Talt, Owner<br />
                                <strong>Bell's Kitchen and Smokehouse, Franklin Square, NY</strong>
                            </cite>

                            <a href="">Go to restaurant website</a>
                        </footer>
                    </blockquote>
                </div>

                <div class="testimonial-image">
                    <img src="/images/restaurants/testimonial-image.jpg" alt="" />
                </div>
            </article>
        </div>
    </section>

    <?php include_once("../layouts/mailing-list.php"); ?>
</main>


<?php include_once("../layouts/partials/footer.php"); ?>