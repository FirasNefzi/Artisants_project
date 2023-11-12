<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

<body class="w3-content" style="max-width:1300px">

    <!-- First Grid: Logo & About -->
    <div class="w3-row">
        <div class="w3-half w3-black w3-container w3-center" style="height:700px">
            <div class="w3-padding-64">
                <h1>Welcome admin</h1>
                <p>Tnajem thot esmou lehne ken theb.</p>
            </div>
            <div class="w3-padding-64">
                <a href="table_client.php" class="w3-btn w3-btn-block w3-hover-brown w3-padding-16"><i class="fa fa-home"></i> Liste client</a>
                <a href="table_article.php" target="_blank" class="w3-btn w3-btn-block w3-hover-teal w3-padding-16">Liste article</a>
                <a href="table_artisants.php" class="w3-btn w3-btn-block w3-hover-dark-grey w3-padding-16">Liste artisans</a>
                <a href="table_demandes.php" class="w3-btn w3-btn-block w3-hover-brown w3-padding-16">Liste de demandes</a>
            </div>
        </div>
        <div class="w3-half w3-blue-grey w3-container" style="height:700px">
            <div class="w3-padding-64 w3-center">
                <h1>About this page</h1>
                <div class="w3-left-align w3-padding-xxlarge">
                    <p>The admin page is a dedicated space for site administrators. It provides access to various important functionalities. As an administrator, you can manage client information by accessing the client list. You can also review the article list to get an overview of available products. Additionally, the artisans list allows you to track information about partner professionals on the site.</p>
                    <p>Finally, the demands list consolidates all requests submitted by site users. This admin page offers a convenient way to access these different lists, making it easier to efficiently manage your website.</p>
                    <a href="logout.php" class="w3-btn w3-btn-block w3-hover-brown w3-padding-16">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-black w3-padding-16">
        <p>Powered by <a href="home.php" target="_blank">Firas and makky</a>
    </footer>

</body>

</html>