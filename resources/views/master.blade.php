<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
  <style>
      .image1
      {
          border-radius: 20px;
          width:40em;
          height:40em;
          filter: grayscale(60%);
          margin-left: 40px;
      }

      .image2
      {
          border-radius: 20px;
          margin-left: 30px;
          width:40em;
          height:40em;
          filter: grayscale(60%);
      }
      @media (max-width: 400px) {
          .image1{
              width:15em;
              height:15em;
              margin-bottom: 30px;
          }
          .image2{
              width:15em;
              height:15em;
          }

      }
      .image-container {
          position: relative;
      }

      .overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          /*background-color:rgba(245, 245, 220, 0.7); !* Adjust overlay color and opacity *!*/
          color: white; /* Overlay text color */
          padding: 20px;

      }
      .heading{
          font-size: 60px;
          display: flex;
          justify-content: center;
          margin-left: 100px;
      }
      @media (max-width: 400px) {
          .heading{
              font-size: 32px;
              margin-right:100px ;
          }

      }

    .box{
        border: solid ;
        border-width:1px ;
        height: 400px;
        width: 1450px;
        margin-top: 120px;
        margin-left: 80px;
        margin-right: 100px;
        border-radius: 2%;
    }
      .heading1{
          display: flex;
          justify-content: center;
          margin-top: 40px;
          font-size: 40px;

      }
      .para{
          display: flex;
          justify-content: center;
          margin-top: 100px;
          font-size: 20px;
          margin-left: 70px;
          margin-right: 70px;
      }
      @media (max-width: 400px) {

          .box {
              margin-top: 40px;
              border: 1px solid #ccc;
              width: 200px;
              height: 300px;

          }


          .heading1 {
              font-size: 16px;
              color: #333;
              line-height: 1.5;
              margin: 0;
              margin-top: 10px;

          }

          .para {
              margin-top: 20px;
              font-size: 10px;
              margin-left: 20px;
              margin-right: 20px;
          }

      }


      .heading2{
          font-weight: bold;
      }
      @media(max-width: 400px){
          .heading2
      {
         font-size: 20px;
          margin-left: 100px;
      }

          }
      .slider img {
          transition: transform 0.3s; /* Smooth transition */
          /*height: 350px;*/

      }

      /* Hover state styles */
      .slider:hover img {
          transform: scale(1.1); /* Increase size on hover */
      }
      .carousel-inner{
          margin-top: 50px;
          margin-left: 120px;
          margin-right: 50px;
          height: 300px;
          width: 1300px;
      }
      .heading3{
          display: flex;
          justify-content: center;
          margin-top: 150px;
      }
      @media (max-width: 400px) {

          .slider img{
              height: 140px;
              width: 300px;
             margin-left: 10px;
              display: flex;
              justify-content: center;

          }
          .carousel-inner{
              margin-top: 50px;
              margin-left: 10px;
              margin-right: 30px;
              height: 300px;
              width: 300px;
          }
          .heading3{
              display: flex;
              justify-content: center;
              margin-top: 50px;
          }

      }
      .card{
          height: 350px;
          margin-bottom: 30px;

      }
      .heading4{
          display: flex;
          justify-content: left;
          margin-top: 50px;
          margin-left: 70px;

      }
      .mb-3{
          margin-left: 70px;
          height: 100px;
          margin-right: 40px;
      }
      .form-control{
          height: 70px;
          background-color: lightgray;
      }
      .card1{
          width: 40rem;

      }
      @media (max-width: 400px) {
          .card1{
              display: none;
          }

      }
      .card2{
          width: 40rem;
          height: 43rem;

      }
      @media (max-width: 400px) {
          .card2{
              width: 18rem;
              height: 40rem;
              margin-left: 20px;

          }
      }
      .box2 img{
          height: 400px;
          width: 1400px;
          margin-top: 40px;

      }
      @media (max-width: 400px) {
          .box2 img{
              height: 200px;
              width: 300px;
              margin-top: 20px;
              margin-left: 20px;
          }


      }
      .box3 img{
          margin-top: 40px;
          width: 100%;
      }
      @media (max-width: 400px) {

          .box3 img{
              margin-top: 1px;
              width: 400px;
              height: 200px;

          }
      }
      #navbarNav{
          display: flex;
          justify-content: end;

      }
      .text{
          font-size: 20px;
      }
      @media (max-width: 400px) {
          .text{
              font-size: 15px;
          }

           #navbarNav{

            display: none;

          }

      }
      .logo img{
          height: 100px;
      }
      @media (max-width: 400px) {

          .logo img{
              height: 50px;
          }
      }
      .menu{
          font-size: 25px;
      }
      @media (max-width: 400px) {
          .menu{
              font-size: 15px;
          }

      }



  </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container  ">
        <a href="" class="navbar-brand text "><img src="{{asset('/')}}image/phone.png" height="20px"><span class="text">+971-52377-8795</span></a>
        <a href="" class="navbar-brand text"><img src="{{asset('/')}}image/gmail.png" height="20px"><span class="text"> management@exclusiveholidayhomes.ae</span></a>

        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav  ">

                <li class="nav-item">
                    <a class="nav-link me-md-3" href="#"><img src="{{asset('/')}}image/facebook.png" height="30px"></a>
                </li> <li class="nav-item">
                    <a class="nav-link me-md-3" href="#"><img src="{{asset('/')}}image/instagram.png" height="30px"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="{{asset('/')}}image/whatsapp.png" height="30px"></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <a href="" class="navbar-brand logo"><img src="{{asset('/')}}image/logo.jpg"  class="mx-3"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  d-flex justify-content-center" id="navbarSupportedContent">
            <div class="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-3 ">
                    <a class="nav-link active " aria-current="page" href="#"><h4 class="menu text-warning">Exclusive Holiday Homes</h4></a>
                </li>

                <li class="nav-item dropdown mx-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <h4 class="menu">Dubai</h4>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mx-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <h4 class="menu">Bodrum</h4>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="#"><h4 class="menu">About</h4></a>
                </li><li class="nav-item mx-3">
                    <a class="nav-link" href="#"><h4 class="menu">Contact</h4></a>
                </li>

            </ul>
        </div>
    </div>
    </div>
</nav>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        Dropdown--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><hr class="dropdown-divider"></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <form class="d-flex">--}}
{{--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<div class="d-flex justify-content-center mt-5 "><h1 class="heading2">EXCLUSIVE HOLIDAY HOMES</h1></div>


<div class="container mt-5">
    <div class="row">
        <div class=" col-md-6">
            <div class="image-container ">
                <img src="{{asset('/')}}image/1.jpg"  class="image1" alt="Image 1">
                <div class="overlay">
                    <h1 class="heading">Dubai</h1>

                </div>
            </div>
        </div>
        <div class="  col-md-6">
            <div class="image-container mx-3">
                <img src="{{asset('/')}}image/2.jpg"  class="image2" alt="Image 2">
                <div class="overlay">
                    <h1 class="heading">Bodrum</h1>

                </div>
            </div>
        </div>
    </div>
</div>


    <div class="box">
<h2 class="heading1">Your Dream Holiday Home</h2>
        <p class="para">Hi, we are Exclusive Holiday Homes, a licensed short term rental operator based in Dubai. As our name suggests, our properties are exclusive, and truly best in class. We maintain our properties with no expense spared, and look after our guests with their every request. The result is the happiest customers who stay with us time and time again. We provide ongoing support and butler service throughout your stay, effectively filling the gap between luxury hotels and holiday homes.</p>
    </div>
<div class="heading3"><h1>Clients Reviews </h1> </div>
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active ">
            <div class="row">
                <div class="col-md-6 slider">
                    <img src="{{asset('/')}}image/slider1.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="col-md-6 slider">
                    <img src="{{asset('/')}}image/slider2.jpg" class="d-block w-100" alt="Image 2">
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="row">
                <div class="col-md-6 slider">
                    <img src="{{asset('/')}}image/slider1.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="col-md-6 slider">
                    <img src="{{asset('/')}}image/slider2.jpg" class="d-block w-100" alt="Image 2">
                </div>
            </div>
        </div>
        <!-- Add more carousel items as needed -->
    </div>
    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark " aria-hidden="true"></span>
        <span class="visually-hidden ">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="heading3"><h1>Featured Homes </h1> </div>

<div class="container mt-5">
    <div class="row ">
        <div class="col-md-3 ">
            <div class="card">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
                    <img src="{{asset('/')}}image/hotel2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Five Palm Beach Villa with
                            Private Pool</h5>
                        <p class="card-text">Dubai, United Arab Emirates</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
                    <img src="{{asset('/')}}image/hotel5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Five Palm Beach Villa with
                            Private Pool</h5>
                        <p class="card-text">Dubai, United Arab Emirates</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
                    <img src="{{asset('/')}}image/hotel3.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Five Palm Beach Villa with
                            Private Pool</h5>
                        <p class="card-text">Dubai, United Arab Emirates</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
                    <img src="{{asset('/')}}image/hotel2.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Five Palm Beach Villa with
                            Private Pool</h5>
                        <p class="card-text">Dubai, United Arab Emirates</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
                    <img src="{{asset('/')}}image/hotel2.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Five Palm Beach Villa with
                            Private Pool</h5>
                        <p class="card-text">Dubai, United Arab Emirates</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
                    <img src="{{asset('/')}}image/hotel2.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Five Palm Beach Villa with
                            Private Pool</h5>
                        <p class="card-text">Dubai, United Arab Emirates</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
                    <img src="{{asset('/')}}image/hotel2.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Five Palm Beach Villa with
                            Private Pool</h5>
                        <p class="card-text">Dubai, United Arab Emirates</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
                    <img src="{{asset('/')}}image/hotel2.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Five Palm Beach Villa with
                            Private Pool</h5>
                        <p class="card-text">Dubai, United Arab Emirates</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 20rem;">
                    <img src="{{asset('/')}}image/hotel2.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Five Palm Beach Villa with
                            Private Pool</h5>
                        <p class="card-text">Dubai, United Arab Emirates</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="heading3"><h1>Get In Touch With Us</h1> </div>
<div class="container mt-5">
    <div class="row">
        <div class=" col-md-6">
            <div class=" card1 card ">
                <img src="{{asset('/')}}image/image1.jpg" class="card-img-top shadow p-3 mb-5 bg-body rounded" alt="...">

            </div>
        </div>

            <div class=" col-md-6">
                <div class=" card2 card ">
                    <div class="heading4"><h1>Contact Us</h1> </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> </label>
                        <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3">Message</textarea>
                    </div>
                    <div class="mb-3 mt-5">
                        <div class="d-grid gap-2">
                            <button class="btn btn-lg btn-warning" type="button">Send</button>

                        </div>
                    </div>
                </div>
            </div>


    </div>
</div>
<div class="heading3"><h1>Awards Nominees</h1> </div>
<div class="container">
<div class="box2">
    <img src="{{asset('/')}}image/image2.jpg" >
</div>
</div>
<div class="box3 mt-5">
   <img src="{{asset('/')}}image/footer.jpg">
</div>




@yield('body')
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>

