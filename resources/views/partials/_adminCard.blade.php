<div class="product-card">
  <img src="/storage/{{ $product->image }}" alt="{{ $product->name }}">
  <h3>{{ $product->name }}</h3>
  <p>{{ $product->description }}</p>
  <span class="price">{{ $product->price }}FCFA</span>
  <div class="actions">
      <a href="{{ route('product.edit', $product) }}"><button class="edit">Modifier</button></a>
      <form action="{{ route('product.destroy',$product) }}" method="POST" style="display: inline">
        @csrf
        @method("DELETE")
        <button class="delete">Supprimer</button>
    </form>
  </div>
</div>