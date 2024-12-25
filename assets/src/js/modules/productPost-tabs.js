$(document).ready(function () {
    function initArrowPosition(){
        let activeTab = $(".tabsProduct  ul  li.active");
        let arrowPosition = ''
        if(activeTab.lenght > 0){
            arrowPosition = (activeTab[0].offsetTop + activeTab[0].offsetHeight) / 2  + 12.5;
        }

        $(".tabsProduct .tab-content:first").show();
        $(".tabsProduct .arrow").css("top", arrowPosition);

    }
    $(".tabsProduct ul li ").click(function(e) {
        e.preventDefault();

        let currentItem = $(this).closest("li");
        let tabList = $(".tabsProduct ul li");
        let arrow = $(".tabsProduct .arrow");
        let setActiveTab = $(currentItem).attr("rel");
        let leftValue = currentItem[0].offsetTop + 13.5;


        if ($(currentItem).hasClass("active")) {return;}
        $(".tabsProduct .tab-content").hide();

        arrow.css("top", leftValue);
        $("#itemTabs" + setActiveTab).fadeIn();

        tabList.removeClass("active");
        $(currentItem).addClass("active");

    });

    initArrowPosition();
});