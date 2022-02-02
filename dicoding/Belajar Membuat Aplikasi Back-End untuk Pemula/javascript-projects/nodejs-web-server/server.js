const http = require("http");

const port = 5000;
const host = "localhost";

const requestListner = (request, response) => {
  // response.setHeader("Content-Type", "text/html");
  response.setHeader("Content-Type", "application/json");
  response.setHeader("X-Powered-By", "NodeJS");

  const { method, url } = request;

  if (url === "/") {
    // get
    if (method === "GET") {
      response.statusCode = 200;
      response.end(
        JSON.stringify({
          message: "Ini adalah homepage",
        })
      );
    } else {
      response.statusCode = 400;
      response.end(
        JSON.stringify({
          message: `Halaman tidak dapat diakses dengan ${method} request`,
        })
      );
    }
  } else if (url === "/about") {
    if (method === "GET") {
      response.end("<h1>Halo! Ini adalah halaman about</h1>");
      response.end(
        JSON.stringify({
          message: "Halo! Ini adalah halaman about",
        })
      );
    }
    // post
    else if (method === "POST") {
      let body = [];

      request.on("data", (chunk) => {
        body.push(chunk);
      });

      request.on("end", () => {
        body = buffer.concat(body).toString();
        const { name } = JSON.parse(body);
        response.end(`Hi, ${body}`);
      });
    } else {
      response.statusCode = 400;
      response.end(
        JSON.stringify({
          message: `Halaman tidak dapat diakses menggunakan ${method}, request`,
        })
      );
    }
  } else {
    response.statusCode = 404;
    response.end(
      JSON.stringify({
        message: "Halaman tidak ditemukan!",
      })
    );
  }

  // JSON.stringify => objek js -> string json
  // JSON.parse => string json -> objek js

  // put
  // if (method === "PUT") {
  //   response.end("<h2>Method PUT</h2>");
  // }

  // delete
  // if (method === "DELETE") {
  //   response.end("<h2>Method DELETE</h2>");
  // }

  response.statusCode = 200;
  response.end("<h2>Hallo Http Server</h2>");
};

const server = http.createServer(requestListner);

server.listen(port, host, () => {
  console.log(`Server berjalan pada http://${host}:${port}`);
});
