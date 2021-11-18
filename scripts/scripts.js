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
const addInventoryItem = document.querySelector("#add-item-inventory");
const addListItem = document.querySelector("#add-item-list");
const inputContInv = document.querySelector(".input-container-inv");
const inputContLi = document.querySelector(".input-container-li");
const invInputCont = document.querySelector(".inv-item-input-cont");

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

// Add new row to add item
addInventoryItem.addEventListener(
  "click",
  addSection(inputContInv, invInputCont)
);

function addSection(section, parent) {
  parent.appendChild(section.cloneNode(true));
}
