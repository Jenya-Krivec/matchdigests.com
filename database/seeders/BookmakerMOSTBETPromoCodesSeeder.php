<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET is an international bookmaker that has already gained popularity among players thanks not only to its wide betting line and user-friendly interface, but also to its rich selection of bonuses and promotions. The platform operates actively in various markets, including Europe, Asia, and the CIS countries, offering bonus programs both for new users and for those who have been playing for a long time."}',
             'value_es' => '{"0":"MOSTBET es una casa de apuestas internacional que ya ha ganado popularidad entre los jugadores gracias no solo a su amplia línea de apuestas y su interfaz fácil de usar, sino también a su variada selección de bonos y promociones. La plataforma opera activamente en varios mercados, incluyendo Europa, Asia y los países de la CEI, ofreciendo programas de bonificación tanto para nuevos usuarios como para aquellos que ya llevan tiempo jugando."}',
             'value_fr' => '{"0":"MOSTBET est un bookmaker international qui a déjà gagné en popularité auprès des joueurs grâce non seulement à sa large gamme de paris et son interface conviviale, mais aussi à son vaste choix de bonus et de promotions. La plateforme opère activement sur différents marchés, notamment en Europe, en Asie et dans les pays de la CEI, en proposant des programmes de bonus aussi bien pour les nouveaux utilisateurs que pour ceux qui jouent depuis longtemps."}',
             'value_pt' => '{"0":"A MOSTBET é uma casa de apostas internacional que já conquistou popularidade entre os jogadores graças não apenas à sua ampla linha de apostas e interface amigável, mas também à sua grande variedade de bônus e promoções. A plataforma atua ativamente em diversos mercados, incluindo Europa, Ásia e países da CEI, oferecendo programas de bônus tanto para novos usuários quanto para aqueles que já jogam há algum tempo."}',
             'order' => 1,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"One of MOSTBET’s features is that its bonuses are divided into several categories: welcome offers, ongoing promotions for active customers, special deals for certain types of bets, as well as personalized offers sent to your email or personal account."}',
             'value_es' => '{"0":"Una de las características de MOSTBET es que sus bonos están divididos en varias categorías: ofertas de bienvenida, promociones permanentes para clientes activos, ofertas especiales para ciertos tipos de apuestas, así como ofertas personalizadas que se envían a tu correo electrónico o cuenta personal."}',
             'value_fr' => '{"0":"L’une des particularités de MOSTBET est que ses bonus sont répartis en plusieurs catégories : offres de bienvenue, promotions permanentes pour les clients actifs, offres spéciales pour certains types de paris, ainsi que des offres personnalisées envoyées par email ou sur le compte personnel."}',
             'value_pt' => '{"0":"Uma das particularidades da MOSTBET é que seus bônus são divididos em várias categorias: ofertas de boas-vindas, promoções permanentes para clientes ativos, promoções especiais para certos tipos de apostas, bem como ofertas personalizadas enviadas por e-mail ou para a conta pessoal."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will talk about some of these bonus programs, as well as how to use our promo code :promocode to get a 150% welcome bonus on your first deposit."}',
             'value_es' => '{"0":"En esta reseña, hablaremos de algunos de estos programas de bonificación y de cómo obtener, con nuestro código promocional :promocode, un bono de bienvenida del 150% en tu primer depósito."}',
             'value_fr' => '{"0":"Dans cet article, nous vous présenterons certains de ces programmes de bonus, ainsi que la manière d’obtenir, grâce à notre code promo :promocode, un bonus de bienvenue de 150 % sur votre premier dépôt."}',
             'value_pt' => '{"0":"Nesta análise, vamos falar sobre alguns desses programas de bônus e como, usando o nosso código promocional :promocode, você pode receber um bônus de boas-vindas de 150% no seu primeiro depósito."}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the MOSTBET promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de MOSTBET?"}',
                'value_fr' => '{"0":"Comment profiter du code promo MOSTBET ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da MOSTBET?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The process of activating the promo code :promocode on MOSTBET is as straightforward as it gets, but there are still a few important details to keep in mind. The first step is to choose your registration method: by phone, email, via social networks, or in one click. During the registration form stage, you’ll find a special “Promo Code” field — this is where you need to enter the code that grants you an additional bonus. At this stage, you also need to choose where you want to use your bonus funds — for sports betting or in the casino."}',
             'value_es' => '{"0":"El proceso para activar el código promocional :promocode en MOSTBET es muy sencillo, aunque conviene tener en cuenta algunos detalles importantes. El primer paso es elegir el método de registro: por teléfono, correo electrónico, a través de redes sociales o con un solo clic. Durante el formulario de registro, encontrarás un campo especial llamado “Código promocional”; aquí es donde debes introducir el código que te otorgará un bono adicional. En esta etapa también debes seleccionar si deseas utilizar los fondos del bono para apuestas deportivas o en el casino."}',
             'value_fr' => '{"0":"Le processus d’activation du code promo :promocode sur MOSTBET est très simple, mais il est important de connaître quelques détails. La première étape consiste à choisir votre méthode d’inscription : par téléphone, par e-mail, via les réseaux sociaux ou en un clic. Lors de la saisie du formulaire d’inscription, vous trouverez un champ spécial « Code promo » — c’est ici que vous devez entrer le code qui vous donnera un bonus supplémentaire. À ce stade, vous devez également choisir si vous souhaitez utiliser les fonds bonus pour les paris sportifs ou au casino."}',
             'value_pt' => '{"0":"O processo de ativação do código promocional :promocode na MOSTBET é muito simples, mas é importante conhecer alguns detalhes. O primeiro passo é escolher o método de registro: por telefone, e-mail, através das redes sociais ou com um clique. Durante o preenchimento do formulário, há um campo especial chamado “Código Promocional” — é aqui que você deve inserir o código que concede um bônus adicional. Nesta etapa, você também deve escolher se vai usar os fundos do bônus para apostas esportivas ou no cassino."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"After entering the promo code, you must make your first deposit. The minimum amount is usually from 10 USD or the equivalent in your currency. The bonus funds are automatically credited to a special account, from which they can be used for sports bets or casino games."}',
             'value_es' => '{"0":"Después de introducir el código promocional, es necesario realizar el primer depósito. El monto mínimo suele ser de 10 USD o el equivalente en tu moneda. Los fondos del bono se acreditan automáticamente en una cuenta especial, desde la cual puedes utilizarlos para apuestas deportivas o juegos de casino."}',
             'value_fr' => '{"0":"Après avoir entré le code promo, vous devez effectuer votre premier dépôt. Le montant minimum est généralement de 10 USD ou l’équivalent dans votre devise. Les fonds bonus sont automatiquement crédités sur un compte spécial, à partir duquel ils peuvent être utilisés pour les paris sportifs ou les jeux de casino."}',
             'value_pt' => '{"0":"Após inserir o código promocional, é necessário fazer o primeiro depósito. O valor mínimo normalmente é de 10 USD ou o equivalente na sua moeda. Os fundos do bônus são automaticamente creditados em uma conta especial, de onde podem ser usados para apostas esportivas ou jogos de cassino."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"At the time of preparing this review, the company does not offer any official no-deposit bonuses. However, this does not mean it is impossible to receive a bonus without directly funding your account. MOSTBET occasionally runs special promotions tied to major sporting events, during which players can receive free sports bets or free spins in the casino. Such offers are usually available only to registered and active players and have a limited validity period."}',
             'value_es' => '{"0":"En el momento de preparar esta reseña, la empresa no ofrece bonos sin depósito oficiales. Sin embargo, esto no significa que sea imposible obtener un bono sin recargar la cuenta. MOSTBET a veces organiza promociones especiales vinculadas a grandes eventos deportivos, durante las cuales los jugadores pueden recibir apuestas deportivas gratuitas o giros gratis en el casino. Estas ofertas suelen estar disponibles solo para jugadores registrados y activos, y tienen un período de validez limitado."}',
             'value_fr' => '{"0":"Au moment de la rédaction de cet avis, la société ne propose pas de bonus sans dépôt officiels. Cependant, cela ne signifie pas qu’il est impossible d’obtenir un bonus sans créditer directement votre compte. MOSTBET organise parfois des promotions spéciales liées à de grands événements sportifs, au cours desquelles les joueurs peuvent recevoir des paris sportifs gratuits ou des tours gratuits au casino. Ces offres sont généralement réservées aux joueurs inscrits et actifs, et ont une durée de validité limitée."}',
             'value_pt' => '{"0":"No momento da elaboração desta análise, a empresa não oferece bônus sem depósito oficiais. No entanto, isso não significa que seja impossível receber um bônus sem adicionar fundos à conta. A MOSTBET ocasionalmente realiza promoções especiais relacionadas a grandes eventos esportivos, durante as quais os jogadores podem receber apostas esportivas gratuitas ou rodadas grátis no cassino. Essas ofertas geralmente estão disponíveis apenas para jogadores registrados e ativos e possuem um período de validade limitado."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at MOSTBET?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en MOSTBET?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur MOSTBET ?"}',
                'value_pt' => '{"0":"E se você já for registrado na MOSTBET?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Unlike many bookmakers who focus solely on attracting new players, MOSTBET actively supports its already registered customers through its bonus policy. They have access to:"}',
             'value_es' => '{"0":"A diferencia de muchas casas de apuestas que se centran únicamente en atraer nuevos jugadores, MOSTBET apoya activamente a sus clientes ya registrados con su política de bonificaciones. Ellos tienen acceso a:"}',
             'value_fr' => '{"0":"Contrairement à de nombreux bookmakers qui se concentrent uniquement sur l’acquisition de nouveaux joueurs, MOSTBET soutient activement ses clients déjà inscrits grâce à sa politique de bonus. Ils ont accès à :"}',
             'value_pt' => '{"0":"Ao contrário de muitas casas de apostas que se concentram apenas em atrair novos jogadores, a MOSTBET apoia ativamente os seus clientes já registados através da sua política de bónus. Eles têm acesso a:"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'list_v2',
             'value_en' => '{"0":"Weekly Cashback — 3% return on lost bets.",
                             "1":"Accumulator of the Day — ready-made selections of accumulators with enhanced odds and +10% to winnings if the accumulator wins.",
                             "2":"Losing Streak Bonus — for those going through an unlucky streak. If you lose 20 bets in a row, you can receive a substantial bonus of up to €500.",
                             "3":"VIP Cashback — a multi-level loyalty program where you can move up levels and increase your cashback percentage to 11%.",
                             "4":"Holiday & Sports Event Promotions — extra bonuses and free bets for Champions League finals, World Cups, or major boxing and MMA fights."}',
             'value_es' => '{"0":"Reembolso semanal — devolución del 3% de las apuestas perdidas.",
                             "1":"Acumulador del día — selecciones preparadas de apuestas combinadas con cuotas mejoradas y +10% a las ganancias si el acumulador gana.",
                             "2":"Bono por racha de pérdidas — para quienes atraviesan una mala racha. Si pierdes 20 apuestas consecutivas, puedes recibir un bono considerable de hasta 500 €.",
                             "3":"Reembolso VIP — programa de fidelidad multinivel donde puedes subir de nivel y aumentar el porcentaje de reembolso hasta el 11%.",
                             "4":"Promociones por festividades y eventos deportivos — bonos adicionales y apuestas gratis para finales de la Liga de Campeones, Copas del Mundo o grandes combates de boxeo y MMA."}',
             'value_fr' => '{"0":"Cashback hebdomadaire — remboursement de 3 % sur les paris perdus.",
                             "1":"Accumulateur du jour — sélections prêtes d’accumulateurs avec cotes améliorées et +10 % sur les gains si l’accumulateur est gagnant.",
                             "2":"Bonus série de pertes — pour ceux qui connaissent une mauvaise passe. Si vous perdez 20 paris consécutifs, vous pouvez recevoir un bonus conséquent allant jusqu’à 500 €.",
                             "3":"Cashback VIP — programme de fidélité à plusieurs niveaux qui permet de progresser et d’augmenter le pourcentage de cashback jusqu’à 11 %.",
                             "4":"Promotions pour fêtes et événements sportifs — bonus supplémentaires et paris gratuits pour les finales de Ligue des champions, Coupes du monde ou grands combats de boxe et MMA."}',
             'value_pt' => '{"0":"Cashback semanal — devolução de 3% sobre as apostas perdidas.",
                             "1":"Acumulador do dia — seleções prontas de apostas múltiplas com odds melhoradas e +10% nos ganhos se o acumulador vencer.",
                             "2":"Bónus por série de derrotas — para quem está numa maré de azar. Se perder 20 apostas seguidas, pode receber um bónus significativo de até 500 €.",
                             "3":"Cashback VIP — programa de fidelidade multinível onde é possível subir de nível e aumentar a percentagem de cashback até 11%.",
                             "4":"Promoções para feriados e eventos desportivos — bónus adicionais e apostas grátis para finais da Liga dos Campeões, Copas do Mundo ou grandes lutas de boxe e MMA."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"FIRST DEPOSIT BONUS"}',
                'value_es' => '{"0":"Bono por Primer Depósito"}',
                'value_fr' => '{"0":"Bonus de Premier Dépôt"}',
                'value_pt' => '{"0":"Bônus de Primeiro Depósito"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"This is a classic welcome bonus for new players that allows you to start playing with a bigger bankroll. Upon registration and making your first deposit, you receive an additional 100% credited to your bonus account."}',
             'value_es' => '{"0":"Este es un bono de bienvenida clásico para nuevos jugadores que te permite comenzar a jugar con un bankroll más grande. Al registrarte y realizar tu primer depósito, recibes un 100 % adicional acreditado en tu cuenta de bono."}',
             'value_fr' => '{"0":"Il s’agit d’un bonus de bienvenue classique pour les nouveaux joueurs, qui vous permet de commencer à jouer avec une bankroll plus importante. Lors de votre inscription et de votre premier dépôt, vous recevez 100 % supplémentaires crédités sur votre compte bonus."}',
             'value_pt' => '{"0":"Este é um bónus de boas-vindas clássico para novos jogadores, que permite começar a jogar com um bankroll maior. Ao registar-se e efetuar o primeiro depósito, recebe 100 % extra creditados na sua conta de bónus."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For example, if you deposit 50 USD, you will receive another 50 USD as a bonus. The maximum bonus amount for sports betting is usually $130. For the casino, there is an extended program where you can get up to €1500 + 150 free spins, credited in parts over the first four deposits."}',
             'value_es' => '{"0":"Por ejemplo, si depositas 50 USD, recibirás otros 50 USD como bono. El monto máximo del bono para apuestas deportivas suele ser de 130 USD. Para el casino, existe un programa ampliado donde puedes obtener hasta 1500 € + 150 giros gratis, que se acreditan en partes durante los primeros cuatro depósitos."}',
             'value_fr' => '{"0":"Par exemple, si vous déposez 50 USD, vous recevrez 50 USD supplémentaires en bonus. Le montant maximum du bonus pour les paris sportifs est généralement de 130 $. Pour le casino, un programme étendu permet d’obtenir jusqu’à 1500 € + 150 tours gratuits, crédités en plusieurs parties sur les quatre premiers dépôts."}',
             'value_pt' => '{"0":"Por exemplo, se depositar 50 USD, receberá mais 50 USD como bónus. O valor máximo do bónus para apostas desportivas é geralmente de 130 USD. Para o casino, existe um programa alargado onde pode receber até 1500 € + 150 rodadas grátis, creditadas em partes ao longo dos primeiros quatro depósitos."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The wagering requirement for the sports bonus is ×5 in the form of accumulators, meaning you must place bets on at least five events with odds of 1.40 or higher, and for the casino — ×35."}',
             'value_es' => '{"0":"El requisito de apuesta para el bono de deportes es ×5 en forma de apuestas combinadas, lo que significa que debes apostar en al menos cinco eventos con una cuota de 1.40 o superior, y para el casino — ×35."}',
             'value_fr' => '{"0":"La condition de mise pour le bonus sportif est de ×5 sous forme de paris combinés, c’est-à-dire que vous devez parier sur au moins cinq événements avec une cote de 1,40 ou plus, et pour le casino — ×35."}',
             'value_pt' => '{"0":"O requisito de aposta para o bónus desportivo é ×5 na forma de apostas múltiplas, ou seja, é necessário apostar em pelo menos cinco eventos com odd de 1.40 ou superior, e para o casino — ×35."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"ACCUMULATOR BOOSTER"}',
                'value_es' => '{"0":"Accumulator BOOSTER"}',
                'value_fr' => '{"0":"Accumulator BOOSTER"}',
                'value_pt' => '{"0":"REFORÇO DE COMBINADA"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET focuses on accumulators, offering players ready-made match combinations with boosted odds. Within the ACCUMULATOR BOOSTER» promotion, you choose one of the suggested accumulators. If it wins, MOSTBET will add +10% to your net winnings."}',
             'value_es' => '{"0":"MOSTBET apuesta por las combinadas, ofreciendo a los jugadores combinaciones de partidos ya preparadas con cuotas mejoradas. En la promoción «ACCUMULATOR BOOSTER», eliges una de las combinadas propuestas. Si gana, MOSTBET añadirá un +10 % a tus ganancias netas."}',
             'value_fr' => '{"0":"MOSTBET mise sur les paris combinés, en proposant aux joueurs des combinaisons de matchs prêtes à l’emploi avec des cotes améliorées. Dans le cadre de la promotion « ACCUMULATOR BOOSTER », vous choisissez l’un des combinés proposés. S’il gagne, MOSTBET ajoutera +10 % à vos gains nets."}',
             'value_pt' => '{"0":"A MOSTBET aposta nos múltiplos, oferecendo aos jogadores combinações de partidas já preparadas com odds melhoradas. Na promoção «REFORÇO DE COMBINADA», escolhe-se um dos acumuladores sugeridos. Se ganhar, a MOSTBET adicionará +10 % aos seus lucros líquidos."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The advantage of this bonus is that it does not require any additional conditions or wagering requirements."}',
             'value_es' => '{"0":"La ventaja de este bono es que no requiere condiciones adicionales ni requisitos de apuesta."}',
             'value_fr' => '{"0":"L’avantage de ce bonus est qu’il ne nécessite aucune condition supplémentaire ni exigence de mise."}',
             'value_pt' => '{"0":"A vantagem deste bónus é que não exige condições adicionais nem requisitos de aposta."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"RISK-FREE BET"}',
                'value_es' => '{"0":"Apuesta Sin Riesgo"}',
                'value_fr' => '{"0":"Pari Sans Risque"}',
                'value_pt' => '{"0":"APOSTA SEM RISCO"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET offers the option to insure your bet either 100% or partially. This means that in the event of a loss, you will get back the portion of your stake that was insured. The insurance costs a certain percentage of the stake amount, and this percentage depends on the odds of the event."}',
             'value_es' => '{"0":"MOSTBET ofrece la posibilidad de asegurar tu apuesta al 100 % o de forma parcial. Esto significa que, en caso de perder, recibirás de vuelta la parte de la apuesta que hayas asegurado. El seguro tiene un coste que representa un porcentaje del importe apostado, y este porcentaje depende de la cuota del evento."}',
             'value_fr' => '{"0":"MOSTBET propose d’assurer votre pari à 100 % ou partiellement. Cela signifie qu’en cas de perte, vous récupérez la partie de la mise que vous avez assurée. L’assurance coûte un certain pourcentage du montant de la mise, et ce pourcentage dépend de la cote de l’événement."}',
             'value_pt' => '{"0":"A MOSTBET oferece a possibilidade de segurar a sua aposta em 100% ou parcialmente. Isso significa que, em caso de perda, receberá de volta a parte da aposta que foi segurada. O seguro custa uma certa percentagem do valor da aposta, e essa percentagem depende das odds do evento."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For example, if you place a $100 bet on a match with odds of 2.00 and insure 50% of the stake, in case of a loss you will receive $50 back."}',
             'value_es' => '{"0":"Por ejemplo, si apuestas 100 USD a un partido con cuota 2.00 y aseguras el 50 % de la apuesta, en caso de pérdida recibirás 50 USD."}',
             'value_fr' => '{"0":"Par exemple, si vous misez 100 USD sur un match avec une cote de 2.00 et assurez 50 % de la mise, en cas de perte vous récupérerez 50 USD."}',
             'value_pt' => '{"0":"Por exemplo, se apostar 100 USD num jogo com odd de 2.00 e segurar 50% da aposta, em caso de perda receberá 50 USD."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In addition, MOSTBET occasionally runs «risk-free» promotions for specific matches. You can place a bet, and if it loses, the bookmaker refunds it in the form of a bonus for another play."}',
             'value_es' => '{"0":"Además, MOSTBET a veces organiza promociones «sin riesgo» para partidos concretos. Puedes realizar una apuesta y, si pierdes, la casa te la devuelve en forma de bono para volver a jugar."}',
             'value_fr' => '{"0":"De plus, MOSTBET organise parfois des promotions « sans risque » pour des matchs spécifiques. Vous pouvez placer un pari et, s’il est perdant, le bookmaker vous le rembourse sous forme de bonus pour rejouer."}',
             'value_pt' => '{"0":"Além disso, a MOSTBET ocasionalmente realiza promoções «risk-free» para jogos específicos. Pode fazer uma aposta e, se perder, a casa devolve o valor em forma de bónus para voltar a jogar."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 26
            ]
        );
    }
}
