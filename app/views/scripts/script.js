$(document).ready(function (){
    $("#send").click(function(){
        let form = $("#form").serialize();
        console.log(form)
    });
});