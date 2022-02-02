const img = document.querySelector(".nav-item img");
const nav = document.querySelector("nav");

img.addEventListener("click", () => {
  nav.classList.toggle("slide");

  if (nav.getAttribute("class") == "slide") {
    img.src = "img/arrow-left-circle.svg";
  } else {
    img.src = "img/list.svg";
  }
});

const navItem = document.querySelectorAll(".nav-item");
for (let i = 0; i < navItem.length; i++) {
  navItem[0].querySelector("img").classList.add("active");

  navItem[0].addEventListener("click", () => {
    navItem[1].querySelector("img").classList.remove("active");
    navItem[2].querySelector("img").classList.remove("active");
    navItem[3].querySelector("img").classList.remove("active");
    navItem[4].querySelector("img").classList.remove("active");

    navItem[0].querySelector("img").classList.add("active");
  });

  navItem[1].addEventListener("click", () => {
    navItem[0].querySelector("img").classList.remove("active");
    navItem[2].querySelector("img").classList.remove("active");
    navItem[3].querySelector("img").classList.remove("active");
    navItem[4].querySelector("img").classList.remove("active");

    navItem[1].querySelector("img").classList.add("active");
    nav.classList.remove("slide");
  });

  navItem[2].addEventListener("click", () => {
    navItem[0].querySelector("img").classList.remove("active");
    navItem[1].querySelector("img").classList.remove("active");
    navItem[3].querySelector("img").classList.remove("active");
    navItem[4].querySelector("img").classList.remove("active");

    navItem[2].querySelector("img").classList.add("active");
    nav.classList.remove("slide");
  });

  navItem[3].addEventListener("click", () => {
    navItem[0].querySelector("img").classList.remove("active");
    navItem[1].querySelector("img").classList.remove("active");
    navItem[2].querySelector("img").classList.remove("active");
    navItem[4].querySelector("img").classList.remove("active");

    navItem[3].querySelector("img").classList.add("active");
    nav.classList.remove("slide");
  });

  navItem[4].addEventListener("click", () => {
    navItem[0].querySelector("img").classList.remove("active");
    navItem[1].querySelector("img").classList.remove("active");
    navItem[2].querySelector("img").classList.remove("active");
    navItem[3].querySelector("img").classList.remove("active");

    navItem[4].querySelector("img").classList.add("active");
    nav.classList.remove("slide");
  });
}
