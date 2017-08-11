$(function() {

var oldVal, newVal;

$('.edit').keypress (function(e){

if(e.which == 13) {
return false;
}
});

$ ('.edit') .focus(function() {

    oldVal = $ (this) .text();

}).blur(function() { 

newVal = $(this).text();
title = $(this).text();

if(newVal != oldVal) {

     console.log("Отправляем изменения");
     $.ajax({
    url: 'config.php',
    type: 'POST',
    data:{title: newVal},
   // setRequestHeader:( 'title'),
    success: function(res){
    console.log(res)
},
error: function() {
alert('error');
}




     })

}else{

     console.log("Ничего не изменилось");
}

//console.log(oldVal + 'название' + newVal);
});



});
///////  получили значение поля "введите название";

