Este plugin permite enviar um evento para IFTTT

Configuração do plugin 
=======================

Depois de baixar o plug-in, você precisa ativá-lo, ele não
nenhuma outra configuração é necessária.

![ifttt7](../images/ifttt7.PNG)

Configuração do equipamento 
=============================

A configuração do equipamento IFTTT pode ser acessada no menu
Plugins :

![ifttt8](../images/ifttt8.PNG)

É assim que a página do plugin IFTTT se parece (aqui com 1
equipamento) :

![ifttt9](../images/ifttt9.PNG)

Depois de clicar em um deles, você obtém :

![ifttt10](../images/ifttt10.PNG)

Aqui você encontra toda a configuração do seu equipamento :

-   **Nome de equipamentos** : nome do seu equipamento IFTTT

-   **Activer** : torna seu equipamento ativo

-   **Visible** : torna visível no painel

-   **Clef** : Chave IFTTT que você encontrará na configuração do
    Serviço Webhooks (substituindo o criador de canais)

Abaixo você encontrará a configuração dos comandos :

-   **Nom** : nome do comando

-   **Sous-type** : subtipo de equipamento

-   **Evento** : nome do evento configurado no IFTTT

-   **Valeur** : valor a enviar ao IFTTT, 3 possíveis distinções, em
    dependendo do subtipo, você pode usar tags : \#color\#,
    \#slider \#, \#message \# e \#title \#

-   configuração avançada (pequenas rodas dentadas) : permite exibir
    a configuração avançada do comando (método
    história, widget ...)

-   Teste : permite testar o comando

-   excluir (assinar -) : permite excluir o comando

Criação de uma conta IFTTT 
==========================

Crie uma conta IFTTT, se ainda não o fez, acessando
[IFTTT](:https://ifttt.com) :

![ifttt1](../images/ifttt1.png)

Digite seu endereço de e-mail, seu nome de usuário e faça
criar :

![ifttt2](../images/ifttt2.PNG)

Um pequeno guia explicará as possibilidades para você, uma vez que este
finalizado, clique no canto superior direito da pesquisa :

![ifttt3](../images/ifttt3.PNG)

Em seguida, no tipo de pesquisa webhooks e clique em webhooks :

![ifttt4](../images/ifttt4.PNG)

Em seguida, em conectar :

![ifttt5](../images/ifttt5.png)

E aí você tem que pegar sua chave :

![ifttt6](../images/ifttt6.png)

Essa chave deve ser copiada no campo "Chave" do seu equipamento em
Jeedom

![ifttt11](../images/ifttt11.PNG)

Criação do seu primeiro "Applet"" 
==================================

Para que nada pudesse ser mais simples, no IFTTT clique em "Meus applets" e depois
em "Novo applet"

![ifttt12](../images/ifttt12.png)

Em seguida, clique em "Novo applet" :

![ifttt13](../images/ifttt13.PNG)

Clique no botão "this" :

![ifttt14](../images/ifttt14.png)

Em seguida, procure por "Webhooks" e clique nele :

![ifttt15](../images/ifttt15.png)

Clique em "Receber uma solicitação da web"

![ifttt16](../images/ifttt16.png)

Dê um nome ao seu "evento", atenção que deve corresponder a
nome do evento no comando Jeedom, portanto, o
memorizar e validar :

![ifttt17](../images/ifttt17.png)

Depois clique nesse :

![ifttt18](../images/ifttt18.png)

Então você vê, por exemplo, enviarei um
notificação no meu telefone (você deve primeiro ter instalado
o aplicativo IFTTT acima), então clico em Notificações :

![ifttt19](../images/ifttt19.png)

Confirme clicando em "Enviar uma notificação" (pode mudar dependendo
canais) :

![ifttt20](../images/ifttt20.png)

Então você tem que escrever a mensagem da notificação, existem
tags (ingrediente) possível :

-   **{{EventName}}** : nome do evento, aqui clima

-   **{{Value1}}** : valor 1 enviado no canal, isso está configurado
    em ordem no Jeedom

-   **{{Value2}}** : valor 2 enviado no canal, este é configurado
    em ordem no Jeedom

-   **{{Value3}}** : valor 3 enviado no canal, este é configurado
    em ordem no Jeedom

-   **{{OccurredAt}}** : data de ocorrência

É isso que ele fornece aqui (quero receber a notificação do
clima na minha casa), valide clicando em "Criar Ação" :

![ifttt21](../images/ifttt21.PNG)

Dê um nome ao seu applet (receita) e valide clicando em
"Criar ação" :

![ifttt22](../images/ifttt22.PNG)

Aqui você criou seus "applets" listados no IFTTT :

![ifttt23](../images/ifttt23.PNG)

Resta mais do que criar um pedido no lado Jeedom, é bastante simples :

![ifttt24](../images/ifttt24.PNG)

Nada de especial aqui, você tem que dar o nome do evento
IFTTT no Jeedom e, em seguida, coloque os valores para passar para o IFTTT, aqui
condições meteorológicas no ingrediente value1

> **Tip**
>
> Lado Jeedom você pode, se você pedir um subtipo
> Por exemplo, coloque a tag \#message \# em um ou mais
> Campos "Valor"". Portanto, no seu cenário, o valor da mensagem será
> tranmis na IFTTT. O mesmo é possível com \#title \#, \#color \#,
> \#slider\#

Enviando informações de IFTTT para Jeedom 
========================================

Também é possível fazer o contrário, enviando informações de
IFTTT para Jeedom. Veja como enviar uma mensagem
informações quando o telefone entra em uma determinada área. Primeiro
o que fazer, crie um novo applet :

![ifttt25](../images/ifttt25.png)

Depois clique em "this" :

![ifttt26](../images/ifttt26.png)

Selecione "Localização" :

![ifttt27](../images/ifttt27.png)

Escolha seu gatilho (aqui eu pegarei quando entrarmos)
uma área) :

![ifttt28](../images/ifttt28.png)

Marque sua área e faça "Create Trigger" :

![ifttt29](../images/ifttt29.png)

Clique em "that" :

![ifttt30](../images/ifttt30.png)

Procure por "Webhooks" e clique nele :

![ifttt31](../images/ifttt31.png)

Clique em "Fazer uma solicitação da web" :

![ifttt32](../images/ifttt32.png)

No lado da Jeedom, no seu equipamento IFTTT, crie uma ordem de tipo
info / other (ou binário, se você quiser apenas saber se está no diretório
área), assim :

![ifttt33](../images/ifttt33.PNG)

-   Muito importante aqui : recuperar o ID do pedido (aqui 5369).

Em seguida, retornamos ao IFTTT e, em nossos webhooks, daremos a ele
o URL para ligar. Este é o passo mais complicado, encontre o seu
URL de acesso externo :

-   Você está usando o DNS jeedom, então isso é :
    [https://XXXXX.dns.jeedom.com/core/api/jeeApi.php?apikey=\#APIKEY\#&type=ifttt&id=\#IDCMD\#&value=\#VALEUR\#](https://XXXXX.dns.jeedom.com/core/api/jeeApi.php?apikey=#APIKEY#&type=ifttt&id=#IDCMD#&value=#VALEUR#).
    Atenção, se você tiver um endereço em / jeedom, deverá pensar em
    adicione-o antes do / core

-   Você tem seu próprio DNS, o URL é da forma
    [http://\#VOTRE\_DNS\#/core/api/jeeApi.php?apikey=\#APIKEY\#&type=ifttt&id=\#IDCMD\#&value=\#VALEUR\#](http://#VOTRE_DNS#/core/api/jeeApi.php?apikey=#APIKEY#&type=ifttt&id=#IDCMD#&value=#VALEUR#).
    Atenção, se você tiver um endereço em / jeedom, deverá pensar em
    adicione-o antes do / core

Lembre-se de substituir :

-   \#APIKEY\# : pela sua chave API JEEDOM (geralmente é
    → Administração → Configuração)

-   \#IDCMD\# : pelo ID do seu pedido criado anteriormente

-   \#VALEUR\# : pelo valor que você deseja atribuir ao seu pedido.
    Atenção aqui os espaços devem ser substituídos por% 20 (e
    melhor evitar caracteres especiais), ex : Excluindo% 20zona

É isso que dá :

![ifttt34](../images/ifttt34.png)

Lembre-se de colocar o método em Get e clique em "Criar Ação".

Dê um título aos seus applets e clique em "Criar ação". E
aqui, assim que você entrar na área de Jeedom será notificado.

> **Important**
>
> Você também precisa fazer uma receita para deixar a área, caso contrário, o Jeedom não
> não será notificado quando você sair da área

> **NOTE**
>
> Para obter o URL do webhook em ifttt, você precisa acessar [aqui](https://ifttt.com/maker_webhooks) depois clique na documentação
