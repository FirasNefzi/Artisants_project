<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="page.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        $(document).ready(function() {
            $(".btn").click(function() {
                $("form").validate();
                if ($("form").valid()) {
                    var tl = new TimelineMax();
                    $(".btn").addClass("spinner");
                    $(".btn").css({
                        backgroundColor: "white",
                        border: "3px solid #EC3A48"
                    });
                    tl.to(".btn", 0.15, {
                        width: "50px",
                        height: "50px",
                        borderRadius: "50%",
                        x: "+=150px",
                        ease: Ease.linear
                    });

                    setTimeout(function() {
                        var tl = new TimelineMax();
                        tl.to(".spinner", 0, {
                            scale: 0.5,
                            ease: Ease.easeOut
                        });
                        $(".btn").removeClass("spinner");
                        $(".btn").html(
                            '<i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i>'
                        );
                        $(".btn").css({
                            backgroundColor: "#EC3A48",
                            border: "none"
                        });
                        $(".btn").prop("disabled", true);
                        tl.to(".btn", 0.25, {
                            scale: 1,
                            ease: Ease.easeIn
                        });
                    }, 4800);
                    return false;
                }
            });
        });
    </script>
</head>

<body>
    <header>
        <nav id="nav">
            <div class="logo nav-common"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412541/E-commerce%20landing%20page/icons/BRANDY_1x.png" alt="brand-logo"></div>
            <ul class="nav-common">
                <li><a href="home.php">home</a></li>
                <li><a href="home.php#products">products</a></li>
                <li><a href="home.php#collections">collections</a></li>
                <li><a href="home.php#contact">contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <div class="cart nav-icon nav-common"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412544/E-commerce%20landing%20page/icons/shopping_cart_1x.png" alt="shopping-cart"></div>
            <div class="menu nav-icon nav-common"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412543/E-commerce%20landing%20page/icons/menu_1x.png" alt="hamburger-menu"></div>
        </nav>
    </header>

    <body>
        <div class="wrapper">
            <div class="sct brand">
                <h3>Linkup</h3>
            </div>
            <div class="sct login">
                <form>
                    <h3>Create account</h3>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="email" name="email" placeholder="nom">
                    <input type="password" name="password" placeholder="Prenom">
                    <div class="forgot-remember">
                        <label class="control control-checkbox">
                            Remember me
                            <input type="checkbox" />
                            <div class="control_indicator"></div>
                        </label>
                    </div>
                    <input type="submit" name="send" value="Send">
                    <p class="text-center">Sign up with<br><i class="fa fa-hand-o-down" aria-hidden="true"></i></p>
                    <div class="social-sign">
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </div>
                </form>
            </div> <!--end login-->
        </div> <!--end wrapper-->
    </body>