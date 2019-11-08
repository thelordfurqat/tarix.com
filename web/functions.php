<?php

function getl($data){
$lan=Yii::$app->language;
if($data=='Bosh sahifa'){
    switch ($lan){
        case 'ru':return 'Главная';break;
        case 'en':return 'Home';break;
        default: return $data;break;
    }
}
if($data=='Tarixiy obidalar'){
    switch ($lan){
        case 'ru':return 'Памятники';break;
        case 'en':return 'Monuments';break;
        default: return $data;break;
    }
}
if($data=='Hukmdorlar'){
    switch ($lan){
        case 'ru':return 'Правители';break;
        case 'en':return 'Kings';break;
        default: return $data;break;
    }
}
if($data=='Milliy an\'analar'){
    switch ($lan){
        case 'ru':return 'Национальные традиции';break;
        case 'en':return 'National traditions';break;
        default: return $data;break;
    }
}
if($data=='Tarixiy shaxslar'){
    switch ($lan){
        case 'ru':return 'Исторические личности';break;
        case 'en':return 'Historical persons';break;
        default: return $data;break;
    }
}
if($data=='Biz haqimizda'){
    switch ($lan){
        case 'ru':return 'О нас';break;
        case 'en':return 'About Us';break;
        default: return $data;break;
    }
}
if($data=='Eng so\'lim joylarga sayohat qiling'){
    switch ($lan){
        case 'ru':return 'Путешествие в самые изысканные места';break;
        case 'en':return 'Travel to the most sophisticated places';break;
        default: return $data;break;
    }
}
if($data=='Ta\'tilingizni mazmunli o\'tkazing'){
    switch ($lan){
        case 'ru':return 'Сделать значимые праздники';break;
        case 'en':return 'Make meaningful celebrations';break;
        default: return $data;break;
    }
}
if($data=='Tarixiy joylarga sayohat qiling'){
    switch ($lan){
        case 'ru':return 'Путешествие по историческим местам';break;
        case 'en':return 'Travel to historic sites';break;
        default: return $data;break;
    }
}
if($data=='O’zbekistonga xush kelibsiz!'){
    switch ($lan){
        case 'ru':return 'Добро пожаловать в Узбекистан!';break;
        case 'en':return 'Welcome to Uzbekistan!';break;
        default: return $data;break;
    }
}
if($data=='O\'zbekiston - Buyuk Ipak yo\'lining yuragi, qadimiy shaharlar yerlari - qadimgi sivilizatsiyalar markazlari, noyob me\'moriy yodgorliklar, noyob landshaftlar va tabiiy go\'zallik!'){
    switch ($lan){
        case 'ru':return 'Узбекистан - сердце Великого шелкового пути, древние города - центры древних цивилизаций, уникальные архитектурные памятники, уникальные ландшафты и природная красота!';break;
        case 'en':return 'Uzbekistan - the heart of the Great Silk Road, ancient cities - centers of ancient civilizations, unique architectural monuments, unique landscapes and natural beauty!';break;
        default: return $data;break;
    }
}
if($data=='Turizmni rivojlantirish davlat qo’mitasi va uning mintaqaviy tuzilmalari shtat birliklari oshirildi, hududlarda turizm departamentlari hamda boshqarmalari, hokim o’rinbosarlari lavozimlari tashkil etilgani mazkur tashkilotlarning imkoniyatlarini yanada kengaytirdi. Sayyohlar oqimini
                        ko’paytirish bo’yicha 39 mamlakat fuqarolariga viza berish tartibi soddalashtirildi.'){
    switch ($lan){
        case 'ru':return 'Государственный комитет по развитию туризма и его территориальные подразделения модернизировали государственные учреждения, создали в регионах должности департаментов и администраций по туризму и вице-губернаторов, что еще больше расширило возможности этих организаций. Поток туристов
                         упрощенный визовый режим для граждан 39 стран.';break;
        case 'en':return 'The State Committee for Tourism Development and its territorial divisions upgraded state offices, created the positions of tourism departments and administrations and vice-governors in the regions, further expanding the capacities of these organizations. The flow of tourists
                         a simplified visa regime for citizens of 39 countries.';break;
        default: return $data;break;
    }
}
if($data=='Tarixiy hukmdorlar haykallari'){
    switch ($lan){
        case 'ru':return 'Статуи исторических правителей';break;
        case 'en':return 'Statues of historic rulers';break;
        default: return $data;break;
    }
}
if($data=='Batafsil'){
    switch ($lan){
        case 'ru':return 'Узнать больше';break;
        case 'en':return 'Learn more';break;
        default: return $data;break;
    }
}
if($data=='Ommabop ziyoratgohlar'){
    switch ($lan){
        case 'ru':return 'Популярные направления';break;
        case 'en':return 'Popular destinations';break;
        default: return $data;break;
    }
}
if($data=='Buyuk shaxslar'){
    switch ($lan){
        case 'ru':return 'Великие личности';break;
        case 'en':return 'Great personalities';break;
        default: return $data;break;
    }
}
if($data=='Bu qadimiy obidalar o\'tmishdan so\'zlashi bilan bir qatorda o\'zining jozibisi bilan sizni lol qoldiradi. Hoziroq ko\'ring'){
    switch ($lan){
        case 'ru':return 'Эти древние артефакты, наряду с прошлым, вызывают восхищение их очарованием. Попробуйте сейчас';break;
        case 'en':return 'These ancient artifacts, along with the past, are a source of admiration for their fascination. Try it out now';break;
        default: return $data;break;
    }
}
if($data=='Eng ko\'p tashrif buyuriladiganlar manzillar'){
    switch ($lan){
        case 'ru':return 'Самые посещаемые адреса';break;
        case 'en':return 'Most visited addresses';break;
        default: return $data;break;
    }
}
if($data=='Kategoriyalar'){
    switch ($lan){
        case 'ru':return 'Категории';break;
        case 'en':return 'Categories';break;
        default: return $data;break;
    }
}

if($data=='O\'zbekistonda joylashgan tarixiy obidalar- o\'zining qadimiyligi, betakror go\'zalliklari bilan ajralib turadi.
                        Bu manzilgohlar o\'tmishdan so\'zlashi bilan bir qatorda, insonda ajabtovur hissiyotlarni uyg\'otadi.') {
    switch ($lan) {
        case 'ru':
            return 'Исторические памятники Узбекистана характеризуются своей древней и неповторимой красотой. Эти адреса, помимо разговоров о прошлом, заставляют людей чувствовать себя потрясающе.';
            break;
        case 'en':
            return 'Historical monuments of Uzbekistan are characterized by their ancient and unique beauty. These addresses, besides talking about the past, make people feel awesome.';
            break;
        default:
            return $data;
            break;
    }
}
if($data=='Tarixiy hukmdorlar'){
    switch ($lan){
        case 'ru':return 'Исторические правители';break;
        case 'en':return 'Historical rulers';break;
        default: return $data;break;
    }
}
if($data=='O\'zbekistonda yashab o\'tgan hukmdorlar - o\'zlarining adolatli davlat boshqaruvlari, keng miqiyosdagi yutuqlari bilan butun dunyoda dovrug\' qozonganlar.'){
    switch ($lan){
        case 'ru':return 'Правители в Узбекистане завоевали популярность во всем мире благодаря честному государственному контролю и более широким достижениям.';break;
        case 'en':return 'The rulers in Uzbekistan have gained popularity throughout the world with their fair government controls and their broader accomplishments.';break;
        default: return $data;break;
    }
}
if($data=='Milliy an\'analar - asrlar davomida yashab kelayotgan urf - odatlardir. U o\'ziga xosligi, jozibasi hamda madaniy merosining yuqoriligi bilan barcha hududlarda ajralib turadi.'){
    switch ($lan){
        case 'ru':return 'Национальные традиции - это традиции, которые живут веками. Он отличается во всех регионах своей оригинальностью, привлекательностью и высоким культурным наследием.';break;
        case 'en':return 'National traditions are traditions that have been living for centuries. It is distinguished in all regions with its originality, attractiveness and high cultural heritage.';break;
        default: return $data;break;
    }
}
if($data=='Tarixiy buyuk shaxslar'){
    switch ($lan){
        case 'ru':return 'Великие исторически люди';break;
        case 'en':return 'Historically great people';break;
        default: return $data;break;
    }
}
if($data=='Bu insonlar - O\'zbekistonda yashab ijod qilgan, vatanni qadrlash, uning uchun xizmat qilish kerakligini amalda ko\'rsatib bergan hamda ilm - fan rivojiga ulkat xissalarni qo\'shgan insonlardir.'){
    switch ($lan){
        case 'ru':return 'Эти люди - люди, которые жили и работали в Узбекистане, которые показали необходимость служить Родине, служить на ней и способствовали развитию науки.';break;
        case 'en':return 'These people are people who have lived and worked in Uzbekistan, who have shown the necessity of serving the Motherland, serving in it, and have contributed to the development of science.';break;
        default: return $data;break;
    }
}
if($data=='Toshkent axborot texnalogiyalari universiteti Urganch filiali'){
    switch ($lan){
        case 'ru':return 'Ургенчский филиал Ташкентского университета информационных технологий';break;
        case 'en':return 'Urgench branch of the Tashkent University of Information Technology';break;
        default: return $data;break;
    }
}
if($data=='Muhammad al-Xorazmiy nomidagi'){
    switch ($lan){
        case 'ru':return 'От имени Мухаммеда аль-Хорезми';break;
        case 'en':return 'Named after Muhammad al-Khwarizmi';break;
        default: return $data;break;
    }
}
if($data=='Web sahifa'){
    switch ($lan){
        case 'ru':return 'Веб-страница';break;
        case 'en':return 'Web page';break;
        default: return $data;break;
    }
}
if($data=='Telefon'){
    switch ($lan){
        case 'ru':return 'Телефон';break;
        case 'en':return 'Phone';break;
        default: return $data;break;
    }
}
if($data=='Address'){
    switch ($lan){
        case 'ru':return 'Адрес';break;
        case 'en':return 'Address';break;
        default: return $data;break;
    }
}
if($data=='Urganch. Al-Xorazmiy ko\'cha. 110-uy'){
    switch ($lan){
        case 'ru':return 'Ургенч. Улица Аль-Хорезми Дом 110';break;
        case 'en':return 'Urganch. Al-Khwarizmi Street House 110';break;
        default: return $data;break;
    }
}


}