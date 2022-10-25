const ADD_NOTITIE = document.getElementById("addbutton");
const WINKELMAND = document.getElementById("winkelmand");
var productPrijs = document.getElementById("productprijs");
var productNaam = document.getElementById("productnaam");

if (!localStorage.getItem("cart")) {
  localStorage.setItem("cart", "[]"); // [] is de standaard waarde omdat als een array moet functioneren.
}

function addProduct(smaak, prijs) {
  let notitie = {
    naam: smaak,
    prijs: prijs,
  };

  // Pak de huidige notitie object en zet om in leesbaar JSON formaat.
  let huidigeOpslag = JSON.parse(localStorage.getItem("cart"));

  // Notities localstorage is een array formaat en we voegen een nieuwe notitie toe.
  huidigeOpslag.push(notitie);

  // huidigeOpslag heeft nu een nieuwe notitie in geheugen en schrijven de "notities" item over.
  localStorage.setItem("cart", JSON.stringify(huidigeOpslag));
}

function haalCart() {
  let cart = JSON.parse(localStorage.getItem("cart"));

  for (let i = 0; i < cart.length; i++) {
    WINKELMAND.innerHTML += "<p>" + cart[i].naam + " " + cart[i].prijs + "</p>";
  }
}

haalCart();
