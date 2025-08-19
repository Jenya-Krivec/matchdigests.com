<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
             'value_en' => '{"0":"22BET Review"}',
             'value_es' => '{"0":"Reseña de 22BET"}',
             'value_fr' => '{"0":"Avis sur 22BET"}',
             'value_pt' => '{"0":"Análise da 22BET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET has been holding its position as one of the most popular international bookmakers for several years in a row, and there are solid reasons for that. The company offers users a convenient platform that combines sports betting, casino, and a wide variety of additional games."}',
             'value_es' => '{"0":"22BET lleva varios años manteniéndose como una de las casas de apuestas internacionales más populares, y existen razones bien fundamentadas para ello. La compañía ofrece a los usuarios una plataforma cómoda que combina apuestas deportivas, casino y una gran variedad de juegos adicionales."}',
             'value_fr' => '{"0":"Depuis plusieurs années, 22BET conserve sa position comme l’un des bookmakers internationaux les plus populaires, et cela pour de bonnes raisons. L’entreprise propose aux utilisateurs une plateforme pratique qui combine paris sportifs, casino et une grande variété de jeux supplémentaires."}',
             'value_pt' => '{"0":"A 22BET tem mantido, há vários anos consecutivos, a posição de uma das casas de apostas internacionais mais populares, e existem razões sólidas para isso. A empresa oferece aos utilizadores uma plataforma conveniente que combina apostas desportivas, casino e uma ampla variedade de jogos adicionais."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker operates under a Curaçao license, and the website is translated into more than 50 languages. The interface is intuitive, so even new players can quickly get familiar with the functionality. 22BET emphasizes the breadth of its betting line, a large number of bonuses, and the ability to use various payment methods, including cryptocurrencies."}',
             'value_es' => '{"0":"El corredor de apuestas opera con licencia de Curazao, y el sitio web está traducido a más de 50 idiomas. La interfaz es intuitiva, por lo que incluso los nuevos jugadores pueden familiarizarse rápidamente con sus funciones. 22BET pone énfasis en la amplitud de la línea de apuestas, la gran cantidad de bonos y la posibilidad de utilizar diversos métodos de pago, incluidas las criptomonedas."}',
             'value_fr' => '{"0":"Le bookmaker opère sous licence de Curaçao, et le site est traduit en plus de 50 langues. L’interface est intuitive, ce qui permet même aux nouveaux joueurs de se familiariser rapidement avec les fonctionnalités. 22BET met l’accent sur la largeur de sa ligne de paris, le grand nombre de bonus et la possibilité d’utiliser différents moyens de paiement, y compris les cryptomonnaies."}',
             'value_pt' => '{"0":"O bookmaker opera sob licença de Curaçao, e o site está traduzido em mais de 50 idiomas. A interface é intuitiva, permitindo que até novos jogadores se familiarizem rapidamente com as funcionalidades. A 22BET destaca-se pela amplitude da linha de apostas, pelo grande número de bónus e pela possibilidade de utilizar vários métodos de pagamento, incluindo criptomoedas."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"At 22BET you can find bets on virtually any type of sport. The bookmaker offers betting on football, tennis, and basketball events, as well as on less popular disciplines such as badminton or water polo."}',
             'value_es' => '{"0":"En 22BET puedes encontrar apuestas prácticamente en cualquier tipo de deporte. La casa de apuestas ofrece apuestas en fútbol, tenis y baloncesto, así como en disciplinas menos populares como el bádminton o el waterpolo."}',
             'value_fr' => '{"0":"Chez 22BET, vous pouvez trouver des paris sur pratiquement n’importe quel type de sport. Le bookmaker propose des paris sur le football, le tennis et le basketball, ainsi que sur des disciplines moins populaires comme le badminton ou le water-polo."}',
             'value_pt' => '{"0":"No 22BET é possível encontrar apostas em praticamente qualquer tipo de esporte. A casa de apostas oferece apostas em futebol, tênis e basquete, bem como em disciplinas menos populares, como badminton ou polo aquático."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Esports deserve special attention. Here you will find games like Dota 2, CS:GO, League of Legends, and more. It is worth noting that in some cases you can even bet on the statistics of individual players."}',
             'value_es' => '{"0":"Los deportes electrónicos merecen especial atención. Aquí encontrarás juegos como Dota 2, CS:GO, League of Legends y muchos más. Cabe destacar que en algunos casos incluso puedes apostar a las estadísticas de jugadores individuales."}',
             'value_fr' => '{"0":"L’esport mérite une attention particulière. Vous y trouverez des jeux comme Dota 2, CS:GO, League of Legends et bien d’autres. Il convient de noter que, dans certains cas, vous pouvez même parier sur les statistiques de joueurs individuels."}',
             'value_pt' => '{"0":"Os esportes eletrônicos merecem destaque. Aqui você encontrará jogos como Dota 2, CS:GO, League of Legends e muitos outros. Vale destacar que, em alguns casos, é possível até apostar nas estatísticas de jogadores individuais."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"For user convenience, there are filters by sport type, leagues, and event start time. Thanks to this, you can quickly find the right match and place a bet in just a few clicks. Here are some of the sports you can bet on:"}',
             'value_es' => '{"0":"Para mayor comodidad del usuario, hay filtros por tipo de deporte, ligas y hora de inicio de los eventos. Gracias a esto, podrás encontrar rápidamente el partido adecuado y apostar en solo unos clics. Estos son algunos de los deportes en los que puedes apostar:"}',
             'value_fr' => '{"0":"Pour plus de commodité, des filtres par type de sport, ligues et heure de début des événements sont disponibles. Grâce à cela, vous pouvez rapidement trouver le match recherché et placer un pari en quelques clics. Voici quelques-uns des sports sur lesquels vous pouvez parier :"}',
             'value_pt' => '{"0":"Para maior comodidade, há filtros por tipo de esporte, ligas e horário de início dos eventos. Graças a isso, você pode encontrar rapidamente a partida certa e fazer sua aposta em apenas alguns cliques. Aqui estão alguns dos esportes em que você pode apostar:"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET Casino is presented as a large separate section, which includes thousands of games from leading global providers such as NetEnt, Microgaming, Play’n GO, Evolution Gaming and many others. You will have access to slots, table games, card entertainment, video poker, and of course, live casino."}',
             'value_es' => '{"0":"El casino de 22BET se presenta como una gran sección independiente, que incluye miles de juegos de proveedores líderes mundiales como NetEnt, Microgaming, Play’n GO, Evolution Gaming y muchos más. Tendrás acceso a tragamonedas, juegos de mesa, juegos de cartas, videopóker y, por supuesto, al casino en vivo."}',
             'value_fr' => '{"0":"Le casino de 22BET est présenté comme une grande section distincte, qui compte des milliers de jeux provenant des principaux fournisseurs mondiaux tels que NetEnt, Microgaming, Play’n GO, Evolution Gaming et bien d’autres. Vous aurez accès aux machines à sous, jeux de table, jeux de cartes, vidéo poker et bien sûr au casino en direct."}',
             'value_pt' => '{"0":"O cassino da 22BET é apresentado como uma grande seção separada, que reúne milhares de jogos de provedores líderes mundiais como NetEnt, Microgaming, Play’n GO, Evolution Gaming e muitos outros. Você terá acesso a caça-níqueis, jogos de mesa, jogos de cartas, vídeo pôquer e, claro, ao cassino ao vivo."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In the live dealer section, you can play roulette, blackjack, baccarat, or poker. The casino interface is extremely simple: all games are divided into categories, there is a search function, as well as «new» and «popular» filters. It is important to note that the 22BET catalog is constantly updated, so players regularly gain access to new slots and modern games."}',
             'value_es' => '{"0":"En la sección con crupieres en vivo se puede jugar a la ruleta, blackjack, baccarat o póker. La interfaz del casino es muy sencilla: todos los juegos están divididos en categorías, hay función de búsqueda, así como filtros de «novedades» y «populares». Es importante destacar que el catálogo de 22BET se actualiza constantemente, por lo que los jugadores tienen acceso regular a nuevas tragamonedas y juegos modernos."}',
             'value_fr' => '{"0":"Dans la section avec croupiers en direct, il est possible de jouer à la roulette, au blackjack, au baccarat ou au poker. L’interface du casino est très simple : tous les jeux sont classés par catégories, avec une fonction de recherche ainsi que des filtres « nouveautés » et « populaires ». Il est important de noter que le catalogue 22BET est constamment mis à jour, offrant ainsi aux joueurs un accès régulier à de nouvelles machines à sous et à des jeux modernes."}',
             'value_pt' => '{"0":"Na seção com dealers ao vivo, é possível jogar roleta, blackjack, bacará ou pôquer. A interface do cassino é bastante simples: todos os jogos estão divididos por categorias, há função de busca e filtros de «novidades» e «populares». É importante destacar que o catálogo da 22BET é constantemente atualizado, oferecendo aos jogadores acesso regular a novos slots e jogos modernos."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"At 22BET, the odds are one of the platform’s strongest features, as the bookmaker offers players highly favorable conditions for betting. On top football championships such as the Champions League or the EPL, you can always find quite high prices. For example, in a Champions League match, the odds for the favorite to win may be 1.85. For the underdog or a draw, odds sometimes reach 4.50–5.00."}',
             'value_es' => '{"0":"En 22BET, las cuotas son uno de los puntos fuertes de la plataforma, ya que la casa de apuestas ofrece a los usuarios condiciones muy favorables para apostar. En los principales campeonatos de fútbol, como la Liga de Campeones o la Premier League, siempre se pueden encontrar cuotas bastante altas. Por ejemplo, en un partido de la Liga de Campeones, la cuota para la victoria del favorito puede ser de 1.85. Para el no favorito o el empate, las cuotas a veces alcanzan 4.50–5.00."}',
             'value_fr' => '{"0":"Chez 22BET, les cotes constituent l’un des points forts de la plateforme, car le bookmaker propose des conditions très avantageuses pour les parieurs. Sur les principaux championnats de football, tels que la Ligue des champions ou la Premier League, il est toujours possible de trouver des cotes assez élevées. Par exemple, lors d’un match de Ligue des champions, la cote pour la victoire du favori peut être de 1.85. Pour l’outsider ou un match nul, les cotes atteignent parfois 4.50–5.00."}',
             'value_pt' => '{"0":"No 22BET, as odds são um dos pontos fortes da plataforma, já que a casa de apostas oferece condições muito favoráveis para os jogadores. Nos principais campeonatos de futebol, como a Liga dos Campeões ou a Premier League, é sempre possível encontrar cotações bastante altas. Por exemplo, numa partida da Liga dos Campeões, a odd para a vitória do favorito pode ser 1.85. Já para o azarão ou para o empate, as odds às vezes chegam a 4.50–5.00."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In tennis or basketball, the situation is similar. 22BET often provides lines with slightly higher odds than the market average."}',
             'value_es' => '{"0":"En el tenis o el baloncesto, la situación es similar. 22BET suele ofrecer líneas con cuotas algo más altas que la media del mercado."}',
             'value_fr' => '{"0":"Par exemple, lors d’un match de Ligue des champions, la cote pour la victoire du favori peut être de 1.85. Pour l’outsider ou un match nul, les cotes atteignent parfois 4.50–5.00."}',
             'value_pt' => '{"0":"No tênis ou no basquete, a situação é semelhante. O 22BET frequentemente oferece linhas com cotações um pouco acima da média do mercado."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Betting limits are generally standard and differ little from those offered by other bookmakers. The minimum bet usually starts at €0.20, while maximum winnings depend on the specific event but generally allow significant sums without strict restrictions."}',
             'value_es' => '{"0":"Los límites de apuestas son en general estándar y no difieren mucho de los que ofrecen otras casas de apuestas. La apuesta mínima suele comenzar en 0,20 €, mientras que las ganancias máximas dependen del evento concreto, pero normalmente permiten apostar sumas importantes sin grandes restricciones."}',
             'value_fr' => '{"0":"Les limites de mise sont généralement standards et diffèrent peu de celles des autres bookmakers. La mise minimale commence habituellement à 0,20 €, tandis que les gains maximums dépendent de l’événement spécifique mais permettent en général de miser des montants importants sans restrictions strictes."}',
             'value_pt' => '{"0":"Os limites de apostas são geralmente padrão e diferem pouco dos oferecidos por outras casas. A aposta mínima normalmente começa em €0,20, enquanto os ganhos máximos dependem do evento específico, mas em geral permitem apostar somas significativas sem grandes restrições."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"On every event at 22BET, a huge number of betting options are available. When it comes to football, it’s not only about classic match results, totals, or handicaps, but also individual player statistics, number of corners, yellow cards, exact score, and even special bets on half-time stats."}',
             'value_es' => '{"0":"En cada evento en 22BET hay disponible una enorme cantidad de opciones de apuestas. En el caso del fútbol, no se trata solo de los resultados clásicos del partido, totales o hándicaps, sino también de estadísticas individuales de los jugadores, número de saques de esquina, tarjetas amarillas, marcador exacto e incluso apuestas especiales sobre estadísticas de los tiempos."}',
             'value_fr' => '{"0":"Pour chaque événement sur 22BET, un très grand nombre d’options de paris est disponible. En football, il ne s’agit pas seulement des résultats classiques du match, des totaux ou des handicaps, mais aussi des statistiques individuelles des joueurs, du nombre de corners, de cartons jaunes, du score exact et même de paris spéciaux sur les statistiques des mi-temps."}',
             'value_pt' => '{"0":"Em cada evento no 22BET está disponível uma enorme variedade de opções de apostas. No futebol, não se trata apenas dos resultados clássicos da partida, totais ou handicaps, mas também de estatísticas individuais dos jogadores, número de escanteios, cartões amarelos, placar exato e até apostas especiais sobre estatísticas dos tempos."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, you can place bets on the number of aces, double faults, or the performance of specific players in sets. Such a wide range of options is ideal for players who enjoy analyzing events and looking for unconventional betting opportunities."}',
             'value_es' => '{"0":"En el tenis, se pueden hacer pronósticos sobre la cantidad de aces, dobles faltas o el rendimiento de jugadores concretos en los sets. Esta variedad de opciones es ideal para quienes disfrutan analizando los eventos y buscando alternativas de apuestas poco convencionales."}',
             'value_fr' => '{"0":"Au tennis, il est possible de parier sur le nombre d’aces, de doubles fautes ou sur la performance de joueurs spécifiques dans les sets. Cette variété d’options convient parfaitement aux parieurs qui aiment analyser les événements et rechercher des opportunités de paris originales."}',
             'value_pt' => '{"0":"No tênis, é possível apostar no número de aces, duplas faltas ou no desempenho de jogadores específicos nos sets. Essa grande variedade de opções é ideal para jogadores que gostam de analisar os eventos e procurar alternativas de apostas não convencionais."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In the live betting section, you can place real-time bets on dozens of sports. The odds are updated instantly, allowing you to react quickly to changes during the match."}',
             'value_es' => '{"0":"En la sección de apuestas en vivo, podrás realizar apuestas en tiempo real en decenas de deportes. Las cuotas se actualizan de manera instantánea, lo que te permite reaccionar rápidamente a los cambios durante el partido."}',
             'value_fr' => '{"0":"Dans la section des paris en direct, vous pouvez parier en temps réel sur des dizaines de sports. Les cotes sont mises à jour instantanément, ce qui vous permet de réagir rapidement aux changements pendant le match."}',
             'value_pt' => '{"0":"Na seção de apostas ao vivo, você pode fazer apostas em tempo real em dezenas de esportes. As odds são atualizadas instantaneamente, permitindo reagir rapidamente às mudanças durante a partida."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"For a significant number of games, live video streams are available, and if a stream is not provided, the bookmaker offers detailed graphic visualization and statistics. Thus, on the 22BET website, you can combine watching matches with placing sports bets."}',
             'value_es' => '{"0":"Para una gran parte de los encuentros hay disponibles transmisiones en vivo, y si no hay transmisión, la casa de apuestas ofrece una visualización gráfica detallada y estadísticas. De este modo, en el sitio de 22BET podrás combinar el seguimiento de los partidos con las apuestas deportivas."}',
             'value_fr' => '{"0":"Pour un grand nombre de rencontres, des retransmissions vidéo en direct sont disponibles, et si aucune retransmission n’est proposée, le bookmaker offre une visualisation graphique détaillée et des statistiques. Ainsi, sur le site de 22BET, vous pouvez combiner le suivi des matchs avec les paris sportifs."}',
             'value_pt' => '{"0":"Para uma parte significativa dos jogos, estão disponíveis transmissões ao vivo, e se não houver transmissão, a casa de apostas oferece uma visualização gráfica detalhada e estatísticas. Assim, no site da 22BET, você pode combinar o acompanhamento das partidas com as apostas esportivas."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET operates under an international Curaçao license, ensuring compliance with security standards. The site uses modern data encryption technologies, so users’ personal information and financial transactions are protected. Additionally, you can enable two-factor authentication for an extra layer of security."}',
             'value_es' => '{"0":"22BET opera bajo una licencia internacional de Curazao, lo que garantiza el cumplimiento de los estándares de seguridad. El sitio utiliza tecnologías modernas de encriptación de datos, por lo que la información personal de los usuarios y las transacciones financieras están protegidas. Además, puedes activar la autenticación de dos factores para un nivel adicional de seguridad."}',
             'value_fr' => '{"0":"22BET fonctionne sous une licence internationale de Curaçao, garantissant le respect des normes de sécurité. Le site utilise des technologies modernes de cryptage des données, protégeant ainsi les informations personnelles des utilisateurs et les transactions financières. De plus, vous pouvez activer l’authentification à deux facteurs pour un niveau de sécurité supplémentaire."}',
             'value_pt' => '{"0":"22BET opera sob uma licença internacional de Curaçao, garantindo o cumprimento dos padrões de segurança. O site utiliza tecnologias modernas de criptografia de dados, protegendo as informações pessoais dos usuários e as transações financeiras. Além disso, você pode ativar a autenticação de dois fatores para um nível extra de segurança."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"An important aspect is the responsible gaming policy. On the site, you can set deposit and betting limits, as well as use the self-exclusion feature if needed."}',
             'value_es' => '{"0":"Un aspecto importante es la política de juego responsable. En el sitio, puedes establecer límites de depósitos y apuestas, así como utilizar la función de autoexclusión si lo necesitas."}',
             'value_fr' => '{"0":"Un aspect important est la politique de jeu responsable. Sur le site, vous pouvez définir des limites de dépôt et de mise, ainsi qu’utiliser la fonction d’auto-exclusion si nécessaire."}',
             'value_pt' => '{"0":"Um aspecto importante é a política de jogo responsável. No site, você pode definir limites de depósitos e apostas, bem como usar a função de autoexclusão se necessário."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET has one of the largest selections of payment methods among international bookmakers. You can fund your account using Mastercard and VISA bank cards, e-wallets such as Neteller, and cryptocurrencies. It is worth noting that there are currently more than 25 cryptocurrencies available, including Bitcoin, Ethereum, and Litecoin."}',
             'value_es' => '{"0":"22BET cuenta con una de las mayores opciones de métodos de pago entre los bookmakers internacionales. Puedes recargar tu cuenta mediante tarjetas bancarias Mastercard y VISA, monederos electrónicos como Neteller, y criptomonedas. Cabe destacar que actualmente hay más de 25 criptomonedas disponibles, incluyendo Bitcoin, Ethereum y Litecoin."}',
             'value_fr' => '{"0":"22BET dispose de l’une des plus grandes sélections de méthodes de paiement parmi les bookmakers internationaux. Vous pouvez approvisionner votre compte via des cartes bancaires Mastercard et VISA, des portefeuilles électroniques tels que Neteller, ainsi que des cryptomonnaies. Il convient de noter qu’il y a actuellement plus de 25 cryptomonnaies disponibles, y compris Bitcoin, Ethereum et Litecoin."}',
             'value_pt' => '{"0":"22BET possui uma das maiores seleções de métodos de pagamento entre os bookmakers internacionais. Você pode financiar sua conta usando cartões bancários Mastercard e VISA, carteiras eletrônicas como Neteller e criptomoedas. Vale destacar que atualmente existem mais de 25 criptomoedas disponíveis, incluindo Bitcoin, Ethereum e Litecoin."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are credited almost instantly, while withdrawals usually take from a few minutes up to several hours depending on the method and amount. The minimum transaction amount starts from $2, and bookmaker fees are usually not charged. Below you can find more detailed information about popular payment methods."}',
             'value_es' => '{"0":"Los depósitos se acreditan casi al instante, mientras que los retiros suelen tardar desde unos pocos minutos hasta varias horas, dependiendo del método y la cantidad. El importe mínimo para transacciones es de $2, y normalmente no se cobran comisiones por parte del bookmaker. A continuación, puedes encontrar información más detallada sobre los métodos de pago más populares."}',
             'value_fr' => '{"0":"Les dépôts sont crédités presque instantanément, tandis que les retraits prennent généralement de quelques minutes à plusieurs heures selon la méthode et le montant. Le montant minimum pour les transactions commence à 2 $, et les frais du bookmaker ne sont généralement pas appliqués. Ci-dessous, vous trouverez des informations plus détaillées sur les méthodes de paiement populaires."}',
             'value_pt' => '{"0":"Os depósitos são creditados quase instantaneamente, enquanto os saques geralmente levam de alguns minutos até várias horas, dependendo do método e do valor. O valor mínimo para transações é de $2, e normalmente não há taxas cobradas pelo bookmaker. Abaixo, você pode encontrar informações mais detalhadas sobre os métodos de pagamento populares."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 32
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET customer support operates 24/7. You can contact operators via live chat, email, or the feedback form on the website, as well as by phone. Support is available in multiple languages, making it convenient for users from different countries."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 22BET funciona las 24 horas del día, los 7 días de la semana. Puedes contactar con los operadores a través del chat en vivo, correo electrónico o el formulario de contacto en el sitio web, así como por teléfono. El soporte está disponible en varios idiomas, lo que lo hace conveniente para usuarios de diferentes países."}',
             'value_fr' => '{"0":"Le service client de 22BET est disponible 24h/24 et 7j/7. Vous pouvez contacter les opérateurs via le chat en direct, par email ou via le formulaire de contact sur le site, ainsi que par téléphone. Le support est disponible en plusieurs langues, ce qui le rend pratique pour les utilisateurs de différents pays."}',
             'value_pt' => '{"0":"O suporte ao cliente da 22BET funciona 24 horas por dia, 7 dias por semana. Você pode entrar em contato com os operadores via chat ao vivo, e-mail ou formulário de contato no site, bem como por telefone. O suporte está disponível em vários idiomas, tornando-o conveniente para usuários de diferentes países."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 33
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 34
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events",
                                 "1":"Large casino with live games",
                                 "2":"Cryptocurrency support",
                                 "3":"User-friendly interface",
                                 "4":"Competitive odds"},
                             "1":
                                {"0":"Live streams are not available for all events"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de eventos deportivos",
                                 "1":"Gran casino con juegos en vivo",
                                 "2":"Soporte para criptomonedas",
                                 "3":"Interfaz fácil de usar",
                                 "4":"Cuotas competitivas"},
                             "1":
                                {"0":"Las transmisiones en vivo no están disponibles para todos los eventos"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d\'événements sportifs",
                                 "1":"Grand casino avec jeux en direct",
                                 "2":"Prise en charge des crypto-monnaies",
                                 "3":"Interface conviviale",
                                 "4":"Cotes compétitives"},
                             "1":
                                {"0":"Les diffusions en direct ne sont pas disponibles pour tous les événements"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla seleção de eventos esportivos",
                                 "1":"Grande cassino com jogos ao vivo",
                                 "2":"Suporte a criptomoedas",
                                 "3":"Interface amigável",
                                 "4":"Odds competitivas"},
                             "1":
                                {"0":"Transmissões ao vivo não estão disponíveis para todos os eventos"}
                             }',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 35
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 36
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Does 22BET have a mobile app?"}',
             'value_es' => '{"0":"¿Tiene 22BET una aplicación móvil?"}',
             'value_fr' => '{"0":"22BET dispose-t-il d\'une application mobile ?"}',
             'value_pt' => '{"0":"O 22BET tem um aplicativo móvel?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 37
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, apps are available for Android and iOS."}',
             'value_es' => '{"0":"Sí, hay aplicaciones disponibles para Android e iOS."}',
             'value_fr' => '{"0":"Oui, des applications sont disponibles pour Android et iOS."}',
             'value_pt' => '{"0":"Sim, os aplicativos estão disponíveis para Android e iOS."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 38
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para retirar fundos?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 39
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, money arrives within a few hours, depending on the chosen method and amount."}',
             'value_es' => '{"0":"En la mayoría de los casos, el dinero llega en unas pocas horas, dependiendo del método elegido y del monto."}',
             'value_fr' => '{"0":"Dans la plupart des cas, l\'argent arrive en quelques heures, selon la méthode choisie et le montant."}',
             'value_pt' => '{"0":"Na maioria dos casos, o dinheiro chega em poucas horas, dependendo do método escolhido e do valor."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 40
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"What are the betting limits at 22BET?"}',
             'value_es' => '{"0":"¿Cuáles son los límites de apuesta en 22BET?"}',
             'value_fr' => '{"0":"Quels sont les limites de mise sur 22BET ?"}',
             'value_pt' => '{"0":"Quais são os limites de apostas na 22BET?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 41
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet is €0.20 or the equivalent in your currency."}',
             'value_es' => '{"0":"La apuesta mínima es de 0,20 € o su equivalente en su moneda."}',
             'value_fr' => '{"0":"La mise minimale est de 0,20 € ou l\'équivalent dans votre devise."}',
             'value_pt' => '{"0":"A aposta mínima é de €0,20 ou o equivalente na sua moeda."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 42
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Does 22BET offer live streaming of matches?"}',
             'value_es' => '{"0":"¿22BET ofrece transmisión en vivo de los partidos?"}',
             'value_fr' => '{"0":"22BET propose-t-il des diffusions en direct des matchs ?"}',
             'value_pt' => '{"0":"A 22BET oferece transmissão ao vivo das partidas?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 43
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 22BET provides live streams for many sporting events, including football, tennis, basketball, and esports."}',
             'value_es' => '{"0":"Sí, 22BET ofrece transmisiones en vivo para muchos eventos deportivos, incluidos fútbol, tenis, baloncesto y deportes electrónicos."}',
             'value_fr' => '{"0":"Oui, 22BET propose des diffusions en direct pour de nombreux événements sportifs, notamment le football, le tennis, le basket-ball et l’e-sport."}',
             'value_pt' => '{"0":"Sim, a 22BET fornece transmissões ao vivo para muitos eventos esportivos, incluindo futebol, tênis, basquete e e-sports."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 44
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can cryptocurrency be used for playing?"}',
             'value_es' => '{"0":"¿Se puede usar criptomoneda para jugar?"}',
             'value_fr' => '{"0":"Peut-on utiliser des cryptomonnaies pour jouer ?"}',
             'value_pt' => '{"0":"É possível usar criptomoeda para jogar?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 45
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the site offers a variety of cryptocurrency options."}',
             'value_es' => '{"0":"Sí, el sitio ofrece varias opciones de criptomonedas."}',
             'value_fr' => '{"0":"Oui, le site propose de nombreuses options de cryptomonnaies."}',
             'value_pt' => '{"0":"Sim, o site oferece várias opções de criptomoedas."}',
             'order' => 45
            ]
        );
    }
}
