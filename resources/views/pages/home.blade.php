@extends('layouts.main')

@section('my_content')

@include('partials.test')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
          <rect width="100%" height="100%" fill="#777"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
              metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#"
                role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
          <rect width="100%" height="100%" fill="#777"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
              metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#"
                role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
          <rect width="100%" height="100%" fill="#777"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
              metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#"
                role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel"
      role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel"
      role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container blog-posts">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-12" style="padding:30px 0; text-align: center;;">
        <h1>Latest Blog Posts</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <div class="card">
          <img src="https://picsum.photos/800/600" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-outline-dark">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="https://picsum.photos/800/600" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-outline-dark">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img src="https://picsum.photos/800/600" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-outline-dark">Go somewhere</a>
          </div>
        </div>
      </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="btn-group mx-auto" style="margin-top:30px">
        <button type="button" class="btn btn-primary">See more</button>
      </div>
    </div>

  </div><!-- /.container -->

  <section class="jumbotron text-center" style="margin-top:100px">
      <div class="container">
        <h1 class="jumbotron-heading">If you wish to contact me</h1>
        <p class="lead text-muted">Your information is secure and encrypted, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim.</p>
        <p>
          <a href="#" class="btn btn-outline-dark my-2">Contact Me</a>
        </p>
      </div>
    </section>

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2019 Company, Inc. · <a href="#">Privacy</a> · <a
        href="#">Terms</a></p>
  </footer>
</main>

@endsection
