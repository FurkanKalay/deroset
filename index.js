const ADD_NOTITIE = document.getElementById("addbutton");
var productPrijs = document.getElementById("productprijs");
var productNaam = document.getElementById("productnaam");

if (!localStorage.getItem("cart")) {
  localStorage.setItem("cart", "[]"); // [] is de standaard waarde omdat als een array moet functioneren.
}

ADD_NOTITIE.addEventListener("click", () => {
  let notitie = {
    titel: NOTITIE_TITEL.value,
    content: NOTITIE_CONTENT.value,
  };

  // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
  let huidigeOpslag = JSON.parse(localStorage.getItem("notities"));

  // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
  huidigeOpslag.push(notitie);

  // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
  localStorage.setItem("notities", JSON.stringify(huidigeOpslag));
});
