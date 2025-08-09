<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
             'value_en' => '{"0":"1win Review"}',
             'value_es' => '{"0":"Reseña de 1win"}',
             'value_fr' => '{"0":"Avis sur 1win"}',
             'value_pt' => '{"0":"Análise da 1win"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is an online bookmaker that was launched in 2016 but significantly expanded after a rebranding in 2018. At first glance, it might seem like just another betting platform, but in reality, 1win offers a range of features that make it appealing to both new and experienced players."}',
             'value_es' => '{"0":"1win es una casa de apuestas en línea que apareció en 2016, pero que se expandió significativamente tras su cambio de marca en 2018. A primera vista puede parecer solo otra plataforma de apuestas, pero en realidad 1win tiene varias características que la hacen atractiva tanto para jugadores nuevos como experimentados."}',
             'value_fr' => '{"0":"1win est un bookmaker en ligne apparu en 2016, mais qui s\'est considérablement développé après sa refonte en 2018. À première vue, cela peut sembler être une plateforme de paris parmi tant d’autres, mais en réalité, 1win possède plusieurs particularités qui la rendent intéressante pour les nouveaux comme pour les parieurs expérimentés."}',
             'value_pt' => '{"0":"A 1win é uma casa de apostas online que surgiu em 2016, mas se expandiu significativamente após a reformulação da marca em 2018. À primeira vista, pode parecer apenas mais uma plataforma de apostas, mas na verdade a 1win possui uma série de recursos que a tornam atrativa tanto para iniciantes quanto para apostadores experientes."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Everything here is built for convenience: fast access to bets, an intuitive interface. The company operates under a Curacao license, which may not be the most prestigious jurisdiction but allows it to serve players from many countries."}',
             'value_es' => '{"0":"Todo aquí está orientado a la comodidad: acceso rápido a las apuestas y una interfaz intuitiva. La empresa opera bajo una licencia de Curazao, que si bien no es la jurisdicción más prestigiosa, le permite atender a jugadores de muchos países."}',
             'value_fr' => '{"0":"Tout est conçu pour être pratique : accès rapide aux paris, interface intuitive. La société opère sous licence du Curaçao, une juridiction certes peu prestigieuse, mais qui permet de desservir les joueurs dans de nombreux pays."}',
             'value_pt' => '{"0":"Tudo aqui é feito para ser conveniente: acesso rápido às apostas e uma interface intuitiva. A empresa opera sob licença de Curaçao, que embora não seja a jurisdição mais prestigiada, permite atender jogadores de diversos países."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Regarding sports betting, 1win truly stands out. You’ll have access to over 25 types of sports to bet on, including not just football, tennis, or basketball, but also less popular ones like cricket, futsal, or snooker."}',
             'value_es' => '{"0":"En cuanto a las apuestas deportivas, 1win realmente destaca. Tendrás acceso a más de 25 deportes diferentes para apostar, incluyendo no solo fútbol, tenis o baloncesto, sino también opciones menos populares como críquet, fútbol sala o snooker."}',
             'value_fr' => '{"0":"En matière de paris sportifs, 1win se distingue clairement. Vous aurez accès à plus de 25 disciplines sportives, y compris non seulement le football, le tennis ou le basket-ball, mais aussi des sports moins populaires comme le cricket, le futsal ou le snooker."}',
             'value_pt' => '{"0":"No que diz respeito às apostas desportivas, a 1win destaca-se. Estão disponíveis mais de 25 modalidades para apostar, incluindo não apenas futebol, ténis ou basquetebol, mas também opções menos populares como críquete, futsal ou snooker."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Classic pre-match bets are updated regularly, and the odds change depending on market dynamics. There’s a dedicated section for the top events of the day, where the most popular matches are conveniently listed. It’s also useful that the types of bets — singles, accumulators, systems — are clearly labeled in the line."}',
             'value_es' => '{"0":"Las apuestas clásicas pre-partido se actualizan regularmente y las cuotas cambian según la dinámica del mercado. Hay una sección dedicada a los eventos principales del día, donde se recogen cómodamente los partidos más populares. También es útil que los tipos de apuestas — simples, combinadas, sistemas — estén claramente marcados en la línea."}',
             'value_fr' => '{"0":"Les paris classiques avant-match sont mis à jour régulièrement, et les cotes évoluent en fonction de la dynamique du marché. Une section dédiée aux événements phares du jour regroupe les matchs les plus populaires de manière pratique. Il est aussi appréciable que les types de paris — simples, combinés, systèmes — soient clairement indiqués dans la ligne."}',
             'value_pt' => '{"0":"As apostas pré-jogo clássicas são atualizadas regularmente e as odds mudam consoante a dinâmica do mercado. Há uma secção dedicada aos principais eventos do dia, onde estão reunidos os jogos mais populares. Também é útil que os tipos de apostas — simples, acumuladas, sistemas — estejam claramente identificados na linha."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, every match includes team statistics, which greatly helps in making informed decisions. For sports betting fans, this is a genuinely useful tool."}',
             'value_es' => '{"0":"Además, cada partido incluye estadísticas de los equipos, lo que facilita enormemente la toma de decisiones. Para los aficionados a las apuestas deportivas, esta es una herramienta realmente útil."}',
             'value_fr' => '{"0":"De plus, chaque match affiche les statistiques des équipes, ce qui facilite grandement la prise de décision. Pour les amateurs de paris sportifs, c’est un outil véritablement efficace."}',
             'value_pt' => '{"0":"Além disso, cada partida apresenta estatísticas das equipas, o que facilita muito a tomada de decisões. Para os fãs de apostas desportivas, é realmente uma ferramenta funcional."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win\'s casino is not just an add-on to sports betting, but a full-fledged ecosystem of its own. You’ll find slots from over 100 providers, including big names like NetEnt, Pragmatic Play, and Microgaming. Everything runs smoothly without lags."}',
             'value_es' => '{"0":"El casino de 1win no es solo un complemento para las apuestas deportivas, sino un ecosistema completo en sí mismo. Hay tragamonedas de más de 100 proveedores, incluidos NetEnt, Pragmatic Play y Microgaming. Todo funciona con fluidez, sin retrasos."}',
             'value_fr' => '{"0":"Le casino de 1win n’est pas simplement un ajout aux paris sportifs, c’est un véritable écosystème à part entière. On y trouve des machines à sous de plus de 100 fournisseurs, notamment NetEnt, Pragmatic Play et Microgaming. Tout fonctionne de manière fluide, sans ralentissements."}',
             'value_pt' => '{"0":"O cassino da 1win não é apenas um extra para as apostas esportivas — é um ecossistema completo por si só. Há slots de mais de 100 provedores, incluindo NetEnt, Pragmatic Play e Microgaming. Tudo funciona de forma suave, sem travamentos."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"If you\'re into table games like blackjack, roulette, or baccarat — it\'s all here, plus live versions with real dealers. The Aviator section is especially popular. It\'s a simple yet exciting game that has built a strong fan community."}',
             'value_es' => '{"0":"Si te gustan los juegos de mesa como el blackjack, la ruleta o el bacará, también están disponibles, incluso en versiones en vivo con crupieres reales. La sección Aviator es especialmente popular. Es un juego simple pero emocionante con una gran comunidad de seguidores."}',
             'value_fr' => '{"0":"Si vous aimez les jeux de table comme le blackjack, la roulette ou le baccarat, ils sont bien présents, y compris en version live avec de vrais croupiers. La section Aviator est particulièrement populaire. C’est un jeu simple mais addictif qui a réuni une grande communauté de fans."}',
             'value_pt' => '{"0":"Se você gosta de jogos de mesa como blackjack, roleta ou bacará, também vai encontrar tudo isso aqui, inclusive em versões ao vivo com crupiês reais. A seção Aviator é especialmente popular — um jogo simples, mas envolvente, com uma grande comunidade de fãs."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"You can access all games even without account verification, although you’ll need it to withdraw winnings. Overall, 1win\'s casino can easily compete with standalone specialized platforms."}',
             'value_es' => '{"0":"Puedes acceder a todos los juegos incluso sin verificar tu cuenta, aunque necesitarás hacerlo para retirar ganancias. En general, el casino de 1win puede competir con plataformas especializadas independientes."}',
             'value_fr' => '{"0":"Tous les jeux sont accessibles même sans vérification du compte, mais celle-ci sera nécessaire pour retirer vos gains. Globalement, le casino de 1win peut rivaliser avec des plateformes spécialisées."}',
             'value_pt' => '{"0":"É possível acessar todos os jogos mesmo sem verificar a conta, mas será necessário verificar para sacar os ganhos. No geral, o cassino da 1win pode competir com plataformas especializadas."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Odds and Limits"}',
                'value_es' => '{"0":"Cuotas y Límites"}',
                'value_fr' => '{"0":"Cotes et Limites"}',
                'value_pt' => '{"0":"Cotas e Limites"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"At 1win, one of the most notable advantages is its competitive odds. If you\'re looking for a platform that offers maximum value for your bets, this bookmaker is definitely worth considering. For example, in a Champions League match between Real Madrid and Bayern Munich, you might see odds like 2.45 for a Real win, 3.60 for a draw, and 2.70 for a Bayern win."}',
             'value_es' => '{"0":"Una de las principales ventajas de 1win son sus cuotas competitivas. Si buscas una plataforma que ofrezca el máximo rendimiento por tus apuestas, esta casa de apuestas merece tu atención. Por ejemplo, en un partido de la Liga de Campeones entre el Real Madrid y el Bayern, las cuotas pueden ser de 2.45 para la victoria del Real, 3.60 para el empate y 2.70 para la victoria del Bayern."}',
             'value_fr' => '{"0":"L’un des principaux atouts de 1win, ce sont ses cotes compétitives. Si vous recherchez une plateforme qui maximise la valeur de vos mises, ce bookmaker mérite votre attention. Par exemple, pour un match de Ligue des champions entre le Real Madrid et le Bayern Munich, les cotes peuvent être de 2,45 pour une victoire du Real, 3,60 pour un match nul, et 2,70 pour une victoire du Bayern."}',
             'value_pt' => '{"0":"Uma das maiores vantagens da 1win são as suas odds competitivas. Se está à procura de uma plataforma que ofereça o máximo retorno pelas suas apostas, esta casa merece atenção. Por exemplo, num jogo da Liga dos Campeões entre o Real Madrid e o Bayern, as odds podem ser de 2.45 para vitória do Real, 3.60 para empate e 2.70 para vitória do Bayern."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For less popular disciplines like table tennis or esports, the odds are slightly lower, roughly in line with other bookmakers. In live mode, odds update quickly and accurately, with minimal delays."}',
             'value_es' => '{"0":"En disciplinas menos populares como el tenis de mesa o los deportes electrónicos, las cuotas son algo más bajas, similares a las de otros operadores. En el modo en vivo, las cuotas se actualizan rápidamente y con precisión, con mínimos retrasos."}',
             'value_fr' => '{"0":"Pour des disciplines moins populaires comme le tennis de table ou l’esport, les cotes sont un peu plus basses, comparables à celles des autres bookmakers. En mode live, les cotes sont mises à jour rapidement et avec précision, sans délais importants."}',
             'value_pt' => '{"0":"Em modalidades menos populares, como ténis de mesa ou eSports, as odds são um pouco mais baixas, semelhantes às de outras casas de apostas. No modo ao vivo, as odds são atualizadas de forma rápida e precisa, com atrasos mínimos."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"As for limits, regular players are unlikely to encounter restrictions on bets. Maximum stakes depend on the event, but in general, 1win allows wagers of several thousand dollars on top matches. However, professional players may face personalized limits, as is common with most bookmakers."}',
             'value_es' => '{"0":"En cuanto a los límites, los jugadores habituales rara vez encuentran restricciones. Las cantidades máximas dependen del evento, pero en general 1win permite apuestas de varios miles de dólares en partidos importantes. Sin embargo, los jugadores profesionales pueden enfrentarse a límites personalizados, como sucede con la mayoría de las casas de apuestas."}',
             'value_fr' => '{"0":"Concernant les limites, les joueurs occasionnels ne rencontreront probablement aucune restriction. Les mises maximales dépendent de l’événement, mais en général, 1win permet de parier plusieurs milliers de dollars sur les grands matchs. Cependant, des limites personnalisées peuvent s’appliquer aux joueurs professionnels, comme chez la plupart des opérateurs."}',
             'value_pt' => '{"0":"Quanto aos limites, apostadores comuns dificilmente encontrarão restrições. Os valores máximos dependem do evento, mas no geral a 1win permite apostas de vários milhares de dólares em jogos de topo. No entanto, apostadores profissionais podem ter limites personalizados, como acontece com a maioria das casas de apostas."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Depth of Betting Markets"}',
                'value_es' => '{"0":"Variedad de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Largeur des Marchés de Paris"}',
                'value_pt' => '{"0":"Ampla Variedade de Mercados de Apostas"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"One of 1win’s strong points is the variety of betting options. In a top-tier football match, you can find over 1,000 different markets. You’ll be able to bet on the outcome, totals, handicaps, individual player stats, corners, cards, and even place combination bets."}',
             'value_es' => '{"0":"Uno de los puntos fuertes de 1win es la variedad de opciones de apuestas. En un partido de fútbol de primer nivel, puedes encontrar más de 1.000 mercados disponibles. Tendrás la posibilidad de apostar al resultado, totales, hándicaps, estadísticas individuales de jugadores, córners, tarjetas e incluso hacer apuestas combinadas."}',
             'value_fr' => '{"0":"L’un des points forts de 1win est la diversité des options de paris. Pour un match de football de haut niveau, il est possible de trouver plus de 1 000 types de paris. Vous pourrez miser sur le résultat, les totaux, les handicaps, les performances individuelles des joueurs, les corners, les cartons, ainsi que faire des paris combinés."}',
             'value_pt' => '{"0":"Um dos pontos fortes da 1win é a variedade de opções de apostas. Num jogo de futebol de alto nível, é possível encontrar mais de 1.000 mercados disponíveis. Você poderá apostar no resultado, totais, handicaps, estatísticas individuais de jogadores, escanteios, cartões e até fazer apostas combinadas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Even for less popular events, there are dozens of markets available. In tennis, for example, you can bet not only on the match winner but also on the number of sets, games, or even the exact score in each set. There’s truly a lot to analyze and bet on."}',
             'value_es' => '{"0":"Incluso en eventos menos populares hay decenas de opciones de apuesta. En tenis, por ejemplo, además del ganador del partido, se puede apostar al número de sets, juegos o al resultado exacto de cada set. Realmente hay mucho que analizar y aprovechar."}',
             'value_fr' => '{"0":"Même pour les événements moins populaires, des dizaines d’options sont disponibles. Au tennis, par exemple, en plus du vainqueur du match, vous pouvez parier sur le nombre de sets, de jeux ou le score exact dans chaque set. Il y a vraiment de quoi analyser et parier."}',
             'value_pt' => '{"0":"Mesmo em eventos menos populares, há dezenas de opções de apostas. No tênis, por exemplo, além de apostar no vencedor da partida, é possível apostar no número de sets, de games ou no resultado exato de cada set. Há realmente muito para analisar e explorar."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Directo"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Direct"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The live section at 1win deserves special attention. In-play bets are placed quickly, with minimal delay. Odds update dynamically, and the platform rarely lags, even during peak hours. Although there aren’t many live video streams, most events feature visual graphics showing key match moments like shots, corners, and attacks."}',
             'value_es' => '{"0":"La sección en vivo de 1win merece una atención especial. Las apuestas en directo se colocan rápidamente, con un retraso mínimo. Las cuotas se actualizan de forma dinámica y la plataforma rara vez se cuelga, incluso en horas punta. Aunque hay pocas retransmisiones en directo, la mayoría de los eventos cuentan con gráficos visuales que muestran los momentos clave del partido como disparos, córners y ataques."}',
             'value_fr' => '{"0":"La section en direct de 1win mérite une attention particulière. Les paris en temps réel se placent rapidement, avec un délai minimal. Les cotes se mettent à jour de manière dynamique et la plateforme ralentit rarement, même aux heures de pointe. Bien qu’il y ait peu de retransmissions vidéo en direct, la plupart des événements sont accompagnés de graphiques visuels indiquant les moments clés du match comme les tirs, corners et attaques."}',
             'value_pt' => '{"0":"A seção ao vivo da 1win merece destaque. As apostas em tempo real são feitas rapidamente, com atraso mínimo. As odds são atualizadas dinamicamente e a plataforma raramente trava, mesmo nos horários de pico. Embora haja poucas transmissões de vídeo ao vivo, a maioria dos eventos conta com gráficos visuais que mostram os principais lances da partida, como chutes, escanteios e ataques."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"There’s also a live stats section that helps you stay better informed about the game. The built-in cashout system works reliably, although it’s sometimes available only for top matches."}',
             'value_es' => '{"0":"También hay una sección de estadísticas en vivo que permite seguir mejor el desarrollo del juego. El sistema de cobro anticipado integrado funciona de forma estable, aunque a veces solo está disponible para los partidos más importantes."}',
             'value_fr' => '{"0":"Il existe aussi une section de statistiques en direct, utile pour mieux suivre le déroulement du match. Le système de cashout intégré fonctionne de manière stable, même si parfois il n’est disponible que pour les matchs majeurs."}',
             'value_pt' => '{"0":"Também há uma seção de estatísticas ao vivo que ajuda a acompanhar melhor o jogo. O sistema de cashout integrado funciona de forma estável, embora às vezes esteja disponível apenas para partidas de alto nível."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Security and Reliability"}',
                'value_es' => '{"0":"Seguridad y Fiabilidad"}',
                'value_fr' => '{"0":"Sécurité et Fiabilité"}',
                'value_pt' => '{"0":"Segurança e Confiabilidade"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Security is always a relevant issue. 1win operates under an international Curaçao license, which provides a basic level of oversight but does not fully guarantee player protection. However, the platform uses SSL encryption."}',
             'value_es' => '{"0":"La seguridad siempre es un tema relevante. 1win opera bajo una licencia internacional de Curazao, lo que implica un nivel básico de supervisión, pero no garantiza completamente la protección de los jugadores. No obstante, la plataforma utiliza cifrado SSL."}',
             'value_fr' => '{"0":"La question de la sécurité reste toujours d’actualité. 1win opère sous une licence internationale de Curaçao, ce qui implique un niveau de contrôle de base mais ne garantit pas une protection totale des joueurs. Toutefois, la plateforme utilise un cryptage SSL."}',
             'value_pt' => '{"0":"A segurança é sempre uma questão importante. A 1win opera com uma licença internacional de Curaçao, o que garante um nível básico de controle, mas não assegura proteção total aos jogadores. No entanto, a plataforma utiliza criptografia SSL."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The verification process is fairly standard, as with most bookmakers. You’ll need to provide a valid ID document. A positive aspect is that there are hardly any reviews online reporting serious payment delays or account blocks without reason."}',
             'value_es' => '{"0":"El proceso de verificación es bastante estándar, como en la mayoría de las casas de apuestas. Deberás proporcionar un documento de identidad válido. Un aspecto positivo es que casi no hay reseñas en línea sobre retrasos graves en los pagos o bloqueos de cuentas sin motivo."}',
             'value_fr' => '{"0":"Le processus de vérification est assez standard, comme chez la plupart des bookmakers. Il vous faudra fournir un document d’identité. Un point positif est qu’il y a très peu de retours négatifs en ligne concernant des retards de paiements importants ou des blocages de comptes injustifiés."}',
             'value_pt' => '{"0":"O processo de verificação é bastante padrão, como na maioria das casas de apostas. Você precisará fornecer um documento de identidade válido. Um ponto positivo é que quase não há relatos de atrasos sérios nos pagamentos ou bloqueios de contas sem motivo."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win supports responsible gambling principles and allows users to set deposit and play time limits on the site."}',
             'value_es' => '{"0":"1win promueve el juego responsable y permite establecer límites de depósito y tiempo de juego en el sitio."}',
             'value_fr' => '{"0":"1win soutient les principes de jeu responsable et permet de fixer des limites de dépôt et de temps de jeu sur le site."}',
             'value_pt' => '{"0":"A 1win apoia os princípios de jogo responsável e permite definir limites de depósito e tempo de jogo no site."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Deposits and Withdrawals"}',
                'value_es' => '{"0":"Depósitos y Retiros"}',
                'value_fr' => '{"0":"Dépôts et Retraits"}',
                'value_pt' => '{"0":"Depósitos e Saques"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The payment system at 1win is quite diverse. You can deposit using bank cards, cryptocurrencies, e-wallets, and even Apple Pay or Google Pay."}',
             'value_es' => '{"0":"El sistema de pagos en 1win es bastante variado. Puedes depositar mediante tarjetas bancarias, criptomonedas, monederos electrónicos e incluso a través de Apple Pay o Google Pay."}',
             'value_fr' => '{"0":"Le système de paiement chez 1win est assez varié. Il est possible de déposer des fonds via cartes bancaires, cryptomonnaies, portefeuilles électroniques, et même avec Apple Pay ou Google Pay."}',
             'value_pt' => '{"0":"O sistema de pagamento da 1win é bastante diversificado. É possível fazer depósitos com cartões bancários, criptomoedas, carteiras eletrônicas e até mesmo com Apple Pay ou Google Pay."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are processed instantly, with a minimum amount starting from just one dollar. Withdrawals take a bit longer, usually up to 24 hours if you’ve already completed the verification process. If the system is overloaded or you haven’t been verified yet, it may take up to 3 days."}',
             'value_es' => '{"0":"Los depósitos se acreditan al instante, con un monto mínimo desde un dólar. Las retiradas tardan un poco más, normalmente hasta 24 horas si ya has completado el proceso de verificación. En caso de alta demanda o falta de verificación, puede tardar hasta 3 días."}',
             'value_fr' => '{"0":"Les dépôts sont crédités instantanément, avec un montant minimum à partir d’un dollar. Les retraits prennent un peu plus de temps, généralement jusqu’à 24 heures si la vérification a déjà été effectuée. En cas de forte charge ou d’absence de vérification, le retrait peut prendre jusqu’à 3 jours."}',
             'value_pt' => '{"0":"Os depósitos são creditados instantaneamente, com valor mínimo a partir de um dólar. As retiradas demoram um pouco mais, geralmente até 24 horas, desde que o processo de verificação já tenha sido concluído. Em casos de alta demanda ou sem verificação, o prazo pode chegar a até 3 dias."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win does not charge fees for deposits or withdrawals, but note that your payment provider may apply its own fees. All transactions are visible in your account, and there are push notifications regarding their status."}',
             'value_es' => '{"0":"1win no cobra comisiones por depósitos ni retiradas, pero ten en cuenta que tu proveedor de pagos podría aplicar sus propias comisiones. Todas las transacciones se pueden ver en tu cuenta, y hay notificaciones push sobre su estado."}',
             'value_fr' => '{"0":"1win ne facture pas de frais pour les dépôts ou retraits, mais des frais peuvent être appliqués par le service de paiement utilisé. Toutes les transactions sont visibles dans l’espace personnel, avec des notifications push sur leur statut."}',
             'value_pt' => '{"0":"A 1win não cobra taxas por depósitos ou retiradas, mas o serviço de pagamento pode cobrar suas próprias comissões. Todas as transações ficam visíveis na conta pessoal, e há notificações push sobre o status das operações."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 32
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 33
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 34
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win\'s support service operates around the clock. Email support is also available, but response times there are significantly slower. So if you have an urgent issue, it\'s better to contact the live chat directly."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 1win funciona las 24 horas. También hay soporte por correo electrónico, pero la velocidad de respuesta de los operadores es considerablemente más baja. Por lo tanto, si tienes una consulta urgente, es mejor que contactes directamente por el chat en vivo."}',
             'value_fr' => '{"0":"Le service client de 1win est disponible 24h/24. Un support par e-mail est également proposé, mais les temps de réponse y sont nettement plus longs. Donc, en cas de question urgente, il vaut mieux utiliser directement le chat en direct."}',
             'value_pt' => '{"0":"O serviço de suporte da 1win funciona 24 horas por dia. Também há suporte por e-mail, mas o tempo de resposta dos operadores é consideravelmente mais lento. Portanto, se tiver uma questão urgente, é melhor entrar em contacto diretamente pelo chat ao vivo."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 35
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 36
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of bets and events",
                                 "1":"Convenient mobile version and app",
                                 "2":"Casino with live games",
                                 "3":"Cryptocurrency support"},
                             "1":
                                {"0":"No live streaming of most matches"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de apuestas y eventos",
                                 "1":"Versión móvil y aplicación convenientes",
                                 "2":"Casino con juegos en vivo",
                                 "3":"Soporte para criptomonedas"},
                             "1":
                                {"0":"No hay transmisiones en vivo de la mayoría de los partidos"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de paris et d\'événements",
                                 "1":"Version mobile et application pratiques",
                                 "2":"Casino avec jeux en direct",
                                 "3":"Support des cryptomonnaies"},
                             "1":
                                {"0":"Pas de retransmissions en direct pour la plupart des matchs"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla seleção de apostas e eventos",
                                 "1":"Versão móvel e aplicativo convenientes",
                                 "2":"Cassino com jogos ao vivo",
                                 "3":"Suporte a criptomoedas"},
                             "1":
                                {"0":"Não há transmissões ao vivo da maioria das partidas"}
                             }',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 37
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 38
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Can you trust 1win?"}',
             'value_es' => '{"0":"¿Se puede confiar en 1win?"}',
             'value_fr' => '{"0":"Peut-on faire confiance à 1win ?"}',
             'value_pt' => '{"0":"É possível confiar na 1win?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 39
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The platform has been operating for several years and has a large user base. In most cases, there are no issues with payouts."}',
             'value_es' => '{"0":"La plataforma ha estado operando durante varios años y cuenta con una gran base de usuarios. En la mayoría de los casos, no hay problemas con los pagos."}',
             'value_fr' => '{"0":"La plateforme fonctionne depuis plusieurs années et possède une grande audience. Dans la plupart des cas, il n\'y a pas de problèmes de paiements."}',
             'value_pt' => '{"0":"A plataforma opera há vários anos e possui uma grande base de usuários. Na maioria dos casos, não há problemas com os pagamentos."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 40
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification mandatory?"}',
             'value_es' => '{"0":"¿Es obligatorio pasar la verificación?"}',
             'value_fr' => '{"0":"La vérification est-elle obligatoire ?"}',
             'value_pt' => '{"0":"A verificação é obrigatória?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 41
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For playing — no, but verification is required for withdrawals. The request for documents usually comes after the first large cashout."}',
             'value_es' => '{"0":"Para jugar — no, pero la verificación es necesaria para los retiros. La solicitud de documentos generalmente llega después del primer gran retiro."}',
             'value_fr' => '{"0":"Pour jouer — non, mais la vérification est requise pour les retraits. La demande de documents intervient généralement après le premier gros retrait."}',
             'value_pt' => '{"0":"Para jogar — não, mas a verificação é necessária para saques. O pedido de documentos geralmente ocorre após o primeiro grande saque."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 42
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 43
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, there is a mobile app for Android, and a web app is available for iOS."}',
             'value_es' => '{"0":"Sí, hay una aplicación móvil para Android, y para iOS se ofrece una aplicación web."}',
             'value_fr' => '{"0":"Oui, il y a une application mobile pour Android, et une application web est proposée pour iOS."}',
             'value_pt' => '{"0":"Sim, há um aplicativo móvel para Android, e para iOS é oferecido um aplicativo web."}',
             'order' => 43
            ]
        );
    }
}
