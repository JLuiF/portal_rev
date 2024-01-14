/*// Obtén el elemento select y todas las tarjetas
const selectTema = document.getElementById("selectTema");
const cardItems = document.querySelectorAll(".card-item");

// Agrega un evento change al select
selectTema.addEventListener("change", () => {
  const selectedTema = selectTema.value;

  // Oculta todas las tarjetas
  cardItems.forEach((cardItem) => {
    cardItem.style.display = "none";
  });

  // Muestra solo las tarjetas que coincidan con el tema seleccionado
  cardItems.forEach((cardItem) => {
    const tema = cardItem.getAttribute("data-tema");
    if (selectedTema === tema || selectedTema === "todos") {
      cardItem.style.display = "block";
    }
  });
});*/
// Obtén los elementos select y todas las tarjetas
// Obtén los elementos select y todas las tarjetas
const selectTema = document.getElementById("selectTema");
const cardItems = document.querySelectorAll(".card-item");

// Agrega un evento change al select
selectTema.addEventListener("change", () => {
  const selectedTema = selectTema.value.split(","); // Obtén las opciones como un arreglo

  // Oculta todas las tarjetas
  cardItems.forEach((cardItem) => {
    cardItem.style.display = "none";
  });

  // Muestra solo las tarjetas que coincidan con las opciones seleccionadas
  cardItems.forEach((cardItem) => {
    const temas = JSON.parse(cardItem.getAttribute("data-tema")); // Obtén las opciones del atributo data-tema como un arreglo

    // Verifica si al menos una de las opciones seleccionadas coincide con las opciones de la tarjeta o si se selecciona "todos"
    if (selectedTema.includes("todos") || temas.some(option => selectedTema.includes(option))) {
      cardItem.style.display = "block";
    }
  });
});


