google.maps.event.addDomListener(window, 'load', init);
var map;
function init() {
    var mapOptions = {
        center: new google.maps.LatLng(53.92985,27.487758),
        zoom: 13,
        zoomControl: false,
        disableDoubleClickZoom: false,
        mapTypeControl: false,
        scaleControl: false,
        scrollwheel: false,
        panControl: false,
        streetViewControl: false,
        draggable : true,
        overviewMapControl: false,
        overviewMapControlOptions: {
            opened: false
        },
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [
            {
                "featureType": "all",
                "elementType": "all",
                "stylers": [
                    {"saturation": -100},
                    {"gamma": 0.8}
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
//                            { "weight": 0.4 },
                    { "visibility": "simplified" }
                ]
            }
        ]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var locations = [
        ['САЛОН №1, ТЦ Град', 'САЛОН №1, г.Минск, ТЦ Град, <br />ул.Тимирязева, 123/2, <br />третий этаж, пав №327.<br /><br />Часы работы: <br />Вторник-воскресенье - с 10:00 до 18:00.<br />Выходной - Понедельник.', 'undefined', 'undefined', 'undefined', 53.9329829, 27.4568081, 'https://mapbuildr.com/assets/img/markers/default.png'],['САЛОН №2, ТЦ Трюм', 'САЛОН №2, г.Минск, ТЦ Трюм, <br />ул. Кальвариская, 7Б, верхний этаж.<br /><br />Часы работы: <br />Понедельник-воскресенье - с 11:00 до 20:00.<br />Без выходных.', 'undefined', 'undefined', 'undefined', 53.9053131, 27.5350547, 'https://mapbuildr.com/assets/img/markers/default.png']
    ];
    for (i = 0; i < locations.length; i++) {
        if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
        if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
        if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
        if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
        if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
        marker = new google.maps.Marker({
            icon: markericon,
            position: new google.maps.LatLng(locations[i][5], locations[i][6]),
            map: map,
            title: locations[i][0],
            desc: description,
            tel: telephone,
            email: email,
            web: web
        });
        link = '';
    }
}
