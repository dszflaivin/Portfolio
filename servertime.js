function updateServerTime() {
    // Get the current server time
    const serverTime = new Date().toLocaleTimeString();
  
    // Update the server time element
    document.getElementById("serverTime").textContent = serverTime;
  }
  
  // Update the server time immediately
  updateServerTime();
  
  // Update the server time every second
  setInterval(updateServerTime, 1000);
  