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
const url_update = url_web_async + "script.async.Update.php"
const url_delete = url_web_async + "script.async.DeleteModel.php"

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

    $('#modifBtn').css('cursor', 'not-allowed')
    $('#deleteBtn').css('cursor', 'not-allowed')

    $(create).click(function() {
        location.href = "?p=dashboard&model=" + model + "&type=create"
    })
}


// model //


if(model == clas)
{
    var array = ['name', 'nbr_class', 'time', 'duration', 'cursus_list']

    if(type == 'create')
    {
        $('#createBtn').click(function() {
            var bool = 0;
            
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
                        text += '<span onclick="fillModif(\'class\', ' + value['ID'] + ')" class="one-f ft-1_5 mrg-top-2">' + value[field] + '</span>'
                    })

                    $("#list_data").html(text)
                })
                
            }

        }) 
        
        $('#modifBtn').click(function() {
            
            //alert('here')
            var bool = 0;
            
            $.each(array, function(key, value) {
                //alert( value );
                bool += checkError(value)
            })

            
            if(bool == 5)
            {
                //alert('perfect')
                
                const URL_CONSCRUCT = new URL(url_update)
                
                URL_CONSCRUCT.searchParams.append("model", "class")
                URL_CONSCRUCT.searchParams.append("ID",  $('#idHidden').val())
                $.each(array, function(key, value) {
                    URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
                })

                //alert(URL_CONSCRUCT.href)
                
                $.get(URL_CONSCRUCT.href, function(data, status) {
                    alert(data)
                })
                
            }
        })

        $('#deleteBtn').click(function() {
            //alert('here')
            const URL_CONSCRUCT = new URL(url_delete)
                
            URL_CONSCRUCT.searchParams.append("model", "class")
            URL_CONSCRUCT.searchParams.append("ID",  $('#idHidden').val())

            if(confirm("delete ?"))
            {
                $.get(URL_CONSCRUCT.href, function(data, status) {
                    alert(data)
                    //alert('boo')
                })
            }
        })

    }

}
else if(model == profil)
{
    var array = ['name', 'birth', 'email', 'stat_list', 'cursus_list']

    if(type == 'create')
    {
        $('#createBtn').click(function() {
            var bool = 0;
            
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
                        /*
                        if(status == "success")
                        {
                            location.href = "?p=admin"
                        }
                        */
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
                        text += '<span onclick="fillModif(\'profil\', ' + value['ID'] + ')" class="one-f ft-1_5 mrg-top-2">' + value[field] + '</span>'
                    })

                    $("#list_data").html(text)
                })
                
            }

        })   

        $('#modifBtn').click(function() {
            
            var bool = 0;
            
            $.each(array, function(key, value) {
                //alert( value );
                bool += checkError(value)
            })

            
            if(bool == 5)
            {
                //alert('perfect')
                
                const URL_CONSCRUCT = new URL(url_update)
                
                URL_CONSCRUCT.searchParams.append("model", "profil")
                URL_CONSCRUCT.searchParams.append("ID",  $('#idHidden').val())
                $.each(array, function(key, value) {
                    URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
                })

                //alert(URL_CONSCRUCT.href)
                
                $.get(URL_CONSCRUCT.href, function(data, status) {
                    alert(data)
                    //alert('boo')
                })
                
            }
        
        })

        $('#deleteBtn').click(function() {
            //alert('here')
            const URL_CONSCRUCT = new URL(url_delete)
                
            URL_CONSCRUCT.searchParams.append("model", "profil")
            URL_CONSCRUCT.searchParams.append("ID",  $('#idHidden').val())

            if(confirm("delete ?"))
            {
                $.get(URL_CONSCRUCT.href, function(data, status) {
                    alert(data)
                    //alert('boo')
                })
            }
        })


    }

}
else if(model == project)
{
    var array = ['name', 'deadline', 'cursus_list']
    
    if(type == 'create')
    {
        $('#createBtn').click(function() {
            var bool = 0;
            
            
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
                    entity = data[1]

                    var text = ""

                    $.each(entity, function(key, value) {
                        text += '<span onclick="fillModif(\'project\', ' + value['ID'] + ')" class="one-f ft-1_5 mrg-top-2">' + value[field] + '</span>'
                    })

                    $("#list_data").html(text)

                })
                
            }

        })   
        
        $('#modifBtn').click(function() {
            
            var bool = 0;
            
            $.each(array, function(key, value) {
                //alert( value );
                bool += checkError(value)
            })

            
            if(bool == 3)
            {
                //alert('perfect')
                
                const URL_CONSCRUCT = new URL(url_update)
                
                URL_CONSCRUCT.searchParams.append("model", "project")
                URL_CONSCRUCT.searchParams.append("ID",  $('#idHidden').val())
                $.each(array, function(key, value) {
                    URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
                })

                //alert(URL_CONSCRUCT.href)
                
                $.get(URL_CONSCRUCT.href, function(data, status) {
                    alert(data)
                })
                
            }
        })

        $('#deleteBtn').click(function() {
            //alert('here')
            const URL_CONSCRUCT = new URL(url_delete)
                
            URL_CONSCRUCT.searchParams.append("model", "project")
            URL_CONSCRUCT.searchParams.append("ID",  $('#idHidden').val())

            if(confirm("delete ?"))
            {
                $.get(URL_CONSCRUCT.href, function(data, status) {
                    alert(data)
                    //alert('boo')
                })
            }
        })

        //var arrayModif = ['name', 'deadline', 'cursus_list']
        
    }
    
}
//let data = "data"

function fillModif(model, obj)
{
    
    const URL_CONSCRUCT = new URL(url_search)
    
    URL_CONSCRUCT.searchParams.append("model", model)
    URL_CONSCRUCT.searchParams.append("id", obj)
    
    $.get(URL_CONSCRUCT.href, function(data, status) {
        //alert(data)
        data = JSON.parse(data)
        
        //console.log(data)
        
        field = data[0]
        value = data[1][0]
        
        //alert(field)
        //console.log(field)
        //console.log(value)

        
        $.each(array, function(key, data) {
            //alert(value[field[key]])
        
            //alert(data)
            $('#' + data).val(value[field[key]])
        })
        
        //console.log(value)
        $('#idHidden').val(value['ID'])
        
        //$("#name").val('test')

        
        //alert(field[0])
    })

    //alert(arrayProject)

    $('#modifBtn').css('cursor', 'pointer')
    $('#deleteBtn').css('cursor', 'pointer')
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
