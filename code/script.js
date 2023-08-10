function openPopup() {
    const modal = document.getElementById('popup_contato')
    modal.classList.add('open_popup')
    modal.addEventListener('click', (e) => {
        if(e.target.id == 'btn_proximo' || e.target.id == 'popup_contato') {
            modal.classList.remove('open_popup')
        }
    })
}
