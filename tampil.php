<?php

$con = new mysqli('localhost', 'root', '', 'axious') or die('error');

$data = $con->query("SELECT * FROM tb_data");
foreach ($data as $a) {
    echo "
       <tr>
            <td>" . $a['nama'] . "</td>
            <td>" . $a['umur'] . "</td>
            <td>" . $a['tanggal'] . "</td>
            <td>

                <button type='button' onclick='edit(" . $a['id'] . ")'>edit</button>
                <button type='button'  onclick='hapus(" . $a['id'] . ")'>hapus</button>
                
            </td>
            
            </tr>

            ";
}
