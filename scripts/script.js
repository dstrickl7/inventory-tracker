const login = document.querySelector(".login");
const signup = document.querySelector(".signup");
const signupBtn = document.querySelector("#signupBtn");
const backBtn = document.querySelector("#backBtn");

signupBtn.addEventListener("click", () => {
  login.classList.toggle("hidden");
  signup.classList.toggle("active");
});

backBtn.addEventListener("click", () => {
  login.classList.toggle("hidden");
  signup.classList.toggle("active");
});
