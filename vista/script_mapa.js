
var map;
function initMap(latitud, longitud) {
    const myLatLng = {lat: latitud, lng: longitud};
    map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: myLatLng,
    });

    new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello World!",
    });
}

function nueva_cordenada(a, l, id) {
    initMap(a, l);
    alerta_info(id);
}
function alerta_info(id) {
    let info = document.getElementById('alerta-info');
    let xmr = new XMLHttpRequest();
    xmr.open("GET", "api.php?tipo=registro-alerta-id&id=" + id, true);
    xmr.send();
    xmr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            info.innerHTML = this.responseText;
        }
    };
}
function alerta_atendido(id) {
    let info = document.getElementById('alerta-info');
    let xmr = new XMLHttpRequest();
    xmr.open("GET", "api.php?tipo=registro-alerta-fin&id=" + id, true);
    xmr.send();
    xmr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            info.innerHTML = this.responseText;
        }
    };
}
var inicio=true;
function ubicacion(pos) {
    var cordenada = pos.coords;
    if (inicio){
        initMap(cordenada.latitude, cordenada.longitude);
        inicio=false;
    }
}
navigator.geolocation.watchPosition(ubicacion);
