function cerrar() {
    window.location.href = "?salir=0";
}
function alertas() {
    let lista_alert = document.getElementById('alerta');
    let xmr = new XMLHttpRequest();
    xmr.open("GET", "api.php?tipo=registro-lista-alerta", true);
    xmr.send();
    xmr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            lista_alert.innerHTML = this.responseText;
        }
    };
}
alertas();
setInterval(alertas, 4000);
