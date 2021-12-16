const successMessage = function(title) {
    window.Swal.fire({
        title: 'Başarılı !',
        text: title,
        icon: 'success',
        confirmButtonText: 'Ok'
    })
}
const errorMessage = function(title) {
    window.Swal.fire({
        title: 'Hata !',
        text: title,
        icon: 'error',
        confirmButtonText: 'Ok'
    })
}