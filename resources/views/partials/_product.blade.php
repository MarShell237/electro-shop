<div class="product-card" data-category="smartphones">
  {{-- @dd($product) --}}
  <img src="/storage/{{ $product->image }}" alt="{{ $product->name }}">
  <h3>{{ $product->name }}</h3>
  <p>{{ $product->description }}</p>
  <span class="price">{{ $product->price }} FCFA</span>
  <a href="https://wa.me/237695947432?text={{ urlencode('Bonjour, je souhaite acheter ce produit.
    Nom: ' . $product->name . '
    Prix: ' . $product->price . ' FCFA
    Description: ' . $product->description . '
    Image: ' . url('/storage/' . $product->image) ) }}"
    target="_blank"
    class="btn">
      Acheter sur WhatsApp
  </a>
</div>