const addCarButton = document.getElementById("addCarButton");
const AddCarForm = document.querySelector(".AddCarForm");
const cancelAddClientForm = document.querySelector(".cancelAddClientForm");
const modifyCarForm = document.querySelector(".modifyCarForm");
const modifyCar = document.querySelectorAll(".modifyCar");
const deleteCar = document.querySelectorAll(".deleteCar");
const cancelModifyCarForm = document.querySelector(".cancelModifyCarForm");
const deleteCarForm = document.querySelector(".deleteCarForm");
const cancelDeleteCarForm = document.querySelector(".cancelDeleteCarForm");


addCarButton.addEventListener("click", () => {
    AddCarForm.style.display = "block";
});

cancelAddClientForm.addEventListener("click", (e) => {
    e.preventDefault();
    AddCarForm.style.display = "none";
});

modifyCar.forEach(el => {
    el.addEventListener("click", () => {
        let parentCard = el.parentNode.parentNode;
        let hiddenInputId = document.querySelector(".carIdModify");
        hiddenInputId.value = parentCard.id;
        modifyCarForm.style.display = "block";
    });
});

cancelModifyCarForm.addEventListener("click", e => {
    e.preventDefault();
    modifyCarForm.style.display = "none";   
});

deleteCar.forEach(el => {
    el.addEventListener("click", () => {
        deleteCarForm.style.display = "block";
        let parentCard = el.parentNode.parentNode;
        let parentCardId = parentCard.id;
        let hiddenDeleteInput = deleteCarForm.querySelector(".carIdDelete");
        hiddenDeleteInput.value = parentCardId;
    });
});

cancelDeleteCarForm.addEventListener("click", e => {
    e.preventDefault();
    deleteCarForm.style.display = "none";
})
