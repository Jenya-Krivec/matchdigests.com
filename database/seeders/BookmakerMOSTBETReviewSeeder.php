<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
             'value_en' => '{"0":"MOSTBET Review"}',
             'value_es' => '{"0":"Reseña de MOSTBET"}',
             'value_fr' => '{"0":"Avis sur MOSTBET"}',
             'value_pt' => '{"0":"Análise da MOSTBET"}',
             'order' => 1
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet is a bookmaker that has been operating since 2009 and is present in over 90 countries worldwide. The site is available in more than 40 languages and features a simple and user-friendly design."}',
             'value_es' => '{"0":"Mostbet es una casa de apuestas que opera desde 2009 y está presente en más de 90 países en todo el mundo. El sitio está disponible en más de 40 idiomas y cuenta con un diseño sencillo y fácil de usar."}',
             'value_fr' => '{"0":"Mostbet est un bookmaker qui opère depuis 2009 et est présent dans plus de 90 pays à travers le monde. Le site est disponible en plus de 40 langues et dispose d’un design simple et facile à comprendre."}',
             'value_pt' => '{"0":"A Mostbet é uma casa de apostas que atua desde 2009 e está presente em mais de 90 países no mundo. O site está disponível em mais de 40 idiomas e possui um design simples e intuitivo."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet holds a Curacao license, which means the platform is not accessible in some countries. However, with the help of a VPN, this restriction can be bypassed. So, let’s take a closer look at the opportunities this bookmaker offers."}',
             'value_es' => '{"0":"Mostbet posee una licencia de Curazao, lo que significa que la plataforma no está disponible en algunos países. Sin embargo, con la ayuda de una VPN, se puede eludir esta restricción. Así que, echemos un vistazo más detallado a las posibilidades que ofrece esta casa de apuestas."}',
             'value_fr' => '{"0":"Mostbet détient une licence de Curaçao, ce qui signifie que la plateforme n’est pas accessible dans certains pays. Cependant, grâce à un VPN, il est possible de contourner cette restriction. Voyons donc plus en détail les possibilités offertes par ce bookmaker."}',
             'value_pt' => '{"0":"A Mostbet possui licença de Curaçao, o que significa que a plataforma não está disponível em alguns países. No entanto, com a ajuda de uma VPN, é possível contornar essa restrição. Então, vamos analisar mais detalhadamente as oportunidades que esta casa de apostas oferece."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Mostbet sports line covers around 15–20 types of sports in the pre-match, including football, tennis, hockey, esports, and other popular disciplines. Special attention is given to top football leagues such as the English Premier League, the German Bundesliga, the Spanish La Liga, the Italian Serie A, and UEFA competitions."}',
             'value_es' => '{"0":"La línea deportiva de Mostbet cubre alrededor de 15–20 tipos de deportes en el prematch, incluyendo fútbol, tenis, hockey, deportes electrónicos y otras disciplinas populares. Se presta especial atención a las principales ligas de fútbol como la Premier League inglesa, la Bundesliga alemana, la Primera División española, la Serie A italiana y las competiciones de la UEFA."}',
             'value_fr' => '{"0":"La ligne sportive de Mostbet couvre environ 15 à 20 disciplines sportives en pré-match, notamment le football, le tennis, le hockey, l’e-sport et d’autres disciplines populaires. Une attention particulière est portée aux principales ligues de football telles que la Premier League anglaise, la Bundesliga allemande, la Liga espagnole, la Serie A italienne et les compétitions de l’UEFA."}',
             'value_pt' => '{"0":"A linha esportiva da Mostbet cobre cerca de 15–20 modalidades no pré-jogo, incluindo futebol, tênis, hóquei, e-sports e outras disciplinas populares. Há uma atenção especial para as principais ligas de futebol, como a Premier League inglesa, a Bundesliga alemã, a La Liga espanhola, a Serie A italiana e as competições da UEFA."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, tournaments of various levels are available, such as the Grand Slam, ATP, WTA, ITF, and Challenger events, with a wide range of 50–100 betting markets. Esports are actively developing here as well, and you can already find games like CS:GO, Dota 2, Valorant, and StarCraft."}',
             'value_es' => '{"0":"En tenis, hay disponibles torneos de varios niveles, como Grand Slam, ATP, WTA, ITF y Challenger, con una amplia gama de 50–100 mercados de apuestas. Los deportes electrónicos también se están desarrollando activamente aquí, y ya puedes encontrar juegos como CS:GO, Dota 2, Valorant y StarCraft."}',
             'value_fr' => '{"0":"En tennis, des tournois de différents niveaux sont proposés, comme le Grand Chelem, l’ATP, la WTA, l’ITF et le Challenger, avec un large éventail de 50 à 100 marchés de paris. L’e-sport se développe également activement ici, et vous pouvez déjà trouver des jeux comme CS:GO, Dota 2, Valorant et StarCraft."}',
             'value_pt' => '{"0":"No tênis, estão disponíveis torneios de vários níveis, como Grand Slam, ATP, WTA, ITF e Challenger, com uma ampla variedade de 50 a 100 mercados de apostas. Os e-sports também estão se desenvolvendo ativamente aqui, e você já pode encontrar jogos como CS:GO, Dota 2, Valorant e StarCraft."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Along with sports betting, Mostbet offers an online casino with hundreds of slots, live casino, card games, lotteries, poker, and roulette. The game library is powered by leading providers such as Pragmatic Play, Betsoft, NetEnt, and Microgaming. The section is quite user-friendly. You can filter games by genres, tags, providers, and a search function is also available."}',
             'value_es' => '{"0":"Junto con las apuestas deportivas, Mostbet ofrece un casino en línea con cientos de tragamonedas, casino en vivo, juegos de cartas, loterías, póker y ruleta. La biblioteca de juegos está formada por proveedores líderes como Pragmatic Play, Betsoft, NetEnt y Microgaming. La sección es bastante fácil de usar. Puedes filtrar juegos por géneros, etiquetas, proveedores, y también hay una función de búsqueda disponible."}',
             'value_fr' => '{"0":"En plus des paris sportifs, Mostbet propose un casino en ligne avec des centaines de machines à sous, un casino en direct, des jeux de cartes, des loteries, du poker et de la roulette. La ludothèque est fournie par des fournisseurs de premier plan tels que Pragmatic Play, Betsoft, NetEnt et Microgaming. La section est assez conviviale. Vous pouvez filtrer les jeux par genres, tags, fournisseurs, et une fonction de recherche est également disponible."}',
             'value_pt' => '{"0":"Juntamente com as apostas esportivas, a Mostbet oferece um cassino online com centenas de slots, cassino ao vivo, jogos de cartas, loterias, pôquer e roleta. A base de jogos é formada pelos principais provedores como Pragmatic Play, Betsoft, NetEnt e Microgaming. A seção é bastante fácil de usar. Você pode filtrar jogos por gêneros, tags, provedores, e também há uma função de busca disponível."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The live casino lets you dive into the atmosphere of a virtual Vegas. There are various tables with different buy-in levels."}',
             'value_es' => '{"0":"El casino en vivo te permite sumergirte en la atmósfera de un Vegas virtual. Hay varias mesas con diferentes niveles de entrada."}',
             'value_fr' => '{"0":"Le casino en direct vous plonge dans l’ambiance d’un Vegas virtuel. Il y a différentes tables avec différents niveaux d’entrée."}',
             'value_pt' => '{"0":"O cassino ao vivo permite que você mergulhe na atmosfera de um Vegas virtual. Existem várias mesas com diferentes níveis de entrada."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"One of Mostbet’s strongest points is its odds, which noticeably stand out among many online bookmakers. For popular football matches, the odds for a win, draw, or loss can reach up to 1.97 for both teams."}',
             'value_es' => '{"0":"Una de las mayores fortalezas de Mostbet son sus cuotas, que destacan notablemente entre muchas casas de apuestas en línea. Para partidos populares de fútbol, las cuotas para la victoria, empate o derrota pueden alcanzar hasta 1.97 para ambos equipos."}',
             'value_fr' => '{"0":"L’un des points forts de Mostbet réside dans ses cotes, qui se démarquent nettement parmi de nombreux bookmakers en ligne. Pour les matchs de football populaires, les cotes pour la victoire, le nul ou la défaite peuvent atteindre jusqu’à 1,97 pour les deux équipes."}',
             'value_pt' => '{"0":"Um dos pontos fortes da Mostbet são as odds, que se destacam notavelmente entre muitas casas de apostas online. Para partidas populares de futebol, as odds para vitória, empate ou derrota podem chegar a 1,97 para ambas as equipes."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, Mostbet also maintains a good level. At ATP or WTA matches, you can find odds around 1.92, and at major tournaments, the values can be even higher. In basketball, especially in the NBA, odds on favorites can be around 1.45–1.47."}',
             'value_es' => '{"0":"En tenis, Mostbet también mantiene un buen nivel. En partidos de ATP o WTA, puedes encontrar cuotas alrededor de 1.92, y en torneos importantes, los valores pueden ser aún mayores. En baloncesto, especialmente en la NBA, las cuotas para los favoritos pueden estar entre 1.45 y 1.47."}',
             'value_fr' => '{"0":"En tennis, Mostbet garde également un bon niveau. Pour les matchs ATP ou WTA, on trouve des cotes autour de 1,92, et lors des grands tournois, les valeurs peuvent être encore plus élevées. En basket-ball, notamment en NBA, les cotes sur les favoris peuvent se situer entre 1,45 et 1,47."}',
             'value_pt' => '{"0":"No tênis, a Mostbet também mantém um bom nível. Em partidas ATP ou WTA, você pode encontrar odds em torno de 1,92, e em grandes torneios, os valores podem ser ainda maiores. No basquete, especialmente na NBA, as odds para os favoritos podem ficar entre 1,45 e 1,47."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Regarding betting limits, for popular events, the maximum can reach several thousand dollars or the equivalent in other currencies. For less known matches, limits are lower but still quite reasonable."}',
             'value_es' => '{"0":"En cuanto a los límites de apuestas, para eventos populares el máximo puede alcanzar varios miles de dólares o su equivalente en otras monedas. Para partidos menos conocidos, los límites son más bajos pero aún bastante razonables."}',
             'value_fr' => '{"0":"Concernant les limites de mise, pour les événements populaires, le plafond peut atteindre plusieurs milliers de dollars ou l’équivalent dans d’autres devises. Pour les matchs moins connus, les limites sont plus basses mais restent tout à fait acceptables."}',
             'value_pt' => '{"0":"Quanto aos limites de apostas, para eventos populares, o máximo pode alcançar vários milhares de dólares ou equivalente em outras moedas. Para partidas menos conhecidas, os limites são mais baixos, mas ainda bastante razoáveis."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Overall, if getting the most favorable odds on the market is critical for you, especially on top sports events, Mostbet definitely deserves your attention."}',
             'value_es' => '{"0":"En general, si para ti es fundamental obtener las cuotas más favorables en el mercado, especialmente en eventos deportivos de alto nivel, Mostbet definitivamente merece tu atención."}',
             'value_fr' => '{"0":"Dans l’ensemble, si obtenir les cotes les plus avantageuses sur le marché est crucial pour vous, notamment sur les événements sportifs majeurs, Mostbet mérite clairement votre attention."}',
             'value_pt' => '{"0":"No geral, se para você é fundamental obter as odds mais favoráveis no mercado, especialmente em eventos esportivos de alto nível, a Mostbet definitivamente merece sua atenção."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet offers a wide range of betting options. For popular football matches, such as those in the Champions League or the English Premier League, you can find over 1,500 betting markets. These include not only classic bets on the result, totals, and handicaps but also more unusual options like the number of goals scored by a specific player, the number of corners, exact scores for each half, and penalties."}',
             'value_es' => '{"0":"Mostbet ofrece una amplia variedad de opciones para apostar. En partidos populares de fútbol, como la Liga de Campeones o la Premier League inglesa, puedes encontrar más de 1,500 mercados de apuestas. Estos incluyen no solo apuestas clásicas al resultado, totales y hándicaps, sino también opciones más inusuales como la cantidad de goles de un jugador específico, el número de córners, el marcador exacto en cada mitad y penales."}',
             'value_fr' => '{"0":"Mostbet propose un large choix d’options de paris. Pour les matchs de football populaires, comme ceux de la Ligue des Champions ou de la Premier League anglaise, vous pouvez trouver plus de 1 500 marchés de paris. Cela inclut non seulement les paris classiques sur le résultat, les totaux et les handicaps, mais aussi des options plus rares comme le nombre de buts d’un joueur spécifique, le nombre de corners, le score exact à chaque mi-temps et les penalties."}',
             'value_pt' => '{"0":"A Mostbet oferece uma ampla variedade de opções de apostas. Para partidas populares de futebol, como na Liga dos Campeões ou na Premier League inglesa, você pode encontrar mais de 1.500 mercados de apostas. Isso inclui não apenas apostas clássicas em resultados, totais e handicaps, mas também opções mais incomuns, como o número de gols marcados por um jogador específico, o número de escanteios, placares exatos para cada tempo e pênaltis."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, besides match winner bets, there are options for the number of games, sets, double faults, breaks, and even the outcome of each individual game. In basketball matches, especially in the NBA, you can bet on individual player statistics like points, rebounds, and assists."}',
             'value_es' => '{"0":"En tenis, además de las apuestas al ganador del partido, hay opciones para el número de juegos, sets, dobles faltas, quiebres e incluso el resultado de cada juego individual. En partidos de baloncesto, especialmente en la NBA, puedes apostar a estadísticas individuales de los jugadores, como puntos, rebotes y asistencias."}',
             'value_fr' => '{"0":"Au tennis, en plus des paris sur le vainqueur du match, il est possible de parier sur le nombre de jeux, de sets, les doubles fautes, les breaks et même le résultat de chaque jeu individuel. Dans les matchs de basketball, surtout en NBA, vous pouvez parier sur les statistiques individuelles des joueurs, comme les points, les rebonds et les passes décisives."}',
             'value_pt' => '{"0":"No tênis, além das apostas no vencedor da partida, há opções para o número de games, sets, erros duplos, quebras e até mesmo o resultado de cada game individual. Em partidas de basquete, especialmente na NBA, você pode apostar em estatísticas individuais dos jogadores, como pontos, rebotes e assistências."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet is not limited to just sports. The site features expanded lines on esports, political events, and even entertainment shows. Thanks to this variety, everyone can find events that suit their betting style, and those who enjoy deep analysis get the maximum opportunities to find the best odds."}',
             'value_es' => '{"0":"Mostbet no se limita solo al deporte. En el sitio hay líneas ampliadas para esports, eventos políticos e incluso programas de entretenimiento. Gracias a esta variedad, cada uno puede encontrar eventos que se adapten a su estilo de apuesta, y quienes disfrutan del análisis profundo tienen máximas oportunidades para encontrar las mejores cuotas."}',
             'value_fr' => '{"0":"Mostbet ne se limite pas au sport. Le site propose des lignes étendues sur l’esport, les événements politiques et même les émissions de divertissement. Grâce à cette diversité, chacun peut trouver des événements adaptés à son style de jeu, et ceux qui aiment l’analyse approfondie ont un maximum d’opportunités pour trouver les meilleures cotes."}',
             'value_pt' => '{"0":"A Mostbet não se limita apenas ao esporte. O site apresenta linhas ampliadas para esports, eventos políticos e até shows de entretenimento. Graças a essa variedade, todos podem encontrar eventos que se adaptem ao seu estilo de aposta, e aqueles que gostam de análises aprofundadas têm o máximo de oportunidades para encontrar as melhores odds."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Live betting is one of Mostbet’s key features, and the bookmaker really strives to provide players with maximum convenience. All events are categorized by sport, odds updates happen almost instantly, and changes are color-coded so the player can immediately see where the odds have risen or fallen."}',
             'value_es' => '{"0":"Las apuestas en vivo son una de las características clave de Mostbet, y la casa de apuestas realmente se esfuerza por ofrecer la máxima comodidad a los jugadores. Todos los eventos están organizados por deporte, las actualizaciones de cuotas ocurren casi al instante y los cambios se señalan con colores para que el jugador pueda ver inmediatamente dónde subieron o bajaron las cuotas."}',
             'value_fr' => '{"0":"Les paris en direct sont l’une des fonctionnalités clés de Mostbet, et le bookmaker s’efforce vraiment d’offrir un maximum de commodité aux joueurs. Tous les événements sont classés par sport, les mises à jour des cotes se font presque instantanément, et les changements sont codés par couleur pour que le joueur voie immédiatement où les cotes ont augmenté ou diminué."}',
             'value_pt' => '{"0":"As apostas ao vivo são uma das principais funcionalidades da Mostbet, e a casa de apostas realmente se esforça para oferecer o máximo de conveniência aos jogadores. Todos os eventos são organizados por esporte, as atualizações das odds acontecem quase instantaneamente, e as mudanças são codificadas por cores para que o jogador veja imediatamente onde as odds aumentaram ou diminuíram."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Most popular matches have free live streaming in high quality. This applies not only to football and tennis but also to basketball, hockey, and even some esports tournaments. For example, you can watch a Champions League game while placing live bets on corners or cards, reacting to the flow of the match in real time."}',
             'value_es' => '{"0":"La mayoría de los partidos populares tienen transmisión en vivo gratuita y de alta calidad. Esto no solo aplica al fútbol y tenis, sino también al baloncesto, hockey e incluso a algunos torneos de deportes electrónicos. Por ejemplo, puedes ver un partido de la Liga de Campeones mientras haces apuestas en vivo a córners o tarjetas, reaccionando al desarrollo del partido en tiempo real."}',
             'value_fr' => '{"0":"La plupart des matchs populaires disposent d’une diffusion en direct gratuite et de haute qualité. Cela concerne non seulement le football et le tennis, mais aussi le basket-ball, le hockey et même certains tournois d’e-sport. Par exemple, vous pouvez regarder un match de Ligue des Champions tout en plaçant des paris en direct sur les corners ou les cartons, en réagissant au déroulement du match en temps réel."}',
             'value_pt' => '{"0":""}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In live mode, besides standard markets, there are exact results for individual halves and sets, player-specific totals, and «next event» bets (next goal, corner, yellow card). In esports, you can even bet on the outcome of individual rounds in CS:GO or maps in Dota 2."}',
             'value_es' => '{"0":"En el modo en vivo, además de los mercados estándar, están disponibles los resultados exactos de mitades y sets individuales, totales individuales de jugadores y apuestas al «próximo evento» (próximo gol, córner, tarjeta amarilla). En los esports, incluso puedes apostar al resultado de rondas individuales en CS:GO o mapas en Dota 2."}',
             'value_fr' => '{"0":"En mode live, en plus des marchés standard, sont disponibles les résultats exacts des mi-temps et des sets individuels, les totaux individuels des joueurs et les paris « sur l’événement suivant » (prochain but, corner, carton jaune). En e-sport, vous pouvez même parier sur le résultat des manches individuelles dans CS:GO ou les maps dans Dota 2."}',
             'value_pt' => '{"0":"No modo ao vivo, além dos mercados padrão, estão disponíveis resultados exatos de tempos e sets individuais, totais individuais de jogadores e apostas no «próximo evento» (próximo gol, escanteio, cartão amarelo). Nos e-sports, você pode até apostar no resultado de rodadas individuais no CS:GO ou mapas no Dota 2."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The speed of bet acceptance in live betting usually takes less than 2 seconds. This is especially important when the event unfolds quickly and you need to lock in a favorable odd."}',
             'value_es' => '{"0":"La velocidad de aceptación de apuestas en vivo suele ser menor a 2 segundos. Esto es especialmente importante cuando el evento se desarrolla rápidamente y necesitas asegurar una cuota favorable."}',
             'value_fr' => '{"0":"La rapidité d’acceptation des paris en direct est généralement inférieure à 2 secondes. C’est particulièrement important lorsque l’événement se déroule rapidement et qu’il faut sécuriser une cote avantageuse."}',
             'value_pt' => '{"0":"A velocidade de aceitação das apostas ao vivo geralmente leva menos de 2 segundos. Isso é especialmente importante quando o evento se desenrola rapidamente e você precisa garantir uma odd favorável."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet pays serious attention to user security, as this is one of the key trust factors in the world of online betting. The site operates under a license issued by the international regulator Curacao, which provides legal guarantees for service provision and adherence to fair play standards."}',
             'value_es' => '{"0":"Mostbet presta mucha atención a la seguridad de los usuarios, ya que este es uno de los factores clave de confianza en el mundo de las apuestas en línea. El sitio opera bajo una licencia emitida por el regulador internacional Curazao, lo que ofrece garantías legales para la prestación de servicios y el cumplimiento de los estándares de juego limpio."}',
             'value_fr' => '{"0":"Mostbet accorde une grande importance à la sécurité des utilisateurs, car c’est l’un des facteurs clés de confiance dans le monde des paris en ligne. Le site fonctionne sous licence délivrée par le régulateur international de Curaçao, ce qui garantit légalement la fourniture des services et le respect des normes de jeu équitable."}',
             'value_pt' => '{"0":"A Mostbet dá muita importância à segurança dos usuários, pois este é um dos fatores-chave de confiança no mundo das apostas online. O site opera sob uma licença emitida pelo regulador internacional de Curaçao, o que fornece garantias legais para a prestação de serviços e o cumprimento dos padrões de jogo justo."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"All user data is protected using modern SSL encryption. This means that personal information, payment details, and betting history are inaccessible to third parties."}',
             'value_es' => '{"0":"Todos los datos de los usuarios están protegidos mediante cifrado SSL moderno. Esto significa que la información personal, los datos de pago y el historial de apuestas no son accesibles para terceros."}',
             'value_fr' => '{"0":"Toutes les données des utilisateurs sont protégées par un chiffrement SSL moderne. Cela signifie que les informations personnelles, les détails de paiement et l’historique des paris ne sont pas accessibles aux tiers."}',
             'value_pt' => '{"0":"Todos os dados dos usuários são protegidos por criptografia SSL moderna. Isso significa que informações pessoais, dados de pagamento e histórico de apostas não são acessíveis a terceiros."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, Mostbet implements a multi-factor authentication system. You have the option to enable login confirmation via SMS or email to reduce the risk of unauthorized account access. There is also an IP address restriction feature for login, which is useful for those who want to further enhance their security level."}',
             'value_es' => '{"0":"Además, Mostbet implementa un sistema de autenticación multifactor. Puedes activar la confirmación de inicio de sesión por SMS o correo electrónico para reducir el riesgo de acceso no autorizado a la cuenta. También existe una función de restricción de direcciones IP para el inicio de sesión, útil para quienes desean aumentar aún más su nivel de seguridad."}',
             'value_fr' => '{"0":"De plus, Mostbet met en place un système d’authentification à plusieurs facteurs. Vous avez la possibilité d’activer la confirmation de connexion par SMS ou e-mail afin de réduire le risque d’accès non autorisé au compte. Il existe également une fonction de restriction des adresses IP pour la connexion, utile pour ceux qui souhaitent renforcer davantage leur niveau de sécurité."}',
             'value_pt' => '{"0":"Além disso, a Mostbet implementa um sistema de autenticação multifator. Você tem a opção de ativar a confirmação de login via SMS ou e-mail para reduzir o risco de acesso não autorizado à conta. Também há um recurso de restrição de endereços IP para login, útil para quem deseja aumentar ainda mais o nível de segurança."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to these measures, Mostbet can confidently be classified as a reliable bookmaker that cares about its reputation and the protection of its clients."}',
             'value_es' => '{"0":"Gracias a estas medidas, Mostbet puede clasificarse con confianza como un bookmaker fiable que se preocupa por su reputación y la protección de sus clientes."}',
             'value_fr' => '{"0":"Grâce à ces mesures, Mostbet peut être considéré comme un bookmaker fiable qui prend soin de sa réputation et de la protection de ses clients."}',
             'value_pt' => '{"0":"Graças a essas medidas, a Mostbet pode ser considerada com segurança uma casa de apostas confiável que se preocupa com sua reputação e a proteção de seus clientes."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 30
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 31
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet offers a wide range of options for depositing funds and withdrawing winnings. For deposits, bank cards Visa and MasterCard, popular e-wallets Skrill and Neteller, cryptocurrencies such as Bitcoin, Ethereum, Litecoin, Tether, and local payment services are available. The minimum deposit amount is usually from 1 USD or the equivalent in local currency, and funds are credited instantly."}',
             'value_es' => '{"0":"Mostbet ofrece una amplia variedad de opciones para depositar fondos y retirar ganancias. Para depósitos, están disponibles tarjetas bancarias Visa y MasterCard, monederos electrónicos populares como Skrill y Neteller, criptomonedas como Bitcoin, Ethereum, Litecoin, Tether, y servicios de pago locales. El monto mínimo de depósito suele ser desde 1 USD o su equivalente en moneda local, y los fondos se acreditan al instante."}',
             'value_fr' => '{"0":"Mostbet propose un large choix de moyens pour déposer des fonds et retirer ses gains. Pour les dépôts, les cartes bancaires Visa et MasterCard, les portefeuilles électroniques populaires Skrill et Neteller, les cryptomonnaies telles que Bitcoin, Ethereum, Litecoin, Tether, ainsi que des services de paiement locaux sont disponibles. Le montant minimum de dépôt est généralement à partir de 1 USD ou l’équivalent en monnaie locale, et les fonds sont crédités instantanément."}',
             'value_pt' => '{"0":"A Mostbet oferece uma ampla variedade de métodos para depósito de fundos e saque de ganhos. Para depósitos, estão disponíveis cartões bancários Visa e MasterCard, carteiras eletrônicas populares como Skrill e Neteller, criptomoedas como Bitcoin, Ethereum, Litecoin, Tether, e serviços de pagamento locais. O valor mínimo para depósito geralmente é a partir de 1 USD ou equivalente na moeda local, e os fundos são creditados instantaneamente."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 32
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Regarding withdrawals, Mostbet follows the principle of «using the same method as the deposit», which enhances security and reduces the risk of fraud. The processing time depends on the method and the amount."}',
             'value_es' => '{"0":"En cuanto a los retiros, Mostbet sigue el principio de «usar el mismo método que el depósito», lo que mejora la seguridad y reduce el riesgo de fraude. El tiempo de procesamiento depende del método y del monto."}',
             'value_fr' => '{"0":"En ce qui concerne les retraits, Mostbet applique le principe «du même moyen que le dépôt», ce qui renforce la sécurité et réduit le risque de fraude. Le délai de traitement dépend de la méthode et du montant."}',
             'value_pt' => '{"0":"Quanto aos saques, a Mostbet segue o princípio de «usar o mesmo método do depósito», o que aumenta a segurança e reduz o risco de fraude. O tempo de processamento depende do método e do valor."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 33
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Users note that in most cases, withdrawals are processed without delays if the account has passed verification. The verification process includes submitting a photo of an identity document and sometimes additional proof of residence. This is standard practice for licensed bookmakers and is done to protect the player’s funds."}',
             'value_es' => '{"0":"Los usuarios señalan que en la mayoría de los casos los retiros se procesan sin demoras si la cuenta ha pasado la verificación. El proceso de verificación incluye enviar una foto de un documento de identidad y a veces una prueba adicional de domicilio. Esta es una práctica estándar para casas de apuestas licenciadas y se hace para proteger los fondos del jugador."}',
             'value_fr' => '{"0":"Les utilisateurs notent que dans la plupart des cas, les retraits se déroulent sans retard si le compte a été vérifié. Le processus de vérification inclut la fourniture d’une photo d’un document d’identité et parfois des justificatifs supplémentaires de domicile. C’est une pratique standard pour les bookmakers licenciés, effectuée pour protéger les fonds des joueurs."}',
             'value_pt' => '{"0":"Os usuários destacam que na maioria dos casos os saques são processados sem atrasos, desde que a conta tenha sido verificada. O processo de verificação inclui o envio de foto do documento de identidade e, às vezes, comprovação adicional de residência. Esta é uma prática padrão para casas de apostas licenciadas e é feita para proteger os fundos dos jogadores."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 34
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"It is important that Mostbet does not charge any fees for deposits and withdrawals, but banks or payment systems may apply fees. Thanks to this, users receive the full amount of their winnings without hidden deductions. Here are the main payment methods available on the site:"}',
             'value_es' => '{"0":"Es importante destacar que Mostbet no cobra comisiones por depósitos y retiros, pero los bancos o sistemas de pago pueden aplicar tarifas. Gracias a esto, los usuarios reciben el monto total de sus ganancias sin deducciones ocultas. Aquí están los principales métodos de pago disponibles en el sitio:"}',
             'value_fr' => '{"0":"Il est important de souligner que Mostbet ne prélève pas de commission sur les dépôts et les retraits, mais les banques ou les systèmes de paiement peuvent appliquer des frais. Grâce à cela, les utilisateurs reçoivent la totalité de leurs gains sans prélèvements cachés. Voici les principaux moyens de paiement disponibles sur le site :"}',
             'value_pt' => '{"0":"É importante ressaltar que a Mostbet não cobra comissão sobre depósitos e saques, mas bancos ou sistemas de pagamento podem cobrar taxas. Graças a isso, os usuários recebem o valor total de seus ganhos sem deduções ocultas. Aqui estão os principais métodos de pagamento disponíveis no site:"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 35
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
                'order' => 36
            ],
            ['key' => 'mostbet',
                'bookmaker_id' => 5,
                'component' => 'quick_info',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
                'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 37
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 38
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet provides 24/7 support via online chat, email, or social media."}',
             'value_es' => '{"0":"Mostbet ofrece soporte las 24 horas a través de chat en línea, correo electrónico o redes sociales."}',
             'value_fr' => '{"0":"Mostbet offre une assistance 24h/24 via chat en ligne, e-mail ou réseaux sociaux."}',
             'value_pt' => '{"0":"A Mostbet oferece suporte 24 horas por dia via chat online, e-mail ou redes sociais."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 39
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 40
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 41
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum bet and maximum daily withdrawal?"}',
             'value_es' => '{"0":"¿Cuál es la apuesta mínima y el máximo retiro diario?"}',
             'value_fr' => '{"0":"Quelle est la mise minimale et le retrait quotidien maximum ?"}',
             'value_pt' => '{"0":"Qual é a aposta mínima e o limite máximo de saque diário?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 42
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet is about 0.2 USD, and the maximum daily withdrawal limit is up to 1000 USD."}',
             'value_es' => '{"0":"La apuesta mínima es aproximadamente 0.2 USD, y el máximo retiro diario es hasta 1000 USD."}',
             'value_fr' => '{"0":"La mise minimale est d’environ 0,2 USD, et le plafond de retrait quotidien est jusqu’à 1000 USD."}',
             'value_pt' => '{"0":"A aposta mínima é cerca de 0,2 USD, e o limite máximo de saque diário é até 1000 USD."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 43
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Are there demo versions of the casino?"}',
             'value_es' => '{"0":"¿Hay versiones demo del casino?"}',
             'value_fr' => '{"0":"Y a-t-il des versions démo du casino ?"}',
             'value_pt' => '{"0":"Existem versões demo do cassino?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 44
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, demo versions are available in the casino."}',
             'value_es' => '{"0":"Sí, hay versiones demo disponibles en el casino."}',
             'value_fr' => '{"0":"Oui, des versions démo sont disponibles dans le casino."}',
             'value_pt' => '{"0":"Sim, versões demo estão disponíveis no cassino."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 45
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"What should I do if my bet is accepted with a strange odd?"}',
             'value_es' => '{"0":"¿Qué hacer si mi apuesta es aceptada con una cuota extraña?"}',
             'value_fr' => '{"0":"Que faire si mon pari est accepté avec une cote étrange ?"}',
             'value_pt' => '{"0":"O que fazer se minha aposta for aceita com uma odd estranha?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 46
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet may automatically set the odd to 1 in case of suspicious data; this decision is final and not subject to appeal."}',
             'value_es' => '{"0":"Mostbet puede establecer automáticamente la cuota en 1 en caso de datos sospechosos; esta decisión es final y no se puede apelar."}',
             'value_fr' => '{"0":"Mostbet peut automatiquement fixer la cote à 1 en cas de données suspectes ; cette décision est finale et non contestable."}',
             'value_pt' => '{"0":"A Mostbet pode definir automaticamente a odd para 1 em caso de dados suspeitos; esta decisão é final e não pode ser contestada."}',
             'order' => 46
            ]
        );
    }
}
