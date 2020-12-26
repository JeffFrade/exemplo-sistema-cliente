<?php

require_once __DIR__ . '/conn.php';

function searchClients(string $search = "")
{
    $conn = connect();

    $sql = "SELECT * FROM clientes";

    if (!empty($search)) {
        $sql .= "";
    }

    $res = mysqli_query($conn, $sql);
    $table = "";

    while ($row = mysqli_fetch_assoc($res)) {
        $matches = [];
        preg_match_all('/[\d]{3}|[\d]{2}/i', $row["documento"], $matches);
        $matches = $matches[0];

        $table .= '<tr>' . PHP_EOL;
        $table .= '<td>' . $row["id"] . '</td>' . PHP_EOL;
        $table .= '<td>' . $row["nome"] . '</td>' . PHP_EOL;
        $table .= '<td>' . sprintf("%s.%s.%s-%s", $matches[0], $matches[1], $matches[2], $matches[3]) . '</td>' . PHP_EOL;
        $table .= '<td class="actions" nowrap="">' . PHP_EOL;
        $table .= '<a href="#" class="btn btn-light btn-sm" title="Editar"><i class="fa fa-edit"></i></a>' . PHP_EOL;
        $table .= '&nbsp;' . PHP_EOL;
        $table .= '<a href="#" class="btn btn-danger btn-sm" title="Deletar" data-id=""><i class="fa fa-trash"></i></a>' . PHP_EOL;
        $table .= '</td>' . PHP_EOL;
        $table .= '</tr>';
    }

    return $table;
}