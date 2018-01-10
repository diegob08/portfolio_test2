(function () {
    var button = document.querySelector('.burger_button'),
        overlay = document.querySelector('.nav_overlay'),
        hideOverlay = document.querySelectorAll('.hide_overlay'),
        portfolio = document.querySelectorAll('.portfolio');

    function active() {
        overlay.classList.toggle('revealNav');
    }

    function hidePortfolioOverlay() {
        this.classList.add('hide_portfolio_overlay');
    }

    function hidePortfolioOverlayB() {
        this.classList.remove('hide_portfolio_overlay');
    }



    button.addEventListener('click', active, false);
    hideOverlay.forEach(function (navItem) {
        navItem.addEventListener('click', active, false);
    });
    portfolio.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('mouseover', hidePortfolioOverlay, false);
    });
    portfolio.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('mouseleave', hidePortfolioOverlayB, false);
    });
})();
