# Laravel Code Preferences

## Command References

**Always use class names instead of strings.**

```php
// ✅ Good
use App\Console\Commands\SyncUsers;
Schedule::command(SyncUsers::class)->daily();
artisan(SyncUsers::class);

// ❌ Avoid
Schedule::command('users:sync')->daily();
artisan('users:sync');
```

Facades Over Helpers

Use static facades with leading backslash for better IDE/LSP support (Neovim + Intelephense).

```php
// ✅ Good
\Auth::check()
\Auth::user()
\Gate::allows('premium')
\Cache::get('key')

// ❌ Avoid
auth()->check()
auth()->user()

{{-- ✅ Blade --}}
@if(\Auth::check())
{{ \Auth::user()->name }}
@endif
```

Why: Class names are refactor-safe. `\Auth::` provides better LSP autocomplete and jump-to-definition in Neovim.
