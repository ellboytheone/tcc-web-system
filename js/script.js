function testThePage() {
  alert("O arquivo JS da aplicação está conectado.");
}

const loginSection = document.getElementById("login-section");
const signinSection = document.getElementById("signin-section");
const link = document.getElementById("change-auth-link");

//this function shows signin layout and hides the login one
function showSignin() {
  document.getElementById("login-section").classList.remove("visible");
  document.getElementById("login-section").classList.add("invisible");
  document.getElementById("signin-section").classList.remove("invisible");
  document.getElementById("signin-section").classList.add("visible");
  document.getElementById("change-auth-link").textContent = "Iniciar Sessão";
  document.getElementById("change-auth-link").onclick = showLogin;
}

//this function shows login layout and hides the signin one
function showLogin() {
  document.getElementById("signin-section").classList.remove("visible");
  document.getElementById("signin-section").classList.add("invisible");
  document.getElementById("login-section").classList.remove("invisible");
  document.getElementById("login-section").classList.add("visible");
  document.getElementById("change-auth-link").textContent = "Registrar";
  document.getElementById("change-auth-link").onclick = showSignin;
}

//this function toggle between the login and signin layout
function toggleAuth() {
  const isLoginVisible = loginSection.classList.contains("visible");

  loginSection.classList.toggle("visible", !isLoginVisible);
  loginSection.classList.toggle("invisible", isLoginVisible);

  signinSection.classList.toggle("visible", isLoginVisible);
  signinSection.classList.toggle("invisible", !isLoginVisible);

  link.textContent = isLoginVisible ? "Registrar" : "Iniciar Sessão";
}

link.onclick = toggleAuth;