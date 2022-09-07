setTimeout(() => {
  document.querySelector(".loader").classList.add("dispose");
}, 3000);
window.addEventListener("load", () => {
  loader.classList.add("dispose");
});

const fields = document.getElementById("passs-w");
const fields1 = document.getElementById("username");
const btt = document.querySelector(".btn-primary");
const tit = document.getElementById("connection");
fields.addEventListener("mouseover", () => {
  document.getElementById("passs-w").style.outline = "2px solid blue";
});
fields.addEventListener("mouseout", () => {
  fields.style.outline = "none";
});
fields1.addEventListener("mouseover", () => {
  fields1.style.outline = "2px solid blue";
});
fields1.addEventListener("mouseout", () => {
  fields1.style.outline = "none";
});
btt.addEventListener("mouseover", () => {
  btt.classList.add("anim");
});
btt.addEventListener("mouseout", () => {
  btt.classList.remove("anim");
});
tit.addEventListener("mouseover", () => {
  tit.classList.add("anim1");
});
tit.addEventListener("mouseout", () => {
  tit.classList.remove("anim1");
});
