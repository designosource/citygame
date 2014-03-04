![designosource citygames](http://imgur.com/ERtRyoa.png)

* [Introductie](#introductie)
* [Voorbereidingen development](#voorbereidingen-development)
    * [Omgeving opzetten](#development-omgeving-opzetten)
    * [Project ophalen via git](#project-ophalen-via-git)
    * [Opstarten lokale testserver](#opstarten-lokale-testserver)
* [Workflow](#workflow)
    * [Installeer Gulp modules](#installeer-gulp-modules)
    * [Starten van Gulp.js](#starten-van-gulp)
    * [Testdata opnieuw instellen](#testdata-opnieuw-instellen)

# Introductie
Citygames is het nieuwe framework van [designosource](http://designosource.be) waarmee verschillende
stadsspellen met vragen gebaseerd op geolocatie kunnen worden aangemaakt. Het framework biedt beperkte
designmogelijkheden en bij het aanmaken van een citygame is er voor elke klant een apart design nodig.
Dit is echter voorzien in het framework.


# Voorbereidingen development
Om mee te werken/te beginnen met development aan het citygames platform heb je enkele tools nodig
om het project mee op te zetten.

## Development omgeving opzetten
### 1. Installeer [Virtualbox](https://www.virtualbox.org/)
Geen verdere configuratie nodig na installatie.

### 2. Installeer [Vagrant](http://www.vagrantup.com/)
Geen verdere configuratie nodig na installatie.

### 3. Gulp (voor stylesheets en asset management)
1. Installeer [Node.js](http://nodejs.org/) voor npm (node package manager)
2. <b>Voer <code>npm install</code> uit in de root van het project</b>

### 4. Pas je hosts file aan
Pas je hosts file aan en voeg deze regel toe: <code>192.168.13.37       citygames.designosource.dev</code>
Dit zorgt ervoor dat je naar de development website kan surfen, anders kan dit via [192.168.13.37.xip.io](192.168.13.37.xip.io)

Om het project mobiel te bereiken kan je enkel via [192.168.13.37.xip.io](192.168.13.37.xip.io) verbinden.

## Project ophalen via git
### HTTPS
<code>git clone https://github.com/designosource/citygame.git</code>

### SSH
<code>git clone git@github.com:designosource/citygame.git</code>

## Opstarten lokale testserver
Omdat het project verschillende vereisten heeft van een server en er zekerheid moet zijn dat de applicatie
 blijft werken op de productieserver is het opzetten van een lokale virtuele server noodzakelijk. Gelukkig
 is dit eenvoudig met Vagrant.

### Starten van de server
 Om de server op te starten ga je met je Terminal naar de root van het project.

 <code>cd /citygame</code>

 En voer je <code>vagrant up</code> uit. De eerste keer duurt dit enkele minuten, de volgende keren zal dit
 echter enorm snel gaan en is het direct mogelijk te werken aan het project.

### Stoppen van de server

Als je de server wilt stopzetten gaat dit ofwel met <code>vagrant suspend</code> of <code>vagrant halt</code>.
Suspend zorgt ervoor dat de virtuele machine in slaapstand wordt gezet, de volgende <code>vagrant up</code> zal
als gevolg enorm snel gaan.<br>
Halt zorgt ervoor dat de virtuele machine volledig wordt afgesloten.

# Workflow

Ontwikkelen op deze manier brengt een bepaalde workflow met zich mee.

## 1. Installeer Gulp modules
Installeer alle dependencies van Gulp met <code>npm install</code>

## 2. Starten van Gulp
Start Gulp in de Terminal via het commando <code>gulp</code> of <code>gulp watch</code>. Dit zorgt ervoor dat
wanneer je een aanpassing doet aan een bestand automatisch de SASS en Js files worden verkleind en
geoptimaliseerd. De browser zal ook automatisch verversen.

## 3. Testdata opnieuw instellen
Om de testtdata die automatisch op de serverdatabase is ingesteld opnieuw te herstellen (na het verwijderen of
toevoegen van items) kan je het commando <code>php artisan migrate:refresh --seed</code> gebruiken. Dit zorgt ervoor
dat alle database tabellen worden leeggemaakt, hersteld en opnieuw ingevuld met testdata.

<b>Doe dit NOOIT op de productieserver</b>

