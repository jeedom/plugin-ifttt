Dieses Plugin ermöglicht das Senden eines Ereignisses an IFTTT

Plugin Konfiguration 
=======================

Nach dem Herunterladen des Plugins müssen Sie es aktivieren, es wird nicht
Keine andere Konfiguration erforderlich.

![ifttt7](../images/ifttt7.PNG)

Gerätekonfiguration 
=============================

Die Konfiguration der IFTTT-Geräte ist über das Menü zugänglich
Plugins :

![ifttt8](../images/ifttt8.PNG)

So sieht die IFTTT-Plugin-Seite aus (hier mit bereits 1
Ausrüstung) :

![ifttt9](../images/ifttt9.PNG)

Sobald Sie auf eine davon klicken, erhalten Sie :

![ifttt10](../images/ifttt10.PNG)

Hier finden Sie die gesamte Konfiguration Ihrer Geräte :

-   **Name de l'équipement** : Name Ihrer IFTTT-Ausrüstung

-   **Aktivieren** : macht Ihre Ausrüstung aktiv

-   **Sichtbar** : macht es auf dem Dashboard sichtbar

-   **Schlüssel** : IFTTT-Schlüssel, den Sie in der Konfiguration des finden
    Webhooks-Dienst (ersetzt Channel Maker)

Nachfolgend finden Sie die Konfiguration der Befehle :

-   **Name** : Name der Bestellung

-   **Untertyp** : Gerätetyp

-   **Ereignis** : Ereignisname in IFTTT konfiguriert

-   **Wert** : Wert, der an IFTTT gesendet werden soll, 3 mögliche Unterscheidungen, in
    Je nach Subtyp können Sie Tags verwenden : \.#color\.#,
    \.#slider\.#, \.#message\.# und \#title\.#

-   erweiterte Konfiguration (kleine gekerbte Räder) : Anzeigen
    die erweiterte Konfiguration des Befehls (Methode
    Geschichte, Widget…)

-   Test : Wird zum Testen des Befehls verwendet

-   löschen (unterschreiben -) : ermöglicht das Löschen des Befehls

Erstellung eines IFTTT-Kontos 
==========================

Erstellen Sie ein IFTTT-Konto, falls Sie dies noch nicht getan haben
[IFTTT](:https://ifttt.com) :

![ifttt1](../images/ifttt1.png)

Geben Sie Ihre E-Mail-Adresse und dann Ihren Benutzernamen ein und tun Sie dies
Schaffen :

![ifttt2](../images/ifttt2.PNG)

Eine kurze Anleitung erklärt Ihnen die Möglichkeiten, sobald diese
Wenn Sie fertig sind, klicken Sie bei der Suche oben rechts auf :

![ifttt3](../images/ifttt3.PNG)

Geben Sie dann in der Suche Webhooks ein und klicken Sie auf Webhooks :

![ifttt4](../images/ifttt4.PNG)

Dann auf verbinden :

![ifttt5](../images/ifttt5.png)

Und dort müssen Sie Ihren Schlüssel abholen :

![ifttt6](../images/ifttt6.png)

Dieser Schlüssel ist in das Feld "Schlüssel" Ihres Geräts unter zu kopieren
Jeedom

![ifttt11](../images/ifttt11.PNG)

Erstellung Ihres ersten "Applets" 
==================================

Dafür könnte nichts einfacher sein, klicken Sie dann in IFTTT auf "Meine Applets"
auf "Neues Applet"

![ifttt12](../images/ifttt12.png)

Klicken Sie dann auf "Neues Applet" :

![ifttt13](../images/ifttt13.PNG)

Klicken Sie auf "dies"" :

![ifttt14](../images/ifttt14.png)

Suchen Sie dann nach "Webhooks" und klicken Sie darauf :

![ifttt15](../images/ifttt15.png)

Klicken Sie auf "Webanforderung erhalten""

![ifttt16](../images/ifttt16.png)

Geben Sie Ihrem "Ereignis" einen Namen, dessen Aufmerksamkeit es entsprechen muss
Name des Ereignisses im Befehl Jeedom, also der
auswendig lernen, dann validieren :

![ifttt17](../images/ifttt17.png)

Dann klicken Sie darauf :

![ifttt18](../images/ifttt18.png)

Dann sehen Sie, für das Beispiel werde ich eine senden
Benachrichtigung auf meinem Telefon (Sie müssen zuerst installiert haben
die IFTTT-Anwendung oben), also klicke ich auf Benachrichtigungen :

![ifttt19](../images/ifttt19.png)

Bestätigen Sie mit einem Klick auf "Benachrichtigung senden" (kann sich je nach Änderung ändern
Kanäle) :

![ifttt20](../images/ifttt20.png)

Dann müssen Sie die Nachricht der Benachrichtigung schreiben, die es gibt
Tags (Zutat) möglich :

-   **{{EventName}}** : Name der Veranstaltung, hier Wetter

-   **{{Value1}}** : Wert 1 im Kanal gesendet, dies ist konfiguriert
    auf Bestellung in Jeedom

-   **{{Value2}}** : Wert 2 im Kanal gesendet, dies ist konfiguriert
    auf Bestellung in Jeedom

-   **{{Value3}}** : Wert 3 im Kanal gesendet, dies ist konfiguriert
    auf Bestellung in Jeedom

-   **{{OccurredAt}}** : Datum des Auftretens

Dies ist, was es hier gibt (ich möchte die Benachrichtigung von der erhalten
Wetter in meinem Haus), bestätigen Sie, indem Sie auf "Aktion erstellen" klicken" :

![ifttt21](../images/ifttt21.PNG)

Geben Sie Ihrem Applet (Rezept) einen Namen und bestätigen Sie durch Klicken auf
"Aktion erstellen" :

![ifttt22](../images/ifttt22.PNG)

Hier haben Sie Ihre "Applets" aufgelisteten IFTTT erstellt :

![ifttt23](../images/ifttt23.PNG)

Es bleibt mehr als die Bestellung auf der Jeedom-Seite zu erstellen, es ist ganz einfach :

![ifttt24](../images/ifttt24.PNG)

Hier gibt es nichts Besonderes, Sie müssen den Namen der Veranstaltung angeben
IFTTT in Jeedom und geben Sie dann die Werte an IFTTT hier ein
Wetterbedingungen im Inhaltsstoffwert1

> **Spitze**
>
> Jeedom Seite können Sie, wenn Sie einen Untertyp bestellen
> Nachricht zum Beispiel, setzen Sie das Tag \#message\.# in einem oder mehreren
> "Wert" -Felder". In Ihrem Szenario lautet der Nachrichtenwert also
> Tranmis bei IFTTT. Das gleiche ist mit \ möglich#title\.#, \.#color\.#,
> \.#slider\.#

Senden von Informationen von IFTTT an Jeedom 
========================================

Es ist auch möglich, Informationen von zu senden
IFTTT zu Jeedom. So senden Sie eine Nachricht
Informationen, wenn das Telefon einen bestimmten Bereich betritt. Zuerst
Erstellen Sie ein neues Applet :

![ifttt25](../images/ifttt25.png)

Klicken Sie dann auf "dies"" :

![ifttt26](../images/ifttt26.png)

Wählen Sie "Standort" :

![ifttt27](../images/ifttt27.png)

Wählen Sie Ihren Auslöser (hier nehme ich, wenn wir eintreten
ein Gebiet) :

![ifttt28](../images/ifttt28.png)

Markieren Sie Ihren Bereich und führen Sie "Trigger erstellen" aus" :

![ifttt29](../images/ifttt29.png)

Klicken Sie auf "das" :

![ifttt30](../images/ifttt30.png)

Suchen Sie nach "Webhooks" und klicken Sie darauf :

![ifttt31](../images/ifttt31.png)

Klicken Sie auf "Webanforderung stellen"" :

![ifttt32](../images/ifttt32.png)

Jeedom-Seite erstellen Sie auf Ihrer IFTTT-Ausrüstung eine Typreihenfolge
info / other (oder binär, wenn Sie nur wissen möchten, ob Sie in der sind
Bereich), so :

![ifttt33](../images/ifttt33.PNG)

-   Sehr wichtig hier : Bestellnummer abrufen (hier 5369).

Wir kehren dann zu IFTTT zurück und werden es in unseren Webhooks geben
die URL zum Anrufen. Dies ist der komplizierteste Schritt
URL für externen Zugriff :

-   Sie verwenden jeedom DNS, also ist dies :
    [https://XXXXX.dns.jeedom.com/core/api/jeeApi.php?apikey=\.#APIKEY\.#& type = ifttt & id = \#IDCMD\.#&value=\.#VALEUR\.#](https://XXXXX.dns.jeedom.com/core/api/jeeApi.php?apikey=#APIKEY#& type = ifttt & id=#IDCMD#&value=#VALEUR#).
    Achtung, wenn Sie eine Adresse in / jeedom haben, über die Sie nachdenken müssen
    füge es vor dem / core hinzu

-   Sie haben Ihr eigenes DNS, dann hat die URL die Form
    [http://\.#VOTRE\._DNS\.#/core/api/jeeApi.php?apikey=\.#APIKEY\.#& type = ifttt & id = \#IDCMD\.#&value=\.#VALEUR\.#](http://#VOTRE_DNS#/core/api/jeeApi.php?apikey=#APIKEY#& type = ifttt & id=#IDCMD#&value=#VALEUR#).
    Achtung, wenn Sie eine Adresse in / jeedom haben, über die Sie nachdenken müssen
    füge es vor dem / core hinzu

Denken Sie daran, zu ersetzen :

-   \.#APIKEY\.# : durch Ihren API-JEEDOM-Schlüssel (im Allgemeinen
    → Administration → Konfiguration)

-   \.#IDCMD\.# : anhand der ID Ihrer zuvor erstellten Bestellung

-   \.#VALEUR\.# : durch den Wert, den Sie Ihrer Bestellung geben möchten.
    Achtung hier müssen die Leerzeichen durch% 20 ersetzt werden (und es
    besser, um Sonderzeichen zu vermeiden), z : Ohne% 20zone

Das gibt es :

![ifttt34](../images/ifttt34.png)

Denken Sie daran, die Methode auf Get zu setzen und dann auf "Aktion erstellen" zu klicken".

Geben Sie Ihren Applets einen Titel und klicken Sie auf "Aktion erstellen". Und
Hier werden Sie benachrichtigt, sobald Sie den Jeedom-Bereich betreten.

> **Wichtig**
>
> Sie müssen auch ein Rezept erstellen, um das Gebiet zu verlassen, sonst tut Jeedom dies nicht
> wird nicht benachrichtigt, wenn Sie den Bereich verlassen

> **Notiz**
>
> Um die Webhook-URL auf ifttt zu erhalten, müssen Sie zu gehen [hier](https://ifttt.com/maker_webhooks) Klicken Sie dann auf Dokumentation
