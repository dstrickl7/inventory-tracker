import { initializeApp } from "@firebase/app";
import { getAnalytics } from "@firebase/analytics";
import {
  getAuth,
  createUserWithEmailAndPassword,
  signInWithEmailAndPassword,
  signOut,
  onAuthStateChanged,
} from "@firebase/auth";

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
if (signupForm) {
  signupForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const email = signupForm.email.value;
    const password = signupForm.password.value;
    const displayError = document.querySelector(".error");

    createUserWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
        // Signed in
        const user = userCredential.user;
        console.log("User created:", user);
        signupForm.reset();
        window.location.replace("../index.php");
      })
      .catch((error) => {
        const errorCode = error.code;
        if (errorCode == "auth/weak-password") {
          displayError.innerText =
            "Password must be at least 6 characters long";
        } else if (errorCode == "auth/email-already-in-use") {
          displayError.innerText = "User already exists";
        } else if (errorCode == "auth/invalid-email") {
          displayError.innerText = "Invalid email";
        }
      });
  });
}

// Sign in exisiting users
const loginForm = document.querySelector(".login");
if (loginForm) {
  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const loginEmail = loginForm.email.value;
    const loginPassword = loginForm.password.value;
    const displayError = document.querySelector(".error");
    signInWithEmailAndPassword(auth, loginEmail, loginPassword)
      .then((userCredential) => {
        // Signed in
        const user = userCredential.user;
        loginForm.reset();
        window.location.replace("../index.php");
      })
      .catch((error) => {
        const errorCode = error.code;
        if (errorCode == "auth/wrong-password") {
          displayError.innerText = "Login information incorrect";
        } else if (errorCode == "auth/invalid-email") {
          displayError.innerText = "Email invalid";
        } else if (errorCode == "auth/user-not-found") {
          displayError.innerText = "User does not exist";
        }
      });
  });
}

const logoutBtn = document.querySelector(".logout");
if (logoutBtn) {
  logoutBtn.addEventListener("click", () => {
    signOut(auth)
      .then(() => {
        window.location.replace("login.php");
      })
      .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        console.log(errorCode, errorMessage);
      });
  });
}

/*
// Get current user
const auth = getAuth();
onAuthStateChanged(auth, (user) => {
  if (user) {
    // User is signed in, see docs for a list of available properties
    // https://firebase.google.com/docs/reference/js/firebase.User
    const uid = user.uid;
    // ...
  } else {
    // User is signed out
    // ...
  }
});
*/
