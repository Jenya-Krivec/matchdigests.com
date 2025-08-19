<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is an international betting platform that offers not only sports betting but also a wide range of gambling entertainment, including casino games and live games. One of the company’s key advantages is its generous bonus policy."}',
             'value_es' => '{"0":"Linebet es una plataforma de apuestas internacional que ofrece no solo apuestas deportivas, sino también una amplia gama de entretenimiento de azar, incluyendo juegos de casino y juegos en vivo. Una de las principales ventajas de la compañía es su generosa política de bonos."}',
             'value_fr' => '{"0":"Linebet est une plateforme de paris internationale qui propose non seulement des paris sportifs, mais aussi un large éventail de divertissements de jeu, y compris des jeux de casino et des jeux en direct. L’un des principaux atouts de l’entreprise est sa politique généreuse en matière de bonus."}',
             'value_pt' => '{"0":"Linebet é uma plataforma de apostas internacional que oferece não apenas apostas esportivas, mas também uma ampla gama de entretenimento de jogos de azar, incluindo jogos de cassino e jogos ao vivo. Uma das principais vantagens da empresa é a sua política generosa de bônus."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"New players have access to welcome packages that provide additional funds for sports betting and casino play, while regular users can rely on regular promotions and a loyalty system. With the exclusive promo code :promocode, you have the opportunity to receive a welcome bonus on your first Linebet deposit."}',
             'value_es' => '{"0":"Los nuevos jugadores tienen acceso a paquetes de bienvenida que proporcionan fondos adicionales para apuestas deportivas y juegos de casino, mientras que los usuarios habituales pueden contar con promociones regulares y un sistema de fidelidad. Con el código promocional exclusivo :promocode, tienes la oportunidad de recibir un bono de bienvenida en tu primer depósito en Linebet."}',
             'value_fr' => '{"0":"Les nouveaux joueurs ont accès à des packs de bienvenue offrant des fonds supplémentaires pour les paris sportifs et le jeu en casino, tandis que les utilisateurs réguliers peuvent bénéficier de promotions régulières et d’un système de fidélité. Avec le code promo exclusif :promocode, vous avez la possibilité de recevoir un bonus de bienvenue sur votre premier dépôt chez Linebet."}',
             'value_pt' => '{"0":"Os novos jogadores têm acesso a pacotes de boas-vindas que fornecem fundos adicionais para apostas esportivas e jogos de cassino, enquanto os usuários regulares podem contar com promoções regulares e um sistema de fidelidade. Com o código promocional exclusivo :promocode, você tem a oportunidade de receber um bônus de boas-vindas no seu primeiro depósito na Linebet."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the Linebet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de Linebet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo Linebet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da Linebet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To activate the registration bonus, you need to enter the promo code :promocode when creating your account. To do this, go to the official Linebet website and click the «Register» button. Four registration methods are available:"}',
             'value_es' => '{"0":"Para activar el bono de registro, debes ingresar el código promocional :promocode al crear tu cuenta. Para ello, visita el sitio web oficial de Linebet y haz clic en el botón «Registrarse». Están disponibles cuatro métodos de registro:"}',
             'value_fr' => '{"0":"Pour activer le bonus d’inscription, vous devez saisir le code promo :promocode lors de la création de votre compte. Pour ce faire, rendez-vous sur le site officiel de Linebet et cliquez sur le bouton « S’inscrire ». Quatre méthodes d’inscription sont disponibles :"}',
             'value_pt' => '{"0":"Para ativar o bônus de registro, você precisa inserir o código promocional :promocode ao criar sua conta. Para isso, acesse o site oficial da Linebet e clique no botão «Registrar». Quatro métodos de registro estão disponíveis:"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"1. By phone number. You need to select your country, currency, and enter your phone number, then confirm it via SMS."}',
             'value_es' => '{"0":"1. Por número de teléfono. Debes seleccionar tu país, moneda e ingresar tu número de teléfono, luego confirmarlo mediante SMS."}',
             'value_fr' => '{"0":"1. Par numéro de téléphone. Vous devez sélectionner votre pays, votre devise et entrer votre numéro de téléphone, puis le confirmer via SMS."}',
             'value_pt' => '{"0":"1. Pelo número de telefone. Você precisa selecionar seu país, moeda e informar seu número de telefone, depois confirmá-lo via SMS."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"2. By email. In this case, you also need to specify your country and currency, provide your email, and create a password."}',
             'value_es' => '{"0":"2. Por correo electrónico. En este caso, también debes indicar tu país y moneda, proporcionar tu correo electrónico y crear una contraseña."}',
             'value_fr' => '{"0":"2. Par e-mail. Dans ce cas, vous devez également indiquer votre pays et votre devise, fournir votre e-mail et créer un mot de passe."}',
             'value_pt' => '{"0":"2. Pelo e-mail. Neste caso, você também deve informar seu país e moeda, fornecer seu e-mail e criar uma senha."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"3. Through social networks. Also indicate your country and currency and confirm your account via your social network profile."}',
             'value_es' => '{"0":"3. A través de redes sociales. También indica tu país y moneda y confirma tu cuenta mediante tu perfil de red social."}',
             'value_fr' => '{"0":"3. Via les réseaux sociaux. Indiquez également votre pays et votre devise et confirmez votre compte via votre profil sur le réseau social."}',
             'value_pt' => '{"0":"3. Através de redes sociais. Também indique seu país e moeda e confirme sua conta via perfil de rede social."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"4. One-click registration. Simply select your country and the currency you will use, then click the «Register» button."}',
             'value_es' => '{"0":"4. Registro en un clic. Simplemente selecciona tu país y la moneda que usarás, y haz clic en el botón «Registrarse»."}',
             'value_fr' => '{"0":"4. Inscription en un clic. Sélectionnez simplement votre pays et la devise que vous utiliserez, puis cliquez sur le bouton « S’inscrire »."}',
             'value_pt' => '{"0":"4. Registro em um clique. Basta selecionar seu país e a moeda que você usará e clicar no botão «Registrar»."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"After selecting the registration method, be sure to enter the promo code in the designated field and indicate how you will use the bonus: for sports betting or for the casino. After confirming your account and making your first deposit, the bonus is activated automatically."}',
             'value_es' => '{"0":"Después de seleccionar el método de registro, asegúrate de ingresar el código promocional en el campo correspondiente e indicar cómo usarás el bono: para apuestas deportivas o para el casino. Tras confirmar tu cuenta y realizar tu primer depósito, el bono se activa automáticamente."}',
             'value_fr' => '{"0":"Après avoir sélectionné la méthode d’inscription, assurez-vous d’entrer le code promo dans le champ prévu à cet effet et indiquez comment vous utiliserez le bonus : pour les paris sportifs ou pour le casino. Après confirmation de votre compte et dépôt initial, le bonus est activé automatiquement."}',
             'value_pt' => '{"0":"Após selecionar o método de registro, certifique-se de inserir o código promocional no campo indicado e informe como você usará o bônus: para apostas esportivas ou para o cassino. Após confirmar sua conta e fazer o primeiro depósito, o bônus é ativado automaticamente."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Also note that in order to withdraw the bonus funds, they must be wagered. For sports bets, you need to place an amount five times the size of the bonus using accumulator bets with at least three events. Each event must have a minimum odds of 1.40. You have 30 days to complete this."}',
             'value_es' => '{"0":"También ten en cuenta que para poder retirar los fondos del bono, estos deben ser apostados. Para apuestas deportivas, debes apostar una cantidad cinco veces el tamaño del bono en apuestas combinadas con al menos tres eventos. Cada evento debe tener una cuota mínima de 1.40. Tienes 30 días para completarlo."}',
             'value_fr' => '{"0":"Notez également que pour pouvoir retirer les fonds du bonus, ils doivent être misés. Pour les paris sportifs, vous devez miser un montant cinq fois supérieur au bonus en paris combinés avec au moins trois événements. Chaque événement doit avoir une cote minimale de 1,40. Vous disposez de 30 jours pour compléter cette condition."}',
             'value_pt' => '{"0":"Também observe que, para poder sacar os fundos do bônus, eles precisam ser apostados. Para apostas esportivas, é necessário apostar um valor cinco vezes maior que o bônus usando apostas acumuladoras com pelo menos três eventos. Cada evento deve ter odds mínimas de 1,40. Você tem 30 dias para completar isso."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"For the casino, all deposit bonuses must be wagered 35 times the bonus amount within 7 days of activation. When wagering, bets must not exceed $5. Detailed terms can be found in the «Bonuses» section on the official Linebet website."}',
             'value_es' => '{"0":"Para el casino, todos los bonos por depósito deben apostarse 35 veces el monto del bono dentro de los 7 días posteriores a la activación. Al apostar, las apuestas no deben exceder $5. Los términos detallados se pueden encontrar en la sección «Bonos» del sitio web oficial de Linebet."}',
             'value_fr' => '{"0":"Pour le casino, tous les bonus sur dépôt doivent être misés 35 fois le montant du bonus dans les 7 jours suivant l’activation. Lors du pari, les mises ne doivent pas dépasser 5 $. Les conditions détaillées sont disponibles dans la section « Bonus » sur le site officiel de Linebet."}',
             'value_pt' => '{"0":"Para o cassino, todos os bônus de depósito devem ser apostados 35 vezes o valor do bônus dentro de 7 dias após a ativação. Ao apostar, as apostas não devem exceder $5. Os termos detalhados podem ser encontrados na seção «Bônus» no site oficial da Linebet."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"At the time of this review, Linebet does not offer standard no-deposit bonuses for new users. However, the platform occasionally launches special promotions where you can receive a small bonus without making a deposit. Therefore, it is worth regularly checking the «Bonuses» section so you don’t miss any advantageous offers."}',
             'value_es' => '{"0":"Al momento de esta reseña, Linebet no ofrece bonos sin depósito estándar para nuevos usuarios. Sin embargo, la plataforma lanza ocasionalmente promociones especiales donde se puede recibir un pequeño bono sin necesidad de hacer un depósito. Por lo tanto, vale la pena revisar regularmente la sección de «Bonos» para no perderse ofertas interesantes."}',
             'value_fr' => '{"0":"Au moment de cette revue, Linebet ne propose pas de bonus sans dépôt standard pour les nouveaux utilisateurs. Cependant, la plateforme lance parfois des promotions spéciales où il est possible de recevoir un petit bonus sans effectuer de dépôt. Il est donc conseillé de consulter régulièrement la section « Bonus » afin de ne pas manquer les offres intéressantes."}',
             'value_pt' => '{"0":"No momento desta análise, a Linebet não oferece bônus sem depósito padrão para novos usuários. No entanto, a plataforma ocasionalmente lança promoções especiais onde é possível receber um pequeno bônus sem fazer depósito. Portanto, vale a pena verificar regularmente a seção «Bônus» para não perder ofertas vantajosas."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at Linebet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en Linebet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur Linebet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na Linebet?"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet provides regular players with bonuses and offers them the opportunity to participate in various promotions. Among them:"}',
             'value_es' => '{"0":"Linebet ofrece a los jugadores habituales bonos y la posibilidad de participar en diversas promociones. Entre ellas:"}',
             'value_fr' => '{"0":"Linebet offre aux joueurs réguliers des bonus et la possibilité de participer à diverses promotions. Parmi elles :"}',
             'value_pt' => '{"0":"A Linebet oferece aos jogadores regulares bônus e a oportunidade de participar em várias promoções. Entre elas:"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'list_v2',
             'value_en' => '{"0":"Deposit bonuses.",
                             "1":"Cashback on sports bets and casino play.",
                             "2":"Special promotions on popular sports events and casino tournaments.",
                             "3":"A loyalty system that allows you to accumulate points from bets and exchange them for bonus funds."}',
             'value_es' => '{"0":"Bonos por depósito.",
                             "1":"Reembolso en apuestas deportivas y juegos de casino.",
                             "2":"Promociones especiales en eventos deportivos populares y torneos de casino.",
                             "3":"Un sistema de fidelidad que permite acumular puntos por las apuestas y canjearlos por fondos de bonificación."}',
             'value_fr' => '{"0":"Bonus de dépôt.",
                             "1":"Cashback sur les paris sportifs et les jeux de casino.",
                             "2":"Promotions spéciales sur les événements sportifs populaires et les tournois de casino.",
                             "3":"Un système de fidélité permettant d\'accumuler des points sur les paris et de les échanger contre des fonds bonus."}',
             'value_pt' => '{"0":"Bónus de depósito.",
                             "1":"Cashback em apostas desportivas e jogos de casino.",
                             "2":"Promoções especiais em eventos desportivos populares e torneios de casino.",
                             "3":"Um sistema de fidelidade que permite acumular pontos com apostas e trocá-los por fundos de bónus."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"LUCKY MONDAY PROMO"}',
                'value_es' => '{"0":"PROMOCIÓN LUNES DE LA SUERTE"}',
                'value_fr' => '{"0":"PROMO LUNDI CHANCEUX"}',
                'value_pt' => '{"0":"PROMOÇÃO SEGUNDA-FEIRA AFORTUNADA"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This promotion every Monday allows you to receive an additional bonus. To participate, you need to deposit between $1 and $100. Bonus funds can be used for sports betting or casino play."}',
             'value_es' => '{"0":"Esta promoción cada lunes te permite recibir un bono adicional. Para participar, debes depositar entre $1 y $100. Los fondos del bono se pueden usar para apuestas deportivas o juegos de casino."}',
             'value_fr' => '{"0":"Cette promotion tous les lundis vous permet de recevoir un bonus supplémentaire. Pour y participer, vous devez déposer entre 1 $ et 100 $. Les fonds du bonus peuvent être utilisés pour les paris sportifs ou les jeux de casino."}',
             'value_pt' => '{"0":"Esta promoção todas as segundas-feiras permite receber um bónus adicional. Para participar, deve depositar entre $1 e $100. Os fundos do bónus podem ser usados para apostas desportivas ou jogos de casino."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To wager the bonus, you must place bets totaling three times the bonus amount using accumulator bets within 24 hours of receiving the bonus (otherwise it will be canceled). Each accumulator must include at least 3 events. At least 3 events in the accumulator must have odds of 1.40 or higher."}',
             'value_es' => '{"0":"Para apostar el bono, debes realizar apuestas por un valor triple del bono usando apuestas combinadas dentro de las 24 horas posteriores a la recepción del bono (de lo contrario, se anulará). Cada apuesta combinada debe incluir al menos 3 eventos. Al menos 3 eventos en la apuesta combinada deben tener cuotas de 1.40 o más."}',
             'value_fr' => '{"0":"Pour miser le bonus, vous devez placer des paris totalisant trois fois le montant du bonus avec des paris combinés dans les 24 heures suivant l’attribution du bonus (sinon il sera annulé). Chaque pari combiné doit inclure au moins 3 événements. Au moins 3 événements du combiné doivent avoir des cotes de 1,40 ou plus."}',
             'value_pt' => '{"0":"Para apostar o bónus, deve fazer apostas no valor de três vezes o bónus usando apostas acumuladoras dentro de 24 horas após o recebimento do bónus (caso contrário, será cancelado). Cada acumuladora deve incluir pelo menos 3 eventos. Pelo menos 3 eventos na acumuladora devem ter odds de 1,40 ou mais."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator Of The Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This is a daily promotion for accumulator bets. Players receive increased odds on selected events, which boosts the potential winnings. To use it, select the «Accumulator of the Day» and get a 10% increase to the total odds!"}',
             'value_es' => '{"0":"Esta es una promoción diaria para apuestas combinadas. Los jugadores reciben cuotas aumentadas en eventos seleccionados, lo que incrementa las ganancias potenciales. Para aprovecharla, selecciona «Combinada del Día» y obtén un aumento del 10% en las cuotas totales."}',
             'value_fr' => '{"0":"Il s’agit d’une promotion quotidienne pour les paris combinés. Les joueurs bénéficient de cotes augmentées sur certains événements, ce qui augmente les gains potentiels. Pour en profiter, choisissez « Pari combiné du jour » et obtenez une augmentation de 10 % sur la cote totale !"}',
             'value_pt' => '{"0":"Esta é uma promoção diária para apostas acumuladoras. Os jogadores recebem odds aumentadas em eventos selecionados, o que aumenta os ganhos potenciais. Para usá-la, selecione «Acumuladora do Dia» e receba um aumento de 10% nas odds totais!"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Weekly Cashback"}',
                'value_es' => '{"0":"Devolución semanal"}',
                'value_fr' => '{"0":"Cashback hebdomadaire"}',
                'value_pt' => '{"0":"Cashback semanal"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The weekly promotion allows you to receive partial cashback on your sports bets. You can get 0.3% of the total bets placed during the week. The minimum amount is $1, and the maximum is $1000. The advantage of this promotion is that there are no wagering requirements, so the funds can be used immediately. Also, note that only events with odds of at least 1.5 participate in this promotion."}',
             'value_es' => '{"0":"La promoción semanal permite recibir un reembolso parcial de las apuestas deportivas realizadas. Puedes obtener el 0,3% del total de apuestas realizadas durante la semana. La cantidad mínima es de $1 y la máxima de $1000. La ventaja de esta promoción es que no tiene requisitos de apuesta, por lo que los fondos se pueden usar de inmediato. Además, ten en cuenta que solo participan los eventos con cuotas de al menos 1,5."}',
             'value_fr' => '{"0":"La promotion hebdomadaire permet de recevoir un remboursement partiel sur les paris sportifs effectués. Vous pouvez obtenir 0,3 % du total des paris placés au cours de la semaine. Le montant minimum est de 1 $ et le maximum de 1000 $. L’avantage de cette promotion est qu’il n’y a pas de conditions de mise, les fonds peuvent donc être utilisés immédiatement. Notez également que seuls les événements avec une cote d’au moins 1,5 participent à cette promotion."}',
             'value_pt' => '{"0":"A promoção semanal permite receber cashback parcial sobre as apostas esportivas feitas. Você pode receber 0,3% do total das apostas realizadas durante a semana. O valor mínimo é $1 e o máximo $1000. A vantagem desta promoção é que não há requisitos de aposta, portanto os fundos podem ser usados imediatamente. Além disso, observe que apenas eventos com odds de pelo menos 1,5 participam nesta promoção."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Cashback"}',
                'value_es' => '{"0":"Devolución VIP en Casino"}',
                'value_fr' => '{"0":"Cashback VIP Casino"}',
                'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This is a special offer for casino enthusiasts. Regular players can receive cashback in live games and slots. The amount of cashback depends on the VIP status in the loyalty program. There are 8 levels in the loyalty system. Players start at level 1 (Copper)."}',
             'value_es' => '{"0":"Esta es una oferta especial para los amantes del casino. Los jugadores habituales pueden recibir cashback en juegos en vivo y tragamonedas. La cantidad de cashback depende del estatus VIP en el programa de lealtad. Hay 8 niveles en el sistema de lealtad. Los jugadores comienzan en el nivel 1 (Cobre)."}',
             'value_fr' => '{"0":"Il s’agit d’une offre spéciale pour les amateurs de casino. Les joueurs réguliers peuvent recevoir un cashback sur les jeux en direct et les machines à sous. Le montant du cashback dépend du statut VIP dans le programme de fidélité. Il y a 8 niveaux dans le système de fidélité. Les joueurs commencent au niveau 1 (Cuivre)."}',
             'value_pt' => '{"0":"Esta é uma oferta especial para os amantes de cassino. Jogadores regulares podem receber cashback em jogos ao vivo e slots. O valor do cashback depende do status VIP no programa de fidelidade. Existem 8 níveis no sistema de fidelidade. Os jogadores começam no nível 1 (Cobre)."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To move to the next level, you simply need to play your favorite casino games. The higher the level, the greater the cashback! Players who reach the highest level also receive exclusive offers."}',
             'value_es' => '{"0":"Para pasar al siguiente nivel, solo necesitas jugar a tus juegos favoritos del casino. ¡Cuanto mayor sea el nivel, mayor será el cashback! Los jugadores que alcanzan el nivel más alto también reciben ofertas exclusivas."}',
             'value_fr' => '{"0":"Pour passer au niveau suivant, il vous suffit de jouer à vos jeux de casino préférés. Plus le niveau est élevé, plus le cashback est important ! Les joueurs qui atteignent le niveau le plus élevé reçoivent également des offres exclusives."}',
             'value_pt' => '{"0":"Para passar para o próximo nível, basta jogar seus jogos favoritos no cassino. Quanto maior o nível, maior o cashback! Os jogadores que atingem o nível mais alto também recebem ofertas exclusivas."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can a promo code be used in the mobile app?"}',
             'value_es' => '{"0":"¿Se puede usar un código promocional en la aplicación móvil?"}',
             'value_fr' => '{"0":"Peut-on utiliser un code promo dans l’application mobile ?"}',
             'value_pt' => '{"0":"É possível usar um código promocional no aplicativo móvel?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all promo codes can be entered during registration or when depositing via the Linebet mobile app."}',
             'value_es' => '{"0":"Sí, todos los códigos promocionales se pueden ingresar durante el registro o al depositar a través de la aplicación móvil de Linebet."}',
             'value_fr' => '{"0":"Oui, tous les codes promo peuvent être saisis lors de l’inscription ou lors d’un dépôt via l’application mobile Linebet."}',
             'value_pt' => '{"0":"Sim, todos os códigos promocionais podem ser inseridos durante o registro ou ao depositar pelo aplicativo móvel Linebet."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 35
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can the bonus be received more than once?"}',
             'value_es' => '{"0":"¿Se puede recibir el bono más de una vez?"}',
             'value_fr' => '{"0":"Peut-on recevoir le bonus plus d’une fois ?"}',
             'value_pt' => '{"0":"É possível receber o bônus mais de uma vez?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 36
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The registration bonus is granted only once."}',
             'value_es' => '{"0":"El bono de registro se otorga solo una vez."}',
             'value_fr' => '{"0":"Le bonus de bienvenue n’est accordé qu’une seule fois."}',
             'value_pt' => '{"0":"O bônus de registro é concedido apenas uma vez."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 37
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"What is the wagering period for casino bonuses?"}',
             'value_es' => '{"0":"¿Cuál es el período de apuesta para los bonos de casino?"}',
             'value_fr' => '{"0":"Quelle est la période de mise pour les bonus de casino ?"}',
             'value_pt' => '{"0":"Qual é o prazo de apostas para os bônus de cassino?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 38
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The wager is 35x the bonus amount, and the wagering period is 7 days."}',
             'value_es' => '{"0":"El requisito de apuesta es de 35 veces el monto del bono, y el período de apuesta es de 7 días."}',
             'value_fr' => '{"0":"Le wagering est de 35 fois le montant du bonus, et la période de mise est de 7 jours."}',
             'value_pt' => '{"0":"O requisito de aposta é de 35 vezes o valor do bônus, e o prazo de aposta é de 7 dias."}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 39
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"How can I find out about current promotions?"}',
             'value_es' => '{"0":"¿Cómo puedo enterarme de las promociones actuales?"}',
             'value_fr' => '{"0":"Comment connaître les promotions en cours ?"}',
             'value_pt' => '{"0":"Como posso saber sobre as promoções atuais?"}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 40
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"All current bonuses and promotions are displayed in the «Bonuses» section on the Linebet website and are updated daily."}',
             'value_es' => '{"0":"Todos los bonos y promociones actuales se muestran en la sección «Bonos» del sitio web de Linebet y se actualizan a diario."}',
             'value_fr' => '{"0":"Tous les bonus et promotions actuels sont affichés dans la section « Bonus » du site Linebet et sont mis à jour quotidiennement."}',
             'value_pt' => '{"0":"Todos os bônus e promoções atuais são exibidos na seção «Bônus» no site da Linebet e são atualizados diariamente."}',
             'order' => 40
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 41
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can I withdraw funds before completing the bonus wagering requirements?"}',
             'value_es' => '{"0":"¿Se pueden retirar los fondos antes de completar los requisitos de apuesta del bono?"}',
             'value_fr' => '{"0":"Peut-on retirer l’argent avant de terminer les conditions de mise du bonus ?"}',
             'value_pt' => '{"0":"É possível sacar o dinheiro antes de completar os requisitos de aposta do bônus?"}',
             'order' => 41
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 42
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"No, funds received as part of a bonus can only be withdrawn after the wagering requirements are met."}',
             'value_es' => '{"0":"No, los fondos recibidos como parte de un bono solo se pueden retirar después de cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Non, les fonds reçus dans le cadre d’un bonus ne peuvent être retirés qu’après avoir rempli les conditions de mise."}',
             'value_pt' => '{"0":"Não, os fundos recebidos como parte de um bônus só podem ser retirados após o cumprimento dos requisitos de aposta."}',
             'order' => 42
            ]
        );
    }
}
