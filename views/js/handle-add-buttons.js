const addCategoryForm = document.getElementById("addCategoryForm");
const addQuizForm = document.getElementById("addQuizForm");
const addCategoryButton = document.getElementById("addCategoryButton");
const addQuizButton = document.getElementById("addQuizButton");

addCategoryButton.addEventListener("click", handleAddCategoryButton);
addQuizButton.addEventListener("click", handleAddQuizButton);

function handleAddCategoryButton() {
    addQuizForm.classList.add("formDisplayNone");
    addCategoryForm.classList.toggle("formDisplayNone");
}

function handleAddQuizButton() {
    addCategoryForm.classList.add("formDisplayNone");
    addQuizForm.classList.toggle("formDisplayNone");
}