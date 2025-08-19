<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET mobile apps for Android and iOS are designed to let users place bets and play casino games directly from their smartphones or tablets. They replicate almost the entire functionality of the desktop version. With them, you can place pre-match and live bets, play casino games, live games, and virtual sports."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 22BET para Android e iOS están diseñadas para que los usuarios puedan realizar apuestas y jugar en el casino directamente desde sus teléfonos inteligentes o tabletas. Replican prácticamente todas las funciones de la versión de escritorio. Con ellas, puedes realizar apuestas pre-partido y en vivo, jugar en el casino, juegos en vivo y deportes virtuales."}',
             'value_fr' => '{"0":"Les applications mobiles 22BET pour Android et iOS sont conçues pour permettre aux utilisateurs de parier et de jouer au casino directement depuis leurs smartphones ou tablettes. Elles reproduisent pratiquement toutes les fonctionnalités de la version de bureau. Grâce à elles, vous pouvez placer des paris pré-match et en direct, jouer au casino, aux jeux en direct et aux sports virtuels."}',
             'value_pt' => '{"0":"Os aplicativos móveis da 22BET para Android e iOS foram desenvolvidos para que os usuários possam fazer apostas e jogar no cassino diretamente de seus smartphones ou tablets. Eles reproduzem praticamente todas as funcionalidades da versão para desktop. Com eles, você pode fazer apostas pré-jogo e ao vivo, jogar no cassino, jogos ao vivo e esportes virtuais."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The apps are optimized for different screen sizes, the interface is intuitive and easy to use even for new players, and support for multiple languages and a wide range of currencies makes them convenient for users worldwide. Thanks to the mobile app, players can quickly track odds, take part in promotions, and receive notifications about event results."}',
             'value_es' => '{"0":"Las aplicaciones están adaptadas a diferentes tamaños de pantalla, la interfaz es intuitiva y fácil de usar incluso para los nuevos jugadores, y la compatibilidad con varios idiomas y una amplia gama de monedas las hace convenientes para usuarios de todo el mundo. Gracias a la aplicación móvil, los jugadores pueden seguir rápidamente las cuotas, participar en promociones y recibir notificaciones sobre los resultados de los eventos."}',
             'value_fr' => '{"0":"Les applications sont adaptées à différentes tailles d’écran, l’interface est intuitive et facile à comprendre même pour les nouveaux joueurs, et la prise en charge de plusieurs langues et d’un large éventail de devises les rend pratiques pour les utilisateurs du monde entier. Grâce à l’application mobile, les joueurs peuvent suivre rapidement les cotes, participer aux promotions et recevoir des notifications sur les résultats des événements."}',
             'value_pt' => '{"0":"Os aplicativos são adaptados a diferentes tamanhos de tela, a interface é intuitiva e fácil de entender até mesmo para novos jogadores, e o suporte a vários idiomas e uma ampla variedade de moedas os torna convenientes para usuários em todo o mundo. Graças ao aplicativo móvel, os jogadores podem acompanhar rapidamente as odds, participar de promoções e receber notificações sobre os resultados dos eventos."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full site functionality",
                                 "1":"Instant odds updates",
                                 "2":"Fast bet placement",
                                 "3":"Access to live streams",
                                 "4":"Intuitive interface",
                                 "5":"Ability to activate promo codes and bonuses"},
                             "1":
                                {"0":"The Android app is not available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa del sitio",
                                 "1":"Actualización instantánea de cuotas",
                                 "2":"Colocación rápida de apuestas",
                                 "3":"Acceso a transmisiones en vivo",
                                 "4":"Interfaz intuitiva",
                                 "5":"Posibilidad de activar códigos promocionales y bonos"},
                             "1":
                                {"0":"La aplicación para Android no está disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète du site",
                                 "1":"Mise à jour instantanée des cotes",
                                 "2":"Placement rapide des paris",
                                 "3":"Accès aux retransmissions en direct",
                                 "4":"Interface intuitive",
                                 "5":"Possibilité d’activer des codes promotionnels et des bonus"},
                             "1":
                                {"0":"L’application Android n’est pas disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa do site",
                                 "1":"Atualização instantânea das odds",
                                 "2":"Colocação rápida de apostas",
                                 "3":"Acesso a transmissões ao vivo",
                                 "4":"Interface intuitiva",
                                 "5":"Possibilidade de ativar códigos promocionais e bônus"},
                             "1":
                                {"0":"O aplicativo para Android não está disponível no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Since the mobile app for Android smartphones is not available for download on Google Play, we have specially prepared a step-by-step installation guide for you. All you need to do is:"}',
             'value_es' => '{"0":"Como la aplicación móvil para teléfonos Android no está disponible en Google Play, hemos preparado especialmente una guía de instalación paso a paso para usted. Solo necesita hacer lo siguiente:"}',
             'value_fr' => '{"0":"Comme l’application mobile pour smartphones Android n’est pas disponible sur Google Play, nous avons spécialement préparé pour vous un guide d’installation étape par étape. Il vous suffit de :"}',
             'value_pt' => '{"0":"Como o aplicativo móvel para smartphones Android não está disponível no Google Play, preparamos especialmente um guia de instalação passo a passo para você. Tudo o que você precisa fazer é:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official 22BET website from your smartphone."}',
             'value_es' => '{"0":"1. Vaya al sitio web oficial de 22BET desde su smartphone."}',
             'value_fr' => '{"0":"1. Accédez au site officiel de 22BET depuis votre smartphone."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da 22BET a partir do seu smartphone."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"2. In the top menu, select the «Mobile App» section and click on the Android icon."}',
             'value_es' => '{"0":"2. En el menú superior, seleccione la sección «Aplicación móvil» y haga clic en el ícono de Android."}',
             'value_fr' => '{"0":"2. Dans le menu supérieur, sélectionnez la section «Application mobile» et cliquez sur l’icône Android."}',
             'value_pt' => '{"0":"2. No menu superior, selecione a seção «Aplicativo móvel» e clique no ícone do Android."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"3. Download the APK file to your device."}',
             'value_es' => '{"0":"3. Descargue el archivo APK en su dispositivo."}',
             'value_fr' => '{"0":"3. Téléchargez le fichier APK sur votre appareil."}',
             'value_pt' => '{"0":"3. Baixe o arquivo APK para o seu dispositivo."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"4. In your smartphone settings, allow the installation of apps from unknown sources. To do this, go to «Settings» → «Security» or «Apps» and enable the option «Allow installation from unknown sources»."}',
             'value_es' => '{"0":"4. En la configuración de su smartphone, permita la instalación de aplicaciones de orígenes desconocidos. Para ello, vaya a «Configuración» → «Seguridad» o «Aplicaciones» y active la opción «Permitir instalación de orígenes desconocidos»."}',
             'value_fr' => '{"0":"4. Dans les paramètres de votre smartphone, autorisez l’installation d’applications provenant de sources inconnues. Pour cela, allez dans «Paramètres» → «Sécurité» ou «Applications» et activez l’option «Autoriser l’installation de sources inconnues»."}',
             'value_pt' => '{"0":"4. Nas configurações do seu smartphone, permita a instalação de aplicativos de fontes desconhecidas. Para isso, vá em «Configurações» → «Segurança» ou «Aplicativos» e ative a opção «Permitir instalação de fontes desconhecidas»."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded file and tap «Install»."}',
             'value_es' => '{"0":"5. Abra el archivo descargado y pulse «Instalar»."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier téléchargé et appuyez sur «Installer»."}',
             'value_pt' => '{"0":"5. Abra o arquivo baixado e toque em «Instalar»."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"6. Once the installation is complete, open the app and log in to your account or create a new one."}',
             'value_es' => '{"0":"6. Una vez completada la instalación, abra la aplicación e inicie sesión en su cuenta o cree una nueva."}',
             'value_fr' => '{"0":"6. Une fois l’installation terminée, ouvrez l’application et connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"6. Após a conclusão da instalação, abra o aplicativo e faça login na sua conta ou crie uma nova."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The mobile app for iOS devices is very easy to install from the App Store and does not differ from installing any other apps. To install the mobile app:"}',
             'value_es' => '{"0":"La aplicación móvil para dispositivos iOS se instala muy fácilmente desde la App Store y no difiere de la instalación de cualquier otra aplicación. Para instalar la aplicación móvil:"}',
             'value_fr' => '{"0":"L’application mobile pour les appareils iOS s’installe très facilement depuis l’App Store et ne diffère en rien de l’installation d’autres applications. Pour installer l’application mobile :"}',
             'value_pt' => '{"0":"O aplicativo móvel para dispositivos iOS é muito fácil de instalar pela App Store e não difere da instalação de qualquer outro aplicativo. Para instalar o aplicativo móvel:"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official 22BET website on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abra el sitio web oficial de 22BET en su iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de 22BET sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra o site oficial da 22BET no seu iPhone ou iPad."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the «Mobile App» section and select iOS."}',
             'value_es' => '{"0":"2. Vaya a la sección «Aplicación móvil» y seleccione iOS."}',
             'value_fr' => '{"0":"2. Allez dans la section « Application mobile » et sélectionnez iOS."}',
             'value_pt' => '{"0":"2. Vá até a seção «Aplicativo móvel» e selecione iOS."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"3. You will be redirected to the App Store, where you can download the app."}',
             'value_es' => '{"0":"3. Será redirigido a la App Store, donde podrá descargar la aplicación."}',
             'value_fr' => '{"0":"3. Vous serez redirigé vers l’App Store, où vous pourrez télécharger l’application."}',
             'value_pt' => '{"0":"3. Você será redirecionado para a App Store, onde poderá baixar o aplicativo."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"4. Tap «Download» and wait for the installation to complete."}',
             'value_es' => '{"0":"4. Pulse «Descargar» y espere a que finalice la instalación."}',
             'value_fr' => '{"0":"4. Appuyez sur « Télécharger » et attendez la fin de l’installation."}',
             'value_pt' => '{"0":"4. Toque em «Baixar» e aguarde a conclusão da instalação."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the app and log into your account or create a new one."}',
             'value_es' => '{"0":"5. Abra la aplicación e inicie sesión en su cuenta o cree una nueva."}',
             'value_fr' => '{"0":"5. Ouvrez l’application et connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"5. Abra o aplicativo e entre na sua conta ou crie uma nova."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"At the first launch, you may need to confirm trust for the app in the device settings."}',
             'value_es' => '{"0":"En el primer inicio, es posible que deba confirmar la confianza en la aplicación en la configuración del dispositivo."}',
             'value_fr' => '{"0":"Lors du premier lancement, il peut être nécessaire de confirmer la confiance envers l’application dans les paramètres de l’appareil."}',
             'value_pt' => '{"0":"Na primeira execução, pode ser necessário confirmar a confiança no aplicativo nas configurações do dispositivo."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The 22BET mobile app allows you to bet on more than 30 sports in both pre-match and live modes. You can place bets on totals, handicaps, and individual player statistics. The casino section in the app includes slots, table games, video poker, and live games with real dealers."}',
             'value_es' => '{"0":"La aplicación móvil de 22BET permite apostar en más de 30 deportes en modos pre-partido y en vivo. Están disponibles las apuestas a totales, hándicaps y estadísticas individuales de los jugadores. El casino dentro de la aplicación incluye tragamonedas, juegos de mesa, video póker y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"L’application mobile 22BET permet de parier sur plus de 30 sports en modes pré-match et en direct. Les paris sur les totaux, les handicaps et les statistiques individuelles des joueurs sont disponibles. Le casino de l’application inclut des machines à sous, des jeux de table, du vidéo poker et des jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"O aplicativo móvel 22BET permite apostar em mais de 30 esportes nos modos pré-jogo e ao vivo. Estão disponíveis apostas em totais, handicaps e estatísticas individuais dos jogadores. O cassino no aplicativo inclui caça-níqueis, jogos de mesa, vídeo pôquer e jogos ao vivo com crupiês reais."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Live streaming is available in high quality for most events. Users can deposit and withdraw funds via bank cards, e-wallets, and cryptocurrencies. The app also allows you to activate promo codes and bonuses, participate in special promotions, and receive instant notifications about odds changes, new offers, and match results."}',
             'value_es' => '{"0":"Las transmisiones en vivo están disponibles en alta calidad para la mayoría de los eventos. Los usuarios pueden depositar y retirar fondos mediante tarjetas bancarias, monederos electrónicos y criptomonedas. La aplicación también permite activar códigos promocionales y bonos, participar en promociones especiales y recibir notificaciones instantáneas sobre cambios de cuotas, nuevas ofertas y resultados de los partidos."}',
             'value_fr' => '{"0":"Les retransmissions en direct sont disponibles en haute qualité pour la plupart des événements. Les utilisateurs peuvent déposer et retirer des fonds via cartes bancaires, portefeuilles électroniques et cryptomonnaies. L’application permet également d’activer des codes promo et des bonus, de participer à des promotions spéciales et de recevoir des notifications instantanées concernant les changements de cotes, les nouvelles offres et les résultats des matchs."}',
             'value_pt' => '{"0":"As transmissões ao vivo estão disponíveis em alta qualidade para a maioria dos eventos. Os usuários podem depositar e sacar fundos através de cartões bancários, carteiras eletrônicas e criptomoedas. O aplicativo também permite ativar códigos promocionais e bônus, participar de promoções especiais e receber notificações instantâneas sobre mudanças de odds, novas ofertas e resultados das partidas."}',
             'order' => 25
            ]
        );
    }
}
