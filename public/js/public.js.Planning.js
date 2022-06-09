
function getClass(cursus)
{
    const date = new Date();

    time = date.toISOString().slice(0, 10)
    //alert(cursus + ' ' + time);
    
    $.get(url_web_async + "script.async.Planning.php?cursus=" + cursus + "&time=" + time, function(data) {
        console.log(typeof( data ))
    
        /*$.each(data, function(index, value) {
            var elem = '<div class="content-std f jc-space-between ai-center"><span class="mrg-left-10 ft-1_5 one-f">Ios</span> <span class="ft-1_5 one-f">Atelier 201</span> <span class="mrg-right-10 ft-1_5 one-f">18h</span></div>'
            
            $("#container").append(elem);
        });*/

    
    });
    
}
