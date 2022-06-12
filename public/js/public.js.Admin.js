var student = '#student';

$(student).css('cursor', 'pointer')

$(student).click(function() {
    location.href = "?p=dashboard&model=profil&type=create"
})

$('#class').css('cursor', 'pointer')

$('#project').css('cursor', 'pointer')

$('#news').css('cursor', 'not-allowed')
