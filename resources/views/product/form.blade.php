@extends('base')

@section('content')
<link rel="stylesheet" href="/styles/da.css">
<link rel="stylesheet" href="/styles/login.css">
<div class="container">
  <div class="form-container">
      <h2>{{ $product->exists ?  'Modifier' : 'Ajouter'}} un Produit</h2>
      <form action="{{ route($product->exists ? 'product.update' : 'product.store',$product) }}" method="POST" enctype="multipart/form-data">
        @method($product->exists ? 'PUT' : 'POST')
        @csrf
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
          <!-- Nom du produit -->
          <div class="input-group">
              <label for="product-name">Nom du produit</label>
              <input type="text" id="product-name" name="name" placeholder="Entrez le nom du produit" value="{{ $product->name }}">
              <div class="error-message" id="product-name-error">Ce champ est requis.</div>
          </div>

          <!-- Photo du produit -->
          <div class="input-group">
              <label for="product-photo">Photo du produit</label>
              <input type="file" id="product-photo" name="image">
              <div class="error-message" id="product-photo-error">Veuillez ajouter une photo.</div>
          </div>
          <!-- Description du produit -->
          <div class="input-group">
              <label for="product-description">Description du produit</label>
              <textarea id="product-description" name="description" placeholder="Entrez la description du produit">{{ $product->description }}</textarea>
              <div class="error-message" id="product-description-error">Ce champ est requis.</div>
          </div>

          <!-- Prix du produit -->
          <div class="input-group">
              <label for="product-price">Prix du produit</label>
              <input type="number" id="product-price" name="price" placeholder="Entrez le prix du produit" value="{{ $product->price }}">
              <div class="error-message" id="product-price-error">Ce champ est requis.</div>
          </div>

          <!-- Catégorie du produit -->
          <div class="input-group">
              <label for="product-category">Catégorie du produit</label>
              <select id="product-category" name="category_id">
                  <option value="">Sélectionnez une catégorie</option>
                  @php
                    $productName = $product->exists ? $product->category->name : ''; 
                  @endphp
                  @foreach ($categories as $id=> $category)
                      <option value="{{ $category->id }}" @selected($productName == $category->name)>{{ $category->name }}</option>
                  @endforeach

              </select>
              <div class="error-message" id="product-category-error">Veuillez sélectionner une catégorie.</div>
          </div>

          <!-- Bouton de soumission -->
          <button type="submit">{{ $product->exists ?  'Modifier' : 'Ajouter'}} le produit</button>
      </form>
  </div>
</div>

<script src="../js/index.js"></script>
@endsection