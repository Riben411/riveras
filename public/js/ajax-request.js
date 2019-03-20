
/** FUNCIÓN AJAX */
async function ajaxRequest(module_name, formData) {
    formData.append('service', module_name)

    return fetch('app/Core.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .catch(error => alert('No se pudo acceder al servidor ' + error))
}