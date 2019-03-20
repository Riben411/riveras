
addEventListener('DOMContentLoaded', () => {
    let dataMesas = new FormData;
    dataMesas.append('action', 'obtener_mesas_cuentas')
    
    /**------- OBTIENE LAS MESAS -----------*/
    ajaxRequest('ventas', dataMesas)
    .then(dataJson => {
        let data_mesas = dataJson.mesas

        if (dataJson.error) {
            popup.alert({content: dataJson.msg})
        }

        if (data_mesas.length > 0) {
            printMesas(data_mesas)
        }
    })
})