<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers its users full-featured mobile applications for Android and iOS platforms. With their help, you can comfortably place bets, play casino games, and manage your account right from your smartphone or tablet."}',
             'value_es' => '{"0":"1win ofrece a sus usuarios aplicaciones móviles completas para las plataformas Android e iOS. Con ellas, puedes realizar apuestas cómodamente, jugar en el casino y gestionar tu cuenta directamente desde tu smartphone o tableta."}',
             'value_fr' => '{"0":"1win propose à ses utilisateurs des applications mobiles complètes pour les plateformes Android et iOS. Avec ces applications, vous pouvez facilement placer des paris, jouer au casino et gérer votre compte directement depuis votre smartphone ou tablette."}',
             'value_pt' => '{"0":"1win oferece aos seus usuários aplicativos móveis completos para as plataformas Android e iOS. Com eles, você pode fazer apostas confortavelmente, jogar no cassino e gerenciar sua conta diretamente do seu smartphone ou tablet."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The mobile apps fully replicate the functionality of the main website but are adapted for smaller screens and provide fast, stable performance even with less-than-ideal internet connections. This allows you to quickly respond to events and use bonuses anywhere."}',
             'value_es' => '{"0":"Las aplicaciones móviles replican completamente la funcionalidad del sitio principal, pero están adaptadas para pantallas pequeñas y ofrecen un rendimiento rápido y estable incluso con conexiones a internet no ideales. Así, podrás reaccionar rápidamente a los eventos y aprovechar los bonos en cualquier lugar."}',
             'value_fr' => '{"0":"Les applications mobiles reproduisent entièrement les fonctionnalités du site principal, mais sont adaptées aux petits écrans et assurent un fonctionnement rapide et stable, même avec une connexion Internet imparfaite. Ainsi, vous pouvez réagir rapidement aux événements et profiter des bonus où que vous soyez."}',
             'value_pt' => '{"0":"Os aplicativos móveis replicam totalmente as funcionalidades do site principal, mas são adaptados para telas menores e oferecem desempenho rápido e estável, mesmo com conexões de internet não ideais. Assim, você pode reagir rapidamente aos eventos e usar os bônus em qualquer lugar."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"User-friendly interface",
                                 "1":"Fast odds updates",
                                 "2":"Access to casino",
                                 "3":"Ability to use bonuses",
                                 "4":"Push notifications",
                                 "5":"Cashout"},
                             "1":
                                {"0":"No apps in App Store and Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz fácil de usar",
                                 "1":"Actualización rápida de cuotas",
                                 "2":"Acceso al casino",
                                 "3":"Posibilidad de usar bonos",
                                 "4":"Notificaciones push",
                                 "5":"Cashout"},
                             "1":
                                {"0":"No hay aplicaciones en App Store y Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface conviviale",
                                 "1":"Mise à jour rapide des cotes",
                                 "2":"Accès au casino",
                                 "3":"Possibilité d’utiliser des bonus",
                                 "4":"Notifications push",
                                 "5":"Cashout"},
                             "1":
                                {"0":"Pas d’applications sur l’App Store et Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface fácil de usar",
                                 "1":"Atualização rápida das odds",
                                 "2":"Acesso ao cassino",
                                 "3":"Possibilidade de usar bônus",
                                 "4":"Notificações push",
                                 "5":"Cashout"},
                             "1":
                                {"0":"Não há aplicativos na App Store e Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"We offer you a step-by-step guide for installing the 1win mobile app for Android-based systems from the official website."}',
             'value_es' => '{"0":"Le ofrecemos una guía paso a paso para instalar la aplicación móvil 1win para sistemas basados en Android desde el sitio web oficial."}',
             'value_fr' => '{"0":"Nous vous proposons un guide étape par étape pour installer l’application mobile 1win pour les systèmes Android depuis le site officiel."}',
             'value_pt' => '{"0":"Oferecemos a você um guia passo a passo para instalar o aplicativo móvel 1win para sistemas baseados em Android a partir do site oficial."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the browser on your Android device and go to the official 1win website."}',
             'value_es' => '{"0":"1. Abra el navegador en su dispositivo Android y visite el sitio web oficial de 1win."}',
             'value_fr' => '{"0":"1. Ouvrez le navigateur sur votre appareil Android et rendez-vous sur le site officiel de 1win."}',
             'value_pt' => '{"0":"1. Abra o navegador no seu dispositivo Android e acesse o site oficial da 1win."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"2. Scroll down the page and find the «Mobile Apps» section."}',
             'value_es' => '{"0":"2. Desplácese hacia abajo en la página y encuentre la sección «Aplicaciones móviles»."}',
             'value_fr' => '{"0":"2. Faites défiler la page vers le bas et trouvez la section « Applications mobiles »."}',
             'value_pt' => '{"0":"2. Role a página para baixo e encontre a seção «Aplicativos móveis»."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"3. Click on the Android icon and download the app APK file."}',
             'value_es' => '{"0":"3. Haga clic en el ícono de Android y descargue el archivo APK de la aplicación."}',
             'value_fr' => '{"0":"3. Cliquez sur l’icône Android et téléchargez le fichier APK de l’application."}',
             'value_pt' => '{"0":"3. Clique no ícone do Android e baixe o arquivo APK do aplicativo."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"4. If your device does not allow installation from unknown sources, open security or privacy settings and enable the corresponding permission."}',
             'value_es' => '{"0":"4. Si su dispositivo no permite la instalación desde fuentes desconocidas, abra la configuración de seguridad o privacidad y active el permiso correspondiente."}',
             'value_fr' => '{"0":"4. Si votre appareil ne permet pas l’installation à partir de sources inconnues, ouvrez les paramètres de sécurité ou de confidentialité et activez l’autorisation correspondante."}',
             'value_pt' => '{"0":"4. Se o seu dispositivo não permitir a instalação de fontes desconhecidas, abra as configurações de segurança ou privacidade e habilite a permissão correspondente."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"5. Then open the downloaded APK file and confirm the installation."}',
             'value_es' => '{"0":"5. Luego abra el archivo APK descargado y confirme la instalación."}',
             'value_fr' => '{"0":"5. Ensuite, ouvrez le fichier APK téléchargé et confirmez l’installation."}',
             'value_pt' => '{"0":"5. Em seguida, abra o arquivo APK baixado e confirme a instalação."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"6. After the installation is complete, open the app, log into your account, or register if you are a new user."}',
             'value_es' => '{"0":"6. Después de completar la instalación, abra la aplicación, inicie sesión en su cuenta o regístrese si es un usuario nuevo."}',
             'value_fr' => '{"0":"6. Une fois l’installation terminée, ouvrez l’application, connectez-vous à votre compte ou inscrivez-vous si vous êtes un nouvel utilisateur."}',
             'value_pt' => '{"0":"6. Após a instalação ser concluída, abra o aplicativo, faça login na sua conta ou registre-se se for um novo usuário."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For iOS smartphones, 1win offers the installation of a web app. Here is a step-by-step guide on how to do it:"}',
             'value_es' => '{"0":"Para smartphones con iOS, 1win ofrece la instalación de una aplicación web. Aquí tienes una guía paso a paso para hacerlo:"}',
             'value_fr' => '{"0":"Pour les smartphones iOS, 1win propose l’installation d’une application web. Voici un guide étape par étape pour le faire :"}',
             'value_pt' => '{"0":"Para smartphones iOS, a 1win oferece a instalação de um aplicativo web. Aqui está um guia passo a passo de como fazer isso:"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the Safari browser on your device."}',
             'value_es' => '{"0":"1. Abra el navegador Safari en su dispositivo."}',
             'value_fr' => '{"0":"1. Ouvrez le navigateur Safari sur votre appareil."}',
             'value_pt' => '{"0":"1. Abra o navegador Safari no seu dispositivo."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the official 1win website."}',
             'value_es' => '{"0":"2. Vaya al sitio web oficial de 1win."}',
             'value_fr' => '{"0":"2. Rendez-vous sur le site officiel de 1win."}',
             'value_pt' => '{"0":"2. Acesse o site oficial da 1win."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"3. At the bottom of the screen, tap the «Share» button (icon in the shape of a square with an upward arrow)."}',
             'value_es' => '{"0":"3. En la parte inferior de la pantalla, toque el botón «Compartir» (icono en forma de cuadrado con una flecha hacia arriba)."}',
             'value_fr' => '{"0":"3. En bas de l’écran, appuyez sur le bouton « Partager » (icône en forme de carré avec une flèche vers le haut)."}',
             'value_pt' => '{"0":"3. Na parte inferior da tela, toque no botão «Compartilhar» (ícone em forma de quadrado com uma seta para cima)."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"4. In the menu that appears, select «Add to Home Screen»."}',
             'value_es' => '{"0":"4. En el menú que aparece, seleccione «Agregar a la pantalla de inicio»."}',
             'value_fr' => '{"0":"4. Dans le menu qui s’affiche, sélectionnez « Ajouter à l’écran d’accueil »."}',
             'value_pt' => '{"0":"4. No menu que aparecer, selecione «Adicionar à Tela de Início»."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"5. Enter a name for the shortcut, for example, «1win», and tap «Add»."}',
             'value_es' => '{"0":"5. Introduzca un nombre para el acceso directo, por ejemplo, «1win», y toque «Agregar»."}',
             'value_fr' => '{"0":"5. Entrez un nom pour le raccourci, par exemple « 1win », puis appuyez sur « Ajouter »."}',
             'value_pt' => '{"0":"5. Digite um nome para o atalho, por exemplo, «1win», e toque em «Adicionar»."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The site icon will appear on your device’s home screen as an app. Now you can open 1win quickly with a single tap, without needing to go through the browser."}',
             'value_es' => '{"0":"El ícono del sitio aparecerá en la pantalla de inicio de su dispositivo como una aplicación. Ahora puede abrir 1win rápidamente con un solo toque, sin necesidad de usar el navegador."}',
             'value_fr' => '{"0":"L’icône du site apparaîtra sur l’écran d’accueil de votre appareil comme une application. Vous pouvez désormais ouvrir 1win rapidement en un seul tap, sans avoir à passer par le navigateur."}',
             'value_pt' => '{"0":"O ícone do site aparecerá na tela inicial do seu dispositivo como um aplicativo. Agora você pode abrir o 1win rapidamente com um toque, sem precisar acessar pelo navegador."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The 1win mobile app provides all the main features available in the desktop version and even more thanks to special mobile functions. You can quickly place bets in pre-match and live modes, track odds changes, and manage your betting slips. The casino in the app supports slots, table games, as well as live games with real dealers. Bonuses, promotions, and promo codes are available to users with the possibility of activation directly in the app."}',
             'value_es' => '{"0":"La aplicación móvil de 1win ofrece todas las funciones principales disponibles en la versión de escritorio e incluso más gracias a funciones móviles especiales. Puedes hacer apuestas rápidamente en modos pre-partido y en vivo, seguir los cambios en las cuotas y gestionar tus boletos de apuestas. El casino en la app admite tragamonedas, juegos de mesa y juegos en vivo con crupieres reales. Los usuarios tienen acceso a bonos, promociones y códigos promocionales con posibilidad de activación directamente en la aplicación."}',
             'value_fr' => '{"0":"L’application mobile 1win offre toutes les fonctionnalités principales disponibles sur la version de bureau et encore plus grâce à des fonctions mobiles spéciales. Vous pouvez rapidement placer des paris en mode pré-match et en direct, suivre les changements des cotes et gérer vos tickets de pari. Le casino dans l’application prend en charge les machines à sous, les jeux de table ainsi que les jeux en direct avec de vrais croupiers. Les utilisateurs ont accès aux bonus, promotions et codes promo avec la possibilité de les activer directement dans l’application."}',
             'value_pt' => '{"0":"O aplicativo móvel 1win oferece todos os principais recursos disponíveis na versão para desktop e ainda mais, graças às funções móveis especiais. Você pode fazer apostas rapidamente nos modos pré-jogo e ao vivo, acompanhar as mudanças nas odds e gerenciar seus bilhetes de apostas. O cassino no app suporta slots, jogos de mesa e jogos ao vivo com dealers reais. Os usuários têm acesso a bônus, promoções e códigos promocionais com possibilidade de ativação diretamente no aplicativo."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"You can also enable push notifications to stay informed about important events and new bonuses. The mobile app is integrated with payment systems for quick deposits and withdrawals, supporting dozens of payment methods."}',
             'value_es' => '{"0":"También puedes activar las notificaciones push para estar informado sobre eventos importantes y nuevos bonos. La aplicación móvil está integrada con sistemas de pago para depósitos y retiros rápidos, soportando decenas de métodos de pago."}',
             'value_fr' => '{"0":"Vous pouvez également activer les notifications push pour rester informé des événements importants et des nouveaux bonus. L’application mobile est intégrée aux systèmes de paiement pour des dépôts et retraits rapides, prenant en charge des dizaines de méthodes de paiement."}',
             'value_pt' => '{"0":"Você também pode ativar notificações push para se manter informado sobre eventos importantes e novos bônus. O aplicativo móvel é integrado com sistemas de pagamento para depósitos e saques rápidos, suportando dezenas de métodos de pagamento."}',
             'order' => 25
            ]
        );
    }
}
