<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET mobile apps are designed for those who want to place sports bets and play casino games anywhere, anytime. The platform pays special attention to mobile users, so the Android app and iOS web app are fully optimized for comfortable use."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 4RABET están diseñadas para quienes desean realizar apuestas deportivas y jugar en el casino en cualquier lugar y en cualquier momento. La plataforma presta especial atención a los usuarios móviles, por lo que la aplicación para Android y la web app para iOS están completamente optimizadas para un uso cómodo."}',
             'value_fr' => '{"0":"Les applications mobiles 4RABET sont conçues pour ceux qui souhaitent parier sur le sport et jouer au casino n’importe où et à tout moment. La plateforme accorde une attention particulière aux utilisateurs mobiles, c’est pourquoi l’application Android et l’application web pour iOS sont entièrement optimisées pour un usage confortable."}',
             'value_pt' => '{"0":"Os aplicativos móveis da 4RABET foram criados para quem deseja fazer apostas esportivas e jogar no cassino em qualquer lugar e a qualquer momento. A plataforma dá atenção especial aos usuários móveis, portanto o aplicativo para Android e o web app para iOS são totalmente otimizados para um uso confortável."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The interface is designed in a modern minimalist style, allowing you to quickly find the necessary sections, check odds, place bets, and track results in real time. The apps support live betting, live match streaming, and access to all current promotions and bonuses."}',
             'value_es' => '{"0":"La interfaz tiene un estilo minimalista moderno, lo que permite encontrar rápidamente las secciones necesarias, consultar cuotas, realizar apuestas y seguir los resultados en tiempo real. Las aplicaciones admiten apuestas en vivo, transmisiones en directo de los partidos y acceso a todas las promociones y bonos actuales."}',
             'value_fr' => '{"0":"L’interface est conçue dans un style minimaliste moderne, permettant de trouver rapidement les sections nécessaires, de consulter les cotes, de placer des paris et de suivre les résultats en temps réel. Les applications prennent en charge les paris en direct, le streaming des matchs en direct et l’accès à toutes les promotions et bonus actuels."}',
             'value_pt' => '{"0":"A interface possui um estilo minimalista moderno, permitindo encontrar rapidamente as seções necessárias, consultar odds, fazer apostas e acompanhar os resultados em tempo real. Os aplicativos suportam apostas ao vivo, transmissão de partidas em tempo real e acesso a todas as promoções e bônus atuais."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Intuitive interface",
                                 "1":"Full website functionality",
                                 "2":"Fast odds updates",
                                 "3":"Support for live streams",
                                 "4":"Ability to make transactions"},
                             "1":
                                {"0":"No dedicated app for iOS",
                                "1":"Limited number of live streams"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz intuitiva",
                                 "1":"Funcionalidad completa del sitio web",
                                 "2":"Actualización rápida de cuotas",
                                 "3":"Soporte para transmisiones en vivo",
                                 "4":"Posibilidad de realizar transacciones"},
                             "1":
                                {"0":"No hay aplicación dedicada para iOS",
                                "1":"Número limitado de transmisiones en vivo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface intuitive",
                                 "1":"Fonctionnalité complète du site",
                                 "2":"Mises à jour rapides des cotes",
                                 "3":"Support des flux en direct",
                                 "4":"Possibilité de réaliser des transactions"},
                             "1":
                                {"0":"Pas d’application dédiée pour iOS",
                                "1":"Nombre limité de flux en direct"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface intuitiva",
                                 "1":"Funcionalidade completa do site",
                                 "2":"Atualização rápida das odds",
                                 "3":"Suporte para transmissões ao vivo",
                                 "4":"Possibilidade de realizar transações"},
                             "1":
                                {"0":"Sem aplicativo dedicado para iOS",
                                "1":"Número limitado de transmissões ao vivo"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET offers a full-featured mobile app for smartphones with the Android operating system. Although the app is not available for download from the Play Market, there is no need to worry, as we provide a step-by-step installation guide."}',
             'value_es' => '{"0":"4RABET ofrece una aplicación móvil completa para teléfonos inteligentes con sistema operativo Android. Aunque la aplicación no está disponible para descargar desde Play Market, no hay motivo para preocuparse, ya que proporcionamos una guía de instalación paso a paso."}',
             'value_fr' => '{"0":"4RABET propose une application mobile complète pour les smartphones sous système d\'exploitation Android. Bien que l’application ne soit pas disponible en téléchargement sur le Play Market, il n’y a pas lieu de s’inquiéter, car nous fournissons un guide d’installation étape par étape."}',
             'value_pt' => '{"0":"A 4RABET oferece um aplicativo móvel completo para smartphones com sistema operacional Android. Embora o aplicativo não esteja disponível para download na Play Market, não há motivo para preocupação, pois fornecemos um guia de instalação passo a passo."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official 4RABET website via your smartphone browser."}',
             'value_es' => '{"0":"1. Acceda al sitio web oficial de 4RABET desde el navegador de su smartphone."}',
             'value_fr' => '{"0":"1. Accédez au site officiel de 4RABET via le navigateur de votre smartphone."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da 4RABET pelo navegador do seu smartphone."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"2. In the main menu, find the «Download Android App» button."}',
             'value_es' => '{"0":"2. En el menú principal, busque el botón «Download Android App»."}',
             'value_fr' => '{"0":"2. Dans le menu principal, trouvez le bouton «Download Android App»."}',
             'value_pt' => '{"0":"2. No menu principal, encontre o botão «Download Android App»."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"3. Click the button to download the APK file."}',
             'value_es' => '{"0":"3. Haga clic en el botón para descargar el archivo APK."}',
             'value_fr' => '{"0":"3. Cliquez sur le bouton pour télécharger le fichier APK."}',
             'value_pt' => '{"0":"3. Clique no botão para baixar o arquivo APK."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4. Before installation, make sure your smartphone settings allow installation from unknown sources."}',
             'value_es' => '{"0":"4. Antes de la instalación, asegúrese de que la configuración de su smartphone permita la instalación desde fuentes desconocidas."}',
             'value_fr' => '{"0":"4. Avant l’installation, assurez-vous que les paramètres de votre smartphone permettent l’installation à partir de sources inconnues."}',
             'value_pt' => '{"0":"4. Antes da instalação, certifique-se de que as configurações do smartphone permitam a instalação a partir de fontes desconhecidas."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"5. After downloading the APK, open the file and confirm the installation."}',
             'value_es' => '{"0":"5. Después de descargar el APK, abra el archivo y confirme la instalación."}',
             'value_fr' => '{"0":"5. Après avoir téléchargé le APK, ouvrez le fichier et confirmez l’installation."}',
             'value_pt' => '{"0":"5. Após baixar o APK, abra o arquivo e confirme a instalação."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"6. Launch the app, log in to your account, or register."}',
             'value_es' => '{"0":"6. Inicie la aplicación, inicie sesión en su cuenta o regístrese."}',
             'value_fr' => '{"0":"6. Lancez l’application, connectez-vous à votre compte ou inscrivez-vous."}',
             'value_pt' => '{"0":"6. Abra o aplicativo, faça login na sua conta ou registre-se."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"That\'s it! The app is ready to use. You can place sports bets, play in the casino, and access all the features offered by the bookmaker."}',
             'value_es' => '{"0":"¡Eso es todo! La aplicación está lista para usarse. Puede realizar apuestas deportivas, jugar en el casino y disfrutar de todas las funciones que ofrece el bookmaker."}',
             'value_fr' => '{"0":"Voilà ! L’application est prête à l’emploi. Vous pouvez placer des paris sportifs, jouer au casino et profiter de toutes les fonctionnalités offertes par le bookmaker."}',
             'value_pt' => '{"0":"É isso! O aplicativo está pronto para uso. Você pode fazer apostas esportivas, jogar no cassino e acessar todos os recursos oferecidos pela casa de apostas."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, for iOS smartphone users, 4RABET does not yet offer a separate mobile app. However, there is a web app, and below we will explain how to set it up."}',
             'value_es' => '{"0":"Desafortunadamente, para los usuarios de smartphones con iOS, 4RABET aún no ofrece una aplicación móvil independiente. Sin embargo, existe una aplicación web y a continuación explicaremos cómo instalarla."}',
             'value_fr' => '{"0":"Malheureusement, pour les utilisateurs d’iOS, 4RABET ne propose pas encore d’application mobile distincte. Cependant, il existe une application web et nous allons expliquer ci-dessous comment l’installer."}',
             'value_pt' => '{"0":"Infelizmente, para usuários de smartphones iOS, a 4RABET ainda não oferece um aplicativo móvel separado. No entanto, existe um aplicativo web e, abaixo, explicaremos como configurá-lo."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"1. On your iPhone or iPad, open Safari and go to the official 4RABET website."}',
             'value_es' => '{"0":"1. En tu iPhone o iPad, abre Safari y visita el sitio web oficial de 4RABET."}',
             'value_fr' => '{"0":"1. Sur votre iPhone ou iPad, ouvrez Safari et accédez au site officiel de 4RABET."}',
             'value_pt' => '{"0":"1. No seu iPhone ou iPad, abra o Safari e acesse o site oficial da 4RABET."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"2. In the «Mobile App» section, find the link to the web version for iOS."}',
             'value_es' => '{"0":"2. En la sección «Aplicación móvil», encuentra el enlace a la versión web para iOS."}',
             'value_fr' => '{"0":"2. Dans la section « Application mobile », trouvez le lien vers la version web pour iOS."}',
             'value_pt' => '{"0":"2. Na seção «Aplicativo móvel», encontre o link para a versão web para iOS."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"3. Add the page to your home screen via the «Share» button → «Add to Home Screen»."}',
             'value_es' => '{"0":"3. Añade la página a la pantalla de inicio mediante el botón «Compartir» → «Añadir a la pantalla de inicio»."}',
             'value_fr' => '{"0":"3. Ajoutez la page à votre écran d’accueil via le bouton « Partager » → « Sur l’écran d’accueil »."}',
             'value_pt' => '{"0":"3. Adicione a página à tela inicial através do botão «Compartilhar» → «Adicionar à Tela de Início»."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4. The 4RABET icon will appear on your device\'s desktop like an app."}',
             'value_es' => '{"0":"4. El icono de 4RABET aparecerá en el escritorio de tu dispositivo como una aplicación."}',
             'value_fr' => '{"0":"4. L’icône 4RABET apparaîtra sur le bureau de votre appareil comme une application."}',
             'value_pt' => '{"0":"4. O ícone da 4RABET aparecerá na área de trabalho do seu dispositivo como um aplicativo."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"5. Open it and log into your account or register."}',
             'value_es' => '{"0":"5. Ábrelo e inicia sesión en tu cuenta o regístrate."}',
             'value_fr' => '{"0":"5. Ouvrez-la et connectez-vous à votre compte ou inscrivez-vous."}',
             'value_pt' => '{"0":"5. Abra-o e faça login na sua conta ou registre-se."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Now the web app works like a mobile client, with full access to betting and casino."}',
             'value_es' => '{"0":"Ahora la aplicación web funciona como un cliente móvil, con acceso completo a apuestas y casino."}',
             'value_fr' => '{"0":"Désormais, l’application web fonctionne comme un client mobile, avec un accès complet aux paris et au casino."}',
             'value_pt' => '{"0":"Agora o aplicativo web funciona como um cliente móvel, com acesso completo a apostas e cassino."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4RABET mobile apps allow users to place pre-match and live bets on dozens of sports, including football, basketball, tennis, cricket, and esports. You can use extended betting markets, including totals, handicaps, and individual statistical indicators."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 4RABET permiten a los usuarios realizar apuestas pre-partido y en vivo en decenas de deportes, incluyendo fútbol, baloncesto, tenis, críquet y deportes electrónicos. Puede utilizar mercados de apuestas ampliados, incluidos totales, hándicaps e indicadores estadísticos individuales."}',
             'value_fr' => '{"0":"Les applications mobiles 4RABET permettent aux utilisateurs de placer des paris pre-match et en direct sur des dizaines de sports, y compris le football, le basketball, le tennis, le cricket et l’e-sport. Vous pouvez utiliser des marchés de paris étendus, y compris les totaux, les handicaps et les indicateurs statistiques individuels."}',
             'value_pt' => '{"0":"Os aplicativos móveis 4RABET permitem que os usuários façam apostas pré-jogo e ao vivo em dezenas de esportes, incluindo futebol, basquete, tênis, críquete e esportes eletrônicos. Você pode utilizar mercados de apostas ampliados, incluindo totais, handicaps e indicadores estatísticos individuais."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"There is also the opportunity to play in the casino with over a thousand games, including slots, jackpots, and live games with real dealers."}',
             'value_es' => '{"0":"También existe la posibilidad de jugar en el casino con más de mil juegos, incluidos tragamonedas, jackpots y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"Il est également possible de jouer au casino avec plus d’un millier de jeux, y compris des machines à sous, des jackpots et des jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"Também há a possibilidade de jogar no cassino com mais de mil jogos, incluindo slots, jackpots e jogos ao vivo com dealers reais."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In the mobile app, you can activate bonuses and promo codes, receive notifications about promotions and important matches, and, of course, use convenient deposit and fast withdrawal methods, as well as access support via chat."}',
             'value_es' => '{"0":"En la aplicación móvil, puede activar bonos y códigos promocionales, recibir notificaciones sobre promociones y partidos importantes, y, por supuesto, utilizar métodos convenientes de depósito y retiro rápido, así como acceder al soporte mediante chat."}',
             'value_fr' => '{"0":"Dans l’application mobile, vous pouvez activer des bonus et des codes promotionnels, recevoir des notifications sur les promotions et les matchs importants, et bien sûr utiliser des méthodes pratiques de dépôt et de retrait rapide, ainsi qu’accéder au support via le chat."}',
             'value_pt' => '{"0":"No aplicativo móvel, você pode ativar bônus e códigos promocionais, receber notificações sobre promoções e partidas importantes e, claro, usar métodos convenientes de depósito e saque rápido, além de acessar o suporte via chat."}',
             'order' => 27
            ]
        );
    }
}
