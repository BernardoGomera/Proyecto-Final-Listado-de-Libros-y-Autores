//Datos de los autores (puedes obtener estos datos de una base de datos o de otro archivo)
var autores = [
  { nombre: "Johnson White", ubicacion: "Park, CA — USA" },
  { nombre: "Marjorie Green", ubicacion: "Oakland, CA — USA" },
  { nombre: "Cheryl Carson", ubicacion: "Oakland, CA — USA" },
  { nombre: "Michael Leary", ubicacion: "Oakland, KS — USA" },
  { nombre: "Dick Straight", ubicacion: "Oakland, CA — USA" },
  { nombre: "Meander Smith", ubicacion: "Oakland, CA — USA" },
  { nombre: "Abraham Bennet", ubicacion: "Oakland, CA — USA" },
  { nombre: "Burt Gringlesby", ubicacion: "Oakland, TN — USA" },
  { nombre: "Chastity Locksley", ubicacion: "Oakland, OR — USA" },
  { nombre: "Morningstar Greene", ubicacion: "Oakland, CA — USA" },
  { nombre: "Reginald Blotchet-Halls", ubicacion: "Oakland, MI — USA" },
  { nombre: "Akiko Yokomoto", ubicacion: "Oakland, IN — USA" },
  { nombre: "Innes del Castillo", ubicacion: "Oakland, CA — USA" },
  { nombre: "Michel DeFrance", ubicacion: "Oakland, CA — USA" },
  { nombre: "Dirk Stringer", ubicacion: "Oakland, CA — USA" },
  { nombre: "Stearns MacFeather", ubicacion: "Oakland, MD — USA" },
  { nombre: "Livia Karsen", ubicacion: "Oakland, CA — USA" },
  { nombre: "Sylvia Panteley", ubicacion: "Oakland, CA — USA" },
  { nombre: "Sheryl Hunter", ubicacion: "Oakland, UT — USA" },
  { nombre: "Heather McBadden", ubicacion: "Oakland, UT — USA" },
  { nombre: "Anne Ringer", ubicacion: "Oakland, UT — USA" },
  { nombre: "Albert Ringer", ubicacion: "Oakland, UT — USA" },

];

// Función para crear el HTML de un autor
function createAutorHTML(autor) {
  return `
    <div class="autor-card">
      <img src="assets/img/escritor.png" alt="Autor" />
      <h5>${autor.nombre}</h5>
      <p>${autor.ubicacion}</p>
    </div>
  `;
}

// Función para añadir autores al contenedor
function addAutoresToContainer(autores) {
  var autoresContainer = document.getElementById("autores-container");
  autoresContainer.innerHTML = autores.map(createAutorHTML).join('');
}

// Añadir autores al cargar la página
window.addEventListener("load", function() {
  addAutoresToContainer(autores);
});