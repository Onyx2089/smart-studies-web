const params = new URLSearchParams(window.location.search);
const model = params.get("model")
const type = params.get("type")

const create_ = 'create'
const modif_ = 'modif'

const class_ = "class"
const profil_ = "profil"
const project_ = "project"

const search_ = "search"

const url_insert_ = url_web_async + "action.ActionInsertModel.php"
const url_search_ = url_web_async + "action.ActionSearchModel.php"
const url_update_ = url_web_async + "action.ActionUpdate.php"
const url_delete_ = url_web_async + "action.ActionDeleteModel.php"

//      //

const cursor_ = 'cursor' 
const not_allowed_ = 'not-allowed'
const pointer_ = 'pointer'

// type //

if(type == create_)
{
    $('#' + create_).css(cursor_, not_allowed_)
    $('#' + modif_).css(cursor_, pointer_)

    $('#' + modif_).click(function() {
        location.href = "?p=dashboard&model=" + model + "&type=modif"
    })
}
else if(type == modif_)
{
    $('#' + modif_).css(cursor_, not_allowed_)
    $('#' + create_).css(cursor_, pointer_)

    $('#modifBtn').css(cursor_, not_allowed_)
    $('#deleteBtn').css(cursor_, not_allowed_)

    $('#' + create_).click(function() {
        location.href = "?p=dashboard&model=" + model + "&type=create"
    })
}

// model //


if(model == class_)
{
    var array = ['name', 'nbr_class', 'time', 'duration', 'cursus_list']

    if(type == create_)
    {
        createBtn()
    }
    else if(type == modif_)
    {
        $('#' + search_).css(cursor_, pointer_)

        modifType()

    }

}
else if(model == profil_)
{
    var array = ['name', 'birth', 'email', 'stat_list', 'cursus_list']

    if(type == create_)
    {
        createBtn()
    }
    else if(type == modif_)
    {
        $('#' + search_).css(cursor_, pointer_)

        modifType()


    }

}
else if(model == project_)
{
    var array = ['name', 'deadline', 'cursus_list']
    
    if(type == create_)
    {
        createBtn()
    }
    else if(type == modif_)
    {
        $('#' + search_).css(cursor_, pointer_)

        modifType()

        //var arrayModif = ['name', 'deadline', 'cursus_list']
        
    }
    
}
//let data = "data"




/**
 * 
 * 
 * 
 * 
 */


function modifType()
{
    search()
        
    modifBtn()

    deleteBtn()
}

function createBtn()
{
    $('#createBtn').click(function() {
        var bool = 0;
        
        $.each(array, function(key, value) {
            //alert( value );
            bool += checkError(value)
        })

        
        //alert(array.length == bool)
        //array.length = nbr

        if(array.length == bool)
        {
            const URL_CONSCRUCT = new URL(url_insert_)

            URL_CONSCRUCT.searchParams.append("model", model)
            $.each(array, function(key, value) {
                URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
            })

            //alert(URL_CONSCRUCT.href)
            if(confirm("create " + model))
            {
                $.get(URL_CONSCRUCT.href, function(data, status) {
                    //alert(data)
                    //alert(status)
                    //alert("perfect " + model)
                    /*
                    if(status == "success")
                    {
                        location.href = "?p=admin"
                    }
                    */
                    emptyInput()
                })
            }
        }

    })
}

function search()
{
    $('#text').keyup(function() {
        //alert('here')

        searchEvent()

    })
}

function searchEvent()
{
    var bool = 0;
    var array = ['datalist_list', 'text']

    /*
    $.each(array, function(key, value) {
        //alert( value );
        bool += checkError(value)
    })
    */
    

    const URL_CONSCRUCT = new URL(url_search_)

    URL_CONSCRUCT.searchParams.append("model", model)
    $.each(array, function(key, value) {
        URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
    })

    if($('#' + array[1]).val() != "")
    {
        $.get(URL_CONSCRUCT.href, function(data, status) {
            data = JSON.parse(data)
            field = data[0]
            entity = data[1]
            
            //alert( entity)
            var text = ""

            //alert(entity)
            //alert(Array.isArray(entity[0]))

            if(entity != "nothing herer")
            {
                $.each(entity, function(key, value) {
                    text += '<span onclick="fillModif(\'' + model + '\', ' + value['ID'] + ')" class="one-f ft-1_5 mrg-top-2">' + value['NAME'] + '</span>'
                }) 
            }
            else
            {
                text = '<span class="one-f ft-1_5 mrg-top-2">No result</span>'
            }


            $("#list_data").html(text)

        })
    }   
    else
    {
        $("#list_data").html('')
    }
}

function modifBtn()
{
    $('#modifBtn').click(function() {
            
        var bool = 0;
        
        $.each(array, function(key, value) {
            //alert( value );
            bool += checkError(value)
        })

        
        if(array.length == bool)
        {
            //alert('perfect')
            
            const URL_CONSCRUCT = new URL(url_update_)
            
            URL_CONSCRUCT.searchParams.append("model", model)
            URL_CONSCRUCT.searchParams.append("ID",  $('#idHidden').val())
            $.each(array, function(key, value) {
                URL_CONSCRUCT.searchParams.append(value, $('#' + value).val())
            })

            //alert(URL_CONSCRUCT.href)
            
            $.get(URL_CONSCRUCT.href, function(data, status) {
                alert(data)
                searchEvent()
            })
            
        }
    })
}

function deleteBtn()
{
    $('#deleteBtn').click(function() {
        //alert('here')
        const URL_CONSCRUCT = new URL(url_delete_)
            
        URL_CONSCRUCT.searchParams.append("model", model)
        URL_CONSCRUCT.searchParams.append("ID",  $('#idHidden').val())

        if(confirm("delete ?"))
        {
            $.get(URL_CONSCRUCT.href, function(data, status) {
                alert(status)
                //alert('boo')
                searchEvent()
                emptyInput()
            })
        }
    })
}

function fillModif(model, obj)
{
    
    const URL_CONSCRUCT = new URL(url_search_)
    
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

    $('#modifBtn').css(cursor_, pointer_)
    $('#deleteBtn').css(cursor_, pointer_)
}

function checkError(field) 
{ 
    var data = $("#" + field).val()

    if(data == "")
    {
        //alert("Name undefined")
        $("#" + field).attr("place-holder", "...")
        $("#" + field).css("background-color", "red")

        return false
    }
    else
    {
        $("#" + field).css("background-color", "")
        
        return true
    }
}

function emptyInput()
{
    $.each(array, function(key, value) {
        $("#" + value).val("")
    })
}
