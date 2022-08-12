ymaps.ready(init);

function init() {
    var map = new ymaps.Map("map", {
            center: [55.76, 37.64], zoom: 12, controls: ['zoomControl'],
        }),
        objectManager = new ymaps.ObjectManager();
    map.controls.get('zoomControl').options.set({size: 'small'});
    $.getJSON('geoObjects.geojson')
        .done(function (geoJson) {
            objectManager.add(geoJson);
            map.geoObjects.add(objectManager);
        });
}

export default ymaps;