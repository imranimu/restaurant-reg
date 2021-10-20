<style type="text/css">
  .banner .container {
    position: relative;
    height: 100%;
  }

  .banner .banner-content {
    text-align: right;
  }

  .banner-content .gp-btn {
    margin-right: 0;
  }

  .banner .banner-content p {
    margin-bottom: 15px;
  }

  .sl-top::before {
    background: rgba(0, 0, 0, .2);
  }

  .banner .banner-content {
    text-align: center;
  }


  @media only screen and (min-device-width :320px) and (max-device-width :1024px) {
    .banner .banner-content {
      text-align: center;
    }

    .banner .banner-content p {
      font-size: 14px;
    }

    .banner .swiper-slide {
      background-position: 0% 0;
    }

    .sl-top::before {
      background: rgba(0, 0, 0, .4);
    }
  }
</style>


<!-- Modal -->

<div class="modal fade" id="message_pop">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-inner-div">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            <!-- heading -->
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- content -->
        </div>
      </div>
    </div>
  </div>
</div>


<ul class="list-unstyled text-left schema-ul" itemscope itemtype="https://schema.org/Organization"></ul>

<!--==========================-->
<!--=         Banner         =-->
<!--==========================-->
<header class="banner">
  <div class="swiper-container swiper-no-swiping banner-slider" data-swiper-config='{
  "loop": false,
  "speed": 700,
  "autoplay": 4000,
  "pagination":"#banner-swiper-pagination",
  "slidesPerView": 1,
  "parallax": true,
  "nextButton":"#slide-next",
  "prevButton":"#slide-prev",
  "grabCursor": false,
  "paginationClickable": true
}'>

    <div class="swiper-wrapper">
      <div class="swiper-slide sl-top"
        data-bg-image="<?=base_url('media/banner/1.jpg')?>">


        <div class="container">
          <div class="banner-content">
            <h3 class="sub-title" data-animate="fadeInDown">Welcome To</h3>
            <h2 itemprop="name" class="banner-title" data-animate="fadeInDown" data-delay="0.3s"><?=CHEFONLINE_RESTAURANT_NAME?>
            </h2>

            <p data-animate="fadeInUp" data-delay="0.7s">
              Fast Food Takeaway
            </p>

            <a href="<?=CHEFONLINE_MENU_URL;?>"
              class="gp-btn btn-light" data-animate="fadeInUp" data-delay="0.9s">
              Order Online
            </a>

            <!-- <a href="<?=CHEFONLINE_RESERVATION_URL;?>"
            class="gp-btn btn-light" data-animate="fadeInUp" data-delay="0.9s">
            Reservation
            </a> -->

          </div>
          <!-- /.banner-content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.swiper-slide -->

      <div class="swiper-slide sl-top"
        data-bg-image="<?=base_url('media/banner/2.jpg')?>">
        <div class="container">
          <div class="banner-content">
            <h3 class="sub-title" data-animate="fadeInDown">Welcome To</h3>
            <h2 class="banner-title" data-animate="fadeInDown" data-delay="0.3s"><?=CHEFONLINE_RESTAURANT_NAME?>
            </h2>

            <p data-animate="fadeInUp" data-delay="0.7s">
              Fast Food Takeaway
            </p>

            <a href="<?=CHEFONLINE_MENU_URL;?>"
              class="gp-btn btn-light" data-animate="fadeInUp" data-delay="0.9s">
              Order Online
            </a>

            <!-- <a href="<?=CHEFONLINE_RESERVATION_URL;?>"
            class="gp-btn btn-light" data-animate="fadeInUp" data-delay="0.9s">
            Reservation
            </a> -->

          </div>
          <!-- /.banner-content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.swiper-slide -->

      <div class="swiper-slide sl-top"
        data-bg-image="<?=base_url('media/banner/3.jpg')?>">
        <div class="container">
          <div class="banner-content">
            <h3 class="sub-title" data-animate="fadeInDown">Welcome To</h3>
            <h2 class="banner-title" data-animate="fadeInDown" data-delay="0.3s"><?=CHEFONLINE_RESTAURANT_NAME?>
            </h2>

            <p data-animate="fadeInUp" data-delay="0.7s">
              Fast Food Takeaway
            </p>

            <a href="<?=CHEFONLINE_MENU_URL;?>"
              class="gp-btn btn-light" data-animate="fadeInUp" data-delay="0.9s">
              Order Online
            </a>

            <!-- <a href="<?=CHEFONLINE_RESERVATION_URL;?>"
            class="gp-btn btn-light" data-animate="fadeInUp" data-delay="0.9s">
            Reservation
            </a> -->

          </div>
          <!-- /.banner-content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.swiper-slide -->

    </div>
    <!-- /.swiper-wrapper -->


    <div class="swiper-pagination" id="banner-swiper-pagination"></div>

  </div>
  <!-- /.swiper-container -->
</header>
<!-- /.banner -->


<!--=========================-->
<!--=         About         =-->
<!--=========================-->
<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="about-content intro-div m-center">
          <div class="section-title text-left">

            <h1 class="sub-title wow fadeInUp text-justify">
            Best Fast Food Takeaway in Leyton, London
            </h1>

            <h2 class="title wow fadeInUp text-justify" data-wow-delay="0.3s">
            Local Fast Food Takeaway in Leyton, London E10 serving near
            South Woodford E18, Wanstead E11, Walthamstow E17, Stratford E20</h2>
          </div>
          <!-- /.section-title -->


          <p class="wow fadeInUp text-justify" data-wow-delay="0.5s">

            Welcome to Booties Kitchen, the home of the best Fast Food takeaway in Leyton!

            <br><br>

            The best Fast Food takeaway in Leyton, Booties Kitchen can cater to any Fast Food enthusiast's tastes. We provide some of the most excellent Fast Food meals in Leyton, which you can buy online with ChefOnline in just a few clicks. Simply browse the menu, choose your favourites, and check out! You have the option of paying with cash or a credit card. Don't forget to use your delivery and collection discounts! You can reach us at 596 Lea Bridge Rd, Leyton, London E10 7DN.

            <br><br>

            Check out our reviews, where customers praise our dedication to the art of delicate, delicious Fast Food. This simply goes to show how much care and attention we put into every item on our extensive menus, from delicious nibbles and appetizers to Burger & Chips, Cottage Pie, Lasagne, and beyond!

            <br><br>

            <!-- <a href="<?=CHEFONLINE_RESTAURANT_FOODHYGIENE_RATING;?>"
              target="_blank">
              <img
                src="<?=base_url('media/about/h5.jpg')?>"
                alt="Food Hygiene Rate">
            </a> -->

          </p>

        </div>
        <!-- /.about-content -->
      </div>
      <!-- /.col-lg-6 -->

      <div class="col-lg-6 hide-mobile">
        <div class="about-feature-image">

          <div class="img-one" data-parallax='{"y" : 25}'>
            <img
              src="<?=base_url('media/about/1.jpg')?>"
              alt="spice" class="wow fadeInDown">
          </div>

          <div class="img-two" data-parallax='{"y" : -25}'>
            <img
              src="<?=base_url('media/about/2.jpg')?>"
              alt="spice" class="wow fadeInUp">
          </div>
        </div>
        <!-- /.about-feature-image -->
      </div>
      <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</section>
<!-- /.about -->

<style type="text/css">
  @media (max-width: 767px) {

    .online-order-section {
      padding: 0px 0 5px;
    }

    .offer-div2 {
      margin-bottom: 0px !important;
    }

  }
</style>

<!--===========================-->
<!--=      Order Section      =-->
<!--===========================-->
<div class="online-order-section">
  <div class="order-background"></div>
  <div class="container mb-3">

    <div class="row offer-div2 mb-5">
      <div class="col-md-12 text-center">
        <div class="offer-img-div2">
          <img
            src="<?=base_url('media/about/offer.jpg')?>"
            class="offer-image" alt="Order Online">
        </div>
        <div class="offer-content2">
          <h4 class="offer-slogun">
            Order Online 
          </h4>
          <p>
          Order Takeaway From Our Menu 
          </p>
          <a href="<?=CHEFONLINE_MENU_URL;?>"
            class="gp-btn btn-light" data-animate="fadeInUp" data-delay="0.9s">Browse Menu</a>
        </div>

      </div>
    </div>

    <!-- <div class="row offer-div top-offer-div">
      <div class="col-md-12 text-center">

        <div class="offer-img-div">
          <img
            src="<?=base_url('media/about/reservation.jpg')?>"
          class="offer-image" alt="reservation">
      </div>

      <div class="offer-content">
      <h4 class="offer-slogun">
        Book a Table
      </h4>
      <p>
        Enjoy Sumptuous Culinary Experience
      </p>
      <a href="<?=CHEFONLINE_RESERVATION_URL;?>"
        class="gp-btn btn-light" data-animate="fadeInUp" data-delay="0.9s">Reservation</a>
      </div>

      </div>
    </div> -->

</div>
</div><!-- order section end -->

<section class="notice">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h4 class="offer-slogun">
          Free Home Delivery
        </h4>
        <p>
          Within 3 miles radius
        </p>
        <a href="<?=CHEFONLINE_MENU_URL;?>" class="gp-btn btn-light"
          data-animate="fadeInUp" data-delay="0.9s">Order Online</a>
      </div>
    </div>
  </div>
</section>

<style type="text/css">
  .online-order-section.seo-section {
    padding-top: 65px;
    padding-bottom: 65px;
  }

  .seo-text {
    padding: 20px;
    background-color: #fff;
    border: 10px solid #f3f3f3;
  }

  .seo-text p {
    margin-bottom: 0px;
  }
</style>

<div class="online-order-section seo-section">
  <div class="order-background"></div>
  <div class="container">

    <div class="row justify-content-md-center">
      <div class="col-md-12">
        <div class="seo-text">
          <p class="text-justify">

          Browse our extensive menus and order online, or visit 596 Lea Bridge Rd, Leyton, London E10 7DN in person. When you have the fantastic chefs of Booties Kitchen on your side, delicious, one-of-a-kind Fast Food is never far away. Our team can help you with any questions you may have, whether it's a takeaway order, an email, or a phone call. If you live in the vicinity of Leyton, you are welcome to visit us during business hours at the address shown below. For your convenience, we've provided a map, so come on over!

            <br><br>

            So, foodies, what are you waiting for? Check out the cuisine, atmosphere, ambience, and LOVE that personifies the best Fast Food takeaway in Leyton – only at your favourite Booties Kitchen. Take a look at some of the incredible dishes we have in store for you! From the atmosphere to the precise, delicious meals that we create, we promise that every moment you spend within the walls of Booties Kitchen or with our food is faultless. After all, this is the finest Leyton has to offer!

            <br><br>

            Take a look at some of the delicious meals we have prepared for you! From the design to the precise, tasty meals we prepare, we make sure that every moment you spend within the Booties Kitchen walls or with our food is wonderful. After all, this is Leyton's best!


            <br><br>

            Our customers compliment our food and hospitality, as well as the care we take with hygiene and sanitation, proving our commitment to providing you with meals that are not only tasty but also nutritious. Every dish that leaves Booties Kitchen’s kitchen is beautiful, delicious, and fully nutritious since it is created with fresh ingredients, superb, sizzling spices, and then cooked to perfection. We also believe that food has the ability to unite people. From the time you walk in to the moment you leave, our wait staff and servers are knowledgeable, polite, and ready to help you in having the greatest gastronomic experience possible. Our office is dressed out to the nines.


            <br><br>

            We focus on look, flavour, and taste, and Booties Kitchen is well-known as a fantastic takeaway. Check out our gallery, which features a wide range of our products, to see how devoted and outstanding we are. Order online or visit 596 Lea Bridge Rd, Leyton, London E10 7DN to sample Booties Kitchen's renowned and beautiful food! Booties Kitchen is the best Fast Food takeaway in Leyton and can fulfil the preferences of any Fast Food enthusiast. Some of the best Fast Food dishes in Leyton are available, and you can order them with ChefOnline as quickly as you like.

            <br><br>

            Our takeaway is ideal for delicious, high-quality Fast Food. Please let us know what you think. We appreciate any and all types of feedback. After all, what good is Fast Food cuisine if it isn't served in a beautiful setting? Our friendly wait staff will gladly answer any questions you may have, and our experienced support team is always available to help you make the best meal selection possible, tailored to your specific needs.

            <br><br>

            We are always ready to help you with whatever you need, and we would be glad to chat with you at any time. Please do not hesitate to contact us if you have any queries. We serve meals with all of the passion and culture that Fast Food cuisine is known for, so stop by Booties Kitchen at Leyton during any of our business hours.

            <br><br>

            Treat yourself to the best food in Leyton now.

          </p>
        </div>

      </div>

    </div>

  </div>
</div>