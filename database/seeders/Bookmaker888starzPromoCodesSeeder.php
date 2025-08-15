<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz has quickly established itself on the international bookmaker market thanks to the combination of sports betting and a casino section. One of the key factors of the platform’s appeal is its system of bonuses and promo codes. It allows you to receive additional funds, free spins, and cashback, giving you the opportunity to significantly increase your winnings."}',
             'value_es' => '{"0":"888starz se ha consolidado rápidamente en el mercado internacional de casas de apuestas gracias a la combinación de apuestas deportivas y una sección de casino. Uno de los factores clave de atractivo del servicio es su sistema de bonos y códigos promocionales. Esto permite recibir fondos adicionales, giros gratis y cashback, brindándole la oportunidad de aumentar significativamente sus ganancias."}',
             'value_fr' => '{"0":"888starz s’est rapidement imposé sur le marché international des bookmakers grâce à la combinaison des paris sportifs et d’une section casino. L’un des facteurs clés de l’attrait du service est son système de bonus et de codes promotionnels. Il permet de recevoir des fonds supplémentaires, des tours gratuits et du cashback, offrant ainsi la possibilité d’augmenter considérablement vos gains."}',
             'value_pt' => '{"0":"888starz rapidamente se destacou no mercado internacional de apostas graças à combinação de apostas esportivas e seção de cassino. Um dos principais fatores de atratividade do serviço é o sistema de bônus e códigos promocionais. Ele permite receber fundos adicionais, rodadas grátis e cashback, oferecendo a oportunidade de aumentar significativamente seus ganhos."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will look at the current promotions and bonuses. We will also explain how to activate the promo code :promocode and get an enhanced welcome bonus for sports betting or casino games."}',
             'value_es' => '{"0":"En esta reseña, analizaremos las promociones y bonos actuales. También explicaremos cómo activar el código promocional :promocode y obtener un bono de bienvenida mejorado para apuestas deportivas o juegos de casino."}',
             'value_fr' => '{"0":"Dans cet avis, nous examinerons les promotions et bonus actuels. Nous expliquerons également comment activer le code promo :promocode et obtenir un bonus de bienvenue amélioré pour les paris sportifs ou les jeux de casino."}',
             'value_pt' => '{"0":"Nesta análise, veremos as promoções e bônus atuais. Também explicaremos como ativar o código promocional :promocode e obter um bônus de boas-vindas melhorado para apostas esportivas ou jogos de cassino."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the MelBet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de MelBet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo MelBet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da MelBet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To activate the bonus, you first need to create an account on 888starz. To do this, go to the official website and click the «Register» button. You can sign up via email, phone number, social networks, or in one click. During the registration form, be sure to find the «Promo Code» field and enter our promo code :promocode before confirming the account creation. At this stage, also indicate where you will use the bonus funds, for sports betting or casino games."}',
             'value_es' => '{"0":"Para activar el bono, primero debe crear una cuenta en 888starz. Para ello, vaya al sitio web oficial y haga clic en el botón «Registrarse». Puede registrarse mediante correo electrónico, número de teléfono, redes sociales o con un solo clic. Durante el llenado del formulario, asegúrese de encontrar el campo «Código promocional» e ingrese nuestro código :promocode antes de confirmar la creación de la cuenta. En esta etapa, también indique dónde usará los fondos del bono, para apuestas deportivas o juegos de casino."}',
             'value_fr' => '{"0":"Pour activer le bonus, vous devez d’abord créer un compte sur 888starz. Pour ce faire, rendez-vous sur le site officiel et cliquez sur le bouton « S’inscrire ». Vous pouvez vous inscrire par e-mail, numéro de téléphone, réseaux sociaux ou en un clic. Lors du remplissage du formulaire, assurez-vous de trouver le champ « Code promo » et entrez notre code :promocode avant de confirmer la création du compte. À cette étape, indiquez également où vous utiliserez les fonds du bonus, pour les paris sportifs ou le casino."}',
             'value_pt' => '{"0":"Para ativar o bônus, primeiro você precisa criar uma conta no 888starz. Para isso, acesse o site oficial e clique no botão «Registrar». Você pode se inscrever por e-mail, número de telefone, redes sociais ou com um clique. Durante o preenchimento do formulário, certifique-se de encontrar o campo «Código promocional» e insira nosso código :promocode antes de confirmar a criação da conta. Nesta etapa, também indique onde você usará os fundos do bônus, para apostas esportivas ou jogos de cassino."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"After activating the promo code, the bonus funds will be automatically credited to your account. For sports bets, the bonus must be wagered through accumulator bets with at least three events and odds of 1.40 or higher. The wagering period is 30 days."}',
             'value_es' => '{"0":"Después de activar el código promocional, los fondos del bono se acreditarán automáticamente en su cuenta. Para las apuestas deportivas, el bono debe apostarse mediante apuestas combinadas con al menos tres eventos y cuotas de 1.40 o superiores. El período de apuesta es de 30 días."}',
             'value_fr' => '{"0":"Après l’activation du code promo, les fonds du bonus seront automatiquement crédités sur votre compte. Pour les paris sportifs, le bonus doit être misé via des paris combinés avec au moins trois événements et des cotes de 1,40 ou plus. La période de mise est de 30 jours."}',
             'value_pt' => '{"0":"Após ativar o código promocional, os fundos do bônus serão automaticamente creditados em sua conta. Para apostas esportivas, o bônus deve ser apostado em apostas acumuladoras com pelo menos três eventos e odds de 1,40 ou superiores. O prazo para o rollover é de 30 dias."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For the casino, bonuses have a x35 wagering requirement, which must be rolled over on the slots participating in the promotion. Other games, such as live casino and jackpots, do not count. The wagering period for the casino is 7 days."}',
             'value_es' => '{"0":"Para el casino, los bonos tienen un requisito de apuesta de x35, que debe cumplirse en los tragamonedas participantes de la promoción. Otros juegos, como el casino en vivo y los jackpots, no cuentan. El período de apuesta para el casino es de 7 días."}',
             'value_fr' => '{"0":"Pour le casino, les bonus ont un wager x35, qui doit être utilisé sur les machines à sous participant à la promotion. Les autres jeux, comme le casino en direct et les jackpots, ne sont pas pris en compte. La période de mise pour le casino est de 7 jours."}',
             'value_pt' => '{"0":"Para o cassino, os bônus têm um requisito de apostas x35, que deve ser cumprido nos slots participantes da promoção. Outros jogos, como cassino ao vivo e jackpots, não são contabilizados. O prazo de rollover para o cassino é de 7 dias."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"At the time of this review, 888starz does not offer any no-deposit bonuses. All current promotions and bonuses require at least a minimum deposit to activate, which is standard practice for many international bookmakers."}',
             'value_es' => '{"0":"Al momento de esta reseña, 888starz no ofrece bonos sin depósito. Todas las promociones y bonos actuales requieren al menos un depósito mínimo para activarse, lo cual es una práctica estándar entre muchos corredores internacionales."}',
             'value_fr' => '{"0":"Au moment de cette revue, 888starz ne propose pas de bonus sans dépôt. Toutes les promotions et bonus actuels nécessitent au moins un dépôt minimum pour être activés, ce qui est une pratique courante chez de nombreux bookmakers internationaux."}',
             'value_pt' => '{"0":"No momento desta análise, o 888starz não oferece bônus sem depósito. Todas as promoções e bônus atuais exigem pelo menos um depósito mínimo para serem ativados, o que é uma prática padrão entre muitos bookmakers internacionais."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 888starz?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 888starz?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 888starz ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 888starz?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform regularly offers promotions and bonuses for regular customers. These can include cashback, free spins, deposit bonuses, as well as special promo codes for specific types of bets or casino games. Below, we will describe some of them."}',
             'value_es' => '{"0":"Sí, la plataforma ofrece regularmente promociones y bonos para clientes habituales. Estos pueden incluir cashback, giros gratis, bonos de depósito, así como códigos promocionales especiales para ciertos tipos de apuestas o juegos de casino. A continuación, describiremos algunos de ellos."}',
             'value_fr' => '{"0":"Oui, la plateforme propose régulièrement des promotions et des bonus pour les clients réguliers. Ceux-ci peuvent inclure du cashback, des tours gratuits, des bonus de dépôt, ainsi que des codes promotionnels spéciaux pour certains types de paris ou jeux de casino. Ci-dessous, nous en présenterons quelques-uns."}',
             'value_pt' => '{"0":"Sim, a plataforma oferece regularmente promoções e bônus para clientes regulares. Isso pode incluir cashback, rodadas grátis, bônus de depósito, bem como códigos promocionais especiais para tipos específicos de apostas ou jogos de cassino. A seguir, vamos detalhar alguns deles."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome package up to 1500 EUR + 150 FS"}',
                'value_es' => '{"0":"Paquete de bienvenida de hasta 1500 EUR + 150 FS"}',
                'value_fr' => '{"0":"Pack de bienvenue jusqu\'à 1500 EUR + 150 FS"}',
                'value_pt' => '{"0":"Pacote de boas-vindas de até 1500 EUR + 150 FS"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is intended for new players. It offers a welcome package of up to 1500 EUR and 150 free spins on popular slots. To receive the bonus, you need to make a minimum deposit and activate the promo code :promocode during registration."}',
             'value_es' => '{"0":"Esta promoción está dirigida a nuevos jugadores. Ofrece un paquete de bienvenida de hasta 1500 EUR y 150 giros gratis en tragamonedas populares. Para recibir el bono, debes realizar un depósito mínimo y activar el código promocional :promocode durante el registro."}',
             'value_fr' => '{"0":"Cette promotion est destinée aux nouveaux joueurs. Elle propose un package de bienvenue allant jusqu’à 1500 EUR et 150 tours gratuits sur des machines à sous populaires. Pour recevoir le bonus, vous devez effectuer un dépôt minimum et activer le code promo :promocode lors de l’inscription."}',
             'value_pt' => '{"0":"Esta promoção destina-se a novos jogadores. Oferece um pacote de boas-vindas de até 1500 EUR e 150 rodadas grátis em slots populares. Para receber o bônus, você precisa fazer um depósito mínimo e ativar o código promocional :promocode durante o registro."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw funds, the bonus must be wagered 35 times on slots from the list of promotional games within 7 days. Free spins provide an additional opportunity to try popular slots without spending your own money."}',
             'value_es' => '{"0":"Para retirar los fondos, el bono debe apostarse 35 veces en las tragamonedas de la lista de juegos promocionales dentro de los 7 días. Los giros gratis ofrecen una oportunidad adicional de probar las tragamonedas populares sin gastar tu propio dinero."}',
             'value_fr' => '{"0":"Pour retirer les fonds, le bonus doit être misé 35 fois sur les machines à sous de la liste des jeux promotionnels dans les 7 jours. Les tours gratuits offrent une opportunité supplémentaire de découvrir les machines à sous populaires sans dépenser votre argent."}',
             'value_pt' => '{"0":"Para sacar os fundos, o bônus deve ser apostado 35 vezes em slots da lista de jogos promocionais dentro de 7 dias. As rodadas grátis oferecem uma oportunidade adicional de experimentar slots populares sem gastar seu próprio dinheiro."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"You can receive bonuses and free spins for depositing:"}',
             'value_es' => '{"0":"Puedes recibir bonos y giros gratis al depositar:"}',
             'value_fr' => '{"0":"Vous pouvez recevoir des bonus et des tours gratuits en effectuant un dépôt :"}',
             'value_pt' => '{"0":"Você pode receber bônus e rodadas grátis ao depositar:"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'list_v2',
             'value_en' => '{"0":"For the 1st deposit – 100% and 30 FS",
                             "1":"For the 2nd deposit – 50% and 35 FS",
                             "2":"For the 3rd deposit – 25% and 40 FS",
                             "3":"For the 4th deposit – 25% and 45 FS"}',
             'value_es' => '{"0":"Por el 1er depósito – 100% y 30 giros gratis",
                             "1":"Por el 2º depósito – 50% y 35 giros gratis",
                             "2":"Por el 3er depósito – 25% y 40 giros gratis",
                             "3":"Por el 4º depósito – 25% y 45 giros gratis"}',
             'value_fr' => '{"0":"Pour le 1er dépôt – 100% et 30 tours gratuits",
                             "1":"Pour le 2ème dépôt – 50% et 35 tours gratuits",
                             "2":"Pour le 3ème dépôt – 25% et 40 tours gratuits",
                             "3":"Pour le 4ème dépôt – 25% et 45 tours gratuits"}',
             'value_pt' => '{"0":"No 1º depósito – 100% e 30 rodadas grátis",
                             "1":"No 2º depósito – 50% e 35 rodadas grátis",
                             "2":"No 3º depósito – 25% e 40 rodadas grátis",
                             "3":"No 4º depósito – 25% e 45 rodadas grátis"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Cashback"}',
                'value_es' => '{"0":"Devolución VIP en Casino"}',
                'value_fr' => '{"0":"Cashback VIP Casino"}',
                'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For regular players, a casino cashback is available. The amount of cashback depends on your status in the VIP program. The bonus is credited weekly and does not require wagering conditions for withdrawal, making it a convenient way to minimize risks and get a portion of lost funds back."}',
             'value_es' => '{"0":"Para los jugadores habituales, hay disponible un cashback de casino. La cantidad de cashback depende de su estatus en el programa VIP. El bono se acredita semanalmente y no requiere cumplir condiciones de apuesta para retirarlo, lo que lo convierte en una forma conveniente de minimizar riesgos y recuperar parte de los fondos perdidos."}',
             'value_fr' => '{"0":"Pour les joueurs réguliers, un cashback de casino est disponible. Le montant du cashback dépend de votre statut dans le programme VIP. Le bonus est crédité chaque semaine et ne nécessite pas de conditions de mise pour le retrait, ce qui en fait un moyen pratique de minimiser les risques et de récupérer une partie des fonds perdus."}',
             'value_pt' => '{"0":"Para jogadores regulares, está disponível cashback no cassino. O valor do cashback depende do seu status no programa VIP. O bônus é creditado semanalmente e não requer condições de aposta para saque, tornando-se uma maneira conveniente de minimizar riscos e recuperar parte dos fundos perdidos."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Sunday Boom"}',
                'value_es' => '{"0":"Domingo explosivo"}',
                'value_fr' => '{"0":"Boum du dimanche"}',
                'value_pt' => '{"0":"Explosão de Domingo"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The Sunday Boom promotion gives you the opportunity to receive extra bonuses on Sunday for sports bets or casino activity. To take advantage of the offer, simply place bets on promotional events on Sunday, and the bonus funds are credited automatically."}',
             'value_es' => '{"0":"La promoción Sunday Boom ofrece la oportunidad de recibir bonos adicionales los domingos por apuestas deportivas o actividad en el casino. Para aprovechar la oferta, solo hay que realizar apuestas en los eventos promocionales los domingos, y los fondos de bonificación se acreditan automáticamente."}',
             'value_fr' => '{"0":"La promotion Sunday Boom offre la possibilité de recevoir des bonus supplémentaires le dimanche pour les paris sportifs ou l’activité au casino. Pour profiter de l’offre, il suffit de placer des paris sur les événements promotionnels le dimanche, et les fonds bonus sont crédités automatiquement."}',
             'value_pt' => '{"0":"A promoção Sunday Boom oferece a oportunidade de receber bônus extras aos domingos por apostas esportivas ou atividade no cassino. Para aproveitar a oferta, basta fazer apostas nos eventos promocionais aos domingos, e os fundos de bônus são creditados automaticamente."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Celebrate your birthday with 888starz"}',
                'value_es' => '{"0":"Celebre su cumpleaños con 888starz"}',
                'value_fr' => '{"0":"Fêtez votre anniversaire avec 888starz"}',
                'value_pt' => '{"0":"Celebre o seu aniversário com a 888starz"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz celebrates players’ birthdays with a special bonus. To receive it, you need to verify your date of birth in your profile. You can get bonus funds or free spins, which can be wagered on slots or sports bets."}',
             'value_es' => '{"0":"888starz celebra el cumpleaños de los jugadores con un bono especial. Para recibirlo, debes verificar tu fecha de nacimiento en tu perfil. Podrás obtener fondos de bono o giros gratis, que se pueden apostar en tragamonedas o apuestas deportivas."}',
             'value_fr' => '{"0":"888starz fête l’anniversaire des joueurs avec un bonus spécial. Pour le recevoir, vous devez confirmer votre date de naissance dans votre profil. Vous pouvez recevoir des fonds bonus ou des tours gratuits, qui peuvent être misés sur les machines à sous ou les paris sportifs."}',
             'value_pt' => '{"0":"888starz celebra o aniversário dos jogadores com um bônus especial. Para recebê-lo, é necessário confirmar a data de nascimento no seu perfil. Você poderá receber fundos de bônus ou giros grátis, que podem ser apostados em slots ou apostas esportivas."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple promo codes be activated at the same time?"}',
             'value_es' => '{"0":"¿Se pueden activar varios códigos promocionales al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on activer plusieurs codes promotionnels en même temps ?"}',
             'value_pt' => '{"0":"É possível ativar vários códigos promocionais ao mesmo tempo?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"No, you can only activate one bonus in the sports betting or casino category."}',
             'value_es' => '{"0":"No, solo se puede activar un bono en la categoría de apuestas deportivas o casino."}',
             'value_fr' => '{"0":"Non, vous ne pouvez activer qu’un seul bonus dans la catégorie paris sportifs ou casino."}',
             'value_pt' => '{"0":"Não, é possível ativar apenas um bônus na categoria de apostas esportivas ou cassino."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit to activate a bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo para activar un bono?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum pour activer un bonus ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo para ativar um bônus?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is $1 or the equivalent in another currency. The bonus is calculated based on the deposit amount, so the higher the deposit, the bigger the bonus you receive."}',
             'value_es' => '{"0":"El depósito mínimo es de $1 o su equivalente en otra moneda. El bono se calcula en función del monto del depósito, por lo que cuanto mayor sea el depósito, mayor será el bono que recibas."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 $ ou l’équivalent dans une autre devise. Le bonus est calculé en fonction du montant du dépôt, donc plus le dépôt est élevé, plus le bonus que vous recevrez sera important."}',
             'value_pt' => '{"0":"O depósito mínimo é de $1 ou o equivalente em outra moeda. O bônus é calculado com base no valor do depósito, portanto, quanto maior o depósito, maior será o bônus que você receberá."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"How much time is given to wager the bonus?"}',
             'value_es' => '{"0":"¿Cuánto tiempo se tiene para apostar el bono?"}',
             'value_fr' => '{"0":"Combien de temps a-t-on pour miser le bonus ?"}',
             'value_pt' => '{"0":"Quanto tempo é dado para apostar o bônus?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For the casino, the wagering period is 7 days, and for sports betting — 30 days from the moment the bonus is activated."}',
             'value_es' => '{"0":"Para el casino, el período de apuesta es de 7 días, y para las apuestas deportivas, de 30 días desde el momento en que se activa el bono."}',
             'value_fr' => '{"0":"Pour le casino, la période de mise est de 7 jours, et pour les paris sportifs — 30 jours à partir du moment où le bonus est activé."}',
             'value_pt' => '{"0":"Para o cassino, o período de aposta é de 7 dias, e para apostas esportivas — 30 dias a partir do momento em que o bônus é ativado."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 34
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Is it possible to withdraw bonus funds without wagering?"}',
             'value_es' => '{"0":"¿Se pueden retirar los fondos del bono sin cumplir los requisitos de apuesta?"}',
             'value_fr' => '{"0":"Est-il possible de retirer les fonds bonus sans remplir les conditions de mise ?"}',
             'value_pt' => '{"0":"É possível sacar os fundos do bônus sem cumprir os requisitos de aposta?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 35
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"No, you must first meet all wagering requirements. Only after that will the bonus funds and winnings become available for withdrawal."}',
             'value_es' => '{"0":"No, primero debe cumplir con todos los requisitos de apuesta. Solo después de eso, los fondos del bono y las ganancias estarán disponibles para retirar."}',
             'value_fr' => '{"0":"Non, vous devez d’abord remplir toutes les conditions de mise. Ce n’est qu’après cela que les fonds bonus et les gains seront disponibles pour retrait."}',
             'value_pt' => '{"0":"Não, você deve primeiro cumprir todos os requisitos de aposta. Só depois disso os fundos do bônus e os ganhos estarão disponíveis para saque."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 36
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Do promo codes work in the mobile app?"}',
             'value_es' => '{"0":"¿Funcionan los códigos promocionales en la aplicación móvil?"}',
             'value_fr' => '{"0":"Les codes promo fonctionnent-ils dans l’application mobile ?"}',
             'value_pt' => '{"0":"Os códigos promocionais funcionam no aplicativo móvel?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 37
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all current promotions and promo codes are available both on the desktop version of the site and in the 888starz mobile app. Activation works the same way."}',
             'value_es' => '{"0":"Sí, todas las promociones y códigos promocionales actuales están disponibles tanto en la versión de escritorio del sitio como en la aplicación móvil de 888starz. La activación funciona de la misma manera."}',
             'value_fr' => '{"0":"Oui, toutes les promotions et codes promo actuels sont disponibles à la fois sur la version de bureau du site et dans l’application mobile 888starz. L’activation se fait de la même manière."}',
             'value_pt' => '{"0":"Sim, todas as promoções e códigos promocionais atuais estão disponíveis tanto na versão para desktop do site quanto no aplicativo móvel 888starz. A ativação funciona da mesma forma."}',
             'order' => 37
            ]
        );
    }
}
