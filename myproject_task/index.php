<!doctype html>
<html>
    <head>
        <title>Vande Bharat Maintenance Suppot Portal - Search</title>
        <!-- Datatable CSS -->
        <link rel="icon" type="image/x-icon" href="css\images\sms_mobile_message_chat_icon_256511.ico">
        <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
        <!-- jQuery Library -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <!-- Datatable JS -->
        <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
        <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "100%" 
        }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
body,td,th {
	color: #000000;
}
.style1 {
	font-family: Verdana;
    color:red;
	font-size: 15px;
	font-weight: bold;
}
.style2 {
	font-family: Verdana;
	font-size: 24px;
	font-weight: bold;
	color: #003366;
}
-->
    </style></head>
    <body >
    <div align="center"><span class="style1"><h1> Vande Bharat Maintenance Support Portal - Documents Search</h1></span>    </div>
	<div>&nbsp;&nbsp;</br></div>

        <div >
            <!-- Custom Filter -->
            <table align="center">
               
					<tr>
                    <td>
                        <select  id='searchByDept'>
                            <option value=''>--- Select Department ---</option>
<?php	
   include 'db_config.php';						
   $sql = "SELECT distinct UPPER(department) as department FROM doc_table order by department";
   $result = mysqli_query($con,$sql);
   
   while($row = mysqli_fetch_array($result)) {
      echo "<option value='" . $row['department'] . "'>" . $row['department'] . "</option>";
   }
?>
                        
						</select>
                    </td>
                    <td>
                        <select  id='searchByCoachType'>
                            <option value=''>--- Select Coach_Type ---</option>
<?php	
				
   $sql = "SELECT distinct UPPER(coach_type) as coach_type FROM doc_table order by coach_type";
   $result = mysqli_query($con,$sql);
   
   while($row = mysqli_fetch_array($result)) {
      echo "<option value='" . $row['coach_type'] . "'>" . $row['coach_type'] . "</option>";
   }
?>
						</select>
                    </td>

                    <td>
                        <select  id='searchByDocType'>
                            <option value=''>--- Select Document_Type ---</option>
<?php	
				
   $sql = "SELECT distinct UPPER(doc_type) as doc_type FROM doc_table order by doc_type";
   $result = mysqli_query($con,$sql);
   
   while($row = mysqli_fetch_array($result)) {
      echo "<option value='" . $row['doc_type'] . "'>" . $row['doc_type'] . "</option>";
   }
?>
						</select>
                    </td>

                    <td>
                        <select  id='searchByCategory'>
                            <option value=''>--- Select Category ---</option>
<?php	
				
   $sql = "SELECT distinct UPPER(category) as category FROM doc_table order by category";
   $result = mysqli_query($con,$sql);
   
   while($row = mysqli_fetch_array($result)) {
      echo "<option value='" . $row['category'] . "'>" . $row['category'] . "</option>";
   }
?>
						</select>
                    </td>
                </tr>
            </table>
            
            <!-- Table -->
			<div class="content" style="border:1px solid black; align:center; padding:3px">

            
			<table id="docTable" class="display compact cell-border" style="width:100%">

                <thead>
                <tr>
                    <th bordercolor="#F4F4F4" bgcolor="#003366"><font color="White">SLNO</th>
                    <th bordercolor="#F4F4F4" bgcolor="#003366"><font color="White">DATE</th>
                    <th bordercolor="#F4F4F4" bgcolor="#003366"><font color="White">VERSION</th>
                    <th bordercolor="#F4F4F4" bgcolor="#003366"><font color="White">DEPARTMENT</th>
                    <th bordercolor="#F4F4F4" bgcolor="#003366"><font color="White">COACH_TYPE</th>
                    <th bordercolor="#F4F4F4" bgcolor="#003366"><font color="White">DOC_TYPE</th>
                    <th bordercolor="#F4F4F4" bgcolor="#003366"><font color="White">CATEGORY</th>
                    <th bordercolor="#F4F4F4" bgcolor="#003366"><font color="White">DESCRIPTION</th>
                </tr>
                </thead>
            </table>
        </div>
        
        <!-- Script -->
   <!-- Script -->
<script>
$(document).ready(function(){
    var dataTable = $('#docTable').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'paging': false,
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url':'ajaxfile.php',
            dataSrc: 'aaData', // Map data to aaData property in your JSON response
            'data': function(data){
                // Read values
                var department = $('#searchByDept').val();
                var coach_type = $('#searchByCoachType').val();
                var doc_type = $('#searchByDocType').val();
                var category = $('#searchByCategory').val();

                // Append to data
                data.searchByDept = department;
                data.searchByCoachType = coach_type;
                data.searchByDocType = doc_type;
                data.searchByCategory = category;
            }
        },
        'columns': [
            { data: 'id' },
            { data: 'date' },
            { data: 'version' },
            { data: 'department' },
            { data: 'coach_type' },
            { data: 'doc_type' },
            { data: 'category' },
            { data: 'description' },
        ]
    });

    $('#searchByDept').change(function(){
        dataTable.draw();
    });

    $('#searchByCoachType').change(function(){
        dataTable.draw();
    });

    $('#searchByDocType').change(function(){
        dataTable.draw();
    });

    $('#searchByCategory').change(function(){
        dataTable.draw();
    });
});
</script>
    </body>

</html>

