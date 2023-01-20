<?php 
    require('./database.php');

    /* SORTING */
    $sort = "ASC";
    $column = "id";

    if (isset($_GET['column']) && isset($_GET['sort'])){
        $sort = $_GET['sort'];
        $column = $_GET['column'];

        $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
    }
   /* -------------------------------------------- */
   
    $queryAccounts = "SELECT * FROM accounts ORDER BY $column $sort";
    $sqlAccounts = mysqli_query($connection, $queryAccounts)

?>