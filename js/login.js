$(document).ready(function(){  
    $('#login_button').click(function(){
var email = $("#email").val();  
         var password = $("#password").val(); 

         var data = "email=" + email + "&password=" + password;

         $.ajax({ 
            method:"post", 
            url: "http://localhost/developers/php/login.php",  
            data: data,
            // success: function(data){
            //                    $("#msg").html(data);
            //                    }
                            
        
            success: function(data){
                $("#msg").html(data);
                if(data==""){
                    // $("#msg").html(data);
                    alert("Invalid Credentials");
                }
                else{
                    localStorage.setItem("userdata", JSON.stringify(data));
                    console.log(JSON.stringify(data));
                    location.href='http://localhost/developers/profile.html';
                }
                              
            }
        })      

    })
})
