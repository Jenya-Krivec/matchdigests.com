<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"1XBET Mobile App Review"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de 1XBET"}',
             'value_fr' => '{"0":"Revue de l\'application mobile 1XBET"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel da 1XBET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Mobile applications are an integral part of our world, and online betting is no exception. The bookmaker 1XBET, which has long gained popularity among players worldwide, offers its own mobile apps for Android and iOS. These applications make it easy to place sports bets, deposit funds, withdraw winnings, and watch live sports broadcasts. Let’s take a closer look at the features, advantages, and disadvantages of 1XBET\'s mobile apps, as well as the installation process."}',
             'value_es' => '{"0":"Las aplicaciones móviles son una parte fundamental de nuestro mundo, y las apuestas en línea no son una excepción. La casa de apuestas 1XBET, que desde hace tiempo goza de gran popularidad entre los jugadores de todo el mundo, ofrece sus propias aplicaciones móviles para Android e iOS. Estas apps permiten apostar fácilmente en deportes, hacer depósitos, retirar fondos y ver transmisiones deportivas en directo. Veamos en detalle las funcionalidades, ventajas y desventajas de las aplicaciones móviles de 1XBET, así como su proceso de instalación."}',
             'value_fr' => '{"0":"Les applications mobiles font partie intégrante de notre monde, et les paris en ligne ne font pas exception. Le bookmaker 1XBET, qui a depuis longtemps conquis les joueurs du monde entier, propose ses propres applications mobiles pour Android et iOS. Ces applications permettent de parier facilement sur le sport, de déposer de l\'argent, de retirer des fonds et de regarder des retransmissions sportives en direct. Examinons en détail les fonctionnalités, les avantages et les inconvénients des applications mobiles de 1XBET, ainsi que le processus d\'installation."}',
             'value_pt' => '{"0":"Os aplicativos móveis são uma parte essencial do nosso mundo, e as apostas online não são exceção. A casa de apostas 1XBET, que há muito tempo conquistou popularidade entre jogadores em todo o mundo, oferece seus próprios aplicativos móveis para Android e iOS. Esses apps permitem fazer apostas esportivas com facilidade, depositar dinheiro, sacar ganhos e assistir a transmissões ao vivo de eventos esportivos. Vamos analisar em detalhes as funcionalidades, vantagens e desvantagens dos aplicativos móveis da 1XBET, bem como o processo de instalação."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Pros and Cons of the 1XBET Mobile Apps"}',
             'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 1XBET"}',
             'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 1XBET"}',
             'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 1XBET"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"User-friendly interface",
                                 "1":"Wide selection of bets on sports, esports, and casino",
                                 "2":"Push notifications about winnings, promotions, and matches",
                                 "3":"Free access to LIVE broadcasts",
                                 "4":"Deposit and withdrawal options",
                                 "5":"Support for more than 50 languages"},
                             "1":
                                {"0":"The app is not available on the Play Market and requires manual installation",
                                 "1":"Limited access in some countries without a VPN"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz fácil de usar",
                                 "1":"Amplia variedad de apuestas en deportes, eSports y casino",
                                 "2":"Notificaciones push sobre ganancias, promociones y partidos",
                                 "3":"Acceso gratuito a transmisiones en vivo",
                                 "4":"Opciones para depositar y retirar fondos",
                                 "5":"Soporte para más de 50 idiomas"},
                             "1":
                                {"0":"La aplicación no está disponible en Play Market y requiere instalación manual",
                                 "1":"Acceso limitado en algunos países sin una VPN"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface conviviale",
                                 "1":"Large choix de paris sur le sport, l\'eSport et le casino",
                                 "2":"Notifications push sur les gains, promotions et matchs",
                                 "3":"Accès gratuit aux retransmissions en direct",
                                 "4":"Options de dépôt et de retrait",
                                 "5":"Prise en charge de plus de 50 langues"},
                             "1":
                                {"0":"L\'application n\'est pas disponible sur le Play Market et nécessite une installation manuelle",
                                 "1":"Accès limité dans certains pays sans VPN"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface intuitiva",
                                 "1":"Grande variedade de apostas em esportes, eSports e cassino",
                                 "2":"Notificações push sobre ganhos, promoções e partidas",
                                 "3":"Acesso gratuito a transmissões ao vivo",
                                 "4":"Opções de depósito e saque",
                                 "5":"Suporte para mais de 50 idiomas"},
                             "1":
                                {"0":"O aplicativo não está disponível na Play Market e requer instalação manual",
                                 "1":"Acesso limitado em alguns países sem o uso de VPN"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"How to Install the 1XBET App on Android"}',
             'value_es' => '{"0":"Cómo instalar la aplicación de 1XBET en Android"}',
             'value_fr' => '{"0":"Comment installer l\'application 1XBET sur Android"}',
             'value_pt' => '{"0":"Como instalar o aplicativo da 1XBET no Android"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Due to Google\'s policy on gambling, the mobile app is not available on the Play Market, so it must be downloaded from the official 1XBET website. However, there’s no need to worry — manual installation is not a complicated process. To make it even easier, below we provide a step-by-step guide to installing the mobile app."}',
             'value_es' => '{"0":"Debido a la política de Google sobre los juegos de azar, la aplicación móvil no está disponible en Play Market, por lo que debe descargarse desde el sitio web oficial de 1XBET. Pero no hay razón para preocuparse, ya que la instalación manual no es un proceso complicado. Para facilitar aún más el proceso, a continuación ofrecemos una guía paso a paso para instalar la aplicación móvil."}',
             'value_fr' => '{"0":"En raison de la politique de Google concernant les jeux d\'argent, l\'application mobile n\'est pas disponible sur le Play Market et doit être téléchargée depuis le site officiel de 1XBET. Toutefois, il n’y a pas lieu de s’inquiéter, car l’installation manuelle n’est pas une procédure compliquée. Pour vous aider, nous vous proposons ci-dessous un guide étape par étape pour installer l’application mobile."}',
             'value_pt' => '{"0":"Devido à política do Google em relação a jogos de azar, o aplicativo móvel não está disponível na Play Market, por isso deve ser baixado no site oficial da 1XBET. No entanto, não há motivo para preocupação, pois a instalação manual não é um processo complicado. Para facilitar ainda mais, abaixo fornecemos um guia passo a passo para instalar o aplicativo móvel."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list_v2',
             'value_en' => '{"0":"Go to the official 1XBET website using your smartphone browser.",
                             "1":"In the top menu, find the «Mobile Apps» section.",
                             "2":"Click «Download for Android».",
                             "3":"Enable the «Allow installation from unknown sources» option in your phone’s settings.",
                             "4":"Open the downloaded APK file and tap «Install».",
                             "5":"Once the installation is complete, open the app and log in or register."}',
             'value_es' => '{"0":"Ve al sitio web oficial de 1XBET desde el navegador de tu smartphone.",
                             "1":"En el menú superior, busca la sección «Aplicaciones móviles».",
                             "2":"Haz clic en «Descargar para Android».",
                             "3":"Activa la opción «Permitir la instalación desde fuentes desconocidas» en la configuración del teléfono.",
                             "4":"Abre el archivo APK descargado y pulsa «Instalar».",
                             "5":"Una vez finalizada la instalación, abre la aplicación e inicia sesión o regístrate."}',
             'value_fr' => '{"0":"Rendez-vous sur le site officiel de 1XBET depuis le navigateur de votre smartphone.",
                             "1":"Dans le menu supérieur, trouvez la section « Applications mobiles ».",
                             "2":"Cliquez sur « Télécharger pour Android ».",
                             "3":"Activez l’option « Autoriser l’installation depuis des sources inconnues » dans les paramètres du téléphone.",
                             "4":"Ouvrez le fichier APK téléchargé et appuyez sur « Installer ».",
                             "5":"Une fois l’installation terminée, ouvrez l’application et connectez-vous ou inscrivez-vous."}',
             'value_pt' => '{"0":"Acesse o site oficial da 1XBET pelo navegador do seu smartphone.",
                             "1":"No menu superior, encontre a seção «Aplicativos móveis».",
                             "2":"Clique em «Baixar para Android».",
                             "3":"Ative a opção «Permitir instalação de fontes desconhecidas» nas configurações do telefone.",
                             "4":"Abra o arquivo APK baixado e toque em «Instalar».",
                             "5":"Após a conclusão da instalação, abra o aplicativo e faça login ou cadastre-se."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"How to Install the 1XBET App on iOS (iPhone, iPad)"}',
             'value_es' => '{"0":"Cómo instalar la aplicación de 1XBET en iOS (iPhone, iPad)"}',
             'value_fr' => '{"0":"Comment installer l\'application 1XBET sur iOS (iPhone, iPad)"}',
             'value_pt' => '{"0":"Como instalar o aplicativo da 1XBET no iOS (iPhone, iPad)"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, installing the app is much easier, as it is available in the App Store. Here is a step-by-step guide to ensure the installation process is clear and hassle-free."}',
             'value_es' => '{"0":"Para los usuarios de iOS, la instalación de la aplicación es mucho más sencilla, ya que está disponible en la App Store. A continuación, te ofrecemos una guía paso a paso para que el proceso de instalación no te genere dudas."}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, l’installation de l’application est beaucoup plus simple, car elle est disponible sur l’App Store. Voici un guide étape par étape pour que le processus d’installation soit clair et sans difficulté."}',
             'value_pt' => '{"0":"Para os usuários de iOS, a instalação do aplicativo é muito mais simples, pois ele está disponível na App Store. A seguir, apresentamos um guia passo a passo para que o processo de instalação não gere dúvidas."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list_v2',
             'value_en' => '{"0":"Open the App Store on your iPhone or iPad.",
                             "1":"Type «1XBET» in the search bar.",
                             "2":"Find the official app and tap «Download».",
                             "3":"After installation, open the app and log in or register."}',
             'value_es' => '{"0":"Abre la App Store en tu iPhone o iPad.",
                             "1":"Escribe «1XBET» en la barra de búsqueda.",
                             "2":"Encuentra la aplicación oficial y pulsa «Descargar».",
                             "3":"Una vez instalada, abre la app e inicia sesión o regístrate."}',
             'value_fr' => '{"0":"Ouvrez l\'App Store sur votre iPhone ou iPad.",
                             "1":"Tapez « 1XBET » dans la barre de recherche.",
                             "2":"Trouvez l\'application officielle et appuyez sur « Télécharger ».",
                             "3":"Une fois l\'application installée, ouvrez-la et connectez-vous ou inscrivez-vous."}',
             'value_pt' => '{"0":"Abra a App Store no seu iPhone ou iPad.",
                             "1":"Digite «1XBET» na barra de pesquisa.",
                             "2":"Encontre o aplicativo oficial e toque em «Baixar».",
                             "3":"Após a instalação, abra o aplicativo e faça login ou registre-se."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"However, in some countries, downloading from the App Store may be unavailable. Therefore, you will need to change your Apple ID region to Cyprus or Nigeria in the settings and then search for the mobile app again. Here’s how to do it:"}',
             'value_es' => '{"0":"Sin embargo, en algunos países puede no estar disponible la descarga desde la App Store. Por lo tanto, necesitarás cambiar la región de tu Apple ID a Chipre o Nigeria en la configuración y luego buscar nuevamente la aplicación móvil. Aquí te mostramos cómo hacerlo:"}',
             'value_fr' => '{"0":"Cependant, dans certains pays, le téléchargement depuis l\'App Store peut ne pas être disponible. Vous devrez donc changer la région de votre identifiant Apple en Chypre ou au Nigeria dans les paramètres, puis rechercher à nouveau l’application mobile. Voici comment procéder :"}',
             'value_pt' => '{"0":"No entanto, em alguns países, o download pela App Store pode não estar disponível. Portanto, você precisará alterar a região do seu Apple ID para Chipre ou Nigéria nas configurações e, em seguida, procurar o aplicativo móvel novamente. Veja como fazer isso:"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list_v2',
             'value_en' => '{"0":"Open Settings.",
                             "1":"Tap your name at the top to access your Apple ID.",
                             "2":"Select Media & Purchases.",
                             "3":"Tap View Account.",
                             "4":"Choose Country/Region.",
                             "5":"Tap Change Country or Region.",
                             "6":"From the list, select Cyprus or Nigeria.",
                             "7":"Review the terms and tap Agree.",
                             "8":"Enter the address and other details corresponding to the selected country, for example, a hotel or office address.",
                             "9":"Confirm the changes."}',
             'value_es' => '{"0":"Abre Configuración.",
                             "1":"Toca tu nombre en la parte superior para acceder a tu Apple ID.",
                             "2":"Selecciona Medios y compras.",
                             "3":"Pulsa Ver cuenta.",
                             "4":"Elige País/Región.",
                             "5":"Toca Cambiar país o región.",
                             "6":"En la lista, selecciona Chipre o Nigeria.",
                             "7":"Revisa los términos y pulsa Aceptar.",
                             "8":"Introduce la dirección y otros datos correspondientes al país seleccionado, por ejemplo, la dirección de un hotel u oficina.",
                             "9":"Confirma los cambios."}',
             'value_fr' => '{"0":"Ouvrez les Réglages.",
                             "1":"Touchez votre nom en haut pour accéder à votre Identifiant Apple.",
                             "2":"Sélectionnez Médias et achats.",
                             "3":"Appuyez sur Voir le compte.",
                             "4":"Choisissez Pays/Région.",
                             "5":"Touchez Changer de pays ou de région.",
                             "6":"Dans la liste, sélectionnez Chypre ou Nigéria.",
                             "7":"Prenez connaissance des conditions et appuyez sur Accepter.",
                             "8":"Entrez l’adresse et d’autres informations correspondant au pays choisi, par exemple, l’adresse d’un hôtel ou d’un bureau",
                             "9":"Confirmez les modifications."}',
             'value_pt' => '{"0":"Abra Ajustes.",
                             "1":"Toque no seu nome no topo para acessar seu Apple ID.",
                             "2":"Selecione Mídia e compras.",
                             "3":"Toque em Visualizar conta.",
                             "4":"Escolha País/Região.",
                             "5":"Toque em Alterar país ou região.",
                             "6":"Na lista, selecione Chipre ou Nigéria.",
                             "7":"Leia os termos e toque em Aceitar.",
                             "8":"Insira o endereço e outros dados correspondentes ao país escolhido, por exemplo, endereço de um hotel ou escritório.",
                             "9":"Confirme as alterações."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Features of the 1XBET Mobile App"}',
             'value_es' => '{"0":"Funciones de la aplicación móvil de 1XBET"}',
             'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 1XBET"}',
             'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 1XBET"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET mobile apps are a modern tool for comfortable betting anytime and anywhere. Despite some technical limitations, they offer a wide range of features:"}',
             'value_es' => '{"0":"Las aplicaciones móviles de 1XBET son una herramienta moderna para apostar con comodidad en cualquier momento y lugar. A pesar de algunas limitaciones técnicas, ofrecen una amplia gama de funciones:"}',
             'value_fr' => '{"0":"Les applications mobiles 1XBET sont un outil moderne pour parier confortablement à tout moment et en tout lieu. Malgré certaines limitations techniques, elles offrent une large gamme de fonctionnalités :"}',
             'value_pt' => '{"0":"Os aplicativos móveis da 1XBET são uma ferramenta moderna para apostas confortáveis a qualquer hora e em qualquer lugar. Apesar de algumas limitações técnicas, oferecem uma ampla gama de funcionalidades:"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list_v2',
             'value_en' => '{"0":"Place live sports bets",
                             "1":"Play casino games, slots, poker, blackjack, and roulette",
                             "2":"Watch live match broadcasts and view statistics",
                             "3":"Deposit and withdraw funds",
                             "4":"Receive bonuses and participate in promotions",
                             "5":"Contact customer support 24/7"}',
             'value_es' => '{"0":"Realizar apuestas deportivas en tiempo real",
                             "1":"Jugar en el casino, tragamonedas, póker, blackjack y ruleta",
                             "2":"Ver transmisiones en vivo de los partidos y consultar estadísticas",
                             "3":"Depositar y retirar fondos",
                             "4":"Recibir bonos y participar en promociones",
                             "5":"Contactar con el soporte técnico 24/7"}',
             'value_fr' => '{"0":"Placer des paris sportifs en direct",
                             "1":"Jouer au casino, machines à sous, poker, blackjack et roulette",
                             "2":"Regarder les retransmissions en direct des matchs et consulter les statistiques",
                             "3":"Déposer et retirer des fonds",
                             "4":"Recevoir des bonus et participer aux promotions",
                             "5":"Contacter le service client 24h/24 et 7j/7"}',
             'value_pt' => '{"0":"Fazer apostas esportivas ao vivo",
                             "1":"Jogar no cassino, slots, pôquer, blackjack e roleta",
                             "2":"Assistir a transmissões ao vivo de partidas e ver estatísticas",
                             "3":"Depositar e sacar fundos",
                             "4":"Receber bônus e participar de promoções",
                             "5":"Entrar em contato com o suporte ao cliente 24/7"}',
             'order' => 16
            ]
        );
    }
}
