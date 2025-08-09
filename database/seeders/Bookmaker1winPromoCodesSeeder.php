<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is one of the players in the online betting and casino market, known for its flexible bonus policy. For new players, the bookmaker offers the opportunity to gain significant benefits at the start, while experienced users have a chance to increase their winnings thanks to promotions and cashback."}',
             'value_es' => '{"0":"1win es uno de los actores del mercado de apuestas en línea y casinos, conocido por su política flexible de bonificaciones. Para los nuevos jugadores, la casa de apuestas ofrece la oportunidad de obtener beneficios significativos desde el inicio, mientras que los usuarios experimentados pueden aumentar sus ganancias gracias a las promociones y al cashback."}',
             'value_fr' => '{"0":"1win est l’un des acteurs du marché des paris en ligne et des casinos, connu pour sa politique de bonus flexible. Pour les nouveaux joueurs, le bookmaker offre la possibilité de bénéficier d’avantages importants dès le départ, tandis que les utilisateurs expérimentés peuvent augmenter leurs gains grâce aux promotions et au cashback."}',
             'value_pt' => '{"0":"A 1win é um dos participantes do mercado de apostas online e cassinos, conhecida por sua política flexível de bônus. Para novos jogadores, a casa de apostas oferece a oportunidade de obter benefícios significativos desde o início, enquanto os usuários experientes podem aumentar seus ganhos graças a promoções e cashback."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a detailed look at how promo codes work, what bonuses are available, and how to use them correctly to get the maximum benefit. We will also explain how to use our promo code :promocode during registration to significantly increase your bonus on your first deposit."}',
             'value_es' => '{"0":"En esta reseña, analizaremos en detalle cómo funcionan los códigos promocionales, qué bonos están disponibles y cómo utilizarlos correctamente para obtener el máximo beneficio. También explicaremos cómo utilizar nuestro código promocional :promocode al registrarte para aumentar considerablemente tu bono en el primer depósito."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail le fonctionnement des codes promotionnels, les bonus disponibles et la manière de les utiliser correctement pour en tirer le maximum. Nous expliquerons également comment utiliser notre code promo :promocode lors de l’inscription afin d’augmenter considérablement votre bonus sur le premier dépôt."}',
             'value_pt' => '{"0":"Nesta análise, vamos detalhar como funcionam os códigos promocionais, quais bônus estão disponíveis e como usá-los corretamente para obter o máximo de vantagens. Também explicaremos como usar nosso código promocional :promocode no momento do registro para aumentar significativamente seu bônus no primeiro depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the 1win promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de 1win?"}',
                'value_fr' => '{"0":"Comment profiter du code promo 1win ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da 1win?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To receive an enhanced welcome bonus from 1win, you need to use our exclusive promo code :promocode during registration. To do this, follow these steps:"}',
             'value_es' => '{"0":"Para obtener un bono de bienvenida mejorado de 1win, debes utilizar nuestro código promocional exclusivo :promocode durante el registro. Para ello, sigue estos pasos:"}',
             'value_fr' => '{"0":"Pour bénéficier d’un bonus de bienvenue amélioré de 1win, vous devez utiliser notre code promo exclusif :promocode lors de votre inscription. Pour cela, suivez ces étapes :"}',
             'value_pt' => '{"0":"Para receber um bônus de boas-vindas aprimorado da 1win, você precisa usar nosso código promocional exclusivo :promocode durante o registro. Para isso, siga estes passos:"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official website or download the 1win mobile app."}',
             'value_es' => '{"0":"1. Ve al sitio web oficial o descarga la aplicación móvil de 1win."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel ou téléchargez l’application mobile 1win."}',
             'value_pt' => '{"0":"1. Acesse o site oficial ou baixe o aplicativo móvel da 1win."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"2. Click the «Registration» button. A registration form will appear, where you can choose one of the registration methods, sign up via social networks, or in one click."}',
             'value_es' => '{"0":"2. Haz clic en el botón «Registro». Aparecerá un formulario de registro donde podrás elegir uno de los métodos de registro, registrarte a través de redes sociales o en un solo clic."}',
             'value_fr' => '{"0":"2. Cliquez sur le bouton « Inscription ». Un formulaire d’inscription apparaîtra, où vous pourrez choisir l’une des méthodes d’inscription, vous inscrire via les réseaux sociaux ou en un clic."}',
             'value_pt' => '{"0":"2. Clique no botão «Registro». Um formulário de registro aparecerá, onde você poderá escolher um dos métodos de registro, se inscrever pelas redes sociais ou em um clique."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"3. Select the account currency you will use in the future."}',
             'value_es' => '{"0":"3. Selecciona la moneda de la cuenta que utilizarás en el futuro."}',
             'value_fr' => '{"0":"3. Sélectionnez la devise du compte que vous utiliserez par la suite."}',
             'value_pt' => '{"0":"3. Selecione a moeda da conta que usará futuramente."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"4. Enter your phone number, email, and create a strong password."}',
             'value_es' => '{"0":"4. Introduce tu teléfono, correo electrónico y crea una contraseña segura."}',
             'value_fr' => '{"0":"4. Saisissez votre téléphone, votre adresse e-mail et créez un mot de passe sécurisé."}',
             'value_pt' => '{"0":"4. Insira seu telefone, e-mail e crie uma senha segura."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"5. Enter the promo code :promocode in the designated field."}',
             'value_es' => '{"0":"5. Introduce el código promocional :promocode en el campo correspondiente."}',
             'value_fr' => '{"0":"5. Entrez le code promo :promocode dans le champ prévu à cet effet."}',
             'value_pt' => '{"0":"5. Digite o código promocional :promocode no campo apropriado."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"6. Confirm the creation of your account and make your first deposit. The bonus will be activated automatically after the funds are credited."}',
             'value_es' => '{"0":"6. Confirma la creación de tu cuenta y realiza tu primer depósito. El bono se activará automáticamente después de que los fondos se acrediten."}',
             'value_fr' => '{"0":"6. Confirmez la création de votre compte et effectuez votre premier dépôt. Le bonus sera activé automatiquement après le crédit des fonds."}',
             'value_pt' => '{"0":"6. Confirme a criação da sua conta e faça o primeiro depósito. O bônus será ativado automaticamente após o crédito dos fundos."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win does not offer no-deposit bonuses on a permanent basis, but the company regularly runs promotional campaigns during which you can receive small free bets or free spins without making a deposit."}',
             'value_es' => '{"0":"1win no ofrece bonos sin depósito de forma permanente, pero la empresa organiza regularmente campañas promocionales en las que puedes recibir pequeñas apuestas gratis o giros gratis sin realizar un depósito."}',
             'value_fr' => '{"0":"1win ne propose pas de bonus sans dépôt de manière permanente, mais l’entreprise organise régulièrement des campagnes promotionnelles durant lesquelles vous pouvez obtenir de petits paris gratuits ou des tours gratuits sans effectuer de dépôt."}',
             'value_pt' => '{"0":"A 1win não oferece bônus sem depósito de forma permanente, mas a empresa realiza regularmente campanhas promocionais nas quais é possível receber pequenas apostas grátis ou rodadas grátis sem fazer um depósito."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Such offers are usually provided as part of holiday events, for example, during the New Year promotion or major sporting events such as the World Cup, the Champions League, or the Olympic Games. No-deposit bonuses may also be offered as a personal reward for active users."}',
             'value_es' => '{"0":"Estas ofertas suelen estar disponibles en el marco de eventos festivos, por ejemplo, durante la promoción de Año Nuevo o en grandes eventos deportivos como la Copa del Mundo, la Liga de Campeones o los Juegos Olímpicos. Los bonos sin depósito también pueden otorgarse como una oferta personalizada para usuarios activos."}',
             'value_fr' => '{"0":"Ces offres sont généralement proposées dans le cadre d’événements festifs, par exemple lors de la promotion du Nouvel An ou à l’occasion de grands événements sportifs tels que la Coupe du Monde, la Ligue des Champions ou les Jeux Olympiques. Les bonus sans dépôt peuvent également être offerts en tant que proposition personnalisée aux utilisateurs actifs."}',
             'value_pt' => '{"0":"Essas ofertas geralmente são disponibilizadas durante eventos festivos, por exemplo, na promoção de Ano Novo ou em grandes eventos esportivos como a Copa do Mundo, a Liga dos Campeões ou os Jogos Olímpicos. Os bônus sem depósito também podem ser oferecidos como uma proposta personalizada para usuários ativos."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To avoid missing a no-deposit bonus, it’s worth subscribing to the email newsletter, enabling push notifications in the mobile app, and following 1win’s official social media accounts."}',
             'value_es' => '{"0":"Para no perderte un bono sin depósito, conviene suscribirse al boletín por correo electrónico, activar las notificaciones push en la aplicación móvil y seguir las redes sociales oficiales de 1win."}',
             'value_fr' => '{"0":"Pour ne pas manquer un bonus sans dépôt, il est conseillé de s’abonner à la newsletter par e-mail, d’activer les notifications push dans l’application mobile et de suivre les réseaux sociaux officiels de 1win."}',
             'value_pt' => '{"0":"Para não perder um bônus sem depósito, vale a pena assinar a newsletter por e-mail, ativar as notificações push no aplicativo móvel e seguir as redes sociais oficiais da 1win."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 1win?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 1win?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 1win ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 1win?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win does not limit itself to bonuses for new players only. The bookmaker also offers a loyalty program for those who have been playing for a long time. Among such offers, you can enjoy a weekly casino cashback, multiple bet bonuses, seasonal and themed promotions, and individual promo codes for active players."}',
             'value_es' => '{"0":"1win no se limita únicamente a los bonos para nuevos jugadores. La casa de apuestas también ofrece un programa de fidelidad para quienes llevan tiempo jugando. Entre estas ofertas podrás encontrar un reembolso semanal en el casino, bonos por apuestas múltiples, promociones de temporada y temáticas, así como códigos promocionales individuales para jugadores activos."}',
             'value_fr' => '{"0":"1win ne se limite pas uniquement aux bonus pour les nouveaux joueurs. Le bookmaker propose également un programme de fidélité pour ceux qui jouent depuis longtemps. Parmi ces offres, vous trouverez un cashback hebdomadaire au casino, des bonus pour les paris combinés, des promotions saisonnières et thématiques, ainsi que des codes promo personnalisés pour les joueurs actifs."}',
             'value_pt' => '{"0":"A 1win não se limita apenas aos bônus para novos jogadores. A casa de apostas também oferece um programa de fidelidade para aqueles que já jogam há mais tempo. Entre essas ofertas, você poderá aproveitar cashback semanal no cassino, bônus por apostas múltiplas, promoções sazonais e temáticas, além de códigos promocionais individuais para jogadores ativos."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"This is an important advantage for players, as most competitors focus only on welcome offers and rarely reward those who have been using the platform for a long time."}',
             'value_es' => '{"0":"Esto es una gran ventaja para los jugadores, ya que la mayoría de los competidores se enfocan únicamente en las ofertas de bienvenida y rara vez premian a quienes han estado utilizando la plataforma durante mucho tiempo."}',
             'value_fr' => '{"0":"C’est un avantage important pour les joueurs, car la plupart des concurrents se concentrent uniquement sur les offres de bienvenue et récompensent rarement ceux qui utilisent la plateforme depuis longtemps."}',
             'value_pt' => '{"0":"Isso é uma grande vantagem para os jogadores, pois a maioria dos concorrentes foca apenas nas ofertas de boas-vindas e raramente recompensa aqueles que já utilizam a plataforma há muito tempo."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome Bonus"}',
                'value_es' => '{"0":"Bono de bienvenida"}',
                'value_fr' => '{"0":"Bonus de bienvenue"}',
                'value_pt' => '{"0":"Bônus de boas-vindas"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The welcome bonus at 1win looks especially attractive compared to other bookmakers. You can receive an incredible 500% bonus on your first deposit. For example, if you deposit $100, you will get a $500 bonus, giving you a total of $600 to play with."}',
             'value_es' => '{"0":"El bono de bienvenida en 1win resulta especialmente atractivo en comparación con otras casas de apuestas. Puedes obtener un increíble bono del 500% en tu primer depósito. Por ejemplo, si depositas 100 $, recibirás un bono de 500 $, lo que te dará un total de 600 $ para jugar."}',
             'value_fr' => '{"0":"Le bonus de bienvenue chez 1win est particulièrement attractif par rapport à d’autres bookmakers. Vous pouvez recevoir un incroyable bonus de 500 % sur votre premier dépôt. Par exemple, si vous déposez 100 $, vous recevrez un bonus de 500 $, ce qui vous donnera un total de 600 $ pour jouer."}',
             'value_pt' => '{"0":"O bônus de boas-vindas da 1win é especialmente atraente em comparação com outras casas de apostas. Você pode receber um incrível bônus de 500% no seu primeiro depósito. Por exemplo, se você depositar US$ 100, receberá um bônus de US$ 500, totalizando US$ 600 para jogar."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that the maximum first deposit amount eligible for the bonus is $1,025 or the equivalent in your chosen currency."}',
             'value_es' => '{"0":"Cabe destacar que el importe máximo del primer depósito que puede recibir el bono es de hasta 1.025 $ o el equivalente en la moneda que elijas."}',
             'value_fr' => '{"0":"Il convient de noter que le montant maximal du premier dépôt éligible au bonus est de 1 025 $ ou l’équivalent dans la devise choisie."}',
             'value_pt' => '{"0":"Vale lembrar que o valor máximo do primeiro depósito que pode receber o bônus é de até US$ 1.025 ou o equivalente na moeda escolhida."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Also, remember that in order to withdraw the bonus funds, you must meet the wagering requirements. This means you need to wager the bonus amount on bets with odds of at least 3.0 for sports betting or on slots with an RTP of 95% or higher."}',
             'value_es' => '{"0":"Además, recuerda que para poder retirar los fondos del bono, debes cumplir con los requisitos de apuesta. Esto significa que debes apostar el importe del bono en apuestas con una cuota mínima de 3.0 para apuestas deportivas o en tragamonedas con un RTP de al menos 95%."}',
             'value_fr' => '{"0":"N’oubliez pas également que pour pouvoir retirer les fonds du bonus, vous devez respecter les conditions de mise. Cela signifie que vous devez miser le montant du bonus sur des paris avec une cote minimale de 3.0 pour les paris sportifs ou sur des machines à sous avec un RTP d’au moins 95 %."}',
             'value_pt' => '{"0":"Também é importante destacar que, para poder sacar os fundos do bônus, é necessário cumprir os requisitos de aposta. Isso significa que você deve apostar o valor do bônus em apostas com odds de pelo menos 3.0 para apostas esportivas ou em slots com RTP a partir de 95%."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Casino Cashback"}',
                'value_es' => '{"0":"Reembolso de Casino"}',
                'value_fr' => '{"0":"Cashback de Casino"}',
                'value_pt' => '{"0":"Cashback de Cassino"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Sometimes your bet might not win. But there’s no need to worry too much about the lost funds, because 1win has you covered for such situations. For casino enthusiasts, there is a weekly cashback of up to 30%. It is calculated based on the total amount lost during the week. The minimum threshold to participate is $10."}',
             'value_es' => '{"0":"A veces, tu apuesta puede no salir ganadora. Pero no hay que preocuparse demasiado por el dinero perdido, ya que 1win ha pensado en estas situaciones. Para los amantes de los juegos de casino, hay un reembolso semanal de hasta el 30%. Se calcula sobre el total perdido durante la semana. El umbral mínimo para participar es de 10 $."}',
             'value_fr' => '{"0":"Il arrive parfois que votre pari ne passe pas. Mais il n’y a pas lieu de trop s’inquiéter pour l’argent perdu, car 1win a prévu ce genre de situations. Pour les amateurs de jeux de casino, un cashback hebdomadaire allant jusqu’à 30 % est proposé. Il est calculé sur le montant total perdu au cours de la semaine. Le seuil minimum de participation est de 10 $."}',
             'value_pt' => '{"0":"Às vezes, a sua aposta pode não ser vencedora. Mas não é preciso se preocupar muito com o dinheiro perdido, pois a 1win pensou nessas situações. Para os fãs de jogos de cassino, existe um cashback semanal de até 30%. Ele é calculado com base no valor total perdido durante a semana. O valor mínimo para participar é de US$ 10."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The great thing about this promotion is that the cashback does not require wagering. You can withdraw it immediately or use it for more bets. This offer can be especially useful, as it gives you a second chance to win even after an unlucky week."}',
             'value_es' => '{"0":"Lo mejor de esta promoción es que el reembolso no requiere requisitos de apuesta. Puedes retirarlo de inmediato o usarlo para seguir apostando. Esta oferta resulta especialmente útil, ya que te da una segunda oportunidad de ganar incluso después de una semana poco afortunada."}',
             'value_fr' => '{"0":"L’avantage de cette promotion est que le cashback ne nécessite aucun pari supplémentaire. Vous pouvez le retirer immédiatement ou l’utiliser pour placer de nouvelles mises. Cette offre est particulièrement utile, car elle vous donne une seconde chance de gagner même après une semaine infructueuse."}',
             'value_pt' => '{"0":"O diferencial dessa promoção é que o cashback não exige rollover. Você pode sacá-lo imediatamente ou usá-lo para fazer novas apostas. Essa oferta é especialmente útil, pois oferece uma segunda chance de ganhar mesmo após uma semana ruim."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Bonus on a multiple bet"}',
                'value_es' => '{"0":"Bono por apuesta combinada"}',
                'value_fr' => '{"0":"Bonus sur un pari combiné"}',
                'value_pt' => '{"0":"Bônus em aposta múltipla"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Fans of accumulator bets will appreciate the Bonus on a Multiple Bet promotion. This offer increases your winnings by a percentage based on the number of events in your bet slip. The more matches you include, the higher your bonus can be, reaching up to 30%."}',
             'value_es' => '{"0":"A los aficionados a las apuestas combinadas les gustará la promoción Bonus on a Multiple Bet. Esta oferta aumenta tus ganancias en un porcentaje según la cantidad de eventos en tu boleto. Cuantos más partidos elijas, mayor será tu bono, que puede alcanzar hasta el 30%."}',
             'value_fr' => '{"0":"Les amateurs de paris combinés apprécieront la promotion Bonus on a Multiple Bet. Cette offre augmente vos gains d’un pourcentage basé sur le nombre d’événements dans votre coupon. Plus vous sélectionnez de matchs, plus votre bonus sera élevé, pouvant atteindre 30 %."}',
             'value_pt' => '{"0":"Os fãs de apostas acumuladas vão gostar da promoção Bonus on a Multiple Bet. Esta oferta aumenta seus ganhos em uma porcentagem baseada no número de eventos no seu cupom. Quanto mais partidas você incluir, maior será seu bônus, podendo chegar a 30%."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To participate, you need to place a bet on at least five events, each with odds of 1.3 or higher. For example, a winning accumulator with 7 events will add a 15% bonus to your net winnings."}',
             'value_es' => '{"0":"Para participar, debes apostar en al menos cinco eventos, cada uno con una cuota mínima de 1.3. Por ejemplo, una apuesta combinada ganadora con 7 eventos otorga un bono del 15% sobre la ganancia neta."}',
             'value_fr' => '{"0":"Pour participer, vous devez placer un pari sur au moins cinq événements, chacun avec une cote d’au moins 1,3. Par exemple, un combiné gagnant de 7 événements vous donnera un bonus de 15 % sur les gains nets."}',
             'value_pt' => '{"0":"Para participar, é necessário fazer uma aposta com pelo menos cinco eventos, cada um com odds de 1,3 ou mais. Por exemplo, um acumulador de 7 eventos vencedor oferece um bônus de 15% sobre o lucro líquido."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 31
            ]
        );
    }
}
