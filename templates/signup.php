<!DOCTYPE html>

<!-- The template for the signup page was taken from this bootstrap login form provider:
* https://freefrontend.com/bootstrap-login-forms/
* https://codepen.io/AlexXxCornejo/pen/mjMNPQ
-->
<html>
    <head>
        <meta charset="UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Signup</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
        <link rel="stylesheet" type="text/css" href="./styles/login_signup.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./scripts/credentialValidate.js"></script>
    </head>
    <body class="main-bg">
        <?php 
            #include "navbar.php";
        ?>
        <div class="login-container text-c animated flipInX">
            <?php
                if (!empty($error_msg)) {
                    echo "<div class='alert alert-danger'>$error_msg</div>";
                }
            ?>
                <div>
                    <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
                </div>
                    <h3 class="text-whitesmoke">Register an account</h3>
                    <p class="text-whitesmoke">Fill out every field.</p>
                <div class="container-content">
                    <form action="?command=signup" method ="POST" class="margin-t">
                        <br>
                        <div class="form-group">
                            <input required type="text" class="form-control" id="name" placeholder="Name (i.e. Jane Doe)" name="name" >
                            <div id="nmhelp" style="color: white" class="form-text"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input placeholder="School Year (1-4)" type="number" max="4" min="1" class="form-control" name="year" id="year" required value="" />  
                         </div>
                         <br>
                        <div class="form-group">
                            <input required type="text" class="form-control" id="major" placeholder="Major" name="major" >
                        </div>
                        <br>
                        <div class="form-group">
                            <input required type="text" class="form-control" id="minor" placeholder="Minor" name="minor" >
                        </div>
                        <br>
                        <div class="form-group">
                            <input required type="text" class="form-control" id="studentId" placeholder="Student ID (i.e. lj3ms1)" name="studentId" >
                            <div id="emhelp" style="color: white" class="form-text"></div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input required type="password" name="password" id="password" class="form-control" placeholder="Password" >
                            <div id="pwhelp" style="color: white" class="form-text"></div>
                        </div>
                        <br>
                        <button id="submit" type="submit" class="form-button button-l margin-b">Sign Up</button>
                    </form>
                    <p class="text-whitesmoke text-center"><small>Already have an account?</small></p>
                    <a class="text-darkyellow" href="?command=login"><small>Sign In</small></a>
                    <p class="margin-t text-whitesmoke"><small> App Name Here &copy; 2022</small> </p>
                </div>
            </div>
            <br><br><br>

        <?php 
            #include "footer.php";
        ?>
        <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
        ></script>
        <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
        ></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
        ></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"
        ></script>
</body>
</html>