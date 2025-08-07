<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"MelBet\'s mobile applications for Android and iOS are a powerful extension of the main platform, designed for users who want to maintain access to betting anytime and anywhere."}',
                'value_es' => '{"0":"Las aplicaciones móviles de MelBet para Android e iOS son una potente extensión de la plataforma principal, diseñadas para usuarios que desean mantener el acceso a las apuestas en cualquier momento y lugar."}',
                'value_fr' => '{"0":"Les applications mobiles de MelBet pour Android et iOS sont une extension puissante de la plateforme principale, conçues pour les utilisateurs souhaitant accéder aux paris à tout moment et en tout lieu."}',
                'value_pt' => '{"0":"Os aplicativos móveis da MelBet para Android e iOS são uma extensão poderosa da plataforma principal, projetados para usuários que desejam manter o acesso às apostas a qualquer hora e em qualquer lugar."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"The apps combine full functionality, high speed, and a user-friendly interface, allowing users not just to place bets but to enjoy the full range of services without needing the desktop version of the site. MelBet apps are designed for both new and experienced players who value mobility."}',
                'value_es' => '{"0":"Las aplicaciones combinan funcionalidad completa, alta velocidad y una interfaz fácil de usar, lo que permite no solo realizar apuestas, sino también disfrutar de todos los servicios sin necesidad de utilizar la versión de escritorio del sitio. Las apps de MelBet están pensadas tanto para jugadores nuevos como experimentados que valoran la movilidad."}',
                'value_fr' => '{"0":"Les applications allient fonctionnalité complète, rapidité et interface conviviale, permettant non seulement de placer des paris, mais aussi d\'accéder à tous les services sans avoir à utiliser la version de bureau du site.  Les applications MelBet s\'adressent à la fois aux nouveaux utilisateurs et aux joueurs expérimentés qui privilégient la mobilité."}',
                'value_pt' => '{"0":"Os apps combinam funcionalidade completa, alta velocidade e uma interface amigável, permitindo não apenas fazer apostas, mas também acessar todos os serviços sem a necessidade da versão desktop do site. Os aplicativos da MelBet são voltados tanto para novos usuários quanto para jogadores experientes que valorizam a mobilidade."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"Pros:"}',
                'value_es' => '{"0":"Ventajas:"}',
                'value_fr' => '{"0":"Avantages : "}',
                'value_pt' => '{"0":"Vantagens:"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"MelBet mobile apps stand out with stable performance even on low-end devices, instant interface response, and full integration of all services. After installation, users gain access to pre-match and live betting, live streams, casino, account management, and customer support."}',
                'value_es' => '{"0":"Las aplicaciones móviles de MelBet se destacan por su funcionamiento estable incluso en dispositivos de baja gama, respuesta inmediata de la interfaz e integración completa de todos los servicios. Después de la instalación, los usuarios tienen acceso a apuestas pre-partido y en vivo, transmisiones en directo, casino, gestión de cuenta y soporte técnico."}',
                'value_fr' => '{"0":"Les applications mobiles MelBet se distinguent par leur stabilité même sur des appareils peu puissants, la réactivité instantanée de l’interface et l’intégration complète de tous les services. Après installation, les utilisateurs ont accès aux paris pré-match et en direct, aux retransmissions, au casino, à la gestion du compte et au support technique."}',
                'value_pt' => '{"0":"Os aplicativos móveis da MelBet se destacam pelo desempenho estável mesmo em dispositivos mais simples, resposta instantânea da interface e integração completa de todos os serviços. Após a instalação, os usuários têm acesso a apostas pré-jogo e ao vivo, transmissões ao vivo, cassino, gerenciamento de conta e suporte técnico."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"The interface is optimized for touch control, ensuring intuitive navigation without cluttering the screen. Additionally, the apps allow users to save bet history, set notifications, and use promo codes directly."}',
                'value_es' => '{"0":"La interfaz está optimizada para control táctil, lo que garantiza una navegación intuitiva sin sobrecargar la pantalla. Además, las aplicaciones permiten guardar el historial de apuestas, configurar notificaciones y usar códigos promocionales directamente."}',
                'value_fr' => '{"0":"L’interface est optimisée pour le contrôle tactile, assurant une navigation intuitive sans surcharge d’éléments. De plus, les applications permettent de conserver l’historique des paris, de configurer des notifications et d’utiliser directement des codes promo."}',
                'value_pt' => '{"0":"A interface é otimizada para controle por toque, garantindo uma navegação intuitiva sem sobrecarregar a tela. Além disso, os apps permitem salvar o histórico de apostas, configurar notificações e usar códigos promocionais diretamente."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"Cons:"}',
                'value_es' => '{"0":"Desventajas:"}',
                'value_fr' => '{"0":"Inconvénients :"}',
                'value_pt' => '{"0":"Desvantagens:"}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"The main limitation for Android is that the app is not available on Google Play and requires manual installation from the official website. This may cause difficulties for less experienced users. For the iOS app, the main complaint is the periodic requirement to update to the latest iOS version for proper operation."}',
                'value_es' => '{"0":"La principal limitación para Android es que la aplicación no está disponible en Google Play y requiere una instalación manual desde el sitio web oficial. Esto puede causar dificultades a los usuarios menos experimentados. Para la aplicación iOS, la principal queja es la necesidad periódica de actualizar a la última versión de iOS para su correcto funcionamiento."}',
                'value_fr' => '{"0":"La principale limitation pour Android est que l’application n’est pas disponible sur Google Play et nécessite une installation manuelle depuis le site officiel. Cela peut poser des difficultés aux utilisateurs moins expérimentés. Pour l’application iOS, la principale critique est l’obligation périodique de mettre à jour vers la dernière version d’iOS pour un fonctionnement correct."}',
                'value_pt' => '{"0":"A principal limitação para Android é que o aplicativo não está disponível no Google Play e requer instalação manual pelo site oficial. Isso pode causar dificuldades para usuários menos experientes. Para o aplicativo iOS, a principal reclamação é a necessidade periódica de atualizar para a versão mais recente do iOS para o funcionamento correto."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"Since the Android mobile app is not available on Google Play, we suggest downloading it from the official website and using our installation guide."}',
                'value_es' => '{"0":"Como la aplicación móvil para Android no está disponible en Google Play, recomendamos descargarla desde el sitio web oficial y utilizar nuestra guía de instalación."}',
                'value_fr' => '{"0":"Étant donné que l’application mobile Android n’est pas disponible sur Google Play, nous vous proposons de la télécharger depuis le site officiel et d’utiliser notre guide d’installation."}',
                'value_pt' => '{"0":"Como o aplicativo móvel para Android não está disponível no Google Play, sugerimos que você o baixe do site oficial e use nosso guia de instalação."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"1. Go to the official MelBet website using your mobile browser. On the main page, there is a link to a separate section called «Mobile Apps»."}',
                'value_es' => '{"0":"1. Accede al sitio web oficial de MelBet desde el navegador móvil. En la página principal hay un enlace a la sección «Aplicaciones móviles»."}',
                'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de MelBet via votre navigateur mobile. Sur la page principale, il y a un lien vers une section « Applications mobiles »."}',
                'value_pt' => '{"0":"1. Acesse o site oficial da MelBet pelo navegador móvel. Na página principal, há um link para a seção «Aplicativos móveis»."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"2. Click on the Android icon — the system will prompt you to download the APK file."}',
                'value_es' => '{"0":"2. Haz clic en el icono de Android — el sistema te pedirá descargar el archivo APK."}',
                'value_fr' => '{"0":"2. Cliquez sur l’icône Android — le système vous proposera de télécharger le fichier APK."}',
                'value_pt' => '{"0":"2. Toque no ícone do Android — o sistema solicitará o download do arquivo APK."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"3. Confirm the APK download. If necessary, allow installation from unknown sources in your smartphone settings."}',
                'value_es' => '{"0":"3. Confirma la descarga del APK. Si es necesario, permite la instalación desde fuentes desconocidas en la configuración del teléfono."}',
                'value_fr' => '{"0":"3. Confirmez le téléchargement de l’APK. Si nécessaire, autorisez l’installation à partir de sources inconnues dans les paramètres de votre smartphone."}',
                'value_pt' => '{"0":"3. Confirme o download do APK. Se necessário, permita a instalação de fontes desconhecidas nas configurações do seu smartphone."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"4. Open the downloaded file and start the installation."}',
                'value_es' => '{"0":"4. Abre el archivo descargado e inicia la instalación."}',
                'value_fr' => '{"0":"4. Ouvrez le fichier téléchargé et lancez l’installation."}',
                'value_pt' => '{"0":"4. Abra o arquivo baixado e inicie a instalação."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"5. Wait for the installation to complete and open the app."}',
                'value_es' => '{"0":"5. Espera a que la instalación finalice y abre la aplicación."}',
                'value_fr' => '{"0":"5. Attendez la fin de l’installation et ouvrez l’application."}',
                'value_pt' => '{"0":"5. Aguarde a conclusão da instalação e abra o aplicativo."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"6. Log in or register if you don’t have an account yet."}',
                'value_es' => '{"0":"6. Inicia sesión o regístrate si aún no tienes una cuenta."}',
                'value_fr' => '{"0":"6. Connectez-vous ou inscrivez-vous si vous n’avez pas encore de compte."}',
                'value_pt' => '{"0":"6. Faça login ou registre-se se ainda não tiver uma conta."}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"For iOS users, everything is much simpler. Here’s what you need to do to start playing from your smartphone:"}',
                'value_es' => '{"0":"Para los usuarios de iOS, todo es mucho más sencillo. Esto es lo que debes hacer para comenzar a jugar desde tu smartphone:"}',
                'value_fr' => '{"0":"Pour les utilisateurs iOS, tout est beaucoup plus simple. Voici ce que vous devez faire pour commencer à jouer depuis votre smartphone :"}',
                'value_pt' => '{"0":"Para os usuários de iOS, tudo é muito mais simples. Veja o que você precisa fazer para começar a jogar no seu smartphone:"}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"1. Open the App Store on your iPhone or iPad."}',
                'value_es' => '{"0":"1. Abre la App Store en tu iPhone o iPad."}',
                'value_fr' => '{"0":"1. Ouvrez l’App Store sur votre iPhone ou iPad."}',
                'value_pt' => '{"0":"1. Abra a App Store no seu iPhone ou iPad."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"2. In the search bar, type «MelBet» — the official app should appear first in the results."}',
                'value_es' => '{"0":"2. En la barra de búsqueda, escribe «MelBet» — la aplicación oficial debería aparecer primera en los resultados."}',
                'value_fr' => '{"0":"2. Dans la barre de recherche, tapez « MelBet » — l’application officielle devrait apparaître en premier dans les résultats."}',
                'value_pt' => '{"0":"2. Na barra de pesquisa, digite «MelBet» — o aplicativo oficial deve aparecer primeiro nos resultados."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"3. Tap «Download” or «Get», then confirm the action using Face ID, Touch ID, or your password."}',
                'value_es' => '{"0":"3. Pulsa «Descargar» o «Obtener» y confirma la acción con Face ID, Touch ID o tu contraseña."}',
                'value_fr' => '{"0":"3. Appuyez sur « Télécharger » ou « Obtenir », puis confirmez l’action avec Face ID, Touch ID ou votre mot de passe."}',
                'value_pt' => '{"0":"3. Toque em «Baixar» ou «Obter» e confirme a ação usando Face ID, Touch ID ou sua senha."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"4. After installation, open the app from your device’s home screen."}',
                'value_es' => '{"0":"4. Después de la instalación, abre la aplicación desde la pantalla principal de tu dispositivo."}',
                'value_fr' => '{"0":"4. Après l’installation, ouvrez l’application depuis l’écran d’accueil de votre appareil."}',
                'value_pt' => '{"0":"4. Após a instalação, abra o aplicativo na tela inicial do seu dispositivo."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"5. Log in to your account or register directly within the app."}',
                'value_es' => '{"0":"5. Inicia sesión en tu cuenta o regístrate directamente en la aplicación."}',
                'value_fr' => '{"0":"5. Connectez-vous à votre compte ou inscrivez-vous directement dans l’application."}',
                'value_pt' => '{"0":"5. Faça login na sua conta ou registre-se diretamente no aplicativo."}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"In case the app is not available in your regional App Store, MelBet recommends changing the region of your Apple account or using the QR code on the website to access direct download."}',
                'value_es' => '{"0":"En caso de que la aplicación no esté disponible en la App Store regional, MelBet recomienda cambiar la región de tu cuenta de Apple o usar el código QR en el sitio web para acceder a la descarga directa."}',
                'value_fr' => '{"0":"Si l’application n’est pas disponible dans votre App Store régional, MelBet recommande de changer la région de votre compte Apple ou d’utiliser le code QR sur le site pour accéder au téléchargement direct."}',
                'value_pt' => '{"0":"Caso o aplicativo não esteja disponível na App Store regional, a MelBet recomenda alterar a região da sua conta Apple ou usar o código QR no site para acessar o download direto."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"The functionality of MelBet’s mobile apps fully matches the desktop version of the site. Players can place bets on over 40 sports, including live betting with graphical support or real-time event streaming. A full casino section is available: slots, live dealers, roulette, card games. Through the app, users can make deposits, withdraw funds, view transaction and bet history, activate bonuses, and participate in promotions."}',
                'value_es' => '{"0":"La funcionalidad de las aplicaciones móviles de MelBet coincide completamente con la versión de escritorio del sitio. Los jugadores pueden apostar en más de 40 deportes, incluyendo apuestas en vivo con soporte gráfico o transmisión en tiempo real de los eventos. Está disponible una sección completa de casino: tragamonedas, crupieres en vivo, ruleta, juegos de cartas. A través de la app, los usuarios pueden hacer depósitos, retirar fondos, ver el historial de transacciones y apuestas, activar bonos y participar en promociones."}',
                'value_fr' => '{"0":"Les fonctionnalités des applications mobiles MelBet correspondent entièrement à la version de bureau du site. Les joueurs peuvent parier sur plus de 40 sports, y compris les paris en direct avec support graphique ou retransmission en temps réel des événements. Une section complète de casino est disponible : machines à sous, croupiers en direct, roulette, jeux de cartes. Via l’application, les utilisateurs peuvent effectuer des dépôts, retirer des fonds, consulter l’historique des transactions et des paris, activer des bonus et participer à des promotions."}',
                'value_pt' => '{"0":"A funcionalidade dos aplicativos móveis da MelBet corresponde totalmente à versão desktop do site. Os jogadores podem apostar em mais de 40 esportes, incluindo apostas ao vivo com suporte gráfico ou transmissão de eventos em tempo real. Está disponível uma seção completa de cassino: slots, dealers ao vivo, roleta, jogos de cartas. Pelo app, os usuários podem fazer depósitos, sacar fundos, visualizar histórico de transações e apostas, ativar bônus e participar de promoções."}',
             'order' => 28
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"The app also offers personalization — you can set push notifications about events, odds changes, or bet statuses. The speed in live mode allows for quick reactions to the course of the match and placing bets without delays."}',
                'value_es' => '{"0":"La aplicación también ofrece personalización: puedes configurar notificaciones push sobre eventos, cambios en las cuotas o estados de las apuestas. La velocidad en modo en vivo permite reaccionar rápidamente al desarrollo del partido y realizar apuestas sin demoras."}',
                'value_fr' => '{"0":"L’application propose également une personnalisation — vous pouvez configurer des notifications push concernant les événements, les changements de cotes ou les statuts des paris. La rapidité en mode live permet de réagir rapidement au déroulement du match et de placer des paris sans délai."}',
                'value_pt' => '{"0":"O aplicativo também oferece personalização — é possível configurar notificações push sobre eventos, mudanças nas odds ou status das apostas. A velocidade no modo ao vivo permite reagir rapidamente ao andamento da partida e fazer apostas sem atrasos."}',
             'order' => 29
            ]
        );
    }
}
