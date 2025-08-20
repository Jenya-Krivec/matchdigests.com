<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
             'value_en' => '{"0":"20BET Review"}',
             'value_es' => '{"0":"Reseña de 20BET"}',
             'value_fr' => '{"0":"Avis sur 20BET"}',
             'value_pt' => '{"0":"Análise da 20BET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET entered the market in 2020 and quickly gained popularity among users looking for a modern platform for sports betting and casino games. The bookmaker operates under a Curacao license, which allows it to serve clients from different countries around the world, including Europe."}',
             'value_es' => '{"0":"20BET apareció en el mercado en 2020 y rápidamente ganó popularidad entre los usuarios que buscan una plataforma moderna para apuestas deportivas y juegos de casino. La casa de apuestas opera con una licencia de Curazao, lo que le permite atender a clientes de diferentes países del mundo, incluida Europa."}',
             'value_fr' => '{"0":"20BET est arrivé sur le marché en 2020 et a rapidement gagné en popularité auprès des utilisateurs recherchant une plateforme moderne pour les paris sportifs et les jeux de casino. Le bookmaker opère sous licence de Curaçao, ce qui lui permet de servir des clients de différents pays du monde, y compris en Europe."}',
             'value_pt' => '{"0":"A 20BET surgiu no mercado em 2020 e rapidamente ganhou popularidade entre os usuários que procuram uma plataforma moderna para apostas esportivas e jogos de cassino. A casa de apostas opera sob licença de Curaçao, o que lhe permite atender clientes de diferentes países do mundo, incluindo a Europa."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The platform combines classic sports betting with a wide selection of casino games. The website design is simple and user-friendly, and registration takes only a few minutes."}',
             'value_es' => '{"0":"La plataforma combina las apuestas deportivas clásicas con una amplia selección de juegos de casino. El diseño del sitio es sencillo y fácil de usar, y el registro solo toma unos minutos."}',
             'value_fr' => '{"0":"La plateforme combine les paris sportifs classiques avec un large choix de jeux de casino. Le design du site est simple et convivial, et l’inscription ne prend que quelques minutes."}',
             'value_pt' => '{"0":"A plataforma combina apostas esportivas clássicas com uma ampla seleção de jogos de cassino. O design do site é simples e intuitivo, e o registro leva apenas alguns minutos."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Sports betting at 20BET covers more than 30 disciplines. You can place bets on football, tennis, basketball, and esports events, as well as on less popular sports such as table tennis or futsal. Special attention should be given to the football section, which includes hundreds of matches every day, from top European leagues to regional tournaments."}',
             'value_es' => '{"0":"Las apuestas deportivas en 20BET abarcan más de 30 disciplinas. Podrás apostar en eventos de fútbol, tenis, baloncesto y deportes electrónicos, así como en deportes menos populares como el tenis de mesa o el fútbol sala. La sección de fútbol merece especial atención, ya que incluye cientos de partidos cada día, desde las principales ligas europeas hasta torneos regionales."}',
             'value_fr' => '{"0":"Les paris sportifs sur 20BET couvrent plus de 30 disciplines. Vous pouvez parier sur des événements de football, de tennis, de basketball et d’esport, ainsi que sur des sports moins populaires tels que le tennis de table ou le futsal. La section football mérite une attention particulière, car elle comprend des centaines de matchs chaque jour, allant des principales ligues européennes aux tournois régionaux."}',
             'value_pt' => '{"0":"As apostas esportivas na 20BET abrangem mais de 30 disciplinas. Você poderá apostar em eventos de futebol, tênis, basquete e e-sports, bem como em esportes menos populares como tênis de mesa ou futsal. A seção de futebol merece destaque, pois inclui centenas de partidas todos os dias, desde as principais ligas europeias até torneios regionais."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, both major ATP and WTA series as well as Challengers are available. In addition to classic bets on the winner, you can also place combined bets. Here is a table with some of the sports you can bet on:"}',
             'value_es' => '{"0":"En el tenis se presentan tanto las grandes series ATP y WTA como los challengers. Además de las apuestas clásicas al ganador, también podrás realizar apuestas combinadas. Aquí tienes una tabla con algunos de los deportes en los que podrás apostar:"}',
             'value_fr' => '{"0":"En tennis, on retrouve aussi bien les grandes séries ATP et WTA que les challengers. En plus des paris classiques sur le vainqueur, vous pouvez également placer des paris combinés. Voici un tableau avec certains des sports sur lesquels vous pouvez miser :"}',
             'value_pt' => '{"0":"No tênis, estão disponíveis tanto as grandes séries ATP e WTA quanto os challengers. Além das apostas clássicas no vencedor, você também poderá fazer apostas combinadas. Aqui está uma tabela com alguns dos esportes em que você poderá apostar:"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The casino at 20BET is located in a separate section, bringing together thousands of games from providers such as NetEnt, Microgaming, Play’n GO, and Evolution Gaming. You can play classic slots, table games, and live casino with real dealers."}',
             'value_es' => '{"0":"El casino de 20BET se encuentra en una sección independiente, donde se reúnen miles de juegos de proveedores como NetEnt, Microgaming, Play’n GO y Evolution Gaming. Podrás jugar a tragamonedas clásicas, juegos de mesa y al casino en vivo con crupieres reales."}',
             'value_fr' => '{"0":"Le casino de 20BET se trouve dans une section distincte, regroupant des milliers de jeux provenant de fournisseurs tels que NetEnt, Microgaming, Play’n GO et Evolution Gaming. Vous pouvez jouer aux machines à sous classiques, aux jeux de table et au casino en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"O cassino da 20BET está localizado em uma seção separada, reunindo milhares de jogos de provedores como NetEnt, Microgaming, Play’n GO e Evolution Gaming. Você poderá jogar em slots clássicos, jogos de mesa e no cassino ao vivo com dealers reais."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In the live section, roulette, blackjack, baccarat, and poker with professional dealers are available. You also have a wide selection of jackpot slots, which give you the chance to win significant prizes."}',
             'value_es' => '{"0":"En la sección en vivo están disponibles la ruleta, el blackjack, el bacará y el póker con crupieres profesionales. También tienes a tu disposición una gran variedad de tragamonedas con jackpots, que ofrecen la posibilidad de obtener premios importantes."}',
             'value_fr' => '{"0":"Dans la section live, la roulette, le blackjack, le baccarat et le poker avec des croupiers professionnels sont disponibles. Vous avez également un large choix de machines à sous à jackpot, qui offrent la possibilité de gains importants."}',
             'value_pt' => '{"0":"Na seção ao vivo estão disponíveis roleta, blackjack, bacará e pôquer com dealers profissionais. Além disso, há uma grande variedade de slots com jackpots, que oferecem a chance de ganhos significativos."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers quite solid odds, especially when compared to major international bookmakers. For example, in Champions League matches, the odds on the favorite are usually around 1.50, while for the underdog you can see 7.00–8.50. In top football leagues, evenly matched teams often have odds of about 2.60 on each side and 3.30–3.40 for a draw."}',
             'value_es' => '{"0":"20BET ofrece cuotas bastante buenas, especialmente si se comparan con las de las grandes casas de apuestas internacionales. Por ejemplo, en los partidos de la Liga de Campeones, las cuotas para el favorito suelen estar alrededor de 1.50, mientras que para el no favorito se pueden ver entre 7.00 y 8.50. En las principales ligas de fútbol, para equipos de nivel similar, a menudo se ofrecen cuotas de aproximadamente 2.60 para cada lado y 3.30–3.40 para el empate."}',
             'value_fr' => '{"0":"20BET propose des cotes assez intéressantes, surtout si on les compare avec celles des grands bookmakers internationaux. Par exemple, lors des matchs de Ligue des Champions, les cotes pour le favori se situent généralement autour de 1.50, tandis que pour l’outsider elles peuvent aller de 7.00 à 8.50. Dans les principales ligues de football, pour des équipes de niveau équivalent, on retrouve souvent des cotes d’environ 2.60 de chaque côté et 3.30–3.40 pour le match nul."}',
             'value_pt' => '{"0":"A 20BET oferece odds bastante boas, especialmente em comparação com as grandes casas de apostas internacionais. Por exemplo, nos jogos da Liga dos Campeões, as odds para o favorito geralmente ficam em torno de 1.50, enquanto para o azarão podem variar entre 7.00 e 8.50. Nas principais ligas de futebol, para equipes de nível semelhante, muitas vezes são oferecidas odds de cerca de 2.60 para cada lado e 3.30–3.40 para o empate."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"For tennis matches, 20BET usually keeps the odds at around 1.85–1.90 for both players in an even contest. In basketball leagues, for example in the NBA, you can find total bets with odds of 1.92."}',
             'value_es' => '{"0":"En los partidos de tenis, 20BET suele mantener las cuotas en torno a 1.85–1.90 para ambos jugadores en un encuentro equilibrado. En las ligas de baloncesto, por ejemplo en la NBA, se pueden encontrar apuestas al total con cuotas de 1.92."}',
             'value_fr' => '{"0":"Pour les matchs de tennis, 20BET maintient généralement les cotes autour de 1.85–1.90 pour les deux joueurs dans une rencontre équilibrée. Dans les ligues de basketball, par exemple en NBA, on peut trouver des paris sur le total avec des cotes de 1.92."}',
             'value_pt' => '{"0":"Para partidas de tênis, a 20BET normalmente mantém as odds em torno de 1.85–1.90 para ambos os jogadores em um confronto equilibrado. Nas ligas de basquete, por exemplo na NBA, é possível encontrar apostas em totais com odds de 1.92."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"As for limits, they depend on the popularity of the event. On key football matches you can place large sums, while on less known tournaments the maximum stakes are more restricted. The minimum stake can start from just a few cents, for instance."}',
             'value_es' => '{"0":"En cuanto a los límites, dependen de la popularidad del evento. En los partidos de fútbol más importantes se pueden apostar grandes sumas, mientras que en torneos menos conocidos las apuestas máximas están más limitadas. La apuesta mínima puede comenzar desde solo unos pocos céntimos, por ejemplo."}',
             'value_fr' => '{"0":"En ce qui concerne les limites, elles dépendent de la popularité de l’événement. Sur les matchs de football majeurs, on peut miser de grosses sommes, tandis que pour les tournois moins connus les mises maximales sont plus restreintes. La mise minimale peut commencer à seulement quelques centimes, par exemple."}',
             'value_pt' => '{"0":"Quanto aos limites, eles dependem da popularidade do evento. Em jogos de futebol importantes é possível apostar grandes quantias, enquanto em torneios menos conhecidos as apostas máximas são mais restritas. A aposta mínima pode começar a partir de apenas alguns centavos, por exemplo."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"For top football matches, you can find over 500 betting options. You will be able to bet on handicap, totals, number of corners, cards, or individual player statistics. In basketball, bets are available on individual quarters and player performance, while in tennis you can bet on games and sets. For esports, you can place bets on the exact map score or a win at a certain stage."}',
             'value_es' => '{"0":"En los partidos de fútbol más importantes se pueden encontrar más de 500 opciones de apuesta. Podrá jugar al hándicap, al total, al número de saques de esquina, tarjetas o a la estadística individual de los jugadores. En baloncesto se ofrecen apuestas por cuartos y por el rendimiento de los jugadores, mientras que en tenis es posible apostar a juegos y sets. En los deportes electrónicos están disponibles apuestas al marcador exacto de los mapas o a la victoria en una fase determinada."}',
             'value_fr' => '{"0":"Pour les grands matchs de football, il est possible de trouver plus de 500 options de paris. Vous pourrez parier sur le handicap, le total, le nombre de corners, de cartons ou encore sur les statistiques individuelles des joueurs. Au basketball, des paris sont proposés sur les quarts-temps et les performances des joueurs, tandis qu’au tennis, il est possible de parier sur les jeux et les sets. Dans l’esport, vous pouvez miser sur le score exact des cartes ou sur une victoire à un stade précis."}',
             'value_pt' => '{"0":"Nos principais jogos de futebol é possível encontrar mais de 500 opções de apostas. Você poderá apostar no handicap, no total, no número de escanteios, cartões ou nas estatísticas individuais dos jogadores. No basquete, estão disponíveis apostas em quartos específicos e no desempenho dos jogadores, enquanto no tênis é possível apostar em games e sets. Nos eSports, é possível apostar no placar exato dos mapas ou na vitória em uma fase específica."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Events and odds on the site are updated almost instantly, allowing players to catch profitable moments. At the same time, it should be noted that live video streams are still scarce, and in most cases only graphic match centers and statistics are available."}',
             'value_es' => '{"0":"Los eventos y las cuotas en el sitio se actualizan prácticamente de forma instantánea, lo que permite aprovechar momentos favorables. Al mismo tiempo, cabe señalar que las retransmisiones en vivo aún son escasas y, en la mayoría de los casos, solo están disponibles los centros de partidos gráficos y las estadísticas."}',
             'value_fr' => '{"0":"Les événements et les cotes sur le site sont mis à jour presque instantanément, ce qui permet de saisir des opportunités avantageuses. En revanche, il convient de noter que les retransmissions vidéo en direct sont encore rares et que, dans la plupart des cas, seuls des centres de match graphiques et des statistiques sont disponibles."}',
             'value_pt' => '{"0":"Os eventos e as odds no site são atualizados praticamente de forma instantânea, permitindo aproveitar momentos favoráveis. Ao mesmo tempo, é importante destacar que as transmissões de vídeo ao vivo ainda são escassas e, na maioria dos casos, apenas os centros gráficos de partidas e as estatísticas estão disponíveis."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Despite this, the live section is convenient, bets are placed in just two clicks, and changes in the bet slip occur without lags."}',
             'value_es' => '{"0":"A pesar de ello, la sección en vivo es cómoda, las apuestas se realizan en dos clics y los cambios en el cupón se procesan sin demoras."}',
             'value_fr' => '{"0":"Malgré cela, la section live est pratique, les paris se placent en deux clics et les modifications du coupon s’effectuent sans ralentissement."}',
             'value_pt' => '{"0":"Apesar disso, a seção ao vivo é prática, as apostas são feitas em apenas dois cliques e as alterações no bilhete ocorrem sem travamentos."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"User security at 20BET is ensured through SSL encryption, which guarantees the protection of personal and financial transactions. The company operates under a Curacao license, which is a standard for international operators."}',
             'value_es' => '{"0":"La seguridad de los usuarios en 20BET se garantiza mediante cifrado SSL, lo que protege las transacciones personales y financieras. La empresa opera bajo licencia de Curazao, que es un estándar para los operadores internacionales."}',
             'value_fr' => '{"0":"La sécurité des utilisateurs sur 20BET est assurée grâce au chiffrement SSL, qui garantit la protection des transactions personnelles et financières. La société opère sous licence de Curaçao, ce qui constitue une norme pour les opérateurs internationaux."}',
             'value_pt' => '{"0":"A segurança dos usuários na 20BET é garantida através da criptografia SSL, que protege as transações pessoais e financeiras. A empresa opera sob licença de Curaçao, um padrão para operadores internacionais."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Account verification is mandatory for withdrawing large amounts, and the process takes between one and two days. 20BET adheres to responsible gaming principles, so you have the option to set limits on deposits and sessions."}',
             'value_es' => '{"0":"La verificación de la cuenta es obligatoria para retirar grandes sumas, y el proceso tarda entre uno y dos días. 20BET sigue los principios de juego responsable, por lo que tienes la opción de establecer límites en depósitos y sesiones."}',
             'value_fr' => '{"0":"La vérification du compte est obligatoire pour retirer des sommes importantes, et le processus prend entre un et deux jours. 20BET respecte les principes de jeu responsable, vous offrant ainsi la possibilité de définir des limites sur les dépôts et les sessions."}',
             'value_pt' => '{"0":"A verificação da conta é obrigatória para retirar valores significativos, e o processo leva de um a dois dias. A 20BET segue os princípios do jogo responsável, oferecendo a possibilidade de definir limites em depósitos e sessões."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Financial operations at 20BET are organized quite conveniently. You can top up your account using Mastercard and VISA bank cards, e-wallets, and cryptocurrencies, including Bitcoin, Ethereum, and Litecoin."}',
             'value_es' => '{"0":"Las operaciones financieras en 20BET están organizadas de manera bastante cómoda. Puedes recargar tu cuenta con tarjetas bancarias Mastercard y VISA, monederos electrónicos y criptomonedas, incluyendo Bitcoin, Ethereum y Litecoin."}',
             'value_fr' => '{"0":"Les opérations financières sur 20BET sont organisées de manière assez pratique. Vous pouvez créditer votre compte avec des cartes bancaires Mastercard et VISA, des portefeuilles électroniques et des cryptomonnaies, y compris Bitcoin, Ethereum et Litecoin."}',
             'value_pt' => '{"0":"As operações financeiras na 20BET são organizadas de forma bastante conveniente. Você pode adicionar fundos à sua conta usando cartões bancários Mastercard e VISA, carteiras eletrônicas e criptomoedas, incluindo Bitcoin, Ethereum e Litecoin."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are credited almost instantly, while withdrawals usually take from a few hours up to one or two days, depending on the method and amount. The minimum deposit is around 10 euros or the equivalent in another currency, and the minimum withdrawal starts at 20 euros. There are no fees from the bookmaker, but the payment service may charge a commission."}',
             'value_es' => '{"0":"Los depósitos se acreditan casi al instante, mientras que los retiros generalmente tardan desde unas pocas horas hasta uno o dos días, dependiendo del método y del monto. El depósito mínimo es de aproximadamente 10 euros o el equivalente en otra moneda, y el retiro mínimo comienza en 20 euros. No hay comisiones por parte del operador, pero el servicio de pago puede cobrar una tarifa."}',
             'value_fr' => '{"0":"Les dépôts sont crédités presque instantanément, tandis que les retraits prennent généralement de quelques heures à un ou deux jours, selon la méthode et le montant. Le dépôt minimum est d’environ 10 euros ou l’équivalent dans une autre devise, et le retrait minimum commence à 20 euros. Il n’y a pas de frais de la part du bookmaker, mais le service de paiement peut appliquer une commission."}',
             'value_pt' => '{"0":"Os depósitos são creditados quase instantaneamente, enquanto os saques geralmente levam de algumas horas a um ou dois dias, dependendo do método e do valor. O depósito mínimo é de cerca de 10 euros ou o equivalente em outra moeda, e o saque mínimo começa em 20 euros. Não há taxas cobradas pelo bookmaker, mas o serviço de pagamento pode cobrar uma comissão."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 27
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET support service operates 24/7 and is available via online chat or email. If you need to resolve an issue quickly, it is better to use the chat. Email is used for more complex cases, such as verifying your identity."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 20BET funciona las 24 horas y está disponible a través de chat en línea o correo electrónico. Si necesitas resolver un problema rápidamente, es mejor usar el chat. El correo electrónico se utiliza para casos más complejos, como la verificación de tu identidad."}',
             'value_fr' => '{"0":"Le service client de 20BET fonctionne 24h/24 et est disponible via le chat en ligne ou par e-mail. Si vous devez résoudre un problème rapidement, il est préférable d’utiliser le chat. L’e-mail est utilisé pour les cas plus complexes, comme la vérification de votre identité."}',
             'value_pt' => '{"0":"O serviço de suporte da 20BET funciona 24 horas por dia e está disponível via chat online ou e-mail. Se você precisa resolver um problema rapidamente, é melhor usar o chat. O e-mail é usado para casos mais complexos, como a verificação da sua identidade."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events",
                                 "1":"Casino with thousands of games",
                                 "2":"User-friendly interface",
                                 "3":"Cryptocurrency support",
                                 "4":"Responsive customer service"},
                             "1":
                                {"0":"Limited number of live streams",
                                 "1":"Low betting limits for some markets"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos deportivos",
                                 "1":"Casino con miles de juegos",
                                 "2":"Interfaz fácil de usar",
                                 "3":"Soporte de criptomonedas",
                                 "4":"Servicio de atención al cliente ágil"},
                             "1":
                                {"0":"Número limitado de transmisiones en vivo",
                                 "1":"Límites de apuesta bajos en algunos mercados"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs",
                                 "1":"Casino avec des milliers de jeux",
                                 "2":"Interface conviviale",
                                 "3":"Support des cryptomonnaies",
                                 "4":"Service client réactif"},
                             "1":
                                {"0":"Nombre limité de retransmissions en direct",
                                 "1":"Limites de mises faibles pour certains marchés"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos",
                                 "1":"Cassino com milhares de jogos",
                                 "2":"Interface fácil de usar",
                                 "3":"Suporte a criptomoedas",
                                 "4":"Atendimento ao cliente rápido"},
                             "1":
                                {"0":"Número limitado de transmissões ao vivo",
                                 "1":"Limites de apostas baixos para alguns mercados"}
                             }',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 34
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a 20BET mobile app?"}',
             'value_es' => '{"0":"¿Existe una aplicación móvil de 20BET?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile 20BET ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel da 20BET?"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 35
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The mobile app is available for Android on the official website, while for iOS a web app is offered. There is also a mobile version of the site."}',
             'value_es' => '{"0":"La aplicación móvil está disponible para Android en el sitio web oficial, mientras que para iOS se ofrece una aplicación web. También hay una versión móvil del sitio."}',
             'value_fr' => '{"0":"L’application mobile est disponible pour Android sur le site officiel, tandis que pour iOS, une application web est proposée. Il existe également une version mobile du site."}',
             'value_pt' => '{"0":"O aplicativo móvel está disponível para Android no site oficial, enquanto para iOS é oferecido um aplicativo web. Também há uma versão móvel do site."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 36
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda en retirarse el dinero?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para retirar fundos?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 37
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, withdrawals are processed within a few hours. However, if a bank card is used, the process can take up to two days. It all depends on the chosen payment method."}',
             'value_es' => '{"0":"En la mayoría de los casos, los retiros se procesan en unas pocas horas. Sin embargo, si se utiliza una tarjeta bancaria, el proceso puede tardar hasta dos días. Todo depende del método de pago elegido."}',
             'value_fr' => '{"0":"Dans la plupart des cas, les retraits sont traités en quelques heures. Toutefois, si une carte bancaire est utilisée, le processus peut prendre jusqu’à deux jours. Tout dépend du mode de paiement choisi."}',
             'value_pt' => '{"0":"Na maioria dos casos, os saques são processados em poucas horas. No entanto, se for utilizada um cartão bancário, o processo pode levar até dois dias. Tudo depende do método de pagamento escolhido."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 38
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"How secure is it to use 20BET?"}',
             'value_es' => '{"0":"¿Qué tan seguro es usar 20BET?"}',
             'value_fr' => '{"0":"Quelle est la sécurité de l’utilisation de 20BET ?"}',
             'value_pt' => '{"0":"Quão seguro é usar a 20BET?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 39
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The platform protects data using SSL encryption and operates under an international Curacao license. In addition, account verification provides an extra level of security for large withdrawals."}',
             'value_es' => '{"0":"La plataforma protege los datos mediante cifrado SSL y opera bajo una licencia internacional de Curazao. Además, la verificación de la cuenta proporciona un nivel adicional de seguridad para los retiros grandes."}',
             'value_fr' => '{"0":"La plateforme protège les données grâce au chiffrement SSL et fonctionne sous licence internationale de Curaçao. De plus, la vérification du compte offre un niveau de sécurité supplémentaire pour les gros retraits."}',
             'value_pt' => '{"0":"A plataforma protege os dados por meio de criptografia SSL e opera sob uma licença internacional de Curaçao. Além disso, a verificação da conta fornece um nível extra de segurança para saques de grandes valores."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 40
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can I deposit funds using cryptocurrency?"}',
             'value_es' => '{"0":"¿Se puede recargar la cuenta con criptomonedas?"}',
             'value_fr' => '{"0":"Peut-on recharger le compte avec des cryptomonnaies ?"}',
             'value_pt' => '{"0":"É possível depositar fundos usando criptomoedas?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 41
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the bookmaker supports Bitcoin, Ethereum, Litecoin, and other popular cryptocurrencies."}',
             'value_es' => '{"0":"Sí, la casa de apuestas admite Bitcoin, Ethereum, Litecoin y otras criptomonedas populares."}',
             'value_fr' => '{"0":"Oui, le bookmaker prend en charge le Bitcoin, l’Ethereum, le Litecoin et d’autres cryptomonnaies populaires."}',
             'value_pt' => '{"0":"Sim, o bookmaker suporta Bitcoin, Ethereum, Litecoin e outras criptomoedas populares."}',
             'order' => 41
            ]
        );
    }
}
