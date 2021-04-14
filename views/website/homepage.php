<section class="section__container" id="section__headline">
    <article class="section__article_wrapper" id="article__headline">
        <h1><?php echo $this->language['headline']['title']; ?></h1>
        <h2><?php echo $this->language['headline']['subtitle']; ?></h2>
        <p><?php echo $this->language['headline']['callout']; ?></p>

        <a href="https://pay.hotmart.com/G51468673P" target="_blank" rel="norel nofollow">
            <button class="button_cta"><span><?php echo $this->language['headline']['button_cta']; ?></span></button>
        </a>
    </article>
</section>

<section class="section__container">
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
    </article>
</section>

<section class="section__container">
    <article class="section__article_wrapper">
        <h1 class="section__title"><?php echo $this->language['section_titles']['about']; ?></h1>
    </article>
</section>

<section class="section__container">
    <article class="section__article_wrapper">
        <h1 class="section__title"><?php echo $this->language['section_titles']['faq']; ?></h1>
    </article>
</section>

<section class="section__container">
    <article class="section__article_wrapper">
        <h1 class="section__title"><?php echo $this->language['section_titles']['disclaimer']; ?></h1>
    </article>
</section>