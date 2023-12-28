document.getElementById('filter_manufacturer_id').addEventListener('change', function (){

    let manufacturerid = this.value || this.options[this.selectedIndex].value;

    window.location.href = window.location.href.split("?")[0] + '?manufacturer_id=' + manufacturerid
})

document.querySelectorAll('.btn-delete').forEach((button) => {
    button.addEventListener('click', function(event) {
      event.preventDefault()
      if (confirm("Delete the selected car?")) {
        let action = this.getAttribute('href')
        let form = document.getElementById('form-delete')
        form.setAttribute('action', action)
        form.submit()
      }
    })
})