<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control ventas</title>
</head>
<body>
    <select onchange="console.log()this.value">
        <option value="1"> Opción 1 </option>
        <option value="2"> Opción 2 </option>
        <option value="3"> Opción 3 </option>
        <option value="4"> Opción 4 </option>
      </select>
      
   <script>
      fetch("api/vendedores.json");
      </script>
    
</body>
</html>