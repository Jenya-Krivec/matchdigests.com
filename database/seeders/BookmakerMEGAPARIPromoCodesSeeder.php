<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Bonuses and promo codes at MEGAPARI are designed to increase interest in sports betting and casino games. In addition to standard deposit bonuses, the bookmaker offers unique promotions such as Mega Booster and Accumulator of the Day, which allow for more profitable bets and additional winnings. It is important to note that all bonuses come with clear wagering requirements, so we suggest reviewing them in our overview or in more detail on the company\'s official website."}',
             'value_es' => '{"0":"Los bonos y códigos promocionales en MEGAPARI están diseñados para aumentar el interés en las apuestas deportivas y los juegos de casino. Además de los bonos de depósito estándar, el bookmaker ofrece promociones únicas como Mega Booster y Accumulator of the Day, que permiten realizar apuestas más rentables y obtener ganancias adicionales. Es importante destacar que todos los bonos vienen con requisitos claros de apuesta, por lo que sugerimos revisarlos en nuestro análisis o con más detalle en el sitio web oficial de la compañía."}',
             'value_fr' => '{"0":"Les bonus et codes promotionnels sur MEGAPARI sont conçus pour susciter davantage d’intérêt pour les paris sportifs et les jeux de casino. En plus des bonus de dépôt standards, le bookmaker propose des promotions uniques telles que Mega Booster et Accumulator of the Day, qui permettent de réaliser des paris plus avantageux et d’obtenir des gains supplémentaires. Il est important de noter que tous les bonus sont accompagnés de conditions de mise claires, nous vous suggérons donc de les consulter dans notre aperçu ou plus en détail sur le site officiel de la société."}',
             'value_pt' => '{"0":"Os bônus e códigos promocionais no MEGAPARI são projetados para aumentar o interesse em apostas esportivas e jogos de cassino. Além dos bônus de depósito padrão, o bookmaker oferece promoções únicas como Mega Booster e Accumulator of the Day, que permitem fazer apostas mais lucrativas e obter ganhos adicionais. É importante observar que todos os bônus vêm com requisitos claros de apostas, por isso sugerimos consultá-los em nossa análise ou de forma mais detalhada no site oficial da empresa."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In this overview, we also explain how to increase your initial deposit during registration using our promo code: :promocode."}',
             'value_es' => '{"0":"En este análisis también explicamos cómo aumentar tu depósito inicial al registrarte utilizando nuestro código promocional: :promocode."}',
             'value_fr' => '{"0":"Dans cet aperçu, nous expliquons également comment augmenter votre dépôt initial lors de l’inscription en utilisant notre code promotionnel : :promocode."}',
             'value_pt' => '{"0":"Nesta análise, também explicamos como aumentar seu depósito inicial durante o registro usando nosso código promocional: :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to benefit from the MEGAPARI promo code?"}',
                'value_es' => '{"0":"¿Cómo beneficiarse del código promocional de MEGAPARI?"}',
                'value_fr' => '{"0":"Comment profiter du code promo MEGAPARI ?"}',
                'value_pt' => '{"0":"Como se beneficiar do código promocional da MEGAPARI?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To receive the welcome bonus when registering at MEGAPARI, simply use our special promo code :promocode during account creation."}',
             'value_es' => '{"0":"Para recibir el bono de bienvenida al registrarte en MEGAPARI, simplemente utiliza nuestro código promocional especial :promocode durante la creación de la cuenta."}',
             'value_fr' => '{"0":"Pour recevoir le bonus de bienvenue lors de l’inscription sur MEGAPARI, il suffit d’utiliser notre code promo spécial :promocode lors de la création du compte."}',
             'value_pt' => '{"0":"Para receber o bônus de boas-vindas ao se registrar no MEGAPARI, basta usar nosso código promocional especial :promocode durante a criação da conta."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Go to the website and click the Registration button located at the top right. You will be taken to a page where you can register via email, phone number, or social networks. Then, select your country, currency, email, phone number, and create a password. At this stage, you need to enter our promo code :promocode in the designated field."}',
             'value_es' => '{"0":"Ve al sitio web y haz clic en el botón de Registro ubicado en la parte superior derecha. Serás dirigido a una página donde podrás registrarte mediante correo electrónico, número de teléfono o redes sociales. Luego, selecciona tu país, moneda, correo electrónico, número de teléfono y crea una contraseña. En esta etapa, debes ingresar nuestro código promocional :promocode en el campo correspondiente."}',
             'value_fr' => '{"0":"Rendez-vous sur le site et cliquez sur le bouton Inscription situé en haut à droite. Vous serez dirigé vers une page où vous pourrez vous inscrire via e-mail, numéro de téléphone ou réseaux sociaux. Ensuite, indiquez votre pays, devise, e-mail, numéro de téléphone et créez un mot de passe. À cette étape, vous devez entrer notre code promo :promocode dans le champ prévu à cet effet."}',
             'value_pt' => '{"0":"Acesse o site e clique no botão Registro localizado no canto superior direito. Você será direcionado para uma página onde poderá se registrar via e-mail, número de telefone ou redes sociais. Em seguida, selecione seu país, moeda, e-mail, número de telefone e crie uma senha. Nesta etapa, é necessário inserir nosso código promocional :promocode no campo correspondente."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Also, make sure to indicate where you will use the bonus funds, for sports betting or in the casino. After confirming your account and making your first deposit, the bonus will be automatically activated."}',
             'value_es' => '{"0":"También asegúrate de indicar dónde utilizarás los fondos del bono, para apuestas deportivas o en el casino. Tras confirmar tu cuenta y realizar tu primer depósito, el bono se activará automáticamente."}',
             'value_fr' => '{"0":"Assurez-vous également d’indiquer où vous utiliserez les fonds du bonus, pour les paris sportifs ou au casino. Après la confirmation de votre compte et le premier dépôt, le bonus sera automatiquement activé."}',
             'value_pt' => '{"0":"Também certifique-se de indicar onde usará os fundos do bônus, para apostas esportivas ou no cassino. Após confirmar sua conta e fazer o primeiro depósito, o bônus será ativado automaticamente."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For sports betting, bonus funds must be wagered with a minimum total odds of 1.40 in accumulator bets, and the wagering period is 7 days. In the casino, the wagering requirement is 35x the bonus amount, with a wagering period of 14 days."}',
             'value_es' => '{"0":"Para apuestas deportivas, los fondos del bono deben apostarse con una cuota mínima total de 1.40 en apuestas combinadas, y el periodo de apuesta es de 7 días. En el casino, el requisito de apuesta es de 35 veces el monto del bono, con un periodo de 14 días."}',
             'value_fr' => '{"0":"Assurez-vous également d’indiquer où vous utiliserez les fonds du bonus, pour les paris sportifs ou au casino. Après la confirmation de votre compte et le premier dépôt, le bonus sera automatiquement activé."}',
             'value_pt' => '{"0":"Para apostas esportivas, os fundos do bônus devem ser apostados com uma cota mínima total de 1,40 em apostas combinadas, e o período de aposta é de 7 dias. No cassino, o requisito de apostas é de 35 vezes o valor do bônus, com período de aposta de 14 dias."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Are there any no deposit bonuses?"}',
                'value_es' => '{"0":"¿Hay bonos sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"As of this review, MEGAPARI does not offer traditional no-deposit bonuses for new users. However, special promotions occasionally appear where you can receive a small bonus without making a deposit. Therefore, we recommend checking the Bonuses section from time to time to see the available promotions and not miss a profitable offer."}',
             'value_es' => '{"0":"Al momento de esta revisión, MEGAPARI no ofrece bonos sin depósito tradicionales para nuevos usuarios. Sin embargo, ocasionalmente aparecen promociones especiales donde se puede recibir un pequeño bono sin realizar un depósito. Por lo tanto, recomendamos visitar la sección de Bonos de vez en cuando para ver las promociones disponibles y no perderse una oferta rentable."}',
             'value_fr' => '{"0":"Au moment de cette revue, MEGAPARI ne propose pas de bonus sans dépôt traditionnels pour les nouveaux utilisateurs. Cependant, des promotions spéciales apparaissent parfois, permettant de recevoir un petit bonus sans effectuer de dépôt. Nous vous recommandons donc de consulter régulièrement la section Bonus afin de découvrir les promotions disponibles et de ne pas manquer une offre avantageuse."}',
             'value_pt' => '{"0":"No momento desta análise, o MEGAPARI não oferece bônus sem depósito tradicionais para novos usuários. No entanto, ocasionalmente surgem promoções especiais em que é possível receber um pequeno bônus sem fazer depósito. Portanto, recomendamos visitar a seção de Bônus de vez em quando para conferir as promoções disponíveis e não perder uma oferta vantajosa."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"What if you are already registered at MOSTBET?"}',
                'value_es' => '{"0":"¿Qué pasa si ya estás registrado en MOSTBET?"}',
                'value_fr' => '{"0":"Que se passe-t-il si vous êtes déjà inscrit sur MOSTBET ?"}',
                'value_pt' => '{"0":"E se você já for registrado na MOSTBET?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, MEGAPARI takes care of its regular customers. They have access to regular deposit bonuses, cashbacks, as well as special offers on popular sports events and casino tournaments. The loyalty system allows players to collect points for their bets, which can then be exchanged for bonus funds."}',
             'value_es' => '{"0":"Sí, MEGAPARI cuida a sus clientes habituales. Ellos tienen acceso a bonos de depósito regulares, devoluciones de dinero, así como ofertas especiales en eventos deportivos populares y torneos de casino. El sistema de lealtad permite acumular puntos por las apuestas, que luego pueden canjearse por fondos de bonificación."}',
             'value_fr' => '{"0":"Oui, MEGAPARI prend soin de ses clients réguliers. Ils ont accès à des bonus de dépôt réguliers, des cashback, ainsi qu’à des offres spéciales sur les événements sportifs populaires et les tournois de casino. Le système de fidélité permet de collecter des points sur les mises, qui peuvent ensuite être échangés contre des fonds bonus."}',
             'value_pt' => '{"0":"Sim, o MEGAPARI cuida de seus clientes regulares. Eles têm acesso a bônus de depósito regulares, cashbacks, bem como ofertas especiais em eventos esportivos populares e torneios de cassino. O sistema de fidelidade permite acumular pontos pelas apostas, que depois podem ser trocados por fundos de bônus."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Mega Booster"}',
                'value_es' => '{"0":"Mega Booster"}',
                'value_fr' => '{"0":"Mega Booster"}',
                'value_pt' => '{"0":"Mega Booster"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"This is a special offer for sports betting. Players receive boosted odds on selected events and the opportunity to increase their winnings with an additional multiplier. The promotion runs regularly, and the list of matches it applies to is updated daily."}',
             'value_es' => '{"0":"Esta es una oferta especial para apuestas deportivas. Los jugadores reciben cuotas aumentadas en eventos seleccionados y la oportunidad de incrementar sus ganancias mediante un multiplicador adicional. La promoción se realiza de forma regular, y la lista de partidos a los que se aplica se actualiza diariamente."}',
             'value_fr' => '{"0":"C’est une offre spéciale pour les paris sportifs. Les joueurs bénéficient de cotes augmentées sur certains événements sélectionnés et ont la possibilité d’augmenter leurs gains grâce à un multiplicateur supplémentaire. La promotion fonctionne régulièrement, et la liste des matchs concernés est mise à jour quotidiennement."}',
             'value_pt' => '{"0":"Esta é uma oferta especial para apostas esportivas. Os jogadores recebem odds aumentadas em eventos selecionados e a oportunidade de aumentar seus ganhos com um multiplicador adicional. A promoção ocorre regularmente, e a lista de partidas aplicáveis é atualizada diariamente."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Depending on the number of events in the accumulator, the size of the bonus will be:"}',
             'value_es' => '{"0":"Dependiendo de la cantidad de eventos en el combinado, el tamaño del bono será:"}',
             'value_fr' => '{"0":"Selon le nombre d’événements dans le pari combiné, le montant du bonus sera :"}',
             'value_pt' => '{"0":"Dependendo do número de eventos no acumulador, o valor do bônus será:"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'list_v2',
             'value_en' => '{"0":"for 4 events – 5%",
                             "1":"for 5 events – 10%",
                             "2":"for 6 events – 15%",
                             "3":"for 7 events – 20%",
                             "4":"for 8 events – 25%",
                             "5":"for 9 events – 30%",
                             "6":"for 10 events – 40%",
                             "7":"for 11 events – 50%",
                             "8":"for 12 events – 60%",
                             "9":"for 13 events – 70%",
                             "10":"for 14 events – 80%",
                             "11":"for 15 events – 90%",
                             "12":"for 16 events – 100%",
                             "13":"for 17 events – 125%",
                             "14":"for 18 events – 150%",
                             "15":"for 19 events – 175%",
                             "16":"for 20 events – 200%"}',
             'value_es' => '{"0":"para 4 eventos – 5%",
                             "1":"para 5 eventos – 10%",
                             "2":"para 6 eventos – 15%",
                             "3":"para 7 eventos – 20%",
                             "4":"para 8 eventos – 25%",
                             "5":"para 9 eventos – 30%",
                             "6":"para 10 eventos – 40%",
                             "7":"para 11 eventos – 50%",
                             "8":"para 12 eventos – 60%",
                             "9":"para 13 eventos – 70%",
                             "10":"para 14 eventos – 80%",
                             "11":"para 15 eventos – 90%",
                             "12":"para 16 eventos – 100%",
                             "13":"para 17 eventos – 125%",
                             "14":"para 18 eventos – 150%",
                             "15":"para 19 eventos – 175%",
                             "16":"para 20 eventos – 200%"}',
             'value_fr' => '{"0":"pour 4 événements – 5%",
                             "1":"pour 5 événements – 10%",
                             "2":"pour 6 événements – 15%",
                             "3":"pour 7 événements – 20%",
                             "4":"pour 8 événements – 25%",
                             "5":"pour 9 événements – 30%",
                             "6":"pour 10 événements – 40%",
                             "7":"pour 11 événements – 50%",
                             "8":"pour 12 événements – 60%",
                             "9":"pour 13 événements – 70%",
                             "10":"pour 14 événements – 80%",
                             "11":"pour 15 événements – 90%",
                             "12":"pour 16 événements – 100%",
                             "13":"pour 17 événements – 125%",
                             "14":"pour 18 événements – 150%",
                             "15":"pour 19 événements – 175%",
                             "16":"pour 20 événements – 200%"}',
             'value_pt' => '{"0":"para 4 eventos – 5%",
                             "1":"para 5 eventos – 10%",
                             "2":"para 6 eventos – 15%",
                             "3":"para 7 eventos – 20%",
                             "4":"para 8 eventos – 25%",
                             "5":"para 9 eventos – 30%",
                             "6":"para 10 eventos – 40%",
                             "7":"para 11 eventos – 50%",
                             "8":"para 12 eventos – 60%",
                             "9":"para 13 eventos – 70%",
                             "10":"para 14 eventos – 80%",
                             "11":"para 15 eventos – 90%",
                             "12":"para 16 eventos – 100%",
                             "13":"para 17 eventos – 125%",
                             "14":"para 18 eventos – 150%",
                             "15":"para 19 eventos – 175%",
                             "16":"para 20 eventos – 200%"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Your birthday with MEGAPARI!"}',
                'value_es' => '{"0":"¡Su cumpleaños con MEGAPARI!"}',
                'value_fr' => '{"0":"Votre anniversaire avec MEGAPARI !"}',
                'value_pt' => '{"0":"O seu aniversário com a MEGAPARI!"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI gives a birthday bonus to all users on their birthday. This can be a deposit bonus for sports betting or free spins in the casino. To receive the gift, simply confirm your date of birth in your profile, and the bonus will be activated automatically. Note that according to the promotion’s terms, your profile must be fully completed, and your phone number and email must be verified."}',
             'value_es' => '{"0":"MEGAPARI ofrece un bono de cumpleaños a todos los usuarios en su día de cumpleaños. Esto puede ser un bono de depósito para apuestas deportivas o giros gratis en el casino. Para recibir el regalo, solo debes confirmar tu fecha de nacimiento en tu perfil, y el bono se activará automáticamente. Ten en cuenta que, según los términos de la promoción, tu perfil debe estar completamente completado y tu teléfono y correo electrónico verificados."}',
             'value_fr' => '{"0":"MEGAPARI offre un bonus d’anniversaire à tous les utilisateurs le jour de leur anniversaire. Il peut s’agir d’un bonus de dépôt pour les paris sportifs ou de tours gratuits au casino. Pour recevoir le cadeau, il suffit de confirmer votre date de naissance dans votre profil, et le bonus sera activé automatiquement. Notez que, selon les conditions de la promotion, votre profil doit être entièrement rempli et votre numéro de téléphone ainsi que votre e-mail vérifiés."}',
             'value_pt' => '{"0":"MEGAPARI oferece um bônus de aniversário a todos os usuários no dia do seu aniversário. Pode ser um bônus de depósito para apostas esportivas ou rodadas grátis no cassino. Para receber o presente, basta confirmar a data de nascimento em seu perfil, e o bônus será ativado automaticamente. Observe que, de acordo com os termos da promoção, seu perfil deve estar completamente preenchido e seu telefone e e-mail verificados."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator of the Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"This is a promotion for accumulator bet enthusiasts. Every day, MEGAPARI offers an accumulator line with boosted odds, allowing you to increase your winnings with minimal risk. The promotion is suitable for both new and experienced players."}',
             'value_es' => '{"0":"Esta es una promoción para los aficionados a las apuestas combinadas. Cada día, MEGAPARI ofrece una línea de combinadas con cuotas aumentadas, lo que permite incrementar las ganancias con un riesgo mínimo. La promoción es adecuada tanto para jugadores nuevos como experimentados."}',
             'value_fr' => '{"0":"Il s’agit d’une promotion pour les amateurs de paris combinés. Chaque jour, MEGAPARI propose une ligne de paris combinés avec des cotes augmentées, permettant d’augmenter les gains avec un risque minimal. La promotion convient aussi bien aux nouveaux joueurs qu’aux joueurs expérimentés"}',
             'value_pt' => '{"0":"Esta é uma promoção para os fãs de apostas acumuladas. Todos os dias, o MEGAPARI oferece uma linha de acumuladores com odds aumentadas, permitindo aumentar os ganhos com risco mínimo. A promoção é adequada tanto para novos quanto para jogadores experientes."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Frequently Asked Questions"}',
                'value_es' => '{"0":"Preguntas Frecuentes"}',
                'value_fr' => '{"0":"Questions Fréquemment Posées"}',
                'value_pt' => '{"0":"Perguntas Frequentes"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can the promo code be used in the mobile app?"}',
             'value_es' => '{"0":"¿Se puede usar el código promocional en la aplicación móvil?"}',
             'value_fr' => '{"0":"Peut-on utiliser le code promo dans l’application mobile ?"}',
             'value_pt' => '{"0":"É possível usar o código promocional no aplicativo móvel?"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all promo codes can be entered during registration or when depositing funds through the mobile app."}',
             'value_es' => '{"0":"Sí, todos los códigos promocionales se pueden introducir durante el registro o al depositar fondos a través de la aplicación móvil."}',
             'value_fr' => '{"0":"Oui, tous les codes promo peuvent être saisis lors de l’inscription ou lors du dépôt de fonds via l’application mobile."}',
             'value_pt' => '{"0":"Sim, todos os códigos promocionais podem ser inseridos durante o registro ou ao depositar fundos pelo aplicativo móvel."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can the bonus be received more than once?"}',
             'value_es' => '{"0":"¿Se puede recibir el bono más de una vez?"}',
             'value_fr' => '{"0":"Peut-on recevoir le bonus plus d’une fois ?"}',
             'value_pt' => '{"0":"É possível receber o bônus mais de uma vez?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The registration bonus is granted only once per user."}',
             'value_es' => '{"0":"El bono de registro se otorga solo una vez por usuario."}',
             'value_fr' => '{"0":"Le bonus de bienvenue est accordé une seule fois par utilisateur."}',
             'value_pt' => '{"0":"O bônus de registro é concedido apenas uma vez por usuário."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"What is the wagering period for casino bonuses?"}',
             'value_es' => '{"0":"¿Cuál es el período de apuesta para los bonos de casino?"}',
             'value_fr' => '{"0":"Quelle est la période de mise pour les bonus du casino ?"}',
             'value_pt' => '{"0":"Qual é o prazo de aposta para os bônus de cassino?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For the casino, the wagering requirement is 35x the bonus amount, and the wagering period is 14 days."}',
             'value_es' => '{"0":"Para el casino, el requisito de apuesta es de 35 veces el monto del bono, y el período de apuesta es de 14 días."}',
             'value_fr' => '{"0":"Pour le casino, le wager est de 35 fois le montant du bonus, et la période de mise est de 14 jours."}',
             'value_pt' => '{"0":"Para o cassino, o requisito de aposta é de 35 vezes o valor do bônus, e o prazo de aposta é de 14 dias."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 32
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Is a deposit required to participate in Mega Booster?"}',
             'value_es' => '{"0":"¿Se requiere un depósito para participar en Mega Booster?"}',
             'value_fr' => '{"0":"Faut-il effectuer un dépôt pour participer à Mega Booster ?"}',
             'value_pt' => '{"0":"É necessário um depósito para participar do Mega Booster?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 33
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, to activate Mega Booster you need to make a deposit and place a bet on an event participating in the promotion."}',
             'value_es' => '{"0":"Sí, para activar Mega Booster es necesario realizar un depósito y apostar en un evento que participe en la promoción."}',
             'value_fr' => '{"0":"Oui, pour activer Mega Booster, vous devez effectuer un dépôt et placer un pari sur un événement participant à la promotion."}',
             'value_pt' => '{"0":"Sim, para ativar o Mega Booster é preciso fazer um depósito e apostar em um evento que participe da promoção."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 34
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"How to find out about current promotions?"}',
             'value_es' => '{"0":"¿Cómo conocer las promociones actuales?"}',
             'value_fr' => '{"0":"Comment savoir quelles sont les promotions en cours ?"}',
             'value_pt' => '{"0":"Como saber sobre as promoções atuais?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 35
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"All active bonuses and promotions are displayed in the corresponding section on the MEGAPARI website and are updated daily."}',
             'value_es' => '{"0":"Todos los bonos y promociones vigentes se muestran en la sección correspondiente del sitio web de MEGAPARI y se actualizan diariamente."}',
             'value_fr' => '{"0":"Tous les bonus et promotions actuels sont affichés dans la section correspondante du site MEGAPARI et sont mis à jour quotidiennement."}',
             'value_pt' => '{"0":"Todos os bônus e promoções ativos são exibidos na seção correspondente no site do MEGAPARI e são atualizados diariamente."}',
             'order' => 35
            ]
        );
    }
}
