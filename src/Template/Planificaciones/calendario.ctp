<?php

$tipo_semana = 1;
$tipo_mes = 1;

$MESCOMPLETO[1] = 'Enero';
$MESCOMPLETO[2] = 'Febrero';
$MESCOMPLETO[3] = 'Marzo';
$MESCOMPLETO[4] = 'Abril';
$MESCOMPLETO[5] = 'Mayo';
$MESCOMPLETO[6] = 'Junio';
$MESCOMPLETO[7] = 'Julio';
$MESCOMPLETO[8] = 'Agosto';
$MESCOMPLETO[9] = 'Septiembre';
$MESCOMPLETO[10] = 'Octubre';
$MESCOMPLETO[11] = 'Noviembre';
$MESCOMPLETO[12] = 'Diciembre';

$MESABREVIADO[1] = 'Ene';
$MESABREVIADO[2] = 'Feb';
$MESABREVIADO[3] = 'Mar';
$MESABREVIADO[4] = 'Abr';
$MESABREVIADO[5] = 'May';
$MESABREVIADO[6] = 'Jun';
$MESABREVIADO[7] = 'Jul';
$MESABREVIADO[8] = 'Ago';
$MESABREVIADO[9] = 'Sep';
$MESABREVIADO[10] = 'Oct';
$MESABREVIADO[11] = 'Nov';
$MESABREVIADO[12] = 'Dic';

$SEMANACOMPLETA[0] = 'Domingo';
$SEMANACOMPLETA[1] = 'Lunes';
$SEMANACOMPLETA[2] = 'Martes';
$SEMANACOMPLETA[3] = 'Miércoles';
$SEMANACOMPLETA[4] = 'Jueves';
$SEMANACOMPLETA[5] = 'Viernes';
$SEMANACOMPLETA[6] = 'Sábado';

$SEMANAABREVIADA[0] = 'Dom';
$SEMANAABREVIADA[1] = 'Lun';
$SEMANAABREVIADA[2] = 'Mar';
$SEMANAABREVIADA[3] = 'Mie';
$SEMANAABREVIADA[4] = 'Jue';
$SEMANAABREVIADA[5] = 'Vie';
$SEMANAABREVIADA[6] = 'Sáb';

////////////////////////////////////
if ($tipo_semana == 0) {
    $ARRDIASSEMANA = $SEMANACOMPLETA;
} elseif ($tipo_semana == 1) {
    $ARRDIASSEMANA = $SEMANAABREVIADA;
}
if ($tipo_mes == 0) {
    $ARRMES = $MESCOMPLETO;
} elseif ($tipo_mes == 1) {
    $ARRMES = $MESABREVIADO;
}

$dia = isset($_GET['dia']) ? $_GET['dia'] : '';
$mes = isset($_GET['mes']) ? $_GET['mes'] : '';
$ano = isset($_GET['ano']) ? $_GET['ano'] : '';

if (!$dia)
    $dia = date('d');
if (!$mes)
    $mes = date('n');
if (!$ano)
    $ano = date('Y');

$TotalDiasMes = date('t', mktime(0, 0, 0, $mes, $dia, $ano));
$DiaSemanaEmpiezaMes = date('w', mktime(0, 0, 0, $mes, 1, $ano));
$DiaSemanaTerminaMes = date('w', mktime(0, 0, 0, $mes, $TotalDiasMes, $ano));
$EmpiezaMesCalOffset = $DiaSemanaEmpiezaMes;
$TerminaMesCalOffset = 6 - $DiaSemanaTerminaMes;
$TotalDeCeldas = $TotalDiasMes + $DiaSemanaEmpiezaMes + $TerminaMesCalOffset;


if ($mes == 1) {
    $MesAnterior = 12;
    $MesSiguiente = $mes + 1;
    $AnoAnterior = $ano - 1;
    $AnoSiguiente = $ano;
} elseif ($mes == 12) {
    $MesAnterior = $mes - 1;
    $MesSiguiente = 1;
    $AnoAnterior = $ano;
    $AnoSiguiente = $ano + 1;
} else {
    $MesAnterior = $mes - 1;
    $MesSiguiente = $mes + 1;
    $AnoAnterior = $ano;
    $AnoSiguiente = $ano;
    $AnoAnteriorAno = $ano - 1;
    $AnoSiguienteAno = $ano + 1;
}

//$this->Html->link(' << ', ['controller' => 'Planificaciones', 'action' => 'calendario', $mes, $AnoAnterioAno])

print "<table style=\"font-family:arial;font-size:14px\" bordercolor='navy' align='center' border='0' cellpadding='1' cellspacing='1' width='80%' height='500px'>";
print " <tr>";
print " <td colspan=10>";
print " <table border=0 align=center width=\"1%\" style=\"font-family:arial;font-size:14px\">";
print " <tr>";
print " <td width=\"1%\"><a href=\"?mes=$mes&ano=$AnoAnteriorAno\"> << </td>";
print " <td width=\"1%\"><a href=\"?mes=$MesAnterior&ano=$AnoAnterior\"> < </td>";
print " <td width=\"1%\" colspan=\"1\" align=\"center\" nowrap><b>" . $ARRMES[$mes] . " - $ano</b></td>";
print " <td width=\"1%\"><a href=\"?mes=$MesSiguiente&ano=$AnoSiguiente\"> > </td>";
print " <td width=\"1%\"><a href=\"?mes=$mes&ano=$AnoSiguienteAno\"> >> </td>";
print " </tr>";
print " </table>";
print " </td>";
print "</tr>";
print "<tr>";
foreach ($ARRDIASSEMANA AS $key) {
    print "<td bgcolor=#ccccff><b>$key</b></td>";
}
print "</tr>";

for ($a = 1; $a <= $TotalDeCeldas; $a++) {
    if (!isset($b))
        $b = 0;
    if ($b == 7)
        $b = 0;
    if ($b == 0)
        print '<tr>';
    if (!isset($c))
        $c = 1;

    if (strlen($mes) == 1) {
        $mes = '0' . $mes;
    }

    if (strlen($c) == 1) {
        $c = '0' . $c;
    }

    $fecha = $ano . '-' . $mes . '-' . $c;
    $icono = '';
    foreach ($planificaciones as $planificacion) {
        if ($this->Time->format($planificacion->fecha, 'YYYY-MM-dd') == $fecha) {
            $icono = '<i class="fa fa-calendar"></i> ';
        }
    }

    if ($a > $EmpiezaMesCalOffset AND $c <= $TotalDiasMes) {
        if ($c == date('d') && $mes == date('m') && $ano == date('Y')) {
            print "<td bgcolor=\"#ffcc99\">" . $this->Html->link($icono . $c, ['controller' => 'Planificaciones', 'action' => 'index', $fecha], ['escape' => false]) . "<br></td>";
        } elseif ($b == 0 OR $b == 6) {
            print "<td bgcolor=#99cccc>" . $this->Html->link($icono . $c, ['controller' => 'Planificaciones', 'action' => 'index', $fecha], ['escape' => false]) . "</td>";
        } else {
            print "<td bgcolor=\"#EEEEEE\">" . $this->Html->link($icono . $c, ['controller' => 'Planificaciones', 'action' => 'index', $fecha], ['escape' => false]) . "</td>";
        }
        $c++;
    } else {
        print "<td> </td>";
    }
    if ($b == 6)
        print '</tr>';
    $b++;
}
print "<tr><td align=center colspan=10></a></td></tr>";
print "</table>";
?>