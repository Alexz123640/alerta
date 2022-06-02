
function Barra(cv_barra, jbarra) {
    if (cv_barra) {
        new Chart(cv_barra, {
            type: 'bar',
            data: {
                labels: jbarra.categoria,
                datasets: [
                    {
                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#3cba9f", "#e8c3b9", "#c45850"],
                        data: jbarra.cantidad
                    }
                ]
            },
            options: {
                responsive: false,
                plugins: {
                    legend: {
                        display: false,
                        position: 'top'
                    },
                    title: {
                        display: true
                        , text: jbarra.titulo
                    }
                }
            }
        });
    }
}





var cvS_barra = document.getElementById("barChart");

Barra(cvS_barra, jsBarra);

