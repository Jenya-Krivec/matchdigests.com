<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet mobile apps for Android and iOS are designed to let users fully place bets and play casino games directly from their smartphones or tablets. They replicate almost the entire functionality of the desktop version, allowing users to place pre-match and live bets, play slots, table games, live casino, and virtual sports."}',
             'value_es' => '{"0":"Las aplicaciones móviles de Linebet para Android e iOS están diseñadas para que los usuarios puedan apostar y jugar en el casino directamente desde sus teléfonos inteligentes o tabletas. Replican casi todas las funciones de la versión de escritorio, permitiendo realizar apuestas pre-partido y en vivo, jugar a las tragamonedas, juegos de mesa, casino en vivo y deportes virtuales."}',
             'value_fr' => '{"0":"Les applications mobiles Linebet pour Android et iOS sont conçues pour permettre aux utilisateurs de parier et de jouer au casino directement depuis leur smartphone ou leur tablette. Elles reproduisent presque toutes les fonctionnalités de la version de bureau, permettant de placer des paris pré-match et en direct, de jouer aux machines à sous, aux jeux de table, au casino en direct et aux sports virtuels."}',
             'value_pt' => '{"0":"Os aplicativos móveis da Linebet para Android e iOS foram criados para que os usuários possam apostar e jogar no cassino diretamente de seus smartphones ou tablets. Eles reproduzem quase todas as funcionalidades da versão para desktop, permitindo fazer apostas pré-jogo e ao vivo, jogar caça-níqueis, jogos de mesa, cassino ao vivo e esportes virtuais."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The apps’ interface is adapted to different screen sizes, intuitive, and easy to navigate even for new players. Support for multiple currencies makes it convenient for users from different countries. With the mobile apps, you can track odds changes in real time, participate in promotions, and receive instant notifications about match results and new bonuses."}',
             'value_es' => '{"0":"La interfaz de las aplicaciones está adaptada a diferentes tamaños de pantalla, es intuitiva y fácil de usar incluso para los jugadores nuevos. La compatibilidad con múltiples monedas la hace conveniente para usuarios de distintos países. Con las aplicaciones móviles podrás seguir los cambios de cuotas en tiempo real, participar en promociones y recibir notificaciones instantáneas sobre resultados de partidos y nuevos bonos."}',
             'value_fr' => '{"0":"L’interface des applications est adaptée à différents formats d’écran, intuitive et facile à comprendre même pour les nouveaux joueurs. Le support de nombreuses devises la rend pratique pour les utilisateurs de différents pays. Grâce aux applications mobiles, vous pouvez suivre les changements de cotes en temps réel, participer aux promotions et recevoir des notifications instantanées sur les résultats des matchs et les nouveaux bonus."}',
             'value_pt' => '{"0":"A interface dos aplicativos é adaptada a diferentes tamanhos de tela, intuitiva e fácil de usar até mesmo para novos jogadores. O suporte a múltiplas moedas torna-o conveniente para usuários de diversos países. Com os aplicativos móveis, você poderá acompanhar as mudanças nas odds em tempo real, participar de promoções e receber notificações instantâneas sobre os resultados das partidas e novos bônus."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full website functionality",
                                 "1":"Instant odds updates",
                                 "2":"User-friendly interface",
                                 "3":"Access to live streams",
                                 "4":"Ability to activate promo codes and bonuses",
                                 "5":"Support for multiple languages and currencies"},
                             "1":
                                {"0":"Android app not available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa del sitio web",
                                 "1":"Actualización instantánea de cuotas",
                                 "2":"Interfaz fácil de usar",
                                 "3":"Acceso a transmisiones en vivo",
                                 "4":"Posibilidad de activar códigos promocionales y bonos",
                                 "5":"Compatibilidad con varios idiomas y monedas"},
                             "1":
                                {"0":"La aplicación para Android no está disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète du site",
                                 "1":"Mise à jour instantanée des cotes",
                                 "2":"Interface conviviale",
                                 "3":"Accès aux diffusions en direct",
                                 "4":"Possibilité d’activer des codes promotionnels et des bonus",
                                 "5":"Prise en charge de plusieurs langues et devises"},
                             "1":
                                {"0":"Application Android non disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa do site",
                                 "1":"Atualização instantânea das odds",
                                 "2":"Interface intuitiva",
                                 "3":"Acesso a transmissões ao vivo",
                                 "4":"Possibilidade de ativar códigos promocionais e bônus",
                                 "5":"Suporte para vários idiomas e moedas"},
                             "1":
                                {"0":"Aplicativo Android não disponível na Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Since the Android mobile app is not available on Google Play, you can use our step-by-step guide to install it on your smartphone."}',
             'value_es' => '{"0":"Como la aplicación móvil para Android no está disponible en Google Play, puedes utilizar nuestra guía paso a paso para instalarla en tu smartphone."}',
             'value_fr' => '{"0":"Comme l’application mobile pour Android n’est pas disponible sur Google Play, vous pouvez suivre notre guide étape par étape pour l’installer sur votre smartphone."}',
             'value_pt' => '{"0":"Como o aplicativo móvel para Android não está disponível na Google Play, você pode usar nosso guia passo a passo para instalá-lo no seu smartphone."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official Linebet website from your Android smartphone."}',
             'value_es' => '{"0":"1. Abra el sitio web oficial de Linebet desde su smartphone Android."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de Linebet depuis votre smartphone Android."}',
             'value_pt' => '{"0":"1. Abra o site oficial da Linebet no seu smartphone Android."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"2. In the top menu, select the Mobile App section and tap the Android icon."}',
             'value_es' => '{"0":"2. En el menú superior, seleccione la sección Aplicación móvil y pulse el ícono de Android."}',
             'value_fr' => '{"0":"2. Dans le menu supérieur, sélectionnez la section Application mobile et appuyez sur l’icône Android."}',
             'value_pt' => '{"0":"2. No menu superior, selecione a seção Aplicativo móvel e toque no ícone do Android."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"3. Download the APK file to your device."}',
             'value_es' => '{"0":"3. Descargue el archivo APK en su dispositivo."}',
             'value_fr' => '{"0":"3. Téléchargez le fichier APK sur votre appareil."}',
             'value_pt' => '{"0":"3. Baixe o arquivo APK para o seu dispositivo."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"4. In your smartphone settings, allow the installation of apps from unknown sources. To do this, go to «Settings» → «Security» and enable the option «Allow installation from unknown sources»."}',
             'value_es' => '{"0":"4. En la configuración de su smartphone, permita la instalación de aplicaciones de orígenes desconocidos. Para ello, vaya a «Configuración» → «Seguridad» y active la opción «Permitir instalación de orígenes desconocidos»."}',
             'value_fr' => '{"0":"4. Dans les paramètres de votre smartphone, autorisez l’installation d’applications provenant de sources inconnues. Pour ce faire, allez dans «Paramètres» → «Sécurité» et activez l’option «Autoriser l’installation à partir de sources inconnues»."}',
             'value_pt' => '{"0":"4. Nas configurações do seu smartphone, permita a instalação de aplicativos de fontes desconhecidas. Para isso, vá em «Configurações» → «Segurança» e ative a opção «Permitir instalação de fontes desconhecidas»."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded file and tap Install."}',
             'value_es' => '{"0":"5. Abra el archivo descargado y pulse Instalar."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier téléchargé et appuyez sur Installer."}',
             'value_pt' => '{"0":"5. Abra o arquivo baixado e toque em Instalar."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"After completing the installation, open the app and log into your account or register a new one. Now you can place sports bets directly from your phone!"}',
             'value_es' => '{"0":"Después de finalizar la instalación, abra la aplicación e inicie sesión en su cuenta o registre una nueva. ¡Ahora podrá hacer apuestas deportivas desde su teléfono!"}',
             'value_fr' => '{"0":"Une fois l’installation terminée, ouvrez l’application et connectez-vous à votre compte ou créez-en un nouveau. Vous pouvez désormais parier sur le sport depuis votre téléphone !"}',
             'value_pt' => '{"0":"Após concluir a instalação, abra o aplicativo e faça login na sua conta ou registre uma nova. Agora você já pode fazer apostas esportivas diretamente do seu celular!"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"For users with iOS smartphones, everything is much simpler, as the app can be downloaded directly from the App Store. To do this, you need to:"}',
             'value_es' => '{"0":"Para los usuarios de teléfonos inteligentes con iOS, todo es mucho más sencillo, ya que la aplicación se puede descargar directamente desde la App Store. Para ello, es necesario:"}',
             'value_fr' => '{"0":"Pour les utilisateurs de smartphones iOS, tout est beaucoup plus simple, car l’application peut être téléchargée directement depuis l’App Store. Pour cela, il faut :"}',
             'value_pt' => '{"0":"Para os usuários de smartphones com iOS, tudo é muito mais simples, pois o aplicativo pode ser baixado diretamente da App Store. Para isso, é necessário:"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official Linebet website on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abra el sitio web oficial de Linebet en su iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de Linebet sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra o site oficial da Linebet no seu iPhone ou iPad."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"2. Go to the Mobile App section and select iOS."}',
             'value_es' => '{"0":"2. Vaya a la sección Aplicación móvil y seleccione iOS."}',
             'value_fr' => '{"0":"2. Accédez à la section « Application mobile » et choisissez iOS."}',
             'value_pt' => '{"0":"2. Vá para a seção Aplicativo móvel e selecione iOS."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"3. You will be redirected to the App Store to download the app."}',
             'value_es' => '{"0":"3. Será redirigido a la App Store para descargar la aplicación."}',
             'value_fr' => '{"0":"3. Vous serez redirigé vers l’App Store pour télécharger l’application."}',
             'value_pt' => '{"0":"3. Você será redirecionado para a App Store para baixar o aplicativo."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"4. Tap Download and wait for the installation to complete."}',
             'value_es' => '{"0":"4. Pulse Descargar y espere a que finalice la instalación."}',
             'value_fr' => '{"0":"4. Appuyez sur « Télécharger » et attendez la fin de l’installation."}',
             'value_pt' => '{"0":"4. Toque em Baixar e aguarde a conclusão da instalação."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the app and log in to your account or create a new one."}',
             'value_es' => '{"0":"5. Abra la aplicación e inicie sesión en su cuenta o cree una nueva."}',
             'value_fr' => '{"0":"5. Ouvrez l’application et connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"5. Abra o aplicativo e faça login na sua conta ou crie uma nova."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"At the first launch, you may need to confirm trust for the app in your device settings."}',
             'value_es' => '{"0":"En el primer inicio, es posible que deba confirmar la confianza en la aplicación en la configuración de su dispositivo."}',
             'value_fr' => '{"0":"Lors du premier lancement, il peut être nécessaire de confirmer la confiance accordée à l’application dans les paramètres de votre appareil."}',
             'value_pt' => '{"0":"Na primeira vez que abrir, pode ser necessário confirmar a confiança no aplicativo nas configurações do seu dispositivo."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The Linebet mobile app provides users with full access to sports betting and casino games directly from their smartphone or tablet. You can place bets on more than 40 sports, including football, tennis, basketball, hockey, and esports, in both pre-match and live modes."}',
             'value_es' => '{"0":"La aplicación móvil de Linebet ofrece a los usuarios todas las posibilidades para apostar en deportes y jugar en el casino directamente desde su smartphone o tableta. Puede apostar en más de 40 deportes, incluyendo fútbol, tenis, baloncesto, hockey y deportes electrónicos, tanto en modalidad pre-partido como en vivo."}',
             'value_fr' => '{"0":"L’application mobile Linebet offre aux utilisateurs toutes les fonctionnalités pour parier sur le sport et jouer au casino directement depuis leur smartphone ou tablette. Vous pouvez parier sur plus de 40 sports, dont le football, le tennis, le basketball, le hockey et l’esport, aussi bien en pré-match qu’en direct."}',
             'value_pt' => '{"0":"O aplicativo móvel da Linebet oferece aos usuários todos os recursos para apostas esportivas e jogos de cassino diretamente do smartphone ou tablet. Você pode apostar em mais de 40 esportes, incluindo futebol, tênis, basquete, hóquei e e-sports, tanto em pré-jogo quanto ao vivo."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The casino section in the app features thousands of slots, table games, video poker, and live dealer games, creating the atmosphere of a real casino. In addition, live streaming of most sports events is available in high quality, and for those who cannot watch video, there is detailed graphic statistics and a virtual match center, which is especially convenient for live betting."}',
             'value_es' => '{"0":"El casino en la aplicación incluye miles de tragamonedas, juegos de mesa, videopóker y juegos en vivo con crupieres reales, creando una auténtica atmósfera de casino. Además, están disponibles transmisiones en vivo de la mayoría de los eventos deportivos en alta calidad, y para quienes no puedan ver video, se ofrece una estadística gráfica detallada y un centro de partidos virtual, especialmente útil para las apuestas en tiempo real."}',
             'value_fr' => '{"0":"Le casino de l’application comprend des milliers de machines à sous, de jeux de table, de vidéopoker et de jeux en direct avec de vrais croupiers, recréant l’ambiance d’un véritable casino. De plus, des retransmissions en direct de la majorité des événements sportifs sont disponibles en haute qualité, et pour ceux qui ne peuvent pas regarder les vidéos, des statistiques graphiques détaillées ainsi qu’un centre de match virtuel sont proposés, ce qui est particulièrement pratique pour les paris en direct."}',
             'value_pt' => '{"0":"O cassino no aplicativo inclui milhares de caça-níqueis, jogos de mesa, vídeo pôquer e jogos ao vivo com dealers reais, criando a atmosfera de um verdadeiro cassino. Além disso, estão disponíveis transmissões ao vivo da maioria dos eventos esportivos em alta qualidade e, para quem não pode assistir a vídeos, há estatísticas gráficas detalhadas e um centro de partidas virtual, especialmente conveniente para apostas em tempo real."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The app also allows you to deposit and withdraw funds via bank cards, e-wallets, and cryptocurrency, activate promo codes and bonuses, participate in special promotions, and receive instant notifications about odds changes, match results, and new offers."}',
             'value_es' => '{"0":"La aplicación también permite depositar y retirar fondos mediante tarjetas bancarias, monederos electrónicos y criptomonedas, activar códigos promocionales y bonos, participar en promociones especiales y recibir notificaciones instantáneas sobre cambios en las cuotas, resultados de partidos y nuevas ofertas."}',
             'value_fr' => '{"0":"L’application permet également d’approvisionner et de retirer des fonds via cartes bancaires, portefeuilles électroniques et cryptomonnaies, d’activer des codes promotionnels et des bonus, de participer à des promotions spéciales et de recevoir des notifications instantanées sur les changements de cotes, les résultats des matchs et les nouvelles offres."}',
             'value_pt' => '{"0":"O aplicativo também permite depositar e sacar fundos por meio de cartões bancários, carteiras eletrônicas e criptomoedas, ativar códigos promocionais e bônus, participar de promoções especiais e receber notificações instantâneas sobre alterações nas odds, resultados de partidas e novas ofertas."}',
             'order' => 26
            ]
        );
    }
}
