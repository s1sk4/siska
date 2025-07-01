<h1>Form Tambah</h1>
<form action="/home/tambah" method="post"> //menambahkan method="post" agar data dikirim dengan metode POST dan cocok dengan pengecekan di controller
    <label>Nama</label>
    <input type="text" name="nama"><br> // mengganti namaa menjadi nama agar sesuai dengan field yang diproses di controller
    <label>Email</label>
    <input type="email" name="email"><br> //mengganti type="text" menjadi type="email" 
    <button type="submit">Kirim</button>  //menambahkan type submit pada tombol
</form>
