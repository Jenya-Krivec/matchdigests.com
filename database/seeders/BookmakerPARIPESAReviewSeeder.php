<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
             'value_en' => '{"0":"PARIPESA Review"}',
             'value_es' => '{"0":"Reseña de PARIPESA"}',
             'value_fr' => '{"0":"Avis sur PARIPESA"}',
             'value_pt' => '{"0":"Análise da PARIPESA"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA is a relatively young bookmaker, founded in 2019, that has quickly gained popularity among sports betting enthusiasts from various countries. The platform focuses on offering a wide range of sporting events, a modern website design, and a user-friendly interface."}',
             'value_es' => '{"0":"PARIPESA es una casa de apuestas relativamente joven, fundada en 2019, que rápidamente ha ganado popularidad entre los aficionados a las apuestas deportivas de diferentes países. La plataforma se centra en ofrecer una amplia variedad de eventos deportivos, un diseño web moderno y una interfaz fácil de usar."}',
             'value_fr' => '{"0":"PARIPESA est un bookmaker relativement jeune, fondé en 2019, qui a rapidement gagné en popularité auprès des amateurs de paris sportifs dans de nombreux pays. La plateforme mise sur un large choix d’événements sportifs, un design moderne et une interface conviviale."}',
             'value_pt' => '{"0":"A PARIPESA é uma casa de apostas relativamente jovem, fundada em 2019, que rapidamente conquistou popularidade entre os entusiastas de apostas esportivas de vários países. A plataforma aposta em uma ampla variedade de eventos esportivos, design moderno e interface intuitiva."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The company operates under a Curacao license, allowing it to provide services in many countries. In just a few years, PARIPESA has managed to build a reputation as a reliable bookmaker for betting and gambling, offering not only classic sports betting but also a robust section with online casinos, virtual sports, and esports."}',
             'value_es' => '{"0":"La empresa opera bajo licencia de Curazao, lo que le permite prestar sus servicios en muchos países. En pocos años, PARIPESA ha logrado crear una reputación como casa de apuestas fiable para apuestas y juegos de azar, ofreciendo no solo apuestas deportivas clásicas, sino también una sólida sección de casino en línea, deportes virtuales y deportes electrónicos."}',
             'value_fr' => '{"0":"L’entreprise opère sous licence de Curaçao, ce qui lui permet de proposer ses services dans de nombreux pays. En quelques années, PARIPESA s’est forgé une réputation de bookmaker fiable pour les paris et les jeux d’argent, offrant non seulement des paris sportifs classiques, mais aussi une section solide consacrée aux casinos en ligne, aux sports virtuels et à l’esport."}',
             'value_pt' => '{"0":"A empresa opera sob licença de Curaçao, o que lhe permite oferecer serviços em muitos países. Em poucos anos, a PARIPESA construiu uma reputação como uma casa de apostas confiável para apostas e jogos de azar, oferecendo não apenas apostas esportivas clássicas, mas também uma seção robusta com cassino online, esportes virtuais e eSports."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"On the PARIPESA website, you can find more than 40 types of sports, ranging from classic football, tennis, and basketball to less popular disciplines such as hurling or water polo."}',
             'value_es' => '{"0":"En el sitio web de PARIPESA puedes encontrar más de 40 tipos de deportes, desde los clásicos como fútbol, tenis y baloncesto hasta disciplinas menos populares como hurling o waterpolo."}',
             'value_fr' => '{"0":"Sur le site de PARIPESA, vous pouvez trouver plus de 40 disciplines sportives, allant des classiques comme le football, le tennis et le basketball aux disciplines moins populaires telles que le hurling ou le water-polo."}',
             'value_pt' => '{"0":"No site da PARIPESA, você pode encontrar mais de 40 modalidades esportivas, desde os clássicos como futebol, tênis e basquete até disciplinas menos populares, como hurling ou polo aquático."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker pays special attention to football events. Here, you can bet on matches from Europe’s top leagues, Latin American championships, Asian tournaments, and even amateur competitions. For each event, a wide variety of betting options is available — you can wager not only on the outcome but also on yellow cards, corners, exact score, or individual player statistics."}',
             'value_es' => '{"0":"La casa de apuestas presta especial atención a los eventos de fútbol. Aquí podrás apostar en partidos de las ligas más importantes de Europa, campeonatos de América Latina, torneos asiáticos e incluso competiciones amateurs. Para cada evento, hay una gran variedad de opciones de apuestas: no solo puedes apostar al resultado, sino también a las tarjetas amarillas, saques de esquina, marcador exacto o estadísticas individuales de los jugadores."}',
             'value_fr' => '{"0":"Le bookmaker accorde une attention particulière aux événements footballistiques. Vous pouvez parier sur des matchs des meilleures ligues européennes, des championnats d’Amérique latine, des tournois asiatiques et même sur des compétitions amateurs. Pour chaque événement, un large choix d’options de paris est disponible : non seulement sur le résultat, mais aussi sur les cartons jaunes, les corners, le score exact ou les statistiques individuelles des joueurs."}',
             'value_pt' => '{"0":"A casa de apostas dá atenção especial aos eventos de futebol. Aqui, você pode apostar em partidas das principais ligas europeias, campeonatos da América Latina, torneios asiáticos e até competições amadoras. Para cada evento, há uma grande variedade de opções de apostas: não apenas no resultado, mas também em cartões amarelos, escanteios, placar exato ou estatísticas individuais dos jogadores."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The betting line is constantly updated, and the odds are calculated with the help of professional analysts to make betting more profitable for players. Here are the main sports available on the site:"}',
             'value_es' => '{"0":"La línea de apuestas se actualiza constantemente y las cuotas se calculan con la ayuda de analistas profesionales para que las apuestas sean más rentables para los jugadores. Estos son los principales deportes disponibles en el sitio:"}',
             'value_fr' => '{"0":"La ligne de paris est constamment mise à jour, et les cotes sont calculées avec l’aide d’analystes professionnels afin de rendre les paris plus avantageux pour les joueurs. Voici les principaux sports disponibles sur le site :"}',
             'value_pt' => '{"0":"A linha de apostas é constantemente atualizada e as odds são calculadas com a ajuda de analistas profissionais para tornar as apostas mais vantajosas para os jogadores. Estes são os principais esportes disponíveis no site:"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA has a full-fledged online casino section that, it should be noted, can even compete with some dedicated platforms. Here you’ll find over 4,000 games from leading providers such as NetEnt, Pragmatic Play, Play’n GO, and Microgaming."}',
             'value_es' => '{"0":"PARIPESA cuenta con una sección de casino online completamente desarrollada que, cabe destacar, puede competir incluso con algunas plataformas especializadas. Aquí encontrarás más de 4.000 juegos de los principales proveedores, como NetEnt, Pragmatic Play, Play’n GO y Microgaming."}',
             'value_fr' => '{"0":"PARIPESA dispose d’une section de casino en ligne complète qui, il faut le souligner, rivalise même avec certaines plateformes spécialisées. On y trouve plus de 4 000 jeux provenant de fournisseurs réputés tels que NetEnt, Pragmatic Play, Play’n GO et Microgaming."}',
             'value_pt' => '{"0":"A PARIPESA possui uma seção completa de cassino online que, vale destacar, pode competir até com plataformas especializadas. Aqui você encontra mais de 4.000 jogos de provedores renomados, como NetEnt, Pragmatic Play, Play’n GO e Microgaming."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In the casino section, you’ll have access to classic slots, roulette, as well as the opportunity to play live games with real dealers. The Live Casino section allows you to experience the atmosphere of a real casino, interacting with hosts and other players in real time."}',
             'value_es' => '{"0":"En la sección de casino tendrás acceso a tragamonedas clásicas, ruleta, así como la posibilidad de jugar en vivo con crupieres reales. La sección Live Casino te permite disfrutar de la atmósfera de un casino real, interactuando con presentadores y otros jugadores en tiempo real."}',
             'value_fr' => '{"0":"Dans la section casino, vous aurez accès à des machines à sous classiques, à la roulette, ainsi qu’à la possibilité de jouer à des jeux en direct avec de vrais croupiers. La section Live Casino vous plonge dans l’atmosphère d’un véritable casino, en interagissant avec les animateurs et les autres joueurs en temps réel."}',
             'value_pt' => '{"0":"Na seção de cassino, você terá acesso a caça-níqueis clássicos, roleta e também a chance de jogar ao vivo com dealers reais. A seção Live Casino permite vivenciar a atmosfera de um cassino de verdade, interagindo com apresentadores e outros jogadores em tempo real."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"There are also options for fans of non-standard formats — TV games, crash games, bingo, and lotteries. The casino is fully integrated into the platform, so players can easily switch between sports betting and slots."}',
             'value_es' => '{"0":"También hay opciones para los aficionados a formatos menos convencionales: juegos de TV, juegos crash, bingo y loterías. El casino está totalmente integrado en la plataforma, por lo que el jugador puede cambiar fácilmente entre apuestas deportivas y tragamonedas."}',
             'value_fr' => '{"0":"Les amateurs de formats originaux trouveront également leur bonheur avec les jeux TV, les crash games, le bingo et les loteries. Le casino est entièrement intégré à la plateforme, ce qui permet de passer facilement des paris sportifs aux machines à sous."}',
             'value_pt' => '{"0":"Também há opções para quem gosta de formatos diferenciados — jogos de TV, crash games, bingo e loterias. O cassino é totalmente integrado à plataforma, permitindo que o jogador alterne facilmente entre apostas esportivas e caça-níqueis."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA pleasantly surprises with its odds, especially if you’re used to comparing several bookmakers before placing a bet. For top football matches, the odds here are often higher than the market average."}',
             'value_es' => '{"0":"PARIPESA sorprende gratamente con sus cuotas, especialmente si estás acostumbrado a comparar varias casas de apuestas antes de jugar. En los partidos de fútbol más importantes, las cuotas aquí suelen ser más altas que la media del mercado."}',
             'value_fr' => '{"0":"PARIPESA surprend agréablement par ses cotes, surtout si vous avez l’habitude de comparer plusieurs bookmakers avant de miser. Sur les matchs de football les plus importants, les cotes y sont souvent supérieures à la moyenne du marché."}',
             'value_pt' => '{"0":"A PARIPESA surpreende positivamente com as suas odds, especialmente se você costuma comparar várias casas de apostas antes de apostar. Nos principais jogos de futebol, as odds aqui costumam ser mais altas que a média do mercado."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For example, in the Champions League final, the odds for the favourite to win can be 1.92, whereas many bookmakers keep them in the 1.85–1.88 range. In tennis tournaments at the ATP or WTA level, it’s not uncommon to see odds of 2.05 for evenly matched opponents."}',
             'value_es' => '{"0":"Por ejemplo, en la final de la Liga de Campeones, la cuota para la victoria del favorito puede ser de 1.92, mientras que en muchas casas de apuestas suele estar entre 1.85 y 1.88. En torneos de tenis de nivel ATP o WTA, no es raro encontrar cuotas de 2.05 para rivales de fuerza similar."}',
             'value_fr' => '{"0":"Par exemple, pour la finale de la Ligue des Champions, la cote pour la victoire du favori peut être de 1,92, alors que chez de nombreux bookmakers elle se situe entre 1,85 et 1,88. Dans les tournois de tennis de niveau ATP ou WTA, il n’est pas rare de voir des cotes de 2,05 pour des adversaires de force égale."}',
             'value_pt' => '{"0":"Por exemplo, na final da Liga dos Campeões, a odd para a vitória do favorito pode chegar a 1,92, enquanto em muitas casas de apostas fica entre 1,85 e 1,88. Em torneios de tênis de nível ATP ou WTA, não é incomum encontrar odds de 2,05 para adversários com força semelhante."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet starts at just €0.20 or the equivalent in another currency, while maximum winnings depend on the popularity of the event and the specific market. This combination of odds and limits makes PARIPESA an attractive choice for both new and experienced players."}',
             'value_es' => '{"0":"La apuesta mínima es de solo 0,20 € o su equivalente en otra moneda, mientras que las ganancias máximas dependen de la popularidad del evento y del mercado específico. Esta combinación de cuotas y límites hace que PARIPESA sea una opción atractiva tanto para jugadores nuevos como experimentados."}',
             'value_fr' => '{"0":"La mise minimale est de seulement 0,20 € ou l’équivalent dans une autre devise, tandis que les gains maximums dépendent de la popularité de l’événement et du marché spécifique. Cette combinaison de cotes et de limites rend PARIPESA attrayante pour les joueurs débutants comme expérimentés."}',
             'value_pt' => '{"0":"A aposta mínima é de apenas €0,20 ou o equivalente noutra moeda, enquanto os ganhos máximos dependem da popularidade do evento e do mercado específico. Essa combinação de odds e limites torna a PARIPESA uma escolha atraente tanto para novos jogadores quanto para os mais experientes."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For popular football matches, you can find over 1,000 betting options. Speaking specifically about football, you can bet on Asian handicaps, totals, half-time results, player statistics, and even special propositions such as who will score the first goal or whether there will be a penalty, as well as place combination bets."}',
             'value_es' => '{"0":"En los partidos de fútbol más populares, puedes encontrar más de 1.000 opciones de apuestas. Hablando específicamente de fútbol, puedes apostar a hándicaps asiáticos, totales, resultados por tiempo, estadísticas de jugadores e incluso apuestas especiales como quién marcará el primer gol o si habrá un penalti, así como realizar apuestas combinadas."}',
             'value_fr' => '{"0":"Pour les matchs de football les plus populaires, vous pouvez trouver plus de 1 000 options de paris. Plus précisément pour le football, vous pouvez parier sur les handicaps asiatiques, les totaux, les résultats par mi-temps, les statistiques des joueurs et même des paris spéciaux comme qui marquera le premier but ou s’il y aura un penalty, ainsi que faire des paris combinés."}',
             'value_pt' => '{"0":"Nos jogos de futebol mais populares, é possível encontrar mais de 1.000 opções de apostas. Falando especificamente de futebol, você pode apostar em handicaps asiáticos, totais, resultados por tempo, estatísticas dos jogadores e até opções especiais como quem marcará o primeiro gol ou se haverá um pênalti, além de fazer apostas combinadas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For tennis, there are bets on games, sets, exact scores, and individual player statistics. In esports, you can bet on maps, the number of rounds, and even specific events within the match."}',
             'value_es' => '{"0":"En tenis, hay apuestas a juegos, sets, marcador exacto y estadísticas individuales de los jugadores. En los eSports, puedes apostar a mapas, número de rondas e incluso a eventos específicos dentro del partido."}',
             'value_fr' => '{"0":"Pour le tennis, il y a des paris sur les jeux, les sets, le score exact et les statistiques individuelles des joueurs. Dans l’esport, vous pouvez parier sur les cartes, le nombre de manches et même sur des événements spécifiques au cours du match."}',
             'value_pt' => '{"0":"No tênis, há apostas em games, sets, placar exato e estatísticas individuais dos jogadores. Nos eSports, é possível apostar em mapas, número de rodadas e até em eventos específicos dentro da partida."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA offers an extended live betting line with dozens of matches every hour. There is no live video streaming, but instead, there is a visual match tracker with detailed statistics. This helps you make informed decisions even without watching the game."}',
             'value_es' => '{"0":"PARIPESA ofrece una línea en vivo ampliada con decenas de partidos cada hora. No hay transmisión en vivo de vídeo, pero en su lugar hay un rastreador visual de partidos con estadísticas detalladas. Esto ayuda a tomar decisiones informadas incluso sin ver el partido."}',
             'value_fr' => '{"0":"PARIPESA propose une ligne de paris en direct étendue avec des dizaines de matchs chaque heure. Il n’y a pas de diffusion vidéo en direct, mais un suivi visuel des matchs avec des statistiques détaillées est disponible. Cela aide à prendre des décisions éclairées même sans regarder la rencontre."}',
             'value_pt' => '{"0":"A PARIPESA oferece uma linha de apostas ao vivo ampliada, com dezenas de partidas a cada hora. Não há transmissão de vídeo ao vivo, mas existe um rastreador visual de partidas com estatísticas detalhadas. Isso ajuda a tomar decisões bem informadas mesmo sem assistir ao jogo."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Odds are updated instantly, and the time to place a live bet is minimal, which is especially important for those who play on fast-moving markets."}',
             'value_es' => '{"0":"Las cuotas se actualizan al instante y el tiempo para realizar una apuesta en vivo es mínimo, lo que resulta especialmente importante para quienes juegan en mercados rápidos."}',
             'value_fr' => '{"0":"Les cotes sont mises à jour instantanément et le temps pour placer un pari en direct est minimal, ce qui est particulièrement important pour ceux qui jouent sur des marchés rapides."}',
             'value_pt' => '{"0":"As odds são atualizadas instantaneamente e o tempo para fazer uma aposta ao vivo é mínimo, o que é especialmente importante para quem aposta em mercados rápidos."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA pays great attention to protecting its clients’ data. The platform uses modern SSL encryption protocols to prevent the interception of personal and financial information. Operating under a Curaçao license means the company undergoes regular checks and complies with international fair play standards."}',
             'value_es' => '{"0":"PARIPESA presta gran atención a la protección de los datos de sus clientes. La plataforma utiliza modernos protocolos de cifrado SSL para evitar la interceptación de información personal y financiera. Operar bajo una licencia de Curazao significa que la empresa se somete a controles regulares y cumple con los estándares internacionales de juego limpio."}',
             'value_fr' => '{"0":"PARIPESA accorde une grande importance à la protection des données de ses clients. La plateforme utilise des protocoles de chiffrement SSL modernes afin d’empêcher toute interception d’informations personnelles et financières. Travailler sous licence de Curaçao signifie que l’entreprise subit des contrôles réguliers et respecte les normes internationales de jeu équitable."}',
             'value_pt' => '{"0":"A PARIPESA dá grande importância à proteção dos dados dos seus clientes. A plataforma utiliza protocolos modernos de criptografia SSL para impedir a interceptação de informações pessoais e financeiras. Operar sob licença de Curaçao significa que a empresa passa por verificações regulares e cumpre os padrões internacionais de jogo justo."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA also collaborates with independent auditors who test the random number generators in the casino. Account security is reinforced by two-factor authentication, and the security team may request additional verification in case of suspicious activity."}',
             'value_es' => '{"0":"PARIPESA también colabora con auditores independientes que prueban los generadores de números aleatorios del casino. La seguridad de la cuenta se refuerza con la autenticación de dos factores, y el equipo de seguridad puede solicitar una verificación adicional en caso de actividad sospechosa."}',
             'value_fr' => '{"0":"PARIPESA collabore également avec des auditeurs indépendants qui testent les générateurs de nombres aléatoires du casino. La sécurité des comptes est renforcée par l’authentification à deux facteurs, et l’équipe de sécurité peut demander une vérification supplémentaire en cas d’activité suspecte."}',
             'value_pt' => '{"0":"A PARIPESA também colabora com auditores independentes que testam os geradores de números aleatórios do cassino. A segurança da conta é reforçada por autenticação de dois fatores, e a equipe de segurança pode solicitar verificação adicional em caso de atividade suspeita."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA has ensured that financial transactions are as convenient as possible. You can top up your account using Visa and Mastercard bank cards, e-wallets such as Skrill, Neteller, and Jeton, cryptocurrencies, and local payment services."}',
             'value_es' => '{"0":"PARIPESA se ha asegurado de que las transacciones financieras sean lo más cómodas posible. Puede recargar su cuenta con tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill, Neteller y Jeton, criptomonedas y servicios de pago locales."}',
             'value_fr' => '{"0":"PARIPESA a veillé à ce que les transactions financières soient aussi pratiques que possible. Vous pouvez approvisionner votre compte avec des cartes bancaires Visa et Mastercard, des portefeuilles électroniques comme Skrill, Neteller et Jeton, des cryptomonnaies et des services de paiement locaux."}',
             'value_pt' => '{"0":"A PARIPESA garantiu que as transações financeiras sejam o mais convenientes possível. É possível recarregar a conta com cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill, Neteller e Jeton, criptomoedas e serviços de pagamento locais."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are credited instantly, and withdrawals are also processed fairly quickly. Most transactions are completed within a few hours, although the official timeframe stated by the bookmaker is up to 3 days. The minimum deposit and withdrawal amount is $1 or the equivalent in another currency. An additional advantage is that there are no fees charged by the bookmaker."}',
             'value_es' => '{"0":"Los depósitos se acreditan de forma instantánea y las retiradas también se procesan bastante rápido. La mayoría de las transacciones se completan en pocas horas, aunque el plazo oficial indicado por la casa de apuestas es de hasta 3 días. El importe mínimo de depósito y retirada es de 1 dólar o su equivalente en otra moneda. Además, la casa de apuestas no cobra comisiones."}',
             'value_fr' => '{"0":"Les dépôts sont crédités instantanément et les retraits sont également traités assez rapidement. La plupart des transactions sont finalisées en quelques heures, bien que le délai officiel annoncé par le bookmaker soit de 3 jours maximum. Le montant minimum pour un dépôt ou un retrait est de 1 dollar ou l’équivalent dans une autre devise. Un avantage supplémentaire est qu’aucune commission n’est prélevée par le bookmaker."}',
             'value_pt' => '{"0":"Os depósitos são creditados instantaneamente e os levantamentos também são processados de forma bastante rápida. A maioria das transações é concluída em poucas horas, embora o prazo oficial informado pela casa de apostas seja de até 3 dias. O valor mínimo para depósito e levantamento é de 1 dólar ou o equivalente em outra moeda. Um benefício adicional é que a casa de apostas não cobra comissão."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
                'order' => 31
            ],
            ['key' => 'paripesa',
                'bookmaker_id' => 6,
                'component' => 'quick_info',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
                'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA customer support operates around the clock, which is an important advantage for players from different time zones. You can contact the operators via live chat on the website, by phone, or by email."}',
             'value_es' => '{"0":"El servicio de atención al cliente de PARIPESA funciona las 24 horas, lo que es una ventaja importante para los jugadores de diferentes zonas horarias. Puede comunicarse con los operadores a través del chat en vivo en el sitio web, por teléfono o por correo electrónico."}',
             'value_fr' => '{"0":"Le service client de PARIPESA est disponible 24h/24, ce qui est un atout important pour les joueurs de différents fuseaux horaires. Vous pouvez contacter les opérateurs via le chat en direct sur le site, par téléphone ou par e-mail."}',
             'value_pt' => '{"0":"O suporte ao cliente da PARIPESA funciona 24 horas por dia, o que é uma vantagem importante para jogadores de diferentes fusos horários. Você pode entrar em contato com os operadores via chat ao vivo no site, por telefone ou por e-mail."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 34
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 35
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events",
                                 "1":"Competitive odds",
                                 "2":"Large casino section",
                                 "3":"Cryptocurrency support",
                                 "4":"Mobile version and apps"},
                             "1":
                                {"0":"Some withdrawal methods take up to 3 days",
                                 "1":"Interface can seem overloaded"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de eventos deportivos",
                                 "1":"Cuotas competitivas",
                                 "2":"Gran sección de casino",
                                 "3":"Soporte para criptomonedas",
                                 "4":"Versión móvil y aplicaciones"},
                             "1":
                                {"0":"Algunos métodos de retiro pueden tardar hasta 3 días",
                                 "1":"La interfaz puede parecer sobrecargada"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d\'événements sportifs",
                                 "1":"Cotes compétitives",
                                 "2":"Grande section casino",
                                 "3":"Support des cryptomonnaies",
                                 "4":"Version mobile et applications"},
                             "1":
                                {"0":"Certains modes de retrait peuvent prendre jusqu\'à 3 jours",
                                 "1":"L\'interface peut sembler surchargée"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla seleção de eventos esportivos",
                                 "1":"Odds competitivas",
                                 "2":"Grande seção de cassino",
                                 "3":"Suporte a criptomoedas",
                                 "4":"Versão móvel e aplicativos"},
                             "1":
                                {"0":"Alguns métodos de saque levam até 3 dias",
                                 "1":"A interface pode parecer sobrecarregada"}
                             }',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 36
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 37
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Is it legal to use PARIPESA?"}',
             'value_es' => '{"0":"¿Es legal usar PARIPESA?"}',
             'value_fr' => '{"0":"Est-il légal d\'utiliser PARIPESA ?"}',
             'value_pt' => '{"0":"É legal usar o PARIPESA?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 38
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the bookmaker operates under a Curacao license."}',
             'value_es' => '{"0":"Sí, la casa de apuestas opera bajo una licencia de Curazao."}',
             'value_fr' => '{"0":"Oui, le bookmaker opère sous une licence de Curaçao."}',
             'value_pt' => '{"0":"Sim, a casa de apostas opera sob uma licença de Curaçao."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 39
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 40
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, apps are available for Android and iOS, and there is also a convenient mobile version of the website."}',
             'value_es' => '{"0":"Sí, hay aplicaciones disponibles para Android e iOS, y también hay una versión móvil conveniente del sitio web."}',
             'value_fr' => '{"0":"Oui, des applications sont disponibles pour Android et iOS, ainsi qu\'une version mobile pratique du site web."}',
             'value_pt' => '{"0":"Sim, os aplicativos estão disponíveis para Android e iOS, e também há uma versão móvel conveniente do site."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 41
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"How fast is the withdrawal process?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Quelle est la rapidité des retraits ?"}',
             'value_pt' => '{"0":"Quão rápido é o processo de saque?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 42
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, withdrawals are processed within a few hours, but sometimes it may take up to 72 hours."}',
             'value_es' => '{"0":"En la mayoría de los casos, los retiros se procesan en unas pocas horas, pero a veces pueden tardar hasta 72 horas."}',
             'value_fr' => '{"0":"Dans la plupart des cas, les retraits sont effectués en quelques heures, mais parfois cela peut prendre jusqu\'à 72 heures."}',
             'value_pt' => '{"0":"Na maioria dos casos, os saques são processados em poucas horas, mas às vezes podem levar até 72 horas."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 43
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Can I bet using cryptocurrency?"}',
             'value_es' => '{"0":"¿Se puede apostar con criptomonedas?"}',
             'value_fr' => '{"0":"Peut-on parier en cryptomonnaie ?"}',
             'value_pt' => '{"0":"É possível apostar com criptomoedas?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 44
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Bitcoin, Ethereum, and other popular coins are supported."}',
             'value_es' => '{"0":"Sí, se aceptan Bitcoin, Ethereum y otras monedas populares."}',
             'value_fr' => '{"0":"Oui, Bitcoin, Ethereum et d\'autres monnaies populaires sont pris en charge."}',
             'value_pt' => '{"0":"Sim, Bitcoin, Ethereum e outras moedas populares são suportadas."}',
             'order' => 44
            ]
        );
    }
}
