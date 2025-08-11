<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA is a bookmaker that has quickly gained popularity thanks to its user-friendly platform, attractive odds, and flexible bonus policy. In addition to classic sports betting, you can also find an online casino section, virtual sports, and eSports here."}',
             'value_es' => '{"0":"PARIPESA es una casa de apuestas que ha ganado popularidad rápidamente gracias a su plataforma fácil de usar, cuotas atractivas y una política de bonos flexible. Además de las apuestas deportivas clásicas, aquí también puedes encontrar una sección de casino online, deportes virtuales y eSports."}',
             'value_fr' => '{"0":"PARIPESA est un bookmaker qui a rapidement gagné en popularité grâce à sa plateforme conviviale, ses cotes attractives et sa politique de bonus flexible. En plus des paris sportifs classiques, vous trouverez également ici une section de casino en ligne, des sports virtuels et des eSports."}',
             'value_pt' => '{"0":"PARIPESA é uma casa de apostas que rapidamente ganhou popularidade graças à sua plataforma fácil de usar, às odds atrativas e à sua política de bónus flexível. Além das apostas desportivas clássicas, aqui também é possível encontrar uma seção de casino online, desportos virtuais e eSports."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that PARIPESA pays great attention to bonuses and promo codes, which can help you gain additional advantages. In this review, we will take a closer look at the promotions offered by the bookmaker and explain how, by using the promo code :promocode, you can receive a 130% bonus on your first deposit."}',
             'value_es' => '{"0":"Cabe destacar que PARIPESA presta gran atención a los bonos y códigos promocionales, que pueden ayudarte a obtener ventajas adicionales. En esta reseña, analizaremos más a fondo las promociones que ofrece la casa de apuestas y explicaremos cómo, usando el código promocional :promocode, puedes obtener un bono del 130% en tu primer depósito."}',
             'value_fr' => '{"0":"Il convient de noter que PARIPESA accorde une grande importance aux bonus et aux codes promotionnels, qui peuvent vous offrir des avantages supplémentaires. Dans cet article, nous examinerons plus en détail les promotions proposées par le bookmaker et expliquerons comment, en utilisant le code promotionnel :promocode, vous pouvez obtenir un bonus de 130 % sur votre premier dépôt."}',
             'value_pt' => '{"0":"Vale destacar que a PARIPESA dá grande importância aos bónus e códigos promocionais, que podem ajudar a obter vantagens adicionais. Nesta análise, vamos examinar mais detalhadamente as promoções oferecidas pela casa de apostas e explicar como, utilizando o código promocional :promocode, é possível receber um bónus de 130% no primeiro depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the MelBet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de MelBet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo MelBet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da MelBet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To activate the bonus with a promo code on PARIPESA, you first need to go through a simple registration process. To do this, go to the homepage and click the Registration button. A registration form will appear where you can choose one of three options: by phone number, via social networks, or in one click. At this stage of filling out the form, you must enter our promo code :promocode in the special «Promo Code» field. Also, choose where you will use the bonus funds — in the casino or for sports betting."}',
             'value_es' => '{"0":"Para activar el bono con un código promocional en PARIPESA, primero debes pasar por un sencillo proceso de registro. Para ello, ve a la página principal y haz clic en el botón Registro. Aparecerá un formulario en el que podrás elegir una de tres opciones: por número de teléfono, a través de redes sociales o en un solo clic. En esta etapa, debes introducir nuestro código promocional :promocode en el campo especial «Código promocional». Además, elige dónde vas a utilizar los fondos del bono: en el casino o para apuestas deportivas."}',
             'value_fr' => '{"0":"Pour activer le bonus avec un code promo sur PARIPESA, vous devez d’abord suivre une procédure d’inscription simple. Pour ce faire, rendez-vous sur la page d’accueil et cliquez sur le bouton Inscription. Un formulaire d’inscription apparaîtra, vous permettant de choisir l’une des trois options : par numéro de téléphone, via les réseaux sociaux ou en un clic. À cette étape, vous devez saisir notre code promo :promocode dans le champ spécial « Code promo ». Choisissez également où vous souhaitez utiliser les fonds bonus — au casino ou pour les paris sportifs."}',
             'value_pt' => '{"0":"Para ativar o bónus com um código promocional na PARIPESA, primeiro é necessário passar por um simples processo de registo. Para isso, vá até à página inicial e clique no botão Registo. Irá aparecer um formulário onde poderá escolher uma das três opções: por número de telefone, através das redes sociais ou com um clique. Nesta etapa, deve inserir o nosso código promocional :promocode no campo especial «Código promocional». Além disso, escolha onde vai utilizar os fundos do bónus — no casino ou para apostas desportivas."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"After that, you need to confirm your registration and make a minimum deposit of 10 USD or the equivalent in your currency. Keep in mind that the bigger your first deposit, the bigger your welcome bonus. Only after fulfilling these conditions will the bonus be activated, and the funds will be credited to your bonus account."}',
             'value_es' => '{"0":"Después, debes confirmar el registro y realizar un depósito mínimo de 10 USD o su equivalente en tu moneda. Ten en cuenta que cuanto mayor sea tu primer depósito, mayor será tu bono de bienvenida. Solo después de cumplir estas condiciones se activará el bono y los fondos se acreditarán en tu cuenta de bonos."}',
             'value_fr' => '{"0":"Ensuite, vous devez confirmer votre inscription et effectuer un dépôt minimum de 10 USD ou l’équivalent dans votre devise. Gardez à l’esprit que plus votre premier dépôt est élevé, plus votre bonus de bienvenue sera important. Ce n’est qu’après avoir rempli ces conditions que le bonus sera activé et que les fonds seront crédités sur votre compte bonus."}',
             'value_pt' => '{"0":"Depois, é necessário confirmar o registo e efetuar um depósito mínimo de 10 USD ou o equivalente na sua moeda. Tenha em conta que quanto maior for o seu primeiro depósito, maior será o seu bónus de boas-vindas. Apenas depois de cumprir estas condições é que o bónus será ativado e os fundos serão creditados na sua conta de bónus."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw the bonus funds, you must meet the wagering requirements. You need to wager the bonus amount five times in the form of accumulator bets with minimum odds of 1.4 for each event. The wagering period is 7 days, after which the bonus and any winnings from it may be forfeited if the conditions are not met."}',
             'value_es' => '{"0":"Para poder retirar los fondos del bono, debes cumplir con los requisitos de apuesta. Es necesario apostar el monto del bono cinco veces en apuestas combinadas (acumuladas) con una cuota mínima de 1.4 para cada evento. El plazo de apuesta es de 7 días, después de lo cual el bono y las ganancias obtenidas con él podrán ser cancelados si no se cumplen las condiciones."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds bonus, vous devez remplir les conditions de mise. Il faut miser le montant du bonus cinq fois sous forme de paris combinés avec une cote minimale de 1,4 pour chaque événement. Le délai de mise est de 7 jours, après quoi le bonus et les gains qui en découlent peuvent être annulés si les conditions ne sont pas remplies."}',
             'value_pt' => '{"0":"Para poder levantar os fundos do bónus, é necessário cumprir os requisitos de aposta. Deve apostar o valor do bónus cinco vezes em apostas múltiplas (acumuladas) com uma odd mínima de 1,4 para cada evento. O prazo de aposta é de 7 dias, após o qual o bónus e os ganhos obtidos poderão ser cancelados caso as condições não sejam cumpridas."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, there are currently no classic no-deposit bonuses at PARIPESA. However, the bookmaker periodically runs special promotions during which registered users can receive free bets or free spins for the casino. These offers are activated as part of promotional campaigns and have a limited validity period, so it is worth keeping an eye on the news on the website or in our review."}',
             'value_es' => '{"0":"Lamentablemente, actualmente no hay bonos clásicos sin depósito en PARIPESA. Sin embargo, la casa de apuestas realiza periódicamente promociones especiales durante las cuales los usuarios registrados pueden recibir apuestas gratis o giros gratis para el casino. Estas ofertas se activan como parte de campañas promocionales y tienen un período de validez limitado, por lo que conviene estar atento a las novedades en el sitio web o en nuestra reseña."}',
             'value_fr' => '{"0":"Malheureusement, il n’existe actuellement aucun bonus classique sans dépôt chez PARIPESA. Cependant, le bookmaker organise périodiquement des promotions spéciales au cours desquelles les utilisateurs enregistrés peuvent recevoir des paris gratuits ou des tours gratuits pour le casino. Ces offres sont activées dans le cadre de campagnes promotionnelles et ont une durée de validité limitée, il est donc conseillé de suivre les actualités sur le site ou dans notre revue."}',
             'value_pt' => '{"0":"Infelizmente, atualmente não há bônus clássicos sem depósito na PARIPESA. No entanto, a casa de apostas realiza periodicamente promoções especiais nas quais os usuários registrados podem receber apostas grátis ou rodadas grátis para o cassino. Essas ofertas são ativadas como parte de campanhas promocionais e têm um período de validade limitado, por isso vale a pena acompanhar as novidades no site ou em nossa análise."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at PARIPESA?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en PARIPESA?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur PARIPESA ?"}',
                'value_pt' => '{"0":"E se você já for registrado na PARIPESA?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA has taken care of its regular players by offering them ongoing bonuses and cashback. Active users can benefit from various loyalty programs, reload deposit promotions, and special offers for major sporting events."}',
             'value_es' => '{"0":"PARIPESA ha pensado en sus jugadores habituales y les ofrece bonificaciones y reembolsos regulares. Los usuarios activos pueden acceder a varios programas de fidelidad, promociones por depósitos repetidos y ofertas especiales para grandes eventos deportivos."}',
             'value_fr' => '{"0":"PARIPESA a pris soin de ses joueurs réguliers en leur proposant des bonus et du cashback réguliers. Les utilisateurs actifs peuvent profiter de divers programmes de fidélité, de promotions sur les dépôts répétés et d’offres spéciales pour les grands événements sportifs."}',
             'value_pt' => '{"0":"A PARIPESA cuidou dos seus jogadores regulares, oferecendo-lhes bónus contínuos e cashback. Os utilizadores ativos podem usufruir de vários programas de fidelidade, promoções para depósitos recorrentes e ofertas especiais para grandes eventos desportivos."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For example, during championships or tournaments, the bookmaker often launches promotions with boosted odds and free bets. There are also bonuses for a losing streak — a form of support for those who are having a run of bad luck."}',
             'value_es' => '{"0":"Por ejemplo, durante campeonatos o torneos, la casa de apuestas suele lanzar promociones con cuotas mejoradas y apuestas gratuitas. También existen bonos por racha de pérdidas, como apoyo para quienes no tienen suerte."}',
             'value_fr' => '{"0":"Par exemple, pendant les championnats ou les tournois, le bookmaker lance souvent des promotions avec des cotes améliorées et des paris gratuits. Il existe également des bonus pour série de pertes, une forme de soutien pour ceux qui manquent de chance."}',
             'value_pt' => '{"0":"Por exemplo, durante campeonatos ou torneios, a casa de apostas costuma lançar promoções com odds melhoradas e apostas grátis. Também existem bónus para séries de derrotas — um apoio para quem não tem sorte."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome package"}',
                'value_es' => '{"0":"Paquete de bienvenida"}',
                'value_fr' => '{"0":"Pack de bienvenue"}',
                'value_pt' => '{"0":"Pacote de boas-vindas"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The Welcome Package is a classic bonus that consists of a first deposit bonus and additional free spins in the casino. Upon making your first deposit, PARIPESA offers a 100% bonus of up to 150 USD and 150 free spins."}',
             'value_es' => '{"0":"El paquete de bienvenida es un bono clásico que consiste en un bono por el primer depósito y giros gratis adicionales en el casino. Al realizar tu primer depósito, PARIPESA ofrece un bono del 100% de hasta 150 USD y 150 giros gratis."}',
             'value_fr' => '{"0":"Le pack de bienvenue est une offre classique composée d’un bonus sur le premier dépôt et de tours gratuits supplémentaires au casino. Lors de votre premier dépôt, PARIPESA offre un bonus de 100 % jusqu’à 150 USD et 150 tours gratuits."}',
             'value_pt' => '{"0":"O pacote de boas-vindas é um bónus clássico que consiste num bónus pelo primeiro depósito e rodadas grátis adicionais no casino. Ao fazer o seu primeiro depósito, a PARIPESA oferece um bónus de 100% até 150 USD e 150 rodadas grátis."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The bonus must be wagered within a week. To do this, you need to place at least five sports bets with odds starting from 1.4. This package will help you explore the bookmaker’s features with a larger deposit and try out different types of bets."}',
             'value_es' => '{"0":"El bono debe apostarse en el plazo de una semana. Para ello, debes realizar al menos cinco apuestas deportivas con cuotas desde 1.4. Este paquete te permitirá conocer las funciones de la casa de apuestas con un depósito mayor y probar diferentes tipos de apuestas."}',
             'value_fr' => '{"0":"Le bonus doit être misé dans un délai d’une semaine. Pour cela, vous devez effectuer au moins cinq paris sportifs avec une cote minimale de 1,4. Ce pack vous permettra de découvrir les fonctionnalités du bookmaker avec un dépôt plus important et d’essayer différents types de paris."}',
             'value_pt' => '{"0":"O bónus deve ser apostado no prazo de uma semana. Para isso, é necessário fazer pelo menos cinco apostas desportivas com odds a partir de 1.4. Este pacote ajudará você a explorar os recursos da casa de apostas com um depósito maior e experimentar diferentes tipos de apostas."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Bonus for a series of losing bets"}',
                'value_es' => '{"0":"Bono por una serie de apuestas perdidas"}',
                'value_fr' => '{"0":"Bonus pour une série de paris perdants"}',
                'value_pt' => '{"0":"Bónus por uma série de apostas perdedoras"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is intended for players who are temporarily unlucky. If you lose 10 or more bets in a row, PARIPESA will credit you with a compensation bonus of up to 500 USD."}',
             'value_es' => '{"0":"Esta promoción está destinada a los jugadores que atraviesan una mala racha temporal. Si pierdes 10 o más apuestas seguidas, PARIPESA te abonará un bono de compensación de hasta 500 USD."}',
             'value_fr' => '{"0":"Cette promotion est destinée aux joueurs connaissant une période de malchance temporaire. Si vous perdez 10 paris consécutifs ou plus, PARIPESA vous accordera un bonus de compensation pouvant aller jusqu’à 500 USD."}',
             'value_pt' => '{"0":"Esta promoção é destinada a jogadores que estejam temporariamente em uma maré de azar. Se você perder 10 ou mais apostas consecutivas, a PARIPESA creditará um bônus de compensação de até 500 USD."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"This is not just a way to recover part of your funds but also an opportunity to stay in the game with minimal losses."}',
             'value_es' => '{"0":"No es solo una forma de recuperar parte de tu dinero, sino también una oportunidad de seguir en el juego con pérdidas mínimas."}',
             'value_fr' => '{"0":"Ce n’est pas seulement un moyen de récupérer une partie de vos fonds, mais aussi une opportunité de rester dans le jeu avec des pertes minimales."}',
             'value_pt' => '{"0":"Não é apenas uma forma de recuperar parte do seu dinheiro, mas também uma oportunidade de continuar no jogo com perdas mínimas."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator Bonus"}',
                'value_es' => '{"0":"BONO DE COMBINADA"}',
                'value_fr' => '{"0":"BONUS COMBINÉ"}',
                'value_pt' => '{"0":"BÓNUS DE ACUMULADOR"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The Accumulator Bonus is a nice perk for fans of multi-bets. The more events you add to your accumulator, the higher the percentage bonus you’ll receive on your winnings."}',
             'value_es' => '{"0":"El BONO DE COMBINADA es una buena ventaja para los aficionados a las apuestas combinadas. Cuantos más eventos añadas a tu acumulador, mayor será el porcentaje de bono que recibirás sobre tus ganancias."}',
             'value_fr' => '{"0":"Le BONUS COMBINÉ est un atout intéressant pour les amateurs de paris combinés. Plus vous ajoutez d’événements à votre pari combiné, plus le pourcentage de bonus sur vos gains sera élevé."}',
             'value_pt' => '{"0":"O BÓNUS DE ACUMULADOR é uma boa vantagem para os fãs de apostas múltiplas. Quanto mais eventos adicionar ao seu acumulador, maior será a percentagem de bónus que receberá sobre os seus ganhos."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For example, with 5 events you can get +5%, while with 10 events you’ll already have +20% added to your net winnings. To receive this bonus, all the selections included in your accumulator must be winning bets."}',
             'value_es' => '{"0":"Por ejemplo, con 5 eventos puedes obtener un +5%, mientras que con 10 eventos ya recibirás un +20% adicional a tus ganancias netas. Para recibir este bono, todas las selecciones incluidas en tu acumulador deben ser ganadoras."}',
             'value_fr' => '{"0":"Par exemple, avec 5 événements vous pouvez obtenir +5 %, tandis qu’avec 10 événements vous bénéficierez déjà de +20 % supplémentaires sur vos gains nets. Pour recevoir ce bonus, toutes les sélections incluses dans votre combiné doivent être gagnantes."}',
             'value_pt' => '{"0":"Por exemplo, com 5 eventos pode receber +5%, enquanto com 10 eventos já terá +20% adicionados aos seus lucros líquidos. Para receber este bónus, todas as seleções incluídas no seu acumulador devem ser vencedoras."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Can I use the same promo code multiple times?"}',
             'value_es' => '{"0":"¿Puedo usar el mismo código promocional varias veces?"}',
             'value_fr' => '{"0":"Puis-je utiliser le même code promo plusieurs fois ?"}',
             'value_pt' => '{"0":"Posso usar o mesmo código promocional várias vezes?"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"No, each promo code can only be used once per account."}',
             'value_es' => '{"0":"No, cada código promocional solo se puede usar una vez por cuenta."}',
             'value_fr' => '{"0":"Non, chaque code promo ne peut être utilisé qu\'une seule fois par compte."}',
             'value_pt' => '{"0":"Não, cada código promocional só pode ser usado uma vez por conta."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit to activate the welcome bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo para activar el bono de bienvenida?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum pour activer le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo para ativar o bônus de boas-vindas?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is from 10 USD or the equivalent in your currency."}',
             'value_es' => '{"0":"El depósito mínimo es de 10 USD o el equivalente en su moneda."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 10 USD ou l’équivalent dans votre devise."}',
             'value_pt' => '{"0":"O depósito mínimo é de 10 USD ou o equivalente na sua moeda."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"How much time is given to wager the bonus?"}',
             'value_es' => '{"0":"¿Cuánto tiempo se otorga para liberar el bono?"}',
             'value_fr' => '{"0":"Combien de temps est accordé pour miser le bonus ?"}',
             'value_pt' => '{"0":"Quanto tempo é concedido para cumprir os requisitos do bônus?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"You have 7 days from the moment of activation."}',
             'value_es' => '{"0":"Se dispone de 7 días desde el momento de la activación."}',
             'value_fr' => '{"0":"Vous disposez de 7 jours à partir du moment de l’activation."}',
             'value_pt' => '{"0":"São concedidos 7 dias a partir do momento da ativação."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Are there limits on the maximum winnings from bonus funds?"}',
             'value_es' => '{"0":"¿Existen límites en las ganancias máximas de los fondos de bonificación?"}',
             'value_fr' => '{"0":"Y a-t-il des limites sur les gains maximums provenant des fonds bonus ?"}',
             'value_pt' => '{"0":"Existem limites para os ganhos máximos provenientes dos fundos de bônus?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the maximum winnings may be limited by the terms of the specific promotion."}',
             'value_es' => '{"0":"Sí, las ganancias máximas pueden estar limitadas por los términos de la promoción específica."}',
             'value_fr' => '{"0":"Oui, les gains maximums peuvent être limités par les conditions de la promotion spécifique."}',
             'value_pt' => '{"0":"Sim, os ganhos máximos podem ser limitados pelos termos da promoção específica."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 34
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"What to do if the bonus does not arrive after the deposit?"}',
             'value_es' => '{"0":"¿Qué hacer si el bono no llega después del depósito?"}',
             'value_fr' => '{"0":"Que faire si le bonus n\'arrive pas après le dépôt ?"}',
             'value_pt' => '{"0":"O que fazer se o bônus não for creditado após o depósito?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 35
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"We recommend contacting PARIPESA customer support for a prompt resolution of the issue."}',
             'value_es' => '{"0":"Recomendamos contactar con el servicio de atención al cliente de PARIPESA para una solución rápida del problema."}',
             'value_fr' => '{"0":"Nous vous recommandons de contacter le service client de PARIPESA pour une résolution rapide du problème."}',
             'value_pt' => '{"0":"Recomendamos entrar em contato com o suporte ao cliente da PARIPESA para uma resolução rápida do problema."}',
             'order' => 35
            ]
        );
    }
}
