// Add List item container variables

const addList = document.querySelector("#add-list");
const addListItem = document.querySelector("#add-item-list");
const addContainerLi = document.querySelector(".list-add");
const listAddContClose = document.querySelector(".list-add-container-close");
overlay;
/*

const overlay = document.querySelector(".overlay");
const addContClose = document.querySelector(".add-container-close");
const removeItemBtn = document.querySelector(".add-item-delete");
let itemCount = 1;
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
