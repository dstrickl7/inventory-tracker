// Navbar variables
const hamburger = document.querySelector(".hamburger");
const close = document.querySelector(".close");
const navlist = document.querySelector(".navlist-container");

// Switch to list view variables
const list = document.querySelector(".list");
const toInvLink = document.querySelector("#toInv");
const toListLink = document.querySelector("#toList");
const inventory = document.querySelector(".inventory");

// Add Inventory item container variables
const addInventory = document.querySelector("#add-inventory");
const addContainer = document.querySelector(".inventory-add");
const overlay = document.querySelector(".overlay");
const addContClose = document.querySelector(".add-container-close");
const addInventoryItem = document.querySelector("#add-item-inv");
const invItemsCont = document.querySelector(".inv-items-cont");
const invItemCont = document.querySelector(".inv-item-cont");
const removeItemBtn = document.querySelector(".add-item-delete");
let itemCount = 1;

// Edit inventory item variables
const editBtn = document.querySelectorAll(".update-btn");
const editContainer = document.querySelector(".inventory-edit");
const editClose = document.querySelector(".edit-close");
const editOverlay = document.querySelector(".overlay-edit");

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

// Add new row to add item container
addInventoryItem.addEventListener("click", () => {
  addSection(invItemsCont, invItemCont);
  itemCount++;
});

function addSection(parent, section) {
  let clone = section.cloneNode(true);
  if (itemCount <= 5) {
    parent.append(clone);
    clone.childNodes.forEach((node) => {
      node.childNodes.forEach((childNode) => {
        if (childNode.id) {
          childNode.id = childNode.id + itemCount.toString();
          childNode.value = "";
        }
      });
      if (node.id) {
        node.id = node.id + itemCount.toString();
      }
    });
  }
}

// close edit item container

if (editClose) {
  editClose.addEventListener("click", () => {
    editContainer.classList.toggle("closed");
    editOverlay.classList.remove("active");
  });
}

// Switch to list view

toListLink.addEventListener("click", () => {
  list.classList.add("active");
  inventory.classList.add("inactive");
});

// Switch to inventory view
toInvLink.addEventListener("click", () => {
  list.classList.remove("active");
  inventory.classList.remove("inactive");
});