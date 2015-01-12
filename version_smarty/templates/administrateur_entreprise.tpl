{include file='header.tpl'}
<div >
<form method="post" action="reception.php" enctype="multipart/form-data">
4     <label class="black" for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
5     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
6     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
11     <input type="submit" name="submit" value="Envoyer" />
12</form>
</div>

{include file='footer.tpl'}