const selected = new Array(
  document.getElementById("selectedoption"),
  document.getElementById("selectedoption1"),
  document.getElementById("selectedoption2"),
  document.getElementById("selectedoption3"),
  document.getElementById("selectedoption4"),
  document.getElementById("selectedoption5"),
  document.getElementById("selectedoption6"),
  document.getElementById("selectedoption7")
);
const search = document.getElementById("searchb");

selected[0].addEventListener("click", () => {
  selected[0].classList.add("active");
  selected[1].classList.remove("active");
  selected[2].classList.remove("active");
  selected[3].classList.remove("active");
  selected[4].classList.remove("active");
  selected[5].classList.remove("active");
  selected[6].classList.remove("active");
  selected[7].classList.remove("active");
});
selected[1].addEventListener("click", () => {
  selected[1].classList.add("active");
  selected[0].classList.remove("active");
  selected[2].classList.remove("active");
  selected[3].classList.remove("active");
  selected[4].classList.remove("active");
  selected[5].classList.remove("active");
  selected[6].classList.remove("active");
  selected[7].classList.remove("active");
});
selected[2].addEventListener("click", () => {
  selected[2].classList.add("active");
  selected[0].classList.remove("active");
  selected[1].classList.remove("active");
  selected[3].classList.remove("active");
  selected[4].classList.remove("active");
  selected[5].classList.remove("active");
  selected[6].classList.remove("active");
  selected[7].classList.remove("active");
});
search.addEventListener("mouseover", () => {
  search.style.cursor = "pointer";
  search.addEventListener("click", () => {
    var data = new FormData();
    data.append("t-search", document.getElementById("t-search").value);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../config/data_commit_fetch.php");
    xhr.onload = function () {
      console.log(this.response);
    };
    xhr.send(data);
    return false;
  });
});
