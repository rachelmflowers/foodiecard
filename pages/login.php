<?php include_once("../layouts/partials/header.php"); ?>
<main class="content">
    <div class="container">
        <div id="loginForm_container">
            <h1 class="h2">Login as existing customer</h1>

            <form id="loginForm" class="needsValidation" novalidate>
                <div class="form-group">
                    <label for="email" class="sr-only">Email address</label>
                    <input type="email" class="form-control" id="email"  placeholder="Enter email address" required />
                </div>

                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="password"  placeholder="Enter password" required />
                </div>


                <div class="form-check">
                    <input type="checkbox" id="rememberMe" class="form-check-input" />
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>

                <button class="btn btn-primary" type="submit">Login</button>
            </form>

            Or&nbsp; <a href="/pages/register.php">Create a new account</a> <span> | </span> <a href="">Forgot Password?</a>
        </div>
    </div>

    <?php include_once("../layouts/mailing-list.php"); ?>
</main>


<?php include_once("../layouts/partials/footer.php"); ?>