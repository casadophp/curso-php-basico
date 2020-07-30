const pegarvalor = (ID) => document.getElementById(ID).value;

const escrever = (value, ID) => (document.getElementById(ID).innerHTML = value);

const calc = () => {
  let primeiro = parseFloat(pegarvalor("primeiro"));
  let segundo = parseFloat(pegarvalor("segundo"));
  let operacao = pegarvalor("operacao");

  let total = 0;
  switch (operacao) {
    case "soma":
      total = primeiro + segundo;
      break;
    case "sub":
      total = primeiro - segundo;
      break;
    case "multi":
      total = primeiro * segundo;
      break;
    case "div":
      total = primeiro / segundo;
      break;
    default:
      total = "Ops, tivemos um erro";
  }

  escrever(total, "resultado");
};
