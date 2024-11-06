const express = require('express');
const mysql = require('mysql');
const app = express();

// Configuración de la conexión a la base de datos
const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'umg'
});

// Conectar a la base de datos
db.connect((err) => {
  if (err) {
    console.error('Error conectando a la base de datos:', err.message);
  } else {
    console.log('Conexión exitosa a la base de datos');
  }
});

// Endpoint para obtener los proyectos en formato JSON
app.get('/proyectos', (req, res) => {
  const sql = 'SELECT * FROM proyectos';
  db.query(sql, (err, results) => {
    if (err) {
      console.error('Error ejecutando la consulta:', err.message);
      res.status(500).send(`Error en la consulta: ${err.message}`);
    } else {
      res.json(results); // Devuelve los resultados en formato JSON
    }
  });
});

const PORT = process.env.PORT || 1234;
app.listen(PORT, () => {
  console.log(`Servidor Express en el puerto ${PORT}`);
});
