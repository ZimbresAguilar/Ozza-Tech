// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

import firebase from "firebase/compat/app";
// Required for side-effects
import "firebase/firestore";

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyAwSmq356cZSTTHDCvxD3uq8ttrULox8RI",
  authDomain: "ozzatech-8dced.firebaseapp.com",
  databaseURL: "https://ozzatech-8dced-default-rtdb.firebaseio.com",
  projectId: "ozzatech-8dced",
  storageBucket: "ozzatech-8dced.appspot.com",
  messagingSenderId: "1072397751524",
  appId: "1:1072397751524:web:a644985d40583558a748f1",
  measurementId: "G-HKV9MWG2QK"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const db = getFirestore(app);
firebase.initializeApp(firebaseConfig);

// Obter referência para o Firestore
const fs = firebase.firestore();