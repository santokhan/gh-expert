const grid = document.getElementById("grid");

document.getElementById("search").addEventListener("input", function (e) {
  grid.innerHTML = "";
  let query = e.target.value;
  const url = `https://gh-expert.herokuapp.com/server.php`;
  // const url = `http://localhost/server.php`;

  fetch(url, {
    method: "POST",
    body: JSON.stringify(query),
  })
    .then((res) => res.text())
    .then((d) => {
      grid.innerHTML = d;
      console.log(d);
    });
});
