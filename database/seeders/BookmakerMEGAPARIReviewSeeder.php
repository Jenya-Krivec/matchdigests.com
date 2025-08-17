<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
             'value_en' => '{"0":"MEGAPARI Review"}',
             'value_es' => '{"0":"Reseña de MEGAPARI"}',
             'value_fr' => '{"0":"Avis sur MEGAPARI"}',
             'value_pt' => '{"0":"Análise da MEGAPARI"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI entered the betting market in 2019. The bookmaker is owned by Orakum N.V. and operates under a Curaçao license. This license is not considered among the most prestigious worldwide, but it allows the company to legally provide services in dozens of countries and offer betting access to thousands of players every day. MEGAPARI is available in more than 50 languages, including English, Spanish, German, and many others."}',
             'value_es' => '{"0":"MEGAPARI apareció en el mercado de las apuestas en 2019. La casa de apuestas pertenece a Orakum N.V. y opera bajo una licencia de Curazao. Esta licencia no se considera de las más prestigiosas del mundo, pero permite ofrecer servicios de forma legal en decenas de países y dar acceso a las apuestas a miles de jugadores cada día. MEGAPARI está disponible en más de 50 idiomas, incluidos inglés, español, alemán y muchos más."}',
             'value_fr' => '{"0":"MEGAPARI est apparu sur le marché des paris en 2019. Le bookmaker appartient à Orakum N.V. et opère sous licence de Curaçao. Cette licence n’est pas considérée comme l’une des plus prestigieuses au monde, mais elle permet de fournir légalement des services dans des dizaines de pays et d’offrir l’accès aux paris à des milliers de joueurs chaque jour. MEGAPARI est disponible en plus de 50 langues, dont l’anglais, l’espagnol, l’allemand et bien d’autres."}',
             'value_pt' => '{"0":"A MEGAPARI entrou no mercado de apostas em 2019. A casa de apostas pertence à Orakum N.V. e opera sob uma licença de Curaçao. Essa licença não está entre as mais prestigiadas do mundo, mas permite oferecer serviços de forma legal em dezenas de países e dar acesso às apostas a milhares de jogadores todos os dias. A MEGAPARI está disponível em mais de 50 idiomas, incluindo inglês, espanhol, alemão e muitos outros."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The unique feature of MEGAPARI is that it brings together sports betting, casino, live games, and virtual disciplines on a single platform. Despite being a relatively young brand, it is rapidly growing and already serves hundreds of thousands of players across Europe, Asia, and Africa. For some, it is still a new name, but for many, MEGAPARI has already become a daily betting platform."}',
             'value_es' => '{"0":"La particularidad de MEGAPARI es que combina en una sola plataforma las apuestas deportivas, el casino, los juegos en vivo y las disciplinas virtuales. Aunque la marca es joven, crece de manera activa y ya atiende a cientos de miles de jugadores en Europa, Asia y África. Para algunos todavía es un nombre nuevo, pero para muchos ya se ha convertido en una plataforma de apuestas diaria."}',
             'value_fr' => '{"0":"La particularité de MEGAPARI est de réunir sur une même plateforme les paris sportifs, le casino, les jeux en direct et les disciplines virtuelles. Bien que la marque soit encore jeune, elle connaît une croissance rapide et compte déjà des centaines de milliers d’utilisateurs en Europe, en Asie et en Afrique. Pour certains, c’est encore un nom nouveau, mais pour beaucoup, MEGAPARI est déjà devenu une plateforme quotidienne de paris."}',
             'value_pt' => '{"0":"O diferencial da MEGAPARI é reunir em uma única plataforma as apostas esportivas, o cassino, os jogos ao vivo e as disciplinas virtuais. Apesar de ser uma marca jovem, cresce rapidamente e já atende centenas de milhares de jogadores na Europa, Ásia e África. Para alguns, ainda é um nome novo, mas para muitos a MEGAPARI já se tornou uma plataforma diária de apostas."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"On the MEGAPARI website, you can bet on more than 30 sports, with thousands of events offered to players every day in both pre-match and live formats. Football undoubtedly takes the first place in terms of popularity. In Europe’s top leagues, you can find hundreds of betting options for every match. For basketball games, extended totals, individual handicaps, and quarter bets are available, while in tennis, you can bet on the number of games, breaks, and the exact set scores."}',
             'value_es' => '{"0":"En el sitio web de MEGAPARI podrás apostar en más de 30 deportes, con miles de eventos disponibles cada día tanto en el prematch como en vivo. El fútbol, sin duda, ocupa el primer lugar en popularidad. En las principales ligas europeas se pueden encontrar cientos de opciones de apuesta para cada partido. En el baloncesto se ofrecen totales ampliados, hándicaps individuales y apuestas por cuartos, mientras que en el tenis puedes apostar al número de juegos, breaks y al marcador exacto de los sets."}',
             'value_fr' => '{"0":"Sur le site de MEGAPARI, vous pouvez parier sur plus de 30 sports, avec des milliers d’événements proposés chaque jour, aussi bien en pré-match qu’en direct. Le football occupe sans surprise la première place en popularité. Dans les principaux championnats européens, on trouve des centaines d’options de paris pour chaque rencontre. Pour le basketball, il existe des totaux étendus, des handicaps individuels et des paris sur les quarts-temps, tandis qu’au tennis, vous pouvez miser sur le nombre de jeux, les breaks et le score exact des sets."}',
             'value_pt' => '{"0":"No site da MEGAPARI, você pode apostar em mais de 30 esportes, com milhares de eventos disponíveis todos os dias em pré-jogo e ao vivo. O futebol, sem dúvida, ocupa o primeiro lugar em popularidade. Nas principais ligas da Europa, é possível encontrar centenas de opções de apostas para cada partida. No basquete, há totais ampliados, handicaps individuais e apostas por quarto, enquanto no tênis você pode apostar no número de games, quebras de serviço e no placar exato dos sets."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Interestingly, MEGAPARI is not limited to traditional sports. Here you will also find rugby, cricket, futsal, handball, kabaddi, and even lesser-known regional sports."}',
             'value_es' => '{"0":"Lo interesante es que MEGAPARI no se limita solo a los deportes tradicionales. Aquí también encontrarás rugby, críquet, fútbol sala, balonmano, kabaddi e incluso deportes regionales menos conocidos."}',
             'value_fr' => '{"0":"Il est intéressant de noter que MEGAPARI ne se limite pas uniquement aux sports traditionnels. Vous y trouverez également du rugby, du cricket, du futsal, du handball, du kabaddi et même des disciplines régionales moins connues."}',
             'value_pt' => '{"0":"Interessante notar que a MEGAPARI não se limita apenas aos esportes tradicionais. Aqui você também encontrará rúgbi, críquete, futsal, handebol, kabaddi e até esportes regionais menos conhecidos."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"A unique feature of the bookmaker is the «Match of the Day». Every day, the bookmaker selects one key event and offers higher limits or more favorable odds for it. For those who like accumulators, there are combined bets, system bets, and a Bet Builder option that allows you to combine several markets from a single match into one coupon. And here’s a partial list of popular sports you can play on:"}',
             'value_es' => '{"0":"Una característica única de la casa de apuestas es el «Partido del Día». Cada día, la casa selecciona un evento clave y ofrece límites más altos o cuotas más ventajosas. Para quienes disfrutan de las combinadas, se incluyen apuestas combinadas, de sistema y la opción Bet Builder, que permite juntar varios mercados de un mismo partido en un solo cupón. Y aquí tienes una lista parcial de los deportes más populares en los que podrás jugar:"}',
             'value_fr' => '{"0":"Une particularité du bookmaker est le «Match du Jour». Chaque jour, le site sélectionne un événement clé et propose des limites plus élevées ou des cotes plus avantageuses. Pour les amateurs de combinés, il existe des paris combinés, des paris systèmes et l’option Bet Builder, qui permet de regrouper plusieurs marchés d’un même match dans un seul coupon. Voici d’ailleurs une liste partielle des sports populaires sur lesquels vous pouvez jouer :"}',
             'value_pt' => '{"0":"Um diferencial da casa é o «Jogo do Dia». Todos os dias, o site escolhe um evento-chave e oferece limites mais altos ou odds mais vantajosas. Para quem gosta de acumuladores, há apostas combinadas, de sistema e a opção Bet Builder, que permite juntar vários mercados de uma mesma partida em um único bilhete. E aqui está uma lista parcial dos esportes populares nos quais você poderá jogar:"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the casino section, you will find over 2,000 games from the world’s most renowned providers such as NetEnt, Microgaming, Pragmatic Play, and Evolution Gaming. The selection of slots includes both classic fruit machines and modern 3D games with progressive jackpots. There are also themed slots inspired by movies and TV series."}',
             'value_es' => '{"0":"En la sección de casino encontrarás más de 2,000 juegos de los proveedores más reconocidos del mundo, como NetEnt, Microgaming, Pragmatic Play y Evolution Gaming. La selección de tragamonedas incluye tanto máquinas clásicas de frutas como juegos 3D modernos con botes progresivos. También hay tragaperras temáticas inspiradas en películas y series de televisión."}',
             'value_fr' => '{"0":"Dans la section casino, vous trouverez plus de 2 000 jeux proposés par les fournisseurs les plus réputés au monde tels que NetEnt, Microgaming, Pragmatic Play et Evolution Gaming. L’offre de machines à sous comprend aussi bien des bandits manchots classiques que des jeux 3D modernes avec jackpots progressifs. On y retrouve également des machines à thème inspirées de films et de séries télévisées."}',
             'value_pt' => '{"0":"Na seção de cassino você encontrará mais de 2.000 jogos dos provedores mais renomados do mundo, como NetEnt, Microgaming, Pragmatic Play e Evolution Gaming. A seleção de slots inclui tanto máquinas clássicas de frutas quanto jogos 3D modernos com jackpots progressivos. Também há slots temáticos inspirados em filmes e séries de TV."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino section, you can play roulette, blackjack, baccarat, poker, and dozens of game shows like Monopoly Live, Crazy Time, or Dream Catcher. Live dealer games are streamed in high quality, creating the feeling of a real casino. The casino operates 24/7, and thanks to support for a wide range of currencies and cryptocurrencies, players from different countries can easily join the action."}',
             'value_es' => '{"0":"En la sección de casino en vivo podrás jugar a la ruleta, blackjack, baccarat, póker y decenas de juegos tipo show como Monopoly Live, Crazy Time o Dream Catcher. Los juegos con crupieres en vivo se transmiten en alta calidad, lo que crea la sensación de un casino real. El casino funciona las 24 horas del día, y gracias al soporte de una amplia gama de monedas y criptomonedas, los jugadores de distintos países pueden unirse fácilmente."}',
             'value_fr' => '{"0":"Dans la section live-casino, vous pourrez jouer à la roulette, au blackjack, au baccarat, au poker ainsi qu’à des dizaines de jeux télévisés comme Monopoly Live, Crazy Time ou Dream Catcher. Les jeux avec croupiers en direct sont diffusés en haute qualité, recréant l’atmosphère d’un véritable casino. Le casino fonctionne 24h/24 et, grâce au support d’un large choix de devises et de cryptomonnaies, les joueurs de différents pays peuvent facilement participer."}',
             'value_pt' => '{"0":"Na seção de cassino ao vivo, você poderá jogar roleta, blackjack, bacará, pôquer e dezenas de game shows como Monopoly Live, Crazy Time ou Dream Catcher. Os jogos com crupiês ao vivo são transmitidos em alta qualidade, criando a sensação de um cassino real. O cassino funciona 24 horas por dia e, graças ao suporte de uma ampla variedade de moedas e criptomoedas, jogadores de diferentes países podem participar facilmente."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"One of the main reasons why many players choose MEGAPARI is the odds. For example, in Champions League matches, odds on the favorite are often around 1.85–1.90, while many competitors offer them between 1.80–1.83. An even more noticeable advantage can be seen in football markets for underdogs: MEGAPARI sometimes offers odds above 5.00, whereas other bookmakers stop at around 4.70. Beyond football, tennis is also worth mentioning, where odds on evenly matched players at MEGAPARI often stand at 1.95."}',
             'value_es' => '{"0":"Una de las principales razones por las que muchos jugadores eligen MEGAPARI son las cuotas. Por ejemplo, en los partidos de la Liga de Campeones, las cuotas para el favorito suelen estar entre 1.85–1.90, mientras que muchos competidores las ofrecen entre 1.80–1.83. La ventaja se hace aún más evidente en los mercados de fútbol para los no favoritos: MEGAPARI a veces ofrece cuotas superiores a 5.00, mientras que otras casas de apuestas se quedan en torno a 4.70. Además del fútbol, también vale la pena mencionar el tenis, donde en partidos equilibrados las cuotas en MEGAPARI suelen situarse en 1.95."}',
             'value_fr' => '{"0":"Une des principales raisons pour lesquelles de nombreux joueurs choisissent MEGAPARI est le niveau des cotes. Par exemple, lors des matchs de Ligue des Champions, les cotes pour le favori se situent souvent entre 1.85 et 1.90, alors que chez de nombreux concurrents elles varient entre 1.80 et 1.83. L’avantage est encore plus marqué sur les marchés de football concernant les outsiders : MEGAPARI propose parfois des cotes supérieures à 5.00, tandis que d’autres bookmakers s’arrêtent autour de 4.70. En dehors du football, le tennis mérite également d’être mentionné, car pour des adversaires de niveau équivalent, les cotes chez MEGAPARI se maintiennent souvent autour de 1.95."}',
             'value_pt' => '{"0":"Uma das principais razões pelas quais muitos jogadores escolhem a MEGAPARI são as odds. Por exemplo, em jogos da Liga dos Campeões, as odds para o favorito geralmente ficam entre 1.85–1.90, enquanto muitos concorrentes as oferecem entre 1.80–1.83. A vantagem torna-se ainda mais clara nos mercados de futebol para os azarões: a MEGAPARI às vezes oferece odds acima de 5.00, enquanto outras casas param em torno de 4.70. Além do futebol, vale destacar o tênis, onde em confrontos equilibrados as odds na MEGAPARI frequentemente ficam em 1.95."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet starts from €0.20, allowing even new players to get familiar with betting without major risks. It’s also worth noting that on top matches, you can place bets of several thousand euros, and in the case of very large wagers, limits are often agreed upon individually."}',
             'value_es' => '{"0":"La apuesta mínima comienza en 0.20 €, lo que permite a los nuevos jugadores familiarizarse con el juego sin grandes riesgos. También cabe destacar que en los partidos de primer nivel se pueden realizar apuestas de varios miles de euros, y en el caso de apuestas realmente grandes, los límites suelen acordarse de forma individual."}',
             'value_fr' => '{"0":"La mise minimale démarre à 0,20 €, ce qui permet même aux nouveaux joueurs de découvrir les paris sans grands risques. Il convient également de noter que sur les matchs majeurs, il est possible de miser plusieurs milliers d’euros, et que pour des mises particulièrement importantes, les limites sont souvent fixées individuellement."}',
             'value_pt' => '{"0":"A aposta mínima começa em €0,20, permitindo que até novos jogadores se familiarizem com o jogo sem grandes riscos. Também é importante mencionar que em partidas de alto nível é possível apostar vários milhares de euros, e no caso de apostas realmente grandes, os limites costumam ser definidos individualmente."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"If we talk about football, a single match in a major league can offer over a thousand betting options. For example, you can bet on the number of offsides, yellow cards, corners, shots on target, and fouls. A similar situation applies to basketball, where more than 200 options are available, including individual player statistics. In tennis, you can place bets on every game, set, the number of double faults, or aces."}',
             'value_es' => '{"0":"Si hablamos de fútbol, en un solo partido de una gran liga se pueden encontrar más de mil opciones de apuestas. Por ejemplo, se puede apostar al número de fueras de juego, tarjetas amarillas, saques de esquina, tiros a puerta y faltas. En el baloncesto la situación es similar, con más de 200 opciones disponibles, incluidas estadísticas individuales de jugadores. En el tenis es posible apostar en cada juego, set, número de dobles faltas o aces."}',
             'value_fr' => '{"0":"En ce qui concerne le football, un seul match d’un grand championnat peut proposer plus d’un millier d’options de paris. Par exemple, vous pouvez miser sur le nombre de hors-jeu, de cartons jaunes, de corners, de tirs cadrés ou encore de fautes. Une situation similaire se retrouve au basketball, avec plus de 200 options disponibles, y compris les statistiques individuelles des joueurs. Au tennis, il est possible de parier sur chaque jeu, set, le nombre de doubles fautes ou d’aces."}',
             'value_pt' => '{"0":"Falando de futebol, em uma única partida de um grande campeonato é possível encontrar mais de mil opções de apostas. Por exemplo, você pode apostar no número de impedimentos, cartões amarelos, escanteios, chutes a gol e faltas. Situação semelhante ocorre no basquete, com mais de 200 opções disponíveis, incluindo estatísticas individuais dos jogadores. No tênis, é possível apostar em cada game, set, número de duplas faltas ou aces."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, there are virtual sports with instant results. Importantly, MEGAPARI supports a convenient Bet Builder feature, allowing you to combine several markets from the same game into one bet slip."}',
             'value_es' => '{"0":"Además, hay deportes virtuales con resultados instantáneos. Es importante destacar que MEGAPARI ofrece la práctica función Bet Builder, que permite combinar varios mercados de un mismo partido en un solo cupón."}',
             'value_fr' => '{"0":"De plus, il existe des sports virtuels avec des résultats instantanés. Il est important de noter que MEGAPARI propose une fonction pratique appelée Bet Builder, qui permet de combiner plusieurs marchés d’un même match dans un seul coupon."}',
             'value_pt' => '{"0":"Além disso, existem esportes virtuais com resultados instantâneos. É importante destacar que a MEGAPARI oferece a prática função Bet Builder, que permite combinar vários mercados de um mesmo jogo em um único bilhete."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In live mode, more than 1,000 events are offered daily, and for almost all popular matches, a graphic visualization with real-time statistics updates is available. This makes it convenient to follow football matches, as you will receive information about attacks, shots, dangerous moments, while in tennis you can get detailed information for each game."}',
             'value_es' => '{"0":"En el modo en vivo se ofrecen más de 1.000 eventos cada día, y para casi todos los partidos populares hay disponible una visualización gráfica con actualización de estadísticas en tiempo real. Esto permite seguir cómodamente los partidos de fútbol, ya que se proporciona información sobre ataques, tiros, momentos peligrosos, mientras que en el tenis se puede obtener información detallada de cada juego."}',
             'value_fr' => '{"0":"En mode live, plus de 1 000 événements sont proposés chaque jour, et pour presque tous les matchs populaires une visualisation graphique avec mise à jour des statistiques en temps réel est disponible. Cela permet de suivre facilement les matchs de football, avec des informations sur les attaques, tirs, occasions dangereuses, et au tennis d’obtenir des données détaillées pour chaque jeu."}',
             'value_pt' => '{"0":"No modo ao vivo são oferecidos mais de 1.000 eventos por dia, e para quase todas as partidas populares há uma visualização gráfica com atualização de estatísticas em tempo real. Isso torna conveniente acompanhar jogos de futebol, com informações sobre ataques, chutes, momentos perigosos, enquanto no tênis é possível obter dados detalhados de cada game."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Even more importantly, MEGAPARI supports live streaming. Of course, it is not available for every match, but in top tournaments the broadcasts work reliably, and they can be watched directly in the site’s window without delay. The video quality is high, with the option to switch to full screen. This allows you not only to place bets, but also to fully immerse yourself in the atmosphere of the event."}',
             'value_es' => '{"0":"Lo más importante es que MEGAPARI ofrece retransmisiones en directo. Por supuesto, no están disponibles para todos los partidos, pero en los torneos principales las transmisiones funcionan de manera estable y pueden verse directamente en la ventana del sitio sin retrasos. La calidad de vídeo es alta, con la opción de pantalla completa. Esto permite no solo apostar, sino también sumergirse por completo en la atmósfera del evento."}',
             'value_fr' => '{"0":"Encore plus important, MEGAPARI propose des retransmissions en direct. Bien entendu, elles ne sont pas disponibles pour tous les matchs, mais lors des tournois majeurs elles fonctionnent de manière stable et peuvent être visionnées directement dans la fenêtre du site sans décalage. La qualité vidéo est élevée, avec la possibilité de passer en plein écran. Cela permet non seulement de parier, mais aussi de s’immerger totalement dans l’atmosphère de l’événement."}',
             'value_pt' => '{"0":"Ainda mais importante, a MEGAPARI oferece transmissões ao vivo. Claro, elas não estão disponíveis para todas as partidas, mas nos torneios principais funcionam de forma estável e podem ser assistidas diretamente na janela do site sem atraso. A qualidade do vídeo é alta, com a opção de tela cheia. Isso permite não apenas fazer apostas, mas também mergulhar totalmente na atmosfera do evento."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, it is worth mentioning the speed of odds updates. They are adjusted instantly, allowing players to react quickly to changes during the match. The live mode at MEGAPARI is truly a comfortable tool that can satisfy even the most demanding fans of live betting."}',
             'value_es' => '{"0":"Además, cabe destacar la velocidad de actualización de las cuotas. Se ajustan al instante, lo que permite al jugador reaccionar rápidamente a los cambios durante el partido. El modo en vivo de MEGAPARI es realmente una herramienta cómoda que puede satisfacer incluso a los aficionados más exigentes de las apuestas en directo."}',
             'value_fr' => '{"0":"Il convient également de mentionner la rapidité de la mise à jour des cotes. Elles s’ajustent instantanément, ce qui permet au joueur de réagir rapidement aux changements pendant le match. Le mode live chez MEGAPARI est un outil véritablement confortable, capable de satisfaire même les amateurs les plus exigeants des paris en direct."}',
             'value_pt' => '{"0":"Além disso, vale destacar a velocidade de atualização das odds. Elas são ajustadas instantaneamente, permitindo ao jogador reagir rapidamente às mudanças durante a partida. O modo ao vivo da MEGAPARI é realmente uma ferramenta confortável, capaz de satisfazer até os fãs mais exigentes das apostas ao vivo."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI operates under a Curaçao license, which formally provides a legal framework for its activities, although these jurisdictions are not considered the strictest in the world. In other words, the bookmaker is legal, but certain risks still exist. From a technical standpoint, the platform is secured with SSL encryption, player identity verification, as well as additional security measures to prevent fraud."}',
             'value_es' => '{"0":"MEGAPARI opera bajo una licencia de Curazao, lo que formalmente proporciona un marco legal para sus actividades, aunque estas jurisdicciones no se consideran las más estrictas del mundo. Es decir, la casa de apuestas es legal, pero ciertos riesgos aún existen. Técnicamente, la plataforma está protegida con cifrado SSL, verificación de identidad de los jugadores y medidas de seguridad adicionales para prevenir fraudes."}',
             'value_fr' => '{"0":"MEGAPARI fonctionne sous licence de Curaçao, ce qui assure formellement un cadre légal à ses activités, même si ces juridictions ne sont pas considérées comme les plus strictes au monde. Autrement dit, le bookmaker est légal, mais certains risques subsistent. Sur le plan technique, la plateforme est sécurisée grâce au chiffrement SSL, à la vérification de l’identité des joueurs, ainsi qu’à des mesures supplémentaires de sécurité pour prévenir la fraude."}',
             'value_pt' => '{"0":"A MEGAPARI opera sob uma licença de Curaçao, que formalmente fornece uma base legal para suas atividades, embora essas jurisdições não sejam consideradas das mais rigorosas do mundo. Em outras palavras, a casa de apostas é legal, mas ainda existem certos riscos. Tecnicamente, a plataforma é protegida com criptografia SSL, verificação de identidade dos jogadores e medidas de segurança adicionais para prevenir fraudes."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI offers you more than 50 deposit methods to choose from, including Visa and MasterCard bank cards, e-wallets like Skrill, Neteller, ecoPayz, systems such as Paysafecard, and bank transfers. A special emphasis is placed on cryptocurrencies, supporting Bitcoin, Litecoin, Ethereum, Ripple, Tether, and other popular coins. Here are some of them:"}',
             'value_es' => '{"0":"MEGAPARI te ofrece más de 50 métodos de depósito entre los que elegir, incluidos tarjetas bancarias Visa y MasterCard, monederos electrónicos como Skrill, Neteller, ecoPayz, sistemas como Paysafecard, y transferencias bancarias. Se hace un énfasis especial en las criptomonedas, admitiendo Bitcoin, Litecoin, Ethereum, Ripple, Tether y otras monedas populares. Aquí tienes algunas de ellas:"}',
             'value_fr' => '{"0":"MEGAPARI vous propose plus de 50 méthodes de dépôt au choix, y compris les cartes bancaires Visa et MasterCard, les portefeuilles électroniques comme Skrill, Neteller, ecoPayz, les systèmes tels que Paysafecard, ainsi que les virements bancaires. Un accent particulier est mis sur les cryptomonnaies, avec le support de Bitcoin, Litecoin, Ethereum, Ripple, Tether et d’autres monnaies populaires. En voici quelques-unes :"}',
             'value_pt' => '{"0":"A MEGAPARI oferece mais de 50 métodos de depósito à sua escolha, incluindo cartões bancários Visa e MasterCard, carteiras eletrônicas como Skrill, Neteller, ecoPayz, sistemas como Paysafecard e transferências bancárias. Um destaque especial é dado às criptomoedas, com suporte a Bitcoin, Litecoin, Ethereum, Ripple, Tether e outras moedas populares. Aqui estão algumas delas:"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
                'order' => 28
            ],
            ['key' => 'megapari',
                'bookmaker_id' => 9,
                'component' => 'quick_info',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
                'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit starts from one euro or the equivalent in another currency, allowing new players to explore the platform with minimal risk. Withdrawals can take from 15 minutes to several days depending on the method and amount."}',
             'value_es' => '{"0":"El depósito mínimo comienza desde un euro o su equivalente en otra moneda, lo que permite a los nuevos jugadores familiarizarse con la plataforma con un riesgo mínimo. Los retiros pueden tardar entre 15 minutos y varios días según el método y la cantidad."}',
             'value_fr' => '{"0":"Le dépôt minimum commence à un euro ou l’équivalent dans une autre devise, ce qui permet aux nouveaux joueurs de découvrir la plateforme avec un risque minimal. Les retraits peuvent prendre de 15 minutes à plusieurs jours selon la méthode et le montant."}',
             'value_pt' => '{"0":"O depósito mínimo começa a partir de um euro ou equivalente em outra moeda, permitindo que novos jogadores conheçam a plataforma com risco mínimo. Os saques podem levar de 15 minutos a vários dias, dependendo do método e do valor."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Bookmaker fees are usually not charged, although a specific payment method may have its own internal fees. In practice, most clients withdraw their winnings without issues, but sometimes delays occur when identity verification is required."}',
             'value_es' => '{"0":"Normalmente no se cobran comisiones por parte de la casa de apuestas, aunque un método de pago concreto puede tener sus propias tarifas internas. La práctica muestra que la mayoría de los clientes retiran sus ganancias sin problemas, pero a veces se producen retrasos cuando es necesario pasar por el procedimiento de verificación de documentos."}',
             'value_fr' => '{"0":"Les commissions de la part du bookmaker ne sont généralement pas prélevées, bien qu’une méthode de paiement spécifique puisse avoir ses propres frais internes. En pratique, la plupart des clients retirent leurs gains sans problème, mais parfois des délais surviennent lorsque la vérification des documents est nécessaire."}',
             'value_pt' => '{"0":"Normalmente, o bookmaker não cobra taxas, embora um método de pagamento específico possa ter suas próprias tarifas internas. Na prática, a maioria dos clientes retira os ganhos sem problemas, mas às vezes ocorrem atrasos quando é necessário passar pelo procedimento de verificação de documentos."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 32
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The most popular and fastest way to contact support is via live chat, available directly on the website. In most cases, an operator responds within one to two minutes, making the resolution of simple issues quick and convenient. In addition to the chat, you can reach support by email or phone. It is also important to note that support is available in multiple languages."}',
             'value_es' => '{"0":"La forma más popular y rápida de contactar con el soporte es a través del chat en vivo, disponible directamente en el sitio web. En la mayoría de los casos, un operador responde en uno o dos minutos, lo que hace que la resolución de cuestiones sencillas sea rápida y cómoda. Además del chat, se puede contactar por correo electrónico o por teléfono. También es importante destacar que el soporte está disponible en varios idiomas."}',
             'value_fr' => '{"0":"Le moyen le plus populaire et le plus rapide de contacter le support est le chat en direct, disponible directement sur le site. Dans la plupart des cas, un opérateur répond en une à deux minutes, ce qui permet de résoudre rapidement et facilement les problèmes simples. En plus du chat, il est possible de contacter le support par e-mail ou par téléphone. Il est également important de noter que l’assistance est disponible en plusieurs langues."}',
             'value_pt' => '{"0":"A forma mais popular e rápida de contatar o suporte é através do chat ao vivo, disponível diretamente no site. Na maioria dos casos, um operador responde em um ou dois minutos, tornando a resolução de questões simples rápida e conveniente. Além do chat, é possível entrar em contato por e-mail ou telefone. Também é importante destacar que o suporte está disponível em vários idiomas."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 33
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 34
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events",
                                 "1":"High odds",
                                 "2":"Large variety of deposit and withdrawal methods",
                                 "3":"Live streaming",
                                 "4":"User-friendly interface",
                                 "5":"Support in over 50 languages"},
                             "1":
                                {"0":"Occasional delays in withdrawals",
                                 "1":"Relatively long account verification process"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos deportivos",
                                 "1":"Altas cuotas",
                                 "2":"Amplia variedad de métodos de depósito y retiro",
                                 "3":"Transmisiones en vivo",
                                 "4":"Interfaz fácil de usar",
                                 "5":"Soporte en más de 50 idiomas"},
                             "1":
                                {"0":"Retrasos ocasionales en los retiros",
                                 "1":"Proceso de verificación de cuentas relativamente largo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs",
                                 "1":"Cotes élevées",
                                 "2":"Grand choix de méthodes de dépôt et de retrait",
                                 "3":"Diffusions en direct",
                                 "4":"Interface conviviale",
                                 "5":"Support en plus de 50 langues"},
                             "1":
                                {"0":"Retards occasionnels dans les retraits",
                                 "1":"Processus de vérification des comptes relativement long"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos",
                                 "1":"Altas odds",
                                 "2":"Ampla variedade de métodos de depósito e saque",
                                 "3":"Transmissão ao vivo",
                                 "4":"Interface amigável",
                                 "5":"Suporte em mais de 50 idiomas"},
                             "1":
                                {"0":"Eventuais atrasos nos saques",
                                 "1":"Processo de verificação de contas relativamente longo"}
                             }',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 35
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 36
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to use MEGAPARI?"}',
             'value_es' => '{"0":"¿Es seguro usar MEGAPARI?"}',
             'value_fr' => '{"0":"Est-il sûr d’utiliser MEGAPARI ?"}',
             'value_pt' => '{"0":"É seguro usar a MEGAPARI?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 37
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, from a technical standpoint the site is secure, but it should be noted that the license is not considered top-tier."}',
             'value_es' => '{"0":"Sí, desde el punto de vista técnico el sitio es seguro, pero hay que tener en cuenta que la licencia no pertenece a las de primera categoría."}',
             'value_fr' => '{"0":"Oui, d’un point de vue technique, le site est sécurisé, mais il convient de noter que la licence n’est pas considérée comme haut de gamme."}',
             'value_pt' => '{"0":"Sim, do ponto de vista técnico, o site é seguro, mas deve-se considerar que a licença não é de primeira categoria."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 38
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum and maximum bet?"}',
             'value_es' => '{"0":"¿Cuál es la apuesta mínima y máxima?"}',
             'value_fr' => '{"0":"Quel est le pari minimum et maximum ?"}',
             'value_pt' => '{"0":"Qual é a aposta mínima e máxima?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 39
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet starts at €1, while the maximum can reach €100,000 depending on the event."}',
             'value_es' => '{"0":"La apuesta mínima comienza en 1 €, mientras que la máxima puede alcanzar los 100.000 €, dependiendo del evento."}',
             'value_fr' => '{"0":"Le pari minimum commence à 1 €, tandis que le maximum peut atteindre 100 000 €, selon l’événement."}',
             'value_pt' => '{"0":"A aposta mínima começa em €1, enquanto a máxima pode chegar a €100.000, dependendo do evento."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 40
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Are live streams available?"}',
             'value_es' => '{"0":"¿Hay transmisiones en vivo?"}',
             'value_fr' => '{"0":"Y a-t-il des diffusions en direct ?"}',
             'value_pt' => '{"0":"Há transmissões ao vivo?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 41
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, live streams are available for popular matches in good quality."}',
             'value_es' => '{"0":"Sí, hay transmisiones en vivo de buena calidad para los partidos populares."}',
             'value_fr' => '{"0":"Oui, des diffusions en direct de bonne qualité sont disponibles pour les matchs populaires."}',
             'value_pt' => '{"0":"Sim, transmissões ao vivo de boa qualidade estão disponíveis para partidas populares."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 42
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"What withdrawal methods are available?"}',
             'value_es' => '{"0":"¿Qué métodos de retiro están disponibles?"}',
             'value_fr' => '{"0":"Quels sont les méthodes de retrait disponibles ?"}',
             'value_pt' => '{"0":"Quais métodos de saque estão disponíveis?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 43
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Cards, e-wallets, bank transfers, cryptocurrencies."}',
             'value_es' => '{"0":"Tarjetas, monederos electrónicos, transferencias bancarias, criptomonedas."}',
             'value_fr' => '{"0":"Cartes, portefeuilles électroniques, virements bancaires, cryptomonnaies."}',
             'value_pt' => '{"0":"Cartões, carteiras eletrônicas, transferências bancárias, criptomoedas."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 44
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Qué tan rápidas son las retiradas?"}',
             'value_fr' => '{"0":"À quelle vitesse les paiements sont-ils effectués ?"}',
             'value_pt' => '{"0":"Quão rápidas são as retiradas?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 45
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"E-wallets are processed within 15 minutes, while bank methods can take from a few hours up to several days."}',
             'value_es' => '{"0":"Los monederos electrónicos se procesan en 15 minutos, mientras que los métodos bancarios pueden tardar desde unas pocas horas hasta varios días."}',
             'value_fr' => '{"0":"Les portefeuilles électroniques sont traités en 15 minutes, tandis que les méthodes bancaires peuvent prendre de quelques heures à plusieurs jours."}',
             'value_pt' => '{"0":"As carteiras eletrônicas são processadas em 15 minutos, enquanto os métodos bancários podem levar de algumas horas até vários dias."}',
             'order' => 45
            ]
        );
    }
}
