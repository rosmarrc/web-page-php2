const animales = [
    {
        nombre: "León",
        descripcion: "El león es un felino conocido por ser el 'rey de la selva'. Son depredadores carnívoros y habitan en grupos llamados manadas."
    },
    {
        nombre: "Elefante",
        descripcion: "El elefante es el mamífero terrestre más grande del mundo. Son herbívoros y tienen una trompa larga y orejas grandes."
    },
    {
        nombre: "Tigre",
        descripcion: "El tigre es un felino carnívoro de gran tamaño. Son conocidos por sus rayas y su agilidad en la caza."
    }

];

function mostrarAnimalAleatorio() {
    const animalInfo = document.getElementById('animal-info');
    const animalName = document.getElementById('animal-name');
    const animalDescription = document.getElementById('animal-description');

    const animalAleatorio = animales[Math.floor(Math.random() * animales.length)];

    animalName.textContent = animalAleatorio.nombre;
    animalDescription.textContent = animalAleatorio.descripcion;
}

mostrarAnimalAleatorio();
