# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

### [8.0.3](https://github.com/UpAssist/neos-calendar/compare/8.0.2...8.0.3) (2026-11-23)

### Bug Fixes

* remove the Google+ share link from event pages; Google+ was shut down in 2019 and the link led nowhere

### [8.0.2](https://github.com/UpAssist/neos-calendar/compare/8.0.1...8.0.2) (2026-11-20)

### Bug Fixes

* the Upcoming element now shows new, changed and removed events right after publishing; before, they only showed after a cache flush (the element has its own cache entry, tagged with the Event node type and the listed events)

### [8.0.1](https://github.com/UpAssist/neos-calendar/compare/8.0.0...8.0.1) (2026-11-19)

### Bug Fixes

* replace removed `TYPO3.*` NodeType, Fusion and Fluid names, so the Event and Upcoming NodeTypes load and render again (8.0.0 gave a 500 on every page)
* require `neos/nodetypes-basemixins` and use `Neos.NodeTypes.BaseMixins:TitleMixin` / `TextMixin` instead of the `Neos.NodeTypes` mixins
* render the event content through `UpAssist.Neos.Calendar:EventContent`, so a site's Event document keeps its own page rendering
* `IcsDateViewHelper` registers its argument (Fluid no longer passes `render()` arguments)
* limit the constraint to `neos/neos: ^8.3`; Neos 9 needs a separate major

## [8.0.0](https://bitbucket.org/upassist/upassist-neos-calendar/compare/7.3.1...8.0.0) (2022-10-17)

### [7.3.1](https://bitbucket.org/upassist/upassist-neos-calendar/compare/1.0.2...7.3.1) (2022-10-10)

### [1.0.2](https://bitbucket.org/upassist/upassist-neos-calendar/compare/1.0.1...1.0.2) (2022-10-10)

### [1.0.1](https://bitbucket.org/upassist/upassist-neos-calendar/compare/7.3.0...1.0.1) (2022-10-10)
