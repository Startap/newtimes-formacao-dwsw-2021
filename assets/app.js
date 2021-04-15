setupFaqCardItems = function () {
    let faqItems = document.querySelectorAll('.faq-card')

    for (let faqCard of faqItems) {
        faqCard.addEventListener("click", function () {
            this.classList.toggle("faq-opened");
            let panelOpened = this.classList.contains("faq-opened");
            let faqAnswer = this.querySelector(".faq-answer");

            /**
             * Get indications of opened or closed panel
             */
            this.style.gap = panelOpened ? "15px" : "0px";
            faqAnswer.style.maxHeight = panelOpened
                ? faqAnswer.scrollHeight + "px"
                : "0px";
        });
    }
}

scrollToTop = function() {
    window.scrollTo({behavior: 'smooth', left: 0, top: 0});
}

document.onreadystatechange = function () {
    if (document.readyState === 'complete') {
        let btnBackToForm = document.querySelector('.scroll_top_back')
        btnBackToForm?.addEventListener('click', () => { scrollToTop() })

        setupFaqCardItems()
    }
}