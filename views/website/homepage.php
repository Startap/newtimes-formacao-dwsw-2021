<section class="section__container" id="section__headline">
    <article class="section__article_wrapper" id="article__headline">
        <h1><?php echo $this->language['headline']['title']; ?></h1>
        <h2><?php echo $this->language['headline']['subtitle']; ?></h2>

        <a href="https://pay.hotmart.com/G51468673P" target="_blank" rel="norel nofollow">
            <button class="button_cta"><span><?php echo $this->language['headline']['button_cta']; ?></span></button>
        </a>
    </article>

    <article class="youtube__container">
        <div class="iframe-container-width">
            <div id="iframe-video-container">
                <?php
                $youtubeVideoId = getenv('YOUTUBE_VIDEO');
                $youtubeUrl = 'https://www.youtube.com/embed/%videoId?controls=0&modestbranding=1&showinfo=0&rel=0';
                $youtubeUrl = str_replace('%videoId', $youtubeVideoId, $youtubeUrl);
                ?>

                <iframe id="iframe-video" src="<?php echo $youtubeUrl; ?>" title="YouTube - Mentoria Advogado Expert" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
    </article>
</section>

<section class="section__container" id="target__wrapper">
    <article class="section__article_wrapper">
        <h1 class="section__title"><?php echo $this->language['section_titles']['targets']; ?></h1>

        <p id="target__text"><span><?php echo $this->language['target']; ?></span></p>
    </article>
</section>

<section class="section__container">
    <article class="section__article_wrapper">
        <h1 class="section__title"><?php echo $this->language['section_titles']['modules']; ?></h1>

        <?php
        $moduleHtmlElement = <<<ModuleHtml
        <div class="module__wrapper" data-module-index="%module_index">
            <h2 class="module__title">%module_title</h2>
            <p class="module__description">%module_description</p>
        </div>
        ModuleHtml;

        $modulesToRender = [];
        foreach ($this->language['modules'] as $key => $module) {
            $currentModule = str_replace('%module_index', $key + 1, $moduleHtmlElement);
            $currentModule = str_replace('%module_title', $module['title'], $currentModule);
            $currentModule = str_replace('%module_description', $module['description'], $currentModule);
            array_push($modulesToRender, $currentModule);
        }
        ?>

        <div class="modules__container"><?php echo implode(" ", $modulesToRender); ?></div>
    </article>
</section>

<section class="section__container">
    <article class="section__article_wrapper">
        <h1 class="section__title"><?php echo $this->language['section_titles']['bonus']; ?></h1>

        <div class="bonus_group__wrapper">
            <?php
            $bonusHtmlElement = <<<ModuleHtml
            <div class="bonus_item__wrapper">
                <p class="bonus_item__description">%bonus_description</p>
            </div>
            ModuleHtml;

            $modulesToRender = [];
            foreach ($this->language['bonus'] as $key => $bonus) {
                $currentBonus = str_replace('%bonus_description', $bonus, $bonusHtmlElement);
                array_push($modulesToRender, $currentBonus);
            }

            echo implode(" ", $modulesToRender);
            ?>
        </div>
    </article>
</section>

<section class="section__container">
    <article class="section__article_wrapper" id="section__course_price">
        <h1 class="section__title"><?php echo $this->language['section_titles']['value_price']; ?></h1>

        <div class="price__container">
            <p class="price__header">Estamos fazendo uma promoção por tempo limitado, e com vagas limitadas</p>
            <p class="price__old">R$ 2.994,00 (12x de R$ 249,50)</p>
            <p class="price__current">12x de R$ 97,14</p>

            <img src="/assets/images/selo_garantia.png" alt="Selo de sete dias de garantia">

            <button class="button_cta scroll_top_back">quero entrar na formação dwsw 2021</button>
        </div>
    </article>
</section>

<section class="section__container">
    <article class="section__article_wrapper" id="section__about">
        <h1 class="section__title"><?php echo $this->language['section_titles']['about']; ?></h1>

        <div class="about__image">
            <img src="/assets/images/dougla_correa_profile.jpg" alt="Foto de perfil do intrutor">
        </div>

        <div class="about__description">
            <p id="about__name"></p>
            <p id="about__job_title"></p>

            <div class="about__biography_container">
                <?php
                foreach ($this->language['about_instructor']['biography'] as $bioItem) {
                    echo "<p class='about__paragraph'>$bioItem</p>";
                }
                ?>
            </div>
        </div>
    </article>
</section>

<section class="section__container">
    <article class="section__article_wrapper faq__main_wrapper">
        <h1 class="section__title"><?php echo $this->language['section_titles']['faq']; ?></h1>

        <div class="faq__wrapper">
            <?php
            $faqHtmlItemElement = <<<FaqHtmlElement
                <article class="faq-card">
                    <h6 class="faq-question"><span>%faq_question</span></h6>
                    <p class="faq-answer"><span>%faq_answer</span></p>
                </article>
            FaqHtmlElement;

            $faqItems = [];
            foreach ($this->language['faq'] as $key => $faqItem) {
                $currentFaq = $faqHtmlItemElement;
                $currentFaq = str_replace('%faq_question', $faqItem['question'], $currentFaq);
                $currentFaq = str_replace('%faq_answer', $faqItem['answer'], $currentFaq);
                array_push($faqItems, $currentFaq);
            }

            echo implode(' ', $faqItems);
            ?>
        </div>
    
        <button class="button_cta scroll_top_back">quero entrar na formação dwsw 2021</button>
    
    </article>
</section>

<section class="section__container">
    <article class="section__article_wrapper">
        <h1 class="section__title"><?php echo $this->language['section_titles']['disclaimer']; ?></h1>

        <div class="disclaimer__content_wrapper">
            <h2><?php echo $this->language['disclaimer']['title']; ?></h2>
            <p><?php echo $this->language['disclaimer']['description']; ?></p>
        </div>
    </article>
</section>