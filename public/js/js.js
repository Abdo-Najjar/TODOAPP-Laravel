$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$("li").on("click" , function () {
  var item =  $(this).children().eq(0).text();

    $.ajax({
        type:'DELETE',
        url:'delete/'+item,
        success:function(data){
            window.location.href  = "/";
        }

    });

});

