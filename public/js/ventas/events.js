
addEventListener('DOMContentLoaded', () => {

    /**------------ TABLA DE CUENTAS -------------*/
    tabla_cuentas.addEventListener('click', e => {
        let btnClass = e.target.className

        if (btnClass === 'btn primary') {
            m_agregar_cuenta.style.display = 'block'
            console.log(m_agregar_cuenta.style)
        }
    })


    /**--------------- MODAL CUENTAS ---------------*/
    window.addEventListener('click', e => {
        const bg = m_agregar_cuenta.querySelector('.m-bg'),
        btn_close = m_agregar_cuenta.querySelector('.btn-close')

        if (e.target === bg || e.target === btn_close) {
            m_agregar_cuenta.style.display = 'none'
        }
    })

    /**---------------- ESCUCHAR MESAS --------------*/
    mesas.addEventListener('click', e => {
        if (e.target.className === 'btn-rose') {
            let mesa_id = e.target.parentElement.dataset.mesa;
            let dataCuentas = new FormData;
            dataCuentas.append('action', 'obtener_cuentas')
            dataCuentas.append('mesa_id', mesa_id)

            /** OBTIENE LAS CUENTAS */
            ajaxRequest('ventas', dataCuentas)
            .then(dataJson => {
                if (dataJson.error) {
                    popup.alert({content: dataJson.msg})
                } else {
                    printTablaCuentas(dataJson.cuentas)
                }
            })
        }
    })
})