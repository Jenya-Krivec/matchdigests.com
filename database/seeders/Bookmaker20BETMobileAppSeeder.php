<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is actively developing its mobile segment and offers full-featured apps for Android and a web app for iOS, providing access to all key platform features. Thanks to the modern design and optimized interface, the mobile apps allow you to place bets, deposit funds, withdraw money, and play casino games at any time."}',
             'value_es' => '{"0":"20BET está desarrollando activamente su segmento móvil y ofrece aplicaciones completas para Android y una web app para iOS, que brindan acceso a todas las funciones clave de la plataforma. Gracias al diseño moderno y a la interfaz optimizada, las aplicaciones móviles permiten realizar apuestas, depositar fondos, retirar dinero y jugar a juegos de casino en cualquier momento."}',
             'value_fr' => '{"0":"20BET développe activement son segment mobile et propose des applications complètes pour Android et une web app pour iOS, offrant un accès à toutes les fonctionnalités clés de la plateforme. Grâce à un design moderne et une interface optimisée, les applications mobiles permettent de placer des paris, déposer des fonds, retirer de l’argent et jouer aux jeux de casino à tout moment."}',
             'value_pt' => '{"0":"A 20BET está a desenvolver ativamente o seu segmento móvel e oferece aplicativos completos para Android e um web app para iOS, proporcionando acesso a todas as funcionalidades principais da plataforma. Graças ao design moderno e à interface otimizada, os aplicativos móveis permitem fazer apostas, depositar fundos, levantar dinheiro e jogar jogos de casino a qualquer momento."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"This gives you a convenient tool at your fingertips, providing quick access to sports betting, casino games, and entertainment without needing to use the desktop version."}',
             'value_es' => '{"0":"Así, tienes una herramienta conveniente al alcance de la mano, que proporciona acceso rápido a apuestas deportivas, juegos de casino y entretenimiento sin necesidad de usar la versión de escritorio."}',
             'value_fr' => '{"0":"Ainsi, vous disposez d’un outil pratique à portée de main, offrant un accès rapide aux paris sportifs, aux jeux de casino et aux divertissements sans avoir besoin d’utiliser la version de bureau."}',
             'value_pt' => '{"0":"Dessa forma, você tem uma ferramenta conveniente à mão, que proporciona acesso rápido a apostas desportivas, jogos de casino e entretenimento sem necessidade de usar a versão de desktop."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full functionality",
                                 "1":"Fast odds updates",
                                 "2":"Convenient navigation",
                                 "3":"Quick access to live events",
                                 "4":"Ability to deposit and withdraw funds",
                                 "5":"Push notifications"},
                             "1":
                                {"0":"No Android app in Google Play Store",
                                 "1":"No app for iOS"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa",
                                 "1":"Actualización rápida de cuotas",
                                 "2":"Navegación conveniente",
                                 "3":"Acceso rápido a eventos en vivo",
                                 "4":"Posibilidad de depositar y retirar fondos",
                                 "5":"Notificaciones push"},
                             "1":
                                {"0":"No hay aplicación de Android en Google Play Store",
                                 "1":"No hay aplicación para iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète",
                                 "1":"Mise à jour rapide des cotes",
                                 "2":"Navigation pratique",
                                 "3":"Accès rapide aux événements en direct",
                                 "4":"Possibilité de déposer et retirer des fonds",
                                 "5":"Notifications push"},
                             "1":
                                {"0":"Pas d’application Android sur Google Play Store",
                                 "1":"Pas d’application pour iOS"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa",
                                 "1":"Atualização rápida das odds",
                                 "2":"Navegação conveniente",
                                 "3":"Acesso rápido a eventos ao vivo",
                                 "4":"Possibilidade de depositar e levantar fundos",
                                 "5":"Notificações push"},
                             "1":
                                {"0":"Não há aplicativo Android na Google Play Store",
                                 "1":"Não há aplicativo para iOS"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Since Google Play Store policies prohibit such apps, you will not be able to download it in the traditional way. However, it is possible to download the app from the official website. Here’s how to do it:"}',
             'value_es' => '{"0":"Dado que las políticas de Google Play Store prohíben este tipo de aplicaciones, no podrá descargarla de la manera tradicional. Sin embargo, es posible descargar la aplicación desde el sitio web oficial. Así es como hacerlo:"}',
             'value_fr' => '{"0":"Comme les politiques de Google Play Store interdisent ce type d’applications, vous ne pourrez pas le télécharger de manière traditionnelle. Cependant, il est possible de télécharger l’application depuis le site officiel. Voici comment procéder :"}',
             'value_pt' => '{"0":"Como as políticas da Google Play Store proíbem este tipo de aplicativos, você não poderá baixá-lo da maneira tradicional. No entanto, é possível baixar o aplicativo a partir do site oficial. Veja como fazer:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official 20BET website and navigate to the «Mobile App» section."}',
             'value_es' => '{"0":"1. Visite el sitio web oficial de 20BET y vaya a la sección «Aplicación móvil»."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de 20BET et accédez à la section « Application mobile »."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da 20BET e vá para a seção «Aplicativo móvel»."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"2. Scan the QR code using an app on your smartphone."}',
             'value_es' => '{"0":"2. Escanee el código QR usando una aplicación en su smartphone."}',
             'value_fr' => '{"0":"2. Scannez le QR code à l’aide d’une application sur votre smartphone."}',
             'value_pt' => '{"0":"2. Escaneie o código QR usando um aplicativo em seu smartphone."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"3. Click the Install 20BET button and download the .apk file."}',
             'value_es' => '{"0":"3. Haga clic en el botón Instalar 20BET y descargue el archivo .apk."}',
             'value_fr' => '{"0":"3. Cliquez sur le bouton Installer 20BET et téléchargez le fichier .apk."}',
             'value_pt' => '{"0":"3. Clique no botão Instalar 20BET e baixe o arquivo .apk."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"4. In your device settings, allow installation of apps from unknown sources."}',
             'value_es' => '{"0":"4. En la configuración de su dispositivo, permita la instalación de aplicaciones de fuentes desconocidas."}',
             'value_fr' => '{"0":"4. Dans les paramètres de votre appareil, autorisez l’installation d’applications provenant de sources inconnues."}',
             'value_pt' => '{"0":"4. Nas configurações do seu dispositivo, permita a instalação de aplicativos de fontes desconhecidas."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded file and start the installation process."}',
             'value_es' => '{"0":"5. Abra el archivo descargado y comience el proceso de instalación."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier téléchargé et lancez le processus d’installation."}',
             'value_pt' => '{"0":"5. Abra o arquivo baixado e inicie o processo de instalação."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"6. After installation, launch the app and log in or create a new account."}',
             'value_es' => '{"0":"6. Después de la instalación, abra la aplicación e inicie sesión o cree una nueva cuenta."}',
             'value_fr' => '{"0":"6. Après l’installation, lancez l’application et connectez-vous ou créez un nouveau compte."}',
             'value_pt' => '{"0":"6. Após a instalação, abra o aplicativo e faça login ou crie uma nova conta."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"iPhone and iPad users can install the 20BET web app directly from the Safari browser, gaining quick access to the platform in the form of an icon on the home screen. To do this:"}',
             'value_es' => '{"0":"Los usuarios de iPhone y iPad pueden instalar la web app de 20BET directamente desde el navegador Safari, obteniendo un acceso rápido a la plataforma en forma de un icono en la pantalla de inicio. Para ello:"}',
             'value_fr' => '{"0":"Les utilisateurs d’iPhone et d’iPad peuvent installer la web app 20BET directement depuis le navigateur Safari, obtenant un accès rapide à la plateforme sous la forme d’une icône sur l’écran d’accueil. Pour ce faire :"}',
             'value_pt' => '{"0":"Os usuários de iPhone e iPad podem instalar o web app 20BET diretamente do navegador Safari, obtendo acesso rápido à plataforma na forma de um ícone na tela inicial. Para isso:"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"1. Open Safari on your device and go to the official 20BET website."}',
             'value_es' => '{"0":"1. Abra Safari en su dispositivo y vaya al sitio web oficial de 20BET."}',
             'value_fr' => '{"0":"1. Ouvrez Safari sur votre appareil et accédez au site officiel de 20BET."}',
             'value_pt' => '{"0":"1. Abra o Safari no seu dispositivo e acesse o site oficial da 20BET."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"2. Wait for the homepage to fully load."}',
             'value_es' => '{"0":"2. Espere a que la página de inicio se cargue completamente."}',
             'value_fr' => '{"0":"2. Attendez que la page d’accueil soit complètement chargée."}',
             'value_pt' => '{"0":"2. Aguarde até que a página inicial seja totalmente carregada."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"3. At the bottom of the screen, tap the «Share» button (icon of a square with an upward arrow)."}',
             'value_es' => '{"0":"3. En la parte inferior de la pantalla, toque el botón «Compartir» (icono de un cuadrado con una flecha hacia arriba)."}',
             'value_fr' => '{"0":"3. En bas de l’écran, appuyez sur le bouton « Partager » (icône d’un carré avec une flèche vers le haut)."}',
             'value_pt' => '{"0":"3. Na parte inferior da tela, toque no botão «Compartilhar» (ícone de um quadrado com uma seta para cima)."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"4. In the menu that appears, select the «Add to Home Screen» option."}',
             'value_es' => '{"0":"4. En el menú que aparece, seleccione la opción «Agregar a la pantalla de inicio»."}',
             'value_fr' => '{"0":"4. Dans le menu qui apparaît, sélectionnez l’option « Ajouter à l’écran d’accueil »."}',
             'value_pt' => '{"0":"4. No menu que aparece, selecione a opção «Adicionar à Tela Inicial»."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"5. Enter a name for the shortcut (by default it will display «20BET») and confirm the action."}',
             'value_es' => '{"0":"5. Ingrese un nombre para el acceso directo (por defecto aparecerá «20BET») y confirme la acción."}',
             'value_fr' => '{"0":"5. Entrez un nom pour le raccourci (par défaut, « 20BET » sera affiché) et confirmez l’action."}',
             'value_pt' => '{"0":"5. Insira um nome para o atalho (por padrão aparecerá «20BET») e confirme a ação."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET icon will appear on your home screen, allowing you to open the platform with a single tap. The web app functions like a regular app: it opens in full-screen mode, supports quick access to sports events and the casino, and saves your login data, which helps save time when signing in."}',
             'value_es' => '{"0":"El icono de 20BET aparecerá en la pantalla de inicio, permitiéndole abrir la plataforma con un solo toque. La web app funciona como una aplicación normal: se abre en modo de pantalla completa, permite un acceso rápido a eventos deportivos y al casino, y guarda sus datos de inicio de sesión, lo que ayuda a ahorrar tiempo al ingresar."}',
             'value_fr' => '{"0":"L’icône 20BET apparaîtra sur votre écran d’accueil, vous permettant d’ouvrir la plateforme d’un simple tap. La web app fonctionne comme une application classique : elle s’ouvre en plein écran, offre un accès rapide aux événements sportifs et au casino, et conserve vos identifiants, ce qui permet de gagner du temps lors de la connexion."}',
             'value_pt' => '{"0":"O ícone da 20BET aparecerá na tela inicial, permitindo que você abra a plataforma com um único toque. O web app funciona como um aplicativo normal: ele abre em tela cheia, oferece acesso rápido a eventos esportivos e ao cassino, e salva seus dados de login, economizando tempo ao entrar."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET apps provide access to over 40 sports, including football, tennis, basketball, hockey, and eSports, in both pre-match and live modes. The interface is designed for fast bet placement, allowing you to place bets in just a few clicks. The live section is accompanied by detailed statistics and real-time event graphics, greatly enhancing convenience for active players."}',
             'value_es' => '{"0":"Las aplicaciones de 20BET ofrecen acceso a más de 40 deportes, incluidos fútbol, tenis, baloncesto, hockey y eSports, tanto en modo pre-partido como en vivo. La interfaz está diseñada para colocar apuestas rápidamente, lo que permite realizar apuestas en solo unos clics. La sección en vivo viene acompañada de estadísticas detalladas y gráficos de eventos en tiempo real, lo que mejora significativamente la comodidad para los jugadores activos."}',
             'value_fr' => '{"0":"Les applications 20BET offrent un accès à plus de 40 sports, dont le football, le tennis, le basket-ball, le hockey et l’eSport, en modes pré-match et en direct. L’interface est conçue pour un placement rapide des paris, permettant de miser en quelques clics seulement. La section en direct est accompagnée de statistiques détaillées et de graphiques des événements en temps réel, ce qui améliore considérablement la commodité pour les joueurs actifs."}',
             'value_pt' => '{"0":"Os aplicativos 20BET oferecem acesso a mais de 40 esportes, incluindo futebol, tênis, basquete, hóquei e eSports, nos modos pré-jogo e ao vivo. A interface é projetada para apostas rápidas, permitindo fazer apostas em apenas alguns cliques. A seção ao vivo conta com estatísticas detalhadas e gráficos de eventos em tempo real, aumentando significativamente a conveniência para jogadores ativos."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The casino within the mobile app includes thousands of slots, table games, live dealer games, and tournaments. The app supports bonus offers, including welcome bonuses, reload promotions, and loyalty programs. You can also deposit and withdraw funds directly through the app."}',
             'value_es' => '{"0":"El casino dentro de la aplicación móvil incluye miles de tragamonedas, juegos de mesa, juegos con crupieres en vivo y torneos. La aplicación admite ofertas de bonificación, incluidos bonos de bienvenida, promociones de recarga y programas de fidelidad. También puede depositar y retirar fondos directamente desde la aplicación."}',
             'value_fr' => '{"0":"Le casino dans l’application mobile comprend des milliers de machines à sous, de jeux de table, de jeux avec croupiers en direct et de tournois. L’application prend en charge les offres de bonus, y compris les bonus de bienvenue, les promotions de recharge et les programmes de fidélité. Vous pouvez également déposer et retirer des fonds directement via l’application."}',
             'value_pt' => '{"0":"O cassino no aplicativo móvel inclui milhares de slots, jogos de mesa, jogos com dealers ao vivo e torneios. O aplicativo oferece suporte a promoções de bônus, incluindo bônus de boas-vindas, promoções de recarga e programas de fidelidade. Você também pode depositar e sacar fundos diretamente pelo aplicativo."}',
             'order' => 25
            ]
        );
    }
}
