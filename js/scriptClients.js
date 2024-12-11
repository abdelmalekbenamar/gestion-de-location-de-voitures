const cancelClientAddForm = document.querySelector(".cancelAddClientForm");
const AddClientForm = document.querySelector(".AddClientForm");
const addClientButton = document.getElementById("addClientButton");
const modifyClient = document.querySelectorAll(".modifyClient");
const modifyClientForm = document.querySelector(".modifyClientForm");
const cancelModifyClientForm = document.querySelector(".cancelModifyClientForm");
const deleteClient = document.querySelectorAll(".deleteClient");
const deleteClientForm = document.querySelector(".deleteClientForm");
const cancelDeleteClientForm = document.querySelector(".cancelDeleteClientForm");


cancelClientAddForm.addEventListener("click", (e) => {
    e.preventDefault();
    AddClientForm.style.display = "none";
});

addClientButton.addEventListener("click", () => {
    AddClientForm.style.display = "block";
});

modifyClient.forEach(el => {
    el.addEventListener("click", () => {
        let clientCard = el.parentNode.parentNode;
        let id = el.parentNode.parentNode.id;
        let clientName = clientCard.querySelector(".clientName");
        let clientCin = clientCard.querySelector(".clientCIN");
        modifyClientForm.style.display = "block";
        let clientNameInput = modifyClientForm.querySelector(".modifyNameInput");
        let clientCinInput = modifyClientForm.querySelector(".modifyCinInput");
        let clientHiddenId = modifyClientForm.querySelector(".clientIdModify");
        clientHiddenId.value = id;
        clientNameInput.value = clientName.textContent;
        clientCinInput.value = clientCin.textContent;
    })
});

cancelModifyClientForm.addEventListener("click", e => {
    e.preventDefault();
    modifyClientForm.style.display = "none";
});

deleteClient.forEach(el => {
    el.addEventListener("click", () => {
        let cardNode = el.parentNode.parentNode;
        let cardId = cardNode.id;
        console.log(cardId);
        deleteClientForm.style.display = "block";
        let clientIdDelete = document.querySelector("input.clientIdDelete");
        clientIdDelete.value = cardId;
    });
});

cancelDeleteClientForm.addEventListener("click", (e) => {
    e.preventDefault();
    deleteClientForm.style.display = "none";
});