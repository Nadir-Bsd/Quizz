const addQuestion = document.getElementById("addQuestion");
const addQuestionButton = document.getElementById("addQuestionButton");

addQuestionButton.addEventListener("click", handleAddQuestion);

function handleAddQuestion() {
    addQuestion.classList.toggle("formDisplayNone");
}

