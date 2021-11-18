// Navbar variables
const hamburger = document.querySelector(".hamburger");
const close = document.querySelector(".close");
const navlist = document.querySelector(".navlist-container");

// Add Inventory container variables
const addInventory = document.querySelector("#add-inventory");
const addList = document.querySelector("#add-list");
const addContainer = document.querySelector(".inventory-add");
const overlay = document.querySelector(".overlay");
const addContClose = document.querySelector(".add-container-close");

// Open mobile nav
hamburger.addEventListener("click", () => {
  navlist.classList.toggle("active");
  overlay.classList.toggle("active");
  close.classList.toggle("active");
});

close.addEventListener("click", () => {
  navlist.classList.toggle("active");
  overlay.classList.toggle("active");
  close.classList.toggle("active");
});

// Display add items container
addInventory.addEventListener("click", () => {
  addContainer.classList.toggle("active");
  overlay.classList.toggle("active");
});

addContClose.addEventListener("click", () => {
  addContainer.classList.toggle("active");
  overlay.classList.toggle("active");
});
