(function () {
    var portfolio = document.querySelectorAll('.portfolio_overlay'),

    function portGallery() {
        let contentObj = portfolioData[this.id];

        image.src = contentObj.image;
        image.alt = contentObj.alt;
        title.innerHTML = contentObj.title;
        content.innerHTML = contentObj.content;
    }


    portfolio.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('click', lightbox, false);
    });
    portfolioWrap.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('click', portGallery, false);
    });
    close.addEventListener('click', lightbox, false);
})();
