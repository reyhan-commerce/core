# AI Coding Agent Directives — Reyhan Commerce Core (`reyhan-commerce/core`)

This document is the absolute specification for AI coding agents modifying, refactoring, or generating code within the `reyhan-commerce/core` package.

---

## 🏛️ Invariant Constitution

1. **Strict Types Mandatory**:
   - Every `.php` file MUST begin with:
     ```php
     <?php

     declare(strict_types=1);
     ```
   - No untyped parameters, no untyped return values. Use union types (`int|string`), nullable types (`?string`), and psalm/phpstan generics where appropriate.

2. **Package Namespace Rule**:
   - All PHP classes in this repository belong to the `Reyhan\Core\` root namespace (under `src/`).
   - Database migrations belong in `database/migrations/`.
   - Seeders and Factories belong in `Reyhan\Core\Database\Seeders\` and `Reyhan\Core\Database\Factories\`.
   - Never reference `App\` namespace inside this repository.

3. **Single-Action Architecture**:
   - Complex domain logic MUST be written as `final class [Verb][Noun]Action` with a single public method `execute()`.
   - Actions should receive typed DTOs (`Spatie\LaravelData\Data`) or specific primitives/models.
   - Actions must NOT call HTTP redirects or return Blade views.

4. **Eloquent Exclusivity (No Repositories)**:
   - Do NOT introduce Repository classes, Service/Repository interfaces, or Data Access Objects.
   - Use Eloquent query builder, scopes, and relationships directly.
   - Dynamic model references must resolve via `Reyhan::model('alias')` or convenience methods (`Reyhan::productModel()`, etc.) so consumer applications can extend core entities.

5. **Modern Eloquent Casts**:
   - Models must define attribute casts in the modern `protected function casts(): array` method.
   - Deprecated `$casts = []` property is forbidden.
   - Use `protected $guarded = ['id'];`.

6. **Transaction Safety**:
   - Never place external HTTP requests (SMS gateways, payment APIs, webhook calls) inside database transactions (`DB::transaction`).
   - Execute HTTP operations outside the transaction, and only persist state/status inside the transaction.

7. **Double-Entry Ledger Integrity**:
   - Any feature mutating financial balances MUST record balanced debit and credit entries using `Reyhan::ledger()`.

8. **Language & Documentation Standard**:
   - All code comments, docblocks, commit messages, and markdown files MUST be written in English.
   - Persian is strictly restricted to localization JSON files (`lang/fa.json`).

---

## 🛠️ Validation & Quality Assurance Commands

Before declaring any task completed in `package-core`:
```bash
# Validate composer configuration
composer validate --strict

# Run code style fixer
vendor/bin/pint --test

# Run static analysis
vendor/bin/phpstan analyse
```
