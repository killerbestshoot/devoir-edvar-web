setTimeout(() => {
  document.querySelector(".loader").classList.add("dispose");
}, 3000);
window.addEventListener("load", () => {
  loader.classList.add("dispose");
});

const fields = document.getElementById("passs-w");
const fields1 = document.getElementById("username");
fields.addEventListener("mouseover", () => {
  document.getElementById("passs-w").style.outline = "2px solid blue";
});
fields.addEventListener("mouseout", () => {
  document.getElementById("passs-w").style.outline = "none";
});
fields1.addEventListener("mouseover", () => {
  document.getElementById("username").style.outline = "2px solid blue";
});
fields1.addEventListener("mouseout", () => {
  document.getElementById("username").style.outline = "none";
});
