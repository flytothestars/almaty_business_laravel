<?php

namespace App\Repositories\Enums;

abstract class Dictionaries
{
    const  Districts = [
        ['id'=>'5b56bea2-1583-49b6-93f9-34305e700e79','name'=>'Алатауский'],
        ['id'=>'64b4e789-47b0-440a-b498-e26921555ff8','name'=>'Алмалинский'],
        ['id'=>'52813f0a-c445-43dd-9593-9a19354c4fa0','name'=>'Ауэзовский'],
        ['id'=>'8e1b724b-11a3-4e61-9937-c8b4bf25aa44','name'=>'Бостандыкский'],
        ['id'=>'c661dde6-793c-4658-a97f-5c581d1cf472','name'=>'Жетысуский'],
        ['id'=>'6d8b187d-440d-415d-8cfb-8ff7cc42f0bb','name'=>'Медеуский'],
        ['id'=>'5f82d4d4-c276-4ecd-af9c-fdcdefc8ce4b','name'=>'Наурызбайский'],
        ['id'=>'b5b54335-2a9c-4660-ae5e-c53622b2c790','name'=>'Турксибский'],
        ['id'=>'967df47e-c0b0-4b3e-8b50-e5aa4523e4be','name'=>'Вне города'],
    ];

    const  ActivityTypes =[
        ["id" =>"52ac83fa-df38-4772-9b7d-d42daf45d2ff","name"=>"Предоставление услуг по проживанию и питанию"],
        ["id" =>"4b3b44bf-49c8-442d-a290-31a30aa1ee8c","name"=>"Предоставление прочих видов услуг"],
        ["id" =>"1abb1d90-f0dd-49d6-977a-ac58945c0b03","name"=>"Оптовая и розничная торговля; ремонт автомобилей и мотоциклов"],
        ["id" =>"d45810c8-800d-4c5f-ab12-0a5bd3350943","name"=>"Здравоохранение и социальное обслуживание населения"],
        ["id" =>"3e962e5c-df51-4391-86f9-1702ae399fa8","name"=>"Финансовая и страховая деятельность"],
        ["id" =>"fcb0ed4a-e762-43e7-ac89-7ce05ce2cd48","name"=>"Профессиональная, научная и техническая деятельность"],
        ["id" =>"c7e4a191-6489-4b21-9c4e-9575e987f525","name"=>"Искусство, развлечения и отдых"],
        ["id" =>"b46010e4-a3ef-4078-86de-7a95c1fa9d4a","name"=>"Образование"],
        ["id" =>"1a19a9c2-4d4a-4044-8b2e-5991d2d98750","name"=>"Водоснабжение; сбор, обработка и удаление отходов, деятельность по ликвидации загрязнений"],
        ["id" =>"275b8b8f-9712-417c-891c-df943df116bc","name"=>"Обрабатывающая промышленность"],
        ["id" =>"88e1529a-b069-48a8-a329-1c3ae3f11482","name"=>"Операции с недвижимым имуществом"],
        ["id" =>"21e15eee-37c7-4246-9328-e4ef78c8f3b5","name"=>"Строительство"],
        ["id" =>"e4608107-a6ed-4f83-bacd-8f4ed3495dac","name"=>"Деятельность в области административного и вспомогательного обслуживания"],
        ["id" =>"5d2f2f08-c707-4bc5-a6b8-73c0ecee7076","name"=>"Транспорт и складирование"],
        ["id" =>"a7d2b66c-656b-4dba-a9c3-2910a61c0ef1","name"=>"Информация и связь"],
        ["id" =>"b766d27a-2179-4be8-b953-35c37661bf51","name"=>"Сельское, лесное и рыбное хозяйство"],
        ["id" =>"c8f915f9-8e1b-4e48-afd4-0136171f057e","name"=>"Снабжение электроэнергией, газом, паром, горячей водой и  кондиционированным воздухом"],
        ["id" =>"37375646-f607-4d0d-a4ba-217b0e8f6b9e","name"=>"Государственное управление и оборона; обязательное  социальное обеспечение"]
    ];

    const  AppealStatuses =[
        ["id" =>"0d0f4d3e-d36f-4d20-ba04-31df7cba9fdc","name"=>"Назначен исполнитель"],
        ["id" =>"1a2f5be3-b525-4856-aa10-1f6fe3580f73","name"=>"На подтверждении"],
        ["id" =>"1cf63f67-fe81-45fc-97f0-d335251f66f7","name"=>"Ожидает рассмотрения"],
        ["id" =>"21cbcd3d-b6b4-48f4-abbf-4929dde31706","name"=>"Отказан"],
        ["id" =>"36d72113-ecd0-481b-954b-c5f62d0357af","name"=>"На распределении"],
        ["id" =>"925adbc1-fc93-4b82-a85c-16916deab417","name"=>"Назначен куратор"],
        ["id" =>"9454eb49-44c5-4c12-8316-a9650f203a8a","name"=>"В работе"],
        ["id" =>"c4c32c42-a651-4195-9a38-5b2c81456350","name"=>"Назначен соисполнитель"],
        ["id" =>"ded57df4-80be-4e34-8d76-0e443285f706","name"=>"Подтверждено куратором подразделения"],
        ["id" =>"f9840d9f-d405-4c17-9789-8d34b082ad06","name"=>"Исполнен"],
    ];

    const AppealResultTypes = [
        ["id" =>"c4d36116-322d-4ed0-8c33-123dd026b035","name"=>"Вопрос решен по телефону"],
        ["id" =>"e70d2209-b0fa-496e-88f7-80dabbb9fece","name"=>"Не удалось дозвониться"],
        ["id" =>"08992438-a890-4a12-8850-d536f326bd9f","name"=>"Контакт не принадлежит заявителю"],
        ["id" =>"23dcd77e-6a53-4562-a175-9f35f7696906","name"=>"Обращение не актуально"],
        ["id" =>"107ad887-047c-405d-916e-3d2e3517a17d","name"=>"Вопрос решен без участия Колдау"],
        ["id" =>"faa14dae-f9ed-4e48-ae25-0d54298e277c","name"=>"Вопрос решен"],
        ["id" =>"755ecc5a-789a-4d69-b180-4c53c223bc0f","name"=>"Заявитель не пришел на консультацию"],
        ["id" =>"447b6de8-8936-427d-a0a5-14e0a1719fce","name"=>"Вопрос решен с участием соисполнителя"],
        ["id" =>"a2a23c34-d129-4ae6-9658-b3cbafcef255","name"=>"Заявитель не выходит на связь"],
        ["id" =>"8f901daa-7ac2-46a8-a7ef-38c0687b3e91","name"=>"Вопрос решен заявителем самостоятельно"],
        ["id" =>"88838792-c29f-4b5d-becd-6c56dc46a896","name"=>"Проблема решена"],
        ["id" =>"c4032d8e-a45b-4fa2-b8c2-a0b52897ac45","name"=>"Не имеет законное обосновани"],
        ["id" =>"b29975ce-0384-47c1-9863-9ae50aab343d","name"=>"Лицо не принимающее решения"],
        ["id" =>"a3e443d3-1cef-4a69-b9ef-cfe37cbfbc78","name"=>"Не выявлено потребностей"]

    ];

    const AppealResultCategory = [
        ["id" => "61163fe6-7ea1-47c2-9248-5336b6d45d9b", "name" => "Финансирование"],
        ["id" => "23ed0560-60f2-4bcd-b3e0-13cfde9e272a", "name" => "Земельные отношения"],
        ["id" => "91816472-2491-4ae5-996f-dcbda5d6b4dc", "name" => "Строительство"],
        ["id" => "0a9ef160-d7b3-4ccf-825d-aa96ea751501", "name" => "Консультации и сопровождение"],
        ["id" => "86fb5edc-82db-47d4-ab31-e9a9285b16ab", "name" => "Лицензии и другие разрешения"],
        ["id" => "6f4a2d26-6119-41fd-b6fa-ec6358b73675", "name" => "Инженерные сети"],
        ["id" => "81d51d67-700d-476c-aae4-1e3571b8e84e", "name" => "Коммунальная инфраструктура"],
        ["id" => "b73710d6-d455-43c4-a5ce-c002d144535a", "name" => "Привлечение работников за счет государственных программ"],
        ["id" => "17fca7d8-47ce-4c98-abb6-ee3bb405a9db", "name" => "Другое"],
    ];
}