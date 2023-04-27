// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyDoH11PS0y0rAm3koscH3VQNlkmv26bwuY",
  authDomain: "my-anonymity-app.firebaseapp.com",
  databaseURL: "https://my-anonymity-app-default-rtdb.firebaseio.com",
  projectId: "my-anonymity-app",
  storageBucket: "my-anonymity-app.appspot.com",
  messagingSenderId: "149998370320",
  appId: "1:149998370320:web:d329b5ca0bc8b776501495"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);