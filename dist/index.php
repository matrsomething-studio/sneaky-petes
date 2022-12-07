<?php
    session_start();
    
    if (!isset($_SESSION['user'])) {
        header('Location: ./api/login.php');
        exit;
    } 
?>

<!DOCTYPE html>
<html xml:lang="en-US" lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">

<head>
    <meta name="robots" content="noindex, nofollow" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="canonical" href="https://sneaky.lol/">
    <title>Welcome - Sneaky Petes</title>
    <meta name="description" content="Sneaky Pete’s is a well hidden, underground comedy club nesstled in downtown San Luis Obispo, California. We boast sellout, attentive crowds while filming your performance with 4k cameras for your use, as we do not publicize our venue, shows, nor experience. This website is for your eyes only, please. We keep everything SNEAKY around these parts!">
    <meta property="og:title" content="Sneaky Petes">
    <meta property="og:description" content="Sneaky Pete’s is a well hidden, underground comedy club nesstled in downtown San Luis Obispo, California. We boast sellout, attentive crowds while filming your performance with 4k cameras for your use, as we do not publicize our venue, shows, nor experience. This website is for your eyes only, please. We keep everything SNEAKY around these parts!">
    <meta property="og:url" content="https://sneaky.lol/">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="https://sneaky.lol/assets/images/meta/og.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sneaky Petes">
    <meta name="twitter:site" content="@Sneaky Petes">
    <meta name="twitter:card" content="summary_large_image">
    <link href="./assets/built/styles/main.built.css" rel="stylesheet">
</head>

<body class="page theme-dark ">
    <main id="main">
        <section class="section section-hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Sneaky Pete's</h1>
                    </div>

                    <div class="col-lg-12 col-xl-9 ml-auto mr-auto">
                        <p>Welcome to your new favorite comedic playground. Sneaky Pete’s is a well hidden, underground comedy club nesstled in downtown San Luis Obispo, California. We boast sellout, attentive crowds while filming your performance with 4k cameras for your use, as we do not publicize our venue, shows, nor experience. This website is for your eyes only, please. We keep everything SNEAKY around these parts!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-venue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section with-border">
                            <span>The Room</span>
                        </h2>
                    </div>

                    <div class="col-md-6">
                        <img class="venue-image" src="./assets/images/overview/gallery_bartender.jpg">
                        <p class="venue-caption">Open Bar &amp; Custom Cocktails</p>
                    </div>

                    <div class="col-md-6">
                        <img class="venue-image" src="./assets/images/overview/gallery_stage.jpg">
                        <p class="venue-caption">Intimate Room fits 80 patrons</p>
                        <img class="venue-image" src="./assets/images/overview/gallery_hey_man.jpg">
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-comedians">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section with-border">
                            <span>Some of the talented performers to&nbsp;date</span>
                        </h2>
                    </div>

                    <div class="col-md-12">
                        <div class="comendian-lineup">
                            <ul>
                                <li>Saul Trujillo</li>
                                <li>Ryan Goodcase</li>
                                <li>Justin James</li>
                                <li>Liv Doty</li>
                                <li>Rick Storer</li>
                                <li>Michael Duncan</li>
                                <li>Eric Freedman</li>
                            </ul>
                        </div>

                        <div class="comendian-lineup">
                            <ul>
                                <li>Orion Levine</li>
                                <li>Xander Beltrain</li>
                                <li>Chris Williams</li>
                                <li>Ernie Romero</li>
                                <li>Nick Malizia</li>
                                <li>Sam Goldstein</li>
                                <li>Divesh Patel</li>
                            </ul>
                        </div>

                        <div class="comendian-lineup">
                            <ul>
                                <li>Joe Praino</li>
                                <li>Kil Theodrick</li>
                                <li>Nikki Bon</li>
                                <li>Kyle Anderson</li>
                                <li>Ben Herwitz</li>
                                <li>Jay Light</li>
                                <li>Danny Dunn</li>
                            </ul>
                        </div>

                        <div class="comendian-lineup">
                            <ul>
                                <li>Monarey Martinez</li>
                                <li>Sean Reilly</li>
                                <li>Tufan Nadjafi</li>
                                <li>Stormy Silva</li>
                                <li>Brett Dodenhoff</li>
                                <li>Bryson Banks</li>
                                <li>Cori Ramsay</li>
                            </ul>
                        </div>

                        <div class="comendian-lineup">
                            <ul>
                                <li>Ralph Guerra</li>
                                <li>Hannah Rose</li>
                                <li>Issiah Castillo</li>
                                <li>Rob Pugliese</li>
                                <li>Dylan Fisher</li>
                                <li>Adian Candalario</li>
                                <li>Kelsie Rae</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-moments">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section">
                            <span>Check Out Some Fun&nbsp;Moments</span>
                        </h2>
                    </div>

                    <div class="col-md-4">
                        <div class="moment-record">
                            <img src="./assets/images/overview/comedian_kit_theodrick.jpg">
                            <p>Kil Theodrick</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="moment-record">
                            <img src="./assets/images/overview/comedian_bill_herwitz.jpg">
                            <p>Ben Herwitz</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="moment-record">
                            <img src="./assets/images/overview/comedian_joe_praino.jpg">
                            <p>Joe Praino</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-specs">
            <div class="bkgd-red-grad">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="heading-section">
                                <span>Now the Question is, Why should I Perfrom at&nbsp;Sneaky’s?</span>
                            </h2>
                        </div>

                        <div class="col-md-10 ml-auto mr-auto">
                            <p>We’ve pulled out all the smoke and mirrors to make our room the best comedy experience. Starting with an invite-only event, our audience is here for comedy alone. Additionally, we are not telling the crowd who’s performing, so it’s a complete surprise when we bring you out of the side door. This room is a unqiue spot where you can bring your best but also have the full freedom to play and create with a hot room. We give you as much time as you want, it will be filmed accordingly (only for you to have), with entrance and exit footage. <strong>Content is King!</strong> To top it off, we have an apartment above the room for your stay and for pre/post show lounging, which has a private bedroom and bathroom.</p>
                        </div>


                        <div class="col-md-12">
                            <p class="disclaimer">
                                <strong><em>We’ll also make sure no one records / takes photos so you have full access to our unique footage.</em></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-fremont">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="heading-section">
                            <span>But Wait...There’s More! Introducing the Fremont&nbsp;Theater</span>
                        </h2>
                    </div>

                    <div class="col-md-12">
                        <img src="./assets/images/overview/fremont.jpg">
                    </div>

                    <div class="col-md-10 ml-auto mr-auto">
                        <p>Our local 900 patron venue, The Fremont Theater, has granted us access to encourage your show to have a Sneaky’s date along with a large theater show. This isn’t mandatory, but if you would like to get 2 shows back to back, we can make it happen. We’d love to discuss details when you’re ready to get 2 great shows dialed.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" data-mr-component="footer">
        <div class="container sign-up">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section with-border">
                        <span>Are you Ready to be a part of the Sneaky&nbsp;Family?</span>
                    </h2>
                    <p>We can 100% guarnatee this spot is not going to last. Eventually the city, fire department, or the cops will stumble upon the best kept secret, and we’ll most likely be forced to have have these shows anymore. So don’t wait! Book a show with Ernie today, as we’re filling up the 2023 calendar very fast. We put on shows once a month, but will make opportunities to fit your touring schelde, etc.</p>
                    <p>Thanks for checking it out - keep it Sneaky!</p>
                    <a href="mailto:sneakyrsvp@gmail.com?subject=Something Sneaky This Way Comes">Email Sneaky's</a>
                </div>

                <div class="col-md-12">
                    <img class="footer-logo" src="./assets/images/overview/footer_logo.jpg">
                </div>
            </div>
        </div>
        <div class="container-fluid byline">
            <div class="row">
                <div class="col-md-12">
                    <p>built by the Sneaky Team - Live Photos by Booker.photo - keep this a secret - don’t ruin it for everyone!</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="./assets/built/scripts/main.built.js" defer></script>
</body>

</html>