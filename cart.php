<?php
if(isset($_GET['id']))
		{
			$ID = $_GET['id'];
		}
	else 
	{ $ID=0;
		}
	if(isset($_GET['action']))
		{
			$action = $_GET['action'];
		}
	else{
			$action="empty";
		}
	switch($action){
		case "add":
			if(isset($_SESSION['cart'][$ID]))
			{
				$_SESSION['cart'][$ID]++;
			}
			else
			{
				$_SESSION['cart'][$ID]=1;
			}
		break;
		case "remove":
			if(isset($_SESSION['cart'][$ID]))
				{
					$_SESSION['cart'][$ID]--;
					if($_SESSION['cart'][$ID]==0)
					{
						unset($_SESSION['cart'][$ID]);
					}
				}
		break;
		case "empty":
		if(isset($_SESSION['cart'][$ID]))
		{
			unset($_SESSION['cart'][$ID]);
		}
		break;
		case "emptyall":
			unset($_SESSION['cart']);//total cart get empty u can use as a button to to empty whole cart.
		break;
		}
		//display the output
		
		echo "<h1>Cart</h1>";
		if(isset($_SESSION['cart']))
			{	 //this is header of the table
					echo"<table>";
					echo "<tr>"; 
					echo "<th>Title</th>"; 
					echo "<th>Price</th>";
					echo "<th>Quantity</th>";
					echo "<th>Reduce</th>";
					echo "<th>Total</th>";
					echo "<th>Delete</th>";
					echo "</tr>";
				$total=0;
				$check_tquantity=0;
				foreach($_SESSION['cart'] as $ID => $x)
				{ 
					$temp1 = mysql_query("SELECT * FROM books WHERE id_book=$ID") or die(mysql_error());
					$check_item=mysql_fetch_array($temp1);
					$check_title=$check_item['Title'];
					$check_price=$check_item['Price'];
					$check_sum=$check_price * $x;//total of ech item quantity * price
					$check_tquantity=$check_tquantity+$x;//total quantity
					$total=$total+$check_sum;//total amount
					echo "<tr>"; 
					echo "<td>".$check_title. "</td> "; 
					echo "<td>$".$check_price. " </td>";
					echo "<td>$x</td>";
					echo '<td><a href="index.php?page=cart&action=remove&id='.$ID.'"><img src=icons/Arrow-Down.ico height=20 width=20></a></td>';
					echo "<td>$"."$check_sum". " </td>";
					echo '<td><a href="index.php?page=cart&action=empty&id='.$ID.'"><img src="icons/Symbol-Delete.ico"  height=20 width=20></a></td>';
					echo"</tr>";
				}
			echo"<tr>";
			echo"<td>INVOCE INFO</td>";
			echo"<td>Total  Items</td>";
			echo "<td>".$check_tquantity. " </td>";
			
			echo"<td align = 'right' > AMOUNT= </td>";
			
			echo"<td>$"."$total"."</td>";
			echo"<td><img src=icons/smile.ico height=40 width=40></td>";
			echo"</tr>";
			echo"</table>";
		}
		else
		{
			echo "cart is empty";
		}
		?>