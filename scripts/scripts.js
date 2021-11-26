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
const invItemsCont = document.querySelector(".inv-items-cont");
const invItemCont = document.querySelector(".inv-item-cont");
const removeItemBtn = document.querySelector(".add-item-delete");

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
  addSection(invItemsCont, invItemCont);
  itemCount++;
});

// Issues:
/*
-if first node has values when add btn clicked, values inside of first node are copied to subsequent nodes except the category
-change from .after because the new row is added directly under the first node

*/

function addSection(parent, section) {
  let clone = section.cloneNode(true);
  parent.append(clone);
  clone.childNodes.forEach((node) => {
    node.childNodes.forEach((childNode) => {
      if (childNode.id) {
        childNode.id = childNode.id + itemCount.toString();
        childNode.value = "";
        // childNode.name = childNode.name + itemCount.toString();
      }
    });
    if (node.id) {
      node.id = node.id + itemCount.toString();
    }
  });
}

// if(){
//   removeItemBtn.forEach(btn => ()=>{
//     btn.addEventListener("click", ()=>{
//       if(btn.id==){

//       }
//     })
//   });
// }

if (cancelBtn) {
  cancelBtn.addEventListener("click", () => {
    editContainer.classList.toggle("closed");
    editOverlay.classList.remove("active");
  });
}

// editBtn.forEach((btn) =>
//   btn.addEventListener("click", () => {
//     overlay.classList.toggle("active");
//   })
// );

// addContClose.addEventListener("click", () => {
//   addContainer.classList.toggle("active");
//   overlay.classList.toggle("active");
// });
