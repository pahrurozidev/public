// TODO 1
const { EventEmitter } = require("events");

const birthday = (name) => {
  console.log(`Happy birthday ${name}!`);
};

const umur = (age) => {
  console.log(`Umur saya ${age}`);
};

const ProfileListener = ({ name, age }) => {
  birthday(name);
  umur(age);
};

// TODO 2
const myEventEmiter = new EventEmitter();

// TODO 3
myEventEmiter.on("birthday", ProfileListener);

// TODO 4
myEventEmiter.emit("birthday", { name: "dimas", age: 21 });
