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
//

// function addSection(section, parent) {
//   parent.appendChild(section.cloneNode(true));
// }

function addSection(section) {
  let clone = section.cloneNode(true);
  section.after(clone);
  clone.childNodes.forEach((node) => {
    node.childNodes.forEach((childNode) => {
      if (childNode.id) {
        childNode.id = childNode.id + itemCount.toString();
      }
    });
  });
}
// Create a count. For each clone, add 1 to count and create new clone id with value concatenated to it
