//alert('perfect');
/*
function Login()
{
    var xhttp = new XMLHttpRequest();

    var email = document.querySelector('#email').value;
    var password = document.querySelector('#password').value;

    xhttp.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            //alert(this.responseText);
            var json = this.responseText;
            json = JSON.parse(json)[0]

            console.log(json);
            //alert(json.password);
        }
        //alert(this.response);
    };

    xhttp.open("GET", "http://localhost:82/git/api_final/?model=profil&field=EMAIL&value=" + email, true);
    xhttp.send();
}*/

//Login();