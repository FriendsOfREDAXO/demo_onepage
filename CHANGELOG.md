# REDAXO Demo Onepage - Changelog

## Version 1.8.0 – 14.06.2023

* Neue Console-Commands zur Erstellung der Demo-Exporte @aeberhard
  * `demo_onepage:dump_tables`, erstellt Datenbank-Backup `backups/demo_onepage.utf8.sql`
  * beim Datenbank-Backup werden nur die benötigten Tabellen exportiert
  * `demo_onepage:dump_files`, erstellt Datei-Backup `backups/demo_onepage.tar.gz`
* Demo-Backups mit den Console-Commands neu erstellt
* Kleiner Typo auf der Startseite korrigiert
* Ordner `media` bei Deinstallation leeren
* Ordner `resources` bei Deinstallation löschen


## Version 1.7.3 – 10.06.2023

### Features

* Neue Versionen der benötigten AddOns in package.setup.yml @aeberhard
  * markitup 3.7.3 -> 3.7.4
  * mblock 3.4.7 -> 3.4.12
* PHP-Version in package.yml >=7.4, <8.3

### Bugfixes

* Bei Deinstallation Backup-Daten aus dem Backup-Ordner löschen - https://github.com/FriendsOfREDAXO/demo_onepage/issues/38 @aeberhard
* Fontawesome war im Header-Template noch mit http verlinkt und es wurden unter https keine Fontawesome-Icons angezeigt, link geändert auf https


## Version 1.7.2 – 02.01.2023

### Bugfixes

* Konfiguration angepasst und fehlende Einträge ergänzt


## Version 1.7.1 – 02.01.2023

### Bugfixes

* Verwendete AddOns aktualisiert


## Version 1.7.0 – 13.12.2022

### Features

* Anzeige der Dokumentation mit Inhaltsangabe
* Verwendete AddOns aktualisiert zwecks Kompatibilität mit PHP 8.2


## Version 1.6.0 – 08.01.2022

### Features

* Kompatibilität mit REDAXO 5.13
* Verwendet die neuen Mediatypen, die mit REDAXO 5.13 eingeführt wurden (z. B. `rex_media_small`)
* AddOns aktualisiert (MarkItUp, MBlock)


## Version 1.5.1 – 06.10.2021

### Bugfixes

* Fehler bei der Installation behoben, wenn zuvor das Developer-AddOn aktiviert war


## Version 1.5.0 – 27.02.2021

### Features

* Hinweis auf die Demo-Seite nach Installation des AddOns ([#32](https://github.com/FriendsOfREDAXO/demo_onepage/issues/32))
* Mehrsprachige Seitentitel
* Verwendete AddOns aktualisiert


## Version 1.4.0 – 18.03.2020

### Features

* Installation über die Konsole mittels `demo_onepage:install`

### Bugfixes

* Anpassungen für REDAXO 5.10


## Version 1.3.0 – 07.02.2020

### Features

* Neue Importdatei mit vollständigem Unicode-Zeichensatz (utf8mb4) für REDAXO 5.9 hinzugefügt. Bestehende Importdatei (utf8) für REDAXO 5.9 aktualisiert.
* Importfunktion aktualisiert
* REDAXO-Mindestversion auf 5.9.0 angehoben
* READMEs nach Sprachen aufgeteilt
* Support für YRewrite ([#31](https://github.com/FriendsOfREDAXO/demo_onepage/issues/31))
* Update auf MarkItUp 3.3.4


## Version 1.2.3

* Diverse Bugfixes, insb. Fehlerabfragen: #27, #28, #29, #30
* REDAXO und alle AddOns aktualisiert


## Version 1.2.2

* Packages in `package.yml` angepasst (#25)
* Information zum Umgang mit `package.setup.yml` ergänzt (#26)


## Version 1.2.1

* Dateirechte korrigiert


## Version 1.2

* Update -> Chandelog
* Mediamanager-Typ header
* Background-Image-Optimierung iOS
* Header-Input HTML-Entities


## Version 1.1

* Kleine Optimierungen
