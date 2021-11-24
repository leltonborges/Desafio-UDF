function viewModal(){
    termos.classList.toggle("is-active");
}

showModal.addEventListener('click', viewModal);
btnFechaModal.addEventListener('click', viewModal);

checkboxAceitaTermos.addEventListener('click', (event) => {
    event.preventDefault();
    checkboxTermos.checked = true;
    viewModal();
})

btnMessage.addEventListener('click', (event) => {
    event.preventDefault();
    document.querySelector("div#message").innerHTML = "";
})

function messageSuccess(){
    return `
    <div class="notification is-success">
        <button id="btnMessage" class="delete"></button>
        Salvo com sucesso
    </div>`;
}
function messageError(){
    return `
    <div class="notification is-danger">
        <button class="delete"></button>
        <button id="btnMessage" class="delete"></button>
        Salvo com sucesso
    </div>`;
}