      <style>
        .order-button-wrap {
          font-size: 15px;
          position: relative;
          text-align: center;
          width: 150px;
          z-index: 1;
          margin-top: 15px;
          margin-bottom: 20px;
        }

        .order-button-wrap a {
          background: #E40425 none repeat scroll 0 0;
          color: #ffffff !important;
          display: block;
          margin: 0 auto;
          padding: 10px;
          text-decoration: none;
          width: 120px;
          transition: all 0.3s ease;
        }

        .order-button-wrap a:hover {
          background: #E40425;
        }

        .order-button-wrap a::after {
          border: 1px solid #E40425;
          bottom: 5px;
          content: "";
          left: 20px;
          position: absolute;
          right: 20px;
          top: 5px;
        }
      </style>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section id="page-banner">
        <div class="banner-top"
          data-bg-image="<?=base_url('media/background/about.jpg')?>">
          <div class="container">
            <div class="page-banner-title">
              <h1 class="title">A La Carte Menu</h1>
            </div>
            <!-- /.page-banner-title -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.banner-top -->
        <div class="breadcrumb-wrapper">
          <div class="container">
            <div class="breadcrumb-inner">
              <div class="home-link">
                <a href="<?=base_url();?>"><i
                    class="ei ei-icon_house_alt"></i></a>
              </div>

              <ul class="site-breadcrumb">
                <li><a href="<?=base_url();?>">Home</a></li>
                <li>A La Carte Menu</li>
              </ul>
            </div>
            <!-- /.breadcrumb-wrapper -->
          </div>
          <!-- /.container -->
        </div>
      </section>
      <!-- /#page-banner -->


      <!--=======================-->
      <!--=         Content     =-->
      <!--=======================-->
      <section class="about-two section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <iframe
                src="<?=base_url('media/about/a-la-carte.pdf')?>"
                frameborder="1" width="100%" height="750"
                class="d-sm-none d-none d-md-block d-lg-block d-xl-block"></iframe>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 d-block d-sm-block d-md-none d-lg-none d-xl-none">
              <h5 class="text-center">Please feel free to download our A LA CARTE MENU</h5>
              <div class="order-button-wrap d-block mx-auto">
                <a href="<?=base_url('media/about/a-la-carte.pdf')?>"
                  target="_blank">Download</a>
              </div>
            </div>
          </div>
        </div>

      </section>