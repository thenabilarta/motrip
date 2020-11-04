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
        <p>Trip ke dua ujung Amerika Serikat, New York dan California</p>
        <div class="button">
          <button class="btn-primary">Pelajari</button>
          <button class="btn-info">Blog</button>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="image"></div>
      <div class="text">
        <h3>Eropa Barat</h3>
        <p>Jalur trip terbaik Eropa meliputi Swiss, Italia, Prancis, dan Jerman</p>
        <div class="button">
          <button class="btn-primary">Pelajari</button>
          <button class="btn-info">Blog</button>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="image"></div>
      <div class="text">
        <h3>Timur Tengah</h3>
        <p>Perjalanan penuh sejarah ke Jerusalem, Amman, dan laut mati</p>
        <div class="button">
          <button class="btn-primary">Pelajari</button>
          <button class="btn-info">Blog</button>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="image"></div>
      <div class="text">
        <h3>Inggris Raya</h3>
        <p>Pesona klasik Inggris dan Irlandia yang wajib dikunjungi sekali seumur hidup</p>
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