<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>choisissez la categorie que vous souhaitez consulter</h2>
  
  <form action="index.php?uc=ctrlTroc&action=voirlesoffres" method=post>
    <div class="form-group">
      <label for="sel1">categorie </label>
      <select class="form-control" name="categorie" id="categorie" placeholder="Enter email">

        <option value="informatique">informatique</option>
      <option value="Electromenager">Electromenager</option>
    <option value="console/jeux">console/jeux</option>
    <option value="telephonie">telephonie</option>
    <option value="dvd/film">dvd/film</option>
    <option value="vehicule">vehicule</option>
    <option value="bricolage">bricolage</option>
    <option value="jardinage">jardinage</option>
    <option value="ameublement">ameublement</option>
    <option value="inclassable">Inclassable</option>
     </select>
      
     
    </div> 
<input type="submit" class="btn btn-primary" value="valider categorie">
  </form>
</div>

</body>
</html>