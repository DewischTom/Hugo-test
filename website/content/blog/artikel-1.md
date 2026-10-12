---
title: "Hugo kennenlernen"
slug: "hugo-kennenlernen"
date: "2026-10-12"
featured_image: "/images/beitragsbild.png"
draft: false
---

Hugo erstellt schnelle Websites aus Markdown-Dateien.
Erfahre, wie Inhalte, Templates und Design zusammenarbeiten.

<!--more-->

## Was ist Hugo?

Hugo ist ein Static Site Generator.
Aus Inhaltsdateien und Templates erzeugt Hugo fertige HTML-Seiten.

Diese Seiten können anschließend auf einem Webhoster
veröffentlicht werden.

## Wie werden Inhalte gespeichert?

Die Artikel werden als Markdown-Dateien im Ordner `content`
gespeichert.

Im Kopf einer Datei stehen die Angaben zum Artikel:

- Titel
- Slug für die URL
- Veröffentlichungsdatum
- Pfad zum Beitragsbild

Darunter folgt der eigentliche Artikeltext.

## Trennung von Inhalt und Design

Der Text steht in einer Markdown-Datei.
Das Ananke-Theme übernimmt die Darstellung.

Dadurch können Inhalte bearbeitet werden,
ohne die Layout-Dateien verändern zu müssen.

## Website erzeugen

Nach einer Änderung erstellt Hugo die betroffenen Seiten neu.
Der lokale Vorschau-Server zeigt die Änderungen im Browser an.

[Zur Blogübersicht]({{< relref "blog/_index.md" >}})

[Zur Startseite]({{< relref "_index.md" >}})