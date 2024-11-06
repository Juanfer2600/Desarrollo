const express = require('express');
const { Pool } = require('pg'); // Importamos Pool desde la librería pg
const app = express();

// Configuración de la conexión a la base de datos usando variables de entorno
const db = new Pool({
  host: process.env.DB_HOST,       // Host de la base de datos (proporcionado por Render)
  port: process.env.DB_PORT,       // Puerto de la base de datos, normalmente 5432 para PostgreSQL
  user: process.env.DB_USER,       // Usuario de la base de datos
  password: process.env.DB_PASSWORD, // Contraseña de la base de datos
  database: process.env.DB_NAME    // Nombre de la base de datos
});


// Endpoint para obtener los proyectos en formato JSON
app.get('/proyectos', async (req, res) => {
  try {
    const result = await db.query('SELECT * FROM proyectos'); // Ejecuta la consulta a PostgreSQL
    res.json(result.rows); // Devuelve los resultados en formato JSON
  } catch (err) {
    console.error('Error ejecutando la consulta:', err.message);
    res.status(500).send(`Error en la consulta: ${err.message}`);
  }
});

const PORT = process.env.PORT || 1234;
app.listen(PORT, () => {
  console.log(`Servidor Express en el puerto ${PORT}`);
});
