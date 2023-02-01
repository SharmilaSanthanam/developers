$(document).ready(function (){
    $(document).on("click", "#btn-register", function (e){
        e.preventDefault();
        var name=$("#name").val();
        var mobile=$("#mobile").val();
        var country=$("#country").val();
        const userdata = localStorage.getItem('#userdata');
    
        if( name == "" || mobile == "" || country == "")
        {
    $('#msg').html("Please fill all the details")
        }
        else{
            $.ajax({
              
                url: 'https://attic-substitutes.000webhostapp.com/php/profile.php',
                 method: 'post',
                data:
                                {
                                    name:name,
                                    mobile:mobile,
                                    country:country,
                                    userdata:userdata
                
                                },
                success: function (data) {
                    $('#msg').html(data);
                   
                },
    
            })
        }
    })
    })

    $(document).ready(function (){
        $(document).on("click", "#logout", function (e){
            e.preventDefault();
localStorage.getItem("userdata");
localStorage.removeItem("userdata");
location.href='../index.html';
        })
    })
