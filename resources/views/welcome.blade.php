<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">

    <title>ElectroShop - Home</title>
</head>
<body>
    <header>
        <div class="logo">
        <img src="../images/logo.png" alt="ElectroShop Logo">
        <h1>ElectroShop</h1>
    </div>
    <button id="menu-toggle" class="toggle-btn">
        <i class="fas fa-bars"></i>
    </button>
        <nav>
            <ul>
                <li><a href="#hero"><i class="fas fa-home"></i> <span>Accueil</span></a></li>
                <li><a href="#product"><i class="fas fa-plug"></i> <span>Produits</span></a></li>
                <li><a href="#temoin"><i class="fas fa-video"></i> <span>Témoignages</span></a></li>
                <li><a href="#contact"><i class="fas fa-envelope"></i> <span>Contactez Nous</span></a></li>
            </ul>
        </nav>
    </header>
    <aside id="sidebar">
        <button id="close-sidebar">&times;</button>
        <h2>Catégories</h2>
        <ul id="category-list">
            <li data-category="all">Tous</li>
            <li data-category="smartphones">Smartphones</li>
            <li data-category="laptops">Ordinateurs Portables</li>
            <li data-category="tablets">Tablettes</li>
            <li data-category="accessories">Accessoires</li>
            <li data-category="headphones">Casques Audio</li>
            <li data-category="tv">Télévisions</li>
            <li data-category="gaming">Gaming</li>
            <li data-category="wearables">Objets Connectés</li>
        </ul>
    </aside>

    <main>
        <section class="hero" id="hero">
            <h1>Transformez votre quotidien avec nos produits électroniques</h1>
            <p>Découvrez une large gamme de produits électroniques pour améliorer votre expérience technologique.</p>
            <a href="/products" class="btn">Explorez nos produits</a>
        </section>
        <section class="team-collaboration">
            <div class="image-container">
                <img src="../images/Capture d’écran du 2025-01-16 15-35-55.png" alt="Produits Electroniques">
            </div>
            <div class="text-container">
                <h2>Des produits innovants pour votre quotidien.</h2>
                <p>Nous offrons une large sélection d'appareils électroniques pour répondre à tous vos besoins.</p>
                <ul>
                    <li><strong>Performance maximale :</strong> Profitez des dernières technologies pour une expérience fluide.</li>
                    <li><strong>Facilité d'utilisation :</strong> Des produits intuitifs qui s'intègrent parfaitement à votre quotidien.</li>
                </ul>
            </div>
        </section>

        <section class="section" id="product">
            <h2>Produits en vedette</h2>
            <div class="products-grid">
              @foreach ($products as $product)
                @include('partials._product')
              @endforeach
            </div>
        </section>
        
        <section class="section" id="temoin">
            <h2>Témoignages des clients</h2>
            <div class="videos-grid">
                <div class="video-card">
                    <iframe src="../video/1.mp4" frameborder="0" allowfullscreen></iframe>
                    <p>Un client satisfait</p>
                </div>
                <div class="video-card">
                    <iframe src="/video/2.mp4" frameborder="0" allowfullscreen></iframe>
                    <p>Une expérience unique</p>
                </div>
            </div>
        </section>
        <section class="form-section" id="contact">
            <h2>Contactez-nous</h2>
            <form class="contact-form">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" placeholder="Votre nom">
            
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Votre email">
            
                <label for="message">Message</label>
                <textarea id="message" rows="5" name="message" placeholder="Votre message"></textarea>
            
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 ElectroShop. Tous droits réservés.</p>
    </footer>
    <script src="/js/index.js"></script>
</body>
</html>
