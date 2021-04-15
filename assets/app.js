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


document.onreadystatechange = function () {
    if (document.readyState === 'complete') {
        let btnBackToForm = document.querySelector('.scroll_top_back')
        btnBackToForm?.addEventListener('click', () => { scrollToForm() })

        if (document.querySelector('form')) {
            let inputElements = document.querySelectorAll('form input:not([type="hidden"])')
            inputElements?.forEach(elInput => { elInput.addEventListener('input', (el) => { onInputFormFocus(el) }) })

            setupFormActiveCampaign()
        }

        setupFaqCardItems()
    }
}