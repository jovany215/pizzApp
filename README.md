<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
Content-Type: application/json" \
  -d '{"cart_id": "cart_123456", "product_id": 1, "quantity": 2}'
```

### Récupérer le panier
```bash
curl -X GET "http://127.0.0.1:8005/api/cart?cart_id=cart_123456" \
  -H "Accept: application/json"
```

### Rechercher des produits
```bash
curl -X GET "http://127.0.0.1:8005/api/products/search?q=pizza" \
  -H "Accept: application/json"
```

## 💾 Base de données

### Configuration
La base de données utilise SQLite pour le développement local.

### Seeds inclus
- 5 catégories : Pizza, Burger, Rice, Snacks, Drinks
- 17 produits répartis dans les catégories
- Données de test réalistes avec prix et descriptions

### Commandes Laravel
```bash
# Exécuter les migrations et seeders
php artisan migrate:fresh --seed

# Démarrer le serveur
php artisan serve
```

## 🎯 Fonctionnalités implémentées

### ✅ Backend complet
- [x] Migrations pour toutes les tables
- [x] Modèles Eloquent avec relations
- [x] Contrôleurs API avec validation
- [x] Service CartService pour la logique métier
- [x] Request classes pour la validation
- [x] Seeders avec données de test

### ✅ API fonctionnelle
- [x] CRUD complet pour les produits
- [x] Gestion des catégories
- [x] Système de panier sans session Laravel
- [x] Recherche et filtrage
- [x] Pagination
- [x] Calcul automatique des taxes (10%)
- [x] Validation des données
- [x] Gestion des erreurs

### ✅ Caractéristiques avancées
- [x] Système de panier persistant avec cart_id client
- [x] Calculs temps réel (sous-total, taxes, total)
- [x] Gestion des quantités et options
- [x] API RESTful standardisée
- [x] Réponses JSON structurées
- [x] Code modulaire et maintenable

## 🏗 Architecture

### Structure des contrôleurs
```
app/Http/Controllers/Api/
├── CategoryController.php     # Gestion des catégories
├── ProductController.php      # Gestion des produits
└── SimpleCartController.php   # Gestion du panier
```

### Services
```
app/Services/
└── CartService.php           # Logique métier du panier
```

### Validation
```
app/Http/Requests/
├── AddToCartRequest.php      # Validation ajout panier
└── UpdateCartItemRequest.php # Validation mise à jour
```

## 🔧 Configuration technique

### Environnement
- **Framework :** Laravel 12
- **PHP :** 8.2+
- **Base de données :** SQLite (dev) / PostgreSQL (prod)
- **Architecture :** API RESTful

### Middleware
- Les routes de catégories et produits utilisent le middleware API standard
- Les routes de panier sont sans session Laravel pour plus de simplicité
- Validation automatique des requêtes

### Sécurité
- Validation stricte des entrées
- Protection contre l'injection SQL via Eloquent
- Gestion d'erreurs appropriée
- Données sensibles non exposées

## 🚀 Prêt pour l'intégration

Ce backend est **complètement fonctionnel** et prêt pour l'intégration avec :

1. **Frontend React/Vue** : Toutes les API sont testées et fonctionnelles
2. **Application mobile** : API RESTful standard
3. **Interface Blade Laravel** : Routes et contrôleurs disponibles

### Points forts
- ✅ Architecture propre et modulaire
- ✅ Code bien documenté et maintenable
- ✅ Tests API validés
- ✅ Gestion d'erreurs robuste
- ✅ Prêt pour la production

### Prochaines étapes suggérées
1. Intégration frontend (Blade + Tailwind)
2. Authentification utilisateur (optionnel)
3. Gestion des commandes
4. Déploiement sur Heroku

---

**Status :** ✅ Backend complet et fonctionnel  
**Tests :** ✅ Tous les endpoints validés  
**Documentation :** ✅ API complètement documentée
