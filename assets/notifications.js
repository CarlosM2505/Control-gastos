// show notifications
function show_noti(message, type) {
  const alertContainer = document.getElementById("alert-container");
  const alert = document.createElement("div");
  alert.className = `alert alert-${type} alert-dismissible fade show`;
  alert.role = "alert";
  alert.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
  alertContainer.appendChild(alert);

  // Auto close after 3 seconds

  setTimeout(() => {
    alert.classList.remove("show");
    alert.classList.add("fade");
    setTimeout(() => alert.remove(), 150); // Remove the element after fade-out transition
  }, 3000); // 3 seconds
}

function loadNotifications() {
  const urlParams = new URLSearchParams(window.location.search);
  const notifications = [
    {
      param: "loginStatus",
      successMsg: "Carlos00, Bienvenido!",
      errorMsg: "Credenciales incorrectas, intenta nuevamente!",
      errorKey: "fail",
    },
    {
      param: "addStatus",
      successMsg: "Categoría Agregada Correctamente",
      errorMsg: "La categoría ya existe, intenta agregar otra categoría",
      errorKey: "exists",
    },
    {
      param: "addExpense",
      successMsg: "Gasto agregado correctamente",
    },
    {
      param: "updateMonthly",
      successMsg: "Presupuesto actualizado correctamente",
    },
    {
      param: "updateCategory",
      successMsg: "Categoría actualizada correctamente",
    },
    {
      param: "updateGasto",
      successMsg: "Gasto actualizado correctamente",
    },
    {
      param: "deleteCategory",
      successMsg: "Categoría eliminada correctamente",
      errorMsg: "Categoría aun no ha sido eliminada",
      errorKey: "fail",
    },
    {
      param: "deleteGasto",
      successMsg: "Gasto eliminado exitosamente",
      errorMsg: "Gasto aun no ha sido eliminado",
      errorKey: "fail",
    },
  ];

  let shouldUpdateUrl = false;

  notifications.forEach((n) => {
    const status = urlParams.get(n.param);
    if (status) {
      shouldUpdateUrl = true;
      if (status === "success") {
        show_noti(n.successMsg, "success");
      } else if (n.errorMsg && status === n.errorKey) {
        show_noti(n.errorMsg, "danger");
      }
    }
  });

  // Clear URL parameters if any were processed
  if (shouldUpdateUrl) {
    window.history.pushState({}, "", window.location.pathname);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  // cargar notifications
  loadNotifications();
});
