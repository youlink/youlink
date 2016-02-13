// <?php 
// 		$isheadmin = 'yes';
//      	if (!(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] == $isheadmin)) { 
//      		header("Refresh:0; url=/user/products");
//      	}
// ?>
<div class="containeruseradministration">
	<!-- Example row of columns -->

	<div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>id_user</th>
                <th>salutaion</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>email</th>
                <th>password</th>
                <th>nickname</th>
                <th>phone</th>
                <th>dateOfBirth</th>
                <th>isAdmin</th>
              </tr>
            </thead>
            <tbody>
            
 <?php 
 	$counter = 0;
	foreach ($users as $user) { 
	$counter++;
?>
 <?php 
 if (isset($userToEdit) && $user->id == $userToEdit) {
 ?>
 
 <form method="post" action="/administration/save">
 
 <input type="hidden" name="id" value="<?= $product->id ?>"/>
               <tr>
                <td><?= $product->id ?></td>
                <td><input class="admininput" type="text" id="designation" value="<?php echo $product-> designation?>" name="designation"></td>
                <td><input class="admininput" type="number" id="price" value="<?php echo $product-> price?>" step="0.05" min="0" name="price"></td>
                <td><input class="admininput" type="number" id="available" min="0" value="<?php echo $product-> available?>" name="available"></td>
                <td><input class="admininputarea" id="description" type="textarea" value="<?php echo $product-> description?>" name="description"></td>
                <td><input class="admininput" id="categorie" type="text" value="<?php echo $product-> categorie?>" name="categorie"></td>
                <td><input class="admininput" id="image" type="text" value="<?php echo $product-> image?>" name="image"></td>
                <td><input class="admininput" id="manufacturerimage" type="text" value="<?php echo $product-> manufacturerimage?>" name="manufacturerimage"></td>
                <td><input type="submit" id="save" value="Speichern"></td>
              </tr>
              
               </form>
 
  <?php 
 } else
 	
 	
 	
 
 
 
 
 
 
 {
 ?>
              <tr>
                <td><?= $product->id ?></td>
                <td><?= $product->designation ?></td>
                <td><?= $product->price?></td>
                <td><?= $product->available?></td>
                <td><?= $product->description?></td>
                <td><?= $product->categorie?></td>
                <td><?= $product->image?></td>
                <td><?= $product->manufacturerimage?></td>
                <td><a href="/admin/edit/<?= $product->id ?>"><span class=" glyphiconedit glyphicon-edit" aria-hidden="true"></span></a></td>
                <td><a href="/admin/delete/<?= $product->id ?>"><span class=" glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
              </tr>

  <?php 
	} 
}
 ?>
 		<form method="post" action="/admin/add">
			<tr>
                <td><span class=" glyphicon glyphicon-plus" aria-hidden="true"></td>
                <td><input class="adminadd" type="text" placeholder="Produktname" name="designation"></td>
                <td><input class="adminadd" type="number" step="0.05" min="0" name="price" placeholder="Preis"></td>
                <td><input class="adminadd" type="number" min="0" name="available" placeholder="Verfügbarkeit"></td>
                <td><input class="admininputarea" type="textarea" name="description" placeholder="Beschreibung"></td>
                <td><input class="adminadd" type="text" name="categorie" placeholder="Kategorie"></td>
                <td><input class="adminadd" type="text" name="image" placeholder="Produktbild"></td>
                <td><input class="adminadd" type="text" name="manufacturerimage" placeholder="Herstellerbild"></td>
                <td><input type="submit" id="add" name="add" value="Erstellen">
                </br></br></br>
                
                
<!-- 				<form action="/admin/newpicture" method="POST" enctype="multipart/form-data"> -->
<!--          		<input type="file" name="image" /> -->
<!--         		<input type="submit" name="Bild hochladen"/> -->
<!--      			</form> -->
     			
     			
     		 </td>
            </tr>
             </form>
            </tbody>
          </table>
          
        </div>
      </div>

 </div>