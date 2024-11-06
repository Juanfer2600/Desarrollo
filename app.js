const express = require('express');
const app = express();

const PORT = process.env.PORT ?? 1234; // Usa el puerto que Render proporciona, o 3000 si no está definido
app.listen(PORT, () => {
  console.log(`Server running on port http://localhost:${PORT}`);
});