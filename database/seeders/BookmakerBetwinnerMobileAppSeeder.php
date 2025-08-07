<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner offers fully functional mobile solutions for both Android and iOS platforms. Both apps are designed for users who want to place sports bets, play casino games, and access their personal accounts without relying on the desktop version of the site."}',
             'value_es' => '{"0":"BetWinner ofrece soluciones móviles completas para las plataformas Android e iOS. Ambas aplicaciones están diseñadas para quienes desean apostar en deportes, jugar en el casino y acceder a su cuenta personal sin depender de la versión de escritorio del sitio."}',
             'value_fr' => '{"0":"BetWinner propose des solutions mobiles complètes pour les plateformes Android et iOS. Les deux applications sont conçues pour ceux qui souhaitent parier sur le sport, jouer au casino et accéder à leur compte personnel sans dépendre de la version de bureau du site."}',
             'value_pt' => '{"0":"A BetWinner oferece soluções móveis completas para as plataformas Android e iOS. Ambos os aplicativos foram desenvolvidos para quem deseja apostar em esportes, jogar no cassino e acessar a conta pessoal sem depender da versão desktop do site."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The absence of lags, an intuitive interface, and a wide range of features are just a few of the advantages BetWinner provides on mobile devices."}',
             'value_es' => '{"0":"La ausencia de retrasos, una interfaz intuitiva y amplias funcionalidades son solo algunas de las ventajas que ofrece BetWinner en dispositivos móviles."}',
             'value_fr' => '{"0":"L\'absence de latence, une interface intuitive et une large gamme de fonctionnalités ne sont que quelques-uns des avantages offerts par BetWinner sur mobile."}',
             'value_pt' => '{"0":"A ausência de atrasos, a interface intuitiva e a ampla gama de funcionalidades são apenas algumas das vantagens que a BetWinner oferece em dispositivos móveis."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Full site functionality",
                                 "1":"Fast odds updates",
                                 "2":"Integration with payment systems",
                                 "3":"Access to online casino",
                                 "4":"Push notifications",
                                 "5":"Ability to use free bets and bonuses"},
                             "1":
                                {"0":"The Android app is not available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Funcionalidad completa del sitio",
                                 "1":"Actualización rápida de cuotas",
                                 "2":"Integración con sistemas de pago",
                                 "3":"Acceso al casino en línea",
                                 "4":"Notificaciones push",
                                 "5":"Posibilidad de usar apuestas gratuitas y bonos"},
                             "1":
                                {"0":"La aplicación para Android no está disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Fonctionnalité complète du site",
                                 "1":"Mise à jour rapide des cotes",
                                 "2":"Intégration avec les systèmes de paiement",
                                 "3":"Accès au casino en ligne",
                                 "4":"Notifications push",
                                 "5":"Possibilité d\'utiliser des paris gratuits et des bonus"},
                             "1":
                                {"0":"L\'application Android n\'est pas disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Funcionalidade completa do site",
                                 "1":"Atualização rápida das odds",
                                 "2":"Integração com sistemas de pagamento",
                                 "3":"Acesso ao cassino online",
                                 "4":"Notificações push",
                                 "5":"Possibilidade de usar apostas grátis e bônus"},
                             "1":
                                {"0":"O aplicativo para Android não está disponível na Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Since the Android mobile app is not available on Google Play, we have created a step-by-step installation guide to make the process clear and hassle-free for you. So here it is:"}',
             'value_es' => '{"0":"Como la aplicación móvil para Android no está disponible en Google Play, hemos creado una guía paso a paso para que no tengas ninguna duda durante la instalación. Así que aquí va:"}',
             'value_fr' => '{"0":"Étant donné que l’application mobile Android n’est pas disponible sur Google Play, nous avons préparé un guide d’installation étape par étape pour éviter toute confusion. Voici donc les étapes:"}',
             'value_pt' => '{"0":"Como o aplicativo móvel para Android não está disponível na Google Play, criámos um guia passo a passo para que você não tenha nenhuma dúvida durante a instalação. Então, vamos lá:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official BetWinner website using your mobile browser."}',
             'value_es' => '{"0":"1. Ve al sitio web oficial de BetWinner desde el navegador de tu móvil."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de BetWinner depuis votre navigateur mobile."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da BetWinner através do navegador do seu celular."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"2. At the bottom of the homepage, tap the Android icon and open the «Mobile Applications» section."}',
             'value_es' => '{"0":"2. En la parte inferior de la página principal, pulsa el ícono de Android y abre la sección «Aplicaciones móviles»."}',
             'value_fr' => '{"0":"2. En bas de la page d’accueil, appuyez sur l’icône Android et ouvrez la section « Applications mobiles »."}',
             'value_pt' => '{"0":"2. Na parte inferior da página inicial, toque no ícone do Android e abra a seção «Aplicativos móveis»."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"3. Download the APK file. Before that, make sure that app installation from unknown sources is allowed in your settings. If not, go to the «Security» or «Privacy & Security» section, find the «Install unknown apps» option, and enable permission."}',
             'value_es' => '{"0":"3. Descarga el archivo APK. Antes de hacerlo, asegúrate de que la opción para instalar apps de fuentes desconocidas esté activada en la configuración. Si no lo está, ve a «Seguridad» o «Privacidad y seguridad», busca la opción «Instalar apps desconocidas» y habilita el permiso."}',
             'value_fr' => '{"0":"3. Téléchargez le fichier APK. Avant cela, assurez-vous que l’installation d’applications de sources inconnues est activée dans vos paramètres. Sinon, allez dans « Sécurité » ou « Confidentialité et sécurité », trouvez l’option « Installer des applications inconnues » et activez l’autorisation."}',
             'value_pt' => '{"0":"3. Baixe o arquivo APK. Antes disso, certifique-se de que a instalação de apps de fontes desconhecidas esteja permitida nas configurações. Caso contrário, vá para a seção «Segurança» ou «Privacidade e segurança», encontre a opção «Instalar apps desconhecidos» e ative a permissão."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"4. Open the downloaded file and confirm the installation."}',
             'value_es' => '{"0":"4. Abre el archivo descargado y confirma la instalación."}',
             'value_fr' => '{"0":"4. Ouvrez le fichier téléchargé et confirmez l’installation."}',
             'value_pt' => '{"0":"4. Abra o arquivo baixado e confirme a instalação."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"5. Once installation is complete, open the app and log into your account or register."}',
             'value_es' => '{"0":"5. Una vez finalizada la instalación, abre la app e inicia sesión en tu cuenta o regístrate."}',
             'value_fr' => '{"0":"5. Une fois l’installation terminée, ouvrez l’application, connectez-vous à votre compte ou créez-en un."}',
             'value_pt' => '{"0":"5. Após a instalação, abra o aplicativo e entre na sua conta ou registre-se."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Although installing the iOS mobile app is no different from installing other apps, we still offer you a step-by-step guide."}',
             'value_es' => '{"0":"Aunque la instalación de la aplicación móvil para iOS no difiere de la de otras aplicaciones, igualmente te ofrecemos una guía paso a paso."}',
             'value_fr' => '{"0":"Bien que l\'installation de l\'application mobile pour iOS ne soit pas différente de celle des autres applications, nous vous proposons tout de même un guide étape par étape."}',
             'value_pt' => '{"0":"Embora a instalação do aplicativo móvel para iOS não seja diferente da de outros aplicativos, ainda assim oferecemos um guia passo a passo."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the App Store on your iPhone or iPad."}',
             'value_es' => '{"0":"1. Abre la App Store en tu iPhone o iPad."}',
             'value_fr' => '{"0":"1. Ouvrez l\'App Store sur votre iPhone ou iPad."}',
             'value_pt' => '{"0":"1. Abra a App Store no seu iPhone ou iPad."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"2. Search for «BetWinner» and find the official app."}',
             'value_es' => '{"0":"2. Escribe «BetWinner» en el buscador y encuentra la aplicación oficial."}',
             'value_fr' => '{"0":"2. Recherchez « BetWinner » et trouvez l\'application officielle."}',
             'value_pt' => '{"0":"2. Pesquise por «BetWinner» e encontre o aplicativo oficial."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"3. Tap the «Download» button and wait for the installation to complete."}',
             'value_es' => '{"0":"3. Pulsa el botón «Descargar» y espera a que se complete la instalación."}',
             'value_fr' => '{"0":"3. Appuyez sur le bouton « Télécharger » et attendez la fin de l\'installation."}',
             'value_pt' => '{"0":"3. Toque no botão «Baixar» e aguarde a conclusão da instalação."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"4. Open the app and either log in to your existing account or register directly through the app."}',
             'value_es' => '{"0":"4. Abre la aplicación e inicia sesión en tu cuenta existente o regístrate directamente desde la app."}',
             'value_fr' => '{"0":"4. Ouvrez l\'application et connectez-vous à votre compte existant ou inscrivez-vous directement via l\'application."}',
             'value_pt' => '{"0":"4. Abra o aplicativo e faça login na sua conta existente ou registre-se diretamente pelo app."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner mobile apps fully replicate the functionality of the main website. Users can place bets in both pre-match and live modes, view real-time odds, access extended statistics, and activate bonuses and promo codes. A full range of entertainment is also available — from slots to live casino games with real dealers."}',
             'value_es' => '{"0":"Las aplicaciones móviles de BetWinner replican completamente la funcionalidad del sitio web principal. Los usuarios pueden realizar apuestas en los modos prepartido y en vivo, ver las cuotas en tiempo real, acceder a estadísticas ampliadas y activar bonos y códigos promocionales. También está disponible toda la gama de entretenimiento: desde tragamonedas hasta casino en vivo con crupieres reales."}',
             'value_fr' => '{"0":"Les applications mobiles BetWinner reproduisent entièrement les fonctionnalités du site principal. Les utilisateurs peuvent placer des paris en modes pré-match et en direct, consulter les cotes en temps réel, accéder à des statistiques détaillées et activer des bonus et des codes promo. Toute la gamme de divertissements est également disponible : des machines à sous aux jeux de casino en direct avec croupiers réels."}',
             'value_pt' => '{"0":"Os aplicativos móveis da BetWinner reproduzem totalmente as funcionalidades do site principal. Os usuários podem fazer apostas nos modos pré-jogo e ao vivo, visualizar as odds em tempo real, acessar estatísticas detalhadas e ativar bônus e códigos promocionais. Também está disponível toda a gama de entretenimento — de slots a jogos de cassino ao vivo com crupiês reais."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The app interface is adapted for screens of various sizes, and the graphics look great even on mid-range smartphones. The payment system works reliably, allowing users to deposit and withdraw winnings through dozens of available methods."}',
             'value_es' => '{"0":"La interfaz de la aplicación está adaptada a pantallas de diferentes tamaños y los gráficos se ven bien incluso en smartphones de gama media. La función de pagos funciona de manera estable, permitiendo depósitos y retiros mediante decenas de métodos disponibles."}',
             'value_fr' => '{"0":"L\'interface de l\'application est adaptée aux écrans de toutes tailles, et les graphismes sont agréables même sur des smartphones de milieu de gamme. Les fonctions de paiement sont stables, permettant les dépôts et retraits via des dizaines de méthodes disponibles."}',
             'value_pt' => '{"0":"A interface do aplicativo é adaptada para telas de vários tamanhos e os gráficos agradam até em smartphones de gama média. A funcionalidade de pagamento é estável, permitindo depósitos e saques por dezenas de métodos disponíveis."}',
             'order' => 22
            ]
        );
    }
}
