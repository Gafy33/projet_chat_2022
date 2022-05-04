const sign_windows_btn = document.querySelector("#sign-windows-btn");
const sign_windows_in_btn = document.querySelector("#sign-windows-in-btn");
const container = document.querySelector(".container");


sign_windows_btn.addEventListener("click", () => {
  container.classList.add("sign-app-mode");
});

sign_windows_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-app-mode");
});

