<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET is an international bookmaker that offers a variety of bonus programs for both new and experienced players. The company provides not only sports betting but also a large casino section, making it appealing to a wide audience. "}',
             'value_es' => '{"0":"4RABET es una casa de apuestas internacional que ofrece una variedad de programas de bonificación tanto para jugadores nuevos como experimentados. La compañía ofrece no solo apuestas deportivas, sino también una amplia sección de casino, lo que la hace atractiva para una audiencia amplia."}',
             'value_fr' => '{"0":"4RABET est un bookmaker international qui propose une variété de programmes de bonus pour les joueurs débutants comme expérimentés. La société offre non seulement des paris sportifs, mais également une grande section casino, ce qui la rend attrayante pour un large public."}',
             'value_pt' => '{"0":"A 4RABET é uma casa de apostas internacional que oferece uma variedade de programas de bônus para jogadores novos e experientes. A empresa oferece não apenas apostas esportivas, mas também uma grande seção de cassino, tornando-a atraente para um público amplo."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"One of 4RABET’s key advantages is its system of promo codes and promotions, which allows players to receive additional funds for betting, free spins, and other bonuses, enhancing the efficiency of the game. In this review, we will take a detailed look at how promo codes work, the conditions for their activation, the types of bonuses, and current promotions. We will also explain how to maximize the welcome bonus using the promo code :promocode."}',
             'value_es' => '{"0":"Una de las principales ventajas de 4RABET es su sistema de códigos promocionales y promociones, que permite a los jugadores recibir fondos adicionales para apostar, giros gratis y otros bonos, mejorando la eficiencia del juego. En esta reseña, analizaremos en detalle cómo funcionan los códigos promocionales, las condiciones para su activación, los tipos de bonos y las promociones actuales. También explicaremos cómo maximizar el bono de bienvenida utilizando el código promocional :promocode."}',
             'value_fr' => '{"0":"L’un des principaux avantages de 4RABET est son système de codes promotionnels et de promotions, qui permet aux joueurs de recevoir des fonds supplémentaires pour parier, des tours gratuits et d’autres bonus, améliorant ainsi l’efficacité du jeu. Dans cet article, nous examinerons en détail le fonctionnement des codes promo, les conditions de leur activation, les types de bonus et les promotions en cours. Nous expliquerons également comment maximiser le bonus de bienvenue en utilisant le code promo :promocode."}',
             'value_pt' => '{"0":"Uma das principais vantagens da 4RABET é o seu sistema de códigos promocionais e promoções, que permite aos jogadores receber fundos adicionais para apostas, rodadas grátis e outros bônus, aumentando a eficiência do jogo. Nesta análise, examinaremos detalhadamente como funcionam os códigos promocionais, as condições para sua ativação, os tipos de bônus e as promoções atuais. Também explicaremos como maximizar o bônus de boas-vindas usando o código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the MelBet promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de MelBet?"}',
                'value_fr' => '{"0":"Comment profiter du code promo MelBet ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da MelBet?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To activate a bonus at 4RABET, you first need to complete the registration process. To do this, go to the official website and click the Register button. A registration form will appear. New players can register using their phone number. During registration, select the currency you will use and create a password."}',
             'value_es' => '{"0":"Para activar un bono en 4RABET, primero debes completar el proceso de registro. Para ello, ve al sitio web oficial y haz clic en el botón Registrarse. Aparecerá un formulario de registro. Los nuevos jugadores pueden registrarse utilizando su número de teléfono. Durante el registro, selecciona la moneda que utilizarás y crea una contraseña."}',
             'value_fr' => '{"0":"Pour activer un bonus sur 4RABET, vous devez d’abord compléter le processus d’inscription. Pour ce faire, rendez-vous sur le site officiel et cliquez sur le bouton S’inscrire. Un formulaire d’inscription apparaîtra. Les nouveaux joueurs peuvent s’inscrire en utilisant leur numéro de téléphone. Pendant l’inscription, choisissez la devise que vous utiliserez et créez un mot de passe."}',
             'value_pt' => '{"0":"Para ativar um bônus na 4RABET, primeiro é necessário completar o processo de registro. Para isso, acesse o site oficial e clique no botão Registrar. Um formulário de registro aparecerá. Os novos jogadores podem se registrar usando o número de telefone. Durante o registro, escolha a moeda que será utilizada e crie uma senha."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"When filling out the registration form, make sure to click the «I have a promo code» button and enter the promo code :promocode in the designated field before confirming account creation. Once the promo code is activated, the bonus funds are automatically credited to your account."}',
             'value_es' => '{"0":"Al completar el formulario de registro, asegúrate de hacer clic en el botón «I have a promo code» e ingresa el código promocional :promocode en el campo correspondiente antes de confirmar la creación de la cuenta. Una vez activado el código promocional, los fondos del bono se acreditan automáticamente en tu cuenta."}',
             'value_fr' => '{"0":"Lors de la saisie du formulaire d’inscription, veillez à cliquer sur le bouton « I have a promo code » et à entrer le code promo :promocode dans le champ prévu avant de confirmer la création du compte. Une fois le code promo activé, les fonds du bonus sont automatiquement crédités sur votre compte."}',
             'value_pt' => '{"0":"Ao preencher o formulário de registro, certifique-se de clicar no botão «I have a promo code» e insira o código promocional :promocode no campo indicado antes de confirmar a criação da conta. Após a ativação do código promocional, os fundos do bônus são creditados automaticamente na sua conta."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Please note that bonus funds can only be withdrawn after fulfilling the wagering requirements. For sports betting, the bonus must be wagered five times on accumulator bets containing at least three events with odds of 1.40 or higher. The wagering period is 30 days from the moment the bonus is credited."}',
             'value_es' => '{"0":"Ten en cuenta que los fondos del bono solo se pueden retirar después de cumplir con los requisitos de apuesta. Para las apuestas deportivas, el bono debe apostarse cinco veces en apuestas combinadas que contengan al menos tres eventos con cuotas de 1.40 o superiores. El período para cumplir con los requisitos de apuesta es de 30 días desde que se recibe el bono."}',
             'value_fr' => '{"0":"Veuillez noter que les fonds du bonus ne peuvent être retirés qu’après avoir rempli les conditions de mise. Pour les paris sportifs, le bonus doit être misé cinq fois sur des paris combinés contenant au moins trois événements avec des cotes de 1,40 ou plus. La période de mise est de 30 jours à compter de l’attribution du bonus."}',
             'value_pt' => '{"0":"Observe que os fundos do bônus só podem ser retirados após o cumprimento dos requisitos de aposta. Para apostas esportivas, o bônus deve ser apostado cinco vezes em apostas acumuladas contendo pelo menos três eventos com odds de 1,40 ou superiores. O período de aposta é de 30 dias a partir do crédito do bônus."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For casino bonuses, a 30x wagering requirement applies, which must be fulfilled on the slots included in the promotion. Other games, such as live casino or jackpot games, do not count. The wagering period is 7 days."}',
             'value_es' => '{"0":"Para los bonos de casino, se aplica un requisito de apuesta de 30x, que debe cumplirse en las tragamonedas incluidas en la promoción. Otros juegos, como casino en vivo o jackpots, no cuentan. El período de apuesta es de 7 días."}',
             'value_fr' => '{"0":"Pour les bonus de casino, un wagering de 30x s’applique, qui doit être rempli sur les machines à sous incluses dans la promotion. Les autres jeux, tels que le casino en direct ou les jackpots, ne sont pas comptabilisés. La période de mise est de 7 jours."}',
             'value_pt' => '{"0":"Para bônus de cassino, aplica-se um requisito de aposta de 30x, que deve ser cumprido nos slots incluídos na promoção. Outros jogos, como cassino ao vivo ou jackpots, não são contabilizados. O período de aposta é de 7 dias."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"At the time of this review, 4RABET does not offer no-deposit bonuses. All current promotions and bonuses require at least a minimum deposit to activate. This is standard practice for many bookmakers."}',
             'value_es' => '{"0":"Al momento de esta revisión, 4RABET no ofrece bonos sin depósito. Todas las promociones y bonos actuales requieren al menos un depósito mínimo para activarse. Esta es una práctica estándar para muchos corredores de apuestas."}',
             'value_fr' => '{"0":"Au moment de cette revue, 4RABET ne propose pas de bonus sans dépôt. Toutes les promotions et bonus actuels nécessitent au moins un dépôt minimum pour être activés. C’est une pratique courante chez de nombreux bookmakers."}',
             'value_pt' => '{"0":"No momento desta análise, a 4RABET não oferece bônus sem depósito. Todas as promoções e bônus atuais exigem pelo menos um depósito mínimo para serem ativados. Esta é uma prática comum entre muitos bookmakers."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at 4RABET?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en 4RABET?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur 4RABET ?"}',
                'value_pt' => '{"0":"E se você já for registrado na 4RABET?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform regularly offers promotions and bonuses for regular customers. These can include deposit bonuses, cashback, free spins, as well as special promo codes for specific types of bets."}',
             'value_es' => '{"0":"Sí, la plataforma ofrece regularmente promociones y bonos para clientes habituales. Estos pueden incluir bonos por depósitos, reembolsos, giros gratis, así como códigos promocionales especiales para tipos específicos de apuestas."}',
             'value_fr' => '{"0":"Oui, la plateforme propose régulièrement des promotions et des bonus pour les clients réguliers. Cela peut inclure des bonus de dépôt, du cashback, des tours gratuits, ainsi que des codes promo spéciaux pour certains types de paris."}',
             'value_pt' => '{"0":"Sim, a plataforma oferece regularmente promoções e bônus para clientes regulares. Estes podem incluir bônus de depósito, cashback, rodadas grátis, bem como códigos promocionais especiais para tipos específicos de apostas."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4RABET Casino Welcome Offer"}',
                'value_es' => '{"0":"Oferta de bienvenida del casino 4RABET"}',
                'value_fr' => '{"0":"Offre de bienvenue du casino 4RABET"}',
                'value_pt' => '{"0":"Oferta de boas-vindas do cassino 4RABET"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is designed for new players who are playing at 4RABET Casino for the first time. It offers a first deposit bonus of up to 150% and free spins on popular slots from providers such as NetEnt, Pragmatic Play, and others. "}',
             'value_es' => '{"0":"Esta promoción está dirigida a nuevos jugadores que juegan en 4RABET Casino por primera vez. Ofrece un bono por el primer depósito de hasta el 150% y giros gratis en tragamonedas populares de proveedores como NetEnt, Pragmatic Play y otros."}',
             'value_fr' => '{"0":"Cette promotion est destinée aux nouveaux joueurs qui jouent pour la première fois au casino 4RABET. Elle offre un bonus sur le premier dépôt jusqu’à 150 % ainsi que des tours gratuits sur des machines à sous populaires de fournisseurs tels que NetEnt, Pragmatic Play et d’autres."}',
             'value_pt' => '{"0":"Esta promoção é destinada a novos jogadores que jogam no 4RABET Casino pela primeira vez. Ela oferece um bônus de primeiro depósito de até 150% e rodadas grátis em slots populares de provedores como NetEnt, Pragmatic Play e outros."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw funds, the wagering requirements must be met. You need to wager the bonus amount thirty times on slots from the promotional list within 7 days. By activating this offer, you get the chance to explore the full range of games and increase your chances of winning without spending additional personal funds."}',
             'value_es' => '{"0":"Para poder retirar los fondos, se deben cumplir los requisitos de apuesta. Es necesario apostar el monto del bono treinta veces en las tragamonedas de la lista promocional dentro de los 7 días. Al activar esta oferta, tienes la oportunidad de explorar toda la gama de juegos y aumentar tus posibilidades de ganar sin gastar fondos propios adicionales."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds, il faut respecter les conditions de mise. Il est nécessaire de miser le montant du bonus trente fois sur les machines à sous de la liste promotionnelle dans un délai de 7 jours. En activant cette offre, vous avez la possibilité de découvrir l’ensemble des jeux et d’augmenter vos chances de gagner sans dépenser de fonds personnels supplémentaires."}',
             'value_pt' => '{"0":"Para poder retirar os fundos, é necessário cumprir os requisitos de aposta. É necessário apostar o valor do bônus trinta vezes nos slots da lista promocional dentro de 7 dias. Ao ativar esta oferta, você tem a oportunidade de explorar toda a gama de jogos e aumentar suas chances de ganhar sem gastar fundos pessoais adicionais."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Daily and Weekly Missions"}',
                'value_es' => '{"0":"Misiones Diarias y Semanales"}',
                'value_fr' => '{"0":"Missions Quotidiennes et Hebdomadaires"}',
                'value_pt' => '{"0":"Missões Diárias e Semanais"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For regular 4RABET players, daily and weekly missions are available. These tasks allow you to earn additional bonuses, free spins, or cashback."}',
             'value_es' => '{"0":"Para los jugadores habituales de 4RABET, hay misiones diarias y semanales disponibles. Estas tareas permiten obtener bonos adicionales, giros gratis o cashback."}',
             'value_fr' => '{"0":"Pour les joueurs réguliers de 4RABET, des missions quotidiennes et hebdomadaires sont disponibles. Ces missions permettent de gagner des bonus supplémentaires, des tours gratuits ou du cashback."}',
             'value_pt' => '{"0":"Para os jogadores regulares da 4RABET, há missões diárias e semanais disponíveis. Essas tarefas permitem ganhar bônus adicionais, rodadas grátis ou cashback."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The missions cover both sports betting and casino games, making them a versatile tool for active players. Tasks must be completed within a certain period, and bonuses are credited after successfully completing the missions. Importantly, this promotion does not require meeting wagering requirements to withdraw bonus funds."}',
             'value_es' => '{"0":"Las misiones abarcan tanto apuestas deportivas como juegos de casino, lo que las convierte en una herramienta versátil para jugadores activos. Las tareas deben completarse dentro de un período determinado, y los bonos se acreditan tras finalizar con éxito las misiones. Además, es importante destacar que esta promoción no requiere cumplir con los requisitos de apuesta para retirar los fondos del bono."}',
             'value_fr' => '{"0":"Les missions couvrent à la fois les paris sportifs et les jeux de casino, ce qui en fait un outil polyvalent pour les joueurs actifs. Les tâches doivent être accomplies dans un délai déterminé, et les bonus sont crédités après la réussite des missions. Il est également important de noter que cette promotion ne nécessite pas de remplir les conditions de mise pour retirer les fonds bonus."}',
             'value_pt' => '{"0":"As missões abrangem tanto apostas esportivas quanto jogos de cassino, tornando-as uma ferramenta versátil para jogadores ativos. As tarefas devem ser concluídas dentro de um determinado período, e os bônus são creditados após a conclusão bem-sucedida das missões. Além disso, é importante destacar que esta promoção não exige o cumprimento dos requisitos de aposta para sacar os fundos do bônus."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Is it possible to receive multiple bonuses at the same time?"}',
             'value_es' => '{"0":"¿Es posible recibir varios bonos al mismo tiempo?"}',
             'value_fr' => '{"0":"Est-il possible de recevoir plusieurs bonus en même temps ?"}',
             'value_pt' => '{"0":"É possível receber vários bônus ao mesmo tempo?"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Usually, 4RABET allows activating only one bonus per category, either sports betting or casino."}',
             'value_es' => '{"0":"Por lo general, 4RABET permite activar solo un bono por categoría, ya sea apuestas deportivas o casino."}',
             'value_fr' => '{"0":"En général, 4RABET permet d’activer un seul bonus par catégorie, soit pour les paris sportifs, soit pour le casino."}',
             'value_pt' => '{"0":"Normalmente, a 4RABET permite ativar apenas um bônus por categoria, seja para apostas esportivas ou cassino."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit to activate a bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo para activar un bono?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum pour activer un bonus ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo para ativar um bônus?"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is $1 or the equivalent in another currency, depending on the chosen payment method. However, note that the bonus is credited based on the deposit amount. So, the higher your deposit, the larger the bonus you receive."}',
             'value_es' => '{"0":"El depósito mínimo es de $1 o su equivalente en otra moneda, según el método de pago elegido. Sin embargo, tenga en cuenta que el bono se acredita según el monto del depósito. Por lo tanto, cuanto mayor sea el depósito, mayor será el bono que reciba."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 $ ou l’équivalent dans une autre devise, selon le mode de paiement choisi. Cependant, il faut noter que le bonus est crédité en fonction du montant du dépôt. Ainsi, plus le dépôt est élevé, plus le bonus que vous recevez est important."}',
             'value_pt' => '{"0":"O depósito mínimo é de $1 ou o equivalente em outra moeda, dependendo do método de pagamento escolhido. No entanto, observe que o bônus é creditado com base no valor do depósito. Portanto, quanto maior o depósito, maior será o bônus recebido."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"How much time is given to wager the bonus?"}',
             'value_es' => '{"0":"¿Cuánto tiempo se da para apostar el bono?"}',
             'value_fr' => '{"0":"Combien de temps est accordé pour miser le bonus ?"}',
             'value_pt' => '{"0":"Quanto tempo é dado para apostar o bônus?"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For the casino, the wagering period is 7 days, while for sports bets it is 30 days from the moment the bonus is activated."}',
             'value_es' => '{"0":"Para el casino, el período de apuesta es de 7 días, mientras que para las apuestas deportivas es de 30 días desde el momento en que se activa el bono."}',
             'value_fr' => '{"0":"Pour le casino, la période de mise est de 7 jours, tandis que pour les paris sportifs, elle est de 30 jours à partir du moment où le bonus est activé."}',
             'value_pt' => '{"0":"Para o cassino, o período de apostas é de 7 dias, enquanto para apostas esportivas é de 30 dias a partir do momento em que o bônus é ativado."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 28
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonus funds be withdrawn without wagering?"}',
             'value_es' => '{"0":"¿Se pueden retirar los fondos del bono sin cumplir los requisitos de apuesta?"}',
             'value_fr' => '{"0":"Peut-on retirer les fonds bonus sans effectuer le pari requis ?"}',
             'value_pt' => '{"0":"É possível sacar os fundos do bônus sem cumprir os requisitos de aposta?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"No, you must first complete all wagering requirements; only after that will the bonus funds and winnings become available for withdrawal."}',
             'value_es' => '{"0":"No, primero debe cumplir todos los requisitos de apuesta; solo después de eso los fondos del bono y las ganancias estarán disponibles para su retiro."}',
             'value_fr' => '{"0":"Non, vous devez d\'abord remplir toutes les conditions de mise ; ce n\'est qu\'ensuite que les fonds bonus et les gains seront disponibles pour le retrait."}',
             'value_pt' => '{"0":"Não, você deve primeiro cumprir todos os requisitos de aposta; somente depois disso os fundos do bônus e os ganhos estarão disponíveis para saque."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Can promo codes be activated in mobile apps?"}',
             'value_es' => '{"0":"¿Se pueden activar los códigos promocionales en las aplicaciones móviles?"}',
             'value_fr' => '{"0":"Peut-on activer les codes promo dans les applications mobiles ?"}',
             'value_pt' => '{"0":"É possível ativar códigos promocionais nos aplicativos móveis?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all current promotions and promo codes are available both on the desktop version and in the 4RABET mobile app. Activation works the same way as on the website."}',
             'value_es' => '{"0":"Sí, todas las promociones y códigos promocionales actuales están disponibles tanto en la versión de escritorio como en la aplicación móvil de 4RABET. La activación funciona de la misma manera que en el sitio web."}',
             'value_fr' => '{"0":"Oui, toutes les promotions et codes promo actuels sont disponibles à la fois sur la version de bureau et dans l’application mobile 4RABET. L’activation fonctionne de la même manière que sur le site."}',
             'value_pt' => '{"0":"Sim, todas as promoções e códigos promocionais atuais estão disponíveis tanto na versão para desktop quanto no aplicativo móvel 4RABET. A ativação funciona da mesma forma que no site."}',
             'order' => 31
            ]
        );
    }
}
