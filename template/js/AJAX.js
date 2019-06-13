$(document).ready(function () {
    $(".buy-button").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/addAjax/"+ id, {}, function (data) {
            var getData = jQuery.parseJSON(data);
            $("#cart-count").html(getData.count);
        });return false;
    });

    $(".circle-plus").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/addAjax/"+ id, {}, function (data) {
            var getData = jQuery.parseJSON(data);
            $("#cart-count").html(getData.count);                                      //Общее количество продуктов
            $( "span[data-id^= "+id+"]" ).text(getData.id_cnt);                        //Количество одного продукта
            $( "p[data-id^= "+id+"]" ).text("$" + Math.ceil((getData.price)*100)/100); //Цена продукта
            $(".summary-price").text("$" + Math.ceil((getData.totalPrice)*100)/100);   //Общая цена
            if(getData.discount == "Free")                                             //Скидка
                $(".delivery-price").text(getData.discount);
            else
                $(".delivery-price").text("$" + getData.discount);
        });
        return false;
    });

    $(".circle-minus").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/minusAjax/"+ id, {}, function (data) {
            var getData = jQuery.parseJSON(data);
            $("#cart-count").html(getData.count);                                      //Общее количество продуктов
            $( "span[data-id^= "+id+"]" ).text(getData.id_cnt);                        //Количество одного продукта
            $( "p[data-id^= "+id+"]" ).text("$" + Math.ceil((getData.price)*100)/100); //Цена продукта
            $(".summary-price").text("$" + Math.ceil((getData.totalPrice)*100)/100);   //Общая цена
            if(getData.discount == "Free")                                             //Скидка
                $(".delivery-price").text(getData.discount);
            else
                $(".delivery-price").text("$" + getData.discount);
        });
        return false;
    });
});