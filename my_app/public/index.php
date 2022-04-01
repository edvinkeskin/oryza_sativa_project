<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Oryza Sativa Project</title>
    <style>
        body {
            font-family: sans-serif;
            color: black;
            margin: 0;
        }

        .top {
            overflow: hidden;
            height: 15vh;
            background-color: #1e3821;
            text-align: center;
            color: #DCDCDC
        }

        .bottom {
            font-family: sans-serif;
            z-index: -1;
            height: fit-content;
            padding: 2vw;
            top: 0;
            background-color: #DCDCDC;
            overflow: hidden;
        }

        .bottom button {
            background-color: #A9A9A9;
            border: 2px solid #1e3821;
            color: black;
            text-align: center;
            padding: 15px 30px;
            text-decoration: none;
            transition: 0.3s;
        }

        .bottom button:hover {
            background-color: #1e3821;
            color: white;
            text-align: center;
        }

        .dropdown {
            width: 20vw;
            display: inline;
        }

        .dropdown button {

            background-color: white;
            border: 1px solid #1e3821;
            color: #1e3821;
            text-align: center;
            width: 20vw;
            padding: 15px 30px;
            text-decoration: none;
            transition: 0.3s;
        }

        .dropdown button:hover {
            align-self: center;
            background-color: #1e3821;
            color: white;
            text-align: center;
        }

        .dropdown:hover {
            background-color: #1e3821;
            color: white;
            width: 20vw;
            align-self: center;
            text-align: center;
        }

        .dropdown-content {
            display: none;
            width: 20vw;
            height: fit-content;
            position: absolute;
        }

        .dropdown-content a {
            color: #1e3821;
            width: 20vw;
            height: 4vh;
            font-size: 15px;
            background-color: white;
            border: 1px solid #1e3821;
            text-decoration: none;
            text-align: center;
            display: block;
        }

        .dropdown-content a:hover {
            display: block;
            background-color: #1e3821;
            width: 20vw;
            height: 4vh;
            text-align: center;
            color: white
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown2 {
            width: 8vw;
            display: inline;
        }

        .dropdown2 button {

            background-color: white;
            border: 1px solid #1e3821;
            color: #1e3821;
            text-align: center;
            width: 8vw;
            padding: 15px 30px;
            text-decoration: none;
            transition: 0.3s;
        }

        .dropdown2 button:hover {
            align-self: center;
            background-color: #1e3821;
            color: white;
            text-align: center;
        }

        .dropdown2:hover {
            background-color: #1e3821;
            color: white;
            width: 8vw;
            align-self: center;
            text-align: center;
        }

        .dropdown2-tables {
            display: none;
            width: 8vw;
            height: fit-content;
            position: absolute;
        }

        .dropdown2-tables button {
            color: #1e3821;
            width: 8vw;
            font-size: 15px;
            background-color: white;
            border: 1px solid #1e3821;
            text-decoration: none;
            display: block;
        }

        .dropdown2-tables button:hover {
            display: block;
            background-color: #1e3821;
            width: 8vw;
            color: white
        }

        .dropdown2:hover .dropdown2-tables {
            display: block;
        }
    </style>
</head>

<body>

    <div class="top">
        <h1>
            Oryza Sativa Project
        </h1>

    </div>

    <div class="bottom">

        <div class="dropdown">
            <button>Options</button>
            <div class="dropdown-content">
                <a href="#division">Query Results</a>
                <a href="#insert">Insert</a>
                <a href="#delete">Delete</a>
                <a href="#update">Update</a>
                <a href="#selection">Selection</a>
                <a href="#projection">Projection</a>
                <a href="#join">Join</a>
                <a href="#aggregation">Aggregation</a>
                <a href="#nested_aggregation">Nested Aggregation</a>
                <a href="#division">Division</a>
            </div>
        </div>

        <h2 id="insert">Insert</h2>
        <p>Add a new equipment to a warehouse by specifying an Inventory Number, Serial Number, model number and UPC and the brand
        <form method="POST" action="index.php" >
            <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Inventory Number: <input type="text" name="iNum"> <br><br>
            Serial Number: <input type="text" name="sNum"> <br><br>
            Model Number: <input type="text" name="mNum"> <br><br>
            UPC Code: <input type="text" name="upc"> <br><br>
            Brand: <input type="text" name="brand"> <br><br>

            <input type="submit" value="Insert" name="insertSubmit">
            <p></p>
        </form>

        <hr>

        <h2 id="delete">Delete</h2>
        <p>Remove Supplier via supplier_name
        <p>E.g supplier_name: Mifflin, GoodStuff, Bobs
        <p>The values are case sensitive and if you enter in the wrong case, the delete statement will not do anything.
</p>
        <form method="POST" action="index.php" >
            <!--refresh page when submitted-->
            <input type="hidden" id="deleteRequest" name="deleteRequest">
            Supplier Name: <input type="text" name="deleteValue"> <br><br>

            <input type="submit" value="Run Query" name="deleteSubmit">
            <p></p>
        </form>

        <hr>

        <h2 id="update">Update </h2>
        <p>Update Budget for Logistics Manager
        <p>E.g LM Rank: L01, L02, L03 Budget: 150000, 20000
        <p>The values are case sensitive and if you enter in the wrong case, the update statement will not do anything.
</p>
        
        <form method="POST" action="index.php" >
            <!--refresh page when submitted-->
            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
            LM Rank: <input type="text" name="updateLM_rank"> <br><br>
            New Budget: <input type="text" name="updateNewBudget"> <br><br>

            <input type="submit" value="Run Query" name="updateSubmit">
            <p></p>
        </form>

        <script>
            document.getElementById("myspan").textContent="newtext";
        </script>

        <hr>

        <h2 id="selection">Selection</h2>
        <p>select LM_rank, budget from BudgetRankMap where budget >= [Value]. Values are case sensitive
        </p>
        <p>value is any real number
        </p>
        <p>E.g &emsp; Value: 5000000
        </p>

        <form method="GET" action="index.php" >
            <!--refresh page when submitted-->
            <input type="hidden" id="selectionRequest" name="selectionRequest">

            Value: <input type="text" name="selectionValue"> <br><br>

            <input type="submit" value="Run Query" name="selectionSubmit">
            <p></p>
        </form>

        <hr>

        <h2 id="projection">Projection</h2>
        <p>select [Fields] denoting information about Equipment in the database. Values are case sensitive
        </p>
        <p>Fields is a combination of: "serial_number", "model_number", "UPC_code", "inventory_number". Separate by comas
        <p>E.g &emsp; Fields: serial_number, model_number, UPC_code, inventory_number
        </p>

        <form method="GET" action="index.php" >
            <!--refresh page when submitted-->
            <input type="hidden" id="projectionRequest" name="projectionRequest">

            Fields: <input type="text" name="projectionFields"> <br><br>

            <input type="submit" value="Run Query" name="projectionSubmit">
            <p></p>
        </form>

        <hr>

        <h2 id="join">Join</h2>
        <p>Find the Serial Number and Inventory Number of all equipment with brand [Brand]. Values are case sensitive
        </p>
        <p>Brand is any string. Existing brands in database: "HP", "MSI", "LOGITECH", "LENOVO", "DELL", "CORSAIR"
        </p>
        <p>E.g &emsp; Brand: DELL
        </p>

        <form method="GET" action="index.php" >
            <!--refresh page when submitted-->
            <input type="hidden" id="joinRequest" name="joinRequest">

            Brand: <input type="text" name="joinBrand"> <br><br>

            <input type="submit" value="Run Query" name="joinSubmit">
            <p></p>
        </form>

        <hr>

        <h2 id="aggregation">Aggregation</h2>
        <p>Select a warehouse to display the number of items it has in it's aggregated inventory.
        <p>Some Warehouses: 5839482098, 1295763207, 4632394839
        </p>

        <form method="POST" action="index.php" >
            <!--refresh page when submitted-->
            <input type="hidden" id="aggregationRequest" name="aggregationRequest">
            Warehouse Number: <input type="text" name="wareHouseNum"> <br><br>

            <input type="submit" value="Run Query" name="aggregationSubmit">
            <p></p>
        </form>

        <hr>

        <h2 id="nested_aggregation">Nested Aggregation</h2>
        <p>Select a warehouse to display the maximum number of items in that warehouse with the same brand.
        <p>Some Warehouses: 5839482098, 1295763207, 4632394839
        </p>

        <form method="POST" action="index.php" >
            <!--refresh page when submitted-->
            <input type="hidden" id="nestedAggregationRequest" name="nestedAggregationRequest">
            Warehouse: <input type="text" name="wareHouseNum"> <br><br>

            <input type="submit" value="Run Query" name="nestedAggregationSubmit">
            <p></p>
        </form>

        <hr>

        <h2 id="division">Division</h2>
        <p> Find all suppliers who supply all warehouses
        </p>

        <form method="GET" action="index.php" >
            <!--refresh page when submitted-->
            <input type="hidden" id="divisionRequest" name="divisionRequest">

            <input type="submit" value="Run Query" name="divisionSubmit">
            <p></p>
        </form>

        <hr>
        <h2>Query Results</h2>
        <p>The results from running the above queries will be displayed below
        </p>
    </div>

    <?php
		//this tells the system that it's no longer just parsing html; it's now parsing PHP

        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        function printResult($result) { //prints results from a select statement
            echo "<br>Retrieved data from table demoTable:<br>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["NAME"] . "</td></tr>"; //or just use "echo $row[0]"
            }

            echo "</table>";
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example,
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_ekeskin", "a20870838", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function handleUpdateRequest() {
            global $db_conn;

            $LM_rank = $_POST['updateLM_rank'];
            $new_budget = $_POST['updateNewBudget'];

            $result = executePlainSQL("SELECT LM_rank, budget FROM RankBudgetMap");
            executePlainSQL("UPDATE RankBudgetMap SET budget = '$new_budget' WHERE LM_rank = '$LM_rank'");
            $result2 = executePlainSQL("SELECT LM_rank, budget FROM RankBudgetMap");

            echo "<br>Updated data from Update Request:<br>";

            echo "<br>Pre-update<br>";

            echo "<table>";
            echo "<tr><th>LM_Rank</th><th>Budget</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["LM_RANK"] . "</td><td>" . $row["BUDGET"] . "</td></tr>";
            }

            echo "</table>";

            echo "<br>Post-update<br>";

            echo "<table>";
            echo "<tr><th>LM_Rank</th><th>Budget</th></tr>";

            while ($row = OCI_Fetch_Array($result2, OCI_BOTH)) {
                echo "<tr><td>" . $row["LM_RANK"] . "</td><td>" . $row["BUDGET"] . "</td></tr>";
            }

            echo "</table>";
            OCICommit($db_conn);
        }

        function handleDeleteRequest() {
            global $db_conn;

            $value = $_POST['deleteValue'];
            $result = executePlainSQL("SELECT * FROM EquipmentSupplier");
            executePlainSQL("DELETE FROM EquipmentSupplier WHERE supplier_name = '$value'");
            $result2 = executePlainSQL("SELECT * FROM EquipmentSupplier");

            echo "<br>Deleting data from Deletion Request:<br>";

            echo "<br>Pre-deletion<br>";

            echo "<table>";
            echo "<tr><th>supplier_name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["SUPPLIER_NAME"] . "</td></tr>";
            }

            echo "</table>";

            echo "<br>Post-deletion<br>";

            echo "<table>";
            echo "<tr><th>supplier_name</th></tr>";

            while ($row = OCI_Fetch_Array($result2, OCI_BOTH)) {
                echo "<tr><td>" . $row["SUPPLIER_NAME"] . "</td></tr>";
            }

            echo "</table>";

            OCICommit($db_conn);
        }

        function handleInsertRequest() {
            global $db_conn;

            $iNum = $_POST["iNum"];
            $sNum = $_POST["sNum"];
            $mNum = $_POST["mNum"];
            $upc = $_POST["upc"];
            $brand = $_POST["brand"];

            //Getting the values from user and insert data into the table
            executePlainSQL("INSERT INTO Equipment_Stocks (serial_number, model_number, UPC_code, inventory_number)
                             VALUES('${sNum}', '${mNum}', '${upc}', '${iNum}')");

            executePlainSQL("INSERT INTO ModelNumberBrandMap (model_number, brand)
                             VALUES('${mNum}', '${brand}')");

            echo "<br> Added " . $sNum . " into Inventory " . $iNum . " and updated the brand map if appropriate";
            OCICommit($db_conn);
        }

        function handleCountRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT Count(*) FROM demoTable");

            if (($row = oci_fetch_row($result)) != false) {
                echo "<br> The number of tuples in demoTable: " . $row[0] . "<br>";
            }
        }

        function handleSelectionRequest() {
            global $db_conn;

            $value = $_GET['selectionValue'];

            $result = executePlainSQL("SELECT LM_rank, budget FROM RankBudgetMap WHERE budget >= ${value}");
            
            echo "<br>Retrieved data from Selection Request:<br>";
            echo "<table>";
            echo "<tr><th>LM_rank</th><th>Budget</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["LM_RANK"] . "</td><td>" . $row["BUDGET"] . "</td></tr>"; //or just use "echo $row[0]"
                // Can also do:
                // echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
            }

            echo "</table>";
            OCICommit($db_conn);
            
        }

        function handleProjectionRequest() {
            global $db_conn;

            $fields = $_GET['projectionFields'];

            $result = executePlainSQL("SELECT ${fields} FROM Equipment_Stocks");
            
            echo "<br>Retrieved data from Projection Request:<br>";
            echo "<table>";
            echo "<tr><th>serial_number</th><th>model_number</th><th>UPC_code</th><th>inventory_number</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["SERIAL_NUMBER"] . "</td><td>" . $row["MODEL_NUMBER"] . "</td><td>" . $row["UPC_CODE"] . "</td><td>" . $row["INVENTORY_NUMBER"] . "</td></tr>";
            }

            echo "</table>";
            OCICommit($db_conn);
        }

        function handleJoinRequest() {
            global $db_conn;

            $fields = $_GET['joinFields'];
            $brand = $_GET['joinBrand'];

            // $result = executePlainSQL("SELECT ${fields} FROM ${table}");

            $result = executePlainSQL(
                "SELECT serial_number, inventory_number
                FROM Equipment_Stocks
                INNER JOIN ModelNumberBrandMap ON Equipment_Stocks.model_number=ModelNumberBrandMap.model_number
                WHERE ModelNumberBrandMap.brand='${brand}'"
            );
            
            echo "<br>Retrieved data from Join Request:<br>";
            echo "<table>";
            echo "<tr><th>serial_number</th><th>inventory_number</th><th>Brand</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["SERIAL_NUMBER"] . "</td><td>" . $row["INVENTORY_NUMBER"] . "</td><td>" . $brand . "</td></tr>";
            }

            echo "</table>";
            OCICommit($db_conn);   
        }

        function handleDivisionRequest() {
            global $db_conn;

            $result = executePlainSQL(
                "SELECT *
                FROM EquipmentSupplier
                WHERE NOT EXISTS (
                (SELECT warehouse_number FROM PhysicalWarehouse) MINUS
                (SELECT warehouse_number FROM SuppliedBy WHERE EquipmentSupplier.supplier_name = SuppliedBy.supplier_name))"
            );
            echo "<br>Retrieved data from Division Request:<br>";

            echo "<table>";
            echo "<tr><th>supplier name</th><th>email</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr>><td>" . $row["SUPPLIER_NAME"] . "</td><td>" . $row["EMAIL"] . "</td></tr>";
            }

            echo "</table>";
            OCICommit($db_conn);
        }
        
        function handelAggRequest() {
            global $db_conn;

            $wareNum = $_POST['wareHouseNum'];

            $result = executePlainSQL(
                "SELECT COUNT(*) as count
                FROM Equipment_Stocks, Inventory_HAS
                WHERE Equipment_Stocks.inventory_number = Inventory_HAS.inventory_number AND Inventory_HAS.warehouse_number = ${wareNum}"
            );
            
            echo "<br>Retrieved data from Aggregation Request:<br>";

            $myCount = OCI_Fetch_Array($result, OCI_BOTH);

            echo "<br> For Warehouse Number: " .$wareNum . " There are in total " . $myCount['COUNT']. " items <br>";

            echo "</table>";
            OCICommit($db_conn);
        }
        
        function handleNestedAggRequest() {
            global $db_conn;

            $wareNum = $_POST['wareHouseNum'];

            $result = executePlainSQL(
                "SELECT MAX(x.occurance) as Max_Occurance
                FROM (SELECT brand, COUNT(brand) AS occurance 
                    FROM Inventory_HAS, Equipment_Stocks, ModelNumberBrandMap 
                    WHERE Inventory_HAS.warehouse_number = ${wareNum}
                    AND Inventory_HAS.inventory_number = Equipment_Stocks.inventory_number 
                    AND Equipment_Stocks.model_number = ModelNumberBrandMap.model_number
                    GROUP BY brand)x"
            );
            
            echo "<br>Retrieved data from Nested Aggregation Request:<br>";

            $myCount = OCI_Fetch_Array($result, OCI_BOTH);

            echo "<br> For Warehouse Number: " .$wareNum . " There are at most " . $myCount['MAX_OCCURANCE']. " items that share the same brand";

            echo "</table>";
            OCICommit($db_conn);
        }

        // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('deleteRequest', $_POST)) {
                    handleDeleteRequest();
                } else if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
                } else if (array_key_exists('aggregationRequest', $_POST)) {
                    handelAggRequest();
                } else if (array_key_exists('nestedAggregationRequest', $_POST)) {
                    handleNestedAggRequest();
                }

                disconnectFromDB();
            }
        }

        // HANDLE ALL GET ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('selectionRequest', $_GET)) {
                    handleSelectionRequest();
                } else if (array_key_exists('projectionRequest', $_GET)) {
                    handleProjectionRequest();
                } else if (array_key_exists('joinRequest', $_GET)) {
                    handleJoinRequest();
                } else if (array_key_exists('divisionRequest', $_GET)) {
                    handleDivisionRequest();
                }

                disconnectFromDB();
            }
        }

		if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit']) || isset($_POST['deleteSubmit']) || isset($_POST['aggregationSubmit']) || isset($_POST['nestedAggregationSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['selectionSubmit']) || isset($_GET['projectionSubmit']) || isset($_GET['joinSubmit']) || isset($_GET['divisionSubmit'])) {
            handleGETRequest();
        }
		?>
</body>

</html>
