const login = document.querySelector(".login");
const signup = document.querySelector(".signup");
const signupBtn = document.querySelector("#signupBtn");
const backBtn = document.querySelector("#backBtn");

// Navbar variables
const hamburger = document.querySelector(".hamburger");
const close = document.querySelector(".close");
const navlist = document.querySelector(".navlist-container");
const search = document.querySelector("#search");
const searchCont = document.querySelector(".search-container");
const overlay = document.querySelector(".overlay");

// Change color scheme
const blue = document.querySelector("#blue");
const green = document.querySelector("#green");
const salmon = document.querySelector("#salmon");
const grey = document.querySelector("#grey");

// Open mobile nav
if (navlist) {
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
}

// Display search bar
if (search) {
  search.addEventListener("click", () => {
    searchCont.classList.toggle("active");
  });
}

if (signupBtn) {
  signupBtn.addEventListener("click", () => {
    login.classList.toggle("hidden");
    signup.classList.toggle("active");
  });
}

if (backBtn) {
  backBtn.addEventListener("click", () => {
    login.classList.toggle("hidden");
    signup.classList.toggle("active");
  });
}
