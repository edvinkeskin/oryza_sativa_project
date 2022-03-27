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

        .dropdown-content button {
            color: #1e3821;
            width: 20vw;
            font-size: 15px;
            background-color: white;
            border: 1px solid #1e3821;
            text-decoration: none;
            display: block;
        }

        .dropdown-content button:hover {
            display: block;
            background-color: #1e3821;
            width: 20vw;
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
                <button>Insert</button>
                <button>Delete</button>
                <button>Update</button>
                <button>Selection</button>
                <button>Projection</button>
                <button>Join</button>
                <button>Aggregation</button>
                <button>Nested Aggregation</button>
                <button>Division</button>
            </div>
        </div>

        <h2>Insert Values into DemoTable</h2>
        <form method="POST" action="index.php">
            <!--refresh page when submitted-->
            <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
            Number: <input type="text" name="insNo"> <br><br>
            Name: <input type="text" name="insName"> <br><br>

            <input type="submit" value="Insert" name="insertSubmit">
            <p></p>
        </form>

        <hr>

        <h2>Delete Values into DemoTable</h2>
        <div class="dropdown2">
            <button>Tables</button>
            <div class="dropdown2-tables">
                <button>EquipmentSupplier</button>
                <button>Computer</button>
            </div>
        </div>
        <form method="POST" action="index.php">
            <!--refresh page when submitted-->
            <input type="hidden" id="deleteRequest" name="deleteRequest">
            Name: <input type="text" name="insName"> <br><br>

            <input type="submit" value="Insert" name="insertSubmit">
            <p></p>
        </form>

        <hr>

        <h2>Update Name in DemoTable</h2>
        <p>The values are case sensitive and if you enter in the wrong case, the update statement will not do anything.
        </p>
        <div class="dropdown2">
            <button>Tables</button>
            <div class="dropdown2-tables">
                <button>Peripherals</button>
                <button>Computer</button>
            </div>
        </div>
        <form method="POST" action="index.php">
            <!--refresh page when submitted-->
            <input type="hidden" id="updateQueryRequest" name="updateQueryRequest">
            Old Name: <input type="text" name="oldName"> <br><br>
            New Name: <input type="text" name="newName"> <br><br>

            <input type="submit" value="Update" name="updateSubmit">
            <p></p>
        </form>

        <hr>

        <h2>Selection</h2>
        <p>select LM_rank, budget from BudgetRankMap where budget [Operator] [Value]. Values are case sensitive
        </p>
        <p>operator is one of: "<", "<=", ">", ">=", "="
        </p>
        <p>value is any real number
        </p>
        <p>E.g &emsp; Operator: > &emsp; Value: 5000000
        </p>

        <form method="GET" action="index.php">
            <!--refresh page when submitted-->
            <input type="hidden" id="selectionRequest" name="selectionRequest">

            Operator: <input type="text" name="selectionOperator"> <br><br>

            Value: <input type="text" name="selectionValue"> <br><br>

            <input type="submit" value="Run Query" name="selectionSubmit">
            <p></p>
        </form>

        <hr>

        <h2>Projection</h2>
        <p>select [Fields] from [Table] Values are case sensitive
        </p>
        <p>Fields is a combination of: "serial_number", "equipment_type". Separate by comas
        </p>
        <p>Table is one of: "Peripherals", "Computer"
        </p>
        <p>E.g &emsp; Fields: serial_number,equipment_type &emsp; Table: Computer
        </p>

        <form method="GET" action="index.php">
            <!--refresh page when submitted-->
            <input type="hidden" id="projectionRequest" name="projectionRequest">

            Fields: <input type="text" name="projectionFields"> <br><br>

            Table: <input type="text" name="projectionTable"> <br><br>

            <input type="submit" value="Run Query" name="projectionSubmit">
            <p></p>
        </form>

        <hr>

        <h2>Join</h2>
        <p>Find the [Fields] of all equipment with brand [Brand]. Values are case sensitive
        </p>
        <p>Fields is a combination of: "serial_number", "model_number", "UPC_code", "inventory_number". Separate by comas
        </p>
        <p>Brand is any string. Existing brands in database: "HP", "MSI", "LOGITECH", "LENOVO", "DELL", "CORSAIR"
        </p>
        <p>E.g &emsp; Fields: serial_number,inventory_number &emsp; Brand: DELL
        </p>

        <form method="GET" action="index.php">
            <!--refresh page when submitted-->
            <input type="hidden" id="joinRequest" name="joinRequest">

            Fields: <input type="text" name="joinFields"> <br><br>

            Brand: <input type="text" name="joinBrand"> <br><br>

            <input type="submit" value="Run Query" name="joinSubmit">
            <p></p>
        </form>

        <hr>

        <h2>Aggregation</h2>
        <p>The values are case sensitive and if you enter in the wrong case, the update statement will not do anything.
        </p>

        <form method="POST" action="index.php">
            <!--refresh page when submitted-->
            <input type="hidden" id="aggregationRequest" name="aggregationRequest">
            Old Name: <input type="text" name="oldName"> <br><br>
            New Name: <input type="text" name="newName"> <br><br>

            <input type="submit" value="Update" name="updateSubmit">
            <p></p>
        </form>

        <hr>

        <h2>Nested Aggregation</h2>
        <p>The values are case sensitive and if you enter in the wrong case, the update statement will not do anything.
        </p>

        <form method="POST" action="index.php">
            <!--refresh page when submitted-->
            <input type="hidden" id="nestedAggregationRequest" name="nestedAggregationRequest">
            Old Name: <input type="text" name="oldName"> <br><br>
            New Name: <input type="text" name="newName"> <br><br>

            <input type="submit" value="Update" name="updateSubmit">
            <p></p>
        </form>

        <hr>

        <h2>Division</h2>
        <p>The values are case sensitive and if you enter in the wrong case, the update statement will not do anything.
        </p>
        // Find all the students who have passed all the CPSC 401 required courses.

        <form method="POST" action="index.php">
            <!--refresh page when submitted-->
            <input type="hidden" id="divisionRequest" name="divisionRequest">
            Old Name: <input type="text" name="oldName"> <br><br>
            New Name: <input type="text" name="newName"> <br><br>

            <input type="submit" value="Update" name="updateSubmit">
            <p></p>
        </form>

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
            $db_conn = OCILogon("ora_hl2001", "a66620923", "dbhost.students.cs.ubc.ca:1522/stu");

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

            $old_name = $_POST['oldName'];
            $new_name = $_POST['newName'];

            // you need the wrap the old name and new name values with single quotations
            executePlainSQL("UPDATE demoTable SET name='" . $new_name . "' WHERE name='" . $old_name . "'");
            OCICommit($db_conn);
        }

        function handleResetRequest() {
            global $db_conn;
            // Drop old table
            executePlainSQL("DROP TABLE demoTable");

            // Create new table
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE demoTable (id int PRIMARY KEY, name char(30))");
            OCICommit($db_conn);
        }

        function handleInsertRequest() {
            global $db_conn;

            //Getting the values from user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['insNo'],
                ":bind2" => $_POST['insName']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into demoTable values (:bind1, :bind2)", $alltuples);
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

            $operator = $_GET['selectionOperator'];
            $value = $_GET['selectionValue'];

            $result = executePlainSQL("SELECT LM_rank, budget FROM RankBudgetMap WHERE budget${operator}${value}");
            
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
            $table = $_GET['projectionTable'];

            $result = executePlainSQL("SELECT ${fields} FROM ${table}");
            
            echo "<br>Retrieved data from Projection Request:<br>";
            echo "<table>";
            echo "<tr><th>serial_number</th><th>equipment_type</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["SERIAL_NUMBER"] . "</td><td>" . $row["EQUIPMENT_TYPE"] . "</td></tr>";
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
                "SELECT ${fields}
                FROM Equipment_Stocks
                INNER JOIN ModelNumberBrandMap ON Equipment_Stocks.model_number=ModelNumberBrandMap.model_number
                WHERE ModelNumberBrandMap.brand='${brand}'"
            );
            
            echo "<br>Retrieved data from Join Request:<br>";
            echo "<table>";
            echo "<tr><th>serial_number</th><th>model_number</th><th>UPC_code</th><th>inventory_number</th><th>Brand</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["SERIAL_NUMBER"] . "</td><td>" . $row["MODEL_NUMBER"] . "</td><td>" . $row["UPC_CODE"] . "</td><td>" . $row["INVENTORY_NUMBER"] . "</td><td>" . $brand . "</td></tr>";
            }

            echo "</table>";
            OCICommit($db_conn);   
        }

        // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('updateQueryRequest', $_POST)) {
                    handleUpdateRequest();
                } else if (array_key_exists('insertQueryRequest', $_POST)) {
                    handleInsertRequest();
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
                }

                disconnectFromDB();
            }
        }

		if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['selectionSubmit']) || isset($_GET['projectionSubmit']) || isset($_GET['joinSubmit'])) {
            handleGETRequest();
        }
		?>
</body>

</html>