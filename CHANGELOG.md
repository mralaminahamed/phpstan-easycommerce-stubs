# Changelog

All notable changes to this package are documented here.

**Versions track the upstream plugin.** A release of this package stubs the matching upstream
release, so you can require the same version you run against. That is also why the entries below are
mostly "regenerated against X" — the stubs have no behaviour of their own to change.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).

## [Unreleased]

### Added

- `tests/StubsTest.php` and `phpunit.xml.dist`, so `composer test` runs. It asserts every generated
  stub file parses and actually declares something — the two ways a regeneration fails silently.
- `phpcs.xml.dist`, so `composer cs` and `composer cs-fix` have a ruleset. Generated `.stub` files
  and `source/` are excluded; only the PHP written by hand here is checked.
- CI on push and pull request across PHP 7.4 and 8.3, running `cs`, `analyze` and `test`.
- This changelog.

### Fixed

- `composer test`, `composer cs` and `composer check` all failed: `phpunit` had no configuration and
  `phpcs` had no ruleset.
- `composer analyze` reported errors that are inherent to stubs. The generated files were in
  PHPStan's `paths`, which asks it to check the bodies of declarations that are empty by definition.
  They are `scanFiles` now — the symbols become known without any claim about bodies a stub cannot
  have — and `paths` covers the hand-written PHP instead.

## [1.46] - 2026-08-18

Regenerated against upstream 1.46.

## [1.45] - 2026-08-18

Regenerated against upstream 1.45.

## [1.44] - 2026-08-18

Regenerated against upstream 1.44.

## [1.43] - 2026-08-18

Regenerated against upstream 1.43.

## [1.42.2] - 2026-08-18

Regenerated against upstream 1.42.2.

## [1.42.1] - 2026-08-18

Regenerated against upstream 1.42.1.

## [1.42] - 2026-08-18

Regenerated against upstream 1.42.

## [1.41] - 2026-08-18

Regenerated against upstream 1.41.

## [1.40.2] - 2026-08-18

Regenerated against upstream 1.40.2.

## [1.40.1] - 2026-08-18

Regenerated against upstream 1.40.1.

## [1.40] - 2026-08-18

Regenerated against upstream 1.40.

## [1.31] - 2026-08-18

Regenerated against upstream 1.31.
