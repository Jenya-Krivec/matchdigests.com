<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
             'value_en' => '{"0":"Mobile App Review"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil"}',
             'value_fr' => '{"0":"Revue de l\'application mobile"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz mobile apps are designed for those who want to place sports bets and play casino games anywhere and anytime. The platform pays special attention to mobile users, so the Android and iOS apps are fully optimized for comfortable use."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 888starz están diseñadas para quienes desean realizar apuestas deportivas y jugar en el casino en cualquier lugar y momento. La plataforma presta especial atención a los usuarios móviles, por lo que las aplicaciones para Android e iOS están completamente optimizadas para un uso cómodo."}',
             'value_fr' => '{"0":"Les applications mobiles 888starz sont conçues pour ceux qui souhaitent parier sur le sport et jouer au casino n’importe où et à tout moment. La plateforme accorde une attention particulière aux utilisateurs mobiles, de sorte que les applications Android et iOS sont entièrement optimisées pour une utilisation confortable."}',
             'value_pt' => '{"0":"Os aplicativos móveis 888starz foram desenvolvidos para quem deseja apostar em esportes e jogar no cassino em qualquer lugar e a qualquer hora. A plataforma dedica atenção especial aos usuários móveis, portanto os apps para Android e iOS são totalmente otimizados para um uso confortável."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The interface features a modern minimalist design, allowing users to quickly find the necessary sections, view odds, place bets, and follow results in real time. The apps support live betting, live match streams, and access to all current promotions and bonuses. In this review, we will explain how to install them."}',
             'value_es' => '{"0":"La interfaz tiene un diseño minimalista moderno, que permite encontrar rápidamente las secciones necesarias, ver las cuotas, realizar apuestas y seguir los resultados en tiempo real. Las aplicaciones admiten apuestas en vivo, transmisiones de partidos en directo y acceso a todas las promociones y bonos actuales. En esta reseña explicaremos cómo instalarlas."}',
             'value_fr' => '{"0":"L’interface présente un design minimaliste moderne, permettant de trouver rapidement les sections nécessaires, de consulter les cotes, de placer des paris et de suivre les résultats en temps réel. Les applications prennent en charge les paris en direct, les diffusions de matchs en direct et l’accès à toutes les promotions et bonus en cours. Dans cette revue, nous expliquerons comment les installer."}',
             'value_pt' => '{"0":"A interface apresenta um design minimalista moderno, permitindo encontrar rapidamente as seções necessárias, visualizar odds, fazer apostas e acompanhar os resultados em tempo real. Os aplicativos suportam apostas ao vivo, transmissões de partidas ao vivo e acesso a todas as promoções e bônus atuais. Nesta análise, explicaremos como instalá-los."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Intuitive interface",
                                 "1":"Full website functionality",
                                 "2":"Fast odds updates",
                                 "3":"Support for live streams",
                                 "4":"Ability to deposit and withdraw funds",
                                 "5":"Access to bonuses and promo codes"},
                             "1":
                                {"0":"Limited number of live streams"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz intuitiva",
                                 "1":"Funcionalidad completa del sitio web",
                                 "2":"Actualización rápida de cuotas",
                                 "3":"Soporte para transmisiones en vivo",
                                 "4":"Posibilidad de depositar y retirar fondos",
                                 "5":"Acceso a bonos y códigos promocionales"},
                             "1":
                                {"0":"Número limitado de transmisiones en vivo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface intuitive",
                                 "1":"Fonctionnalité complète du site",
                                 "2":"Mises à jour rapides des cotes",
                                 "3":"Support des diffusions en direct",
                                 "4":"Possibilité de déposer et retirer des fonds",
                                 "5":"Accès aux bonus et codes promotionnels"},
                             "1":
                                {"0":"Nombre limité de diffusions en direct"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface intuitiva",
                                 "1":"Funcionalidade completa do site",
                                 "2":"Atualização rápida das odds",
                                 "3":"Suporte a transmissões ao vivo",
                                 "4":"Possibilidade de depositar e retirar fundos",
                                 "5":"Acesso a bônus e códigos promocionais"},
                             "1":
                                {"0":"Número limitado de transmissões ao vivo"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Due to bookmaker policies, the mobile app is not available for download on Google Play. However, 888starz has made sure Android smartphone users are taken care of and provides the app for download on the official website. To get it, you need to do the following:"}',
             'value_es' => '{"0":"Debido a la política sobre casas de apuestas, la aplicación móvil no está disponible para descargar desde Google Play. Sin embargo, 888starz ha pensado en los usuarios de smartphones Android y ofrece la aplicación para descargar desde el sitio web oficial. Para obtenerla, debes hacer lo siguiente:"}',
             'value_fr' => '{"0":"En raison de la politique concernant les bookmakers, l’application mobile n’est pas disponible au téléchargement sur Google Play. Cependant, 888starz a pensé aux utilisateurs de smartphones Android et propose l’application à télécharger sur le site officiel. Pour l’obtenir, vous devez faire ce qui suit :"}',
             'value_pt' => '{"0":"Devido à política sobre casas de apostas, o aplicativo móvel não está disponível para download no Google Play. No entanto, a 888starz pensou nos usuários de smartphones Android e disponibiliza o aplicativo para download no site oficial. Para obtê-lo, você precisa fazer o seguinte:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official 888starz website through a browser on your smartphone."}',
             'value_es' => '{"0":"1. Abre el sitio web oficial de 888starz desde un navegador en tu smartphone."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de 888starz via un navigateur sur votre smartphone."}',
             'value_pt' => '{"0":"1. Abra o site oficial da 888starz através de um navegador no seu smartphone."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"2. In the main menu, find the «Download Android App» button."}',
             'value_es' => '{"0":"2. En el menú principal, busca el botón «Download Android App»."}',
             'value_fr' => '{"0":"2. Dans le menu principal, trouvez le bouton «Download Android App»."}',
             'value_pt' => '{"0":"2. No menu principal, encontre o botão «Download Android App»."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"3. Click to download the APK file."}',
             'value_es' => '{"0":"3. Haz clic para descargar el archivo APK."}',
             'value_fr' => '{"0":"3. Cliquez pour télécharger le fichier APK."}',
             'value_pt' => '{"0":"3. Clique para baixar o arquivo APK."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"4. Make sure your smartphone settings allow installation from unknown sources. To do this, open your phone settings, go to the «Security» section, find the “Install unknown apps” option, and check if the switch «Allow from this source» is enabled."}',
             'value_es' => '{"0":"4. Asegúrate de que la configuración de tu teléfono permita la instalación desde fuentes desconocidas. Para hacerlo, abre la configuración del teléfono, ve a la sección «Seguridad», encuentra la opción “Instalar aplicaciones desconocidas” y verifica que el interruptor «Permitir desde esta fuente» esté activado."}',
             'value_fr' => '{"0":"4. Assurez-vous que les paramètres de votre smartphone permettent l’installation à partir de sources inconnues. Pour ce faire, ouvrez les paramètres du téléphone, allez dans la section «Sécurité», trouvez l’option “Installer des applications inconnues” et vérifiez que le bouton «Autoriser depuis cette source» est activé."}',
             'value_pt' => '{"0":"4. Certifique-se de que as configurações do seu smartphone permitem a instalação a partir de fontes desconhecidas. Para isso, abra as configurações do telefone, vá para a seção «Segurança», encontre a opção “Instalar aplicativos desconhecidos” e verifique se o interruptor «Permitir desta fonte» está ativado."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"5. After downloading the APK, open the file and confirm the installation."}',
             'value_es' => '{"0":"5. Después de descargar el APK, abre el archivo y confirma la instalación."}',
             'value_fr' => '{"0":"5. Après le téléchargement de l’APK, ouvrez le fichier et confirmez l’installation."}',
             'value_pt' => '{"0":"5. Após baixar o APK, abra o arquivo e confirme a instalação."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"6. Launch the app, log into your account or register."}',
             'value_es' => '{"0":"6. Inicia la aplicación, inicia sesión en tu cuenta o regístrate."}',
             'value_fr' => '{"0":"6. Lancez l’application, connectez-vous à votre compte ou inscrivez-vous."}',
             'value_pt' => '{"0":"6. Abra o aplicativo, faça login na sua conta ou registre-se."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"That\'s it! The app is ready to use. You can place sports bets, play casino games, and enjoy all the platform\'s features."}',
             'value_es' => '{"0":"¡Y eso es todo! La aplicación está lista para usar. Puedes hacer apuestas deportivas, jugar en el casino y disfrutar de todas las funciones de la plataforma."}',
             'value_fr' => '{"0":"Voilà ! L\'application est prête à être utilisée. Vous pouvez placer des paris sportifs, jouer au casino et profiter de toutes les fonctionnalités de la plateforme."}',
             'value_pt' => '{"0":"E é isso! O aplicativo está pronto para uso. Você pode fazer apostas esportivas, jogar no cassino e aproveitar todos os recursos da plataforma."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For smartphone users with the iOS operating system, installing the mobile app is much easier, as you can download it from the App Store."}',
             'value_es' => '{"0":"Para los usuarios de smartphones con sistema operativo iOS, instalar la aplicación móvil es mucho más sencillo, ya que pueden descargarla desde la App Store."}',
             'value_fr' => '{"0":"Pour les utilisateurs de smartphones sous iOS, l\'installation de l\'application mobile est beaucoup plus simple, car vous pouvez la télécharger depuis l\'App Store."}',
             'value_pt' => '{"0":"Para os usuários de smartphones com o sistema iOS, instalar o aplicativo móvel é muito mais fácil, pois você pode baixá-lo na App Store."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"1. On your iPhone or iPad, open the App Store app."}',
             'value_es' => '{"0":"1. En tu iPhone o iPad, abre la aplicación App Store."}',
             'value_fr' => '{"0":"1. Sur votre iPhone ou iPad, ouvrez l\'application App Store."}',
             'value_pt' => '{"0":"1. No seu iPhone ou iPad, abra o aplicativo App Store."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"2. In the search bar, type «888Starz»."}',
             'value_es' => '{"0":"2. En la barra de búsqueda, escribe «888Starz»."}',
             'value_fr' => '{"0":"2. Dans la barre de recherche, saisissez «888Starz»."}',
             'value_pt' => '{"0":"2. Na barra de pesquisa, digite «888Starz»."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"3. In the search results, find the 888Starz app by the developer Bittech B.V."}',
             'value_es' => '{"0":"3. En los resultados de búsqueda, encuentra la aplicación 888Starz del desarrollador Bittech B.V."}',
             'value_fr' => '{"0":"3. Dans les résultats de recherche, trouvez l\'application 888Starz du développeur Bittech B.V."}',
             'value_pt' => '{"0":"3. Nos resultados da pesquisa, encontre o aplicativo 888Starz do desenvolvedor Bittech B.V."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"4. Tap the «Get» button."}',
             'value_es' => '{"0":"4. Pulsa el botón «Obtener»."}',
             'value_fr' => '{"0":"4. Appuyez sur le bouton «Obtenir»."}',
             'value_pt' => '{"0":"4. Toque no botão «Obter»."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"After installation, open the app. You can log in to your existing account or create a new one by following the on-screen instructions."}',
             'value_es' => '{"0":"Después de la instalación, abre la aplicación. Puedes iniciar sesión en tu cuenta existente o crear una nueva siguiendo las instrucciones en pantalla."}',
             'value_fr' => '{"0":"Après l\'installation, ouvrez l\'application. Vous pouvez vous connecter à votre compte existant ou en créer un nouveau en suivant les instructions à l\'écran."}',
             'value_pt' => '{"0":"Após a instalação, abra o aplicativo. Você pode entrar na sua conta existente ou criar uma nova seguindo as instruções na tela."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The 888starz mobile apps allow users to place pre-match and live bets on dozens of sports, including football, basketball, tennis, cricket, and esports. Extended betting markets are available, including totals, handicaps, and individual player statistics."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 888starz permiten a los usuarios realizar apuestas pre-match y en vivo en decenas de deportes, incluidos fútbol, baloncesto, tenis, críquet y deportes electrónicos. Están disponibles mercados de apuestas ampliados, incluidos totales, hándicaps y estadísticas individuales de los jugadores."}',
             'value_fr' => '{"0":"Les applications mobiles 888starz permettent aux utilisateurs de placer des paris pre-match et en direct sur des dizaines de sports, y compris le football, le basketball, le tennis, le cricket et l’e-sport. Des marchés de paris étendus sont disponibles, y compris les totaux, les handicaps et les statistiques individuelles des joueurs."}',
             'value_pt' => '{"0":"Os aplicativos móveis da 888starz permitem que os usuários façam apostas pre-match e ao vivo em dezenas de esportes, incluindo futebol, basquete, tênis, críquete e eSports. Mercados de apostas ampliados estão disponíveis, incluindo totais, handicaps e estatísticas individuais de jogadores."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The casino offers over a thousand games, including slots, jackpots, and live dealer games. In the app, you can activate bonuses and promo codes, receive notifications about promotions and important matches. Convenient deposit and fast withdrawal methods are also available, and support is provided via online chat and feedback form."}',
             'value_es' => '{"0":"El casino ofrece más de mil juegos, incluidos tragamonedas, jackpots y juegos con crupieres en vivo. En la aplicación, puedes activar bonos y códigos promocionales, recibir notificaciones sobre promociones y partidos importantes. También hay métodos de depósito y retiro rápidos y convenientes, y el soporte se brinda a través de chat en línea y formulario de contacto."}',
             'value_fr' => '{"0":"Le casino propose plus d’un millier de jeux, y compris des machines à sous, des jackpots et des jeux avec croupiers en direct. Dans l’application, vous pouvez activer des bonus et des codes promotionnels, recevoir des notifications sur les promotions et les matchs importants. Des méthodes de dépôt pratiques et des retraits rapides sont également disponibles, et le support est fourni via le chat en ligne et le formulaire de contact."}',
             'value_pt' => '{"0":"O cassino oferece mais de mil jogos, incluindo slots, jackpots e jogos com dealers ao vivo. No aplicativo, você pode ativar bônus e códigos promocionais, receber notificações sobre promoções e partidas importantes. Métodos convenientes de depósito e saque rápido também estão disponíveis, e o suporte é fornecido por chat online e formulário de contato."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to the intuitive interface and full functionality, the 888starz mobile apps allow users to stay active and manage sports bets effectively."}',
             'value_es' => '{"0":"Gracias a la interfaz intuitiva y la funcionalidad completa, las aplicaciones móviles de 888starz permiten a los usuarios mantenerse activos y gestionar sus apuestas deportivas de manera eficaz."}',
             'value_fr' => '{"0":"Grâce à une interface intuitive et à une fonctionnalité complète, les applications mobiles 888starz permettent aux utilisateurs de rester actifs et de gérer efficacement leurs paris sportifs."}',
             'value_pt' => '{"0":"Graças à interface intuitiva e à funcionalidade completa, os aplicativos móveis da 888starz permitem que os usuários permaneçam ativos e gerenciem suas apostas esportivas de forma eficiente."}',
             'order' => 26
            ]
        );
    }
}
