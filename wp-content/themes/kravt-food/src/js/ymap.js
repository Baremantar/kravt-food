ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [55.76, 37.64], zoom: 12, controls: ['zoomControl'],
        });
    // let objectManager = new ymaps.ObjectManager();
                                                        
    myMap.controls.get('zoomControl').options.set({size: 'small'});
    // console.log(ymaps.geoXml.load('http://kravt-food.ru/geoObjects.kml'))
    ymaps.geoXml.load('http://kravt-food.ru/geoObjects.kml')
        .then(function (res) {
            myMap.geoObjects.add(res.geoObjects);
        });
    // function onGeoXmlLoad(res) {
    //     myMap.geoObjects.add(res.geoObjects);
    //     if (res.mapState) {
    //         res.mapState.applyToMap(myMap);
    //     }
    //     else {
    //         myMap.setBounds(res.geoObjects.getBounds());
    //     }
    // }
    // $.getJSON('geoObjects.geojson')
    //     .done(function (geoJson) {
    //         objectManager.add(geoJson);
    //         map.geoObjects.add(objectManager);
    //     });
}

export default ymaps;