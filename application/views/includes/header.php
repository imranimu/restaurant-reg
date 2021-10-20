<!DOCTYPE html>
<html lang="en-GB" prefix="og: http://ogp.me/ns#" class=" js_active  vc_desktop  vc_transform ">

<head>
   <!-- Meta Data -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon"
      href="<?=base_url('favicon.png')?>" />
   <title><?=isset($page_title) ? $page_title : '';?>
   </title>
   <meta name="description"
      content="<?=isset($page_description) ? $page_description : ''; ?>">
   <link rel="canonical" href="<?=base_url(uri_string());?>" />
   <meta name="msapplication-TileColor" content="#823a90">
   <meta name="theme-color" content="#823a90">
   <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700%7CGreat+Vibes&amp;subset=greek"
      rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
   <link
      href="<?=base_url('assets/css/compressed-style.css')?>"
      rel="stylesheet" type="text/css" />
   <link
      href="<?=base_url('assets/css/zoom.css')?>"
      rel="stylesheet" type="text/css" />
   <!-- SEO Data -->
   <?=SEO_GEO_TAG?>
   <!--Start:og tag-->
   <meta property="og:type" content="restaurant.restaurant" />
   <meta property="og:site_name"
      content="<?=CHEFONLINE_RESTAURANT_NAME?>" />
   <meta property="og:url" content="<?=base_url(uri_string());?>" />
   <meta property="og:phone_number"
      content="<?=CHEFONLINE_RESTAURANT_BUSINESS_TEL_OG?>" />
   <meta property="og:latitude"
      content="<?=CHEFONLINE_RESTAURANT_LATITUDE?>" />
   <meta property="og:longitude"
      content="<?=CHEFONLINE_RESTAURANT_LONGITUDE?>" />
   <meta property="og:street-address"
      content="<?=CHEFONLINE_ADDRESS_HOUSE.CHEFONLINE_ADDRESS_DOOR.substr(CHEFONLINE_ADDRESS_ADDRESS1, 0, -2)?>" />
   <meta property="og:locality"
      content="<?=substr(CHEFONLINE_ADDRESS_ADDRESS2, 0, -2);?>" />
   <meta property="og:postal-code"
      content="<?=CHEFONLINE_ADDRESS_POSTCODE;?>" />
   <meta property="og:country-name" content="UK" />
   <meta property="og:title"
      content="<?=isset($page_title) ? $page_title : '';?>" />
   <meta property="og:description"
      content="<?=isset($page_description) ? $page_description : ''; ?>" />
   <!--End:og tag-->
   <?php
         $gMap = common::getGMapSettings();
         ?>
   <script type="application/ld+json">
      {
         "@context": "http://schema.org/",
         "@graph": [{
            "@type": "Restaurant",
            "@id": "<?=base_url()?>",
            "name": "<?=CHEFONLINE_RESTAURANT_NAME?>",
            "image": "<?=base_url('assets/img/main-logo.png')?>",
            "description": "<?=isset($page_description) ? $page_description : ''; ?>",
            "hasmap": {
               "@type": "Map",
               "mapType": "Restaurant",
               "url": "<?=$gMap->key_value?>"
            },

            "priceRange": "££",
            "openingHoursSpecification": [
               <?php
            $counter = 1;
            foreach ($scheduleArr as $scValue):
                if ($counter != 1):
                    echo ','.$scValue;
                else:
                    echo $scValue;
                endif;
                $counter++;
            endforeach;
            ?>
            ],
            "geo": {
               "@type": "GeoCoordinates",
               "longitude": "<?=CHEFONLINE_RESTAURANT_LONGITUDE;?>",
               "latitude": "<?=CHEFONLINE_RESTAURANT_LATITUDE;?>"
            },
            "telephone": "<?=CHEFONLINE_RESTAURANT_BUSINESS_TEL_OG;?>",
            "menu": "<?=CHEFONLINE_MENU_URL;?>",

            "servesCuisine": "<?=CHEFONLINE_RESTAURANT_CUISINE;?>",


            "url": "<?=base_url()?>",

            "sameAs": ["<?=CHEFONLINE_RESTAURANT_FOODHYGIENE_RATING;?>",
               "<?=CHEFONLINE_RESTAURANT_TRIPADVISOR_LINK;?>",
               "<?=CHEFONLINE_RESTAURANT_FACEBOOK_LINK;?>",
               "<?=CHEFONLINE_RESTAURANT_TWITTER_LINK;?>",
               "<?=CHEFONLINE_RESTAURANT_PINTEREST_LINK;?>",
               "<?=CHEFONLINE_RESTAURANT_YOUTUBE_LINK;?>"
            ],
            "contactPoint": {
               "@type": "ContactPoint",
               "telephone": "<?=CHEFONLINE_RESTAURANT_BUSINESS_TEL_OG;?>",
               "contactType": "Customer Service",
               "contactOption": "HearingImpairedSupported",
               "areaServed": "<?=substr(CHEFONLINE_ADDRESS_ADDRESS2, 0, -2)?>, UK",
               "availableLanguage": "English"
            },
            "address": {
               "@type": "PostalAddress",
               "addressCountry": "United Kingdom",
               "addressLocality": "<?=substr(CHEFONLINE_ADDRESS_ADDRESS2, 0, -2)?>",
               "addressRegion": "<?=CHEFONLINE_RESTAURANT_REGION?>",
               "postalCode": "<?=CHEFONLINE_ADDRESS_POSTCODE?>",
               "streetAddress": "<?=CHEFONLINE_ADDRESS_HOUSE.CHEFONLINE_ADDRESS_DOOR.substr(CHEFONLINE_ADDRESS_ADDRESS1, 0, -2)?>"
            },
            "potentialAction": {
               "@type": "OrderAction",
               "target": {
                  "@type": "EntryPoint",
                  "urlTemplate": "<?=CHEFONLINE_MENU_URL;?>",
                  "inLanguage": "en-GB",
                  "actionPlatform": [
                     "http://schema.org/DesktopWebPlatform",
                     "http://schema.org/IOSPlatform",
                     "http://schema.org/AndroidPlatform"
                  ]
               }
            }
         }]


      }
   </script>
</head>

<style type="text/css">
   .site-header {
      background: rgba(255,255,255,.7);
   }

   .site-header .site-main-menu li>a {
      color: #000;
   }

   .top-social-bar {
      background-color: #213a52;
   }

   .toggle-menu .bar {
      background: #000;
   }
</style>

<body id="home-version-1" class="home-version-1" data-style="default">
   <a href="#main_content" data-type="section-switch" class="return-to-top">
      <i class="fa fa-chevron-up"></i>
   </a>
   <div class="page-loader">
      <div class="loader">
         <ul class="loader-cup">
            <li></li>
            <li></li>
            <li></li>
         </ul>
         <div class="wineglass left">
            <div class="top"></div>
         </div>
         <div class="wineglass right">
            <div class="top"></div>
         </div>
      </div>
   </div>
   <!-- /.page-loader -->
   <div id="main_content">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <header class="site-header gp-header-sticky sticky">
         <div class="top-social-bar">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <ul class="footer-social-link">

                        <!--<li><a href="<?=CHEFONLINE_RESTAURANT_TRIPADVISOR_LINK;?>"
                              target="_blank" class="tripadvisor"><i class="fab fa-tripadvisor"></i></a></li>                        

                        <li>
                           <a href="<?=CHEFONLINE_RESTAURANT_FACEBOOK_LINK;?>"
                           target="_blank" class="facebook">
                           <i class="fab fa-facebook-f"></i>
                           </a>
                        </li>

                        <li><a class="twitter"
                              href="<?=CHEFONLINE_RESTAURANT_TWITTER_LINK;?>"
                              target="_blank"><i class="fab fa-twitter"></i></a></li>

                        <li><a class="intagram"
                              href="<?=CHEFONLINE_RESTAURANT_INSTAGRAM_LINK;?>"
                              target="_blank"><i class="fab fa-instagram"></i></a></li>

                        <li><a class="youtube"
                              href="<?=CHEFONLINE_RESTAURANT_YOUTUBE_LINK;?>"
                              target="_blank"><i class="fab fa-youtube"></i></a></li>

                        <li><a class="pinterest"
                              href="<?=CHEFONLINE_RESTAURANT_PINTEREST_LINK;?>"
                              target="_blank"><i class="fab fa-pinterest-p"></i></a></li>

                        -->
                     </ul>
                  </div>
                  <div class="col">
                     <p class="top-phone text-right">
                        <i class="fa fa-phone"></i> <?=CHEFONLINE_RESTAURANT_BUSINESS_TEL;?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="header-inner">
               <div class="site-logo">
                  <a href="<?=base_url();?>" class="logo">
                     <img
                        src="<?=base_url('assets/img/main-logo.png')?>"
                        alt="<?=CHEFONLINE_RESTAURANT_NAME?> logo"
                        class="logo-main">
                     <img
                        src="<?=base_url('assets/img/main-logo.png')?>"
                        alt="<?=CHEFONLINE_RESTAURANT_NAME?> logo"
                        class="logo-sticky">
                  </a>
               </div>
               <!-- /.site-logo -->
               <div class="toggle-menu">
                  <span class="bar"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>
               </div>
               <nav class="site-nav">
                  <div class="close-menu">
                     <i class="ei ei-icon_close"></i>
                  </div>
                  <ul class="site-main-menu">

                     <li>
                        <a href="<?=base_url();?>">
                           Home
                        </a>
                     </li>

                     <li>
                        <a href="<?=CHEFONLINE_MENU_URL;?>">
                           Order Online
                        </a>
                     </li>

                     <!-- <li>
                        <a href="<?=CHEFONLINE_RESERVATION_URL;?>">
                        Reservation
                        </a>
                     </li> -->

                     <li>
                        <a
                           href="<?=base_url('gallery');?>">
                           Gallery
                        </a>
                     </li>

                     <li>
                        <a
                           href="<?=base_url('contact');?>">
                           Contact
                        </a>
                     </li>

                  </ul>
               </nav>
               <!-- /.site-nav -->
            </div>
            <!-- /.heder-inner -->
         </div>
         <!-- /.container -->
      </header>
      <!-- /.site-header -->