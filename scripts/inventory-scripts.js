// Navbar variables
const hamburger = document.querySelector(".hamburger");
const close = document.querySelector(".close");
const navlist = document.querySelector(".navlist-container");
const search = document.querySelector("#search");
const searchCont = document.querySelector(".search-container");

// Add Inventory item container variables
const addInventory = document.querySelector("#add-inventory");
const addContainer = document.querySelector(".inventory-add");
const overlay = document.querySelector(".overlay");
const addContClose = document.querySelector(".add-container-close");
const addInventoryItem = document.querySelector("#add-item-inv");
const invItemsCont = document.querySelector(".inv-items-cont");
const invItemCont = document.querySelector(".inv-item-cont");
const removeItemBtn = document.querySelectorAll(".add-item-delete");
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

// Display search bar
search.addEventListener("click", () => {
  searchCont.classList.toggle("active");
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

// Delete row from add item container

// close edit item container

if (editClose) {
  editClose.addEventListener("click", () => {
    editContainer.classList.toggle("closed");
    editOverlay.classList.remove("active");
  });
}
