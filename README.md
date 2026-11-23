# UpAssist.Neos.Calendar

Simple calendar for Neos CMS: an `Event` document type, an "Upcoming events" content element and an iCalendar (`.ics`) download per event.

This package is no longer actively developed. It is kept working on Neos 8.

## Compatibility

| Version | Neos |
| --- | --- |
| 8.0.1 – 8.0.3 | 8.3, 8.4 (tested) |
| 8.0.0 and older | not working on current Neos (removed `TYPO3.*` names) |

Neos 9 is not supported: the `.ics` route uses the Neos 8 routing API and Neos 9 has no `Neos.Neos:PrimaryContent` case. That would need a separate major.

## Installation

```bash
composer require upassist/neos-calendar
```

## Usage

- `UpAssist.Neos.Calendar:Event` (document): title, start and end date/time, location, target audience, and a `main` content collection. Allow it in your site's document constraints.
- `UpAssist.Neos.Calendar:EventContent` renders the event header (title, dates), the `main` collection and share links. On Neos 8 it is added to `Neos.Neos:PrimaryContent` automatically for Event documents, so a page that renders `Neos.Neos:PrimaryContent { nodePath = 'main' }` shows it. Otherwise render it yourself in the Fusion prototype of your Event page.
- `UpAssist.Neos.Calendar:Upcoming` (content): the next four events of the site, sorted by start date, with an optional link to a calendar page. The intro text is taken from the first `Neos.NodeTypes.BaseMixins:TextMixin` node in the event.
- `<event-uri>.ics` returns the event as an iCalendar file. Organizer name and e-mail come from the settings:

```yaml
UpAssist:
  Neos:
    Calendar:
      ics:
        organizer:
          name: UpAssist
          email: office@upassist.com
```
