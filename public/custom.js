const successMessage = function(title) {
    window.Swal.fire({
        title: 'Success!',
        text: title,
        icon: 'success',
        confirmButtonText: 'Ok'
    })
}
const errorMessage = function(title) {
    window.Swal.fire({
        title: 'Error!',
        text: title,
        icon: 'error',
        confirmButtonText: 'Ok'
    })
}