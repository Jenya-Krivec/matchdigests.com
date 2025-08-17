<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
             'value_en' => '{"0":"888starz Review"}',
             'value_es' => '{"0":"Reseña de 888starz"}',
             'value_fr' => '{"0":"Avis sur 888starz"}',
             'value_pt' => '{"0":"Análise da 888starz"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz is a platform that quickly caught the attention of sports betting enthusiasts thanks to its combination of a classic betting approach and modern solutions. The bookmaker operates on the international market and offers both sports betting and a wide selection of casino games."}',
             'value_es' => '{"0":"888starz es una plataforma que rápidamente llamó la atención de los aficionados a las apuestas deportivas gracias a la combinación de un enfoque clásico de apuestas y soluciones modernas. La casa de apuestas opera en el mercado internacional y ofrece tanto apuestas deportivas como una amplia selección de juegos de azar."}',
             'value_fr' => '{"0":"888starz est une plateforme qui a rapidement attiré l’attention des amateurs de paris sportifs grâce à sa combinaison d’une approche classique des paris et de solutions modernes. Le bookmaker opère sur le marché international et propose à la fois des paris sportifs et un large choix de jeux de casino."}',
             'value_pt' => '{"0":"888starz é uma plataforma que rapidamente chamou a atenção dos fãs de apostas esportivas graças à combinação de uma abordagem clássica de apostas com soluções modernas. A casa de apostas atua no mercado internacional e oferece tanto apostas esportivas quanto uma ampla seleção de jogos de cassino."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"An important factor for users is that the site is aimed at a multilingual audience and supports various currencies, including cryptocurrencies, which allows players to participate from different countries. The service strives to combine ease of use with extensive functionality, and this strategy is what sets it apart from more well-known brands."}',
             'value_es' => '{"0":"Un factor importante para los usuarios es que el sitio está orientado a una audiencia multilingüe y admite diversas monedas, incluidas las criptomonedas, lo que permite jugar desde distintos países. El servicio busca combinar la sencillez de uso con una amplia funcionalidad, y precisamente esta estrategia lo distingue de marcas más conocidas."}',
             'value_fr' => '{"0":"Un facteur important pour les utilisateurs est que le site s’adresse à un public multilingue et prend en charge différentes devises, y compris les cryptomonnaies, ce qui permet de jouer depuis divers pays. Le service s’efforce de combiner simplicité d’utilisation et richesse fonctionnelle, et c’est précisément cette stratégie qui le distingue des marques plus connues."}',
             'value_pt' => '{"0":"Um fator importante para os usuários é que o site é direcionado a um público multilíngue e suporta várias moedas, incluindo criptomoedas, o que permite jogar em diferentes países. O serviço busca combinar facilidade de uso com ampla funcionalidade, e é justamente essa estratégia que o diferencia de marcas mais conhecidas."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In the sports betting section, 888starz offers a wide range of events. Here you can find traditional football championships and tennis tournaments as well as less popular disciplines such as floorball or cricket. Bets are available both in pre-match format and in live mode."}',
             'value_es' => '{"0":"En la sección de apuestas deportivas, 888starz ofrece una amplia gama de eventos. Aquí se pueden encontrar campeonatos tradicionales de fútbol y torneos de tenis, así como disciplinas menos populares como el floorball o el críquet. Las apuestas están disponibles tanto en formato pre-match como en modo en vivo."}',
             'value_fr' => '{"0":"Dans la section des paris sportifs, 888starz propose une large palette d’événements. On y retrouve les championnats traditionnels de football et les tournois de tennis ainsi que des disciplines moins populaires comme le floorball ou le cricket. Les paris sont disponibles aussi bien en pré-match qu’en direct."}',
             'value_pt' => '{"0":"Na seção de apostas esportivas, a 888starz oferece uma ampla variedade de eventos. É possível encontrar campeonatos tradicionais de futebol e torneios de tênis, assim como modalidades menos populares, como floorball ou críquete. As apostas estão disponíveis tanto no formato pré-jogo quanto ao vivo."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that the bookmaker also supports esports, which have been growing rapidly in recent years. Fans of cyber disciplines can place bets on Dota 2, CS:GO, and League of Legends. The interface is quite user-friendly, so even new players can quickly find the events they need."}',
             'value_es' => '{"0":"Cabe destacar que la casa de apuestas también incluye los deportes electrónicos, que han crecido de manera significativa en los últimos años. Los aficionados a estas disciplinas pueden apostar en Dota 2, CS:GO y League of Legends. La interfaz resulta bastante intuitiva, por lo que incluso los jugadores nuevos encuentran rápidamente los eventos que buscan."}',
             'value_fr' => '{"0":"Il convient de souligner que le bookmaker prend également en charge l’e-sport, qui connaît une croissance rapide ces dernières années. Les amateurs de disciplines électroniques peuvent parier sur Dota 2, CS:GO et League of Legends. L’interface est conçue de manière pratique, de sorte que même les nouveaux joueurs trouvent rapidement les événements qu’ils recherchent."}',
             'value_pt' => '{"0":"Vale destacar que a casa de apostas também dá suporte aos e-sports, que vêm crescendo de forma acelerada nos últimos anos. Os fãs dessas modalidades podem apostar em Dota 2, CS:GO e League of Legends. A interface é bastante prática, permitindo que até mesmo os novos usuários encontrem rapidamente os eventos desejados."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Below, in the table, you can see the main sports on which you will have the opportunity to place bets:"}',
             'value_es' => '{"0":"A continuación, en la tabla, se presentan los principales deportes en los que tendrá la posibilidad de apostar:"}',
             'value_fr' => '{"0":"Ci-dessous, dans le tableau, figurent les principaux sports sur lesquels vous aurez la possibilité de parier :"}',
             'value_pt' => '{"0":"A seguir, na tabela, estão apresentados os principais esportes nos quais você terá a oportunidade de apostar:"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In addition to betting, 888starz has a powerful casino section that includes thousands of games. Here you will find both classic slots and modern machines. There is also a section of table games where users can play roulette, blackjack, or poker."}',
             'value_es' => '{"0":"Además de las apuestas, 888starz cuenta con una potente sección de casino que incluye miles de juegos. Aquí se presentan tanto las tragamonedas clásicas como las más modernas. También hay una sección de juegos de mesa, donde los usuarios pueden jugar a la ruleta, el blackjack o el póker."}',
             'value_fr' => '{"0":"En plus des paris, 888starz dispose d’une section casino très complète qui comprend des milliers de jeux. On y retrouve aussi bien des machines à sous classiques que des slots modernes. Une section de jeux de table est également disponible, où les utilisateurs peuvent jouer à la roulette, au blackjack ou au poker."}',
             'value_pt' => '{"0":"Além das apostas, o 888starz possui uma seção de cassino robusta que inclui milhares de jogos. Estão disponíveis tanto os caça-níqueis clássicos quanto os mais modernos. Há também uma seção de jogos de mesa, onde os usuários podem jogar roleta, blackjack ou pôquer."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Live games with real dealers are also available, streamed in high quality. The software is provided by well-known developers such as Pragmatic Play, Evolution Gaming, and others. The casino is integrated into the platform without additional transitions, so users can easily switch between sports betting and slots."}',
             'value_es' => '{"0":"También están disponibles los juegos en vivo con crupieres reales, transmitidos en alta calidad. El software es suministrado por desarrolladores reconocidos como Pragmatic Play, Evolution Gaming y otros. El casino está integrado en la plataforma sin transiciones adicionales, por lo que el usuario puede cambiar fácilmente entre apuestas deportivas y tragamonedas."}',
             'value_fr' => '{"0":"Des jeux en direct avec de vrais croupiers sont également accessibles, diffusés en haute qualité. Les logiciels sont fournis par des développeurs renommés tels que Pragmatic Play, Evolution Gaming et d’autres. Le casino est intégré à la plateforme sans transitions supplémentaires, ce qui permet aux utilisateurs de passer facilement des paris sportifs aux machines à sous."}',
             'value_pt' => '{"0":"Também estão disponíveis os jogos ao vivo com dealers reais, transmitidos em alta qualidade. O software é fornecido por desenvolvedores renomados como Pragmatic Play, Evolution Gaming e outros. O cassino é integrado à plataforma sem transições adicionais, permitindo que o usuário alterne facilmente entre apostas esportivas e caça-níqueis."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"One of the strong points of 888starz is its odds, which stand out compared to other bookmakers. For example, in top football matches of the English Premier League, odds on the favorite often start at 1.95, while other bookmakers may offer 1.85. In the long run, this difference has a significant impact on the profitability of bets."}',
             'value_es' => '{"0":"Uno de los puntos fuertes de 888starz son sus cuotas, que destacan frente a otras casas de apuestas. Por ejemplo, en los principales partidos de fútbol de la Premier League inglesa, las cuotas para el favorito suelen comenzar en 1.95, mientras que otros operadores ofrecen 1.85. A largo plazo, esta diferencia influye de manera significativa en la rentabilidad de las apuestas."}',
             'value_fr' => '{"0":"Un des points forts de 888starz réside dans ses cotes, qui se distinguent favorablement de celles des autres bookmakers. Par exemple, pour les grands matchs de football de la Premier League anglaise, les cotes pour le favori commencent souvent à 1.95, alors que d’autres opérateurs proposent 1.85. À long terme, cette différence a un impact considérable sur la rentabilité des paris."}',
             'value_pt' => '{"0":"Um dos pontos fortes da 888starz são as suas odds, que se destacam em relação a outras casas de apostas. Por exemplo, em jogos de futebol de topo da Premier League inglesa, as odds para o favorito muitas vezes começam em 1.95, enquanto outros operadores oferecem 1.85. A longo prazo, essa diferença tem um impacto significativo na rentabilidade das apostas."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The same applies to tennis. For a top-ranked player in an ATP match, odds can be around 1.40, while on other platforms they might be 1.35."}',
             'value_es' => '{"0":"Lo mismo ocurre en el tenis. Para la victoria de un jugador top en un partido de la ATP, las cuotas pueden estar en torno a 1.40, mientras que en otras plataformas son de 1.35."}',
             'value_fr' => '{"0":"Il en va de même pour le tennis. Sur la victoire d’un joueur du top mondial lors d’un match ATP, on peut trouver des cotes de 1.40, tandis que sur d’autres plateformes elles sont de 1.35."}',
             'value_pt' => '{"0":"O mesmo acontece no ténis. Para a vitória de um jogador do topo no ATP, as odds podem rondar 1.40, enquanto noutras plataformas ficam em 1.35."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"As for limits, large bets are allowed on popular events, whereas on niche disciplines, such as esports or lesser-known leagues, the maximum stakes are lower. In any case, 888starz creates conditions where players can find the most favorable odds and make the most of them in their strategies."}',
             'value_es' => '{"0":"En cuanto a los límites, en los eventos populares se permiten apuestas bastante altas, mientras que en disciplinas de nicho, como los eSports o ligas menos conocidas, las cantidades máximas son menores. En cualquier caso, 888starz ofrece condiciones que permiten a los jugadores encontrar los mejores valores de cuotas y aprovecharlos al máximo en sus estrategias."}',
             'value_fr' => '{"0":"En ce qui concerne les limites, les événements populaires permettent des mises importantes, tandis que pour les disciplines de niche, comme l’eSport ou les ligues moins connues, les montants maximaux sont plus bas. Quoi qu’il en soit, 888starz met en place des conditions permettant aux joueurs de trouver les meilleures cotes et de les exploiter pleinement dans leurs stratégies."}',
             'value_pt' => '{"0":"Quanto aos limites, é possível realizar apostas elevadas em eventos populares, enquanto em disciplinas de nicho, como eSports ou ligas menos conhecidas, os montantes máximos são mais baixos. Em qualquer caso, a 888starz cria condições que permitem ao jogador encontrar os melhores valores de odds e aproveitá-los ao máximo nas suas estratégias."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz can boast a large number of betting options for each event. For example, in a football match, users can choose not only bets on the outcome, totals, or handicaps, but also individual player statistics, corner kicks, the number of yellow cards, and even scenarios of how the game will develop in each half."}',
             'value_es' => '{"0":"888starz puede presumir de una gran cantidad de opciones de apuestas para cada evento. Por ejemplo, en un partido de fútbol, los usuarios pueden elegir no solo apuestas al resultado, totales o hándicaps, sino también a estadísticas individuales de los jugadores, saques de esquina, número de tarjetas amarillas e incluso escenarios de cómo se desarrollará el partido en cada tiempo."}',
             'value_fr' => '{"0":"888starz peut se vanter d’un grand nombre d’options de paris pour chaque événement. Par exemple, lors d’un match de football, les utilisateurs peuvent choisir non seulement des paris sur le résultat, les totaux ou les handicaps, mais aussi sur les statistiques individuelles des joueurs, les corners, le nombre de cartons jaunes et même les scénarios du déroulement du match par mi-temps."}',
             'value_pt' => '{"0":"O 888starz pode orgulhar-se de oferecer um grande número de opções de apostas para cada evento. Por exemplo, num jogo de futebol, os utilizadores podem escolher não apenas apostas no resultado, totais ou handicaps, mas também em estatísticas individuais dos jogadores, cantos, número de cartões amarelos e até cenários do desenvolvimento do jogo em cada tempo."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"A similar situation can be found in other sports. For instance, in tennis there are bets on individual games, while in basketball you can bet on the outcome of a quarter. This allows for deeper match analysis and the application of more targeted approaches to predictions."}',
             'value_es' => '{"0":"Una situación similar ocurre en otros deportes. Por ejemplo, en el tenis existen apuestas a juegos individuales, mientras que en el baloncesto se puede apostar al resultado de un cuarto. Esto permite un análisis más profundo de los partidos y la aplicación de enfoques más específicos en los pronósticos."}',
             'value_fr' => '{"0":"Une situation similaire existe dans d’autres sports. Par exemple, au tennis, il est possible de parier sur des jeux individuels, tandis qu’au basket-ball on peut parier sur le résultat d’un quart-temps. Cela permet une analyse plus approfondie des matchs et l’application d’approches plus ciblées dans les pronostics."}',
             'value_pt' => '{"0":"Uma situação semelhante ocorre em outros desportos. Por exemplo, no ténis existem apostas em jogos individuais, enquanto no basquetebol é possível apostar no resultado de um período. Isso permite uma análise mais aprofundada das partidas e a aplicação de abordagens mais direcionadas às previsões."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Live mode is one of the strong points of 888starz. The platform offers a detailed breakdown of events in real time, with instant odds updates. For some matches, live streams are available, allowing users to watch the game and place bets at the same time."}',
             'value_es' => '{"0":"El modo en vivo es uno de los puntos fuertes de 888starz. La plataforma ofrece un desglose detallado de los eventos en tiempo real, con actualizaciones instantáneas de las cuotas. En algunos partidos hay transmisiones en directo disponibles, lo que permite ver el juego y apostar al mismo tiempo."}',
             'value_fr' => '{"0":"Le mode en direct est l’un des points forts de 888starz. La plateforme propose un découpage détaillé des événements en temps réel, avec une mise à jour instantanée des cotes. Pour certains matchs, des retransmissions en direct sont disponibles, ce qui permet de regarder le jeu tout en plaçant des paris."}',
             'value_pt' => '{"0":"O modo ao vivo é um dos pontos fortes do 888starz. A plataforma oferece um detalhamento completo dos eventos em tempo real, com atualização instantânea das odds. Em algumas partidas há transmissões ao vivo disponíveis, permitindo assistir ao jogo e apostar ao mesmo tempo."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Even where streams are not available, users get graphical representations of the match flow and statistics. This greatly simplifies decision-making during the game. Live betting is suitable both for players who like to improvise and for those who prefer to analyze events in real time."}',
             'value_es' => '{"0":"Incluso cuando no hay transmisiones, los usuarios reciben esquemas gráficos del desarrollo del partido y estadísticas. Esto facilita mucho la toma de decisiones durante el juego. Las apuestas en vivo son adecuadas tanto para los jugadores que disfrutan improvisando como para aquellos que analizan los eventos en tiempo real."}',
             'value_fr' => '{"0":"Même lorsqu’il n’y a pas de retransmission, les utilisateurs bénéficient de schémas graphiques du déroulement du match et de statistiques. Cela facilite grandement la prise de décision pendant la rencontre. Les paris en direct conviennent aussi bien aux joueurs qui aiment improviser qu’à ceux qui préfèrent analyser les événements en temps réel."}',
             'value_pt' => '{"0":"Mesmo quando não há transmissões, os utilizadores recebem representações gráficas do desenrolar do jogo e estatísticas. Isso facilita bastante a tomada de decisões durante a partida. As apostas ao vivo são adequadas tanto para jogadores que gostam de improvisar como para aqueles que preferem analisar os eventos em tempo real."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For most users, security is a top priority, and 888starz strives to meet these expectations. The site uses modern SSL encryption protocols to protect personal data and financial transactions."}',
             'value_es' => '{"0":"Para la mayoría de los usuarios, la seguridad es una prioridad, y 888starz intenta cumplir con estas expectativas. El sitio utiliza modernos protocolos de encriptación SSL que protegen los datos personales y las transacciones financieras."}',
             'value_fr' => '{"0":"Pour la plupart des utilisateurs, la sécurité est une priorité absolue, et 888starz s’efforce de répondre à ces attentes. Le site utilise des protocoles de cryptage SSL modernes qui protègent les données personnelles et les transactions financières."}',
             'value_pt' => '{"0":"Para a maioria dos utilizadores, a segurança é uma prioridade, e a 888starz procura corresponder a essas expectativas. O site utiliza protocolos modernos de encriptação SSL que protegem os dados pessoais e as transações financeiras."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The platform holds a license issued in Curaçao, which confirms the legality of its operations. It is also worth noting that account access can be additionally secured through two-factor authentication."}',
             'value_es' => '{"0":"La plataforma cuenta con una licencia emitida en Curazao, lo que confirma la legalidad de sus operaciones. También cabe destacar que el acceso a las cuentas puede protegerse adicionalmente mediante la autenticación de dos factores."}',
             'value_fr' => '{"0":"La plateforme dispose d’une licence délivrée à Curaçao, ce qui confirme la légalité de ses activités. Il convient également de noter que l’accès aux comptes peut être renforcé grâce à l’authentification à deux facteurs."}',
             'value_pt' => '{"0":"A plataforma possui uma licença emitida em Curaçao, o que confirma a legalidade das suas operações. Vale ainda destacar que o acesso às contas pode ser adicionalmente protegido através da autenticação de dois fatores."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Financial transactions on the platform are organized quite conveniently. 888starz supports a wide range of deposit and withdrawal methods. You can use Mastercard and VISA bank cards, e-wallets, and cryptocurrencies such as Bitcoin, Ethereum, and Litecoin. The latter option is particularly appealing for users who value anonymity and transaction speed."}',
             'value_es' => '{"0":"Las operaciones financieras en la plataforma están organizadas de manera bastante cómoda. 888starz admite una gran variedad de métodos para depositar y retirar fondos. Se pueden utilizar tarjetas bancarias Mastercard y VISA, monederos electrónicos y criptomonedas como Bitcoin, Ethereum y Litecoin. Esta última opción resulta especialmente atractiva para los usuarios que valoran el anonimato y la rapidez en las transacciones."}',
             'value_fr' => '{"0":"Les opérations financières sur la plateforme sont organisées de manière assez pratique. 888starz prend en charge un grand nombre de méthodes de dépôt et de retrait. Vous pouvez utiliser des cartes bancaires Mastercard et VISA, des portefeuilles électroniques ainsi que des cryptomonnaies comme Bitcoin, Ethereum et Litecoin. Cette dernière option est particulièrement intéressante pour les utilisateurs qui privilégient l’anonymat et la rapidité des transactions."}',
             'value_pt' => '{"0":"As operações financeiras na plataforma são organizadas de forma bastante prática. A 888starz oferece uma ampla variedade de métodos para depósitos e levantamentos. É possível utilizar cartões bancários Mastercard e VISA, carteiras eletrónicas e criptomoedas como Bitcoin, Ethereum e Litecoin. Esta última opção é especialmente atrativa para utilizadores que valorizam o anonimato e a rapidez das transações."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals usually take from a few minutes to up to a day, depending on the chosen method and amount. The bookmaker does not charge additional fees for most transactions, although fees may depend on the specific payment provider."}',
             'value_es' => '{"0":"Los retiros suelen tardar desde unos minutos hasta un día, según el método elegido y la cantidad. La casa de apuestas no cobra comisiones adicionales en la mayoría de las transacciones, aunque la comisión puede depender del proveedor de pago específico."}',
             'value_fr' => '{"0":"Les retraits prennent généralement de quelques minutes à une journée, selon la méthode choisie et le montant. Le bookmaker ne facture pas de frais supplémentaires sur la plupart des transactions, bien que des frais puissent dépendre du prestataire de paiement spécifique."}',
             'value_pt' => '{"0":"Os levantamentos geralmente demoram desde alguns minutos até um dia, dependendo do método escolhido e do montante. A casa de apostas não cobra comissões adicionais na maioria das transações, embora a taxa possa depender do fornecedor de pagamento específico."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
                'order' => 30
            ],
            ['key' => '888starz',
                'bookmaker_id' => 8,
                'component' => 'quick_info',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
                'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Customer support at 888starz operates 24/7, which is important for players from different time zones. You can get in touch via online chat, email, or a special form on the website."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 888starz funciona las 24 horas, lo cual es importante para los jugadores de diferentes zonas horarias. Se puede contactar a través del chat en línea, correo electrónico o un formulario especial en el sitio web."}',
             'value_fr' => '{"0":"Le service client de 888starz est disponible 24h/24 et 7j/7, ce qui est important pour les joueurs de différents fuseaux horaires. Vous pouvez les contacter via le chat en ligne, par e-mail ou via un formulaire spécial sur le site."}',
             'value_pt' => '{"0":"O suporte ao cliente da 888starz funciona 24 horas por dia, o que é importante para jogadores de diferentes fusos horários. É possível entrar em contato através do chat online, e-mail ou um formulário especial no site."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 34
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events",
                                 "1":"Powerful casino section",
                                 "2":"Cryptocurrency support",
                                 "3":"Convenient mobile interface",
                                 "4":"24/7 customer support"},
                             "1":
                                {"0":"Not always high odds",
                                 "1":"Support can be slow at times"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de eventos deportivos",
                                 "1":"Potente sección de casino",
                                 "2":"Soporte de criptomonedas",
                                 "3":"Interfaz móvil conveniente",
                                 "4":"Atención al cliente 24/7"},
                             "1":
                                {"0":"No siempre hay cuotas altas",
                                 "1":"El soporte a veces puede ser lento"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d\'événements sportifs",
                                 "1":"Section casino puissante",
                                 "2":"Support des cryptomonnaies",
                                 "3":"Interface mobile pratique",
                                 "4":"Support client 24h/24 et 7j/7"},
                             "1":
                                {"0":"Cotes pas toujours élevées",
                                 "1":"Le support peut parfois être lent"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla seleção de eventos esportivos",
                                 "1":"Seção de cassino poderosa",
                                 "2":"Suporte a criptomoedas",
                                 "3":"Interface móvel conveniente",
                                 "4":"Suporte ao cliente 24/7"},
                             "1":
                                {"0":"Odds nem sempre altas",
                                 "1":"O suporte às vezes pode ser lento"}
                             }',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 35
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 36
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Is it possible to place bets from a phone?"}',
             'value_es' => '{"0":"¿Se pueden hacer apuestas desde el teléfono?"}',
             'value_fr' => '{"0":"Est-il possible de parier depuis un téléphone ?"}',
             'value_pt' => '{"0":"É possível fazer apostas pelo telefone?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 37
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the site has a responsive mobile version that is convenient for use on smartphones and tablets, as well as mobile apps for iOS and Android."}',
             'value_es' => '{"0":"Sí, el sitio tiene una versión móvil adaptable, conveniente para usar en smartphones y tabletas, además de aplicaciones móviles para iOS y Android."}',
             'value_fr' => '{"0":"Oui, le site dispose d\'une version mobile réactive, pratique pour les smartphones et tablettes, ainsi que d\'applications mobiles pour iOS et Android."}',
             'value_pt' => '{"0":"Sim, o site possui uma versão móvel responsiva, conveniente para uso em smartphones e tablets, além de aplicativos móveis para iOS e Android."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 38
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda en retirarse el dinero?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para retirar fundos?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 39
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Depending on the method and amount, withdrawals can take from a few minutes up to 24 hours."}',
             'value_es' => '{"0":"Dependiendo del método y del monto, los retiros pueden tardar desde unos minutos hasta 24 horas."}',
             'value_fr' => '{"0":"Selon la méthode et le montant, les retraits peuvent prendre de quelques minutes à 24 heures."}',
             'value_pt' => '{"0":"Dependendo do método e do valor, os saques podem levar de alguns minutos até 24 horas."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 40
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to use the site?"}',
             'value_es' => '{"0":"¿Es seguro usar el sitio?"}',
             'value_fr' => '{"0":"Est-il sûr d’utiliser le site ?"}',
             'value_pt' => '{"0":"É seguro usar o site?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 41
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the site uses modern data protection technologies and holds a Curaçao license."}',
             'value_es' => '{"0":"Sí, el sitio utiliza tecnologías modernas de protección de datos y cuenta con licencia de Curazao."}',
             'value_fr' => '{"0":"Oui, le site utilise des technologies modernes de protection des données et possède une licence de Curaçao."}',
             'value_pt' => '{"0":"Sim, o site utiliza tecnologias modernas de proteção de dados e possui licença de Curaçao."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 42
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Does the bookmaker support cryptocurrency?"}',
             'value_es' => '{"0":"¿El bookmaker admite criptomonedas?"}',
             'value_fr' => '{"0":"Le bookmaker prend-il en charge les cryptomonnaies ?"}',
             'value_pt' => '{"0":"O bookmaker aceita criptomoedas?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 43
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 888starz allows deposits and withdrawals in popular cryptocurrencies."}',
             'value_es' => '{"0":"Sí, 888starz permite depósitos y retiros en criptomonedas populares."}',
             'value_fr' => '{"0":"Oui, 888starz permet les dépôts et retraits en cryptomonnaies populaires."}',
             'value_pt' => '{"0":"Sim, a 888starz permite depósitos e saques em criptomoedas populares."}',
             'order' => 43
            ]
        );
    }
}
