<?php 
$q=mysqli_query($con,"select * from register ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No Students Have Regoistered For Exams.</h2>";
}
else
{
?>
<html>

<head>
<script src="jquery.js"></script>
<script lang="javascript" src="xlsx.full.min.js"></script>
<script lang="javascript" src="FileSaver.min.js"></script>

<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
</head>


<body>
<img id="head" style="width: " src = "../images/bmsheader.jpeg">
<h2 style="color:#00FFCC">All Users</h2>

<table class="table table-bordered" id="mytable">
	<Tr class="success">
		<th>Sr.No</th>
		<th>USN</th>
		<th>Name</th>
		<th>E-mail</th>
		<th>Phone</th>
		<th>Delete</th>
	</Tr>


<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

	echo "<Tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$row['usn']."</td>";
	echo "<td>".$row['fname']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['ph']."</td>";

?>

<Td><a href="javascript:DeleteUser('<?php echo $row['usn']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td><?php 

echo "</Tr>";
$i++;
}
		?>	
		
</table>
<button id="button-a">Create Excel</button>
<?php }?>



<script>
        var wb = XLSX.utils.table_to_book(document.getElementById('mytable'), {sheet:"Sheet JS"});
        var wbout = XLSX.write(wb, {bookType:'xlsx', bookSST:true, type: 'binary'});
        function s2ab(s) {
                        var buf = new ArrayBuffer(s.length);
                        var view = new Uint8Array(buf);
                        for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
                        return buf;
        }
        $("#button-a").click(function(){
        saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'test.xlsx');
        });
</script>

</body>
</html>


