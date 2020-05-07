<table border="50" width="200" height="30" >
	<tr>
		<td width="60">Adınız</td>
		<td>:</td>
		<td><?php echo $_POST["ad"];?></td>
	</tr>
		
	<tr>
		<td width="60">Sifre</td>
		<td>:</td>
		<td><?php echo $_POST["sifre"];?></td>
	</tr>
	
	<tr>
		<td width="60">E-mail</td>
		<td>:</td>
		<td><?php echo $_POST["e-mail"];?></td>
	</tr>
	
	<tr>
		<td width="60">Hobileriniz</td>
		<td>:</td>
		<td>
			<?php if(isset($_POST['Hobbies']))
		{
			$check=implode(",", $_POST['Hobbies']);
			echo($check);
		}?>
		</td>
	</tr>
	
	<tr>		
		<td width="60">Hangi takımları tutuyorsunuz?</td>
		<td>:</td>
		<td><?php $takim=array(1=>"ss","fb","gs","bjk"); 
		echo$takim[$_POST["takim"]];?>
		</td>
	</tr>
	
	<tr>
		<td width="60">aciklama</td>
		<td>:</td>
		<td><?php echo $_POST["aciklama"];?></td>
	</tr>
	
	<tr>		
		<td width="60">Yaşadığınız şehir</td>
		<td>:</td>
		<td><?php 
		echo $_POST["sehirler"];?>
		</td>
	</tr>
	
</table>