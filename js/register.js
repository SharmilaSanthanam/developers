$(document).ready(function (){
    $(document).on("click", "#btn-register", function (){
        var name=$("#name").val();
        var email=$("#email").val();
        var password=$("#password").val();
    
    
        if(name == "" || email == "" || password == "")
        {
    $('#msg').html("Please fill the required details")
        }
        else{
            $.ajax({
                url: 'http://localhost/developers/php/register.php',
                method: 'post',
                data:
                                {
                                    name:name,
                                    email:email,
                                    password:password
                
                                },
                success: function (data) {
                    if(data=="user_added"){
                        // swal("SUCCESS", "User Added Successfully","success").then(function(p){
                        //     location.href="login.html";
                        // })
                        location.href='http://localhost/developers/login.html';
                    }
                }
    
            })
        }
    })
    })
       