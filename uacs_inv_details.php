<?php
require 'server/server.php';

    $fund = $_POST['fund'];
        $query = "SELECT acct_title FROM uacs_inv";
        $statement = $conn->prepare($query);
        $statement->execute();

        // Start building the select element
        $selectHTML = '<select class="form-control" name="inv_type" required>';
        $selectHTML .= '<option value="0" selected disabled>--Select Inventory Type--</option>';

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $selectHTML .= '<option value"' . $row['item'] . '">' . $row['item'] . '</option>';
        }

        $selectHTML .= '</select>';

        // Return the select element as the response
        echo $selectHTML;

?>