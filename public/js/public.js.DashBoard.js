const params = new URLSearchParams(window.location.search);
const model = params.get("model")
const type = params.get("type")

const create = '#create'
const modif = '#modif'

//alert(type)

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