// Se muestra una oferta aleatoria de 4 opciones
function generar_oferta(){
    // Generar un numero aleatorio entre 0 y 3
    // let ahora se usa para los nuevos JS, en lugar de var
    // el match.floor redondea hacia abajo
    // el match.random genera un numero aleatorio entre 0 y 1
    // el * 4 genera un numero aleatorio entre 0 y 3
    // math sirve para hacer operaciones matematicas
    let numero = Math.floor(Math.random() * 4);
   /* alert("numero: " + numero); */
    // Crear un array de texto con las ofertas
    // el [ ] es un array
    const texto_ofertas = [
        "Oferta 1: con 15% de descuento",
        "Oferta 2: botas infantiles con 20% de descuento",
        "Oferta 3: sandalias con 10% de descuento",
        "Oferta 4: chanclas con 5% de descuento"
    ];
    // crear un array JS con nombres de imagenes
    const imagenes = [
        "../Imagen/77817-chocolate-lateral.avif",
        "../Imagen/88609-tan-lateral.avif",
        "../Imagen/92105-dark-brown-lateral.avif",
        "../Imagen/92113-honey-lateral.avif"
    ];
    // mostrar el texto de la oferta en el div con id="texto_oferta"
    document.getElementById("texto_oferta").innerHTML = texto_ofertas[numero];
    // mostrar imagen de la oferta en el div con id="imagen_oferta scr es el atributo que se usa para cambiar la imagen"
    document.getElementById("imagen_aleatorio").src = imagenes[numero];

    document.getElementById("texto_oferta").style.backgroundColor = "rgb (255, 255, 255, 0.5)";
}