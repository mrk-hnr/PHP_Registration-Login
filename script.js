const container = document.getElementById("container");
const overlaycon = document.getElementById("overlaycon");
const overlayBtn = document.getElementById("overlayBtn");

overlayBtn.addEventListener("click", () => {
  container.classList.toggle("right-panel-active");
});
