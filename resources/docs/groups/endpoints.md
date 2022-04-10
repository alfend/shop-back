# Endpoints


## api/products




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 6,
        "category_id": 1,
        "title": "TAMA SG52KH6-BK STAGESTAR",
        "slug": "TAMA-SG52KH6-BK-STAGESTAR",
        "description": "Ударная установка из 5-ти барабанов (цвет - BLACK) со стойками (бочка 16х22, томы 7x10, 8х12 напольный 14х16, малый 5х14) со стойкой для малого барабана, стойкой для хай-хэта, стойкой под тарелку, наклонной стойкой под тарелку, педалью для бас-бочки, стулом для барабанщика",
        "period": null,
        "price": "112000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/3d27290f1a22f0e854f2d86c579013fc.jpg",
        "sort": 1000,
        "created_at": "2022-03-27T10:27:35.000000Z",
        "updated_at": "2022-03-27T10:27:35.000000Z",
        "short_description": null
    },
    {
        "id": 7,
        "category_id": 1,
        "title": "ALESIS NITRO MESH KIT",
        "slug": "ALESIS-NITRO-MESH-KIT",
        "description": "Электроная барабанная установка, 8 дюймовый dual-zone snare + 3 single-zone toms. Kick drumpad в комплекте + басс педаль в комплекте, 10 дюймовые тарелки, ride cymbal, hi-hat, crashw\/choke. Drum модуль. 40 kits (24 заводских пресетов + 16 свободных). Загрузка WAV и воспроизведение с USB. Запись до 5 треков в память модуля, до 99 треков при подключении USB накопителя. USB\/MIDI выход для синхронизации с ПО. AUX. Алюминиевая рама. Коммутация, ключ настройки, палочки, сетевой кабель, в комплекте.",
        "period": null,
        "price": "103000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/0f080b92db13f33e5ffd123534d89c52.jpg",
        "sort": 1000,
        "created_at": "2022-03-27T10:28:41.000000Z",
        "updated_at": "2022-03-27T10:28:41.000000Z",
        "short_description": null
    },
    {
        "id": 8,
        "category_id": 1,
        "title": "Aurus JH2018-R",
        "slug": "Aurus-JH2018-R",
        "description": "Аккордеон 32\/32 красный с футляром",
        "period": null,
        "price": "70513.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/2648442fc0ce2f4fc29dd04c6efd4421.jpg",
        "sort": 1000,
        "created_at": "2022-03-27T10:30:37.000000Z",
        "updated_at": "2022-03-27T10:30:37.000000Z",
        "short_description": null
    },
    {
        "id": 9,
        "category_id": 1,
        "title": "Fabio SF39-015E",
        "slug": "Fabio- SF39-015E",
        "description": "Скрипичный набор",
        "period": null,
        "price": "7811.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/9136879f4c3475ce04e2bfe4dbcf7063.jpg",
        "sort": 1000,
        "created_at": "2022-03-27T10:32:42.000000Z",
        "updated_at": "2022-03-27T10:32:42.000000Z",
        "short_description": null
    },
    {
        "id": 5,
        "category_id": 1,
        "title": "Artesia FUN-1 WH",
        "slug": "Artesia FUN-1-WH",
        "description": "Цифровое пианино цвет белый",
        "period": null,
        "price": "30725.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/6f125cafac3c5f646bcc62631b6aff1b.jpg",
        "sort": 1000,
        "created_at": "2022-03-27T09:26:21.000000Z",
        "updated_at": "2022-03-27T10:14:32.000000Z",
        "short_description": "Пианино"
    },
    {
        "id": 4,
        "category_id": 1,
        "title": "YAMAHA PSR-E373",
        "slug": "YAMAHA-PSR-E373",
        "description": "Портативный клавишный инструмент",
        "period": null,
        "price": "38790.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/26802fdf4e9f0692f770580a845127de.jpg",
        "sort": 1000,
        "created_at": "2022-03-27T09:23:23.000000Z",
        "updated_at": "2022-03-27T10:15:46.000000Z",
        "short_description": "Портативный клавишный инструмент"
    },
    {
        "id": 2,
        "category_id": 1,
        "title": "Электро-гитара",
        "slug": "elektro-gitara",
        "description": "Электрогитара EPIPHONE LES PAUL STUDIO LT Vintage Sunburst дает возможность приобщиться к классическому стилю электрогитар LES PAUL STUDIO. Изначально эти модели были созданы для работы в студии, но постепенно они завоевали популярность у более широкого круга музыкантов. Это хороший, универсальный инструмент для широкого круга самых разных музыкальных задач. Epiphone представляет бюджетный вариант классической электрогитары LES PAUL STUDIO, сохраняя все ее основные достоинства. На деку гитары установлен комплект звукоснимателей-хамбакеров, это модели Alnico Classic Humbuckers (х 2) от производителя. Цвет гитары винтаж санберст (Vintage Sunburst).",
        "period": null,
        "price": "2000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/bb0cf327dda9afd20c532824995b5172.jpg",
        "sort": 2000,
        "created_at": "2022-03-25T22:32:20.000000Z",
        "updated_at": "2022-03-27T10:16:14.000000Z",
        "short_description": "Электрогитара EPIPHONE LES PAUL STUDIO LT"
    },
    {
        "id": 22,
        "category_id": 4,
        "title": "Куртка",
        "slug": null,
        "description": null,
        "period": null,
        "price": "19500.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/ed2b96f81cdd7157ea76bbe9b8b5b7e3.jpg",
        "sort": 1000,
        "created_at": "2022-04-07T19:13:42.000000Z",
        "updated_at": "2022-04-07T19:13:42.000000Z",
        "short_description": null
    },
    {
        "id": 3,
        "category_id": 1,
        "title": "KALA MK-S Makala Soprano Ukulele",
        "slug": "KALA-MK-S",
        "description": "Укулеле KALA MK-S Makala Soprano Ukulele, форма корпуса - сопрано, цвет темно-коричневый, корпус - махагони, гриф - махагони, накладка грифа - орех, 12 ладов",
        "period": null,
        "price": "6630.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/7356c26ff8fd125f350c113ea3964678.jpg",
        "sort": 1000,
        "created_at": "2022-03-27T09:21:22.000000Z",
        "updated_at": "2022-03-27T10:26:10.000000Z",
        "short_description": "Укулеле KALA MK-S"
    },
    {
        "id": 23,
        "category_id": 4,
        "title": "Джинсы",
        "slug": null,
        "description": null,
        "period": null,
        "price": "4900.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/91a3e8962b9b11d79c122042b3568efd.jpg",
        "sort": 1000,
        "created_at": "2022-04-07T19:13:54.000000Z",
        "updated_at": "2022-04-07T19:13:54.000000Z",
        "short_description": null
    },
    {
        "id": 10,
        "category_id": 2,
        "title": "Стиральная машина",
        "slug": null,
        "description": "Стиральная машина",
        "period": null,
        "price": "10000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/a848102dcc5f4bdd6388188dca7e628b.jpg",
        "sort": 1000,
        "created_at": "2022-03-30T15:39:08.000000Z",
        "updated_at": "2022-04-03T19:12:40.000000Z",
        "short_description": "Стиральная машина"
    },
    {
        "id": 12,
        "category_id": 2,
        "title": "Сушилка для рук",
        "slug": null,
        "description": null,
        "period": null,
        "price": "1290.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/9a7e67d3466a8f6a7a16bd2ec2ce6bd4.jpg",
        "sort": 1000,
        "created_at": "2022-04-04T13:34:50.000000Z",
        "updated_at": "2022-04-04T13:34:50.000000Z",
        "short_description": null
    },
    {
        "id": 13,
        "category_id": 2,
        "title": "Микроволновая печь",
        "slug": null,
        "description": null,
        "period": null,
        "price": "12800.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/e479c6ab5be73bfb31ed8cc8cb087e6c.jpg",
        "sort": 1000,
        "created_at": "2022-04-04T13:38:00.000000Z",
        "updated_at": "2022-04-04T13:38:00.000000Z",
        "short_description": null
    },
    {
        "id": 14,
        "category_id": 2,
        "title": "Холодильник",
        "slug": null,
        "description": null,
        "period": null,
        "price": "46900.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/4c3041184512bcf2f0ed3aff39be05cf.jpg",
        "sort": 1000,
        "created_at": "2022-04-04T13:44:37.000000Z",
        "updated_at": "2022-04-04T13:44:37.000000Z",
        "short_description": null
    },
    {
        "id": 15,
        "category_id": 3,
        "title": "Гиря чугунная",
        "slug": null,
        "description": null,
        "period": null,
        "price": "4500.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/c25e8496e13050aa9e4f8a567aa3d3ff.jpg",
        "sort": 1000,
        "created_at": "2022-04-04T13:51:59.000000Z",
        "updated_at": "2022-04-04T13:51:59.000000Z",
        "short_description": null
    },
    {
        "id": 17,
        "category_id": 3,
        "title": "Степ-платформа",
        "slug": null,
        "description": null,
        "period": null,
        "price": "3990.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/24eb2959fb9dfa19e1f64555cd668ef7.jpg",
        "sort": 1000,
        "created_at": "2022-04-04T13:58:58.000000Z",
        "updated_at": "2022-04-04T13:58:58.000000Z",
        "short_description": null
    },
    {
        "id": 19,
        "category_id": 3,
        "title": "Скакалка",
        "slug": null,
        "description": null,
        "period": null,
        "price": "400.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/c840bc3b22683ba794bb0a0721ec7df7.jpg",
        "sort": 1000,
        "created_at": "2022-04-04T14:19:38.000000Z",
        "updated_at": "2022-04-04T14:19:38.000000Z",
        "short_description": null
    },
    {
        "id": 11,
        "category_id": 3,
        "title": "Беговая дорожка",
        "slug": null,
        "description": "Беговая дорожка",
        "period": null,
        "price": "10000.00",
        "old_price": null,
        "discount": null,
        "on_main": true,
        "type": null,
        "image": "storage\/product\/b58e8ea2ad9c6bbb4d3e9a72753cf679.jpg",
        "sort": 1000,
        "created_at": "2022-03-30T15:39:34.000000Z",
        "updated_at": "2022-04-05T10:58:13.000000Z",
        "short_description": "Беговая дорожка"
    },
    {
        "id": 20,
        "category_id": 3,
        "title": "Эллиптический тренажер",
        "slug": null,
        "description": null,
        "period": null,
        "price": "49990.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/ab65f652d308124b155a20862d0a108d.jpg",
        "sort": 1000,
        "created_at": "2022-04-04T14:35:16.000000Z",
        "updated_at": "2022-04-04T14:37:15.000000Z",
        "short_description": null
    },
    {
        "id": 25,
        "category_id": 5,
        "title": "Туфли женские",
        "slug": null,
        "description": "Женские туфли, удобные для любой ножки. На невысоком каблуке",
        "period": null,
        "price": "3000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/efbfcbf9a24859f7f79364ac4be2d3e3.jpg",
        "sort": 9000,
        "created_at": "2022-04-09T18:55:59.000000Z",
        "updated_at": "2022-04-09T18:55:59.000000Z",
        "short_description": "Женские туфли, удобные для любой ножки. На невысоком каблуке"
    },
    {
        "id": 18,
        "category_id": 3,
        "title": "Шар гимнастический",
        "slug": null,
        "description": null,
        "period": null,
        "price": "2300.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/694fd1efab933c38c3a93054579858dc.jpg",
        "sort": 1000,
        "created_at": "2022-04-04T13:59:47.000000Z",
        "updated_at": "2022-04-04T14:37:28.000000Z",
        "short_description": null
    },
    {
        "id": 16,
        "category_id": 3,
        "title": "Самокат",
        "slug": null,
        "description": null,
        "period": null,
        "price": "12200.00",
        "old_price": null,
        "discount": null,
        "on_main": true,
        "type": null,
        "image": "storage\/product\/314f6b06061902b8aa52c52957e73ba4.jpg",
        "sort": 1000,
        "created_at": "2022-04-04T13:55:57.000000Z",
        "updated_at": "2022-04-05T10:58:32.000000Z",
        "short_description": null
    },
    {
        "id": 1,
        "category_id": 1,
        "title": "Гитара",
        "slug": "gitara-6",
        "description": "Гитара 6 струнная",
        "period": null,
        "price": "1000.00",
        "old_price": null,
        "discount": null,
        "on_main": true,
        "type": null,
        "image": "storage\/product\/802429fd7a67e43a687af41d07a7cace.jpg",
        "sort": 1000,
        "created_at": "2022-03-25T22:30:46.000000Z",
        "updated_at": "2022-04-05T10:59:18.000000Z",
        "short_description": "Просто гитара"
    },
    {
        "id": 21,
        "category_id": 4,
        "title": "Кофта",
        "slug": null,
        "description": "кофта от производителя 90% шерсти",
        "period": null,
        "price": "1990.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/7431638abc998ac7ff934cf82a28d0b1.jpg",
        "sort": 1000,
        "created_at": "2022-04-07T19:13:01.000000Z",
        "updated_at": "2022-04-09T17:35:17.000000Z",
        "short_description": "Кофта шерстяная"
    },
    {
        "id": 24,
        "category_id": 5,
        "title": "Ботинки мужские",
        "slug": null,
        "description": "Ботинки мужски, Демисезонные, Натуральная кожа.",
        "period": null,
        "price": "4000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/4bf5202a1e13715c0d98a60e9ea3cb7d.jpg",
        "sort": 10000,
        "created_at": "2022-04-09T18:54:11.000000Z",
        "updated_at": "2022-04-09T18:54:11.000000Z",
        "short_description": "Ботинки мужски, Демисезонные, Натуральная кожа."
    },
    {
        "id": 26,
        "category_id": 5,
        "title": "Сапоги женские",
        "slug": null,
        "description": "Прошивная подошва из натуральной кожи (чепрак). Высота обтяжного каблука 5 см.",
        "period": null,
        "price": "10000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/b25eff4fd5f3f47e30842d31c6210f91.jpg",
        "sort": 1000,
        "created_at": "2022-04-09T18:57:14.000000Z",
        "updated_at": "2022-04-09T18:57:14.000000Z",
        "short_description": "Прошивная подошва из натуральной кожи (чепрак). Высота обтяжного каблука 5 см."
    },
    {
        "id": 28,
        "category_id": 6,
        "title": "Mac",
        "slug": null,
        "description": "Компания Apple обновляет ряд моделей своих настольных систем iMac и предлагает моноблок Apple iMac 21.5 Retina 4K 2019 (MRT42) производства текущего года, оснащённый самой последней и совершенной операционной системой macOS Mojave. Комплект поставки включает в себя сам iMac, беспроводные фирменные мышь и клавиатуру, шнур питания. Внутри корпуса скрыта мощь 6-ядерного процессора Intel Core i5 с частотой 3.0-4,1 ГГц. Устройство наделено 8 ГБ памяти 2400 МГц, DDR4, с возможностью расширения до 32 ГБ и жестким диском на 1000 ГБ. Присутствует кардридер формата SDXC. Экран IPS LED имеет диагональ 21.5 дюймов, и разрешение 4096x2304 точек. Графика работает на чипе Radeon Pro 560X с 4 ГБ памяти GDDR5. Присутствуют порты 3,5 мм аудио USB Type C \/ RJ-45 (LAN, Ethernet) \/ Thunderbolt 3, беспроводная связь Wi-Fi 802.11 b\/g\/n\/ac \/ Bluetooth 4.2.",
        "period": null,
        "price": "100000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/933ff2863fbac3e42d1c69a167fdcf08.jpg",
        "sort": 1000,
        "created_at": "2022-04-09T19:03:38.000000Z",
        "updated_at": "2022-04-09T20:14:57.000000Z",
        "short_description": "Apple iMac 21.5 Retina 4K 2019"
    },
    {
        "id": 29,
        "category_id": 6,
        "title": "Планшет Huawei T 8",
        "slug": null,
        "description": "Дисплей планшета оснащен качественным широкоугольным IPS-дисплеем на 8 дюймов, он имеет минимальные экранные рамки и за счет этого, экран смотрится шире. Отменное разрешение экрана составляет 1280x800, а используемые при производстве технологии оптимизируют все показатели качества изображения Если Вы ищете яркий, контрастный экран с хорошей цветопередачей, то эта модель отличный вариант цена\/качество.\r\n\r\nСердцем планшета выступает 4-ядерный процессор с двумя гигабайтами оперативной памяти и мощным графическим ускорителем. Это Вам обеспечит плавную работу не только в интернете, но и бесперебойную работу всех ресурсоемких приложений.\r\n\r\nМощи встроенного аккумулятор планшета с лихвой хватит на целый день активного использования. Используйте планшет для любых важных задач - смотрите видео, играйте или просто читайте новости в онлайне.",
        "period": null,
        "price": "12000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/173a25169ecc7f212a45dee614bc22d9.jpg",
        "sort": 1000,
        "created_at": "2022-04-09T19:06:46.000000Z",
        "updated_at": "2022-04-09T19:06:46.000000Z",
        "short_description": "Планшет Huawei MATEPAD T 8\" 32Gb LTE Синий"
    },
    {
        "id": 30,
        "category_id": 6,
        "title": "Ноутбук Acer Nitro 5",
        "slug": null,
        "description": "Ноутбук Acer Nitro 5 AN515-55-59KU Core i5 10300H 16Gb SSD512Gb NVIDIA GeForce GTX 1660 Ti 6Gb 15.6\" IPS FHD (1920x1080) Windows 10 Home black WiFi BT Cam",
        "period": null,
        "price": "80000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/fe8030f9166df8ddb6a73ddce3da0b71.jpg",
        "sort": 1000,
        "created_at": "2022-04-09T19:08:24.000000Z",
        "updated_at": "2022-04-09T19:08:24.000000Z",
        "short_description": "Ноутбук Acer Nitro 5 AN515-55-59KU Core i5 10300H 16Gb SSD512Gb NVIDIA GeForce GTX 1660 Ti 6Gb 15.6\" IPS FHD (1920x1080) Windows 10 Home black WiFi BT Cam"
    },
    {
        "id": 32,
        "category_id": 6,
        "title": "Игровой компьютер PC-105",
        "slug": null,
        "description": "Intel Core i3 - 9100F 3.6 ГГц \/ Чипсет H310 \/ GeForce GTX 1050 2Gb \/ DDR4 8GB \/ HDD 1000GB \/ Без SSD \/ Без DVD \/ 500w \/ Deepcool Tesseract",
        "period": null,
        "price": "100000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/3e2ebcd5fa016425f47a291841cc136d.jpg",
        "sort": 1000,
        "created_at": "2022-04-09T19:11:09.000000Z",
        "updated_at": "2022-04-09T19:11:09.000000Z",
        "short_description": "Intel Core i3 - 9100F 3.6 ГГц \/ Чипсет H310 \/ GeForce GTX 1050 2Gb \/ DDR4 8GB \/ HDD 1000GB \/ Без SSD \/ Без DVD \/ 500w \/ Deepcool Tesseract"
    },
    {
        "id": 34,
        "category_id": 6,
        "title": "Смартфон Samsung Galaxy A52",
        "slug": null,
        "description": "Смартфон Samsung Galaxy A52 с колоссальным объемом памяти (256 ГБ) уместит все события в фотографиях и видеозаписях. Контент, отснятый с его использованием, будет великолепным. Основная камера из 4 модулей обладает разрешением 64+12+5+5 Мп, а фронтальная – 32 Мп. Фотофильтры, ночной режим и панорамная съемка позволят получить снимки безукоризненного качества. Просматривать готовые фото и видео можно на безрамочном Super-AMOLED-дисплее диагональю 6.5 дюйма.\r\nПосторонние не получат доступ к вашим личным файлам, так как они защищены сканерами лица и отпечатков пальцев. Если вы пользуетесь смартфоном Samsung Galaxy A52, вам не нужно носить с собой кошелек. Устройство имеет модули Google Pay и Samsung Pay для бесконтактной оплаты.",
        "period": null,
        "price": "70000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/61ec9da714c51c1b7774d29a68bc81b4.jpg",
        "sort": 200,
        "created_at": "2022-04-09T20:09:59.000000Z",
        "updated_at": "2022-04-09T20:09:59.000000Z",
        "short_description": "6.5\" Смартфон Samsung Galaxy A52 256 ГБ черный"
    },
    {
        "id": 33,
        "category_id": 6,
        "title": "Смартфон Apple iPhone 13 Pro Max",
        "slug": null,
        "description": "iPhone 13 Pro Max. Грандиозный апгрейд камер Pro. Режим «Киноэффект» делает из видео настоящее кино. Дисплей Super Retina XDR с технологией ProMotion для более быстрого и плавного взаимодействия. A15 Bionic — самый быстрый чип для iPhone. Прочный корпус и самое долгое время работы без подзарядки среди iPhone.",
        "period": null,
        "price": "180000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/befebc20b84da668fbb6897b9d03ab4f.jpg",
        "sort": 100,
        "created_at": "2022-04-09T20:07:40.000000Z",
        "updated_at": "2022-04-09T20:08:20.000000Z",
        "short_description": "Смартфон Apple iPhone 13 Pro Max 256 ГБ голубой"
    },
    {
        "id": 31,
        "category_id": 6,
        "title": "Смартфон Xiaomi Mi A3",
        "slug": null,
        "description": "Компания Xiaomi представляет мобильный телефон Xiaomi Mi A3 128GB\/4GB (синий). Основные характеристики: тип устройства смартфон, стандарты связи GSM \/ 3G \/ 4G (LTE) \/ CDMA, а также операционная система Android v 9.0 и чистый android . Доставка и самовывоз товара «Xiaomi Mi A3 128GB\/4GB (синий)»",
        "period": null,
        "price": "20000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/7539592969e5cedde36956e200fb97d3.jpg",
        "sort": 300,
        "created_at": "2022-04-09T19:09:34.000000Z",
        "updated_at": "2022-04-09T20:10:10.000000Z",
        "short_description": "Xiaomi Mi A3 128GB\/4GB (синий) мобильный телефон"
    },
    {
        "id": 27,
        "category_id": 6,
        "title": "Смартфон ZTE Blade A5",
        "slug": null,
        "description": "Компания ZTE представляет мобильный телефон ZTE Blade A5 2019 32GB. Основные характеристики: основной дисплей 5.45 \" \/ 1440х720 (18:9) \/ 295 ppi \/ сенсорный экран, соотношение дисплей\/корпус 74 %, а также операционная система Android 9.0 Go Edition и модель процессора Unisoc SC9863A. Доставка и самовывоз товара «ZTE Blade A5 2019 32GB» . Перед тем, как купить прочитайте отзывы и посмотрите характеристики.",
        "period": null,
        "price": "20000.00",
        "old_price": null,
        "discount": null,
        "on_main": false,
        "type": null,
        "image": "storage\/product\/1653b2720870f17ce759eaf0b6880f5d.jpg",
        "sort": 500,
        "created_at": "2022-04-09T19:02:31.000000Z",
        "updated_at": "2022-04-09T20:10:24.000000Z",
        "short_description": "ZTE Blade A5 2019 32GB"
    },
    {
        "id": 35,
        "category_id": 6,
        "title": "Смартфон POCO X3 Pro",
        "slug": null,
        "description": "6.67\" Смартфон POCO X3 Pro — стильное и производительное решение с безрамочным дизайном. Данная модель отличается широкими возможностями и станет отличным выбором для работы и развлечений. Большую часть передней панели смартфона занимает IPS-экран с частотой развертки 120 Гц и разрешением 2400x1080 пикселей. Благодаря этому картинка порадует вас плавностью, детализацией, а также насыщенными цветами. Другой особенностью экрана является его высокая устойчивость к царапинам и сколам, что обусловлено использованием прочного стекла Gorilla Glass 6.\r\nСмартфон POCO X3 Pro работает на базе Android 11. Техническая часть представлена мощным процессором Qualcomm Snapdragon 860, графикой Adreno 640 и 8 ГБ ОЗУ, что позволит комфортно работать и запускать требовательные игры. Помимо этого процессор отличается энергоэффективностью, что вместе с емким аккумулятором обеспечит продолжительную работу без подзарядки. Для хранения данных предусмотрено хранилище на 256 ГБ.\r\nСмартфон POCO X3 Pro также отличается своими камерами и позволит создавать качественные фото и видео в высоком разрешении. Коммуникационные возможности представлены модулями Wi-Fi и Bluetooth 5.0, различной навигацией, а также NFC. Для защиты данных используется сканер лица и сканер отпечатков пальцев.",
        "period": null,
        "price": "25000.00",
        "old_price": "30000.00",
        "discount": "5000",
        "on_main": false,
        "type": null,
        "image": "storage\/product\/d5b99ded15090ab3fa2dd2eff2afb4be.jpg",
        "sort": 400,
        "created_at": "2022-04-09T20:13:10.000000Z",
        "updated_at": "2022-04-09T20:13:10.000000Z",
        "short_description": "6.67\" Смартфон POCO X3 Pro 256 ГБ синий"
    }
]
```
<div id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"></code></pre>
</div>
<div id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products"></code></pre>
</div>
<form id="form-GETapi-products" data-method="GET" data-path="api/products" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products" onclick="tryItOut('GETapi-products');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products" onclick="cancelTryOut('GETapi-products');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products</code></b>
</p>
</form>


## api/product/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product/quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/quidem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: \"quidem\" (SQL: select * from \"products\" where \"products\".\"id\" = quidem limit 1)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 712,
    "trace": [
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 672,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 376,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2414,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2402,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2936,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2403,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 625,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 609,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Concerns\/BuildsQueries.php",
            "line": 294,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 400,
            "function": "first",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 432,
            "function": "find",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Support\/Traits\/ForwardsCalls.php",
            "line": 23,
            "function": "findOrFail",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 2132,
            "function": "forwardCallTo",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 2144,
            "function": "__call",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/app\/Http\/Controllers\/Api\/ProductController.php",
            "line": 20,
            "function": "__callStatic",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "show",
            "class": "App\\Http\\Controllers\\Api\\ProductController",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 262,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 205,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 721,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 723,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 698,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 651,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 52,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/app\/Http\/Middleware\/OwnCors.php",
            "line": 30,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\OwnCors",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Middleware\/TrustHosts.php",
            "line": 48,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustHosts",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 653,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 298,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/symfony\/console\/Application.php",
            "line": 1015,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/symfony\/console\/Application.php",
            "line": 299,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/symfony\/console\/Application.php",
            "line": 171,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 94,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-product--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product--id-"></code></pre>
</div>
<div id="execution-error-GETapi-product--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product--id-"></code></pre>
</div>
<form id="form-GETapi-product--id-" data-method="GET" data-path="api/product/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product--id-" onclick="tryItOut('GETapi-product--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product--id-" onclick="cancelTryOut('GETapi-product--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-product--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/product-categories/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product-categories/dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product-categories/dolores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for integer: \"dolores\" (SQL: select * from \"products\" where \"category_id\" = dolores order by \"sort\" asc)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 712,
    "trace": [
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 672,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 376,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2414,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2402,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2936,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2403,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 625,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 609,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/app\/Http\/Controllers\/Api\/ProductController.php",
            "line": 25,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "byCategory",
            "class": "App\\Http\\Controllers\\Api\\ProductController",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 262,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 205,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 721,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 723,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 698,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 651,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 52,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/app\/Http\/Middleware\/OwnCors.php",
            "line": 30,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "App\\Http\\Middleware\\OwnCors",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Middleware\/TrustHosts.php",
            "line": 48,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustHosts",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 653,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 298,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/symfony\/console\/Application.php",
            "line": 1015,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/symfony\/console\/Application.php",
            "line": 299,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/symfony\/console\/Application.php",
            "line": 171,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 94,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/shop-back\/src\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-product-categories--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-categories--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-categories--id-"></code></pre>
</div>
<div id="execution-error-GETapi-product-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-categories--id-"></code></pre>
</div>
<form id="form-GETapi-product-categories--id-" data-method="GET" data-path="api/product-categories/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-categories--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-categories--id-" onclick="tryItOut('GETapi-product-categories--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-categories--id-" onclick="cancelTryOut('GETapi-product-categories--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-categories--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product-categories/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-product-categories--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/categories




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 6,
        "parent_category_id": null,
        "title": "Электроника",
        "slug": "elektro",
        "image": "storage\/category\/da2591af97c0948127e7c06f8c975a21.jpg",
        "sort": 500,
        "created_at": "2022-04-09T19:01:19.000000Z",
        "updated_at": "2022-04-09T19:01:19.000000Z"
    },
    {
        "id": 2,
        "parent_category_id": null,
        "title": "Бытовая техника",
        "slug": "oborudovanie",
        "image": "storage\/category\/016762afe33a499f33a35125ee701709.jpg",
        "sort": 800,
        "created_at": "2022-03-25T22:29:18.000000Z",
        "updated_at": "2022-04-09T20:19:42.000000Z"
    },
    {
        "id": 1,
        "parent_category_id": null,
        "title": "Музыкальные инструменты",
        "slug": "instrumenti",
        "image": "storage\/category\/ec2a98d04b4ee9858d02e2f832ecb243.jpg",
        "sort": 900,
        "created_at": "2022-03-25T22:21:27.000000Z",
        "updated_at": "2022-04-09T20:20:17.000000Z"
    },
    {
        "id": 4,
        "parent_category_id": null,
        "title": "Одежда",
        "slug": "odegda",
        "image": "storage\/category\/81324ade140ff0e34f17399936ebec06.jpg",
        "sort": 1000,
        "created_at": "2022-04-07T19:12:18.000000Z",
        "updated_at": "2022-04-09T17:16:21.000000Z"
    },
    {
        "id": 5,
        "parent_category_id": null,
        "title": "Обувь",
        "slug": "obuv",
        "image": "storage\/category\/5e9e78d228f8736913fa948e72d7f378.jpg",
        "sort": 6000,
        "created_at": "2022-04-09T18:51:32.000000Z",
        "updated_at": "2022-04-09T18:51:32.000000Z"
    },
    {
        "id": 3,
        "parent_category_id": null,
        "title": "Спортивные товары",
        "slug": "sport",
        "image": "storage\/category\/30e7b2a4a370c0a009f318928418f8e0.jpg",
        "sort": 10000,
        "created_at": "2022-03-27T13:48:48.000000Z",
        "updated_at": "2022-04-09T20:20:31.000000Z"
    }
]
```
<div id="execution-results-GETapi-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories"></code></pre>
</div>
<div id="execution-error-GETapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories"></code></pre>
</div>
<form id="form-GETapi-categories" data-method="GET" data-path="api/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-categories" onclick="tryItOut('GETapi-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-categories" onclick="cancelTryOut('GETapi-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/categories</code></b>
</p>
</form>


## api/home




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "title": "Интернет магазин",
    "description": "Только мы даем самые низкие цены на свою продукцию, а если вы найдете еще дешевле, то мы снизим цену еще больше.\r\nНаш интернет магазин работает на рынке более 5 лет и мы уже давно зарекомендовали себя как надежного и уверенного поставщика товара. Покупая в нашем магазине, вы будете всегда счастливы и рады вернуться к нам снова.\r\nПредставленный ассортимент является самым широким и у нас есть все, что вам нужно.",
    "banner": "[\"home\\\/39edd40b344eb57936ad67658299334f.jpg\",\"home\\\/235a0bcf5992c9e5dd52e21f289dd535.jpg\"]",
    "image": "storage\/home\/e4f56086b996040a80cfe358e87d9e2c.jpg",
    "created_at": "2022-04-01T17:27:33.000000Z",
    "updated_at": "2022-04-09T17:27:27.000000Z",
    "slider": [
        "storage\/home\/39edd40b344eb57936ad67658299334f.jpg",
        "storage\/home\/235a0bcf5992c9e5dd52e21f289dd535.jpg"
    ],
    "products": [
        {
            "id": 11,
            "category_id": 3,
            "title": "Беговая дорожка",
            "slug": null,
            "description": "Беговая дорожка",
            "period": null,
            "price": "10000.00",
            "old_price": null,
            "discount": null,
            "on_main": true,
            "type": null,
            "image": "storage\/product\/b58e8ea2ad9c6bbb4d3e9a72753cf679.jpg",
            "sort": 1000,
            "created_at": "2022-03-30T15:39:34.000000Z",
            "updated_at": "2022-04-05T10:58:13.000000Z",
            "short_description": "Беговая дорожка"
        },
        {
            "id": 16,
            "category_id": 3,
            "title": "Самокат",
            "slug": null,
            "description": null,
            "period": null,
            "price": "12200.00",
            "old_price": null,
            "discount": null,
            "on_main": true,
            "type": null,
            "image": "storage\/product\/314f6b06061902b8aa52c52957e73ba4.jpg",
            "sort": 1000,
            "created_at": "2022-04-04T13:55:57.000000Z",
            "updated_at": "2022-04-05T10:58:32.000000Z",
            "short_description": null
        },
        {
            "id": 1,
            "category_id": 1,
            "title": "Гитара",
            "slug": "gitara-6",
            "description": "Гитара 6 струнная",
            "period": null,
            "price": "1000.00",
            "old_price": null,
            "discount": null,
            "on_main": true,
            "type": null,
            "image": "storage\/product\/802429fd7a67e43a687af41d07a7cace.jpg",
            "sort": 1000,
            "created_at": "2022-03-25T22:30:46.000000Z",
            "updated_at": "2022-04-05T10:59:18.000000Z",
            "short_description": "Просто гитара"
        }
    ]
}
```
<div id="execution-results-GETapi-home" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-home"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-home"></code></pre>
</div>
<div id="execution-error-GETapi-home" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-home"></code></pre>
</div>
<form id="form-GETapi-home" data-method="GET" data-path="api/home" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-home', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-home" onclick="tryItOut('GETapi-home');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-home" onclick="cancelTryOut('GETapi-home');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-home" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/home</code></b>
</p>
</form>



