<html>
    <head>
        <title>Form Buku</title>
        <style>
            input{
                margin-top: 10px;
                display: block;
            }
        </style>
    </head>
    <body>
        <?php
            require "kelas-buku.php";
            $buku = new Buku("tampil-buku.php", "get");

            echo $buku->form_header();
            echo $buku->form_label("Judul :");
            echo $buku->form_input("text", "judul", "");
            echo $buku->form_label("Penulis :");
            echo $buku->form_input("text", "penulis", "");
            echo $buku->form_label("Penerbit :");
            echo $buku->form_input("text", "penerbit", "");
            echo $buku->form_label("Tahun :");
            echo $buku->form_input("text", "tahun", "");
            echo $buku->form_input("submit", "simpan", "Simpan");
            echo $buku->form_footer();
           
        ?>
    </body>
</html>