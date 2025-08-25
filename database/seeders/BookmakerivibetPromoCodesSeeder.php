<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet, a relatively new player in the online betting market, has already managed to attract attention with its wide range of sports events and casino section. However, the bonus program and promo code system, which allow players to receive additional funds, are of particular interest."}',
             'value_es' => '{"0":"Ivibet, un jugador relativamente nuevo en el mercado de las apuestas en línea, ya ha logrado captar la atención gracias a su amplia oferta de eventos deportivos y a su sección de casino. Sin embargo, lo que despierta un interés especial es el programa de bonos y el sistema de códigos promocionales, que permiten a los jugadores obtener fondos adicionales."}',
             'value_fr' => '{"0":"Ivibet, un acteur relativement nouveau sur le marché des paris en ligne, a déjà réussi à attirer l’attention grâce à son large choix d’événements sportifs et à sa section casino. Toutefois, le programme de bonus et le système de codes promotionnels, qui permettent aux joueurs de recevoir des fonds supplémentaires, suscitent un intérêt particulier."}',
             'value_pt' => '{"0":"Ivibet, um jogador relativamente novo no mercado de apostas online, já conseguiu chamar a atenção pela sua ampla seleção de eventos desportivos e pela secção de casino. No entanto, o programa de bónus e o sistema de códigos promocionais, que permitem aos jogadores receber fundos adicionais, despertam um interesse especial."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"New customers are offered welcome bonuses, while regular players can benefit from ongoing promotions and the VIP program. In this review, we will take a closer look at some of the promotional offers, explain the conditions for claiming them, and give tips on how to get extra funds when registering with the promo code :promocode."}',
             'value_es' => '{"0":"A los nuevos clientes se les ofrecen bonos de bienvenida, mientras que los jugadores habituales pueden aprovechar promociones regulares y el programa VIP. En esta reseña analizaremos algunas de las ofertas promocionales, explicaremos las condiciones para obtenerlas y daremos consejos sobre cómo conseguir fondos extra al registrarse con el código promocional :promocode."}',
             'value_fr' => '{"0":"Les nouveaux clients bénéficient de bonus de bienvenue, tandis que les joueurs réguliers peuvent profiter de promotions continues et du programme VIP. Dans cet article, nous examinerons certaines des offres promotionnelles, nous expliquerons les conditions pour en bénéficier et nous donnerons des conseils sur la manière d’obtenir des fonds supplémentaires lors de l’inscription avec le code promotionnel :promocode."}',
             'value_pt' => '{"0":"Aos novos clientes são oferecidos bónus de boas-vindas, enquanto os jogadores regulares podem usufruir de promoções frequentes e do programa VIP. Nesta análise, iremos examinar algumas das ofertas promocionais, explicar as condições para obtê-las e dar dicas sobre como conseguir fundos extra ao registar-se com o código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the 1win promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de 1win?"}',
                'value_fr' => '{"0":"Comment profiter du code promo 1win ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da 1win?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Registration at Ivibet takes place in three steps. First, go to the website and click the SIGN UP button. A registration form will appear."}',
             'value_es' => '{"0":"El registro en Ivibet se realiza en tres pasos. Primero, dirígete al sitio web y haz clic en el botón SIGN UP. Aparecerá un formulario de registro."}',
             'value_fr' => '{"0":"L’inscription sur Ivibet se fait en trois étapes. Tout d’abord, allez sur le site et cliquez sur le bouton SIGN UP. Un formulaire d’inscription apparaîtra."}',
             'value_pt' => '{"0":"O registro na Ivibet é feito em três etapas. Primeiro, acesse o site e clique no botão SIGN UP. Um formulário de registro aparecerá."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Next, select your country, enter your email, and create a password. The password must contain both numbers and letters, include one uppercase letter, and be between 8 and 20 characters long. At this stage, you should also enter our promo code :promocode in the special field and proceed to the second step."}',
             'value_es' => '{"0":"Luego, selecciona tu país, ingresa tu correo electrónico y crea una contraseña. La contraseña debe contener números y letras, incluir una letra mayúscula y tener entre 8 y 20 caracteres. En esta etapa, también debes introducir nuestro código promocional :promocode en el campo correspondiente y pasar al segundo paso."}',
             'value_fr' => '{"0":"Ensuite, choisissez votre pays, saisissez votre email et créez un mot de passe. Le mot de passe doit contenir des chiffres et des lettres, inclure une majuscule et comporter entre 8 et 20 caractères. À cette étape, saisissez également notre code promotionnel :promocode dans le champ prévu à cet effet, puis passez à la deuxième étape."}',
             'value_pt' => '{"0":"Em seguida, selecione o seu país, insira o seu e-mail e crie uma senha. A senha deve conter números e letras, incluir uma letra maiúscula e ter entre 8 e 20 caracteres. Nesta etapa, também deve inserir o nosso código promocional :promocode no campo indicado e seguir para a segunda etapa."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Then choose the currency you will use during the game, enter your first and last name, indicate your gender and date of birth. After that, you can move on to the final step."}',
             'value_es' => '{"0":"Después, elige la moneda que usarás durante el juego, escribe tu nombre y apellido, indica tu género y fecha de nacimiento. Una vez hecho esto, podrás continuar al último paso."}',
             'value_fr' => '{"0":"Ensuite, sélectionnez la devise que vous utiliserez pendant le jeu, entrez votre prénom et votre nom, indiquez votre sexe et votre date de naissance. Après cela, vous pouvez passer à la dernière étape."}',
             'value_pt' => '{"0":"Depois, escolha a moeda que usará durante o jogo, insira o seu nome e sobrenome, indique o seu gênero e a data de nascimento. Após isso, pode passar para a última etapa."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In the third step, you need to enter your street and house number, postal code, city, and phone number. Don’t forget to specify where you want to use your bonus funds — for sports betting or for casino games. Finally, you only need to make a deposit from $5 to $150 to receive a 100% bonus."}',
             'value_es' => '{"0":"En el tercer paso, deberás ingresar tu calle y número de casa, código postal, ciudad y teléfono. No olvides indicar dónde deseas utilizar tus fondos de bono — para apuestas deportivas o para juegos de casino. Finalmente, solo necesitas realizar un depósito de entre 5 y 150 dólares para recibir un bono del 100%."}',
             'value_fr' => '{"0":"Lors de la troisième étape, il vous reste à indiquer votre rue et numéro de maison, code postal, ville et numéro de téléphone. N’oubliez pas non plus de préciser où vous souhaitez utiliser vos fonds bonus — pour les paris sportifs ou pour les jeux de casino. Enfin, il ne vous reste plus qu’à effectuer un dépôt compris entre 5 et 150 $ pour recevoir un bonus de 100 %."}',
             'value_pt' => '{"0":"Na terceira etapa, basta inserir a sua rua e número da casa, código postal, cidade e telefone. Não se esqueça de marcar onde pretende usar os fundos de bônus — para apostas esportivas ou para jogos de cassino. Finalmente, só precisará fazer um depósito entre 5 e 150 dólares para receber um bônus de 100%."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Please note that bonuses come with wagering requirements, and in order to withdraw bonus funds you must first meet them. For sports betting, the welcome bonus must be wagered with odds of no less than 2.00, by placing accumulator bets containing at least two selections with a total stake five times greater than the bonus amount. The wagering period is 7 days."}',
             'value_es' => '{"0":"Tenga en cuenta que los bonos tienen requisitos de apuesta y, para poder retirar los fondos del bono, primero debe cumplirlos. En las apuestas deportivas, el bono de bienvenida debe apostarse con cuotas no inferiores a 2.00, realizando apuestas combinadas que incluyan al menos dos selecciones con un importe total que supere cinco veces el valor del bono. El plazo de apuesta es de 7 días."}',
             'value_fr' => '{"0":"Veuillez noter que les bonus sont soumis à des conditions de mise et que, pour pouvoir retirer les fonds du bonus, vous devez d’abord les remplir. Pour les paris sportifs, le bonus de bienvenue doit être rejoué avec une cote d’au moins 2.00, en plaçant des paris combinés comprenant au moins deux sélections pour un montant total égal à cinq fois le montant du bonus. Le délai de mise est de 7 jours."}',
             'value_pt' => '{"0":"Observe que os bônus possuem requisitos de apostas e, para poder sacar os fundos do bônus, é necessário cumpri-los primeiro. Para apostas esportivas, o bônus de boas-vindas deve ser apostado com odds não inferiores a 2.00, realizando apostas acumuladas que incluam pelo menos duas seleções, com valor total equivalente a cinco vezes o valor do bônus. O prazo de apostas é de 7 dias."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In the casino, the conditions are stricter. You need to wager an amount 40 times greater than the received bonus. The wagering period is 7 days. Failure to meet these requirements will result in the loss of bonus funds."}',
             'value_es' => '{"0":"En el casino, las condiciones son más estrictas. Es necesario apostar una cantidad 40 veces mayor al importe del bono recibido. El plazo de apuesta es de 7 días. El incumplimiento de estas condiciones provocará la pérdida de los fondos del bono."}',
             'value_fr' => '{"0":"Au casino, les conditions sont plus strictes. Il est nécessaire de miser un montant équivalent à 40 fois le montant du bonus reçu. Le délai de mise est de 7 jours. Le non-respect de cette règle entraîne la perte des fonds bonus."}',
             'value_pt' => '{"0":"No cassino, as condições são mais rigorosas. É necessário apostar um valor 40 vezes maior que o bônus recebido. O prazo de apostas é de 7 dias. O descumprimento desta regra resulta na perda dos fundos do bônus."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, Ivibet does not offer no deposit bonuses. All promotional offers require a deposit, which is typical for most licensed international bookmakers."}',
             'value_es' => '{"0":"En este momento, Ivibet no ofrece bonos sin depósito. Todas las promociones requieren un depósito, lo cual es habitual en la mayoría de las casas de apuestas internacionales con licencia."}',
             'value_fr' => '{"0":"Actuellement, Ivibet ne propose pas de bonus sans dépôt. Toutes les offres promotionnelles nécessitent un dépôt, ce qui est courant pour la plupart des bookmakers internationaux agréés."}',
             'value_pt' => '{"0":"No momento, a Ivibet não oferece bônus sem depósito. Todas as promoções exigem um depósito, o que é característico da maioria das casas de apostas internacionais licenciadas."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at Ivibet?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en Ivibet?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur Ivibet ?"}',
                'value_pt' => '{"0":"E se você já for registrado na Ivibet?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet offers plenty of promotional deals for active players. You can receive additional bonuses for repeat deposits, take part in casino tournaments, and activate special seasonal promotions. Below we will take a closer look at some of them, while the full list can be found in the PROMOTIONS section."}',
             'value_es' => '{"0":"Ivibet cuenta con numerosas ofertas promocionales para jugadores activos. Puedes recibir bonos adicionales por depósitos repetidos, participar en torneos de casino y activar promociones especiales de temporada. A continuación, veremos más en detalle algunas de ellas, mientras que la lista completa está disponible en la sección PROMOTIONS."}',
             'value_fr' => '{"0":"Ivibet propose de nombreuses offres promotionnelles pour les joueurs actifs. Vous pouvez obtenir des bonus supplémentaires pour vos dépôts répétés, participer à des tournois de casino et activer des promotions saisonnières spéciales. Ci-dessous, nous examinerons plus en détail certaines d’entre elles, tandis que la liste complète est disponible dans la section PROMOTIONS."}',
             'value_pt' => '{"0":"A Ivibet oferece diversas promoções para jogadores ativos. Você pode receber bônus adicionais por depósitos repetidos, participar de torneios de cassino e ativar promoções sazonais especiais. A seguir, veremos algumas delas com mais detalhes, enquanto a lista completa pode ser consultada na seção PROMOTIONS."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Fortune Wheel Bonus"}',
                'value_es' => '{"0":"Bono de Ruleta de la suerte"}',
                'value_fr' => '{"0":"Bonus Roue de la Fortune"}',
                'value_pt' => '{"0":"Bónus Roda da Fortuna"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Fortune at Ivibet takes a literal form with the «Fortune Wheel Bonus». Participants get the chance to spin the wheel after making a deposit of $20, which grants access to the Silver Wheel. If you deposit $100 or more, you will unlock the Golden Wheel of Fortune."}',
             'value_es' => '{"0":"La fortuna en Ivibet se materializa literalmente con la «Bono de Ruleta de la suerte». Los participantes pueden girar la ruleta tras realizar un depósito de 20 $, lo que les da acceso a la Ruleta de Plata. Si el depósito es de 100 $ o más, se desbloquea la Ruleta de Oro."}',
             'value_fr' => '{"0":"La fortune chez Ivibet prend une forme concrète avec la «Bonus Roue de la Fortune». Les participants peuvent faire tourner la roue après un dépôt de 20 $, ce qui leur donne accès à la Roue d’Argent. En effectuant un dépôt de 100 $ ou plus, vous débloquez la Roue d’Or."}',
             'value_pt' => '{"0":"A fortuna na Ivibet ganha forma literal com a «Bónus Roda da Fortuna». Os participantes podem girar a roda após realizar um depósito de 20 $, o que lhes dá acesso à Roda de Prata. Ao depositar 100 $ ou mais, você desbloqueia a Roda de Ouro."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The wheel features a variety of prizes, including free spins on slots, bonus money for betting, and free bets."}',
             'value_es' => '{"0":"En la ruleta se encuentran diversos premios, como giros gratis en tragamonedas, dinero de bono para apuestas y apuestas gratuitas."}',
             'value_fr' => '{"0":"La roue contient différents prix, notamment des tours gratuits sur les machines à sous, de l’argent bonus pour parier et des paris gratuits."}',
             'value_pt' => '{"0":"Na roda estão distribuídos diversos prêmios, incluindo rodadas grátis em slots, dinheiro de bônus para apostas e apostas gratuitas."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Friday Reload"}',
                'value_es' => '{"0":"VIERNES DE RECARGAS"}',
                'value_fr' => '{"0":"Bonus Du Vendredi"}',
                'value_pt' => '{"0":"RECARGA DE SEXTA-FEIRA"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"You can receive a reload bonus and free spins on Friday. The free spins for a Friday deposit are credited as a set of 25 spins per day for 2 days. To claim the free spins, you need to deposit $20 or more."}',
             'value_es' => '{"0":"Podrás recibir un bono por recarga y giros gratis los viernes. Los giros gratis por un depósito realizado el viernes se acreditan en un conjunto de 25 giros por día durante 2 días. Para obtenerlos, es necesario depositar 20 $ o más."}',
             'value_fr' => '{"0":"Vous pouvez recevoir un bonus de rechargement et des tours gratuits le vendredi. Les tours gratuits pour un dépôt effectué le vendredi sont crédités par lot de 25 tours par jour pendant 2 jours. Pour les obtenir, vous devez déposer au moins 20 $."}',
             'value_pt' => '{"0":"Você pode receber um bônus de recarga e rodadas grátis na sexta-feira. As rodadas grátis por um depósito feito na sexta são creditadas em um conjunto de 25 por dia durante 2 dias. Para recebê-las, é necessário depositar 20 $ ou mais."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Please note that winnings obtained from free spins are subject to a 40x wagering requirement."}',
             'value_es' => '{"0":"Ten en cuenta que las ganancias obtenidas con los giros gratis están sujetas a un requisito de apuesta de 40x."}',
             'value_fr' => '{"0":"Veuillez noter que les gains issus des tours gratuits sont soumis à une exigence de mise de 40x."}',
             'value_pt' => '{"0":"Vale lembrar que os ganhos obtidos com as rodadas grátis estão sujeitos a um requisito de aposta de 40x."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"VIP Program Casino"}',
                'value_es' => '{"0":"Programa VIP de Casino"}',
                'value_fr' => '{"0":"Programme Vip De ivibet"}',
                'value_pt' => '{"0":"Programa VIP Casino"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"For the most active players, there is a casino VIP program. The more bets you place, the higher your status and the more attractive the bonuses you receive. Every player automatically participates in the VIP program after making their first deposit."}',
             'value_es' => '{"0":"Para los jugadores más activos existe un programa VIP de casino. Cuantas más apuestas realices, mayor será tu estatus y más atractivos serán los bonos que recibirás. Cada jugador participa automáticamente en el programa VIP después de realizar su primer depósito."}',
             'value_fr' => '{"0":"Pour les joueurs les plus actifs, il existe un programme VIP du casino. Plus vous misez, plus votre statut est élevé et plus les bonus que vous recevez sont intéressants. Chaque joueur participe automatiquement au programme VIP après avoir effectué son premier dépôt."}',
             'value_pt' => '{"0":"Para os jogadores mais ativos, existe um programa VIP do cassino. Quanto mais apostas você fizer, maior será o seu status e mais atrativos serão os bônus recebidos. Todo jogador participa automaticamente do programa VIP após realizar o primeiro depósito."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Points are credited at the rate of 1 point for every $30 wagered. Points can be exchanged for real money at the rate of 100 points = $1. Please also note that funds obtained by exchanging points for real money are subject to a 5x wagering requirement."}',
             'value_es' => '{"0":"Los puntos se otorgan a razón de 1 punto por cada 30 $ apostados. Los puntos pueden canjearse por dinero real a una tasa de 100 puntos = 1 $. Ten en cuenta que los fondos obtenidos mediante el canje de puntos por dinero real están sujetos a un requisito de apuesta de 5x."}',
             'value_fr' => '{"0":"Les points sont attribués à raison de 1 point pour chaque 30 $ misés. Les points peuvent être échangés contre de l’argent réel au taux de 100 points = 1 $. Veuillez également noter que les fonds obtenus par l’échange de points contre de l’argent réel sont soumis à une exigence de mise de 5x."}',
             'value_pt' => '{"0":"Os pontos são atribuídos na proporção de 1 ponto para cada 30 $ apostados. Os pontos podem ser trocados por dinheiro real na taxa de 100 pontos = 1 $. Vale lembrar que os fundos obtidos com a troca de pontos por dinheiro real estão sujeitos a um requisito de aposta de 5x."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Can a promo code be used after completing registration?"}',
             'value_es' => '{"0":"¿Se puede utilizar un código promocional después de completar el registro?"}',
             'value_fr' => '{"0":"Peut-on utiliser un code promo après avoir terminé l’inscription ?"}',
             'value_pt' => '{"0":"É possível usar um código promocional após concluir o registro?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"No, the promo code must be entered during account creation."}',
             'value_es' => '{"0":"No, el código promocional debe introducirse durante la creación de la cuenta."}',
             'value_fr' => '{"0":"Non, le code promo doit être saisi lors de la création du compte."}',
             'value_pt' => '{"0":"Não, o código promocional deve ser inserido durante a criação da conta."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit to receive a bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo para recibir un bono?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum pour obtenir un bonus ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo para receber um bônus?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit usually starts from $5 or the equivalent amount in another currency."}',
             'value_es' => '{"0":"El depósito mínimo generalmente comienza desde $5 o el equivalente en otra moneda."}',
             'value_fr' => '{"0":"Le dépôt minimum commence généralement à partir de 5 $ ou l’équivalent dans une autre devise."}',
             'value_pt' => '{"0":"O depósito mínimo geralmente começa a partir de $5 ou o valor equivalente em outra moeda."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Can different bonuses be combined?"}',
             'value_es' => '{"0":"¿Se pueden combinar diferentes bonos?"}',
             'value_fr' => '{"0":"Peut-on combiner différents bonus ?"}',
             'value_pt' => '{"0":"É possível combinar diferentes bônus?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 33
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"No, only one bonus can be activated at a time."}',
             'value_es' => '{"0":"No, solo se puede activar un bono a la vez."}',
             'value_fr' => '{"0":"Non, un seul bonus peut être activé à la fois."}',
             'value_pt' => '{"0":"Não, apenas um bônus pode ser ativado de cada vez."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 34
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses available in the web app?"}',
             'value_es' => '{"0":"¿Los bonos están disponibles en la aplicación web?"}',
             'value_fr' => '{"0":"Les bonus sont-ils disponibles dans l’application web ?"}',
             'value_pt' => '{"0":"Os bônus estão disponíveis no aplicativo web?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 35
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all promotional offers are also available in the web app."}',
             'value_es' => '{"0":"Sí, todas las promociones también están disponibles en la aplicación web."}',
             'value_fr' => '{"0":"Oui, toutes les offres promotionnelles sont également disponibles dans l’application web."}',
             'value_pt' => '{"0":"Sim, todas as promoções também estão disponíveis no aplicativo web."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 36
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Can you withdraw money from the bonus account immediately?"}',
             'value_es' => '{"0":"¿Se puede retirar dinero de la cuenta de bonificación de inmediato?"}',
             'value_fr' => '{"0":"Peut-on retirer l’argent du compte bonus immédiatement ?"}',
             'value_pt' => '{"0":"É possível sacar dinheiro da conta de bônus imediatamente?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 37
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"No, you must first meet the wagering requirements. Only after that can you withdraw the funds."}',
             'value_es' => '{"0":"No, primero debe cumplir con los requisitos de apuesta. Solo después de eso podrá retirarlo."}',
             'value_fr' => '{"0":"Non, vous devez d’abord remplir les conditions de mise. Ce n’est qu’après cela que vous pourrez retirer les fonds."}',
             'value_pt' => '{"0":"Não, primeiro é necessário cumprir os requisitos de aposta. Só então você poderá sacar os fundos."}',
             'order' => 37
            ]
        );
    }
}
