$("input[type=radio]").click(function(){
    console.log((this.id.split('-'))[1]);
    console.log(this.value);
});

/* Munu */
$("#icon").click(function() {
    $("#nav").toggleClass("menu-open");
    $(".menu").slideDown("slow");
});


/* $(document).ready(function () {

    $(".statususer").click(function () {
        var actionConfirm = confirm("Soll Status vom User geändert werden?");
        
        if(actionConfirm){
            
  
            alert('Status erfolgreich geändert');
                

        }else{
            alert("Action abgebrochen");
        }

    });

    $(".deluser").click(function () {
        var actionConfirm = confirm("Benutzer wirklich löschen?");
    
        if(actionConfirm){
            
 

        }else{
            alert("Action abgebrochen");
        }

    });
}); */



/* $(document).ready(function () {

    $(".delpost").click(function () {
        var actionConfirm = confirm("Post von " + this.name + " löschen?");
       
        
        if(actionConfirm){
            alert("Action success");

        }else{
            alert("Action abgebrochen");
        }

    });
}); */

