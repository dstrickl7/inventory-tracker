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
const addInventoryItem = document.querySelector("#add-item-inv");
const addListItem = document.querySelector("#add-item-list");
const invItemCont = document.querySelector(".inv-item-cont");

// Edit inventory item variables
const editBtn = document.querySelectorAll(".update-btn");
const editContainer = document.querySelector(".inventory-edit");
const cancelBtn = document.querySelector("#cancel");
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

// Add new row to add item
let itemCount = 1;

addInventoryItem.addEventListener("click", () => {
  addSection(invItemCont);
  itemCount++;
});

// Issues:
/*
-if first node has values when add btn clicked, values inside of first node are copied to subsequent nodes except the category
-change from .after because the new row is added directly under the first node

*/

function addSection(section) {
  let clone = section.cloneNode(true);
  section.after(clone);
  clone.childNodes.forEach((node) => {
    node.childNodes.forEach((childNode) => {
      if (childNode.id) {
        childNode.id = childNode.id + itemCount.toString();
        // childNode.name = childNode.name + itemCount.toString();
      }
    });
  });
}

cancelBtn.addEventListener("click", () => {
  editContainer.classList.toggle("closed");
  editOverlay.classList.remove("active");
});

// editBtn.forEach((btn) =>
//   btn.addEventListener("click", () => {
//     overlay.classList.toggle("active");
//   })
// );

// addContClose.addEventListener("click", () => {
//   addContainer.classList.toggle("active");
//   overlay.classList.toggle("active");
// });
