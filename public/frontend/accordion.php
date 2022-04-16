<div class="accordionWrapper">
                  <div class="accordionItem open">
                    <h3 class="accordionItemHeading">Рост агентства</h3>
                    <div class="accordionItemContent">
                      <h4>За последние несколько лет наше рекламное агентство прошло путь от подвального помещения в Самарканде до международной компании. Наш рост был сложным, в то же время удивительным путешествием, результатами которого мы хотели бы щедро поделиться с вами.</h4>
                    </div>
                  </div>

                  <div class="accordionItem closeuz">
                    <h3 class="accordionItemHeading">Профессиональный рост</h3>
                    <div class="accordionItemContent">
                      <h4>Мы считаем, чтобы видеть счастье от нашей работы в ваших глазах, нужно иметь сотрудников, которые счастливы работать с вами, для вас. Поэтому мы стимулируем наших сотрудников на активную деятельность, чтобы мы все вместе росли профессионально, развивали свои навыки и достигали поставленных целей в мире интернет- бизнеса.</h4>
                    </div>
                  </div>

                  <div class="accordionItem closeuz">
                    <h3 class="accordionItemHeading">Рост агентства</h3>
                    <div class="accordionItemContent">
                      <h4>За последние несколько лет наше рекламное агентство прошло путь от подвального помещения в Самарканде до международной компании. Наш рост был сложным, в то же время удивительным путешествием, результатами которого мы хотели бы щедро поделиться с вами.</h4>
                    </div>
                  </div>

                  <div class="accordionItem closeuz">
                    <h3 class="accordionItemHeading">Гарантия</h3>
                    <div class="accordionItemContent">
                      <h4>Мы не возьмемся за продвижение вашего бизнеса, если не будем на все сто процентов уверены, что сможем добиться успеха и достичь желаемых результатов. Если мы начинаем с вами работать, то знайте, продвижение вашего бизнеса в интернет-пространстве в надежных руках. Если в течение 99 дней после использования наших услуг по SEO или размещению контекстной рекламы вы останетесь недовольны эффективностью, что логический быть просто не может, то мы вернем вам деньги, которые вы затратили на оплату наших услуг. 
                       Деятельность нашей компании основана на удовлетворенности клиентов и долгосрочных отношениях. Гарантия возврата денег — это лишь малая часть мер, которые мы предпринимаем для того, чтобы наши клиенты получали отличный сервис.</h4>
                    </div>
                  </div>
            </div>

<script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionItemHeading');
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }
    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
            accItem[i].className = 'accordionItem closeuz';
        }
        if (itemClass == 'accordionItem closeuz') {
            this.parentNode.className = 'accordionItem open';
        }
    }
</script>