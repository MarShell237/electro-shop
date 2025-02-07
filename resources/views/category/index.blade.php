@extends('base')
@section('content')
<link rel="stylesheet" href="../styles/da.css">
<link rel="stylesheet" href="../styles/login.css">

<style>
    /* Style du tableau */
    .table-container {
        margin: 20px;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        padding: 15px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background: #1a5bbc;
        color: white;
    }

    /* Style des boutons */
    .btn {
        padding: 8px 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        font-weight: bold;
    }

    .btn-edit {
        background: #3b67dd;
        color: white;
    }

    .btn-delete {
        background: #e74c3c;
        color: white;
    }

    .btn:hover {
        opacity: 0.8;
    }
</style>
<div class="table-container">
  <h2>Liste des Catégories</h2>
  <table>
      <thead>
          <tr>
              <th>ID</th>
              <th>Nom de la Catégorie</th>
              <th>Actions</th>
          </tr>
      </thead>
      <tbody id="category-table-body">
          <!-- Les catégories seront injectées ici par JavaScript -->
          @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td>
                <a href="{{ route('category.edit', $category) }}"><button class="btn btn-edit">Modifier</button></a>
                <form action="{{ route('category.destroy',$category) }}" method="POST" style="display: inline">
                  @csrf
                  @method("DELETE")
                  <button class="btn btn-delete">Supprimer</button>
              </form>
              </td>
            </tr>
          @endforeach
      </tbody>
  </table>
</div>
</div>

<!-- JavaScript -->
<script src="../js/da.js">

</script>
@endsection