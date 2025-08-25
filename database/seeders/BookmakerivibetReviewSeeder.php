<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
             'value_en' => '{"0":"ivibet Review"}',
             'value_es' => '{"0":"Reseña de ivibet"}',
             'value_fr' => '{"0":"Avis sur ivibet"}',
             'value_pt' => '{"0":"Análise da ivibet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet is a young bookmaker that appeared in 2022 but has already managed to attract players’ attention thanks to its modern approach to betting and casino. The platform operates under a Curaçao license, which allows it to work in many countries."}',
             'value_es' => '{"0":"Ivibet es una casa de apuestas joven que apareció en 2022, pero que ya ha logrado captar la atención de los jugadores gracias a su enfoque moderno de las apuestas y el casino. La plataforma opera bajo licencia de Curazao, lo que le permite trabajar en muchos países."}',
             'value_fr' => '{"0":"Ivibet est un jeune bookmaker apparu en 2022, mais qui a déjà réussi à attirer l’attention des joueurs grâce à son approche moderne des paris et du casino. La plateforme fonctionne sous licence de Curaçao, ce qui lui permet d’opérer dans de nombreux pays."}',
             'value_pt' => '{"0":"Ivibet é uma casa de apostas jovem que surgiu em 2022, mas que já conseguiu chamar a atenção dos jogadores graças à sua abordagem moderna às apostas e ao casino. A plataforma opera sob licença de Curaçao, o que lhe permite atuar em muitos países."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet focuses on convenience, a simple interface, and fast performance. On the website, you can place sports bets and play casino games. It is important to note that the bookmaker does not yet have a mobile app, but the mobile version of the site works well and does not fall behind the desktop in terms of functionality."}',
             'value_es' => '{"0":"Ivibet pone el acento en la comodidad, la sencillez de la interfaz y la rapidez de funcionamiento. En el sitio web puedes realizar apuestas deportivas y jugar en el casino. Es importante destacar que el operador aún no cuenta con una aplicación móvil, pero la versión móvil del sitio funciona bien y no se queda atrás respecto a la de escritorio en cuanto a funcionalidades."}',
             'value_fr' => '{"0":"Ivibet met l’accent sur la convivialité, la simplicité de l’interface et la rapidité d’exécution. Sur le site, vous pouvez placer des paris sportifs et jouer au casino. Il est important de noter que le bookmaker ne dispose pas encore d’une application mobile, mais la version mobile du site fonctionne bien et n’a rien à envier à la version de bureau en termes de fonctionnalités."}',
             'value_pt' => '{"0":"A Ivibet aposta na conveniência, simplicidade da interface e rapidez de funcionamento. No site, é possível fazer apostas esportivas e jogar no cassino. É importante destacar que a casa de apostas ainda não possui um aplicativo móvel, mas a versão móvel do site funciona bem e não fica atrás da versão desktop em termos de funcionalidades."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The sports section at Ivibet looks quite strong for a company that has been operating for only a few years. More than 40 sports are represented here, including, of course, football, basketball, tennis, and hockey. There are also less popular disciplines such as cricket, table tennis, water polo, as well as esports, which is rapidly gaining popularity."}',
             'value_es' => '{"0":"La sección deportiva en Ivibet se ve bastante sólida para una compañía que lleva apenas unos años en funcionamiento. Aquí se presentan más de 40 deportes, incluyendo, por supuesto, fútbol, baloncesto, tenis y hockey. También hay disciplinas menos populares como críquet, tenis de mesa, waterpolo, así como los deportes electrónicos, que están ganando popularidad rápidamente."}',
             'value_fr' => '{"0":"La section sportive chez Ivibet paraît assez solide pour une entreprise qui n’existe que depuis quelques années. Plus de 40 sports y sont proposés, parmi lesquels bien sûr le football, le basketball, le tennis et le hockey. On y trouve également des disciplines moins populaires comme le cricket, le tennis de table, le water-polo, ainsi que l’esport, qui connaît actuellement une forte croissance."}',
             'value_pt' => '{"0":"A seção de esportes da Ivibet parece bastante robusta para uma empresa que está em operação há apenas alguns anos. Mais de 40 modalidades esportivas estão disponíveis, incluindo, é claro, futebol, basquete, tênis e hóquei. Também há disciplinas menos populares, como críquete, tênis de mesa, polo aquático, além dos eSports, que estão ganhando popularidade rapidamente."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The pre-match line is fairly extensive, offering a large number of betting options. You can place bets on results, totals, and handicaps. The convenient interface allows you to quickly switch between matches and track the events you need. For new users, it is especially valuable that the navigation is intuitive, and you can figure it out literally in just a few minutes."}',
             'value_es' => '{"0":"La línea pre-partido es bastante amplia, con una gran cantidad de opciones de apuesta. Es posible apostar a resultados, totales y hándicaps. La interfaz práctica permite cambiar rápidamente entre partidos y seguir los eventos que interesan. Para los nuevos usuarios resulta especialmente valioso que la navegación sea intuitiva y que se pueda comprender todo en apenas unos minutos."}',
             'value_fr' => '{"0":"La ligne pré-match est assez large, offrant un grand nombre d’options de pari. Il est possible de miser sur les résultats, les totaux et les handicaps. L’interface pratique permet de passer rapidement d’un match à l’autre et de suivre les événements souhaités. Pour les nouveaux utilisateurs, il est particulièrement appréciable que la navigation soit intuitive, et qu’il ne faille que quelques minutes pour s’y retrouver."}',
             'value_pt' => '{"0":"A linha pré-jogo é bastante ampla, oferecendo um grande número de opções de apostas. É possível apostar em resultados, totais e handicaps. A interface prática permite alternar rapidamente entre partidas e acompanhar os eventos desejados. Para novos usuários, é especialmente valioso que a navegação seja intuitiva, permitindo entender tudo em apenas alguns minutos."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Below, you can check out the sports available on the site."}',
             'value_es' => '{"0":"A continuación, podrás conocer los deportes disponibles en el sitio."}',
             'value_fr' => '{"0":"Ci-dessous, vous pourrez découvrir les sports proposés sur le site."}',
             'value_pt' => '{"0":"A seguir, você poderá conferir os esportes disponíveis no site."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"But Ivibet is not limited to sports betting and also offers a full-fledged casino section. The number of games includes thousands of slots from providers such as Pragmatic Play, Play’n GO, and NetEnt, along with classic table games and a live casino with professional dealers. The latter option will be especially appealing to those who want to experience the atmosphere of a real casino without leaving home."}',
             'value_es' => '{"0":"Pero Ivibet no se limita solo a las apuestas deportivas y ofrece una sección de casino completa. El número de juegos incluye miles de tragamonedas de proveedores como Pragmatic Play, Play’n GO y NetEnt, además de juegos de mesa clásicos y un casino en vivo con crupieres profesionales. Esta última opción resulta especialmente atractiva para quienes desean sentir la atmósfera de un casino real sin salir de casa."}',
             'value_fr' => '{"0":"Mais Ivibet ne se limite pas aux paris sportifs et propose également une section casino complète. L’offre comprend des milliers de machines à sous provenant de fournisseurs tels que Pragmatic Play, Play’n GO et NetEnt, ainsi que des jeux de table classiques et un casino en direct avec des croupiers professionnels. Cette dernière option séduira particulièrement ceux qui souhaitent retrouver l’ambiance d’un véritable casino sans quitter leur domicile."}',
             'value_pt' => '{"0":"Mas o Ivibet não se limita apenas às apostas esportivas e oferece também uma seção completa de cassino. O número de jogos inclui milhares de slots de provedores como Pragmatic Play, Play’n GO e NetEnt, além de jogos de mesa clássicos e um cassino ao vivo com crupiês profissionais. Esta última opção é especialmente interessante para quem deseja sentir a atmosfera de um cassino real sem sair de casa."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The slots come in a variety of themes, from simple fruit machines to modern story-driven games with jackpots. The casino is fully integrated into the platform, so you can easily switch between sports betting and casino play."}',
             'value_es' => '{"0":"Las tragamonedas están disponibles con distintas temáticas, desde las clásicas máquinas de frutas hasta juegos modernos con historias y jackpots. El casino está totalmente integrado en la plataforma, por lo que es fácil alternar entre las apuestas deportivas y el juego en el casino."}',
             'value_fr' => '{"0":"Les machines à sous couvrent une grande variété de thèmes, allant des simples bandits manchots fruités aux jeux modernes scénarisés avec jackpots. Le casino est entièrement intégré à la plateforme, ce qui permet de passer facilement des paris sportifs au casino."}',
             'value_pt' => '{"0":"Os slots estão disponíveis em diferentes temas, desde as clássicas máquinas de frutas até jogos modernos com enredos e jackpots. O cassino é totalmente integrado à plataforma, permitindo alternar facilmente entre as apostas esportivas e os jogos de cassino."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"At Ivibet, special attention is given to the odds, as they directly determine potential winnings. For example, in top football matches of the English Premier League, odds on the favorite can be around 1.85, while the underdog may reach 4.30."}',
             'value_es' => '{"0":"En Ivibet se presta especial atención a las cuotas, ya que de ellas depende directamente la ganancia potencial. Por ejemplo, en los principales partidos de la Premier League inglesa, las cuotas para el favorito pueden rondar el 1.85, mientras que para el no favorito pueden llegar a 4.30."}',
             'value_fr' => '{"0":"Chez Ivibet, une attention particulière est portée aux cotes, car elles déterminent directement les gains potentiels. Par exemple, lors des grands matchs de Premier League anglaise, les cotes pour le favori peuvent avoisiner 1.85, tandis que celles pour l’outsider peuvent atteindre 4.30."}',
             'value_pt' => '{"0":"No Ivibet, a atenção especial é dada às odds, já que delas depende diretamente o ganho potencial. Por exemplo, em partidas de destaque da Premier League inglesa, as odds para o favorito podem ficar em torno de 1,85, enquanto para o azarão podem chegar a 4,30."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The situation also looks favorable for tennis matches, where odds on evenly matched opponents often stay at around 1.95. In basketball, especially in the NBA, there are also interesting betting opportunities, with odds on totals and handicaps often higher than the market average."}',
             'value_es' => '{"0":"La situación también es favorable en los partidos de tenis, donde las cuotas para rivales igualados suelen mantenerse en torno a 1.95. En el baloncesto, especialmente en la NBA, también se pueden encontrar opciones interesantes, con cuotas en totales y hándicaps que a menudo superan la media del mercado."}',
             'value_fr' => '{"0":"La situation est également intéressante pour les matchs de tennis, où les cotes entre adversaires de niveau équivalent se situent souvent autour de 1.95. En basketball, notamment en NBA, on trouve aussi des opportunités attractives, avec des cotes sur les totaux et les handicaps souvent supérieures à la moyenne du marché."}',
             'value_pt' => '{"0":"A situação também é favorável no tênis, onde as odds para adversários equilibrados costumam se manter em torno de 1,95. No basquete, especialmente na NBA, também é possível encontrar opções interessantes, com odds em totais e handicaps frequentemente acima da média do mercado."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Betting limits are suitable for both newcomers and more experienced players. The minimum stake starts at $0.10, while maximum amounts depend on the specific event and market."}',
             'value_es' => '{"0":"Los límites de apuesta son adecuados tanto para principiantes como para jugadores más experimentados. La apuesta mínima comienza en 0,10 dólares, mientras que las cantidades máximas dependen del evento y del mercado específicos."}',
             'value_fr' => '{"0":"Les limites de mise conviennent aussi bien aux nouveaux joueurs qu’aux parieurs expérimentés. La mise minimale commence à 0,10 dollar, tandis que les montants maximums dépendent de l’événement et du marché spécifiques."}',
             'value_pt' => '{"0":"Os limites de apostas são adequados tanto para iniciantes quanto para jogadores mais experientes. A aposta mínima começa em US$ 0,10, enquanto os valores máximos dependem do evento e do mercado específicos."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In top football matches, you can find hundreds of betting options. Players can place wagers on classic outcomes and totals, as well as on the number of cards, corners, or individual player statistics."}',
             'value_es' => '{"0":"En los partidos de fútbol más importantes se pueden encontrar cientos de opciones de apuestas. Los jugadores pueden apostar a resultados clásicos y totales, así como a la cantidad de tarjetas, saques de esquina o estadísticas individuales de los jugadores."}',
             'value_fr' => '{"0":"Lors des matchs de football majeurs, il est possible de trouver des centaines d’options de paris. Les joueurs peuvent miser sur les résultats classiques et les totaux, ainsi que sur le nombre de cartons, de corners ou les statistiques individuelles des joueurs."}',
             'value_pt' => '{"0":"Nas principais partidas de futebol é possível encontrar centenas de opções de apostas. Os jogadores podem apostar em resultados clássicos e totais, assim como no número de cartões, escanteios ou estatísticas individuais dos jogadores."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"For basketball games, bets are available on quarters and statistical indicators, including the points scored by individual athletes. In esports, it is possible to bet on CS:GO, Dota 2, League of Legends, and other disciplines, with a wide range of markets."}',
             'value_es' => '{"0":"En los partidos de baloncesto están disponibles apuestas por cuartos y en indicadores estadísticos, incluidos los puntos de jugadores específicos. En los deportes electrónicos es posible apostar en CS:GO, Dota 2, League of Legends y otras disciplinas, con una amplia variedad de mercados."}',
             'value_fr' => '{"0":"Pour les matchs de basket-ball, il est possible de parier sur les quarts-temps et divers indicateurs statistiques, y compris les points marqués par certains joueurs. Dans l’esport, il est possible de parier sur CS:GO, Dota 2, League of Legends et d’autres disciplines, avec un large éventail de marchés."}',
             'value_pt' => '{"0":"Nos jogos de basquete estão disponíveis apostas por quartos e em indicadores estatísticos, incluindo os pontos de atletas específicos. Nos esportes eletrônicos é possível apostar em CS:GO, Dota 2, League of Legends e outras disciplinas, com uma ampla variedade de mercados."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The live betting functionality at Ivibet works quickly and reliably, with odds updating rapidly. The interface is designed to make it easy to follow the game in real time and respond quickly to changes."}',
             'value_es' => '{"0":"La funcionalidad de apuestas en vivo en Ivibet funciona de manera rápida y estable, con las cuotas actualizándose rápidamente. La interfaz está diseñada para que sea fácil seguir el juego en tiempo real y reaccionar rápidamente a los cambios."}',
             'value_fr' => '{"0":"La fonctionnalité de paris en direct sur Ivibet fonctionne rapidement et de manière fiable, avec des cotes qui se mettent à jour rapidement. L’interface est conçue pour faciliter le suivi du jeu en temps réel et permettre de réagir rapidement aux changements."}',
             'value_pt' => '{"0":"A funcionalidade de apostas ao vivo no Ivibet funciona de forma rápida e estável, com as odds a serem atualizadas rapidamente. A interface é projetada para que seja fácil acompanhar o jogo em tempo real e reagir rapidamente às mudanças."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Most matches feature live video streams, along with detailed graphics showing key events and basic statistics. This ensures you have complete information to make winning decisions."}',
             'value_es' => '{"0":"La mayoría de los partidos cuentan con transmisiones de video en vivo, además de gráficos detallados que muestran los eventos clave y estadísticas básicas. Esto asegura que tengas toda la información para tomar decisiones ganadoras."}',
             'value_fr' => '{"0":"La plupart des matchs proposent des diffusions vidéo en direct, ainsi que des graphiques détaillés montrant les événements clés et des statistiques de base. Vous disposez ainsi de toutes les informations nécessaires pour prendre des décisions gagnantes."}',
             'value_pt' => '{"0":"A maioria das partidas conta com transmissões de vídeo ao vivo, além de gráficos detalhados mostrando os eventos-chave e estatísticas básicas. Isso garante que você tenha todas as informações para tomar decisões vencedoras."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet operates under a Curacao license, which is a standard option for most international bookmakers. SSL encryption is used to protect personal data, ensuring that all financial transactions are secure."}',
             'value_es' => '{"0":"Ivibet opera bajo una licencia de Curazao, que es una opción estándar para la mayoría de las casas de apuestas internacionales. Se utiliza cifrado SSL para proteger los datos personales, garantizando que todas las transacciones financieras sean seguras."}',
             'value_fr' => '{"0":"Ivibet fonctionne sous licence de Curaçao, ce qui est une option standard pour la plupart des bookmakers internationaux. Le chiffrement SSL est utilisé pour protéger les données personnelles, garantissant que toutes les transactions financières sont sécurisées."}',
             'value_pt' => '{"0":"Ivibet opera sob licença de Curaçao, que é uma opção padrão para a maioria das casas de apostas internacionais. A criptografia SSL é usada para proteger os dados pessoais, garantindo que todas as transações financeiras sejam seguras."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, account verification is provided, which helps prevent fraud and ensures that payouts are made only to account owners."}',
             'value_es' => '{"0":"Además, se ofrece verificación de cuenta, lo que ayuda a prevenir fraudes y asegura que los pagos se realicen únicamente a los propietarios de las cuentas."}',
             'value_fr' => '{"0":"De plus, une vérification de compte est prévue, ce qui aide à prévenir la fraude et garantit que les paiements sont effectués uniquement aux titulaires des comptes."}',
             'value_pt' => '{"0":"Além disso, há verificação de conta, o que ajuda a prevenir fraudes e garante que os pagamentos sejam feitos apenas aos proprietários das contas."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"You can fund your Ivibet account using Mastercard and VISA bank cards, e-wallets, as well as cryptocurrencies. Withdrawals are made using the same methods as deposits and usually take from a few minutes up to 24 hours, depending on the chosen method and amount."}',
             'value_es' => '{"0":"Puede financiar su cuenta de Ivibet usando tarjetas bancarias Mastercard y VISA, monederos electrónicos, así como criptomonedas. Los retiros se realizan mediante los mismos métodos que los depósitos y generalmente tardan desde unos minutos hasta 24 horas, dependiendo del método elegido y del monto."}',
             'value_fr' => '{"0":"Vous pouvez approvisionner votre compte Ivibet avec des cartes bancaires Mastercard et VISA, des portefeuilles électroniques ainsi que des cryptomonnaies. Les retraits s’effectuent via les mêmes méthodes que les dépôts et prennent généralement de quelques minutes à 24 heures, selon le mode choisi et le montant."}',
             'value_pt' => '{"0":"Você pode depositar na sua conta Ivibet usando cartões bancários Mastercard e VISA, carteiras eletrônicas, bem como criptomoedas. Os saques são feitos pelos mesmos métodos dos depósitos e geralmente levam de alguns minutos até 24 horas, dependendo do método escolhido e do valor."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit amount is from $10, and the minimum withdrawal is from $20. The bookmaker usually does not charge a commission. Note that for the first withdrawal, you need to complete identity verification, which may take up to two days."}',
             'value_es' => '{"0":"El depósito mínimo es de $10 y el retiro mínimo es de $20. Por lo general, la casa de apuestas no cobra comisión. Tenga en cuenta que para el primer retiro es necesario completar la verificación de identidad, lo que puede tardar hasta dos días."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 10 $, et le retrait minimum est de 20 $. En général, le bookmaker ne prélève pas de commission. Notez que pour le premier retrait, vous devez procéder à la vérification de votre identité, ce qui peut prendre jusqu’à deux jours."}',
             'value_pt' => '{"0":"O valor mínimo para depósito é de $10, e o saque mínimo é de $20. Normalmente, a casa de apostas não cobra comissão. Vale lembrar que para o primeiro saque é necessário passar pelo processo de verificação de identidade, que pode levar até dois dias."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet’s customer support is available 24/7, and you can contact them via the online chat on the website or by email:"}',
             'value_es' => '{"0":"El servicio de atención al cliente de Ivibet está disponible las 24 horas, y puede contactarlos a través del chat en línea en el sitio web o por correo electrónico:"}',
             'value_fr' => '{"0":"Le service client d’Ivibet est disponible 24h/24 et 7j/7, et vous pouvez les contacter via le chat en ligne sur le site ou par e-mail :"}',
             'value_pt' => '{"0":"O suporte ao cliente da Ivibet funciona 24 horas por dia, e você pode contatá-los através do chat online no site ou por e-mail:"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 33
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 34
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events",
                                 "1":"Casino section with live games",
                                 "2":"Cryptocurrency support",
                                 "3":"User-friendly interface",
                                 "4":"Fair odds and low entry threshold"},
                             "1":
                                {"0":"No mobile app"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran selección de eventos deportivos",
                                 "1":"Sección de casino con juegos en vivo",
                                 "2":"Soporte de criptomonedas",
                                 "3":"Interfaz fácil de usar",
                                 "4":"Cuotas justas y bajo umbral de entrada"},
                             "1":
                                {"0":"Sin aplicación móvil"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs",
                                 "1":"Section casino avec jeux en direct",
                                 "2":"Prise en charge des crypto-monnaies",
                                 "3":"Interface conviviale",
                                 "4":"Cotes équitables et faible seuil d’entrée"},
                             "1":
                                {"0":"Pas d’application mobile"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos",
                                 "1":"Seção de cassino com jogos ao vivo",
                                 "2":"Suporte a criptomoedas",
                                 "3":"Interface amigável",
                                 "4":"Odds justas e baixo valor mínimo"},
                             "1":
                                {"0":"Sem aplicativo móvel"}
                             }',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 35
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 36
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to place bets on Ivibet?"}',
             'value_es' => '{"0":"¿Es seguro apostar en Ivibet?"}',
             'value_fr' => '{"0":"Est-il sûr de parier sur Ivibet ?"}',
             'value_pt' => '{"0":"É seguro apostar na Ivibet?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 37
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform operates under a Curaçao license and uses modern data protection methods."}',
             'value_es' => '{"0":"Sí, la plataforma opera bajo una licencia de Curazao y utiliza métodos modernos de protección de datos."}',
             'value_fr' => '{"0":"Oui, la plateforme fonctionne sous licence Curaçao et utilise des méthodes modernes de protection des données."}',
             'value_pt' => '{"0":"Sim, a plataforma opera sob licença de Curaçao e utiliza métodos modernos de proteção de dados."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 38
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Does Ivibet have a mobile app?"}',
             'value_es' => '{"0":"¿Ivibet tiene una aplicación móvil?"}',
             'value_fr' => '{"0":"Ivibet dispose-t-il d’une application mobile ?"}',
             'value_pt' => '{"0":"A Ivibet tem um aplicativo móvel?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 39
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Not currently, users only have access to the mobile version of the website and the web app."}',
             'value_es' => '{"0":"Actualmente no, los usuarios solo tienen acceso a la versión móvil del sitio web y a la aplicación web."}',
             'value_fr' => '{"0":"Pas pour l’instant, les utilisateurs ont uniquement accès à la version mobile du site et à l’application web."}',
             'value_pt' => '{"0":"Atualmente não, os usuários têm acesso apenas à versão móvel do site e ao web app."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 40
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum bet?"}',
             'value_es' => '{"0":"¿Cuál es la apuesta mínima?"}',
             'value_fr' => '{"0":"Quel est le pari minimum ?"}',
             'value_pt' => '{"0":"Qual é a aposta mínima?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 41
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The minimum stake starts from $0.10."}',
             'value_es' => '{"0":"La cantidad mínima para apostar comienza desde $0.10."}',
             'value_fr' => '{"0":"La mise minimale commence à partir de 0,10 $."}',
             'value_pt' => '{"0":"O valor mínimo para apostas começa em $0,10."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 42
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar fundos?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 43
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Usually from a few minutes up to 24 hours, depending on the chosen method and amount."}',
             'value_es' => '{"0":"Normalmente de unos minutos hasta 24 horas, dependiendo del método elegido y del monto."}',
             'value_fr' => '{"0":"Généralement de quelques minutes à 24 heures, selon la méthode choisie et le montant."}',
             'value_pt' => '{"0":"Normalmente de alguns minutos até 24 horas, dependendo do método escolhido e do valor."}',
             'order' => 43
            ]
        );
    }
}
