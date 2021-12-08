import { initializeApp } from "@firebase/app";

// import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.0/firebase-analytics.js";
import { getAnalytics } from "@firebase/analytics";
import {
  getAuth,
  createUserWithEmailAndPassword,
  signInWithEmailAndPassword,
} from "@firebase/auth";
// import { getAuth,  } from "@firebase/auth";

// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyACTzzT8Qb74Msi39YDLx0-MWZg7fLnvsA",
  authDomain: "the-kitchen-tracker.firebaseapp.com",
  projectId: "the-kitchen-tracker",
  storageBucket: "the-kitchen-tracker.appspot.com",
  messagingSenderId: "895968892219",
  appId: "1:895968892219:web:8e298e39e153bb8471d31e",
  measurementId: "${config.measurementId}",
};

// Initialize firebase app
const app = initializeApp(firebaseConfig);

// Initialize firebase services
const analytics = getAnalytics(app);
const auth = getAuth(app);

// Creating new user
const signupForm = document.querySelector(".signup");
signupForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const email = signupForm.email.value;
  const password = signupForm.password.value;
  const usersName;

  createUserWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      // Signed in
      const user = userCredential.user;
      usersName= user.displayName;
      console.log("User created:", usersName, user);
      signupForm.reset();
    })
    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
      console.log(errorCode, errorMessage);
    });
});

// Sign in exisiting users
const loginForm = document.querySelector(".login");
loginForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const loginEmail = loginForm.email.value;
  const loginPassword = loginForm.password.value;


  signInWithEmailAndPassword(auth, loginEmail, loginPassword)
    .then((userCredential) => {
      // Signed in
      const user = userCredential.user;
      console.log("Hello:", user.displayName, "! Welcome back!");
      signupForm.reset();
    })
    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
      console.log(errorCode, errorMessage);
    });
});
