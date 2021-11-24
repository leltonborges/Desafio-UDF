function viewModal() {
    termos.classList.toggle("is-active");
}

showModal.addEventListener('click', viewModal);

btnFechaModal.addEventListener('click', viewModal);

checkboxAceitaTermos.addEventListener('click', (event) => {
    event.preventDefault();
    checkboxTermos.checked = true;
    viewModal();
})
