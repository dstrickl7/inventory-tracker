// Add List item container variables
const addList = document.querySelector("#add-list");
const addListItem = document.querySelector("#add-item-list");
const addContainerLi = document.querySelector(".list-add");
const liItemsCont = document.querySelector(".li-items-cont");
const liItemCont = document.querySelector(".li-item-cont");
const listAddContClose = document.querySelector(".list-add-container-close");
const removeLiItemBtn = document.querySelectorAll(".add-li-item-delete");
const removeItemBtn = document.querySelector("#remove-item-list");
let itemCount = 1;

// Total cost variables
const total = document.querySelector("#total");
const tax = document.querySelector("#tax");
let itemCosts = document.querySelectorAll(".item-cost");
let itemAmounts = document.querySelectorAll(".item-amounts");

// Display add items container
addList.addEventListener("click", () => {
  addContainerLi.classList.toggle("active");
  overlay.classList.toggle("active");
});

listAddContClose.addEventListener("click", () => {
  addContainerLi.classList.toggle("active");
  overlay.classList.toggle("active");
});

// Add new row to add item container
addListItem.addEventListener("click", () => {
  addSection(liItemsCont, liItemCont);
  itemCount++;
  removeItemBtn.classList.remove("hidden");
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

// Calculate estimated cost
let costArray = [];
// Get JSON
const getJsonData = () => {
  fetch("../scripts/list-data.json")
    .then((res) => res.json())
    .then((data) => {
      data.forEach((item) => {
        costArray.push(item.cost * item.amount);

        let subtotal = costArray.reduce(sum);

        const calculateTax = (tax) => {
          const newTax = Number(tax.value) / 100;
          return newTax;
        };

        const displayTotal = (tax) => {
          total.innerText = (subtotal * (1 + calculateTax(tax))).toFixed(2);
        };

        displayTotal(tax);

        tax.addEventListener("change", () => {
          calculateTax(tax);
        });
        tax.addEventListener("change", () => {
          displayTotal(tax);
        });
      });
    });
};

document.addEventListener("change", getJsonData());

function sum(x, y) {
  return x + y;
}

// Delete row from add item container
function removeSection(parent) {
  if (itemCount > 1) {
    parent.lastChild.remove();
  }
}

removeItemBtn.addEventListener("click", () => {
  removeSection(liItemsCont);
  itemCount--;
  if (itemCount <= 1) {
    removeItemBtn.classList.add("hidden");
  }
});

if (itemCount <= 1) {
  removeItemBtn.classList.add("hidden");
}
