$('document').ready(function(){


    console.log("Hello World");

    $('.list-item-subject').each(function(i, obj) {
        if($(this).find(".visible-item").text() == 1){
            $(this).find(".visible-item").text("complete")
        }else{
            $(this).find(".visible-item").text("not complete") 
        }

        var dateString = moment.unix($(this).find(".time-item").text()).format("MM/DD/YYYY");
        $(this).find(".time-item").text(dateString);
        
    });
});