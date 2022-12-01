function openMenu() {
    const segunda_row = document.querySelector(".segunda-row");
    console.log(segunda_row);

    if (segunda_row.style.display === "flex") {
      segunda_row.style.display = "none";
    } else {
      segunda_row.style.display = "flex";
    }
  }