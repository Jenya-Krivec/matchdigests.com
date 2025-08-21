<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
             'value_en' => '{"0":"BETANDYOU Review"}',
             'value_es' => '{"0":"Reseña de BETANDYOU"}',
             'value_fr' => '{"0":"Avis sur BETANDYOU"}',
             'value_pt' => '{"0":"Análise da BETANDYOU"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU is an international bookmaker that was founded in 2010, initially providing its services in Central Asia, and began expanding to the international market in 2019. The company operates under a Curacao license, which has already become a standard for most bookmakers."}',
             'value_es' => '{"0":"BETANDYOU es una casa de apuestas internacional fundada en 2010, que inicialmente ofrecía sus servicios en Asia Central y comenzó a expandirse al mercado internacional en 2019. La empresa opera bajo una licencia de Curazao, que ya se ha convertido en un estándar para la mayoría de las casas de apuestas."}',
             'value_fr' => '{"0":"BETANDYOU est un bookmaker international fondé en 2010, qui proposait initialement ses services en Asie centrale et a commencé à s’étendre sur le marché international en 2019. La société opère sous licence du Curaçao, ce qui est déjà devenu une norme pour la majorité des bookmakers."}',
             'value_pt' => '{"0":"A BETANDYOU é uma casa de apostas internacional fundada em 2010, que inicialmente oferecia seus serviços na Ásia Central e começou a expandir-se para o mercado internacional em 2019. A empresa opera sob licença de Curaçao, que já se tornou um padrão para a maioria das casas de apostas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The main feature of BETANDYOU is that the site combines a sportsbook with a large number of sporting events and a casino section with games from dozens of providers. According to the official website, more than a thousand sporting events are available daily for betting, and the casino section offers several thousand slots and live games. The platform is aimed at players from different countries, supporting dozens of languages and popular payment systems."}',
             'value_es' => '{"0":"La principal característica de BETANDYOU es que el sitio combina una amplia línea de eventos deportivos con una sección de casino que incluye juegos de docenas de proveedores. Según el sitio web oficial, cada día se ofrecen más de mil eventos deportivos para apostar, y en la sección de casino se pueden encontrar varios miles de tragamonedas y juegos en vivo. La plataforma está orientada a jugadores de diferentes países, soporta decenas de idiomas y sistemas de pago populares."}',
             'value_fr' => '{"0":"La principale particularité de BETANDYOU est que le site combine une offre sportive avec un grand nombre d’événements et une section casino regroupant des jeux de dizaines de fournisseurs. Selon le site officiel, plus d’un millier d’événements sportifs sont disponibles chaque jour pour les paris, et la section casino propose plusieurs milliers de machines à sous et de jeux en direct. La plateforme est destinée aux joueurs de différents pays, prend en charge des dizaines de langues et les systèmes de paiement les plus populaires."}',
             'value_pt' => '{"0":"A principal característica da BETANDYOU é que o site combina uma ampla linha de eventos esportivos com uma seção de cassino que inclui jogos de dezenas de provedores. De acordo com o site oficial, estão disponíveis diariamente mais de mil eventos esportivos para apostas, e na seção de cassino é possível encontrar vários milhares de slots e jogos ao vivo. A plataforma é voltada para jogadores de diferentes países, suportando dezenas de idiomas e os sistemas de pagamento mais populares."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Sports betting at BETANDYOU covers more than 40 disciplines, with football, tennis, basketball, and hockey being traditionally the most popular. But the choice doesn’t end there. You can also bet on less common sports like cricket, baseball, American football, MMA, boxing, and even on cybersports such as chess or political events. The betting line is available both for pre-match and live mode."}',
             'value_es' => '{"0":"Las apuestas deportivas en BETANDYOU abarcan más de 40 disciplinas, siendo tradicionalmente las más populares el fútbol, el tenis, el baloncesto y el hockey. Pero la oferta no termina ahí. También puedes apostar en deportes menos comunes como el cricket, el béisbol, el fútbol americano, las MMA, el boxeo e incluso en el ajedrez electrónico o en eventos políticos. La línea de apuestas está disponible tanto en prematch como en vivo."}',
             'value_fr' => '{"0":"Les paris sportifs chez BETANDYOU couvrent plus de 40 disciplines, avec comme favoris traditionnels le football, le tennis, le basketball et le hockey. Mais le choix ne s’arrête pas là. Vous pouvez également parier sur des disciplines moins répandues comme le cricket, le baseball, le football américain, le MMA, la boxe et même sur les échecs en ligne ou des événements politiques. La ligne de paris est proposée aussi bien en pré-match qu’en direct."}',
             'value_pt' => '{"0":"As apostas esportivas na BETANDYOU abrangem mais de 40 modalidades, sendo o futebol, o tênis, o basquete e o hóquei os mais populares. Mas a oferta não se limita a isso. Também é possível apostar em esportes menos comuns, como críquete, beisebol, futebol americano, MMA, boxe e até mesmo em xadrez eletrônico ou eventos políticos. A linha de apostas está disponível tanto para pré-jogo quanto para o modo ao vivo."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Esports deserve special mention. Here you can find matches in Dota 2, CS:GO, and League of Legends. The site’s interface makes it easy to find the right events thanks to search and sport/league filters. Bets can be placed as singles, accumulators, or even combined bets. Here are some of the sports available:"}',
             'value_es' => '{"0":"El apartado de deportes electrónicos merece una mención aparte. Aquí encontrarás partidos de Dota 2, CS:GO y League of Legends. La interfaz del sitio permite encontrar rápidamente los eventos gracias al buscador y a los filtros por deportes y ligas. Las apuestas pueden hacerse en formato simple, combinadas o de tipo múltiple. A continuación, algunos de los deportes disponibles:"}',
             'value_fr' => '{"0":"L’e-sport mérite une attention particulière. On y retrouve des matchs de Dota 2, CS:GO et League of Legends. L’interface du site permet de trouver facilement les événements grâce à la recherche et aux filtres par sport ou par ligue. Les paris peuvent être placés en simple, combiné ou sous forme de paris multiples. Voici quelques-uns des sports disponibles :"}',
             'value_pt' => '{"0":"O segmento de eSports merece destaque. Aqui você encontra partidas de Dota 2, CS:GO e League of Legends. A interface do site facilita a busca por eventos graças ao mecanismo de pesquisa e aos filtros por esportes e ligas. As apostas podem ser feitas em simples, acumuladas ou combinadas. Confira alguns dos esportes disponíveis:"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The casino at BETANDYOU is in no way inferior in scale to other bookmakers. It features several thousand games from over 100 providers, including NetEnt, Microgaming, Play’n GO, Pragmatic Play, and many others. The main part of the catalog consists of slots, but there are also roulette, blackjack, baccarat, poker, and numerous live games with real dealers."}',
             'value_es' => '{"0":"El casino de BETANDYOU no tiene nada que envidiar en cuanto a escala a otros operadores. Reúne varios miles de juegos de más de 100 proveedores, entre ellos NetEnt, Microgaming, Play’n GO, Pragmatic Play y muchos más. La mayor parte del catálogo está compuesta por tragamonedas, pero también hay ruleta, blackjack, bacará, póker y numerosos juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"Le casino de BETANDYOU n’a rien à envier aux autres opérateurs en termes d’ampleur. Il regroupe plusieurs milliers de jeux provenant de plus de 100 fournisseurs, dont NetEnt, Microgaming, Play’n GO, Pragmatic Play et bien d’autres. La plus grande partie du catalogue est constituée de machines à sous, mais on y trouve également la roulette, le blackjack, le baccarat, le poker et de nombreux jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"O cassino da BETANDYOU não fica atrás em escala em relação a outros operadores. Reúne vários milhares de jogos de mais de 100 provedores, entre eles NetEnt, Microgaming, Play’n GO, Pragmatic Play e muitos outros. A maior parte do catálogo é composta por slots, mas também há roleta, blackjack, bacará, pôquer e inúmeros jogos ao vivo com crupiês reais."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The live casino stands out with high-quality broadcasts and a professional level of hosts. The casino is fully integrated into the main account, so you can easily switch between sports betting and games while using a single balance."}',
             'value_es' => '{"0":"El casino en vivo se distingue por transmisiones de alta calidad y un nivel profesional de los presentadores. El casino está totalmente integrado en la cuenta principal, lo que permite alternar fácilmente entre las apuestas deportivas y los juegos utilizando un único saldo."}',
             'value_fr' => '{"0":"Le casino en direct se distingue par la haute qualité des diffusions et le professionnalisme des animateurs. Le casino est intégré au compte principal, ce qui permet de passer facilement des paris sportifs aux jeux en utilisant un seul solde."}',
             'value_pt' => '{"0":"O cassino ao vivo se destaca pela alta qualidade das transmissões e pelo nível profissional dos apresentadores. O cassino é totalmente integrado à conta principal, permitindo alternar facilmente entre apostas esportivas e jogos utilizando um único saldo."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers odds on matches at a fairly high level, especially for top championships and tournaments. For example, in English Premier League matches, the favorite’s win is often priced around 1.70. The underdog’s victory can be found in the range of 5.50–6.00. In tennis, particularly in ATP or WTA matches, odds for evenly matched players usually hover around 1.90."}',
             'value_es' => '{"0":"BETANDYOU ofrece cuotas en los partidos a un nivel bastante alto, especialmente en los campeonatos y torneos más importantes. Por ejemplo, en los partidos de la Premier League inglesa, la victoria del favorito suele pagarse en torno a 1.70. La victoria del no favorito puede encontrarse en el rango de 5.50–6.00. En el tenis, particularmente en partidos de la serie ATP o WTA, las cuotas para rivales de nivel similar suelen rondar 1.90."}',
             'value_fr' => '{"0":"BETANDYOU propose des cotes sur les matchs à un niveau assez élevé, en particulier pour les championnats et tournois majeurs. Par exemple, lors des matchs de Premier League anglaise, la victoire du favori est souvent cotée autour de 1.70. La victoire de l’outsider se situe généralement entre 5.50 et 6.00. Au tennis, notamment lors des matchs de l’ATP ou de la WTA, les cotes pour des adversaires de niveau similaire tournent autour de 1.90."}',
             'value_pt' => '{"0":"A BETANDYOU oferece odds em um nível bastante alto, especialmente nos principais campeonatos e torneios. Por exemplo, em partidas da Premier League inglesa, a vitória do favorito costuma estar cotada em torno de 1.70. Já a vitória do azarão pode variar entre 5.50 e 6.00. No tênis, especialmente em jogos da série ATP ou WTA, as odds para adversários equilibrados geralmente ficam em torno de 1.90."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Betting limits vary depending on the sport and the level of the tournament. For instance, you can wager several thousand dollars on a Champions League match, while local amateur competitions may only allow a few hundred. The minimum bet is just $0.2 or the equivalent in another currency."}',
             'value_es' => '{"0":"Los límites de apuesta varían según el deporte y el nivel del torneo. Por ejemplo, en un partido de la Liga de Campeones se pueden apostar varios miles de dólares, mientras que en competiciones locales amateurs el límite puede ser de solo unos cientos. La apuesta mínima es de tan solo 0,2 $ o el equivalente en otra moneda."}',
             'value_fr' => '{"0":"Les limites de mise varient en fonction du sport et du niveau de la compétition. Par exemple, il est possible de miser plusieurs milliers de dollars sur un match de Ligue des champions, tandis que les compétitions amateurs locales n’acceptent que quelques centaines. La mise minimale est de seulement 0,2 $ ou l’équivalent dans une autre devise."}',
             'value_pt' => '{"0":"Os limites de apostas variam de acordo com o esporte e o nível do torneio. Por exemplo, em uma partida da Liga dos Campeões é possível apostar vários milhares de dólares, enquanto em competições amadoras locais o limite pode ser de apenas algumas centenas. A aposta mínima é de apenas US$ 0,2 ou o equivalente em outra moeda."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers a wide range of betting options. For example, a Premier League match can feature more than 1,000 markets. You can bet on the match result, totals, and handicaps, as well as on the number of corners, cards, shots on target, ball possession, and much more."}',
             'value_es' => '{"0":"En BETANDYOU hay una gran variedad de opciones de apuestas. Por ejemplo, un partido de la Premier League puede tener más de 1.000 mercados. Puedes apostar al resultado del partido, a los totales y a los hándicaps, así como al número de saques de esquina, tarjetas, tiros a puerta, posesión del balón y mucho más."}',
             'value_fr' => '{"0":"BETANDYOU propose un large éventail d’options de paris. Par exemple, un match de Premier League peut offrir plus de 1 000 marchés. Vous pouvez parier sur le résultat du match, les totaux et les handicaps, ainsi que sur le nombre de corners, de cartons, de tirs cadrés, la possession du ballon et bien plus encore."}',
             'value_pt' => '{"0":"A BETANDYOU disponibiliza uma grande variedade de opções de apostas. Por exemplo, uma partida da Premier League pode ter mais de 1.000 mercados. Você pode apostar no resultado da partida, em totais e handicaps, bem como no número de escanteios, cartões, chutes a gol, posse de bola e muito mais."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For tennis matches, you can place bets on each game and set, while in basketball you can bet on individual quarters and player statistics."}',
             'value_es' => '{"0":"En los partidos de tenis se puede apostar a cada juego y set, y en el baloncesto a cada cuarto y a las estadísticas individuales de los jugadores."}',
             'value_fr' => '{"0":"Pour les matchs de tennis, il est possible de parier sur chaque jeu et set, et au basketball sur chaque quart-temps et les statistiques individuelles des joueurs."}',
             'value_pt' => '{"0":"Nos jogos de tênis, é possível apostar em cada game e set, e no basquete em cada quarto e nas estatísticas individuais dos jogadores."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The live section of BETANDYOU looks modern and functional. You can follow multiple events simultaneously, use interactive graphics, and view real-time statistics."}',
             'value_es' => '{"0":"La sección en vivo de BETANDYOU se ve moderna y funcional. Puedes seguir varios eventos al mismo tiempo, utilizar gráficos interactivos y ver estadísticas en tiempo real."}',
             'value_fr' => '{"0":"La section live de BETANDYOU est moderne et fonctionnelle. Il est possible de suivre plusieurs événements simultanément, d’utiliser des graphiques interactifs et de consulter les statistiques en temps réel."}',
             'value_pt' => '{"0":"A seção ao vivo da BETANDYOU é moderna e funcional. Você pode acompanhar vários eventos simultaneamente, usar gráficos interativos e visualizar estatísticas em tempo real."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Live streams are available for a large number of matches, including football, tennis, basketball, and esports. To watch videos, you need to have a positive balance in your account or at least one active bet in the last 24 hours."}',
             'value_es' => '{"0":"Las transmisiones en directo están disponibles para una gran cantidad de partidos, incluyendo fútbol, tenis, baloncesto y deportes electrónicos. Para ver los videos, debes tener un saldo positivo en tu cuenta o al menos una apuesta activa en las últimas 24 horas."}',
             'value_fr' => '{"0":"Les diffusions en direct sont disponibles pour de nombreux matchs, y compris le football, le tennis, le basketball et l’esport. Pour regarder les vidéos, vous devez avoir un solde positif sur votre compte ou au moins un pari actif au cours des dernières 24 heures."}',
             'value_pt' => '{"0":"As transmissões ao vivo estão disponíveis para muitos jogos, incluindo futebol, tênis, basquete e esports. Para assistir aos vídeos, é necessário ter saldo positivo na conta ou pelo menos uma aposta ativa nas últimas 24 horas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, the quick update of odds allows you to react promptly to ongoing events."}',
             'value_es' => '{"0":"Además, la rápida actualización de cuotas permite reaccionar rápidamente a los eventos en curso."}',
             'value_fr' => '{"0":"De plus, la mise à jour rapide des cotes permet de réagir rapidement aux événements en cours."}',
             'value_pt' => '{"0":"Além disso, a atualização rápida das odds permite reagir prontamente aos acontecimentos em tempo real."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU operates under a Curaçao license, and the website uses SSL encryption to protect personal data and transactions. These are standard but important measures that ensure client information does not fall into the hands of third parties. Additionally, for extra security, you can enable two-factor authentication."}',
             'value_es' => '{"0":"BETANDYOU opera bajo una licencia de Curazao, y el sitio web utiliza cifrado SSL para proteger los datos personales y las transacciones. Estas son medidas estándar pero importantes que garantizan que la información de los clientes no caiga en manos de terceros. Además, para mayor seguridad, puedes activar la autenticación de dos factores."}',
             'value_fr' => '{"0":"BETANDYOU fonctionne sous licence de Curaçao et le site utilise le cryptage SSL pour protéger les données personnelles et les transactions. Ce sont des mesures standard mais importantes qui garantissent que les informations des clients ne tombent pas entre les mains de tiers. De plus, pour une sécurité accrue, vous pouvez activer l’authentification à deux facteurs."}',
             'value_pt' => '{"0":"A BETANDYOU opera com licença de Curaçao, e o site utiliza criptografia SSL para proteger os dados pessoais e as transações. Estas são medidas padrão, mas importantes, que garantem que as informações dos clientes não caiam em mãos de terceiros. Além disso, para maior segurança, você pode ativar a autenticação de dois fatores."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers over 50 payment methods, including Mastercard and VISA bank cards, e-wallets, and major cryptocurrencies. You can fund your account using Bitcoin, Ethereum, Litecoin, and other digital currencies."}',
             'value_es' => '{"0":"BETANDYOU ofrece más de 50 métodos de pago, incluidas tarjetas bancarias Mastercard y VISA, monederos electrónicos y las principales criptomonedas. Puedes financiar tu cuenta con Bitcoin, Ethereum, Litecoin y otras monedas digitales."}',
             'value_fr' => '{"0":"BETANDYOU propose plus de 50 méthodes de paiement, y compris les cartes bancaires Mastercard et VISA, les portefeuilles électroniques et les principales cryptomonnaies. Vous pouvez approvisionner votre compte avec Bitcoin, Ethereum, Litecoin et d’autres devises numériques."}',
             'value_pt' => '{"0":"A BETANDYOU oferece mais de 50 métodos de pagamento, incluindo cartões bancários Mastercard e VISA, carteiras eletrônicas e principais criptomoedas. Você pode financiar sua conta com Bitcoin, Ethereum, Litecoin e outras moedas digitais."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is usually $1 or the equivalent in another currency, and withdrawals can start from $2. Most deposits are credited instantly, while withdrawals take from a few minutes to several hours. However, in some cases, the process can take 1–2 days due to security measures when identity verification is required. Below we provide some brief information about the bookmaker:"}',
             'value_es' => '{"0":"El depósito mínimo suele ser de $1 o su equivalente en otra moneda, y los retiros pueden realizarse desde $2. La mayoría de los depósitos se acreditan al instante, mientras que los retiros tardan desde unos minutos hasta varias horas. Sin embargo, en algunos casos, el proceso puede tardar 1–2 días debido a medidas de seguridad cuando se requiere verificación de identidad. A continuación, proporcionamos información resumida sobre el operador:"}',
             'value_fr' => '{"0":"Le dépôt minimum est généralement de 1 $ ou l’équivalent dans une autre devise, et les retraits peuvent commencer à partir de 2 $. La plupart des dépôts sont crédités instantanément, tandis que les retraits prennent de quelques minutes à plusieurs heures. Cependant, dans certains cas, le processus peut durer 1 à 2 jours en raison des mesures de sécurité lorsque la vérification d’identité est nécessaire. Ci-dessous, nous fournissons quelques informations succinctes sur le bookmaker :"}',
             'value_pt' => '{"0":"O depósito mínimo geralmente é de $1 ou equivalente em outra moeda, e os saques podem ser feitos a partir de $2. A maioria dos depósitos é creditada instantaneamente, enquanto os saques levam de alguns minutos a várias horas. No entanto, em alguns casos, o processo pode levar 1–2 dias devido a medidas de segurança quando a verificação de identidade é necessária. Abaixo, fornecemos algumas informações resumidas sobre a casa de apostas:"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Customer support at BETANDYOU operates 24/7. You can contact an operator via the online chat on the website, email, or a special feedback form."}',
             'value_es' => '{"0":"El servicio de atención al cliente de BETANDYOU funciona las 24 horas del día, los 7 días de la semana. Puedes contactar con un operador a través del chat en línea del sitio web, correo electrónico o un formulario especial de retroalimentación."}',
             'value_fr' => '{"0":"Le service client de BETANDYOU est disponible 24h/24 et 7j/7. Vous pouvez contacter un opérateur via le chat en ligne sur le site, par e-mail ou via un formulaire de contact spécial."}',
             'value_pt' => '{"0":"O suporte ao cliente da BETANDYOU funciona 24 horas por dia, 7 dias por semana. Você pode entrar em contato com um operador através do chat online no site, e-mail ou um formulário de feedback especial."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events and markets",
                                 "1":"Large casino section with live games",
                                 "2":"Cryptocurrency support",
                                 "3":"Availability of live streams and statistics",
                                 "4":"Convenient interface"},
                             "1":
                                {"0":"Occasional delays with withdrawals"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de eventos deportivos y mercados",
                                 "1":"Gran sección de casino con juegos en vivo",
                                 "2":"Soporte de criptomonedas",
                                 "3":"Disponibilidad de transmisiones en vivo y estadísticas",
                                 "4":"Interfaz conveniente"},
                             "1":
                                {"0":"Ocasionalmente hay retrasos en los retiros"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d\'événements sportifs et de marchés",
                                 "1":"Grande section casino avec jeux en direct",
                                 "2":"Prise en charge des cryptomonnaies",
                                 "3":"Disponibilité des diffusions en direct et des statistiques",
                                 "4":"Interface pratique"},
                             "1":
                                {"0":"Parfois des retards dans les retraits"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla seleção de eventos esportivos e mercados",
                                 "1":"Grande seção de cassino com jogos ao vivo",
                                 "2":"Suporte a criptomoedas",
                                 "3":"Disponibilidade de transmissões ao vivo e estatísticas",
                                 "4":"Interface conveniente"},
                             "1":
                                {"0":"Ocasionalmente ocorrem atrasos nos saques"}
                             }',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 33
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Does BETANDYOU have a mobile app?"}',
             'value_es' => '{"0":"¿Tiene BETANDYOU una aplicación móvil?"}',
             'value_fr' => '{"0":"BETANDYOU dispose-t-il d\'une application mobile ?"}',
             'value_pt' => '{"0":"O BETANDYOU tem um aplicativo móvel?"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 34
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, apps are available for Android and iOS, but you can also use the mobile version of the website."}',
             'value_es' => '{"0":"Sí, hay aplicaciones disponibles para Android e iOS, pero también se puede usar la versión móvil del sitio web."}',
             'value_fr' => '{"0":"Oui, des applications sont disponibles pour Android et iOS, mais vous pouvez également utiliser la version mobile du site."}',
             'value_pt' => '{"0":"Sim, os aplicativos estão disponíveis para Android e iOS, mas você também pode usar a versão móvel do site."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 35
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum bet?"}',
             'value_es' => '{"0":"¿Cuál es la apuesta mínima?"}',
             'value_fr' => '{"0":"Quelle est la mise minimale ?"}',
             'value_pt' => '{"0":"Qual é a aposta mínima?"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 36
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet is only $0.2 or the equivalent in another currency."}',
             'value_es' => '{"0":"La apuesta mínima es de solo $0,2 o su equivalente en otra moneda."}',
             'value_fr' => '{"0":"La mise minimale est de seulement 0,2 $ ou l\'équivalent dans une autre devise."}',
             'value_pt' => '{"0":"A aposta mínima é de apenas $0,2 ou o equivalente em outra moeda."}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 37
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar fundos?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 38
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Usually from a few minutes to a few hours, but in the case of identity verification, it can take up to two days."}',
             'value_es' => '{"0":"Normalmente de unos minutos a unas pocas horas, pero en caso de verificación de identidad, puede tardar hasta dos días."}',
             'value_fr' => '{"0":"Généralement de quelques minutes à quelques heures, mais en cas de vérification d\'identité, cela peut prendre jusqu\'à deux jours."}',
             'value_pt' => '{"0":"Normalmente de alguns minutos a algumas horas, mas no caso de verificação de identidade, pode levar até dois dias."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 39
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Can I place bets using cryptocurrency?"}',
             'value_es' => '{"0":"¿Se pueden realizar apuestas con criptomonedas?"}',
             'value_fr' => '{"0":"Peut-on parier avec des cryptomonnaies ?"}',
             'value_pt' => '{"0":"É possível fazer apostas com criptomoedas?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 40
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, BETANDYOU supports Bitcoin, Ethereum, and other popular coins."}',
             'value_es' => '{"0":"Sí, BETANDYOU admite Bitcoin, Ethereum y otras monedas populares."}',
             'value_fr' => '{"0":"Oui, BETANDYOU prend en charge le Bitcoin, l\'Ethereum et d\'autres cryptomonnaies populaires."}',
             'value_pt' => '{"0":"Sim, o BETANDYOU suporta Bitcoin, Ethereum e outras moedas populares."}',
             'order' => 40
            ]
        );
    }
}
