@extends('base')
@section('content')
<main class="content">
  <section class="products-grid">
    @foreach ($products as $product)
      @include('partials._adminCard')
    @endforeach

      
  </section>
</main>
@endsection