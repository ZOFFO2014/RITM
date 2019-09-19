/*смена фоновой картинки по таймеру(синхронно с текстом)*/

/*var imgHead = [
        '../img/RITM-1.jpg',
        '../img/RITM-2.jpg',
        '../img/RITM-1.jpg',
        '../img/RITM-2.jpg'

    ],
    i = 1;

function csaHead() {

    if (i > (imgHead.length - 1)) {
        $('.center-section').animate({ 'opacity': '0.8' }, 400, function() {
            i = 1;
            $('.center-section').css({ 'background': 'url(' + imgHead[0] + ')' });
            $('.center-section').css({ 'background': ' cover' });
        });
        $('.center-section').animate({ 'opacity': '0.9' }, 700);
    } else {
        $('.center-section').animate({ 'opacity': '0.8' }, 400, function() {
            $('.center-section').css({ 'background': 'url(' + imgHead[i] + ')' });
            i++;
        });
        $('.center-section').animate({ 'opacity': '0.9' }, 700);
    }

}
var intervalCsaHead = setInterval(csaHead, 2000);*/

/*смена фоновой картинки по таймеру(синхронно с текстом)*/