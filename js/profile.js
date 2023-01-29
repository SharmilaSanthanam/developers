$(document).ready(function (){
    $(document).on("click", "#btn-register", function (e){
        e.preventDefault();
        var name=$("#name").val();
        var mobile=$("#mobile").val();
        var country=$("#country").val();
    
        // localStorage.getItem("userdata", JSON.stringify(data));
        // console.log(JSON.stringify(data));

        if(name == "" || mobile == "" || country == "")
        {
    $('#msg').html("Please fill all the details")
        }
        else{
            $.ajax({
                method: 'post',
                url: 'http://localhost/developers/php/profile.php',
               
                data:
                                {
                                    name:name,
                                    mobile:mobile,
                                    country:country
                
                                },
                success: function (data) {
                    $('#msg').html(data);
                    localStorage.getItem("userdata", JSON.stringify(data));
                    console.log(JSON.stringify(data));
                    location.href='http://localhost/developers/index.html';
                },
    
            })
        }
    })
    })
       

   