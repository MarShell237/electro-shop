@extends('base')
@section('content')
<link rel="stylesheet" href="/styles/login.css">
<div class="container">
  <div class="form-container">
      <h2>{{ $category->exists ?  'Modifier' : 'Ajouter'}} une Catégorie</h2>
      <form id="category-form" action="{{ route($category->exists ? 'category.update' : 'category.store',$category) }}" method="POST">
        @method($category->exists ? 'PUT' : 'POST')
        @csrf
          <div class="input-group">
              <label for="category-name">Nom de la catégorie</label>
              <input type="text" id="category-name" name="name" placeholder="Entrez le nom de la catégorie" required value="{{ $category->name }}">
              <div class="error-message" id="category-name-error">Le nom doit comporter au moins 3 caractères.</div>
          </div>
          <button type="submit">{{ $category->exists ?  'Modifier' : 'Ajouter'}} la catégorie</button>
      </form>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
      const categoryNameInput = document.getElementById('category-name');
      const categoryNameError = document.getElementById('category-name-error');
      const categoryForm = document.getElementById('category-form');
      const submitButton = categoryForm.querySelector('button[type="submit"]');

      function validateCategoryName(name) {
          return name.trim().length >= 3;
      }

      categoryNameInput.addEventListener('input', () => {
          const isValid = validateCategoryName(categoryNameInput.value);
          categoryNameError.style.display = isValid ? 'none' : 'block';
          submitButton.disabled = !isValid;
      });
  });
</script>
@endsection