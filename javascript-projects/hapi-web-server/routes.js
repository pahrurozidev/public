const routes = [
  {
    method: "GET",
    path: "/",
    handler: (request, h) => {
      const { name = "stranger", location = "bali" } = request.query;
      return `Hello ${name} from ${location}`;
    },
  },
  {
    method: "*",
    path: "/",
    handler: (request, h) => {
      return "Halaman tidak dapat diakses dengan method tersebut";
    },
  },
  {
    method: "GET",
    path: "/hello/{name?}",
    handler: (request, h) => {
      const { name = "stranger" } = request.params;
      return `Hello ${name}`;
    },
  },
  {
    method: "GET",
    path: "/login",
    handler: (request, h) => {
      const { username, password } = request.payload;
      return `Hello ${username}`;
    },
  },
  {
    method: "GET",
    path: "/user",
    handler: (request, h) => {
      return h.response("created").code(201);
    },
  },
  {
    method: "GET",
    path: "/about",
    handler: (request, h) => {
      return "About Page";
    },
  },
  {
    method: "*",
    path: "/about",
    handler: (request, h) => {
      return "Halaman tidak dapat diakses dengan method tersebut";
    },
  },
  {
    method: "*",
    path: "/{any*}",
    handler: (request, h) => {
      return "Halaman tidak ditemukan!";
    },
  },
];

module.exports = routes;
