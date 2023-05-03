<h3>Tambah Data User</h3>
<form method="POST" action="tbuser.php">
     <input type="hidden" name="opsi" value="store">

     <div>
        nama lengkap
        <input type="text" name="txNAMA">

     </div>
     <div>
         email
        <input type="email" name="txEMAIL">

     </div>
     <div>
         user name
        <input type="text" name="txUSERNAME">

     </div>
     <div>
         password
        <input type="password" name="txPASS1">

     </div>
     <div>
         verifikasi password
        <input type="password" name="txPASS2">

     </div>

<button type="submit">Buat Data User</buttton>

</form>