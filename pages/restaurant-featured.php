<?php include_once("../layouts/partials/header.php"); ?>
<main class="content" id="restaurantPage">
    <div class="container">
        <section class="restaurant-main">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/pages/our-restaurants.php">Our Restaurants</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Restaurant Name</li>
                </ol>
            </nav>

            <div class="featured-image-hero image-gallery">
                <img src="/images/restaurants/gallery/Photo 1.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 3.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 2.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 6.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 4.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 5.jpg" alt="" />
            </div>

            <nav class="restaurant-page-nav" aria-label="page-nav">
                <a href="#overview" class="active">Overview</a>
                <a href="#contact">Contact</a>
                <a href="#gallery">Photos</a>
            </nav>

            <header class="restaurant-header">
                <h1>Restaurant Name Here</h1>
                <address>404 N Country Rd, Saint James, NY 11787</address>
            </header>

            <div id="overview" class="restaurant-info">
                <span class="restaurant-cost">   
                    <svg class="icon active">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#dollar-sign"/>
                    </svg>  
                    <svg class="icon active">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#dollar-sign"/>
                    </svg>  
                    <svg class="icon">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#dollar-sign"/>
                    </svg>
                </span>

                <span class="restaurant-type badge badge-dark">Italian Cuisine</span>

                <div class="restaurant-tags">
                    Tags: <span class="badge badge-secondary badge-pill">Tag name 1</span> <span class="badge badge-secondary badge-pill">Tag name 2</span> <span class="badge badge-secondary badge-pill">Tag name 3</span>
                </div>

                <div class="restaurant-description">
                    <p>New York City restaurateurs Pietro and Kelly Molendini took over the classic St. James farmhouse turned restaurant. The former co-owners of Vite Vinosteria in Astoria, Queens, who had moved from the city to Centerport, spent the summer renovating the dining room to a modern, clean look with neutral tones and contemporary artwork from Pietro Molendini's native Rome. They also expanded panded the bar from about four to 11 seats.</p>
                </div>

                <div id="contact" class="restaurant-contact">

                    <div class="restaurant-phone"> 
                        <div class="icon-container">
                            <svg class="icon">
                                <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#phone"/>
                            </svg>
                        </div>

                        <a href="tel:6318626129">631.862.6129</a>
                    </div>

                    <div class="restaurant-website"> 
                        <div class="icon-container">
                            <svg class="icon">
                                <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#globe"/>
                            </svg>
                        </div>

                        <a href="http:/www.pietro631.com">www.pietro631.com</a>
                    </div>

                    <div class="restaurant-email"> 
                        <div class="icon-container">
                            <svg class="icon">
                                <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#mail"/>
                            </svg>
                        </div>

                        <a href="mailto:eat@pietro631.com">eat@pietro631.com</a>
                    </div>
                </div>

                <div class="restaurant-location">
                    <div class="google-map">ADD GOOGLE MAP HERE</div>
                    <address>
                        <svg class="icon">
                            <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#map-pin"/>
                        </svg>
                        404 N Country Rd, Saint James, NY 11787
                    </address>
                </div>
            
            </div>

            <h2>Gallery</h2>
            <div id="gallery" class="restaurant-gallery image-gallery">
                <img src="/images/restaurants/gallery/Photo 1.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 3.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 2.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 6.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 4.jpg" alt="" />
                <img src="/images/restaurants/gallery/Photo 5.jpg" alt="" />
            </div>

            <div class="restaurant-video">
                <img src="/images/FoodieTV_placeholder.jpg" alt="" style="max-width: 100%; height: auto;" />
                <p class="h5">Watch Foodie Card TV</p>
            </div>
        </section>

        <aside class="restaurant-side">

            <div class="reservation">
                <h4>Make a reservation</h4>
                <form id="reservation-form">
                    <div class="form-group">
                        <label for="partyNumber" class="sr-only">How many people?</label>
                        <svg class="icon">
                            <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#user"/>
                        </svg>

                        <input type="number" min="2" max="10" name="partyNumber" id="partyNumber" class="form-control" /> people
                    </div>

                    <div class="form-group">
                        <label for="reservationDate" class="sr-only">What day?</label>
                        <svg class="icon">
                            <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#calendar"/>
                        </svg>

                        <input type="date" name="reservationDate" id="reservationDate" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="reservationTime" class="sr-only">What time?</label>
                        <svg class="icon">
                            <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#clock"/>
                        </svg>

                        <input type="time" name="reservationTime" id="reservationTime" class="form-control" />
                    </div>

                    <button type="submit" class="btn btn-warning btn-block">Reserve my Table</button>
                </form>
            </div>
            <hr />
            <div class="fixed">
                <div class="buy-now">
                    <h4>Interested in saving 10%?</h4>

                    <svg class="icon active">
                        <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#chevron-down"/>
                    </svg>  

                    <a href="/pages/purchase.php" class="btn btn-primary btn-block">Buy a Foodie Card</a>
                </div>
            </div>
        
        </aside>
    </div>

    <?php include_once("../layouts/mailing-list.php"); ?>
</main>


<?php include_once("../layouts/partials/footer.php"); ?>