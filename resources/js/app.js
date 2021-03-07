require('./bootstrap');

window.hiddenElementOff = function (elementName){
    $('#' + elementName).removeClass("hidden");
}

window.hiddenElementOn = function (elementName){
    $('#' + elementName).addClass("hidden");
}