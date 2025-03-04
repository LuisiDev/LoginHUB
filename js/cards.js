//ATLANTIDA CARD
document
  .getElementById("atl-cubo")
  .classList.add("bg-gradient-to-t", "from-blue-800", "to-blue-500");
document.getElementById("atl-cubo").innerHTML =
  '<img src="img/logos/ATLInt-w.png" class="p-2.5" alt="">';

document.getElementById("atl-card").addEventListener("mouseover", function () {
  document.getElementById("atl-cubo").classList.add("bg-gray-50");
  document
    .getElementById("atl-cubo")
    .classList.remove("bg-gradient-to-t", "from-blue-800", "to-blue-500");
  document.getElementById("atl-cubo").innerHTML =
    '<img src="img/logos/ATLInt.png" class="p-2.5" alt="">';
});
document.getElementById("atl-card").addEventListener("mouseout", function () {
  document
    .getElementById("atl-cubo")
    .classList.add("bg-gradient-to-t", "from-blue-800", "to-blue-500");
  document.getElementById("atl-cubo").classList.remove("bg-gray-50");
  document.getElementById("atl-cubo").innerHTML =
    '<img src="img/logos/ATLINT-w.png" class="p-2.5" alt="">';
});

//HERMES CARD
document
  .getElementById("her-cubo")
  .classList.add("bg-gradient-to-t", "from-blue-800", "to-blue-500");
document.getElementById("her-cubo").innerHTML =
  '<img src="img/logos/ATLMAX-w.png" class="p-2.5" alt="">';

document.getElementById("her-card").addEventListener("mouseover", function () {
  document.getElementById("her-cubo").classList.add("bg-gray-50");
  document
    .getElementById("her-cubo")
    .classList.remove("bg-gradient-to-t", "from-blue-800", "to-blue-500");
  document.getElementById("her-cubo").innerHTML =
    '<img src="img/logos/ATLMAX.png" class="p-2.5" alt="">';
});
document.getElementById("her-card").addEventListener("mouseout", function () {
  document
    .getElementById("her-cubo")
    .classList.add("bg-gradient-to-t", "from-blue-800", "to-blue-500");
  document.getElementById("her-cubo").classList.remove("bg-gray-50");
  document.getElementById("her-cubo").innerHTML =
    '<img src="img/logos/ATLMAX-w.png" class="p-2.5" alt="">';
});

//CENTINELA CARD
document
  .getElementById("cen-cubo")
  .classList.add("bg-gradient-to-t", "from-blue-800", "to-blue-500");
document.getElementById("cen-cubo").innerHTML =
  '<img src="img/logos/SOLID.png" class="p-2.5" alt="">';

document.getElementById("cen-card").addEventListener("mouseover", function () {
  document.getElementById("cen-cubo").classList.add("bg-gray-50");
  document
    .getElementById("cen-cubo")
    .classList.remove("bg-gradient-to-t", "from-blue-800", "to-blue-500");
  document.getElementById("cen-cubo").innerHTML =
    '<img src="img/logos/CENTINELA-B.png" class="p-2.5" alt="">';
});
document.getElementById("cen-card").addEventListener("mouseout", function () {
  document
    .getElementById("cen-cubo")
    .classList.add("bg-gradient-to-t", "from-blue-800", "to-blue-500");
  document.getElementById("cen-cubo").classList.remove("bg-gray-50");
  document.getElementById("cen-cubo").innerHTML =
    '<img src="img/logos/SOLID.png" class="p-2.5" alt="">';
});

//ATENEA CARD
document
  .getElementById("ate-cubo")
  .classList.add("bg-gradient-to-t", "from-blue-800", "to-blue-500");
document.getElementById("ate-cubo").innerHTML =
  '<img src="img/logos/EPCOM-w.png" class="p-2.5" alt="">';

document.getElementById("ate-card").addEventListener("mouseover", function () {
  document.getElementById("ate-cubo").classList.add("bg-gray-50");
  document
    .getElementById("ate-cubo")
    .classList.remove("bg-gradient-to-t", "from-blue-800", "to-blue-500");
  document.getElementById("ate-cubo").innerHTML =
    '<img src="img/logos/EPCOM.png" class="p-2.5" alt="">';
});
document.getElementById("ate-card").addEventListener("mouseout", function () {
  document
    .getElementById("ate-cubo")
    .classList.add("bg-gradient-to-t", "from-blue-800", "to-blue-500");
  document.getElementById("ate-cubo").classList.remove("bg-gray-50");
  document.getElementById("ate-cubo").innerHTML =
    '<img src="img/logos/EPCOM-w.png" class="p-2.5" alt="">';
});