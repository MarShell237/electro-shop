<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles/index.css">

    <title>ElectroShop - Home</title>
</head>

<body>
    <header>
        <!-- modif -->
        <div class="logo">
            <li><a href="#hero"><i class="fas fa-bars"></i></a></li>
            <h1>ValdesElectronique</h1>
        </div>
        <button id="menu-toggle" class="toggle-btn">
            <i class="fa-solid fa-ellipsis-vertical"></i>
        </button>
        <nav>
            <ul>
                <form action="{{ route('product.filter') }}" method="POST">
                  @csrf
                  <div class="search-bar">
                      <input type="text" placeholder="Rechercher du produit..." name="searchValue">
                      <button><i class="fas fa-search"></i></button>
                  </div>
                </form>
                <li><a href="#hero"><i class="fas fa-home"></i> <span>Accueil</span></a></li>
                <li><a href="#product"><i class="fas fa-star"></i> <span>Produits</span></a></li>
                <li><a href="{{ url('login') }}"><i class="fas fa-sign-in-alt"></i> <span>connexion</span></a></li>
                <li><a href="#footer"><i class="fas fa-info-circle"></i> <span>À propos de nous</span></a></li>
                <!-- <li><a href="./dashbord.html"><i class="fas fa-envelope"></i> <span>Contactez Nous</span></a></li> -->
           
            </ul>
            
        </nav>
    </header>
    <aside id="sidebar">
        <button id="close-sidebar">&times;</button>
        <h2>Catégories</h2>
        <ul id="category-list">
          <a href="{{ url('/') }}"><li data-category="all">Tous</li></a>
          @foreach ($categories as $category)
            <a href="{{ url('product/filter',$category) }}"><li data-category="smartphones">{{ $category->name }}</li></a>
          @endforeach
        </ul>
    </aside>

    <main>
        <section class="hero" id="hero">
            <h1>Transformez votre quotidien avec nos produits électroniques</h1>
            <p>Découvrez une large gamme de produits électroniques pour améliorer votre expérience technologique.</p>
            <a href="#product" class="btn">Explorez nos produits</a>
        </section>
        <section class="team-collaboration">
            <div class="image-container">
                <img src="../images/background.jpg" alt="Produits Electroniques">
            </div>
            <div class="text-container">
                <h2>Innover pour simplifier votre quotidien</h2>
                <p>Nous vous proposons une sélection exclusive d'appareils électroniques, soigneusement conçus pour
                    répondre à tous vos besoins technologiques et améliorer votre vie de tous les jours.</p>
                <ul>
                    <li><strong>Performance exceptionnelle :</strong> Profitez des dernières avancées technologiques
                        pour une expérience fluide et sans limite.</li>
                    <li><strong>Simplicité et ergonomie :</strong> Des produits intuitifs, faciles à utiliser et
                        parfaitement adaptés à votre quotidien connecté.</li>
                </ul>
            </div>

        </section>

        <section class="section" id="product">
            <h2>Tout nos produits</h2>
            @foreach ($products as $table_product)
              @if ($table_product["category_products"]->isNotEmpty())
                <h2>{{ $table_product["category_name"] }}</h2>
                <div class="products-grid">
                @foreach($table_product["category_products"] as $product)
                    @include('partials._product')
                    @endforeach
                  </div>
              @endif
            @endforeach
        </section>

        <!-- Témoignages Clients -->
        <section class="testimonials">
            <h2>Avis de nos clients</h2>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <p>"Excellent service et produits de qualité. Je recommande vivement cette boutique !" - Client A
                    </p>
                </div>
                <div class="testimonial-card">
                    <p>"J'ai acheté un smartphone, et il est parfait ! Livraison rapide." - Client B</p>
                </div>
            </div>
        </section>

        <!-- Offres Spéciales -->
        <section class="promotions">
            <h2>Offres Spéciales</h2>
            <p>Profitez de réductions exclusives sur une sélection de produits pendant une durée limitée !</p>
            <a href="#product" class="btn">Voir les offres</a>
        </section>

        <!-- Blog -->
    
      

        <!-- Sécurité -->
        <section class="security">
            <h2>Achetez en toute sécurité</h2>
            <p>Nous garantissons des paiements sécurisés et une politique de retour facile.</p>
        </section>

        <footer class="footer" id="footer">
            <div class="footer-container">
                <div class="footer-column">
                    <h3>Nos catégories</h3>
                    <ul>
                        <li><a href="#">Accessoires et gadgets</a></li>
                        <li><a href="#">Éclairages LED</a></li>
                        <li><a href="#">Composants électroniques</a></li>
                        <li><a href="#">Équipements audio</a></li>
                        <li><a href="#">Téléphones et accessoires</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>À propos de nous</h3>
                    <ul>
                        <li><a href="#">Qui sommes-nous ?</a></li>
                        <li><a href="#">Pourquoi choisir ValdesElectronique ?</a></li>
                        <li><a href="#">Témoignages clients</a></li>
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Nos services</h3>
                    <ul>
                        <li><a href="#">Livraison rapide à Dschang et au Cameroun</a></li>
                        <li><a href="#">SAV et assistance technique</a></li>
                        <li><a href="#">Garantie sur nos produits</a></li>
                        <li><a href="#">Paiement sécurisé</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Nous contacter</h3>
                    <ul>
                        <li><a href="#">📍 Dschang, Cameroun</a></li>
                        <li><a href="#">📞 +237 650 24 40 19</a></li>
                        <li><a href="#">📧 contact@valdeselectronique.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 ValdesElectronique. Tous droits réservés.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="https://wa.me/237695947432" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
      
        
        </footer>
        <script src="../js/index.js"></script>
</body>

</html>