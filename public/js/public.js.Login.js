$("#connect").click(function() {
    var email = $("#email").val();
    var password = $("#password").val();

    if(email != "" && password != "")
    {
        $.get(url_web_async + "action.ActionLogin.php?email=" + email + "&password=" + password, function(data, status) {

            console.log(data)
            
            if(data == "ADMIN")
            {
                window.location = url_web + "?p=admin"
            }
            else if(data == "STUDENT")
            {
                window.location = url_web + "?p=planning"
            }
            else
            {
                alert(status)
                //alert("profil not found")
            }
        })
    }
});





