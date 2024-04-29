let contador = 0;

function calcularVolumen() {
    const radio = parseFloat(document.getElementById('radio').value);
    const altura = parseFloat(document.getElementById('altura').value);

    if (isNaN(radio) || isNaN(altura)) {
        alert('ingresa datos que se puedan calcular');
        return;
    }

    const volumen = Math.PI * Math.pow(radio, 2) * altura; // Calcula el volumen del cilindro
     contador++; // Incrementa el contador
    document.getElementById('resultado').innerText = `Volumen del cilindro: ${volumen.toFixed(2)}`; // mostrar el resultado
    document.getElementById('contador').innerText = `Cantidad de cálculos realizados: ${contador}`; // contador
}
