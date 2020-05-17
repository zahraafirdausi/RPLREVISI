@extends('layouts.main')
@section('title', 'Ezlaundry | Welcome')

@section('container')
<div class="main-banner" id="home">
   <!-- banner -->
   <div class="w3layouts-banner-info">
      <div class="container text-center">
         <div class="style-banner">
            <p class="text-li mb-2">Wash, Dry & Fold</p>
            <h3 class="text-wh font-weight-bold text-uppercase">We Are Expert Cleaner</h3>
         </div>
      </div>
   </div>
   <!-- //banner -->
</div>
<!-- //main -->

<!-- about -->
{{-- <section class="about py-5" id="about">
   <div class="container py-xl-5 py-lg-3">
      <div class="row">
         <div class="col-lg-6 about-left-w3pvt pr-lg-5">
            <h4 class="sub-tittle-w3layouts >Who we are?</h4>
            <h3 class="tittle-w3layouts text-uppercase mt-3">Laundry and Dry <br>Cleaning Services</h3>
            <p class="para-text mt-5">We are the Best Laundry Services <br>est qui dolorem Lorem int ipsum dolor.</p>
         </div>
         <div class="col-lg-6 about-right">
            <p class="mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
               totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
               explicabo.</p>
            <p class="mt-4 mb-5">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit
               amet sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
         </div>
      </div>
   </div>
</section> --}}
<!-- //about -->

<!-- services -->
{{-- <div class="serives-agile pb-5" id="services">
   <div class="container pb-xl-5 pb-lg-3">
      <h3 class="w3ls-title text-center font-weight-bold mb-5 pb-lg-4"><span class="mb-1">What we offer?</span>
         Our Services</h3>
      <div class="row text-center">
         <div class="col-lg-4 services-w3ls-grid">
            <img src="\img\s1.png" alt="" class="img-fluid" />
            <h4 class="mt-lg-5 mt-4 mb-sm-3 mb-2">Service 1</h4>
            <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
         </div>
         <div class="col-lg-4 services-w3ls-grid my-lg-0 my-4">
            <img src="\img\s2.png" alt="" class="img-fluid" />
            <h4 class="mt-lg-5 mt-4 mb-sm-3 mb-2">Service 2</h4>
            <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
         </div>
         <div class="col-lg-4 services-w3ls-grid">
            <img src="\img\s3.png" alt="" class="img-fluid" />
            <h4 class="mt-lg-5 mt-4 mb-sm-3 mb-2">Service 3</h4>
            <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
         </div>
      </div>
   </div>
</div> --}}
<!-- //services -->

<!-- middle section 2 -->
<section class="middle-2 py-3" id="what">
   <div class="row no-gutters">
      <div class="col-xl-6 who-left-w3pvt pt-xl-3">
         <h3 class="w3ls-title font-weight-bold mb-sm-5 mb-4"><span class="mb-3">Wash, Dry & Fold</span>
            Ezlaundry is a service you can trust.</h3>
         <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation.</p>
         <p class="mt-3">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
            aliquid ex ea
            commodi consequatur? Quis autem vel eum iure.</p>
         <div class="row support-bottom mt-5 pt-xl-3 text-center">
            <div class="col-sm-4 services-w3ls-grid-2">
               <i class="fab fa-modx"></i>
               <h4 class="mt-md-4 mt-3">Expert Cleaner</h4>
            </div>
            <div class="col-sm-4 services-w3ls-grid-2 my-sm-0 my-4">
               <i class="fa fa-money-bill-wave-alt"></i>
               <h4 class="mt-md-4 mt-3">Affordable Price</h4>
            </div>
            <div class="col-sm-4 services-w3ls-grid-2">
               <i class="fa fa-truck"></i>
               <h4 class="mt-md-4 mt-3">Express Delivery</h4>
            </div>
         </div>
      </div>
      <div class="col-xl-6 mt-5">
         <img class="img-fluid" src="/img/office.jpg" alt="side image">
      </div>
   </div>
</section>
<!-- //middle section 2 -->

<!-- contact -->
<div class="contact-wthree pb-5" id="contact">
   <div class="container pb-xl-5 pb-lg-3">
      <div class="w3_pvt-contact-top mt-5">
         <h4>get in touch </h4>
         <ul class="d-flex list-unstyled header-wthreelayouts pt-0 flex-column">
            <li>
               <span class="fa fa-home mr-2"></span>
               <p class="d-inline">Institut Pertanian Bogor Dramaga</p>
            </li>
            <li class="my-3">
               <span class="fa fa-envelope-open mr-2"></span>
               <a href="mailto:bimaaulia.15@gmail.com" class="text-secondary">Bimaaulia.15@gmail.com</a>
            </li>
            <li>
               <span class="fa fa-phone mr-2"></span>
               <p class="d-inline">14045</p>
            </li>
         </ul>
      </div>
      <hr>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est reiciendis ipsum dicta iste exercitationem dolorem explicabo consequuntur totam molestiae velit! Aut laboriosam similique sit autem quibusdam suscipit repudiandae quis cumque.</p>
      <!-- map -->
      <div class="map p-2">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31708.82172830459!2d106.70797084152663!3d-6.571720626119625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4b294aba49d%3A0x533530000f77bc38!2sInstitut%20Pertanian%20Bogor%20Dramaga!5e0!3m2!1sid!2sin!4v1589561675727!5m2!1sid!2sin" allowfullscreen></iframe>
      </div>
      <!--// map-->
   </div>
</div>
@endsection
