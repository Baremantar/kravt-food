ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
        center: [55.76, 37.64], zoom: 12, controls: []
    });
    
    var suggestView = new ymaps.SuggestView('suggest');
    ymaps.geoXml.load('http://baremantar.ru/geoObjects.kml')
        .then(function (res) {
            myMap.geoObjects.add(res.geoObjects);
        });
}

export default ymaps;