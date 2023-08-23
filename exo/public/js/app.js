$(document).ready(function() {
    $("#login").submit(function(e) {
        e.preventDefault() ;
        var datas = $(this).serialize() ;
        
        $.ajax({
            url: "http://localhost/exo/controls/controlLogin",
            type: "POST",
            data: datas ,
        })

        .done(function(data) {
            if(data.trim() == "ok") {
                Swal.fire({
                    icon: 'success',
                    title: 'Bravo, Connected !',
                    text: 'Congratulations',
                })
            }
        

            else if(data.trim() == "") {
                Swal.fire({
                    icon: 'error',
                    title: ' Not Connected !',
                    text: 'ERROR',
                })
            }
            
        })

        .fail(function(errorMessage) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="">Why do I have this issue?</a>'
            })
        })
    })
})

