<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU pays significant attention to the development of the mobile segment, offering users convenient Android and iOS applications. The mobile solutions provide access to all the main platform features, including sports betting, casino, and live events."}',
             'value_es' => '{"0":"BETANDYOU presta una atención significativa al desarrollo del segmento móvil, ofreciendo a los usuarios aplicaciones convenientes para Android e iOS. Las soluciones móviles brindan acceso a todas las funciones principales de la plataforma, incluidas las apuestas deportivas, el casino y los eventos en vivo."}',
             'value_fr' => '{"0":"BETANDYOU accorde une grande importance au développement du segment mobile, en proposant aux utilisateurs des applications pratiques pour Android et iOS. Les solutions mobiles offrent un accès à toutes les fonctionnalités principales de la plateforme, y compris les paris sportifs, le casino et les événements en direct."}',
             'value_pt' => '{"0":"A BETANDYOU dedica atenção significativa ao desenvolvimento do segmento móvel, oferecendo aos usuários aplicativos convenientes para Android e iOS. As soluções móveis fornecem acesso a todas as principais funcionalidades da plataforma, incluindo apostas esportivas, cassino e eventos ao vivo."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The apps feature a modern interface and are optimized for fast and comfortable use on any device. Thanks to the mobile apps, you can place bets, deposit funds, withdraw money, and play casino games anywhere and anytime, without needing to open the desktop version of the site. This is convenient for those who travel frequently or want quick access to the platform at any moment."}',
             'value_es' => '{"0":"Las aplicaciones cuentan con una interfaz moderna y están optimizadas para un uso rápido y cómodo en cualquier dispositivo. Gracias a las aplicaciones móviles, puede realizar apuestas, depositar fondos, retirar dinero y jugar en el casino en cualquier lugar y en cualquier momento, sin necesidad de abrir la versión de escritorio del sitio. Esto es conveniente para quienes viajan con frecuencia o desean tener acceso rápido a la plataforma en cualquier momento."}',
             'value_fr' => '{"0":"Les applications disposent d\'une interface moderne et sont optimisées pour une utilisation rapide et confortable sur tous les appareils. Grâce aux applications mobiles, vous pouvez placer des paris, déposer des fonds, retirer de l\'argent et jouer au casino partout et à tout moment, sans avoir besoin d\'ouvrir la version de bureau du site. Cela est pratique pour ceux qui voyagent fréquemment ou qui souhaitent un accès rapide à la plateforme à tout moment."}',
             'value_pt' => '{"0":"Os aplicativos apresentam uma interface moderna e são otimizados para uso rápido e confortável em qualquer dispositivo. Graças aos aplicativos móveis, você pode fazer apostas, depositar fundos, sacar dinheiro e jogar no cassino em qualquer lugar e a qualquer momento, sem precisar abrir a versão desktop do site. Isso é conveniente para quem viaja com frequência ou deseja ter acesso rápido à plataforma a qualquer momento."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full functionality",
                                 "1":"Fast odds and statistics updates",
                                 "2":"Convenient navigation and adaptive interface",
                                 "3":"Access to live betting and live streams",
                                 "4":"Ability to deposit and withdraw funds",
                                 "5":"Access to customer support"},
                             "1":
                                {"0":"Android app not available in the Play Store"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa",
                                 "1":"Actualización rápida de cuotas y estadísticas",
                                 "2":"Navegación conveniente e interfaz adaptable",
                                 "3":"Acceso a apuestas en vivo y transmisiones en directo",
                                 "4":"Posibilidad de depositar y retirar fondos",
                                 "5":"Acceso al soporte al cliente"},
                             "1":
                                {"0":"Aplicación de Android no disponible en Play Store"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète",
                                 "1":"Mise à jour rapide des cotes et des statistiques",
                                 "2":"Navigation pratique et interface adaptative",
                                 "3":"Accès aux paris en direct et aux flux en direct",
                                 "4":"Possibilité de déposer et de retirer des fonds",
                                 "5":"Accès au support client"},
                             "1":
                                {"0":"Application Android non disponible sur le Play Store"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa",
                                 "1":"Atualização rápida de odds e estatísticas",
                                 "2":"Navegação conveniente e interface adaptativa",
                                 "3":"Acesso a apostas ao vivo e transmissões ao vivo",
                                 "4":"Possibilidade de depositar e sacar fundos",
                                 "5":"Acesso ao suporte ao cliente"},
                             "1":
                                {"0":"Aplicativo Android não disponível na Play Store"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Installing the Android mobile app is a bit more complicated than usual. But with our step-by-step guide, it won’t cause you any major problems."}',
             'value_es' => '{"0":"La instalación de la aplicación móvil para Android es un poco más complicada de lo habitual. Pero con nuestra guía paso a paso, no te causará grandes problemas."}',
             'value_fr' => '{"0":"L’installation de l’application mobile pour Android est un peu plus compliquée que d’habitude. Mais avec notre guide étape par étape, cela ne vous posera pas de gros problèmes."}',
             'value_pt' => '{"0":"A instalação do aplicativo móvel para Android é um pouco mais complicada do que o habitual. Mas com nosso guia passo a passo, isso não causará grandes problemas."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official BETANDYOU website from your smartphone and go to the «Mobile App» section."}',
             'value_es' => '{"0":"1. Abre el sitio web oficial de BETANDYOU desde tu smartphone y ve a la sección «Aplicación Móvil»."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de BETANDYOU depuis votre smartphone et accédez à la section «Application mobile»."}',
             'value_pt' => '{"0":"1. Abra o site oficial da BETANDYOU no seu smartphone e vá para a seção «Aplicativo Móvel»."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"2. Click the «Android» button and download the .apk file to your device."}',
             'value_es' => '{"0":"2. Haz clic en el botón «Android» y descarga el archivo .apk en tu dispositivo."}',
             'value_fr' => '{"0":"2. Cliquez sur le bouton «Android» et téléchargez le fichier .apk sur votre appareil."}',
             'value_pt' => '{"0":"2. Clique no botão «Android» e baixe o arquivo .apk para o seu dispositivo."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"3. In your smartphone settings, allow installation of apps from unknown sources."}',
             'value_es' => '{"0":"3. En la configuración de tu smartphone, permite la instalación de aplicaciones desde fuentes desconocidas."}',
             'value_fr' => '{"0":"3. Dans les paramètres de votre smartphone, autorisez l’installation d’applications provenant de sources inconnues."}',
             'value_pt' => '{"0":"3. Nas configurações do seu smartphone, permita a instalação de aplicativos de fontes desconhecidas."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"4. Open the downloaded file and start the installation process."}',
             'value_es' => '{"0":"4. Abre el archivo descargado y comienza el proceso de instalación."}',
             'value_fr' => '{"0":"4. Ouvrez le fichier téléchargé et lancez le processus d’installation."}',
             'value_pt' => '{"0":"4. Abra o arquivo baixado e inicie o processo de instalação."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"5. After the installation is complete, open the app and log into your account or register a new one."}',
             'value_es' => '{"0":"5. Después de completar la instalación, abre la aplicación e inicia sesión en tu cuenta o registra una nueva."}',
             'value_fr' => '{"0":"5. Une fois l’installation terminée, ouvrez l’application et connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"5. Após a instalação ser concluída, abra o aplicativo e faça login na sua conta ou registre uma nova."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For iOS smartphone users, a mobile app is available via TestFlight. Below is a step-by-step installation guide:"}',
             'value_es' => '{"0":"Para los usuarios de smartphones iOS, hay una aplicación móvil disponible a través de TestFlight. A continuación, se muestra una guía paso a paso de instalación:"}',
             'value_fr' => '{"0":"Pour les utilisateurs d’iPhone, une application mobile est disponible via TestFlight. Voici un guide d’installation étape par étape :"}',
             'value_pt' => '{"0":"Para usuários de smartphones iOS, há um aplicativo móvel disponível através do TestFlight. A seguir, um guia passo a passo de instalação:"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official BETANDYOU website on your smartphone and go to the «Mobile App» section."}',
             'value_es' => '{"0":"1. Abre el sitio web oficial de BETANDYOU en tu smartphone y ve a la sección «Aplicación Móvil»."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de BETANDYOU sur votre smartphone et allez dans la section « Application Mobile »."}',
             'value_pt' => '{"0":"1. Abra o site oficial da BETANDYOU no seu smartphone e vá para a seção «Aplicativo Móvel»."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"2. Click the «iOS» button, then click the TestFlight link. Your device will automatically open TestFlight and display the available BETANDYOU app version for installation."}',
             'value_es' => '{"0":"2. Haz clic en el botón «iOS» y luego en el enlace de TestFlight. Tu dispositivo abrirá automáticamente TestFlight y mostrará la versión disponible de la aplicación BETANDYOU para instalar."}',
             'value_fr' => '{"0":"2. Cliquez sur le bouton « iOS », puis sur le lien TestFlight. Votre appareil ouvrira automatiquement TestFlight et affichera la version disponible de l’application BETANDYOU à installer."}',
             'value_pt' => '{"0":"2. Clique no botão «iOS» e depois no link do TestFlight. Seu dispositivo abrirá automaticamente o TestFlight e mostrará a versão disponível do aplicativo BETANDYOU para instalação."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"3. Tap the Install button. The app will download and install on your device."}',
             'value_es' => '{"0":"3. Pulsa el botón Instalar. La aplicación se descargará e instalará en tu dispositivo."}',
             'value_fr' => '{"0":"3. Appuyez sur le bouton « Installer ». L’application sera téléchargée et installée sur votre appareil."}',
             'value_pt' => '{"0":"3. Toque no botão Instalar. O aplicativo será baixado e instalado no seu dispositivo."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"4. After the installation is complete, open the app directly from TestFlight. Log in to your account or register a new one."}',
             'value_es' => '{"0":"4. Una vez finalizada la instalación, abre la aplicación directamente desde TestFlight. Inicia sesión en tu cuenta o registra una nueva."}',
             'value_fr' => '{"0":"4. Une fois l’installation terminée, ouvrez l’application directement depuis TestFlight. Connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"4. Após a conclusão da instalação, abra o aplicativo diretamente no TestFlight. Faça login na sua conta ou registre uma nova."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU mobile apps provide access to more than 40 sports, including football, tennis, basketball, hockey, and esports, in both pre-match and live modes. The interface is optimized for fast bet placement. The live section features real-time graphics and statistics, significantly enhancing convenience for active players."}',
             'value_es' => '{"0":"Las aplicaciones móviles de BETANDYOU ofrecen acceso a más de 40 deportes, incluidos fútbol, tenis, baloncesto, hockey y deportes electrónicos, en modos pre-partido y en vivo. La interfaz está optimizada para realizar apuestas rápidamente. La sección en vivo incluye gráficos y estadísticas en tiempo real, lo que mejora significativamente la comodidad para los jugadores activos."}',
             'value_fr' => '{"0":"Les applications mobiles BETANDYOU offrent un accès à plus de 40 sports, dont le football, le tennis, le basketball, le hockey et l’esport, en modes pré-match et en direct. L’interface est optimisée pour un placement rapide des paris. La section live est accompagnée de graphiques et de statistiques en temps réel, ce qui améliore considérablement la commodité pour les joueurs actifs."}',
             'value_pt' => '{"0":"Os aplicativos móveis da BETANDYOU oferecem acesso a mais de 40 esportes, incluindo futebol, tênis, basquete, hóquei e esports, nos modos pré-jogo e ao vivo. A interface é otimizada para apostas rápidas. A seção ao vivo apresenta gráficos e estatísticas em tempo real, aumentando significativamente a conveniência para jogadores ativos."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In the casino, the mobile app includes thousands of slots, table games, and live games with professional dealers. The app supports bonuses, free spins, loyalty programs, and also ensures fast deposits and withdrawals. Thanks to the adaptive design, users enjoy stable performance across different devices."}',
             'value_es' => '{"0":"En el casino, la aplicación móvil incluye miles de tragamonedas, juegos de mesa y juegos en vivo con crupieres profesionales. La app admite bonos, giros gratis, programas de fidelidad y también garantiza depósitos y retiros rápidos. Gracias al diseño adaptable, los usuarios disfrutan de un rendimiento estable en diferentes dispositivos."}',
             'value_fr' => '{"0":"Dans le casino, l’application mobile comprend des milliers de machines à sous, jeux de table et jeux en direct avec des croupiers professionnels. L’application prend en charge les bonus, les tours gratuits, les programmes de fidélité et assure également des dépôts et retraits rapides. Grâce à un design adaptatif, les utilisateurs bénéficient d’une performance stable sur différents appareils."}',
             'value_pt' => '{"0":"No cassino, o aplicativo móvel inclui milhares de slots, jogos de mesa e jogos ao vivo com dealers profissionais. O app suporta bônus, rodadas grátis, programas de fidelidade e também garante depósitos e saques rápidos. Graças ao design adaptável, os usuários desfrutam de desempenho estável em diferentes dispositivos."}',
             'order' => 22
            ]
        );
    }
}
