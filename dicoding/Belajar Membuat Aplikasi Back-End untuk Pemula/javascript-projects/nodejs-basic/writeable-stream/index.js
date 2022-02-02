const fs = require("fs");

const readableStream = fs.createReadStream("./writeable-stream/input.txt", {
  highWaterMark: 15,
});

const writeableStream = fs.createWriteStream("./writeable-stream/output.txt");

readableStream.on("readable", () => {
  try {
    writeableStream.write(`${readableStream.read()} \n`);
  } catch (error) {
    console.log("Exception error");
  }
});

readableStream.on("end", () => {
  console.log("Done");
});
