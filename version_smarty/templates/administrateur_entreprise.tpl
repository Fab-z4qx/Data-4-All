{include file='header.tpl'}
<div id="page_admin_entreprise">
<form method="post" action="reception.php" enctype="multipart/form-data">
     <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label>
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
     <input type="submit" name="submit" value="Envoyer" />
</form>
</div>

{include file='footer.tpl'}