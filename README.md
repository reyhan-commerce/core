<div align="center">

# 🌿 Reyhan Commerce Core (`reyhan-commerce/core`)

### Sovereign Enterprise Headless E-Commerce Engine for Laravel 13
**Engineered for High Concurrency, Double-Entry Financial Precision, and Modular Extensibility**

[![License: MIT](https://img.shields.io/badge/License-MIT-emerald.svg)](LICENSE)
[![Latest Version](https://img.shields.io/packagist/v/reyhan-commerce/core.svg?style=flat-square)](https://packagist.org/packages/reyhan-commerce/core)
[![PHP Version](https://img.shields.io/badge/PHP-8.4%20%7C%208.5-blue.svg)](https://php.net)
[![Laravel Version](https://img.shields.io/badge/Laravel-13.x-red.svg)](https://laravel.com)
[![Documentation](https://img.shields.io/badge/Docs-Live%20Website-10b981.svg)](https://reyhan-commerce.github.io/docs/)

</div>

---

## 📖 Overview

`reyhan-commerce/core` is the sovereign, engine-level framework library powering the Reyhan Commerce ecosystem. It provides the domain models, database migrations, commercial calculation pipelines, double-entry financial ledger, and high-concurrency reservation mechanics required to run modern, mission-critical e-commerce platforms.

Designed from first principles according to **Farshid's Laravel Constitution**:
- **100% Strict Typing**: Zero implicit type coercion (`declare(strict_types=1);` mandatory across all classes).
- **Single-Responsibility Actions**: Business logic is encapsulated into `final` Action classes with `execute()`.
- **Zero Repositories**: Native, optimized Eloquent queries and relationships without leaky abstraction layers.
- **Dynamic Extensibility**: Models and pipelines are swappable at runtime without altering core source code.
- **Two-Tier Concurrency Guard**: In-memory Redis reservations backed by PostgreSQL pessimistic row locking (`lockForUpdate`).

---

## ⚡ Installation & Quick Start

### 1. Require Core via Composer

Install the core package into any existing Laravel 13 application:

```bash
composer require reyhan-commerce/core
```

*(Alternatively, scaffold a complete turnkey store application using `composer create-project reyhan-commerce/reyhan my-store` or the `reyhan-commerce/installer` CLI tool).*

### 2. Publish Configuration & Run Migrations

```bash
# Publish core configuration file
php artisan vendor:publish --tag=reyhan-config

# Execute core database migrations
php artisan migrate

# Optional: Run Reyhan system doctor check
php artisan reyhan:doctor
```

### 3. Register Filament Admin Plugin (Optional)

If using Filament for administration, register the `ReyhanCorePlugin` in your panel provider:

```php
use Reyhan\Core\ReyhanCorePlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->default()
        ->id('admin')
        ->plugin(ReyhanCorePlugin::make());
}
```

---

## 🏛️ Domain Architecture & First-Class Facades

Reyhan Core provides clean, expressive facades for all core business domains:

| Facade | Service Class | Primary Responsibility |
| :--- | :--- | :--- |
| `Reyhan\Core\Facades\Reyhan` | `Reyhan\Core\Support\Reyhan` | Model binding registry, versioning, runtime resolutions |
| `Reyhan\Core\Facades\Cart` | `Reyhan\Core\Services\Cart\CartService` | Multi-channel cart lifecycle, persistence, items |
| `Reyhan\Core\Facades\Pricing` | `Reyhan\Core\Services\Pricing\PricingService` | Multi-tier price computation, discounts, taxes |
| `Reyhan\Core\Facades\Inventory` | `Reyhan\Core\Services\Inventory\StockReservationService` | Two-tier Redis & PostgreSQL stock locks |
| `Reyhan\Core\Facades\Checkout` | `Reyhan\Core\Services\Checkout\CheckoutService` | Order creation pipelines, invoice snapshots |
| `Reyhan\Core\Facades\Ledger` | `Reyhan\Core\Services\Accounting\LedgerService` | Double-entry accounting ledger & balance audits |

---

## 🧩 Dynamic Model Extensibility

Need to extend or replace the core `Product` or `Order` model with your own custom Eloquent model? Use `Reyhan::useModel()` in your application's `AppServiceProvider`:

```php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Reyhan\Core\Facades\Reyhan;
use App\Models\CustomProduct;
use App\Models\CustomOrder;

final class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Replace default models at runtime
        Reyhan::useModel('product', CustomProduct::class);
        Reyhan::useModel('order', CustomOrder::class);
    }
}
```

Every relationship, calculation pipeline, and query inside Reyhan Core will automatically resolve and instantiate your extended model classes.

---

## 🛡️ Two-Tier Concurrency Protection

To guarantee zero overselling during high-traffic flash sales:
1. **Tier 1 (Redis Fast Locks):** Atomic Redis decrements with 15-minute expiration window during initial checkout reservation.
2. **Tier 2 (PostgreSQL Pessimistic Lock):** Database transaction using `ProductVariant::where('id', $id)->lockForUpdate()` upon final payment settlement.

---

## 📚 Ecosystem Repositories

| Repository | Purpose | Packagist / Link |
| :--- | :--- | :--- |
| **`reyhan-commerce/core`** | Framework Core Library | [`reyhan-commerce/core`](https://packagist.org/packages/reyhan-commerce/core) |
| **`reyhan-commerce/reyhan`** | Starter Application Skeleton | [`reyhan-commerce/reyhan`](https://packagist.org/packages/reyhan-commerce/reyhan) |
| **`reyhan-commerce/installer`** | Composer Global CLI Scaffolder | [`reyhan-commerce/installer`](https://packagist.org/packages/reyhan-commerce/installer) |
| **`reyhan-commerce/storefront-nuxt`** | Nuxt 4 Commercial Storefront | [GitHub Repository](https://github.com/reyhan-commerce/storefront-nuxt) |
| **`reyhan-commerce/docs`** | Official VitePress Docs Site | [Live Documentation](https://reyhan-commerce.github.io/docs/) |

---

## 🤝 Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) and [ARCHITECTURE.md](ARCHITECTURE.md) for details on code architecture, static analysis requirements, and pull request guidelines.

---

## 📄 License

The Reyhan Commerce Core framework is open-sourced software licensed under the [MIT license](LICENSE).
