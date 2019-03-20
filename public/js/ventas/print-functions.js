
/**----------- PINTAR MESAS --------*/
function printMesas(data_mesas) {
    let html = ''
    for (let i in data_mesas) {
        mesa = data_mesas[i]

        html += `<div class="mesa desocupada col-sm-3" data-mesa="${mesa.mesa}">
        <div class="row justify-content-around">
        <label for="mesa-1">MESA ${mesa.mesa}</label>
        <p>N. Cuentas #${mesa.cuenta}</p>
        </div>
        <button class="btn-rose" type="button" name="mesa-1">Detalle</button>
        </div>`
    }
    mesas.innerHTML = html
}

/**------------ PINTAR TABLA CUENTAS ----------*/
function printTablaCuentas(cuentas) {
    let html = ''
    for (let i in cuentas) {
        cuenta = cuentas[i]

        html += `<tr>
        <td>${cuenta.cliente}</td>
        <td>${cuenta.total}</td>
        <td>
          <button class="btn alert" type="button" name=""><i class="far fa-eye"></i></button>
          <button class="btn danger" type="button" name=""><i class="fas fa-times"></i></button>
        </td></tr>`
    }
    tbody_cuentas.innerHTML = html
}