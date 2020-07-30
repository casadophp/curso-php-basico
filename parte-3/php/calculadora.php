<html>
<br />
Primeiro valor: <input type="text" id="primeiro" />
Operação:
<select id="operacao">
  <option value="soma">Somar (+)</option>
  <option value="sub">Subtrair (-)</option>
  <option value="multi">Multiplicar (*)</option>
  <option value="div">Divisão (/)</option>
</select>
Segundo Valor: <input type="text" id="segundo" name="segundo" />
<br />
<br />
<input type="button" onClick="calc();" value="::: EXECUTAR :::">

<br />
<hr>
<h1>Resultado:</h1>
<h3 id="resultado">
  0
</h3>

<script src="./funcoes/index.js"></script>

</html>