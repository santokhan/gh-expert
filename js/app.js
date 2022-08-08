(function () {
  const links = {
    facebook: "https://facebook.com/gh-expert",
    twitter: "https://twitter.com/gh-expert",
    linkedin: "https://linkedin.com/gh-expert",
    instagram: "https://instagram.com/gh-expert",
  };

  for (const link in links) {
    if (Object.hasOwnProperty.call(links, link)) {
      let add = ".social." + link;

      document.querySelector(add).setAttribute("href", links[link]);
    }
  }
})();
