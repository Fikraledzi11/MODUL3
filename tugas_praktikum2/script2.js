// // AMBIL ELEMEN
// const btnWarga = document.getElementById("btnWarga");
// const btnPetugas = document.getElementById("btnPetugas");
// const roleTitle = document.getElementById("roleTitle");
// const registerForm = document.getElementById("registerForm");

// // DEFAULT ROLE
// let role = "warga";
// btnWarga.classList.add("active");

// // PILIH ROLE
// btnWarga.addEventListener("click", () => {
//     role = "warga";
//     btnWarga.classList.add("active");
//     btnPetugas.classList.remove("active");
//     roleTitle.textContent = "Registrasi Warga";
// });

// btnPetugas.addEventListener("click", () => {
//     role = "petugas";
//     btnPetugas.classList.add("active");
//     btnWarga.classList.remove("active");
//     roleTitle.textContent = "Registrasi Petugas";
// });

// // SUBMIT FORM
// registerForm.addEventListener("submit", function (e) {
//     e.preventDefault();

//     const user = document.getElementById("username").value.trim();
//     const pass = document.getElementById("password").value.trim();

//     if (!user || !pass) {
//         alert("Username dan password wajib diisi");
//         return;
//     }

//     // SIMPAN DATA
//     localStorage.setItem("username", user);
//     localStorage.setItem("role", role);

//     alert("Registrasi berhasil");

//     // REDIRECT SESUAI ROLE
//     if (role === "warga") {
//         window.location.href = "dashboard.php";
//     } else {
//         window.location.href = "dashboard_petugas.php";
//     }
// });
