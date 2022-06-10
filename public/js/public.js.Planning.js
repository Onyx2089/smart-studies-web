
function getClass(cursus)
{
    const date = new Date()
    time = date.toISOString().slice(0, 10)
    //alert(cursus + ' ' + time);
    
    $.get(url_web_async + "script.async.PlanningClass.php?cursus=" + cursus + "&time=" + time, function(data) {
        data = JSON.parse(data)
        console.log(data)

        $.each(data, function(index, value) {
            console.log(value);

            var date = new Date(value.TIME);
            start = date.getHours() + "h" + date.getMinutes()
            date.setMinutes(date.getMinutes() + value.DURATION)
            console.log(value.DURATION)
            console.log(date.getHours() + "h" + date.getMinutes());

            var elem = '<div onclick="echoClass(' + value + ')" class="content-std f jc-space-between ai-center"><span class="mrg-left-10 ft-1_5 one-f">' + value.NAME +'</span> <span class="ft-1_5 one-f">' + value.NBR_CLASS + '</span> <span class="mrg-right-10 ft-1_5 one-f">' + start +'</span></div>'
            $("#class").append(elem);
        });

    
    });
    
}

function getProject(cursus)
{
    const date = new Date()
    time = date.toISOString().slice(0, 10)

    $.get(url_web_async + "script.async.PlanningProject.php?cursus=" + cursus + "&time=" + time, function(data) {
        data = JSON.parse(data)
        //console.log(data)
    
        $.each(data, function(index, value) {

            var date = new Date(value.DEADLINE)
            date = date.toLocaleDateString()

            var elem = '<div class="content-std f jc-space-arround ai-center"><span class="mrg-left-10 ft-1_5 one-f">' + value.NAME + '</span><span class="mrg-right-10 ft-1_5 one-f">' + date + '</span></div>'
            $('#project').append(elem);
        });
    });
}

function echoClass(value)
{
    var result = confirm("value")
}