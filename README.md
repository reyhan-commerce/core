<div align="center">

# 🌿 Reyhan Commerce Core (`reyhan-commerce/core`)

### Sovereign Enterprise Headless E-Commerce Core Framework for Laravel 13
**Engineered for High-Concurrency, Dynamic Extensibility & Zero-Breaking Upgrades**

[![License: MIT](https://img.shields.io/badge/License-MIT-emerald.svg)](LICENSE)
[![Latest Version](https://img.shields.io/packagist/v/reyhan-commerce/core.svg?style=flat-square)](https://packagist.org/packages/reyhan-commerce/core)
[![Documentation](https://img.shields.io/badge/Docs-Live%20Website-10b981.svg)](https://reyhan-commerce.github.io/docs/)

</div>

---

## ⚡ Installation

Install the core framework package via Composer in any Laravel 13 application:

```bash
composer require reyhan-commerce/core
```

Or scaffold a complete turnkey application with our starter project:

```bash
composer create-project reyhan-commerce/reyhan my-store
```

---

## 🏛️ Key Capabilities

- **Domain Facades:** Expressive first-class facades (`Cart`, `Pricing`, `Inventory`, `Checkout`, `Ledger`, `Reyhan`).
- **Commercial Pipelines:** Modular calculation and order fulfillment pipelines (`CartCalculationPipeline`, `OrderCreationPipeline`).
- **Two-Tier Concurrency:** Redis 7 memory-mutex sorted sets paired with PostgreSQL 17 pessimistic row locking.
- **Double-Entry Financial Ledger:** Strict accounting ledger balancing debits and credits across wallets and bank transactions.
- **Extension Architecture:** Modular plugin system via `ReyhanExtensionServiceProvider`.

---

## 📄 License

The Reyhan Commerce Core framework is open-sourced software licensed under the [MIT license](LICENSE).
