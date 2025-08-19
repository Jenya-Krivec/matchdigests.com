<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
             'value_en' => '{"0":"Linebet Review"}',
             'value_es' => '{"0":"Reseña de Linebet"}',
             'value_fr' => '{"0":"Avis sur Linebet"}',
             'value_pt' => '{"0":"Análise da Linebet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is an international betting company that has firmly established itself in the online betting market over the past few years. The platform offers a wide range of opportunities for sports betting, casino games, and other gambling entertainment."}',
             'value_es' => '{"0":"Linebet es una casa de apuestas internacional que en los últimos años se ha consolidado en el mercado de las apuestas en línea. La plataforma ofrece una amplia gama de opciones para apuestas deportivas, juegos de casino y otros tipos de entretenimiento de azar."}',
             'value_fr' => '{"0":"Linebet est une société de paris internationale qui s’est solidement implantée sur le marché des paris en ligne au cours des dernières années. La plateforme propose un large éventail d’options pour les paris sportifs, les jeux de casino et d’autres formes de divertissement."}',
             'value_pt' => '{"0":"A Linebet é uma casa de apostas internacional que, nos últimos anos, consolidou-se no mercado de apostas online. A plataforma oferece uma ampla variedade de opções para apostas esportivas, jogos de cassino e outros tipos de entretenimento de azar."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The company operates under a Curaçao license, which allows it to provide services in many countries worldwide. It is important to note that the website features a multilingual interface and supports more than 40 languages, making it accessible to a wide audience."}',
             'value_es' => '{"0":"La empresa opera con una licencia de Curazao, lo que le permite prestar servicios en numerosos países del mundo. Cabe destacar que el sitio cuenta con una interfaz multilingüe y soporta más de 40 idiomas, lo que lo hace accesible para una amplia audiencia."}',
             'value_fr' => '{"0":"L’entreprise opère sous une licence de Curaçao, ce qui lui permet d’exercer ses activités dans de nombreux pays à travers le monde. Il est important de souligner que le site dispose d’une interface multilingue et prend en charge plus de 40 langues, ce qui le rend accessible à un large public."}',
             'value_pt' => '{"0":"A empresa opera sob licença de Curaçao, o que lhe permite atuar em diversos países ao redor do mundo. Vale destacar que o site possui uma interface multilíngue e suporta mais de 40 idiomas, tornando-o acessível a um público amplo."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The main focus of Linebet’s activity is sports betting. This section features more than 40 sports, including football, tennis, basketball, hockey, volleyball, esports, as well as less popular disciplines such as cricket or handball."}',
             'value_es' => '{"0":"La actividad principal de Linebet son las apuestas deportivas. En esta sección se incluyen más de 40 deportes, entre ellos fútbol, tenis, baloncesto, hockey, voleibol, deportes electrónicos y también disciplinas menos populares como el críquet o el balonmano."}',
             'value_fr' => '{"0":"L’activité principale de Linebet est les paris sportifs. Cette section propose plus de 40 disciplines, dont le football, le tennis, le basketball, le hockey, le volleyball, l’esport, ainsi que des sports moins populaires comme le cricket ou le handball."}',
             'value_pt' => '{"0":"O principal foco da Linebet é nas apostas esportivas. Nesta seção, estão disponíveis mais de 40 modalidades, incluindo futebol, tênis, basquete, hóquei, vôlei, e-sports, além de disciplinas menos populares, como críquete ou handebol."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"For each match, you can find standard betting options like match result, totals, handicaps, as well as more specific markets such as player statistics or exact score. In football, for example, you can bet not only on the team’s victory but also on the number of yellow cards or corners."}',
             'value_es' => '{"0":"Para cada partido encontrarás tanto las opciones de apuestas estándar, como resultado del encuentro, totales, hándicaps, así como mercados más especializados como estadísticas de jugadores o marcador exacto. En el fútbol, por ejemplo, se puede apostar no solo a la victoria del equipo, sino también al número de tarjetas amarillas o saques de esquina."}',
             'value_fr' => '{"0":"Pour chaque match, vous trouverez des options classiques telles que le résultat du match, les totaux, les handicaps, mais aussi des paris plus spécifiques comme les statistiques des joueurs ou le score exact. Au football, par exemple, il est possible de parier non seulement sur la victoire d’une équipe, mais aussi sur le nombre de cartons jaunes ou de corners."}',
             'value_pt' => '{"0":"Para cada partida, é possível encontrar opções de apostas padrão, como resultado do jogo, totais, handicaps, bem como mercados mais específicos, como estatísticas dos jogadores ou placar exato. No futebol, por exemplo, você pode apostar não apenas na vitória da equipe, mas também no número de cartões amarelos ou escanteios."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet also places a strong emphasis on live betting, allowing users to react to events in real time. The selection of sporting events covers both top leagues like the EPL or the Champions League and regional championships."}',
             'value_es' => '{"0":"Linebet también pone un fuerte énfasis en las apuestas en vivo, lo que permite a los usuarios reaccionar a los eventos en tiempo real. La oferta de eventos deportivos abarca tanto las principales ligas como la Premier League o la Liga de Campeones, así como campeonatos regionales."}',
             'value_fr' => '{"0":"Linebet met également l’accent sur les paris en direct, permettant aux utilisateurs de réagir aux événements en temps réel. L’offre couvre aussi bien les grandes compétitions comme la Premier League ou la Ligue des Champions que les championnats régionaux."}',
             'value_pt' => '{"0":"A Linebet também dá grande ênfase às apostas ao vivo, permitindo que os usuários reajam aos acontecimentos em tempo real. A seleção de eventos esportivos abrange tanto as principais ligas, como a Premier League ou a Liga dos Campeões, quanto os campeonatos regionais."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Apart from sports betting, Linebet is actively developing its online casino section. The game library offers thousands of slots from leading providers such as Pragmatic Play, NetEnt, Microgaming, and others. For fans of classic gambling entertainment, there are roulette, blackjack, baccarat, and poker."}',
             'value_es' => '{"0":"Además de las apuestas deportivas, Linebet desarrolla activamente su sección de casino online. La biblioteca de juegos ofrece miles de tragamonedas de los principales proveedores, como Pragmatic Play, NetEnt, Microgaming y otros. Para los aficionados a los juegos de azar clásicos, hay ruleta, blackjack, bacará y póker."}',
             'value_fr' => '{"0":"En plus des paris sportifs, Linebet développe activement sa section de casino en ligne. La ludothèque propose des milliers de machines à sous provenant de fournisseurs renommés tels que Pragmatic Play, NetEnt, Microgaming et d’autres. Pour les amateurs de jeux de hasard classiques, on retrouve la roulette, le blackjack, le baccarat et le poker."}',
             'value_pt' => '{"0":"Além das apostas esportivas, a Linebet também desenvolve ativamente sua seção de cassino online. A biblioteca de jogos conta com milhares de slots de provedores renomados, como Pragmatic Play, NetEnt, Microgaming e outros. Para os fãs dos jogos de azar clássicos, há roleta, blackjack, bacará e pôquer."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"A separate highlight is the live casino section, where you can play with real dealers in real time. This creates the atmosphere of a genuine casino. Interestingly, in certain sections, you can even find TV games and instant lotteries."}',
             'value_es' => '{"0":"Cabe destacar la sección de casino en vivo, donde se puede jugar con crupieres reales en tiempo real. Esto crea una auténtica atmósfera de casino. Resulta interesante que en algunas secciones incluso haya juegos televisivos y loterías rápidas."}',
             'value_fr' => '{"0":"Un point fort distinct est la section live casino, où il est possible de jouer avec de vrais croupiers en temps réel. Cela recrée l’ambiance d’un véritable casino. Fait intéressant, certaines sections proposent même des jeux télévisés et des loteries rapides."}',
             'value_pt' => '{"0":"Um destaque especial é a seção de cassino ao vivo, onde é possível jogar com crupiês reais em tempo real. Isso cria a atmosfera de um cassino verdadeiro. Curiosamente, em algumas seções também estão disponíveis jogos de televisão e loterias instantâneas."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"One of Linebet’s strong points is the level of its odds. For example, in popular English Premier League football matches, the odds on the favorite’s victory can be around 1.55–1.60. This is especially noticeable in top tournaments. In events such as the Champions League, draw odds often exceed 4.00."}',
             'value_es' => '{"0":"Uno de los puntos fuertes de Linebet es el nivel de sus cuotas. Por ejemplo, en los partidos populares de la Premier League inglesa, las cuotas para la victoria del favorito pueden situarse en torno a 1.55–1.60. Esto se nota especialmente en los torneos más importantes. En competiciones como la Liga de Campeones, las cuotas para el empate a menudo superan 4.00."}',
             'value_fr' => '{"0":"L’un des points forts de Linebet est le niveau de ses cotes. Par exemple, pour les matchs populaires de la Premier League anglaise, les cotes pour la victoire du favori se situent souvent autour de 1.55–1.60. Cela est particulièrement visible dans les tournois majeurs. Lors d’événements comme la Ligue des champions, les cotes pour un match nul dépassent fréquemment 4.00."}',
             'value_pt' => '{"0":"Um dos pontos fortes da Linebet é o nível das suas odds. Por exemplo, em partidas populares da Premier League inglesa, as odds para a vitória do favorito podem ficar entre 1.55–1.60. Isso é particularmente evidente nos principais torneios. Em competições como a Liga dos Campeões, as odds para o empate muitas vezes ultrapassam 4.00."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"As for less popular leagues and niche sports, the odds here also remain at a decent level, although the difference compared to other bookmakers is less noticeable. For instance, in esports or table tennis matches, the odds are approximately the same as those offered by other betting companies."}',
             'value_es' => '{"0":"En cuanto a las ligas menos populares y los deportes de nicho, las cuotas también se mantienen en un nivel aceptable, aunque la diferencia con respecto a otras casas de apuestas es menos perceptible. Por ejemplo, en partidos de deportes electrónicos o tenis de mesa, las cuotas son aproximadamente las mismas que las de otras casas de apuestas."}',
             'value_fr' => '{"0":"En ce qui concerne les ligues moins populaires et les sports de niche, les cotes restent également à un niveau correct, bien que la différence avec d’autres bookmakers soit moins marquée. Par exemple, dans les matchs d’esport ou de tennis de table, les cotes sont à peu près similaires à celles des autres opérateurs."}',
             'value_pt' => '{"0":"Quanto às ligas menos populares e aos esportes de nicho, as odds também se mantêm em um nível aceitável, embora a diferença em relação a outras casas de apostas seja menos perceptível. Por exemplo, em partidas de eSports ou tênis de mesa, as odds são aproximadamente as mesmas oferecidas por outros operadores."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"When it comes to limits, the minimum bet is usually $0.2 or the equivalent in another currency, while maximum winnings depend on the specific event. However, it should be noted that for new or less popular tournaments, limits may be lower."}',
             'value_es' => '{"0":"En lo que respecta a los límites, la apuesta mínima suele ser de 0.2 $ o el equivalente en otra moneda, mientras que las ganancias máximas dependen del evento concreto. No obstante, conviene señalar que en los torneos nuevos o poco populares los límites pueden ser más bajos."}',
             'value_fr' => '{"0":"En termes de limites, la mise minimale est généralement de 0,2 $ ou l’équivalent dans une autre devise, tandis que les gains maximums dépendent de l’événement spécifique. Toutefois, il convient de noter que pour les tournois nouveaux ou peu populaires, les limites peuvent être plus basses."}',
             'value_pt' => '{"0":"No que diz respeito aos limites, a aposta mínima geralmente é de US$0,2 ou o equivalente em outra moeda, enquanto os ganhos máximos dependem do evento específico. No entanto, vale destacar que em torneios novos ou pouco populares os limites podem ser menores."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"One of the reasons for Linebet’s popularity among players is the large number of betting options. For example, in football there can be more than 1,000 markets available, including bets on results and statistics. You also have the opportunity to place combination bets."}',
             'value_es' => '{"0":"Una de las razones de la popularidad de Linebet entre los jugadores es la gran cantidad de opciones de apuestas. Por ejemplo, en el fútbol pueden estar disponibles más de 1000 mercados, incluyendo apuestas sobre resultados y estadísticas. También tendrás la posibilidad de realizar apuestas combinadas."}',
             'value_fr' => '{"0":"L’une des raisons de la popularité de Linebet auprès des joueurs est le grand nombre d’options de paris. Par exemple, dans le football, plus de 1000 marchés peuvent être disponibles, y compris des paris sur les résultats et les statistiques. Vous avez également la possibilité de placer des paris combinés."}',
             'value_pt' => '{"0":"Uma das razões da popularidade da Linebet entre os jogadores é a grande quantidade de opções de apostas. No futebol, por exemplo, podem estar disponíveis mais de 1000 mercados, incluindo apostas em resultados e estatísticas. Você também terá a possibilidade de fazer apostas combinadas."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Basketball, tennis, and hockey also feature a wide variety of options, while esports include not only standard matches from Dota 2 or CS:GO but also less popular disciplines. This allows users to choose both classic options and more niche solutions."}',
             'value_es' => '{"0":"El baloncesto, el tenis y el hockey también cuentan con una amplia variedad de opciones, mientras que los deportes electrónicos incluyen no solo partidos estándar de Dota 2 o CS:GO, sino también disciplinas menos populares. Esto permite a los usuarios elegir tanto opciones clásicas como alternativas más especializadas."}',
             'value_fr' => '{"0":"Le basket-ball, le tennis et le hockey offrent également un large éventail d’options, tandis que l’e-sport comprend non seulement les matchs standards de Dota 2 ou CS:GO, mais aussi des disciplines moins populaires. Cela permet aux utilisateurs de choisir à la fois des options classiques et des solutions plus spécialisées."}',
             'value_pt' => '{"0":"O basquete, o tênis e o hóquei também oferecem uma ampla variedade de opções, enquanto os e-sports incluem não apenas partidas padrão de Dota 2 ou CS:GO, mas também disciplinas menos populares. Isso permite aos usuários escolher tanto opções clássicas quanto alternativas mais específicas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"An additional advantage of Linebet is the availability of live streams for most sports matches. The video quality remains stable even with an average internet connection. For those who cannot watch the broadcast, detailed graphical statistics and a virtual match center are available. This is especially convenient for live betting, as it allows for more informed decisions."}',
             'value_es' => '{"0":"Una ventaja adicional de Linebet es la disponibilidad de transmisiones en vivo para la mayoría de los partidos deportivos. La calidad del video se mantiene estable incluso con una conexión a internet promedio. Para aquellos que no pueden ver la transmisión, están disponibles estadísticas gráficas detalladas y un centro de partidos virtual. Esto es especialmente conveniente para las apuestas en vivo, ya que permite tomar decisiones más fundamentadas."}',
             'value_fr' => '{"0":"Un avantage supplémentaire de Linebet est la disponibilité de flux en direct pour la plupart des matchs sportifs. La qualité vidéo reste stable même avec une connexion Internet moyenne. Pour ceux qui ne peuvent pas regarder la diffusion, des statistiques graphiques détaillées et un centre de matchs virtuel sont disponibles. Cela est particulièrement pratique pour les paris en direct, car cela permet de prendre des décisions plus éclairées."}',
             'value_pt' => '{"0":"Uma vantagem adicional da Linebet é a disponibilidade de transmissões ao vivo para a maioria das partidas esportivas. A qualidade do vídeo permanece estável mesmo com uma conexão de internet média. Para aqueles que não podem assistir à transmissão, estão disponíveis estatísticas gráficas detalhadas e um centro de partidas virtual. Isso é especialmente conveniente para apostas ao vivo, pois permite tomar decisões mais fundamentadas."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to this, and because the odds are updated almost instantly, you can comfortably place bets in real time."}',
             'value_es' => '{"0":"Gracias a esto, y porque las cuotas se actualizan casi al instante, puedes realizar apuestas en tiempo real de manera cómoda."}',
             'value_fr' => '{"0":"Grâce à cela, et au fait que les cotes sont mises à jour presque instantanément, vous pouvez placer vos paris en temps réel confortablement."}',
             'value_pt' => '{"0":"Graças a isso, e ao fato de que as odds são atualizadas quase instantaneamente, você pode fazer apostas em tempo real com conforto."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet operates under an international license, which is already an important indicator of reliability. The site uses modern SSL encryption protocols to protect user data and ensure transaction security."}',
             'value_es' => '{"0":"Linebet opera bajo una licencia internacional, lo que ya es un indicador importante de confiabilidad. El sitio utiliza protocolos modernos de encriptación SSL para proteger los datos de los usuarios y garantizar la seguridad de las transacciones."}',
             'value_fr' => '{"0":"Linebet fonctionne sous une licence internationale, ce qui constitue déjà un indicateur important de fiabilité. Le site utilise des protocoles de cryptage SSL modernes pour protéger les données des utilisateurs et assurer la sécurité des transactions."}',
             'value_pt' => '{"0":"A Linebet opera sob uma licença internacional, o que já é um indicador importante de confiabilidade. O site utiliza protocolos modernos de criptografia SSL para proteger os dados dos usuários e garantir a segurança das transações."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"An important factor is also Linebet’s responsible gaming policy. You can set limits on deposits or gaming time."}',
             'value_es' => '{"0":"Un factor importante es también la política de juego responsable de Linebet. Podrás establecer límites en los depósitos o en el tiempo de juego."}',
             'value_fr' => '{"0":"Un facteur important est également la politique de jeu responsable de Linebet. Vous pouvez définir des limites sur les dépôts ou sur le temps de jeu."}',
             'value_pt' => '{"0":"Um fator importante também é a política de jogo responsável da Linebet. Você pode definir limites para depósitos ou tempo de jogo."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers a wide range of payment methods. You can top up your account using Visa and Mastercard bank cards, e-wallets, and cryptocurrencies. In total, more than 100 different transaction options are supported."}',
             'value_es' => '{"0":"Linebet ofrece una amplia variedad de métodos de pago. Puedes recargar tu cuenta usando tarjetas bancarias Visa y Mastercard, monederos electrónicos y criptomonedas. En total, se admiten más de 100 opciones de transacción diferentes."}',
             'value_fr' => '{"0":"Linebet propose un large choix de méthodes de paiement. Vous pouvez recharger votre compte avec des cartes bancaires Visa et Mastercard, des portefeuilles électroniques et des cryptomonnaies. Au total, plus de 100 options de transaction différentes sont prises en charge."}',
             'value_pt' => '{"0":"A Linebet oferece uma ampla variedade de métodos de pagamento. Você pode recarregar sua conta usando cartões bancários Visa e Mastercard, carteiras eletrônicas e criptomoedas. No total, mais de 100 opções de transação diferentes são suportadas."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Deposit times are almost instant, while withdrawals usually take from a few minutes up to 24 hours, depending on the chosen method and amount. Fees are generally absent, which is a big advantage. Keep in mind that for the first withdrawal, the company may request documents to verify your identity."}',
             'value_es' => '{"0":"El tiempo de depósito es casi instantáneo, mientras que los retiros suelen tardar de unos minutos hasta 24 horas, dependiendo del método y la cantidad elegidos. Generalmente no se aplican comisiones, lo que es una gran ventaja. Ten en cuenta que para el primer retiro, la compañía puede solicitar documentos para verificar tu identidad."}',
             'value_fr' => '{"0":"Les dépôts sont presque instantanés, tandis que les retraits prennent généralement de quelques minutes à 24 heures, selon la méthode et le montant choisis. Les frais sont généralement inexistants, ce qui est un grand avantage. Notez que pour le premier retrait, la société peut demander des documents pour vérifier votre identité."}',
             'value_pt' => '{"0":"O tempo de depósito é quase instantâneo, enquanto os saques geralmente levam de alguns minutos até 24 horas, dependendo do método e do valor escolhido. As taxas geralmente não existem, o que é uma grande vantagem. Lembre-se de que, no primeiro saque, a empresa pode solicitar documentos para verificar sua identidade."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet support service operates 24/7. You can submit your questions via online chat, email, or hotline. The fastest way to resolve an issue is through the chat, where operators usually respond within a few minutes."}',
             'value_es' => '{"0":"El servicio de atención al cliente de Linebet funciona las 24 horas, los 7 días de la semana. Puedes enviar tus preguntas a través del chat en línea, correo electrónico o línea directa. La forma más rápida de resolver un problema es mediante el chat, donde los operadores suelen responder en unos minutos."}',
             'value_fr' => '{"0":"Le service client de Linebet est disponible 24h/24 et 7j/7. Vous pouvez poser vos questions via le chat en ligne, par e-mail ou par hotline. Le moyen le plus rapide de résoudre un problème est le chat, où les opérateurs répondent généralement en quelques minutes."}',
             'value_pt' => '{"0":"O serviço de suporte da Linebet funciona 24 horas por dia, 7 dias por semana. Você pode enviar suas perguntas através do chat online, e-mail ou hotline. A maneira mais rápida de resolver um problema é pelo chat, onde os operadores geralmente respondem em poucos minutos."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports matches",
                                 "1":"High odds",
                                 "2":"Convenient mobile app and website",
                                 "3":"Large variety of payment methods",
                                 "4":"Availability of live streams"},
                             "1":
                                {"0":"Occasional delays in withdrawals"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran selección de partidos deportivos",
                                 "1":"Altas cuotas",
                                 "2":"Aplicación móvil y sitio web convenientes",
                                 "3":"Gran variedad de métodos de pago",
                                 "4":"Disponibilidad de transmisiones en vivo"},
                             "1":
                                {"0":"Retrasos ocasionales en los retiros"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de matchs sportifs",
                                 "1":"Cotes élevées",
                                 "2":"Application mobile et site web pratiques",
                                 "3":"Grande variété de méthodes de paiement",
                                 "4":"Disponibilité des diffusions en direct"},
                             "1":
                                {"0":"Retards occasionnels dans les retraits"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de partidas esportivas",
                                 "1":"Altas odds",
                                 "2":"Aplicativo móvel e site convenientes",
                                 "3":"Grande variedade de métodos de pagamento",
                                 "4":"Disponibilidade de transmissões ao vivo"},
                             "1":
                                {"0":"Atrasos ocasionais nos saques"}
                             }',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 35
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 36
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda en retirarse el dinero?"}',
             'value_fr' => '{"0":"Combien de temps faut-il pour retirer des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para retirar fundos?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 37
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, money is received within a few hours. If you use e-wallets or cryptocurrencies, withdrawals are usually faster. Transfers to bank cards may sometimes take up to a day."}',
             'value_es' => '{"0":"En la mayoría de los casos, el dinero llega en unas pocas horas. Si utiliza monederos electrónicos o criptomonedas, los retiros suelen ser más rápidos. Las transferencias a tarjetas bancarias a veces pueden tardar hasta un día."}',
             'value_fr' => '{"0":"Dans la plupart des cas, l’argent est reçu en quelques heures. Si vous utilisez des portefeuilles électroniques ou des cryptomonnaies, les retraits sont généralement plus rapides. Les virements sur cartes bancaires peuvent parfois prendre jusqu’à une journée."}',
             'value_pt' => '{"0":"Na maioria dos casos, o dinheiro é recebido em algumas horas. Se você usar carteiras eletrônicas ou criptomoedas, os saques geralmente são mais rápidos. Transferências para cartões bancários podem, às vezes, levar até um dia."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 38
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can I deposit and withdraw winnings in cryptocurrency?"}',
             'value_es' => '{"0":"¿Puedo depositar y retirar ganancias en criptomonedas?"}',
             'value_fr' => '{"0":"Puis-je déposer et retirer des gains en cryptomonnaie ?"}',
             'value_pt' => '{"0":"Posso depositar e sacar ganhos em criptomoedas?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 39
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Linebet supports over 20 cryptocurrencies, including Bitcoin, Ethereum, Litecoin, Dogecoin, and Tether."}',
             'value_es' => '{"0":"Sí, Linebet admite más de 20 criptomonedas, incluidas Bitcoin, Ethereum, Litecoin, Dogecoin y Tether."}',
             'value_fr' => '{"0":"Oui, Linebet prend en charge plus de 20 cryptomonnaies, dont Bitcoin, Ethereum, Litecoin, Dogecoin et Tether."}',
             'value_pt' => '{"0":"Sim, a Linebet suporta mais de 20 criptomoedas, incluindo Bitcoin, Ethereum, Litecoin, Dogecoin e Tether."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 40
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a Linebet mobile app?"}',
             'value_es' => '{"0":"¿Existe la aplicación móvil de Linebet?"}',
             'value_fr' => '{"0":"Existe-t-il une application mobile Linebet ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel da Linebet?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 41
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the Android app is available for download on the official Linebet website, and the iOS version can be downloaded directly from the App Store."}',
             'value_es' => '{"0":"Sí, la aplicación para Android está disponible para descargar en el sitio web oficial de Linebet, y la versión para iOS se puede descargar directamente desde la App Store."}',
             'value_fr' => '{"0":"Oui, l’application Android est disponible en téléchargement sur le site officiel de Linebet, et la version iOS peut être téléchargée directement depuis l’App Store."}',
             'value_pt' => '{"0":"Sim, o aplicativo para Android está disponível para download no site oficial da Linebet, e a versão para iOS pode ser baixada diretamente da App Store."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 42
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"How secure is it to use Linebet?"}',
             'value_es' => '{"0":"¿Qué tan seguro es usar Linebet?"}',
             'value_fr' => '{"0":"Dans quelle mesure est-il sûr d’utiliser Linebet ?"}',
             'value_pt' => '{"0":"Quão seguro é usar o Linebet?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 43
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The platform uses modern SSL encryption to protect personal data and transactions. In addition, all payments are processed through verified payment gateways, minimizing risks."}',
             'value_es' => '{"0":"La plataforma utiliza cifrado SSL moderno para proteger los datos personales y las transacciones. Además, todos los pagos se procesan a través de pasarelas de pago verificadas, minimizando los riesgos."}',
             'value_fr' => '{"0":"La plateforme utilise un chiffrement SSL moderne pour protéger les données personnelles et les transactions. De plus, tous les paiements sont traités via des passerelles de paiement vérifiées, ce qui minimise les risques."}',
             'value_pt' => '{"0":"A plataforma utiliza criptografia SSL moderna para proteger os dados pessoais e as transações. Além disso, todos os pagamentos são processados através de gateways de pagamento verificados, minimizando os riscos."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 44
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"What are the withdrawal limits at Linebet?"}',
             'value_es' => '{"0":"¿Cuáles son los límites de retiro en Linebet?"}',
             'value_fr' => '{"0":"Quelles sont les limites de retrait chez Linebet ?"}',
             'value_pt' => '{"0":"Quais são os limites de saque no Linebet?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 45
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The minimum withdrawal amount is around $1.5 or the equivalent in another currency. Maximum limits depend on the chosen method. For example, for bank cards, you can usually withdraw up to $5,000 at a time."}',
             'value_es' => '{"0":"El monto mínimo de retiro es aproximadamente $1,5 o su equivalente en otra moneda. Los límites máximos dependen del método elegido. Por ejemplo, con tarjetas bancarias, generalmente se puede retirar hasta $5,000 por operación."}',
             'value_fr' => '{"0":"Le montant minimum de retrait est d’environ 1,5 $ ou l’équivalent dans une autre devise. Les limites maximales dépendent de la méthode choisie. Par exemple, pour les cartes bancaires, vous pouvez généralement retirer jusqu’à 5 000 $ à la fois."}',
             'value_pt' => '{"0":"O valor mínimo de saque é cerca de $1,5 ou equivalente em outra moeda. Os limites máximos dependem do método escolhido. Por exemplo, para cartões bancários, normalmente é possível sacar até $5.000 de uma vez."}',
             'order' => 45
            ]
        );
    }
}
