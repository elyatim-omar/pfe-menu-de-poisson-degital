function myAjax() {
    $.ajax({
         type: "POST",
         url: 'api/image.php',
         data:{action:'call_this'},
         success:function(html) {
           alert(html);
         }

    });
}