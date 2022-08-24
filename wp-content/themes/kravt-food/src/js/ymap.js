ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
        center: [55.76, 37.64], zoom: 12, controls: []
    });
    var suggestView = new ymaps.SuggestView('suggest')

    var searchControl = new ymaps.control.SearchControl({
        options: {
            provider: 'yandex#search',
            position: {
                top: -40 // уберём поисковую панель за край карты
            }
        }
    });
    myMap.controls.add(searchControl);


    suggestView.events.add('select', function () { // поиск по выбору саджеста
        Search()
    })

    $("#suggest").keyup(function(event){ // поиск по Enter
        if(event.keyCode == 13){
            Search()
        }
    });

    $('#button').bind('click', function () { // поиск по кнопке
        Search()
    });

    function Search () { // Непосредственно поиск в панели
        var request = $('#suggest').val();
        searchControl.search(request);
    }

    ymaps.geoXml.load('http://baremantar.ru/geoObjects.kml')
        .then(function (res) {
            myMap.geoObjects.add(res.geoObjects);
        });
}

export default ymaps;