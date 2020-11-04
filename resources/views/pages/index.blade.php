@extends('layouts.app')

@section('content')
<main>
  <div id="skyscanner" data-skyscanner-widget="SearchWidget" data-destination-name="'Edinburgh'"
    data-origin-name="'Jakarta'" data-button-text-size="1">
  </div>

  <div class="card-container">
    <div class="card">
      <div class="image"></div>
      <div class="text">
        <h3>Amerika Serikat</h3>
        <p>Amerika adalah tempat terbaik untuk dikunjungi</p>
        <div class="button">
          <button class="btn-primary">Pelajari</button>
          <button class="btn-info">Blog</button>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="image"></div>
      <div class="text">
        <h3>Amerika Serikat</h3>
        <p>Amerika adalah tempat terbaik untuk dikunjungi</p>
        <div class="button">
          <button class="btn-primary">Pelajari</button>
          <button class="btn-info">Blog</button>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="image"></div>
      <div class="text">
        <h3>Amerika Serikat</h3>
        <p>Amerika adalah tempat terbaik untuk dikunjungi</p>
        <div class="button">
          <button class="btn-primary">Pelajari</button>
          <button class="btn-info">Blog</button>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="image"></div>
      <div class="text">
        <h3>Amerika Serikat</h3>
        <p>Amerika adalah tempat terbaik untuk dikunjungi</p>
        <div class="button">
          <button class="btn-primary">Pelajari</button>
          <button class="btn-info">Blog</button>
        </div>
      </div>
    </div>
  </div>

  <div class="testimonial-container">
    <i class="fas fa-chevron-left"></i>
    <i class="fas fa-chevron-right"></i>
    <h2>Testimoni</h2>
    <div class="testimonial-slider">
      <img src="img/testimonial/ajenk.png" alt="">
      <p class="testimonial-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur ullam
        magni eos voluptate laborum
        minus sit. Ratione ad recusandae accusamus dolorem soluta quos commodi necessitatibus impedit. Perferendis, id
        quibusdam.</p>
      <div class="author">
        <h3>Lorem, ipsum.</h3>
        <h3>Traveler</h3>
      </div>
    </div>
  </div>
</main>

<script src="https://widgets.skyscanner.net/widget-server/js/loader.js" async></script>
@endsection