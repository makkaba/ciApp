
  $("#first").click(function(){
    $.ajax({url: "/getSourcecode", success: function(result){
        alert("it works");
    }});
});