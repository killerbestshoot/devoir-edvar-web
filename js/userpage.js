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
const deletion = document.getElementById("effacer-cli");
const delAbort = document.getElementById("dismiss-del");
const delproceed = document.getElementById("process-del");

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
    var searched_text = document.getElementById("t-search").value;
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = () => {
      if (xhr.readyState == 4) {
        if (xhr.status == 200) {
          var data_article = JSON.parse(xhr.responseText);
          console.log(data_article);
          document.getElementById("nom_articles").innerHTML =
            data_article.nom_A;
          document.getElementById("prix_a").innerHTML = data_article.prix_A;
          document.getElementById("input_nombre_a").innerHTML =
            data_article.qte_A;
          document.getElementById("textarea").innerHTML = data_article.desc_A;
        } else window.alert(xhr.status);
      }
    };
    // on envoie la requette
    xhr.open("POST", "../config/fetch_article_data.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searched_text=" + searched_text);
  });
});
deletion.addEventListener("click", () => {
  document.getElementById("confirm-dialg").style.visibility = "visible";
  document.querySelector(".body-separate").style.filter = "blur(3px)";
});
delAbort.addEventListener("click", () => {
  document.getElementById("confirm-dialg").style.visibility = "hidden";
  document.querySelector(".body-separate").style.filter = "none";
});
delproceed.addEventListener("click", () => {
  var num_cli = document.getElementById("num_client").value;
  // var num_cli = "luc-3455";
  xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4) {
      if (xhr.status == 200) {
        // var res = xhr.responseText;
        var res = JSON.parse(xhr.responseText);
        console.log(res);
        document.getElementById("confirm-dialg").style.visibility = "hidden";
        document.getElementById("message").innerHTML = res;
        document.querySelector(".body-separate").style.filter = "none";
      } else window.alert(xhr.status);
    }
  };
  xhr.open("POST", "../config/data_commit_fetch.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("del=" + num_cli);
});
