var student = '#student'
var cour = '#class'
var project = '#project'

$(student).css('cursor', 'pointer')

$(student).click(function() {
    location.href = "?p=dashboard&model=profil&type=create"
})


$(cour).css('cursor', 'pointer')

$(cour).click(function() {
    location.href = "?p=dashboard&model=class&type=create"
})


$(project).css('cursor', 'pointer')

$(project).click(function() {
    location.href = "?p=dashboard&model=project&type=create"
})


$('#news').css('cursor', 'not-allowed')
