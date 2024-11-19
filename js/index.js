// INDEX TABS
const tabPanels = Array.from(document.querySelectorAll(".tab-panels > div"));
const tabs = Array.from(document.querySelectorAll(".tab"));
const tabsContainer = document.querySelector(".tab-menu");

tabPanels.forEach((tab, index) => {
  if (index > 0) tab.setAttribute("hidden", "");
});

const switchTab = (e) => {
  // Locates the clicked tab
  const clickedTab = e.target.closest("li");

  if (!clickedTab) return;

  // Removes the "Active" class from all tabs
  tabs.forEach((tab) => tab.classList.remove("active"));

  // Adds the "Active" class to the selected tab
  clickedTab.classList.add("active");

  // Get the associated PANEL for the clicked tab
  const activePanelId = clickedTab.children[0].getAttribute("href");
  const activePanel = document.querySelector(activePanelId);

  // Hide all the Tab Panels
  tabPanels.forEach((panel) => {
    panel.setAttribute("hidden", "");
  });

  // Show the panel associated with the clicked tab
  activePanel.removeAttribute("hidden", "");
};

tabsContainer.addEventListener("click", switchTab);
