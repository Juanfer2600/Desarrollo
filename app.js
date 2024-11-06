const express = require('express');
const axios = require('axios');
const app = express();

app.get('/proyectos', async (req, res) => {
  try {
    const response = await axios.get('https://desarrollo-18y4.onrender.com/proyectos.php');
    res.send(response.data);
  } catch (error) {
    res.status(500).send('Error al acceder al archivo PHP');
  }
});

const PORT = process.env.PORT ?? 1234;
app.listen(PORT, () => {
  console.log(`Servidor Express en el puerto ${PORT}`);
});
