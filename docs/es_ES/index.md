Este complemento permite enviar un evento a IFTTT

Configuración del plugin 
=======================

Después de descargar el complemento, debe activarlo, no
no se requiere otra configuración.

![ifttt7](../images/ifttt7.PNG)

Configuración del equipo 
=============================

Se puede acceder a la configuración del equipo IFTTT desde el menú
plugins :

![ifttt8](../images/ifttt8.PNG)

Así es como se ve la página del complemento IFTTT (aquí ya con 1
equipos) :

![ifttt9](../images/ifttt9.PNG)

Una vez que haces clic en uno de ellos, obtienes :

![ifttt10](../images/ifttt10.PNG)

Aquí encontrarás toda la configuración de tu equipo :

-   **Nombre del equipo** : nombre de su equipo IFTTT

-   **Activer** : activa su equipo

-   **Visible** : lo hace visible en el tablero

-   **Clef** : Clave IFTTT que encontrará en la configuración de
    Servicio de webhooks (reemplazando al creador de canales)

A continuación encontrará la configuración de los comandos. :

-   **Nom** : Nombre de la orden

-   **Sous-type** : subtipo de equipo

-   **Evento** : nombre del evento configurado en IFTTT

-   **Valeur** : valor para enviar a IFTTT, 3 distinciones posibles, en
    dependiendo del subtipo puedes usar etiquetas : \#color\#,
    \#slider \#, \#message \# y \#title \#

-   configuración avanzada (ruedas con muescas pequeñas) : Muestra
    La configuración avanzada del comando (método
    historia, widget ...)

-   Probar : Se usa para probar el comando

-   eliminar (firmar -) : permite eliminar el comando

Creación de una cuenta IFTTT 
==========================

Cree una cuenta IFTTT si aún no lo ha hecho, vaya a
[IFTTT](:https://ifttt.com) :

![ifttt1](../images/ifttt1.png)

Ingrese su dirección de correo electrónico, luego su nombre de usuario y haga
Crear :

![ifttt2](../images/ifttt2.PNG)

Una breve guía le explicará las posibilidades, una vez que esta
terminado, haga clic en la esquina superior derecha de la búsqueda :

![ifttt3](../images/ifttt3.PNG)

Luego, en la búsqueda, escriba webhooks y haga clic en webhooks :

![ifttt4](../images/ifttt4.PNG)

Luego en conectar :

![ifttt5](../images/ifttt5.png)

Y ahí tienes que recoger tu llave :

![ifttt6](../images/ifttt6.png)

Esta clave se copiará en el campo "Clave" de su equipo en
Jeedom

![ifttt11](../images/ifttt11.PNG)

Creación de tu primer "Applet" 
==================================

Para eso nada podría ser más simple, en IFTTT haga clic en "Mis applets" y luego
en "Nuevo applet"

![ifttt12](../images/ifttt12.png)

Luego haga clic en "Nuevo applet" :

![ifttt13](../images/ifttt13.PNG)

Haga clic en "esto" :

![ifttt14](../images/ifttt14.png)

Luego busque "Webhooks" y haga clic en él :

![ifttt15](../images/ifttt15.png)

Haga clic en "Recibir una solicitud web"

![ifttt16](../images/ifttt16.png)

Dé un nombre a su "evento", atención que debe corresponder a
nombre del evento en el comando Jeedom, por lo que el
memorizar, luego validar :

![ifttt17](../images/ifttt17.png)

Luego haga clic en eso :

![ifttt18](../images/ifttt18.png)

Entonces ves, por ejemplo enviaré un
notificación en mi teléfono (primero debe haber instalado
la aplicación IFTTT anterior), así que hago clic en Notificaciones :

![ifttt19](../images/ifttt19.png)

Confirme haciendo clic en "Enviar una notificación" (puede cambiar dependiendo
canales) :

![ifttt20](../images/ifttt20.png)

Luego tienes que escribir el mensaje de la notificación, hay
etiquetas (ingrediente) posibles :

-   **{{EventName}}** : nombre del evento, aquí el clima

-   **{{Value1}}** : valor 1 enviado en el canal, esto está configurado
    en orden en Jeedom

-   **{{Value2}}** : valor 2 enviado en el canal, esto está configurado
    en orden en Jeedom

-   **{{Value3}}** : valor 3 enviado en el canal, esto está configurado
    en orden en Jeedom

-   **{{OccurredAt}}** : fecha de ocurrencia

Esto es lo que da aquí (quiero recibir la notificación del
clima en mi casa), valide haciendo clic en "Crear acción" :

![ifttt21](../images/ifttt21.PNG)

Dé un nombre a su applet (receta) y valide haciendo clic en
"Crear acción" :

![ifttt22](../images/ifttt22.PNG)

Aquí ha creado sus "applets" enumerados IFTTT :

![ifttt23](../images/ifttt23.PNG)

Sigue siendo más que crear el pedido en el lado de Jeedom, es bastante simple :

![ifttt24](../images/ifttt24.PNG)

Nada especial aquí, tienes que dar el nombre del evento.
IFTTT en Jeedom y luego ponga los valores para pasar a IFTTT, aquí
condiciones climáticas en el valor del ingrediente1

> **Tip**
>
> Lado de la libertad puede, si solicita un subtipo
> mensaje, por ejemplo, coloque la etiqueta \#message \# en uno o más
> Campos de "valor"". Entonces, en su escenario, el valor del mensaje será
> tranmis en IFTTT. Lo mismo es posible con \#title \#, \#color \#,
> \#slider\#

Envío de información de IFTTT a Jeedom 
========================================

También es posible hacer lo contrario, enviando información desde
IFTTT a Jeedom. Aquí se explica cómo enviar un mensaje.
información cuando el teléfono ingresa a un área determinada. Primero
Que hacer, crear un nuevo applet :

![ifttt25](../images/ifttt25.png)

Luego haga clic en "esto" :

![ifttt26](../images/ifttt26.png)

Seleccione "Ubicación" :

![ifttt27](../images/ifttt27.png)

Elige tu gatillo (aquí lo tomaré cuando entremos
un área) :

![ifttt28](../images/ifttt28.png)

Marque su área y luego haga "Crear disparador" :

![ifttt29](../images/ifttt29.png)

Haga clic en "eso" :

![ifttt30](../images/ifttt30.png)

Busque "Webhooks" y haga clic en él. :

![ifttt31](../images/ifttt31.png)

Haga clic en "Hacer una solicitud web" :

![ifttt32](../images/ifttt32.png)

Lado de Jeedom, en su equipo IFTTT, cree una orden de tipo
info / other (o binario si solo quieres saber si estás en el
área), así :

![ifttt33](../images/ifttt33.PNG)

-   Muy importante aquí : recuperar la identificación del pedido (aquí 5369).

Luego volvemos a IFTTT y en nuestros webhooks lo daremos
la url para llamar. Este es el paso más complicado, encuentra tu
URL de acceso externo :

-   Está utilizando jeedom DNS, así que esto es :
    [https://XXXXX.dns.jeedom.com/core/api/jeeApi.php?apikey=\#APIKEY\#&type=ifttt&id=\#IDCMD\#&value=\#VALEUR\#](https://XXXXX.dns.jeedom.com/core/api/jeeApi.php?apikey=#APIKEY#&type=ifttt&id=#IDCMD#&value=#VALEUR#).
    Atención, si tiene una dirección en / jeedom, debe pensar
    agréguelo antes del / core

-   Tienes tu propio DNS, entonces la url tiene la forma
    [http://\#VOTRE\_DNS\#/core/api/jeeApi.php?apikey=\#APIKEY\#&type=ifttt&id=\#IDCMD\#&value=\#VALEUR\#](http://#VOTRE_DNS#/core/api/jeeApi.php?apikey=#APIKEY#&type=ifttt&id=#IDCMD#&value=#VALEUR#).
    Atención, si tiene una dirección en / jeedom, debe pensar
    agréguelo antes del / core

Recuerde reemplazar :

-   \#APIKEY\# : por su clave API JEEDOM (está en General
    → Administración → Configuración)

-   \#IDCMD\# : por la identificación de su pedido previamente creado

-   \#VALEUR\# : por el valor que desea dar a su pedido.
    Atención aquí los espacios deben ser reemplazados por% 20 (y
    mejor para evitar caracteres especiales), ex : Excluyendo% 20zone

Esto es lo que da :

![ifttt34](../images/ifttt34.png)

Recuerde poner el método en Get, luego haga clic en "Crear acción".

Dé un título a sus applets y luego haga clic en "Crear acción". Y
aquí, tan pronto como ingrese al área de Jeedom será notificado.

> **Important**
>
> También debe hacer una receta para abandonar el área, de lo contrario, Jeedom no
> no se le notificará cuando salga del área

> **NOTE**
>
> Para obtener la URL del webhook si tienes que ir a [aquí](https://ifttt.com/maker_webhooks) luego haga clic en la documentación
