// Get the visit count from local storage or set it to 0 if not available
let visitCount = localStorage.getItem("visitCount") || 0;

// Increment the visit count
visitCount++;
localStorage.setItem("visitCount", visitCount);

// Update the visit count element
document.getElementById("visitCount").textContent = visitCount;
