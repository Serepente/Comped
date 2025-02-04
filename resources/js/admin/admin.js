/**
 * Toggles the visibility of a tab by its ID.
 */
function toggleTab(tabId, show) {
    const tab = document.getElementById(tabId);
    if (tab) {
        tab.style.display = show ? 'block' : 'none';
    }
}

// Attach functions to `window` for global access
window.openAddEventTab = function() {
    toggleTab('addEventTab', true);
};
window.closeAddEventTab = function() {
    toggleTab('addEventTab', false);
};

window.openUpdateTab = function() {
    toggleTab('updateTab', true);
};
window.closeUpdateTab = function() {
    toggleTab('updateTab', false);
};

window.openViewDetailsTab = function(image, title, description, dateTime) {
    const eventImage = document.getElementById('eventImage');
    const eventTitle = document.getElementById('eventTitle');
    const eventDescription = document.getElementById('eventDescription');
    const eventDateTime = document.getElementById('eventDateTime');

    if (eventImage) eventImage.src = image;
    if (eventTitle) eventTitle.innerText = title;
    if (eventDescription) eventDescription.innerText = description;
    if (eventDateTime) eventDateTime.innerText = dateTime;

    toggleTab('viewDetailsTab', true);
};

window.closeViewDetailsTab = function() {
    toggleTab('viewDetailsTab', false);
};

document.addEventListener("DOMContentLoaded", function() {
    const officersCard = document.getElementById("officersCard");
    const addOfficerCard = document.getElementById("addOfficerCard");
    const toggleButton = document.getElementById("toggleView");
    const closeButton = document.getElementById("closeView");

    if (!officersCard || !addOfficerCard || !toggleButton || !closeButton) {
        console.error("One or more elements are missing.");
        return;
    }

    let savedState = localStorage.getItem("cardState");

    // Apply saved state on page load
    if (savedState === "addOfficer") {
        officersCard.style.display = "none";
        addOfficerCard.style.display = "block";
    } else {
        officersCard.style.display = "block";
        addOfficerCard.style.display = "none";
    }

    // Function to toggle views
    function toggleView() {
        if (officersCard.style.display === "none") {
            officersCard.style.display = "block";
            addOfficerCard.style.display = "none";
            localStorage.setItem("cardState", "officers"); // Save state
        } else {
            officersCard.style.display = "none";
            addOfficerCard.style.display = "block";
            localStorage.setItem("cardState", "addOfficer"); // Save state
        }
    }

    // Attach event listeners
    toggleButton.addEventListener("click", toggleView);
    closeButton.addEventListener("click", toggleView);
});