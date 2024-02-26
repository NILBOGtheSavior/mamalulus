<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mama Lulu's</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/reset.css">
    </head>
    <body>
        <header>
            <?php include "includes/header.html" ?>
        </header>
        <main>
            <div id="hero">
                <div class="container">
                    <img src="img/logo.svg" alt="">
                    <a href="" class="btn sec">Catering</a>
                    <a href="menu.php" class="btn prim">Menu</a>
                </div>
            </div>
            <section id="content">
                <h2>Welcome to Mama Lulu's,</h2>
                <p>your passport to Mexican street food bliss! Our food truck brings the authentic flavors of Mexico straight to you. From sizzling carne asada to zesty shrimp tacos, each bite is a burst of bold, fresh flavor. Whether you're grabbing a quick lunch or catering your next event, Mama Lulu's is your go-to for delicious, handcrafted tacos that never disappoint. Join us and let your taste buds embark on a savory adventure!</p>
                <h2>Locations</h2>
                <div id="locations">
                    <div class="info">
                        <p>Discover Mama Lulu's in downtown Chicago, where we roam the streets bringing our delicious tacos to various neighborhoods throughout the week. Follow us on social media for real-time updates on our current location and enjoy our savory delights wherever you are in the city!</p>
                        <div class="selector">
                            <button>West Loop</button>
                            <button>Lake Shore Drive</button>
                            <button>River North</button>
                            <button>Wicker Park</button>
                            <button>Hubbard</button>
                        </div>
                    </div>
                    <div class="map">
                        <div class="base"></div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <?php include "includes/footer.html" ?>
        </footer>
    </body>
</html>