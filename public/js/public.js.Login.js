$("#connect").click(function() {
    var email = $("#email").val();
    var password = $("#password").val();

    if(email != "" && password != "")
    {
        $.get(url_web_async + "script.async.Login.php?email=" + email + "&password=" + password, function(data, status) {

            if(data == "ADMIN")
            {
                window.location = url_web + "?p=admin"
            }
            else if(data == "STUDENT")
            {
                window.location = url_web + "?p=planning"
            }
        })
    }
});


/*$("#connect").click(function() {

    var email = $("#email").val();
    var password = $("#password").val();

    //alert(email + " " + password);

    if(email != "" && password != "")
    {
        $.get(url_api + "?model=profil&field=EMAIL&value=" + email, function(data, status) {
    

            //alert('here');
            var profil = JSON.parse(data)[0];
            console.log( profil );
            //console.log( profil.password );

            alert(password + ' ' + profil.PASSWORD)
            if(profil.PASSWORD == password)
            {
                if(profil.STAT == 2000)
                {
                    window.location = url_web + "?p=planning"
                }
                else
                {
                    window.location = url_web + "?p=admin"
                }
            }  

        });
    }

});*/


