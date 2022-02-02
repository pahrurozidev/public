// TODO: tampilkan teks pada notes.txt pada console.
const fs = require("fs");

const readFile = fs.readFileSync("./filesystem/note.txt", "utf-8");
console.log(readFile);
