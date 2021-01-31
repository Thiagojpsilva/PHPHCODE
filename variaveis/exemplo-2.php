<?PHP

$Ano = (int) date("Y");
$Dia = date("d");
$Mes = date("M");
$Dia_Semana = date("w");
$Nacimento =  1986;
$Valide = true;
$Idade = $Ano - $Nacimento;
var_dump($Nacimento);

echo "Estamos no ano de $Ano e sua idade é $Idade";
echo "</br>";
echo "$Valide";
echo "</br>";
echo "Dia: $Dia";
echo "</br>";
echo "Mes: $Mes";
echo "</br>";
echo "Dia da Semana: $Dia_Semana";

?>