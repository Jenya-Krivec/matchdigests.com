<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
             'value_en' => '{"0":"4rabet Review"}',
             'value_es' => '{"0":"Reseña de 4rabet"}',
             'value_fr' => '{"0":"Avis sur 4rabet"}',
             'value_pt' => '{"0":"Análise da 4rabet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET is an international betting company operating in Asian, CIS, and European countries. The platform is known for its simplicity and focus on mobile users, with the main emphasis placed on the app and quick access to betting."}',
             'value_es' => '{"0":"4RABET es una casa de apuestas internacional que opera en países de Asia, la CEI y Europa. La plataforma es conocida por su sencillez y su orientación hacia los usuarios móviles, con un enfoque principal en la aplicación y el acceso rápido a las apuestas."}',
             'value_fr' => '{"0":"4RABET est une société de paris internationale qui opère en Asie, dans la CEI et en Europe. La plateforme est reconnue pour sa simplicité et son orientation vers les utilisateurs mobiles, l’accent principal étant mis sur l’application et l’accès rapide aux paris."}',
             'value_pt' => '{"0":"A 4RABET é uma casa de apostas internacional que atua em países da Ásia, da CEI e da Europa. A plataforma é conhecida pela sua simplicidade e pelo foco nos utilizadores móveis, dando ênfase principal ao aplicativo e ao acesso rápido às apostas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The company offers both classic sports wagers and a wide range of casino entertainment. The website features a modern interface with a minimalist design, making navigation easy even for beginners. One of the key highlights is the bonuses for new players."}',
             'value_es' => '{"0":"La compañía ofrece tanto apuestas deportivas clásicas como una amplia gama de entretenimiento de casino. El sitio web cuenta con una interfaz moderna y un diseño minimalista, lo que hace que la navegación sea sencilla incluso para los principiantes. Una de sus características principales son los bonos para nuevos jugadores."}',
             'value_fr' => '{"0":"L’entreprise propose à la fois des paris sportifs classiques et une large gamme de divertissements de casino. Le site dispose d’une interface moderne avec un design minimaliste, ce qui rend la navigation facile même pour les débutants. L’un des principaux atouts est constitué par les bonus destinés aux nouveaux joueurs."}',
             'value_pt' => '{"0":"A empresa oferece tanto apostas esportivas clássicas quanto uma ampla variedade de entretenimento de cassino. O site possui uma interface moderna com um design minimalista, tornando a navegação fácil até mesmo para iniciantes. Um dos principais destaques são os bônus para novos jogadores."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The sports section at 4RABET covers dozens of popular disciplines, including football, tennis, basketball, cricket, and esports. A strong emphasis is placed on cricket. At the same time, fans of European football will find all major tournaments here, from the EPL to La Liga and the Champions League."}',
             'value_es' => '{"0":"La sección deportiva de 4RABET abarca decenas de disciplinas populares, como fútbol, tenis, baloncesto, críquet y deportes electrónicos. Se hace un gran énfasis en el críquet. Al mismo tiempo, los aficionados al fútbol europeo encontrarán aquí todos los campeonatos principales, desde la Premier League hasta LaLiga y la Liga de Campeones."}',
             'value_fr' => '{"0":"La section sportive de 4RABET couvre des dizaines de disciplines populaires, notamment le football, le tennis, le basketball, le cricket et l’esport. Une attention particulière est accordée au cricket. En parallèle, les amateurs de football européen trouveront ici tous les principaux championnats, de la Premier League à la Liga et à la Ligue des Champions."}',
             'value_pt' => '{"0":"A seção de esportes da 4RABET cobre dezenas de modalidades populares, incluindo futebol, tênis, basquete, críquete e esportes eletrônicos. Há uma forte ênfase no críquete. Ao mesmo tempo, os fãs do futebol europeu encontram aqui todos os principais campeonatos, desde a Premier League até La Liga e a Liga dos Campeões."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In addition to the main markets, there are also specific options available, such as bets on individual player performance or match statistics. For accumulators, flexible bet slips have been designed, allowing users to combine different events. This way, players get not just standard wagers but a wide range of options that can be adapted to their own strategies."}',
             'value_es' => '{"0":"Además de los mercados principales, también hay opciones específicas disponibles, como apuestas sobre el rendimiento individual de los jugadores o las estadísticas del partido. Para las combinadas, se han creado boletos flexibles que permiten combinar diferentes eventos. De este modo, los usuarios no solo obtienen apuestas estándar, sino una amplia gama de opciones que pueden adaptarse a sus propias estrategias."}',
             'value_fr' => '{"0":"Outre les marchés principaux, des options spécifiques sont également disponibles, comme les paris sur les performances individuelles des joueurs ou sur les statistiques du match. Pour les paris combinés, des coupons flexibles ont été conçus, permettant de combiner différents événements. Ainsi, les utilisateurs bénéficient non seulement de paris standards, mais aussi d’un large éventail d’options qu’ils peuvent adapter à leurs propres stratégies."}',
             'value_pt' => '{"0":"Além dos mercados principais, também estão disponíveis opções específicas, como apostas no desempenho individual dos jogadores ou nas estatísticas da partida. Para as múltiplas, foram criados cupons flexíveis que permitem combinar diferentes eventos. Dessa forma, os usuários não têm apenas apostas padrão, mas uma ampla variedade de opções que podem ser adaptadas às suas próprias estratégias."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at 4RABET has its own dedicated space and includes over a thousand games from leading providers such as NetEnt, Pragmatic Play, and Evolution Gaming. Here you can play both classic three-reel slots and modern video slots with jackpots. The live casino deserves a special mention, offering real dealer games like roulette, blackjack, and poker."}',
             'value_es' => '{"0":"El casino de 4RABET ocupa una sección independiente y cuenta con más de mil juegos de los principales proveedores, como NetEnt, Pragmatic Play y Evolution Gaming. Aquí podrás disfrutar tanto de las clásicas tragamonedas de tres rodillos como de los modernos video slots con jackpots. También merece destacarse el live casino, donde es posible jugar con crupieres reales a la ruleta, el blackjack y el póker."}',
             'value_fr' => '{"0":"Le casino de 4RABET dispose d’une section dédiée regroupant plus de mille jeux provenant de grands éditeurs tels que NetEnt, Pragmatic Play et Evolution Gaming. Vous y trouverez aussi bien des machines à sous classiques à trois rouleaux que des vidéos slots modernes avec jackpots. Le live casino mérite une mention particulière, car il permet de jouer avec de vrais croupiers à la roulette, au blackjack et au poker."}',
             'value_pt' => '{"0":"O cassino da 4RABET possui uma seção exclusiva com mais de mil jogos de provedores renomados, como NetEnt, Pragmatic Play e Evolution Gaming. É possível jogar tanto em slots clássicos de três tambores quanto em modernos video slots com jackpots. O live casino também merece destaque, oferecendo roleta, blackjack e pôquer com dealers reais."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The casino interface is well-optimized for mobile devices, ensuring smooth gameplay even on smartphones. In addition, regular promotions and free spins are available for loyal players."}',
             'value_es' => '{"0":"La interfaz del casino está bien optimizada para dispositivos móviles, por lo que incluso en un smartphone la experiencia resulta cómoda. Además, se ofrecen promociones regulares y giros gratis para los jugadores habituales."}',
             'value_fr' => '{"0":"L’interface du casino est parfaitement optimisée pour les appareils mobiles, offrant une expérience fluide même sur smartphone. De plus, des promotions régulières et des tours gratuits sont proposés aux joueurs fidèles."}',
             'value_pt' => '{"0":"A interface do cassino é bem otimizada para dispositivos móveis, garantindo uma jogabilidade confortável até mesmo no smartphone. Além disso, promoções regulares e giros grátis estão disponíveis para jogadores frequentes."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"When it comes to odds at 4RABET, it is worth noting that they are in line with average market levels, but often there are more favorable conditions than at other bookmakers. For example, on top football matches of the English Premier League or the Champions League, odds for favorites usually range around 1.85–1.90, while outsiders can reach 4.50–5.00. Odds on tennis and esports are particularly interesting, where differences between bookmakers can be significant."}',
             'value_es' => '{"0":"Al hablar de las cuotas en 4RABET, cabe destacar que se sitúan en el nivel promedio del mercado, aunque a menudo ofrecen condiciones más ventajosas que otros operadores. Por ejemplo, en los partidos de fútbol más importantes de la Premier League inglesa o de la Liga de Campeones, las cuotas para los favoritos suelen estar entre 1.85 y 1.90, mientras que para los no favoritos pueden llegar a 4.50–5.00. Resultan especialmente atractivas las cuotas en tenis y deportes electrónicos, donde la diferencia entre casas de apuestas puede ser considerable."}',
             'value_fr' => '{"0":"En ce qui concerne les cotes chez 4RABET, il convient de noter qu’elles se situent au niveau moyen du marché, mais offrent souvent des conditions plus avantageuses que chez d’autres bookmakers. Par exemple, pour les grands matchs de football de la Premier League anglaise ou de la Ligue des champions, les cotes des favoris varient généralement entre 1.85 et 1.90, tandis que celles des outsiders peuvent atteindre 4.50–5.00. Les cotes sur le tennis et l’esport sont particulièrement intéressantes, car les écarts entre bookmakers peuvent y être importants."}',
             'value_pt' => '{"0":"Falando sobre as odds na 4RABET, vale destacar que elas estão no nível médio do mercado, mas muitas vezes oferecem condições mais vantajosas do que outros sites de apostas. Por exemplo, nos principais jogos de futebol da Premier League inglesa ou da Liga dos Campeões, as odds para os favoritos geralmente ficam entre 1.85 e 1.90, enquanto para os azarões podem chegar a 4.50–5.00. As odds no tênis e nos eSports são especialmente interessantes, já que a diferença entre casas de apostas pode ser significativa."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Betting limits are set individually and depend on the sport and specific event. For popular competitions, quite high stakes are allowed, but for secondary leagues or less popular sports the restrictions can be stricter. The minimum bet starts from $0.10."}',
             'value_es' => '{"0":"Los límites de apuestas se determinan de forma individual y dependen del deporte y del evento concreto. En competiciones populares se permiten sumas bastante altas, pero en ligas secundarias o deportes menos seguidos las restricciones pueden ser más estrictas. La apuesta mínima comienza desde 0.10 $."}',
             'value_fr' => '{"0":"Les limites de mise sont fixées individuellement et dépendent du sport et de l’événement spécifique. Pour les compétitions populaires, des mises assez élevées sont autorisées, mais pour les ligues secondaires ou les sports moins suivis, les restrictions peuvent être plus strictes. La mise minimale commence à 0,10 $."}',
             'value_pt' => '{"0":"Os limites de apostas são definidos individualmente e dependem do esporte e do evento específico. Para competições populares, são permitidos valores bastante altos, mas em ligas secundárias ou esportes menos populares as restrições podem ser mais rigorosas. A aposta mínima começa em $0,10."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The key advantage of 4RABET is the large number of betting options for each event. For football matches, there are over 200 markets available, including handicap, totals, bets on goals in specific time intervals, corners, and even cards."}',
             'value_es' => '{"0":"La principal ventaja de 4RABET es la gran cantidad de opciones de apuestas para cada evento. En los partidos de fútbol, hay más de 200 mercados disponibles, incluyendo hándicap, totales, apuestas a goles en intervalos de tiempo específicos, saques de esquina e incluso tarjetas."}',
             'value_fr' => '{"0":"L’avantage clé de 4RABET est le grand nombre d’options de paris pour chaque événement. Pour les matchs de football, plus de 200 marchés sont disponibles, incluant le handicap, les totaux, les paris sur les buts dans un intervalle de temps précis, les corners et même les cartons."}',
             'value_pt' => '{"0":"A principal vantagem da 4RABET é a grande quantidade de opções de apostas para cada evento. Nos jogos de futebol, existem mais de 200 mercados disponíveis, incluindo handicap, totais, apostas em gols em intervalos de tempo específicos, escanteios e até cartões."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In basketball and tennis, extended markets are also offered, allowing you to bet not only on the outcome but also on individual statistical indicators. Another interesting feature of the platform is the availability of esports, where you can bet on CS:GO, Dota 2, and League of Legends."}',
             'value_es' => '{"0":"En baloncesto y tenis también se ofrecen mercados ampliados, lo que permite apostar no solo al resultado, sino también a indicadores estadísticos individuales. Otra característica interesante de la plataforma es la presencia de los deportes electrónicos, donde se puede apostar en CS:GO, Dota 2 y League of Legends."}',
             'value_fr' => '{"0":"Au basketball et au tennis, des marchés étendus sont également proposés, permettant de parier non seulement sur le résultat, mais aussi sur des indicateurs statistiques spécifiques. Une autre caractéristique intéressante de la plateforme est la présence de l’esport, où il est possible de parier sur CS:GO, Dota 2 et League of Legends."}',
             'value_pt' => '{"0":"No basquete e no tênis também estão disponíveis mercados ampliados, permitindo apostar não apenas no resultado, mas também em indicadores estatísticos individuais. Outra característica interessante da plataforma é a presença dos esportes eletrônicos, onde é possível apostar em CS:GO, Dota 2 e League of Legends."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The live betting section at 4RABET looks quite functional. In-play bets are updated quickly, and the odds adjust promptly according to the course of the event."}',
             'value_es' => '{"0":"La sección de apuestas en vivo en 4RABET resulta bastante funcional. Las apuestas en tiempo real se actualizan rápidamente y las cuotas se ajustan de manera oportuna según el desarrollo del evento."}',
             'value_fr' => '{"0":"La section des paris en direct de 4RABET est assez fonctionnelle. Les mises en temps réel sont mises à jour rapidement et les cotes s’ajustent de manière réactive en fonction du déroulement de l’événement."}',
             'value_pt' => '{"0":"A seção de apostas ao vivo da 4RABET mostra-se bastante funcional. As apostas em tempo real são atualizadas rapidamente e as odds são ajustadas de forma ágil de acordo com o andamento do evento."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth highlighting the availability of live streams for some events. Although there are not many of them yet, even basic matches can be watched directly on the website. For those playing from mobile devices, the live streaming feature is convenient as it allows users to avoid switching between platforms."}',
             'value_es' => '{"0":"Cabe destacar también la disponibilidad de transmisiones en vivo para algunos eventos. Aunque todavía no son muchas, incluso los partidos básicos pueden verse directamente en el sitio web. Para quienes juegan desde el móvil, la función de transmisión en vivo es muy práctica, ya que evita tener que cambiar entre plataformas."}',
             'value_fr' => '{"0":"Bien qu’elles ne soient pas encore très nombreuses, même les matchs de base peuvent être visionnés directement sur le site. Pour ceux qui jouent depuis un mobile, la fonction de streaming en direct est pratique car elle évite de devoir passer d’une plateforme à l’autre."}',
             'value_pt' => '{"0":"Vale destacar também a disponibilidade de transmissões ao vivo para alguns eventos. Embora ainda não sejam muitas, até mesmo partidas básicas podem ser assistidas diretamente no site. Para quem joga pelo celular, o recurso de live streaming é bastante prático, pois evita a necessidade de alternar entre plataformas."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET operates under an international Curacao license, which is a standard option for most bookmakers. The site uses SSL encryption to protect user data and financial transactions."}',
             'value_es' => '{"0":"4RABET opera con una licencia internacional de Curazao, que es la opción estándar para la mayoría de las casas de apuestas. El sitio utiliza cifrado SSL para proteger los datos de los usuarios y las transacciones financieras."}',
             'value_fr' => '{"0":"4RABET fonctionne sous une licence internationale de Curaçao, ce qui constitue une option standard pour la plupart des bookmakers. Le site utilise un cryptage SSL afin de protéger les données des utilisateurs et les transactions financières."}',
             'value_pt' => '{"0":"A 4RABET opera sob uma licença internacional de Curaçao, que é a opção padrão para a maioria das casas de apostas. O site utiliza criptografia SSL para proteger os dados dos usuários e as transações financeiras."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"You will also have access to standard security measures such as two-factor authentication and mandatory identity verification when withdrawing funds. The company adheres to the principles of responsible gaming, offering the option to set deposit limits or temporarily block your account if necessary."}',
             'value_es' => '{"0":"También tendrás acceso a medidas de seguridad estándar como la autenticación de dos factores y la verificación obligatoria de identidad al momento de retirar fondos. La empresa sigue los principios de juego responsable, ofreciendo la posibilidad de establecer límites de depósito o bloquear temporalmente la cuenta en caso de necesidad."}',
             'value_fr' => '{"0":"Vous aurez également accès à des mesures de sécurité standard telles que l’authentification à deux facteurs et la vérification obligatoire de l’identité lors du retrait de fonds. L’entreprise respecte les principes du jeu responsable en proposant la possibilité de fixer des limites de dépôt ou de bloquer temporairement le compte si nécessaire."}',
             'value_pt' => '{"0":"Você também terá acesso a medidas de segurança padrão, como autenticação de dois fatores e verificação obrigatória de identidade ao solicitar saques. A empresa segue os princípios de jogo responsável, oferecendo a possibilidade de definir limites de depósito ou bloquear temporariamente a conta quando necessário."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Financial transactions at 4RABET are convenient and fairly fast. The service supports Visa and MasterCard bank cards, as well as e-wallets such as Skrill and Neteller. For users from certain countries, local payment methods are also available, including instant transfer systems."}',
             'value_es' => '{"0":"Las transacciones financieras en 4RABET son cómodas y bastante rápidas. El servicio admite tarjetas bancarias Visa y MasterCard, así como monederos electrónicos como Skrill y Neteller. Para los usuarios de ciertos países también están disponibles métodos de pago locales, incluidos sistemas de transferencias instantáneas."}',
             'value_fr' => '{"0":"Les transactions financières sur 4RABET sont pratiques et relativement rapides. Le service prend en charge les cartes bancaires Visa et MasterCard, ainsi que les portefeuilles électroniques tels que Skrill et Neteller. Dans certains pays, des méthodes de paiement locales sont également disponibles, y compris les systèmes de transferts instantanés."}',
             'value_pt' => '{"0":"As transações financeiras na 4RABET são convenientes e relativamente rápidas. O serviço suporta cartões bancários Visa e MasterCard, além de carteiras eletrônicas como Skrill e Neteller. Para usuários de alguns países, também estão disponíveis métodos de pagamento locais, incluindo sistemas de transferência instantânea."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are usually credited instantly, while withdrawals take from a few hours up to two days, depending on the method and amount. The minimum deposit starts at $1. A significant advantage is the absence of bookmaker fees, although banks or payment systems may charge their own commissions."}',
             'value_es' => '{"0":"Los depósitos suelen acreditarse de forma inmediata, mientras que los retiros tardan desde unas pocas horas hasta dos días, según el método y el monto. El depósito mínimo comienza en $1. Una ventaja importante es la ausencia de comisiones por parte de la casa de apuestas, aunque los bancos o sistemas de pago pueden cobrar sus propias comisiones."}',
             'value_fr' => '{"0":"Les dépôts sont généralement crédités immédiatement, tandis que les retraits prennent de quelques heures à deux jours, selon la méthode et le montant. Le dépôt minimum commence à 1 $. Un avantage notable est l’absence de frais de la part du bookmaker, bien que les banques ou systèmes de paiement puissent appliquer leurs propres commissions."}',
             'value_pt' => '{"0":"Os depósitos geralmente são creditados de forma imediata, enquanto os saques levam de algumas horas a até dois dias, dependendo do método e do valor. O depósito mínimo começa em US$1. Uma vantagem significativa é a ausência de taxas por parte da casa de apostas, embora bancos ou sistemas de pagamento possam cobrar suas próprias comissões."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 28
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'quick_info',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
                'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The support service at 4RABET operates 24/7 and is available via online chat, email, and the feedback form on the website. The fastest option is, of course, the chat, where you can receive a response within a few minutes."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 4RABET funciona las 24 horas, los 7 días de la semana y está disponible a través de chat en línea, correo electrónico y el formulario de contacto en el sitio web. La opción más rápida es, por supuesto, el chat, donde se puede recibir una respuesta en unos pocos minutos."}',
             'value_fr' => '{"0":"Le service client de 4RABET est disponible 24h/24 et 7j/7 via le chat en ligne, par email et via le formulaire de contact sur le site. L’option la plus rapide est bien sûr le chat, où l’on peut recevoir une réponse en quelques minutes."}',
             'value_pt' => '{"0":"O serviço de suporte da 4RABET funciona 24 horas por dia, 7 dias por semana, e está disponível via chat online, e-mail e formulário de contato no site. A opção mais rápida é, naturalmente, o chat, onde é possível receber uma resposta em poucos minutos."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 32
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Convenient mobile app for Android",
                                 "1":"Wide selection of sports bets",
                                 "2":"Large casino section",
                                 "3":"Minimum deposit from $1",
                                 "4":"Commission-free transactions"},
                             "1":
                                {"0":"Limited number of live streams",
                                 "1":"No iOS app"}
                             }',
             'value_es' => '{"0":
                                {"0":"Aplicación móvil conveniente para Android",
                                 "1":"Amplia selección de apuestas deportivas",
                                 "2":"Gran sección de casino",
                                 "3":"Depósito mínimo desde $1",
                                 "4":"Transacciones sin comisiones"},
                             "1":
                                {"0":"Número limitado de transmisiones en vivo",
                                 "1":"No hay aplicación para iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Application mobile pratique pour Android",
                                 "1":"Large choix de paris sportifs",
                                 "2":"Grande section casino",
                                 "3":"Dépôt minimum à partir de 1 $",
                                 "4":"Transactions sans commission"},
                             "1":
                                {"0":"Nombre limité de diffusions en direct",
                                 "1":"Pas d’application pour iOS"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Aplicativo móvel conveniente para Android",
                                 "1":"Ampla seleção de apostas esportivas",
                                 "2":"Grande seção de cassino",
                                 "3":"Depósito mínimo a partir de US$1",
                                 "4":"Transações sem comissão"},
                             "1":
                                {"0":"Número limitado de transmissões ao vivo",
                                 "1":"Sem aplicativo para iOS"}
                             }',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 33
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 34
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Is the 4RABET mobile app available?"}',
             'value_es' => '{"0":"¿Está disponible la aplicación móvil de 4RABET?"}',
             'value_fr' => '{"0":"L’application mobile 4RABET est-elle disponible ?"}',
             'value_pt' => '{"0":"O aplicativo móvel 4RABET está disponível?"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 35
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, there is an app for Android, and iOS smartphone users can use the web app."}',
             'value_es' => '{"0":"Sí, hay una aplicación para Android, y los usuarios de smartphones iOS pueden utilizar la versión web."}',
             'value_fr' => '{"0":"Oui, il existe une application pour Android, et les utilisateurs d’iPhone peuvent utiliser l’application web."}',
             'value_pt' => '{"0":"Sim, há um aplicativo para Android, e os usuários de smartphones iOS podem usar o aplicativo web."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 36
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit at 4RABET?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo en 4RABET?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum sur 4RABET ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo na 4RABET?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 37
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is $1 or the equivalent in another currency."}',
             'value_es' => '{"0":"El depósito mínimo es de $1 o su equivalente en otra moneda."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 $ ou l’équivalent dans une autre devise."}',
             'value_pt' => '{"0":"O depósito mínimo é de US$1 ou o equivalente em outra moeda."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 38
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para retirar fundos?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 39
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, money is received within 24–48 hours, depending on the method and amount."}',
             'value_es' => '{"0":"En la mayoría de los casos, el dinero se recibe dentro de 24–48 horas, dependiendo del método y la cantidad."}',
             'value_fr' => '{"0":"Dans la plupart des cas, l’argent est reçu sous 24 à 48 heures, selon la méthode et le montant."}',
             'value_pt' => '{"0":"Na maioria dos casos, o dinheiro é recebido dentro de 24 a 48 horas, dependendo do método e do valor."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 40
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Can I place bets in live mode?"}',
             'value_es' => '{"0":"¿Se pueden realizar apuestas en modo en vivo?"}',
             'value_fr' => '{"0":"Peut-on parier en mode live ?"}',
             'value_pt' => '{"0":"É possível fazer apostas em modo ao vivo?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 41
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, live bets are supported, and some events also have live streams available."}',
             'value_es' => '{"0":"Sí, se admiten apuestas en vivo y algunos eventos también cuentan con transmisiones en directo."}',
             'value_fr' => '{"0":"Oui, les paris en direct sont disponibles, et certains événements proposent également des diffusions en direct."}',
             'value_pt' => '{"0":"Sim, as apostas ao vivo são suportadas, e alguns eventos também têm transmissões ao vivo disponíveis."}',
             'order' => 41
            ]
        );
    }
}
