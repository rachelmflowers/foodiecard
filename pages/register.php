<?php include_once("../layouts/partials/header.php"); ?>
<main class="content">
    <div class="container">
        <div id="registerForm_container">
            <h1 class="h2">Create an account</h1>

            <form id="registerForm" class="needsValidation" novalidate>
                <div class="form-group">
                    <label for="email" class="sr-only">Enter email address</label>
                    <input type="email" class="form-control" id="email"  placeholder="Email address" required />
                </div>

                <div class="form-group">
                    <label for="password" class="sr-only">Enter Password</label>
                    <input type="password" class="form-control" id="password"  placeholder="Password" required />
                </div>

                <div class="form-group">
                    <label for="passwordConfirm" class="sr-only">Confirm Password</label>
                    <input type="password" class="form-control" id="passwordConfirm"  placeholder="Password Confirmation" required />
                </div>

                <div class="form-group">
                    <label for="cellPhone" class="sr-only">Enter cell phone number</label>
                    <input type="tel" class="form-control" id="cellPhone"  placeholder="Cell Phone" />
                </div>


                <div class="form-check">
                    <input type="checkbox" id="textMe" class="form-check-input" />
                    <label class="form-check-label" for="textMe">
                        Text me updates (Yes, I agree to these terms)
                        
                        <svg class="icon" data-toggle="tooltip" data-placement="bottom" title="terms here? or should this be a link?">
                            <use xlink:href="/node_modules/feather-icons/dist/feather-sprite.svg#info"/>
                        </svg>
                    </label>
                </div>

                <button class="btn btn-primary" type="submit">Create Account</button>
            </form>

            <small class="text-muted">By clicking "Create Account" you agree to Foodie Card's <a href="">terms</a> and <a href="">Privacy policy.</a></small>

            <p>or <a href="/pages/login.php">Login as customer</a></p>

            
        </div>
        
   </div>

   <?php include_once("../layouts/mailing-list.php"); ?>
</main>


<?php include_once("../layouts/partials/footer.php"); ?>