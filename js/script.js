console.clear();
const loginBtn = document.getElementById("login");
const signupBtn = document.getElementById("signup");

loginBtn.addEventListener("click", (e) => {
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if (element !== "slide-up") {
			parent.classList.add("slide-up");
		} else {
			signupBtn.parentNode.classList.add("slide-up");
			parent.classList.remove("slide-up");
		}
	});
});
loginBtn.addEventListener("click", () => {
	// Obtener los valores de los campos de correo y contraseña
	const email = document.querySelector("#login .input[type='email']").value;
	const contraseña = document.querySelector("#login .input[type='password']").value;
  
	// Crear un objeto con los datos a enviar al servidor
	const datos = {
	  email: email,
	  contraseña: contraseña
	};
  
	// Realizar una solicitud POST al servidor
	fetch('/iniciar-sesion', {
	  method: 'POST',
	  headers: {
		'Content-Type': 'application/json'
	  },
	  body: JSON.stringify(datos)
	})
	.then(response => response.json())
	.then(data => {
	  // Manejar la respuesta del servidor (por ejemplo, redirigir o mostrar un mensaje)
	  console.log(data);
	})
	.catch(error => {
	  console.error('Error al iniciar sesión:', error);
	});
  });

  

signupBtn.addEventListener("click", (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if (element !== "slide-up") {
			parent.classList.add("slide-up");
		} else {
			loginBtn.parentNode.parentNode.classList.add("slide-up");
			parent.classList.remove("slide-up");
		}
	});
});
const registrarBtn = document.querySelector(".signup .submit-btn");

registrarBtn.addEventListener("click", () => {
  // Obtén los valores de los campos del formulario de registro
  const nombre = document.querySelector(".signup .input[placeholder='Nombre']").value;
  const email = document.querySelector(".signup .input[placeholder='Email']").value;
  const contraseña = document.querySelector(".signup .input[placeholder='Contraseña']").value;

  // Crea un objeto con los datos a enviar al servidor
  const datos = {
    nombre: nombre,
    email: email,
    contraseña: contraseña
  };

  // Realiza una solicitud POST al servidor para crear un nuevo usuario
  fetch('/crear-usuario', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(datos)
  })
  .then(response => response.json())
  .then(data => {
    // Maneja la respuesta del servidor, por ejemplo, redirige al usuario o muestra un mensaje de éxito
    console.log(data);
  })
  .catch(error => {
    console.error('Error al registrar usuario:', error);
  });
});






