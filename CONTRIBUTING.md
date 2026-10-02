# Contributing to Reyhan Commerce Core (`reyhan-commerce/core`)

Thank you for contributing to the core engine of **Reyhan Commerce**! We welcome bug fixes, documentation enhancements, and feature proposals that advance open-source commerce architecture.

---

## 🏛️ Code Architecture & Standards

All contributions must strictly follow **Farshid's Laravel Constitution**:

1. **Strict Types Mandatory**: `declare(strict_types=1);` must be at the top of every single PHP file.
2. **Namespace Integrity**: All core code lives under `Reyhan\Core\` in the `src/` directory.
3. **Single-Action Pattern**: Domain logic belongs in dedicated `final class [Verb][Noun]Action` classes with an `execute()` method.
4. **No Repositories**: Native Eloquent relationships and query builder only.
5. **Modern Casts**: Always use `protected function casts(): array`.
6. **Double-Entry Ledger Balancing**: Monetary operations must be strictly balanced (`debit == credit`).
7. **English Only**: All commit messages, documentation, docblocks, and code comments must be in English.

---

## 🛠️ Local Development & Testing

```bash
# Clone the repository
git clone https://github.com/reyhan-commerce/core.git
cd core

# Validate package definition
composer validate --strict
```

---

## 🔍 Code Quality & Verification

Before submitting a Pull Request, ensure all checks pass:

```bash
# Verify formatting with Laravel Pint
./vendor/bin/pint --test

# Static analysis with PHPStan
./vendor/bin/phpstan analyse
```

---

## 🌿 Git Workflow & Pull Requests

1. **Fork the repository** on GitHub.
2. **Create a topic branch**: `git checkout -b feature/dynamic-shipping-pipeline` or `git checkout -b fix/ledger-rounding`.
3. **Commit your changes**: write clear, imperative commit messages in English.
4. **Push to your fork** and open a Pull Request targeting the `main` branch.
5. Ensure all GitHub Actions CI checks pass.

Thank you for helping empower sovereign commerce! 🌿
