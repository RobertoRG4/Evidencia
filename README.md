<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Copiar Código al Portapapeles</title>
    <style>
        pre {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0;
            overflow-x: auto;
        }
        button {
            background-color: #008cba;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #005f5f;
        }
    </style>
</head>
<body>

<h2>Evidencia</h2>
<pre id="code-block">
    console.log("Hola Mundo");
</pre>
<button onclick="copyToClipboard()">Copiar al Portapapeles</button>

<script>
function copyToClipboard() {
    const codeBlock = document.getElementById("code-block").textContent;

    const textArea = document.createElement("textarea");
    textArea.value = codeBlock;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("copy");
    document.body.removeChild(textArea);

    alert("Código copiado al portapapeles");
}
</script>

</body>
</html>
