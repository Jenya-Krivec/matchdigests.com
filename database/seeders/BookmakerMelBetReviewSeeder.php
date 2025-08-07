<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
             'value_en' => '{"0":"MelBet Review"}',
             'value_es' => '{"0":"Reseña de MelBet"}',
             'value_fr' => '{"0":"Avis sur MelBet"}',
             'value_pt' => '{"0":"Análise da MelBet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If you’re looking for a modern bookmaker, MelBet is definitely worth considering. Founded in 2012, it operates under the umbrella of Tutkia Ltd, holds a Curacao license, and is active in over 100 countries."}',
             'value_es' => '{"0":"Si estás buscando una casa de apuestas moderna, MelBet definitivamente merece tu atención. Fundada en 2012, opera bajo la empresa Tutkia Ltd, cuenta con licencia de Curazao y está activa en más de 100 países."}',
             'value_fr' => '{"0":"Si vous recherchez un bookmaker moderne, MelBet mérite clairement votre attention. Fondé en 2012, il est exploité par la société Tutkia Ltd, dispose d’une licence du Curaçao et est actif dans plus de 100 pays."}',
             'value_pt' => '{"0":"Se você está procurando uma casa de apostas moderna, a MelBet certamente merece sua atenção. Fundada em 2012, opera sob a gestão da Tutkia Ltd, possui licença de Curaçao e está presente em mais de 100 países."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The platform offers a fun mix of sports betting, casino games, eSports, virtual games, and lotteries. Overall, you’ll find more than 50 sports categories and thousands of betting options available daily on MelBet."}',
             'value_es' => '{"0":"La plataforma ofrece una combinación entretenida de apuestas deportivas, juegos de casino, eSports, juegos virtuales y loterías. En total, en MelBet encontrarás más de 50 disciplinas deportivas y miles de opciones de apuestas cada día."}',
             'value_fr' => '{"0":"La plateforme propose un mélange ludique de paris sportifs, de jeux de casino, d’eSports, de jeux virtuels et de loteries. En tout, MelBet offre plus de 50 disciplines sportives et des milliers d’options de paris chaque jour."}',
             'value_pt' => '{"0":"A plataforma oferece uma combinação divertida de apostas esportivas, jogos de cassino, eSports, jogos virtuais e loterias. No total, você encontrará mais de 50 modalidades esportivas e milhares de opções de apostas todos os dias na MelBet."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The interface is sleek, with support for many languages and currencies, along with bonuses, promotions, and a loyalty program. After reading this review, you’ll understand why MelBet is so popular among sports betting fans."}',
             'value_es' => '{"0":"La interfaz es moderna y ofrece soporte en múltiples idiomas y monedas, con bonos, promociones y un programa de fidelidad. Al leer esta reseña, entenderás por qué MelBet es tan popular entre los aficionados a las apuestas deportivas."}',
             'value_fr' => '{"0":"L’interface est élégante, disponible en de nombreuses langues et devises, avec des bonus, des promotions et un programme de fidélité. En lisant cet avis, vous comprendrez pourquoi MelBet est si populaire auprès des amateurs de paris sportifs."}',
             'value_pt' => '{"0":"A interface é elegante, com suporte a diversos idiomas e moedas, além de bônus, promoções e um programa de fidelidade. Ao ler esta análise, você entenderá por que a MelBet é tão popular entre os fãs de apostas esportivas."}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet offers a very wide range of sporting events. You’ll find football, tennis, basketball, baseball, cricket, eSports, snooker, even bandy and other less popular disciplines. Every day, more than 1,000 sporting events are available, making the platform attractive for those looking for niche markets."}',
             'value_es' => '{"0":"MelBet ofrece una gama muy amplia de eventos deportivos. Encontrarás fútbol, tenis, baloncesto, béisbol, críquet, eSports, snooker, incluso bandy y otras disciplinas menos populares. Cada día hay disponibles más de 1.000 eventos deportivos, lo que hace que la plataforma sea atractiva para quienes buscan mercados menos convencionales."}',
             'value_fr' => '{"0":"MelBet propose un très large éventail d’événements sportifs. On y trouve du football, du tennis, du basketball, du baseball, du cricket, des eSports, du snooker, voire même du bandy et d’autres disciplines moins connues. Chaque jour, plus de 1000 événements sportifs sont disponibles, ce qui rend la plateforme attrayante pour ceux qui recherchent des marchés plus spécifiques."}',
             'value_pt' => '{"0":"A MelBet oferece uma gama muito ampla de eventos esportivos. Você encontrará futebol, tênis, basquete, beisebol, críquete, eSports, sinuca, até mesmo bandy e outras disciplinas menos populares. Todos os dias, estão disponíveis mais de 1.000 eventos esportivos, o que torna a plataforma atraente para quem busca mercados diferenciados."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Various types of bets are available, such as 1X2, totals, handicaps, shots on target, cards, corners, individual player stats, and more. For popular football matches, up to 3,200 markets are offered, and in tennis, more than 200 betting options are available."}',
             'value_es' => '{"0":"Están disponibles varios tipos de apuestas, como 1X2, totales, hándicaps, tiros a puerta, tarjetas, córners, estadísticas individuales de jugadores, entre otros. En los partidos de fútbol más populares se ofrecen hasta 3.200 mercados, y en tenis más de 200 opciones de apuesta."}',
             'value_fr' => '{"0":"Différents types de paris sont proposés, comme le 1X2, les totaux, les handicaps, les tirs cadrés, les cartons, les corners, les statistiques individuelles des joueurs, etc. Pour les grands matchs de football, jusqu’à 3200 marchés sont disponibles, et plus de 200 options de paris pour le tennis."}',
             'value_pt' => '{"0":"Estão disponíveis vários tipos de apostas, como 1X2, totais, handicaps, chutes a gol, cartões, escanteios, estatísticas individuais de jogadores, entre outros. Para os jogos de futebol mais populares, há até 3.200 mercados, e no tênis, mais de 200 opções de apostas."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It’s also worth mentioning that accumulator bets and TOTO are supported. Here’s a partial list of sports you can bet on:"}',
             'value_es' => '{"0":"También vale la pena señalar que se admiten apuestas combinadas y TOTO. Aquí tienes una lista parcial de deportes en los que puedes apostar:"}',
             'value_fr' => '{"0":"Il convient également de noter que les paris combinés et le TOTO sont disponibles. Voici une liste partielle des sports sur lesquels vous pouvez parier :"}',
             'value_pt' => '{"0":"Vale destacar também que apostas acumuladas e TOTO estão disponíveis. Aqui está uma lista parcial dos esportes nos quais você pode apostar:"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The MelBet casino section features over 5,000 slots, table games, and live dealer options. The interface is quite user-friendly, with a menu for navigating categories, filters by providers, popularity, features, and a convenient search function."}',
             'value_es' => '{"0":"La sección de casino de MelBet cuenta con más de 5.000 tragamonedas, juegos de mesa y opciones con crupieres en vivo. La interfaz es bastante cómoda, con un menú para navegar por categorías, filtros por proveedor, popularidad, funciones y una búsqueda práctica."}',
             'value_fr' => '{"0":"La section casino de MelBet propose plus de 5000 machines à sous, jeux de table et options avec croupiers en direct. L’interface est assez intuitive, avec un menu pour naviguer par catégories, des filtres selon les fournisseurs, la popularité, les fonctionnalités, ainsi qu’un moteur de recherche pratique."}',
             'value_pt' => '{"0":"A seção de cassino da MelBet oferece mais de 5.000 slots, jogos de mesa e opções com crupiês ao vivo. A interface é bastante prática, com um menu para navegar por categorias, filtros por provedores, popularidade, recursos e uma função de busca eficiente."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"There are plenty of games on the site, and this variety can satisfy even the most demanding player. You can choose what to play among slots, roulette, blackjack, virtual games, or enjoy live dealer tables."}',
             'value_es' => '{"0":"Hay muchos juegos en el sitio, y esta variedad puede satisfacer incluso al jugador más exigente. Puedes elegir entre tragamonedas, ruleta, blackjack, juegos virtuales o jugar con un crupier en vivo."}',
             'value_fr' => '{"0":"Il y a une grande variété de jeux sur le site, suffisante pour satisfaire même les joueurs les plus exigeants. Vous pouvez choisir de jouer aux machines à sous, à la roulette, au blackjack, aux jeux virtuels ou avec un croupier en direct."}',
             'value_pt' => '{"0":"Há muitos jogos disponíveis no site, e essa variedade certamente agradará até os jogadores mais exigentes. Você pode escolher entre slots, roleta, blackjack, jogos virtuais ou jogar com crupiês ao vivo."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It’s also worth noting that the site works well on mobile devices thanks to its responsive design, offering smooth gameplay anywhere and anytime."}',
             'value_es' => '{"0":"También cabe destacar que el sitio funciona muy bien en dispositivos móviles, gracias a su diseño adaptable que ofrece una experiencia fluida en cualquier momento y lugar."}',
             'value_fr' => '{"0":"À noter également que le site fonctionne très bien sur mobile grâce à son design adaptatif, offrant une expérience fluide partout et à tout moment."}',
             'value_pt' => '{"0":"Também vale mencionar que o site funciona muito bem em dispositivos móveis, graças ao seu design responsivo que proporciona uma jogabilidade fluida em qualquer lugar e a qualquer hora."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet stands out among competitors in the football and cricket betting markets, often offering better odds than Dafabet or Megapari. However, they are not always the top choice across all markets."}',
             'value_es' => '{"0":"MelBet se destaca entre sus competidores en los mercados de apuestas de fútbol y críquet, ofreciendo con frecuencia cuotas más favorables que Dafabet o Megapari. No obstante, no siempre lidera en todos los mercados."}',
             'value_fr' => '{"0":"MelBet se distingue de ses concurrents dans les marchés des paris sur le football et le cricket, en proposant souvent des cotes plus avantageuses que Dafabet ou Megapari. Cependant, ils ne sont pas toujours les premiers sur tous les marchés."}',
             'value_pt' => '{"0":"A MelBet se destaca entre os concorrentes nos mercados de apostas em futebol e críquete, frequentemente oferecendo odds mais vantajosas do que a Dafabet ou a Megapari. No entanto, não lidera em todos os mercados."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Betting limits depend on the event and the region. For top-tier tournaments, bets exceeding $100,000 are possible, while the maximum payout is usually capped around $50,000. Individual limits may also apply for VIP users."}',
             'value_es' => '{"0":"Los límites de apuesta dependen del evento y de la región. En torneos de nivel premium, es posible apostar más de $100.000, aunque la ganancia máxima suele estar limitada a unos $50.000. También pueden aplicarse límites individuales para usuarios VIP."}',
             'value_fr' => '{"0":"Les limites de mise dépendent de l’événement et de la région. Pour les tournois de haut niveau, il est possible de parier plus de 100000$, mais le gain maximal est généralement plafonné à environ 50000$. Des limites personnalisées peuvent également s’appliquer aux utilisateurs VIP."}',
             'value_pt' => '{"0":"Os limites de aposta variam conforme o evento e a região. Em torneios de alto nível, é possível apostar mais de US$100.000, enquanto o ganho máximo costuma ser limitado a cerca de US$50.000. Restrições individuais também podem ser aplicadas para usuários VIP."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Football is the top choice for betting on MelBet. The bookmaker offers up to 1,200 betting options per match in top leagues, and around 600 for cricket. Every day, over 50 sports disciplines provide thousands of matches, including markets for lesser-known championships like those in Finland or Indian leagues."}',
             'value_es' => '{"0":"El fútbol es la opción favorita para apostar en MelBet. La casa de apuestas ofrece hasta 1.200 opciones de apuesta por partido en las ligas principales, y unas 600 en críquet. Cada día, más de 50 disciplinas deportivas ofrecen miles de partidos, incluidos mercados de campeonatos menos conocidos, como los de Finlandia o las ligas de la India."}',
             'value_fr' => '{"0":"Le football est le sport préféré pour les paris sur MelBet. Le bookmaker propose jusqu\'à 1200 options de paris par match dans les meilleures ligues, et environ 600 pour le cricket. Chaque jour, plus de 50 disciplines sportives offrent des milliers de matchs, y compris des marchés sur des championnats moins connus comme ceux de Finlande ou les ligues indiennes."}',
             'value_pt' => '{"0":"O futebol é a principal escolha para apostas na MelBet. A casa de apostas oferece até 1.200 opções de apostas por partida nas principais ligas e cerca de 600 no críquete. Diariamente, mais de 50 modalidades esportivas oferecem milhares de partidas, incluindo mercados de campeonatos menos conhecidos, como os da Finlândia ou ligas indianas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Live betting also covers a wide range of events. You can bet on more than 30 live options, including corners and yellow cards. The eSports section features over 15 games, with dedicated markets for CS2 and Dota."}',
             'value_es' => '{"0":"Las apuestas en vivo también cubren una gran variedad de eventos. Puedes apostar en más de 30 opciones en directo, incluyendo córners y tarjetas amarillas. La sección de eSports incluye más de 15 juegos, con mercados específicos para CS2 y Dota."}',
             'value_fr' => '{"0":"Les paris en direct couvrent également un large éventail d’événements. Vous pouvez parier sur plus de 30 options en live, y compris les corners et les cartons jaunes. La section eSports comprend plus de 15 jeux, avec des marchés dédiés pour CS2 et Dota."}',
             'value_pt' => '{"0":"As apostas ao vivo também cobrem uma ampla variedade de eventos. É possível apostar em mais de 30 opções ao vivo, incluindo escanteios e cartões amarelos. A seção de eSports conta com mais de 15 jogos, com mercados específicos para CS2 e Dota."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The Live section offers over 160 betting options across 17 sports, as well as around 70 matches with live streaming directly on the website. The video stream opens in a separate window, can be expanded to full screen, and offers excellent quality with almost no lag."}',
             'value_es' => '{"0":"La sección en vivo ofrece más de 160 opciones de apuestas en 17 deportes, así como unos 70 partidos con transmisión en directo directamente en el sitio web. La transmisión de vídeo se abre en una ventana separada, se puede ampliar a pantalla completa y la calidad es excelente, con casi ningún retraso."}',
             'value_fr' => '{"0":"La section en direct propose plus de 160 options de paris sur 17 sports, ainsi qu’environ 70 matchs diffusés en streaming directement sur le site. Le flux vidéo s’ouvre dans une fenêtre séparée, peut être agrandi en plein écran, et la qualité est excellente avec très peu de latence."}',
             'value_pt' => '{"0":"A seção ao vivo oferece mais de 160 opções de apostas em 17 esportes, além de cerca de 70 partidas com transmissão ao vivo diretamente no site. O vídeo é exibido em uma janela separada, pode ser ampliado para tela cheia e apresenta excelente qualidade, com quase nenhum atraso."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If there is no stream, animated real-time visualizations are available, which are very convenient for tracking live events."}',
             'value_es' => '{"0":"Si no hay transmisión, se ofrece una animación en tiempo real, lo cual es muy útil para seguir los eventos en vivo."}',
             'value_fr' => '{"0":"S’il n’y a pas de diffusion, une animation en temps réel est disponible, ce qui est très pratique pour suivre les événements en direct."}',
             'value_pt' => '{"0":"Se não houver transmissão, está disponível uma animação com informações em tempo real, o que é muito prático para acompanhar os eventos ao vivo."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Multi-live and cash out features are also available. Some streams are even accessible without a deposit, which is a rare offer among bookmakers."}',
             'value_es' => '{"0":"También están disponibles las funciones de multi live y cash out. Algunos streams están accesibles incluso sin depósito, lo cual es una oferta poco común entre las casas de apuestas."}',
             'value_fr' => '{"0":"Les fonctions multi-live et cash out sont également disponibles. Certains flux sont accessibles même sans dépôt, ce qui est rare chez les bookmakers."}',
             'value_pt' => '{"0":"Também estão disponíveis as funções multi live e cash out. Alguns streams estão acessíveis mesmo sem depósito — uma oferta rara entre os sites de apostas."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet operates under a Curacao license, with additional local licenses in Nigeria, Estonia, and Kenya. As a result, many players leave positive reviews praising the platform’s transparency and the absence of payout issues. Two-factor authentication is also available, ensuring your account’s protection."}',
             'value_es' => '{"0":"MelBet opera bajo una licencia de Curazao, y también cuenta con licencias locales en Nigeria, Estonia y Kenia. Por ello, muchos jugadores dejan opiniones positivas sobre la transparencia de la plataforma y la ausencia de problemas con los pagos. También se ofrece autenticación de dos factores para proteger tu cuenta."}',
             'value_fr' => '{"0":"MelBet fonctionne sous licence de Curaçao, avec également des licences locales au Nigeria, en Estonie et au Kenya. De nombreux joueurs laissent des avis positifs sur la transparence de la plateforme et l\'absence de problèmes de paiements. L’authentification à deux facteurs est disponible pour renforcer la sécurité de votre compte."}',
             'value_pt' => '{"0":"A MelBet opera sob uma licença de Curaçau e também possui licenças locais na Nigéria, Estônia e Quênia. Por isso, muitos jogadores deixam avaliações positivas destacando a transparência e a ausência de problemas com pagamentos. A autenticação em dois fatores também está disponível para proteger sua conta."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet follows a responsible gambling policy, allowing users to set limits, take time-outs, or request self-exclusion through customer support."}',
             'value_es' => '{"0":"MelBet aplica una política de juego responsable, permitiendo establecer límites, pausas o solicitar la autoexclusión a través del soporte."}',
             'value_fr' => '{"0":"MelBet applique une politique de jeu responsable : il est possible de fixer des limites, des pauses ou de demander l’auto-exclusion via le support client."}',
             'value_pt' => '{"0":"A MelBet segue uma política de jogo responsável, permitindo definir limites, pausas ou solicitar autoexclusão através do suporte ao cliente."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet supports over 50 deposit methods. You can use Visa and Mastercard, as well as e-wallets like Skrill, Neteller, and ecoPayz. Cryptocurrencies such as BTC, LTC, ETH, Doge, Dai, and Dash are also accepted. The minimum deposit starts from $1."}',
             'value_es' => '{"0":"MelBet admite más de 50 métodos de depósito. Puedes utilizar tarjetas Visa y Mastercard, así como monederos electrónicos como Skrill, Neteller y ecoPayz. También se aceptan criptomonedas como BTC, LTC, ETH, Doge, Dai y Dash. El depósito mínimo es desde $1."}',
             'value_fr' => '{"0":"MelBet prend en charge plus de 50 méthodes de dépôt. Vous pouvez utiliser les cartes Visa et Mastercard, ainsi que des portefeuilles électroniques comme Skrill, Neteller et ecoPayz. Les cryptomonnaies telles que BTC, LTC, ETH, Doge, Dai et Dash sont également acceptées. Le dépôt minimum commence à partir de 1 $."}',
             'value_pt' => '{"0":"A MelBet oferece suporte a mais de 50 métodos de depósito. Você pode usar cartões Visa e Mastercard, além de carteiras digitais como Skrill, Neteller e ecoPayz. Criptomoedas como BTC, LTC, ETH, Doge, Dai e Dash também são aceitas. O depósito mínimo é a partir de $1."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals are available from just $1.50. Instant payouts are possible, maximum limits are high, and VIP players can access withdrawal limits reaching tens of thousands of dollars."}',
             'value_es' => '{"0":"Los retiros están disponibles a partir de $1.50. Hay pagos instantáneos, los límites máximos son altos, y para jugadores VIP pueden alcanzar decenas de miles de dólares."}',
             'value_fr' => '{"0":"Les retraits sont possibles dès 1,50 $. Les paiements instantanés sont disponibles, les limites maximales sont élevées, et pour les joueurs VIP, elles peuvent atteindre plusieurs dizaines de milliers de dollars."}',
             'value_pt' => '{"0":"Os saques estão disponíveis a partir de $1,50. Pagamentos instantâneos são possíveis, os limites máximos são altos e, para jogadores VIP, podem chegar a dezenas de milhares de dólares."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Customer support is available 24/7. You can get in touch via live chat, email, and phone."}',
             'value_es' => '{"0":"El servicio de atención al cliente está disponible las 24 horas, los 7 días de la semana. Puedes contactarlos por chat en vivo, correo electrónico o teléfono."}',
             'value_fr' => '{"0":"L’assistance clientèle est disponible 24h/24 et 7j/7. Vous pouvez les contacter par chat en direct, e-mail ou téléphone."}',
             'value_pt' => '{"0":"O suporte ao cliente está disponível 24 horas por dia, 7 dias por semana. Você pode entrar em contato via chat ao vivo, e-mail ou telefone."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide range of sports events and betting markets",
                                 "1":"Competitive odds on top events",
                                 "2":"Large selection of deposit/withdrawal methods, including crypto",
                                 "3":"Live streaming",
                                 "4":"Cash out",
                                 "5":"Android/iOS mobile app",
                                 "6":"24/7 support"},
                             "1":
                                {"0":"Restrictions for professional bettors",
                                 "1":"Low odds on minor matches"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia gama de eventos deportivos y mercados de apuestas",
                                 "1":"Cuotas competitivas en eventos importantes",
                                 "2":"Gran variedad de métodos de depósito y retiro, incluyendo criptomonedas",
                                 "3":"Transmisión en vivo",
                                 "4":"Cash out",
                                 "5":"Aplicación móvil para Android/iOS",
                                 "6":"Atención al cliente 24/7"},
                             "1":
                                {"0":"Restricciones para apostadores profesionales",
                                 "1":"Cuotas bajas en partidos secundarios"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large éventail d’événements sportifs et de marchés de paris",
                                 "1":"Cotes compétitives sur les événements majeurs",
                                 "2":"Large choix de méthodes de dépôt/retrait, y compris les cryptomonnaies",
                                 "3":"Streaming en direct",
                                 "4":"Cash out",
                                 "5":"Application mobile Android/iOS",
                                 "6":"Support 24h/24 et 7j/7"},
                             "1":
                                {"0":"Restrictions pour les parieurs professionnels",
                                 "1":"Cotes faibles sur les matchs secondaires"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla variedade de eventos esportivos e mercados de apostas",
                                 "1":"Cotações competitivas em eventos de destaque",
                                 "2":"Grande variedade de métodos de depósito/saque, incluindo criptomoedas",
                                 "3":"Transmissão ao vivo",
                                 "4":"Cash out",
                                 "5":"Aplicativo móvel para Android/iOS",
                                 "6":"Suporte 24 horas por dia, 7 dias por semana"},
                             "1":
                                {"0":"Restrições para apostadores profissionais",
                                 "1":"Cotações baixas em partidas secundárias"}
                             }',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 37
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 38
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Does MelBet have a license?"}',
             'value_es' => '{"0":"¿MelBet tiene licencia?"}',
             'value_fr' => '{"0":"MelBet possède-t-il une licence ?"}',
             'value_pt' => '{"0":"A MelBet tem licença?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 39
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, it operates under a Curacao license and also holds local licenses in certain countries."}',
             'value_es' => '{"0":"Sí, opera bajo una licencia de Curazao y también cuenta con licencias locales en algunos países."}',
             'value_fr' => '{"0":"Oui, il fonctionne sous licence de Curaçao et détient également des licences locales dans certains pays."}',
             'value_pt' => '{"0":"Sim, opera sob licença de Curaçao e também possui licenças locais em alguns países."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 40
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"What currencies and languages are supported?"}',
             'value_es' => '{"0":"¿Qué monedas e idiomas se admiten?"}',
             'value_fr' => '{"0":"Quelles devises et langues sont prises en charge ?"}',
             'value_pt' => '{"0":"Quais moedas e idiomas são suportados?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 41
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Over 30 languages and around 50 currencies are supported, including USD, EUR, BTC/ETH, and others."}',
             'value_es' => '{"0":"Se admiten más de 30 idiomas y alrededor de 50 monedas, incluidas USD, EUR, BTC/ETH y otras."}',
             'value_fr' => '{"0":"Plus de 30 langues et environ 50 devises sont prises en charge, y compris USD, EUR, BTC/ETH et d\'autres."}',
             'value_pt' => '{"0":"Mais de 30 idiomas e cerca de 50 moedas são suportados, incluindo USD, EUR, BTC/ETH e outras."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 43
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Can I watch live streams without a deposit?"}',
             'value_es' => '{"0":"¿Puedo ver transmisiones en vivo sin realizar un depósito?"}',
             'value_fr' => '{"0":"Puis-je regarder des diffusions en direct sans dépôt ?"}',
             'value_pt' => '{"0":"Posso assistir a transmissões ao vivo sem fazer um depósito?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 44
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, for some matches live streams are available even with an unpaid account."}',
             'value_es' => '{"0":"Sí, para algunos partidos las transmisiones en vivo están disponibles incluso sin haber realizado un depósito."}',
             'value_fr' => '{"0":"Oui, pour certains matchs, les diffusions en direct sont disponibles même sans compte approvisionné."}',
             'value_pt' => '{"0":"Sim, para algumas partidas, as transmissões ao vivo estão disponíveis mesmo com a conta não financiada."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 45
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"How long does verification take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda la verificación?"}',
             'value_fr' => '{"0":"Combien de temps prend la vérification ?"}',
             'value_pt' => '{"0":"Quanto tempo leva a verificação?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 46
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In simple cases, verification can be completed without delays, but in more complex cases—such as when a bank statement is requested—it may take several days or more."}',
             'value_es' => '{"0":"En casos simples, la verificación puede completarse sin demoras, pero en situaciones más complejas, como cuando se solicita un extracto bancario, puede tardar varios días o más."}',
             'value_fr' => '{"0":"Dans les cas simples, la vérification peut être effectuée sans délai, mais dans les cas plus complexes, par exemple lorsqu’un relevé bancaire est demandé, cela peut prendre plusieurs jours ou davantage."}',
             'value_pt' => '{"0":"Em casos simples, a verificação pode ser concluída sem atrasos, mas em situações mais complexas, como quando é solicitada uma declaração bancária, pode levar vários dias ou mais."}',
             'order' => 46
            ]
        );
    }
}
