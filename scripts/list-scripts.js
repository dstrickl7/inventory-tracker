// Navbar variables
const hamburger = document.querySelector(".hamburger");
const close = document.querySelector(".close");
const navlist = document.querySelector(".navlist-container");
const overlay = document.querySelector(".overlay");

// Add List item container variables
const addList = document.querySelector("#add-list");
const addListItem = document.querySelector("#add-item-list");
const addContainerLi = document.querySelector(".list-add");
const liItemsCont = document.querySelector(".li-items-cont");
const liItemCont = document.querySelector(".li-item-cont");
const listAddContClose = document.querySelector(".list-add-container-close");
let itemCount = 1;

// Total cost variables
const total = document.querySelector("#total");
const tax = document.querySelector("#tax");
let itemCosts = document.querySelectorAll(".item-cost");
let itemAmounts = document.querySelectorAll(".item-amounts");

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

/*

const overlay = document.querySelector(".overlay");
const addContClose = document.querySelector(".add-container-close");
const removeItemBtn = document.querySelector(".add-item-delete");

*/

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
costArray = [];
amountArray = [];
itemCosts.forEach((item) => {
  costArray.push(Number(item.textContent));
});

itemAmounts.forEach((item) => {
  amountArray.push(Number(item.textContent));
});

subtotalArray = costArray * amountArray;
console.log(subtotalArray);

function sum(x, y) {
  return x + y;
}
let subtotal = costArray.reduce(sum);
// console.log(subtotal);
