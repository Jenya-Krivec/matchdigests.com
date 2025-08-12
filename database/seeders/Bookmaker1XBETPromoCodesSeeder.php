<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Promotions and Bonuses"}',
             'value_es' => '{"0":"Promociones y Bonos"}',
             'value_fr' => '{"0":"Promotions et Bonus"}',
             'value_pt' => '{"0":"Promoções e Bônus"}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Betting can be a great way to increase your income, which is why 1XBET regularly delights its customers with new bonuses, gifts, and promotional offers. Right after registration, the player receives a welcome bonus of up to 120% on their first deposit — up to $400. Available offers include risk-free bets on major sports events, cashback, birthday bonuses, and special promotions for big tournaments."}',
             'value_es' => '{"0":"Las apuestas pueden ser una excelente manera de aumentar tus ingresos, por eso 1XBET suele sorprender a sus clientes con nuevos bonos, regalos y promociones. Justo después de registrarse, el jugador recibe un bono de bienvenida de hasta el 120% en su primer depósito — hasta $400. Entre las ofertas disponibles están las apuestas sin riesgo en eventos deportivos importantes, reembolsos, bonos de cumpleaños y promociones especiales para grandes torneos."}',
             'value_fr' => '{"0":"Les paris peuvent être un excellent moyen d’augmenter vos revenus. C’est pourquoi 1XBET gâte régulièrement ses clients avec de nouveaux bonus, cadeaux et offres promotionnelles. Dès l\'inscription, le joueur reçoit un bonus de bienvenue allant jusqu’à 120 % sur son premier dépôt — jusqu’à 400 $. Les offres disponibles incluent des paris sans risque sur les grands événements sportifs, du cashback, des bonus d’anniversaire et des promotions spéciales pour les grands tournois."}',
             'value_pt' => '{"0":"As apostas podem ser uma ótima maneira de aumentar sua renda, por isso a 1XBET regularmente presenteia seus clientes com novos bônus, brindes e promoções. Logo após o cadastro, o jogador recebe um bônus de boas-vindas de até 120% no primeiro depósito — até $400. As ofertas disponíveis incluem apostas sem risco em grandes eventos esportivos, cashback, bônus de aniversário e promoções especiais para grandes torneios."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Dreaming of a brand-new iPhone, a gaming laptop, or a prestigious car? At 1XBET, you have the chance to win these prizes daily and weekly! In addition, there are always promotions with instant wins — free spins, bonuses, and various gifts. You can find the full list of current offers from the leading bookmaker on the website or in the 1XBET mobile app. To join, simply visit the promotions section, choose your desired prize, and start playing!"}',
             'value_es' => '{"0":"¿Sueñas con un iPhone nuevo, una laptop para juegos o un auto prestigioso? En 1XBET tienes la oportunidad de ganar estos premios todos los días y todas las semanas. Además, siempre hay promociones con premios instantáneos: giros gratis, bonos y varios regalos. Puedes encontrar la lista completa de ofertas actuales del principal bookmaker en el sitio web o en la app móvil de 1XBET. Para participar, solo visita la sección de promociones, elige tu premio deseado y comienza a jugar."}',
             'value_fr' => '{"0":"Vous rêvez d’un tout nouvel iPhone, d’un ordinateur portable de jeu ou d’une voiture prestigieuse ? Chez 1XBET, vous avez la chance de gagner ces prix tous les jours et toutes les semaines ! De plus, il y a toujours des promotions avec des gains instantanés — des tours gratuits, des bonus et divers cadeaux. Vous pouvez trouver la liste complète des offres actuelles du bookmaker leader sur le site web ou dans l’application mobile 1XBET. Pour participer, il suffit de visiter la section promotions, de choisir votre prix souhaité et de commencer à jouer !"}',
             'value_pt' => '{"0":"Sonha com um iPhone novo, um laptop para jogos ou um carro de prestígio? Na 1XBET, você tem a chance de ganhar esses prêmios diariamente e semanalmente! Além disso, há sempre promoções com prêmios instantâneos — giros grátis, bônus e diversos brindes. Você pode encontrar a lista completa das ofertas atuais do principal bookmaker no site ou no aplicativo móvel da 1XBET. Para participar, basta visitar a seção de promoções, escolher o prêmio desejado e começar a jogar!"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"So, to receive a bonus on your first deposit, use our promo code during registration."}',
             'value_es' => '{"0":"Así que, para obtener un bono en tu primer depósito, utiliza nuestro código promocional durante el registro."}',
             'value_fr' => '{"0":"Alors, pour recevoir un bonus sur votre premier dépôt, utilisez notre code promo lors de l\'inscription."}',
             'value_pt' => '{"0":"Então, para receber um bônus no seu primeiro depósito, use nosso código promocional durante o cadastro."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Instant Registration"}',
             'value_es' => '{"0":"Registro Instantáneo"}',
             'value_fr' => '{"0":"Inscription Instantanée"}',
             'value_pt' => '{"0":"Registro Instantâneo"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Registering with 1XBET is easy and fast — almost like eating a hamburger. You can create an account in just one click. Choose the method that suits you best: phone number, email, social media, or messaging apps. No long forms or questionnaires — just convenience and speed. And don’t forget to enter our exclusive promo code during registration to receive a generous welcome bonus."}',
             'value_es' => '{"0":"Registrarse en 1XBET es fácil y rápido — casi como comerse una hamburguesa. Puedes crear una cuenta con un solo clic. Elige el método que prefieras: número de teléfono, correo electrónico, redes sociales o aplicaciones de mensajería. Sin formularios largos ni encuestas — solo comodidad y rapidez. Y no olvides ingresar nuestro código promocional exclusivo al registrarte para recibir un generoso bono de bienvenida."}',
             'value_fr' => '{"0":"S’inscrire sur 1XBET est simple et rapide — presque comme manger un hamburger. Vous pouvez créer un compte en un seul clic. Choisissez la méthode qui vous convient le mieux : numéro de téléphone, e-mail, réseaux sociaux ou applications de messagerie. Pas de longs formulaires ni de questionnaires — juste du confort et de la rapidité. Et n’oubliez pas d’entrer notre code promo exclusif lors de votre inscription pour recevoir un généreux bonus de bienvenue."}',
             'value_pt' => '{"0":"Registrar-se na 1XBET é fácil e rápido — quase como comer um hambúrguer. Você pode criar uma conta com apenas um clique. Escolha o método que preferir: número de telefone, e-mail, redes sociais ou aplicativos de mensagens. Nada de formulários longos ou questionários — apenas praticidade e rapidez. E não se esqueça de inserir nosso código promocional exclusivo durante o cadastro para receber um generoso bônus de boas-vindas."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To successfully register, please follow these steps:"}',
             'value_es' => '{"0":"Para registrarte con éxito, sigue estos pasos:"}',
             'value_fr' => '{"0":"Pour vous inscrire avec succès, veuillez suivre ces étapes :"}',
             'value_pt' => '{"0":"Para se registrar com sucesso, siga estes passos:"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list_v2',
             'value_en' => '{"0":"Open the website 1xbet.com. Please note that access to the site may be restricted in some countries, so we recommend using a VPN.",
                             "1":"In the top right corner of the homepage, find and click the «Registration» button.",
                             "2":"A pop-up window with the registration form will appear. Choose how you want to create your account: via social media, email, phone, or use the one-click registration.",
                             "3":"Fill out the form: select your currency, enter your mobile number, email, and create a password. If you have a promo code, enter it in the designated field. Check the «User Agreement» box to confirm that you have read and agree to the site rules.",
                             "4":"Click the «Register» button at the bottom of the form."}',
             'value_es' => '{"0":"Abre el sitio web 1xbet.com. Ten en cuenta que en algunos países el acceso puede estar restringido, por lo que recomendamos usar un VPN.",
                             "1":"En la esquina superior derecha de la página principal, encuentra y haz clic en el botón «Registro».",
                             "2":"Aparecerá una ventana emergente con el formulario de registro. Elige cómo quieres crear tu cuenta: a través de redes sociales, correo electrónico, teléfono o con el registro en un clic.",
                             "3":"Completa el formulario: selecciona tu moneda, ingresa tu número de móvil, correo electrónico y crea una contraseña. Si tienes un código promocional, introdúcelo en el campo correspondiente. Marca la casilla «Acuerdo de usuario» para confirmar que has leído y aceptas las reglas del sitio.",
                             "4":"Haz clic en el botón «Registrarse» en la parte inferior del formulario."}',
             'value_fr' => '{"0":"Ouvrez le site 1xbet.com. Notez que l\'accès au site peut être restreint dans certains pays, nous vous recommandons donc d\'utiliser un VPN.",
                             "1":"En haut à droite de la page d\'accueil, trouvez et cliquez sur le bouton « Inscription ».",
                             "2":"Une fenêtre pop-up avec le formulaire d\'inscription apparaîtra. Choisissez comment vous souhaitez créer votre compte : via les réseaux sociaux, email, téléphone ou par inscription en un clic.",
                             "3":"Remplissez le formulaire : choisissez votre devise, entrez votre numéro de portable, votre email et créez un mot de passe. Si vous avez un code promo, saisissez-le dans le champ prévu à cet effet. Cochez la case « Accord utilisateur » pour confirmer que vous avez lu et accepté les règles du site.",
                             "4":"Cliquez sur le bouton « S’inscrire » en bas du formulaire."}',
             'value_pt' => '{"0":"Abra o site 1xbet.com. Observe que o acesso ao site pode ser restrito em alguns países, por isso recomendamos o uso de VPN.",
                             "1":"No canto superior direito da página inicial, encontre e clique no botão «Registro».",
                             "2":"Uma janela pop-up com o formulário de registro aparecerá. Escolha como deseja criar sua conta: via redes sociais, e-mail, telefone ou registro com um clique.",
                             "3":"Preencha o formulário: selecione sua moeda, insira seu número de celular, e-mail e crie uma senha. Se tiver um código promocional, insira-o no campo designado. Marque a caixa «Contrato do Usuário» para confirmar que leu e concorda com as regras do site.",
                             "4":"Clique no botão «Registrar» na parte inferior do formulário."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Congratulations! Your account has been created, and you can start using the site."}',
             'value_es' => '{"0":"¡Felicidades! Tu cuenta ha sido creada y puedes comenzar a usar el sitio."}',
             'value_fr' => '{"0":"Félicitations ! Votre compte a été créé et vous pouvez commencer à utiliser le site."}',
             'value_pt' => '{"0":"Parabéns! Sua conta foi criada e você pode começar a usar o site."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"First Deposit Bonus up to $400"}',
             'value_es' => '{"0":"Bono por Primer Depósito de hasta $400"}',
             'value_fr' => '{"0":"Bonus de Premier Dépôt jusqu’à 400 $"}',
             'value_pt' => '{"0":"Bônus de Primeiro Depósito de até $400"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET offers new users a generous welcome bonus on their first deposit — up to 100% of the deposited amount, but no more than $400. This offer is available both for sports betting enthusiasts and for casino players, although the wagering requirements differ depending on the chosen type of play."}',
             'value_es' => '{"0":"1XBET ofrece a los nuevos usuarios un generoso bono de bienvenida en su primer depósito — hasta el 100 % del importe depositado, pero no más de 400 $. Esta oferta está disponible tanto para los aficionados a las apuestas deportivas como para los jugadores de casino, aunque los requisitos de apuesta varían según la modalidad elegida."}',
             'value_fr' => '{"0":"1XBET offre aux nouveaux utilisateurs un généreux bonus de bienvenue sur leur premier dépôt — jusqu’à 100 % du montant déposé, mais pas plus de 400 $. Cette offre est disponible aussi bien pour les amateurs de paris sportifs que pour les joueurs de casino, mais les conditions de mise diffèrent selon l’option choisie."}',
             'value_pt' => '{"0":"A 1XBET oferece aos novos usuários um generoso bônus de boas-vindas no primeiro depósito — até 100% do valor depositado, mas não mais que US$ 400. Esta oferta está disponível tanto para os fãs de apostas esportivas quanto para os jogadores de cassino, embora os requisitos de aposta variem conforme a modalidade escolhida."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For sports betting, the bonus amount is credited to a separate account and must be wagered five times the received amount. To count towards the wagering requirements, bets must be placed on events with odds of at least 1.40. Only accumulator bets with at least three selections are allowed. All requirements must be met within 30 days from the activation of the bonus."}',
             'value_es' => '{"0":"Para apuestas deportivas, el importe del bono se acredita en una cuenta separada y debe apostarse cinco veces el valor recibido. Para que las apuestas cuenten para el requisito de liberación, deben colocarse en eventos con cuotas mínimas de 1.40. Solo se permiten apuestas combinadas con al menos tres selecciones. Todos los requisitos deben cumplirse en un plazo de 30 días desde la activación del bono."}',
             'value_fr' => '{"0":"Pour les paris sportifs, le montant du bonus est crédité sur un compte séparé et doit être misé cinq fois le montant reçu. Pour être pris en compte dans les conditions de mise, les paris doivent être placés sur des événements avec une cote d’au moins 1,40. Seuls les paris combinés comportant au moins trois sélections sont autorisés. Toutes les conditions doivent être remplies dans les 30 jours suivant l’activation du bonus."}',
             'value_pt' => '{"0":"Para apostas esportivas, o valor do bônus é creditado em uma conta separada e deve ser apostado cinco vezes o valor recebido. Para contar no requisito de liberação, as apostas devem ser feitas em eventos com odds de pelo menos 1.40. Apenas apostas múltiplas com no mínimo três seleções são permitidas. Todos os requisitos devem ser cumpridos em até 30 dias após a ativação do bônus."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For the casino, the received bonus must be wagered 30 times (x30) on slots included in the promotion. Other games (table games, live casino, jackpots) do not count towards the wagering. All requirements must be fulfilled within 7 days from receiving the bonus, otherwise it will be cancelled along with any winnings obtained from it."}',
             'value_es' => '{"0":"Para el casino, el bono recibido debe apostarse 30 veces (x30) en las tragamonedas incluidas en la promoción. Otros juegos (juegos de mesa, casino en vivo, jackpots) no cuentan para el requisito. Todos los requisitos deben cumplirse en un plazo de 7 días desde la recepción del bono, de lo contrario será anulado junto con las ganancias obtenidas."}',
             'value_fr' => '{"0":"Pour le casino, le bonus reçu doit être misé 30 fois (x30) sur les machines à sous incluses dans la promotion. Les autres jeux (jeux de table, casino en direct, jackpots) ne sont pas pris en compte. Toutes les conditions doivent être remplies dans les 7 jours suivant la réception du bonus, faute de quoi celui-ci sera annulé ainsi que les gains obtenus."}',
             'value_pt' => '{"0":"Para o cassino, o bônus recebido deve ser apostado 30 vezes (x30) em slots incluídos na promoção. Outros jogos (jogos de mesa, cassino ao vivo, jackpots) não contam para o requisito. Todas as exigências devem ser cumpridas em até 7 dias após o recebimento do bônus, caso contrário ele será cancelado juntamente com quaisquer ganhos obtidos."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Free Bet"}',
             'value_es' => '{"0":"Apuesta Gratis"}',
             'value_fr' => '{"0":"Pari Gratuit"}',
             'value_pt' => '{"0":"Aposta Grátis"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In addition to the deposit bonus, 1XBET regularly runs a Free Bet promotion, where players receive free bets for a fixed amount. These bets can be used on various sporting events. The size of the free bets depends on the player’s activity level on the bookmaker’s website and may vary."}',
             'value_es' => '{"0":"Además del bono de depósito, 1XBET realiza regularmente una promoción Free Bet, en la que los jugadores reciben apuestas gratuitas por una cantidad fija. Estas apuestas se pueden usar en diversos eventos deportivos. El tamaño de las apuestas gratuitas depende del nivel de actividad del jugador en el sitio web del corredor de apuestas y puede variar."}',
             'value_fr' => '{"0":"En plus du bonus de dépôt, 1XBET organise régulièrement une promotion Free Bet, dans le cadre de laquelle les joueurs reçoivent des paris gratuits pour un montant fixe. Ces paris peuvent être utilisés sur divers événements sportifs. Le montant des paris gratuits dépend du niveau d’activité du joueur sur le site du bookmaker et peut varier."}',
             'value_pt' => '{"0":"Além do bônus de depósito, a 1XBET realiza regularmente uma promoção Free Bet, na qual os jogadores recebem apostas grátis por um valor fixo. Essas apostas podem ser usadas em vários eventos esportivos. O valor das apostas grátis depende do nível de atividade do jogador no site da casa de apostas e pode variar."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 17
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'h2',
                'value_en' => '{"0":"1XBET\'s Accumulator of the Day & Hyper Bonus"}',
                'value_es' => '{"0":"Apuesta Combinada del Día y Hyper Bonus de 1XBET"}',
                'value_fr' => '{"0":"Pari Combiné du Jour et Hyper Bonus de 1XBET"}',
                'value_pt' => '{"0":"Acumulador do Dia e Hyper Bonus da 1XBET"}',
                'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 18
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"Accumulator fans have even more reasons to register at 1XBET! You’ll get access to nearly 30 individual «Accumulator of the Day» bets, each accompanied by an additional 10% bonus from 1XBET."}',
                'value_es' => '{"0":"¡Los aficionados a las apuestas combinadas tienen aún más razones para registrarse en 1XBET! Tendrás acceso a casi 30 apuestas individuales de «Combinada del Día», cada una acompañada de un bono adicional del 10% por parte de 1XBET."}',
                'value_fr' => '{"0":"Les amateurs de paris combinés ont encore plus de raisons de s’inscrire sur 1XBET ! Vous aurez accès à près de 30 paris individuels «Pari Combiné du Jour», chacun accompagné d’un bonus supplémentaire de 10 % offert par 1XBET."}',
                'value_pt' => '{"0":"Os fãs de apostas acumuladas têm ainda mais razões para se registrar na 1XBET! Você terá acesso a quase 30 apostas individuais «Acumulador do Dia», cada uma acompanhada de um bônus adicional de 10% oferecido pela 1XBET."}',
                'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 19
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
                'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 20
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"Additionally, you can participate in the Hyper Bonus program, which lets you earn even more bonuses on your accumulator bets."}',
                'value_es' => '{"0":"Además, puedes participar en el programa Hyper Bonus, que te permite obtener aún más bonificaciones en tus apuestas combinadas."}',
                'value_fr' => '{"0":"De plus, vous pouvez participer au programme Hyper Bonus, qui vous permet de gagner encore plus de bonus sur vos paris combinés."}',
                'value_pt' => '{"0":"Além disso, pode participar do programa Hyper Bonus, que permite ganhar ainda mais bônus nas suas apostas acumuladas."}',
                'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 21
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
                'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 22
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"It’s very simple: place an accumulator bet with at least four events, each with odds of at least 1.20, and receive a bonus percentage depending on the number of events in your bet. To take part in this great offer, first register an account and make sure your details — full name, activated mobile number, email address, and country of residence — are correctly filled in. Then, activate participation in bonus offers in the «My Account» section. Finally, go to the promotion page, click «Take part», and you’re ready to go!"}',
                'value_es' => '{"0":"Es muy sencillo: realiza una apuesta combinada con al menos cuatro eventos, cada uno con una cuota mínima de 1.20, y recibe un porcentaje de bonificación según la cantidad de eventos en tu apuesta. Para participar en esta excelente oferta, primero registra una cuenta y asegúrate de que tus datos — nombre completo, número de móvil activado, correo electrónico y país de residencia — estén correctamente llenados. Luego, activa la participación en las ofertas de bonificación en la sección «Mi Cuenta». Por último, ve a la página de la promoción, haz clic en «Participar» y ¡listo!"}',
                'value_fr' => '{"0":"C’est très simple : placez un pari combiné avec au moins quatre événements, chacun ayant une cote d’au moins 1.20, et recevez un pourcentage de bonus selon le nombre d’événements dans votre pari. Pour profiter de cette offre avantageuse, inscrivez-vous d’abord, puis assurez-vous que vos informations — nom complet, numéro de téléphone mobile activé, adresse e-mail et pays de résidence — sont correctement renseignées. Ensuite, activez la participation aux offres de bonus dans la section «Mon Compte». Enfin, rendez-vous sur la page de l’offre, cliquez sur «Participer» et vous êtes prêt !"}',
                'value_pt' => '{"0":"É muito simples: faça uma aposta acumulada com pelo menos quatro eventos, cada um com odds de pelo menos 1.20, e receba uma porcentagem de bônus de acordo com o número de eventos na sua aposta. Para participar desta ótima oferta, primeiro registre uma conta e certifique-se de que seus dados — nome completo, número de celular ativado, endereço de e-mail e país de residência — estejam preenchidos corretamente. Depois, ative a participação nas ofertas de bônus na seção «Minha Conta». Por fim, acesse a página da promoção, clique em «Participar» e pronto!"}',
                'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 23
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'h2',
                'value_en' => '{"0":"1XBET’s Goalless Football Refund"}',
                'value_es' => '{"0":"Reembolso de fútbol sin goles de 1XBET"}',
                'value_fr' => '{"0":"Remboursement football sans but de 1XBET"}',
                'value_pt' => '{"0":"Futebol sem Golos da 1XBET"}',
                'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 24
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"No one likes a 0:0 draw in football, especially if you have bet on one of the teams to win. But with 1XBET, you don’t have to worry about one of the dullest results in sports."}',
                'value_es' => '{"0":"A nadie le gusta un empate 0:0 en el fútbol, especialmente si ha apostado por la victoria de uno de los equipos. Pero con 1XBET no tendrás que preocuparte por uno de los resultados más aburridos en el deporte."}',
                'value_fr' => '{"0":"Personne n\'aime un match nul 0:0 au football, surtout si vous avez parié sur la victoire de l\'une des équipes. Mais avec 1XBET, vous n\'aurez pas à vous inquiéter de l\'un des résultats les plus ennuyeux du sport."}',
                'value_pt' => '{"0":"Ninguém gosta de um empate 0:0 no futebol, especialmente se você apostou na vitória de uma das equipes. Mas com 1XBET, você não precisa se preocupar com um dos resultados mais chatos do esporte."}',
                'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 25
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
                'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 26
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"How it works:"}',
                'value_es' => '{"0":"Cómo funciona:"}',
                'value_fr' => '{"0":"Comment ça marche :"}',
                'value_pt' => '{"0":"Como funciona:"}',
                'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 27
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"Subscribe to promotions in the «My Account» section and go to the «Goalless Draw» promotion page, which can be found on the main promotions page of 1XBET. There, you will see a list of matches where this promotion is active. Your bet must be placed on the win of one of the teams (W1 or W2) within 90 minutes. Then just enjoy the game! If the match ends 0:0 after the first half, and your bet loses, you will receive your stake amount back as a promo code credited to your account."}',
                'value_es' => '{"0":"Suscríbete a las promociones en la sección «Mi Cuenta» y visita la página de la promoción «Empate sin goles», que puedes encontrar en la página principal de promociones de 1XBET. Allí verás una lista de partidos donde esta promoción está activa. Tu apuesta debe hacerse a la victoria de uno de los equipos (W1 o W2) dentro de los 90 minutos. Luego, solo disfruta del partido. Si el partido termina 0:0 después del primer tiempo y tu apuesta pierde, recibirás el importe de tu apuesta como un código promocional que se acreditará en tu cuenta."}',
                'value_fr' => '{"0":"Abonnez-vous aux promotions dans la section « Mon compte » et rendez-vous sur la page de la promotion « Match nul sans but », que vous trouverez sur la page principale des promotions de 1XBET. Vous y verrez la liste des matchs où cette promotion est active. Votre pari doit être placé sur la victoire de l\'une des équipes (W1 ou W2) pendant les 90 minutes. Ensuite, profitez simplement du match ! Si le match se termine sur un score de 0:0 après la première mi-temps et que votre pari est perdant, vous recevrez le montant de votre mise sous forme de code promo crédité sur votre compte."}',
                'value_pt' => '{"0":"Inscreva-se nas promoções na seção «Minha Conta» e acesse a página da promoção «Empate sem Gols», que pode ser encontrada na página principal de promoções do 1XBET. Lá, você verá uma lista de partidas onde esta promoção está ativa. Sua aposta deve ser feita na vitória de uma das equipes (W1 ou W2) dentro de 90 minutos. Depois, basta aproveitar o jogo! Se a partida terminar 0:0 após o primeiro tempo e sua aposta perder, você receberá o valor da sua aposta como um código promocional creditado na sua conta."}',
                'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 28
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'h2',
                'value_en' => '{"0":"1XBET’s No Risk Bet"}',
                'value_es' => '{"0":"Apuesta sin Riesgo de 1XBET"}',
                'value_fr' => '{"0":"Pari sans Risque de 1XBET"}',
                'value_pt' => '{"0":"Aposta Sem Risco da 1XBET"}',
                'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 29
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"Try your luck with 1XBET’s «No Risk Bet» promotion! This special offer allows you to place an exact score bet on selected football matches — either pre-match or in-play — and get a full refund if your prediction loses."}',
                'value_es' => '{"0":"¡Aprovecha la promoción «Apuesta sin Riesgo» de 1XBET! Esta oferta especial te permite apostar al marcador exacto en partidos de fútbol seleccionados — antes del inicio o en vivo — y recuperar el 100% del importe si pierdes."}',
                'value_fr' => '{"0":"Tentez votre chance avec la promotion «Pari Sans Risque» de 1XBET ! Cette offre spéciale vous permet de parier sur le score exact de certains matchs de football — avant le coup d’envoi ou en direct — avec un remboursement total en cas de perte."}',
                'value_pt' => '{"0":"Aproveite a promoção «Aposta Sem Risco» da 1XBET! Esta oferta especial permite que você aposte no placar exato de partidas de futebol selecionadas — antes do início ou ao vivo — com reembolso total se a aposta não for vencedora."}',
                'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 30
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
                'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 31
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"Why is this promo so attractive? Exact score bets come with high odds, meaning big potential winnings. For instance, predicting common scores like 1-0 or 1-1 usually gives odds around 5.00–7.00. If you go for a bolder prediction like 4-2, the payout could reach 20.00!"}',
                'value_es' => '{"0":"¿Por qué es tan atractiva? Apostar al marcador exacto ofrece cuotas altas y grandes posibilidades de ganancia. Por ejemplo, marcar 1-0 o 1-1 suele ofrecer cuotas de 5.00 a 7.00. Si te atreves con un marcador más arriesgado, como 4-2, ¡la cuota puede llegar hasta 20.00!"}',
                'value_fr' => '{"0":"Pourquoi est-ce une offre intéressante ? Les paris sur le score exact offrent généralement des cotes élevées, ce qui signifie des gains potentiellement importants. Par exemple, parier sur 1-0 ou 1-1 donne souvent des cotes autour de 5.00–7.00. Un score plus audacieux comme 4-2 peut atteindre une cote de 20.00 !"}',
                'value_pt' => '{"0":"Por que essa promoção é tão vantajosa? Apostar no placar exato geralmente oferece odds altas, com potencial de lucro elevado. Por exemplo, palpites comuns como 1-0 ou 1-1 costumam ter odds entre 5.00 e 7.00. Se você for mais ousado e apostar em 4-2, o retorno pode chegar a 20.00!"}',
                'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 32
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"To participate, first register your 1XBET account. Make sure your profile is complete — including your full name, an active phone number, email, and country of residence — and enable participation in bonus offers (under «My Account»)."}',
                'value_es' => '{"0":"Para participar, primero regístrate en 1XBET. Asegúrate de completar tus datos personales (nombre completo, número de teléfono activo, correo electrónico y país de residencia) y activar la opción para participar en promociones (en la sección «Mi cuenta»)."}',
                'value_fr' => '{"0":"Pour en profiter, commencez par créer un compte 1XBET. Vérifiez que toutes vos informations personnelles sont complètes (nom, numéro de téléphone actif, adresse email, pays de résidence), et activez les promotions depuis la rubrique «Mon Compte»."}',
                'value_pt' => '{"0":"Para participar, crie uma conta na 1XBET. Certifique-se de preencher todos os dados pessoais (nome completo, número de telefone ativo, e-mail e país de residência) e habilite a opção de participar de promoções na seção «Minha Conta»."}',
                'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 33
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'p',
                'value_en' => '{"0":"Then go to the «No Risk Bet» promo page to see a list of eligible matches. Choose your match, place your exact score bet for the full 90 minutes — and enjoy the game. If your bet doesn’t win, you’ll receive a refund of up to $10 as a promo code, redeemable in your account."}',
                'value_es' => '{"0":"Después, accede a la página de la promoción «Apuesta sin Riesgo» y consulta la lista de partidos incluidos. Elige un partido, apuesta al marcador exacto para los 90 minutos y disfruta del juego. Si tu apuesta pierde, recibirás un reembolso de hasta $10 en forma de código promocional, que podrás canjear en tu cuenta."}',
                'value_fr' => '{"0":"Rendez-vous ensuite sur la page de la promotion «Pari Sans Risque» pour voir les matchs éligibles. Choisissez un match, pariez sur le score exact pour les 90 minutes — et profitez du match. En cas de perte, vous recevrez un remboursement jusqu’à 10 $ sous forme de code promo à activer dans votre compte."}',
                'value_pt' => '{"0":"Em seguida, acesse a página da promoção «Aposta Sem Risco» para ver os jogos disponíveis. Escolha um jogo, faça sua aposta no placar exato para os 90 minutos — e divirta-se. Se sua aposta for perdida, você receberá até $10 de volta na forma de um código promocional, que poderá ser ativado na sua conta."}',
                'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Can I receive multiple bonuses at the same time?"}',
             'value_es' => '{"0":"¿Puedo recibir varios bonos al mismo tiempo?"}',
             'value_fr' => '{"0":"Puis-je recevoir plusieurs bonus en même temps ?"}',
             'value_pt' => '{"0":"Posso receber vários bônus ao mesmo tempo?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET usually allows only one active bonus in a specific category (for example, for casino or sports betting). To receive a new bonus, you need to either meet the wagering requirements of the previous one or forfeit it."}',
             'value_es' => '{"0":"1XBET normalmente permite tener solo un bono activo en una categoría específica (por ejemplo, para casino o apuestas deportivas). Para recibir un nuevo bono, debes cumplir los requisitos de apuesta del anterior o renunciar a él."}',
             'value_fr' => '{"0":"1XBET autorise généralement un seul bonus actif dans une catégorie spécifique (par exemple, pour le casino ou les paris sportifs). Pour recevoir un nouveau bonus, vous devez soit remplir les conditions de mise du précédent, soit y renoncer."}',
             'value_pt' => '{"0":"A 1XBET geralmente permite apenas um bônus ativo em uma categoria específica (por exemplo, para cassino ou apostas esportivas). Para receber um novo bônus, é necessário cumprir os requisitos de aposta do anterior ou renunciar a ele."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"What are the wagering requirements for sports bonuses?"}',
             'value_es' => '{"0":"¿Cuáles son los requisitos de apuesta para los bonos de deportes?"}',
             'value_fr' => '{"0":"Quelles sont les conditions de mise pour les bonus sportifs ?"}',
             'value_pt' => '{"0":"Quais são os requisitos de aposta para bônus esportivos?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Sports bonuses most often require wagering a multiple of the bonus amount (for example, x5) on bets with minimum odds of 1.40."}',
             'value_es' => '{"0":"Los bonos de deportes generalmente requieren apostar un múltiplo del importe del bono (por ejemplo, x5) en apuestas con una cuota mínima de 1.40."}',
             'value_fr' => '{"0":"Les bonus sportifs exigent le plus souvent de miser un multiple du montant du bonus (par exemple, x5) sur des paris avec une cote minimale de 1,40."}',
             'value_pt' => '{"0":"Os bônus esportivos geralmente exigem apostar um múltiplo do valor do bônus (por exemplo, x5) em apostas com odds mínimas de 1.40."}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"What are the wagering requirements for casino bonuses?"}',
             'value_es' => '{"0":"¿Cuáles son los requisitos de apuesta para los bonos de casino?"}',
             'value_fr' => '{"0":"Quelles sont les conditions de mise pour les bonus de casino ?"}',
             'value_pt' => '{"0":"Quais são os requisitos de aposta para bônus de cassino?"}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 40
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonuses usually have a higher wagering requirement, such as x30 or x35, and can only be wagered on certain slots. Table games, live casino, and jackpots are usually not counted. The time limit to meet the wagering requirements is up to 7 days."}',
             'value_es' => '{"0":"Los bonos de casino suelen tener un requisito de apuesta más alto, como x30 o x35, y solo pueden apostarse en determinadas tragamonedas. Los juegos de mesa, el casino en vivo y los jackpots normalmente no cuentan. El plazo para cumplir con los requisitos de apuesta es de hasta 7 días."}',
             'value_fr' => '{"0":"Les bonus de casino ont généralement un exigence de mise plus élevée, comme x30 ou x35, et ne peuvent être joués que sur certaines machines à sous. Les jeux de table, le casino en direct et les jackpots ne sont généralement pas pris en compte. Le délai pour remplir les conditions de mise est de 7 jours maximum."}',
             'value_pt' => '{"0":"Os bônus de cassino geralmente têm um requisito de aposta mais alto, como x30 ou x35, e só podem ser apostados em determinados caça-níqueis. Jogos de mesa, cassino ao vivo e jackpots normalmente não contam. O prazo para cumprir os requisitos de aposta é de até 7 dias."}',
             'order' => 40
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 41
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses and promo codes available for mobile users?"}',
             'value_es' => '{"0":"¿Están disponibles los bonos y códigos promocionales para usuarios móviles?"}',
             'value_fr' => '{"0":"Les bonus et codes promo sont-ils disponibles pour les utilisateurs mobiles ?"}',
             'value_pt' => '{"0":"Os bônus e códigos promocionais estão disponíveis para usuários móveis?"}',
             'order' => 41
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 42
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all current promotions and promo codes are available both on the desktop version of the site and in the 1XBET mobile apps for Android and iOS. Activation is done in the same way as on a computer."}',
             'value_es' => '{"0":"Sí, todas las promociones y códigos promocionales actuales están disponibles tanto en la versión de escritorio del sitio como en las aplicaciones móviles de 1XBET para Android e iOS. La activación se realiza de la misma manera que en un ordenador."}',
             'value_fr' => '{"0":"Oui, toutes les promotions et tous les codes promo actuels sont disponibles aussi bien sur la version de bureau du site que dans les applications mobiles 1XBET pour Android et iOS. L’activation se fait de la même manière que sur un ordinateur."}',
             'value_pt' => '{"0":"Sim, todas as promoções e códigos promocionais atuais estão disponíveis tanto na versão para desktop do site quanto nos aplicativos móveis da 1XBET para Android e iOS. A ativação é feita da mesma forma que no computador."}',
             'order' => 42
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 43
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Do I need to verify my account to receive a bonus?"}',
             'value_es' => '{"0":"¿Es necesario verificar la cuenta para recibir un bono?"}',
             'value_fr' => '{"0":"Faut-il vérifier son compte pour recevoir un bonus ?"}',
             'value_pt' => '{"0":"É necessário verificar a conta para receber um bônus?"}',
             'order' => 43
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 44
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, you can receive a bonus immediately after registration and making a deposit. However, to withdraw winnings obtained from bonus funds, 1XBET may require you to complete an identity verification process."}',
             'value_es' => '{"0":"En la mayoría de los casos, puedes recibir un bono inmediatamente después de registrarte y realizar un depósito. Sin embargo, para retirar las ganancias obtenidas con fondos de bono, 1XBET puede solicitar que completes un proceso de verificación de identidad."}',
             'value_fr' => '{"0":"Dans la plupart des cas, vous pouvez recevoir un bonus immédiatement après votre inscription et votre dépôt. Cependant, pour retirer les gains obtenus avec des fonds bonus, 1XBET peut demander de passer par une procédure de vérification d’identité."}',
             'value_pt' => '{"0":"Na maioria dos casos, você pode receber um bônus imediatamente após se registrar e fazer um depósito. No entanto, para sacar os ganhos obtidos com fundos de bônus, a 1XBET pode exigir que você conclua um processo de verificação de identidade."}',
             'order' => 44
            ]
        );
    }
}
