//auth.js
function togglePassword(inputId, buttonId) {
  const input = document.getElementById(inputId);
  const eyeOn = document.getElementById(buttonId).querySelector("#icon-eye");
  const eyeOff = document
    .getElementById(buttonId)
    .querySelector("#icon-eye-off");
  const viewable = input.type === "password";
  input.type = viewable ? "text" : "password";
  eyeOn.style.display = viewable ? "none" : "block";
  eyeOff.style.display = viewable ? "block" : "none";
}
document.querySelector("logout-form").addEventListener("submit", function (event) {
  event.preventDefault();

  const sair = confirm("Tens a certeza que queres terminar sessão?");

  if (sair) {
    this.submit();
  }
});