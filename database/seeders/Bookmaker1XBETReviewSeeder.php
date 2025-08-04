<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"1XBET Review"}',
             'value_es' => '{"0":"Reseña de 1XBET"}',
             'value_fr' => '{"0":"Avis sur 1XBET"}',
             'value_pt' => '{"0":"Análise da 1XBET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is one of the most well-known bookmakers in the world of online betting. Founded in 2007, the company quickly expanded internationally thanks to its wide functionality, competitive odds, and flexible platform."}',
             'value_es' => '{"0":"1XBET es una de las casas de apuestas más reconocidas en el mundo de las apuestas en línea. Fundada en 2007, la compañía se expandió rápidamente a nivel internacional gracias a su amplia funcionalidad, cuotas competitivas y una plataforma flexible."}',
             'value_fr' => '{"0":"1XBET est l’un des bookmakers les plus connus dans le monde des paris en ligne. Fondée en 2007, l’entreprise s’est rapidement développée à l’international grâce à ses nombreuses fonctionnalités, ses cotes avantageuses et sa plateforme flexible."}',
             'value_pt' => '{"0":"A 1XBET é uma das casas de apostas mais conhecidas no mundo das apostas online. Fundada em 2007, a empresa expandiu-se rapidamente a nível internacional graças à sua ampla funcionalidade, odds competitivas e uma plataforma flexível."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Today, 1XBET is available in over 50 countries, offers its website in dozens of languages, and provides betting opportunities on thousands of events daily. The bookmaker caters both to traditional sports bettors and to those looking for casino action, games, or live betting options."}',
             'value_es' => '{"0":"Actualmente, 1XBET está disponible en más de 50 países, ofrece su sitio web en decenas de idiomas y permite apostar en miles de eventos cada día. La casa de apuestas está orientada tanto a los jugadores clásicos que apuestan en deportes como a quienes buscan emoción en el casino, juegos o secciones en vivo."}',
             'value_fr' => '{"0":"Aujourd’hui, 1XBET est présent dans plus de 50 pays, propose son site en plusieurs dizaines de langues et permet de parier chaque jour sur des milliers d’événements. Ce bookmaker s’adresse à la fois aux parieurs sportifs traditionnels et à ceux qui recherchent des sensations fortes dans les jeux de casino ou les paris en direct."}',
             'value_pt' => '{"0":"Hoje, a 1XBET está disponível em mais de 50 países, oferece o site em dezenas de idiomas e disponibiliza apostas em milhares de eventos diariamente. A casa de apostas é voltada tanto para apostadores tradicionais em esportes quanto para aqueles que buscam emoção no cassino, jogos ou seções ao vivo."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we’ll explore the key aspects of 1XBET’s operations to help you decide whether this platform is worth your attention."}',
             'value_es' => '{"0":"En esta reseña analizaremos los aspectos clave del funcionamiento de 1XBET para ayudarte a decidir si esta plataforma merece tu atención."}',
             'value_fr' => '{"0":"Dans cette revue, nous allons examiner les principaux aspects de 1XBET afin de vous aider à déterminer si cette plateforme mérite votre attention."}',
             'value_pt' => '{"0":"Nesta análise, vamos abordar os principais aspectos da operação da 1XBET para ajudá-lo a decidir se esta plataforma vale a sua atenção."}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Sports Betting"}',
             'value_es' => '{"0":"Apuestas Deportivas"}',
             'value_fr' => '{"0":"Paris Sportifs"}',
             'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Sports betting at 1XBET is one of the company\'s main areas of focus. Here, you\'ll find more than 40 sports, ranging from classic football, tennis, and basketball to rare disciplines like keirin, hurling, or kabaddi."}',
             'value_es' => '{"0":"Las apuestas deportivas en 1XBET son uno de los principales enfoques de la compañía. Aquí encontrarás más de 40 deportes, desde fútbol, tenis y baloncesto clásicos hasta disciplinas poco comunes como keirin, hurling o kabaddi."}',
             'value_fr' => '{"0":"Les paris sportifs chez 1XBET constituent l’un des axes principaux de la société. Vous y trouverez plus de 40 disciplines sportives, allant du football, du tennis et du basketball classiques à des sports plus rares comme le keirin, le hurling ou le kabaddi."}',
             'value_pt' => '{"0":"As apostas esportivas na 1XBET são uma das principais áreas de atuação da empresa. Você encontrará mais de 40 modalidades, desde futebol, tênis e basquete até esportes menos comuns como keirin, hurling ou kabaddi."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The website interface allows you to quickly navigate through events, filtering by start time, popularity, or even country. The convenient search function makes it easy to find a specific match, even if it\'s an amateur league."}',
             'value_es' => '{"0":"La interfaz del sitio permite navegar fácilmente entre los eventos, filtrando por hora de inicio, popularidad o incluso por país. La función de búsqueda facilita encontrar el partido deseado, incluso si se trata de una liga amateur."}',
             'value_fr' => '{"0":"L’interface du site permet de naviguer facilement entre les événements, avec des filtres par heure de début, popularité ou pays. Une fonction de recherche pratique permet de retrouver rapidement un match, même s’il s’agit d’une ligue amateur."}',
             'value_pt' => '{"0":"A interface do site permite navegar rapidamente entre os eventos, com filtros por horário de início, popularidade ou até mesmo por país. A busca eficiente ajuda a encontrar facilmente o jogo desejado, mesmo em ligas amadoras."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"At 1XBET, you\'ll have the opportunity to bet on thousands of events, including lower-tier tournaments. Here\'s a list of the main sports available on the site:"}',
             'value_es' => '{"0":"En 1XBET tendrás la posibilidad de apostar en miles de eventos, incluso en campeonatos secundarios. A continuación, te presentamos una lista de los deportes principales que se ofrecen en la plataforma:"}',
             'value_fr' => '{"0":"Sur 1XBET, vous pouvez parier sur des milliers d’événements, y compris des championnats de second niveau. Voici une liste des principaux sports disponibles sur la plateforme :"}',
             'value_pt' => '{"0":"Na 1XBET, você terá a chance de apostar em milhares de eventos, inclusive em campeonatos de menor expressão. A seguir, uma lista dos principais esportes disponíveis no site:"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Casino"}',
             'value_es' => '{"0":"Casino"}',
             'value_fr' => '{"0":"Casino"}',
             'value_pt' => '{"0":"Cassino"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at 1XBET is a world of its own. It features games from over 100 providers, including well-known studios like NetEnt, Microgaming, Pragmatic Play, Evolution, and many others."}',
             'value_es' => '{"0":"La sección de casino en 1XBET es un mundo aparte. Aquí encontrarás juegos de más de 100 proveedores, incluidos estudios reconocidos como NetEnt, Microgaming, Pragmatic Play, Evolution y muchos más."}',
             'value_fr' => '{"0":"La section casino de 1XBET est un univers à part entière. Elle propose des jeux de plus de 100 fournisseurs, dont des studios renommés comme NetEnt, Microgaming, Pragmatic Play, Evolution, et bien d\'autres."}',
             'value_pt' => '{"0":"A seção de cassino da 1XBET é um mundo à parte. Ela oferece jogos de mais de 100 provedores, incluindo estúdios renomados como NetEnt, Microgaming, Pragmatic Play, Evolution e muitos outros."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In the Live Casino, there are dozens of rooms with roulette, baccarat, blackjack, and game shows like Monopoly Live and Crazy Time. All games run smoothly without lag, and demo versions are available for testing."}',
             'value_es' => '{"0":"En el casino en vivo hay decenas de salas con ruleta, bacará, blackjack y juegos tipo show como Monopoly Live o Crazy Time. Todos los juegos funcionan sin retrasos y hay versiones demo disponibles para probarlos."}',
             'value_fr' => '{"0":"Dans le Live Casino, on trouve des dizaines de salles avec de la roulette, du baccarat, du blackjack, ainsi que des jeux télévisés comme Monopoly Live ou Crazy Time. Tous les jeux fonctionnent sans latence, et des versions de démonstration sont disponibles pour essayer."}',
             'value_pt' => '{"0":"No Cassino Ao Vivo, há dezenas de salas com roleta, bacará, blackjack e game shows como Monopoly Live e Crazy Time. Todos os jogos funcionam sem travamentos, e há versões demo disponíveis para experimentação."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, the casino is integrated into the main account, meaning you don’t need to open separate wallets or transfer funds between balances. It\'s also worth noting that 1XBET regularly offers tournaments, cashback, and bonuses, especially for new players."}',
             'value_es' => '{"0":"Además, el casino está integrado en la cuenta principal, lo que significa que no necesitas abrir cuentas adicionales ni mover fondos entre saldos. Cabe destacar que 1XBET ofrece torneos regulares, reembolsos y bonos, especialmente para nuevos usuarios."}',
             'value_fr' => '{"0":"De plus, le casino est intégré au compte principal, ce qui signifie qu\'il n\'est pas nécessaire d’ouvrir de portefeuilles séparés ni de transférer de l\'argent entre les soldes. À noter aussi que 1XBET propose régulièrement des tournois, du cashback et des bonus, notamment pour les nouveaux joueurs."}',
             'value_pt' => '{"0":"Além disso, o cassino é integrado à conta principal, o que significa que não é necessário abrir carteiras separadas ou transferir fundos entre saldos. Vale destacar que a 1XBET oferece torneios regulares, cashback e bônus, especialmente para novos jogadores."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Odds and Limits"}',
             'value_es' => '{"0":"Cuotas y Límites"}',
             'value_fr' => '{"0":"Cotes et Limites"}',
             'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is known for offering competitive odds, especially on popular events in football, tennis, and basketball. For certain markets, such as totals or handicaps, odds can reach 1.97–1.97 on both outcomes, which is a very decent level."}',
             'value_es' => '{"0":"1XBET es conocido por ofrecer cuotas atractivas, especialmente en eventos populares de fútbol, tenis y baloncesto. En algunos mercados, como totales o hándicaps, las cuotas pueden alcanzar 1.97–1.97 por cada lado, lo cual es un nivel bastante bueno."}',
             'value_fr' => '{"0":"1XBET est réputé pour ses cotes avantageuses, notamment sur les événements populaires en football, tennis et basketball. Sur certains marchés comme les totaux ou les handicaps, les cotes peuvent atteindre 1.97–1.97 pour chaque issue, ce qui est un très bon niveau."}',
             'value_pt' => '{"0":"A 1XBET é conhecida por oferecer odds vantajosas, especialmente em eventos populares de futebol, tênis e basquete. Em alguns mercados, como totais ou handicaps, as odds podem chegar a 1.97–1.97 em ambos os lados, o que é um nível bastante bom."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"When it comes to limits, the situation is more nuanced. For new players, there are almost no restrictions, but professional bettors often encounter stake limitations after a few big wins. Maximum winnings can reach hundreds of thousands of dollars, but this depends on the sport and the significance of the event. The minimum bet is just 1 euro, which is convenient for new users to get familiar with the bookmaker."}',
             'value_es' => '{"0":"En cuanto a los límites, la situación es más compleja. Para los jugadores nuevos, casi no hay restricciones, pero los apostadores profesionales suelen enfrentar limitaciones después de varias ganancias importantes. Las ganancias máximas pueden alcanzar cientos de miles de dólares, aunque esto depende del deporte y de la importancia del evento. La apuesta mínima es de solo 1 euro, lo que resulta conveniente para quienes están comenzando."}',
             'value_fr' => '{"0":"Concernant les limites, la situation est plus complexe. Pour les nouveaux joueurs, il n\'y a pratiquement aucune restriction, mais les parieurs professionnels rencontrent souvent des limitations de mise après plusieurs gains importants. Les gains maximums peuvent atteindre des centaines de milliers de dollars, bien que cela dépende du sport et de l’importance de l’événement. La mise minimale est de seulement 1 euro, ce qui est pratique pour les nouveaux venus qui souhaitent découvrir le site."}',
             'value_pt' => '{"0":"Quanto aos limites, a situação é mais delicada. Para jogadores novos, praticamente não há restrições, mas apostadores profissionais muitas vezes enfrentam limitações após algumas grandes vitórias. Os ganhos máximos podem chegar a centenas de milhares de dólares, dependendo do esporte e da importância do evento. A aposta mínima é de apenas 1 euro, o que é conveniente para iniciantes conhecerem a casa de apostas."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Depth of Betting Markets"}',
             'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
             'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
             'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For top football matches, there are over 1,500 betting options available. You can bet on the main outcome, exact score, corners, fouls, yellow cards, and individual player stats."}',
             'value_es' => '{"0":"Para los partidos de fútbol más importantes, hay más de 1,500 opciones de apuesta disponibles. Puedes apostar al resultado principal, marcador exacto, saques de esquina, faltas, tarjetas amarillas y estadísticas individuales de los jugadores."}',
             'value_fr' => '{"0":"Pour les matchs de football majeurs, plus de 1 500 options de paris sont disponibles. Vous pouvez parier sur le résultat principal, le score exact, les corners, les fautes, les cartons jaunes et les statistiques individuelles des joueurs."}',
             'value_pt' => '{"0":"Para os principais jogos de futebol, há mais de 1.500 opções de apostas disponíveis. Você pode apostar no resultado principal, placar exato, escanteios, faltas, cartões amarelos e estatísticas individuais dos jogadores."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, you’ll find markets for double faults, number of sets, and service breaks. In basketball, there are bets on player statistics. For esports, you can bet on first blood, first barracks, and number of kills."}',
             'value_es' => '{"0":"En el tenis, hay mercados para dobles faltas, número de sets y quiebres de servicio. En el baloncesto, puedes apostar a las estadísticas de los jugadores. En los eSports, se ofrecen apuestas sobre la primera sangre, el primer cuartel y la cantidad de asesinatos."}',
             'value_fr' => '{"0":"Au tennis, vous pouvez parier sur les doubles fautes, le nombre de sets, et les breaks. En basketball, des paris sont proposés sur les statistiques des joueurs. En e-sport, il existe des paris sur le first blood, le premier bâtiment détruit, et le nombre de kills."}',
             'value_pt' => '{"0":"No tênis, existem apostas em duplas faltas, número de sets e quebras de saque. No basquete, é possível apostar em estatísticas dos jogadores. Para eSports, há apostas em first blood, primeiro quartel destruído e número de eliminações."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
             'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
             'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
             'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 21
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The live section at 1XBET is very powerful. The bookmaker not only allows you to place bets during the game but also to watch broadcasts of many events directly on the site. Available live streams include not only top matches but also regional championships, youth tournaments, and even table tennis and beach volleyball."}',
             'value_es' => '{"0":"La sección en vivo de 1XBET está muy bien implementada. La casa de apuestas no solo permite apostar durante el juego, sino también ver transmisiones de muchos eventos directamente en el sitio. Las transmisiones en video disponibles incluyen no solo los partidos principales, sino también campeonatos regionales, torneos juveniles, e incluso tenis de mesa y voleibol de playa."}',
             'value_fr' => '{"0":"La section live de 1XBET est très performante. Le bookmaker permet non seulement de parier pendant le match, mais aussi de regarder des retransmissions de nombreux événements directement sur le site. Les diffusions vidéo disponibles couvrent non seulement les matchs majeurs, mais aussi les championnats régionaux, les tournois juniors, voire le tennis de table et le beach-volley."}',
             'value_pt' => '{"0":"A seção ao vivo da 1XBET é muito robusta. A casa de apostas permite não apenas fazer apostas durante o jogo, mas também assistir a transmissões de muitos eventos diretamente no site. As transmissões de vídeo disponíveis incluem não só os jogos principais, mas também campeonatos regionais, torneios juvenis, e até tênis de mesa e vôlei de praia."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The interface allows you to quickly switch between matches, view statistics, event graphics, and team form. Odds updates happen almost instantly. Additionally, there are features like «Cancel Bet» or «Edit Bet», which are convenient when you want to change your bet."}',
             'value_es' => '{"0":"La interfaz permite cambiar rápidamente entre partidos, ver estadísticas, gráficos de eventos y la forma de los equipos. Las cuotas se actualizan casi instantáneamente. Además, hay funciones como «Cancelar apuesta» o «Editar apuesta», que son útiles cuando deseas modificar tu apuesta."}',
             'value_fr' => '{"0":"L’interface permet de passer rapidement d’un match à l’autre, de consulter les statistiques, les graphiques des événements et la forme des équipes. Les cotes sont mises à jour presque instantanément. De plus, des fonctions comme «Annuler le pari» ou «Modifier le pari» sont disponibles, ce qui est pratique lorsque vous souhaitez changer votre mise."}',
             'value_pt' => '{"0":"A interface permite alternar rapidamente entre partidas, visualizar estatísticas, gráficos de eventos e a forma das equipes. As odds são atualizadas quase instantaneamente. Além disso, há funções como «Cancelar aposta» ou «Editar aposta», que são úteis quando você deseja alterar sua aposta."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Security and Reliability"}',
             'value_es' => '{"0":"Seguridad y Fiabilidad"}',
             'value_fr' => '{"0":"Sécurité et Fiabilité"}',
             'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 24
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET operates under a Curaçao license, which is a standard for international operators. Data encryption meets modern requirements: SSL certification is used, along with two-factor authentication and account protection via SMS or email verification."}',
             'value_es' => '{"0":"1XBET opera bajo una licencia de Curazao, que es un estándar para operadores internacionales. La encriptación de datos cumple con los requisitos modernos: se utiliza certificación SSL, autenticación de dos factores y protección de cuentas mediante verificación por SMS o correo electrónico."}',
             'value_fr' => '{"0":"1XBET fonctionne sous une licence de Curaçao, qui est une norme pour les opérateurs internationaux. Le cryptage des données répond aux exigences modernes : certification SSL utilisée, authentification à deux facteurs et protection des comptes via vérification par SMS ou e-mail."}',
             'value_pt' => '{"0":"A 1XBET opera sob licença de Curaçao, que é um padrão para operadores internacionais. A criptografia de dados atende aos requisitos modernos: utiliza certificação SSL, autenticação em duas etapas e proteção de contas por meio de verificação via SMS ou e-mail."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"However, it is important to note that the company does not always hold a local license in every country, so legality may vary depending on jurisdiction. Historically, there have been complaints about delayed payouts or lengthy verification processes, but in most cases, these issues are resolved through customer support. Accounts with high activity may undergo additional verification. Overall, the security level is high, but it is important to comply with all registration requirements and avoid creating duplicate accounts."}',
             'value_es' => '{"0":"Sin embargo, es importante tener en cuenta que la empresa no siempre tiene licencia local en cada país, por lo que la legalidad puede variar según la jurisdicción. Históricamente, ha habido quejas sobre demoras en los pagos o procesos de verificación largos, pero en la mayoría de los casos, estos problemas se resuelven a través del servicio de atención al cliente. Las cuentas con alta actividad pueden someterse a verificaciones adicionales. En general, el nivel de seguridad es alto, pero es importante cumplir con todos los requisitos al registrarse y evitar crear cuentas duplicadas."}',
             'value_fr' => '{"0":"Cependant, il convient de noter que la société ne détient pas toujours une licence locale dans chaque pays, donc la légalité peut varier selon la juridiction. Historiquement, des plaintes ont été signalées concernant des retards de paiement ou des processus de vérification longs, mais dans la plupart des cas, ces problèmes sont résolus via le service client. Les comptes à forte activité peuvent faire l’objet d’une vérification supplémentaire. Dans l’ensemble, le niveau de sécurité est élevé, mais il est important de respecter toutes les exigences lors de l’inscription et d’éviter de créer des comptes en double."}',
             'value_pt' => '{"0":"No entanto, é importante considerar que a empresa nem sempre possui licença local em todos os países, portanto, a legalidade pode variar conforme a jurisdição. Historicamente, houve reclamações sobre atrasos nos pagamentos ou processos de verificação demorados, mas na maioria dos casos esses problemas são resolvidos pelo suporte ao cliente. Contas com alta atividade podem passar por verificações adicionais. No geral, o nível de segurança é alto, mas é importante seguir todos os requisitos no cadastro e evitar criar contas duplicadas."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Deposits and Withdrawals"}',
             'value_es' => '{"0":"Depósitos y Retiros"}',
             'value_fr' => '{"0":"Dépôts et Retraits"}',
             'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET supports over 100 payment methods: bank cards, e-wallets like Skrill and Neteller, cryptocurrencies including Bitcoin, Ethereum, and USDT."}',
             'value_es' => '{"0":"1XBET admite más de 100 métodos de pago: tarjetas bancarias, monederos electrónicos como Skrill y Neteller, criptomonedas incluyendo Bitcoin, Ethereum y USDT."}',
             'value_fr' => '{"0":"1XBET prend en charge plus de 100 méthodes de paiement : cartes bancaires, portefeuilles électroniques comme Skrill et Neteller, cryptomonnaies incluant Bitcoin, Ethereum et USDT."}',
             'value_pt' => '{"0":"A 1XBET aceita mais de 100 métodos de pagamento: cartões bancários, carteiras eletrônicas como Skrill e Neteller, criptomoedas incluindo Bitcoin, Ethereum e USDT."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is 1 euro or equivalent. The platform does not charge fees for deposits. Withdrawals can take anywhere from a few minutes up to 72 hours, depending on the method and amount. It is important to note that for the first withdrawal, you must complete verification and provide copies of identity documents. After that, payouts are processed smoothly."}',
             'value_es' => '{"0":"El depósito mínimo es de 1 euro o su equivalente. La plataforma no cobra comisiones por depósitos. Los retiros pueden tardar desde unos minutos hasta 72 horas, dependiendo del método y la cantidad. Cabe señalar que para el primer retiro es necesario completar la verificación y proporcionar copias de documentos de identidad. Después de eso, los pagos se realizan de forma estable."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 euro ou équivalent. La plateforme ne prélève pas de frais sur les dépôts. Les retraits peuvent prendre de quelques minutes à 72 heures, selon la méthode et le montant. Il est important de noter que pour le premier retrait, vous devez passer la vérification et fournir des copies de documents d’identité. Ensuite, les paiements sont traités de manière stable."}',
             'value_pt' => '{"0":"O depósito mínimo é de 1 euro ou equivalente. A plataforma não cobra taxas para depósitos. Os saques podem levar de alguns minutos até 72 horas, dependendo do método e do valor. É importante observar que, para o primeiro saque, é necessário passar pela verificação e fornecer cópias dos documentos de identidade. Após isso, os pagamentos ocorrem de forma estável."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Support"}',
             'value_es' => '{"0":"Soporte"}',
             'value_fr' => '{"0":"Assistance"}',
             'value_pt' => '{"0":"Suporte"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The support service at 1XBET operates around the clock and is available via live chat, email, and hotline."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 1XBET funciona las 24 horas y está disponible a través de chat en vivo, correo electrónico y línea directa."}',
             'value_fr' => '{"0":"Le service d’assistance de 1XBET fonctionne 24 heures sur 24 et est accessible via chat en direct, e-mail et hotline."}',
             'value_pt' => '{"0":"O serviço de suporte da 1XBET funciona 24 horas por dia e está disponível via chat ao vivo, e-mail e linha direta."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 33
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Huge selection of sports events",
                                 "1":"Competitive odds",
                                 "2":"Live section with live streaming",
                                 "3":"Wide variety of casino games, including live casino",
                                 "4":"Many deposit and withdrawal methods"},
                             "1":
                                {"0":"Possible delays with withdrawals",
                                 "1":"Limits applied to winning accounts"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de eventos deportivos",
                                 "1":"Cuotas competitivas",
                                 "2":"Sección en vivo con transmisiones en directo",
                                 "3":"Gran variedad de juegos de casino, incluyendo casino en vivo",
                                 "4":"Muchos métodos de depósito y retiro"},
                             "1":
                                {"0":"Posibles retrasos en los retiros",
                                 "1":"Límites aplicados a cuentas ganadoras"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs",
                                 "1":"Cotes compétitives",
                                 "2":"Section live avec diffusion en direct",
                                 "3":"Large choix de jeux de casino, y compris casino en direct",
                                 "4":"Plusieurs méthodes de dépôt et de retrait"},
                             "1":
                                {"0":"Retards possibles lors des retraits",
                                 "1":"Limites appliquées aux comptes gagnants"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos",
                                 "1":"Odds competitivas",
                                 "2":"Seção ao vivo com transmissões ao vivo",
                                 "3":"Grande variedade de jogos de cassino, incluindo cassino ao vivo",
                                 "4":"Muitos métodos de depósito e saque"},
                             "1":
                                {"0":"Possíveis atrasos nos saques",
                                 "1":"Limites aplicados a contas vencedoras"}
                             }',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Frequently Asked Questions"}',
             'value_es' => '{"0":"Preguntas Frecuentes"}',
             'value_fr' => '{"0":"Questions Fréquemment Posées"}',
             'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar fundos?"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Usually from a few minutes up to 72 hours. However, the first withdrawal requires verification."}',
             'value_es' => '{"0":"Normalmente de unos minutos hasta 72 horas. Sin embargo, el primer retiro requiere verificación."}',
             'value_fr' => '{"0":"Généralement de quelques minutes à 72 heures. Cependant, le premier retrait nécessite une vérification."}',
             'value_pt' => '{"0":"Normalmente de alguns minutos até 72 horas. No entanto, o primeiro saque requer verificação."}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Can you play casino games without depositing?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino sin depositar?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino sans déposer d’argent ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino sem depositar?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, many slots have a demo version available, but to place real money bets, you need to fund your account."}',
             'value_es' => '{"0":"Sí, muchos tragamonedas tienen versión demo disponible, pero para apostar con dinero real es necesario depositar fondos."}',
             'value_fr' => '{"0":"Oui, de nombreux jeux de machines à sous proposent une version démo, mais pour miser de l’argent réel, il faut approvisionner son compte"}',
             'value_pt' => '{"0":"Sim, muitos caça-níqueis têm versão demo disponível, mas para apostar com dinheiro real é necessário depositar na conta."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 40
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, apps are available for Android and iOS. They support full functionality — betting, casino, withdrawals."}',
             'value_es' => '{"0":"Sí, hay aplicaciones disponibles para Android y iOS. Soportan todas las funciones: apuestas, casino y retiros."}',
             'value_fr' => '{"0":"Oui, des applications sont disponibles pour Android et iOS. Elles offrent toutes les fonctionnalités : paris, casino, retraits."}',
             'value_pt' => '{"0":"Sim, aplicativos estão disponíveis para Android e iOS. Eles suportam todas as funções — apostas, cassino e saques."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 41
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to use the platform?"}',
             'value_es' => '{"0":"¿Es seguro usar la plataforma?"}',
             'value_fr' => '{"0":"Est-il sûr d’utiliser la plateforme ?"}',
             'value_pt' => '{"0":"É seguro usar a plataforma?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 42
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, provided you follow the rules and use the official website."}',
             'value_es' => '{"0":"Sí, siempre que sigas las reglas y utilices el sitio oficial."}',
             'value_fr' => '{"0":"Oui, à condition de respecter les règles et d’utiliser le site officiel."}',
             'value_pt' => '{"0":"Sim, desde que você siga as regras e utilize o site oficial."}',
             'order' => 42
            ]
        );
    }
}
