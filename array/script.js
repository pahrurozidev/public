// 1. push => add the last
// 2. pop => mengambil nilai terakhir
// 3. shift => mengambil nilai pertama
// 4. unshift => menambahkan nilai di awal

// const array = ["1", 2, 3, 4, 5];

// console.log("before : " + array);
// array.unshift('Pahrurozi');
// console.log("after : " + array);

// button
const button = document.querySelectorAll("button");
const push = button[0];
const pop = button[1];
const shift = button[2];
const unshift = button[3];

// main
const main = document.getElementsByTagName("main")[0];
// section button
const btn = document.getElementById("button");
// section center
const section = document.createElement("section");
// input
const input =
  '<input type="text"/> <button type="button" class="btn-ok">ok</button>';
// content section
section.innerHTML = input;

// ===============
// onclick push
// ===============
push.addEventListener("click", () => {
  // insert to section button
  main.insertBefore(section, btn);

  // inputan user
  const inputUser = document.querySelector("input");

  // btn-ok
  const btnOk = document.querySelector(".btn-ok");

  // btn-ok onClick
  btnOk.addEventListener("click", () => {
    // array
    let array = [1, 2];

    // push
    array.push(inputUser.value);

    // clear value input
    inputUser.value = "";

    // data
    const data = document.getElementsByClassName("data")[0];
    data.innerText = array;
  });
});

// ===============
// onclick pop
// ===============
pop.addEventListener("click", () => {
  // pop

  // array
  let array = [1, 2];

  // pop
  array.pop();

  // data
  const data = document.getElementsByClassName("data")[0];
  data.innerText = array;
});

// ===============
// onclick pop
// ===============
shift.addEventListener("click", () => {
  // pop

  // array
  let array = [1, 2];

  // shift
  array.shift();

  // data
  const data = document.getElementsByClassName("data")[0];
  data.innerText = array;
});

// ===============
// onclick unshift
// ===============
unshift.addEventListener("click", () => {
  // insert to section button
  main.insertBefore(section, btn);

  // inputan user
  const inputUser = document.querySelector("input");

  // btn-ok
  const btnOk = document.querySelector(".btn-ok");

  // btn-ok onClick
  btnOk.addEventListener("click", () => {
    // array
    let array = [1, 2];

    // unshift
    array.unshift(inputUser.value);

    // clear value input
    inputUser.value = "";

    // data
    const data = document.getElementsByClassName("data")[0];
    data.innerText = array;
  });
});
