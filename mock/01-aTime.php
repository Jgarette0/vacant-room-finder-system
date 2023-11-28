<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>

 <button id="button" onclick="showLoginForm()">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
   stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-power">
   <path d="M12 2v10" />
   <path d="M18.4 6.6a9 9 0 1 1-12.77.04" />
  </svg>
 </button>


 <dialog id="dialog">
  <div class="container">
   <div class="close">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="x">
     <path d="M18 6 6 18" />
     <path d="m6 6 12 12" />
    </svg>
   </div>
   <?php include '02-time.php'; ?>
   <?php include '03-time.php'; ?>
   <div class="question">Tap your Id</div>
  </div>
  </div>
 </dialog>

 <script>
 const button = document.getElementById("button");
 const dialog = document.getElementById("dialog");
 const closing = document.querySelector(".close");
 const parag = document.querySelector('.paragraph');
 const drop = document.querySelector('.dropdown');

 button.addEventListener("click", () => {
  dialog.showModal();
 });
 closing.addEventListener("click", () => {
  dialog.close();
 });
 noway.addEventListener("click", () => {
  dialog.close();
 });
 </script>

 <style>
 body {
  display: flex;
  flex-direction: column;
 }

 button {
  border: none;
  height: 100px;
  width: 100px;
  background-color: #181818;
  border-radius: 15px;
  opacity: 0.9;
  margin: auto;
  cursor: pointer;
 }

 button:hover {
  opacity: 1;
 }

 button svg {
  color: #fbfbfb;
 }

 dialog {
  background-color: #fbfbfb;
  color: #181818;
  position: fixed;
  border: none;
  border-radius: 20px;
  font-family: helvetica;
  font-size: 30px;
  height: 100vh;
  width: 100%;
  opacity: 0.3;
 }

 .container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 90%;
  width: 100%;
 }

 .close {
  display: flex;
  justify-content: flex-end;
  padding: 15px;
  cursor: pointer;
  transition: background-color 0.5s;
 }

 .x {
  padding: 15px;
  cursor: pointer;
  transition: background-color 0.5s;
  margin: -30px -30px 0 0;
  border-radius: 15px;
 }

 .x:hover {
  background-color: rgb(187, 187, 187);
 }

 .question {
  padding: 10px 0;
  display: flex;
  justify-content: center;
  align-items: center;
 }

 .paragraph {
  display: flex;
  justify-content: center;
  align-items: center;
 }

 .dropdown {
  display: flex;
  justify-content: center;
  align-items: center;
 }

 .dropdown select {
  padding: 15px 30px;
  border: 1px solid #181818;
  background-color: #fbfbfb;
  border-radius: 15px;
 }

 .buttons {
  display: flex;
  justify-content: space-around;
  align-items: center;
 }

 .buttons button {}

 .yes,
 .no {
  width: 150px;
  height: 70px;
  text-align: center;
  color: #fbfbfb;
  font-size: 1.25rem;
 }
 </style>

</body>

</html>