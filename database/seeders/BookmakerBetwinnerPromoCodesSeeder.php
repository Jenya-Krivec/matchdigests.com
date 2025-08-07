<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
             'value_en' => '{"0":"Regular Promotions and Bonuses"}',
             'value_es' => '{"0":"Promociones y Bonos Regulares"}',
             'value_fr' => '{"0":"Promotions et Bonus Réguliers"}',
             'value_pt' => '{"0":"Promoções e Bônus Regulares"}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Among the many bookmakers, BetWinner stands out not only for its extensive betting markets but also for its robust bonus package. The bonus policy targets different types of players and includes both classic deposit bonuses and targeted promos for specific events or segments, such as the casino or major football matches."}',
             'value_es' => '{"0":"Entre las numerosas casas de apuestas, BetWinner se destaca no solo por su amplia oferta de mercados, sino también por su sólido paquete de bonificaciones. La política de bonificaciones está dirigida a distintos tipos de jugadores e incluye tanto bonos clásicos por depósito como promociones específicas para ciertos eventos o segmentos, como el casino o los grandes partidos de fútbol."}',
             'value_fr' => '{"0":"Parmi la multitude de bookmakers, BetWinner se distingue non seulement par l’étendue de ses marchés de paris, mais aussi par la richesse de son offre de bonus. La politique de bonus s’adresse à différents types de joueurs et comprend à la fois des bonus de dépôt classiques et des promotions ciblées pour certains événements ou segments, comme le casino ou les grands matchs de football."}',
             'value_pt' => '{"0":"Entre as várias casas de apostas, a BetWinner destaca-se não apenas pela grande variedade de mercados, mas também pelo seu sólido pacote de bónus. A política de bónus é voltada para diferentes perfis de apostadores e inclui tanto bónus clássicos de depósito como promoções específicas para certos eventos ou segmentos, como o casino ou os grandes jogos de futebol."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In this article, we’ll explain how to use BetWinner promo codes, which bonuses are available after registration, and what the company offers to active players in the long term. We’ll also show you how to use our promo code :promocode to receive a 130% bonus on your first deposit."}',
             'value_es' => '{"0":"En este artículo, explicamos cómo usar los códigos promocionales de BetWinner, qué bonificaciones están disponibles tras registrarse y qué ofrece la empresa a los jugadores activos a largo plazo. Además, te mostramos cómo aprovechar nuestro código promocional :promocode para obtener un bono del 130% en tu primer depósito."}',
             'value_fr' => '{"0":"Dans cet article, nous expliquons comment utiliser les codes promo BetWinner, quels bonus sont disponibles après l’inscription et ce que l’entreprise propose aux joueurs actifs sur le long terme. Nous vous montrons également comment utiliser notre code promo :promocode pour recevoir un bonus de 130% sur votre premier dépôt."}',
             'value_pt' => '{"0":"Neste artigo, explicamos como utilizar os códigos promocionais da BetWinner, quais bónus estão disponíveis após o registo e o que a empresa oferece aos jogadores ativos a longo prazo. Também mostramos como usar o nosso código promocional :promocode para obter um bónus de 130% no primeiro depósito."}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
                'value_en' => '{"0":"How to benefit from the BetWinner promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de BetWinner?"}',
                'value_fr' => '{"0":"Comment profiter du code promo BetWinner ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da BetWinner?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"You can enter a promo code during registration at BetWinner — there is a dedicated field in the account creation form. The standard welcome bonus for sports betting is 100% up to $100, but with our promo code :promocode, the amount can increase to $130. The promo code requires no additional activation steps — simply enter it before confirming your account, and the system will automatically apply the enhanced bonus."}',
             'value_es' => '{"0":"Puedes ingresar un código promocional durante el registro en BetWinner — hay un campo específico en el formulario de creación de cuenta. El bono estándar de bienvenida para apuestas deportivas es del 100% hasta $100, pero con nuestro código promocional :promocode, el monto puede aumentar hasta $130. El código no requiere pasos adicionales para su activación: solo ingrésalo antes de confirmar la cuenta y el sistema aplicará automáticamente el bono mejorado."}',
             'value_fr' => '{"0":"Vous pouvez saisir un code promo lors de l\'inscription sur BetWinner — un champ spécifique est prévu à cet effet dans le formulaire de création de compte. Le bonus de bienvenue standard pour les paris sportifs est de 100% jusqu\'à 100$, mais avec notre code promo :promocode, le montant peut augmenter jusqu\'à 130$. Le code ne nécessite aucune étape supplémentaire d\'activation — il suffit de le saisir avant de confirmer le compte et le système appliquera automatiquement le bonus amélioré."}',
             'value_pt' => '{"0":"Você pode inserir um código promocional durante o registro na BetWinner — há um campo específico no formulário de criação de conta. O bônus padrão de boas-vindas para apostas esportivas é de 100% até $100, mas com nosso código promocional :promocode, o valor pode subir para $130. O código não exige etapas adicionais de ativação — basta inseri-lo antes de confirmar a conta, e o sistema aplicará automaticamente o bônus aumentado."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Registration is available via several methods: email, phone, social networks, or one-click. All methods allow the use of a promo code. After registration, you must fund your account to activate the bonus. This can be done within 30 days from the moment of account creation."}',
             'value_es' => '{"0":"El registro está disponible mediante varios métodos: correo electrónico, teléfono, redes sociales o en un solo clic. Todos los métodos permiten usar el código promocional. Después del registro, deberás depositar fondos en tu cuenta para activar el bono. Puedes hacerlo dentro de los 30 días desde la creación de la cuenta."}',
             'value_fr' => '{"0":"L’inscription peut se faire par email, téléphone, réseaux sociaux ou en un clic. Tous les modes d\'inscription permettent d’utiliser un code promo. Après l’inscription, vous devrez effectuer un dépôt pour activer le bonus. Cela peut être fait dans les 30 jours suivant la création du compte."}',
             'value_pt' => '{"0":"O registro pode ser feito por e-mail, telefone, redes sociais ou com um clique. Todos os métodos permitem o uso do código promocional. Após o registro, é necessário fazer um depósito para ativar o bônus. Isso pode ser feito dentro de 30 dias após a criação da conta."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"No deposit bonuses at BetWinner are extremely rare, but they do occasionally appear as part of personalized campaigns or as gifts for special occasions, such as your birthday. These can include a fixed-value free bet or a casino bonus."}',
             'value_es' => '{"0":"Los bonos sin depósito en BetWinner son muy poco frecuentes, pero ocasionalmente aparecen como parte de campañas personalizadas o como obsequios por ocasiones especiales, como cumpleaños. Pueden ser apuestas gratuitas de valor fijo o bonos de casino."}',
             'value_fr' => '{"0":"Les bonus sans dépôt chez BetWinner sont très rares, mais ils peuvent apparaître dans le cadre de campagnes personnalisées ou comme cadeaux pour des occasions spéciales, comme un anniversaire. Il peut s’agir de paris gratuits d’un montant fixe ou d’un bonus de casino."}',
             'value_pt' => '{"0":"Os bônus sem depósito na BetWinner são extremamente raros, mas às vezes aparecem como parte de campanhas personalizadas ou como presente em datas especiais, como o aniversário. Podem ser freebets de valor fixo ou bônus de cassino."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Most often, no-deposit offers are not publicly advertised, and you will see the bonus information in your personal account or via email notification."}',
             'value_es' => '{"0":"Por lo general, estas ofertas no se publicitan públicamente y la información sobre el bono aparece en tu cuenta personal o en un correo electrónico."}',
             'value_fr' => '{"0":"La plupart du temps, ces offres ne sont pas annoncées publiquement ; les informations apparaîtront dans votre espace personnel ou par email."}',
             'value_pt' => '{"0":"Normalmente, essas ofertas não são divulgadas publicamente, e as informações sobre o bônus aparecem na conta pessoal ou por e-mail."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at BetWinner?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en BetWinner?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur BetWinner ?"}',
                'value_pt' => '{"0":"E se você já for registrado na BetWinner?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, BetWinner actively engages with already registered players. Users receive regular offers such as cashback, free bets, deposit bonuses (e.g., on Fridays or weekends), as well as promo codes linked to the sports calendar, such as the start of the football season or major tennis tournaments."}',
             'value_es' => '{"0":"Sí, BetWinner trabaja activamente con los jugadores ya registrados. Los usuarios reciben ofertas regulares como reembolsos, apuestas gratuitas, bonos por depósito (por ejemplo, los viernes o fines de semana), así como códigos promocionales vinculados al calendario deportivo, como el inicio de la temporada de fútbol o grandes torneos de tenis."}',
             'value_fr' => '{"0":"Oui, BetWinner s’adresse activement aux joueurs déjà inscrits. Les utilisateurs reçoivent régulièrement des offres telles que des cashback, des paris gratuits, des bonus de dépôt (par exemple le vendredi ou le week-end), ainsi que des codes promo liés au calendrier sportif, comme le début de la saison de football ou les grands tournois de tennis."}',
             'value_pt' => '{"0":"Sim, a BetWinner trabalha ativamente com jogadores já registrados. Os usuários recebem ofertas regulares, como cashback, apostas grátis, bônus de depósito (por exemplo, às sextas-feiras ou fins de semana), além de códigos promocionais vinculados ao calendário esportivo, como o início da temporada de futebol ou grandes torneios de tênis."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"There is also a bonus points system, where points can be exchanged for bets. Active players have access to special promotions, including raffles for gadgets, prizes, and participation in the VIP program."}',
             'value_es' => '{"0":"También existe un sistema de puntos de bonificación que se pueden canjear por apuestas. Los jugadores activos tienen acceso a promociones especiales que incluyen sorteos de dispositivos, premios y participación en el programa VIP."}',
             'value_fr' => '{"0":"Un système de points bonus est également en place, les points pouvant être échangés contre des paris. Les joueurs actifs ont accès à des promotions spéciales, incluant des tirages au sort de gadgets, des prix et une participation au programme VIP."}',
             'value_pt' => '{"0":"Também existe um sistema de pontos de bônus, que podem ser trocados por apostas. Jogadores ativos têm acesso a promoções especiais, incluindo sorteios de eletrônicos, prêmios e participação no programa VIP."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Big Match"}',
                'value_es' => '{"0":"El Gran Partido"}',
                'value_fr' => '{"0":"Grand match"}',
                'value_pt' => '{"0":"Grande Jogo"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"One of the most popular promotions at BetWinner is Big Match. It is dedicated to the week’s main football events such as the Champions League, international matches, and top derbies."}',
             'value_es' => '{"0":"Una de las promociones más populares de BetWinner es El Gran Partido. Está dedicada a los principales partidos de fútbol de la semana, como la Liga de Campeones, partidos de selecciones y los grandes clásicos."}',
             'value_fr' => '{"0":"L’une des promotions les plus populaires chez BetWinner est Grand match. Elle est dédiée aux grands matchs de la semaine, comme la Ligue des champions, les matchs internationaux et les grands derbys."}',
             'value_pt' => '{"0":"Uma das promoções mais populares da BetWinner é o Grande Jogo. Ela é dedicada aos principais jogos de futebol da semana, como a Liga dos Campeões, partidas de seleções e grandes clássicos."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"As part of the promotion, players who place a pre-match bet can receive a free bet for a live bet during the second half. The bonus amount depends on the odds and size of the pre-match bet. The promotion works automatically, with no need for activation or registration. It\'s convenient and allows players to gain extra value while watching the match live."}',
             'value_es' => '{"0":"Como parte de la promoción, los jugadores que realicen una apuesta previa al partido pueden recibir una apuesta gratuita para usar en vivo durante el segundo tiempo. El importe del bono depende de la cuota y el monto de la apuesta pre-partido. La promoción funciona automáticamente, sin necesidad de activación o registro. Es conveniente y permite obtener un beneficio adicional mientras se sigue el partido en directo."}',
             'value_fr' => '{"0":"Dans le cadre de cette promotion, les joueurs ayant placé un pari avant le début du match peuvent recevoir un pari gratuit à utiliser en direct pendant la seconde mi-temps. Le montant du bonus dépend de la cote et du montant du pari pré-match. La promotion fonctionne automatiquement, sans activation ni inscription. C’est pratique et cela permet de profiter d’un avantage supplémentaire tout en regardant le match en direct."}',
             'value_pt' => '{"0":"Como parte da promoção, os jogadores que fizerem uma aposta pré-jogo podem receber uma aposta grátis para usar ao vivo no segundo tempo. O valor do bônus depende da odd e do valor da aposta pré-jogo. A promoção funciona automaticamente, sem necessidade de ativação ou registro. É conveniente e oferece uma vantagem extra enquanto se assiste ao jogo em tempo real."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Betwinner Casino Welcome Offer"}',
                'value_es' => '{"0":"Oferta de bienvenida del casino Betwinner"}',
                'value_fr' => '{"0":"Offre de bienvenue du casino Betwinner"}',
                'value_pt' => '{"0":"Oferta de boas-vindas do cassino Betwinner"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"A separate line of bonuses is available for casino users. The welcome package includes four bonuses on the first deposits. In total, players can receive up to €1500 + 150 free spins."}',
             'value_es' => '{"0":"Existe una línea de bonos específica para los usuarios del casino. El paquete de bienvenida incluye cuatro bonos para los primeros depósitos. En total, se pueden obtener hasta €1500 + 150 giros gratis."}',
             'value_fr' => '{"0":"Une gamme de bonus distincte est prévue pour les utilisateurs du casino. Le pack de bienvenue comprend quatre bonus sur les premiers dépôts. Au total, vous pouvez recevoir jusqu’à 1500€ + 150 tours gratuits."}',
             'value_pt' => '{"0":"Existe uma linha de bónus separada para os utilizadores de casino. O pacote de boas-vindas inclui quatro bónus nos primeiros depósitos. No total, é possível receber até €1500 + 150 rodadas grátis."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The bonuses are activated sequentially, each one after the wagering of the previous. The minimum deposit to participate in the promotion is €10."}',
             'value_es' => '{"0":"Los bonos se activan de forma secuencial, uno tras completar el requisito de apuesta del anterior. El depósito mínimo para participar en la promoción es de €10."}',
             'value_fr' => '{"0":"Les bonus s’activent successivement, chaque nouveau bonus étant débloqué après que le précédent ait été misé. Le dépôt minimum pour participer à la promotion est de 10€."}',
             'value_pt' => '{"0":"Os bónus são ativados de forma sequencial, cada um após a conclusão do rollover do anterior. O depósito mínimo para participar na promoção é de €10."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Free spins are granted on popular slots, and the wagering requirement for the bonuses is 35x. It’s important to note that casino bonuses are not compatible with the sports bonus, so you must choose the bonus type during your first deposit."}',
             'value_es' => '{"0":"Los giros gratis se otorgan en tragamonedas populares y el requisito de apuesta para los bonos es de 35x. Es importante tener en cuenta que los bonos de casino no son compatibles con los bonos deportivos, por lo que deberás elegir el tipo de bono al realizar tu primer depósito."}',
             'value_fr' => '{"0":"Les tours gratuits sont attribués sur des machines à sous populaires, et le wager pour les bonus est de 35x. Il est important de noter que les bonus de casino ne sont pas compatibles avec le bonus sportif, vous devrez donc choisir le type de bonus lors de votre premier dépôt."}',
             'value_pt' => '{"0":"As rodadas grátis são oferecidas em slots populares, e o requisito de apostas para os bónus é de 35x. É importante observar que os bónus de casino não são compatíveis com o bónus de apostas desportivas, por isso é necessário escolher o tipo de bónus no primeiro depósito."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Nil-Nil Draw"}',
                'value_es' => '{"0":"Empate a cero"}',
                'value_fr' => '{"0":"Match nul 0-0"}',
                'value_pt' => '{"0":"Empate a zero"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Another thematic promotion that BetWinner regularly launches for football matches. If you place a bet on any of the main outcomes, such as a team to win, and the match ends in a 0:0 draw, you will receive a refund in the form of a free bet. This offer is particularly relevant for matches where teams have a history of drawing in previous encounters."}',
             'value_es' => '{"0":"Otra promoción temática que BetWinner lanza regularmente para partidos de fútbol. Si haces una apuesta a cualquiera de los resultados principales, como la victoria de un equipo, y el partido termina 0:0, recibirás un reembolso en forma de apuesta gratuita. Esta oferta es especialmente relevante para partidos en los que los equipos tienen un historial de empates previos."}',
             'value_fr' => '{"0":"Une autre promotion thématique que BetWinner lance régulièrement pour les matchs de football. Si vous placez un pari sur l’un des résultats principaux, comme la victoire d’une équipe, et que le match se termine sur un score de 0:0, vous recevrez un remboursement sous forme de pari gratuit. Cette offre est particulièrement pertinente pour les matchs où les équipes ont une histoire de matchs nuls précédents."}',
             'value_pt' => '{"0":"Outra promoção temática que a BetWinner lança regularmente para jogos de futebol. Se fizer uma aposta em qualquer um dos resultados principais, como a vitória de uma equipa, e o jogo terminar 0:0, receberá o reembolso na forma de uma aposta grátis. Esta oferta é especialmente relevante para jogos entre equipas com histórico de empates anteriores."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The terms of the promotion are simple: you need to place a bet of at least €5 on the specified event. The free bet is automatically credited after the match ends. This promotion can serve as an extra layer of insurance for players willing to take risks on matches with a high likelihood of a draw."}',
             'value_es' => '{"0":"Los términos de la promoción son sencillos: debes realizar una apuesta de al menos 5 € en el evento indicado. La apuesta gratuita se acredita automáticamente después de que finalice el partido. Esta promoción puede servir como un nivel adicional de protección para los jugadores que se atreven a apostar en partidos con alta probabilidad de empate."}',
             'value_fr' => '{"0":"Les conditions de la promotion sont simples : il faut miser au moins 5 € sur l’événement indiqué. Le pari gratuit est automatiquement crédité après la fin du match. Cette promotion peut constituer un niveau de protection supplémentaire pour les joueurs prêts à prendre des risques sur des matchs à forte probabilité de match nul."}',
             'value_pt' => '{"0":"Os termos da promoção são simples: é necessário fazer uma aposta de pelo menos 5€ no evento indicado. A aposta grátis é creditada automaticamente após o término do jogo. Esta promoção pode funcionar como uma camada extra de proteção para os jogadores que não têm medo de arriscar em jogos com alta probabilidade de empate."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 25
            ]
        );
    }
}
