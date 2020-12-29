$(document).ready(function(){
    var pickup,drop,cabType;
    $("#submit").click(function(e){
      pickup=$('.pick').val();
      drop=$('.drop').val();
      cabType=$('.type').val();
      e.preventDefault();
        $.ajax({
          url: 'fareCal.php',
          type: 'POST',
          data: $('#checkFare').serialize(),
          success:function(data){
            if(pickup == drop){
                $(".success").html("Pickup and Drop Location Can't Be Same !");
                $("#OK").removeClass('hide'); 
                $(".btnC").addClass('hide');
                $("#exampleModalLabel").html("Alert");      
              }
              else if(pickup =="Pickup Location"){
                $(".success").html("Please Choose a Pickup Point !");
                $("#OK").removeClass('hide'); 
                $(".btnC").addClass('hide');
                $("#exampleModalLabel").html("Alert"); 
            }
            else if(drop=="Drop Location"){
                $(".success").html("Please Choose a Drop Point !");
                $("#OK").removeClass('hide'); 
                $(".btnC").addClass('hide');
                $("#exampleModalLabel").html("Alert"); 
            }
            else if(cabType=="Select CAB type"){
                $(".success").html("Please Select a Cab Type !");
                $("#OK").removeClass('hide'); 
                $(".btnC").addClass('hide');
                $("#exampleModalLabel").html("Alert"); 
            }
            else{
                $(".btnC").removeClass('hide');
                $("#OK").addClass('hide');
                $("#exampleModalLabel").html("Ride Details : "); 
                $(".success").html(data);
            }
        }
      });
    });   
  });

  function dis(){
    var value1 = $(".type").val();
    if(value1 == "Ced_Micro"){
        $(".luggage").val('');
        $(".luggage").attr("placeholder","Luggage Facility not Available !");
        $(".luggage").prop("readonly",true);
    }
    else{
        $(".luggage").attr("placeholder","Enter Luggage in KG.");
        $(".luggage").prop("readonly",false);
    }
    // var val=$("#color").find(":selected").val();
    // $("#size option[value!="+val+"]").remove();
}
