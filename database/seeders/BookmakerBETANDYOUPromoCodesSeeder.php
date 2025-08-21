<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU is an international betting platform that offers a wide range of bonuses and promotions for both new and regular customers. The company is known for its professional approach to sports betting and online casino, as well as regular reward programs that help players increase their potential winnings."}',
             'value_es' => '{"0":"BETANDYOU es una plataforma internacional de apuestas que ofrece una amplia gama de bonos y promociones tanto para nuevos como para clientes habituales. La empresa es reconocida por su enfoque profesional en las apuestas deportivas y en el casino online, así como por sus programas de recompensas regulares que ayudan a los jugadores a aumentar sus posibles ganancias."}',
             'value_fr' => '{"0":"BETANDYOU est une plateforme de paris internationale qui propose un large éventail de bonus et de promotions pour les nouveaux comme pour les clients réguliers. L’entreprise est connue pour son approche professionnelle des paris sportifs et du casino en ligne, ainsi que pour ses programmes de récompenses réguliers qui permettent aux joueurs d’augmenter leurs gains potentiels."}',
             'value_pt' => '{"0":"A BETANDYOU é uma plataforma internacional de apostas que oferece uma ampla variedade de bônus e promoções tanto para novos quanto para clientes regulares. A empresa é conhecida por sua abordagem profissional às apostas esportivas e ao cassino online, além de programas de recompensas regulares que ajudam os jogadores a aumentar seus ganhos potenciais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will look at some of the promotional offers, explain how to use them, and discuss the wagering requirements. We will also explain how to use the promo code :promocode to claim your welcome bonus on your first deposit."}',
             'value_es' => '{"0":"En esta reseña, revisaremos algunas de las ofertas promocionales, explicaremos cómo aprovecharlas y hablaremos de los requisitos de apuesta. También explicaremos cómo utilizar el código promocional :promocode para obtener el bono de bienvenida en tu primer depósito."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons certaines des offres promotionnelles, nous expliquerons comment en profiter et nous détaillerons les conditions de mise. Nous indiquerons également comment utiliser le code promo :promocode afin de recevoir le bonus de bienvenue sur votre premier dépôt."}',
             'value_pt' => '{"0":"Nesta análise, vamos destacar algumas das ofertas promocionais, explicar como utilizá-las e falar sobre os requisitos de aposta. Também explicaremos como usar o código promocional :promocode para garantir o bônus de boas-vindas no seu primeiro depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the BETANDYOU promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de BETANDYOU?"}',
                'value_fr' => '{"0":"Comment profiter du code promo BETANDYOU ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da BETANDYOU?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To activate the promo code :promocode on BETANDYOU, you need to enter it in the corresponding field during registration. To register, follow a few steps:"}',
             'value_es' => '{"0":"Para activar el código promocional :promocode en BETANDYOU, debes introducirlo en el campo correspondiente durante el registro. Para registrarte, sigue unos sencillos pasos:"}',
             'value_fr' => '{"0":"Pour activer le code promo :promocode sur BETANDYOU, il faut le saisir dans le champ prévu à cet effet lors de l’inscription. Pour vous inscrire, suivez quelques étapes :"}',
             'value_pt' => '{"0":"Para ativar o código promocional :promocode na BETANDYOU, é necessário inseri-lo no campo correspondente durante o registro. Para se registrar, siga alguns passos:"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"1. Go to the official BETANDYOU website and click on “Registration”. Choose how you want to register: by phone number or by email."}',
             'value_es' => '{"0":"1. Ve al sitio web oficial de BETANDYOU y haz clic en «Registro». Elige cómo deseas registrarte: por número de teléfono o por correo electrónico."}',
             'value_fr' => '{"0":"1. Rendez-vous sur le site officiel de BETANDYOU et cliquez sur « Inscription ». Choisissez votre méthode d’inscription : par numéro de téléphone ou par email."}',
             'value_pt' => '{"0":"1. Acesse o site oficial da BETANDYOU e clique em «Registro». Escolha como deseja se registrar: pelo número de telefone ou pelo e-mail."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"2. If registering by phone number, enter your number and confirm it via an SMS message."}',
             'value_es' => '{"0":"2. En caso de registro por número de teléfono, introduce tu número y confírmalo mediante un mensaje SMS."}',
             'value_fr' => '{"0":"2. En cas d’inscription par numéro de téléphone, saisissez votre numéro et confirmez-le via un SMS."}',
             'value_pt' => '{"0":"2. No caso de registro pelo número de telefone, insira o número e confirme-o por meio de uma mensagem SMS."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"3. Select the account currency and fill in your personal details: first name, last name, date of birth, and permanent address."}',
             'value_es' => '{"0":"3. Introduce el código promocional :promocode y elige dónde quieres usar los fondos de bonificación."}',
             'value_fr' => '{"0":"3. Sélectionnez la devise du compte et complétez vos informations personnelles : prénom, nom, date de naissance et adresse de résidence permanente."}',
             'value_pt' => '{"0":"3. Selecione a moeda da conta e preencha seus dados pessoais: nome, sobrenome, data de nascimento e endereço de residência permanente."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"4. Enter the promo code :promocode and choose where you want to use the bonus funds. You can select casino and games, free bets, or sports betting."}',
             'value_es' => '{"0":"4. Introduce el código promocional :promocode y elige dónde quieres usar los fondos de bonificación. Puedes seleccionar casino y juegos, apuestas gratis o apuestas deportivas."}',
             'value_fr' => '{"0":"4. Saisissez le code promo :promocode et choisissez où vous souhaitez utiliser les fonds bonus. Vous pouvez opter pour le casino et les jeux, les paris gratuits ou les paris sportifs."}',
             'value_pt' => '{"0":"4. Insira o código promocional :promocode e escolha onde deseja usar os fundos de bônus. Você pode selecionar cassino e jogos, apostas grátis ou apostas esportivas."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"After completing the registration and making your first deposit, the bonus will be automatically credited to your account. Please note that the bonus amount depends on the size of your first deposit."}',
             'value_es' => '{"0":"Después de completar el registro y realizar tu primer depósito, el bono se acreditará automáticamente en tu cuenta. Ten en cuenta que el monto del bono depende de la cantidad de tu primer depósito."}',
             'value_fr' => '{"0":"Après avoir terminé l’inscription et effectué votre premier dépôt, le bonus sera automatiquement crédité sur votre compte. Veuillez noter que le montant du bonus dépend du montant de votre premier dépôt."}',
             'value_pt' => '{"0":"Após concluir o registro e realizar o primeiro depósito, o bônus será creditado automaticamente na sua conta. Observe que o valor do bônus depende do valor do primeiro depósito."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Keep in mind that in order to withdraw the bonus funds, you must first meet the wagering requirements. To receive a 100% bonus for sports betting, you need to deposit from $1 to $120. The sports bonus must be wagered 5 times using accumulators with at least three events, and each event must have odds of no less than 1.40. The wagering period is up to 30 days."}',
             'value_es' => '{"0":"Recuerda que para poder retirar los fondos del bono primero debes cumplir con los requisitos de apuesta. Para recibir un bono del 100% en apuestas deportivas, es necesario depositar entre $1 y $120. El bono deportivo debe apostarse 5 veces en apuestas combinadas con al menos tres eventos, y cada evento debe tener una cuota mínima de 1.40. El plazo para completar la apuesta es de hasta 30 días."}',
             'value_fr' => '{"0":"Gardez à l’esprit que pour retirer les fonds bonus, il est d’abord nécessaire de remplir les conditions de mise. Pour obtenir un bonus de 100 % pour les paris sportifs, il faut effectuer un dépôt compris entre 1 $ et 120 $. Le bonus sportif doit être misé 5 fois sur des paris combinés comprenant au moins trois événements, chacun avec une cote minimale de 1,40. Le délai de mise est de 30 jours maximum."}',
             'value_pt' => '{"0":"É importante lembrar que, para sacar os fundos do bônus, é necessário cumprir os requisitos de aposta. Para receber um bônus de 100% em apostas esportivas, é preciso depositar entre $1 e $120. O bônus esportivo deve ser apostado 5 vezes em acumuladores com pelo menos três eventos, e cada evento deve ter uma odd mínima de 1,40. O prazo para cumprir os requisitos é de até 30 dias."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To receive a 100% bonus for casino play, you need to deposit from $10 to $1500. The casino bonus must be wagered 35 times within 7 days. Also, the bet amount must not exceed $5."}',
             'value_es' => '{"0":"Para recibir un bono del 100% en el casino, es necesario depositar entre $10 y $1500. El bono de casino debe apostarse 35 veces en un plazo de 7 días. Además, la apuesta no debe superar los $5."}',
             'value_fr' => '{"0":"Pour obtenir un bonus de 100 % pour le casino, il faut déposer entre 10 $ et 1500 $. Le bonus casino doit être misé 35 fois en 7 jours. De plus, la mise ne doit pas dépasser 5 $."}',
             'value_pt' => '{"0":"Para receber um bônus de 100% no cassino, é preciso depositar entre $10 e $1500. O bônus de cassino deve ser apostado 35 vezes dentro de 7 dias. Além disso, a aposta não deve ultrapassar $5."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, BETANDYOU does not offer classic no deposit bonuses. However, you can take part in various promotions for regular players, which will also allow you to significantly increase your winnings."}',
             'value_es' => '{"0":"En este momento, BETANDYOU no ofrece bonos clásicos sin depósito. Sin embargo, puedes participar en diversas promociones para jugadores habituales, lo que también te permitirá aumentar significativamente tus ganancias."}',
             'value_fr' => '{"0":"Actuellement, BETANDYOU ne propose pas de bonus classiques sans dépôt. Cependant, vous pouvez participer à diverses promotions pour les joueurs réguliers, ce qui vous permettra également d’augmenter considérablement vos gains."}',
             'value_pt' => '{"0":"No momento, a BETANDYOU não oferece bônus clássicos sem depósito. No entanto, você pode participar de várias promoções para jogadores regulares, o que também permitirá aumentar significativamente os seus ganhos."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at BETANDYOU?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en BETANDYOU?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur BETANDYOU ?"}',
                'value_pt' => '{"0":"E se você já for registrado na BETANDYOU?"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, BETANDYOU regularly runs promotions for active players. These include bonuses on repeat deposits, special offers for sports betting and casino, as well as loyalty programs for regular customers. You can find the full list of current promotional offers in the PROMO section. Below, we will look at some of them."}',
             'value_es' => '{"0":"Sí, BETANDYOU organiza regularmente promociones para jugadores activos. Estas incluyen bonos por depósitos repetidos, ofertas especiales para apuestas deportivas y casino, así como programas de fidelidad para clientes habituales. Puedes consultar la lista completa de ofertas promocionales vigentes en la sección PROMO. A continuación, revisaremos algunas de ellas."}',
             'value_fr' => '{"0":"Oui, BETANDYOU organise régulièrement des promotions pour les joueurs actifs. Celles-ci incluent des bonus sur les dépôts répétés, des offres spéciales pour les paris sportifs et le casino, ainsi que des programmes de fidélité pour les clients réguliers. Vous pouvez consulter la liste complète des offres promotionnelles actuelles dans la section PROMO. Nous allons en examiner quelques-unes ci-dessous."}',
             'value_pt' => '{"0":"Sim, a BETANDYOU realiza regularmente promoções para jogadores ativos. Elas incluem bônus em depósitos repetidos, ofertas especiais para apostas esportivas e cassino, bem como programas de fidelidade para clientes regulares. Você pode consultar a lista completa de ofertas promocionais atuais na seção PROMO. A seguir, analisaremos algumas delas."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Free bet on your first deposit"}',
                'value_es' => '{"0":"Apuesta gratis con su primer depósito"}',
                'value_fr' => '{"0":"Pari gratuit sur votre premier dépôt"}',
                'value_pt' => '{"0":"Aposta grátis no seu primeiro depósito"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"This offer allows you to receive free bets after your first deposit. To activate it, simply make a deposit of at least $55 and you will receive a special promo code."}',
             'value_es' => '{"0":"Esta oferta te permite recibir apuestas gratuitas después de tu primer depósito. Para activarla, simplemente haz un depósito de al menos 55 $ y recibirás un código promocional especial."}',
             'value_fr' => '{"0":"Cette offre vous permet de recevoir des paris gratuits après votre premier dépôt. Pour l’activer, il suffit d’effectuer un dépôt d’au moins 55 $ et vous recevrez un code promo spécial."}',
             'value_pt' => '{"0":"Esta oferta permite receber apostas grátis após o primeiro depósito. Para ativá-la, basta fazer um depósito de pelo menos 55 $ e você receberá um código promocional especial."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Then, just place an accumulator bet with at least 4 events and odds higher than 1.6 using the received promo code. The bonus can be used within 30 days from the date of registration."}',
             'value_es' => '{"0":"Luego, solo realiza una apuesta combinada con un mínimo de 4 eventos y cuotas superiores a 1.6 utilizando el código promocional recibido. El bono puede utilizarse dentro de los 30 días posteriores a la fecha de registro."}',
             'value_fr' => '{"0":"Ensuite, placez simplement un pari combiné d’au moins 4 événements avec une cote supérieure à 1.6 en utilisant le code promo reçu. Le bonus peut être utilisé dans les 30 jours suivant la date d’inscription."}',
             'value_pt' => '{"0":"Em seguida, basta fazer uma aposta múltipla com no mínimo 4 eventos e odds superiores a 1.6 utilizando o código promocional recebido. O bônus pode ser utilizado dentro de 30 dias a partir da data de registro."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"REFER A MOBCASH AGENT"}',
                'value_es' => '{"0":"RECOMIENDE A UN AGENTE MOBCASH"}',
                'value_fr' => '{"0":"REFER A MOBCASH AGENT"}',
                'value_pt' => '{"0":"REFIRA UM AGENTE MOBCASH"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The referral program allows you to receive a bonus for inviting friends to the platform. Once your friend registers and makes a deposit of at least $500 within a month, you will receive a $100 bonus. It is important that invited users have not previously had accounts on the platform."}',
             'value_es' => '{"0":"El programa de referidos te permite recibir un bono por invitar a tus amigos a la plataforma. Una vez que tu amigo se registre y haga un depósito de al menos 500 $ en un mes, recibirás un bono de 100 $. Es importante que los usuarios invitados no hayan tenido cuentas previamente en la plataforma."}',
             'value_fr' => '{"0":"Le programme de parrainage vous permet de recevoir un bonus pour avoir invité des amis sur la plateforme. Une fois que votre ami s’inscrit et effectue un dépôt d’au moins 500 $ au cours d’un mois, vous recevrez un bonus de 100 $. Il est important que les utilisateurs invités n’aient pas déjà eu de comptes sur la plateforme."}',
             'value_pt' => '{"0":"O programa de indicação permite receber um bônus por convidar amigos para a plataforma. Assim que o seu amigo se registrar e fizer um depósito de pelo menos 500 $ em um mês, você receberá um bônus de 100 $. É importante que os usuários convidados não tenham tido contas anteriormente na plataforma."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Advancebet"}',
                'value_es' => '{"0":"Advancebet"}',
                'value_fr' => '{"0":"Advancebet"}',
                'value_pt' => '{"0":"Apostaconfiança"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Advancebet allows you to place a bet even if your balance is temporarily insufficient. The platform provides a credit equal to the potential winnings from your active bets. To participate, you must have at least one active bet, and the use of credited funds is only possible for bets with odds of 1.50 or higher."}',
             'value_es' => '{"0":"Advancebet te permite realizar una apuesta incluso si tu saldo es temporalmente insuficiente. La plataforma otorga un crédito equivalente a las ganancias potenciales de tus apuestas activas. Para participar, debes tener al menos una apuesta activa, y el uso de los fondos acreditados solo es posible en apuestas con una cuota de 1.50 o superior."}',
             'value_fr' => '{"0":"Advancebet vous permet de placer un pari même si votre solde est temporairement insuffisant. La plateforme accorde un crédit correspondant aux gains potentiels de vos paris actifs. Pour participer, vous devez avoir au moins un pari actif, et l’utilisation des fonds crédités n’est possible que pour des paris avec une cote de 1.50 ou plus."}',
             'value_pt' => '{"0":"O Apostaconfiança permite fazer uma aposta mesmo que o saldo esteja temporariamente insuficiente. A plataforma concede um crédito equivalente aos ganhos potenciais das suas apostas ativas. Para participar, é necessário ter pelo menos uma aposta ativa, e o uso dos fundos creditados só é possível em apostas com odds de 1.50 ou superiores."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple promo codes be used at the same time?"}',
             'value_es' => '{"0":"¿Se pueden usar varios códigos promocionales al mismo tiempo?"}',
             'value_fr' => '{"0":"Est-il possible d’utiliser plusieurs codes promotionnels en même temps ?"}',
             'value_pt' => '{"0":"É possível utilizar vários códigos promocionais ao mesmo tempo?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"No, BETANDYOU allows you to activate only one promo code at a time."}',
             'value_es' => '{"0":"No, BETANDYOU permite activar solo un código promocional a la vez."}',
             'value_fr' => '{"0":"Non, BETANDYOU permet d’activer un seul code promotionnel à la fois."}',
             'value_pt' => '{"0":"Não, o BETANDYOU permite ativar apenas um código promocional de cada vez."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take for the bonus to be credited?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda en acreditarse el bono?"}',
             'value_fr' => '{"0":"Combien de temps faut-il pour que le bonus soit crédité ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para o bônus ser creditado?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Deposit bonuses are usually credited instantly after funding the account."}',
             'value_es' => '{"0":"Los bonos por depósito generalmente se acreditan de manera instantánea después de recargar la cuenta."}',
             'value_fr' => '{"0":"Les bonus de dépôt sont généralement crédités instantanément après le dépôt sur le compte."}',
             'value_pt' => '{"0":"Os bônus de depósito geralmente são creditados instantaneamente após o depósito na conta."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"What happens if I don’t wager the bonus within the set period?"}',
             'value_es' => '{"0":"¿Qué sucede si no apuesto el bono dentro del plazo establecido?"}',
             'value_fr' => '{"0":"Que se passe-t-il si je ne mise pas le bonus dans le délai imparti ?"}',
             'value_pt' => '{"0":"O que acontece se eu não apostar o bônus dentro do prazo estabelecido?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 33
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Unwagered bonuses are automatically removed after the wagering period expires."}',
             'value_es' => '{"0":"Los bonos no apostados se eliminan automáticamente una vez que vence el plazo de apuesta."}',
             'value_fr' => '{"0":"Les bonus non misés sont automatiquement supprimés à l’expiration de la période de mise."}',
             'value_pt' => '{"0":"Bônus não apostados são removidos automaticamente após o término do período de apostas."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 34
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Can the bonus be used for live bets?"}',
             'value_es' => '{"0":"¿Se puede apostar el bono en apuestas en vivo?"}',
             'value_fr' => '{"0":"Peut-on utiliser le bonus pour les paris en direct ?"}',
             'value_pt' => '{"0":"É possível usar o bônus em apostas ao vivo?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 35
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, sports betting bonuses can be used in live mode."}',
             'value_es' => '{"0":"Sí, los bonos para apuestas deportivas se pueden usar en modo en vivo."}',
             'value_fr' => '{"0":"Oui, les bonus pour les paris sportifs peuvent être utilisés en mode live."}',
             'value_pt' => '{"0":"Sim, os bônus para apostas esportivas podem ser usados no modo ao vivo."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 36
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses available for regular casino players?"}',
             'value_es' => '{"0":"¿Están disponibles los bonos para jugadores habituales del casino?"}',
             'value_fr' => '{"0":"Les bonus sont-ils disponibles pour les joueurs réguliers du casino ?"}',
             'value_pt' => '{"0":"Os bônus estão disponíveis para jogadores regulares do cassino?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 37
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the casino offers reload bonuses, free spins, and VIP rewards."}',
             'value_es' => '{"0":"Sí, el casino ofrece bonos de recarga, giros gratis y recompensas VIP."}',
             'value_fr' => '{"0":"Oui, le casino propose des bonus de recharge, des tours gratuits et des récompenses VIP."}',
             'value_pt' => '{"0":"Sim, o cassino oferece bônus de recarga, rodadas grátis e recompensas VIP."}',
             'order' => 37
            ]
        );
    }
}
