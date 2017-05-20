


<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	
}
th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 2px;

}

td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 2px;
}

td#t01 {
    background-color: #4169E1;
    color: white;
    padding: 2px;
}

tr:nth-child(even) {
   <!-- background-color: #dddddd;-->
}

table th {
    background-color: black;
    color: white;
}
</style>
</head>
<body>

<table>
<caption><b><h2>&nbsp; "NOT WORKING" TERMINALS - COMPANY WISE</h2></b></caption>
  <tr>
    <td></td>
    <th colspan="3">EDC</th>
    <th colspan="3">GPRS</th>
  </tr>
   <tr>
    <td></td>
    <td id="t01">PINE LABS</td>
    <td id="t01">ICICI</td>
    <td id="t01">INNOVITI</td>
	
    <td id="t01">PINE LABS</td>
    <td id="t01">ICICI</td>
    <td id="t01">INNOVITI</td>
  </tr>

  <tr>
    <td id="t01">THEME PARK</td>
    <td><?php echo $tp_not_work_status_E1[0]['tnum']; ?></td>
    <td><?php echo $tp_not_work_status_E2[0]['tnum']; ?></td>
    <td><?php echo $tp_not_work_status_E3[0]['tnum']; ?></td>
	<td><?php echo $tp_not_work_status_G1[0]['tnum']; ?></td>
    <td><?php echo $tp_not_work_status_G2[0]['tnum']; ?></td>
    <td><?php echo $tp_not_work_status_G3[0]['tnum']; ?></td>
  </tr>
  <tr>
	<td id="t01">WATER PARK</td>
    <td><?php echo $wp_not_work_status_E1[0]['tnum']; ?></td>
    <td><?php echo $wp_not_work_status_E2[0]['tnum']; ?></td>
    <td><?php echo $wp_not_work_status_E3[0]['tnum']; ?></td>
	<td><?php echo $wp_not_work_status_G1[0]['tnum']; ?></td>
    <td><?php echo $wp_not_work_status_G2[0]['tnum']; ?></td>
    <td><?php echo $wp_not_work_status_G3[0]['tnum']; ?></td>
  </tr>
  <tr>
    <td id="t01">SNOW PARK</td>
    <td><?php echo $sp_not_work_status_E1[0]['tnum']; ?></td>
    <td><?php echo $sp_not_work_status_E2[0]['tnum']; ?></td>
    <td><?php echo $sp_not_work_status_E3[0]['tnum']; ?></td>
	<td><?php echo $sp_not_work_status_G1[0]['tnum']; ?></td>
    <td><?php echo $sp_not_work_status_G2[0]['tnum']; ?></td>
    <td><?php echo $sp_not_work_status_G3[0]['tnum']; ?></td>
  </tr>
  <tr>
	<td id="t01">HOTEL</td>
    <td><?php echo $hp_not_work_status_E1[0]['tnum']; ?></td>
    <td><?php echo $hp_not_work_status_E2[0]['tnum']; ?></td>
    <td><?php echo $hp_not_work_status_E3[0]['tnum']; ?></td>
	<td><?php echo $hp_not_work_status_G1[0]['tnum']; ?></td>
    <td><?php echo $hp_not_work_status_G2[0]['tnum']; ?></td>
    <td><?php echo $hp_not_work_status_G3[0]['tnum']; ?></td>
  </tr>
  <tr>
	<td id="t01">BACK OFFICE</td>
    <td><?php echo $bp_not_work_status_E1[0]['tnum']; ?></td>
    <td><?php echo $bp_not_work_status_E2[0]['tnum']; ?></td>
    <td><?php echo $bp_not_work_status_E3[0]['tnum']; ?></td>
	<td><?php echo $bp_not_work_status_G1[0]['tnum']; ?></td>
    <td><?php echo $bp_not_work_status_G2[0]['tnum']; ?></td>
    <td><?php echo $bp_not_work_status_G3[0]['tnum']; ?></td>
  </tr>
  <tr>
	<td id="t01">HEAD OFFICE</td>
    <td><?php echo $hop_not_work_status_E1[0]['tnum']; ?></td>
    <td><?php echo $hop_not_work_status_E2[0]['tnum']; ?></td>
    <td><?php echo $hop_not_work_status_E3[0]['tnum']; ?></td>
	<td><?php echo $hop_not_work_status_G1[0]['tnum']; ?></td>
    <td><?php echo $hop_not_work_status_G2[0]['tnum']; ?></td>
    <td><?php echo $hop_not_work_status_G3[0]['tnum']; ?></td>
  </tr>
</table>

<br/>

<table>
<caption><b><h2>&nbsp; DEPLOYED TERMINALS - DEPARTMENT WISE</h2></b></caption>
  <tr>
    <td></td>
    <th colspan="3">EDC</th>
    <th colspan="3">GPRS</th>
  </tr>
   <tr>
    <td></td>
    <td id="t01">PINE LABS</td>
    <td id="t01">ICICI</td>
    <td id="t01">INNOVITI</td>
	
    <td id="t01">PINE LABS</td>
    <td id="t01">ICICI</td>
    <td id="t01">INNOVITI</td>
  </tr>

  <tr>
    <td id="t01">TICKETING</td>
    <td><?php echo $ticketing_E1[0]['dnum']; ?></td>
    <td><?php echo $ticketing_E2[0]['dnum']; ?></td>
    <td><?php echo $ticketing_E3[0]['dnum']; ?></td>
	<td><?php echo $ticketing_G1[0]['dnum']; ?></td>
    <td><?php echo $ticketing_G2[0]['dnum']; ?></td>
    <td><?php echo $ticketing_G3[0]['dnum']; ?></td>
  </tr>
  <tr>
	<td id="t01">FnB</td>
    <td><?php echo $fnb_E1[0]['dnum']; ?></td>
    <td><?php echo $fnb_E2[0]['dnum']; ?></td>
    <td><?php echo $fnb_E3[0]['dnum']; ?></td>
	<td><?php echo $fnb_G1[0]['dnum']; ?></td>
    <td><?php echo $fnb_G2[0]['dnum']; ?></td>
    <td><?php echo $fnb_G3[0]['dnum']; ?></td>
  </tr>
  <tr>
    <td id="t01">RETAIL</td>
    <td><?php echo $retail_E1[0]['dnum']; ?></td>
    <td><?php echo $retail_E2[0]['dnum']; ?></td>
    <td><?php echo $retail_E3[0]['dnum']; ?></td>
	<td><?php echo $retail_G1[0]['dnum']; ?></td>
    <td><?php echo $retail_G2[0]['dnum']; ?></td>
    <td><?php echo $retail_G3[0]['dnum']; ?></td>
  </tr>
  <tr>
	<td id="t01">IT (Back Office)</td>
    <td><?php echo $it_E1[0]['dnum']; ?></td>
    <td><?php echo $it_E2[0]['dnum']; ?></td>
    <td><?php echo $it_E3[0]['dnum']; ?></td>
	<td><?php echo $it_G1[0]['dnum']; ?></td>
    <td><?php echo $it_G2[0]['dnum']; ?></td>
    <td><?php echo $it_G3[0]['dnum']; ?></td>
  </tr>
  <tr>
	<td id="t01">ACCOUNTS</td>
    <td><?php echo $accounts_E1[0]['dnum']; ?></td>
    <td><?php echo $accounts_E2[0]['dnum']; ?></td>
    <td><?php echo $accounts_E3[0]['dnum']; ?></td>
	<td><?php echo $accounts_G1[0]['dnum']; ?></td>
    <td><?php echo $accounts_G2[0]['dnum']; ?></td>
    <td><?php echo $accounts_G3[0]['dnum']; ?></td>
  </tr>
  <tr>
	<td id="t01">MARKETING</td>
    <td><?php echo $marketing_E1[0]['dnum']; ?></td>
    <td><?php echo $marketing_E2[0]['dnum']; ?></td>
    <td><?php echo $marketing_E3[0]['dnum']; ?></td>
	<td><?php echo $marketing_G1[0]['dnum']; ?></td>
    <td><?php echo $marketing_G2[0]['dnum']; ?></td>
    <td><?php echo $marketing_G3[0]['dnum']; ?></td>
  </tr>
</table>

</body>
</html>