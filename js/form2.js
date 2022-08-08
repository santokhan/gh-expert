// const grid = document.getElementById("grid");

document.getElementById("search").addEventListener("input", function (e) {
  let query = encodeURI(e.target.value);
  const url = `https://gh-expert.herokuapp.com/server.php?type`;
  // const url = `http://localhost/server.php?type`;

  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      grid.innerHTML = "";
      console.log(xhttp.responseText);
      print(JSON.parse(xhttp.responseText));
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send(query);
});

function print(data) {
  data.forEach((element) => {
    grid.innerHTML += createCard(element);
  });

  console.log(grid);
}

function createCard(singleArr) {
  const titleHrLink =
    createTitle(singleArr[0]) + "<hr>" + createLink(singleArr);
  const box = `<div class="bg-white rounded-xl py-4 px-6">${titleHrLink}</div>`;

  const card = `<div class="py-4 px-2">${box}</div>`;
  return card;
}

let createTitle = (params) =>
  `<div class="text-xl font-medium mb-2">${params}</div>`;

function createLink(params) {
  const linkDiv = document.createElement("DIV");
  linkDiv.className = "py-4";

  params[1].forEach((element) => {
    linkDiv.innerHTML += `<div class="py-2"><a href="${params[2]}${element}" target="_blank"><i class="fas fa-angle-right"></i> ${element}</a></div>`;
  });

  return linkDiv.outerHTML;
}
