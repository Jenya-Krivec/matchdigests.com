<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
             'value_en' => '{"0":"BetWinner Review"}',
             'value_es' => '{"0":"Reseña de BetWinner"}',
             'value_fr' => '{"0":"Avis sur BetWinner"}',
             'value_pt' => '{"0":"Análise da BetWinner"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is a modern platform that launched in 2018 and has already gained popularity in many countries around the world, especially in Eastern Europe, India, Brazil, and Nigeria. The bookmaker holds a Curacao license, as well as local licenses in Kenya and Nigeria."}',
             'value_es' => '{"0":"BetWinner es una plataforma moderna que apareció en 2018 y ya ha ganado popularidad en muchos países del mundo, especialmente en Europa del Este, India, Brasil y Nigeria. El operador cuenta con una licencia de Curazao, así como licencias locales en Kenia y Nigeria."}',
             'value_fr' => '{"0":"BetWinner est une plateforme moderne lancée en 2018, qui a déjà gagné en popularité dans de nombreux pays, notamment en Europe de l’Est, en Inde, au Brésil et au Nigéria. Le bookmaker détient une licence de Curaçao ainsi que des licences locales au Kenya et au Nigéria."}',
             'value_pt' => '{"0":"A BetWinner é uma plataforma moderna que surgiu em 2018 e já conquistou popularidade em muitos países do mundo, especialmente na Europa Oriental, Índia, Brasil e Nigéria. A casa de apostas possui uma licença de Curaçao, além de licenças locais no Quênia e na Nigéria."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The interface is similar to Bet365 but with its own style — user-friendly, clean, and fast to navigate. If you\'re looking for a bookmaker that combines sports betting, casino, live streams, and mobile convenience — BetWinner is worth your attention."}',
             'value_es' => '{"0":"La interfaz es similar a la de Bet365, pero con un estilo propio: cómoda, clara y rápida de navegar. Si buscas una casa de apuestas que combine deportes, casino, transmisiones en vivo y comodidad móvil, BetWinner merece tu atención."}',
             'value_fr' => '{"0":"L’interface ressemble à celle de Bet365, mais avec un style propre — intuitive, épurée et rapide à naviguer. Si vous cherchez un bookmaker qui combine paris sportifs, casino, streaming en direct et confort mobile, BetWinner vaut le détour."}',
             'value_pt' => '{"0":"A interface é parecida com a do Bet365, mas com estilo próprio — prática, limpa e rápida de navegar. Se você está procurando uma casa que combine apostas esportivas, cassino, transmissões ao vivo e conforto no celular, a BetWinner merece sua atenção."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner offers betting on over 40 sports. You’ll find football, tennis, basketball, cricket, as well as less popular disciplines like Gaelic hurling or chess. In addition, special bets on political elections are also available."}',
             'value_es' => '{"0":"BetWinner ofrece apuestas en más de 40 deportes. Aquí encontrarás fútbol, tenis, baloncesto, críquet, así como deportes menos conocidos como el hurling gaélico o el ajedrez. Además, hay apuestas especiales disponibles para elecciones políticas."}',
             'value_fr' => '{"0":"BetWinner propose des paris sur plus de 40 disciplines sportives. Vous y trouverez du football, du tennis, du basket-ball, du cricket, ainsi que des sports moins connus comme le hurling gaélique ou les échecs. Des paris spéciaux sur les élections politiques sont également disponibles."}',
             'value_pt' => '{"0":"A BetWinner oferece apostas em mais de 40 modalidades esportivas. Você encontrará futebol, tênis, basquete, críquete, além de esportes menos populares como o hurling gaélico ou xadrez. Também estão disponíveis apostas especiais em eleições políticas."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Every day, you get access to more than 2,000 events. This is an extensive pre-match offering, especially for football matches with hundreds of betting options. There are also live bets supported by a wide range of infographics, allowing you to react instantly to changing odds and cash out at the most favorable moment. For that, BetWinner offers a cash-out option."}',
             'value_es' => '{"0":"Cada día se ofrecen más de 2.000 eventos. Es una oferta pre-partido muy amplia, especialmente para partidos de fútbol con cientos de opciones de apuesta. También hay apuestas en vivo, acompañadas de una variedad de infografías para que puedas reaccionar al instante a los cambios en las cuotas y retirar tus ganancias en el mejor momento posible. Para ello, BetWinner ofrece la opción de cash out."}',
             'value_fr' => '{"0":"Chaque jour, plus de 2 000 événements sont proposés. Il s’agit d’une offre très riche en pré-match, notamment pour les matchs de football, avec des centaines d’options de pari. Des paris en direct sont également disponibles, accompagnés d’une infographie variée pour réagir rapidement à l’évolution des cotes et retirer vos gains au moment le plus avantageux. BetWinner propose à cet effet une option de cash out."}',
             'value_pt' => '{"0":"Diariamente são oferecidos mais de 2.000 eventos. É uma oferta pré-jogo muito ampla, especialmente em partidas de futebol com centenas de opções de aposta. Também há apostas ao vivo, com diversos recursos gráficos que permitem reagir rapidamente às mudanças nas odds e sacar seus ganhos no momento mais vantajoso. Para isso, a BetWinner oferece a opção de cash out."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Below, you’ll find a table with the most popular sports available on the platform:"}',
             'value_es' => '{"0":"A continuación, te presentamos una tabla con los deportes más populares disponibles en el sitio:"}',
             'value_fr' => '{"0":"Ci-dessous, vous trouverez un tableau des sports les plus populaires proposés sur la plateforme :"}',
             'value_pt' => '{"0":"Abaixo, apresentamos uma tabela com os esportes mais populares disponíveis no site:"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner’s casino is quite diverse. In this section, you can enjoy slots, live casino, roulette, blackjack, poker, baccarat, and Bingo. The casino section is well-structured, and you can filter games by provider, theme, or simply search for a specific title."}',
             'value_es' => '{"0":"El casino de BetWinner es bastante diverso. En esta sección puedes jugar a tragamonedas, casino en vivo, ruleta, blackjack, póker, bacará y Bingo. La sección del casino está bien estructurada, y puedes filtrar los juegos por proveedor, temática o simplemente buscar uno específico."}',
             'value_fr' => '{"0":"Le casino de BetWinner est assez varié. Vous pouvez y jouer à des machines à sous, au casino en direct, à la roulette, au blackjack, au poker, au baccarat et au Bingo. La section casino est bien structurée, avec la possibilité de filtrer les jeux par fournisseur, thème ou simplement en utilisant la recherche."}',
             'value_pt' => '{"0":"O cassino da BetWinner é bastante diversificado. Nesta seção, você pode jogar caça-níqueis, cassino ao vivo, roleta, blackjack, pôquer, bacará e Bingo. A seção de cassino é bem estruturada, e há filtros por provedor, tema ou uma busca direta por jogo."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Navigation is smooth, and the games run without lag, even on weaker devices. For fans of live action, there\'s a huge collection of live tables. It\'s also worth mentioning that BetWinner regularly hosts tournaments with large prize pools."}',
             'value_es' => '{"0":"La navegación es fluida y los juegos funcionan sin interrupciones, incluso en dispositivos más débiles. Para los fanáticos de las emociones en vivo, hay una gran colección de mesas en directo. También vale la pena destacar que BetWinner organiza torneos con grandes premios de forma regular."}',
             'value_fr' => '{"0":"La navigation est fluide et les jeux ne laguent pas, même sur les appareils moins puissants. Pour les amateurs de sensations fortes, il existe une vaste collection de tables en direct. Il convient également de noter que BetWinner organise régulièrement des tournois avec de gros prix à la clé."}',
             'value_pt' => '{"0":"A navegação é fluida e os jogos rodam bem, mesmo em dispositivos mais fracos. Para os fãs de emoção ao vivo, há uma enorme coleção de mesas com crupiês reais. Também vale destacar que a BetWinner realiza torneios com grandes prêmios com frequência."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner attracts many players with its high odds, which often exceed the market average. This is especially evident in popular disciplines such as football, tennis, and basketball. For example, in a top Champions League match, you might find odds of 2.10 for the favorite, whereas most other bookmakers offer 1.95–2.00. Similarly, for NBA games, BetWinner may offer 1.92 on both teams, while some other bookmakers list 1.87 or even lower."}',
             'value_es' => '{"0":"BetWinner atrae a muchos jugadores gracias a sus altas cuotas, que a menudo superan el promedio del mercado. Esto se nota especialmente en disciplinas populares como el fútbol, el tenis o el baloncesto. Por ejemplo, en un partido destacado de la Liga de Campeones, se pueden encontrar cuotas de 2.10 para el favorito, mientras que en la mayoría de las casas de apuestas estas son de 1.95–2.00. De igual forma, en partidos de la NBA, es común ver cuotas de 1.92 para ambos equipos, cuando otras casas ofrecen 1.87 o incluso menos."}',
             'value_fr' => '{"0":"BetWinner attire de nombreux joueurs grâce à ses cotes élevées, qui dépassent souvent la moyenne du marché. Cela est particulièrement visible dans des disciplines populaires comme le football, le tennis ou le basketball. Par exemple, pour un match de Ligue des champions, on peut voir une cote de 2.10 pour le favori, alors que la majorité des autres bookmakers proposent 1.95–2.00. De même, pour un match NBA, BetWinner peut offrir une cote de 1.92 sur chaque équipe, tandis que d\'autres opérateurs affichent 1.87 voire moins."}',
             'value_pt' => '{"0":"A BetWinner atrai muitos apostadores justamente por oferecer odds altas, frequentemente acima da média do mercado. Isso é especialmente visível em esportes populares como futebol, tênis e basquete. Por exemplo, em uma partida importante da Liga dos Campeões, é possível encontrar cotações de 2.10 para o favorito, enquanto a maioria das casas oferece entre 1.95 e 2.00. Da mesma forma, em jogos da NBA, pode-se encontrar odds de 1.92 para ambos os times, quando outros sites oferecem 1.87 ou até menos."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Underdogs also often come with higher odds, allowing risk-taking players to aim for a bigger win. Although some events may differ slightly from market leaders, BetWinner’s overall odds remain consistently high."}',
             'value_es' => '{"0":"También en apuestas a los no favoritos las cuotas suelen ser más altas, lo que permite a los jugadores más arriesgados apuntar a mayores ganancias. Aunque algunos eventos pueden mostrar ligeras diferencias respecto a los líderes del mercado, el nivel general de cuotas en BetWinner es constantemente alto."}',
             'value_fr' => '{"0":"Les outsiders bénéficient également de cotes souvent plus élevées, ce qui permet aux joueurs amateurs de risques d’espérer des gains plus importants. Bien que certaines cotes soient légèrement inférieures pour certains événements, le niveau global reste très compétitif chez BetWinner."}',
             'value_pt' => '{"0":"As odds para os azarões também costumam ser mais altas, o que agrada jogadores que gostam de assumir riscos em troca de possíveis lucros maiores. Embora algumas cotações possam ser ligeiramente inferiores às dos líderes do mercado, o nível geral das odds na BetWinner é consistentemente alto."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"It’s also worth noting that odds update rapidly during live betting, which is convenient for users placing in-play wagers. This allows players to catch favorable values before the odds shift."}',
             'value_es' => '{"0":"Además, las cuotas se actualizan rápidamente en apuestas en vivo, lo cual es muy útil para quienes apuestan en tiempo real. Así es posible aprovechar valores favorables antes de que cambien."}',
             'value_fr' => '{"0":"Il faut aussi souligner que les cotes sont mises à jour très rapidement en direct, ce qui est pratique pour les parieurs en live. Cela permet de saisir une bonne valeur avant que la cote ne change."}',
             'value_pt' => '{"0":"Além disso, as cotações são atualizadas rapidamente durante as apostas ao vivo, o que é ideal para quem aposta em tempo real. Assim, é possível aproveitar boas oportunidades antes que os valores mudem."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner offers a huge number of markets for each event. Even a regular midweek football match can feature over 1,000 betting options. You can bet on the winner, totals, handicaps, first goalscorer, whether there will be a red card, and the number of corners in the second half."}',
             'value_es' => '{"0":"BetWinner ofrece una gran cantidad de mercados para cada evento. Incluso un partido de fútbol entre semana puede tener más de 1000 opciones de apuestas. Puedes apostar al ganador, totales, hándicaps, primer goleador, si habrá tarjeta roja, cuántos córners habrá en la segunda mitad."}',
             'value_fr' => '{"0":"BetWinner propose un très grand nombre de marchés pour chaque événement. Même un simple match de football en milieu de semaine peut offrir plus de 1000 options de paris. Vous pouvez parier sur le vainqueur, les totaux, les handicaps, le premier buteur, s’il y aura un carton rouge, et le nombre de corners en seconde mi-temps."}',
             'value_pt' => '{"0":"A BetWinner oferece uma enorme quantidade de mercados para cada evento. Mesmo uma partida de futebol no meio da semana pode ter mais de 1000 opções de apostas. Você pode apostar no vencedor, totais, handicaps, primeiro a marcar, se haverá cartão vermelho, quantos escanteios no segundo tempo."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, you can bet on each game and set; in basketball — on individual player stats. There are also bets on statistics and the option to place combined bets."}',
             'value_es' => '{"0":"En tenis se puede apostar a cada juego y set, y en baloncesto a las estadísticas individuales de los jugadores. También hay apuestas sobre estadísticas y es posible hacer apuestas combinadas."}',
             'value_fr' => '{"0":"Au tennis, il est possible de parier sur chaque jeu et set ; au basketball — sur les statistiques individuelles des joueurs. Il existe aussi des paris sur les statistiques ainsi que des paris combinés."}',
             'value_pt' => '{"0":"No tênis, é possível apostar em cada game e set; no basquete — nas estatísticas individuais dos jogadores. Também há apostas em estatísticas e a possibilidade de fazer apostas combinadas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner live section runs smoothly. Its main feature is the graphical match tracker with constantly updated statistics. You get real-time data on shots, possession, cards, and fouls."}',
             'value_es' => '{"0":"La sección en vivo de BetWinner funciona de forma estable. Su principal atractivo es el seguimiento gráfico de los partidos con estadísticas actualizadas constantemente. Tendrás acceso en tiempo real a datos como tiros, posesión, tarjetas y faltas."}',
             'value_fr' => '{"0":"La section en direct de BetWinner fonctionne de manière stable. Son principal atout est l’interface graphique des matchs avec des statistiques mises à jour en continu. Vous avez accès en temps réel aux tirs, à la possession, aux cartons et aux fautes."}',
             'value_pt' => '{"0":"A seção ao vivo da BetWinner funciona de forma estável. O principal destaque é o acompanhamento gráfico das partidas com estatísticas constantemente atualizadas. Você terá acesso em tempo real a informações como finalizações, posse de bola, cartões e faltas."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Many events also offer free live streams directly on the platform — you don’t even need to log in."}',
             'value_es' => '{"0":"Muchos eventos también cuentan con transmisiones en vivo gratuitas directamente en la plataforma, sin necesidad de iniciar sesión."}',
             'value_fr' => '{"0":"De nombreux événements sont également diffusés en streaming gratuit directement sur la plateforme, sans même avoir besoin de se connecter."}',
             'value_pt' => '{"0":"Muitos eventos contam com transmissões ao vivo gratuitas diretamente na plataforma, sem necessidade de login."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The odds update speed is among the best in the industry. Bets are accepted almost instantly, which is crucial for live betting. There’s a dedicated quick bet panel where you can pre-set your stake and bet type, allowing you to react instantly to changes in the match."}',
             'value_es' => '{"0":"La velocidad de actualización de las cuotas es de las mejores entre los operadores. Las apuestas se aceptan casi al instante, lo cual es vital para el modo en vivo. Hay un panel de apuestas rápidas que permite predefinir el importe y tipo de apuesta para reaccionar rápidamente a los cambios en el partido."}',
             'value_fr' => '{"0":"La vitesse de mise à jour des cotes est l’une des meilleures du marché. Les paris sont acceptés quasi instantanément, ce qui est essentiel pour les paris en direct. Il existe un panneau de paris rapides permettant de définir à l’avance le montant et le type de pari, afin de réagir immédiatement aux changements dans le match."}',
             'value_pt' => '{"0":"A velocidade de atualização das odds está entre as melhores do mercado. As apostas são aceitas quase instantaneamente, o que é fundamental no modo ao vivo. Há um painel dedicado para apostas rápidas, onde é possível pré-definir o valor e o tipo da aposta, permitindo reagir rapidamente às mudanças na partida."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is licensed by the government of Curaçao, which is a common practice among global bookmakers. The platform uses modern data encryption methods (SSL) and also offers two-factor authentication."}',
             'value_es' => '{"0":"BetWinner cuenta con una licencia del gobierno de Curazao, lo cual es una práctica habitual entre las casas de apuestas internacionales. La plataforma utiliza métodos modernos de cifrado de datos (SSL) y también ofrece autenticación en dos pasos."}',
             'value_fr' => '{"0":"BetWinner possède une licence délivrée par le gouvernement de Curaçao, ce qui est courant chez les bookmakers internationaux. La plateforme utilise des méthodes de chiffrement modernes (SSL) et propose également une authentification à deux facteurs."}',
             'value_pt' => '{"0":"A BetWinner possui uma licença emitida pelo governo de Curaçau, o que é prática comum entre os operadores globais. A plataforma utiliza métodos modernos de criptografia de dados (SSL) e também oferece autenticação em dois fatores."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Another strong point of the bookmaker is its reputation. Despite a large user base, there are almost no complaints about account blocks or unpaid winnings. It\'s also worth mentioning that the platform cooperates with independent auditors, and user data is stored on secure servers in Europe."}',
             'value_es' => '{"0":"Otro punto fuerte del operador es su reputación. A pesar de tener una gran base de usuarios, casi no hay quejas sobre bloqueos de cuentas o impagos de premios. También cabe destacar que la plataforma colabora con auditores independientes y que los datos de los usuarios se almacenan en servidores seguros en Europa."}',
             'value_fr' => '{"0":"Un autre point fort de ce bookmaker est sa réputation. Malgré une large base d’utilisateurs, on trouve très peu de plaintes concernant des blocages de comptes ou des gains non payés. Il convient également de souligner que la plateforme travaille avec des auditeurs indépendants et que les données des utilisateurs sont stockées sur des serveurs sécurisés en Europe."}',
             'value_pt' => '{"0":"Outro ponto forte da casa de apostas é a sua reputação. Apesar de ter uma grande base de utilizadores, quase não há reclamações sobre bloqueios de contas ou não pagamento de prémios. Vale ainda destacar que a plataforma colabora com auditores independentes e que os dados dos utilizadores são armazenados em servidores seguros na Europa."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The platform supports over 90 payment methods, including bank cards, e-wallets like Skrill and Neteller, and cryptocurrencies such as Bitcoin, Litecoin, and Ethereum. Deposits are processed instantly without any fees."}',
             'value_es' => '{"0":"La plataforma admite más de 90 métodos de pago, entre ellos tarjetas bancarias, monederos electrónicos como Skrill y Neteller, y criptomonedas como Bitcoin, Litecoin y Ethereum. Los depósitos se procesan al instante sin comisiones."}',
             'value_fr' => '{"0":"La plateforme prend en charge plus de 90 méthodes de paiement, y compris les cartes bancaires, les portefeuilles électroniques comme Skrill et Neteller, ainsi que les cryptomonnaies telles que Bitcoin, Litecoin et Ethereum. Les dépôts sont instantanés et exempts de frais."}',
             'value_pt' => '{"0":"A plataforma suporta mais de 90 métodos de pagamento, incluindo cartões bancários, carteiras eletrónicas como Skrill e Neteller, e criptomoedas como Bitcoin, Litecoin e Ethereum. Os depósitos são processados instantaneamente sem taxas."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals usually take from a few minutes up to 2–3 days, depending on the method and amount. Identity verification is required only for large sums, in which case you will need to submit your documents for review. An additional advantage is the separate tab for transaction history and payment statuses, as well as push notifications about incoming funds."}',
             'value_es' => '{"0":"Los retiros suelen tardar desde unos minutos hasta 2 o 3 días, dependiendo del método y del importe. La verificación de identidad solo se solicita para cantidades grandes, en cuyo caso tendrás que enviar tus documentos para su revisión. Un punto adicional a favor es la pestaña dedicada al historial de transacciones y el estado de los pagos, además de las notificaciones push sobre la recepción de fondos."}',
             'value_fr' => '{"0":"Les retraits prennent généralement de quelques minutes à 2–3 jours, selon la méthode et le montant. La vérification d’identité est requise uniquement pour les montants importants, auquel cas vous devrez envoyer vos documents pour vérification. Autre avantage : un onglet dédié à l’historique des transactions et aux statuts des paiements, ainsi que des notifications push pour les fonds reçus."}',
             'value_pt' => '{"0":"Os levantamentos normalmente demoram desde alguns minutos até 2 a 3 dias, dependendo do método e do valor. A verificação de identidade é exigida apenas para montantes elevados, caso em que será necessário enviar os seus documentos para análise. Um ponto extra positivo é o separador dedicado ao histórico de transações e ao estado dos pagamentos, além das notificações push sobre a chegada de fundos."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
                'order' => 32
            ],
            ['key' => 'betwinner',
                'bookmaker_id' => 3,
                'component' => 'quick_info',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
                'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Support is available 24/7 and can be reached via live chat, email, and even messengers such as Facebook, Twitter, Instagram, and Telegram. The website has a dedicated section with a contact form where you can select the topic of your inquiry and attach screenshots."}',
             'value_es' => '{"0":"La atención al cliente está disponible las 24 horas del día y se puede contactar mediante chat en vivo, correo electrónico e incluso mensajería como Facebook, Twitter, Instagram y Telegram. El sitio web cuenta con una sección específica con un formulario de contacto donde puedes seleccionar el tema de tu consulta y adjuntar capturas de pantalla."}',
             'value_fr' => '{"0":"L’assistance est disponible 24h/24 et peut être contactée via le chat en direct, l’e-mail et même des messageries telles que Facebook, Twitter, Instagram et Telegram. Le site propose une section dédiée avec un formulaire de contact permettant de choisir le sujet de la demande et de joindre des captures d’écran."}',
             'value_pt' => '{"0":"O suporte está disponível 24 horas por dia e pode ser contactado via chat ao vivo, e-mail e até por mensageiros como Facebook, Twitter, Instagram e Telegram. O site tem uma secção dedicada com um formulário de contacto onde é possível selecionar o assunto da solicitação e anexar capturas de ecrã."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 35
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"There are separate support channels for payment-related questions, technical issues, or bonuses. It\'s also important to note that support is offered in multiple languages."}',
             'value_es' => '{"0":"Existen canales de soporte separados para cuestiones relacionadas con pagos, problemas técnicos o bonificaciones. También es importante destacar que el soporte está disponible en varios idiomas."}',
             'value_fr' => '{"0":"Il existe des canaux de support distincts pour les questions de paiement, les problèmes techniques ou les bonus. Il est également important de noter que l’assistance est disponible dans plusieurs langues."}',
             'value_pt' => '{"0":"Existem canais de apoio separados para questões de pagamentos, problemas técnicos ou bónus. Também é importante referir que o suporte é oferecido em vários idiomas."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 36
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 37
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide range of markets",
                                 "1":"High odds",
                                 "2":"Extensive selection of payment methods",
                                 "3":"Live streaming, cash out, multi-live",
                                 "4":"Mobile app",
                                 "5":"24/7 support"},
                             "1":
                                {"0":"Complicated verification",
                                 "1":"Access restricted in some countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia variedad de mercados",
                                 "1":"Cuotas altas",
                                 "2":"Gran variedad de métodos de pago",
                                 "3":"Transmisión en vivo, cash out, multi-live",
                                 "4":"Aplicación móvil",
                                 "5":"Atención al cliente 24/7"},
                             "1":
                                {"0":"Verificación complicada",
                                 "1":"Acceso restringido en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de marchés",
                                 "1":"Cotes élevées",
                                 "2":"Grand choix de méthodes de paiement",
                                 "3":"Streaming en direct, cash out, multi-live",
                                 "4":"Application mobile",
                                 "5":"Assistance 24h/24"},
                             "1":
                                {"0":"Vérification complexe",
                                 "1":"Accès restreint dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de mercados",
                                 "1":"Odds elevadas",
                                 "2":"Ampla seleção de métodos de pagamento",
                                 "3":"Transmissão ao vivo, cash out, multi-live",
                                 "4":"Aplicativo móvel",
                                 "5":"Suporte 24/7"},
                             "1":
                                {"0":"Verificação complicada",
                                 "1":"Acesso restrito em alguns países"}
                             }',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 38
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 39
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Is BetWinner licensed?"}',
             'value_es' => '{"0":"¿BetWinner tiene licencia?"}',
             'value_fr' => '{"0":"BetWinner est-il licencié ?"}',
             'value_pt' => '{"0":"A BetWinner é licenciada?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 40
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, BetWinner operates under a Curacao license and also holds local licenses in countries like Kenya and Nigeria."}',
             'value_es' => '{"0":"Sí, BetWinner opera bajo una licencia de Curazao y además cuenta con licencias locales en países como Kenia y Nigeria."}',
             'value_fr' => '{"0":"Oui, BetWinner opère sous une licence de Curaçao et possède également des licences locales dans des pays comme le Kenya et le Nigéria."}',
             'value_pt' => '{"0":"Sim, a BetWinner opera sob uma licença de Curaçao e também possui licenças locais em países como Quênia e Nigéria."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 41
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"What deposit methods are available?"}',
             'value_es' => '{"0":"¿Qué métodos de depósito están disponibles?"}',
             'value_fr' => '{"0":"Quels sont les moyens de dépôt disponibles ?"}',
             'value_pt' => '{"0":"Quais métodos de depósito estão disponíveis?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 42
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"You will have access to more than 50 options, including cards, e-wallets, local deposit methods, and cryptocurrencies."}',
             'value_es' => '{"0":"Tendrás acceso a más de 50 opciones, incluyendo tarjetas, monederos electrónicos, métodos locales de depósito y criptomonedas."}',
             'value_fr' => '{"0":"Vous aurez accès à plus de 50 options, y compris les cartes, les portefeuilles électroniques, les méthodes de dépôt locales et les cryptomonnaies."}',
             'value_pt' => '{"0":"Você terá acesso a mais de 50 opções, incluindo cartões, carteiras eletrônicas, métodos locais de depósito e criptomoedas."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 43
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Can you place live bets and watch streams?"}',
             'value_es' => '{"0":"¿Se pueden hacer apuestas en vivo y ver transmisiones?"}',
             'value_fr' => '{"0":"Peut-on faire des paris en direct et regarder des retransmissions ?"}',
             'value_pt' => '{"0":"É possível fazer apostas ao vivo e assistir transmissões?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 44
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, it is possible to place live bets and watch live video streams. This is especially convenient with the multi-live and cash out features."}',
             'value_es' => '{"0":"Sí, es posible hacer apuestas en vivo y ver transmisiones de video en directo. Esto es especialmente conveniente con las funciones de multi live y cash out."}',
             'value_fr' => '{"0":"Oui, il est possible de faire des paris en direct et de regarder des retransmissions vidéo en direct. C’est particulièrement pratique avec les fonctions multi live et cash out."}',
             'value_pt' => '{"0":"Sim, é possível fazer apostas ao vivo e assistir transmissões de vídeo ao vivo. Isso é especialmente conveniente com os recursos multi live e cash out."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 45
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Does BetWinner support responsible gaming?"}',
             'value_es' => '{"0":"¿BetWinner apoya el juego responsable?"}',
             'value_fr' => '{"0":"BetWinner soutient-il le jeu responsable ?"}',
             'value_pt' => '{"0":"O BetWinner apoia o jogo responsável?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 46
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, it is possible to set limits or self-exclusion through support."}',
             'value_es' => '{"0":"Sí, es posible establecer límites o autoexclusión a través del soporte."}',
             'value_fr' => '{"0":"Oui, il est possible de définir des limites ou une auto-exclusion via le support."}',
             'value_pt' => '{"0":"Sim, é possível definir limites ou autoexclusão através do suporte."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 47
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"What support is available?"}',
             'value_es' => '{"0":"¿Qué tipo de soporte está disponible?"}',
             'value_fr' => '{"0":"Quel type d’assistance est disponible ?"}',
             'value_pt' => '{"0":"Que suporte está disponível?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 48
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"24/7 customer support is available via live chat, email, phone, and various social networks."}',
             'value_es' => '{"0":"El soporte al cliente está disponible las 24 horas del día, los 7 días de la semana, a través de chat en vivo, correo electrónico, teléfono y varias redes sociales."}',
             'value_fr' => '{"0":"Un support client 24h/24 et 7j/7 est disponible via chat en direct, email, téléphone et divers réseaux sociaux."}',
             'value_pt' => '{"0":"Suporte ao cliente 24 horas por dia, 7 dias por semana, disponível via chat ao vivo, email, telefone e várias redes sociais."}',
             'order' => 48
            ]
        );
    }
}
