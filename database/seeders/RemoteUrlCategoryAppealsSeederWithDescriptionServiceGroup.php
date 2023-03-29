<?php

namespace Database\Seeders;

use App\Models\CategoryAppeal;
use App\Models\Partner;
use App\Models\ServiceGroup;
use App\Models\StorageFile;
use App\Models\TypesAppeal;
use Illuminate\Database\Seeder;

class RemoteUrlCategoryAppealsSeederWithDescriptionServiceGroup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '0a9ef160-d7b3-4ccf-825d-aa96ea751501', 'name' => 'Консультации и сопровождение', 'order_no' => 6],
            ['id' => '5d48cb66-23b7-4322-845e-63d01ffc1a1b', 'name' => 'Земельные отношения', 'order_no' => 7],
        ];
        foreach ($data as $serviceGroup) {
            ServiceGroup::query()->updateOrCreate(['id' => $serviceGroup['id']], ['name' => $serviceGroup['name'], 'order_no' => $serviceGroup['order_no'],]);
        }

        StorageFile::query()->where('storable_type',  'App\Models\CategoryAppeal')->delete();
        CategoryAppeal::query()->delete();



        $data = [
            [
                'id' => '2b2701aa-02cc-4659-867b-596538dfc692',
                'name' => 'Льготное кредитование от 58 до 500',
                'description' => '"Ставка вознаграждения: 2% — для многодетных малообеспеченных семей, инвалидов I и II группы, семей воспитывающих детей-инвалидов и резидентов промышленных парков; 6% — для всех других категорий заемщиков"',
                'service_groups_id' => '61163fe6-7ea1-47c2-9248-5336b6d45d9b',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],
            [
                'id' => '321ee49a-4a05-44b8-b3a3-706dd5ba0b64',
                'name' => 'Беззалоговое кредитование',
                'description' => '"Сумма кредитования: от 100 000 до 6 000 000 тенге; Сроки кредитования: от 3х до 24х месяцев; Ставка вознаграждения: 12% годовых;"',
                'service_groups_id' => '61163fe6-7ea1-47c2-9248-5336b6d45d9b',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],
            [
                'id' => 'b0120dc3-5c53-4f42-9fb1-827be1cfd5ca',
                'name' => 'Частичное гарантирование Дорожная карта бизнеса - 2025',
                'description' => '"Максимальный размер гарантии: до 85 % от суммы займа"',
                'service_groups_id' => '61163fe6-7ea1-47c2-9248-5336b6d45d9b',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],
            [
                'id' => 'ef23ef2e-1ba8-4b28-9b14-fb81fb91b26e',
                'name' => 'Льготное кредитование до 58',
                'description' => '"Ставка вознаграждения: 2% — для многодетных малообеспеченных семей, инвалидов I и II группы, семей воспитывающих детей-инвалидов и резидентов промышленных парков; 6% — для всех других категорий заемщиков"',
                'service_groups_id' => '61163fe6-7ea1-47c2-9248-5336b6d45d9b',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],
            [
                'id' => 'f1aa7791-deb3-41e2-a10a-a61412a8afdb',
                'name' => 'Государственные гранты Дорожная карта бизнеса 2025',
                'description' => '"Сумма государственного гранта от 2 до 5 млн тенге Срок реализации бизнес-проекта не более 18 месяцев"',
                'service_groups_id' => '61163fe6-7ea1-47c2-9248-5336b6d45d9b',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],
            [
                'id' => 'efeb3040-a3b9-42db-9c22-7861f32f1087',
                'name' => 'Подготовка бизнес-плана',
                'description' => 'Мы поможем Вам бесплатно разработать бизнес-план с дальнейшим сопровождением в банках второго уровня и финансовых институтах. Для получения детальной информации оставьте заявку, и наш менеджер свяжется с Вами.',
                'service_groups_id' => '0a9ef160-d7b3-4ccf-825d-aa96ea751501',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],
            [
                'id' => '93dedf07-4ae4-465c-9150-54d93c0370e1',
                'name' => 'Земельные отношения',
                'description' => 'В данном разделе предоставлен информационный материал для физических и юридических лиц в области земельных отношении. Раздел включает в себя вопросы и порядок по получению государственного акта, изменению целевого назначения, зонирования, определения делимости и кадастровой стоимости, приобретения, изменения и прекращения права собственности на земельный участок.',
                'service_groups_id' => '5d48cb66-23b7-4322-845e-63d01ffc1a1b',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],
            [
                'id' => '7e378587-88fe-4935-99a5-61e82b676037',
                'name' => 'Инженерные сети',
                'description' => 'В данном разделе предоставлен информационный материал для физических и юридических лиц в области инженерной инфраструктуры. Раздел включает в себя вопросы и порядок получения технических условий и заключения договора на подключение к инженерным сетям (водоснабжение и водооотведение, газификация, теплоснабжение и электроснабжение).',
                'service_groups_id' => '5d48cb66-23b7-4322-845e-63d01ffc1a1b',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],
            [
                'id' => '49d8df55-0be0-43ca-8dd7-748b32d20f9b',
                'name' => 'Лицензии и иные разрешения',
                'description' => 'В данном разделе предоставлен информационный материал для физических и юридических лиц в сфере лицензирования и разрешений. Раздел включает в себя вопросы и порядок получения лицензий, вопросы разрешительного и уведомительного характера в сферах здравоохранения, строительства, образования, туризма, транспорта итд.',
                'service_groups_id' => '5d48cb66-23b7-4322-845e-63d01ffc1a1b',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],
            [
                'id' => '7eec6abc-8c21-4d6f-815e-de46324e5392',
                'name' => 'Строительство',
                'description' => 'В данном разделе предоставлен информационный материал для физических и юридических лиц в области архитектуры и градостроительства (строительство и реконструкция объектов). Раздел включает в себя порядок получения исходных материалов (топографическая съемка, план детальной планировки (ПДП), архитектурно-планировочное задание (АПЗ), градостроительные регламенты (красные линии итп), согласования эскизного проекта, уведомление о начале строительно-монтажных работ (СМР), акта ввода в эксплуатацию и оформления технического паспорта.',
                'service_groups_id' => '5d48cb66-23b7-4322-845e-63d01ffc1a1b',
                'types_appeal_id' => '726317d1-0e12-4c7d-aa31-9801cd5744a6'
            ],

            [
                'id' => 'da4ae49c-43f2-4726-8cfc-58d18685f051',
                'name' => 'Государственные гранты Дорожная карта бизнеса 2025',
                'description' => 'Сумма государственного гранта от 2 до 5 млн тенге. Срок реализации бизнес-проекта не более 18 месяцев',
                'service_groups_id' => '61163fe6-7ea1-47c2-9248-5336b6d45d9b',
                'types_appeal_id' => '262525f7-452d-4fc9-a90f-b7938dd7add1'
            ],
            [
                'id' => 'addaab33-6715-4174-aafb-45ed2817463a',
                'name' => 'Открыть бизнес',
                'description' => 'Есть идея, но не знаете, с чего начать? Оставьте заявку, и наш менеджер свяжется с Вами. Вы получите бесплатную консультацию по всем этапам реализации проекта, включая поиск источников финансирования и регистрацию бизнеса.',
                'service_groups_id' => '0a9ef160-d7b3-4ccf-825d-aa96ea751501',
                'types_appeal_id' => '262525f7-452d-4fc9-a90f-b7938dd7add1'
            ],
        ];

        foreach ($data as $category) {
            CategoryAppeal::query()->create([
                'id' => $category['id'],
                'name' => $category['name'],
                'description' => $category['description'],
                'service_group_id' => $category['service_groups_id'],
                'types_appeal_id' => $category['types_appeal_id']
            ]);

            StorageFile::query()->create([
                'storable_id' => $category['id'],
                'storable_type' => CategoryAppeal::class,
                'path' => 'appealType/' . $category['id'] . '.png',
                'file_type' => 'thumbnail',
            ]);
        }
    }
}
