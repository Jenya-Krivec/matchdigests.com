<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil"}',
                'value_fr' => '{"0":"Revue de l\'application mobile"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel"}',
                'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker MOSTBET offers users convenient apps for Android and iOS that allow you to stay in the game anywhere and anytime. Over the years, the platform has developed high-quality software that works quickly, has an intuitive interface, and full functionality close to the desktop version."}',
             'value_es' => '{"0":"La casa de apuestas MOSTBET ofrece a los usuarios aplicaciones convenientes para Android e iOS que te permiten estar en el juego en cualquier lugar y en cualquier momento. A lo largo de los años, la plataforma ha desarrollado un software de alta calidad que funciona rápido, tiene una interfaz intuitiva y una funcionalidad completa cercana a la versión de escritorio."}',
             'value_fr' => '{"0":"Le bookmaker MOSTBET propose aux utilisateurs des applications pratiques pour Android et iOS qui vous permettent de rester dans le jeu où que vous soyez et à tout moment. Au fil des années, la plateforme a développé un logiciel de haute qualité qui fonctionne rapidement, dispose d’une interface intuitive et d’une fonctionnalité complète proche de la version bureau."}',
             'value_pt' => '{"0":"A casa de apostas MOSTBET oferece aos usuários aplicativos convenientes para Android e iOS que permitem que você permaneça no jogo em qualquer lugar e a qualquer hora. Ao longo dos anos, a plataforma desenvolveu um software de alta qualidade que funciona rapidamente, possui uma interface intuitiva e funcionalidade completa próxima à versão para desktop."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will tell you about all the advantages and disadvantages of the MOSTBET mobile apps, as well as take a detailed look at how to install them on different operating systems."}',
             'value_es' => '{"0":"En esta reseña, te contaremos todas las ventajas y desventajas de las aplicaciones móviles de MOSTBET, así como también analizaremos detalladamente cómo instalarlas en diferentes sistemas operativos."}',
             'value_fr' => '{"0":"Dans cet avis, nous vous présenterons tous les avantages et inconvénients des applications mobiles MOSTBET, ainsi qu’un examen détaillé de leur installation sur différents systèmes d’exploitation."}',
             'value_pt' => '{"0":"Nesta análise, vamos falar sobre todas as vantagens e desvantagens dos aplicativos móveis da MOSTBET, além de analisar detalhadamente como instalá-los em diferentes sistemas operacionais."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"Pros:"}',
                'value_es' => '{"0":"Ventajas:"}',
                'value_fr' => '{"0":"Avantages : "}',
                'value_pt' => '{"0":"Vantagens:"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Among the key advantages of the MOSTBET mobile apps are quick access to bets, a wide selection of sports events and markets, support for live betting and live streaming, as well as the ability to manage your account and finances without restrictions. The app is adapted for small screens, has clear navigation, and works reliably even with a slow internet connection. Additionally, bonuses, promotions, and bet history are available within the app."}',
             'value_es' => '{"0":"Entre las principales ventajas de las aplicaciones móviles de MOSTBET están el acceso rápido a las apuestas, una amplia selección de eventos deportivos y mercados, soporte para apuestas en vivo y transmisiones en directo, así como la posibilidad de gestionar tu cuenta y finanzas sin restricciones. La aplicación está adaptada para pantallas pequeñas, tiene una navegación clara y funciona de manera estable incluso con una conexión a internet lenta. Además, la aplicación ofrece bonos, promociones e historial de apuestas."}',
             'value_fr' => '{"0":"Parmi les principaux avantages des applications mobiles MOSTBET figurent un accès rapide aux paris, un large choix d’événements sportifs et de marchés, la prise en charge des paris en direct et des retransmissions en direct, ainsi que la possibilité de gérer votre compte et vos finances sans restrictions. L’application est adaptée aux petits écrans, dispose d’une navigation claire et fonctionne de manière stable même avec une connexion Internet lente. De plus, les bonus, promotions et l’historique des paris sont disponibles dans l’application."}',
             'value_pt' => '{"0":"Entre as principais vantagens dos aplicativos móveis da MOSTBET estão o acesso rápido às apostas, uma ampla seleção de eventos esportivos e mercados, suporte para apostas ao vivo e transmissões ao vivo, bem como a possibilidade de gerenciar sua conta e finanças sem restrições. O aplicativo é adaptado para telas pequenas, possui uma navegação clara e funciona de forma estável mesmo com uma conexão de internet lenta. Além disso, bônus, promoções e histórico de apostas estão disponíveis no aplicativo."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"Cons:"}',
                'value_es' => '{"0":"Desventajas:"}',
                'value_fr' => '{"0":"Inconvénients :"}',
                'value_pt' => '{"0":"Desvantagens:"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Among the drawbacks — the Android app sometimes requires additional security settings before installation, as the app is not distributed through Google Play but downloaded from the official website. For iOS users, there are occasionally temporary restrictions due to Apple’s policy, which may delay app updates. Also, the interface can sometimes feel a bit bulky for new players, especially in the live betting section."}',
             'value_es' => '{"0":"Entre las desventajas, la aplicación para Android a veces requiere configuraciones de seguridad adicionales antes de la instalación, ya que la app no se distribuye a través de Google Play, sino que se descarga desde el sitio web oficial. Para los usuarios de iOS, ocasionalmente hay restricciones temporales debido a la política de Apple, lo que puede retrasar las actualizaciones de la aplicación. Además, la interfaz a veces puede parecer un poco pesada para los nuevos jugadores, especialmente en la sección de apuestas en vivo."}',
             'value_fr' => '{"0":"Parmi les inconvénients, l’application Android nécessite parfois des réglages de sécurité supplémentaires avant l’installation, car elle n’est pas distribuée via Google Play mais téléchargée depuis le site officiel. Pour les utilisateurs iOS, il existe parfois des restrictions temporaires dues à la politique d’Apple, ce qui peut retarder les mises à jour de l’application. De plus, l’interface peut parfois sembler un peu lourde pour les nouveaux joueurs, notamment dans la section des paris en direct."}',
             'value_pt' => '{"0":"Entre as desvantagens, o aplicativo Android às vezes requer configurações de segurança adicionais antes da instalação, pois o app não é distribuído via Google Play, mas baixado do site oficial. Para os usuários de iOS, ocasionalmente há restrições temporárias devido à política da Apple, o que pode atrasar as atualizações do aplicativo. Além disso, a interface pode parecer um pouco pesada para jogadores iniciantes, especialmente na seção de apostas ao vivo."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on Android"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en Android"}',
                'value_fr' => '{"0":"Comment installer l\'application sur Android"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"We have prepared a step-by-step guide for installing the mobile app on Android smartphones, so you won’t have any problems with it."}',
             'value_es' => '{"0":"Hemos preparado una guía paso a paso para instalar la aplicación móvil en teléfonos inteligentes Android, para que no tengas ningún problema con ello."}',
             'value_fr' => '{"0":"Nous avons préparé un guide étape par étape pour installer l’application mobile sur les smartphones Android, afin que vous n’ayez aucun problème."}',
             'value_pt' => '{"0":"Preparamos um guia passo a passo para instalar o aplicativo móvel em smartphones Android, para que você não tenha nenhum problema com isso."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"1. Open the official MOSTBET website through your browser on your Android smartphone."}',
             'value_es' => '{"0":"1. Abre el sitio web oficial de MOSTBET desde el navegador de tu teléfono Android."}',
             'value_fr' => '{"0":"1. Ouvrez le site officiel de MOSTBET via le navigateur de votre smartphone Android."}',
             'value_pt' => '{"0":"1. Abra o site oficial da MOSTBET pelo navegador do seu smartphone Android."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"2. Find the «Mobile App» section in the menu or a banner with a link to download the APK file."}',
             'value_es' => '{"0":"2. Busca en el menú la sección «Aplicación móvil» o un banner con el enlace para descargar el archivo APK."}',
             'value_fr' => '{"0":"2. Trouvez dans le menu la section « Application mobile » ou une bannière avec un lien pour télécharger le fichier APK."}',
             'value_pt' => '{"0":"2. Encontre no menu a seção «Aplicativo móvel» ou um banner com o link para baixar o arquivo APK."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"3. Click on the link to download the app. The APK file will start downloading."}',
             'value_es' => '{"0":"3. Haz clic en el enlace para descargar la aplicación. El archivo APK comenzará a descargarse."}',
             'value_fr' => '{"0":"3. Cliquez sur le lien pour télécharger l’application. Le fichier APK commencera à se télécharger."}',
             'value_pt' => '{"0":"3. Clique no link para baixar o aplicativo. O arquivo APK começará a ser baixado."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"4. Before installation, go to your phone’s settings, then to «Security», and allow installation of apps from unknown sources."}',
             'value_es' => '{"0":"4. Antes de la instalación, ve a la configuración del teléfono, luego a «Seguridad», y permite la instalación de aplicaciones desde fuentes desconocidas."}',
             'value_fr' => '{"0":"4. Avant l’installation, allez dans les paramètres de votre téléphone, puis dans « Sécurité », et autorisez l’installation d’applications provenant de sources inconnues."}',
             'value_pt' => '{"0":"4. Antes da instalação, vá para as configurações do seu telefone, depois para «Segurança», e permita a instalação de aplicativos de fontes desconhecidas."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"5. Open the downloaded APK file and confirm the installation."}',
             'value_es' => '{"0":"5. Abre el archivo APK descargado y confirma la instalación."}',
             'value_fr' => '{"0":"5. Ouvrez le fichier APK téléchargé et confirmez l’installation."}',
             'value_pt' => '{"0":"5. Abra o arquivo APK baixado e confirme a instalação."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"6. After the installation is complete, open the app, log in or register, and you can start placing sports bets."}',
             'value_es' => '{"0":"6. Después de que la instalación se complete, abre la aplicación, inicia sesión o regístrate, y podrás comenzar a hacer apuestas deportivas."}',
             'value_fr' => '{"0":"6. Une fois l’installation terminée, ouvrez l’application, connectez-vous ou inscrivez-vous, et vous pouvez commencer à parier sur le sport."}',
             'value_pt' => '{"0":"6. Após a instalação ser concluída, abra o aplicativo, faça login ou registre-se, e você pode começar a fazer apostas esportivas."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"How to Install App on iOS"}',
                'value_es' => '{"0":"Cómo instalar la aplicación en iOS"}',
                'value_fr' => '{"0":"Comment installer l\'application sur iOS"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"We have also taken care of iOS smartphone users, although the installation procedure for the mobile app is the same as for other apps since it is available in the App Store."}',
             'value_es' => '{"0":"También hemos pensado en los usuarios de smartphones iOS, aunque el procedimiento de instalación de la aplicación móvil es el mismo que para otras aplicaciones, ya que está disponible en la App Store."}',
             'value_fr' => '{"0":"Nous avons également pensé aux utilisateurs de smartphones iOS, bien que la procédure d’installation de l’application mobile soit la même que pour les autres applications, car elle est disponible sur l’App Store."}',
             'value_pt' => '{"0":"Também cuidamos dos usuários de smartphones iOS, embora o procedimento de instalação do aplicativo móvel seja o mesmo que para outros aplicativos, pois ele está disponível na App Store."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"1. Open Safari on your iPhone or iPad and go to the official MOSTBET website."}',
             'value_es' => '{"0":"1. Abre Safari en tu iPhone o iPad y ve al sitio oficial de MOSTBET."}',
             'value_fr' => '{"0":"1. Ouvrez Safari sur votre iPhone ou iPad et rendez-vous sur le site officiel de MOSTBET."}',
             'value_pt' => '{"0":"1. Abra o Safari no seu iPhone ou iPad e acesse o site oficial da MOSTBET."}',
             'order' => 20
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"2. In the menu, find the «Mobile App» section and select the iOS version."}',
             'value_es' => '{"0":"2. En el menú, busca la sección «Aplicación móvil» y selecciona la versión para iOS."}',
             'value_fr' => '{"0":"2. Dans le menu, trouvez la section « Application mobile » et sélectionnez la version iOS."}',
             'value_pt' => '{"0":"2. No menu, encontre a seção «Aplicativo móvel» e selecione a versão para iOS."}',
             'order' => 21
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"3. You will be redirected to the App Store or the app download page, depending on your region."}',
             'value_es' => '{"0":"3. Serás redirigido a la App Store o a la página de descarga de la aplicación, según tu región."}',
             'value_fr' => '{"0":"3. Vous serez redirigé vers l’App Store ou la page de téléchargement de l’application, selon votre région."}',
             'value_pt' => '{"0":"3. Você será redirecionado para a App Store ou para a página de download do aplicativo, dependendo da sua região."}',
             'order' => 22
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"4. Tap «Get» or «Download» in the App Store, and confirm the installation via Apple ID or Face ID/Touch ID."}',
             'value_es' => '{"0":"4. Pulsa «Obtener» o «Descargar» en la App Store y confirma la instalación con tu Apple ID o Face ID/Touch ID."}',
             'value_fr' => '{"0":"4. Appuyez sur « Obtenir » ou « Télécharger » dans l’App Store et confirmez l’installation via votre identifiant Apple ou Face ID/Touch ID."}',
             'value_pt' => '{"0":"4. Toque em «Obter» ou «Baixar» na App Store e confirme a instalação via Apple ID ou Face ID/Touch ID."}',
             'order' => 23
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"5. After installation, open the app, log into your account or register. Now you can use all the features of the MOSTBET mobile app."}',
             'value_es' => '{"0":"5. Después de la instalación, abre la aplicación, inicia sesión o regístrate. Ahora puedes usar todas las funciones de la aplicación móvil de MOSTBET."}',
             'value_fr' => '{"0":"5. Après l’installation, ouvrez l’application, connectez-vous ou inscrivez-vous. Vous pouvez désormais utiliser toutes les fonctionnalités de l’application mobile MOSTBET."}',
             'value_pt' => '{"0":"5. Após a instalação, abra o aplicativo, faça login na sua conta ou registre-se. Agora você pode usar todos os recursos do aplicativo móvel MOSTBET."}',
             'order' => 24
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel"}',
             'order' => 25
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET apps for Android and iOS fully support the main functionality of the bookmaker platform. You can place bets in pre-match and live modes, browse a wide range of sports including esports, and use various types of bets and combinations. Live streams of many sports events are also available."}',
             'value_es' => '{"0":"Las aplicaciones de MOSTBET para Android e iOS admiten completamente la funcionalidad principal de la plataforma de apuestas. Puedes hacer apuestas en modo pre-match y en vivo, navegar por una amplia variedad de deportes, incluido el esports, y usar diferentes tipos de apuestas y combinaciones. También están disponibles transmisiones en vivo de muchos eventos deportivos."}',
             'value_fr' => '{"0":"Les applications MOSTBET pour Android et iOS prennent entièrement en charge les principales fonctionnalités de la plateforme de paris. Vous pouvez placer des paris en mode pré-match et en direct, parcourir un large éventail de sports, y compris l’esport, et utiliser différents types de paris et combinaisons. Les retransmissions en direct de nombreux événements sportifs sont également disponibles."}',
             'value_pt' => '{"0":"Os aplicativos MOSTBET para Android e iOS suportam totalmente a funcionalidade principal da plataforma de apostas. Você pode fazer apostas nos modos pré-jogo e ao vivo, navegar por uma ampla variedade de esportes, incluindo e-sports, e usar vários tipos de apostas e combinações. Transmissões ao vivo de muitos eventos esportivos também estão disponíveis."}',
             'order' => 26
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, the app allows you to manage your finances, quickly deposit funds and withdraw winnings, view transaction and bet history, and activate bonuses and promo codes. The interface is optimized for quick event searches, viewing current odds, and statistics."}',
             'value_es' => '{"0":"Además, la aplicación te permite gestionar tus finanzas, depositar fondos rápidamente y retirar ganancias, ver el historial de transacciones y apuestas, y activar bonos y códigos promocionales. La interfaz está optimizada para una búsqueda rápida de eventos, ver las cuotas actuales y estadísticas."}',
             'value_fr' => '{"0":"De plus, l’application vous permet de gérer vos finances, de déposer rapidement des fonds et de retirer vos gains, de consulter l’historique des transactions et des paris, ainsi que d’activer des bonus et des codes promotionnels. L’interface est optimisée pour une recherche rapide des événements, la consultation des cotes actuelles et des statistiques."}',
             'value_pt' => '{"0":"Além disso, o aplicativo permite que você gerencie suas finanças, deposite fundos rapidamente e retire seus ganhos, visualize o histórico de transações e apostas e ative bônus e códigos promocionais. A interface é otimizada para uma busca rápida de eventos, visualização das odds atuais e estatísticas."}',
             'order' => 27
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The mobile apps also offer 24/7 customer support via chat or email."}',
             'value_es' => '{"0":"Las aplicaciones móviles también ofrecen soporte al cliente las 24 horas del día, los 7 días de la semana, a través de chat o correo electrónico."}',
             'value_fr' => '{"0":"Les applications mobiles offrent également un support client 24h/24 et 7j/7 via chat ou email."}',
             'value_pt' => '{"0":"Os aplicativos móveis também oferecem suporte ao cliente 24 horas por dia, 7 dias por semana, via chat ou e-mail."}',
             'order' => 28
            ]
        );
    }
}
