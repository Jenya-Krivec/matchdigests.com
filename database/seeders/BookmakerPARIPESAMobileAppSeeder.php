<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
             'value_en' => '{"0":"Mobile App Review"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil"}',
             'value_fr' => '{"0":"Revue de l\'application mobile"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA, like most modern bookmakers, offers users convenient mobile apps for Android and iOS. Thanks to these apps, sports betting and gambling become maximally accessible, regardless of your location."}',
             'value_es' => '{"0":"PARIPESA, al igual que la mayoría de las casas de apuestas modernas, ofrece a los usuarios aplicaciones móviles convenientes para Android y iOS. Gracias a estas aplicaciones, las apuestas deportivas y los juegos de azar son totalmente accesibles, independientemente de tu ubicación."}',
             'value_fr' => '{"0":"PARIPESA, comme la plupart des bookmakers modernes, propose aux utilisateurs des applications mobiles pratiques pour Android et iOS. Grâce à ces applications, les paris sportifs et les jeux d’argent deviennent pleinement accessibles, quel que soit votre emplacement."}',
             'value_pt' => '{"0":"PARIPESA, como a maioria dos bookmakers modernos, oferece aos usuários aplicativos móveis convenientes para Android e iOS. Graças a esses aplicativos, as apostas esportivas e jogos de azar tornam-se altamente acessíveis, independentemente da sua localização."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The PARIPESA mobile applications are designed with a focus on speed, ease of use, and functionality, making them an ideal choice for those who value comfort and mobility. The apps support all key site features, allowing you to play anytime and anywhere."}',
             'value_es' => '{"0":"Las aplicaciones móviles de PARIPESA están diseñadas con énfasis en la velocidad, la facilidad de uso y la funcionalidad, lo que las convierte en una opción ideal para quienes valoran la comodidad y la movilidad. Las apps admiten todas las funciones clave del sitio, permitiéndote jugar en cualquier momento y lugar."}',
             'value_fr' => '{"0":"Les applications mobiles PARIPESA sont conçues en mettant l’accent sur la rapidité, la simplicité d’utilisation et la fonctionnalité, ce qui en fait un choix idéal pour ceux qui apprécient le confort et la mobilité. Les applications prennent en charge toutes les fonctionnalités clés du site, vous permettant de jouer à tout moment et en tout lieu."}',
             'value_pt' => '{"0":"Os aplicativos móveis da PARIPESA são desenvolvidos com foco na velocidade, facilidade de uso e funcionalidade, tornando-os uma escolha ideal para quem valoriza conforto e mobilidade. Os apps suportam todas as funcionalidades principais do site, permitindo jogar a qualquer hora e em qualquer lugar."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full platform functionality",
                                 "1":"Fast performance",
                                 "2":"Convenient and intuitive interface",
                                 "3":"Detailed statistics",
                                 "4":"Ability to perform transactions",
                                 "5":"Transaction history viewing",
                                 "6":"24/7 support"},
                             "1":
                                {"0":"Android app not available on Google Play",
                                 "1":"Occasional update delays for iOS"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa de la plataforma",
                                 "1":"Rendimiento rápido",
                                 "2":"Interfaz conveniente e intuitiva",
                                 "3":"Estadísticas detalladas",
                                 "4":"Posibilidad de realizar transacciones",
                                 "5":"Visualización del historial de transacciones",
                                 "6":"Soporte 24/7"},
                             "1":
                                {"0":"La aplicación para Android no está disponible en Google Play",
                                 "1":"Retrasos ocasionales en las actualizaciones para iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalités complètes de la plateforme",
                                 "1":"Performance rapide",
                                 "2":"Interface pratique et intuitive",
                                 "3":"Statistiques détaillées",
                                 "4":"Possibilité d’effectuer des transactions",
                                 "5":"Consultation de l’historique des transactions",
                                 "6":"Support 24h/24 et 7j/7"},
                             "1":
                                {"0":"L’application Android n’est pas disponible sur Google Play",
                                 "1":"Retards occasionnels dans les mises à jour iOS"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa da plataforma",
                                 "1":"Desempenho rápido",
                                 "2":"Interface conveniente e intuitiva",
                                 "3":"Estatísticas detalhadas",
                                 "4":"Capacidade de realizar transações",
                                 "5":"Visualização do histórico de transações",
                                 "6":"Suporte 24/7"},
                             "1":
                                {"0":"Aplicativo Android não disponível no Google Play",
                                 "1":"Atrasos ocasionais nas atualizações para iOS"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For Android smartphone users, we have prepared a simple step-by-step guide to installing the PARIPESA mobile app."}',
             'value_es' => '{"0":"Para los usuarios de smartphones Android, hemos preparado una sencilla guía paso a paso para instalar la aplicación móvil de PARIPESA."}',
             'value_fr' => '{"0":"Pour les utilisateurs de smartphones Android, nous avons préparé un guide simple étape par étape pour installer l’application mobile PARIPESA."}',
             'value_pt' => '{"0":"Para os usuários de smartphones Android, preparamos um guia simples passo a passo para instalar o aplicativo móvel PARIPESA."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the browser on your Android smartphone and go to the official PARIPESA website."}',
             'value_es' => '{"0":"1. Abra el navegador en su teléfono Android y visite el sitio oficial de PARIPESA."}',
             'value_fr' => '{"0":"1. Ouvrez le navigateur sur votre smartphone Android et rendez-vous sur le site officiel de PARIPESA."}',
             'value_pt' => '{"0":"1. Abra o navegador no seu smartphone Android e acesse o site oficial da PARIPESA."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"2. In the site menu, find the «Mobile App» section or a banner with a link to download the APK file."}',
             'value_es' => '{"0":"2. En el menú del sitio, busque la sección «Aplicación móvil» o un banner con el enlace para descargar el archivo APK."}',
             'value_fr' => '{"0":"2. Dans le menu du site, trouvez la section « Application mobile » ou une bannière avec un lien pour télécharger le fichier APK."}',
             'value_pt' => '{"0":"2. No menu do site, encontre a seção «Aplicativo móvel» ou um banner com o link para baixar o arquivo APK."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"3. Click the link to download the APK file, which will start downloading automatically to your device."}',
             'value_es' => '{"0":"3. Haga clic en el enlace para descargar el archivo APK, que comenzará a descargarse automáticamente en su dispositivo."}',
             'value_fr' => '{"0":"3. Cliquez sur le lien pour télécharger le fichier APK, qui commencera automatiquement à se télécharger sur votre appareil."}',
             'value_pt' => '{"0":"3. Clique no link para baixar o arquivo APK, que começará a ser baixado automaticamente no seu dispositivo."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"4. Before installation, go to your phone’s Settings → Security → allow installation of apps from unknown sources."}',
             'value_es' => '{"0":"4. Antes de la instalación, vaya a Configuración → Seguridad → permita la instalación de aplicaciones de fuentes desconocidas."}',
             'value_fr' => '{"0":"4. Avant l\'installation, allez dans Paramètres → Sécurité → autorisez l\'installation d\'applications provenant de sources inconnues."}',
             'value_pt' => '{"0":"4. Antes da instalação, vá para Configurações → Segurança → permita a instalação de aplicativos de fontes desconhecidas."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded APK file and confirm the installation."}',
             'value_es' => '{"0":"5. Abra el archivo APK descargado y confirme la instalación."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier APK téléchargé et confirmez l\'installation."}',
             'value_pt' => '{"0":"5. Abra o arquivo APK baixado e confirme a instalação."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"6. After installation, open the app, log into your account or register, and enjoy betting anywhere."}',
             'value_es' => '{"0":"6. Después de la instalación, abra la aplicación, inicie sesión o regístrese y disfrute de las apuestas en cualquier lugar."}',
             'value_fr' => '{"0":"6. Après l\'installation, ouvrez l\'application, connectez-vous ou inscrivez-vous et profitez des paris où que vous soyez."}',
             'value_pt' => '{"0":"6. Após a instalação, abra o aplicativo, faça login na sua conta ou registre-se e aproveite as apostas em qualquer lugar."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"We have not forgotten users of smartphones with iOS and have prepared a step-by-step guide for installing the mobile app."}',
             'value_es' => '{"0":"No nos hemos olvidado de los usuarios de smartphones con iOS y hemos preparado una guía paso a paso para instalar la aplicación móvil."}',
             'value_fr' => '{"0":"Nous n\'avons pas oublié les utilisateurs de smartphones sous iOS et avons préparé un guide étape par étape pour l\'installation de l\'application mobile."}',
             'value_pt' => '{"0":"Não esquecemos os usuários de smartphones com iOS e preparamos um guia passo a passo para a instalação do aplicativo móvel."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the Safari browser on your iPhone or iPad and go to the official PARIPESA website."}',
             'value_es' => '{"0":"1. Abra el navegador Safari en su iPhone o iPad y vaya al sitio web oficial de PARIPESA."}',
             'value_fr' => '{"0":"1. Ouvrez le navigateur Safari sur votre iPhone ou iPad et rendez-vous sur le site officiel de PARIPESA."}',
             'value_pt' => '{"0":"1. Abra o navegador Safari no seu iPhone ou iPad e acesse o site oficial da PARIPESA."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"2. In the site menu, find the «Mobile App» section and select the iOS version."}',
             'value_es' => '{"0":"2. En el menú del sitio, busque la sección «Aplicación móvil» y seleccione la versión para iOS."}',
             'value_fr' => '{"0":"2. Dans le menu du site, trouvez la section « Application mobile » et choisissez la version iOS."}',
             'value_pt' => '{"0":"2. No menu do site, encontre a seção «Aplicativo móvel» e selecione a versão para iOS."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"3. You will be redirected to the App Store (or directly to the download page depending on your region)."}',
             'value_es' => '{"0":"3. Será redirigido a la App Store (o directamente a la página de descarga según su región)."}',
             'value_fr' => '{"0":"3. Vous serez redirigé vers l’App Store (ou directement vers la page de téléchargement selon votre région)."}',
             'value_pt' => '{"0":"3. Você será redirecionado para a App Store (ou diretamente para a página de download, dependendo da sua região)."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"4. Tap the «Get» or «Download» button. Confirm the installation using your Apple ID, Face ID, or Touch ID."}',
             'value_es' => '{"0":"4. Pulse el botón «Obtener» o «Descargar». Confirme la instalación con su Apple ID, Face ID o Touch ID."}',
             'value_fr' => '{"0":"4. Appuyez sur le bouton « Obtenir » ou « Télécharger ». Confirmez l’installation avec votre identifiant Apple, Face ID ou Touch ID."}',
             'value_pt' => '{"0":"4. Toque no botão «Obter» ou «Baixar». Confirme a instalação usando seu Apple ID, Face ID ou Touch ID."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"5. After installation is complete, open the app, log into your account, or register."}',
             'value_es' => '{"0":"5. Tras completar la instalación, abra la aplicación, inicie sesión en su cuenta o regístrese."}',
             'value_fr' => '{"0":"5. Une fois l’installation terminée, ouvrez l’application, connectez-vous à votre compte ou inscrivez-vous."}',
             'value_pt' => '{"0":"5. Após a instalação ser concluída, abra o aplicativo, faça login na sua conta ou registre-se."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"6. Now you can enjoy the full functionality of PARIPESA in a convenient mobile format."}',
             'value_es' => '{"0":"6. Ahora puede disfrutar de toda la funcionalidad de PARIPESA en un formato móvil cómodo."}',
             'value_fr' => '{"0":"6. Vous pouvez maintenant profiter de toutes les fonctionnalités de PARIPESA dans un format mobile pratique."}',
             'value_pt' => '{"0":"6. Agora você pode aproveitar todas as funcionalidades da PARIPESA em um formato móvel conveniente."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA mobile apps offer the full range of features available on the desktop version of the site. You can place both pre-match and live bets, quickly view updated odds, and use the extended line of sports events, including esports and virtual sports. The app supports a detailed match tracker that helps make informed decisions during live betting."}',
             'value_es' => '{"0":"Las aplicaciones móviles de PARIPESA ofrecen toda la gama de funciones disponibles en la versión de escritorio del sitio. Puedes realizar apuestas pre-partido y en vivo, ver rápidamente las cuotas actualizadas y utilizar la amplia línea de eventos deportivos, incluidos los deportes electrónicos y los deportes virtuales. La aplicación cuenta con un rastreador detallado de partidos que ayuda a tomar decisiones informadas durante las apuestas en vivo."}',
             'value_fr' => '{"0":"Les applications mobiles PARIPESA offrent l\'ensemble des fonctionnalités disponibles sur la version de bureau du site. Vous pouvez placer des paris pré-match et en direct, consulter rapidement les cotes mises à jour et utiliser la large gamme d’événements sportifs, y compris l’esport et les sports virtuels. L’application intègre un suivi détaillé des matchs qui aide à prendre des décisions éclairées lors des paris en direct."}',
             'value_pt' => '{"0":"Os aplicativos móveis da PARIPESA oferecem toda a gama de funcionalidades disponíveis na versão desktop do site. Você pode fazer apostas pré-jogo e ao vivo, visualizar rapidamente as cotações atualizadas e usar a linha estendida de eventos esportivos, incluindo eSports e esportes virtuais. O aplicativo suporta um rastreador detalhado de partidas que ajuda a tomar decisões informadas durante as apostas ao vivo."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Besides betting, the mobile app provides full access to the casino with a large number of games and live casino with real dealers. Users can quickly deposit funds and withdraw winnings using convenient payment systems, as well as manage bonuses and promo codes. The built-in support chat operates 24/7, ensuring prompt assistance right within the app."}',
             'value_es' => '{"0":"Además de las apuestas, la aplicación móvil ofrece acceso completo al casino con una gran cantidad de juegos y casino en vivo con crupieres reales. Los usuarios pueden depositar fondos y retirar ganancias rápidamente mediante sistemas de pago convenientes, así como gestionar bonos y códigos promocionales. El chat de soporte incorporado funciona las 24 horas, asegurando asistencia rápida directamente en la aplicación."}',
             'value_fr' => '{"0":"En plus des paris, l’application mobile donne un accès complet au casino avec un grand nombre de jeux et un casino en direct avec des croupiers réels. Les utilisateurs peuvent rapidement déposer des fonds et retirer leurs gains grâce à des systèmes de paiement pratiques, ainsi que gérer les bonus et les codes promo. Le chat d’assistance intégré fonctionne 24h/24, assurant une aide rapide directement dans l’application."}',
             'value_pt' => '{"0":"Além das apostas, o aplicativo móvel oferece acesso completo ao cassino com uma grande variedade de jogos e cassino ao vivo com dealers reais. Os usuários podem depositar fundos e sacar ganhos rapidamente usando sistemas de pagamento convenientes, além de gerenciar bônus e códigos promocionais. O chat de suporte integrado funciona 24 horas por dia, garantindo assistência rápida diretamente no aplicativo."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The interface is designed to be very user-friendly, featuring quick event search, bet type filters, and the ability to view statistics and your activity history."}',
             'value_es' => '{"0":"La interfaz está diseñada para ser muy fácil de usar, con búsqueda rápida de eventos, filtros por tipo de apuestas y la posibilidad de ver estadísticas e historial de actividad."}',
             'value_fr' => '{"0":"L’interface est conçue pour être très intuitive, avec une recherche rapide d’événements, des filtres par type de paris et la possibilité de consulter les statistiques et l’historique de vos activités."}',
             'value_pt' => '{"0":"A interface foi feita para ser muito intuitiva, com busca rápida de eventos, filtros por tipos de apostas e visualização de estatísticas e histórico de suas ações."}',
             'order' => 26
            ]
        );
    }
}
