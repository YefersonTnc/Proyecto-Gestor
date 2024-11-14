// Seleccionar todos los enlaces de la navegación
const navLinks = document.querySelectorAll('.nav a');

// Agregar un evento de clic a cada enlace
navLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Evita el comportamiento de recarga
        // Remover la clase "active" de todos los enlaces
        navLinks.forEach(link => link.classList.remove('active'));
        // Agregar la clase "active" al enlace que se ha hecho clic
        this.classList.add('active');
    });
});

function toggleVisibility(id) {
    const element = document.getElementById(id);
    if (element.style.display === "none") {
        element.style.display = "table";
    } else {
        element.style.display = "none";
    }
}

// Agregar una tarea a la lista de tareas
function addTask() {
    const taskInput = document.getElementById("task-input");
    const taskList = document.getElementById("task-list");
    const taskText = taskInput.value.trim();

    if (taskText) {
        const newTask = document.createElement("li");
        newTask.textContent = taskText;
        taskList.appendChild(newTask);
        taskInput.value = "";
    } else {
        alert("Por favor, ingresa una tarea.");
    }
}

// Agregar una notificación a la lista de notificaciones
function addNotification() {
    const notificationsList = document.getElementById("notifications-list");
    const newNotification = document.createElement("li");
    newNotification.textContent = "Nueva notificación de ejemplo";
    notificationsList.appendChild(newNotification);
}
