# Changelog

All Notable changes to `studiobonito/silverstripe-typekit` will be documented in this file

## [Unreleased]
### Added
- Created unit tests.

### Fixed
- Changed namespace from `TemplateGlobalProvider` to `TemplateGlobalProviders` to match directory name.
- Changed static call on `SiteConfig` to use `Injector` instead for better testing.

## [1.1.0] - 2015-10-08
### Added
- Updated documentation including changelog and contributing guide.
- Included `silverstripe-cms` version `~3.1.0` composer dependency.
- Included `php` version `>=5.3.0` composer dependency.
- Included multi-lingual support.
- Included header block in configuration file.
- Included `.gitignore` file.
- Included `.gitattributes` file.

### Changed
- Moved `TypeKitID` field from `Root.TypeKit` tab to `Root.Services.TypeKit` tab.

## [1.0.1] - 2014-08-04
### Added
- Updated dependencies to include `silverstripe/framework` version `~3.1.0`.

[Unreleased]: https://github.com/studiobonito/silverstripe-typekit/compare/1.1.0...HEAD
[1.1.0]: https://github.com/studiobonito/silverstripe-typekit/compare/1.0.1...1.1.0
[1.0.1]: https://github.com/studiobonito/silverstripe-typekit/compare/1.0.0...1.0.1