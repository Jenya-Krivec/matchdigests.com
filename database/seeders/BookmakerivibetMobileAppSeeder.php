<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, unlike many other bookmakers, Ivibet does not yet offer dedicated mobile applications for Android or iOS. However, the operator provides full access to all platform features through the optimized mobile version of the website and the Web app."}',
             'value_es' => '{"0":"Lamentablemente, a diferencia de muchas casas de apuestas, Ivibet todavía no ofrece aplicaciones móviles independientes para Android o iOS. Sin embargo, el operador garantiza el acceso completo a todas las funciones de la plataforma a través de la versión móvil optimizada del sitio web y de la aplicación web."}',
             'value_fr' => '{"0":"Malheureusement, contrairement à de nombreux bookmakers, Ivibet ne propose pas encore d’applications mobiles dédiées pour Android ou iOS. Toutefois, l’opérateur assure un accès complet à toutes les fonctionnalités de la plateforme via la version mobile optimisée du site web et l’application web."}',
             'value_pt' => '{"0":"Infelizmente, ao contrário de muitas casas de apostas, a Ivibet ainda não oferece aplicativos móveis dedicados para Android ou iOS. No entanto, o operador garante acesso total a todas as funcionalidades da plataforma por meio da versão móvel otimizada do site e do aplicativo web."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The Web app works smoothly and gives players full functionality and convenience. It serves as the main solution for those who prefer placing bets and playing casino games from a smartphone or tablet."}',
             'value_es' => '{"0":"La aplicación web funciona de manera estable y proporciona a los jugadores todas las funcionalidades y comodidad. Es la solución principal para quienes prefieren apostar y jugar en el casino desde su smartphone o tableta."}',
             'value_fr' => '{"0":"L’application web fonctionne de manière stable et offre aux joueurs un accès complet aux fonctionnalités ainsi qu’un confort d’utilisation. Elle constitue la solution principale pour ceux qui préfèrent parier et jouer au casino depuis leur smartphone ou leur tablette."}',
             'value_pt' => '{"0":"O aplicativo web funciona de forma estável e oferece aos jogadores todas as funcionalidades e conveniência. Ele é a principal solução para quem prefere apostar e jogar no cassino a partir de um smartphone ou tablet."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full access to all features",
                                 "1":"User-friendly interface",
                                 "2":"Compatibility with any modern operating systems"},
                             "1":
                                {"0":"No native apps for Android and iOS",
                                 "1":"No push notifications",
                                 "2":"No biometric authentication"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso completo a todas las funciones",
                                 "1":"Interfaz fácil de usar",
                                 "2":"Compatibilidad con cualquier sistema operativo moderno"},
                             "1":
                                {"0":"No hay aplicaciones nativas para Android e iOS",
                                 "1":"Sin notificaciones push",
                                 "2":"Sin autenticación biométrica"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès complet à toutes les fonctionnalités",
                                 "1":"Interface conviviale",
                                 "2":"Compatibilité avec tous les systèmes d’exploitation modernes"},
                             "1":
                                {"0":"Pas d’applications natives pour Android et iOS",
                                 "1":"Pas de notifications push",
                                 "2":"Pas d’authentification biométrique"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso completo a todas as funcionalidades",
                                 "1":"Interface intuitiva",
                                 "2":"Compatibilidade com qualquer sistema operacional moderno"},
                             "1":
                                {"0":"Sem aplicativos nativos para Android e iOS",
                                 "1":"Sem notificações push",
                                 "2":"Sem autenticação biométrica"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Since there is no full-fledged mobile app for Android smartphones, we offer you a step-by-step guide to installing the web app. It is a decent alternative, so we recommend installing it."}',
             'value_es' => '{"0":"Como no existe una aplicación móvil completa para smartphones Android, le ofrecemos una guía paso a paso para instalar la aplicación web. Es una buena alternativa, por lo que recomendamos instalarla."}',
             'value_fr' => '{"0":"Étant donné qu’il n’existe pas d’application mobile complète pour les smartphones Android, nous vous proposons un guide étape par étape pour installer l’application web. C’est une alternative correcte, nous vous conseillons donc de l’installer."}',
             'value_pt' => '{"0":"Como não há um aplicativo móvel completo para smartphones Android, oferecemos um guia passo a passo para instalar o aplicativo web. É uma boa alternativa, por isso recomendamos instalá-lo."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"1. Open Chrome or another modern browser on your smartphone."}',
             'value_es' => '{"0":"1. Abra Chrome u otro navegador moderno en su smartphone."}',
             'value_fr' => '{"0":"1. Ouvrez Chrome ou un autre navigateur moderne sur votre smartphone."}',
             'value_pt' => '{"0":"1. Abra o Chrome ou outro navegador moderno no seu smartphone."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the official Ivibet website and wait for the page to load completely."}',
             'value_es' => '{"0":"2. Vaya al sitio web oficial de Ivibet y espere a que la página se cargue completamente."}',
             'value_fr' => '{"0":"2. Rendez-vous sur le site officiel d’Ivibet et attendez le chargement complet de la page."}',
             'value_pt' => '{"0":"2. Acesse o site oficial da Ivibet e aguarde o carregamento completo da página."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"3. In the browser menu, select «Add to Home Screen»."}',
             'value_es' => '{"0":"3. En el menú del navegador, seleccione «Agregar a la pantalla de inicio»."}',
             'value_fr' => '{"0":"3. Dans le menu du navigateur, sélectionnez « Ajouter à l’écran d’accueil »."}',
             'value_pt' => '{"0":"3. No menu do navegador, selecione «Adicionar à tela inicial»."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"4. Confirm the action, after which the Ivibet icon will appear on your home screen."}',
             'value_es' => '{"0":"4. Confirme la acción y el ícono de Ivibet aparecerá en la pantalla principal."}',
             'value_fr' => '{"0":"4. Confirmez l’action et l’icône Ivibet apparaîtra sur votre écran d’accueil."}',
             'value_pt' => '{"0":"4. Confirme a ação e o ícone da Ivibet aparecerá na tela inicial."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Now you will be able to launch the web app like a regular application."}',
             'value_es' => '{"0":"Ahora podrá iniciar la aplicación web como si fuera una aplicación normal."}',
             'value_fr' => '{"0":"Vous pourrez désormais lancer l’application web comme une application classique."}',
             'value_pt' => '{"0":"Agora você poderá abrir o aplicativo web como se fosse um aplicativo normal."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"We also provide a step-by-step guide for installing the web app on iOS smartphones."}',
             'value_es' => '{"0":"También ofrecemos una guía paso a paso para instalar la aplicación web en teléfonos inteligentes con iOS."}',
             'value_fr' => '{"0":"Nous proposons également un guide étape par étape pour installer l’application web sur les smartphones iOS."}',
             'value_pt' => '{"0":"Também fornecemos um guia passo a passo para instalar o aplicativo web em smartphones com iOS."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the Safari browser on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abra el navegador Safari en su iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez le navigateur Safari sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra o navegador Safari no seu iPhone ou iPad."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the official Ivibet website and wait for the page to fully load."}',
             'value_es' => '{"0":"2. Vaya al sitio web oficial de Ivibet y espere a que la página se cargue por completo."}',
             'value_fr' => '{"0":"2. Allez sur le site officiel d’Ivibet et attendez le chargement complet de la page."}',
             'value_pt' => '{"0":"2. Acesse o site oficial da Ivibet e aguarde o carregamento completo da página."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"3. Tap the «Share» icon at the bottom of the screen."}',
             'value_es' => '{"0":"3. Pulse el ícono de «Compartir» en la parte inferior de la pantalla."}',
             'value_fr' => '{"0":"3. Appuyez sur l’icône «Partager» en bas de l’écran."}',
             'value_pt' => '{"0":"3. Toque no ícone «Compartilhar» na parte inferior da tela."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"4. Select the «Add to Home Screen» option."}',
             'value_es' => '{"0":"4. Seleccione la opción «Añadir a la pantalla de inicio»."}',
             'value_fr' => '{"0":"4. Sélectionnez l’option «Ajouter à l’écran d’accueil»."}',
             'value_pt' => '{"0":"4. Selecione a opção «Adicionar à tela inicial»."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"5. Confirm the action, and the Ivibet shortcut will appear among your other apps."}',
             'value_es' => '{"0":"5. Confirme la acción y el acceso directo de Ivibet aparecerá entre sus otras aplicaciones."}',
             'value_fr' => '{"0":"5. Confirmez l’action, et le raccourci Ivibet apparaîtra parmi vos autres applications."}',
             'value_pt' => '{"0":"5. Confirme a ação e o atalho da Ivibet aparecerá junto aos seus outros aplicativos."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The Ivibet web app provides users with the full range of features available on the desktop version of the site. It allows placing sports bets in pre-match and live modes, quickly viewing updated odds, tracking match statistics, and monitoring event graphics in real time."}',
             'value_es' => '{"0":"La aplicación web de Ivibet ofrece a los usuarios todas las funciones disponibles en la versión de escritorio del sitio. Permite realizar apuestas deportivas en modos pre-match y en vivo, consultar rápidamente las cuotas actualizadas, seguir estadísticas de los partidos y gráficos de eventos en tiempo real."}',
             'value_fr' => '{"0":"L’application web Ivibet offre aux utilisateurs l’ensemble des fonctionnalités disponibles sur la version de bureau du site. Elle permet de placer des paris sportifs en modes pré-match et live, de consulter rapidement les cotes mises à jour, de suivre les statistiques des matchs et les graphiques des événements en temps réel."}',
             'value_pt' => '{"0":"O web-app da Ivibet oferece aos usuários todas as funcionalidades disponíveis na versão desktop do site. Ele permite fazer apostas esportivas nos modos pré-jogo e ao vivo, visualizar rapidamente as odds atualizadas, acompanhar estatísticas das partidas e gráficos de eventos em tempo real."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In the casino section, users have access to slots, table games, and live casino with professional dealers. The platform is optimized for fast financial operations, so deposits and withdrawals take minimal time."}',
             'value_es' => '{"0":"En la sección de casino, los usuarios tienen acceso a tragamonedas, juegos de mesa y casino en vivo con crupieres profesionales. La plataforma está optimizada para operaciones financieras rápidas, por lo que los depósitos y retiros requieren muy poco tiempo."}',
             'value_fr' => '{"0":"Dans la section casino, les utilisateurs ont accès aux machines à sous, aux jeux de table et au casino en direct avec des croupiers professionnels. La plateforme est optimisée pour des opérations financières rapides, donc les dépôts et retraits prennent un minimum de temps."}',
             'value_pt' => '{"0":"Na seção de cassino, os usuários têm acesso a slots, jogos de mesa e cassino ao vivo com dealers profissionais. A plataforma é otimizada para operações financeiras rápidas, portanto depósitos e saques levam muito pouco tempo."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Special attention should be given to the intuitive interface. Buttons are located at the bottom and do not obstruct the main content, switching between sections is smooth, and page loading speed allows comfortable use even with an unstable internet connection."}',
             'value_es' => '{"0":"Cabe destacar la interfaz intuitiva. Los botones están ubicados en la parte inferior y no obstruyen el contenido principal, la transición entre secciones es fluida y la velocidad de carga de las páginas permite un uso cómodo incluso con una conexión a internet inestable."}',
             'value_fr' => '{"0":"Il convient de souligner l’interface intuitive. Les boutons sont situés en bas et ne gênent pas la visualisation du contenu principal, la navigation entre les sections est fluide et la vitesse de chargement des pages permet une utilisation confortable même avec une connexion Internet instable."}',
             'value_pt' => '{"0":"Vale destacar a interface intuitiva. Os botões estão localizados na parte inferior e não atrapalham a visualização do conteúdo principal, a navegação entre as seções é suave, e a velocidade de carregamento das páginas permite uma experiência confortável mesmo com conexão de internet instável."}',
             'order' => 24
            ]
        );
    }
}
