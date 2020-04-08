<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Как уйти на кредитные каникулы',
            'description' => '<p>Россияне, оформившие потребительский кредит или ипотеку в банке, а также заем в микрофинансовой организации (МФО) и потерявшие возможность обслуживать долг из-за пандемии коронавируса, официально получили право на кредитные каникулы – отсрочку платежей на срок до шести месяцев. Закон об этом подписал президент Владимир Путин, вечером 3 апреля он был опубликован на интернет-портале правой информации и вступил в силу.</p><h2>Кому полагаются каникулы</h2><p>Заемщики получают право на кредитные каникулы (льготный период) при одновременном выполнении нескольких условий:</p><p>&nbsp;</p><p>Доход заемщика (или совокупный доход созаемщиков) снизился минимум на 30% за месяц, предшествующий подаче заявки на каникулы, по сравнению со среднемесячным доходом за 2019 г. Председатель ЦБ Эльвира Набиуллина в ходе онлайн-пресс-конференции 3 апреля сообщила, что в ближайшее время правительство определит методику расчета среднемесячного дохода за прошлый год. По ее словам, ЦБ обяжет банки разработать онлайн-сервисы по оценке правильности такого расчета заемщиками.</p><p>Сумма кредита не должна превышать максимальный размер, определенный правительством. На сегодняшний день ограничения на сумму кредита не установлены.</p><p>Кредитный договор должен быть заключен до вступления в силу закона о кредитных каникулах.</p><p>Заемщик в момент подачи заявки на отсрочку платежей не должен находиться на ипотечных каникулах, закон о которых действует с августа 2019 г. &nbsp;</p><p>Претендовать на льготный период могут как благонадежные заемщики, так и те, кто допускал в прошлом или имеет в настоящий момент просрочки платежей по кредиту.&nbsp;Сумма штрафов и пеней, набежавших за неплатежи по кредиту до каникул, фиксируется на время льготного периода и выплачивается после его завершения.</p><p><i><strong>«Этим правом (на кредитные каникулы) нужно пользоваться осознанно. Каникулы даются на полгода, и человек сможет обратиться за ними абсолютно в любой день до 30 сентября 2020 года, и второй раз каникулы взять не получится, поэтому имеет смысл воспользоваться ими только в том случае, если снижение доходов действительно не позволяет обслуживать кредит. Каникулы — это не прощение долга, а отсрочка платежа, перенесенная в будущее»</strong></i></p><figure class="image"><img src="https://cdn5.vedomosti.ru/crop/image/2020/2n/rvwv9/original-1052.jpg?height=80&amp;width=80"></figure><p>Эльвира Набиуллина</p><p><i>Председатель ЦБ</i></p><p>&nbsp;</p><h2>Как получить отсрочку</h2><p>Обратиться за кредитными каникулами можно в любой день вплоть до 30 сентября 2020 г. Но этот срок может быть продлен правительством, говорится в законе.</p><p>Воспользоваться кредитными каникулами заемщик может лишь один раз.</p><p>Чтобы уйти на кредитные каникулы, нужно подать заявление в банк способом, предусмотренным договором, или по телефону: «с использованием средств радиотелефонной связи с номера, информация о котором предоставлена заемщиком кредитору», говорит закон.</p><p>Предоставлять пакет документов, подтверждающих снижение дохода, при подаче заявления не обязательно. По закону условия, позволяющие получить каникулы, считаются соблюденными, если не доказано иное.</p><p>Банк имеет право запросить у заемщика подтверждающие документы. К примеру, справку 2-НДФЛ с места работы, справку о регистрации в качестве безработного, больничный лист, а также иные документы, которые свидетельствуют о снижении дохода. Центробанку разрешено устанавливать дополнительный перечень таких документов, но пока он этого не сделал.</p><figure class="image"><img src="https://cdn5.vedomosti.ru/image/2019/5w/18hd16/_preview-1lne.jpg"></figure><h2><a href="https://www.vedomosti.ru/finance/articles/2019/07/31/807731-kak-uiti-kanikuli"><strong>Как уйти на ипотечные каникулы</strong></a></h2><p><a href="https://www.vedomosti.ru/finance/articles/2019/07/31/807731-kak-uiti-kanikuli">Закон о них вступил в силу с 31 июля</a></p><p><a href="https://www.vedomosti.ru/finance/articles/2019/07/31/807731-kak-uiti-kanikuli">Личный счет</a></p><p>&nbsp;</p><p>Кредитор также вправе сам обратиться за информацией о доходах заемщика в ФНС, ПФР, Фонд социального страхования или Федеральный фонд обязательного медицинского страхования, проинформировав об этом клиента. Согласие заемщика на такой запрос не требуется – оно считается полученным с направления им заявления о каникулах.</p><p>Собрать и передать документы по запросу банка заемщик должен в течение 90 дней после обращения за каникулами, а если есть уважительная причина для непредоставления документов, то этот срок может быть продлен еще на 30 дней. На рассмотрение документов и ответ заемщику закон отводит банку пять дней. Если банк не запросит дополнительных документов в течение 60 дней, то льготный период подтверждается автоматически.</p><p>Факт выхода на кредитные каникулы будет отражен в кредитной истории заемщика, но в ее информационную часть сведения о неплатежах по кредиту в льготный период включаться не будут.</p><h2>Как проходят каникулы</h2><p>Заемщик вправе выбрать длительность льготного периода не более шести месяцев и дату его начала (не позже, чем через две недели со дня подачи заявления об отсрочке по потребительскому кредиту и месяц – по ипотеке). Если в заявлении он не указал желаемые срок и дату начала каникул, то каникулы устанавливаются на полгода и отсчитываются с момента подачи заявления.</p><p>В течение каникул тело кредита и проценты по нему не выплачиваются. Начислять неустойку, штрафы и пени за неисполнение обязательств по кредитному договору банк не вправе. За этот период проценты на ипотечные кредиты также не начисляются, а на потребительские ссуды и кредитные карты – начисляются в меньшем размере: по ставке в 2/3 от установленного ЦБ среднерыночного значения полной стоимости кредита (ПСК) на остаток основного долга. Сумма начисленных процентов фиксируется в конце льготного периода. В I квартале 2020 г. показатель ПСК для банков по автокредитам составлял 12,9–18,1%, по кредитным картам – 21,8–22,26%, кредитам наличными – 11,3–30,2% годовых в зависимости от срока и суммы.</p><h3><strong>Каникулы коллекторов</strong></h3><p>Коллекторские агентства в связи с принятием закона о кредитных каникулах организовали работу по списанию части просроченной задолженности заемщикам, обратившимся к ним, сообщила СРО «Национальная ассоциация профессиональных коллекторских агентств» (СРО «НАПКА»).</p><p>В период каникул заемщик может досрочно погашать долг; платежи должны быть направлены прежде всего на погашение тела кредита, указывает закон. Льготный период при этом не прерывается.</p><p>Заемщик также может в любой момент прервать каникулы, направив кредитору соответствующее уведомление.</p><h2>Что ждет заемщика после передышки</h2><p>В случае ипотечного кредита после завершения льготного периода заемщик сначала погашает кредит согласно первоначальному графику платежей, а затем вносит пропущенные платежи. Срок кредита таким образом продлевается на величину льготного периода, а изначально установленная общая сумма платежей для заемщика с ипотекой не меняется.</p><p>Заемщик с потребительским кредитом по возвращении с каникул также сначала выплачивает долг по первоначальному графику, потом погашает пропущенные платежи. А затем выплачивает еще и дополнительные проценты, набежавшие за время каникул. Банк должен направить заемщику график таких платежей не позднее пяти дней после завершения каникул, при этом их количество и периодичность должны быть аналогичны условиям кредитного договора. Таким образом, переплата по потребительскому кредиту в случае ухода заемщика на каникулы возрастает.&nbsp;</p><p>Независимо от вида ссуды, после ее полного погашения заемщик также должен уплатить пени и штрафы за просрочки по кредиту, допущенные перед уходом на каникулы.</p><p>По окончании каникул заемщик с кредитной картой возобновляет платежи по договору, но в увеличенном размере: к ним одновременно добавляется ежемесячная выплата набежавших за каникулы процентов, а также штрафов и пеней, если были нарушения договора перед льготным периодом, так как выплатить их заемщик должен в течение 720 дней после завершения каникул. При этом доступный лимит по кредитке временно уменьшается на величину этих обязательств, если иное не установлено договором.</p>',
                'image' => '20200404152800.jpg',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-04-04 15:28:00',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'News 2',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'news.png',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'News 3',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'news.png',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'News 4',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'news.png',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'News 5',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'news.png',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'News 6',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'news.png',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'News 7',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'news.png',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'News 8',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'news.png',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'News 9',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'news.png',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'News 10',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'news.png',
                'created_at' => '2020-03-05 21:24:18',
                'updated_at' => '2020-03-05 21:24:18',
            ),
        ));
        
        
    }
}