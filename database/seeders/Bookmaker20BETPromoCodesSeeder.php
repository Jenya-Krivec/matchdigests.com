<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers various types of rewards for both new and regular players. In addition to deposit bonuses, the platform regularly provides promotions for loyal users, such as the Saturday Reload Bonus and VIP rewards in the casino."}',
             'value_es' => '{"0":"20BET ofrece diferentes tipos de recompensas tanto para los nuevos como para los jugadores habituales. Además de los bonos por depósito, la plataforma propone regularmente promociones para los usuarios frecuentes, como el Saturday Reload Bonus y las recompensas VIP en el casino."}',
             'value_fr' => '{"0":"20BET propose différents types de récompenses pour les nouveaux joueurs comme pour les habitués. En plus des bonus de dépôt, la plateforme propose régulièrement des promotions pour les joueurs réguliers, telles que le Saturday Reload Bonus et les récompenses VIP au casino."}',
             'value_pt' => '{"0":"A 20BET oferece vários tipos de recompensas tanto para novos jogadores quanto para os já registrados. Além dos bônus de depósito, a plataforma disponibiliza regularmente promoções para os clientes frequentes, como o Saturday Reload Bonus e as recompensas VIP no cassino."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"These offers can significantly boost your potential winnings. In this review, we will look at some of the promotional offers that may come in handy. We will explain the wagering requirements and also show you how to use the promo code :promocode during registration."}',
             'value_es' => '{"0":"Estas ofertas pueden aumentar considerablemente sus posibles ganancias. En esta reseña, analizaremos algunas de las promociones que le resultarán útiles. También explicaremos los requisitos de apuesta y le mostraremos cómo utilizar el código promocional :promocode durante el registro."}',
             'value_fr' => '{"0":"Ces offres peuvent considérablement augmenter vos gains potentiels. Dans cet article, nous examinerons certaines des promotions qui pourraient vous être utiles. Nous expliquerons également les conditions de mise et comment utiliser le code promotionnel :promocode lors de l’inscription."}',
             'value_pt' => '{"0":"Essas ofertas podem aumentar significativamente os seus ganhos potenciais. Nesta análise, vamos apresentar algumas promoções que podem ser úteis para você. Também explicaremos os requisitos de aposta e mostraremos como utilizar o código promocional :promocode durante o registro."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the 20BET promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de 20BET?"}',
                'value_fr' => '{"0":"Comment profiter du code promo 20BET ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da 20BET?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To activate the promo code :promocode on 20BET, simply enter it in the appropriate field during registration. Let’s take a closer look at the registration process."}',
             'value_es' => '{"0":"Para activar el código promocional :promocode en 20BET, basta con introducirlo en el campo correspondiente durante el registro. Veamos más en detalle el proceso de registro."}',
             'value_fr' => '{"0":"Pour activer le code promotionnel :promocode sur 20BET, il suffit de l’entrer dans le champ prévu à cet effet lors de l’inscription. Voyons plus en détail le processus d’inscription."}',
             'value_pt' => '{"0":"Para ativar o código promocional :promocode na 20BET, basta inseri-lo no campo correspondente durante o registro. Vamos analisar o processo de inscrição em mais detalhes."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"First, go to the official 20BET website and click the SIGN UP button. A registration form will appear. In the first step, select your country, enter your email, and create a password. Please note the password requirements: it must be between 8 and 20 characters long and include both numbers and letters, with at least one uppercase letter. At this stage, you should enter the promo code :promocode. You can then move on to the next step."}',
             'value_es' => '{"0":"Primero, acceda al sitio web oficial de 20BET y haga clic en el botón SIGN UP. Aparecerá un formulario de registro. En el primer paso, seleccione su país, introduzca su correo electrónico y cree una contraseña. Tenga en cuenta los requisitos de la contraseña: debe tener entre 8 y 20 caracteres e incluir tanto números como letras, de las cuales al menos una debe ser mayúscula. En esta etapa debe introducir el código promocional :promocode. A continuación, podrá pasar al siguiente paso."}',
             'value_fr' => '{"0":"Tout d’abord, rendez-vous sur le site officiel de 20BET et cliquez sur le bouton SIGN UP. Un formulaire d’inscription apparaîtra. À la première étape, choisissez votre pays, saisissez votre adresse e-mail et créez un mot de passe. Veuillez noter les exigences du mot de passe : il doit contenir entre 8 et 20 caractères et inclure à la fois des chiffres et des lettres, dont au moins une en majuscule. C’est à cette étape que vous devez entrer le code promotionnel :promocode. Vous pouvez ensuite passer à l’étape suivante."}',
             'value_pt' => '{"0":"Primeiro, acesse o site oficial da 20BET e clique no botão SIGN UP. Um formulário de registro aparecerá. Na primeira etapa, escolha o seu país, insira o seu e-mail e crie uma senha. Atenção aos requisitos da senha: ela deve ter entre 8 e 20 caracteres e incluir números e letras, sendo pelo menos uma letra maiúscula. É neste momento que você deve inserir o código promocional :promocode. Depois disso, já pode avançar para a próxima etapa."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"At this point, choose the currency you will use in the future. You should also provide your first and last name, indicate your gender, and enter your date of birth."}',
             'value_es' => '{"0":"En este punto, elija la moneda que utilizará en el futuro. También debe indicar su nombre y apellido, su género y su fecha de nacimiento."}',
             'value_fr' => '{"0":"À ce stade, sélectionnez la devise que vous utiliserez par la suite. Indiquez également votre prénom et votre nom, précisez votre sexe et saisissez votre date de naissance."}',
             'value_pt' => '{"0":"Nesta fase, escolha a moeda que utilizará futuramente. Informe também o seu nome e sobrenome, selecione o gênero e insira a sua data de nascimento."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In the final step, enter your street and house number, postal code, city, and phone number. It is important to provide accurate information during registration, as you will later need to pass verification to be able to withdraw funds. Don’t forget to specify where you want to use the bonus funds—either for sports betting or casino games. After making your first deposit of at least €10, the bonus will be automatically credited to your account."}',
             'value_es' => '{"0":"En el último paso, introduzca su calle y número de casa, código postal, ciudad y número de teléfono. Es importante proporcionar datos verídicos durante el registro, ya que más adelante tendrá que pasar por un proceso de verificación para poder retirar fondos. No olvide especificar dónde desea utilizar los fondos del bono, si en apuestas deportivas o en juegos de casino. Tras realizar su primer depósito de al menos 10 euros, el bono se acreditará automáticamente en su cuenta."}',
             'value_fr' => '{"0":"À la dernière étape, indiquez votre rue et numéro, code postal, ville et numéro de téléphone. Il est important de fournir des informations exactes lors de l’inscription, car vous devrez par la suite passer une vérification pour pouvoir retirer vos fonds. N’oubliez pas non plus de préciser si vous souhaitez utiliser les fonds bonus pour les paris sportifs ou pour les jeux de casino. Après avoir effectué un premier dépôt d’au moins 10 €, le bonus sera automatiquement crédité sur votre compte."}',
             'value_pt' => '{"0":"Na etapa final, forneça o nome da rua e número da residência, código postal, cidade e número de telefone. É importante fornecer dados corretos no momento do registro, pois será necessário passar por um processo de verificação para poder sacar fundos. Não se esqueça também de indicar se deseja utilizar os fundos do bônus em apostas esportivas ou em jogos de cassino. Após efetuar o primeiro depósito de pelo menos 10 euros, o bônus será creditado automaticamente na sua conta."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Regarding the wagering requirements, the sports bonus must be wagered using accumulators that include at least two events with minimum odds of 2.00, and the maximum wagering period is 7 days. For the casino bonus, the wagering requirement is to place bets 40 times the bonus amount within 14 days."}',
             'value_es' => '{"0":"En cuanto a los requisitos de apuesta, el bono de deportes debe apostarse mediante combinadas que incluyan al menos dos eventos con una cuota mínima de 2.00, y el plazo máximo de apuesta es de 7 días. Para el bono de casino, el requisito es apostar 40 veces el monto del bono en un plazo de 14 días."}',
             'value_fr' => '{"0":"Concernant les conditions de mise, le bonus sport doit être rejoué à l’aide de paris combinés comprenant au moins deux événements avec une cote minimale de 2,00, et le délai maximum de mise est de 7 jours. Pour le bonus de casino, il faut miser 40 fois le montant du bonus dans un délai de 14 jours."}',
             'value_pt' => '{"0":"Quanto aos requisitos de apostas, o bônus de esportes deve ser apostado em acumuladores que incluam pelo menos dois eventos com odds mínimas de 2.00, e o prazo máximo para cumprir a aposta é de 7 dias. Para o bônus de cassino, o requisito é apostar 40 vezes o valor do bônus dentro de 14 dias."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, 20BET does not offer classic no-deposit bonuses for new players. The platform’s main strategy focuses on first deposit bonuses, regular reload bonuses, and promotions for loyal customers."}',
             'value_es' => '{"0":"En este momento, 20BET no ofrece bonos clásicos sin depósito para nuevos jugadores. La estrategia principal de la plataforma se centra en los bonos por el primer depósito, los bonos de recarga regulares y las promociones para clientes habituales."}',
             'value_fr' => '{"0":"Actuellement, 20BET ne propose pas de bonus sans dépôt classiques pour les nouveaux joueurs. La stratégie principale de la plateforme est axée sur les bonus de premier dépôt, les bonus de recharge réguliers et les promotions destinées aux clients fidèles."}',
             'value_pt' => '{"0":"No momento, a 20BET não oferece bônus clássicos sem depósito para novos jogadores. A principal estratégia da plataforma está focada em bônus no primeiro depósito, bônus de recarga regulares e promoções para clientes frequentes."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 20BET?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 20BET?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 20BET ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 20BET?"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers plenty of rewarding promotions for regular players. Casino promotions and special offers allow you to receive extra funds and free spins. Below, we will look at some of them. You can find the full list of promotions on the official website in the Promotions section."}',
             'value_es' => '{"0":"20BET ofrece numerosas promociones ventajosas para los jugadores habituales. Las promociones del casino y las ofertas especiales permiten obtener fondos adicionales y giros gratis. A continuación, veremos algunas de ellas. El listado completo de promociones está disponible en el sitio web oficial en la sección Promotions."}',
             'value_fr' => '{"0":"20BET propose de nombreuses promotions intéressantes pour les joueurs réguliers. Les promotions du casino et les offres spéciales permettent d’obtenir des fonds supplémentaires et des tours gratuits. Ci-dessous, nous en examinerons quelques-unes. La liste complète des promotions est disponible sur le site officiel dans la section Promotions."}',
             'value_pt' => '{"0":"A 20BET oferece várias promoções vantajosas para os jogadores regulares. As promoções de cassino e as ofertas especiais permitem receber fundos extras e rodadas grátis. A seguir, analisaremos algumas delas. A lista completa de promoções pode ser consultada no site oficial na seção Promotions."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Saturday reload bonus"}',
                'value_es' => '{"0":"Bono de recarga del sábado"}',
                'value_fr' => '{"0":"Bonus de dépôt du samedi"}',
                'value_pt' => '{"0":"Bónus de recarga ao sábado"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The Saturday Reload Bonus allows customers to receive an additional 100% bonus after making a deposit on Saturday. From Monday to Friday, you need to place bets totaling at least €20. On Saturday, make a deposit of at least €10 and enter the promo code SRB."}',
             'value_es' => '{"0":"El Saturday Reload Bonus permite a los clientes recibir un bono adicional del 100% después de realizar un depósito el sábado. De lunes a viernes, es necesario realizar apuestas por un total de al menos 20 €. El sábado, haga un depósito de al menos 10 € e introduzca el código promocional SRB."}',
             'value_fr' => '{"0":"Le Saturday Reload Bonus permet aux clients de recevoir un bonus supplémentaire de 100 % après avoir effectué un dépôt le samedi. Du lundi au vendredi, vous devez placer des paris pour un montant total d’au moins 20 €. Le samedi, effectuez un dépôt d’au moins 10 € et saisissez le code promotionnel SRB."}',
             'value_pt' => '{"0":"O Saturday Reload Bonus permite que os clientes recebam um bônus adicional de 100% após realizarem um depósito no sábado. De segunda a sexta-feira, é necessário fazer apostas no valor total de pelo menos 20 €. No sábado, faça um depósito de pelo menos 10 € e insira o código promocional SRB."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw the bonus funds, you must meet the wagering requirements. This requires using multi-bets with at least three events and a minimum odds of 1.50. The wagering period is two days."}',
             'value_es' => '{"0":"Para poder retirar los fondos del bono, es necesario cumplir con los requisitos de apuesta. Esto implica usar apuestas múltiples con al menos tres eventos y una cuota mínima de 1,50. El plazo de apuesta es de dos días."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds du bonus, il est nécessaire de remplir les conditions de mise. Cela exige d’utiliser des paris multiples comprenant au moins trois événements avec une cote minimale de 1,50. La période de mise est de deux jours."}',
             'value_pt' => '{"0":"Para poder retirar os fundos do bônus, é necessário cumprir os requisitos de aposta. Isso exige utilizar apostas múltiplas com pelo menos três eventos e odds mínimas de 1,50. O prazo de apostas é de dois dias."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Forecasts"}',
                'value_es' => '{"0":"Pronósticos"}',
                'value_fr' => '{"0":"Pronostics"}',
                'value_pt' => '{"0":"Previsões"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"This is a sports event prediction program. Players can place bets on several events within weekly contests and receive bonus funds for accurate predictions. The maximum reward depends on the level of accuracy and the amount wagered. If you correctly predict the outcome of 10 proposed matches, you will receive €1000. For 9 correct predictions, the reward is €100, and for 8 correct predictions, €50."}',
             'value_es' => '{"0":"Este es un programa de predicción de eventos deportivos. Los jugadores pueden apostar en varios eventos dentro de concursos semanales y recibir fondos de bonificación por predicciones acertadas. La recompensa máxima depende del nivel de precisión y del importe apostado. Si aciertas el resultado de 10 partidos propuestos, recibirás 1000 €. Por 9 aciertos, la recompensa es de 100 €, y por 8 aciertos, 50 €."}',
             'value_fr' => '{"0":"Il s’agit d’un programme de prédiction d’événements sportifs. Les joueurs peuvent parier sur plusieurs événements dans le cadre de concours hebdomadaires et recevoir des fonds bonus pour des pronostics exacts. La récompense maximale dépend du niveau de précision et du montant misé. Si vous prédisez correctement le résultat de 10 matchs proposés, vous recevrez 1000 €. Pour 9 matchs corrects, la récompense est de 100 €, et pour 8 matchs corrects, 50 €."}',
             'value_pt' => '{"0":"Este é um programa de previsão de eventos desportivos. Os jogadores podem apostar em vários eventos dentro de concursos semanais e receber fundos de bónus por previsões corretas. A recompensa máxima depende do nível de precisão e do valor apostado. Se prever corretamente o resultado de 10 jogos propostos, receberá 1000 €. Por 9 acertos, a recompensa é de 100 €, e por 8 acertos, 50 €."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Please note that to participate in the promotion, the total amount of deposits in the last 5 days must be at least €20."}',
             'value_es' => '{"0":"Tenga en cuenta que, para participar en la promoción, el importe total de los depósitos en los últimos 5 días debe ser de al menos 20 €."}',
             'value_fr' => '{"0":"Veuillez noter que, pour participer à la promotion, le montant total des dépôts au cours des 5 derniers jours doit être d’au moins 20 €."}',
             'value_pt' => '{"0":"Atenção: para participar na promoção, o valor total dos depósitos nos últimos 5 dias deve ser de pelo menos 20 €."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Program"}',
                'value_es' => '{"0":"Programa Vip De 20BET"}',
                'value_fr' => '{"0":"Programme Vip De 20BET"}',
                'value_pt' => '{"0":"Programa Vip Da 20BET"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"This is a program for regular casino players. It provides the accumulation of points for every bet on slots, which can later be exchanged for bonus funds. All active players have access to the program. All rewards come with a wagering requirement of x10, while funds obtained from exchanging points into real money are credited with a wagering requirement of x5."}',
             'value_es' => '{"0":"Este es un programa para jugadores habituales del casino. Permite acumular puntos por cada apuesta en las tragamonedas, que luego pueden canjearse por fondos de bonificación. Todos los jugadores activos tienen acceso al programa. Todas las recompensas tienen un requisito de apuesta de x10, mientras que los fondos obtenidos al canjear los puntos por dinero real se acreditan con un requisito de apuesta de x5."}',
             'value_fr' => '{"0":"Il s’agit d’un programme destiné aux joueurs réguliers du casino. Il permet d’accumuler des points pour chaque mise sur les machines à sous, qui peuvent ensuite être échangés contre des fonds bonus. Tous les joueurs actifs ont accès au programme. Toutes les récompenses sont soumises à une exigence de mise de x10, tandis que les fonds obtenus en échangeant les points contre de l’argent réel sont soumis à une exigence de mise de x5."}',
             'value_pt' => '{"0":"Este é um programa para jogadores frequentes do casino. Ele permite acumular pontos por cada aposta nas slots, que depois podem ser trocados por fundos de bónus. Todos os jogadores ativos têm acesso ao programa. Todas as recompensas têm um requisito de aposta de x10, enquanto os fundos obtidos através da troca de pontos por dinheiro real são creditados com um requisito de aposta de x5."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can multiple promo codes be used at the same time?"}',
             'value_es' => '{"0":"¿Se pueden usar varios códigos promocionales al mismo tiempo?"}',
             'value_fr' => '{"0":"Est-il possible d’utiliser plusieurs codes promotionnels en même temps ?"}',
             'value_pt' => '{"0":"É possível usar vários códigos promocionais ao mesmo tempo?"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 27
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"No, 20BET allows only one promo code to be used."}',
             'value_es' => '{"0":"No, 20BET permite utilizar solo un código promocional."}',
             'value_fr' => '{"0":"Non, 20BET n’autorise l’utilisation que d’un seul code promotionnel."}',
             'value_pt' => '{"0":"Não, a 20BET permite utilizar apenas um código promocional."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take for the bonus to be credited after activating a promo code?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda en acreditarse el bono después de activar un código promocional?"}',
             'value_fr' => '{"0":"Combien de temps faut-il pour que le bonus soit crédité après l’activation d’un code promotionnel ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para o bônus ser creditado após a ativação de um código promocional?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting or casino bonus is usually credited instantly after making a deposit."}',
             'value_es' => '{"0":"El bono de apuestas deportivas o de casino generalmente se acredita de forma instantánea tras realizar un depósito."}',
             'value_fr' => '{"0":"Le bonus de paris sportifs ou de casino est généralement crédité instantanément après le dépôt."}',
             'value_pt' => '{"0":"O bônus de apostas esportivas ou de cassino geralmente é creditado instantaneamente após o depósito."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"What happens if I don’t meet the wagering requirements within the given time?"}',
             'value_es' => '{"0":"¿Qué sucede si no cumplo con los requisitos de apuesta en el plazo establecido?"}',
             'value_fr' => '{"0":"Que se passe-t-il si je ne respecte pas les conditions de mise dans le délai imparti ?"}',
             'value_pt' => '{"0":"O que acontece se eu não cumprir os requisitos de apostas dentro do prazo estabelecido?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Unwagered bonuses are automatically removed from the account once the wagering period expires."}',
             'value_es' => '{"0":"Los bonos no apostados se eliminan automáticamente de la cuenta una vez que expira el período de apuesta."}',
             'value_fr' => '{"0":"Les bonus non joués sont automatiquement supprimés du compte à l’expiration de la période de mise."}',
             'value_pt' => '{"0":"Os bônus não utilizados são automaticamente removidos da conta após o término do período de apostas."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can the bonus be wagered on live bets?"}',
             'value_es' => '{"0":"¿Se puede liberar el bono en apuestas en vivo?"}',
             'value_fr' => '{"0":"Peut-on miser le bonus sur des paris en direct ?"}',
             'value_pt' => '{"0":"É possível apostar o bônus em apostas ao vivo?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, sports bonuses can also be used for live betting."}',
             'value_es' => '{"0":"Sí, los bonos de deportes también se pueden usar en apuestas en directo."}',
             'value_fr' => '{"0":"Oui, les bonus sportifs peuvent également être utilisés pour les paris en direct."}',
             'value_pt' => '{"0":"Sim, os bônus de esportes também podem ser usados em apostas ao vivo."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 34
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Is the VIP program suitable for new players?"}',
             'value_es' => '{"0":"¿Es adecuada la programación VIP para nuevos jugadores?"}',
             'value_fr' => '{"0":"Le programme VIP convient-il aux nouveaux joueurs ?"}',
             'value_pt' => '{"0":"O programa VIP é adequado para novos jogadores?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 35
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The program is more oriented towards regular players, but all players automatically start accumulating points from their first bet."}',
             'value_es' => '{"0":"El programa está más orientado a los jugadores habituales, pero todos los jugadores comienzan automáticamente a acumular puntos desde su primera apuesta."}',
             'value_fr' => '{"0":"Le programme est davantage destiné aux joueurs réguliers, mais tous les joueurs commencent automatiquement à accumuler des points dès leur premier pari."}',
             'value_pt' => '{"0":"O programa é mais voltado para jogadores regulares, mas todos os jogadores começam automaticamente a acumular pontos a partir da sua primeira aposta."}',
             'order' => 35
            ]
        );
    }
}
