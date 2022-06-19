const params = new URLSearchParams(window.location.search);
const model = params.get("model")
const type = params.get("type")

const create = '#create'
const modif = '#modif'

const clas = "class"
const profil = "profil"
const project = "project"

const url_insert = url_web_async + "script.async.InsertModel.php"
const url_search = url_web_async + "script.async.SearchModel.php"

// type //

if(type == "create")
{
    $(create).css('cursor', 'not-allowed')
    $(modif).css('cursor', 'pointer')

    $(modif).click(function() {
        location.href = "?p=dashboard&model=" + model + "&type=modif"
    })
}
else if(type == "modif")
{
    $(modif).css('cursor', 'not-allowed')
    $(create).css('cursor', 'pointer')

    $(create).click(function() {
        location.href = "?p=dashboard&model=" + model + "&type=create"
    })
}


// model //


if(model == clas)
{

    if(type == 'create')
    {
        $('#createBtn').click(function() {
            var bool = 0;
            var array = ['name', 'nbr_class', 'time', 'duration', 'cursus_list']
            
            $.each(array, function(key, value) {
                //alert( value );
                bool += checkError(value)
            })

            if(bool == 5)
            {
                const URL_CONSCRUCT = new URL(url_insert)

                URL_CONSCRUCT.searchParams.append("model", "class")
                $.each(array, function(key, value) {
                    URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
                })

                //alert(URL_CONSCRUCT.href)
                if(confirm("create " + model))
                {
                    $.get(URL_CONSCRUCT.href, function(data, status) {
                        if(status == "success")
                        {
                            location.href = "?p=admin"
                        }
                    })
                }       
            }

        })
    }
    else if(type == 'modif')
    {
        $('#search').css('cursor', 'pointer')

        $('#search').click(function() {
            //alert('here')

            var bool = 0;
            var array = ['datalist_list', 'text']
        
            $.each(array, function(key, value) {
                //alert( value );
                bool += checkError(value)
            })
            
            if(bool == 2)
            {
                const URL_CONSCRUCT = new URL(url_search)

                URL_CONSCRUCT.searchParams.append("model", "class")
                $.each(array, function(key, value) {
                    URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
                })

                
                $.get(URL_CONSCRUCT.href, function(data, status) {
                    data = JSON.parse(data)
                    field = data[0]
                    array = data[1]

                    var text = ""

                    $.each(array, function(key, value) {
                        text += '<span class="one-f ft-1_5 mrg-top-2">' + value[field] + '</span>'
                    })

                    $("#list_data").html(text)
                })
                
            }

        })   
    }

}
else if(model == profil)
{
    if(type == 'create')
    {
        $('#createBtn').click(function() {
            var bool = 0;
            var array = ['name', 'birth', 'email', 'stat_list', 'cursus_list']
            
            $.each(array, function(key, value) {
                //alert( value );
                bool += checkError(value)
            })

            if(bool == 5)
            {
                const URL_CONSCRUCT = new URL(url_insert)

                URL_CONSCRUCT.searchParams.append("model", "profil")
                $.each(array, function(key, value) {
                    URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
                })

                //alert(URL_CONSCRUCT.href)
                if(confirm("create " + model))
                {
                    $.get(URL_CONSCRUCT.href, function(data, status) {
                        console.log(data)
                        if(status == "success")
                        {
                            location.href = "?p=admin"
                        }
                    })
                }
            }

        })
    }
    else if(type == 'modif')
    {
        $('#search').css('cursor', 'pointer')

        $('#search').click(function() {
            //alert('here')

            var bool = 0;
            var array = ['datalist_list', 'text']
        
            $.each(array, function(key, value) {
                //alert( value );
                bool += checkError(value)
            })
            
            if(bool == 2)
            {
                const URL_CONSCRUCT = new URL(url_search)

                URL_CONSCRUCT.searchParams.append("model", "profil")
                $.each(array, function(key, value) {
                    URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
                })

                
                $.get(URL_CONSCRUCT.href, function(data, status) {

                    console.log(data)

                    data = JSON.parse(data)
                    field = data[0]
                    array = data[1]

                    var text = ""

                    $.each(array, function(key, value) {
                        text += '<span class="one-f ft-1_5 mrg-top-2">' + value[field] + '</span>'
                    })

                    $("#list_data").html(text)
                })
                
            }

        })   
    }

}
else if(model == project)
{

    if(type == 'create')
    {
        $('#createBtn').click(function() {
            var bool = 0;
            var array = ['name', 'deadline', 'cursus_list']
            
            $.each(array, function(key, value) {
                //alert( value );
                bool += checkError(value)
            })

            if(bool == 3)
            {
                const URL_CONSCRUCT = new URL(url_insert)

                URL_CONSCRUCT.searchParams.append("model", "project")
                $.each(array, function(key, value) {
                    URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
                })

                $.get(URL_CONSCRUCT.href, function(data, status) {
                    //alert(data)
                    if(status == "success")
                    {
                        location.href = "?p=admin"
                    }
                })
            }

        })
    }
    else if(type == 'modif')
    {
        $('#search').css('cursor', 'pointer')

        $('#search').click(function() {
            //alert('here')

            var bool = 0;
            var array = ['datalist_list', 'text']
        
            $.each(array, function(key, value) {
                //alert( value );
                bool += checkError(value)
            })
            
            if(bool == 2)
            {
                const URL_CONSCRUCT = new URL(url_search)

                URL_CONSCRUCT.searchParams.append("model", "project")
                $.each(array, function(key, value) {
                    URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
                })

                
                $.get(URL_CONSCRUCT.href, function(data, status) {
                    data = JSON.parse(data)
                    field = data[0]
                    array = data[1]

                    var text = ""

                    $.each(array, function(key, value) {
                        text += '<span class="one-f ft-1_5 mrg-top-2">' + value[field] + '</span>'
                    })

                    $("#list_data").html(text)
                })
                
            }

        })   


    }

}

function checkError(field) 
{ 
    var data = $("#" + field).val()

    if(data == "")
    {
        //alert("Name undefined")
        $("#" + field).attr("placeholder", field + " missing")
        $("#" + field).css("background-color", "red")

        return false
    }
    else
    {
        $("#" + field).css("background-color", "")
        
        return true
    }
}
