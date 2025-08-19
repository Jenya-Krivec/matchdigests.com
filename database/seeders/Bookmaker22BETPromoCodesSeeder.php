<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET has maintained its status as one of the most popular international bookmakers for several years, and the company pays special attention to bonuses and promo codes. The platform offers generous welcome packages for new players, regular promotions for existing users, and special offers that allow you to increase your winnings and receive additional bonuses."}',
             'value_es' => '{"0":"22BET ha mantenido su estatus como uno de los corredores internacionales más populares durante varios años, y la empresa presta especial atención a los bonos y códigos promocionales. La plataforma ofrece generosos paquetes de bienvenida para nuevos jugadores, promociones regulares para usuarios existentes y ofertas especiales que permiten aumentar tus ganancias y recibir bonos adicionales."}',
             'value_fr' => '{"0":"22BET a conservé son statut de l’un des bookmakers internationaux les plus populaires depuis plusieurs années, et la société accorde une attention particulière aux bonus et aux codes promotionnels. La plateforme propose des packages de bienvenue généreux pour les nouveaux joueurs, des promotions régulières pour les utilisateurs existants et des offres spéciales qui permettent d’augmenter vos gains et de recevoir des bonus supplémentaires."}',
             'value_pt' => '{"0":"A 22BET mantém seu status como uma das casas de apostas internacionais mais populares há vários anos, e a empresa dedica atenção especial aos bônus e códigos promocionais. A plataforma oferece pacotes de boas-vindas generosos para novos jogadores, promoções regulares para usuários existentes e ofertas especiais que permitem aumentar seus ganhos e receber bônus adicionais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Bonuses are available both for sports betting and casino games. It is important to note that promotions have wagering requirements that must be met to claim your winnings. In this review, we will cover some of them and explain how to get the welcome bonus using our promo code :promocode."}',
             'value_es' => '{"0":"Los bonos están disponibles tanto para apuestas deportivas como para juegos de casino. Es importante tener en cuenta que las promociones tienen requisitos de apuesta que deben cumplirse para obtener las ganancias. En esta reseña, revisaremos algunos de ellos y explicaremos cómo obtener el bono de bienvenida usando nuestro código promocional :promocode."}',
             'value_fr' => '{"0":"Les bonus sont disponibles à la fois pour les paris sportifs et les jeux de casino. Il est important de noter que les promotions ont des conditions de mise à remplir pour pouvoir retirer vos gains. Dans cette revue, nous examinerons certaines d’entre elles et expliquerons comment obtenir le bonus de bienvenue en utilisant notre code promo :promocode."}',
             'value_pt' => '{"0":"Os bônus estão disponíveis tanto para apostas esportivas quanto para jogos de cassino. É importante notar que as promoções possuem requisitos de aposta que devem ser cumpridos para receber os ganhos. Nesta análise, abordaremos alguns deles e explicaremos como obter o bônus de boas-vindas usando nosso código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the 22BET promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de 22BET?"}',
                'value_fr' => '{"0":"Comment profiter du code promo 22BET ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da 22BET?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To activate the registration bonus, simply enter the special promo code :promocode when creating your account. To do this, go to the website, click the «Registration» button, and choose the method that suits you best."}',
             'value_es' => '{"0":"Para activar el bono de registro, simplemente ingrese el código promocional especial :promocode al crear su cuenta. Para ello, visite el sitio web, haga clic en el botón «Registro» y elija el método que más le convenga."}',
             'value_fr' => '{"0":"Pour activer le bonus de bienvenue, il suffit d’entrer le code promo spécial :promocode lors de la création de votre compte. Pour ce faire, allez sur le site, cliquez sur le bouton « Inscription » et choisissez la méthode qui vous convient le mieux."}',
             'value_pt' => '{"0":"Para ativar o bônus de registro, basta inserir o código promocional especial :promocode ao criar sua conta. Para isso, acesse o site, clique no botão «Registro» e escolha o método que melhor se adapta a você. Você pode se registrar pelo telefone, registro completo ou usando redes sociais."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"When registering by phone, you only need to specify your currency, phone number, and confirm it via SMS. For full registration, you will need to provide your country, currency, first and last name. If you choose registration via social networks, you just need to specify your country and currency and confirm registration through your social account."}',
             'value_es' => '{"0":"Al registrarse por teléfono, solo debe indicar la moneda, el número de teléfono y confirmarlo mediante un SMS. Para el registro completo, deberá indicar el país, la moneda, el nombre y el apellido. Si elige registrarse mediante redes sociales, solo necesita indicar el país y la moneda, y confirmar el registro a través de su cuenta social."}',
             'value_fr' => '{"0":"Vous pouvez vous inscrire par téléphone, via une inscription complète ou via les réseaux sociaux. Lors de l’inscription par téléphone, il suffit d’indiquer la devise, le numéro de téléphone et de le confirmer via SMS. Pour une inscription complète, il faudra indiquer le pays, la devise, le prénom et le nom. Si vous choisissez l’inscription via les réseaux sociaux, vous devez uniquement indiquer le pays et la devise, puis confirmer l’inscription via votre compte social."}',
             'value_pt' => '{"0":"Ao se registrar pelo telefone, basta informar a moeda, o número de telefone e confirmá-lo via SMS. Para o registro completo, será necessário fornecer o país, moeda, nome e sobrenome. Se optar pelo registro via redes sociais, basta informar o país e a moeda e confirmar o registro através da sua conta social."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In any of these methods, you should enter the promo code :promocode in the designated field. At this stage, also specify where you want to use the bonus — for sports betting or casino games."}',
             'value_es' => '{"0":"En cualquiera de estos métodos, debe ingresar el código promocional :promocode en el campo correspondiente. En esta etapa, también indique dónde desea usar el bono: para apuestas deportivas o para juegos de casino."}',
             'value_fr' => '{"0":"Dans tous ces cas, vous devez entrer le code promo :promocode dans le champ prévu à cet effet. À ce stade, indiquez également où vous souhaitez utiliser le bonus : pour les paris sportifs ou pour le casino. Après la confirmation du compte et le premier dépôt, le bonus sera activé automatiquement."}',
             'value_pt' => '{"0":"Em qualquer um desses métodos, você deve inserir o código promocional :promocode no campo designado. Nesta etapa, também indique onde deseja usar o bônus — para apostas esportivas ou para jogos de cassino."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"After confirming your account and making the first deposit, the bonus will be activated automatically. To withdraw bonus funds, you must meet the wagering requirements. For sports betting, the bonus must be wagered through accumulators with a minimum odds of 1.40 within 7 days. For the casino, the wagering requirement is 50x the bonus amount, also within 7 days. You can find more detailed terms of the promotion on the official website in the «Bonuses» section."}',
             'value_es' => '{"0":"Tras confirmar la cuenta y realizar el primer depósito, el bono se activará automáticamente. Para retirar los fondos del bono, debe cumplir con los requisitos de apuesta. Para apuestas deportivas, el bono debe apostarse mediante combinadas con cuotas mínimas de 1.40 en un plazo de 7 días. Para el casino, el requisito de apuesta es 50 veces el monto del bono, también dentro de 7 días. Puede consultar los términos detallados de la promoción en la sección «Bonos» del sitio web oficial."}',
             'value_fr' => '{"0":"Après la confirmation du compte et le premier dépôt, le bonus sera activé automatiquement. Pour retirer les fonds du bonus, vous devez respecter les conditions de mise. Pour les paris sportifs, le bonus doit être misé via des paris combinés avec une cote minimale de 1,40 dans un délai de 7 jours. Pour le casino, le wager est de 50 fois le montant du bonus, également dans un délai de 7 jours. Vous pouvez consulter les conditions détaillées de la promotion sur le site officiel dans la section « Bonus »."}',
             'value_pt' => '{"0":"Após confirmar a conta e fazer o primeiro depósito, o bônus será ativado automaticamente. Para retirar os fundos do bônus, é necessário cumprir os requisitos de aposta. Para apostas esportivas, o bônus deve ser apostado em acumuladores com odds mínimas de 1,40 dentro de 7 dias. Para o cassino, o requisito de aposta é 50 vezes o valor do bônus, também em 7 dias. Você pode conferir os termos detalhados da promoção na seção «Bônus» do site oficial."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"At the time of this review, 22BET does not offer standard no-deposit bonuses for new players. However, the platform occasionally runs special promotions where a small bonus can be obtained without making a deposit. Therefore, it is worth regularly checking the «Bonuses» section to avoid missing out on advantageous offers."}',
             'value_es' => '{"0":"Al momento de esta reseña, 22BET no ofrece bonos sin depósito estándar para nuevos jugadores. Sin embargo, la plataforma realiza ocasionalmente promociones especiales en las que se puede obtener un pequeño bono sin realizar un depósito. Por ello, vale la pena revisar regularmente la sección de «Bonos» para no perder ofertas ventajosas."}',
             'value_fr' => '{"0":"Au moment de cette revue, 22BET ne propose pas de bonus sans dépôt standard pour les nouveaux joueurs. Cependant, la plateforme organise parfois des promotions spéciales permettant d’obtenir un petit bonus sans effectuer de dépôt. Il est donc conseillé de consulter régulièrement la section « Bonus » afin de ne pas manquer les offres intéressantes."}',
             'value_pt' => '{"0":"No momento desta análise, a 22BET não oferece bônus sem depósito padrão para novos jogadores. No entanto, a plataforma realiza ocasionalmente promoções especiais onde é possível receber um pequeno bônus sem fazer depósito. Por isso, vale a pena verificar regularmente a seção «Bônus» para não perder ofertas vantajosas."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at MelBet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en MelBet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur MelBet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na MelBet?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 22BET takes care of its regular players. They have access to deposit bonuses, cashback, and special offers on popular sports events and casino tournaments. Additionally, the platform offers a loyalty system that allows players to accumulate points from their bets and exchange them for bonus funds."}',
             'value_es' => '{"0":"Sí, 22BET cuida a sus jugadores habituales. Tienen acceso a bonos por depósito, reembolsos y ofertas especiales en eventos deportivos populares y torneos de casino. Además, la plataforma ofrece un sistema de fidelidad que permite acumular puntos por las apuestas y canjearlos por fondos de bonificación."}',
             'value_fr' => '{"0":"Oui, 22BET prend soin de ses joueurs réguliers. Ils ont accès à des bonus de dépôt, des cashback et des offres spéciales sur les événements sportifs populaires et les tournois de casino. De plus, la plateforme propose un système de fidélité permettant de cumuler des points grâce aux mises et de les échanger contre des fonds bonus."}',
             'value_pt' => '{"0":"Sim, a 22BET cuida dos seus jogadores regulares. Eles têm acesso a bônus de depósito, cashback e ofertas especiais em eventos esportivos populares e torneios de cassino. Além disso, a plataforma oferece um sistema de fidelidade que permite acumular pontos com as apostas e trocá-los por fundos de bônus."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Wednesday Cash Splash"}',
                'value_es' => '{"0":"¡Cash Splash los miércoles!"}',
                'value_fr' => '{"0":"Mercredi Cash Splash !"}',
                'value_pt' => '{"0":"Cash Splash de quarta-feira!"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This Wednesday promotion allows you to receive an additional bonus in the form of a 50% cashback or free bets. Every registered user can participate, with the promotion terms defined for the specific week. The offer is designed for both new and regular players, making Wednesday especially profitable for betting."}',
             'value_es' => '{"0":"Esta promoción de los miércoles permite recibir un bono adicional en forma de 50% de reembolso o apuestas gratuitas. Cada usuario registrado puede participar, y los términos de la promoción se definen para la semana específica. La oferta está diseñada tanto para nuevos como para jugadores habituales, haciendo que el miércoles sea un día especialmente rentable para apostar."}',
             'value_fr' => '{"0":"Cette promotion du mercredi permet de recevoir un bonus supplémentaire sous forme de cashback de 50 % ou de paris gratuits. Chaque utilisateur enregistré peut participer, les conditions de la promotion étant définies pour la semaine spécifique. L’offre s’adresse aux nouveaux joueurs comme aux habitués, rendant le mercredi particulièrement avantageux pour les paris."}',
             'value_pt' => '{"0":"Esta promoção de quarta-feira permite receber um bônus adicional na forma de 50% de cashback ou apostas grátis. Todo usuário registrado pode participar, com os termos da promoção definidos para a semana específica. A oferta é destinada tanto a novos quanto a jogadores regulares, tornando a quarta-feira especialmente vantajosa para apostas."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To take part in the promotion, you need to deposit at least $5. Note that the bonus funds can be used either for sports betting or casino games. If you use the bonus for casino play, you must wager it 40 times within 7 days to withdraw the funds."}',
             'value_es' => '{"0":"Para participar en la promoción, es necesario depositar al menos $5. Tenga en cuenta que los fondos del bono se pueden usar para apuestas deportivas o juegos de casino. Si utiliza el bono para el casino, debe apostarlo 40 veces en un plazo de 7 días para poder retirarlo."}',
             'value_fr' => '{"0":"Pour profiter de la promotion, il faut effectuer un dépôt d’au moins 5 $. Notez que les fonds bonus peuvent être utilisés pour les paris sportifs ou les jeux de casino. Si vous utilisez le bonus pour le casino, il doit être misé 40 fois dans les 7 jours pour pouvoir être retiré."}',
             'value_pt' => '{"0":"Para participar da promoção, é necessário depositar pelo menos $5. Observe que os fundos de bônus podem ser usados para apostas esportivas ou jogos de cassino. Se você usar o bônus para o cassino, deve apostá-lo 40 vezes dentro de 7 dias para poder retirar os fundos."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Rebate Bonus"}',
                'value_es' => '{"0":"Bono de Recuperación"}',
                'value_fr' => '{"0":"Bonus de remise"}',
                'value_pt' => '{"0":"Bónus de Rebate"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This is a regular offer for sports betting. Players receive a weekly partial refund on lost bets in the form of 0.3% of the amount, allowing you to continue playing."}',
             'value_es' => '{"0":"Esta es una oferta regular para apuestas deportivas. Los jugadores reciben semanalmente un reembolso parcial de las apuestas perdidas del 0,3% del monto, lo que les permite continuar jugando."}',
             'value_fr' => '{"0":"Il s’agit d’une offre régulière pour les paris sportifs. Les joueurs reçoivent chaque semaine un remboursement partiel des mises perdues sous forme de 0,3 % du montant, ce qui permet de continuer à jouer."}',
             'value_pt' => '{"0":"Esta é uma oferta regular para apostas esportivas. Os jogadores recebem semanalmente um reembolso parcial das apostas perdidas na forma de 0,3% do valor, permitindo que continuem jogando."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The minimum amount to receive cashback is $2, and the maximum is capped at $1,200. Pleasantly, this promotion has no wagering requirements."}',
             'value_es' => '{"0":"El monto mínimo para recibir el cashback es de $2, y el máximo está limitado a $1,200. Afortunadamente, esta promoción no tiene requisitos de apuesta."}',
             'value_fr' => '{"0":"Le montant minimum pour recevoir le cashback est de 2 $, et le maximum est limité à 1 200 $. Heureusement, cette promotion n’a aucune exigence de mise."}',
             'value_pt' => '{"0":"O valor mínimo para receber o cashback é $2, e o máximo é limitado a $1.200. Felizmente, esta promoção não possui requisitos de aposta."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Bet Booster"}',
                'value_es' => '{"0":"Bet Booster"}',
                'value_fr' => '{"0":"Bet Booster"}',
                'value_pt' => '{"0":"Bet Booster"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This is a unique offer for accumulator bets. Users receive enhanced odds on selected events, which allows increasing the potential winnings. The bonus amount depends on the number of events in the accumulator and can reach up to 50% with the maximum number of events."}',
             'value_es' => '{"0":"Esta es una oferta única para apuestas combinadas. Los usuarios reciben cuotas mejoradas en eventos seleccionados, lo que permite aumentar las ganancias potenciales. El monto del bono depende del número de eventos en la apuesta combinada y puede alcanzar hasta el 50% con el número máximo de eventos."}',
             'value_fr' => '{"0":"C’est une offre unique pour les paris combinés. Les utilisateurs bénéficient de cotes augmentées sur des événements sélectionnés, ce qui permet d’augmenter les gains potentiels. Le montant du bonus dépend du nombre d’événements dans le combiné et peut atteindre jusqu’à 50 % avec le nombre maximum d’événements."}',
             'value_pt' => '{"0":"Esta é uma oferta única para apostas acumuladas. Os usuários recebem odds aumentadas em eventos selecionados, o que permite aumentar os ganhos potenciais. O valor do bônus depende do número de eventos na aposta acumulada e pode chegar a 50% com o número máximo de eventos."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The minimum accumulator bet must be $2. The more events in your slip, the higher your bonus:"}',
             'value_es' => '{"0":"La apuesta mínima combinada debe ser de $2. Cuantos más eventos haya en tu cupón, mayor será tu bono:"}',
             'value_fr' => '{"0":"La mise minimale pour un combiné doit être de 2 $. Plus il y a d’événements dans votre coupon, plus votre bonus est élevé :"}',
             'value_pt' => '{"0":"O valor mínimo da aposta acumulada deve ser $2. Quanto mais eventos no seu cupom, maior será o seu bônus:"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'list_v2',
             'value_en' => '{"0":"4-6 events - 5%",
                             "1":"7-8 events - 10%",
                             "2":"9-10 events - 20%",
                             "3":"11-13 events - 30%",
                             "4":"14-15 events - 50%"}',
             'value_es' => '{"0":"4-6 eventos - 5%",
                             "1":"7-8 eventos - 10%",
                             "2":"9-10 eventos - 20%",
                             "3":"11-13 eventos - 30%",
                             "4":"14-15 eventos - 50%"}',
             'value_fr' => '{"0":"4-6 événements - 5%",
                             "1":"7-8 événements - 10%",
                             "2":"9-10 événements - 20%",
                             "3":"11-13 événements - 30%",
                             "4":"14-15 événements - 50%"}',
             'value_pt' => '{"0":"4-6 eventos - 5%",
                             "1":"7-8 eventos - 10%",
                             "2":"9-10 eventos - 20%",
                             "3":"11-13 eventos - 30%",
                             "4":"14-15 eventos - 50%"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can I use a promo code in the mobile app?"}',
             'value_es' => '{"0":"¿Se puede usar un código promocional en la aplicación móvil?"}',
             'value_fr' => '{"0":"Peut-on utiliser un code promotionnel dans l’application mobile ?"}',
             'value_pt' => '{"0":"É possível usar um código promocional no aplicativo móvel?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all promo codes can be entered during registration or when depositing via the mobile app."}',
             'value_es' => '{"0":"Sí, todos los códigos promocionales se pueden ingresar durante el registro o al depositar a través de la aplicación móvil."}',
             'value_fr' => '{"0":"Oui, tous les codes promotionnels peuvent être saisis lors de l’inscription ou lors d’un dépôt via l’application mobile."}',
             'value_pt' => '{"0":"Sim, todos os códigos promocionais podem ser inseridos durante o registro ou ao depositar pelo aplicativo móvel."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can the bonus be received more than once?"}',
             'value_es' => '{"0":"¿Se puede recibir el bono más de una vez?"}',
             'value_fr' => '{"0":"Peut-on recevoir le bonus plus d’une fois ?"}',
             'value_pt' => '{"0":"É possível receber o bônus mais de uma vez?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The registration bonus is granted only once per user."}',
             'value_es' => '{"0":"El bono de registro se concede solo una vez por usuario."}',
             'value_fr' => '{"0":"Le bonus de bienvenue est accordé une seule fois par utilisateur."}',
             'value_pt' => '{"0":"O bônus de registro é concedido apenas uma vez por usuário."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"What is the wagering requirement for casino bonuses?"}',
             'value_es' => '{"0":"¿Cuál es el requisito de apuesta para los bonos de casino?"}',
             'value_fr' => '{"0":"Quelle est la condition de mise pour les bonus de casino ?"}',
             'value_pt' => '{"0":"Qual é o requisito de apostas para os bônus de cassino?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 32
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"For casino bonuses, the wager is 50x the bonus amount, and the wagering period is 7 days."}',
             'value_es' => '{"0":"Para los bonos de casino, el requisito de apuesta es 50 veces el monto del bono y el período para completar el requisito es de 7 días."}',
             'value_fr' => '{"0":"Pour les bonus de casino, le wagering est de 50 fois le montant du bonus et la période de mise est de 7 jours."}',
             'value_pt' => '{"0":"Para os bônus de cassino, o requisito de apostas é 50x o valor do bônus, e o prazo para cumprir o requisito é de 7 dias."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 33
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"How to find out about current promotions?"}',
             'value_es' => '{"0":"¿Cómo conocer las promociones actuales?"}',
             'value_fr' => '{"0":"Comment connaître les promotions en cours ?"}',
             'value_pt' => '{"0":"Como saber sobre as promoções atuais?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 34
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"All current bonuses and promotions are displayed in the «Bonuses» section on the 22BET website and are updated daily."}',
             'value_es' => '{"0":"Todos los bonos y promociones actuales se muestran en la sección «Bonos» del sitio web de 22BET y se actualizan diariamente."}',
             'value_fr' => '{"0":"Tous les bonus et promotions en cours sont affichés dans la section « Bonus » sur le site de 22BET et sont mis à jour quotidiennement."}',
             'value_pt' => '{"0":"Todos os bônus e promoções atuais são exibidos na seção «Bônus» do site da 22BET e são atualizados diariamente."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 35
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can I withdraw money before completing the bonus wagering requirements?"}',
             'value_es' => '{"0":"¿Se puede retirar dinero antes de completar los requisitos de apuesta del bono?"}',
             'value_fr' => '{"0":"Peut-on retirer de l’argent avant d’avoir rempli les conditions de mise du bonus ?"}',
             'value_pt' => '{"0":"É possível sacar dinheiro antes de completar os requisitos de aposta do bônus?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 36
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"No, funds received as part of a bonus can only be withdrawn after meeting the wagering requirements."}',
             'value_es' => '{"0":"No, los fondos obtenidos como parte del bono solo se pueden retirar después de cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Non, les fonds reçus dans le cadre d’un bonus ne peuvent être retirés qu’après avoir rempli les conditions de mise."}',
             'value_pt' => '{"0":"Não, os fundos recebidos como parte do bônus só podem ser retirados após cumprir os requisitos de aposta."}',
             'order' => 36
            ]
        );
    }
}
