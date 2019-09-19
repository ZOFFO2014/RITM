/*AUTO-REPLACE TEXT IN HEADER*/

function nextMsg(i) {
    if (messages.length == i) {
        i = 0;
    }
    $('.front_message').html(messages[i]).fadeIn(400).delay(4500).fadeOut(500, function() {
        nextMsg(i + 1);
    });
};

var messages = [
    "ЧЕТЫРЕ ДНЯ НА РЕШЕНИЕ ЗАДАЧИ: КАК СТАТЬ ПРЕДПРИНИМАТЕЛЕМ СВОЕЙ ЖИЗНИ?",
    "Лучшие тренеры, педагоги, практики и наставники России",
    "ПРОСТРАНСТВО ИНКЛЮЗИИ И САМАЯ АКТИВНАЯ МОЛОДЕЖЬ СО ВСЕГО МИРА",
    "ЖИВАЯ СОЦИАЛЬНО-ПРЕДПРИНИМАТЕЛЬСКАЯ СРЕДА И STARTUP ПРОЕКТЫ С НАСТАВНИКАМИ",

];

$('.front_message').hide();

nextMsg(0);

/*AUTO-REPLACE TEXT IN HEADER*/