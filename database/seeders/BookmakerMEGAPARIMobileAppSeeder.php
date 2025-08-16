<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI mobile apps for Android and iOS are designed to allow users to place bets and play casino games directly from smartphones or tablets. The platform offers almost the entire functionality of the desktop version, including pre-match and live betting, casino games, live dealer games, and virtual sports."}',
             'value_es' => '{"0":"Las aplicaciones móviles de MEGAPARI para Android e iOS están diseñadas para que los usuarios puedan realizar apuestas y jugar en el casino directamente desde sus teléfonos inteligentes o tabletas. La plataforma ofrece prácticamente toda la funcionalidad de la versión de escritorio, incluyendo apuestas pre-partido y en vivo, juegos de casino, juegos con crupieres en vivo y deportes virtuales."}',
             'value_fr' => '{"0":"Les applications mobiles MEGAPARI pour Android et iOS sont conçues pour permettre aux utilisateurs de placer des paris et de jouer au casino directement depuis leurs smartphones ou tablettes. La plateforme offre presque toutes les fonctionnalités de la version bureau, y compris les paris pré-match et en direct, les jeux de casino, les jeux avec croupiers en direct et les sports virtuels."}',
             'value_pt' => '{"0":"Os aplicativos móveis MEGAPARI para Android e iOS foram criados para permitir que os usuários façam apostas e joguem no cassino diretamente de smartphones ou tablets. A plataforma oferece quase toda a funcionalidade da versão para desktop, incluindo apostas pré-jogo e ao vivo, jogos de cassino, jogos com dealers ao vivo e esportes virtuais."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The app is adapted to different screen sizes and allows users to navigate sections quickly, placing bets in just a few clicks. The interface is intuitive and modern, making the gaming experience comfortable even for beginners. With support for multiple languages and a wide range of currencies, the app is suitable for users from different countries."}',
             'value_es' => '{"0":"La aplicación se adapta a diferentes tamaños de pantalla y permite navegar rápidamente por las secciones, realizando apuestas con solo unos clics. La interfaz es intuitiva y moderna, lo que hace que la experiencia de juego sea cómoda incluso para principiantes. Con soporte para múltiples idiomas y una amplia variedad de monedas, la aplicación es adecuada para usuarios de diferentes países."}',
             'value_fr' => '{"0":"L’application est adaptée à différentes tailles d’écran et permet de naviguer rapidement dans les sections, plaçant des paris en quelques clics seulement. L’interface est intuitive et moderne, rendant l’expérience de jeu confortable même pour les débutants. Avec le support de plusieurs langues et une large gamme de devises, l’application convient aux utilisateurs de différents pays."}',
             'value_pt' => '{"0":"O aplicativo é adaptado para diferentes tamanhos de tela e permite navegar rapidamente pelas seções, fazendo apostas com apenas alguns cliques. A interface é intuitiva e moderna, tornando a experiência de jogo confortável mesmo para iniciantes. Com suporte a múltiplos idiomas e uma ampla variedade de moedas, o aplicativo é adequado para usuários de diferentes países."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full website functionality",
                                 "1":"Fast odds updates",
                                 "2":"Access to live streams",
                                 "3":"Cryptocurrency support",
                                 "4":"Intuitive interface",
                                 "5":"Ability to activate promo codes and bonuses"},
                             "1":
                                {"0":"Android app not available on Google Play",
                                "1":"Live streams not available for all events"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa del sitio web",
                                 "1":"Actualización rápida de cuotas",
                                 "2":"Acceso a transmisiones en vivo",
                                 "3":"Soporte de criptomonedas",
                                 "4":"Interfaz intuitiva",
                                 "5":"Posibilidad de activar códigos promocionales y bonos"},
                             "1":
                                {"0":"La aplicación de Android no está disponible en Google Play",
                                "1":"Las transmisiones en vivo no están disponibles para todos los eventos"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalités complètes du site",
                                 "1":"Mises à jour rapides des cotes",
                                 "2":"Accès aux diffusions en direct",
                                 "3":"Prise en charge des cryptomonnaies",
                                 "4":"Interface intuitive",
                                 "5":"Possibilité d’activer des codes promo et des bonus"},
                             "1":
                                {"0":"L’application Android n’est pas disponible sur Google Play",
                                "1":"Les diffusions en direct ne sont pas disponibles pour tous les événements"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa do site",
                                 "1":"Atualização rápida das odds",
                                 "2":"Acesso a transmissões ao vivo",
                                 "3":"Suporte a criptomoedas",
                                 "4":"Interface intuitiva",
                                 "5":"Possibilidade de ativar códigos promocionais e bônus"},
                             "1":
                                {"0":"Aplicativo Android não disponível na Google Play",
                                "1":"Transmissões ao vivo não estão disponíveis para todos os eventos"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Below we will explain how you can install the mobile app on your smartphone from the official website."}',
             'value_es' => '{"0":"A continuación, explicaremos cómo puede instalar la aplicación móvil en su smartphone desde el sitio web oficial."}',
             'value_fr' => '{"0":"Ci-dessous, nous expliquerons comment vous pouvez installer l’application mobile sur votre smartphone depuis le site officiel."}',
             'value_pt' => '{"0":"A seguir, explicaremos como você pode instalar o aplicativo móvel no seu smartphone a partir do site oficial."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official MEGAPARI website from your smartphone."}',
             'value_es' => '{"0":"1. Acceda al sitio web oficial de MEGAPARI desde su smartphone."}',
             'value_fr' => '{"0":"1. Accédez au site officiel de MEGAPARI depuis votre smartphone."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da MEGAPARI a partir do seu smartphone."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"2. In the top menu, select the Mobile App section and click on the Android icon."}',
             'value_es' => '{"0":"2. En el menú superior, seleccione la sección Aplicación móvil y haga clic en el icono de Android."}',
             'value_fr' => '{"0":"2. Dans le menu supérieur, sélectionnez la section Application mobile et cliquez sur l’icône Android."}',
             'value_pt' => '{"0":"2. No menu superior, selecione a seção Aplicativo móvel e clique no ícone do Android."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"3. Download the APK file to your device."}',
             'value_es' => '{"0":"3. Descargue el archivo APK en su dispositivo."}',
             'value_fr' => '{"0":"3. Téléchargez le fichier APK sur votre appareil."}',
             'value_pt' => '{"0":"3. Baixe o arquivo APK no seu dispositivo."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"4. In your smartphone settings, you need to allow installation from unknown sources. To do this, go to «Settings» → «Security» or «Apps» and enable the «Allow installation from unknown sources» option."}',
             'value_es' => '{"0":"4. En la configuración de su smartphone, debe permitir la instalación desde fuentes desconocidas. Para ello, vaya a «Configuración» → «Seguridad» o «Aplicaciones» y active la opción «Permitir instalación desde fuentes desconocidas»."}',
             'value_fr' => '{"0":"4. Dans les paramètres de votre smartphone, vous devez autoriser l’installation à partir de sources inconnues. Pour ce faire, allez dans «Paramètres» → «Sécurité» ou «Applications» et activez l’option"}',
             'value_pt' => '{"0":"4. Nas configurações do smartphone, você precisa permitir a instalação a partir de fontes desconhecidas. Para isso, vá em «Configurações» → «Segurança» ou «Aplicativos» e ative a opção «Permitir instalação a partir de fontes desconhecidas»."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded file and tap Install."}',
             'value_es' => '{"0":"5. Abra el archivo descargado y toque Instalar."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier téléchargé et appuyez sur Installer."}',
             'value_pt' => '{"0":"5. Abra o arquivo baixado e toque em Instalar."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"6. After the installation is complete, open the app and log in to your account or register a new one."}',
             'value_es' => '{"0":"6. Después de completar la instalación, abra la aplicación e inicie sesión en su cuenta o registre una nueva."}',
             'value_fr' => '{"0":"6. Une fois l’installation terminée, ouvrez l’application et connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"6. Após a conclusão da instalação, abra o aplicativo e faça login na sua conta ou registre uma nova."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, installing the mobile app is no different from installing other apps. Here are a few steps you need to follow to get the app:"}',
             'value_es' => '{"0":"Para los usuarios de iOS, instalar la aplicación móvil no difiere de instalar otras aplicaciones. Aquí hay algunos pasos que debe seguir para obtener la aplicación:"}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, l’installation de l’application mobile ne diffère pas de l’installation d’autres applications. Voici quelques étapes à suivre pour obtenir l’application :"}',
             'value_pt' => '{"0":"Para usuários de iOS, instalar o aplicativo móvel não é diferente de instalar outros aplicativos. Aqui estão alguns passos que você deve seguir para obter o aplicativo:"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official MEGAPARI website on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abra el sitio web oficial de MEGAPARI en su iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de MEGAPARI sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra o site oficial da MEGAPARI no seu iPhone ou iPad."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the Mobile App section and select iOS."}',
             'value_es' => '{"0":"2. Vaya a la sección Aplicación móvil y seleccione iOS."}',
             'value_fr' => '{"0":"2. Allez dans la section Application mobile et sélectionnez iOS."}',
             'value_pt' => '{"0":"2. Vá para a seção Aplicativo móvel e selecione iOS."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"3. You will be redirected to the App Store, where you can download the app."}',
             'value_es' => '{"0":"3. Será redirigido a la App Store, donde podrá descargar la aplicación."}',
             'value_fr' => '{"0":"3. Vous serez redirigé vers l’App Store, où vous pourrez télécharger l’application."}',
             'value_pt' => '{"0":"3. Você será redirecionado para a App Store, onde poderá baixar o aplicativo."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"4. Tap Download and wait for the installation to complete."}',
             'value_es' => '{"0":"4. Toque Descargar y espere a que se complete la instalación."}',
             'value_fr' => '{"0":"4. Appuyez sur Télécharger et attendez la fin de l’installation."}',
             'value_pt' => '{"0":"4. Toque em Baixar e aguarde a conclusão da instalação."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the app and log in to your account or create a new one."}',
             'value_es' => '{"0":"5. Abra la aplicación e inicie sesión en su cuenta o cree una nueva."}',
             'value_fr' => '{"0":"5. Ouvrez l’application et connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"5. Abra o aplicativo e faça login na sua conta ou crie uma nova."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For the first launch, you may need to verify the app’s trust in your device settings."}',
             'value_es' => '{"0":"Para el primer inicio, es posible que deba verificar la confianza en la aplicación en la configuración del dispositivo."}',
             'value_fr' => '{"0":"Lors du premier lancement, il peut être nécessaire de vérifier la confiance accordée à l’application dans les paramètres de l’appareil."}',
             'value_pt' => '{"0":"No primeiro lançamento, pode ser necessário confirmar a confiança no aplicativo nas configurações do dispositivo."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The MEGAPARI mobile app allows you to place bets on over 30 sports in both pre-match and live modes. You can bet on totals, handicaps, individual player stats, and use the convenient Bet Builder feature. You can also play casino games, including slots, table games, and live games with real dealers."}',
             'value_es' => '{"0":"La aplicación móvil de MEGAPARI le permite realizar apuestas en más de 30 deportes en modos pre-partido y en vivo. Puede apostar en totales, hándicaps, estadísticas individuales de jugadores y utilizar la práctica función Bet Builder. También puede jugar en el casino, incluyendo tragamonedas, juegos de mesa y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"L’application mobile MEGAPARI vous permet de parier sur plus de 30 sports en modes pré-match et en direct. Vous pouvez parier sur les totaux, les handicaps, les statistiques individuelles des joueurs et utiliser la fonction pratique Bet Builder. Vous pouvez également jouer au casino, y compris aux machines à sous, aux jeux de table et aux jeux en direct avec des croupiers réels."}',
             'value_pt' => '{"0":"O aplicativo móvel MEGAPARI permite que você faça apostas em mais de 30 esportes nos modos pré-jogo e ao vivo. Você pode apostar em totais, handicaps, estatísticas individuais dos jogadores e usar a prática função Bet Builder. Também é possível jogar no cassino, incluindo slots, jogos de mesa e jogos ao vivo com dealers reais."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Live streams are also available in high quality for app users."}',
             'value_es' => '{"0":"Las transmisiones en vivo también están disponibles en alta calidad para los usuarios de la aplicación."}',
             'value_fr' => '{"0":"Les diffusions en direct sont également disponibles en haute qualité pour les utilisateurs de l’application."}',
             'value_pt' => '{"0":"As transmissões ao vivo também estão disponíveis em alta qualidade para os usuários do aplicativo."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"You can deposit and withdraw funds via bank cards, e-wallets, and cryptocurrencies. You can also activate promo codes and bonuses, and participate in special promotions directly through the app."}',
             'value_es' => '{"0":"Puede depositar y retirar fondos mediante tarjetas bancarias, monederos electrónicos y criptomonedas. También puede activar códigos promocionales y bonos, y participar en promociones especiales directamente a través de la aplicación."}',
             'value_fr' => '{"0":"Vous pouvez déposer et retirer des fonds via des cartes bancaires, des portefeuilles électroniques et des cryptomonnaies. Vous pouvez aussi activer des codes promo et des bonus, et participer à des promotions spéciales directement via l’application."}',
             'value_pt' => '{"0":"Você pode depositar e retirar fundos através de cartões bancários, carteiras eletrônicas e criptomoedas. Também pode ativar códigos promocionais e bônus, e participar de promoções especiais diretamente pelo aplicativo."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Most importantly, you receive fast notifications about odds changes, new promotions, and event results, which is exactly why these apps were created."}',
             'value_es' => '{"0":"Lo más importante es que recibirá notificaciones rápidas sobre cambios en las cuotas, nuevas promociones y resultados de eventos, que es precisamente para esto que se crearon estas aplicaciones."}',
             'value_fr' => '{"0":"Et surtout, vous recevez des notifications rapides concernant les changements de cotes, les nouvelles promotions et les résultats des événements, car c’est exactement pour cela que ces applications ont été créées."}',
             'value_pt' => '{"0":"E o mais importante, receber notificações rápidas sobre alterações nas odds, novas promoções e resultados de eventos, que é exatamente para isso que esses aplicativos foram criados."}',
             'order' => 27
            ]
        );
    }
}
