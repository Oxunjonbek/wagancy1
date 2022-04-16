<div class="accordionWrapper">
                  <div class="accordionItem open">
                    <h3 class="accordionItemHeading">{{Lang::get('home.rostagent')}}</h3>
                    <div class="accordionItemContent">
                      <h4>{{Lang::get('home.zaposledniyne')}}</h4>
                    </div>
                  </div>

                  <div class="accordionItem closeuz">
                    <h3 class="accordionItemHeading">{{Lang::get('home.profesionale')}}</h3>
                    <div class="accordionItemContent">
                      <h4>{{Lang::get('home.mischitem')}}</h4>
                    </div>
                  </div>

                  <div class="accordionItem closeuz">
                    <h3 class="accordionItemHeading">{{Lang::get('home.rosagen')}}</h3>
                    <div class="accordionItemContent">
                      <h4>{{Lang::get('home.zaposlednielet')}}</h4>
                    </div>
                  </div>

                  <div class="accordionItem closeuz">
                    <h3 class="accordionItemHeading">{{Lang::get('home.garet')}}</h3>
                    <div class="accordionItemContent">
                      <h4>{{Lang::get('home.minevozmemsuya')}}</h4>
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