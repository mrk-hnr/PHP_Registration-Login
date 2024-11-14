const container = document.getElementById("container");
const overlaycon = document.getElementById("overlaycon");
const overlayBtn = document.getElementById("overlayBtn");
const deleteBtn = documeng.getElementbyId("delete-button");

overlayBtn.addEventListener("click", () => {
  container.classList.toggle("right-panel-active");
});

deleteBtn.addEventlistener("submit", deleteConfirmation);

function deleteConfirmation() {
  return confirm("Are you sure you want to delete your account>");
}
