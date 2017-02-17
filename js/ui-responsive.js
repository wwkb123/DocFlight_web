$(document).ready(function () {
    $('#consultationButton').hover(function () {
        $('#consultation').attr('src', 'img/icons/video-chat.png');
        $('#consulationSpan').attr('class','imgbutton-underline')
    }, function () {
        $('#consultation').attr('src', 'img/icons/video-chat3.png');
        $('#consulationSpan').attr('class','')
    });
    $('#paperDiagnoseButton').hover(function () {
        $('#paperDiagnose').attr('src', 'img/icons/writing-letter.png');
        $('#paperDiagnoseButton').children().attr('class','imgbutton-underline')
    }, function () {
        $('#paperDiagnose').attr('src', 'img/icons/writing-letter3.png');
        $('#paperDiagnoseButton').children().attr('class','')
    });
    $('#travelButton').hover(function () {
        $('#travel').attr('src', 'img/icons/travel.png');
        $('#travelButton').children().attr('class','imgbutton-underline')
    }, function () {
        $('#travel').attr('src', 'img/icons/travel3.png');
        $('#travelButton').children().attr('class','')
    });
    $('#familyButton').hover(function () {
        $('#family').attr('src', 'img/icons/doctor.png');
        $('#familyButton').children().attr('class','imgbutton-underline')
    }, function () {
        $('#family').attr('src', 'img/icons/doctor3.png');
        $('#familyButton').children().attr('class','')
    });
});