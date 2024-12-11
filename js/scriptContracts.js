const cancelAddContractForm = document.querySelector(".cancelAddContractForm");
const AddContractForm = document.querySelector(".AddContractForm");
const addContractButton = document.getElementById("addContractButton");
const modifyContract = document.querySelectorAll(".modifyContract");
const modifyContractForm = document.querySelector(".modifyContractForm");
const cancelModifyContractForm = document.querySelector(".cancelModifyContractForm");
const deleteContractForm = document.querySelector(".deleteContractForm");
const cancelDeleteContractForm = document.querySelector(".cancelDeleteContractForm");
const deleteContract = document.querySelectorAll(".deleteContract");


addContractButton.addEventListener("click", () => {
    AddContractForm.style.display = "block";
});
cancelAddContractForm.addEventListener("click", (e) => {
    e.preventDefault();
    AddContractForm.style.display = "none";
});

modifyContract.forEach(el => {
    el.addEventListener("click", () => {
        const parentCard = el.parentNode.parentNode;
        let contractId = parentCard.id;
        let beginDate = parentCard.querySelector(".beginContract").textContent;
        let endDate = parentCard.querySelector(".endContract").textContent;
        let beginDateContract = document.querySelector(".beginDateContract");
        let endDateContract = document.querySelector(".endDateContract");
        let ContractIdModify = document.querySelector(".ContractIdModify");
        ContractIdModify.value = contractId;
        beginDateContract.value = beginDate;
        endDateContract.value = endDate;
        modifyContractForm.style.display = "block";
    })
});

cancelModifyContractForm.addEventListener("click", (e) => {
    e.preventDefault();
    modifyContractForm.style.display = "none";

});

cancelDeleteContractForm.addEventListener("click", (e) => {
    e.preventDefault();
    deleteContractForm.style.display = "none";
});

deleteContract.forEach(el => {
    el.addEventListener("click", () => {
        let ParentNodeHere = el.parentNode.parentNode;
        let parentNodeId = ParentNodeHere.id;
        deleteContractForm.style.display = "block";
        let deleteContractHiddenInput = deleteContractForm.querySelector(".contractIdDelete");
        deleteContractHiddenInput.value = parentNodeId;
    })
})