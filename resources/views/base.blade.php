<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valdesElectronique - Dashboard</title>
    <style>
        /* Global */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background: linear-gradient(to right, #f5f6f7, #cbd3dd);

        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background: #2c3e50;
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            transition: transform 0.3s ease-in-out;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a,.sidebar ul li button {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            background: #34495e;
            border-radius: 5px;
            text-align: center;
        }

        .sidebar ul li button{
          border-width: 0;
          width: 100%;
          background-color: crimson;
        }

        /* Main container */
        .main-container {
            margin-left: 200px;
            width: calc(100% - 220px);
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .header h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: 46px;
            /* Taille de la police */
            font-weight: 600;
            /* Poids de la police */
            color: #ebe6e6f3;
            letter-spacing: -2px;
            /* Espacement des lettres */
            background: linear-gradient(45deg, #f7be02, #d8d8d6, #f3dc08);
            /* Dégradé doré */
            -webkit-background-clip: text;
            /* Préfixe pour WebKit */
            -moz-background-clip: text;
            /* Préfixe pour Firefox (si supporté dans le futur) */
            background-clip: text;
            /* Standard */
            color: transparent;
            /* Texte transparent pour afficher le dégradé */
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
            /* Ombre pour profondeur */
        }

        /* Header */
        .header {
            background:  rgb(26, 91, 188);
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            width: 100%;
        }

        /* Content */
        .content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .product-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            padding: 15px;
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }

        .product-card h3 {
            margin: 10px 0;
            font-size: 1rem;
        }

        .product-card p {
            font-size: 0.9rem;
            color: #555;
        }

        .product-card .price {
            color: #ff5722;
            font-weight: bold;
            margin: 10px 0;
        }

        .actions {
            margin: 10px 0;
        }

        .actions button {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 0.9rem;
        }

        .actions .edit {
            background-color: #007bff;
            color: white;
        }

        .actions .edit:hover {
            background-color: #0056b3;
        }

        .actions .delete {
            background-color: #e74c3c;
            color: white;
        }

        .actions .delete:hover {
            background-color: #c0392b;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: 220px;
                position: fixed;
                height: 100vh;
                transition: transform 0.3s ease-in-out;
            }

            .main-container {
                margin-left: 0;
                width: 100%;
            }

            .menu-btn {
                display: block;
                background: #1abc9c;
                color: white;
                border: none;
                font-size: 20px;
                position: fixed;

                cursor: pointer;
                border-radius: 5px;
                z-index: 1000;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            /* Fixer le header sur mobile */
            /* Fixer le header sur mobile */
            .header {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                height: 70px;
                background: rgb(26, 91, 188);
                z-index: 999;
                font-size: 18px;
                padding: 10px 20px;
                display: flex;
                justify-content: space-between;
                /* Espace entre les éléments */
                align-items: center;
            }

            .menu-btn {
                display: block;
                background: rgb(26, 91, 188);
                color: white;
                border: none;
                font-size: 20px;
                position: absolute;
                left: 10px;
                /* Positionnement du bouton à gauche */
                top: 10px;
                /* Alignement vertical */
                transform: translateY(-50%);
                /* Centrer verticalement */
                cursor: pointer;
                border-radius: 5px;
                z-index: 1000;
                padding-top: 50px;
            }

            /* Réduire la taille de 'valdesElectronique' */
            .header h1 {
                font-family: 'Times New Roman', Times, serif;
                background: linear-gradient(45deg, #ebb608, #d8d8d6, #f7de04);
                /* Dégradé doré */
                font-weight: 600;
                /* Poids de la police */

                font-size: 46px;
                /* Taille de la police */
                color: #ebe6e6f3;
                letter-spacing: -2px;
                /* Espacement des lettres */
                -webkit-background-clip: text;
                /* Préfixe pour WebKit */
                -moz-background-clip: text;
                /* Préfixe pour Firefox (si supporté dans le futur) */
                background-clip: text;
                /* Standard */
                color: transparent;
                /* Texte transparent pour afficher le dégradé */
                text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
                /* Ombre pour profondeur */
                margin-left: 15px;
            }

            /* Ajuster le contenu principal pour tenir compte du header fixe */
            .main-container {
                margin-top: 70px;
                /* Décalage sous le header fixe */
            }
        }
    </style>
</head>

<body>

    <!-- Bouton Menu Mobile -->
    <button class="menu-btn" onclick="toggleMenu()">☰</button>

    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Dashboard</h2>
      <ul>
          <li><a href="{{ route('product.index') }}">voir les produit</a></li>
  
          <li><a href="{{ route('product.create') }}">Ajouter Produit</a></li>
          <li><a href="{{ route('category.create') }}">Ajouter Catégorie</a></li>
          <li><a href="{{ route('category.index') }}">voir les Catégorie</a></li>
          <li>                
            <form action="{{ url('logout') }}" method="POST" style="display: inline">
            @csrf
            @method("DELETE")
            <button class="btn btn-delete">se deconnecter</button>
        </form>
      </ul>
  </aside>

    <!-- Contenu Principal -->
    <div class="main-container">
        <header class="header">
            <h1>valdesElectronique</h1>
        </header>

        @yield('content')
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuBtn = document.querySelector(".menu-btn");
            const sidebar = document.querySelector(".sidebar");
            const mainContainer = document.querySelector(".main-container");

            // Fonction pour afficher/masquer la sidebar
            function toggleMenu() {
                sidebar.classList.toggle("show");
            }

            // Événement pour le bouton menu
            menuBtn.addEventListener("click", function (event) {
                toggleMenu();
                event.stopPropagation(); // Empêche la fermeture immédiate
            });

            // Fermer la sidebar si on clique en dehors
            document.addEventListener("click", function (event) {
                if (!sidebar.contains(event.target) && !menuBtn.contains(event.target)) {
                    sidebar.classList.remove("show");
                }
            });
        });
    </script>

</body>

</html>