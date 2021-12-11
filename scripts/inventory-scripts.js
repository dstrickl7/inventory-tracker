// Add Inventory item container variables
const addInventory = document.querySelector("#add-inventory");
const addContainer = document.querySelector(".inventory-add");
const addContClose = document.querySelector(".add-container-close");
const addInventoryItem = document.querySelector("#add-item-inv");
const invItemsCont = document.querySelector(".inv-items-cont");
const invItemCont = document.querySelector(".inv-item-cont");
const removeInvItemBtn = document.querySelector("#remove-item-inv");
let itemCount = 1;

// Edit inventory item variables
const editBtn = document.querySelectorAll(".update-btn");
const editContainer = document.querySelector(".inventory-edit");
const editClose = document.querySelector(".edit-close");
const editOverlay = document.querySelector(".overlay-edit");

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
  removeInvItemBtn.classList.remove("hidden");
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

if (itemCount <= 1) {
  removeInvItemBtn.classList.add("hidden");
}

// Delete row from add item container
function removeSection(parent) {
  if (itemCount > 1) {
    parent.lastChild.remove();
  }
}

removeInvItemBtn.addEventListener("click", () => {
  removeSection(invItemsCont);
  itemCount--;
  if (itemCount <= 1) {
    removeInvItemBtn.classList.add("hidden");
  }
});

// close edit item container

if (editClose) {
  editClose.addEventListener("click", () => {
    editContainer.classList.toggle("closed");
    editOverlay.classList.remove("active");
  });
}
