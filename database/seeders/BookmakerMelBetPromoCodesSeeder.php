<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Among the many betting platforms, Melbet stands out for its bonus policy, which caters to both new and regular players. Melbet\'s offers include welcome bonuses, special tournaments like TOTO, and regular promotions."}',
             'value_es' => '{"0":"Entre la gran cantidad de plataformas de apuestas, Melbet se destaca por su política de bonificaciones, que abarca tanto a los nuevos usuarios como a los jugadores habituales. Las ofertas de Melbet incluyen bonos de bienvenida, torneos especiales como TOTO y promociones regulares."}',
             'value_fr' => '{"0":"Parmi les nombreuses plateformes de paris, Melbet se distingue par sa politique de bonus, qui s’adresse aussi bien aux nouveaux qu’aux joueurs réguliers. Les offres de Melbet incluent des bonus de bienvenue, des tournois spéciaux comme TOTO, ainsi que des promotions régulières."}',
             'value_pt' => '{"0":"Entre as muitas plataformas de apostas, a Melbet se destaca pela sua política de bônus, que abrange tanto os novos jogadores quanto os habituais. As ofertas da Melbet incluem bônus de boas-vindas, torneios especiais como o TOTO e promoções regulares."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In this article, we will take a detailed look at how Melbet promo codes work, what bonuses are currently available, and what loyal users receive. We’ll also explain how to use our promo code :promocode during registration to get an enhanced welcome bonus on your first deposit."}',
             'value_es' => '{"0":"En este artículo analizaremos en detalle cómo funcionan los códigos promocionales de Melbet, qué bonos están disponibles actualmente y qué obtienen los usuarios que ya llevan tiempo en la plataforma. También te explicaremos cómo usar nuestro código promocional :promocode al registrarte para obtener un bono de bienvenida mejorado en tu primer depósito."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail le fonctionnement des codes promo Melbet, les bonus actuellement disponibles et les avantages réservés aux joueurs fidèles. Nous vous expliquerons également comment utiliser notre code promo :promocode lors de l’inscription afin d’obtenir un bonus de bienvenue amélioré sur votre premier dépôt."}',
             'value_pt' => '{"0":"Neste artigo, vamos analisar detalhadamente como funcionam os códigos promocionais da Melbet, quais bônus estão atualmente disponíveis e o que recebem os jogadores fiéis à plataforma. Também explicaremos como usar nosso código promocional :promocode no momento do registro para obter um bônus de boas-vindas aprimorado no seu primeiro depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the MelBet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de MelBet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo MelBet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da MelBet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Melbet allows the use of promo codes at the account creation stage. In the corresponding field of the registration form, you need to enter the code that activates the enhanced bonus. For example, the standard offer provides 100% on the first deposit, but with a promo code, the bonus amount can increase to 130%, or you may receive an additional package of free bets or free spins for the casino."}',
             'value_es' => '{"0":"Melbet permite el uso de códigos promocionales desde la etapa de creación de la cuenta. En el campo correspondiente del formulario de registro, debes ingresar el código que activa el bono mejorado. Por ejemplo, la oferta estándar otorga un 100% sobre el primer depósito, pero con un código promocional, el bono puede aumentar hasta el 130%, o incluir un paquete adicional de apuestas gratuitas o giros gratis para el casino."}',
             'value_fr' => '{"0":"Melbet permet d’utiliser des codes promo dès la création du compte. Dans le champ prévu à cet effet dans le formulaire d’inscription, il suffit d’entrer le code qui active le bonus amélioré. Par exemple, l’offre standard prévoit 100 % sur le premier dépôt, mais avec un code promo, le bonus peut être augmenté à 130 %, ou bien inclure un pack supplémentaire de paris gratuits ou de free spins pour le casino."}',
             'value_pt' => '{"0":"A Melbet permite o uso de códigos promocionais já na etapa de criação da conta. No campo correspondente do formulário de registro, você deve inserir o código que ativa o bônus ampliado. Por exemplo, a oferta padrão concede 100% no primeiro depósito, mas com um código promocional o valor do bônus pode aumentar para 130%, ou incluir um pacote adicional de apostas grátis ou rodadas grátis para o cassino."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Registration is available via several methods: by email, phone, or social media. All options allow you to enter a promo code. After account activation and the first deposit, the bonus funds are credited automatically, provided all requirements are met."}',
             'value_es' => '{"0":"El registro se puede realizar por varios métodos: correo electrónico, teléfono o redes sociales. Todos los métodos permiten introducir un código promocional. Tras activar la cuenta y realizar el primer depósito, los fondos del bono se acreditan automáticamente, siempre que se cumplan todos los requisitos."}',
             'value_fr' => '{"0":"L’inscription peut se faire de plusieurs manières : par email, téléphone ou via les réseaux sociaux. Tous les modes d’inscription permettent de saisir un code promo. Une fois le compte activé et le premier dépôt effectué, les fonds du bonus sont crédités automatiquement, à condition que toutes les exigences soient respectées."}',
             'value_pt' => '{"0":"O registro pode ser feito de várias formas: por e-mail, telefone ou redes sociais. Todas as opções permitem inserir o código promocional. Após a ativação da conta e o primeiro depósito, os fundos do bônus são creditados automaticamente, desde que todos os requisitos sejam cumpridos."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"The wagering requirements for MelBet bonuses vary depending on the type of offer. For sports betting, the bonus amount must be wagered 5 times on accumulator bets with at least three events, each having odds of no less than 1.40. For casino bonuses, a 40x wagering requirement applies, which must be fulfilled by playing slots or other games included in the promotion. Bonuses are valid for a period of 30 days from the date they are credited, after which any unused bonus funds will be forfeited."}',
                'value_es' => '{"0":"Los requisitos de apuesta para los bonos de MelBet varían según el tipo de oferta. Para las apuestas deportivas, el monto del bono debe apostarse 5 veces en apuestas acumuladas con al menos tres eventos, cada uno con una cuota no inferior a 1.40. Para los bonos de casino, se aplica un requisito de apuesta de 40x, que debe cumplirse jugando en tragamonedas u otros juegos incluidos en la promoción. Los bonos son válidos durante 30 días a partir de la fecha de acreditación, después de lo cual cualquier fondo no utilizado se cancelará."}',
                'value_fr' => '{"0":"Les conditions de mise pour les bonus MelBet varient selon le type d’offre. Pour les paris sportifs, le montant du bonus doit être misé 5 fois sur des paris combinés comprenant au moins trois événements, chacun ayant une cote minimale de 1.40. Pour les bonus de casino, un wagering de 40x s’applique, qui doit être rempli en jouant aux machines à sous ou à d’autres jeux inclus dans la promotion. Les bonus sont valables pendant 30 jours à compter de la date de leur attribution, après quoi les fonds non utilisés seront annulés."}',
                'value_pt' => '{"0":"Os requisitos de aposta para os bônus da MelBet variam de acordo com o tipo de oferta. Para apostas esportivas, o valor do bônus deve ser apostado 5 vezes em apostas acumuladas com pelo menos três eventos, cada um com odds de no mínimo 1.40. Para bônus de cassino, aplica-se um requisito de aposta de 40x, que deve ser cumprido jogando em slots ou outros jogos incluídos na promoção. Os bônus são válidos por 30 dias a partir da data de crédito, após o que quaisquer fundos não utilizados serão cancelados."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"Correct use of the promo code and timely meeting of the wagering requirements allow you to make the most of the welcome bonuses for both sports betting and casino games."}',
                'value_es' => '{"0":"El uso correcto del código promocional y el cumplimiento oportuno de los requisitos de apuesta permiten aprovechar al máximo los bonos de bienvenida tanto para las apuestas deportivas como para los juegos de casino."}',
                'value_fr' => '{"0":"Une utilisation correcte du code promotionnel et le respect en temps voulu des conditions de mise permettent de tirer pleinement parti des bonus de bienvenue, aussi bien pour les paris sportifs que pour les jeux de casino."}',
                'value_pt' => '{"0":"O uso correto do código promocional e o cumprimento pontual dos requisitos de aposta permitem aproveitar ao máximo os bônus de boas-vindas tanto para apostas esportivas quanto para jogos de cassino."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"As of now, Melbet does not offer universal no-deposit bonuses on a regular basis. However, such promotions may occasionally be available as part of limited-time campaigns. No-deposit free spins may also be included as part of a casino gift for certain categories of players, but these are exceptions rather than the rule. To receive any bonuses without making a deposit, it\'s important to regularly check the «Promo» section or follow updates in our review."}',
             'value_es' => '{"0":"Actualmente, Melbet no ofrece bonos sin depósito universales de forma regular. Sin embargo, este tipo de promociones pueden estar disponibles ocasionalmente como parte de campañas limitadas. Los giros gratis sin depósito también pueden formar parte de un regalo de casino para ciertas categorías de jugadores, pero son más la excepción que la norma. Para obtener cualquier bono sin realizar un depósito, es importante revisar periódicamente la sección «Promo» o seguir las actualizaciones en nuestra reseña."}',
             'value_fr' => '{"0":"À l\'heure actuelle, Melbet ne propose pas de bonus sans dépôt universels de manière régulière. Toutefois, de telles promotions peuvent parfois être disponibles dans le cadre de campagnes limitées. Des free spins sans dépôt peuvent également être offerts en cadeau dans le casino pour certaines catégories de joueurs, mais cela reste l’exception plutôt que la règle. Pour bénéficier de tout bonus sans dépôt, il est recommandé de consulter régulièrement la section « Promo » ou de suivre les mises à jour dans notre revue."}',
             'value_pt' => '{"0":"Atualmente, a Melbet não oferece bônus sem depósito universais de forma contínua. No entanto, essas promoções podem estar disponíveis ocasionalmente como parte de campanhas limitadas. Giros grátis sem depósito também podem ser oferecidos como presente no cassino para determinadas categorias de jogadores, mas são exceções, não uma regra. Para obter qualquer bônus sem necessidade de depósito, é importante acompanhar com atenção a seção «Promo» ou as atualizações em nossa análise."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at MelBet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en MelBet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur MelBet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na MelBet?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Melbet takes a systematic approach and offers decent bonuses to active users through regular promotions. These include cashback for activity, reload bonuses, birthday gifts, free spins in the casino, as well as participation in weekly tournaments with fixed prize pools."}',
             'value_es' => '{"0":"Melbet adopta un enfoque sistemático y ofrece buenos bonos a los usuarios activos mediante promociones regulares. Entre ellas se incluyen reembolsos por actividad, bonos por depósitos posteriores, regalos de cumpleaños, giros gratis en el casino y participación en torneos semanales con premios fijos."}',
             'value_fr' => '{"0":"Melbet adopte une approche structurée et propose de bons bonus aux utilisateurs actifs via des promotions régulières. Cela inclut du cashback en fonction de l’activité, des bonus sur les dépôts ultérieurs, des cadeaux d’anniversaire, des free spins au casino, ainsi que la participation à des tournois hebdomadaires avec une cagnotte fixe."}',
             'value_pt' => '{"0":"A Melbet adota uma abordagem sistemática e oferece bons bônus aos usuários ativos por meio de promoções regulares. Entre eles estão cashback por atividade, bônus em recargas, presentes de aniversário, giros grátis no cassino e participação em torneios semanais com prêmios fixos."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Reload bonuses typically follow a fixed structure: 50–100% on the deposit plus free bets. However, conditions may vary depending on the country, account activity, and betting history. All available promotions for a specific user can be viewed in their personal account."}',
             'value_es' => '{"0":"Los bonos por depósitos posteriores suelen tener una estructura fija: 50–100% del depósito más apuestas gratuitas. No obstante, las condiciones pueden variar según el país, la actividad de la cuenta y el historial de apuestas. Todas las promociones disponibles para un usuario específico pueden consultarse en su cuenta personal."}',
             'value_fr' => '{"0":"Les bonus sur dépôts ultérieurs suivent généralement une structure fixe : 50 à 100 % du dépôt plus des paris gratuits. Toutefois, les conditions peuvent varier selon le pays, l’activité du compte et l’historique des paris. Toutes les promotions disponibles pour un utilisateur donné peuvent être consultées dans son espace personnel."}',
             'value_pt' => '{"0":"Os bônus de recarga geralmente seguem uma estrutura fixa: 50–100% sobre o valor depositado mais apostas grátis. No entanto, as condições podem variar conforme o país, a atividade da conta e o histórico de apostas. Todas as promoções disponíveis para um usuário específico podem ser visualizadas em sua conta pessoal."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"TOTO"}',
                'value_es' => '{"0":"TOTO"}',
                'value_fr' => '{"0":"TOTO"}',
                'value_pt' => '{"0":"TOTO"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"TOTO is one of Melbet’s signature promotions, allowing users to win large sums without placing traditional bets. To participate, you need to predict the outcomes of sporting events (football, hockey, basketball) in a pool betting format. All registered players who make a minimum entry (often a symbolic amount) can take part."}',
             'value_es' => '{"0":"TOTO es una de las promociones emblemáticas de Melbet, que permite a los usuarios ganar grandes sumas sin realizar apuestas directas. Para participar, hay que predecir los resultados de eventos deportivos (fútbol, hockey, baloncesto) en formato de quiniela. Todos los jugadores registrados que realicen una apuesta mínima (a menudo una cantidad simbólica) pueden participar."}',
             'value_fr' => '{"0":"TOTO est l’une des promotions emblématiques de Melbet, permettant aux utilisateurs de gagner de grosses sommes sans effectuer de paris classiques. Il suffit de prédire les résultats d’événements sportifs (football, hockey, basket-ball) dans un format de pari mutuel. Tous les joueurs enregistrés ayant effectué une mise minimale (souvent symbolique) peuvent participer."}',
             'value_pt' => '{"0":"O TOTO é uma das promoções exclusivas da Melbet, permitindo que os usuários ganhem grandes quantias sem fazer apostas diretas. Para participar, é necessário prever os resultados de eventos esportivos (futebol, hóquei, basquete) no formato de totalizador. Todos os jogadores registrados que fizerem uma aposta mínima (geralmente simbólica) podem participar."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The prize pool is formed from the total amount of bets, and winnings are distributed among those who guess the most results correctly. If a player predicts all outcomes correctly, they win the jackpot, which often exceeds $10,000."}',
             'value_es' => '{"0":"El fondo de premios se forma con el total de las apuestas y las ganancias se reparten entre quienes acierten más resultados. Si un jugador acierta todos los pronósticos, gana el bote, que suele superar los 10.000 USD."}',
             'value_fr' => '{"0":"Le fonds de prix est constitué du total des mises, et les gains sont répartis entre ceux qui devinent le plus de résultats. En cas de pronostics 100 % corrects, le joueur remporte le jackpot, qui dépasse souvent les 10 000 USD."}',
             'value_pt' => '{"0":"O prêmio é formado pelo total apostado e é distribuído entre os que acertarem mais resultados. Se o jogador acertar todos os palpites, ganha o jackpot, que frequentemente ultrapassa os 10.000 USD."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Go For Longer"}',
                'value_es' => '{"0":"No pare"}',
                'value_fr' => '{"0":"Vous pourrez jouer plus longtemps"}',
                'value_pt' => '{"0":"Vá mais além"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Go For Longer is a promotion for active players who want to place regular bets over a certain period. The idea is simple: for each day a player places a qualifying bet (above a set minimum amount), they earn bonus points. The more consecutive days you place winning bets, the bigger the final reward. Prizes can range from free bets to cash bonuses."}',
             'value_es' => '{"0":"No pare es una promoción para jugadores activos que desean hacer apuestas de forma regular durante un período determinado. La dinámica es simple: por cada día que el jugador realiza una apuesta calificada (por encima de una cantidad mínima), gana puntos de bonificación. Cuantos más días consecutivos realices apuestas ganadoras, mayor será la recompensa final. Los premios pueden variar desde apuestas gratis hasta bonos en efectivo."}',
             'value_fr' => '{"0":"Vous pourrez jouer plus longtemps est une promotion destinée aux joueurs actifs qui souhaitent parier régulièrement pendant une certaine période. Le principe est simple : chaque jour où le joueur place un pari éligible (au-dessus d’un montant minimum), il reçoit des points bonus. Plus vous placez de paris gagnants sur des jours consécutifs, plus la récompense finale sera élevée. Les récompenses vont des paris gratuits aux bonus en argent."}',
             'value_pt' => '{"0":"Vá mais além é uma promoção voltada para jogadores ativos que desejam apostar regularmente durante um determinado período. A mecânica é simples: a cada dia em que o jogador faz uma aposta qualificada (acima de um valor mínimo), ele acumula pontos de bônus. Quanto mais dias seguidos você fizer apostas vencedoras, maior será o prêmio final. As recompensas podem variar entre apostas grátis e bônus em dinheiro."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Royal Monday"}',
                'value_es' => '{"0":"Lunes de Reyes"}',
                'value_fr' => '{"0":"Royal Monday"}',
                'value_pt' => '{"0":"Segunda-feira Régia"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"This is a weekly promotion aimed at regular players. Every Monday, users can receive a 100% bonus on the deposit made that day. The offer is valid for amounts starting from 10 EUR up to a set maximum."}',
             'value_es' => '{"0":"Esta es una promoción semanal dirigida a jugadores habituales. Cada lunes, los usuarios pueden recibir un bono del 100% sobre el depósito realizado ese día. La oferta es válida para montos desde 10 EUR hasta un máximo establecido."}',
             'value_fr' => '{"0":"Il s\'agit d\'une promotion hebdomadaire destinée aux joueurs réguliers. Chaque lundi, les utilisateurs peuvent recevoir un bonus de 100 % sur le dépôt effectué ce jour-là. L\'offre est valable à partir de 10 EUR jusqu\'à un montant maximum défini."}',
             'value_pt' => '{"0":"Esta é uma promoção semanal voltada para jogadores frequentes. Todas as segundas-feiras, os usuários podem receber um bônus de 100% sobre o depósito feito naquele dia. A oferta é válida para valores a partir de 10 EUR até um máximo estabelecido."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The key feature of Royal Monday is its simplified wagering conditions, making it easy to convert the bonus into real money. Terms may vary, but the wagering requirement is usually x5–x10 with specific types of bets counting toward the turnover. This is one of the platform’s most popular and consistent promotions."}',
             'value_es' => '{"0":"La característica principal de Royal Monday son sus condiciones de apuesta simplificadas, que hacen fácil convertir el bono en dinero real. Las condiciones pueden variar, pero el requisito de apuesta suele ser de x5 a x10 con tipos específicos de apuestas que cuentan para el rollover. Es una de las promociones más populares y estables de la plataforma."}',
             'value_fr' => '{"0":"La particularité du Royal Monday réside dans ses conditions de mise simplifiées, qui permettent de transformer facilement le bonus en argent réel. Les conditions varient, mais le wagering est généralement de x5 à x10 avec des types de paris spécifiques pris en compte. C’est l’une des promotions les plus populaires et constantes de la plateforme."}',
             'value_pt' => '{"0":"O diferencial do Royal Monday são os requisitos de aposta simplificados, que facilitam a conversão do bônus em dinheiro real. As condições podem variar, mas o rollover geralmente é de x5 a x10 com tipos específicos de apostas que contam para o volume. É uma das promoções mais populares e consistentes da plataforma."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Where to enter the promo code when registering on MelBet?"}',
             'value_es' => '{"0":"¿Dónde introducir el código promocional al registrarse en MelBet?"}',
             'value_fr' => '{"0":"Où saisir le code promo lors de l\'inscription sur MelBet ?"}',
             'value_pt' => '{"0":"Onde inserir o código promocional ao se registrar na MelBet?"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The promo code must be entered in the special field in the registration form before confirming your account."}',
             'value_es' => '{"0":"El código promocional debe introducirse en el campo especial del formulario de registro antes de confirmar la cuenta."}',
             'value_fr' => '{"0":"Le code promo doit être saisi dans le champ prévu à cet effet dans le formulaire d\'inscription avant de confirmer votre compte."}',
             'value_pt' => '{"0":"O código promocional deve ser inserido no campo especial do formulário de registro antes de confirmar a conta."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Can the promo code be used after creating an account?"}',
             'value_es' => '{"0":"¿Se puede utilizar el código promocional después de crear la cuenta?"}',
             'value_fr' => '{"0":"Peut-on utiliser le code promo après avoir créé un compte ?"}',
             'value_pt' => '{"0":"É possível usar o código promocional após criar a conta?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"No, the promo code can only be activated during registration. After the account is created, it cannot be added."}',
             'value_es' => '{"0":"No, el código promocional solo se puede activar durante el registro. Después de crear la cuenta, no se puede añadir."}',
             'value_fr' => '{"0":"Non, le code promo ne peut être activé qu\'au moment de l\'inscription. Une fois le compte créé, il ne peut pas être ajouté."}',
             'value_pt' => '{"0":"Não, o código promocional só pode ser ativado durante o registro. Depois de criar a conta, não é possível adicioná-lo."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit to activate the bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo para activar el bono?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum pour activer le bonus ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo para ativar o bônus?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is from 10 USD or the equivalent in another currency."}',
             'value_es' => '{"0":"El depósito mínimo es de 10 USD o el equivalente en otra moneda."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 10 USD ou l\'équivalent dans une autre devise."}',
             'value_pt' => '{"0":"O depósito mínimo é de 10 USD ou o equivalente em outra moeda."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"How much time is given to wager the bonus?"}',
             'value_es' => '{"0":"¿Cuánto tiempo se da para liberar el bono?"}',
             'value_fr' => '{"0":"Combien de temps est accordé pour miser le bonus ?"}',
             'value_pt' => '{"0":"Quanto tempo é dado para cumprir o rollover do bônus?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet provides 30 days from the moment the bonus is credited to meet the wagering requirements."}',
             'value_es' => '{"0":"MelBet otorga 30 días desde el momento en que se acredita el bono para cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"MelBet accorde 30 jours à partir du moment où le bonus est crédité pour remplir les conditions de mise."}',
             'value_pt' => '{"0":"A MelBet concede 30 dias a partir do momento em que o bônus é creditado para cumprir os requisitos de aposta."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Can the bonus funds be withdrawn without wagering?"}',
             'value_es' => '{"0":"¿Se pueden retirar los fondos del bono sin apostarlos?"}',
             'value_fr' => '{"0":"Peut-on retirer les fonds du bonus sans les miser ?"}',
             'value_pt' => '{"0":"É possível sacar os fundos do bônus sem cumprir o rollover?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"No, you must first meet all wagering requirements; only then will the bonus funds and any winnings from them become available for withdrawal."}',
             'value_es' => '{"0":"No, primero se deben cumplir todos los requisitos de apuesta; solo entonces los fondos del bono y las ganancias obtenidas con ellos estarán disponibles para retiro."}',
             'value_fr' => '{"0":"Non, il faut d’abord remplir toutes les conditions de mise ; ce n’est qu’ensuite que les fonds du bonus et les gains qui en proviennent seront disponibles pour retrait."}',
             'value_pt' => '{"0":"Não, é necessário cumprir todos os requisitos de aposta; somente depois disso os fundos do bônus e os ganhos obtidos com eles estarão disponíveis para saque."}',
             'order' => 35
            ]
        );
    }
}
